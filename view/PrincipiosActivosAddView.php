 <div class="head menu" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/headadmin.php"); ?>
 </div>


<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Principios Activos - Vademano 2015</title>
   
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
	</style>
	
	
	<script>
			$(document).ready(function(){
			var altura = $('.menu').offset().top;
			
			$(window).on('scroll', function(){
				if ( $(window).scrollTop() > altura ){
					$('.menu').addClass('menu-fixed');
				} else {
					$('.menu').removeClass('menu-fixed');
				}
			});
		});
	 </script>
	
 		<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_guardar").click(function() 
			{
		    	var nombre_composiciones = $("#nombre_composiciones").val();


		    	if (nombre_composiciones == "")
		    	{
					
			    	$("#mensaje_nombre").text("Introduzca un Nombre");
		    		$("#mensaje_nombre").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_nombre").fadeOut("slow"); //Muestra mensaje de error
		            
			    }


			    
	    		    				    

			}); 
			$( "#nombre_composiciones" ).focus(function() {
					$("#mensaje_nombre").fadeOut("slow");
    			});
		
				    
		}); 

	</script>
	
	
	<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_actualizar").click(function() 
			{
		    	var nombre_composiciones = $("#nombre_composiciones").val();


		    	if (nombre_composiciones == "")
		    	{
					
			    	$("#mensaje_nombre").text("Introduzca un Nombre");
		    		$("#mensaje_nombre").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_nombre").fadeOut("slow"); //Muestra mensaje de error
		            
			    }


			    
	    		    				    

			}); 
			$( "#nombre_composiciones" ).focus(function() {
					$("#mensaje_nombre").fadeOut("slow");
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
    
        <div style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
     <?php include("view/modulos/menuadmin.php"); ?>
     </div>
       
          <?php
  		   	$sel_id_composiciones = "";
		   	$sel_nombre_composiciones = "";
		   	
		   if ($nuevo_composiciones)
		   {
		   	
		   }
		   else 
		   {
			   	if($_SERVER['REQUEST_METHOD']=='POST' )
			   	{
			   	}
			   
			   	if($_SERVER['REQUEST_METHOD']=='GET' )
			   	{
			   		
			   	}
			
		   }
		   
		   
		   		
		   
		?>

       
       
  		 <form action="<?php echo $helper->url("PrincipiosActivos","index_dos"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
          <div class="col-lg-12 division"; style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px; "   >
        
         <?php if ($id_composiciones > 0) { ?>
        	    <h4>Insertar Principios Activos</h4>
            	<hr/>
            	
		   		
            
          <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
	       
	        <div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="nombre_composiciones" class="control-label">Nombre Principio Activo:</label>
                                  <input type="text" class="form-control" id="nombre_composiciones" name="nombre_composiciones" value="<?php echo $resEdit->nombre_composiciones; ?>"  placeholder="Nombres"  />
                                 <input type="hidden" name="id_composiciones" id="id_composiciones" value="<?php echo $resEdit->id_composiciones;     ?>" class="form-control"/>
								<div id="mensaje_nombre" class="errores"></div>
			</div>
		    </div>
		    
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="categoria_farmacologica_composicion" class="control-label">Categoria Farmacológica:</label>
                                  <input type="text" class="form-control" id="categoria_farmacologica_composicion" name="categoria_farmacologica_composicion" value="<?php echo $resEdit->categoria_farmacologica_composicion; ?>"  placeholder="Categoria Farmacológica">
                                  
            </div>
		    </div>
			</div>
	       
	       
	       
			<div class="row">
			<div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="subcategoria_farmacologica_composiciones" class="control-label">Subcategoria Farmacológica:</label>
                                  <textarea type="text"  class="form-control" id="subcategoria_farmacologica_composiciones" name="subcategoria_farmacologica_composiciones" value=""  placeholder="Subcategoria Farmacológica"><?php echo $resEdit->subcategoria_farmacologica_composiciones; ?></textarea>
                                 
            </div>
		    </div>  
				  
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="indicaciones_uso_composiciones" class="control-label">Indicaciones de Uso:</label>
                                  <textarea type="text"  class="form-control" id="indicaciones_uso_composiciones" name="indicaciones_uso_composiciones" value=""  placeholder="Indicaciones de Uso"><?php echo $resEdit->indicaciones_uso_composiciones; ?></textarea>
                                 
            </div>
		    </div>   
			</div>
			
			
			<div class="row">
			<div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="forma_administracion_composiciones" class="control-label">Forma de Administración:</label>
                                  <textarea type="text"  class="form-control" id="forma_administracion_composiciones" name="forma_administracion_composiciones" value=""  placeholder="Forma de Administración"><?php echo $resEdit->forma_administracion_composiciones; ?></textarea>
                                 
            </div>
		    </div>  
				  
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="efectos_secundarios_composiciones" class="control-label">Efectos Secundarios:</label>
                                  <textarea type="text"  class="form-control" id="efectos_secundarios_composiciones" name="efectos_secundarios_composiciones" value=""  placeholder="Efectos Secundarios"><?php echo $resEdit->efectos_secundarios_composiciones; ?></textarea>
                                 
            </div>
		    </div>   
			</div>
			
			<div class="row">
			<div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="mecanismo_accion_composiciones" class="control-label">Mecanismo de Acción:</label>
                                  <textarea type="text"  class="form-control" id="mecanismo_accion_composiciones" name="mecanismo_accion_composiciones" value=""  placeholder="Mecanismo de Acción"><?php echo $resEdit->mecanismo_accion_composiciones; ?></textarea>
                                 
            </div>
		    </div>  
				  
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="precausiones_composiociones" class="control-label">Precauciones:</label>
                                  <textarea type="text"  class="form-control" id="precausiones_composiociones" name="precausiones_composiociones" value=""  placeholder="Precauciones"><?php echo $resEdit->precausiones_composiociones; ?></textarea>
                                 
            </div>
		    </div>   
			</div>
			

		    <div class="row">
			<div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="interacciones_composiciones" class="control-label">Interacciones:</label>
                                  <textarea type="text"  class="form-control" id="interacciones_composiciones" name="interacciones_composiciones" value=""  placeholder="Interacciones"><?php echo $resEdit->interacciones_composiciones; ?></textarea>
                                 
            </div>
		    </div>  
				  
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="contraindicaciones_composiciones" class="control-label">Contraindicaciones:</label>
                                  <textarea type="text"  class="form-control" id="contraindicaciones_composiciones" name="contraindicaciones_composiciones" value=""  placeholder="Contraindicaciones"><?php echo $resEdit->contraindicaciones_composiciones; ?></textarea>
                                 
            </div>
		    </div>   
			</div>
			
			
		
			
			<div class="row">
			<div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="periodo_retirio_composiciones" class="control-label">Periodo de Retiro:</label>
                                  <textarea type="text"  class="form-control" id="periodo_retirio_composiciones" name="periodo_retirio_composiciones" value=""  placeholder="Periodo de Retiro"><?php echo $resEdit->periodo_retirio_composiciones; ?></textarea>
                                 
            </div>
		    </div> 
		    </div>
			
		


            <hr>
		   <div class="row">
			  <div class="col-xs-12 col-md-12" style="text-align: center;" >
			  	<input type="submit" id="btn_actualizar" name="btn_actualizar" value="Actualizar" class="btn btn-success"/>
			  </div>
			</div>     
               
		
		 <hr>
				       
	       
	       
	       
	         	   
       	     <?php } } else {?>

 			

			<div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="nombre_composiciones" class="control-label">Nombre Principio Activo:</label>
                                  <input type="text" class="form-control" id="nombre_composiciones" name="nombre_composiciones" value="<?php echo $nombre_composiciones; ?>"  placeholder="Nombres"  />
                                 <input type="hidden" name="id_composiciones" id="id_composiciones" value="<?php echo $id_composiciones; ?>" class="form-control"/>
								<div id="mensaje_nombre" class="errores"></div>
			</div>
		    </div>
		    
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="categoria_farmacologica_composicion" class="control-label">Categoria Farmacológica:</label>
                                  <input type="text" class="form-control" id="categoria_farmacologica_composicion" name="categoria_farmacologica_composicion" value=""  placeholder="Categoria Farmacológica"/>
                                
            </div>
		    </div>
			</div>
	       
	       
	       
			<div class="row">
			<div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="subcategoria_farmacologica_composiciones" class="control-label">Subcategoria Farmacológica:</label>
                                  <textarea type="text"  class="form-control" id="subcategoria_farmacologica_composiciones" name="subcategoria_farmacologica_composiciones" value=""  placeholder="Subcategoria Farmacológica"></textarea>
                                 
            </div>
		    </div>  
				  
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="indicaciones_uso_composiciones" class="control-label">Indicaciones de Uso:</label>
                                  <textarea type="text"  class="form-control" id="indicaciones_uso_composiciones" name="indicaciones_uso_composiciones" value=""  placeholder="Indicaciones de Uso"></textarea>
                                 
            </div>
		    </div>   
			</div>
			
			
			<div class="row">
			<div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="forma_administracion_composiciones" class="control-label">Forma de Administración:</label>
                                  <textarea type="text"  class="form-control" id="forma_administracion_composiciones" name="forma_administracion_composiciones" value=""  placeholder="Forma de Administración"></textarea>
                                 
            </div>
		    </div>  
				  
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="efectos_secundarios_composiciones" class="control-label">Efectos Secundarios:</label>
                                  <textarea type="text"  class="form-control" id="efectos_secundarios_composiciones" name="efectos_secundarios_composiciones" value=""  placeholder="Efectos Secundarios"></textarea>
                                 
            </div>
		    </div>   
			</div>
			
			<div class="row">
			<div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="mecanismo_accion_composiciones" class="control-label">Mecanismo de Acción:</label>
                                  <textarea type="text"  class="form-control" id="mecanismo_accion_composiciones" name="mecanismo_accion_composiciones" value=""  placeholder="Mecanismo de Acción"></textarea>
                                 
            </div>
		    </div>  
				  
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="precausiones_composiociones" class="control-label">Precauciones:</label>
                                  <textarea type="text"  class="form-control" id="precausiones_composiociones" name="precausiones_composiociones" value=""  placeholder="Precauciones"></textarea>
                                 
            </div>
		    </div>   
			</div>
			

		    <div class="row">
			<div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="interacciones_composiciones" class="control-label">Interacciones:</label>
                                  <textarea type="text"  class="form-control" id="interacciones_composiciones" name="interacciones_composiciones" value=""  placeholder="Interacciones"></textarea>
                                 
            </div>
		    </div>  
				  
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="contraindicaciones_composiciones" class="control-label">Contraindicaciones:</label>
                                  <textarea type="text"  class="form-control" id="contraindicaciones_composiciones" name="contraindicaciones_composiciones" value=""  placeholder="Contraindicaciones"></textarea>
                                 
            </div>
		    </div>   
			</div>
			
			
		
			
			<div class="row">
			<div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="periodo_retirio_composiciones" class="control-label">Periodo de Retiro:</label>
                                  <textarea type="text"  class="form-control" id="periodo_retirio_composiciones" name="periodo_retirio_composiciones" value=""  placeholder="Periodo de Retiro"></textarea>
                                 
            </div>
		    </div> 
		    </div>
			

           
		   <div class="row">
			  <div class="col-xs-12 col-md-12" style="text-align: center;" >
			  	<input type="submit" id="btn_guardar" name="btn_guardar" value="Guardar" class="btn btn-success"/>
			  </div>
			</div>     
               
	
				       
	       
	       
	       
		       
			<?php }}?>    
	     
	      <br><br><br><br>
	       
	        </div>
          </form>
       
             	<div class="col-lg-12">
  					
   		     <?php include("view/modulos/beforefooter.php"); ?>	
   			 
   		</div>     
  
    		
       
   
     </body>  
    </html>   