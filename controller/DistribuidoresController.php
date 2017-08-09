<?php
class DistribuidoresController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
public function index(){
	session_start();
	    $distribuidores = new DistribuidoresModel();
		
		
		$columnas = "distribuidores.id_distribuidores, 
					  distribuidores.nombre_distribuidores, 
					  distribuidores.persona_contacto_distribuidores, 
					  distribuidores.telefono_persona_contacto_distribuidores, 
					  distribuidores.email_distribuidores, 
					  distribuidores.web_distribuidores, 
					  distribuidores.logo_distribuidores, 
					  distribuidores.creado, 
					  distribuidores.modificado, 
					  distribuidores.buscador";
		$tablas   = "public.distribuidores";
		$where    = "distribuidores.id_distribuidores>0";
		$id       = "distribuidores.id_distribuidores";
			
		$resultSet=$distribuidores->getCondiciones($columnas ,$tablas ,$where, $id);
		
		$existe="false";
		$resultEdit = "";
		$resultMenu=array(0=>'--TODOS--',1=>'Nombre Distribuidor',2=>'Nombre Persona Contacto',3=>'Email Distribuidor',4=>'Web Distribuidor');
			
		if (isset($_POST["btn_buscar"]))
		{
		
		
			$columnas1 = "distribuidores.id_distribuidores, 
					  distribuidores.nombre_distribuidores, 
					  distribuidores.persona_contacto_distribuidores, 
					  distribuidores.telefono_persona_contacto_distribuidores, 
					  distribuidores.email_distribuidores, 
					  distribuidores.web_distribuidores, 
					  distribuidores.logo_distribuidores, 
					  distribuidores.creado, 
					  distribuidores.modificado, 
					  distribuidores.buscador";
		
			$tablas1   = "public.distribuidores";
			$where1    = "distribuidores.id_distribuidores>0";
			$id1 = "distribuidores.id_distribuidores";
		
		
			$criterio = $_POST["criterio_busqueda"];
			$contenido = $_POST["contenido_busqueda"];
		
		
		
			if ($contenido !="")
			{
		
				$where_0 = "";
				$where_2 = "";
				$where_3 = "";
				$where_4 = "";
				$where_5 = "";
				
		
					
		
				switch ($criterio) {
					case 0:
						$where_0 = " ";
						break;
					case 1:
		
						$where_2 = " AND distribuidores.nombre_distribuidores LIKE '$contenido%'  ";
						break;
						case 2:
						
							$where_3 = " AND distribuidores.persona_contacto_distribuidores LIKE '$contenido%'  ";
							break;
							case 3:
							
								$where_4 = " AND distribuidores.email_distribuidores LIKE '$contenido%'  ";
								break;
								
								case 4:
								
									$where_5 = " AND distribuidores.web_distribuidores LIKE '$contenido%'  ";
									break;
									
									
							
				}
		
		
		
				$where_to  = $where1 .  $where_0.  $where_2.  $where_3.  $where_4.  $where_5;
		
		
				$resul = $where_to;
					
				//Conseguimos todos los usuarios con filtros
				$resultSet=$distribuidores->getCondiciones($columnas1 ,$tablas1 ,$where_to, $id1);
		
		
		
		
			}
		}
		
		
		if (isset ($_GET["id_distribuidores"])   )
			{
				$_id_distribuidores = $_GET["id_distribuidores"];
				$where    = "id_distribuidores = '$_id_distribuidores' "; 
				$resultEdit = $distribuidores->getBy($where);
				
			}
		
		$this->view("Distribuidores",array(
				"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultMenu"=>$resultMenu, "existe"=>$existe
			));
			
			
		
		
	}
	
	public function index_dos(){
		
		session_start();
		$distribuidores = new DistribuidoresModel();
		$columnas = "distribuidores.id_distribuidores,
					  distribuidores.nombre_distribuidores,
					  distribuidores.persona_contacto_distribuidores,
					  distribuidores.telefono_persona_contacto_distribuidores,
					  distribuidores.email_distribuidores,
					  distribuidores.web_distribuidores,
					  distribuidores.logo_distribuidores,
					  distribuidores.creado,
					  distribuidores.modificado,
					  distribuidores.buscador";
		$tablas   = "public.distribuidores";
		$where    = "distribuidores.id_distribuidores>0";
		$id       = "distribuidores.id_distribuidores";
			
		$resultSet=$distribuidores->getCondiciones($columnas ,$tablas ,$where, $id);
		
		$resultMenu=array(0=>'--TODOS--',1=>'Nombre Distribuidor',2=>'Nombre Persona Contacto',3=>'Email Distribuidor',4=>'Web Distribuidor');
		
		$existe="false";
		$provincias=new ProvinciasModel();
		$resultProv = $provincias->getAll("nombre_provincia");
		
		
		$canton=new CantonModel();
		$resultCan = $canton->getAll("nombre_canton");
		
		
		$direcciones=new DireccionesModel();
		$resultEditDir= "";
		$resultEdit = "";
		$_nombre_distribuidores = "";
		
		$_id_distribuidores = 0  ;
		$persona_contacto_distribuidores= "";
		$telefono_persona_contacto_distribuidores= "";
		$email_distribuidores= "";
		$web_distribuidores= "";
		
		
		
		$_nuevo_distribuidores = FALSE;
		
		
		if (isset($_POST["nombre_distribuidores"]))
		{
			
			$_nombre_distribuidores      = mb_strtoupper($_POST["nombre_distribuidores"]);
			
			
		}
		
		
		//AGREGO EL NOMBRE Y DEVUELVO EL ID
		if (isset($_POST["btn_agregar_distribuidor"]) )
		{
			$_nombre_distribuidores   = mb_strtoupper($_POST["nombre_distribuidores"]);
				
			$res_distribuidores=$distribuidores->getBy("nombre_distribuidores = '$_nombre_distribuidores' ");
			
			if ( !empty($res_distribuidores) )
			{
				foreach($res_distribuidores as $res) {
			
					$_id_distribuidores = $res->id_distribuidores;
				}
					
				
				if($_id_distribuidores>0){
					$existe="true";
				
					$this->view("Distribuidores",array(
							"existe"=>$existe,"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultMenu"=>$resultMenu, "nombre_distribuidores"=>$_nombre_distribuidores
					));
						
					
				
					exit();
				}
			}else{
			
			
			
			$_nuevo_distribuidores = TRUE;
			$funcion = "ins_distribuidores";
			$parametros = " '$_nombre_distribuidores'  ";
			$distribuidores->setFuncion($funcion);
			$distribuidores->setParametros($parametros);
			$resultado=$distribuidores->Insert();
			
			}
						
			
		}
		
		$res_distribuidores=$distribuidores->getBy("nombre_distribuidores = '$_nombre_distribuidores' ");
			
			
		foreach($res_distribuidores as $res) {
		
			$_id_distribuidores = $res->id_distribuidores;
		}
	
		
		if (isset($_POST["btn_agregar_direcciones"]) )
		{
			$_tipo_direcciones        =  $_POST["tipo_direcciones"]   ;
			if ($_tipo_direcciones == 1) //es distribuidor
			{
				$_id_distribuidores       =  $_POST["id_distribuidores"]   ;
				$_id_laboratorios       =  0   ;
			}
			else
			{
				$_id_laboratorios       =  $_POST["id_laboratorios"]   ;
				$_id_distribuidores       = 0   ;
			}	
			
			$_id_provincia                 =  $_POST["id_provincia"]   ;
			$_id_canton                    =  $_POST["id_canton"] ;
			$_direccion_direcciones     =  $_POST["direccion_direcciones"] ;
			$_telefono_direcciones           = $_POST["telefono_direcciones"] ;
			$_celular_direcciones       =   $_POST["celular_direcciones"] ;
			$_id_direcciones       =   $_POST["id_direcciones"] ;
			
			
			if($_id_direcciones>0){
				
				$colval = " id_distribuidores = '$_id_distribuidores', id_laboratorios = '$_id_laboratorios',tipo_direcciones = '$_tipo_direcciones',id_provicnias = '$_id_provincia', id_canton = '$_id_canton', direccion_direcciones = '$_direccion_direcciones', telefono_direcciones = '$_telefono_direcciones', celular_direcciones = '$_celular_direcciones'";
				$tabla = "direcciones";
				$where = "id_direcciones = '$_id_direcciones'";
				$resultado=$direcciones->UpdateBy($colval, $tabla, $where);
				
			}else{
				
				$funcion = "ins_direcciones";
				$parametros = " '$_id_distribuidores', '$_id_laboratorios', '$_tipo_direcciones', '$_id_provincia', '$_id_canton', '$_direccion_direcciones', '$_telefono_direcciones', '$_celular_direcciones'  ";
				$direcciones->setFuncion($funcion);
				$direcciones->setParametros($parametros);
				$resultado=$direcciones->Insert();
				
			}
			
			
			
		
		}	
		
		//editando
		if (isset ($_GET["id_distribuidores_edit"])   )
		{
			$_id_distribuidores = $_GET["id_distribuidores_edit"];
			$where    = "id_distribuidores = '$_id_distribuidores' ";
			$resultEdit = $distribuidores->getBy($where);
		
			
		}
		
		
		if (isset ($_GET["id_direcciones_editar"])   )
		{
			$resultGet=array();
			$_id_distribuidores=(int)$_GET["id_distribuidores"];
			$id_direcciones = $_GET["id_direcciones_editar"];
			
			$columnas="direcciones.id_direcciones, 
					  direcciones.id_distribuidores, 
					  direcciones.id_laboratorios, 
					  direcciones.tipo_direcciones, 
					  provincias.id_provincia, 
					  provincias.nombre_provincia, 
					  canton.id_canton, 
					  canton.nombre_canton, 
					  direcciones.direccion_direcciones, 
					  direcciones.telefono_direcciones, 
					  direcciones.celular_direcciones";
			$tablas="public.direcciones, 
					  public.provincias, 
					  public.canton";
			$where="direcciones.id_canton = canton.id_canton AND
  					provincias.id_provincia = direcciones.id_provicnias AND direcciones.id_direcciones = '$id_direcciones'";
			$id="direcciones.id_direcciones";
			$resultEditDir=$direcciones->getCondiciones($columnas ,$tablas ,$where, $id);
			
			
			 
		
			if($_id_distribuidores>0){
			
				$where    = "id_distribuidores = '$_id_distribuidores' ";
				$resultGet = $distribuidores->getBy($where);
				$_id_distribuidores=$resultGet[0]->id_distribuidores;
				$_nombre_distribuidores=$resultGet[0]->nombre_distribuidores;
				$persona_contacto_distribuidores=$resultGet[0]->persona_contacto_distribuidores;
				$telefono_persona_contacto_distribuidores=$resultGet[0]->telefono_persona_contacto_distribuidores;
				$email_distribuidores=$resultGet[0]->email_distribuidores;
				$web_distribuidores=$resultGet[0]->web_distribuidores;
			
			
			}
			
				
		}
		
		
		
		if(isset($_GET["id_direcciones"]))
		{
			
		
			$resultGet=array();
			$id_direcciones=(int)$_GET["id_direcciones"];
			$_id_distribuidores=(int)$_GET["id_distribuidores"];
			$_nombre_distribuidores=$_GET["nombre_distribuidores"];
			$direcciones=new DireccionesModel();
		
			$direcciones->deleteBy("id_direcciones",$id_direcciones);
		    
			
			if($_id_distribuidores>0){
		
			$where    = "id_distribuidores = '$_id_distribuidores' ";
			$resultGet = $distribuidores->getBy($where);
			$_id_distribuidores=$resultGet[0]->id_distribuidores;
			$_nombre_distribuidores=$resultGet[0]->nombre_distribuidores;
			$persona_contacto_distribuidores=$resultGet[0]->persona_contacto_distribuidores;
			$telefono_persona_contacto_distribuidores=$resultGet[0]->telefono_persona_contacto_distribuidores;
			$email_distribuidores=$resultGet[0]->email_distribuidores;
			$web_distribuidores=$resultGet[0]->web_distribuidores;
		
				
			}
		
		}
		
		
		
		$columnasDir = " direcciones.id_direcciones, provincias.nombre_provincia, canton.nombre_canton, codigos_provincias.cod_telefono, paises.prefijo_telefonico_paises, direcciones.direccion_direcciones, direcciones.telefono_direcciones, direcciones.celular_direcciones"; 
		$tablasDir = " public.provincias, public.canton, public.direcciones, public.codigos_provincias, public.paises";
 		$whereDir  = " direcciones.id_provicnias = provincias.id_provincia AND direcciones.id_canton = canton.id_canton AND codigos_provincias.id_provincia = provincias.id_provincia AND provincias.id_pais = paises.id_pais AND direcciones.id_distribuidores = '$_id_distribuidores' ";
		$idDir  = "direcciones.id_direcciones";
		$resultDir = $direcciones->getCondiciones($columnasDir, $tablasDir, $whereDir, $idDir);
		
		//guardamos el distribuidores
		if (isset($_POST["btn_guardar"]) )
		{
			$_nombre_distribuidores             = mb_strtoupper($_POST["nombre_distribuidores"]);
			$_persona_contacto_distribuidores   =  $_POST["persona_contacto_distribuidores"];
			$_telefono_persona_contacto_distribuidores   = $_POST["telefono_persona_contacto_distribuidores"];
			$_email_distribuidores              =  $_POST["email_distribuidores"] ;
			$_web_distribuidores                =  $_POST["web_distribuidores"] ;
			$_id_distribuidores	 =  $_POST["id_distribuidores"] ;
			
			if ($_FILES['logo_distribuidores']['tmp_name']!="")
			{
			$directorio = $_SERVER['DOCUMENT_ROOT'].'/Vademano/uploads/';
			
			$nombre = $_FILES['logo_distribuidores']['name'];
			$tipo = $_FILES['logo_distribuidores']['type'];
			$tamano = $_FILES['logo_distribuidores']['size'];
			move_uploaded_file($_FILES['logo_distribuidores']['tmp_name'],$directorio.$nombre);
			$data = file_get_contents($directorio.$nombre);
			$_logo_distribuidores = pg_escape_bytea($data);
			
			$funcion = "ins_distribuidores";
			$parametros = " '$_nombre_distribuidores' , '$_persona_contacto_distribuidores' , '$_telefono_persona_contacto_distribuidores' , '$_email_distribuidores' , '$_web_distribuidores' ,'{$_logo_distribuidores}'  ";
			$distribuidores->setFuncion($funcion);
			$distribuidores->setParametros($parametros);
			$resultado=$distribuidores->Insert();
			
			}else {
				
				$colval = " nombre_distribuidores = '$_nombre_distribuidores', persona_contacto_distribuidores = '$_persona_contacto_distribuidores',telefono_persona_contacto_distribuidores = '$_telefono_persona_contacto_distribuidores',email_distribuidores = '$_email_distribuidores', web_distribuidores = '$_web_distribuidores' ";
				$tabla = "distribuidores";
				$where = "id_distribuidores = '$_id_distribuidores'";
				$resultado=$distribuidores->UpdateBy($colval, $tabla, $where);
				
				
			}
				
			$this->redirect("Distribuidores", "index");
			
		}
		
		if (isset($_POST["btn_actualizar"]) )
		{
			$_nombre_distribuidores             = mb_strtoupper($_POST["nombre_distribuidores"]);
			$_persona_contacto_distribuidores   =  $_POST["persona_contacto_distribuidores"];
			$_telefono_persona_contacto_distribuidores   = $_POST["telefono_persona_contacto_distribuidores"];
			$_email_distribuidores              =  $_POST["email_distribuidores"] ;
			$_web_distribuidores                =  $_POST["web_distribuidores"] ;
			$_id_distribuidores	 =  $_POST["id_distribuidores"] ;
				
			if ($_FILES['logo_distribuidores']['tmp_name']!="")
			{
				$directorio = $_SERVER['DOCUMENT_ROOT'].'/Vademano/uploads/';
					
				$nombre = $_FILES['logo_distribuidores']['name'];
				$tipo = $_FILES['logo_distribuidores']['type'];
				$tamano = $_FILES['logo_distribuidores']['size'];
				move_uploaded_file($_FILES['logo_distribuidores']['tmp_name'],$directorio.$nombre);
				$data = file_get_contents($directorio.$nombre);
				$_logo_distribuidores = pg_escape_bytea($data);
					
				$funcion = "ins_distribuidores";
				$parametros = " '$_nombre_distribuidores' , '$_persona_contacto_distribuidores' , '$_telefono_persona_contacto_distribuidores' , '$_email_distribuidores' , '$_web_distribuidores' ,'{$_logo_distribuidores}'  ";
				$distribuidores->setFuncion($funcion);
				$distribuidores->setParametros($parametros);
				$resultado=$distribuidores->Insert();
					
			}else {
		
				$colval = " nombre_distribuidores = '$_nombre_distribuidores', persona_contacto_distribuidores = '$_persona_contacto_distribuidores',telefono_persona_contacto_distribuidores = '$_telefono_persona_contacto_distribuidores',email_distribuidores = '$_email_distribuidores', web_distribuidores = '$_web_distribuidores' ";
				$tabla = "distribuidores";
				$where = "id_distribuidores = '$_id_distribuidores'";
				$resultado=$distribuidores->UpdateBy($colval, $tabla, $where);
		
		
			}
		
			$this->redirect("Distribuidores", "index");
				
		}
		else 
		{
			$this->view("DistribuidoresAdd",array(
					"resultEditDir"=>$resultEditDir,"persona_contacto_distribuidores"=>$persona_contacto_distribuidores,"telefono_persona_contacto_distribuidores"=>$telefono_persona_contacto_distribuidores,"email_distribuidores"=>$email_distribuidores,"web_distribuidores"=>$web_distribuidores,"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultProv"=>$resultProv, "resultCan"=>$resultCan, "resultDir"=>$resultDir, "id_distribuidores"=>$_id_distribuidores, "nombre_distribuidores"=>$_nombre_distribuidores , "nuevo_distribuidores"=>$_nuevo_distribuidores
			));
			
		}
		
	}
	
	public function Inserta(){
		session_start();
		$distribuidores = new DistribuidoresModel();
		$directorio = $_SERVER['DOCUMENT_ROOT'].'/Vademano/uploads/';
		
		if (isset($_POST["nombre_distribuidores"]) )
		{
			
			
			$_nombre_distribuidores             = mb_strtoupper($_POST["nombre_distribuidores"]);
			$_persona_contacto_distribuidores   = $_POST["persona_contacto_distribuidores"];
			$_direccion_distribuidores          =  $_POST["direccion_distribuidores"];
			$_telefono_distribuidores           =  $_POST["telefono_distribuidores"];
			$_celular_distribuidores          =    $_POST["celular_distribuidores"];
			$_email_distribuidores              = $_POST["email_distribuidores"]; 
			$_web_distribuidores                =  $_POST["web_distribuidores"];
			$_provincia_distribuidores          =  $_POST["provincia_distribuidores"];
			$_ciudad_distribuidores             =  $_POST["ciudad_distribuidores"];
			$_zipcode_distribuidores            = $_POST["zipcode_distribuidores"] ;
			$nombre = $_FILES['logo_distribuidores']['name'];
 		    $tipo = $_FILES['logo_distribuidores']['type'];
            $tamano = $_FILES['logo_distribuidores']['size'];
 			
            // temporal al directorio definitivo
            
            move_uploaded_file($_FILES['logo_distribuidores']['tmp_name'],$directorio.$nombre);
            
            $data = file_get_contents($directorio.$nombre);
			
            $logo_distribuidores = pg_escape_bytea($data);
            
			$funcion = "ins_distribuidores";
				
			$parametros = " '$_nombre_distribuidores' , '$_persona_contacto_distribuidores' , '$_direccion_distribuidores' , '$_telefono_distribuidores' , '$_celular_distribuidores' , '$_email_distribuidores' , '$_web_distribuidores' ,'{$logo_distribuidores}' , '$_provincia_distribuidores' , '$_ciudad_distribuidores' , '$_zipcode_distribuidores' ";
			$distribuidores->setFuncion($funcion);
			
			$distribuidores->setParametros($parametros);
			
			$resultado=$distribuidores->Insert();
			
			$this->redirect("Distribuidores", "index");
			
		}
		
			
	}
	
	public function borrarId()
	{
		session_start();
		if(isset($_GET["id_distribuidores"]))
		{
			$id_distribuidores=(int)$_GET["id_distribuidores"];
	
			$distribuidores=new DistribuidoresModel();
				
			$distribuidores->deleteBy(" id_distribuidores",$id_distribuidores);
				
				
		}
	
		
			
		
		$this->redirect("Distribuidores", "index");
	}
	
	public function borrarIdDir()
	{
	
		session_start();
		$this->redirect("Distribuidores", "index_dos");
	}
	
	public function  VistaDistribuidoresOnline()
	{
		 
		session_start();
		$resultRep = "";
		if(isset($_GET["id_distribuidores"]))
		{
		
		$_id_distribuidores = $_GET["id_distribuidores"];
			//$_nombre_distribuidores = $_GET["nombre_distribuidores"];
			//Creamos el objeto usuario
			$distribuidores=new DistribuidoresModel();
			//Conseguimos todos los usuarios
				
		 
			$columnas = " distribuidores.id_distribuidores, 
 			distribuidores.nombre_distribuidores, 
  			distribuidores.persona_contacto_distribuidores, 
  			distribuidores.telefono_persona_contacto_distribuidores, 
  			distribuidores.email_distribuidores, 
  			distribuidores.web_distribuidores, 
  			distribuidores.logo_distribuidores, 
  			distribuidores.creado";
			$tablas   = "public.distribuidores";
			$where    = " distribuidores.id_distribuidores =  $_id_distribuidores ";
			$id       = "distribuidores.id_distribuidores";
			 
			$resultRep = $distribuidores->getCondiciones($columnas, $tablas, $where, $id);
			 
			 
		}
		$this->view("DistribuidoresOnline", array(	"resultRep"=>$resultRep
		));
		
		
}
    
   	
}
?>
