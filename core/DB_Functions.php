<?php


class DB_Functions {

	private $conn;

	// constructor
	function __construct() {
		require_once 'ConectarService.php';
		// connecting to database
		$db = new ConectarService();
		$this->conn = $db->conexion();
	}

	// destructor
	function __destruct() {
		 
	}

	/**
	 * Storing new user
	 * returns user details
	 */
	public function storeUser($name, $email, $password) {
		$uuid = uniqid('', true);
		$hash = $this->hashSSHA($password);
		$encrypted_password = $hash["encrypted"]; // encrypted password
		$salt = $hash["salt"]; // salt

		$stmt = $this->conn->prepare("INSERT INTO users(unique_id, name, email, encrypted_password, salt, created_at) VALUES(?, ?, ?, ?, ?, NOW())");
		$stmt->bind_param("sssss", $uuid, $name, $email, $encrypted_password, $salt);
		$result = $stmt->execute();
		$stmt->close();

		// check for successful store
		if ($result) {
			$stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$user = $stmt->get_result()->fetch_assoc();
			$stmt->close();

			return $user;
		} else {
			return false;
		}
	}

	/**
	 * Get user by email and password
	 */ 
	
	public function Loguear($usuario, $password) {

		 
		$clave = $this->encriptar($password);  
		$columnas = " nombre_usuarios, usuario_usuarios, correo_usuarios ";
		$tabla = "usuarios";
		$where = $where = "  usuario_usuarios = '$usuario' AND clave_usuarios = '$clave'  "; 
		
		$result= $this->getCondiciones($columnas, $tabla, $where);
		return  $result;
		
	}

	/**
	 * Check user is existed or not
	 */
	public function isUserExisted($email) {
		$stmt = $this->conn->prepare("SELECT email from users WHERE email = ?");

		$stmt->bind_param("s", $email);

		$stmt->execute();

		$stmt->store_result();

		if ($stmt->num_rows > 0) {
			// user existed
			$stmt->close();
			return true;
		} else {
			// user not existed
			$stmt->close();
			return false;
		}
	}

	/**
	 * Encrypting password
	 * @param password
	 * returns salt and encrypted password
	 */
	public function hashSSHA($password) {

		$salt = sha1(rand());
		$salt = substr($salt, 0, 10);
		$encrypted = base64_encode(sha1($password . $salt, true) . $salt);
		$hash = array("salt" => $salt, "encrypted" => $encrypted);
		return $hash;
	}

	/**
	 * Decrypting password
	 * @param salt, password
	 * returns hash string
	 */
	public function checkhashSSHA($salt, $password) {

		$hash = base64_encode(sha1($password . $salt, true) . $salt);

		return $hash;
	}

	
	
	

	public function encriptar($cadena){
		$key='rominajasonrosabal';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
		$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $cadena, MCRYPT_MODE_CBC, md5(md5($key))));
		return $encrypted; //Devuelve el string encriptado
	
	}
	
	public function getBy($talba, $where){
			
		$query=pg_query($this->conn, "SELECT * FROM $talba WHERE   $where ");
		$resultSet = array();
			
		while ($row = pg_fetch_object($query)) {
			$resultSet[]=$row;
		}
		return $resultSet;
	}
	
	public function getCondiciones($columnas, $talba, $where){
			
		$query=pg_query($this->conn, "SELECT $columnas FROM $talba WHERE   $where ");
		$resultSet = array();
			
		while ($row = pg_fetch_object($query)) {
			$resultSet[]=$row;
		}
		return $resultSet;
	}
	
	public function insertar($funcion,$parametros)
	{
		$query = "SELECT ".$funcion."(".$parametros.")";
		
		try{
			pg_query($this->conn, $query);
			$resultSet=1;
		}catch (Exception $Ex)
		{
			$resultSet = "0";		
		}		 
		return $resultSet;
	}
	
}

?>


