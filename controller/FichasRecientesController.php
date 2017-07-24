<?php
class FichasRecientesController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
public function index(){
	
		session_start();
	 
		$id_usuario =$_SESSION["id_usuario"];
		//hola
	    $fichas_recientes = new FichasRecientesModel();
	    
	    $columnas =  "fichas.id_fichas, fichas.nombre_fichas, fichas_recientes.creado";  
	    $tablas = "public.fichas, public.fichas_recientes, public.usuarios"; 
	    $where  = "fichas_recientes.id_fichas = fichas.id_fichas AND fichas_recientes.id_usuario = usuarios.id_usuario AND usuarios.id_usuario= '$id_usuario'"; 
	   
	    $id     = "fichas.nombre_fichas"; 
		$resultSet = $fichas_recientes->getCondiciones($columnas, $tablas, $where, $id);
		
			
		
		$this->view("FichasRecientes",array(
				"resultSet"=>$resultSet
				
		));
		
		
	}
	
	
	public function borrarId()
	{
		session_start();
		if(isset($_GET["id_fichas"]))
		{
			
			$id_usuario =$_SESSION["id_usuario"];
			$id_fichas=(int)$_GET["id_fichas"];
	
			$fichas_recientes=new FichasRecientesModel();
			$where= "id_fichas= '$id_fichas' AND id_usuario ='$id_usuario'";
			$resultado =   $fichas_recientes->deleteByWhere($where);
			
		}
		$this->redirect("FichasRecientes", "index");
		
	}
	
	public function ReporteFicha(){
	
		if(isset($_GET["id_fichas"]))
		{
		
		$_id_fichas = $_GET["id_fichas"];
		$_nombre_fichas = $_GET["nombre_fichas"];
		//Creamos el objeto usuario
		$fichas=new FichasModel();
		//Conseguimos todos los usuarios
	
		$fichas_fotos = new FichasFotosModel();
	
	
		$columnas = " fichas.id_fichas, 
					  fichas.nombre_fichas, 
					  fichas.encabezado_tabla_fichas, 
					  fichas.farmacocinetica_fichas, 
					  fichas.accion_terapeutica_fichas, 
					  fichas.clasificacion_farmacologica_fichas, 
					  fichas.forma_terapeutica_fichas, 
					  fichas.indicaciones_uso_fichas, 
					  fichas.forma_administracion_fichas, 
					  fichas.interacciones_fichas, 
					  fichas.contraindicaciones_fichas, 
					  fichas.periodo_retiro_fichas, 
					  fichas.advertencias_fichas, 
					  fichas.presentacion_fichas, 
					  fichas.registro_sanitario_fichas, 
					  fichas.id_distribuidores, 
					  distribuidores.nombre_distribuidores, 
					  fichas.id_laboratorios, 
					  laboratorios.nombre_laboratorios";
		$tablas   = "  public.fichas, 
  						public.distribuidores, 
  						public.laboratorios";
		$where    = " distribuidores.id_distribuidores = fichas.id_distribuidores AND laboratorios.id_laboratorios = fichas.id_laboratorios
				      AND fichas.id_fichas = '$_id_fichas' ";
		$id       = "fichas.id_fichas";
	
	
		//$columnas2 = " 'TOTALES' AS totales,  SUM(paginas_documentos_legal) AS total_paginas, COUNT(id_documentos_legal) AS total_documentos";
		//$where2 = "id_documentos_legal > 0";
	
	
	
			$resultRep = $fichas->getCondicionesPDF($columnas, $tablas, $where, $id);
	
			$resultRep2 = "";
				
	
				
				
			$this->report("FichasProductos",array(	"resultRep"=>$resultRep, "id_fichas"=>$_id_fichas, "nombre_fichas"=>$_nombre_fichas));
	
		}
	}
	
    
   	
}
?>
