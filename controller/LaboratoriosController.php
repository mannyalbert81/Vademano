<?php
class LaboratoriosController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
public function index(){
	session_start();
	
	
	$laboratorios = new LaboratoriosModel();
	$direcciones = new DireccionesModel();
	
	$columnasDis = " laboratorios.id_laboratorios";
	$tablasDis  = "public.laboratorios";
	$whereDis   = "laboratorios.id_laboratorios>0";
	
	$idDis = "laboratorios.id_laboratorios";
	 
	$resultRep=$laboratorios->getCondiciones($columnasDis, $tablasDis, $whereDis, $idDis);
	
	
	if(!empty($resultRep))
	{
		$colval = " nombre_direcciones =  ''";
		$tabla = "laboratorios";
		$where = "id_laboratorios>0";
		$resultado=$laboratorios->UpdateBy($colval, $tabla, $where);
	
		 
		foreach($resultRep as $res)
		{
			$id_laboratorios =$res->id_laboratorios;
			 
			$columnaslabDir = "d.direccion_direcciones,d.telefono_direcciones,d.celular_direcciones,
						           ca.nombre_canton,pr.cod_telefono";
	
			$tablaslabDir   = "public.direcciones d		INNER JOIN public.canton ca
								ON d.id_canton = ca.id_canton INNER JOIN public.codigos_provincias pr
								ON pr.id_provincia = ca.id_provincias";
	
			$wherelabDir    = "d.id_laboratorios = '$id_laboratorios'";
			$idlabDir = "d.id_direcciones";
	
			$dtLabDireccion=$direcciones->getCondiciones($columnaslabDir, $tablaslabDir, $wherelabDir, $idlabDir);
	
	
			if(!empty($dtLabDireccion)){
	
				$tablaLab="<table>";
				$tablaLab.="<tr>";
				$tablaLab.="<td><font size=1>";
				$tablaLab.="";
	
				foreach($dtLabDireccion as $resd)
				{
					$tablaLab.="<b>CIUDAD: </b>";
					$tablaLab.=$resd->nombre_canton;
					$tablaLab.="<br>";
					$tablaLab.="";
					$tablaLab.="<b>DIRECCIÓN: </b>";
					$tablaLab.=$resd->direccion_direcciones;
					$tablaLab.="<br>";
					$tablaLab.="";
					$tablaLab.="<b>TELÉFONO: </b> (593-2)&nbsp;";
					$tablaLab.=$resd->cod_telefono;
					$tablaLab.=$resd->telefono_direcciones;
					$tablaLab.="<br>";
					$tablaLab.="";
					$tablaLab.="<b>CELULAR: </b> (593-2)&nbsp;";
					$tablaLab.=$resd->celular_direcciones;
					$tablaLab.="<br>";
					$tablaLab.="<br>";
		    
				}
				$tablaLab.="</font></td>";
				$tablaLab.="</tr>";
				$tablaLab.="</table>";
		   
	
	
				$colval = " nombre_direcciones =  '$tablaLab'";
				$tabla = "laboratorios";
				$where = "id_laboratorios ='$id_laboratorios'";
				$resultado=$laboratorios->UpdateBy($colval, $tabla, $where);
	
				$tablaLab="";
	
			}
			 
			$tablaLab="";
	
		}
		 
	}
	
	
	
	
	
	
	$existe="false";
	
	$columnas = "laboratorios.id_laboratorios,
					  laboratorios.nombre_laboratorios,
					  laboratorios.persona_contacto_laboratorios,
					  laboratorios.telefono_persona_contacto_laboratorios,
					  laboratorios.email_laboratorios,
					  laboratorios.web_laboratorios,
					  laboratorios.logo_laboratorios,
					  laboratorios.creado,
					  laboratorios.modificado,
					  laboratorios.buscador,
			laboratorios.nombre_direcciones";
	$tablas   = "public.laboratorios";
	$where    = "laboratorios.id_laboratorios>0";
	$id       = "laboratorios.id_laboratorios";
		
	$resultSet=$laboratorios->getCondiciones($columnas ,$tablas ,$where, $id);
	
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
					  laboratorios.buscador,
				laboratorios.nombre_direcciones";
	
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
			"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultMenu"=>$resultMenu, "existe"=>$existe
	));
	
	
		
	}
	
	public function index_dos(){
		
		session_start();
		$laboratorios = new LaboratoriosModel();
		$columnas = "laboratorios.id_laboratorios,
					  laboratorios.nombre_laboratorios,
					  laboratorios.persona_contacto_laboratorios,
					  laboratorios.telefono_persona_contacto_laboratorios,
					  laboratorios.email_laboratorios,
					  laboratorios.web_laboratorios,
					  laboratorios.logo_laboratorios,
					  laboratorios.creado,
					  laboratorios.modificado,
					  laboratorios.buscador,
				laboratorios.nombre_direcciones";
		$tablas   = "public.laboratorios";
		$where    = "laboratorios.id_laboratorios>0";
		$id       = "laboratorios.id_laboratorios";
		
		$resultSet=$laboratorios->getCondiciones($columnas ,$tablas ,$where, $id);
		
		$resultMenu=array(0=>'--TODOS--',1=>'Nombre Laboratorio',2=>'Nombre Persona Contacto',3=>'Email Laboratorio',4=>'Web Laboratorio');
		$existe="false";
		
		$provincias=new ProvinciasModel();
		$resultProv = $provincias->getAll("nombre_provincia");
		
		$canton=new CantonModel();
		$resultCan = $canton->getAll("nombre_canton");
		
		$direcciones=new DireccionesModel();
		$resultEditDir= "";
		$resultEdit = "";
		$_nombre_laboratorios = "";
		
		$_id_laboratorios = 0  ;
		$persona_contacto_laboratorios= "";
		$telefono_persona_contacto_laboratorios= "";
		$email_laboratorios= "";
		$web_laboratorios= "";
		
		
		
		$_nuevo_laboratorios = FALSE;
		
		
		if (isset($_POST["nombre_laboratorios"]))
		{
			
			$_nombre_laboratorios             = mb_strtoupper($_POST["nombre_laboratorios"]);
			
			
		}
		
		
		//AGREGO EL NOMBRE Y DEVUELVO EL ID
		if (isset($_POST["btn_agregar_laboratorio"]) )
		{
			$_nombre_laboratorios   = mb_strtoupper($_POST["nombre_laboratorios"]);
			$res_laboratorios=$laboratorios->getBy("nombre_laboratorios = '$_nombre_laboratorios' ");
				
			if ( !empty($res_laboratorios) )
			{
				foreach($res_laboratorios as $res) {
						
					$_id_laboratorios = $res->id_laboratorios;
				}
					
			if($_id_laboratorios>0){
					$existe="true";
				
					
					$this->view("Laboratorios",array(
							"existe"=>$existe,"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultMenu"=>$resultMenu, "existe"=>$existe, "nombre_laboratorios"=>$_nombre_laboratorios
					));
					
				
					
				
					exit();
				}
			}else{	
			$_nuevo_laboratorios = TRUE;
			$funcion = "ins_laboratorios";
			$parametros = " '$_nombre_laboratorios'  ";
			$laboratorios->setFuncion($funcion);
			$laboratorios->setParametros($parametros);
			$resultado=$laboratorios->Insert();
			
			}
						
			
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
		if (isset ($_GET["id_laboratorios_edit"])   )
		{
			$_id_laboratorios = $_GET["id_laboratorios_edit"];
			$where    = "id_laboratorios = '$_id_laboratorios' ";
			$resultEdit = $laboratorios->getBy($where);
		
			
		}
		
		
		if (isset ($_GET["id_direcciones_editar"])   )
		{
			$resultGet=array();
			$_id_laboratorios=(int)$_GET["id_laboratorios"];
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
			
			
			 
		
			if($_id_laboratorios>0){
			
				$where    = "id_laboratorios = '$_id_laboratorios' ";
				$resultGet = $laboratorios->getBy($where);
				$_id_laboratorios=$resultGet[0]->id_laboratorios;
				$_nombre_laboratorios=$resultGet[0]->nombre_laboratorios;
				$persona_contacto_laboratorios=$resultGet[0]->persona_contacto_laboratorios;
				$telefono_persona_contacto_laboratorios=$resultGet[0]->telefono_persona_contacto_laboratorios;
				$email_laboratorios=$resultGet[0]->email_laboratorios;
				$web_laboratorios=$resultGet[0]->web_laboratorios;
			
			
			}
			
				
		}
		
		
		
		if(isset($_GET["id_direcciones"]))
		{
			
		
			$resultGet=array();
			$id_direcciones=(int)$_GET["id_direcciones"];
			$_id_laboratorios=(int)$_GET["id_laboratorios"];
			$_nombre_laboratorios=$_GET["nombre_laboratorios"];
			$direcciones=new DireccionesModel();
		
			$direcciones->deleteBy("id_direcciones",$id_direcciones);
		    
			
			if($_id_laboratorios>0){
		
				$where    = "id_laboratorios = '$_id_laboratorios' ";
				$resultGet = $laboratorios->getBy($where);
				$_id_laboratorios=$resultGet[0]->id_laboratorios;
				$_nombre_laboratorios=$resultGet[0]->nombre_laboratorios;
				$persona_contacto_laboratorios=$resultGet[0]->persona_contacto_laboratorios;
				$telefono_persona_contacto_laboratorios=$resultGet[0]->telefono_persona_contacto_laboratorios;
				$email_laboratorios=$resultGet[0]->email_laboratorios;
				$web_laboratorios=$resultGet[0]->web_laboratorios;
			
				
			}
		
		}
		
		
		
		$columnasDir = " direcciones.id_direcciones, provincias.nombre_provincia, canton.nombre_canton, codigos_provincias.cod_telefono, paises.prefijo_telefonico_paises, direcciones.direccion_direcciones, direcciones.telefono_direcciones, direcciones.celular_direcciones"; 
		$tablasDir = " public.provincias, public.canton, public.direcciones, public.codigos_provincias, public.paises";
 		$whereDir  = " direcciones.id_provicnias = provincias.id_provincia AND direcciones.id_canton = canton.id_canton AND codigos_provincias.id_provincia = provincias.id_provincia AND provincias.id_pais = paises.id_pais AND direcciones.id_laboratorios = '$_id_laboratorios' ";
		$idDir  = "direcciones.id_direcciones";
		$resultDir = $direcciones->getCondiciones($columnasDir, $tablasDir, $whereDir, $idDir);
		
		//guardamos el distribuidores
		if (isset($_POST["btn_guardar"]) )
		{
			$_nombre_laboratorios             = mb_strtoupper($_POST["nombre_laboratorios"]);
			$_persona_contacto_laboratorios   = $_POST["persona_contacto_laboratorios"];
			$_telefono_persona_contacto_laboratorios   = $_POST["telefono_persona_contacto_laboratorios"];
			$_email_laboratorios              =  $_POST["email_laboratorios"] ;
			$_web_laboratorios                =  $_POST["web_laboratorios"] ;
			$_id_laboratorios	 =  $_POST["id_laboratorios"] ;
			
			if ($_FILES['logo_laboratorios']['tmp_name']!="")
			{
			$directorio = $_SERVER['DOCUMENT_ROOT'].'/Vademano/uploads/';
			
			$nombre = $_FILES['logo_laboratorios']['name'];
			$tipo = $_FILES['logo_laboratorios']['type'];
			$tamano = $_FILES['logo_laboratorios']['size'];
			move_uploaded_file($_FILES['logo_laboratorios']['tmp_name'],$directorio.$nombre);
			$data = file_get_contents($directorio.$nombre);
			$_logo_laboratorios = pg_escape_bytea($data);
			
			$funcion = "ins_laboratorios";
			$parametros = " '$_nombre_laboratorios' , '$_persona_contacto_laboratorios' , '$_telefono_persona_contacto_laboratorios' , '$_email_laboratorios' , '$_web_laboratorios' ,'{$_logo_laboratorios}'  ";
			$laboratorios->setFuncion($funcion);
			$laboratorios->setParametros($parametros);
			$resultado=$laboratorios->Insert();
			
			
			}else {
				
				$colval = " nombre_laboratorios = '$_nombre_laboratorios', persona_contacto_laboratorios = '$_persona_contacto_laboratorios',telefono_persona_contacto_laboratorios = '$_telefono_persona_contacto_laboratorios',email_laboratorios = '$_email_laboratorios', web_laboratorios = '$_web_laboratorios' ";
				$tabla = "laboratorios";
				$where = "id_laboratorios = '$_id_laboratorios'";
				$resultado=$laboratorios->UpdateBy($colval, $tabla, $where);
				
				
			}
				
			$this->redirect("Laboratorios", "index");
			
		}
		
		if (isset($_POST["btn_actualizar"]) )
		{
			$_nombre_laboratorios             = mb_strtoupper($_POST["nombre_laboratorios"]);
			$_persona_contacto_laboratorios   = $_POST["persona_contacto_laboratorios"];
			$_telefono_persona_contacto_laboratorios   = $_POST["telefono_persona_contacto_laboratorios"];
			$_email_laboratorios              =  $_POST["email_laboratorios"] ;
			$_web_laboratorios                =  $_POST["web_laboratorios"] ;
			$_id_laboratorios	 =  $_POST["id_laboratorios"] ;
				
			if ($_FILES['logo_laboratorios']['tmp_name']!="")
			{
				$directorio = $_SERVER['DOCUMENT_ROOT'].'/Vademano/uploads/';
					
				$nombre = $_FILES['logo_laboratorios']['name'];
				$tipo = $_FILES['logo_laboratorios']['type'];
				$tamano = $_FILES['logo_laboratorios']['size'];
				move_uploaded_file($_FILES['logo_laboratorios']['tmp_name'],$directorio.$nombre);
				$data = file_get_contents($directorio.$nombre);
				$_logo_laboratorios = pg_escape_bytea($data);
					
				$funcion = "ins_laboratorios";
				$parametros = " '$_nombre_laboratorios' , '$_persona_contacto_laboratorios' , '$_telefono_persona_contacto_laboratorios' , '$_email_laboratorios' , '$_web_laboratorios' ,'{$_logo_laboratorios}'  ";
				$laboratorios->setFuncion($funcion);
				$laboratorios->setParametros($parametros);
				$resultado=$laboratorios->Insert();
					
					
			}else {
			
				$colval = " nombre_laboratorios = '$_nombre_laboratorios', persona_contacto_laboratorios = '$_persona_contacto_laboratorios',telefono_persona_contacto_laboratorios = '$_telefono_persona_contacto_laboratorios',email_laboratorios = '$_email_laboratorios', web_laboratorios = '$_web_laboratorios' ";
				$tabla = "laboratorios";
				$where = "id_laboratorios = '$_id_laboratorios'";
				$resultado=$laboratorios->UpdateBy($colval, $tabla, $where);
			
			
			}
		
			$this->redirect("Laboratorios", "index");
				
		}
		else 
		{
			$this->view("LaboratoriosAdd",array(
					"resultEditDir"=>$resultEditDir,"persona_contacto_laboratorios"=>$persona_contacto_laboratorios,"telefono_persona_contacto_laboratorios"=>$telefono_persona_contacto_laboratorios,"email_laboratorios"=>$email_laboratorios,"web_laboratorios"=>$web_laboratorios,"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultProv"=>$resultProv, "resultCan"=>$resultCan, "resultDir"=>$resultDir, "id_laboratorios"=>$_id_laboratorios, "nombre_laboratorios"=>$_nombre_laboratorios , "nuevo_laboratorios"=>$_nuevo_laboratorios
			));
			
		}
		
	}
	
	
	
	public function Inserta(){
			
		session_start();
		$laboratorios = new LaboratoriosModel();
		$directorio = $_SERVER['DOCUMENT_ROOT'].'/Vademano/uploads/';
	
		if (isset($_POST["nombre_laboratorios"]) )
		{
				
				
			$_nombre_laboratorios             = mb_strtoupper($_POST["nombre_laboratorios"]);
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
			$direcciones = new DireccionesModel();
			$fichas = new FichasModel();
			$especies = new EspeciesModel();
			
			
			
			
			
			

			$columnasLab = "laboratorios.id_laboratorios,
					         laboratorios.nombre_laboratorios,
					         laboratorios.persona_contacto_laboratorios,
					  	     laboratorios.telefono_persona_contacto_laboratorios,
  							 laboratorios.email_laboratorios,
  							 laboratorios.web_laboratorios,
					         laboratorios.logo_laboratorios";
			$tablasLab   = "public.laboratorios";
			$whereLab    = "laboratorios.id_laboratorios =  $_id_laboratorios ";
			
			$idlab = "laboratorios.id_laboratorios";
				
			$resultRep=$laboratorios->getCondiciones($columnasLab, $tablasLab, $whereLab, $idlab);
			
			$tablaLab="<table>";
			if(!empty($resultRep))
			{
					
					
				foreach($resultRep as $res)
				{
					//para consulta de direcciones
					$columnaslabDir = "d.direccion_direcciones,d.telefono_direcciones,d.celular_direcciones,
						           ca.nombre_canton,pr.cod_telefono";
			
					$tablaslabDir   = "public.direcciones d		INNER JOIN public.canton ca
								ON d.id_canton = ca.id_canton INNER JOIN public.codigos_provincias pr
								ON pr.id_provincia = ca.id_provincias";
			
					$wherelabDir    = "d.id_laboratorios = '$res->id_laboratorios'";
					$idlabDir = "d.id_direcciones";
			
					$dtLabDireccion=$direcciones->getCondiciones($columnaslabDir, $tablaslabDir, $wherelabDir, $idlabDir);
			
			
					$nombre_laboratorio= $res->nombre_laboratorios;
					
					
					$tablaLab.="<tr>";
					$tablaLab.="<td style='text-align:left; font-family: Times New Roman; font-size:72%;'>";
					if(!empty($dtLabDireccion)){
						$tablaLab.="";
						foreach($dtLabDireccion as $resd)
						{
							$tablaLab.="<br>";
							$tablaLab.="<b>CIUDAD: </b>";
							$tablaLab.=$resd->nombre_canton;
							$tablaLab.="<br>";
							$tablaLab.="";
							$tablaLab.="<b>DIRECCIÓN: </b>";
							$tablaLab.=$resd->direccion_direcciones;
							$tablaLab.="<br>";
							$tablaLab.="";
							$tablaLab.="<b>TELÉFONO: </b> (593-2)&nbsp;";
							$tablaLab.=$resd->cod_telefono;
							$tablaLab.=$resd->telefono_direcciones;
							$tablaLab.="<br>";
							$tablaLab.="";
							$tablaLab.="<b>CELULAR: </b> (593-2)&nbsp;";
							$tablaLab.=$resd->celular_direcciones;
							$tablaLab.="<br>";
								
			
						}
					}
					$tablaLab.="</td>";
					$tablaLab.="</tr>";
			
			
				}
					
			}else{}
			$tablaLab.="</table>";
			
			
			
			
			
			
			
			
			
			
			$columnas = "f.id_fichas, f.nombre_fichas, clasificacion_farmacologica_fichas";
			$tablas   = "public.fichas f
					LEFT JOIN public.fichas_laboratorios ff
					ON ff.id_fichas = f.id_fichas";
			$where    = "f.tipo_ficha = 'P' AND ff.id_laboratorios='$_id_laboratorios'";
			$id = "f.id_fichas";
			$resultSet = $fichas->getCondiciones($columnas, $tablas, $where, $id);
			$cantidadResult= count($resultSet);
			
		
			
			
			
			$html="";
			if (!empty($resultSet))
			{
				 
				
				$html.='<center><span ><strong>PRODUCTOS DEL LABORATORIO '.$nombre_laboratorio.'</strong></span></center>';
				$html.='<div class="pull-left">';
				$html.='<span class="form-control"><strong>Productos: </strong>'.$cantidadResult.'</span>';
				$html.='<input type="hidden" value="'.$cantidadResult.'" id="total_query" name="total_query"/>' ;
				$html.='</div><br>';
				$html.='<table class="table table-hover">';
				$html.='<thead>';
				$html.='<tr class="info">';
				$html.='<th style="text-align: left;  font-size: 11px;">Nombre Producto</th>';
				$html.='<th style="text-align: left;  font-size: 11px;">Categoria Farmacológica</th>';
				$html.='<th style="text-align: left;  font-size: 11px;">Especies</th>';
				$html.='<th style="text-align: left;  font-size: 11px;"></th>';
				$html.='</tr>';
				$html.='</thead>';
				$html.='<tbody>';
				 
				foreach ($resultSet as $res)
				{
					 
					
					$columnasEsp = "especies.logo_especies,
							especies.id_especies";
					
					$tablasEsp  = "public.fichas_especies, 
									  public.especies";
					
					$whereEsp    = "fichas_especies.id_especies = especies.id_especies AND fichas_especies.id_fichas='$res->id_fichas'";
					$idEsp    = "fichas_especies.id_fichas_especies";
					
					$dtEsp=$especies->getCondiciones($columnasEsp, $tablasEsp, $whereEsp, $idEsp);
					
					$tablaEspcies="";
					if(!empty($dtEsp))
					{
						foreach($dtEsp as $res1)
						{
							$tablaEspcies.="";
							//$tablaEspcies.='<img src="'.$urlimag.'/Vademano/view/DevuelveImagen.php?id_valor='.$res->id_especies.'&id_nombre=id_especies&tabla=especies&campo=logo_especies"  width="40" height="40" />';
							$tablaEspcies.='<img src="view/DevuelveImagen.php?id_valor='.$res1->id_especies.'&id_nombre=id_especies&tabla=especies&campo=logo_especies"  width="34px" height="26px" />';
							$tablaEspcies.="";
						}
					
					}
					
					
					$html.='<tr>';
					$html.='<td style="font-size: 11px;">'.$res->nombre_fichas.'</td>';
					$html.='<td style="font-size: 11px;">'.$res->clasificacion_farmacologica_fichas.'</td>';
				    $html.='<td>'.$tablaEspcies.'</td>';
					$html.='<td style="font-size: 15px;"><span class="pull-right"><a href="index.php?controller=FichasProductos&action=verFichaOnline&id_fichas='.$res->id_fichas.'" target="_blank"><i class="glyphicon glyphicon-print"></i></a></span></td>';
					$html.='</tr>';
					 
				}
				 
				$html.='</tbody>';
				$html.='</table>';
				
			
				 
			
			}else{
			
				$html.='<div class="alert alert-warning alert-dismissable">';
				$html.='<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
				$html.='<h4>Aviso!!!</h4> No hay productos para mostrar';
				$html.='</div>';
			
			}
			
		 
			
	
		}
	
		$this->view("LaboratoriosOnline", array(	"resultRep"=>$resultRep, 'tablaLab'=>$tablaLab, 'html'=>$html
		));
	}
	
	
	
}
?>
