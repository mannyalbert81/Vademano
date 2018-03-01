
<?php
require_once 'config/global.php';
class UsuariosController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
public function index(){
		
	session_start();
	$existe="false";
	
			$usuarios = new UsuariosModel();

			$columnas = "usuarios.id_usuario, usuarios.nombres_usuario, usuarios.apellidos_usuario, paises.nombre_pais, 
  						   provincias.nombre_provincia, usuarios.fecha_nacimiento_usuario, usuarios.usuario_usuario, 
  						   usuarios.telefono_usuario, usuarios.celular_usuario, usuarios.correo_usuario,  
  						   rol.nombre_rol, estado.nombre_estado, ocupaciones.nombre_ocupaciones, usuarios.extra_ocupacion_usuario , usuarios.creado, usuarios.modificado ";
			$tablas   = "public.usuarios, public.estado, public.paises, public.provincias, public.rol, public.ocupaciones";
			$where    = "estado.id_estado = usuarios.id_estado AND paises.id_pais = usuarios.id_pais AND
  						 provincias.id_provincia = usuarios.id_provincia AND rol.id_rol = usuarios.id_rol AND ocupaciones.id_ocupaciones = usuarios.id_ocupaciones ";
			$id       = "usuarios.nombres_usuario"; 
			
			$resultSet=$usuarios->getCondiciones($columnas ,$tablas ,$where, $id);
			
			$resultMenu=array(0=>'--TODOS--',1=>'Nombre', 2=>'Apellido', 3=>'Usuario', 4=>'Rol', 5=>'Provincia');
			
			if (isset($_POST["btn_buscar"]))
			{
			
		
				$columnas1 = "usuarios.id_usuario, usuarios.nombres_usuario, usuarios.apellidos_usuario, paises.nombre_pais,
  						   provincias.nombre_provincia, usuarios.fecha_nacimiento_usuario, usuarios.usuario_usuario,
  						   usuarios.telefono_usuario, usuarios.celular_usuario, usuarios.correo_usuario,
  						   rol.nombre_rol, estado.nombre_estado, ocupaciones.nombre_ocupaciones, usuarios.extra_ocupacion_usuario , usuarios.creado, usuarios.modificado ";
				$tablas1   = "public.usuarios, public.estado, public.paises, public.provincias, public.rol, public.ocupaciones";
				$where1    = "estado.id_estado = usuarios.id_estado AND paises.id_pais = usuarios.id_pais AND
  						 provincias.id_provincia = usuarios.id_provincia AND rol.id_rol = usuarios.id_rol AND ocupaciones.id_ocupaciones = usuarios.id_ocupaciones ";
				$id1       = "usuarios.nombres_usuario";
					
			
				$criterio = $_POST["criterio_busqueda"];
				$contenido = $_POST["contenido_busqueda"];
			
			
					
				if ($contenido !="")
				{
						
					$where_0 = "";
					$where_2 = "";
					$where_3 = "";
					$where_4 = "";
					$where_5 = "";
					$where_6 = "";
			
						
					switch ($criterio) {
						case 0:
							$where_0 = " ";
							break;
						case 1:
								
								$where_6 = " AND  usuarios.nombres_usuario LIKE '$contenido%'  ";
								break;
						case 2:
								
								$where_2 = " AND usuarios.apellidos_usuario LIKE '$contenido%'  ";
								break;
								
						case 3:
									
								$where_3 = " AND  usuarios.usuario_usuario LIKE '$contenido%'  ";
								break;
						case 4:
							
								$where_4 = " AND rol.nombre_rol LIKE '$contenido%'  ";
							    break;
									
						case 5:
								
								$where_5 = " AND provincias.nombre_provincia LIKE '$contenido%'  ";
								break;
								
					}
						
						
						
					$where_to  = $where1 .  $where_0.  $where_2.  $where_3.  $where_4.  $where_5 .  $where_6;
						
						
					$resul = $where_to;
			
					//Conseguimos todos los usuarios con filtros
					$resultSet=$usuarios->getCondiciones($columnas1 ,$tablas1 ,$where_to, $id1);
						
						
						
						
				}
			}
			
			
			$resultEdit = "";
			
			if (isset ($_GET["id_usuario"])   )
				{
					$_id_usuario = $_GET["id_usuario"];
					$where    = "rol.id_rol = usuarios.id_rol AND estado.id_estado = usuarios.id_estado AND usuarios.id_usuario = '$_id_usuario' "; 
					$resultEdit = $usuarios->getCondiciones($columnas ,$tablas ,$where, $id); 
				}
			
					
			$this->view("Usuarios",array(
					"resultSet"=>$resultSet, "resultMenu"=>$resultMenu, "existe"=>$existe
			));
		
		
		
	}
	
	
	public function index_dos(){
	
		session_start();
		$_id_usuario = 0  ;
		$resultEdit = "";
		$_usuario_usuario = "";
		$_nuevo_usuario = "false";
		$existe="false";
		$usuario = new UsuariosModel();
		$columnas = "usuarios.id_usuario, usuarios.nombres_usuario, usuarios.apellidos_usuario, paises.nombre_pais,
  						   provincias.nombre_provincia, usuarios.fecha_nacimiento_usuario, usuarios.usuario_usuario,
  						   usuarios.telefono_usuario, usuarios.celular_usuario, usuarios.correo_usuario,
  						   rol.nombre_rol, estado.nombre_estado, ocupaciones.nombre_ocupaciones, usuarios.extra_ocupacion_usuario , usuarios.creado, usuarios.modificado ";
		$tablas   = "public.usuarios, public.estado, public.paises, public.provincias, public.rol, public.ocupaciones";
		$where    = "estado.id_estado = usuarios.id_estado AND paises.id_pais = usuarios.id_pais AND
  						 provincias.id_provincia = usuarios.id_provincia AND rol.id_rol = usuarios.id_rol AND ocupaciones.id_ocupaciones = usuarios.id_ocupaciones ";
		$id       = "usuarios.nombres_usuario";
			
		$resultSet=$usuario->getCondiciones($columnas ,$tablas ,$where, $id);
			
		$resultMenu=array(0=>'--TODOS--',1=>'Nombre', 2=>'Apellido', 3=>'Usuario', 4=>'Rol', 5=>'Provincia');
	
		$provincias=new ProvinciasModel();
		$resultProv = $provincias->getAll("nombre_provincia");
			
		$paises=new PaisesModel();
		$resultPais = $paises->getAll("nombre_pais");
		$ocupaciones = new OcupacionesModel();
		$resultOcu = $ocupaciones->getAll("nombre_ocupaciones");
		
		$roles = new RolesModel();
		$resultRol = $roles->getAll("nombre_rol");
		
		$estados = new EstadosModel();
		$resultEst =  $estados->getAll("nombre_estado");
		
		$usuarios = new UsuariosModel();
		
				
		if (isset ($_GET["id_usuario"])   )
		{
			$_id_usuario = $_GET["id_usuario"];
			$where    	= "rol.id_rol = usuarios.id_rol AND estado.id_estado = usuarios.id_estado AND usuarios.id_usuario = '$_id_usuario' ";
			$resultEdit = $usuario->getCondiciones($columnas ,$tablas ,$where, $id);
		}
		
		
		if (isset($_POST["usuario_usuario"]))
		{
			$_usuario_usuario = $_POST["usuario_usuario"];
		}
	
	
		//AGREGO EL NOMBRE Y DEVUELVO EL ID
		if (isset($_POST["btn_agregar_usuario"]) )
		{
			$nuevo_usuario = TRUE;
			$_usuario_usuario   =  $_POST["usuario_usuario"];
			
			$res_usuario=$usuarios->getBy("usuario_usuario = '$_usuario_usuario' ");
				
			if ( !empty($res_usuario) )
			{
				foreach($res_usuario as $res) {
						
					$_id_usuario = $res->id_usuario;
				}
					
				if($_id_usuario>0){
					$existe="true";
				
				
					
					$this->view("Usuarios",array(
							"existe"=>$existe,"resultSet"=>$resultSet, "resultMenu"=>$resultMenu, "usuario_usuario"=>$_usuario_usuario
					));
				
					exit();
				}
					
			}else{
			
				$funcion = "ins_usuarios";
				$parametros = " '$_usuario_usuario'  ";
				$usuario->setFuncion($funcion);
				$usuario->setParametros($parametros);
				try {
						
					$resultado=$usuario->Insert();
				
				} catch (Exception $e) {
				
					$this->view("Resultado",array(
							"resultado"=>"No se puedo insertar el Usuario"
				
					));
				
					exit();
				
				}
				
			}
			}
			
			
		
	
		$res_usuario=$usuario->getBy("usuario_usuario = '$_usuario_usuario' ");
			
			
		foreach($res_usuario as $res) {
	
			$_id_usuario = $res->id_usuario;
		}
	
	
		//editando
		if (isset ($_GET["id_usuario_edit"])   )
		{
			$_id_usuario = $_GET["id_usuario_edit"];
			$where    = "id_usuario = '$_id_usuario' ";
			$resultEdit = $usuario->getBy($where);
		}
	
		//guardamos el distribuidores
		if (isset($_POST["btn_guardar"]) )
		{
			$_nombres_usuario 	= mb_strtoupper($_POST["nombres_usuario"]);
			$_apellidos_usuario  = mb_strtoupper($_POST["apellidos_usuario"]);
			$_usuario_usuario   = $_POST["correo_usuario"];
			$_clave_usuario     = $usuario->encrypt($_POST["clave_usuario"]);
			$_clave_usuario1     = $_POST["clave_usuario"];
			$_id_pais           = $_POST["paises"];
			$_id_provincia      = $_POST["provincias"];
			$_telefono_usuario  = $_POST["telefono_usuario"];
			$_celular_usuario   = $_POST["celular_usuario"];
			$_correo_usuario    = $_POST["correo_usuario"];
			$_id_usuario    = $_POST["id_usuario"];
			$_id_rol            = $_POST["id_rol"] ;   
			$_id_estado         =  $_POST["id_estado"];
			
			$_clave_activacion_usuario = $usuario->encrypt($_POST["correo_usuario"]);
			$_fecha_nacimiento = $_POST["fecha_nacimiento_usuario"];
			$_id_ocupaciones    = $_POST["ocupaciones"];
			$_extra_ocupaciones_usuario    = $_POST["extra_ocupaciones_usuario"];
			
			
			/*
			$usuario->UpdateBy("nombres_usuario='$_nombres_usuario', apellidos_usuario='$_apellidos_usuario',correo_usuario='$_usuario_usuario',
					clave_usuario='$_clave_usuario',id_pais='$_id_pais', id_provincia='$_id_provincia',telefono_usuario='$_telefono_usuario', celular_usuario='$_celular_usuario',id_rol='$_id_rol', id_estado='$_id_estado',fecha_nacimiento_usuario='$_fecha_nacimiento', clave_activacion_usuario='$_clave_activacion_usuario', id_ocupaciones='$_id_ocupaciones'", 
					"usuarios", "id_usuario='$_id_usuario'");
			*/
			
			$funcion = "ins_usuarios";
			$parametros = " '$_nombres_usuario','$_apellidos_usuario','$_usuario_usuario', '$_clave_usuario','$_id_pais', '$_id_provincia','$_telefono_usuario','$_celular_usuario','$_correo_usuario','$_id_rol','$_id_estado','$_clave_activacion_usuario','$_fecha_nacimiento','$_id_ocupaciones','$_extra_ocupaciones_usuario'";
			$usuario->setFuncion($funcion);
			$usuario->setParametros($parametros);
			$resultado=$usuario->Insert();
				
			
/*
			$cabeceras = "MIME-Version: 1.0 \r\n";
			$cabeceras .= "Content-type: text/html; charset=utf-8 \r\n";
			$cabeceras.= "From: info@masoft.net \r\n";
			$destino="$_usuario_usuario";
			$asunto="Claves de Acceso";
			$fecha=date("d/m/y");
			$hora=date("H:i:s");
			
			//
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
			<tr style='background: #FFFFFF'><td WIDTH='1000' align='center'><b> TUS DATOS DE ACCESO SON: </b></td></tr>
			<tr style='background: #FFFFFF;'><td WIDTH='1000' > <b>Usuario:</b> $_usuario_usuario</td></tr>
			<tr style='background: #FFFFFF;'><td WIDTH='1000' > <b>Clave Temporal:</b> $_clave_usuario1 </td></tr>
			</tabla>
			
			<table rules='all'>
			<tr style='background:#FFFFFF'><td WIDTH='1000' HEIGHT='50' align='center'><center><img src='http://186.4.203.42:4000/Vademano/view/images/left-box.png' WIDTH='180' HEIGHT='220' /><img src='http://186.4.203.42:4000/Vademano/view/images/center-box.png' WIDTH='180' HEIGHT='220' /><img src='http://186.4.203.42:4000/Vademano/view/images/rigth-box.png' WIDTH='180' HEIGHT='220' /></center></td></tr>
			</tabla>
			
			<p><table rules='all'></p>
			<tr style='background:#1C1C1C'><td WIDTH='1000' HEIGHT='50' align='center'><font color='white'>Vademano. - <a href='http://www.vademano.com'><FONT COLOR='#7acb5a'>www.vademano.com</FONT></a> - Copyright © 2017-</font></td></tr>
			</table>
			";
			
			
			if(mail("$destino","Claves de Acceso","$resumen","$cabeceras"))
			{
				$mensaje = "Hemos enviado un correo electronico con sus datos de acceso";
				
			
			}else{
				$mensaje = "No se pudo enviar el correo con la informacion. Intentelo nuevamente";
				$error = TRUE;
			
			}
			
			*/
			
			
			$this->redirect("Usuarios", "index");
			
		}
		$this->view("UsuariosAdd",array(
				"resultSet"=>"", 
				"resultPais"=>$resultPais, 
				"resultProv" =>$resultProv, 
				"resultEdit" =>$resultEdit,
				"id_usuario"=>$_id_usuario, 
				"usuario_usuario"=>$_usuario_usuario , 
				
				"resultRol"=>$resultRol,
				"resultEst"=>$resultEst, "resultOcu"=>$resultOcu
		));
		
		
	}
	
	
	public function Loguear()
	{
		
		
		
		$fichas = new FichasModel();
		
		$where = "nombre_fichas LIKE '%%' ORDER by consultas_fichas DESC LIMIT 4";
		$resultVis = $fichas->getBy($where);
		
		
		
		$resultado = "";
		$usuarios = new UsuariosModel(); 	
		
		if (isset ($_POST["usuario_usuario"]) && isset ($_POST["clave_usuario"]) )
		{
			
			
			$_usuario_usuario = $_POST["usuario_usuario"];
			$_clave_usuario  = $_POST["clave_usuario"];
			
			$encryp_pass = $usuarios->encrypt($_clave_usuario);
			
			
			$where = "usuario_usuario = '$_usuario_usuario' AND clave_usuario = '$encryp_pass' AND id_estado=1";
			//$where = "suario_usuario = '$_usuario_usuario' AND clave_usuario = '$encryp_pass' AND id_estado=1";
			//$where = "usuario_usuario = '$_usuario_usuario' ";
			
			$resultado =  $usuarios->getBy($where);
			
			
			$usuario_usuario = "";
			$id_rol  = "";
			$nombre_usuario = "";
			$correo_usuario = "";
			$ip_usuario = "";
			
			if ( !empty($resultado) )
			{
				foreach($resultado as $res)
				{
					$id_usuario  = $res->id_usuario;
					$usuario_usuario  = $res->usuario_usuario;
					$id_rol           = $res->id_rol;
					$nombres_usuario   = $res->nombres_usuario;
					$correo_usuario   = $res->correo_usuario;
			
				}
				//obtengo ip
				$ip_usuario = $usuarios->getRealIP();
				 
				 
				///registro sesion
				$usuarios->registrarSesion($id_usuario, $usuario_usuario, $id_rol, $nombres_usuario, $correo_usuario, $ip_usuario);
				 
				//inserto en la tabla
				$_id_usuario = $_SESSION['id_usuario'];
				$_ip_usuario = $_SESSION['ip_usuario'];
				 
				$sesiones = new SesionesModel();
			
				$funcion = "ins_sesiones";
				 
				$parametros = " '$_id_usuario' ,'$_ip_usuario' ";
				$sesiones->setFuncion($funcion);
				 
				$sesiones->setParametros($parametros);
				 
				 
				$resultSes=$sesiones->Insert();
				
				if ($id_rol == 3) //user
				{
					$this->view("Bienvenida",array(
							"allusers"=>$_usuario_usuario,"resultVis"=>$resultVis
					));
					
				}
				else 
				{
					$this->view("BienvenidaAdmin",array(
							"allusers"=>$_usuario_usuario,"resultVis"=>$resultVis
					));
				}
				
			}
			else
			{
				 
				$this->view("Login",array(
						"allusers"=>"Usuario o Contraseña Incorrectos. Por Favor Verifique e Intente de Nuevo"
				));
			}
				
			
			
					
		}	
		
		else 
		{
			$this->view("Login",array(
					"resultado"=>$resultado
			
			));
			
		}		
	
		
		
		
		
	}

	public function Home()
	{
		
		session_start();
		session_destroy();
		$resultado = "";
	
		$fichas = new FichasModel();
		
		$where = "nombre_fichas LIKE '%%' ORDER by consultas_fichas DESC LIMIT 4";
		$resultVis = $fichas->getBy($where);
		
		$this->view("Index",array(
				"resultado"=>$resultado, "resultVis"=>$resultVis
	
		));
		
		
	
	
	}
	
	public function QuienesSomos()
	{
		session_start();
		$resultado = "";
	
		$paises=new PaisesModel();
		$resultPais = $paises->getAll("nombre_pais");
		
		$provincias=new ProvinciasModel();
		$resultProv = $provincias->getAll("nombre_provincia");
		
		$fichas = new FichasModel();
	
		$where = "nombre_fichas LIKE '%%' ORDER by consultas_fichas DESC LIMIT 4";
		$resultVis = $fichas->getBy($where);
	
		$this->view("QuienesSomos",array(
				"resultado"=>$resultado, "resultVis"=>$resultVis
	
		));
	
	
	}
	public function PreguntasFrecuentes()
	{
		session_start();
		$resultado = "";
	
		$fichas = new FichasModel();
	
		$where = "nombre_fichas LIKE '%%' ORDER by consultas_fichas DESC LIMIT 4";
		$resultVis = $fichas->getBy($where);
	
		$this->view("PreguntasFrecuentes",array(
				"resultado"=>$resultado, "resultVis"=>$resultVis
				
		
	
		));
	
	
	}
	
	
	
	public function InsertaUsuarios(){
			
		session_start();
		$resultado = null;
		$usuarios=new UsuariosModel();
	
	
		
		//_nombre_categorias character varying, _path_categorias character varying
		if (isset ($_POST["usuario_usuario"]) && isset ($_POST["nombre_usuario"]) && isset ($_POST["clave_usuario"]) && isset($_POST["id_rol"])  )
		{

			
			$_nombre_usuario     = $_POST["nombre_usuario"];
			
			$_clave_usuario      = $_POST["clave_usuario"];
			
			$_telefono_usuario   = $_POST["telefono_usuario"];
			$_celular_usuario    = $_POST["celular_usuario"];
			$_correo_usuario     = $_POST["correo_usuario"];
		    $_id_rol             = $_POST["id_rol"];
		    $_id_estado          = $_POST["id_estado"];
		    $_usuario_usuario     = $_POST["usuario_usuario"];
	
	
			$funcion = "ins_usuarios";
			
			$parametros = " '$_nombre_usuario' ,'$_clave_usuario' , '$_telefono_usuario', '$_celular_usuario', '$_correo_usuario' , '$_id_rol', '$_id_estado' , '$_usuario_usuario'";
			$usuarios->setFuncion($funcion);
	
			$usuarios->setParametros($parametros);
	
	
			$resultado=$usuarios->Insert();
	
			/*
			 $this->view("Categorias",array(
			 "resultado"=>$resultado
			 ));
	
			*/
	
		}
		$this->redirect("Usuarios", "index");
			
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
	
    
    
   public function Bienvenida(){
    
   	session_start();
    	//Creamos el objeto usuario
    	$usuarios=new UsuariosModel();
    	
    	//Conseguimos todos los usuarios
    	//$allusers=$usuarios->getLogin();
    	
    	$fichas = new FichasModel();
    	
    	$where = "nombre_fichas LIKE '%%' ORDER by consultas_fichas DESC LIMIT 4";
    	$resultVis = $fichas->getBy($where);
    	 
    	
    	//Cargamos la vista index y l e pasamos valores
    	$this->view("Bienvenida",array(
    			"resultVis"=>$resultVis
    	));
    }
    
    
    
       
	public function  cerrar_sesion ()
	{
		session_start();
		session_destroy();
		$this->redirect("Usuarios", "Home");
		
	}
	
	
	public function Actualiza ()
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
	
	public function Reset()
	{
		session_start();
		$_usuario_usuario = "";
		$_clave_usuario = "";
		$usuarios = new UsuariosModel();
		$error = FALSE;
		
		
		$mensaje = "";
		
		if (isset($_POST['reestablecer_usuario']))
		{
			$_usuario_usuario = $_POST['reestablecer_usuario'];
		
			$where = "usuario_usuario = '$_usuario_usuario'   ";
			$resultUsu = $usuarios->getBy($where);	
			foreach($resultUsu as $res) 
			{	     
	        		$cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	        		$longitudCadena=strlen($cadena);
	        		$pass = "";
	        		$longitudPass=10;
	        		for($i=1 ; $i<=$longitudPass ; $i++){
	        			$pos=rand(0,$longitudCadena-1);
	        			$pass .= substr($cadena,$pos,1);
	        		}
	        		$_clave_usuario= $pass;
	        		
			}		               
			$_encryp_pass = $usuarios->encrypt($_clave_usuario);
			
			$usuarios->UpdateBy("clave_usuario = '$_encryp_pass' ", "usuarios", "usuario_usuario = '$_usuario_usuario'  ");
			
			if ($_clave_usuario == "")
			{
				$mensaje = "Este Usuario no existe en nuestro sistema.";
				
				$error = TRUE;
				
				
			}
			else
			{
				
				$cabeceras = "MIME-Version: 1.0 \r\n";
				$cabeceras .= "Content-type: text/html; charset=utf-8 \r\n";
				$cabeceras.= "From: info@masoft.net \r\n";
				$destino="$_usuario_usuario";
				$asunto="Claves de Acceso";
				$fecha=date("d/m/y");
				$hora=date("H:i:s");
				
				//
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
				<tr style='background: #FFFFFF'><td WIDTH='1000' align='center'><b> TUS DATOS DE ACCESO SON: </b></td></tr>
				<tr style='background: #FFFFFF;'><td WIDTH='1000' > <b>Usuario:</b> $_usuario_usuario</td></tr>
				<tr style='background: #FFFFFF;'><td WIDTH='1000' > <b>Clave Temporal:</b> $_clave_usuario </td></tr>
				</tabla>
				<p><table rules='all'></p>
				<tr style='background:#1C1C1C'><td WIDTH='1000' HEIGHT='50' align='center'><font color='white'>Vademano. - <a href='http://www.vademano.com'><FONT COLOR='#7acb5a'>www.vademano.com</FONT></a> - Copyright © 2017-</font></td></tr>
				</table>
			    ";
				
                /*
				<table rules='all'>
				<tr style='background:#FFFFFF'><td WIDTH='1000' HEIGHT='50' align='center'><center><img src='http://186.4.203.42:4000/Vademano/view/images/left-box.png' WIDTH='180' HEIGHT='220' /><img src='http://186.4.203.42:4000/Vademano/view/images/center-box.png' WIDTH='180' HEIGHT='220' /><img src='http://186.4.203.42:4000/Vademano/view/images/rigth-box.png' WIDTH='180' HEIGHT='220' /></center></td></tr>
				</tabla>
				*/
				
				if(mail("$destino","Claves de Acceso","$resumen","$cabeceras"))
				{
					$mensaje = "Hemos enviado un correo electronico con sus datos de acceso";
					/*	
					$this->view("Login",array(
							"allusers"=>""
					));
					exit();
					*/	
				
				}else{
					$mensaje = "No se pudo enviar el correo con la informacion. Intentelo nuevamente";
					$error = TRUE;
				
				}
					
			}
			
		}
		
				
		
			$this->view("ResetUsuarios",array(
					"resultSet"=>$mensaje , "error"=>$error
			));
				
		
			
			
		
	
		
		
		
	}
	
}
?>
</body>
</html>




