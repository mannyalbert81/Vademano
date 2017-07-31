<?php

require_once('view/dompdf/dompdf_config.inc.php' );;

class FichasProductosController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
public function index(){
	
	session_start();
	

	
	
	    $fichas = new FichasModel();
	    $columnas = "fichas_fotos.id_fichas_fotos, 
  					 fichas_fotos.foto_fichas_fotos, fichas.id_fichas, fichas.nombre_fichas,
                     fichas.registro_sanitario_fichas,  fichas.accion_terapeutica_fichas,  fichas.clasificacion_farmacologica_fichas, 
                     fichas.forma_terapeutica_fichas, fichas.indicaciones_uso_fichas, fichas.interacciones_fichas, 
  					 fichas.contraindicaciones_fichas, fichas.periodo_retiro_fichas, fichas.advertencias_fichas, fichas.presentacion_fichas, fichas.mecanismo_accion_fichas, fichas.efectos_colaterales_fichas, fichas.conservacion_fichas, fichas.encabezado_dosificacion_fichas, fichas.encabezado_tabla_fichas";
	    
	   $tablas   = "public.fichas, public.fichas_fotos";
	   $where    = "fichas_fotos.id_fichas = fichas.id_fichas AND fichas.tipo_ficha='P'";
	   $id = "fichas.nombre_fichas";
	   $resultSet = $fichas->getCondiciones($columnas, $tablas, $where, $id);
		
	   $resultMenu=array(0=>'--TODOS--',1=>'Nombre Producto');
	   	
	   
	   if (isset($_POST["btn_buscar"]))
	   {
	   		
	   
	    $columnas1 = "fichas_fotos.id_fichas_fotos, 
  					 fichas_fotos.foto_fichas_fotos, fichas.id_fichas, fichas.nombre_fichas,
                     fichas.registro_sanitario_fichas,  fichas.accion_terapeutica_fichas,  fichas.clasificacion_farmacologica_fichas, 
                     fichas.forma_terapeutica_fichas, fichas.indicaciones_uso_fichas, fichas.interacciones_fichas, 
  					 fichas.contraindicaciones_fichas, fichas.periodo_retiro_fichas, fichas.advertencias_fichas, fichas.presentacion_fichas, fichas.mecanismo_accion_fichas, fichas.efectos_colaterales_fichas, fichas.conservacion_fichas, fichas.encabezado_dosificacion_fichas, fichas.encabezado_tabla_fichas";
	    
	   $tablas1   = "public.fichas, public.fichas_fotos";
	   $where1    = "fichas_fotos.id_fichas = fichas.id_fichas AND fichas.tipo_ficha='P'";
	   $id1 = "fichas.nombre_fichas";
	   		
	   		
	   	$criterio = $_POST["criterio_busqueda"];
	   	$contenido = $_POST["contenido_busqueda"];
	   		
	   		
	   		
	   	if ($contenido !="")
	   	{
	   
	   		$where_0 = "";
	   		$where_2 = "";
	   		
	   			
	   
	   		switch ($criterio) {
	   			case 0:
	   				$where_0 = " ";
	   				break;
	   			case 1:
	   
	   				$where_2 = " AND fichas.nombre_fichas LIKE '$contenido%'  ";
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
				$where    = $where    = "fichas_distribuidores.id_distribuidores = distribuidores.id_distribuidores AND
  					fichas_laboratorios.id_laboratorios = laboratorios.id_laboratorios AND fichas_laboratorios.id_fichas = fichas.id_fichas AND fichas_distribuidores.id_fichas = fichas.id_fichas AND fichas.id_fichas = '$_id_fichas' "; 
				$resultEdit = $fichas->getCondiciones($columnas, $tablas, $where, $id);
				
			}
			
			
			
			
			
			
				
			
		$this->view("FichasProductos",array(
				"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultMenu"=>$resultMenu
			));
		
		
	}
	
	public function index_dos(){
	
		session_start();
		$fichas = new FichasModel();
			

		$unidades_medida = new UnidadesMedidaModel();
		$resultUme = $unidades_medida->getAll("nombre_unidades_medida");
		
		$composiciones = new ComposicionesModel();
		$resultCom = $composiciones->getAll("nombre_composiciones");
		
		$especies = new EspeciesModel();
		$resultEsp = $especies->getAll("nombre_especies");
		
		$especies1 = new EspeciesModel();
		$resultEspe = $especies1->getAll("nombre_especies");
		
		$formas_administracion = new FormasAdministracionModel();
		$resultFormAd = $formas_administracion->getAll("nombre_formas_administracion");
		
		$distribuidores = new DistribuidoresModel();
		$resultDis = $distribuidores->getAll("nombre_distribuidores");
		
		$laboratorios = new LaboratoriosModel();
		$resultLab = $laboratorios->getAll("nombre_laboratorios");
	
		
		
		$resultEdit = "";
		$_nombre_fichas = "";
		
		$_id_fichas = 0  ;
		
		$_nueva_ficha = FALSE;
		
		
		if (isset($_POST["nombre_fichas"]))
		{
			$_nombre_fichas = $_POST["nombre_fichas"];
		}
		
		
		//AGREGO EL NOMBRE Y DEVUELVO EL ID
		if (isset($_POST["btn_agregar_fichas"]) )
		{
			$_nueva_ficha = TRUE;
			$_nombre_fichas   = strtoupper ( $_POST["nombre_fichas"] );
			$_tipo_ficha='P';
			$funcion = "ins_fichas";
			$parametros = " '$_nombre_fichas', '$_tipo_ficha' ";
			$fichas->setFuncion($funcion);
			$fichas->setParametros($parametros);
			$resultado=$fichas->Insert();
		}
		
		$res_fichas=$fichas->getBy("nombre_fichas = '$_nombre_fichas' ");
			
			
		foreach($res_fichas as $res) {
		
			$_id_fichas = $res->id_fichas;
		}
	
		
		//agrego especies
		
		
		
		
		
		///agrego composiciones
		$fichas_composiciones = new FichasComposicionesModel();
		
		if (isset($_POST["btn_agregar_composicion"]) )
		{
			$_id_fichas        = $_POST["id_fichas"];;
			$_id_composiciones = $_POST["id_composiciones"];
			$_cantidad_fichas_composiciones   = $_POST["cantidad_fichas_composiciones"];
			$_id_unidades_medida   = $_POST["id_unidades_medida"];
			//$_cantidad_fichas_composiciones   = $_POST["nombre_fichas"];
		
			$funcion = "ins_fichas_composiciones";
		
			$parametros = " '$_id_fichas' , '$_id_composiciones' , '$_cantidad_fichas_composiciones', '$_id_unidades_medida'";
			$fichas_composiciones->setFuncion($funcion);
		
			$fichas_composiciones->setParametros($parametros);
		
		
			$resultado=$fichas_composiciones->Insert();
		
		
		}
		
		$columnas_fc =  "fichas_composiciones.id_fichas_composiciones,
  						composiciones.nombre_composiciones,
  						fichas_composiciones.cantidad_fichas_composiciones,
                       unidades_medida.nombre_unidades_medida";
		$tablas_fc = " public.composiciones, public.fichas_composiciones, public.unidades_medida";
		$where_fc  = " fichas_composiciones.id_composiciones = composiciones.id_composiciones AND fichas_composiciones.id_unidades_medida = unidades_medida.id_unidades_medida
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
		
			$funcion = "ins_fichas_dosificacion";
		
			$parametros = "'$_id_especies1' , '$_dosis_fichas_dosificacion' , '$_id_fichas'";
			$fichas_dosificacion->setFuncion($funcion);
		
			$fichas_dosificacion->setParametros($parametros);
		
		
			$resultado=$fichas_dosificacion->Insert();
		
		
		
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
		
		
		
		$fichas_especies = new FichasEspeciesModel();
		
		if (isset($_POST["btn_agregar_especies"]) )
		{
			$_id_fichas        = $_POST["id_fichas"];;
			$_id_especies = $_POST["id_especies"];
		
		
		
			$funcion = "ins_fichas_especies";
		
			$parametros = " '$_id_especies', '$_id_fichas'  ";
			$fichas_especies->setFuncion($funcion);
		
			$fichas_especies->setParametros($parametros);
		
		
			$resultado=$fichas_especies->Insert();
		
		
		
		}
		
		$columnas_es =  " fichas_especies.id_fichas_especies,
  							especies.nombre_especies
					 	";
		$tablas_es = " public.fichas_especies, public.especies";
		$where_es  = " fichas_especies.id_especies = especies.id_especies
		AND  fichas_especies.id_fichas = '$_id_fichas' ";
		$id_es     = " especies.nombre_especies";
		
		$resFicEs = $fichas_especies->getCondiciones($columnas_es, $tablas_es, $where_es, $id_es);
		
		
		//REGISTRANDO FORMA DE ADMINISTRACION
		$fichas_formas_administracion = new FichasFormasAdministracionModel();
		
		if (isset($_POST["btn_agregar_admnistracion"]) )
		{
			$_id_fichas        = $_POST["id_fichas"];;
			$_id_formas_administracion = $_POST["id_formas_administracion"];
		
		
		
			$funcion = "ins_fichas_formas_administracion";
		
			$parametros = "'$_id_fichas','$_id_formas_administracion'";
			$fichas_formas_administracion->setFuncion($funcion);
		
			$fichas_formas_administracion->setParametros($parametros);
		
		
			$resultado=$fichas_formas_administracion->Insert();
		
		
		
		}
		
		$columnas_adm =  " fichas_formas_administracion.id_fichas_formas_administracion,
  							formas_administracion.nombre_formas_administracion
					 	";
		$tablas_adm = " public.fichas_formas_administracion, public.formas_administracion";
		$where_adm  = " fichas_formas_administracion.id_formas_administracion = formas_administracion.id_formas_administracion
		AND  fichas_formas_administracion.id_fichas = '$_id_fichas' ";
		$id_adm     = "formas_administracion.nombre_formas_administracion";
		
		$resFicAdm = $fichas_formas_administracion->getCondiciones($columnas_adm, $tablas_adm, $where_adm, $id_adm);
		
		
		//REGISTRANDO FICHAS DISTRIBUIDORES
		$fichas_distribuidores = new FichasDistribuidoresModel();
		
		if (isset($_POST["btn_agregar_distribuidores"]) )
		{
			$_id_fichas        = $_POST["id_fichas"];;
			$_id_distribuidores = $_POST["id_distribuidores"];
		
		
		
			$funcion = "ins_fichas_distribuidores";
		
			$parametros = "'$_id_fichas','$_id_distribuidores'";
			$fichas_distribuidores->setFuncion($funcion);
		
			$fichas_distribuidores->setParametros($parametros);
		
		
			$resultado=$fichas_distribuidores->Insert();
		
		
		
		}
		
		$columnas_distri =  " fichas_distribuidores.id_fichas_distribuidores,
  							distribuidores.nombre_distribuidores
					 	";
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
		
		
		
			$funcion = "ins_fichas_laboratorios";
		
			$parametros = "'$_id_fichas', '$_id_laboratorios'";
			$fichas_laboratorios->setFuncion($funcion);
		
			$fichas_laboratorios->setParametros($parametros);
		
		
			$resultado=$fichas_laboratorios->Insert();
		
		
		
		}
		
		$columnas_labo =  " fichas_laboratorios.id_fichas_laboratorios,
  							laboratorios.nombre_laboratorios
					 	";
		$tablas_labo = " public.fichas_laboratorios, public.laboratorios";
		$where_labo  = " fichas_laboratorios.id_laboratorios = laboratorios.id_laboratorios
		AND  fichas_laboratorios.id_fichas = '$_id_fichas' ";
		$id_labo     = "laboratorios.nombre_laboratorios";
		
		$resFicLabo = $fichas_laboratorios->getCondiciones($columnas_labo, $tablas_labo, $where_labo, $id_labo);
		
		
		//editando
		if (isset ($_GET["id_fichas_edit"])   )
		{
			$_id_fichas = $_GET["id_fichas_edit"];
			$where    = "id_fichas = '$_id_fichas' ";
			$resultEdit = $fichas->getBy($where);
		
			
		}
		
		
		
		
		//guardamos la ficha
		if (isset($_POST["btn_guardar"]) )
		{
			
			$fichas_fotos = new FichasFotosModel();
			
			
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
			
		
			//busco la id_foto_fichas-foto
			$_id_fichas_fotos = 0;
				
			$resultID = $fichas_fotos->getCondiciones("id_fichas_fotos", "fichas_fotos", "id_fichas = '$_id_fichas'  ", "id_fichas");
			foreach($resultID as $res)
			{
				$_id_fichas_fotos =    $res->id_fichas_fotos;
			}
				
			$id_fichas     = $_id_fichas;
			$nombre_fichas = $_POST['nombre_fichas'] ;
			$encabezado_tabla_fichas =  $_POST['encabezado_tabla_fichas'] ;
			$accion_terapeutica_fichas =  $_POST['accion_terapeutica_fichas'] ;
			$clasificacion_farmacologica_fichas =  $_POST['clasificacion_farmacologica_fichas']  ;
			$forma_terapeutica_fichas =   $_POST['forma_terapeutica_fichas'] ;
			$indicaciones_uso_fichas =   $_POST['indicaciones_uso_fichas'] ;
			$interacciones_fichas =   $_POST['interacciones_fichas'] ;
			$contraindicaciones_fichas =   $_POST['contraindicaciones_fichas'] ;
			$periodo_retiro_fichas =   $_POST['periodo_retiro_fichas'] ;
			$advertencias_fichas =   $_POST['advertencias_fichas']  ;
			$presentacion_fichas =   $_POST['presentacion_fichas'] ;
			$registro_sanitario_fichas =   $_POST['registro_sanitario_fichas'];
			$mecanismo_accion_fichas =   $_POST['mecanismo_accion_fichas']  ;
			$efectos_colaterales_fichas =   $_POST['efectos_colaterales_fichas']  ;
			$conservacion_fichas =   $_POST['conservacion_fichas']  ;
			$encabezado_dosificacion_fichas =   $_POST['encabezado_dosificacion_fichas'] ;
				
			
			$id_fichas_fotos = $_id_fichas_fotos;
				
			$funcion = "ins_fichas";
				
			$parametros = " '$id_fichas', '$nombre_fichas', '$encabezado_tabla_fichas',
			'$accion_terapeutica_fichas',
			'$clasificacion_farmacologica_fichas', '$forma_terapeutica_fichas',
			'$indicaciones_uso_fichas', 
			'$interacciones_fichas', '$contraindicaciones_fichas',
			'$periodo_retiro_fichas', '$advertencias_fichas',
			'$presentacion_fichas', '$registro_sanitario_fichas',
			'$id_fichas_fotos',
			'$mecanismo_accion_fichas', 
			'$efectos_colaterales_fichas', 
			'$conservacion_fichas',
			'$encabezado_dosificacion_fichas'";
			$fichas->setFuncion($funcion);
			$fichas->setParametros($parametros);
			$resultado=$fichas->Insert();
				
		
			
			$this->redirect("FichasProductos", "index");
			
		}
		else 
		{
			$resultSet = "";
			
			
			
			$this->view("FichasProductosAdd",array(
					 
					"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultCom" =>$resultCom, "resultEsp" =>$resultEsp, "resultEspe" =>$resultEspe, "resultFormAd" =>$resultFormAd,
					"resultDis" =>$resultDis, "resultLab" =>$resultLab, 
					 "resFicCom"=>$resFicCom, "resFicDos"=>$resFicDos,"resFicEs"=>$resFicEs, "resFicAdm"=>$resFicAdm, "resFicDistri"=>$resFicDistri, "resFicLabo"=>$resFicLabo,
					"id_fichas"=>$_id_fichas, "resultUme"=>$resultUme,
					"nombre_fichas"=>$_nombre_fichas , "nueva_ficha"=>$_nueva_ficha
					
					 
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
		$fichas_formas_administracion = new FichasFormasAdministracionModel();
		$fichas_distribuidores = new FichasDistribuidoresModel();
		$fichas_laboratorios = new FichasLaboratoriosModel();
		
	    if(isset($_GET["id_fichas"]))
		{
			$id_fichas=(int)$_GET["id_fichas"];
			
			$fichas_composiciones->deleteBy(" id_fichas",$id_fichas);
			$fichas_dosificaciones->deleteBy(" id_fichas",$id_fichas);
			$fichas_especies->deleteBy(" id_fichas",$id_fichas);
			$fichas_formas_administracion->deleteBy(" id_fichas",$id_fichas);
			$fichas_distribuidores->deleteBy(" id_fichas",$id_fichas);
			$fichas_laboratorios->deleteBy(" id_fichas",$id_fichas);
				
			$fichas->deleteBy(" id_fichas",$id_fichas);
			
			
			//$this->view("Resultado",array(
				//	"resultado"=>$resultado
			//));
				
				
		}
	
		
			
		
		$this->redirect("FichasProductos", "index");
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
   		     
			$fichas_especies = new FichasEspeciesModel();
			$fichas_formas_administracion = new FichasFormasAdministracionModel();
			$fichas_distribuidores = new FichasDistribuidoresModel();
			$fichas_laboratorios = new FichasLaboratoriosModel();
				
   				
   			$fichas_fotos = new FichasFotosModel();
   		
   		$distribuidores = new DistribuidoresModel();
   			$laboratorios = new LaboratoriosModel();
   		
   			$columnas = " fichas.id_fichas,
					  fichas.nombre_fichas,
					  fichas.encabezado_tabla_fichas,
					  fichas.accion_terapeutica_fichas,
					  fichas.clasificacion_farmacologica_fichas,
					  fichas.forma_terapeutica_fichas,
					  fichas.indicaciones_uso_fichas,
					  fichas.interacciones_fichas,
					  fichas.contraindicaciones_fichas,
					  fichas.periodo_retiro_fichas,
					  fichas.advertencias_fichas,
					  fichas.presentacion_fichas,
					  fichas.registro_sanitario_fichas,
					  fichas.efectos_colaterales_fichas,
					  fichas.encabezado_dosificacion_fichas,
					  fichas.mecanismo_accion_fichas,
					  fichas.interacciones_fichas,
					  fichas.conservacion_fichas";
   			$tablas   = "  public.fichas";
   			$where    = " fichas.id_fichas = '$_id_fichas' ";
   			$id       = "fichas.id_fichas";
   		
   		
   			$columnas_com = "composiciones.nombre_composiciones,
  							fichas_composiciones.cantidad_fichas_composiciones, unidades_medida.nombre_unidades_medida";
   			$tablas_com   = "public.fichas_composiciones,
 							 public.composiciones, public.unidades_medida";
   			$where_com    = "composiciones.id_composiciones = fichas_composiciones.id_composiciones AND fichas_composiciones.id_unidades_medida = unidades_medida.id_unidades_medida
   			AND fichas_composiciones.id_fichas = '$_id_fichas'	";
   			$id_com		  = "composiciones.nombre_composiciones";
   				
   			$columnas_dos = "especies.nombre_especies, fichas_dosificacion.dosis_fichas_dosificacion, fichas_dosificacion.id_fichas, fichas_dosificacion.id_especies";
   			$tablas_dos   = "public.fichas_dosificacion,
  							 public.especies";
   			$where_dos    = "fichas_dosificacion.id_especies = especies.id_especies
   			AND fichas_dosificacion.id_fichas = '$_id_fichas'	";
   			$id_dos		  = "especies.nombre_especies";
   		
		    $columnas_es = "especies.nombre_especies, fichas_especies.id_fichas, fichas_especies.id_especies";
   			$tablas_es   = "public.fichas_especies,
  							 public.especies";
   			$where_es    = "fichas_especies.id_especies = especies.id_especies
   			AND fichas_especies.id_fichas = '$_id_fichas'	";
   			$id_es		  = "especies.nombre_especies";
   		
		    $columnas_adm =  "fichas_formas_administracion.id_fichas_formas_administracion,
  							formas_administracion.nombre_formas_administracion";
			$tablas_adm = "public.fichas_formas_administracion, public.formas_administracion";
			$where_adm  = "fichas_formas_administracion.id_formas_administracion = formas_administracion.id_formas_administracion
					AND  fichas_formas_administracion.id_fichas = '$_id_fichas' ";
			$id_adm     = "formas_administracion.nombre_formas_administracion";
					
			
			
			
   			$columnas_dis = "fichas_distribuidores.id_distribuidores,
					  distribuidores.nombre_distribuidores,
					  	 distribuidores.telefono_persona_contacto_distribuidores, 
  							 distribuidores.email_distribuidores, 
  							 distribuidores.web_distribuidores";
   			$tablas_dis   = "public.distribuidores, 
  							 public.fichas_distribuidores";
   			$where_dis    = "fichas_distribuidores.id_distribuidores = distribuidores.id_distribuidores
   							 AND fichas_distribuidores.id_fichas = '$_id_fichas'	";
   			$id_dis = "distribuidores.nombre_distribuidores";
   			
   			$columnas_lab = "fichas_laboratorios.id_laboratorios,
					  laboratorios.nombre_laboratorios,
					  	 laboratorios.telefono_persona_contacto_laboratorios,
  							 laboratorios.email_laboratorios,
  							 laboratorios.web_laboratorios";
   			$tablas_lab   = "public.laboratorios, public.fichas_laboratorios";
   			$where_lab    = "fichas_laboratorios.id_laboratorios = laboratorios.id_laboratorios
   			AND fichas_laboratorios.id_fichas = '$_id_fichas'	";
   			
   			$id_lab = "laboratorios.nombre_laboratorios";
   			
   			$resultDis = $fichas_distribuidores->getCondiciones($columnas_dis, $tablas_dis, $where_dis, $id_dis);
   			
   			$resultLab = $fichas_laboratorios->getCondiciones($columnas_lab, $tablas_lab, $where_lab, $id_lab);
   			
   			$resultRep = $fichas->getCondiciones($columnas, $tablas, $where, $id);
   				
   			$resultCom = $fichas_composiciones->getCondiciones($columnas_com, $tablas_com, $where_com, $id_com);
   			$resultDos = $fichas_dosificacion->getCondiciones($columnas_dos, $tablas_dos, $where_dos, $id_dos);
   		    $resultEs = $fichas_dosificacion->getCondiciones($columnas_es, $tablas_es, $where_es, $id_es);
   		    $resFicAdm = $fichas_formas_administracion->getCondiciones($columnas_adm, $tablas_adm, $where_adm, $id_adm);
					
   			$resultRep2 = "";
   		
   		
   			///aqui aumento contador de visualizacion
   			$colval_upd = " consultas_fichas = consultas_fichas + 1 ";
   			$tabla_upd = "fichas";
   			$where_upd = "id_fichas = '$_id_fichas' ";
   			$resultUpd =  $fichas->UpdateBy($colval_upd, $tabla_upd, $where_upd);
   			
			
			//muestro el reporte
	
			$this->report("Ficha",array( "resultRep"=>$resultRep, "id_fichas"=>$_id_fichas, "nombre_fichas"=>$_nombre_fichas,
   					"resultCom"=>$resultCom,
   					"resultDos"=>$resultDos,
					"resultEs"=>$resultEs,
					"resFicAdm"=>$resFicAdm,
					"resultLab"=>$resultLab,
   					"resultDis"=>$resultDis
						
						
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
   		     
			$fichas_especies = new FichasEspeciesModel();
			$fichas_formas_administracion = new FichasFormasAdministracionModel();
			$fichas_distribuidores = new FichasDistribuidoresModel();
			$fichas_laboratorios = new FichasLaboratoriosModel();
				
   				
   			$fichas_fotos = new FichasFotosModel();
   		
   		$distribuidores = new DistribuidoresModel();
   			$laboratorios = new LaboratoriosModel();
   		
   			$columnas = " fichas.id_fichas,
					  fichas.nombre_fichas,
					  fichas.encabezado_tabla_fichas,
					  fichas.accion_terapeutica_fichas,
					  fichas.clasificacion_farmacologica_fichas,
					  fichas.forma_terapeutica_fichas,
					  fichas.indicaciones_uso_fichas,
					  fichas.interacciones_fichas,
					  fichas.contraindicaciones_fichas,
					  fichas.periodo_retiro_fichas,
					  fichas.advertencias_fichas,
					  fichas.presentacion_fichas,
					  fichas.registro_sanitario_fichas,
					  fichas.efectos_colaterales_fichas,
					  fichas.encabezado_dosificacion_fichas,
					  fichas.mecanismo_accion_fichas,
					  fichas.interacciones_fichas,
					  fichas.conservacion_fichas";
   			$tablas   = "  public.fichas";
   			$where    = " fichas.id_fichas = '$_id_fichas' ";
   			$id       = "fichas.id_fichas";
   		
   		
   			$columnas_com = "composiciones.nombre_composiciones,
  							fichas_composiciones.cantidad_fichas_composiciones, unidades_medida.nombre_unidades_medida";
   			$tablas_com   = "public.fichas_composiciones,
 							 public.composiciones, public.unidades_medida";
   			$where_com    = "composiciones.id_composiciones = fichas_composiciones.id_composiciones AND fichas_composiciones.id_unidades_medida = unidades_medida.id_unidades_medida
   			AND fichas_composiciones.id_fichas = '$_id_fichas'	";
   			$id_com		  = "composiciones.nombre_composiciones";
   				
   			$columnas_dos = "especies.nombre_especies, fichas_dosificacion.dosis_fichas_dosificacion, fichas_dosificacion.id_fichas, fichas_dosificacion.id_especies";
   			$tablas_dos   = "public.fichas_dosificacion,
  							 public.especies";
   			$where_dos    = "fichas_dosificacion.id_especies = especies.id_especies
   			AND fichas_dosificacion.id_fichas = '$_id_fichas'	";
   			$id_dos		  = "especies.nombre_especies";
   		
		    $columnas_es = "especies.nombre_especies, fichas_especies.id_fichas, fichas_especies.id_especies";
   			$tablas_es   = "public.fichas_especies,
  							 public.especies";
   			$where_es    = "fichas_especies.id_especies = especies.id_especies
   			AND fichas_especies.id_fichas = '$_id_fichas'	";
   			$id_es		  = "especies.nombre_especies";
   		
		    $columnas_adm =  "fichas_formas_administracion.id_fichas_formas_administracion,
  							formas_administracion.nombre_formas_administracion";
			$tablas_adm = "public.fichas_formas_administracion, public.formas_administracion";
			$where_adm  = "fichas_formas_administracion.id_formas_administracion = formas_administracion.id_formas_administracion
					AND  fichas_formas_administracion.id_fichas = '$_id_fichas' ";
			$id_adm     = "formas_administracion.nombre_formas_administracion";
					
			
			
			
   			$columnas_dis = "fichas_distribuidores.id_distribuidores,
					  distribuidores.nombre_distribuidores,
					  	 distribuidores.telefono_persona_contacto_distribuidores, 
  							 distribuidores.email_distribuidores, 
  							 distribuidores.web_distribuidores";
   			$tablas_dis   = "public.distribuidores, 
  							 public.fichas_distribuidores";
   			$where_dis    = "fichas_distribuidores.id_distribuidores = distribuidores.id_distribuidores
   							 AND fichas_distribuidores.id_fichas = '$_id_fichas'	";
   			$id_dis = "distribuidores.nombre_distribuidores";
   			
   			$columnas_lab = "fichas_laboratorios.id_laboratorios,
					  laboratorios.nombre_laboratorios,
					  	 laboratorios.telefono_persona_contacto_laboratorios,
  							 laboratorios.email_laboratorios,
  							 laboratorios.web_laboratorios";
   			$tablas_lab   = "public.laboratorios, public.fichas_laboratorios";
   			$where_lab    = "fichas_laboratorios.id_laboratorios = laboratorios.id_laboratorios
   			AND fichas_laboratorios.id_fichas = '$_id_fichas'	";
   			
   			$id_lab = "laboratorios.nombre_laboratorios";
   			
   			$resultDis = $fichas_distribuidores->getCondiciones($columnas_dis, $tablas_dis, $where_dis, $id_dis);
   			
   			$resultLab = $fichas_laboratorios->getCondiciones($columnas_lab, $tablas_lab, $where_lab, $id_lab);
   			
   			$resultRep = $fichas->getCondiciones($columnas, $tablas, $where, $id);
   				
   			$resultCom = $fichas_composiciones->getCondiciones($columnas_com, $tablas_com, $where_com, $id_com);
   			$resultDos = $fichas_dosificacion->getCondiciones($columnas_dos, $tablas_dos, $where_dos, $id_dos);
   		    $resultEs = $fichas_dosificacion->getCondiciones($columnas_es, $tablas_es, $where_es, $id_es);
   		    $resFicAdm = $fichas_formas_administracion->getCondiciones($columnas_adm, $tablas_adm, $where_adm, $id_adm);
					
   			$resultRep2 = "";
   		
   		
   			///aqui aumento contador de visualizacion
   			$colval_upd = " consultas_fichas = consultas_fichas + 1 ";
   			$tabla_upd = "fichas";
   			$where_upd = "id_fichas = '$_id_fichas' ";
   			$resultUpd =  $fichas->UpdateBy($colval_upd, $tabla_upd, $where_upd);
   				
   				
   				
   				
   			//muestro el reporte
   		
   			$this->view("FichasProductosOnline",array(	"resultRep"=>$resultRep, "id_fichas"=>$_id_fichas, "nombre_fichas"=>$_nombre_fichas,
   					"resultCom"=>$resultCom,
   					"resultDos"=>$resultDos,
					"resultEs"=>$resultEs,
					"resFicAdm"=>$resFicAdm,
					"resultLab"=>$resultLab,
   					"resultDis"=>$resultDis
   						
   						
   			));
   		
   		}
   		
   		
   	}
   	
   	public function verFicha()
   	{
   		
   		//creacion del diccionario de datos
   		$dicContenido = array(
   				'COACTIVADOPRI'=>"",
   				'GARANTEPRI'=>"",
   				'CIUDAD'=>"",
   				'FECHA'=>"",
   				'HORA'=>"",
   				'OPERACION'=>"",
   				'NOMBRESEC'=>"",
   				'CARGOSEC'=>"",
   				'NOMBREABG'=>"",
   				'CARGOABG'=>"",
   				'NOMBRECIT'=>'',
   				'CARGOCIT'=>'',
   				'RAZON2'=>"",
   				'COACTIVADOS'=>"",
   				'GARANTES'=>"",
   				'DIRIGIDOS'=>"",
   				'NOTIFICADOR'=>""
		
   		);
   		
   			
   			
   		//echo 'llego'; die();
   		$this->verReporte('FichaProductoas',array('dicContenido'=>$dicContenido,'dtdatos'=>$dtdatos,'razon_avoco'=>$razon_avoco));
   			
   	}
   	
}
?>
