<?php

require_once('view/dompdf/dompdf_config.inc.php' );;

class FichasAlimentosController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
public function index(){
	
	session_start();
	$existe="false";
	    $fichas = new FichasModel();
	    $columnas = "f.id_fichas,f.nombre_fichas,f.encabezado_tabla_fichas,f.farmacocinetica_fichas
	,accion_terapeutica_fichas,clasificacion_farmacologica_fichas,f.forma_terapeutica_fichas
	,f.indicaciones_uso_fichas,f.interacciones_fichas,f.contraindicaciones_fichas,f.periodo_retiro_fichas
	,f.periodo_retiro_fichas,f.advertencias_fichas,f.presentacion_fichas,f.registro_sanitario_fichas
	,f.mecanismo_accion_fichas,f.efectos_colaterales_fichas,f.conservacion_fichas,f.encabezado_dosificacion_fichas
	,f.ingredientes_fichas,f.tipo_alimento_fichas,ff.foto_fichas_fotos,ff.id_fichas_fotos, f.nombre_laboratorio";
	    
	   $tablas   = "public.fichas f
					LEFT JOIN public.fichas_fotos ff
					ON ff.id_fichas = f.id_fichas";
	   $where    = "f.tipo_ficha = 'A'";
	   $id = "f.id_fichas";
	   $resultSet = $fichas->getCondiciones($columnas, $tablas, $where, $id);
		
	   $resultMenu=array(0=>'--TODOS--',1=>'Nombre Producto');
		
	   if (isset($_POST["btn_buscar"]))
	   {
	   
	   
	     $columnas1 = "f.id_fichas,f.nombre_fichas,f.encabezado_tabla_fichas,f.farmacocinetica_fichas
	,accion_terapeutica_fichas,clasificacion_farmacologica_fichas,f.forma_terapeutica_fichas
	,f.indicaciones_uso_fichas,f.interacciones_fichas,f.contraindicaciones_fichas,f.periodo_retiro_fichas
	,f.periodo_retiro_fichas,f.advertencias_fichas,f.presentacion_fichas,f.registro_sanitario_fichas
	,f.mecanismo_accion_fichas,f.efectos_colaterales_fichas,f.conservacion_fichas,f.encabezado_dosificacion_fichas
	,f.ingredientes_fichas,f.tipo_alimento_fichas,ff.foto_fichas_fotos,ff.id_fichas_fotos, f.nombre_laboratorio";
	    
	   $tablas1   = "public.fichas f
					LEFT JOIN public.fichas_fotos ff
					ON ff.id_fichas = f.id_fichas";
	$where1    = "f.tipo_ficha = 'A'";
	   $id1 = "f.id_fichas";
	
	   
	   	$criterio = $_POST["criterio_busqueda"];
	   	$contenido = mb_strtoupper($_POST["contenido_busqueda"]);
	   
	   
	   
	   	if ($contenido !="")
	   	{
	   
	   		$where_0 = "";
	   		$where_2 = "";
	   
	   		 
	   
	   		switch ($criterio) {
	   			case 0:
	   				$where_0 = " ";
	   				break;
	   			case 1:
	   
	   				$where_2 = " AND f.nombre_fichas LIKE '$contenido%'  ";
	   				break;
	   				 
	   		}
	   
	   
	   
	   		$where_to  = $where1 .  $where_0.  $where_2;
	   
	   
	   		$resul = $where_to;
	   		 
	   		//Conseguimos todos los usuarios con filtros
	   		$resultSet=$fichas->getCondiciones($columnas1 ,$tablas1 ,$where_to, $id1);
	   
	   
	   
	   
	   	}
	   }
	   
	   
	   
	   $resultEdit = "";
			
		if (isset ($_GET["id_fichas"])   )
			{
				$_id_fichas = $_GET["id_fichas"];
				$where    = $where    = "fichas.id_distribuidores = distribuidores.id_distribuidores AND
  					fichas.id_laboratorios = laboratorios.id_laboratorios AND fichas.id_fichas = '$_id_fichas' "; 
				$resultEdit = $fichas->getCondiciones($columnas, $tablas, $where, $id);
				
			}
			
				
			
		$this->view("FichasAlimentos",array(
				"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultMenu"=>$resultMenu, "existe"=>$existe
			));
		
		
	}
	
	public function index_dos(){
	
		session_start();
		$fichas = new FichasModel();
		
		$existe="false";
	
		$columnas = "f.id_fichas,f.nombre_fichas,f.encabezado_tabla_fichas,f.farmacocinetica_fichas
	,accion_terapeutica_fichas,clasificacion_farmacologica_fichas,f.forma_terapeutica_fichas
	,f.indicaciones_uso_fichas,f.interacciones_fichas,f.contraindicaciones_fichas,f.periodo_retiro_fichas
	,f.periodo_retiro_fichas,f.advertencias_fichas,f.presentacion_fichas,f.registro_sanitario_fichas
	,f.mecanismo_accion_fichas,f.efectos_colaterales_fichas,f.conservacion_fichas,f.encabezado_dosificacion_fichas
	,f.ingredientes_fichas,f.tipo_alimento_fichas,ff.foto_fichas_fotos,ff.id_fichas_fotos, f.nombre_laboratorio";
		 
		$tablas   = "public.fichas f
					LEFT JOIN public.fichas_fotos ff
					ON ff.id_fichas = f.id_fichas";
		$where    = "f.tipo_ficha = 'A'";
		$id = "f.id_fichas";
		$resultSet = $fichas->getCondiciones($columnas, $tablas, $where, $id);
		
		$resultMenu=array(0=>'--TODOS--',1=>'Nombre Producto');
		
		
		
		$resultEditCompo="";
		$resultEditDosi="";
		$resultEditEspecies="";
		$resultEditFormAdm="";
		$resultEditDistri="";
		$resultEditLabo="";
		$resultEditLogo="";
		$resFicLogo="";
		
		$_id_fichas="";
		$_nombre_fichas="";
		$encabezado_tabla_fichas="";
		$farmacocinetica_fichas="";
		$accion_terapeutica_fichas="";
		$clasificacion_farmacologica_fichas="";
		$forma_terapeutica_fichas ="";
		$indicaciones_uso_fichas ="";
		$interacciones_fichas ="";
		$contraindicaciones_fichas ="";
		$periodo_retiro_fichas ="";
		$advertencias_fichas ="";
		$presentacion_fichas ="";
		$registro_sanitario_fichas ="";
		$mecanismo_accion_fichas ="";
		$efectos_colaterales_fichas ="";
		$conservacion_fichas  ="";
		$ingredientes_fichas="";
		$tipo_alimento_fichas ="";
		$encabezado_dosificacion_fichas ="";
			
		
		$unidades_medida = new UnidadesMedidaModel();
		$resultUme = $unidades_medida->getAll("nombre_unidades_medida");
		
		$composiciones = new ComposicionesModel();
		$resultCom = $composiciones->getAll("nombre_composiciones");
		
		$especies = new EspeciesModel();
		$resultEsp = $especies->getAll("nombre_especies");
		
		
		$distribuidores = new DistribuidoresModel();
		$resultDis = $distribuidores->getAll("nombre_distribuidores");
		
		$laboratorios = new LaboratoriosModel();
		$resultLab = $laboratorios->getAll("nombre_laboratorios");
		
		$fichas_composiciones_model = new FichasComposicionesModel();
		$fichas_dosificacion_model = new FichasDosificacionModel();
		$fichas_distribuidores_model = new FichasDistribuidoresModel();
		$fichas_laboratorios_model = new FichasLaboratoriosModel();
		$fichas_formas_administracion_model= new FichasFormasAdministracionModel();
		$especies_model = new FichasEspeciesModel();
		
		
		
		$resultEdit = "";
		$_nombre_fichas = "";
		
		$_id_fichas = 0  ;
		
		$_nueva_ficha = FALSE;
		
		
		if (isset ($_GET["id_fichas_edit"])   )
		{
			$_id_fichas = $_GET["id_fichas_edit"];
			$where    = "id_fichas = '$_id_fichas' ";
			$resultEdit = $fichas->getBy($where);
		
				
		}
		
		
		if (isset ($_GET["id_fichas_composiciones_editar"])   )
		{
			$resultGet=array();
			$_id_fichas=(int)$_GET["id_fichas"];
			$id_fichas_composiciones_editar = $_GET["id_fichas_composiciones_editar"];
		
				
			$where = "id_fichas_composiciones = '$id_fichas_composiciones_editar' ";
			$resultEditCompo = $fichas_composiciones_model->getBy($where);
				
			if($_id_fichas>0){
		
				$where    = "id_fichas = '$_id_fichas' ";
				$resultGet = $fichas->getBy($where);
					
					
				foreach($resultGet as $res)
				{
					$_id_fichas=$res->id_fichas;
					$_nombre_fichas=$res->nombre_fichas;
					$encabezado_tabla_fichas=$res->encabezado_tabla_fichas;
					$farmacocinetica_fichas=$res->farmacocinetica_fichas;
					$accion_terapeutica_fichas=$res->accion_terapeutica_fichas;
					$clasificacion_farmacologica_fichas=$res->clasificacion_farmacologica_fichas;
					$forma_terapeutica_fichas =$res->forma_terapeutica_fichas;
					$indicaciones_uso_fichas =$res->indicaciones_uso_fichas;
					$interacciones_fichas =$res->interacciones_fichas;
					$contraindicaciones_fichas =$res->contraindicaciones_fichas;
					$periodo_retiro_fichas =$res->periodo_retiro_fichas;
					$advertencias_fichas =$res->advertencias_fichas;
					$presentacion_fichas =$res->presentacion_fichas;
					$registro_sanitario_fichas =$res->registro_sanitario_fichas;
					$mecanismo_accion_fichas =$res->mecanismo_accion_fichas;
					$efectos_colaterales_fichas =$res->efectos_colaterales_fichas;
					$conservacion_fichas  =$res->conservacion_fichas;
					$ingredientes_fichas=$res->ingredientes_fichas;
					$tipo_alimento_fichas =$res->tipo_alimento_fichas;
					$encabezado_dosificacion_fichas =$res->encabezado_dosificacion_fichas;
				}
					
		
			}
		
		}
		
		
		if(isset($_GET["id_fichas_composiciones_borrar"]))
		{
				
			$resultGet=array();
			$_id_fichas=(int)$_GET["id_fichas"];
			$id_fichas_composiciones_borrar=(int)$_GET["id_fichas_composiciones_borrar"];
				
			$fichas_composiciones_model->deleteBy("id_fichas_composiciones",$id_fichas_composiciones_borrar);
				
			if($_id_fichas>0){
					
				$where    = "id_fichas = '$_id_fichas' ";
				$resultGet = $fichas->getBy($where);
					
		
				foreach($resultGet as $res)
				{
					$_id_fichas=$res->id_fichas;
					$_nombre_fichas=$res->nombre_fichas;
					$encabezado_tabla_fichas=$res->encabezado_tabla_fichas;
					$farmacocinetica_fichas=$res->farmacocinetica_fichas;
					$accion_terapeutica_fichas=$res->accion_terapeutica_fichas;
					$clasificacion_farmacologica_fichas=$res->clasificacion_farmacologica_fichas;
					$forma_terapeutica_fichas =$res->forma_terapeutica_fichas;
					$indicaciones_uso_fichas =$res->indicaciones_uso_fichas;
					$interacciones_fichas =$res->interacciones_fichas;
					$contraindicaciones_fichas =$res->contraindicaciones_fichas;
					$periodo_retiro_fichas =$res->periodo_retiro_fichas;
					$advertencias_fichas =$res->advertencias_fichas;
					$presentacion_fichas =$res->presentacion_fichas;
					$registro_sanitario_fichas =$res->registro_sanitario_fichas;
					$mecanismo_accion_fichas =$res->mecanismo_accion_fichas;
					$efectos_colaterales_fichas =$res->efectos_colaterales_fichas;
					$conservacion_fichas  =$res->conservacion_fichas;
					$ingredientes_fichas=$res->ingredientes_fichas;
					$tipo_alimento_fichas =$res->tipo_alimento_fichas;
					$encabezado_dosificacion_fichas =$res->encabezado_dosificacion_fichas;
				}
					
					
					
					
					
			}
		
		}
		
		
		if (isset ($_GET["id_fichas_dosificacion_editar"])   )
		{
			$resultGet=array();
			$_id_fichas=(int)$_GET["id_fichas"];
			$id_fichas_dosificacion_editar = $_GET["id_fichas_dosificacion_editar"];
		
		
			$where = "id_fichas_dosificacion = '$id_fichas_dosificacion_editar' ";
			$resultEditDosi = $fichas_dosificacion_model->getBy($where);
		
			if($_id_fichas>0){
					
				$where    = "id_fichas = '$_id_fichas' ";
				$resultGet = $fichas->getBy($where);
					
		
				foreach($resultGet as $res)
				{
					$_id_fichas=$res->id_fichas;
					$_nombre_fichas=$res->nombre_fichas;
					$encabezado_tabla_fichas=$res->encabezado_tabla_fichas;
					$farmacocinetica_fichas=$res->farmacocinetica_fichas;
					$accion_terapeutica_fichas=$res->accion_terapeutica_fichas;
					$clasificacion_farmacologica_fichas=$res->clasificacion_farmacologica_fichas;
					$forma_terapeutica_fichas =$res->forma_terapeutica_fichas;
					$indicaciones_uso_fichas =$res->indicaciones_uso_fichas;
					$interacciones_fichas =$res->interacciones_fichas;
					$contraindicaciones_fichas =$res->contraindicaciones_fichas;
					$periodo_retiro_fichas =$res->periodo_retiro_fichas;
					$advertencias_fichas =$res->advertencias_fichas;
					$presentacion_fichas =$res->presentacion_fichas;
					$registro_sanitario_fichas =$res->registro_sanitario_fichas;
					$mecanismo_accion_fichas =$res->mecanismo_accion_fichas;
					$efectos_colaterales_fichas =$res->efectos_colaterales_fichas;
					$conservacion_fichas  =$res->conservacion_fichas;
					$ingredientes_fichas=$res->ingredientes_fichas;
					$tipo_alimento_fichas =$res->tipo_alimento_fichas;
					$encabezado_dosificacion_fichas =$res->encabezado_dosificacion_fichas;
				}
					
					
					
					
					
			}
		
		}
		
		
		if(isset($_GET["id_fichas_dosificacion_borrar"]))
		{
		
			$resultGet=array();
			$_id_fichas=(int)$_GET["id_fichas"];
			$id_fichas_dosificacion_borrar=(int)$_GET["id_fichas_dosificacion_borrar"];
			$fichas_dosificacion_model->deleteBy("id_fichas_dosificacion",$id_fichas_dosificacion_borrar);
		
			if($_id_fichas>0){
					
				$where    = "id_fichas = '$_id_fichas' ";
				$resultGet = $fichas->getBy($where);
					
		
				foreach($resultGet as $res)
				{
					$_id_fichas=$res->id_fichas;
					$_nombre_fichas=$res->nombre_fichas;
					$encabezado_tabla_fichas=$res->encabezado_tabla_fichas;
					$farmacocinetica_fichas=$res->farmacocinetica_fichas;
					$accion_terapeutica_fichas=$res->accion_terapeutica_fichas;
					$clasificacion_farmacologica_fichas=$res->clasificacion_farmacologica_fichas;
					$forma_terapeutica_fichas =$res->forma_terapeutica_fichas;
					$indicaciones_uso_fichas =$res->indicaciones_uso_fichas;
					$interacciones_fichas =$res->interacciones_fichas;
					$contraindicaciones_fichas =$res->contraindicaciones_fichas;
					$periodo_retiro_fichas =$res->periodo_retiro_fichas;
					$advertencias_fichas =$res->advertencias_fichas;
					$presentacion_fichas =$res->presentacion_fichas;
					$registro_sanitario_fichas =$res->registro_sanitario_fichas;
					$mecanismo_accion_fichas =$res->mecanismo_accion_fichas;
					$efectos_colaterales_fichas =$res->efectos_colaterales_fichas;
					$conservacion_fichas  =$res->conservacion_fichas;
					$ingredientes_fichas=$res->ingredientes_fichas;
					$tipo_alimento_fichas =$res->tipo_alimento_fichas;
					$encabezado_dosificacion_fichas =$res->encabezado_dosificacion_fichas;
				}
					
					
					
					
					
			}
		}
		
		
		if (isset ($_GET["id_fichas_distribuidores_editar"])   )
		{
			$resultGet=array();
			$_id_fichas=(int)$_GET["id_fichas"];
			$id_fichas_distribuidores_editar = $_GET["id_fichas_distribuidores_editar"];
		
		
			$where = "id_fichas_distribuidores = '$id_fichas_distribuidores_editar' ";
			$resultEditDistri = $fichas_distribuidores_model->getBy($where);
		
			if($_id_fichas>0){
					
				$where    = "id_fichas = '$_id_fichas' ";
				$resultGet = $fichas->getBy($where);
					
		
				foreach($resultGet as $res)
				{
					$_id_fichas=$res->id_fichas;
					$_nombre_fichas=$res->nombre_fichas;
					$encabezado_tabla_fichas=$res->encabezado_tabla_fichas;
					$farmacocinetica_fichas=$res->farmacocinetica_fichas;
					$accion_terapeutica_fichas=$res->accion_terapeutica_fichas;
					$clasificacion_farmacologica_fichas=$res->clasificacion_farmacologica_fichas;
					$forma_terapeutica_fichas =$res->forma_terapeutica_fichas;
					$indicaciones_uso_fichas =$res->indicaciones_uso_fichas;
					$interacciones_fichas =$res->interacciones_fichas;
					$contraindicaciones_fichas =$res->contraindicaciones_fichas;
					$periodo_retiro_fichas =$res->periodo_retiro_fichas;
					$advertencias_fichas =$res->advertencias_fichas;
					$presentacion_fichas =$res->presentacion_fichas;
					$registro_sanitario_fichas =$res->registro_sanitario_fichas;
					$mecanismo_accion_fichas =$res->mecanismo_accion_fichas;
					$efectos_colaterales_fichas =$res->efectos_colaterales_fichas;
					$conservacion_fichas  =$res->conservacion_fichas;
					$ingredientes_fichas=$res->ingredientes_fichas;
					$tipo_alimento_fichas =$res->tipo_alimento_fichas;
					$encabezado_dosificacion_fichas =$res->encabezado_dosificacion_fichas;
				}
					
					
					
					
					
			}
		}
		
		
		if(isset($_GET["id_fichas_distribuidores_borrar"]))
		{
		
			$resultGet=array();
			$_id_fichas=(int)$_GET["id_fichas"];
			$id_fichas_distribuidores_borrar=(int)$_GET["id_fichas_distribuidores_borrar"];
			$fichas_distribuidores_model->deleteBy("id_fichas_distribuidores",$id_fichas_distribuidores_borrar);
		
			if($_id_fichas>0){
					
				$where    = "id_fichas = '$_id_fichas' ";
				$resultGet = $fichas->getBy($where);
					
		
				foreach($resultGet as $res)
				{
					$_id_fichas=$res->id_fichas;
					$_nombre_fichas=$res->nombre_fichas;
					$encabezado_tabla_fichas=$res->encabezado_tabla_fichas;
					$farmacocinetica_fichas=$res->farmacocinetica_fichas;
					$accion_terapeutica_fichas=$res->accion_terapeutica_fichas;
					$clasificacion_farmacologica_fichas=$res->clasificacion_farmacologica_fichas;
					$forma_terapeutica_fichas =$res->forma_terapeutica_fichas;
					$indicaciones_uso_fichas =$res->indicaciones_uso_fichas;
					$interacciones_fichas =$res->interacciones_fichas;
					$contraindicaciones_fichas =$res->contraindicaciones_fichas;
					$periodo_retiro_fichas =$res->periodo_retiro_fichas;
					$advertencias_fichas =$res->advertencias_fichas;
					$presentacion_fichas =$res->presentacion_fichas;
					$registro_sanitario_fichas =$res->registro_sanitario_fichas;
					$mecanismo_accion_fichas =$res->mecanismo_accion_fichas;
					$efectos_colaterales_fichas =$res->efectos_colaterales_fichas;
					$conservacion_fichas  =$res->conservacion_fichas;
					$ingredientes_fichas=$res->ingredientes_fichas;
					$tipo_alimento_fichas =$res->tipo_alimento_fichas;
					$encabezado_dosificacion_fichas =$res->encabezado_dosificacion_fichas;
				}
					
					
					
					
					
			}
		}
		
		if (isset ($_GET["id_fichas_laboratorios_editar"])   )
		{
			$resultGet=array();
			$_id_fichas=(int)$_GET["id_fichas"];
			$id_fichas_laboratorios_editar = $_GET["id_fichas_laboratorios_editar"];
		
		
			$where = "id_fichas_laboratorios = '$id_fichas_laboratorios_editar' ";
			$resultEditLabo = $fichas_laboratorios_model->getBy($where);
		
			if($_id_fichas>0){
					
				$where    = "id_fichas = '$_id_fichas' ";
				$resultGet = $fichas->getBy($where);
					
		
				foreach($resultGet as $res)
				{
					$_id_fichas=$res->id_fichas;
					$_nombre_fichas=$res->nombre_fichas;
					$encabezado_tabla_fichas=$res->encabezado_tabla_fichas;
					$farmacocinetica_fichas=$res->farmacocinetica_fichas;
					$accion_terapeutica_fichas=$res->accion_terapeutica_fichas;
					$clasificacion_farmacologica_fichas=$res->clasificacion_farmacologica_fichas;
					$forma_terapeutica_fichas =$res->forma_terapeutica_fichas;
					$indicaciones_uso_fichas =$res->indicaciones_uso_fichas;
					$interacciones_fichas =$res->interacciones_fichas;
					$contraindicaciones_fichas =$res->contraindicaciones_fichas;
					$periodo_retiro_fichas =$res->periodo_retiro_fichas;
					$advertencias_fichas =$res->advertencias_fichas;
					$presentacion_fichas =$res->presentacion_fichas;
					$registro_sanitario_fichas =$res->registro_sanitario_fichas;
					$mecanismo_accion_fichas =$res->mecanismo_accion_fichas;
					$efectos_colaterales_fichas =$res->efectos_colaterales_fichas;
					$conservacion_fichas  =$res->conservacion_fichas;
					$ingredientes_fichas=$res->ingredientes_fichas;
					$tipo_alimento_fichas =$res->tipo_alimento_fichas;
					$encabezado_dosificacion_fichas =$res->encabezado_dosificacion_fichas;
				}
					
					
					
					
					
			}
		
		}
		
		
		if(isset($_GET["id_fichas_laboratorios_borrar"]))
		{
		
			$resultGet=array();
			$_id_fichas=(int)$_GET["id_fichas"];
			$id_fichas_laboratorios_borrar=(int)$_GET["id_fichas_laboratorios_borrar"];
			$fichas_laboratorios_model->deleteBy("id_fichas_laboratorios",$id_fichas_laboratorios_borrar);
		
			if($_id_fichas>0){
					
				$where    = "id_fichas = '$_id_fichas' ";
				$resultGet = $fichas->getBy($where);
					
		
				foreach($resultGet as $res)
				{
					$_id_fichas=$res->id_fichas;
					$_nombre_fichas=$res->nombre_fichas;
					$encabezado_tabla_fichas=$res->encabezado_tabla_fichas;
					$farmacocinetica_fichas=$res->farmacocinetica_fichas;
					$accion_terapeutica_fichas=$res->accion_terapeutica_fichas;
					$clasificacion_farmacologica_fichas=$res->clasificacion_farmacologica_fichas;
					$forma_terapeutica_fichas =$res->forma_terapeutica_fichas;
					$indicaciones_uso_fichas =$res->indicaciones_uso_fichas;
					$interacciones_fichas =$res->interacciones_fichas;
					$contraindicaciones_fichas =$res->contraindicaciones_fichas;
					$periodo_retiro_fichas =$res->periodo_retiro_fichas;
					$advertencias_fichas =$res->advertencias_fichas;
					$presentacion_fichas =$res->presentacion_fichas;
					$registro_sanitario_fichas =$res->registro_sanitario_fichas;
					$mecanismo_accion_fichas =$res->mecanismo_accion_fichas;
					$efectos_colaterales_fichas =$res->efectos_colaterales_fichas;
					$conservacion_fichas  =$res->conservacion_fichas;
					$ingredientes_fichas=$res->ingredientes_fichas;
					$tipo_alimento_fichas =$res->tipo_alimento_fichas;
					$encabezado_dosificacion_fichas =$res->encabezado_dosificacion_fichas;
				}
					
					
					
					
					
			}
		}
		
		
		
		
		
		if (isset ($_GET["id_fichas_fotos_editar"])   )
		{
			$fichas_fotos_model = new FichasFotosModel();
				
			$resultGet=array();
			$_id_fichas=(int)$_GET["id_fichas"];
			$id_fichas_fotos_editar = $_GET["id_fichas_fotos_editar"];
		
		
			$where = "id_fichas_fotos = '$id_fichas_fotos_editar' ";
			$resultEditLogo = $fichas_fotos_model->getBy($where);
		
			if($_id_fichas>0){
					
				$where    = "id_fichas = '$_id_fichas' ";
				$resultGet = $fichas->getBy($where);
					
		
				foreach($resultGet as $res)
				{
					$_id_fichas=$res->id_fichas;
					$_nombre_fichas=$res->nombre_fichas;
					$encabezado_tabla_fichas=$res->encabezado_tabla_fichas;
					$farmacocinetica_fichas=$res->farmacocinetica_fichas;
					$accion_terapeutica_fichas=$res->accion_terapeutica_fichas;
					$clasificacion_farmacologica_fichas=$res->clasificacion_farmacologica_fichas;
					$forma_terapeutica_fichas =$res->forma_terapeutica_fichas;
					$indicaciones_uso_fichas =$res->indicaciones_uso_fichas;
					$interacciones_fichas =$res->interacciones_fichas;
					$contraindicaciones_fichas =$res->contraindicaciones_fichas;
					$periodo_retiro_fichas =$res->periodo_retiro_fichas;
					$advertencias_fichas =$res->advertencias_fichas;
					$presentacion_fichas =$res->presentacion_fichas;
					$registro_sanitario_fichas =$res->registro_sanitario_fichas;
					$mecanismo_accion_fichas =$res->mecanismo_accion_fichas;
					$efectos_colaterales_fichas =$res->efectos_colaterales_fichas;
					$conservacion_fichas  =$res->conservacion_fichas;
					$ingredientes_fichas=$res->ingredientes_fichas;
					$tipo_alimento_fichas =$res->tipo_alimento_fichas;
					$encabezado_dosificacion_fichas =$res->encabezado_dosificacion_fichas;
				}
					
					
					
					
					
			}
		
		}
		
		
		if(isset($_GET["id_fichas_fotos_borrar"]))
		{
			$fichas_fotos_model = new FichasFotosModel();
				
			$resultGet=array();
			$_id_fichas=(int)$_GET["id_fichas"];
			$id_fichas_fotos_borrar=(int)$_GET["id_fichas_fotos_borrar"];
			$fichas_fotos_model->deleteBy("id_fichas_fotos",$id_fichas_fotos_borrar);
		
			if($_id_fichas>0){
					
				$where    = "id_fichas = '$_id_fichas' ";
				$resultGet = $fichas->getBy($where);
					
		
				foreach($resultGet as $res)
				{
					$_id_fichas=$res->id_fichas;
					$_nombre_fichas=$res->nombre_fichas;
					$encabezado_tabla_fichas=$res->encabezado_tabla_fichas;
					$farmacocinetica_fichas=$res->farmacocinetica_fichas;
					$accion_terapeutica_fichas=$res->accion_terapeutica_fichas;
					$clasificacion_farmacologica_fichas=$res->clasificacion_farmacologica_fichas;
					$forma_terapeutica_fichas =$res->forma_terapeutica_fichas;
					$indicaciones_uso_fichas =$res->indicaciones_uso_fichas;
					$interacciones_fichas =$res->interacciones_fichas;
					$contraindicaciones_fichas =$res->contraindicaciones_fichas;
					$periodo_retiro_fichas =$res->periodo_retiro_fichas;
					$advertencias_fichas =$res->advertencias_fichas;
					$presentacion_fichas =$res->presentacion_fichas;
					$registro_sanitario_fichas =$res->registro_sanitario_fichas;
					$mecanismo_accion_fichas =$res->mecanismo_accion_fichas;
					$efectos_colaterales_fichas =$res->efectos_colaterales_fichas;
					$conservacion_fichas  =$res->conservacion_fichas;
					$ingredientes_fichas=$res->ingredientes_fichas;
					$tipo_alimento_fichas =$res->tipo_alimento_fichas;
					$encabezado_dosificacion_fichas =$res->encabezado_dosificacion_fichas;
				}
					
					
					
					
					
			}
		}
		
		
		
		
		
		
		if (isset($_POST["nombre_fichas"]))
		{
			$_nombre_fichas = mb_strtoupper($_POST["nombre_fichas"]);
		}
		
		
		//AGREGO EL NOMBRE Y DEVUELVO EL ID
		if (isset($_POST["btn_agregar_fichas"]) )
		{
			$_nombre_fichas   = mb_strtoupper($_POST["nombre_fichas"]);
			$_tipo_ficha= 'A';
			$res_productos=$fichas->getBy("nombre_fichas = '$_nombre_fichas' AND tipo_ficha = '$_tipo_ficha'");
				
			if ( !empty($res_productos) )
			{
				foreach($res_productos as $res) {
						
					$_id_fichas = $res->id_fichas;
				}
				if($_id_fichas>0){
					$existe="true";
				
				
					$this->view("FichasAlimentos",array(
						"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultMenu"=>$resultMenu, "existe"=>$existe, "nombre_fichas"=>$_nombre_fichas
				));
						
				
					exit();
				}
				
			}else{
			
			
			
			$_nueva_ficha = TRUE;
			$funcion = "ins_fichas_alimentos";
			$parametros = " '$_nombre_fichas', '$_tipo_ficha'";
			$fichas->setFuncion($funcion);
			$fichas->setParametros($parametros);
			$resultado=$fichas->Insert();
			}
		}
		
		$res_fichas=$fichas->getBy("nombre_fichas = '$_nombre_fichas' ");
			
			
		foreach($res_fichas as $res) {
		
			$_id_fichas = $res->id_fichas;
		}
	
		
		///agrego composiciones
		$fichas_composiciones = new FichasComposicionesModel();
		
		
		
		
	if (isset($_POST["btn_agregar_composicion"]) )
		{
			$_id_fichas        = $_POST["id_fichas"];;
			$_id_composiciones = $_POST["id_composiciones"];
			$_cantidad_fichas_composiciones   = $_POST["cantidad_fichas_composiciones"];
			$_id_unidades_medida   = $_POST["id_unidades_medida"];
			$id_fichas_composiciones = $_POST["id_fichas_composiciones"];
			
			if($id_fichas_composiciones>0){
				
				$colval = " id_fichas = '$_id_fichas', id_composiciones = '$_id_composiciones',cantidad_fichas_composiciones = '$_cantidad_fichas_composiciones',id_unidades_medida = '$_id_unidades_medida'";
				$tabla = "fichas_composiciones";
				$where = "id_fichas_composiciones = '$id_fichas_composiciones'";
				$resultado=$fichas_composiciones_model->UpdateBy($colval, $tabla, $where);
				
			}else{
				
				$funcion = "ins_fichas_composiciones";
				$parametros = " '$_id_fichas' , '$_id_composiciones' , '$_cantidad_fichas_composiciones', '$_id_unidades_medida'";
				$fichas_composiciones->setFuncion($funcion);
				$fichas_composiciones->setParametros($parametros);
				$resultado=$fichas_composiciones->Insert();
			}
			
		
		
		}
		
		$columnas_fc =  "fichas_composiciones.id_fichas_composiciones,
  						composiciones.nombre_composiciones,
  						fichas_composiciones.cantidad_fichas_composiciones,
				unidades_medida.id_unidades_medida, unidades_medida.nombre_unidades_medida
					 ";
		$tablas_fc = " public.composiciones, public.fichas_composiciones, public.unidades_medida";
		$where_fc  = " fichas_composiciones.id_composiciones = composiciones.id_composiciones 
		AND unidades_medida.id_unidades_medida=fichas_composiciones.id_unidades_medida
		AND fichas_composiciones.id_fichas = '$_id_fichas' ";
		$id_fc     = " composiciones.nombre_composiciones";
		
		$resFicCom = $fichas_composiciones->getCondiciones($columnas_fc, $tablas_fc, $where_fc, $id_fc);
		
		
		//agrego dosificaciones
		
		$fichas_dosificacion = new FichasDosificacionModel();
		
		if (isset($_POST["btn_agregar_dosificacion"]) )
		{
				
			$_id_especies1 = $_POST["id_especies_dosificacion"];
			$_dosis_fichas_dosificacion   = $_POST["dosis_fichas_dosificacion"];
			$_id_fichas        = $_POST["id_fichas"];
			$id_fichas_dosificacion = $_POST["id_fichas_dosificacion"];
			 
			if($id_fichas_dosificacion>0){
				$colval = " id_especies = '$_id_especies1', dosis_fichas_dosificacion = '$_dosis_fichas_dosificacion',id_fichas = '$_id_fichas'";
				$tabla = "fichas_dosificacion";
				$where = "id_fichas_dosificacion = '$id_fichas_dosificacion'";
				$resultado=$fichas_dosificacion->UpdateBy($colval, $tabla, $where);
				 
			}else{
				 
				$funcion = "ins_fichas_dosificacion";
				$parametros = "'$_id_especies1' , '$_dosis_fichas_dosificacion' , '$_id_fichas'";
				$fichas_dosificacion->setFuncion($funcion);
				$fichas_dosificacion->setParametros($parametros);
				$resultado=$fichas_dosificacion->Insert();
			}
			 
				
		
		}
		
		$columnas_ds =  " fichas_dosificacion.id_fichas_dosificacion,
  							especies.nombre_especies,
 							 fichas_dosificacion.dosis_fichas_dosificacion
					 	";
		$tablas_ds = " public.fichas_dosificacion, public.especies";
		$where_ds  = " fichas_dosificacion.id_especies = especies.id_especies
		AND  fichas_dosificacion.id_fichas = '$_id_fichas' ";
		$id_ds     = " especies.nombre_especies";
		
		$resFicDos = $fichas_dosificacion->getCondiciones($columnas_ds, $tablas_ds, $where_ds, $id_ds);
		
		
		//REGISTRANDO FICHAS DISTRIBUIDORES
		$fichas_distribuidores = new FichasDistribuidoresModel();
		
		if (isset($_POST["btn_agregar_distribuidores"]) )
		{
			$_id_fichas        = $_POST["id_fichas"];;
			$_id_distribuidores = $_POST["id_distribuidores"];
			$_id_fichas_distribuidores = $_POST["id_fichas_distribuidores"];
		
			if($_id_fichas_distribuidores>0){
				$colval = " id_distribuidores = '$_id_distribuidores', id_fichas = '$_id_fichas'";
				$tabla = "fichas_distribuidores";
				$where = "id_fichas_distribuidores = '$_id_fichas_distribuidores'";
				$resultado=$fichas_distribuidores->UpdateBy($colval, $tabla, $where);
					
			}else{
				$funcion = "ins_fichas_distribuidores";
				$parametros = "'$_id_fichas','$_id_distribuidores'";
				$fichas_distribuidores->setFuncion($funcion);
				$fichas_distribuidores->setParametros($parametros);
				$resultado=$fichas_distribuidores->Insert();
					
			}
		
		
		}
		
		$columnas_distri =  " fichas_distribuidores.id_fichas_distribuidores,
  							distribuidores.nombre_distribuidores";
		$tablas_distri = " public.fichas_distribuidores, public.distribuidores";
		$where_distri  = " fichas_distribuidores.id_distribuidores = distribuidores.id_distribuidores
		AND  fichas_distribuidores.id_fichas = '$_id_fichas' ";
		$id_distri     = "distribuidores.nombre_distribuidores";
		
		$resFicDistri = $fichas_distribuidores->getCondiciones($columnas_distri, $tablas_distri, $where_distri, $id_distri);
		
		
		
		//REGISTRANDO FICHAS LABORATORIOS
		
		$fichas_laboratorios = new FichasLaboratoriosModel();
		
		if (isset($_POST["btn_agregar_laboratorios"]) )
		{
			$_id_fichas        = $_POST["id_fichas"];;
			$_id_laboratorios = $_POST["id_laboratorios"];
			$_id_fichas_laboratorios= $_POST["id_fichas_laboratorios"];
		
			if($_id_fichas_laboratorios>0){
				$colval = " id_laboratorios = '$_id_laboratorios', id_fichas = '$_id_fichas'";
				$tabla = "fichas_laboratorios";
				$where = "id_fichas_laboratorios = '$_id_fichas_laboratorios'";
				$resultado=$fichas_laboratorios->UpdateBy($colval, $tabla, $where);
			}else{
				$funcion = "ins_fichas_laboratorios";
				$parametros = "'$_id_fichas', '$_id_laboratorios'";
				$fichas_laboratorios->setFuncion($funcion);
				$fichas_laboratorios->setParametros($parametros);
				$resultado=$fichas_laboratorios->Insert();
			}
		}
		
		$columnas_labo =  " fichas_laboratorios.id_fichas_laboratorios,
  							laboratorios.nombre_laboratorios
					 	";
		$tablas_labo = " public.fichas_laboratorios, public.laboratorios";
		$where_labo  = " fichas_laboratorios.id_laboratorios = laboratorios.id_laboratorios
		AND  fichas_laboratorios.id_fichas = '$_id_fichas' ";
		$id_labo     = "laboratorios.nombre_laboratorios";
		
		$resFicLabo = $fichas_laboratorios->getCondiciones($columnas_labo, $tablas_labo, $where_labo, $id_labo);
		
		
		
		$fichas_fotos = new FichasFotosModel();
		
		if (isset($_POST["btn_agregar_foto"]) )
		{
				
		
			$_id_fichas        = $_POST["id_fichas"];;
			$_id_fichas_fotos= $_POST["id_fichas_fotos"];
		
			if($_id_fichas_fotos>0){
		
					
				if ($_FILES['foto_fichas_fotos']['tmp_name']!="")
				{
					//para la foto
					$directorio = $_SERVER['DOCUMENT_ROOT'].'/Vademano/uploads/';
					$nombre = $_FILES['foto_fichas_fotos']['name'];
					$tipo = $_FILES['foto_fichas_fotos']['type'];
					$tamano = $_FILES['foto_fichas_fotos']['size'];
		
					// temporal al directorio definitivo
					move_uploaded_file($_FILES['foto_fichas_fotos']['tmp_name'],$directorio.$nombre);
					$data = file_get_contents($directorio.$nombre);
					$imagen_usuarios = pg_escape_bytea($data);
		
		
						
					$colval = " foto_fichas_fotos = '$imagen_usuarios', id_fichas = '$_id_fichas'";
					$tabla = "fichas_fotos";
					$where = "id_fichas_fotos = '$_id_fichas_fotos'";
					$resultado=$fichas_fotos->UpdateBy($colval, $tabla, $where);
		
				}
		
		
		
		
					
			}else{
				if ($_FILES['foto_fichas_fotos']['tmp_name']!="")
				{
					//para la foto
					$directorio = $_SERVER['DOCUMENT_ROOT'].'/Vademano/uploads/';
					$nombre = $_FILES['foto_fichas_fotos']['name'];
					$tipo = $_FILES['foto_fichas_fotos']['type'];
					$tamano = $_FILES['foto_fichas_fotos']['size'];
		
					// temporal al directorio definitivo
					move_uploaded_file($_FILES['foto_fichas_fotos']['tmp_name'],$directorio.$nombre);
					$data = file_get_contents($directorio.$nombre);
					$imagen_usuarios = pg_escape_bytea($data);
		
		
					$_id_fichas   =  $_POST["id_fichas"];
		
					$funcion = "ins_fichas_fotos";
					$parametros = " '$_id_fichas' ,'$imagen_usuarios' ";
					$fichas_fotos->setFuncion($funcion);
					$fichas_fotos->setParametros($parametros);
					$resultado=$fichas_fotos->Insert();
		
		
		
				}
			}
				
				
		}
		
		
		
		$columnas_logo =  " fichas_fotos.id_fichas_fotos,
							  fichas_fotos.id_fichas,
							  fichas_fotos.foto_fichas_fotos";
		$tablas_logo = " public.fichas_fotos,
  						public.fichas";
		$where_logo  = " fichas.id_fichas = fichas_fotos.id_fichas
		AND  fichas_fotos.id_fichas = '$_id_fichas' ";
		$id_logo     = "fichas_fotos.id_fichas_fotos";
		
		$resFicLogo = $fichas_fotos->getCondiciones($columnas_logo, $tablas_logo, $where_logo, $id_logo);
		
		
		
		
		
		//guardamos la ficha
		if (isset($_POST["btn_guardar"]) )
		{
			$fichas_fotos = new FichasFotosModel();
			$_id_fichas   =  $_POST["id_fichas"];
			$_id_fichas_fotos = 0;
				
			$resultID = $fichas_fotos->getCondiciones("id_fichas_fotos", "fichas_fotos", "id_fichas = '$_id_fichas'  ", "id_fichas");
			foreach($resultID as $res)
			{
				$_id_fichas_fotos =    $res->id_fichas_fotos;
			}
				
			$id_fichas     = $_id_fichas;
			$nombre_fichas = mb_strtoupper($_POST['nombre_fichas']);
			$indicaciones_uso_fichas = $_POST['indicaciones_uso_fichas'];
			$periodo_retiro_fichas = $_POST['periodo_retiro_fichas'] ;
			$presentacion_fichas = $_POST['presentacion_fichas'] ;
			$registro_sanitario_fichas = $_POST['registro_sanitario_fichas'];
			$conservacion_fichas = $_POST['conservacion_fichas']  ;
			$ingredientes_fichas = $_POST['ingredientes_fichas']  ;
			$tipo_alimento_fichas =  $_POST['tipo_alimento_fichas']  ;
			$encabezado_dosificacion_fichas =   $_POST['encabezado_dosificacion_fichas'] ;
			$encabezado_tabla_fichas =  $_POST['encabezado_tabla_fichas'] ;
				
			$id_distribuidores = $_POST['id_distribuidores'];
			$id_laboratorios = $_POST['id_laboratorios'];
			$_tipo_ficha='A';
			$id_fichas_fotos = $_id_fichas_fotos;
				
			$funcion = "ins_fichas_alimentos";
				
			$parametros = " '$id_fichas', '$nombre_fichas', 
			'$indicaciones_uso_fichas', 
			'$periodo_retiro_fichas', 
			'$presentacion_fichas', '$registro_sanitario_fichas',
			'$id_fichas_fotos',
			'$conservacion_fichas',
			'$ingredientes_fichas',
			'$tipo_alimento_fichas','$encabezado_tabla_fichas','$encabezado_dosificacion_fichas', '$_tipo_ficha'";
			$fichas->setFuncion($funcion);
			$fichas->setParametros($parametros);
			$resultado=$fichas->Insert();
				
					
			/*
			$fichas_distribuidores = new FichasDistribuidoresModel();
			$_id_distribuidores = $_POST["id_distribuidores"];
			$funcion = "ins_fichas_distribuidores";
			$parametros = "'$id_fichas','$_id_distribuidores'";
			$fichas_distribuidores->setFuncion($funcion);
			$fichas_distribuidores->setParametros($parametros);
			$resultado=$fichas_distribuidores->Insert();
			

			$fichas_laboratorios = new FichasLaboratoriosModel();
			$_id_laboratorios = $_POST["id_laboratorios"];
			$funcion = "ins_fichas_laboratorios";
			$parametros = "'$id_fichas','$_id_laboratorios'";
			$fichas_laboratorios->setFuncion($funcion);
			$fichas_laboratorios->setParametros($parametros);
			$resultado=$fichas_laboratorios->Insert();
			*/
			
			$this->redirect("FichasAlimentos", "index");
			
		}
		else 
		{
			$resultSet = "";
			
			
			
			$this->view("FichasAlimentosAdd",array(
					 
					"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultCom" =>$resultCom, "resultEsp" =>$resultEsp
					, "resultDis" =>$resultDis, "resultLab" =>$resultLab,
					"resFicCom"=>$resFicCom, "resFicDos"=>$resFicDos , 
					"id_fichas"=>$_id_fichas, "resultUme"=>$resultUme,
					"nombre_fichas"=>$_nombre_fichas , "nueva_ficha"=>$_nueva_ficha, "resFicDistri"=>$resFicDistri, "resFicLabo"=>$resFicLabo,"resultEditCompo"=>$resultEditCompo, 
					"resultEditDosi"=>$resultEditDosi,"resultEditLabo"=>$resultEditLabo,"resultEditDistri"=>$resultEditDistri,
					"resultEditLogo"=>$resultEditLogo,
					"resFicLogo"=>$resFicLogo,
					"encabezado_tabla_fichas"=>$encabezado_tabla_fichas,
					"farmacocinetica_fichas"=>$farmacocinetica_fichas,
					"accion_terapeutica_fichas"=>$accion_terapeutica_fichas,
					"clasificacion_farmacologica_fichas"=>$clasificacion_farmacologica_fichas,
					"forma_terapeutica_fichas"=>$forma_terapeutica_fichas,
					"indicaciones_uso_fichas"=>$indicaciones_uso_fichas,
					"interacciones_fichas"=>$interacciones_fichas,
					"contraindicaciones_fichas"=>$contraindicaciones_fichas,
					"periodo_retiro_fichas"=>$periodo_retiro_fichas,
					"advertencias_fichas"=>$advertencias_fichas,
					"presentacion_fichas"=>$presentacion_fichas,
					"registro_sanitario_fichas"=>$registro_sanitario_fichas,
					"mecanismo_accion_fichas"=>$mecanismo_accion_fichas,
					"efectos_colaterales_fichas"=>$efectos_colaterales_fichas,
					"conservacion_fichas"=>$conservacion_fichas,
					"ingredientes_fichas"=>$ingredientes_fichas,
					"tipo_alimento_fichas"=>$tipo_alimento_fichas,
					"encabezado_dosificacion_fichas"=>$encabezado_dosificacion_fichas
					
					 
			));
			
		}
		
		
		
		
		
	
	
	}
	
	public function Inserta(){
		session_start();
	}
	
	public function borrarId()
	{
		session_start();
		
		$fichas = new FichasModel();
		$fichas_composiciones = new FichasComposicionesModel();
		$fichas_dosificaciones = new FichasDosificacionModel();
		$fichas_distribuidores = new FichasDistribuidoresModel();
		$fichas_laboratorios = new FichasLaboratoriosModel();
		
		if(isset($_GET["id_fichas"]))
		{
			$id_fichas=(int)$_GET["id_fichas"];
	
			$fichas_composiciones->deleteBy(" id_fichas",$id_fichas);
			$fichas_dosificaciones->deleteBy(" id_fichas",$id_fichas);
			$fichas_distribuidores->deleteBy(" id_fichas",$id_fichas);
			$fichas_laboratorios->deleteBy(" id_fichas",$id_fichas);
				
			$fichas->deleteBy(" id_fichas",$id_fichas);
			
				
		}
	
		
			
		
		$this->redirect("FichasAlimentos", "index");
	}
	
	
	
	
	public function ReporteFicha(){
	
		session_start();
		if(isset($_GET["id_fichas"]))
		{
	
			$_id_fichas = $_GET["id_fichas"];
			$_nombre_fichas = $_GET["nombre_fichas"];
			//Creamos el objeto usuario
			$fichas=new FichasModel();
			//Conseguimos todos los usuarios
			
			$fichas_composiciones = new FichasComposicionesModel();
			$where_com = "id_fichas = '$_id_fichas' ";
			
			$fichas_dosificacion = new FichasDosificacionModel();
				
			
			$fichas_fotos = new FichasFotosModel();
	
	
			$columnas = " fichas.id_fichas,
					  fichas.nombre_fichas,
					  fichas.indicaciones_uso_fichas,
					  fichas.periodo_retiro_fichas,
					  fichas.presentacion_fichas,
					  fichas.registro_sanitario_fichas,
					  fichas.id_distribuidores,
					  distribuidores.nombre_distribuidores,
					  fichas.id_laboratorios,
					  laboratorios.nombre_laboratorios,
					  fichas.conservacion_fichas,
					  fichas.ingredientes_fichas,
					  fichas.tipo_alimento_fichas";
			$tablas   = "  public.fichas,
  						public.distribuidores,
  						public.laboratorios";
			$where    = " distribuidores.id_distribuidores = fichas.id_distribuidores AND laboratorios.id_laboratorios = fichas.id_laboratorios
			AND fichas.id_fichas = '$_id_fichas' ";
			$id       = "fichas.id_fichas";
	
	
			$columnas_com = "composiciones.nombre_composiciones, 
  							fichas_composiciones.cantidad_fichas_composiciones";
			$tablas_com   = "public.fichas_composiciones, 
 							 public.composiciones";
			$where_com    = "composiciones.id_composiciones = fichas_composiciones.id_composiciones
							 AND fichas_composiciones.id_fichas = '$_id_fichas'	";
			$id_com		  = "composiciones.nombre_composiciones";	
			
			$columnas_dos = "especies.nombre_especies, fichas_dosificacion.dosis_fichas_dosificacion, fichas_dosificacion.id_fichas, fichas_dosificacion.id_especies";
			$tablas_dos   = "public.fichas_dosificacion, 
  							 public.especies";
			$where_dos    = "fichas_dosificacion.id_especies = especies.id_especies
							 AND fichas_dosificacion.id_fichas = '$_id_fichas'	";
			$id_dos		  = "especies.nombre_especies";	
		
	
	
			$resultRep = $fichas->getCondiciones($columnas, $tablas, $where, $id);
			
			$resultCom = $fichas_composiciones->getCondiciones($columnas_com, $tablas_com, $where_com, $id_com);
			$resultDos = $fichas_dosificacion->getCondiciones($columnas_dos, $tablas_dos, $where_dos, $id_dos);
				
			$resultRep2 = "";
	
	
			///aqui aumento contador de visualizacion
			$colval_upd = " consultas_fichas = consultas_fichas + 1 ";
			$tabla_upd = "fichas";
			$where_upd = "id_fichas = '$_id_fichas' ";
			$resultUpd =  $fichas->UpdateBy($colval_upd, $tabla_upd, $where_upd);
			
			
			
			
			//muestro el reporte
	
			$this->report("FichaAlimento",array(	"resultRep"=>$resultRep, "id_fichas"=>$_id_fichas, "nombre_fichas"=>$_nombre_fichas,
			"resultCom"=>$resultCom,
			"resultDos"=>$resultDos,
					
					
			));
	
		}
	}
	
   	public function  FichaOnline()
   	{
   		
   		session_start();
   		if(isset($_GET["id_fichas"]))
   		{
   		
   			$_id_fichas = $_GET["id_fichas"];
   			$_nombre_fichas = $_GET["nombre_fichas"];
   			//Creamos el objeto usuario
   			$fichas=new FichasModel();
   			//Conseguimos todos los usuarios
   				
   			$fichas_composiciones = new FichasComposicionesModel();
   			$where_com = "id_fichas = '$_id_fichas' ";
   				
   			$fichas_dosificacion = new FichasDosificacionModel();
   		
   				
   			$fichas_fotos = new FichasFotosModel();
   		
   		
   			$columnas = " fichas.id_fichas,
					  fichas.nombre_fichas,
					  fichas.indicaciones_uso_fichas,
					  fichas.periodo_retiro_fichas,
					  fichas.presentacion_fichas,
					  fichas.registro_sanitario_fichas,
					  fichas.id_distribuidores,
					  distribuidores.nombre_distribuidores,
					  fichas.id_laboratorios,
					  laboratorios.nombre_laboratorios,
   					  fichas.conservacion_fichas,
   					  fichas.ingredientes_fichas,
   					  fichas.tipo_alimento_fichas";
   			$tablas   = "  public.fichas,
  						public.distribuidores,
  						public.laboratorios";
   			$where    = " distribuidores.id_distribuidores = fichas.id_distribuidores AND laboratorios.id_laboratorios = fichas.id_laboratorios
   			AND fichas.id_fichas = '$_id_fichas' ";
   			$id       = "fichas.id_fichas";
   		
   		
   			$columnas_com = "composiciones.nombre_composiciones,
  							fichas_composiciones.cantidad_fichas_composiciones";
   			$tablas_com   = "public.fichas_composiciones,
 							 public.composiciones";
   			$where_com    = "composiciones.id_composiciones = fichas_composiciones.id_composiciones
   			AND fichas_composiciones.id_fichas = '$_id_fichas'	";
   			$id_com		  = "composiciones.nombre_composiciones";
   				
   			$columnas_dos = "especies.nombre_especies, fichas_dosificacion.dosis_fichas_dosificacion, fichas_dosificacion.id_fichas, fichas_dosificacion.id_especies";
   			$tablas_dos   = "public.fichas_dosificacion,
  							 public.especies";
   			$where_dos    = "fichas_dosificacion.id_especies = especies.id_especies
   			AND fichas_dosificacion.id_fichas = '$_id_fichas'	";
   			$id_dos		  = "especies.nombre_especies";
   		
   		
   		
   			$resultRep = $fichas->getCondiciones($columnas, $tablas, $where, $id);
   				
   			$resultCom = $fichas_composiciones->getCondiciones($columnas_com, $tablas_com, $where_com, $id_com);
   			$resultDos = $fichas_dosificacion->getCondiciones($columnas_dos, $tablas_dos, $where_dos, $id_dos);
   		
   			$resultRep2 = "";
   		
   		
   			///aqui aumento contador de visualizacion
   			$colval_upd = " consultas_fichas = consultas_fichas + 1 ";
   			$tabla_upd = "fichas";
   			$where_upd = "id_fichas = '$_id_fichas' ";
   			$resultUpd =  $fichas->UpdateBy($colval_upd, $tabla_upd, $where_upd);
   				
   				
   				
   				
   			//muestro el reporte
   		
   			$this->view("FichasAlimentosOnline",array(	"resultRep"=>$resultRep, "id_fichas"=>$_id_fichas, "nombre_fichas"=>$_nombre_fichas,
   					"resultCom"=>$resultCom,
   					"resultDos"=>$resultDos,
   						
   						
   			));
   		
   		}
   		
   		
   	}
}
?>
