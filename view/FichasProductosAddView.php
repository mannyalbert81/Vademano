<div class="head menu" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/headadmin.php"); ?>
 </div>
 <div class="menu1">
     <?php include("view/modulos/menuadmin.php"); ?>
     </div>
<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Agregar Fichas de Productos - Vademano 2015</title>
   
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
 		
 			<style type="text/css">

.menu-fixed {
	position:fixed;
	z-index:1000;
	top:0;
	left:0;
	right: 0;
	
}
.menu1-fixed {
	position:fixed;
	z-index:1000;
	top:120;
	left:0;
	right: 0;
	
}

	</style>
	
	
	<script>
			$(document).ready(function(){
			var altura = $('.menu').offset().top;
			
			$(window).on('scroll', function(){
				if ( $(window).scrollTop() > altura ){
					$('.menu').addClass('menu-fixed');
					$('.menu1').addClass('menu1-fixed');
					
				} else {
					$('.menu').removeClass('menu-fixed');
					$('.menu1').removeClass('menu1-fixed');
				}
			});
		});
	 </script>  
	
	<script type="text/javascript">
	$(document).ready(function(){
		 
		$('.ir-arriba').click(function(){
			$('body, html').animate({
				scrollTop: '0px'
			}, 300);
		});
	 
		$(window).scroll(function(){
			if( $(this).scrollTop() > 0 ){
				$('.ir-arriba').slideDown(300);
			} else {
				$('.ir-arriba').slideUp(300);
			}
		});
	 
	});
	</script>
	
 		<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_agregar_composicion").click(function() 
			{
		    	
		    	var id_composiciones = $("#id_composiciones").val();
		    	var cantidad_fichas_composiciones = $("#cantidad_fichas_composiciones").val();
		    	var id_unidades_medida = $("#id_unidades_medida").val();

		    	if (id_composiciones == "")
		    	{
					
			    	$("#mensaje_id_composiciones").text("Seleccione");
		    		$("#mensaje_id_composiciones").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_id_composiciones").fadeOut("slow"); //Muestra mensaje de error
		            
			    }

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

		    	
		    	if (id_unidades_medida == "")
		    	{
					
			    	$("#mensaje_nombre_unidades_medida").text("Seleccione");
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

			$( "#id_unidades_medida" ).focus(function() {
				$("#mensaje_nombre_unidades_medida").fadeOut("slow");
    		});
    							    				    
		}); 

	</script>
	
	<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_agregar_dosificacion").click(function() 
			{
		    	
		    	var id_especies = $("#id_especies_dosificacion").val();
		    	var dosis_fichas_dosificacion = $("#dosis_fichas_dosificacion").val();

		    	if (id_especies == "")
		    	{
					
			    	$("#mensaje_id_especies").text("Seleccione");
		    		$("#mensaje_id_especies").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_id_especies").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
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

		    	

			}); 
			
			$( "#id_especies_dosificacion" ).focus(function() {
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
		    $("#btn_agregar_especies").click(function() 
			{
		    	
		    	var id_especies = $("#id_especies").val();
		    	
		    	if (id_especies == "")
		    	{
					
			    	$("#mensaje_id_especies_1").text("Seleccione");
		    		$("#mensaje_id_especies_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_id_especies_1").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	
		    	

			}); 
			
			$( "#id_especies" ).focus(function() {
				$("#mensaje_id_especies_1").fadeOut("slow");
    		});
		
			
    							    
		}); 

	</script>
	
	
	
	<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_agregar_admnistracion").click(function() 
			{
		    	
		    	var id_formas_administracion = $("#id_formas_administracion").val();
		    	
		    	if (id_formas_administracion == "")
		    	{
					
			    	$("#mensaje_id_formas_administracion").text("Seleccione");
		    		$("#mensaje_id_formas_administracion").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_id_formas_administracion").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	
		    	

			}); 
			
			$( "#id_formas_administracion" ).focus(function() {
				$("#mensaje_id_formas_administracion").fadeOut("slow");
    		});
		
			
    							    
		}); 

	</script>
	
	
	
	<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_agregar_distribuidores").click(function() 
			{
		    	
		    	var id_distribuidores = $("#id_distribuidores").val();
		    	
		    	if (id_distribuidores == "")
		    	{
					
			    	$("#mensaje_id_distribuidores").text("Seleccione");
		    		$("#mensaje_id_distribuidores").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_id_distribuidores").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	
		    	

			}); 
			
			$( "#id_distribuidores" ).focus(function() {
				$("#mensaje_id_distribuidores").fadeOut("slow");
    		});
		
			
    							    
		}); 

	</script>
	
	
	<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_agregar_laboratorios").click(function() 
			{
		    	
		    	var id_laboratorios = $("#id_laboratorios").val();
		    	
		    	if (id_laboratorios == "")
		    	{
					
			    	$("#mensaje_id_laboratorios").text("Seleccione");
		    		$("#mensaje_id_laboratorios").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_id_laboratorios").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	
		    	

			}); 
			
			$( "#id_laboratorios" ).focus(function() {
				$("#mensaje_id_laboratorios").fadeOut("slow");
    		});
		
			
    							    
		}); 

	</script>
	
	
	
	
	<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_agregar_foto").click(function() 
			{
		    	
		    	var foto_fichas_fotos = $("#foto_fichas_fotos").val();
		    	
		    	if (foto_fichas_fotos == "")
		    	{
					
			    	$("#mensaje_foto_fichas_fotos").text("Seleccione");
		    		$("#mensaje_foto_fichas_fotos").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_foto_fichas_fotos").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	
		    	

			}); 
			
			$( "#foto_fichas_fotos" ).focus(function() {
				$("#mensaje_foto_fichas_fotos").fadeOut("slow");
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
					
			    	$("#mensaje_nombre").text("Campo Vacio");
		    		$("#mensaje_nombre").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_nombre").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
			   			}); 

			$( "#nombre_fichas" ).focus(function() {
				$("#mensaje_nombre").fadeOut("slow");
    		});
    		
		}); 

	</script>

		<script type="text/javascript">
		function mensaje(){
			
		  var respuesta = confirm('Seguro Desea Eliminar')
		   return respuesta;
		}
		
		</script>
 			
 			<script> 
			$(function(){
		      
		        $("#btn_limpiar").click(function(){

		        	$("#foto_fichas_fotos").val('');
			    	
			    	
				     
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
    <body style="background-color: #FAFAFA;">
    
      
       
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
		   		
		   		
		   		if($_SERVER['REQUEST_METHOD']=='GET' )
		   		{
		   		
		   			if ($resultEdit !="" ) {
		   		
		   			}
		   			else
		   			{
		   				$sel_nombre_fichas = $_GET['nombre_fichas'];
		   				$sel_id_fichas = $_GET['id_fichas'];
		   				$sel_encabezado_tabla_fichas = $_GET['encabezado_tabla_fichas'];;
		   				$sel_accion_terapeutica_fichas = $_GET['accion_terapeutica_fichas'];
		   				$sel_clasificacion_farmacologica_fichas = $_GET['clasificacion_farmacologica_fichas'];
		   				$sel_forma_terapeutica_fichas = $_GET['forma_terapeutica_fichas'];
		   				$sel_indicaciones_uso_fichas = $_GET['indicaciones_uso_fichas'];
		   				$sel_interacciones_fichas = $_GET['interacciones_fichas'];
		   				$sel_contraindicaciones_fichas = $_GET['contraindicaciones_fichas'];
		   				$sel_periodo_retiro_fichas = $_GET['periodo_retiro_fichas'];
		   				$sel_advertencias_fichas = $_GET['advertencias_fichas'];
		   				$sel_presentacion_fichas = $_GET['presentacion_fichas'];
		   				$sel_registro_sanitario_fichas = $_GET['registro_sanitario_fichas'];
		   				$sel_mecanismo_accion_fichas = $_GET['mecanismo_accion_fichas'];
		   				$sel_efectos_colaterales_fichas = $_GET['efectos_colaterales_fichas'];
		   				$sel_conservacion_fichas = $_GET['conservacion_fichas'];
		   				$sel_encabezado_dosificacion_fichas = $_GET['encabezado_dosificacion_fichas'];
		   			}
		   			
		   			
		   			
		   			
		   		}
		   }
          
		   
		   		
		   
		?>

       
       
  		 <form action="<?php echo $helper->url("FichasProductos","index_dos"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
           <div class="col-lg-12 division"; style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px; "   >
        
         <?php if ($id_fichas > 0) { ?>
        	   
            	
		   		
            
          <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
	         			 
			 
			<div class="panel panel-info" style="margin-top: 20px;">
            <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-plus'></i> Editar Ficha de Productos</h4>
	         </div>
	         <div class="panel-body">
	         
	         
	        <div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="nombre_fichas" class="control-label">Nombre Producto:</label>
                                  <input type="text" class="form-control" id="nombre_fichas" name="nombre_fichas" value="<?php echo $resEdit->nombre_fichas;     ?>"  placeholder="Nombre Producto" readonly />
                                 <input type="hidden" name="id_fichas" id="id_fichas" value="<?php echo $resEdit->id_fichas; ?>" class="form-control"/>
								<div id="mensaje_nombre" class="errores"></div>
			</div>
		    </div>
		    </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="clasificacion_farmacologica_fichas" class="control-label">Categoría Farmacológica:</label>
                                  <textarea type="text"  class="form-control" id="clasificacion_farmacologica_fichas" name="clasificacion_farmacologica_fichas" value=""  placeholder="Categoría Farmacológica"><?php echo  $resEdit->clasificacion_farmacologica_fichas; ?></textarea>
                                  <div id="mensaje_clasificacion_farmacologica_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="forma_terapeutica_fichas" class="control-label">Forma Farmacéutica:</label>
                                  <textarea type="text"  class="form-control" id="forma_terapeutica_fichas" name="forma_terapeutica_fichas" value=""  placeholder="Forma Farmacéutica"><?php echo $resEdit->forma_terapeutica_fichas; ?></textarea>
                                  <div id="mensaje_forma_terapeutica_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Editar, Eliminar o Agregar Composición</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	        <div class="row">
	        <div class="col-xs-12 col-md-12">
		     <div class="form-group ">
		                          <label for="encabezado_tabla_fichas" class="control-label">Texto Encabezado:</label>
                                  <input type="text" class="form-control" id="encabezado_tabla_fichas" name="encabezado_tabla_fichas" value="<?php echo $resEdit->encabezado_tabla_fichas;  ?>"  placeholder="Texto Encabezado" />
                                  <div id="mensaje_encabezado_tabla_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
		     
		     
		      <?php if(!empty($resultEditCompo)){foreach($resultEditCompo as $resultEditCompo) {?>
		      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_composiciones" class="control-label">Principio Activo:</label>
                                  <select name="id_composiciones" id="id_composiciones"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultCom as $res) {?>
										<option value="<?php echo $res->id_composiciones; ?>" <?php if ($res->id_composiciones == $resultEditCompo->id_composiciones )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_composiciones; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_composiciones" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="cantidad_fichas_composiciones" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="cantidad_fichas_composiciones" name="cantidad_fichas_composiciones" value="<?php echo $resultEditCompo->cantidad_fichas_composiciones; ?>"  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_composiciones" id="id_fichas_composiciones" value="<?php echo $resultEditCompo->id_fichas_composiciones;   ?>" class="form-control"/>
								  <div id="mensaje_cantidad_fichas_composiciones" class="errores"></div>
            </div>
		    </div>
             
             <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_unidades_medida" class="control-label">U/M:</label>
                                  <select name="id_unidades_medida" id="id_unidades_medida"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultUme as $res) {?>
										<option value="<?php echo $res->id_unidades_medida; ?>" <?php if ($res->id_unidades_medida == $resultEditCompo->id_unidades_medida )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_unidades_medida; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_nombre_unidades_medida" class="errores"></div>
             </div>
             </div>
	        </div>
		      
		      
		      <?php }} else {?>
		      
		      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_composiciones" class="control-label">Principio Activo:</label>
                                  <select name="id_composiciones" id="id_composiciones"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultCom as $res) {?>
										<option value="<?php echo $res->id_composiciones; ?>" ><?php echo $res->nombre_composiciones; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_composiciones" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="cantidad_fichas_composiciones" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="cantidad_fichas_composiciones" name="cantidad_fichas_composiciones" value=""  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_composiciones" id="id_fichas_composiciones" value="0" class="form-control"/>
								  <div id="mensaje_cantidad_fichas_composiciones" class="errores"></div>
            </div>
		    </div>
             
             <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_unidades_medida" class="control-label">U/M:</label>
                                  <select name="id_unidades_medida" id="id_unidades_medida"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultUme as $res) {?>
										<option value="<?php echo $res->id_unidades_medida; ?>" ><?php echo $res->nombre_unidades_medida; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_nombre_unidades_medida" class="errores"></div>
             </div>
             </div>
	        </div>
		      
		      <?php }?>
		     
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Nombre</th>
					    		<th style="text-align: left;  font-size: 11px;">Cantidad</th>
					    		<th style="text-align: left;  font-size: 11px;">Unidades de Medida</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					  		</tr>
				                
					            <?php foreach($resFicCom as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_composiciones; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_composiciones; ?>     </td> 
						               <td style="font-size: 11px;"> <?php echo $res->cantidad_fichas_composiciones; ?>     </td> 
						               <td style="font-size: 11px;"> <?php echo $res->nombre_unidades_medida; ?>     </td> 
						                <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_composiciones_editar=<?php echo $res->id_fichas_composiciones; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_composiciones_borrar=<?php echo $res->id_fichas_composiciones; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Principios </label>
			   </div>
			   
			   
	        </div>
	        
	        
	          <div class="row">
				  <div class="col-xs-12 col-md-6">
				  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
				  		<input type="submit" id="btn_agregar_composicion" name="btn_agregar_composicion" value="Agregar" class="btn btn-success"/>
				  	</div>
				  </div>
			   </div>
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="accion_terapeutica_fichas" class="control-label">Características:</label>
                                  <textarea type="text"  class="form-control" id="accion_terapeutica_fichas" name="accion_terapeutica_fichas" value=""  placeholder="Caracteristicas"><?php echo $resEdit->accion_terapeutica_fichas;       ?></textarea>
                                  <div id="mensaje_accion_terapeutica_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="mecanismo_accion_fichas" class="control-label">Mecanismo De Acción:</label>
                                  <textarea type="text"  class="form-control" id="mecanismo_accion_fichas" name="mecanismo_accion_fichas" value=""  placeholder="Mecanismo De Acción"><?php echo $resEdit->mecanismo_accion_fichas; ?></textarea>
                                  <div id="mensaje_mecanismo_accion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
			
			
			 <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="indicaciones_uso_fichas" class="control-label">Indicaciones de Uso:</label>
                                  <textarea type="text"  class="form-control" id="indicaciones_uso_fichas" name="indicaciones_uso_fichas" value=""  placeholder="Indicaciones de Uso"><?php echo $resEdit->indicaciones_uso_fichas; ?></textarea>
                                  <div id="mensaje_indicaciones_uso_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         
	         
	         <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Dosificación</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	        <div class="row">
	        <div class="col-xs-12 col-md-12">
		     <div class="form-group ">
		                          <label for="encabezado_dosificacion_fichas" class="control-label">Texto Encabezado:</label>
                                  <input type="text" class="form-control" id="encabezado_dosificacion_fichas" name="encabezado_dosificacion_fichas" value="<?php echo $resEdit->encabezado_dosificacion_fichas;  ?>"  placeholder="Texto Encabezado" />
                                  <div id="mensaje_encabezado_dosificacion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
		     
		     
		    <?php if(!empty($resultEditDosi)){foreach($resultEditDosi as $resultEditDosi) {?>
       	    <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_especies_dosificacion" class="control-label">Especies:</label>
                                  <select name="id_especies_dosificacion" id="id_especies_dosificacion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEspe as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" <?php if ($res->id_especies == $resultEditDosi->id_especies )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="dosis_fichas_dosificacion" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="dosis_fichas_dosificacion" name="dosis_fichas_dosificacion" value="<?php echo $resultEditDosi->dosis_fichas_dosificacion; ?>"  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_dosificacion" id="id_fichas_dosificacion" value="<?php echo $resultEditDosi->id_fichas_dosificacion;   ?>" class="form-control"/>
								  <div id="mensaje_dosis_fichas_dosificacion" class="errores"></div>
            </div>
		    </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_dosificacion" name="btn_agregar_dosificacion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
             
	        </div>
       	   
       	    <?php }} else {?>
       	     <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_especies_dosificacion" class="control-label">Especies:</label>
                                  <select name="id_especies_dosificacion" id="id_especies_dosificacion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEspe as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" ><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="dosis_fichas_dosificacion" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="dosis_fichas_dosificacion" name="dosis_fichas_dosificacion" value=""  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_dosificacion" id="id_fichas_dosificacion" value="0" class="form-control"/>
								  <div id="mensaje_dosis_fichas_dosificacion" class="errores"></div>
            </div>
		    </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_dosificacion" name="btn_agregar_dosificacion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
             
            
	        </div>
       	    <?php }?>
		    
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Especie</th>
					    		<th style="text-align: left;  font-size: 11px;">Dosis</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicDos as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_dosificacion; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_especies; ?>     </td> 
						               <td style="font-size: 11px;"> <?php echo $res->dosis_fichas_dosificacion; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_dosificacion_editar=<?php echo $res->id_fichas_dosificacion; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_dosificacion_borrar=<?php echo $res->id_fichas_dosificacion; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Especies </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         
	         
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Especies</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
	         
	         <?php if(!empty($resultEditEspecies)){foreach($resultEditEspecies as $resultEditEspecies) {?>
	           <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_especies" class="control-label">Especies:</label>
                                  <select name="id_especies" id="id_especies"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEsp as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" <?php if ($res->id_especies == $resultEditEspecies->id_especies )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies_1" class="errores"></div>
                                   <input type="hidden" name="id_fichas_especies" id="id_fichas_especies" value="<?php echo $resultEditEspecies->id_fichas_especies;   ?>" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_especies" name="btn_agregar_especies" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	    <?php }} else {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_especies" class="control-label">Especies:</label>
                                  <select name="id_especies" id="id_especies"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEsp as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" ><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies_1" class="errores"></div>
                                  <input type="hidden" name="id_fichas_especies" id="id_fichas_especies" value="0" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_especies" name="btn_agregar_especies" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	    <?php }?>
		   
            
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Especie</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicEs as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_especies; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_especies; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_especies_editar=<?php echo $res->id_fichas_especies; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_especies_borrar=<?php echo $res->id_fichas_especies; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Especies </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         
	         
	         
	         
	         
	         
	         
	            
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Vía de Administración</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
	          <?php if(!empty($resultEditFormAdm)){foreach($resultEditFormAdm as $resultEditFormAdm) {?>
	         <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_formas_administracion" class="control-label">Vía de Administración:</label>
                                  <select name="id_formas_administracion" id="id_formas_administracion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultFormAd as $res) {?>
										<option value="<?php echo $res->id_formas_administracion; ?>" <?php if ($res->id_formas_administracion == $resultEditFormAdm->id_formas_administracion )  echo  ' selected="selected" '  ;  ?>  ><?php echo $res->nombre_formas_administracion; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_formas_administracion" class="errores"></div>
                                  <input type="hidden" name="id_fichas_formas_administracion" id="id_fichas_formas_administracion" value="<?php echo $resultEditFormAdm->id_fichas_formas_administracion;   ?>" class="form-control"/>
								  
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_admnistracion" name="btn_agregar_admnistracion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     <?php }} else {?>
       	     
       	     <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_formas_administracion" class="control-label">Vía de Administración:</label>
                                  <select name="id_formas_administracion" id="id_formas_administracion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultFormAd as $res) {?>
										<option value="<?php echo $res->id_formas_administracion; ?>" ><?php echo $res->nombre_formas_administracion; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_formas_administracion" class="errores"></div>
                                  <input type="hidden" name="id_fichas_formas_administracion" id="id_fichas_formas_administracion" value="0" class="form-control"/>
								  
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_admnistracion" name="btn_agregar_admnistracion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     <?php }?>
		 
            
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Via de Administración</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicAdm as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_formas_administracion; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_formas_administracion; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_formas_administracion_editar=<?php echo $res->id_fichas_formas_administracion; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_formas_administracion_borrar=<?php echo $res->id_fichas_formas_administracion; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Vias de Administración </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="interacciones_fichas" class="control-label">Interacciones:</label>
                                  <textarea type="text"  class="form-control" id="interacciones_fichas" name="interacciones_fichas" value=""  placeholder="Interacciones"><?php echo $resEdit->interacciones_fichas; ?></textarea>
                                  <div id="mensaje_interacciones_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="contraindicaciones_fichas" class="control-label">Contra Indicaciones:</label>
                                  <textarea type="text"  class="form-control" id="contraindicaciones_fichas" name="contraindicaciones_fichas" value=""  placeholder="Contra Indicaciones"><?php echo $resEdit->contraindicaciones_fichas; ?></textarea>
                                  <div id="mensaje_contraindicaciones_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="efectos_colaterales_fichas" class="control-label">Efectos Colaterales:</label>
                                  <textarea type="text"  class="form-control" id="efectos_colaterales_fichas" name="efectos_colaterales_fichas" value=""  placeholder="Efectos Colaterales"><?php echo $resEdit->efectos_colaterales_fichas; ?></textarea>
                                  <div id="mensaje_efectos_colaterales_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="periodo_retiro_fichas" class="control-label">Periodo de Retiro:</label>
                                  <textarea type="text"  class="form-control" id="periodo_retiro_fichas" name="periodo_retiro_fichas" value=""  placeholder="Periodo de Retiro"><?php echo $resEdit->periodo_retiro_fichas; ?></textarea>
                                  <div id="mensaje_periodo_retiro_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="advertencias_fichas" class="control-label">Advertencias:</label>
                                  <textarea type="text"  class="form-control" id="advertencias_fichas" name="advertencias_fichas" value=""  placeholder="Advertencias"><?php echo $resEdit->advertencias_fichas; ?></textarea>
                                  <div id="mensaje_advertencias_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="presentacion_fichas" class="control-label">Presentaciones:</label>
                                  <textarea type="text"  class="form-control" id="presentacion_fichas" name="presentacion_fichas" value=""  placeholder="Presentaciones"><?php echo $resEdit->presentacion_fichas; ?></textarea>
                                  <div id="mensaje_presentacion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="conservacion_fichas" class="control-label">Conservación:</label>
                                  <textarea type="text"  class="form-control" id="conservacion_fichas" name="conservacion_fichas" value=""  placeholder="Conservación"><?php echo $resEdit->conservacion_fichas; ?></textarea>
                                  <div id="mensaje_conservacion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="registro_sanitario_fichas" class="control-label">Regristro Agrocalidad:</label>
                                  <textarea type="text"  class="form-control" id="registro_sanitario_fichas" name="registro_sanitario_fichas" value=""  placeholder="Regristro Agrocalidad"><?php echo $resEdit->registro_sanitario_fichas; ?></textarea>
                                  <div id="mensaje_registro_sanitario_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         
	         
	         
	         
	         
	         
	          
	            
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Distribuidores</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
	       <?php if(!empty($resultEditDistri)){foreach($resultEditDistri as $resultEditDistri) {?>
	        <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_distribuidores" class="control-label">Distribuidores:</label>
                                  <select name="id_distribuidores" id="id_distribuidores"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultDis as $res) {?>
										<option value="<?php echo $res->id_distribuidores; ?>" <?php if ($res->id_distribuidores == $resultEditDistri->id_distribuidores )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_distribuidores; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_distribuidores" class="errores"></div>
                                  <input type="hidden" name="id_fichas_distribuidores" id="id_fichas_distribuidores" value="<?php echo $resultEditDistri->id_fichas_distribuidores;   ?>" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_distribuidores" name="btn_agregar_distribuidores" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	   <?php }} else {?>
       	   
       	    <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_distribuidores" class="control-label">Distribuidores:</label>
                                  <select name="id_distribuidores" id="id_distribuidores"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultDis as $res) {?>
										<option value="<?php echo $res->id_distribuidores; ?>" ><?php echo $res->nombre_distribuidores; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_distribuidores" class="errores"></div>
                                  <input type="hidden" name="id_fichas_distribuidores" id="id_fichas_distribuidores" value="0" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_distribuidores" name="btn_agregar_distribuidores" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	   <?php }?>
		    
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Nombre del Distribuidor</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicDistri as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_distribuidores; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_distribuidores; ?>     </td> 
						                <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_distribuidores_editar=<?php echo $res->id_fichas_distribuidores; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_distribuidores_borrar=<?php echo $res->id_fichas_distribuidores; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Distribuidores </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         
	         
	             
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Laboratorios</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
		     
		     
       	     <?php if(!empty($resultEditLabo)){foreach($resultEditLabo as $resultEditLabo) {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_laboratorios" class="control-label">Laboratorios:</label>
                                  <select name="id_laboratorios" id="id_laboratorios"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultLab as $res) {?>
										<option value="<?php echo $res->id_laboratorios; ?>" <?php if ($res->id_laboratorios == $resultEditLabo->id_laboratorios )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_laboratorios; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_laboratorios" class="errores"></div>
                                   <input type="hidden" name="id_fichas_laboratorios" id="id_fichas_laboratorios" value="<?php echo $resultEditLabo->id_fichas_laboratorios;   ?>" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_laboratorios" name="btn_agregar_laboratorios" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     
       	     <?php }} else {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_laboratorios" class="control-label">Laboratorios:</label>
                                  <select name="id_laboratorios" id="id_laboratorios"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultLab as $res) {?>
										<option value="<?php echo $res->id_laboratorios; ?>" ><?php echo $res->nombre_laboratorios; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_laboratorios" class="errores"></div>
                                  <input type="hidden" name="id_fichas_laboratorios" id="id_fichas_laboratorios" value="0" class="form-control"/>
								
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_laboratorios" name="btn_agregar_laboratorios" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     <?php }?>
       	     
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Nombre del Laboratorio</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicLabo as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_laboratorios; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_laboratorios; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_laboratorios_editar=<?php echo $res->id_fichas_laboratorios; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_laboratorios_borrar=<?php echo $res->id_fichas_laboratorios; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Laboratorios </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Logo Producto</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
		      <?php if(!empty($resultEditLogo)){foreach($resultEditLogo as $resultEditLogo) {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                 
                                  <label for="foto_fichas_fotos" class="control-label">Logo del Producto:</label>
                                  <input type="file" class="form-control" id="foto_fichas_fotos" name="foto_fichas_fotos" accept="image/*" class="form-control" />
                                  <div id="mensaje_foto_fichas_fotos" class="errores"></div>
                                  <input type="hidden" name="id_fichas_fotos" id="id_fichas_fotos" value="<?php echo $resultEditLogo->id_fichas_fotos;   ?>" class="form-control"/>
								  
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_foto" name="btn_agregar_foto" value="Actualizar" class="btn btn-success"/>
			                     <input type="button" id="btn_limpiar" name="btn_limpiar" value="Limpiar" class="btn btn-danger"/> 
            </div>
		    </div>
            </div>
            
            
             <div class="row" >
		     <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; margin-top: 1px;">
		      <div class="form-group">
		      <div><input type="image" name="image" src="view/DevuelveImagen.php?id_valor=<?php echo $resultEditLogo->id_fichas_fotos; ?>&id_nombre=id_fichas_fotos&tabla=fichas_fotos&campo=foto_fichas_fotos"  alt="<?php echo $resultEditLogo->id_fichas_fotos; ?>" width="80" height="60" ></div>      
		      </div>
			 </div>
		     </div> 
       	     
       	     <?php }} else {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="foto_fichas_fotos" class="control-label">Logo del Producto:</label>
                                  <input type="file" class="form-control" id="foto_fichas_fotos" name="foto_fichas_fotos" accept="image/*" class="form-control" />
                                  <div id="mensaje_foto_fichas_fotos" class="errores"></div>
                                  <input type="hidden" name="id_fichas_fotos" id="id_fichas_fotos" value="0" class="form-control"/>
								  
								
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_foto" name="btn_agregar_foto" value="Agregar" class="btn btn-success"/>
			                     <input type="button" id="btn_limpiar" name="btn_limpiar" value="Limpiar" class="btn btn-danger"/>
            </div>
		    </div>
            </div>
       	     <?php }?>
       	     
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Logo Producto</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicLogo as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_fotos; ?>  </td>
						                <td style="font-size: 11px;"> <input type="image" name="image" src="view/DevuelveImagen.php?id_valor=<?php echo $res->id_fichas_fotos; ?>&id_nombre=id_fichas_fotos&tabla=fichas_fotos&campo=foto_fichas_fotos"  alt="<?php echo $res->id_fichas_fotos; ?>" width="70" height="50" >      </td>
	                 	               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_fotos_editar=<?php echo $res->id_fichas_fotos; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_fotos_borrar=<?php echo $res->id_fichas_fotos; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Logo Productos </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	        
	    
	         
	         
	          <div class="row">
			  <div class="col-xs-12 col-md-12" style="text-align: center;" >
			  	<input type="submit" id="btn_guardar" name="btn_guardar" value="Guardar Ficha" class="btn btn-success"/>
			  </div>
			 </div> 
	         
			 </div>
			 </div>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 <?php } } else {?>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			<div class="panel panel-info" style="margin-top: 20px;">
            <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-plus'></i> Insetar Nueva Ficha de Productos</h4>
	         </div>
	         <div class="panel-body">
	         
	         
	        <div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="nombre_fichas" class="control-label">Nombre Producto:</label>
                                  <input type="text" class="form-control" id="nombre_fichas" name="nombre_fichas" value="<?php if ($sel_nombre_fichas !="") {echo $sel_nombre_fichas; } else {echo $nombre_fichas;}     ?>"  placeholder="Nombre Producto" readonly />
                                 <input type="hidden" name="id_fichas" id="id_fichas" value="<?php if ($sel_id_fichas !="") {echo $sel_id_fichas; } else {echo $id_fichas;} ?>" class="form-control"/>
								<div id="mensaje_nombre" class="errores"></div>
			</div>
		    </div>
		    </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="clasificacion_farmacologica_fichas" class="control-label">Categoría Farmacológica:</label>
                                  <textarea type="text"  class="form-control" id="clasificacion_farmacologica_fichas" name="clasificacion_farmacologica_fichas" value=""  placeholder="Categoría Farmacológica"><?php if ($sel_clasificacion_farmacologica_fichas !="") {echo $sel_clasificacion_farmacologica_fichas; } else{ echo $clasificacion_farmacologica_fichas;}     ?></textarea>
                                  <div id="mensaje_clasificacion_farmacologica_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="forma_terapeutica_fichas" class="control-label">Forma Farmacéutica:</label>
                                  <textarea type="text"  class="form-control" id="forma_terapeutica_fichas" name="forma_terapeutica_fichas" value=""  placeholder="Forma Farmacéutica"><?php if ($sel_forma_terapeutica_fichas !="") {echo $sel_forma_terapeutica_fichas; } else{ echo $forma_terapeutica_fichas;}  ?></textarea>
                                  <div id="mensaje_forma_terapeutica_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Composición</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	        <div class="row">
	        <div class="col-xs-12 col-md-12">
		     <div class="form-group ">
		                          <label for="encabezado_tabla_fichas" class="control-label">Texto Encabezado:</label>
                                  <input type="text" class="form-control" id="encabezado_tabla_fichas" name="encabezado_tabla_fichas" value="<?php if ($sel_encabezado_tabla_fichas !="") {echo $sel_encabezado_tabla_fichas; } else{ echo $encabezado_tabla_fichas;}  ?>"  placeholder="Texto Encabezado" />
                                  <div id="mensaje_encabezado_tabla_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
		     
		      <?php if(!empty($resultEditCompo)){foreach($resultEditCompo as $resultEditCompo) {?>
		      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_composiciones" class="control-label">Principio Activo:</label>
                                  <select name="id_composiciones" id="id_composiciones"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultCom as $res) {?>
										<option value="<?php echo $res->id_composiciones; ?>" <?php if ($res->id_composiciones == $resultEditCompo->id_composiciones )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_composiciones; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_composiciones" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="cantidad_fichas_composiciones" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="cantidad_fichas_composiciones" name="cantidad_fichas_composiciones" value="<?php echo $resultEditCompo->cantidad_fichas_composiciones; ?>"  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_composiciones" id="id_fichas_composiciones" value="<?php echo $resultEditCompo->id_fichas_composiciones;   ?>" class="form-control"/>
								  <div id="mensaje_cantidad_fichas_composiciones" class="errores"></div>
            </div>
		    </div>
             
             <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_unidades_medida" class="control-label">U/M:</label>
                                  <select name="id_unidades_medida" id="id_unidades_medida"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultUme as $res) {?>
										<option value="<?php echo $res->id_unidades_medida; ?>" <?php if ($res->id_unidades_medida == $resultEditCompo->id_unidades_medida )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_unidades_medida; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_nombre_unidades_medida" class="errores"></div>
             </div>
             </div>
	        </div>
		      
		      
		      <?php }} else {?>
		      
		      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_composiciones" class="control-label">Principio Activo:</label>
                                  <select name="id_composiciones" id="id_composiciones"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultCom as $res) {?>
										<option value="<?php echo $res->id_composiciones; ?>" ><?php echo $res->nombre_composiciones; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_composiciones" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="cantidad_fichas_composiciones" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="cantidad_fichas_composiciones" name="cantidad_fichas_composiciones" value=""  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_composiciones" id="id_fichas_composiciones" value="0" class="form-control"/>
								  <div id="mensaje_cantidad_fichas_composiciones" class="errores"></div>
            </div>
		    </div>
             
             <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_unidades_medida" class="control-label">U/M:</label>
                                  <select name="id_unidades_medida" id="id_unidades_medida"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultUme as $res) {?>
										<option value="<?php echo $res->id_unidades_medida; ?>" ><?php echo $res->nombre_unidades_medida; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_nombre_unidades_medida" class="errores"></div>
             </div>
             </div>
	        </div>
		      
		      <?php }?>
		    
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Nombre</th>
					    		<th style="text-align: left;  font-size: 11px;">Cantidad</th>
					    		<th style="text-align: left;  font-size: 11px;">Unidades de Medida</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicCom as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_composiciones; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_composiciones; ?>     </td> 
						               <td style="font-size: 11px;"> <?php echo $res->cantidad_fichas_composiciones; ?>     </td> 
						               <td style="font-size: 11px;"> <?php echo $res->nombre_unidades_medida; ?>     </td> 
						                 <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_composiciones_editar=<?php echo $res->id_fichas_composiciones; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_composiciones_borrar=<?php echo $res->id_fichas_composiciones; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Principios </label>
			   </div>
	        </div>
	        
	        
	          <div class="row">
				  <div class="col-xs-12 col-md-6">
				  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
				  		<input type="submit" id="btn_agregar_composicion" name="btn_agregar_composicion" value="Agregar" class="btn btn-success"/>
				  	</div>
				  </div>
			   </div>
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="accion_terapeutica_fichas" class="control-label">Características:</label>
                                  <textarea type="text"  class="form-control" id="accion_terapeutica_fichas" name="accion_terapeutica_fichas" value=""  placeholder="Caracteristicas"><?php if ($sel_accion_terapeutica_fichas !="") {echo $sel_accion_terapeutica_fichas; }else{ echo $accion_terapeutica_fichas;}      ?></textarea>
                                  <div id="mensaje_accion_terapeutica_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="mecanismo_accion_fichas" class="control-label">Mecanismo De Acción:</label>
                                  <textarea type="text"  class="form-control" id="mecanismo_accion_fichas" name="mecanismo_accion_fichas" value=""  placeholder="Mecanismo De Acción"><?php if ($sel_mecanismo_accion_fichas !="") {echo $sel_mecanismo_accion_fichas; }else{ echo $mecanismo_accion_fichas;}   ?></textarea>
                                  <div id="mensaje_mecanismo_accion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
			
			
			 <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="indicaciones_uso_fichas" class="control-label">Indicaciones de Uso:</label>
                                  <textarea type="text"  class="form-control" id="indicaciones_uso_fichas" name="indicaciones_uso_fichas" value=""  placeholder="Indicaciones de Uso"><?php if ($sel_indicaciones_uso_fichas !="") {echo $sel_indicaciones_uso_fichas; }else{ echo $indicaciones_uso_fichas;}  ?></textarea>
                                  <div id="mensaje_indicaciones_uso_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         
	         
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Dosificación</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	        <div class="row">
	        <div class="col-xs-12 col-md-12">
		     <div class="form-group ">
		                          <label for="encabezado_dosificacion_fichas" class="control-label">Texto Encabezado:</label>
                                  <input type="text" class="form-control" id="encabezado_dosificacion_fichas" name="encabezado_dosificacion_fichas" value="<?php if ($sel_encabezado_dosificacion_fichas !="") {echo $sel_encabezado_dosificacion_fichas; }else{ echo $encabezado_dosificacion_fichas;}   ?>"  placeholder="Texto Encabezado" />
                                  <div id="mensaje_encabezado_dosificacion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
		     
		      <?php if(!empty($resultEditDosi)){foreach($resultEditDosi as $resultEditDosi) {?>
       	    <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_especies_dosificacion" class="control-label">Especies:</label>
                                  <select name="id_especies_dosificacion" id="id_especies_dosificacion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEspe as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" <?php if ($res->id_especies == $resultEditDosi->id_especies )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="dosis_fichas_dosificacion" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="dosis_fichas_dosificacion" name="dosis_fichas_dosificacion" value="<?php echo $resultEditDosi->dosis_fichas_dosificacion; ?>"  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_dosificacion" id="id_fichas_dosificacion" value="<?php echo $resultEditDosi->id_fichas_dosificacion;   ?>" class="form-control"/>
								  <div id="mensaje_dosis_fichas_dosificacion" class="errores"></div>
            </div>
		    </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_dosificacion" name="btn_agregar_dosificacion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
             
	        </div>
       	   
       	    <?php }} else {?>
       	     <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_especies_dosificacion" class="control-label">Especies:</label>
                                  <select name="id_especies_dosificacion" id="id_especies_dosificacion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEspe as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" ><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="dosis_fichas_dosificacion" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="dosis_fichas_dosificacion" name="dosis_fichas_dosificacion" value=""  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_dosificacion" id="id_fichas_dosificacion" value="0" class="form-control"/>
								  <div id="mensaje_dosis_fichas_dosificacion" class="errores"></div>
            </div>
		    </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_dosificacion" name="btn_agregar_dosificacion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
             
            
	        </div>
       	    <?php }?>
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Especie</th>
					    		<th style="text-align: left;  font-size: 11px;">Dosis</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicDos as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_dosificacion; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_especies; ?>     </td> 
						               <td style="font-size: 11px;"> <?php echo $res->dosis_fichas_dosificacion; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_dosificacion_editar=<?php echo $res->id_fichas_dosificacion; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_dosificacion_borrar=<?php echo $res->id_fichas_dosificacion; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Especies </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         
	         
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Especies</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
		  <?php if(!empty($resultEditEspecies)){foreach($resultEditEspecies as $resultEditEspecies) {?>
	           <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_especies" class="control-label">Especies:</label>
                                  <select name="id_especies" id="id_especies"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEsp as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" <?php if ($res->id_especies == $resultEditEspecies->id_especies )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies_1" class="errores"></div>
                                   <input type="hidden" name="id_fichas_especies" id="id_fichas_especies" value="<?php echo $resultEditEspecies->id_fichas_especies;   ?>" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_especies" name="btn_agregar_especies" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	    <?php }} else {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_especies" class="control-label">Especies:</label>
                                  <select name="id_especies" id="id_especies"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEsp as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" ><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies_1" class="errores"></div>
                                  <input type="hidden" name="id_fichas_especies" id="id_fichas_especies" value="0" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_especies" name="btn_agregar_especies" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	    <?php }?>
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Especie</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicEs as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_especies; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_especies; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_especies_editar=<?php echo $res->id_fichas_especies; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_especies_borrar=<?php echo $res->id_fichas_especies; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Especies </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         
	         
	         
	         
	         
	         
	         
	            
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Vía de Administración</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
		  <?php if(!empty($resultEditFormAdm)){foreach($resultEditFormAdm as $resultEditFormAdm) {?>
	         <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_formas_administracion" class="control-label">Vía de Administración:</label>
                                  <select name="id_formas_administracion" id="id_formas_administracion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultFormAd as $res) {?>
										<option value="<?php echo $res->id_formas_administracion; ?>" <?php if ($res->id_formas_administracion == $resultEditFormAdm->id_formas_administracion )  echo  ' selected="selected" '  ;  ?>  ><?php echo $res->nombre_formas_administracion; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_formas_administracion" class="errores"></div>
                                  <input type="hidden" name="id_fichas_formas_administracion" id="id_fichas_formas_administracion" value="<?php echo $resultEditFormAdm->id_fichas_formas_administracion;   ?>" class="form-control"/>
								  
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_admnistracion" name="btn_agregar_admnistracion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     <?php }} else {?>
       	     
       	     <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_formas_administracion" class="control-label">Vía de Administración:</label>
                                  <select name="id_formas_administracion" id="id_formas_administracion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultFormAd as $res) {?>
										<option value="<?php echo $res->id_formas_administracion; ?>" ><?php echo $res->nombre_formas_administracion; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_formas_administracion" class="errores"></div>
                                  <input type="hidden" name="id_fichas_formas_administracion" id="id_fichas_formas_administracion" value="0" class="form-control"/>
								  
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_admnistracion" name="btn_agregar_admnistracion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     <?php }?>
		 
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Via de Administración</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicAdm as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_formas_administracion; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_formas_administracion; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_formas_administracion_editar=<?php echo $res->id_fichas_formas_administracion; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_formas_administracion_borrar=<?php echo $res->id_fichas_formas_administracion; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Vias de Administración </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="interacciones_fichas" class="control-label">Interacciones:</label>
                                  <textarea type="text"  class="form-control" id="interacciones_fichas" name="interacciones_fichas" value=""  placeholder="Interacciones"><?php if ($sel_interacciones_fichas !="") {echo $sel_interacciones_fichas; }else{ echo $interacciones_fichas;} ?></textarea>
                                  <div id="mensaje_interacciones_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="contraindicaciones_fichas" class="control-label">Contra Indicaciones:</label>
                                  <textarea type="text"  class="form-control" id="contraindicaciones_fichas" name="contraindicaciones_fichas" value=""  placeholder="Contra Indicaciones"><?php if ($sel_contraindicaciones_fichas !="") {echo $sel_contraindicaciones_fichas; }else{ echo $contraindicaciones_fichas;} ?></textarea>
                                  <div id="mensaje_contraindicaciones_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="efectos_colaterales_fichas" class="control-label">Efectos Colaterales:</label>
                                  <textarea type="text"  class="form-control" id="efectos_colaterales_fichas" name="efectos_colaterales_fichas" value=""  placeholder="Efectos Colaterales"><?php if ($sel_efectos_colaterales_fichas !="") {echo $sel_efectos_colaterales_fichas; }else{ echo $efectos_colaterales_fichas;} ?></textarea>
                                  <div id="mensaje_efectos_colaterales_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="periodo_retiro_fichas" class="control-label">Periodo de Retiro:</label>
                                  <textarea type="text"  class="form-control" id="periodo_retiro_fichas" name="periodo_retiro_fichas" value=""  placeholder="Periodo de Retiro"><?php if ($sel_periodo_retiro_fichas !="") {echo $sel_periodo_retiro_fichas; }else{ echo $periodo_retiro_fichas;} ?></textarea>
                                  <div id="mensaje_periodo_retiro_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="advertencias_fichas" class="control-label">Advertencias:</label>
                                  <textarea type="text"  class="form-control" id="advertencias_fichas" name="advertencias_fichas" value=""  placeholder="Advertencias"><?php if ($sel_advertencias_fichas !="") {echo $sel_advertencias_fichas; }else{ echo $advertencias_fichas;}  ?></textarea>
                                  <div id="mensaje_advertencias_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="presentacion_fichas" class="control-label">Presentaciones:</label>
                                  <textarea type="text"  class="form-control" id="presentacion_fichas" name="presentacion_fichas" value=""  placeholder="Presentaciones"><?php if ($sel_presentacion_fichas !="") {echo $sel_presentacion_fichas; }else{ echo $presentacion_fichas;} ?></textarea>
                                  <div id="mensaje_presentacion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="conservacion_fichas" class="control-label">Conservación:</label>
                                  <textarea type="text"  class="form-control" id="conservacion_fichas" name="conservacion_fichas" value=""  placeholder="Conservación"><?php if ($sel_conservacion_fichas !="") {echo $sel_conservacion_fichas; }else{ echo $conservacion_fichas;} ?></textarea>
                                  <div id="mensaje_conservacion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="registro_sanitario_fichas" class="control-label">Regristro Agrocalidad:</label>
                                  <textarea type="text"  class="form-control" id="registro_sanitario_fichas" name="registro_sanitario_fichas" value=""  placeholder="Regristro Agrocalidad"><?php if ($sel_registro_sanitario_fichas !="") {echo $sel_registro_sanitario_fichas; }else{ echo $registro_sanitario_fichas;} ?></textarea>
                                  <div id="mensaje_registro_sanitario_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         
	         
	         
	         
	         
	         
	          
	            
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Distribuidores</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
		    <?php if(!empty($resultEditDistri)){foreach($resultEditDistri as $resultEditDistri) {?>
	        <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_distribuidores" class="control-label">Distribuidores:</label>
                                  <select name="id_distribuidores" id="id_distribuidores"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultDis as $res) {?>
										<option value="<?php echo $res->id_distribuidores; ?>" <?php if ($res->id_distribuidores == $resultEditDistri->id_distribuidores )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_distribuidores; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_distribuidores" class="errores"></div>
                                  <input type="hidden" name="id_fichas_distribuidores" id="id_fichas_distribuidores" value="<?php echo $resultEditDistri->id_fichas_distribuidores;   ?>" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_distribuidores" name="btn_agregar_distribuidores" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	   <?php }} else {?>
       	   
       	    <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_distribuidores" class="control-label">Distribuidores:</label>
                                  <select name="id_distribuidores" id="id_distribuidores"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultDis as $res) {?>
										<option value="<?php echo $res->id_distribuidores; ?>" ><?php echo $res->nombre_distribuidores; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_distribuidores" class="errores"></div>
                                  <input type="hidden" name="id_fichas_distribuidores" id="id_fichas_distribuidores" value="0" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_distribuidores" name="btn_agregar_distribuidores" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	   <?php }?>
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Nombre del Distribuidor</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    	    <th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicDistri as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_distribuidores; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_distribuidores; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_distribuidores_editar=<?php echo $res->id_fichas_distribuidores; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_distribuidores_borrar=<?php echo $res->id_fichas_distribuidores; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Distribuidores </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         
	         
	             
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Laboratorios</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
		      <?php if(!empty($resultEditLabo)){foreach($resultEditLabo as $resultEditLabo) {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_laboratorios" class="control-label">Laboratorios:</label>
                                  <select name="id_laboratorios" id="id_laboratorios"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultLab as $res) {?>
										<option value="<?php echo $res->id_laboratorios; ?>" <?php if ($res->id_laboratorios == $resultEditLabo->id_laboratorios )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_laboratorios; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_laboratorios" class="errores"></div>
                                   <input type="hidden" name="id_fichas_laboratorios" id="id_fichas_laboratorios" value="<?php echo $resultEditLabo->id_fichas_laboratorios;   ?>" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_laboratorios" name="btn_agregar_laboratorios" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     
       	     <?php }} else {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_laboratorios" class="control-label">Laboratorios:</label>
                                  <select name="id_laboratorios" id="id_laboratorios"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultLab as $res) {?>
										<option value="<?php echo $res->id_laboratorios; ?>" ><?php echo $res->nombre_laboratorios; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_laboratorios" class="errores"></div>
                                  <input type="hidden" name="id_fichas_laboratorios" id="id_fichas_laboratorios" value="0" class="form-control"/>
								
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_laboratorios" name="btn_agregar_laboratorios" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     <?php }?>
       	     
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Nombre del Laboratorio</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicLabo as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_laboratorios; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_laboratorios; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_laboratorios_editar=<?php echo $res->id_fichas_laboratorios; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_laboratorios_borrar=<?php echo $res->id_fichas_laboratorios; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Laboratorios </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	        
	        
	        
	        
	        
	        
	        
	        
	        
	         <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Logo Producto</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
		      <?php if(!empty($resultEditLogo)){foreach($resultEditLogo as $resultEditLogo) {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                 
                                  <label for="foto_fichas_fotos" class="control-label">Logo del Producto:</label>
                                  <input type="file" class="form-control" id="foto_fichas_fotos" name="foto_fichas_fotos" accept="image/*" class="form-control" />
                                  <div id="mensaje_foto_fichas_fotos" class="errores"></div>
                                  <input type="hidden" name="id_fichas_fotos" id="id_fichas_fotos" value="<?php echo $resultEditLogo->id_fichas_fotos;   ?>" class="form-control"/>
								  
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_foto" name="btn_agregar_foto" value="Actualizar" class="btn btn-success"/>
		                         <input type="button" id="btn_limpiar" name="btn_limpiar" value="Limpiar" class="btn btn-danger"/> 
			   
            </div>
		    </div>
            </div>
            
            
             <div class="row" >
		     <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; margin-top: 1px;">
		      <div class="form-group">
		      <div><input type="image" name="image" src="view/DevuelveImagen.php?id_valor=<?php echo $resultEditLogo->id_fichas_fotos; ?>&id_nombre=id_fichas_fotos&tabla=fichas_fotos&campo=foto_fichas_fotos"  alt="<?php echo $resultEditLogo->id_fichas_fotos; ?>" width="80" height="60" ></div>      
		      </div>
			 </div>
		     </div>
       	     
       	     <?php }} else {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="foto_fichas_fotos" class="control-label">Logo del Producto:</label>
                                  <input type="file" class="form-control" id="foto_fichas_fotos" name="foto_fichas_fotos" accept="image/*" class="form-control" />
                                  <div id="mensaje_foto_fichas_fotos" class="errores"></div>
                                  <input type="hidden" name="id_fichas_fotos" id="id_fichas_fotos" value="0" class="form-control"/>
								  
								
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_foto" name="btn_agregar_foto" value="Agregar" class="btn btn-success"/>
		                         <input type="button" id="btn_limpiar" name="btn_limpiar" value="Limpiar" class="btn btn-danger"/>
		                        
            </div>
		    </div>
            </div>
            
            
            
       	     <?php }?>
       	     
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Logo Producto</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicLogo as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_fotos; ?>  </td>
						                <td style="font-size: 11px;"> <input type="image" name="image" src="view/DevuelveImagen.php?id_valor=<?php echo $res->id_fichas_fotos; ?>&id_nombre=id_fichas_fotos&tabla=fichas_fotos&campo=foto_fichas_fotos"  alt="<?php echo $res->id_fichas_fotos; ?>" width="70" height="50" >      </td>
	                 	               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_fotos_editar=<?php echo $res->id_fichas_fotos; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_fotos_borrar=<?php echo $res->id_fichas_fotos; ?>&id_fichas=<?php echo $id_fichas; ?>&nombre_fichas=<?php echo $sel_nombre_fichas; ?>&encabezado_tabla_fichas=<?php echo $sel_encabezado_tabla_fichas; ?>&accion_terapeutica_fichas=<?php echo $sel_accion_terapeutica_fichas; ?>&clasificacion_farmacologica_fichas=<?php echo $sel_clasificacion_farmacologica_fichas; ?>&forma_terapeutica_fichas=<?php echo $sel_forma_terapeutica_fichas; ?>&indicaciones_uso_fichas=<?php echo $sel_indicaciones_uso_fichas; ?>&interacciones_fichas=<?php echo $sel_interacciones_fichas; ?>&contraindicaciones_fichas=<?php echo $sel_contraindicaciones_fichas; ?>&periodo_retiro_fichas=<?php echo $sel_periodo_retiro_fichas; ?>&advertencias_fichas=<?php echo $sel_advertencias_fichas; ?>&presentacion_fichas=<?php echo $sel_presentacion_fichas; ?>&registro_sanitario_fichas=<?php echo $sel_registro_sanitario_fichas; ?>&mecanismo_accion_fichas=<?php echo $sel_mecanismo_accion_fichas; ?>&efectos_colaterales_fichas=<?php echo $sel_efectos_colaterales_fichas; ?>&conservacion_fichas=<?php echo $sel_conservacion_fichas; ?>&encabezado_dosificacion_fichas=<?php echo $sel_encabezado_dosificacion_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Logo Productos </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	        
	        
	         
	     
	         
	         
	         
	         
	         
	         
	         
	          <div class="row">
			  <div class="col-xs-12 col-md-12" style="text-align: center;" >
			  	<input type="submit" id="btn_guardar" name="btn_guardar" value="Guardar Ficha" class="btn btn-success"/>
			  </div>
			 </div> 
	         
			 </div>
			 </div>
			 
			 
			  	
		  
		 
           
			  
		    
           
        
		
		<?php }?>

	   <?php }?>  
	   
	     </div>
       
          </form>
       
           	<div class="col-lg-12">
  					
   		     <?php include("view/modulos/servicios.php"); ?>	
   			 
   		</div>     
  <?php include("view/modulos/beforefooter.php"); ?>
    		
       
   <span class="ir-arriba">^</span>
     </body>  
    </html>   