<?php
require_once 'config/global.php';

 
class AfiliacionesController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
public function index(){
	
				//Creamos el objeto usuario
	session_start();
	
	
	
			
		$paises=new PaisesModel();
		$resultPais = $paises->getAll("nombre_pais");
		
		$provincias=new ProvinciasModel();
		$resultProv = $provincias->getAll("nombre_provincia");
	
		$ocupaciones = new OcupacionesModel();
		$resultOcu = $ocupaciones->getAll("nombre_ocupaciones");
		
		
		
		$afiliaciones = new UsuariosModel();
		$fichas = new FichasModel();
		$where = "nombre_fichas LIKE '%%' ORDER by consultas_fichas DESC LIMIT 4";
		$resultVis = $fichas->getBy($where);
		
		$resultEdit = "";
			
		if (isset ($_GET["id_usuario"])   )
			{
				$_id_usuario = $_GET["id_usuario"];
				$where    = "rol.id_rol = usuarios.id_rol AND estado.id_estado = usuarios.id_estado AND usuarios.id_usuario = '$_id_usuario' "; 
				$resultEdit = $usuarios->getCondiciones($columnas ,$tablas ,$where, $id); 
			}
		$this->view("Afiliaciones",array(
				"resultSet"=>"", "resultPais"=>$resultPais, "resultProv" =>$resultProv, "resultEdit" =>"", "resultOcu"=>$resultOcu, "resultVis"=>$resultVis
			));
		
		
	}
	
	public function InsertaAfiliados(){
		
			$afiliaciones = new UsuariosModel();
			$res="";
			session_start();
			
			$paises=new PaisesModel();
			$resultPais = $paises->getAll("nombre_pais");
			
			$provincias=new ProvinciasModel();
			$resultProv = $provincias->getAll("nombre_provincia");
			
			$ocupaciones = new OcupacionesModel();
			$resultOcu = $ocupaciones->getAll("nombre_ocupaciones");
			$afiliaciones = new UsuariosModel();
			$fichas = new FichasModel();
			$where = "nombre_fichas LIKE '%%' ORDER by consultas_fichas DESC LIMIT 4";
			$resultVis = $fichas->getBy($where);
			
			///INSERTAMOS EL AFILIADO EN USUARIO
			if (isset($_POST["nombres_usuario"]) )
			{
							
				$_nombres_usuario 	= strtoupper ( $_POST["nombres_usuario"] ); 
				$_apellidos_usuario  = strtoupper ( $_POST["apellidos_usuario"] );
				$_usuario_usuario   = $_POST["correo_usuario"];
				$_clave_usuario     = $afiliaciones->encrypt($_POST["clave_usuario"]);
				$_clave_usuario1     = $_POST["clave_usuario"];
				$_id_pais           = $_POST["paises"];
				$_id_provincia      = $_POST["provincias"];
				$_telefono_usuario  = $_POST["telefono_usuario"];
				$_celular_usuario   = $_POST["celular_usuario"];
				$_correo_usuario    = $_POST["correo_usuario"];
				$_id_rol            = 3;   // afiliados
				$_id_estado         = 2; //sin activar
				$_clave_activacion_usuario = $afiliaciones->encrypt($_POST["correo_usuario"]);
				$_fecha_nacimiento = $_POST["fecha_nacimiento_usuario"];
				$_id_ocupaciones    = $_POST["ocupaciones"];
				$_extra_ocupaciones_usuario    = $_POST["extra_ocupaciones_usuario"];
				
				
				if($_fecha_nacimiento !=""){
					
					$funcion = "ins_usuarios";
					$parametros = " '$_nombres_usuario','$_apellidos_usuario', '$_usuario_usuario', '$_clave_usuario'
					,'$_id_pais', '$_id_provincia', '$_telefono_usuario', '$_celular_usuario'
					,'$_correo_usuario', '$_id_rol','$_id_estado', '$_clave_activacion_usuario'
					, '$_fecha_nacimiento' , '$_id_ocupaciones' , '$_extra_ocupaciones_usuario'  ";
					$afiliaciones->setFuncion($funcion);
					$afiliaciones->setParametros($parametros);
					$resultado=$afiliaciones->Insert();
					$res="1";
				}else{
					
					$res="0";
				}
				
			
				if($res==1){
					
					$baseUrl = URLVADEMANO;
					$controladorAccion = "controller=Afiliaciones&action=ValidarAfiliado&clave_activacion=" . $_clave_activacion_usuario;
					$activacion = $baseUrl.$controladorAccion;
					$cabeceras = "MIME-Version: 1.0 \r\n";
					$cabeceras .= "Content-type: text/html; charset=utf-8 \r\n";
					$cabeceras .= "From: info@masoft.net \r\n";
					$destino="$_correo_usuario";
					$asunto="Afiliacion";
					$fecha=date("d/m/y");
					$hora=date("H:i:s");
					//align='center'
					$resumen="
					
					<table rules='all'>
					<tr style='background:#7acb5a'><td WIDTH='1000' HEIGHT='50'><rigth><img src='http://186.4.203.42:4000/Vademano/view/images/logo_vademano.png' WIDTH='200' HEIGHT='80' /></rigth></td></tr>
					</tabla>
					<p><table rules='all'></p>
					<tr style='background: #FFFFFF;'><td  WIDTH='1000' align='center'><b> BIENVENIDO A VADEMANO </b></td></tr></p>
					<tr style='background: #FFFFFF;'><td  WIDTH='1000' align='justify'>Bienvenido a Vademano veterinario el portal digital que reúne toda la información  de relevancia relacionada con los productos  farmacéuticos de uso veterinario que se comercializan, busca proveer a médicos veterinarios, técnicos, especialistas y público en general  el más completo vademécum digital.
					El Vademano Veterinario está diseñado como una herramienta web moderna, versátil y fácil de utilizar, que se ajusta a la versatilidad de los dispositivos de comunicación actual para que la búsqueda de información se convierta en una tarea sencilla que puede ser realizada a través de múltiples combinaciones de criterios:
					efecto terapéutico, forma farmacéutica, especies, etc.; asimismo dispondrá de la información de los productos en formato PDF, opción para imprimir, entre otras múltiples ventajas.</td></tr>
					</tabla>
					<p><table rules='all'></p>
					<tr style='background: #FFFFFF;'><td  WIDTH='1000' align='center'><b> ESTAS REGISTRADO EN VADEMANO</b></td></tr>
					<tr style='background: #FFFFFF;'><td WIDTH='1000'><b> Nombre: </b>$_nombres_usuario</td></tr>
					<tr style='background: #FFFFFF;'><td WIDTH='1000'><b> Apellido: </b>$_apellidos_usuario </td></tr>
					<tr style='background: #FFFFFF;'><td WIDTH='1000'></td></tr>
					</tabla>
					<p><table rules='all'></p>
					<tr style='background: #FFFFFF;'><td  WIDTH='1000' align='center'><b> TUS DATOS DE ACCESO SON: </b></td></tr>
					<tr style='background: #FFFFFF;'><td WIDTH='1000'><b> Usuario: </b>$_correo_usuario </td></tr>
					<tr style='background: #FFFFFF;'><td WIDTH='1000'><b> Clave: </b>$_clave_usuario1 </td></tr>
					<tr style='background: #FFFFFF;'><td WIDTH='1000'></td></tr>
					</tabla>
					<p><table rules='all'></p>
					<tr style='background: #FFFFFF;'><td WIDTH='1000' align='center'><b>  LINK DE ACTIVACIÓN </b></td></tr>
					<tr style='background: #FFFFFF;'><td WIDTH='1000' align='center'><a href=$activacion>Activación</A></td></tr>
					<tr style='background: #FFFFFF;'><td WIDTH='1000'></td></tr>
					</table>
					<p><table rules='all'></p>
					<tr style='background:#1C1C1C'><td WIDTH='1000' HEIGHT='50' align='center'><font color='white'>Vademano. - <a href='http://www.vademano.com'><FONT COLOR='#7acb5a'>www.vademano.com</FONT></a> - Copyright © 2017-</font></td></tr>
					</table>";
					
					if (mail("$destino","Afiliaciones","$resumen","$cabeceras"))
					{
						$this->view("Afiliaciones",array(
								 "resultPais"=>$resultPais, "resultProv" =>$resultProv, "resultOcu"=>$resultOcu, "resultEdit" =>"", "resultado"=>"true", "resultVis"=>$resultVis
						));
					
						die();
					
					}
					else
					{
						$this->view("Afiliaciones",array(
								 "resultPais"=>$resultPais, "resultProv" =>$resultProv, "resultOcu"=>$resultOcu, "resultado"=>"false", "resultVis"=>$resultVis
						));
					
						die();
					
					}
					
				}else{
					
					$this->view("Afiliaciones",array(
							 "resultPais"=>$resultPais, "resultProv" =>$resultProv, "resultOcu"=>$resultOcu, "resultado"=>"false", "resultVis"=>$resultVis
					));
					die();
					
				}
				
				
				
					
				
				
			}else{
				
				$this->redirect("Afiliaciones", "index");
				
			}
			
		
			
	}
	
	public function borrarId()
	{
		session_start();
		if(isset($_GET["id_usuario"]))
		{
			$id_usuario=(int)$_GET["id_usuario"];
	
			$usuarios=new UsuariosModel();
				
			$usuarios->deleteBy(" id_usuario",$id_usuario);
				
				
		}
	
		$this->redirect("Usuarios", "index");
	}
	
    
    
    public function Login(){
    
    	session_start();
    	//Creamos el objeto usuario
    	$usuarios=new UsuariosModel();
    
    	//Conseguimos todos los usuarios
    	$allusers=$usuarios->getLogin();
    	 
    	//Cargamos la vista index y l e pasamos valores
    	$this->view("Login",array(
    			"allusers"=>$allusers
    	));
    }
    public function Bienvenida(){
    
    	session_start();
    	//Creamos el objeto usuario
    	$usuarios=new UsuariosModel();
    	
    	//Conseguimos todos los usuarios
    	$allusers=$usuarios->getLogin();
    	
    	//Cargamos la vista index y l e pasamos valores
    	$this->view("Bienvenida",array(
    			"allusers"=>$allusers
    	));
    }
    
    
    
    
    public function Loguear(){
    	if (isset ($_POST["usuario"]) && ($_POST["clave"] ) )
    	
    	{
    		$usuarios=new UsuariosModel();
    		$_usuario = $_POST["usuario"];
    		$_clave =   $_POST["clave"];
    		 
    		
    		$where = "  usuario_usuario = '$_usuario' AND  clave_usuario ='$_clave' ";
    	
    		$result=$usuarios->getBy($where);

    		$usuario_usuario = "";
    		$id_rol  = "";
    		$nombre_usuario = "";
    		$correo_usuario = "";
    		$ip_usuario = "";
    		
    		if ( !empty($result) )
    		{ 
    			foreach($result as $res) 
    			{
    				$id_usuario  = $res->id_usuario;
    				$usuario_usuario  = $res->usuario_usuario;
	    			$id_rol           = $res->id_rol;
	    			$nombre_usuario   = $res->nombre_usuario;
	    			$correo_usuario   = $res->correo_usuario;
	    			
    			}	
    			//obtengo ip
    			$ip_usuario = $usuarios->getRealIP();
    			
    			
    			///registro sesion
    			$usuarios->registrarSesion($id_usuario, $usuario_usuario, $id_rol, $nombre_usuario, $correo_usuario, $ip_usuario);
    			
    			//inserto en la tabla
    			$_id_usuario = $_SESSION['id_usuario'];
    			$_ip_usuario = $_SESSION['ip_usuario'];
    			
    			$sesiones = new SesionesModel();

    			$funcion = "ins_sesiones";
    			
    			$parametros = " '$_id_usuario' ,'$_ip_usuario' ";
    			$sesiones->setFuncion($funcion);
    			
    			$sesiones->setParametros($parametros);
    			
    			
    			$resultado=$sesiones->Insert();
    			
    		    $this->view("Bienvenida",array(
    				"allusers"=>$_usuario
	    		));
    		}
    		else
    		{
    			
	    		$this->view("Login",array(
	    				"allusers"=>""
	    		));
    		}
    		
    	} 
    	else
    	{
    		$this->view("Login",array(
    				"allusers"=>""
    		));
    		
    	}
    	
    }
    
	public function  cerrar_sesion ()
	{
		session_start();
		session_destroy();
		$this->redirect("Usuarios", "Loguear");
	}
	
	
	public function Actualiza()
	{
		session_start();
		if (isset(  $_SESSION['usuario_usuario']) )
		{
			//Creamos el objeto usuario
			$usuarios = new UsuariosModel();
		
						
					
				$resultEdit = "";
					
				$_id_usuario = $_SESSION['id_usuario'];
				$where    = " usuarios.id_usuario = '$_id_usuario' ";
				$resultEdit = $usuarios->getBy($where);
				

				if ( isset($_POST["guardar"]) )
				{

					$_nombre_usuario     = $_POST["nombre_usuario"];
					$_clave_usuario      = $_POST["clave_usuario"];
					$_telefono_usuario   = $_POST["telefono_usuario"];
					$_celular_usuario    = $_POST["celular_usuario"];
					$_correo_usuario     = $_POST["correo_usuario"];
					$_usuario_usuario     = $_POST["usuario_usuario"];
					
					$colval   = " nombre_usuario = '$_nombre_usuario' , clave_usuario = '$_clave_usuario'   , telefono_usuario = '$_telefono_usuario' ,  celular_usuario = '$_celular_usuario' , correo_usuario = '$_correo_usuario' , usuario_usuario = '$_usuario_usuario'    ";
					$tabla    = "usuarios";
					$where    = " id_usuario = '$_id_usuario' ";
					
					$resultado=$usuarios->UpdateBy($colval, $tabla, $where);
					
					
					$this->view("Login",array(
							"allusers"=>""
					));
					
					
				}
				else
				{
					$this->view("ActualizarUsuario",array(
							"resultEdit" =>$resultEdit
								
					));
					
				}
				
				
					
		
			
		
		}
		else
		{
			$this->view("ErrorSesion",array(
			"resultSet"=>""
			));
					
		}
		
	}
	
	public function ActualizarDatos()
	{
		session_start();
		if (isset(  $_SESSION['usuario_usuario']) )
		{
			//Creamos el objeto usuario
			$usuarios = new UsuariosModel();
	
	
				
			$resultEdit = "";
				
			$_id_usuario = $_SESSION['id_usuario'];
			$where    = " usuarios.id_usuario = '$_id_usuario' ";
			$resultEdit = $usuarios->getBy($where);
	
	
			if ( isset($_POST["btn_guardar"]) )
			{
	
				$_nombre_usuario     = $_POST["nombres_usuario"];
			    $_apellidos_usuario  = $_POST["apellidos_usuario"];
  			    $_clave_usuario      = $usuarios->encrypt( $_POST["clave_usuario"]);
				$_telefono_usuario   = $_POST["telefono_usuario"];
				$_celular_usuario    = $_POST["celular_usuario"];
				$_correo_usuario     = $_POST["correo_usuario"];
				$_usuario_usuario     = $_POST["correo_usuario"];
				
					
				$colval   = " nombres_usuario = '$_nombre_usuario', apellidos_usuario = '$_apellidos_usuario' , clave_usuario = '$_clave_usuario'   , telefono_usuario = '$_telefono_usuario' ,  celular_usuario = '$_celular_usuario' , correo_usuario = '$_correo_usuario' , usuario_usuario = '$_correo_usuario'      ";
				$tabla    = "usuarios";
				$where    = " id_usuario = '$_id_usuario' ";
					
				$resultado=$usuarios->UpdateBy($colval, $tabla, $where);
					
					
				$this->view("Login",array(
						"resultado"=>""
				));
					
					
			}
			else
			{
				$this->view("ActualizarDatos",array(
						"resultEdit" =>$resultEdit
	
				));
					
			}
	
	
				
	
				
	
		}
		else
		{
			$this->view("ErrorSesion",array(
					"resultSet"=>""
			));
				
		}
	
	}
	
	public function ValidarAfiliado()
	{
		
		$afiliaciones = new UsuariosModel();
		$resultSet = "";
		
		$fichas = new FichasModel();
		
		$where = "nombre_fichas LIKE '%%' ORDER by consultas_fichas DESC LIMIT 4";
		$resultVis = $fichas->getBy($where);
		
		if (isset($_GET["clave_activacion"]))
		{
			$_clave_activacion = $_GET["clave_activacion"];
			
			$where1 = "clave_activacion_usuario = '$_clave_activacion'";
		   
			try {
				$resultSet = $afiliaciones->getBy($where1);
				
				$this->view("ValidaAfiliado",array(
						"resultSet"=>$resultSet, "resultVis"=>$resultVis
		
				));
			} 
			catch (Exception $e) {
			}
			
		    
		}
		
		if (isset( $_POST["id_usuario"] ) )
		{
			$afiliaciones = new UsuariosModel();
			$resultado = "";
			
			$_id_usuario = $_POST["id_usuario"];
			$colval  = " id_estado = 1 ";
			$tabla   = "usuarios";
			$where   = "id_usuario = '$_id_usuario'";
			
			$afiliaciones->UpdateBy($colval, $tabla, $where);
			
			
			
			$this->view("Index",array(
					"resultado"=>$resultado, "resultVis"=>$resultVis
		
			));
		}
		
		
	
	}
	public function VistaActualizarDatos(){
	
		//Creamos el objeto usuario
		session_start();
		
		$paises=new PaisesModel();
		$resultPais = $paises->getAll("nombre_pais");
	
		$provincias=new ProvinciasModel();
		$resultProv = $provincias->getAll("nombre_provincia");
	
		$ocupaciones = new OcupacionesModel();
		$resultOcu = $ocupaciones->getAll("nombre_ocupaciones");
	
		$usuarios = new UsuariosModel();
	
		$afiliaciones = new UsuariosModel();
		$_id_usuario = $_SESSION['id_usuario'];
		
			$columnas = "usuarios.id_usuario, 
						  usuarios.nombres_usuario, 
						  usuarios.apellidos_usuario, 
						  usuarios.fecha_nacimiento_usuario, 
						  usuarios.usuario_usuario, 
						  usuarios.clave_usuario, 
					 	  paises.id_pais, 
						  paises.nombre_pais, 
						  provincias.nombre_provincia, 
						  usuarios.telefono_usuario, 
						  usuarios.celular_usuario, 
						  usuarios.correo_usuario, 
						  rol.nombre_rol, 
						  estado.nombre_estado, 
						  usuarios.clave_activacion_usuario, 
						  usuarios.extra_ocupacion_usuario, 
					      ocupaciones.id_ocupaciones,
						  ocupaciones.nombre_ocupaciones"; 
			$tablas   = "public.usuarios, 
						  public.rol, 
						  public.estado, 
						  public.paises, 
						  public.provincias, 
						  public.ocupaciones";
			$where    = " rol.id_rol = usuarios.id_rol AND
						  estado.id_estado = usuarios.id_estado AND
						  paises.id_pais = usuarios.id_pais AND
						  provincias.id_provincia = usuarios.id_provincia AND
						  ocupaciones.id_ocupaciones = usuarios.id_ocupaciones AND   usuarios.id_usuario = '$_id_usuario' ";
			$id       = "usuarios.id_usuario";
		
			
		//Conseguimos todos los usuarios
		//$resultSet=$usuarios->getCondiciones($columnas ,$tablas ,$where, $id);
		$resultEdit = "";
		
		
			//$where    = "rol.id_rol = usuarios.id_rol AND estado.id_estado = usuarios.id_estado AND usuarios.id_usuario = '$_id_usuario' ";
			$resultEdit = $usuarios->getCondiciones($columnas ,$tablas ,$where, $id);
		
		$this->view("ActualizarDatos",array(
				"resultSet"=>"", "resultPais"=>$resultPais, "resultProv" =>$resultProv, "resultEdit" =>$resultEdit, "resultOcu"=>$resultOcu
		));
	}	
	
	public function registraAfiliadoMobil(){
	
		if(isset($_POST['action']))
		{
			switch ($_POST['action'])
			{
				case 'insertar' :
					$array=array('id'=>1);
					echo json_encode($array);
				break;
			}
		}else {
			$arrayUsuario = array('USER1'=>'clave1','USER2'=>'clave2','USER3'=>'clave3','USER4'=>'clave4','USER5'=>'clave5');
			
			$objUsuario = new stdClass();
			$listUsuario = [];
			
			foreach($arrayUsuario as $key=>$value)
			{
				$usuario = new stdClass();
			
				$usuario->nombre=$key;
				$usuario->clave=$value;
			
				$listUsuario[]= $usuario;
			}
			
			$objUsuario->listaUsuario=$listUsuario;
			
			echo json_encode($objUsuario);
		}
		
	}
}
?>
