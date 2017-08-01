<div class="head" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/headadmin.php"); ?>
 </div>

<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Agregar Fichas de Alimentos - Vademano 2015</title>
   
   		  <link rel="stylesheet" href="view/css/bootstrap.css">
     <link rel="stylesheet" href="view/css/estilos.css">
  <script src="view/js/jquery.js"></script>
  <script src="view/js/bootstrapValidator.min.js"></script>
  <script src="view/js/noty.js"></script>
 		
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
		    	var farmacocinetica_fichas = $("#farmacocinetica_fichas").val();
		    	var accion_terapeutica_fichas = $("#accion_terapeutica_fichas").val();
		    	var clasificacion_farmacologica_fichas = $("#clasificacion_farmacologica_fichas").val();
		    	var forma_terapeutica_fichas = $("#forma_terapeutica_fichas").val();;
		    	var indicaciones_uso_fichas = $("#indicaciones_uso_fichas").val();
		    	var forma_administracion_fichas = $("#forma_administracion_fichas").val();
		    	var interacciones_fichas = $("#interacciones_fichas").val();
		    	var contraindicaciones_fichas = $("#contraindicaciones_fichas").val();
		    	var periodo_retiro_fichas = $("#periodo_retiro_fichas").val();
		    	var advertencias_fichas = $("#advertencias_fichas").val();
		    	var presentacion_fichas = $("#presentacion_fichas").val();
		    	var registro_sanitario_fichas = $("#registro_sanitario_fichas").val();
		    	var mecanismo_accion_fichas = $("#mecanismo_accion_fichas").val();
		    	var efectos_colaterales_fichas = $("#efectos_colaterales_fichas").val();
		    	var conservacion_fichas = $("#conservacion_fichas").val();
		    	var ingredientes_fichas = $("#ingredientes_fichas").val();
		    	var tipo_alimento_fichas = $("#tipo_alimento_fichas").val();
		        
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


			    
		    	

		    	if (farmacocinetica_fichas == "")
		    	{
					
			    	$("#mensaje_farmacocinetica_fichas").text("Campo Vacio");
		    		$("#mensaje_farmacocinetica_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_farmacocinetica_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
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
				
		    	if (forma_administracion_fichas == "")
		    	{
					
			    	$("#mensaje_forma_administracion_fichas").text("Campo Vacio");
		    		$("#mensaje_forma_administracion_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_forma_administracion_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
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
						
					
					$fichas_fotos = new FichasFotosModel();
			
			
					$columnas = " fichas.id_fichas,
							  fichas.nombre_fichas,
							  fichas.indicaciones_uso_fichas,
							  fichas.forma_administracion_fichas,
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
			
					$this->report("Ficha",array(	"resultRep"=>$resultRep, "id_fichas"=>$_id_fichas, "nombre_fichas"=>$_nombre_fichas,
					"resultCom"=>$resultCom,
					"resultDos"=>$resultDos,
							
							
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
		    	if (ingredientes_fichas == "")
		    	{
					
			    	$("#mensaje_ingredientes_fichas").text("Campo Vacio");
		    		$("#mensaje_ingredientes_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_ingredientes_fichas").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	if (tipo_alimento_fichas == "")
		    	{
					
			    	$("#mensaje_tipo_alimento_fichas").text("Campo Vacio");
		    		$("#mensaje_tipo_alimento_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_tipo_alimento_fichas").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
			    
			}); 

			$( "#nombre_fichas" ).focus(function() {
				$("#mensaje_nombre_fichas").fadeOut("slow");
    		});
			$( "#foto_fichas_fotos" ).focus(function() {
				$("#mensaje_fichas_fotos").fadeOut("slow");
    		});
			$( "#farmacocinetica_fichas" ).focus(function() {
				$("#mensaje_farmacocinetica_fichas").fadeOut("slow");
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
			$( "#forma_administracion_fichas" ).focus(function() {
				$("#mensaje_forma_administracion_fichas").fadeOut("slow");
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
			$( "#ingredientes_fichas" ).focus(function() {
				$("#mensaje_ingredientes_fichas").fadeOut("slow");
    		});
			$( "#tipo_alimento_fichas" ).focus(function() {
				$("#mensaje_tipo_alimento_fichas").fadeOut("slow");
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
    <body class="cuerpo">
    
        <div style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
     <?php include("view/modulos/menuadmin.php"); ?>
     </div>
       
          <?php
   
		   //$sel_foto_fichas_fotos = "";
		   $sel_id_fichas = "";
		   $sel_nombre_fichas = "";
		   $sel_indicaciones_uso_fichas = "";
		   $sel_periodo_retiro_fichas = "";
		   $sel_presentacion_fichas = "";
		   $sel_registro_sanitario_fichas = "";
		   
		   $sel_conservacion_fichas = "";
		   $sel_ingredientes_fichas = "";
		   $sel_tipo_alimento_fichas = "";
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
					$sel_indicaciones_uso_fichas = $_POST['indicaciones_uso_fichas'];
					$sel_periodo_retiro_fichas = $_POST['periodo_retiro_fichas'];
					$sel_presentacion_fichas = $_POST['presentacion_fichas'];
					$sel_registro_sanitario_fichas = $_POST['registro_sanitario_fichas'];
			    	$sel_conservacion_fichas = $_POST['conservacion_fichas'];
					$sel_ingredientes_fichas = $_POST['ingredientes_fichas'];
					$sel_tipo_alimento_fichas = $_POST['tipo_alimento_fichas'];
						
			     
		   		}
		   }
          
		   
		   		
		   
		?>

       
       
  		 <form action="<?php echo $helper->url("FichasAlimentos","index_dos"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
          
         <?php if ($id_fichas > 0) { ?>
        	    <h4>Insertar Alimentos</h4>
            	<hr/>
            	
		   		
            
          <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
	         <?php } } else {?>
	        <div class="row">
			  <div class="col-xs-4 col-md-4">
			  	<p  class="formulario-subtitulo" >Nombre Alimento </p>
			  	<input type="text" name="nombre_fichas" id="nombre_fichas" value="<?php if ($sel_nombre_fichas !="") {echo $sel_nombre_fichas; } else {echo $nombre_fichas;}     ?>" class="form-control" readonly />
				<input type="hidden" name="id_fichas" id="id_fichas" value="<?php if ($sel_id_fichas !="") {echo $sel_id_fichas; } else {echo $id_fichas;} ?>" class="form-control"/>
				<div id="mensaje_nombre" class="errores"></div>
			  </div>
			  
			
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Tipo Alimento </p>
			  	<input type="text" name="tipo_alimento_fichas" id="tipo_alimento_fichas" value="<?php if ($sel_tipo_alimento_fichas !="") {echo $sel_tipo_alimento_fichas; }      ?>" class="form-control"/>
			  </div>
			</div>
			
			<div  class="row">
			
				<div class="col-xs-12 col-md-12">
			
			  		<p class="formulario-subtitulo" >Composición Nutricional  </p>
			        
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
					    		<th>U/M</th>
					    		
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
							                    <a href="<?php echo $helper->url("Fichas","index"); ?>&id_fichas_composiciones=<?php echo $res->id_fichas_composiciones; ?>" class="btn btn-warning">Editar</a>
							                </div>
							            
							             </td>
							             <td>   
							               	<div class="right">
							                    <a href="<?php echo $helper->url("Fichas","borrarId"); ?>&id_fichas_composiciones=<?php echo $res->id_fichas_composiciones; ?>" class="btn btn-danger">Borrar</a>
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
			  	<p  class="formulario-subtitulo" >Ingredientes </p>
			  	<input type="text" name="ingredientes_fichas" id="ingredientes_fichas" value="<?php echo $sel_ingredientes_fichas; ?>" class="form-control"/>
				<div id="mensaje_ingredientes_fichas" class="errores"></div>
			  </div>
		
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Indicaciones de Uso </p>
			  	<input type="text" name="indicaciones_uso_fichas" id="indicaciones_uso_fichas" value="<?php echo $sel_indicaciones_uso_fichas; ?>" class="form-control"/>
				<div id="mensaje_indicaciones_uso_fichas" class="errores"></div>
			  </div>
			</div>

			<div class="row">
			 
			  	<div class="col-xs-12 col-md-12">
			  		<p class="formulario-subtitulo" >Recomendación de Alimentación Diaria </p>
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
							                    <a href="<?php echo $helper->url("Fichas","index"); ?>&id_fichas_dosificacion=<?php echo $res->id_fichas_dosificacion; ?>" class="btn btn-warning">Editar</a>
							                </div>
							            
							             </td>
							             <td>   
							               	<div class="right">
							                    <a href="<?php echo $helper->url("Fichas","borrarId"); ?>&id_fichas_dosificacion=<?php echo $res->id_fichas_dosificacion; ?>" class="btn btn-danger">Borrar</a>
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
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Conservación </p>
			  	<input type="text" name="conservacion_fichas" id="conservacion_fichas" value="<?php echo $sel_conservacion_fichas; ?>" class="form-control"/>
				<div id="mensaje_conservacion_fichas" class="errores"></div>
			  </div>
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Presentaciones </p>
			  	<input type="text" name="presentacion_fichas" id="presentacion_fichas" value="<?php echo $sel_presentacion_fichas; ?>" class="form-control"/>
				<div id="mensaje_presentacion_fichas" class="errores"></div>
			  </div>
			 </div>    

			<div class="row">
			   <div class="col-xs-6 col-md-6">
			    	<p  class="formulario-subtitulo" >Periodo de Retiro </p>
			  	 <input type="text" name="periodo_retiro_fichas" id="periodo_retiro_fichas" value="<?php echo $sel_periodo_retiro_fichas; ?>" class="form-control"/>
				 <div id="mensaje_periodo_retiro_fichas" class="errores"></div>
			   </div>
			    <div class="col-xs-6 col-md-6">
			  		<p  class="formulario-subtitulo" >Regristro Agrocalidad </p>
			  		<input type="text" name="registro_sanitario_fichas" id="registro_sanitario_fichas" value="<?php echo $sel_registro_sanitario_fichas; ?>" class="form-control"/>
					<div id="mensaje_registro_sanitario_fichas" class="errores"></div>
			    </div>
			 </div>		  

			   
			  	 <div class="row">
			   	<div class="col-xs-3 col-md-3">
			  	 	<p class="formulario-subtitulo" >Fabricante  </p>
			  	 	<select name="id_laboratorios" id="id_laboratorios"  class="form-control" >
						<?php foreach($resultLab as $resLab) {?>
				    	<option value="<?php echo $resLab->id_laboratorios; ?>"  ><?php echo $resLab->nombre_laboratorios; ?> </option>
						<?php } ?>
				 	</select>
					<div id="mensaje_id_laboratorios" class="errores"></div>
			 	</div>
			 	<div class="col-xs-3 col-md-3">
			  		<p class="formulario-subtitulo" >Distribuidor  </p>
			  		<select name="id_distribuidores" id="id_distribuidores"  class="form-control" >
				      <?php foreach($resultDis as $resDis) {?>
					     <option value="<?php echo $resDis->id_distribuidores; ?>"  ><?php echo $resDis->nombre_distribuidores; ?> </option>
				      <?php } ?>
					</select>
					<div id="mensaje_id_distribuidores" class="errores"></div>
				</div>
			
              <div class="col-xs-2 col-md-2">
			  	<p  class="formulario-subtitulo" >Imagen del Alimento </p>
			  	    <input type="file" name="foto_fichas_fotos" id="foto_fichas_fotos" value="" accept="png|jpg|jpeg"  class="form-control"/>
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