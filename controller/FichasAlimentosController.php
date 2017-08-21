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
	    $fichas_laboratorios= new FichasLaboratoriosModel();
	    $laboratorios = new LaboratoriosModel();
	   
	    
	    $columnas="fichas.id_fichas";
	    $tablas="fichas";
	    $where8="fichas.id_fichas>0 AND fichas.tipo_ficha = 'A'";
	    $id8="fichas.id_fichas";
	    $resultActual=$fichas->getCondiciones($columnas, $tablas, $where8, $id8);
	    
	    
	    
	    if(!empty($resultActual)){
	    
	    	$colval = " nombre_laboratorio = ''";
	    	$tabla = "fichas";
	    	$where1 = "id_fichas>0 AND fichas.tipo_ficha = 'A'";
	    	$resultado=$fichas->UpdateBy($colval, $tabla, $where1);
	    
	    
	    	foreach($resultActual as $res)
	    	{
	    		$_id_fichas=$res->id_fichas;
	    		$where    = "id_fichas = '$_id_fichas' ";
	    		$resultGet = $fichas_laboratorios->getBy($where);
	    			
	    			
	    		if(!empty($resultGet)){
	    			$tablaLab="<table>";
	    			$tablaLab.="<tr>";
	    			$tablaLab.="<td><font size=1>";
	    			$tablaLab.="";
	    			foreach($resultGet as $res)
	    			{
	    					
	    				$_id_laboratorios=$res->id_laboratorios;
	    				$where10    = "id_laboratorios = '$_id_laboratorios' ";
	    				$resultGet10 = $laboratorios->getBy($where10);
	    					
	    					
	    				if(!empty($resultGet10)){
	    						
	    
	    					foreach($resultGet10 as $res)
	    					{
	    							
	    						$tablaLab.="<b>- </b>";
	    						$tablaLab.=$res->nombre_laboratorios;
	    						$tablaLab.="<br>";
	    
	    							
	    					}
	    
	    				}
	    					
	    			}
	    
	    			$tablaLab.="</font></td>";
	    			$tablaLab.="</tr>";
	    			$tablaLab.="</table>";
	    
	    			$colval = " nombre_laboratorio =  '$tablaLab'";
	    			$tabla = "fichas";
	    			$where = "id_fichas ='$_id_fichas'";
	    			$resultado=$fichas->UpdateBy($colval, $tabla, $where);
	    
	    			$tablaLab="";
	    
	    
	    		}
	    			
	    			
	    			
	    	}
	    
	    
	    
	    
	    }
	    
	    
	     
	    
	    
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
		$id_fc     = " fichas_composiciones.id_fichas_composiciones";
		
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
		$id_ds     = " fichas_dosificacion.id_fichas_dosificacion";
		
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
		$id_distri     = "fichas_distribuidores.id_fichas_distribuidores";
		
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
		$id_labo     = "fichas_laboratorios.id_fichas_laboratorios";
		
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
		$fichas_especies = new FichasEspeciesModel();
		$fichas_distribuidores = new FichasDistribuidoresModel();
		$fichas_laboratorios = new FichasLaboratoriosModel();
		$fichas_fotos = new FichasFotosModel();
		
		if(isset($_GET["id_fichas"]))
		{
			$id_fichas=(int)$_GET["id_fichas"];
	
			$fichas_composiciones->deleteBy(" id_fichas",$id_fichas);
			$fichas_dosificaciones->deleteBy(" id_fichas",$id_fichas);
			$fichas_especies->deleteBy(" id_fichas",$id_fichas);
			$fichas_distribuidores->deleteBy(" id_fichas",$id_fichas);
			$fichas_laboratorios->deleteBy(" id_fichas",$id_fichas);
			$fichas_fotos->deleteBy(" id_fichas",$id_fichas);
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
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	
   	public function verFicha()
   	{
   		session_start();
   		//para url
   		$urlimag=$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'];
   		//importacion de clases
   		$fichas=new FichasModel();
   		$fichas_composiciones = new FichasComposicionesModel();
   		 
   		 
   		$fichas_dosificacion = new FichasDosificacionModel();
   	
   		$fichas_especies = new FichasEspeciesModel();
   		$fichas_formas_administracion = new FichasFormasAdministracionModel();
   		$fichas_distribuidores = new FichasDistribuidoresModel();
   		$fichas_laboratorios = new FichasLaboratoriosModel();
   	
   		 
   		$fichas_fotos = new FichasFotosModel();
   		 
   		$distribuidores = new DistribuidoresModel();
   		$laboratorios = new LaboratoriosModel();
   		 
   		 
   		//if(isset($_REQUEST['id_fichas'])&&isset($_REQUEST['nombre_fichas']))
   		if(isset($_REQUEST['id_fichas']))
   		{
   
   			$id_fichas = $_REQUEST["id_fichas"];
   			$nombre_fichas = $_REQUEST["nombre_fichas"];
   	
   			//para la ficha general
   			$columnas = " fichas.id_fichas,fichas.nombre_fichas,  fichas.encabezado_tabla_fichas,
  						fichas.accion_terapeutica_fichas,  fichas.clasificacion_farmacologica_fichas,
					  fichas.forma_terapeutica_fichas,  fichas.indicaciones_uso_fichas,
					  fichas.interacciones_fichas,  fichas.contraindicaciones_fichas,
					  fichas.periodo_retiro_fichas,  fichas.advertencias_fichas,
					  fichas.presentacion_fichas,  fichas.registro_sanitario_fichas,
					  fichas.efectos_colaterales_fichas,  fichas.encabezado_dosificacion_fichas,
					  fichas.mecanismo_accion_fichas,  fichas.interacciones_fichas,
					  fichas.conservacion_fichas, fichas.ingredientes_fichas, fichas.tipo_alimento_fichas";
   	
   			$tablas   = " public.fichas";
   			$where    = " fichas.id_fichas = '$id_fichas' ";
   			$id       = "fichas.id_fichas";
   	
   			$dtFichas = $fichas->getCondiciones($columnas, $tablas, $where, $id);
   	
   			//para la tabla especies
   			$columnasEsp = "especies.logo_especies,
							especies.id_especies";
   				
   			$tablasEsp  = "public.fichas_dosificacion,
									  public.especies";
   				
   			$whereEsp    = "fichas_dosificacion.id_especies = especies.id_especies AND fichas_dosificacion.id_fichas='$id_fichas'";
   			$idEsp    = "fichas_dosificacion.id_fichas_dosificacion";
   	
   			//para la tabla Administracion
   			$columnasAdm =  "fia.id_fichas_formas_administracion,
   					fa.nombre_formas_administracion";
   			$tablasAdm = "public.fichas_formas_administracion fia INNER JOIN public.formas_administracion fa
   					ON fia.id_formas_administracion = fa.id_formas_administracion";
   			$whereAdm  = "fia.id_fichas = '$id_fichas'";
   			$id_adm     = "fia.id_fichas_formas_administracion";
   	
   			//para la tabla fabricado por
   			$columnasLab = "fichas_laboratorios.id_laboratorios,
					  laboratorios.nombre_laboratorios,
					  	 laboratorios.telefono_persona_contacto_laboratorios,
  							 laboratorios.email_laboratorios,
  							 laboratorios.web_laboratorios";
   			$tablasLab   = "public.laboratorios, public.fichas_laboratorios";
   			$whereLab    = "fichas_laboratorios.id_laboratorios = laboratorios.id_laboratorios
   			AND fichas_laboratorios.id_fichas = '$id_fichas'	";
   	
   			$idlab = "fichas_laboratorios.id_laboratorios";
   	
   			//para la tabla composicion
   			$columnasComp = "co.nombre_composiciones,
  							fc.cantidad_fichas_composiciones, um.nombre_unidades_medida";
   			$tablasComp   = "public.fichas_composiciones fc
				INNER JOIN public.composiciones co
				ON co.id_composiciones = fc.id_composiciones
				INNER JOIN public.unidades_medida um
			    ON  fc.id_unidades_medida = um.id_unidades_medida";
   	
   			$whereComp    = "fc.id_fichas = '$id_fichas'";
   	
   			$idComp	  = "fc.id_fichas_composiciones";
   	
   			//para la tablas distribuido por
   			$columnas_dis = "fichas_distribuidores.id_distribuidores,
					  distribuidores.nombre_distribuidores,
					  	 distribuidores.telefono_persona_contacto_distribuidores,
  							 distribuidores.email_distribuidores,
  							 distribuidores.web_distribuidores";
   			$tablas_dis   = "public.distribuidores,
  							 public.fichas_distribuidores";
   			$where_dis    = "fichas_distribuidores.id_distribuidores = distribuidores.id_distribuidores
   			AND fichas_distribuidores.id_fichas = '$id_fichas'	";
   			$id_dis = "fichas_distribuidores.id_distribuidores";
   	
   			//para la consulta de dosificacion
   	
   			$columnasDosi="e.nombre_especies, d.dosis_fichas_dosificacion,d.id_fichas, d.id_especies";
   			$tablasDosi = " public.fichas_dosificacion d INNER JOIN public.especies e ON d.id_especies = e.id_especies";
   			$whereDosi = "d.id_especies = e.id_especies
   			AND  d.id_fichas = '$id_fichas'	";
   			$idDosi=" d.id_fichas_dosificacion";
   				
   			//parametros para el diccionario
   			$aficha = array();
   			if(!empty($dtFichas))
   			{
   				//para la parte de las advertencias
   				$advertencias_html = "";
   				try{
   					$arrayAdvertencias = explode(".",$dtFichas[0]->advertencias_fichas);
   					if(!empty($arrayAdvertencias))
   					{
   						for($i=0; $i<count($arrayAdvertencias)-1; $i++)
   						{
   							$advertencias_html.="&nbsp;";
   							$advertencias_html.=trim($arrayAdvertencias[$i]).".";
   							$advertencias_html.="<br>";
   						}
   							
   					}
   				}catch(Execption $e)
   				{
   					$advertencias_html="";
   				}
   					
   				//para la parte de presentaciones
   				$presentaciones_html = "";
   				try{
   					$arrayPres = explode(".",$dtFichas[0]->presentacion_fichas);
   					if(!empty($arrayPres))
   					{
   						for($i=0; $i<count($arrayPres)-1; $i++)
   						{
   							$presentaciones_html.="&nbsp;";
   							$presentaciones_html.=trim($arrayPres[$i]).".";
   							$presentaciones_html.="<br>";
   						}
   	
   					}
   				}catch(Execption $e)
   				{
   					$presentaciones_html="";
   				}
   					
   				$aficha['nombre']=$dtFichas[0]->nombre_fichas;
   				$aficha['id']=$dtFichas[0]->id_fichas;
   				$aficha['clasiFarma']=$dtFichas[0]->clasificacion_farmacologica_fichas;
   				$aficha['formaTerapeutica']=$dtFichas[0]->forma_terapeutica_fichas;
   				$aficha['accion']=$dtFichas[0]->accion_terapeutica_fichas;
   				$aficha['mecanismo']=$dtFichas[0]->mecanismo_accion_fichas;
   				$aficha['indicaciones']=$dtFichas[0]->indicaciones_uso_fichas;
   				$aficha['periodo']=$dtFichas[0]->periodo_retiro_fichas;
   				$aficha['advertencias']=$advertencias_html;
   				$aficha['interaccion']=$dtFichas[0]->interacciones_fichas;
   				$aficha['contraindicaciones']=$dtFichas[0]->contraindicaciones_fichas;
   				$aficha['efectos']=$dtFichas[0]->efectos_colaterales_fichas;
   				$aficha['conservacion']=$dtFichas[0]->conservacion_fichas;
   				$aficha['presentacion']=$presentaciones_html;
   				$aficha['registro']=$dtFichas[0]->registro_sanitario_fichas;
   				$aficha['dosificacion']=$dtFichas[0]->encabezado_dosificacion_fichas;
   				$aficha['encabezado']=$dtFichas[0]->encabezado_tabla_fichas;
   				$aficha['ingredientes_fichas']=$dtFichas[0]->ingredientes_fichas;
   				$aficha['tipo_alimento_fichas']=$dtFichas[0]->tipo_alimento_fichas;
   			}
   			//validacion para cabeceras
   			//variables para cabeceras
   			//se toma 2 letras de cada palabra de encabezado
   			$visible="display:none;";
   			$cafa="";$fofa="";$esde="";$comp="";$cara="";$mede="";$inde="";$dode="";$pede="";$adve="";$fapo="";$inte="";
   			$cont="";$efco="";$cons="";$pres="";$reag="";$dipo="";$admi="";$ingre="";$tiali="";
   	
   			if($aficha['clasiFarma']==""){$cafa=$visible;}
   			if($aficha['formaTerapeutica']==""){$fofa=$visible;}
   			if($aficha['contraindicaciones']==""){$cont=$visible;}
   			if($aficha['accion']==""){$cara=$visible;}
   			if($aficha['mecanismo']==""){$mede=$visible;}
   			if($aficha['indicaciones']==""){$inde=$visible;}
   			if($aficha['dosificacion']==""){$dode=$visible;}
   			if($aficha['periodo']==""){$pede=$visible;}
   			if($aficha['advertencias']==""){$adve=$visible;}
   			if($aficha['interaccion']==""){$inte=$visible;}
   			if($aficha['efectos']==""){$efco=$visible;}
   			if($aficha['conservacion']==""){$cons=$visible;}
   			if($aficha['presentacion']==""){$pres=$visible;}
   			if($aficha['registro']==""){$reag=$visible;}
   			if($aficha['ingredientes_fichas']==""){$ingre=$visible;}
   			if($aficha['tipo_alimento_fichas']==""){$tiali=$visible;}
   			
   			$dtFichasEspecies=$fichas_especies->getCondiciones($columnasEsp, $tablasEsp, $whereEsp, $idEsp);
   	
   			$tablaEspcies="&nbsp;";
   			if(!empty($dtFichasEspecies))
   			{
   					
   				foreach($dtFichasEspecies as $res)
   				{
   					$tablaEspcies.="&nbsp;";
   					//$tablaEspcies.='<img src="'.$urlimag.'/Vademano/view/DevuelveImagen.php?id_valor='.$res->id_especies.'&id_nombre=id_especies&tabla=especies&campo=logo_especies"  width="40" height="40" />';
   					$tablaEspcies.='<img src="view/DevuelveImagen.php?id_valor='.$res->id_especies.'&id_nombre=id_especies&tabla=especies&campo=logo_especies"  width="34px" height="26px" />';
   					$tablaEspcies.="&nbsp;";
   				}
   					
   			}else{$esde=$visible;}
   			$tablaEspcies.="";
   	
   			$dtAdministracion=$fichas_formas_administracion->getCondiciones($columnasAdm, $tablasAdm, $whereAdm, $id_adm);
   	
   			//    			var_dump($dtAdministracion);
   			//    			die();
   	
   			$tablaAdministracion="<br>";
   			if(!empty($dtAdministracion))
   			{
   					
   				foreach($dtAdministracion as $res)
   				{
   					$tablaAdministracion.=" &nbsp;&nbsp;&nbsp;- &nbsp;";
   					$tablaAdministracion.=$res->nombre_formas_administracion;
   					$tablaAdministracion.="<br>";
   				}
   			}else{$admi=$visible;}
   			$tablaAdministracion.="";
   	
   			//para la seccion fabricado por
   			$dtLaboratorio=$fichas_laboratorios->getCondiciones($columnasLab, $tablasLab, $whereLab, $idlab);
   	
   			$tablaLab="<table>";
   			if(!empty($dtLaboratorio))
   			{
   					
   					
   				foreach($dtLaboratorio as $res)
   				{
   					//para consulta de direcciones
   					$columnaslabDir = "d.direccion_direcciones,d.telefono_direcciones,d.celular_direcciones,
						           ca.nombre_canton,pr.cod_telefono";
   						
   					$tablaslabDir   = "public.direcciones d		INNER JOIN public.canton ca
								ON d.id_canton = ca.id_canton INNER JOIN public.codigos_provincias pr
								ON pr.id_provincia = ca.id_provincias";
   						
   					$wherelabDir    = "d.id_laboratorios = '$res->id_laboratorios'";
   					$idlabDir = "d.id_direcciones";
   	
   					$dtLabDireccion=$fichas_laboratorios->getCondiciones($columnaslabDir, $tablaslabDir, $wherelabDir, $idlabDir);
   	
   	
   					$tablaLab.="<tr>";
   					$tablaLab.="<td style=' text-align: left; font-family: Times New Roman; font-size:65%;'>&nbsp;";
   					$tablaLab.='<img src="view/DevuelveImagen.php?id_valor='.$res->id_laboratorios.'&id_nombre=id_laboratorios&tabla=laboratorios&campo=logo_laboratorios" width="80" height="60" />';
   					$tablaLab.="</td>";
   					$tablaLab.="<td style='padding-left:10px; text-align:left; font-family: Times New Roman; font-size:65%;'>";
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
   							$tablaLab.="<b>CELULAR: </b>";
   							$tablaLab.=$resd->celular_direcciones;
   							$tablaLab.="<br>";
   	
   						}
   					}
   					$tablaLab.="</td>";
   					$tablaLab.="</tr>";
   	
   						
   				}
   					
   			}else{$fapo=$visible;}
   			$tablaLab.="</table>";
   	
   	
   			//para la seccion distribuido por
   	
   			$dtDistribuido = $fichas_distribuidores->getCondiciones($columnas_dis, $tablas_dis, $where_dis, $id_dis);
   	
   			$tablaDis="<table>";
   			if(!empty($dtDistribuido))
   			{
   	
   	
   				foreach($dtDistribuido as $res)
   				{
   					//para consulta de direcciones
   					$columnasdisDir = "d.direccion_direcciones,d.telefono_direcciones,d.celular_direcciones,
						           ca.nombre_canton,pr.cod_telefono";
   						
   					$tablasdisDir   = "public.direcciones d		INNER JOIN public.canton ca
								ON d.id_canton = ca.id_canton INNER JOIN public.codigos_provincias pr
								ON pr.id_provincia = ca.id_provincias";
   						
   					$wheredisDir    = "d.id_distribuidores = '$res->id_distribuidores'";
   					$iddisDir = "d.id_direcciones";
   	
   					$dtdisDireccion=$fichas_distribuidores->getCondiciones($columnasdisDir, $tablasdisDir, $wheredisDir, $iddisDir);
   	
   	
   					$tablaDis.="<tr>";
   					$tablaDis.="<td style=' text-align: left; font-family: Times New Roman; font-size:65%;'>&nbsp;";
   					$tablaDis.='<img src="view/DevuelveImagen.php?id_valor='.$res->id_distribuidores.'&id_nombre=id_distribuidores&tabla=distribuidores&campo=logo_distribuidores" width="80" height="60" />';
   					$tablaDis.="</td>";
   					$tablaDis.="<td style='padding-left:10px; text-align:left; font-family: Times New Roman; font-size:65%;'>";
   					if(!empty($dtdisDireccion)){
   						$tablaDis.="";
   						foreach($dtdisDireccion as $resdi)
   						{
   							$tablaDis.="<br>";
   							$tablaDis.="<b>CIUDAD: </b>";
   							$tablaDis.=$resdi->nombre_canton;
   							$tablaDis.="<br>";
   							$tablaDis.="";
   							$tablaDis.="<b>DIRECCIÓN: </b>";
   							$tablaDis.=$resdi->direccion_direcciones;
   							$tablaDis.="<br>";
   							$tablaDis.="";
   							$tablaDis.="<b>TELÉFONO: </b> (593-2)&nbsp;";
   							$tablaDis.=$resdi->cod_telefono;
   							$tablaDis.=$resdi->telefono_direcciones;
   							$tablaDis.="<br>";
   							$tablaDis.="";
   							$tablaDis.="<b>CELULAR: </b>";
   							$tablaDis.=$resdi->celular_direcciones;
   							$tablaDis.="<br>";
   	
   						}
   					}
   					$tablaDis.="</td>";
   					$tablaDis.="</tr>";
   	
   						
   				}
   	
   			}else{$dipo=$visible;}
   			$tablaDis.="</table>";
   	
   	
   			//para la seccion de composicion
   	
   			$dtComposicion = $fichas_composiciones->getCondiciones($columnasComp, $tablasComp, $whereComp, $idComp);
   			$tablaComp = "<table  style='width:100%;'  border='1';>";
   	
   			if (!empty($dtComposicion))
   			{
   				$tablaComp.= "<tr >";
   				$tablaComp.="<th style=' font-family: Times New Roman; font-size:55%;'>";
   				$tablaComp.= "Principio Activo";
   				$tablaComp.="</th>";
   				$tablaComp.="<th style=' font-family: Times New Roman; font-size:55%;'>";
   				$tablaComp.="Dosis";
   				$tablaComp.="</th>";
   				$tablaComp.="<th style=' font-family: Times New Roman; font-size:55%;'>";
   				$tablaComp.="U/M";
   				$tablaComp.="</th>";
   				$tablaComp.="</tr>";
   					
   				foreach($dtComposicion as $res)
   				{
   					$tablaComp.="<tr>";
   					$tablaComp.="<td style=' text-align: left; font-family: Times New Roman; font-size:55%;'>";
   					$tablaComp.=$res->nombre_composiciones;
   					$tablaComp.="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
   					$tablaComp.="<td style='text-align:center; font-family: Times New Roman; font-size:55%;'>";
   					$tablaComp.=$res->cantidad_fichas_composiciones;
   					$tablaComp.="</td>";
   					$tablaComp.="<td style=' text-align:center; font-family: Times New Roman; font-size:55%;'>";
   					$tablaComp.=$res->nombre_unidades_medida;
   					$tablaComp.="</td>";
   					$tablaComp.="</tr>";
   				}
   					
   			}else {$comp=$visible;}
   			$tablaComp.="</table>";
   	
   			//para la tabla dosificacion
   	
   			$dtDosificacion = $fichas_dosificacion->getCondiciones($columnasDosi, $tablasDosi, $whereDosi, $idDosi);
   			$tablaDosi = "<table  style='width:100%;'  border='1';>";
   	
   			if (!empty($dtDosificacion))
   			{
   				$tablaDosi.= "<tr >";
   				$tablaDosi.="<th style=' font-family: Times New Roman; font-size:55%;'>";
   				$tablaDosi.= "Nombre Especie";
   				$tablaDosi.="</th>";
   				$tablaDosi.="<th style=' font-family: Times New Roman; font-size:55%;'>";
   				$tablaDosi.="Dosis";
   				$tablaDosi.="</th>";
   				$tablaDosi.="</tr>";
   	
   				foreach($dtDosificacion as $resdo)
   				{
   					$tablaDosi.="<tr>";
   					$tablaDosi.="<td style=' text-align:left; font-family: Times New Roman; font-size:55%;'>";
   					$tablaDosi.=$resdo->nombre_especies;
   					$tablaDosi.="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
   					$tablaDosi.="<td style='text-align:left; font-family: Times New Roman; font-size:55%;'>";
   					$tablaDosi.=$resdo->dosis_fichas_dosificacion;
   					$tablaDosi.="</td>";
   					$tablaDosi.="</tr>";
   				}
   	
   			}else {$dode=$visible;}
   			$tablaDosi.="</table>";
   	
   	
   			//die();
   	
   			//creacion del diccionario de datos
   			//para visualizar cabeceras toma las 2 primeras letras de cada palabra
   			$dicContenido = array(
   					'TITULOPAG'=>"Vademano 2015",
   					'NOMBREFICHA'=>$aficha['nombre'],
   					'IDFICHA'=>$aficha['id'],
   					'CLASIFICACION'=>$aficha['clasiFarma'],
   					'FORMA'=>$aficha['formaTerapeutica'],
   					'ACCIONTERAPEUTICA'=>$aficha['accion'],
   					'MECANISMOACCION'=>$aficha['mecanismo'],
   					'INDICACIONES'=>$aficha['indicaciones'],
   					'DOSIFICACION'=>$aficha['dosificacion'],
   					'PERIODORETIRO'=>$aficha['periodo'],
   					'ADVERTENCIAS'=>$aficha['advertencias'],
   					'INTERACIONES'=>$aficha['interaccion'],
   					'CONTRAINDICACIONES'=>$aficha['contraindicaciones'],
   					'EFECTOS'=>$aficha['efectos'],
   					'CONSERVACION'=>$aficha['conservacion'],
   					'PRESENTACION'=>$aficha['presentacion'],
   					'REGISTO'=>$aficha['registro'],
   					'ENCABEZADO'=>$aficha['encabezado'],
   					'INGREDIENTES'=>$aficha['ingredientes_fichas'],
   					'TIPO_ALIMENTO'=>$aficha['tipo_alimento_fichas'],
   					'TABLAESPECIES'=>$tablaEspcies,
   					'TABLAADMINISTRACION'=>$tablaAdministracion,
   					'TABLACOMP'=>$tablaComp,
   					'TABLADOSI'=>$tablaDosi,
   					'FABRICADOPOR'=>$tablaLab,
   					'DISTIBUIDOPOR'=>$tablaDis,
   					'cafa'=>$cafa,
   					'fofa'=>$fofa,
   					'esde'=>$esde,
   					'comp'=>$comp,
   					'cara'=>$cara,
   					'mede'=>$mede,
   					'inde'=>$inde,
   					'dode'=>$dode,
   					'pede'=>$pede,
   					'adve'=>$adve,
   					'fapo'=>$fapo,
   					'inte'=>$inte,
   					'cont'=>$cont,
   					'efco'=>$efco,
   					'cons'=>$cons,
   					'pres'=>$pres,
   					'reag'=>$reag,
   					'dipo'=>$dipo,
   					'admi'=>$admi,
   					'ingre'=>$ingre,
   					'tiali'=>$tiali
   	
   			);
   	
   			$this->verReporte('FichaAlimentos',array(
   					'dicContenido'=>$dicContenido
   			));
   	
   		}
   		 
   		 
   	}
   	
   	
   	public function enviarficha(){
   		 
   		session_start();
   		$imprimir="";
   		$fichas = new FichasModel();
   		$especies = new EspeciesModel();
   		 
   		$fichas = new FichasModel();
   		$where = "nombre_fichas LIKE '%%' ORDER by consultas_fichas DESC LIMIT 4";
   		$resultVis = $fichas->getBy($where);
   		 
   		if(isset($_POST["btn_enviar"])){
   	
   	
   	
   			$_nombres_usuario 	= mb_strtoupper($_POST["nombres_usuario"]);
   			$_correo_usuario   = $_POST["correo_usuario"];
   			$_id_fichas   = $_POST["id_fichas"];
   	
   	
   			$columnasLab = "f.id_fichas, f.nombre_fichas, clasificacion_farmacologica_fichas";
   			$tablasLab   = "public.fichas f
					LEFT JOIN public.fichas_laboratorios ff
					ON ff.id_fichas = f.id_fichas";
   			$whereLab    = "f.tipo_ficha = 'P' AND f.id_fichas='$_id_fichas'";
   			$idLab = "f.id_fichas";
   			$resultSetFic = $fichas->getCondiciones($columnasLab, $tablasLab, $whereLab, $idLab);
   			$cantidadResult=count($resultSetFic);
   	
   	
   			$baseUrl = URLVADEMANO;
   			$controladorAccion = "controller=FichasAlimentos&action=verFicha&id_fichas=". $_id_fichas;
   			$imprimir = $baseUrl.$controladorAccion;
   	
   	
   			$html="";
   			if (!empty($resultSetFic))
   			{
   	
   	
   					
   				$html.='<table rules="all">';
   				$html.='<thead>';
   				$html.='<tr>';
   				$html.='<th style="text-align: left;  font-size: 13px;" WIDTH="155"></th>';
   				$html.='<th style="background:#A9E2F3; text-align: left;  font-size: 13px;" WIDTH="200">Nombre Producto</th>';
   				$html.='<th style="background:#A9E2F3; text-align: left;  font-size: 13px;" WIDTH="200">Categoria Farmacológica</th>';
   				$html.='<th style="background:#A9E2F3; text-align: left;  font-size: 13px;" WIDTH="200">Especies</th>';
   				$html.='<th style="background:#A9E2F3; text-align: left;  font-size: 13px;" >Imprimir</th>';
   				$html.='</tr>';
   				$html.='</thead>';
   				$html.='<tbody>';
   	
   				foreach ($resultSetFic as $res)
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
   							$tablaEspcies.='<img src="http://186.4.203.42:4000/Vademano/view/DevuelveImagen.php?id_valor='.$res1->id_especies.'&id_nombre=id_especies&tabla=especies&campo=logo_especies"  width="34px" height="26px" />';
   							$tablaEspcies.="";
   						}
   	
   					}
   						
   						
   					$html.='<tr>';
   					$html.='<td style="font-size: 12px;" WIDTH="155"></td>';
   					$html.='<td style="font-size: 12px;" WIDTH="200">'.$res->nombre_fichas.'</td>';
   					$html.='<td style="font-size: 12px;" WIDTH="200">'.$res->clasificacion_farmacologica_fichas.'</td>';
   					$html.='<td WIDTH="200">'.$tablaEspcies.'</td>';
   					$html.='<td style="font-size: 12px;" ><a href='.$imprimir.'><rigth><img src="http://186.4.203.42:4000/Vademano/view/images/printer.png" WIDTH="35" HEIGHT="35" /></rigth></a></span></td>';
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
   	
   	
   	
   	
   	
   	
   	
   			$cabeceras = "MIME-Version: 1.0 \r\n";
   			$cabeceras .= "Content-type: text/html; charset=utf-8 \r\n";
   			$cabeceras.= "From: info@masoft.net \r\n";
   			$destino="$_correo_usuario";
   			$asunto="Ficha";
   			$fecha=date("d/m/y");
   			$hora=date("H:i:s");
   			//align='center'
   			$resumen="
   	
   			<table rules='all'>
   			<tr style='background:#7acb5a'><td WIDTH='1000' HEIGHT='50'><rigth><img src='http://186.4.203.42:4000/Vademano/view/images/logo_vademano.png' WIDTH='200' HEIGHT='80' /></rigth></td></tr>
   			</tabla>
   			<p><table rules='all'></p>
   			<tr style='background: #FFFFFF;'><td  WIDTH='1000' align='center'><b> BIENVENIDO A VADEMANO </b></td></tr></p><br>
   			<tr style='background: #FFFFFF;'><td  WIDTH='1000' align='justify'>Bienvenido a Vademano veterinario el portal digital que reúne toda la información  de relevancia relacionada con los productos  farmacéuticos de uso veterinario que se comercializan, busca proveer a médicos veterinarios, técnicos, especialistas y público en general  el más completo vademécum digital.
   			El Vademano Veterinario está diseñado como una herramienta web moderna, versátil y fácil de utilizar, que se ajusta a la versatilidad de los dispositivos de comunicación actual para que la búsqueda de información se convierta en una tarea sencilla que puede ser realizada a través de múltiples combinaciones de criterios:
   			efecto terapéutico, forma farmacéutica, especies, etc.; asimismo dispondrá de la información de los productos en formato PDF, opción para imprimir, entre otras múltiples ventajas.</td></tr>
   			</tabla>
   	
   			<p><table rules='all'></p>
   			<br>
   			<tr style='background: #FFFFFF;'><td WIDTH='1000' align='center'><b>PRODUCTO SOLICITADO</b></td></tr>
   			<tr style='background: #FFFFFF;'><td WIDTH='1000'>Hola <b>$_nombres_usuario</b>, para imprimir la ficha da click en el icono de la impresora.</tr>
   			</table>
   			<br>
   			<p>$html</p>
   			<p><table rules='all'></p>
   			<tr style='background:#1C1C1C'><td WIDTH='1000' HEIGHT='50' align='center'><font color='white'>Vademano. - <a href='http://www.vademano.com'><FONT COLOR='#7acb5a'>www.vademano.com</FONT></a> - Copyright © 2017-</font></td></tr>
   			</table>";
   	
   	
   			if (mail("$destino","Ficha","$resumen","$cabeceras"))
   			{
   	
   				$this->view('RespuestaEnvioFicha',array(
   						"resultado"=>"true", "resultVis"=>$resultVis
   				));
   					
   			}else {
   				$this->view('RespuestaEnvioFicha',array(
   						"resultado"=>"false", "resultVis"=>$resultVis
   				));
   					
   			}
   	
   	
   	
   	
   		}
   		 
   	}
   	
   	
   	public function verFichaOnline()
   	{
   		session_start();
   		//para url
   		$urlimag=$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'];
   		//importacion de clases
   		$fichas=new FichasModel();
   		$fichas_composiciones = new FichasComposicionesModel();
   	
   	
   		$fichas_dosificacion = new FichasDosificacionModel();
   		 
   		$fichas_especies = new FichasEspeciesModel();
   		$fichas_formas_administracion = new FichasFormasAdministracionModel();
   		$fichas_distribuidores = new FichasDistribuidoresModel();
   		$fichas_laboratorios = new FichasLaboratoriosModel();
   		 
   	
   		$fichas_fotos = new FichasFotosModel();
   	
   		$distribuidores = new DistribuidoresModel();
   		$laboratorios = new LaboratoriosModel();
   		$especies = new EspeciesModel();
   	
   		//if(isset($_REQUEST['id_fichas'])&&isset($_REQUEST['nombre_fichas']))
   		if(isset($_REQUEST['id_fichas']))
   		{
   			$nombre_fichas="";
   			$id_fichas = $_REQUEST["id_fichas"];
   			//$nombre_fichas = $_REQUEST["nombre_fichas"];
   			 
   			//para la ficha general
   			$columnas = " fichas.id_fichas,fichas.nombre_fichas,  fichas.encabezado_tabla_fichas,
  						fichas.accion_terapeutica_fichas,  fichas.clasificacion_farmacologica_fichas,
					  fichas.forma_terapeutica_fichas,  fichas.indicaciones_uso_fichas,
					  fichas.interacciones_fichas,  fichas.contraindicaciones_fichas,
					  fichas.periodo_retiro_fichas,  fichas.advertencias_fichas,
					  fichas.presentacion_fichas,  fichas.registro_sanitario_fichas,
					  fichas.efectos_colaterales_fichas,  fichas.encabezado_dosificacion_fichas,
					  fichas.mecanismo_accion_fichas,  fichas.interacciones_fichas,
					  fichas.conservacion_fichas, fichas.ingredientes_fichas, fichas.tipo_alimento_fichas";
   			 
   			$tablas   = " public.fichas";
   			$where    = " fichas.id_fichas = '$id_fichas' ";
   			$id       = "fichas.id_fichas";
   			 
   			$dtFichas = $fichas->getCondiciones($columnas, $tablas, $where, $id);
   			 
   			//para la tabla especies
   	
   			$columnasEsp = "especies.logo_especies,
							especies.id_especies";
   				
   			$tablasEsp  = "public.fichas_dosificacion,
									  public.especies";
   				
   			$whereEsp    = "fichas_dosificacion.id_especies = especies.id_especies AND fichas_dosificacion.id_fichas='$id_fichas'";
   			$idEsp    = "fichas_dosificacion.id_fichas_dosificacion";
   		
   	
   			 
   			 
   			//para la tabla Administracion
   			$columnasAdm =  "fia.id_fichas_formas_administracion,
   					fa.nombre_formas_administracion";
   			$tablasAdm = "public.fichas_formas_administracion fia INNER JOIN public.formas_administracion fa
   					ON fia.id_formas_administracion = fa.id_formas_administracion";
   			$whereAdm  = "fia.id_fichas = '$id_fichas'";
   			$id_adm     = "fia.id_fichas_formas_administracion";
   			 
   			//para la tabla fabricado por
   			$columnasLab = "fichas_laboratorios.id_laboratorios,
					  laboratorios.nombre_laboratorios,
					  	 laboratorios.telefono_persona_contacto_laboratorios,
  							 laboratorios.email_laboratorios,
  							 laboratorios.web_laboratorios";
   			$tablasLab   = "public.laboratorios, public.fichas_laboratorios";
   			$whereLab    = "fichas_laboratorios.id_laboratorios = laboratorios.id_laboratorios
   			AND fichas_laboratorios.id_fichas = '$id_fichas'	";
   			 
   			$idlab = "fichas_laboratorios.id_laboratorios";
   	
   	
   	
   	
   			 
   			//para la tabla composicion
   			$columnasComp = "co.id_composiciones,co.nombre_composiciones,
  							fc.cantidad_fichas_composiciones, um.nombre_unidades_medida";
   			$tablasComp   = "public.fichas_composiciones fc
				INNER JOIN public.composiciones co
				ON co.id_composiciones = fc.id_composiciones
				INNER JOIN public.unidades_medida um
			    ON  fc.id_unidades_medida = um.id_unidades_medida";
   			 
   			$whereComp    = "fc.id_fichas = '$id_fichas'";
   			 
   			$idComp	  = "fc.id_fichas_composiciones";
   			 
   			//para la tablas distribuido por
   			$columnas_dis = "fichas_distribuidores.id_distribuidores,
					  distribuidores.nombre_distribuidores,
					  	 distribuidores.telefono_persona_contacto_distribuidores,
  							 distribuidores.email_distribuidores,
  							 distribuidores.web_distribuidores";
   			$tablas_dis   = "public.distribuidores,
  							 public.fichas_distribuidores";
   			$where_dis    = "fichas_distribuidores.id_distribuidores = distribuidores.id_distribuidores
   			AND fichas_distribuidores.id_fichas = '$id_fichas'	";
   			$id_dis = "fichas_distribuidores.id_distribuidores";
   			 
   			//para la consulta de dosificacion
   			 
   			$columnasDosi="e.nombre_especies, d.dosis_fichas_dosificacion,d.id_fichas, d.id_especies";
   			$tablasDosi = " public.fichas_dosificacion d INNER JOIN public.especies e ON d.id_especies = e.id_especies";
   			$whereDosi = "d.id_especies = e.id_especies
   			AND  d.id_fichas = '$id_fichas'	";
   			$idDosi=" d.id_fichas_dosificacion";
   				
   			//parametros para el diccionario
   			$aficha = array();
   			if(!empty($dtFichas))
   			{
   				//para la parte de las advertencias
   				$advertencias_html = "";
   				try{
   					$arrayAdvertencias = explode(".",$dtFichas[0]->advertencias_fichas);
   					if(!empty($arrayAdvertencias))
   					{
   						for($i=0; $i<count($arrayAdvertencias)-1; $i++)
   						{
   							$advertencias_html.="";
   							$advertencias_html.=trim($arrayAdvertencias[$i]).".";
   							$advertencias_html.="<br>";
   						}
   	
   					}
   				}catch(Execption $e)
   				{
   					$advertencias_html="";
   				}
   	
   				//para la parte de presentaciones
   				$presentaciones_html = "";
   				try{
   					$arrayPres = explode(".",$dtFichas[0]->presentacion_fichas);
   					if(!empty($arrayPres))
   					{
   						for($i=0; $i<count($arrayPres)-1; $i++)
   						{
   							$presentaciones_html.="&nbsp;";
   							$presentaciones_html.=trim($arrayPres[$i]).".";
   							$presentaciones_html.="<br>";
   						}
   						 
   					}
   				}catch(Execption $e)
   				{
   					$presentaciones_html="";
   				}
   	
   				$aficha['nombre']=$dtFichas[0]->nombre_fichas;
   				$aficha['id']=$dtFichas[0]->id_fichas;
   				$aficha['clasiFarma']=$dtFichas[0]->clasificacion_farmacologica_fichas;
   				$aficha['formaTerapeutica']=$dtFichas[0]->forma_terapeutica_fichas;
   				$aficha['accion']=$dtFichas[0]->accion_terapeutica_fichas;
   				$aficha['mecanismo']=$dtFichas[0]->mecanismo_accion_fichas;
   				$aficha['indicaciones']=$dtFichas[0]->indicaciones_uso_fichas;
   				$aficha['periodo']=$dtFichas[0]->periodo_retiro_fichas;
   				$aficha['advertencias']=$advertencias_html;
   				$aficha['interaccion']=$dtFichas[0]->interacciones_fichas;
   				$aficha['contraindicaciones']=$dtFichas[0]->contraindicaciones_fichas;
   				$aficha['efectos']=$dtFichas[0]->efectos_colaterales_fichas;
   				$aficha['conservacion']=$dtFichas[0]->conservacion_fichas;
   				$aficha['presentacion']=$presentaciones_html;
   				$aficha['registro']=$dtFichas[0]->registro_sanitario_fichas;
   				$aficha['dosificacion']=$dtFichas[0]->encabezado_dosificacion_fichas;
   				$aficha['encabezado']=$dtFichas[0]->encabezado_tabla_fichas;
   				$aficha['ingredientes_fichas']=$dtFichas[0]->ingredientes_fichas;
   				$aficha['tipo_alimento_fichas']=$dtFichas[0]->tipo_alimento_fichas;
   			}
   			//validacion para cabeceras
   			//variables para cabeceras
   			//se toma 2 letras de cada palabra de encabezado
   			$visible="display:none;";
   			$cafa="";$fofa="";$esde="";$comp="";$cara="";$mede="";$inde="";$dode="";$pede="";$adve="";$fapo="";$inte="";
   			$cont="";$efco="";$cons="";$pres="";$reag="";$dipo="";$admi="";$ingre="";$tiali="";
   			 
   			if($aficha['clasiFarma']==""){$cafa=$visible;}
   			if($aficha['formaTerapeutica']==""){$fofa=$visible;}
   			if($aficha['contraindicaciones']==""){$cont=$visible;}
   			if($aficha['accion']==""){$cara=$visible;}
   			if($aficha['mecanismo']==""){$mede=$visible;}
   			if($aficha['indicaciones']==""){$inde=$visible;}
   			if($aficha['dosificacion']==""){$dode=$visible;}
   			if($aficha['periodo']==""){$pede=$visible;}
   			if($aficha['advertencias']==""){$adve=$visible;}
   			if($aficha['interaccion']==""){$inte=$visible;}
   			if($aficha['efectos']==""){$efco=$visible;}
   			if($aficha['conservacion']==""){$cons=$visible;}
   			if($aficha['presentacion']==""){$pres=$visible;}
   			if($aficha['registro']==""){$reag=$visible;}
   			if($aficha['ingredientes_fichas']==""){$ingre=$visible;}
   			if($aficha['tipo_alimento_fichas']==""){$tiali=$visible;} 
   			$dtFichasEspecies=$fichas_especies->getCondiciones($columnasEsp, $tablasEsp, $whereEsp, $idEsp);
   			 
   			$tablaEspcies="&nbsp;";
   			if(!empty($dtFichasEspecies))
   			{
   	
   				foreach($dtFichasEspecies as $res)
   				{
   					$tablaEspcies.="&nbsp;";
   					//$tablaEspcies.='<img src="'.$urlimag.'/Vademano/view/DevuelveImagen.php?id_valor='.$res->id_especies.'&id_nombre=id_especies&tabla=especies&campo=logo_especies"  width="40" height="40" />';
   					$tablaEspcies.='<img src="view/DevuelveImagen.php?id_valor='.$res->id_especies.'&id_nombre=id_especies&tabla=especies&campo=logo_especies"  width="34px" height="26px" />';
   					$tablaEspcies.="&nbsp;";
   				}
   	
   			}else{$esde=$visible;}
   			$tablaEspcies.="";
   			 
   			$dtAdministracion=$fichas_formas_administracion->getCondiciones($columnasAdm, $tablasAdm, $whereAdm, $id_adm);
   			 
   			//    			var_dump($dtAdministracion);
   			//    			die();
   			 
   			$tablaAdministracion="<br>";
   			if(!empty($dtAdministracion))
   			{
   	
   				foreach($dtAdministracion as $res)
   				{
   					$tablaAdministracion.=" &nbsp;&nbsp;&nbsp;- &nbsp;";
   					$tablaAdministracion.=$res->nombre_formas_administracion;
   					$tablaAdministracion.="<br>";
   				}
   			}else{$admi=$visible;}
   			$tablaAdministracion.="";
   			 
   			//para la seccion fabricado por
   			$dtLaboratorio=$fichas_laboratorios->getCondiciones($columnasLab, $tablasLab, $whereLab, $idlab);
   			 
   			$tablaLab="<table>";
   			if(!empty($dtLaboratorio))
   			{
   	
   	
   				foreach($dtLaboratorio as $res)
   				{
   					//para consulta de direcciones
   					$columnaslabDir = "d.direccion_direcciones,d.telefono_direcciones,d.celular_direcciones,
						           ca.nombre_canton,pr.cod_telefono";
   						
   					$tablaslabDir   = "public.direcciones d		INNER JOIN public.canton ca
								ON d.id_canton = ca.id_canton INNER JOIN public.codigos_provincias pr
								ON pr.id_provincia = ca.id_provincias";
   						
   					$wherelabDir    = "d.id_laboratorios = '$res->id_laboratorios'";
   					$idlabDir = "d.id_direcciones";
   					 
   					$dtLabDireccion=$fichas_laboratorios->getCondiciones($columnaslabDir, $tablaslabDir, $wherelabDir, $idlabDir);
   					 
   					 
   	
   	
   					//para consultar mas fichas de ese laboratorio
   	
   	
   	
   					$tablaLab.="<tr>";
   					$tablaLab.="<td style=' text-align: left; font-family: Times New Roman; font-size:72%;'>&nbsp;";
   					$tablaLab.='<img src="view/DevuelveImagen.php?id_valor='.$res->id_laboratorios.'&id_nombre=id_laboratorios&tabla=laboratorios&campo=logo_laboratorios" width="80" height="60" />';
   					$tablaLab.="</td>";
   					$tablaLab.="<td style='padding-left:10px; text-align:left; font-family: Times New Roman; font-size:72%;'>";
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
   							$tablaLab.="<b>CELULAR: </b>";
   							$tablaLab.=$resd->celular_direcciones;
   							$tablaLab.="<br>";
   							 
   						}
   					}
   					$tablaLab.="</td>";
   					$tablaLab.="</tr>";
   					 
   						
   				}
   	
   			}else{$fapo=$visible;}
   			$tablaLab.="</table>";
   			 
   			 
   	
   	
   	
   	
   			if(!empty($dtLaboratorio))
   			{
   	
   					
   	
   				foreach($dtLaboratorio as $res)
   				{
   	
   	
   					$columnasLab = "f.id_fichas, f.nombre_fichas, clasificacion_farmacologica_fichas";
   					$tablasLab   = "public.fichas f
					LEFT JOIN public.fichas_laboratorios ff
					ON ff.id_fichas = f.id_fichas";
   					$whereLab    = "f.tipo_ficha = 'A' AND ff.id_laboratorios='$res->id_laboratorios'";
   					$idLab = "f.id_fichas";
   					$resultSetLab = $fichas->getCondiciones($columnasLab, $tablasLab, $whereLab, $idLab);
   					$cantidadResult= count($resultSetLab);
   	
   	
   					$nombre_laboratorio= $res->nombre_laboratorios;
   					//para mas fichas
   	
   					$html="";
   					if (!empty($resultSetLab))
   					{
   							
   	
   						$html.='<center><span ><strong>OTROS ALIMENTOS DEL LABORATORIO '.$nombre_laboratorio.'</strong></span></center>';
   						$html.='<div class="pull-left">';
   						$html.='<span class="form-control"><strong>Alimentos: </strong>'.$cantidadResult.'</span>';
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
   	
   						foreach ($resultSetLab as $res)
   						{
   	
   								
   							$columnasEsp = "especies.logo_especies,
							especies.id_especies";
   								
   							$tablasEsp  = "public.fichas_especies,
									  public.especies";
   								
   							$whereEsp    = "fichas_especies.id_especies = especies.id_especies AND fichas_especies.id_fichas='$res->id_fichas'";
   							$idEsp    = "fichas_especies.id_fichas_especies";
   								
   							$dtEsp=$especies->getCondiciones($columnasEsp, $tablasEsp, $whereEsp, $idEsp);
   								
   							$tablaEspcies1="";
   							if(!empty($dtEsp))
   							{
   									
   								foreach($dtEsp as $res1)
   								{
   									$tablaEspcies1.="";
   									//$tablaEspcies.='<img src="'.$urlimag.'/Vademano/view/DevuelveImagen.php?id_valor='.$res->id_especies.'&id_nombre=id_especies&tabla=especies&campo=logo_especies"  width="40" height="40" />';
   									$tablaEspcies1.='<img src="view/DevuelveImagen.php?id_valor='.$res1->id_especies.'&id_nombre=id_especies&tabla=especies&campo=logo_especies"  width="34px" height="26px" />';
   									$tablaEspcies1.="";
   								}
   	
   							}
   								
   								
   							$html.='<tr>';
   							$html.='<td style="font-size: 11px;">'.$res->nombre_fichas.'</td>';
   							$html.='<td style="font-size: 11px;">'.$res->clasificacion_farmacologica_fichas.'</td>';
   							$html.='<td>'.$tablaEspcies1.'</td>';
   							$html.='<td style="font-size: 15px;"><span class="pull-right"><a href="index.php?controller=FichasAlimentos&action=verFichaOnline&id_fichas='.$res->id_fichas.'" target="_blank"><i class="glyphicon glyphicon-print"></i></a></span></td>';
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
   	
   	
   			}
   	
   	
   	
   	
   	
   			//para la seccion distribuido por
   			 
   			$dtDistribuido = $fichas_distribuidores->getCondiciones($columnas_dis, $tablas_dis, $where_dis, $id_dis);
   			 
   			$tablaDis="<table>";
   			if(!empty($dtDistribuido))
   			{
   				 
   				 
   				foreach($dtDistribuido as $res)
   				{
   					//para consulta de direcciones
   					$columnasdisDir = "d.direccion_direcciones,d.telefono_direcciones,d.celular_direcciones,
						           ca.nombre_canton,pr.cod_telefono";
   						
   					$tablasdisDir   = "public.direcciones d		INNER JOIN public.canton ca
								ON d.id_canton = ca.id_canton INNER JOIN public.codigos_provincias pr
								ON pr.id_provincia = ca.id_provincias";
   						
   					$wheredisDir    = "d.id_distribuidores = '$res->id_distribuidores'";
   					$iddisDir = "d.id_direcciones";
   					 
   					$dtdisDireccion=$fichas_distribuidores->getCondiciones($columnasdisDir, $tablasdisDir, $wheredisDir, $iddisDir);
   					 
   					 
   					$tablaDis.="<tr>";
   					$tablaDis.="<td style=' text-align: left; font-family: Times New Roman; font-size:72%;'>&nbsp;";
   					$tablaDis.='<img src="view/DevuelveImagen.php?id_valor='.$res->id_distribuidores.'&id_nombre=id_distribuidores&tabla=distribuidores&campo=logo_distribuidores" width="80" height="60" />';
   					$tablaDis.="</td>";
   					$tablaDis.="<td style='padding-left:10px; text-align:left; font-family: Times New Roman; font-size:72%;'>";
   					if(!empty($dtdisDireccion)){
   						$tablaDis.="";
   						foreach($dtdisDireccion as $resdi)
   						{
   							$tablaDis.="<br>";
   							$tablaDis.="<b>CIUDAD: </b>";
   							$tablaDis.=$resdi->nombre_canton;
   							$tablaDis.="<br>";
   							$tablaDis.="";
   							$tablaDis.="<b>DIRECCIÓN: </b>";
   							$tablaDis.=$resdi->direccion_direcciones;
   							$tablaDis.="<br>";
   							$tablaDis.="";
   							$tablaDis.="<b>TELÉFONO: </b> (593-2)&nbsp;";
   							$tablaDis.=$resdi->cod_telefono;
   							$tablaDis.=$resdi->telefono_direcciones;
   							$tablaDis.="<br>";
   							$tablaDis.="";
   							$tablaDis.="<b>CELULAR: </b>";
   							$tablaDis.=$resdi->celular_direcciones;
   							$tablaDis.="<br>";
   							 
   						}
   					}
   					$tablaDis.="</td>";
   					$tablaDis.="</tr>";
   					 
   						
   				}
   				 
   			}else{$dipo=$visible;}
   			$tablaDis.="</table>";
   			 
   			 
   			//para la seccion de composicion
   			 
   			$dtComposicion = $fichas_composiciones->getCondiciones($columnasComp, $tablasComp, $whereComp, $idComp);
   			$tablaComp = "<table  style='width:100%;'  border='1';>";
   			 
   			if (!empty($dtComposicion))
   			{
   				$tablaComp.= "<tr >";
   				$tablaComp.="<th style=' font-family: Times New Roman; font-size:72%;'>";
   				$tablaComp.= "Principio Activo";
   				$tablaComp.="</th>";
   				$tablaComp.="<th style=' font-family: Times New Roman; font-size:72%;'>";
   				$tablaComp.="Dosis";
   				$tablaComp.="</th>";
   				$tablaComp.="<th style=' font-family: Times New Roman; font-size:72%;'>";
   				$tablaComp.="U/M";
   				$tablaComp.="</th>";
   				$tablaComp.="</tr>";
   	
   				foreach($dtComposicion as $res)
   				{
   					$tablaComp.="<tr>";
   					$tablaComp.="<td style=' text-align: left; font-family: Times New Roman; font-size:72%;'>";
   					$tablaComp.=$res->nombre_composiciones;
   					$tablaComp.="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
   					$tablaComp.="<td style='text-align:center; font-family: Times New Roman; font-size:72%;'>";
   					$tablaComp.=$res->cantidad_fichas_composiciones;
   					$tablaComp.="</td>";
   					$tablaComp.="<td style=' text-align:center; font-family: Times New Roman; font-size:72%;'>";
   					$tablaComp.=$res->nombre_unidades_medida;
   					$tablaComp.="</td>";
   					$tablaComp.="</tr>";
   				}
   	
   			}else {$comp=$visible;}
   			$tablaComp.="</table>";
   			 
   			//para la tabla dosificacion
   			 
   			$dtDosificacion = $fichas_dosificacion->getCondiciones($columnasDosi, $tablasDosi, $whereDosi, $idDosi);
   			$tablaDosi = "<table  style='width:100%;'  border='1';>";
   			 
   			if (!empty($dtDosificacion))
   			{
   				$tablaDosi.= "<tr >";
   				$tablaDosi.="<th style=' font-family: Times New Roman; font-size:72%;'>";
   				$tablaDosi.= "Nombre Especie";
   				$tablaDosi.="</th>";
   				$tablaDosi.="<th style=' font-family: Times New Roman; font-size:72%;'>";
   				$tablaDosi.="Dosis";
   				$tablaDosi.="</th>";
   				$tablaDosi.="</tr>";
   				 
   				foreach($dtDosificacion as $resdo)
   				{
   					$tablaDosi.="<tr>";
   					$tablaDosi.="<td style=' text-align: left; font-family: Times New Roman; font-size:72%;'>";
   					$tablaDosi.=$resdo->nombre_especies;
   					$tablaDosi.="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";
   					$tablaDosi.="<td style='text-align:left; font-family: Times New Roman; font-size:72%;'>";
   					$tablaDosi.=$resdo->dosis_fichas_dosificacion;
   					$tablaDosi.="</td>";
   					$tablaDosi.="</tr>";
   				}
   				 
   			}else {$dode=$visible;}
   			$tablaDosi.="</table>";
   			 
   			 
   			$colval_upd = " consultas_fichas = consultas_fichas + 1 ";
   			$tabla_upd = "fichas";
   			$where_upd = "id_fichas = '$id_fichas' ";
   			$resultUpd =  $fichas->UpdateBy($colval_upd, $tabla_upd, $where_upd);
   			 
   			//creacion del diccionario de datos
   			//para visualizar cabeceras toma las 2 primeras letras de cada palabra
   			$dicContenido = array(
   					'IDFICHA'=>$id_fichas,
   					'TITULOPAG'=>"Vademano 2015",
   					'NOMBREFICHA'=>$aficha['nombre'],
   					'IDFICHA'=>$aficha['id'],
   					'CLASIFICACION'=>$aficha['clasiFarma'],
   					'FORMA'=>$aficha['formaTerapeutica'],
   					'ACCIONTERAPEUTICA'=>$aficha['accion'],
   					'MECANISMOACCION'=>$aficha['mecanismo'],
   					'INDICACIONES'=>$aficha['indicaciones'],
   					'DOSIFICACION'=>$aficha['dosificacion'],
   					'PERIODORETIRO'=>$aficha['periodo'],
   					'ADVERTENCIAS'=>$aficha['advertencias'],
   					'INTERACIONES'=>$aficha['interaccion'],
   					'CONTRAINDICACIONES'=>$aficha['contraindicaciones'],
   					'EFECTOS'=>$aficha['efectos'],
   					'CONSERVACION'=>$aficha['conservacion'],
   					'PRESENTACION'=>$aficha['presentacion'],
   					'REGISTO'=>$aficha['registro'],
   					'ENCABEZADO'=>$aficha['encabezado'],
   					'INGREDIENTES'=>$aficha['ingredientes_fichas'],
   					'TIPO_ALIMENTO'=>$aficha['tipo_alimento_fichas'],
   					'TABLAESPECIES'=>$tablaEspcies,
   					'TABLAADMINISTRACION'=>$tablaAdministracion,
   					'TABLACOMP'=>$tablaComp,
   					'TABLADOSI'=>$tablaDosi,
   					'FABRICADOPOR'=>$tablaLab,
   					'DISTIBUIDOPOR'=>$tablaDis,
   					'cafa'=>$cafa,
   					'fofa'=>$fofa,
   					'esde'=>$esde,
   					'comp'=>$comp,
   					'cara'=>$cara,
   					'mede'=>$mede,
   					'inde'=>$inde,
   					'dode'=>$dode,
   					'pede'=>$pede,
   					'adve'=>$adve,
   					'fapo'=>$fapo,
   					'inte'=>$inte,
   					'cont'=>$cont,
   					'efco'=>$efco,
   					'cons'=>$cons,
   					'pres'=>$pres,
   					'reag'=>$reag,
   					'dipo'=>$dipo,
   					'admi'=>$admi,
   					'ingre'=>$ingre,
   					'tiali'=>$tiali
   					
   					 
   			);
   			 
   			$this->view('FichasAlimentosOnline',array(
   					'dicContenido'=>$dicContenido,
   					'html'=>$html
   			));
   			 
   		}
   	
   	}
}
?>
