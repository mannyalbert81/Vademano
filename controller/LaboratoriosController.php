<?php
class LaboratoriosController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
public function index(){
	session_start();
	
	    $laboratorios = new LaboratoriosModel();
		$resultSet = $laboratorios->getAll("id_laboratorios");
		
		$resultEdit = "";
		$resultMenu=array(0=>'--TODOS--',1=>'Nombre Laboratorio',2=>'Nombre Persona Contacto',3=>'Email Laboratorio',4=>'Web Laboratorio');
		
		
		if (isset($_POST["btn_buscar"]))
		{
		
		
			$columnas1 = "laboratorios.id_laboratorios, 
					  laboratorios.nombre_laboratorios, 
					  laboratorios.persona_contacto_laboratorios, 
					  laboratorios.telefono_persona_contacto_laboratorios, 
					  laboratorios.email_laboratorios, 
					  laboratorios.web_laboratorios, 
					  laboratorios.logo_laboratorios, 
					  laboratorios.creado, 
					  laboratorios.modificado, 
					  laboratorios.buscador";
		
			$tablas1   = "public.laboratorios";
			$where1    = "laboratorios.id_laboratorios>0";
			$id1 = "laboratorios.id_laboratorios";
		
		
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
		
						$where_2 = " AND laboratorios.nombre_laboratorios LIKE '$contenido%'  ";
						break;
					case 2:
		
						$where_3 = " AND laboratorios.persona_contacto_laboratorios LIKE '$contenido%'  ";
						break;
					case 3:
							
						$where_4 = " AND laboratorios.email_laboratorios LIKE '$contenido%'  ";
						break;
		
					case 4:
		
						$where_5 = " AND laboratorios.web_laboratorios LIKE '$contenido%'  ";
						break;
							
							
							
				}
		
		
		
				$where_to  = $where1 .  $where_0.  $where_2.  $where_3.  $where_4.  $where_5;
		
		
				$resul = $where_to;
					
				//Conseguimos todos los usuarios con filtros
				$resultSet=$laboratorios->getCondiciones($columnas1 ,$tablas1 ,$where_to, $id1);
		
		
		
		
			}
		}
		
		
		
		
		if (isset ($_GET["id_laboratorios"])   )
			{
				$_id_laboratorios = $_GET["id_laboratorios"];
				$where    = "id_laboratorios = '$_id_laboratorios' "; 
				$resultEdit = $laboratorios->getBy($where);
				
			}
		
		$this->view("Laboratorios",array(
				"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultMenu"=>$resultMenu
			));
		
		
	}
	
	public function index_dos(){
	
		session_start();
		$laboratorios = new LaboratoriosModel();
		$resultSet = $laboratorios->getAll("id_laboratorios");
	
		
		$provincias=new ProvinciasModel();
		$resultProv = $provincias->getAll("nombre_provincia");
		
		$canton=new CantonModel();
		$resultCan = $canton->getAll("nombre_canton");
		
		$direcciones=new DireccionesModel();
		
		$resultEdit = "";
		$_nombre_laboratorios = "";
		
		$_id_laboratorios = 0  ;
		
		
		
		
		$_nuevo_laboratorios = FALSE;
		
		
		if (isset($_POST["nombre_laboratorios"]))
		{
			$_nombre_laboratorios = $_POST["nombre_laboratorios"];
		}
		
		
		//AGREGO EL NOMBRE Y DEVUELVO EL ID
		if (isset($_POST["btn_agregar_laboratorio"]) )
		{
			$_nuevo_laboratorios = TRUE;
			$_nombre_laboratorios   = strtoupper ( $_POST["nombre_laboratorios"] );
			$funcion = "ins_laboratorios";
			$parametros = " '$_nombre_laboratorios'  ";
			$laboratorios->setFuncion($funcion);
			$laboratorios->setParametros($parametros);
			$resultado=$laboratorios->Insert();
			
			
						
			
		}
		
		$res_laboratorios=$laboratorios->getBy("nombre_laboratorios = '$_nombre_laboratorios' ");
			
			
		foreach($res_laboratorios as $res) {
		
			$_id_laboratorios = $res->id_laboratorios;
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
				$_id_distribuidores       = 0  ;
			}	
			
			$_id_provincia                 =  $_POST["id_provincia"]   ;
			$_id_canton                    =  $_POST["id_canton"] ;
			$_direccion_direcciones     =  $_POST["direccion_direcciones"] ;
			$_telefono_direcciones           = $_POST["telefono_direcciones"] ;
			$_celular_direcciones       =   $_POST["celular_direcciones"] ;
			
			
			$funcion = "ins_direcciones";
			
			$parametros = " '$_id_distribuidores', '$_id_laboratorios', '$_tipo_direcciones', '$_id_provincia', '$_id_canton', '$_direccion_direcciones', '$_telefono_direcciones', '$_celular_direcciones'  ";
			
				
			
			$direcciones->setFuncion($funcion);
			
			$direcciones->setParametros($parametros);
			
			
			$resultado=$direcciones->Insert();
			
		
			
		
		}	
		
		//editando
		if (isset ($_GET["id_laboratorios_edit"])   )
		{
			$_id_laboratorios = $_GET["id_laboratorios_edit"];
			$where    = "id_laboratorios = '$_id_laboratorios' ";
			$resultEdit = $laboratorios->getBy($where);
		
			
		}
		
		if(isset($_GET["id_direcciones"]))
		{
			$id_direcciones=(int)$_GET["id_direcciones"];
			$_id_laboratorios=(int)$_GET["id_laboratorios"];
			$_nombre_laboratorios=$_GET["nombre_laboratorios"];
			$direcciones=new DireccionesModel();
		
			$direcciones->deleteBy(" id_direcciones",$id_direcciones);
		    
			
		
		}
		
		
		
		$columnasDir = " direcciones.id_direcciones, provincias.nombre_provincia, canton.nombre_canton, codigos_provincias.cod_telefono, paises.prefijo_telefonico_paises, direcciones.direccion_direcciones, direcciones.telefono_direcciones, direcciones.celular_direcciones"; 
		$tablasDir = " public.provincias, public.canton, public.direcciones, public.codigos_provincias, public.paises";
 		$whereDir  = " direcciones.id_provicnias = provincias.id_provincia AND direcciones.id_canton = canton.id_canton AND codigos_provincias.id_provincia = provincias.id_provincia AND provincias.id_pais = paises.id_pais AND direcciones.id_laboratorios = '$_id_laboratorios' ";
		$idDir  = "direcciones.id_direcciones";
		$resultDir = $direcciones->getCondiciones($columnasDir, $tablasDir, $whereDir, $idDir);
		
		//guardamos el laboratorios
		if (isset($_POST["btn_guardar"]) )
		{
			$directorio = $_SERVER['DOCUMENT_ROOT'].'/Vademano/uploads/';
				

			$_nombre_laboratorios             = strtoupper ( $_POST["nombre_laboratorios"]   );
			$_persona_contacto_laboratorios   = $_POST["persona_contacto_laboratorios"];
			$_telefono_persona_contacto_laboratorios   = $_POST["telefono_persona_contacto_laboratorios"];
			$_email_laboratorios              =  $_POST["email_laboratorios"] ;
			$_web_laboratorios                =  $_POST["web_laboratorios"] ;
			
			$nombre = $_FILES['logo_laboratorios']['name'];
			$tipo = $_FILES['logo_laboratorios']['type'];
			$tamano = $_FILES['logo_laboratorios']['size'];
			
			// temporal al directorio definitivo
			
			move_uploaded_file($_FILES['logo_laboratorios']['tmp_name'],$directorio.$nombre);
			
			$data = file_get_contents($directorio.$nombre);
				
			$_logo_laboratorios = pg_escape_bytea($data);
			
			$funcion = "ins_laboratorios";
			
			$parametros = " '$_nombre_laboratorios' , '$_persona_contacto_laboratorios' , '$_telefono_persona_contacto_laboratorios' , '$_email_laboratorios' , '$_web_laboratorios' ,'{$_logo_laboratorios}'  ";
			$laboratorios->setFuncion($funcion);
				
			$laboratorios->setParametros($parametros);
				
			$resultado=$laboratorios->Insert();
				
			$this->redirect("Laboratorios", "index");
			
		}
		else 
		{
			$this->view("LaboratoriosAdd",array(
					"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultProv"=>$resultProv, "resultCan"=>$resultCan, "resultDir"=>$resultDir, "id_laboratorios"=>$_id_laboratorios, "nombre_laboratorios"=>$_nombre_laboratorios , "nuevo_laboratorios"=>$_nuevo_laboratorios
			));
			
		}
		
	}
	
	public function Inserta(){
			
		session_start();
		$laboratorios = new LaboratoriosModel();
		$directorio = $_SERVER['DOCUMENT_ROOT'].'/Vademano/uploads/';
		
		if (isset($_POST["nombre_laboratorios"]) )
		{
			
			
			$_nombre_laboratorios             = strtoupper ( $_POST["nombre_laboratorios"]   );
			$_persona_contacto_laboratorios   = $_POST["persona_contacto_laboratorios"];
			$_direccion_laboratorios          = $_POST["direccion_laboratorios"];
			$_telefono_laboratorios           = $_POST["telefono_laboratorios"];
			$_celular_laboratorios          =   $_POST["celular_laboratorios"];
			$_email_laboratorios              = $_POST["email_laboratorios"]; 
			$_web_laboratorios                = $_POST["web_laboratorios"];
			$_provincia_laboratorios          = $_POST["provincia_laboratorios"];
			$_ciudad_laboratorios             = $_POST["ciudad_laboratorios"];
			$_zipcode_laboratorios            = $_POST["zipcode_laboratorios"] ;
			$nombre = $_FILES['logo_laboratorios']['name'];
 		    $tipo = $_FILES['logo_laboratorios']['type'];
            $tamano = $_FILES['logo_laboratorios']['size'];
 			
            // temporal al directorio definitivo
            
            move_uploaded_file($_FILES['logo_laboratorios']['tmp_name'],$directorio.$nombre);
            
            $data = file_get_contents($directorio.$nombre);
			
            $logo_laboratorios = pg_escape_bytea($data);
            
			$funcion = "ins_laboratorios";
				
			$parametros = " '$_nombre_laboratorios' , '$_persona_contacto_laboratorios' , '$_direccion_laboratorios' , '$_telefono_laboratorios' , '$_celular_laboratorios' , '$_email_laboratorios' , '$_web_laboratorios' ,'{$logo_laboratorios}' , '$_provincia_laboratorios' , '$_ciudad_laboratorios' , '$_zipcode_laboratorios' ";
			$laboratorios->setFuncion($funcion);
			
			$laboratorios->setParametros($parametros);
			
			$resultado=$laboratorios->Insert();
			
			$this->redirect("Laboratorios", "index");
			
		}
		
			
	}
	
	public function borrarId()
	{
		session_start();
		if(isset($_GET["id_laboratorios"]))
		{
			$id_laboratorios=(int)$_GET["id_laboratorios"];
	
			$laboratorios=new LaboratoriosModel();
				
			$laboratorios->deleteBy(" id_laboratorios",$id_laboratorios);
				
				
		}
		
		
		$this->redirect("Laboratorios", "index");
	}
	
	public function borrarIdDir()
	{
	
		$this->redirect("Laboratorios", "index_dos");
	}
	
	public function  VistaLaboratoriosOnline()
	{
		$resultRep = "";
		session_start();
		if(isset($_GET["id_laboratorios"]))
		{
			$_id_laboratorios = $_GET["id_laboratorios"];
		    $laboratorios=new LaboratoriosModel();
						
			$columnas = "laboratorios.id_laboratorios, 
						  laboratorios.nombre_laboratorios, 
						  laboratorios.persona_contacto_laboratorios, 
						  laboratorios.telefono_persona_contacto_laboratorios, 
						  laboratorios.email_laboratorios, 
						  laboratorios.web_laboratorios, 
						  laboratorios.logo_laboratorios, 
						  laboratorios.creado";
			$tablas   = "public.laboratorios";
			$where    = " laboratorios.id_laboratorios =  $_id_laboratorios ";
			$id       = "laboratorios.id_laboratorios";
	
			$resultRep = $laboratorios->getCondiciones($columnas, $tablas, $where, $id);
	
		}
   	
		$this->view("LaboratoriosOnline", array(	"resultRep"=>$resultRep
		));
	}
	}

?>
