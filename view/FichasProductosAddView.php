<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Agregar Fichas de Productos - Vademano 2015</title>
   
   		  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  			   
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		
		<script>
		    webshims.setOptions('forms-ext', {types: 'date'});
			webshims.polyfill('forms forms-ext');
		</script>
 		
 		<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_agregar_composicion").click(function() 
			{
		    	
		    	var id_composiciones = $("#id_composiciones").val();
		    	var cantidad_fichas_composiciones = $("#cantidad_fichas_composiciones").val();
		    	var nombre_unidades_medida = $("#nombre_unidades_medida").val();
		    	if (cantidad_fichas_composiciones == "")
		    	{
					
			    	$("#mensaje_cantidad_fichas_composiciones").text("Introduzca una Cantidad");
		    		$("#mensaje_cantidad_fichas_composiciones").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_cantidad_fichas_composiciones").fadeOut("slow"); //Muestra mensaje de error
		            
			    }

		    	if (id_composiciones == 0)
		    	{
					
			    	$("#mensaje_id_composiciones").text("Seleccione un Principio Activo");
		    		$("#mensaje_id_composiciones").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_id_composiciones").fadeOut("slow"); //Muestra mensaje de error
		            
			    }
		    	if (nombre_unidades_medida == "0")
		    	{
					
			    	$("#mensaje_nombre_unidades_medida").text("Seleccione una Unidad de Medida");
		    		$("#mensaje_nombre_unidades_medida").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_nombre_unidades_medida").fadeOut("slow"); //Muestra mensaje de error
		            
			    }
		    	
			}); 
			
			$( "#id_composiciones" ).focus(function() {
				$("#mensaje_id_composiciones").fadeOut("slow");
    		});
		
			$( "#cantidad_fichas_composiciones" ).focus(function() {
				$("#mensaje_cantidad_fichas_composiciones").fadeOut("slow");
    		});

			$( "#nombre_unidades_medida" ).focus(function() {
				$("#mensaje_nombre_unidades_medida").fadeOut("slow");
    		});
    							    				    
		}); 

	</script>
	<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_agregar_dosificacion").click(function() 
			{
		    	
		    	var id_especies = $("#id_especies").val();
		    	var dosis_fichas_dosificacion = $("#dosis_fichas_dosificacion").val();
		    	
		    	if (dosis_fichas_dosificacion == "")
		    	{
					
			    	$("#mensaje_dosis_fichas_dosificacion").text("Campo Vacio");
		    		$("#mensaje_dosis_fichas_dosificacion").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_dosis_fichas_dosificacion").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }

		    	if (id_especies == 0)
		    	{
					
			    	$("#mensaje_id_especies").text("Seleccione una Especie");
		    		$("#mensaje_id_especies").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_id_especies").fadeOut("slow"); //Muestra mensaje de error
			    
			    }

			}); 
			
			$( "#id_especies" ).focus(function() {
				$("#mensaje_id_especies").fadeOut("slow");
    		});
		
			$( "#dosis_fichas_dosificacion" ).focus(function() {
				$("#mensaje_dosis_fichas_dosificacion").fadeOut("slow");
    		});
    							    
		}); 

	</script>



	<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_guardar").click(function() 
			{
		    	
		    	var foto_fichas_fotos = $("#foto_fichas_fotos").val();
		    	var nombre_fichas = $("#nombre_fichas").val();
		    	var encabezado_tabla_fichas = $("#encabezado_tabla_fichas").val();
		    	var accion_terapeutica_fichas = $("#accion_terapeutica_fichas").val();
		    	var clasificacion_farmacologica_fichas = $("#clasificacion_farmacologica_fichas").val();
		    	var forma_terapeutica_fichas = $("#forma_terapeutica_fichas").val();;
		    	var indicaciones_uso_fichas = $("#indicaciones_uso_fichas").val();
		    	var interacciones_fichas = $("#interacciones_fichas").val();
		    	var contraindicaciones_fichas = $("#contraindicaciones_fichas").val();
		    	var periodo_retiro_fichas = $("#periodo_retiro_fichas").val();
		    	var advertencias_fichas = $("#advertencias_fichas").val();
		    	var presentacion_fichas = $("#presentacion_fichas").val();
		    	var registro_sanitario_fichas = $("#registro_sanitario_fichas").val();
		    	var mecanismo_accion_fichas = $("#mecanismo_accion_fichas").val();
		    	var efectos_colaterales_fichas = $("#efectos_colaterales_fichas").val();
		    	var conservacion_fichas = $("#conservacion_fichas").val();
		    	var encabezado_dosificacion_fichas = $("#encabezado_dosificacion_fichas").val();
		        
		    	if (nombre_fichas == "")
		    	{
					
			    	$("#mensaje_nombre_fichas").text("Campo Vacio");
		    		$("#mensaje_nombre_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_nombre_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
		    	if (foto_fichas_fotos == "")
		    	{
					
			    	$("#mensaje_foto_fichas_fotos").text("Selecciones una Foto");
		    		$("#mensaje_foto_fichas_fotos").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_foto_fichas_fotos").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }	

		    	if (accion_terapeutica_fichas == "")
		    	{
					
			    	$("#mensaje_accion_terapeutica_fichas").text("Campo Vacio");
		    		$("#mensaje_accion_terapeutica_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_accion_terapeutica_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
				
		    	if (clasificacion_farmacologica_fichas == "")
		    	{
					
			    	$("#mensaje_clasificacion_farmacologica_fichas").text("Campo Vacio");
		    		$("#mensaje_clasificacion_farmacologica_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_clasificacion_farmacologica_fichas").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
				
		    	if (forma_terapeutica_fichas == "")
		    	{
					
			    	$("#mensaje_forma_terapeutica_fichas").text("Campo Vacio");
		    		$("#mensaje_forma_terapeutica_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_forma_terapeutica_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
				
		    	if (indicaciones_uso_fichas == "")
		    	{
					
			    	$("#mensaje_indicaciones_uso_fichas").text("Campo Vacio");
		    		$("#mensaje_indicaciones_uso_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_indicaciones_uso_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
				
		    	
		    	if (interacciones_fichas == "")
		    	{
					
			    	$("#mensaje_interacciones_fichas").text("Campo Vacio");
		    		$("#mensaje_interacciones_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_interacciones_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
				
		    	if (contraindicaciones_fichas == "")
		    	{
					
			    	$("#mensaje_contraindicaciones_fichas").text("Campo Vacio");
		    		$("#mensaje_contraindicaciones_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_contraindicaciones_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
				
		    	if (periodo_retiro_fichas == "")
		    	{
					
			    	$("#mensaje_periodo_retiro_fichas").text("Campo Vacio");
		    		$("#mensaje_periodo_retiro_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_periodo_retiro_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
				
		    	if (advertencias_fichas == "")
		    	{
					
			    	$("#mensaje_advertencias_fichas").text("Campo Vacio");
		    		$("#mensaje_advertencias_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_advertencias_fichas").fadeOut("slow"); //Muestra mensaje de error
			   
			    }
				

		    	if (presentacion_fichas == "")
		    	{
					
			    	$("#mensaje_presentacion_fichas").text("Campo Vacio");
		    		$("#mensaje_presentacion_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	
		    	else session_start();
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
					$where_es = "id_fichas = '$_id_fichas' ";	
					
					$fichas_formas_administracion = new FichasFormasAdministracionModel();
					$fichas_distribuidores = new FichasDistribuidoresModel();
					$fichas_laboratorios = new FichasLaboratoriosModel();
					
					
					$fichas_fotos = new FichasFotosModel();
			
			
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
							  fichas_distribuidores.id_distribuidores,
							  distribuidores.nombre_distribuidores,
							  fichas_laboratorios.id_laboratorios,
							  laboratorios.nombre_laboratorios,
							  fichas.mecanismo_accion_fichas,
							  fichas.efectos_colaterales_fichas,
							  fichas.conservacion_fichas,
							  fichas.encabezado_dosificacion_fichas";
					$tablas   = "  public.fichas,
		  						public.distribuidores,
		  						public.laboratorios,
		  						public.fichas_distribuidores,
		  						public.fichas_laboratorios";
					$where    = " distribuidores.id_distribuidores = fichas_distribuidores.id_distribuidores AND laboratorios.id_laboratorios = fichas_laboratorios.id_laboratorios
					AND fichas_distribuidores.id_fichas =fichas.id_fichas AND fichas_laboratorios.id_fichas =fichas.id_fichas AND fichas.id_fichas = '$_id_fichas' ";
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


					$columnas_distri =  " fichas_distribuidores.id_fichas_distribuidores,
							distribuidores.nombre_distribuidores";
					$tablas_distri = " public.fichas_distribuidores, public.distribuidores";
					$where_distri  = " fichas_distribuidores.id_distribuidores = distribuidores.id_distribuidores
					AND  fichas_distribuidores.id_fichas = '$_id_fichas' ";
					$id_distri     = "distribuidores.nombre_distribuidores";
					
					$columnas_labo =  " fichas_laboratorios.id_fichas_laboratorios,
							laboratorios.nombre_laboratorios";
					$tablas_labo = " public.fichas_laboratorios, public.laboratorios";
					$where_labo  = " fichas_laboratorios.id_laboratorios = laboratorios.id_laboratorios
					AND  fichas_laboratorios.id_fichas = '$_id_fichas' ";
					$id_labo     = "laboratorios.nombre_laboratorios";
					
	
					
			
					$resultRep = $fichas->getCondiciones($columnas, $tablas, $where, $id);
					
					$resultCom = $fichas_composiciones->getCondiciones($columnas_com, $tablas_com, $where_com, $id_com);
					$resultDos = $fichas_dosificacion->getCondiciones($columnas_dos, $tablas_dos, $where_dos, $id_dos);
					$resultEs = $fichas_especies->getCondiciones($columnas_es, $tablas_es, $where_es, $id_es);
		            $resFicAdm = $fichas_formas_administracion->getCondiciones($columnas_adm, $tablas_adm, $where_adm, $id_adm);
		            $resFicDistri = $fichas_distribuidores->getCondiciones($columnas_distri, $tablas_distri, $where_distri, $id_distri);
		            $resFicLabo = $fichas_laboratorios->getCondiciones($columnas_labo, $tablas_labo, $where_labo, $id_labo);
		        	$resultRep2 = "";
			
			
					///aqui aumento contador de visualizacion
					$colval_upd = " consultas_fichas = consultas_fichas + 1 ";
					$tabla_upd = "fichas";
					$where_upd = "id_fichas = '$_id_fichas' ";
					$resultUpd =  $fichas->UpdateBy($colval_upd, $tabla_upd, $where_upd);
					
					
					
					
					//muestro el reporte
			
					$this->report("Ficha",array(	"resultRep"=>$resultRep, "id_fichas"=>$_id_fichas, "nombre_fichas"=>$_nombre_fichas,
							"resultCom"=>$resultCom,
					        "resultDos"=>$resultDos,
							"resultEs"=>$resultEs,
					        "resFicAdm"=>$resFicAdm,
					        "resFicDistri"=>$resFicDistri,				
					        "resFicLabo"=>$resFicLabo
					));
			
				}
			
		    	{
					
			    	$("#mensaje_presentacion_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
				
		    	if (registro_sanitario_fichas == "")
		    	{
					
			    	$("#mensaje_registro_sanitario_fichas").text("Campo Vacio");
		    		$("#mensaje_registro_sanitario_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_registro_sanitario_fichas").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	
		    	if (mecanismo_accion_fichas == "")
		    	{
					
			    	$("#mensaje_mecanismo_accion_fichas").text("Campo Vacio");
		    		$("#mensaje_mecanismo_accion_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_mecanismo_accion_fichas").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	if (efectos_colaterles_fichas == "")
		    	{
					
			    	$("#mensaje_efectos_colaterles_fichas").text("Campo Vacio");
		    		$("#mensaje_efectos_colaterles_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_efectos_colaterles_fichas").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	if (conservacion_fichas == "")
		    	{
					
			    	$("#mensaje_conservacion_fichas").text("Campo Vacio");
		    		$("#mensaje_conservacion_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_conservacion_fichas").fadeOut("slow"); //Muestra mensaje de error
			    
			    }

		    	if (encabezado_dosificacion_fichas == "")
		    	{
					
			    	$("#mensaje_encabezado_dosificacion_fichas").text("Campo Vacio");
		    		$("#mensaje_encabezado_dosificacion_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_encabezado_dosificacion_fichas").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
			}); 

			$( "#nombre_fichas" ).focus(function() {
				$("#mensaje_nombre_fichas").fadeOut("slow");
    		});
			$( "#foto_fichas_fotos" ).focus(function() {
				$("#mensaje_fichas_fotos").fadeOut("slow");
    		});
			$( "#accion_terapeutica_fichas" ).focus(function() {
				$("#mensaje_accion_terapeutica_fichas").fadeOut("slow");
    		});
			$( "#clasificacion_farmacologica_fichas" ).focus(function() {
				$("#mensaje_clasificacion_farmacologica_fichas").fadeOut("slow");
    		});
			$( "#forma_terapeutica_fichas" ).focus(function() {
				$("#mensaje_forma_terapeutica_fichas").fadeOut("slow");
    		});
			$( "#indicaciones_uso_fichas" ).focus(function() {
				$("#mensaje_indicaciones_uso_fichas").fadeOut("slow");
    		});
			$( "#interacciones_fichas" ).focus(function() {
				$("#mensaje_interacciones_fichas").fadeOut("slow");
    		});
			$( "#contraindicaciones_fichas" ).focus(function() {
				$("#mensaje_contraindicaciones_fichas").fadeOut("slow");
    		});
			$( "#periodo_retiro_fichas" ).focus(function() {
				$("#mensaje_periodo_retiro_fichas").fadeOut("slow");
    		});
			$( "#advertencias_fichas" ).focus(function() {
				$("#mensaje_advertencias_fichas").fadeOut("slow");
    		});
			$( "#presentacion_fichas" ).focus(function() {
				$("#mensaje_presentacion_fichas").fadeOut("slow");
    		});
			$( "#registro_sanitario_fichas" ).focus(function() {
				$("#mensaje_registro_sanitario_fichas").fadeOut("slow");
    		});
			
			$( "#mecanismo_accion_fichas" ).focus(function() {
				$("#mensaje_mecanismo_accion_fichas").fadeOut("slow");
    		});
			$( "#efectos_colaterales_fichas" ).focus(function() {
				$("#mensaje_efectos_colaterales_fichas").fadeOut("slow");
    		});
			$( "#conservacion_fichas" ).focus(function() {
				$("#mensaje_conservacion_fichas").fadeOut("slow");
    		});
			$( "#encabezado_dosificacion_fichas" ).focus(function() {
				$("#mensaje_encabezado_dosificacion_fichas").fadeOut("slow");
    		});
								    
		}); 

	</script>


 			
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
                
            
        </style>
    </head>
    <body>
    
       <?php include("view/modulos/headadmin.php"); ?>
       
          <?php
   
		   //$sel_foto_fichas_fotos = "";
		   $sel_id_fichas = "";
		   $sel_nombre_fichas = "";
		   $sel_encabezado_tabla_fichas = "";
		   $sel_accion_terapeutica_fichas = "";
		   $sel_clasificacion_farmacologica_fichas = "";
		   $sel_forma_terapeutica_fichas = "";
		   $sel_indicaciones_uso_fichas = "";
		   $sel_interacciones_fichas = "";
		   $sel_contraindicaciones_fichas = "";
		   $sel_periodo_retiro_fichas = "";
		   $sel_advertencias_fichas = "";
		   $sel_presentacion_fichas = "";
		   $sel_registro_sanitario_fichas = "";
		   
		   $sel_mecanismo_accion_fichas = "";
		   $sel_efectos_colaterales_fichas = "";
		   $sel_conservacion_fichas = "";
		   $sel_encabezado_dosificacion_fichas = "";
		   
		   if ($nueva_ficha)
		   {
		   	
		   }
		   else 
		   {
		   		if($_SERVER['REQUEST_METHOD']=='POST' )
		   		{
		   			
		   			//$sel_foto_fichas_fotos = $_FILES['foto_fichas_fotos'];  
		   			
		   			$sel_nombre_fichas = $_POST['nombre_fichas'];
		   			$sel_id_fichas = $_POST['id_fichas'];
					$sel_encabezado_tabla_fichas = $_POST['encabezado_tabla_fichas'];;
					$sel_accion_terapeutica_fichas = $_POST['accion_terapeutica_fichas'];
					$sel_clasificacion_farmacologica_fichas = $_POST['clasificacion_farmacologica_fichas'];
					$sel_forma_terapeutica_fichas = $_POST['forma_terapeutica_fichas'];
					$sel_indicaciones_uso_fichas = $_POST['indicaciones_uso_fichas'];
					$sel_interacciones_fichas = $_POST['interacciones_fichas'];
					$sel_contraindicaciones_fichas = $_POST['contraindicaciones_fichas'];
					$sel_periodo_retiro_fichas = $_POST['periodo_retiro_fichas'];
					$sel_advertencias_fichas = $_POST['advertencias_fichas'];
					$sel_presentacion_fichas = $_POST['presentacion_fichas'];
					$sel_registro_sanitario_fichas = $_POST['registro_sanitario_fichas'];
			    	$sel_mecanismo_accion_fichas = $_POST['mecanismo_accion_fichas'];
					$sel_efectos_colaterales_fichas = $_POST['efectos_colaterales_fichas'];
					$sel_conservacion_fichas = $_POST['conservacion_fichas'];
					$sel_encabezado_dosificacion_fichas = $_POST['encabezado_dosificacion_fichas'];
					
			     
		   		}
		   }
          
		   
		   		
		   
		?>

       
       
  		 <form action="<?php echo $helper->url("FichasProductos","index_dos"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
          
         <?php if ($id_fichas > 0) { ?>
        	    <h4>Insertar Productos</h4>
            	<hr/>
            	
		   		
            
          <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
	         
			<div class="row">
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Nombre Producto </p>
			  	<input type="text" name="nombre_fichas" id="nombre_fichas" value="<?php echo $resEdit->nombre_fichas;     ?>" class="form-control"  />
				<input type="hidden" name="id_fichas" id="id_fichas" value="<?php echo $resEdit->id_fichas; ?>" class="form-control"/>
				<div id="mensaje_nombre" class="errores"></div>
			  </div>
			  
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Categoria Farmacológica </p>
			  	<input type="text" name="clasificacion_farmacologica_fichas" id="clasificacion_farmacologica_fichas" value="<?php echo  $resEdit->clasificacion_farmacologica_fichas; ?>" class="form-control"/>
				<div id="mensaje_clasificacion_farmacologica_fichas" class="errores"></div>
			  </div>
		</div>
			 
			 <div  class="row">
			<div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Forma Farmacéutica </p>
			  	<input type="text" name="forma_terapeutica_fichas" id="forma_terapeutica_fichas" value="<?php echo $resEdit->forma_terapeutica_fichas; ?>" class="form-control"/>
				<div id="mensaje_forma_terapeutica_fichas" class="errores"></div>
			  </div>
			  </div>
			  
				
				
			  	  
			 	  
			<div  class="row">
			
				<div class="col-xs-12 col-md-12">
			
			  		<p class="formulario-subtitulo" >Composición  </p>
			        <div class="col-xs-3 col-md-3">
			        <p class="formulario-subtitulo" >Texto Encabezado  </p>
					<input type="text" name="encabezado_tabla_fichas" id="encabezado_tabla_fichas" value="<?php echo $resEdit->encabezado_tabla_fichas;  ?>" class="form-control"/> 
					<div id="mensaje_encabezado_tabla_fichas" class="errores"></div>	
				     </div>
	          
			  </div>
				</div>
				
				
				
			  	<div class="col-xs-3 col-md-3">
			  		<?php $cantidad = 0;?>
			  		<p class="formulario-subtitulo" >Principio Activo </p>
			  		<select name="id_composiciones" id="id_composiciones"  class="form-control" >
						<option value="0"  > --SELECCIONE--</option>
						<?php foreach($resultCom as $resCom) {?>
							<option value="<?php echo $resCom->id_composiciones; ?>"  ><?php echo $resCom->nombre_composiciones; ?> </option>
							
			        	<?php } ?>
					</select> 
					<div id="mensaje_id_composiciones" class="errores"></div>
				</div>
				<div class="col-xs-2 col-md-2">
					<p class="formulario-subtitulo" >Dosis  </p>
					<input type="text" name="cantidad_fichas_composiciones" id="cantidad_fichas_composiciones" value="" class="form-control"/> 
			 		<div id="mensaje_cantidad_fichas_composiciones" class="errores"></div>
			  		
			  	</div>
			  	<div class="col-xs-2 col-md-2">
					<p class="formulario-subtitulo" >U/M  </p>
					<select name="nombre_unidades_medida" id="nombre_unidades_medida"  class="form-control" >
						<option value="0"  > --SELECCIONE--</option>
						<?php foreach($resultUme as $resUme) {?>
							<option value="<?php echo $resUme->id_unidades_medida; ?>"  ><?php echo $resUme->nombre_unidades_medida; ?> </option>
							
			        	<?php } ?>
					</select>  
			 		<div id="mensaje_nombre_unidades_medida" class="errores"></div>
			  		
			  	</div>
			    <div class="col-xs-12 col-md-5">
			  	    <p  class="formulario-subtitulo" > Agregados  </p>
			 	 	<section class="col-lg-12 usuario" style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr>
					    		<th>Id</th>
					    		<th>Nombre</th>
					    		<th>Cantidad</th>
					    		<th>Unidades de Medida</th>
					    		
					    		<th></th>
					    		<th></th>
					  		</tr>
				                
					            <?php foreach($resFicCom as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td> <?php echo $res->id_fichas_composiciones; ?>  </td>
						               <td> <?php echo $res->nombre_composiciones; ?>     </td> 
						               <td> <?php echo $res->cantidad_fichas_composiciones; ?>     </td> 
						               <td> <?php echo $res->nombre_unidades_medida; ?>     </td> 
						                
						             
							             <td>   
							               	<div class="right">
							                    <a href="<?php echo $helper->url("FichasProductos","borrarId"); ?>&id_fichas_composiciones=<?php echo $res->id_fichas_composiciones; ?>" class="btn btn-danger">Borrar</a>
							                </div>
							                <hr/>
						               </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				    <p  class="formulario-subtitulo" >Se han agregado <?php  echo $cantidad ?> Principios </p>
			     </div>
			
			
			 </div>
			
			  <div class="row">
				  <div class="col-xs-12 col-md-6">
				  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
				  		<input type="submit" id="btn_agregar_composicion" name="btn_agregar_composicion" value="Agregar" class="btn btn-success"/>
				  	</div>
				  </div>
			   </div>
			 
               <hr>
			 <div class="row">
		     <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Características </p>
			  	<input type="text" name="accion_terapeutica_fichas" id="accion_terapeutica_fichas" value="<?php echo $resEdit->accion_terapeutica_fichas;       ?>" class="form-control"/>
				<div id="mensaje_accion_terapeutica_fichas" class="errores"></div>
			  </div>
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Mecanismo De Acción </p>
			  	<input type="text" name="mecanismo_accion_fichas" id="mecanismo_accion_fichas" value="<?php echo $resEdit->mecanismo_accion_fichas; ?>" class="form-control"/>
				<div id="mensaje_mecanismo_accion_fichas" class="errores"></div>
			  </div>
			  	
			 </div>
			 
			 
			 
           <div class="row">
                		  
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Indicaciones de Uso </p>
			  	<input type="text" name="indicaciones_uso_fichas" id="indicaciones_uso_fichas" value="<?php echo $resEdit->indicaciones_uso_fichas; ?>" class="form-control"/>
				<div id="mensaje_indicaciones_uso_fichas" class="errores"></div>
			  </div>
			</div>
			<hr>

			<div class="row">
			 <div class="col-xs-12 col-md-12">
			  		<p class="formulario-subtitulo" >Dosificación </p>
			  		 <div class="col-xs-3 col-md-3">
			  		<p class="formulario-subtitulo" >Texto Encabezado  </p>
					<input type="text" name="encabezado_dosificacion_fichas" id="encabezado_dosificacion_fichas" value="<?php echo $resEdit->encabezado_dosificacion_fichas;  ?>" class="form-control"/> 
					<div id="mensaje_encabezado_dosificacion_fichas" class="errores"></div>	
				     </div>
				     </div>
				</div>
				
			  	<div class="col-xs-3 col-md-3">
			  		<?php $cantidad = 0;?>
			  		<p class="formulario-subtitulo" >Especies  </p>
			  		<select name="id_especies" id="id_especies"  class="form-control" >
						<option value="0"  > --SELECCIONE--</option>
						<?php foreach($resultEspe as $resEsp) {?>
							<option value="<?php echo $resEsp->id_especies; ?>"  ><?php echo $resEsp->nombre_especies; ?> </option>
							
			        	<?php } ?>
					</select> 
					<div id="mensaje_id_especies" class="errores"></div>
				</div>
				<div class="col-xs-3 col-md-3">
					<p class="formulario-subtitulo" >Dosis  </p>
					<input type="text" name="dosis_fichas_dosificacion" id="dosis_fichas_dosificacion" value="" class="form-control"/> 
			 		<div id="mensaje_dosis_fichas_dosificacion" class="errores"></div>
			  	</div>
			  	
			  
			  
			    <div class="col-xs-12 col-md-6">
			  		<p  class="formulario-subtitulo" > Agregados  </p>
			 	 	<section class="col-lg-12 usuario" style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr>
					    		<th>Id</th>
					    		<th>Especie</th>
					    		<th>Dosis</th>
					    		
					    		<th></th>
					    		<th></th>
					  		</tr>
				                
					            <?php foreach($resFicDos as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td> <?php echo $res->id_fichas_dosificacion; ?>  </td>
						               <td> <?php echo $res->nombre_especies; ?>     </td> 
						               <td> <?php echo $res->dosis_fichas_dosificacion; ?>     </td> 
						                
						                   
						               
						                 <td>   
							               	<div class="right">
							                    <a href="<?php echo $helper->url("FichasProductos","borrarId"); ?>&id_fichas_dosificacion=<?php echo $res->id_fichas_dosificacion; ?>" class="btn btn-danger">Borrar</a>
							                </div>
							                <hr/>
						               </td>
						    		</tr>
						        <?php } ?>
				         
				           		
				          
				           
				      </table>     
				    </section>
				    <p  class="formulario-subtitulo" >Se han agregado <?php  echo $cantidad ?> Especies </p>
			  </div>
			 </div>
		   	 <div class="row">
			  <div class="col-xs-12 col-md-6">
			  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
			  		<input type="submit" id="btn_agregar_dosificacion" name="btn_agregar_dosificacion" value="Agregar" class="btn btn-success"/>
			     </div>
			  </div>
			</div>
		
            <hr>
		
		
		
				<div class="row">
			 <div class="col-xs-12 col-md-12">
			  		<p class="formulario-subtitulo" >Especies </p>
			  		 </div>
				</div>
				
			  	<div class="col-xs-3 col-md-3">
			  		<?php $cantidad = 0;?>
			  		<p class="formulario-subtitulo" >Especies  </p>
			  		<select name="id_especies" id="id_especies"  class="form-control" >
						<option value="0"  > --SELECCIONE--</option>
						<?php foreach($resultEsp as $resEsp) {?>
							<option value="<?php echo $resEsp->id_especies; ?>"  ><?php echo $resEsp->nombre_especies; ?> </option>
							
			        	<?php } ?>
					</select> 
					<div id="mensaje_id_especies" class="errores"></div>
				</div>
				
			  	
			  
			    <div class="col-xs-12 col-md-6">
			  		<p  class="formulario-subtitulo" > Agregados  </p>
			 	 	<section class="col-lg-12 usuario" style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr>
					    		<th>Id</th>
					    		<th>Especie</th>
					    		
					    		
					    		<th></th>
					    		<th></th>
					  		</tr>
				                
					            <?php foreach($resFicEs as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td> <?php echo $res->id_fichas_especies; ?>  </td>
						               <td> <?php echo $res->nombre_especies; ?>     </td> 
						               
						                
						                   
						                 <td>   
							               	<div class="right">
							                    <a href="<?php echo $helper->url("FichasProductos","borrarId"); ?>&id_fichas_especies=<?php echo $res->id_fichas_especies; ?>" class="btn btn-danger">Borrar</a>
							                </div>
							                <hr/>
						               </td>
						    		</tr>
						        <?php } ?>
				         
				           		
				          
				           
				      </table>     
				    </section>
				    <p  class="formulario-subtitulo" >Se han agregado <?php  echo $cantidad ?> Especies </p>
			  </div>
			 </div>
		   	 <div class="row">
			  <div class="col-xs-12 col-md-6">
			  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
			  		<input type="submit" id="btn_agregar_especies" name="btn_agregar_especies" value="Agregar" class="btn btn-success"/>
			     </div>
			  </div>
			</div>
		
            <hr>
		

				<div class="row">
			 <div class="col-xs-12 col-md-12">
			  		<p class="formulario-subtitulo" >Via de Administración</p>
			  		 </div>
				</div>
				
			  	<div class="col-xs-3 col-md-3">
			  		<?php $cantidad = 0;?>
			  		<p class="formulario-subtitulo" >Vía  </p>
			  		<select name="id_formas_administracion" id="id_formas_administracion"  class="form-control" >
						<option value="0"  > --SELECCIONE--</option>
						<?php foreach($resultFormAd as $resEsp) {?>
							<option value="<?php echo $resEsp->id_formas_administracion; ?>"  ><?php echo $resEsp->nombre_formas_administracion; ?> </option>
							
			        	<?php } ?>
					</select> 
					
				</div>
				
			  	
			  
			    <div class="col-xs-12 col-md-6">
			  		<p  class="formulario-subtitulo" > Agregados  </p>
			 	 	<section class="col-lg-12 usuario" style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr>
					    		<th>Id</th>
					    		<th>Via de Administración</th>
					    		
					    		
					    		<th></th>
					    		<th></th>
					  		</tr>
				                
					            <?php foreach($resFicAdm as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td> <?php echo $res->id_fichas_formas_administracion; ?>  </td>
						               <td> <?php echo $res->nombre_formas_administracion; ?>     </td> 
						               
						                
						                   
						                 <td>   
							               	<div class="right">
							                    <a href="<?php echo $helper->url("FichasProductos","borrarId"); ?>&id_fichas_formas_administracion=<?php echo $res->id_fichas_formas_administracion; ?>" class="btn btn-danger">Borrar</a>
							                </div>
							                <hr/>
						               </td>
						    		</tr>
						        <?php } ?>
				         
				           		
				          
				           
				      </table>     
				    </section>
				    <p  class="formulario-subtitulo" >Se han agregado <?php  echo $cantidad ?> Vias de Administración </p>
			  </div>
			 </div>
		   	 <div class="row">
			  <div class="col-xs-12 col-md-6">
			  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
			  		<input type="submit" id="btn_agregar_admnistracion" name="btn_agregar_admnistracion" value="Agregar" class="btn btn-success"/>
			     </div>
			  </div>
			</div>
		
            <hr>


			 <div class="row">
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Interacciones </p>
			  	<input type="text" name="interacciones_fichas" id="interacciones_fichas" value="<?php echo $resEdit->interacciones_fichas; ?>" class="form-control"/>
				<div id="mensaje_interacciones_fichas" class="errores"></div>
			  </div>
			 
			   <div class="col-xs-6 col-md-6">
			  	 <p  class="formulario-subtitulo" >Contra Indicaciones </p>
			  	 <input type="text" name="contraindicaciones_fichas" id="contraindicaciones_fichas" value="<?php echo $resEdit->contraindicaciones_fichas; ?>" class="form-control"/>
				 <div id="mensaje_contraindicaciones_fichas" class="errores"></div>
			   </div>
               </div>
			 			 
             <div class="row">
			 <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Efectos Colaterales </p>
			  	<input type="text" name="efectos_colaterales_fichas" id="efectos_colaterales_fichas" value="<?php echo $resEdit->efectos_colaterales_fichas; ?>" class="form-control"/>
				<div id="mensaje_efectos_colaterales_fichas" class="errores"></div>
			  </div>
			  
			  <div class="col-xs-6 col-md-6">
			    	<p  class="formulario-subtitulo" >Periodo de Retiro </p>
			  	 <input type="text" name="periodo_retiro_fichas" id="periodo_retiro_fichas" value="<?php echo $resEdit->periodo_retiro_fichas; ?>" class="form-control"/>
				 <div id="mensaje_periodo_retiro_fichas" class="errores"></div>
			   </div>
		       </div>
			
              <div class="row">
			 <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Advertencias</p>
			  	<input type="text" name="advertencias_fichas" id="advertencias_fichas" value="<?php echo $resEdit->advertencias_fichas; ?>" class="form-control"/>
				<div id="mensaje_advertencias_fichas" class="errores"></div>
			  </div>
			  
               <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Presentaciones </p>
			  	<input type="text" name="presentacion_fichas" id="presentacion_fichas" value="<?php echo $resEdit->presentacion_fichas; ?>" class="form-control"/>
				<div id="mensaje_presentacion_fichas" class="errores"></div>
			  </div>
			 </div>    
		  
		       <div class="row">
			 
			    <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Conservación </p>
			  	<input type="text" name="conservacion_fichas" id="conservacion_fichas" value="<?php echo $resEdit->conservacion_fichas; ?>" class="form-control"/>
				<div id="mensaje_conservacion_fichas" class="errores"></div>
			  </div>			  
                
			  
			    <div class="col-xs-6 col-md-6">
			  		<p  class="formulario-subtitulo" >Regristro Agrocalidad </p>
			  		<input type="text" name="registro_sanitario_fichas" id="registro_sanitario_fichas" value="<?php echo $resEdit->registro_sanitario_fichas; ?>" class="form-control"/>
					<div id="mensaje_registro_sanitario_fichas" class="errores"></div>
			    </div>
		    </div>
			  	
			  
				<div class="row">
			 <div class="col-xs-12 col-md-12">
			  		<p class="formulario-subtitulo" >Distribuidores</p>
			  		 </div>
				</div>
				
			  	<div class="col-xs-3 col-md-3">
			  		<?php $cantidad = 0;?>
			  		<p class="formulario-subtitulo" >Distribuidores</p>
			  		<select name="id_distribuidores" id="id_distribuidores"  class="form-control" >
						<option value="0"  > --SELECCIONE--</option>
						<?php foreach($resultDis as $resEsp) {?>
							<option value="<?php echo $resEsp->id_distribuidores; ?>"  ><?php echo $resEsp->nombre_distribuidores; ?> </option>
							
			        	<?php } ?>
					</select> 
					
				</div>
				
			  	
			  
			    <div class="col-xs-12 col-md-6">
			  		<p  class="formulario-subtitulo" > Agregados  </p>
			 	 	<section class="col-lg-12 usuario" style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr>
					    		<th>Id</th>
					    		<th>Nombre del Distribuidor</th>
					    		
					    		
					    		<th></th>
					    		<th></th>
					  		</tr>
				                
					            <?php foreach($resFicDistri as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td> <?php echo $res->id_fichas_distriuidores; ?>  </td>
						               <td> <?php echo $res->nombre_distribuidores; ?>     </td> 
						               
						                
						                   
						                 <td>   
							               	<div class="right">
							                    <a href="<?php echo $helper->url("FichasProductos","borrarId"); ?>&id_fichas_distribuidores=<?php echo $res->id_fichas_distribuidores; ?>" class="btn btn-danger">Borrar</a>
							                </div>
							                <hr/>
						               </td>
						    		</tr>
						        <?php } ?>
				         
				           		
				          
				           
				      </table>     
				    </section>
				    <p  class="formulario-subtitulo" >Se han agregado <?php  echo $cantidad ?> Distribuidores </p>
			  </div>
			 </div>
		   	 <div class="row">
			  <div class="col-xs-12 col-md-6">
			  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
			  		<input type="submit" id="btn_agregar_distribuidores" name="btn_agregar_distribuidores" value="Agregar" class="btn btn-success"/>
			     </div>
			  </div>
			</div>
		
            <hr>
            		
		
		        
				<div class="row">
			 <div class="col-xs-12 col-md-12">
			  		<p class="formulario-subtitulo" >Laboratorios</p>
			  		 </div>
				</div>
				
			  	<div class="col-xs-3 col-md-3">
			  		<?php $cantidad = 0;?>
			  		<p class="formulario-subtitulo" >Laboratorios</p>
			  		<select name="id_laboratorios" id="id_laboratorios"  class="form-control" >
						<option value="0"  > --SELECCIONE--</option>
						<?php foreach($resultLab as $resEsp) {?>
							<option value="<?php echo $resEsp->id_laboratorios; ?>"  ><?php echo $resEsp->nombre_laboratorios; ?> </option>
							
			        	<?php } ?>
					</select> 
					
				</div>
				
			  	
			  
			    <div class="col-xs-12 col-md-6">
			  		<p  class="formulario-subtitulo" > Agregados  </p>
			 	 	<section class="col-lg-12 usuario" style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr>
					    		<th>Id</th>
					    		<th>Nombre del Laboratorio</th>
					    		
					    		
					    		<th></th>
					    		<th></th>
					  		</tr>
				                
					            <?php foreach($resFicLabo as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td> <?php echo $res->id_fichas_laboratorios; ?>  </td>
						               <td> <?php echo $res->nombre_laboratorios; ?>     </td> 
						               
						                
						                   
						                 <td>   
							               	<div class="right">
							                    <a href="<?php echo $helper->url("FichasProductos","borrarId"); ?>&id_fichas_laboratorios=<?php echo $res->id_fichas_laboratorios; ?>" class="btn btn-danger">Borrar</a>
							                </div>
							                <hr/>
						               </td>
						    		</tr>
						        <?php } ?>
				         
				           		
				          
				           
				      </table>     
				    </section>
				    <p  class="formulario-subtitulo" >Se han agregado <?php  echo $cantidad ?> Laboratorios </p>
			  </div>
			 </div>
		   	 <div class="row">
			  <div class="col-xs-12 col-md-6">
			  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
			  		<input type="submit" id="btn_agregar_laboratorios" name="btn_agregar_laboratorios" value="Agregar" class="btn btn-success"/>
			     </div>
			  </div>
			</div>
		
            <hr>
            		
		
		    <div class="row">
		    	<div class="col-xs-2 col-md-2">
			  	<p  class="formulario-subtitulo" >Imagen del Producto </p>
			  	    <input type="file" name="foto_fichas_fotos" id="foto_fichas_fotos" value="" accept="png|jpg|jpeg" onKeyDown="return intro(event)" class="form-control"/>
			        <div id="mensaje_foto_fichas_fotos" class="errores"></div>
			  	</div>
		    </div>
		<hr>
		   <div class="row">
			  <div class="col-xs-12 col-md-12" style="text-align: center;" >
			  	<input type="submit" id="btn_guardar" name="btn_guardar" value="Guardar" class="btn btn-success"/>
			  </div>
			</div>     
           
           
			  
		    
           
        
		 <hr>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 <?php } } else {?>
	        <div class="row">
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Nombre Producto </p>
			  	<input type="text" name="nombre_fichas" id="nombre_fichas" value="<?php if ($sel_nombre_fichas !="") {echo $sel_nombre_fichas; } else {echo $nombre_fichas;}     ?>" class="form-control" readonly />
				<input type="hidden" name="id_fichas" id="id_fichas" value="<?php if ($sel_id_fichas !="") {echo $sel_id_fichas; } else {echo $id_fichas;} ?>" class="form-control"/>
				<div id="mensaje_nombre" class="errores"></div>
			  </div>
			  
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Categoria Farmacológica </p>
			  	<input type="text" name="clasificacion_farmacologica_fichas" id="clasificacion_farmacologica_fichas" value="<?php echo $sel_clasificacion_farmacologica_fichas; ?>" class="form-control"/>
				<div id="mensaje_clasificacion_farmacologica_fichas" class="errores"></div>
			  </div>
		
		</div>
			
			<div  class="row">
			<div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Forma Farmacéutica </p>
			  	<input type="text" name="forma_terapeutica_fichas" id="forma_terapeutica_fichas" value="<?php echo $sel_forma_terapeutica_fichas; ?>" class="form-control"/>
				<div id="mensaje_forma_terapeutica_fichas" class="errores"></div>
			  </div>
			  </div>
			  
				
				
			  	  
			 	  
			<div  class="row">
			
				<div class="col-xs-12 col-md-12">
			
			  		<p class="formulario-subtitulo" >Composición  </p>
			        <div class="col-xs-3 col-md-3">
			        <p class="formulario-subtitulo" >Texto Encabezado  </p>
					<input type="text" name="encabezado_tabla_fichas" id="encabezado_tabla_fichas" value="<?php echo $sel_encabezado_tabla_fichas;  ?>" class="form-control"/> 
					<div id="mensaje_encabezado_tabla_fichas" class="errores"></div>	
				     </div>
	          
			  </div>
				</div>
				
				
				
			  	<div class="col-xs-3 col-md-3">
			  		<?php $cantidad = 0;?>
			  		<p class="formulario-subtitulo" >Principio Activo </p>
			  		<select name="id_composiciones" id="id_composiciones"  class="form-control" >
						<option value="0"  > --SELECCIONE--</option>
						<?php foreach($resultCom as $resCom) {?>
							<option value="<?php echo $resCom->id_composiciones; ?>"  ><?php echo $resCom->nombre_composiciones; ?> </option>
							
			        	<?php } ?>
					</select> 
					<div id="mensaje_id_composiciones" class="errores"></div>
				</div>
				<div class="col-xs-2 col-md-2">
					<p class="formulario-subtitulo" >Dosis  </p>
					<input type="text" name="cantidad_fichas_composiciones" id="cantidad_fichas_composiciones" value="" class="form-control"/> 
			 		<div id="mensaje_cantidad_fichas_composiciones" class="errores"></div>
			  		
			  	</div>
			  	<div class="col-xs-2 col-md-2">
					<p class="formulario-subtitulo" >U/M  </p>
					<select name="id_unidades_medida" id="id_unidades_medida"  class="form-control" >
						<option value="0"  > --SELECCIONE--</option>
						<?php foreach($resultUme as $resUme) {?>
							<option value="<?php echo $resUme->id_unidades_medida; ?>"  ><?php echo $resUme->nombre_unidades_medida; ?> </option>
							
			        	<?php } ?>
					</select>  
			 		<div id="mensaje_nombre_unidades_medida" class="errores"></div>
			  		
			  	</div>
			    <div class="col-xs-12 col-md-5">
			  	    <p  class="formulario-subtitulo" > Agregados  </p>
			 	 	<section class="col-lg-12 usuario" style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr>
					    		<th>Id</th>
					    		<th>Nombre</th>
					    		<th>Cantidad</th>
					    		<th>Unidades de Medida</th>
					    		<th></th>
					    		<th></th>
					  		</tr>
				                
					            <?php foreach($resFicCom as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td> <?php echo $res->id_fichas_composiciones; ?>  </td>
						               <td> <?php echo $res->nombre_composiciones; ?>     </td> 
						               <td> <?php echo $res->cantidad_fichas_composiciones; ?>     </td> 
						               <td> <?php echo $res->nombre_unidades_medida; ?>     </td> 
						             
							             <td>   
							               	<div class="right">
							                    <a href="<?php echo $helper->url("FichasProductos","borrarId"); ?>&id_fichas_composiciones=<?php echo $res->id_fichas_composiciones; ?>" class="btn btn-danger">Borrar</a>
							                </div>
							                <hr/>
						               </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				    <p  class="formulario-subtitulo" >Se han agregado <?php  echo $cantidad ?> Principios </p>
			     </div>
			
			
			 </div>
			
			  <div class="row">
				  <div class="col-xs-12 col-md-6">
				  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
				  		<input type="submit" id="btn_agregar_composicion" name="btn_agregar_composicion" value="Agregar" class="btn btn-success"/>
				  	</div>
				  </div>
			   </div>
			 
               <hr>
			 <div class="row">
		     <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Características </p>
			  	<input type="text" name="accion_terapeutica_fichas" id="accion_terapeutica_fichas" value="<?php if ($sel_accion_terapeutica_fichas !="") {echo $sel_accion_terapeutica_fichas; }      ?>" class="form-control"/>
				<div id="mensaje_accion_terapeutica_fichas" class="errores"></div>
			  </div>
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Mecanismo De Acción </p>
			  	<input type="text" name="mecanismo_accion_fichas" id="mecanismo_accion_fichas" value="<?php echo $sel_mecanismo_accion_fichas; ?>" class="form-control"/>
				<div id="mensaje_mecanismo_accion_fichas" class="errores"></div>
			  </div>
			  	
			 </div>
			 
			 
			 
           <div class="row">
                		  
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Indicaciones de Uso </p>
			  	<input type="text" name="indicaciones_uso_fichas" id="indicaciones_uso_fichas" value="<?php echo $sel_indicaciones_uso_fichas; ?>" class="form-control"/>
				<div id="mensaje_indicaciones_uso_fichas" class="errores"></div>
			  </div>
			</div>
			<hr>

			<div class="row">
			 <div class="col-xs-12 col-md-12">
			  		<p class="formulario-subtitulo" >Dosificación </p>
			  		 <div class="col-xs-3 col-md-3">
			  		<p class="formulario-subtitulo" >Texto Encabezado  </p>
					<input type="text" name="encabezado_dosificacion_fichas" id="encabezado_dosificacion_fichas" value="<?php echo $sel_encabezado_dosificacion_fichas;  ?>" class="form-control"/> 
					<div id="mensaje_encabezado_dosificacion_fichas" class="errores"></div>	
				     </div>
				     </div>
				</div>
				
			  	<div class="col-xs-3 col-md-3">
			  		<?php $cantidad = 0;?>
			  		<p class="formulario-subtitulo" >Especies  </p>
			  		<select name="id_especies" id="id_especies"  class="form-control" >
						<option value="0"  > --SELECCIONE--</option>
						<?php foreach($resultEspe as $resEsp) {?>
							<option value="<?php echo $resEsp->id_especies; ?>"  ><?php echo $resEsp->nombre_especies; ?> </option>
							
			        	<?php } ?>
					</select> 
					<div id="mensaje_id_especies" class="errores"></div>
				</div>
				<div class="col-xs-3 col-md-3">
					<p class="formulario-subtitulo" >Dosis  </p>
					<input type="text" name="dosis_fichas_dosificacion" id="dosis_fichas_dosificacion" value="" class="form-control"/> 
			 		<div id="mensaje_dosis_fichas_dosificacion" class="errores"></div>
			  	</div>
			  	
			  
			    <div class="col-xs-12 col-md-6">
			  		<p  class="formulario-subtitulo" > Agregados  </p>
			 	 	<section class="col-lg-12 usuario" style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr>
					    		<th>Id</th>
					    		<th>Especie</th>
					    		<th>Dosis</th>
					    		
					    		<th></th>
					    		<th></th>
					  		</tr>
				                
					            <?php foreach($resFicDos as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td> <?php echo $res->id_fichas_dosificacion; ?>  </td>
						               <td> <?php echo $res->nombre_especies; ?>     </td> 
						               <td> <?php echo $res->dosis_fichas_dosificacion; ?>     </td> 
						                
						                   
						               
						                 <td>   
							               	<div class="right">
							                    <a href="<?php echo $helper->url("FichasProductos","borrarId"); ?>&id_fichas_dosificacion=<?php echo $res->id_fichas_dosificacion; ?>" class="btn btn-danger">Borrar</a>
							                </div>
							                <hr/>
						               </td>
						    		</tr>
						        <?php } ?>
				         
				           		
				          
				           
				      </table>     
				    </section>
				    <p  class="formulario-subtitulo" >Se han agregado <?php  echo $cantidad ?> Especies </p>
			  </div>
			 </div>
		   	 <div class="row">
			  <div class="col-xs-12 col-md-6">
			  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
			  		<input type="submit" id="btn_agregar_dosificacion" name="btn_agregar_dosificacion" value="Agregar" class="btn btn-success"/>
			     </div>
			  </div>
			</div>
		
            <hr>
		
		
		
				<div class="row">
			 <div class="col-xs-12 col-md-12">
			  		<p class="formulario-subtitulo" >Especies </p>
			  		 </div>
				</div>
				
			  	<div class="col-xs-3 col-md-3">
			  		<?php $cantidad = 0;?>
			  		<p class="formulario-subtitulo" >Especies  </p>
			  		<select name="id_especies" id="id_especies"  class="form-control" >
						<option value="0"  > --SELECCIONE--</option>
						<?php foreach($resultEsp as $resEspe) {?>
							<option value="<?php echo $resEspe->id_especies; ?>"  ><?php echo $resEspe->nombre_especies; ?> </option>
							
			        	<?php } ?>
					</select> 
					<div id="mensaje_id_especies" class="errores"></div>
				</div>
				
			  	
			  
			    <div class="col-xs-12 col-md-6">
			  		<p  class="formulario-subtitulo" > Agregados  </p>
			 	 	<section class="col-lg-12 usuario" style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr>
					    		<th>Id</th>
					    		<th>Especie</th>
					    		
					    		
					    		<th></th>
					    		<th></th>
					  		</tr>
				                
					            <?php foreach($resFicEs as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td> <?php echo $res->id_fichas_especies; ?>  </td>
						               <td> <?php echo $res->nombre_especies; ?>     </td> 
						               
						                
						                   
						                 <td>   
							               	<div class="right">
							                    <a href="<?php echo $helper->url("FichasProductos","borrarId"); ?>&id_fichas_especies=<?php echo $res->id_fichas_especies; ?>" class="btn btn-danger">Borrar</a>
							                </div>
							                <hr/>
						               </td>
						    		</tr>
						        <?php } ?>
				         
				           		
				          
				           
				      </table>     
				    </section>
				    <p  class="formulario-subtitulo" >Se han agregado <?php  echo $cantidad ?> Especies </p>
			  </div>
			 </div>
		   	 <div class="row">
			  <div class="col-xs-12 col-md-6">
			  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
			  		<input type="submit" id="btn_agregar_especies" name="btn_agregar_especies" value="Agregar" class="btn btn-success"/>
			     </div>
			  </div>
			</div>
		
            <hr>
		
             
				<div class="row">
			 <div class="col-xs-12 col-md-12">
			  		<p class="formulario-subtitulo" >Via de Administración</p>
			  		 </div>
				</div>
				
			  	<div class="col-xs-3 col-md-3">
			  		<?php $cantidad = 0;?>
			  		<p class="formulario-subtitulo" >Vía  </p>
			  		<select name="id_formas_administracion" id="id_formas_administracion"  class="form-control" >
						<option value="0"  > --SELECCIONE--</option>
						<?php foreach($resultFormAd as $resEsp) {?>
							<option value="<?php echo $resEsp->id_formas_administracion; ?>"  ><?php echo $resEsp->nombre_formas_administracion; ?> </option>
							
			        	<?php } ?>
					</select> 
					
				</div>
				
			  	
			  
			    <div class="col-xs-12 col-md-6">
			  		<p  class="formulario-subtitulo" > Agregados  </p>
			 	 	<section class="col-lg-12 usuario" style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr>
					    		<th>Id</th>
					    		<th>Via de Administración</th>
					    		
					    		
					    		<th></th>
					    		<th></th>
					  		</tr>
				                
					            <?php foreach($resFicAdm as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td> <?php echo $res->id_fichas_formas_administracion; ?>  </td>
						               <td> <?php echo $res->nombre_formas_administracion; ?>     </td> 
						               
						                
						                   
						                 <td>   
							               	<div class="right">
							                    <a href="<?php echo $helper->url("FichasProductos","borrarId"); ?>&id_fichas_formas_administracion=<?php echo $res->id_fichas_formas_administracion; ?>" class="btn btn-danger">Borrar</a>
							                </div>
							                <hr/>
						               </td>
						    		</tr>
						        <?php } ?>
				         
				           		
				          
				           
				      </table>     
				    </section>
				    <p  class="formulario-subtitulo" >Se han agregado <?php  echo $cantidad ?> Vias de Administración </p>
			  </div>
			 </div>
		   	 <div class="row">
			  <div class="col-xs-12 col-md-6">
			  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
			  		<input type="submit" id="btn_agregar_admnistracion" name="btn_agregar_admnistracion" value="Agregar" class="btn btn-success"/>
			     </div>
			  </div>
			</div>
		
            <hr>

			

			 <div class="row">
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Interacciones </p>
			  	<input type="text" name="interacciones_fichas" id="interacciones_fichas" value="<?php echo $sel_interacciones_fichas; ?>" class="form-control"/>
				<div id="mensaje_interacciones_fichas" class="errores"></div>
			  </div>
			 
			   <div class="col-xs-6 col-md-6">
			  	 <p  class="formulario-subtitulo" >Contra Indicaciones </p>
			  	 <input type="text" name="contraindicaciones_fichas" id="contraindicaciones_fichas" value="<?php echo $sel_contraindicaciones_fichas; ?>" class="form-control"/>
				 <div id="mensaje_contraindicaciones_fichas" class="errores"></div>
			   </div>
			 </div>

		    <div class="row">
			 <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Efectos Colaterales </p>
			  	<input type="text" name="efectos_colaterales_fichas" id="efectos_colaterales_fichas" value="<?php echo $sel_efectos_colaterales_fichas; ?>" class="form-control"/>
				<div id="mensaje_efectos_colaterales_fichas" class="errores"></div>
			  </div>
			  
			 
			  <div class="col-xs-6 col-md-6">
			    	<p  class="formulario-subtitulo" >Periodo de Retiro </p>
			  	 <input type="text" name="periodo_retiro_fichas" id="periodo_retiro_fichas" value="<?php echo $sel_periodo_retiro_fichas; ?>" class="form-control"/>
				 <div id="mensaje_periodo_retiro_fichas" class="errores"></div>
			   </div>
		         </div>    
		  
		  
		       <div class="row">
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Advertencias</p>
			  	<input type="text" name="advertencias_fichas" id="advertencias_fichas" value="<?php echo $sel_advertencias_fichas; ?>" class="form-control"/>
				<div id="mensaje_advertencias_fichas" class="errores"></div>
			  </div>
			 

			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Presentaciones </p>
			  	<input type="text" name="presentacion_fichas" id="presentacion_fichas" value="<?php echo $sel_presentacion_fichas; ?>" class="form-control"/>
				<div id="mensaje_presentacion_fichas" class="errores"></div>
			  </div>
            </div>

              <div class="row">
			    <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Conservación </p>
			  	<input type="text" name="conservacion_fichas" id="conservacion_fichas" value="<?php echo $sel_conservacion_fichas; ?>" class="form-control"/>
				<div id="mensaje_conservacion_fichas" class="errores"></div>
			  </div>			  
                
			    <div class="col-xs-6 col-md-6">
			  		<p  class="formulario-subtitulo" >Regristro Agrocalidad </p>
			  		<input type="text" name="registro_sanitario_fichas" id="registro_sanitario_fichas" value="<?php echo $sel_registro_sanitario_fichas; ?>" class="form-control"/>
					<div id="mensaje_registro_sanitario_fichas" class="errores"></div>
			    </div>
		    </div>
		
                         
				<div class="row">
			 <div class="col-xs-12 col-md-12">
			  		<p class="formulario-subtitulo" >Distribuidores</p>
			  		 </div>
				</div>
				
			  	<div class="col-xs-3 col-md-3">
			  		<?php $cantidad = 0;?>
			  		<p class="formulario-subtitulo" >Distribuidores</p>
			  		<select name="id_distribuidores" id="id_distribuidores"  class="form-control" >
						<option value="0"  > --SELECCIONE--</option>
						<?php foreach($resultDis as $resEsp) {?>
							<option value="<?php echo $resEsp->id_distribuidores; ?>"  ><?php echo $resEsp->nombre_distribuidores; ?> </option>
							
			        	<?php } ?>
					</select> 
					
				</div>
				
			  	
			  
			    <div class="col-xs-12 col-md-6">
			  		<p  class="formulario-subtitulo" > Agregados  </p>
			 	 	<section class="col-lg-12 usuario" style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr>
					    		<th>Id</th>
					    		<th>Nombre del Distribuidor</th>
					    		
					    		
					    		<th></th>
					    		<th></th>
					  		</tr>
				                
					            <?php foreach($resFicDistri as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td> <?php echo $res->id_fichas_distribuidores; ?>  </td>
						               <td> <?php echo $res->nombre_distribuidores; ?>     </td> 
						               
						                
						                   
						                 <td>   
							               	<div class="right">
							                    <a href="<?php echo $helper->url("FichasProductos","borrarId"); ?>&id_fichas_distribuidores=<?php echo $res->id_fichas_distribuidores; ?>" class="btn btn-danger">Borrar</a>
							                </div>
							                <hr/>
						               </td>
						    		</tr>
						        <?php } ?>
				         
				           		
				          
				           
				      </table>     
				    </section>
				    <p  class="formulario-subtitulo" >Se han agregado <?php  echo $cantidad ?> Distribuidores </p>
			  </div>
			 </div>
		   	 <div class="row">
			  <div class="col-xs-12 col-md-6">
			  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
			  		<input type="submit" id="btn_agregar_distribuidores" name="btn_agregar_distribuidores" value="Agregar" class="btn btn-success"/>
			     </div>
			  </div>
			</div>
		
            <hr>
            		
		
		        
				<div class="row">
			 <div class="col-xs-12 col-md-12">
			  		<p class="formulario-subtitulo" >Laboratorios</p>
			  		 </div>
				</div>
				
			  	<div class="col-xs-3 col-md-3">
			  		<?php $cantidad = 0;?>
			  		<p class="formulario-subtitulo" >Laboratorios</p>
			  		<select name="id_laboratorios" id="id_laboratorios"  class="form-control" >
						<option value="0"  > --SELECCIONE--</option>
						<?php foreach($resultLab as $resEsp) {?>
							<option value="<?php echo $resEsp->id_laboratorios; ?>"  ><?php echo $resEsp->nombre_laboratorios; ?> </option>
							
			        	<?php } ?>
					</select> 
					
				</div>
				
			  	
			  
			    <div class="col-xs-12 col-md-6">
			  		<p  class="formulario-subtitulo" > Agregados  </p>
			 	 	<section class="col-lg-12 usuario" style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr>
					    		<th>Id</th>
					    		<th>Nombre del Laboratorio</th>
					    		
					    		
					    		<th></th>
					    		<th></th>
					  		</tr>
				                
					            <?php foreach($resFicLabo as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td> <?php echo $res->id_fichas_laboratorios; ?>  </td>
						               <td> <?php echo $res->nombre_laboratorios; ?>     </td> 
						               
						                
						                   
						                 <td>   
							               	<div class="right">
							                    <a href="<?php echo $helper->url("FichasProductos","borrarId"); ?>&id_fichas_laboratorios=<?php echo $res->id_fichas_laboratorios; ?>" class="btn btn-danger">Borrar</a>
							                </div>
							                <hr/>
						               </td>
						    		</tr>
						        <?php } ?>
				         
				           		
				          
				           
				      </table>     
				    </section>
				    <p  class="formulario-subtitulo" >Se han agregado <?php  echo $cantidad ?> Laboratorios </p>
			  </div>
			 </div>
		   	 <div class="row">
			  <div class="col-xs-12 col-md-6">
			  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
			  		<input type="submit" id="btn_agregar_laboratorios" name="btn_agregar_laboratorios" value="Agregar" class="btn btn-success"/>
			     </div>
			  </div>
			</div>
		
            <hr>
            		
		
		
		    <div class="row">
		    	<div class="col-xs-2 col-md-2">
			  	<p  class="formulario-subtitulo" >Imagen del Producto </p>
			  	    <input type="file" name="foto_fichas_fotos" id="foto_fichas_fotos" value="" accept="png|jpg|jpeg" onKeyDown="return intro(event)" class="form-control"/>
			        <div id="mensaje_foto_fichas_fotos" class="errores"></div>
			  	</div>
		    </div>
		<hr>
		   <div class="row">
			  <div class="col-xs-12 col-md-12" style="text-align: center;" >
			  	<input type="submit" id="btn_guardar" name="btn_guardar" value="Guardar" class="btn btn-success"/>
			  </div>
			</div>     
           
           
			  
		    
           
        
		 <hr>
		<?php }?>

	   <?php }?>  
          </form>
       
           	<div class="col-lg-12">
  					
   		     <?php include("view/modulos/servicios.php"); ?>	
   			 
   		</div>     
  <?php include("view/modulos/beforefooter.php"); ?>
    		
       
   
     </body>  
    </html>   