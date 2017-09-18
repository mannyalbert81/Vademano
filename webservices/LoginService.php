<?php

require_once '../core/DB_Functions.php';
$db = new DB_Functions();


if (isset($_POST['usuario']) && isset($_POST['password']) ) {

	// receiving the post params
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	//$resultado["error"] = FALSE;
	$resultado = $db->Loguear($usuario, $password);
	echo json_encode($resultado);
	//print(json_encode(array("usuario_usuarios" => $usuario)));
	
}; 


?>