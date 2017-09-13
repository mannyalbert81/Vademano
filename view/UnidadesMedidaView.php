
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
        <title>Unidades de Medida - Vademano 2015</title>
   
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
		    $("#btn_guardar").click(function() 
			{
		    	 
		    	var nombre_unidades_medida = $("#nombre_unidades_medida").val();
		    	var descripcion_unidades_medida = $("#descripcion_unidades_medida").val();
		    	
		    	

		    	if (descripcion_unidades_medida == "")
		    	{	$("#mensaje_descripcion_unidades_medida").text("Introduzca Nombre");
		    		$("#mensaje_descripcion_unidades_medida").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
			    		$("#mensaje_descripcion_unidades_medida").fadeOut("slow"); //Muestra mensaje de error
		        }
		        
		    	if (nombre_unidades_medida == "")
		    	{	$("#mensaje_nombre").text("Introduzca Simbología");
		    		$("#mensaje_nombre").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
			    		$("#mensaje_nombre").fadeOut("slow"); //Muestra mensaje de error
		        }


			}); 
		    $( "#descripcion_unidades_medida" ).focus(function() {
				$("#mensaje_descripcion_unidades_medida").fadeOut("slow");
			});
			$( "#nombre_unidades_medida" ).focus(function() {
					$("#mensaje_nombre").fadeOut("slow");
    			});
		      
				    
		}); 

	</script>

		<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_actualizar").click(function() 
			{
		    	 
		    	var nombre_unidades_medida = $("#nombre_unidades_medida").val();
		    	var descripcion_unidades_medida = $("#descripcion_unidades_medida").val();
		    	
		    	if (descripcion_unidades_medida == "")
		    	{	$("#mensaje_descripcion_unidades_medida").text("Introduzca Nombre");
		    		$("#mensaje_descripcion_unidades_medida").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
			    		$("#mensaje_descripcion_unidades_medida").fadeOut("slow"); //Muestra mensaje de error
		        }
		        
		    	if (nombre_unidades_medida == "")
		    	{	$("#mensaje_nombre").text("Introduzca Simbología");
		    		$("#mensaje_nombre").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
			    		$("#mensaje_nombre").fadeOut("slow"); //Muestra mensaje de error
		        }


			}); 
		    $( "#descripcion_unidades_medida" ).focus(function() {
				$("#mensaje_descripcion_unidades_medida").fadeOut("slow");
			});
			$( "#nombre_unidades_medida" ).focus(function() {
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
    </head>
    <body style="background-color: #FAFAFA;">
    
     
       
  		 <form action="<?php echo $helper->url("UnidadesMedida","Inserta"); ?>" method="post" enctype="multipart/form-data" class="col-lg-12">
        	<div class="col-lg-6 division"; style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px; "   >
       
        	    <h4>Insertar Unidad de Medida</h4>
            	<hr/>
          <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
	         <div class="row">
	        <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="descripcion_unidades_medida" class="control-label">Nombre Unidad de Medida:</label>
                                  <input type="text" class="form-control" id="descripcion_unidades_medida" name="descripcion_unidades_medida" value="<?php echo $resEdit->descripcion_unidades_medida; ?>"  placeholder="Nombre u/m">
                                  <div id="mensaje_descripcion_unidades_medida" class="errores"></div>
            </div>
		    </div>
	         <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="nombre_unidades_medida" class="control-label">Unidad de Medida:</label>
                                  <input type="text" class="form-control" id="nombre_unidades_medida" name="nombre_unidades_medida" value="<?php echo $resEdit->nombre_unidades_medida; ?>"  placeholder="Simbolo u/m">
                                  <input type="hidden" name="id_unidades_medida" id="id_unidades_medida" value="<?php echo $resEdit->id_unidades_medida; ?>" class="form-control"/>
					              <div id="mensaje_nombre" class="errores"></div>
            </div>
		    </div>
	        </div>    
			
			
			   
       		<div class="row">
		    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; margin-top: 40px;">
		    <div class="form-group">
        					 <input type="submit" id="btn_actualizar" name="btn_actualizar" value="Actualizar" class="btn btn-success"/>                         
            </div>
		    </div>
		    </div>    
                  
           
             <?php } } else {?>
	      
	        <div class="row">
	        <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="descripcion_unidades_medida" class="control-label">Nombre Unidad de Medida:</label>
                                  <input type="text" class="form-control" id="descripcion_unidades_medida" name="descripcion_unidades_medida" value=""  placeholder="Nombre u/m">
                                  <div id="mensaje_descripcion_unidades_medida" class="errores"></div>
            </div>
		    </div>
			<div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="nombre_unidades_medida" class="control-label">Unidad de Medida:</label>
                                  <input type="text" class="form-control" id="nombre_unidades_medida" name="nombre_unidades_medida" value=""  placeholder="Simbolo u/m">
                                  <div id="mensaje_nombre" class="errores"></div>
            </div>
		    </div>
			</div>
			 
		    <div class="row">
		    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; margin-top: 40px;">
		    <div class="form-group">
        					 <input type="submit" id="btn_guardar" name="btn_guardar" value="Guardar" class="btn btn-success"/>                         
            </div>
		    </div>
		    </div>
		
		        
                  
			<?php }?>    
	       <br><br><br><br><br><br><br>
	      </div>
        
       
        <div class="col-lg-6 division"; style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px; "   >
       
            <h4>Unidades de Medida</h4>
            <hr/>
        
        <section class="col-lg-12 usuario">
        <table class="table table-hover">
	         <tr class="info">
	    		<th style="text-align: left;  font-size: 13px;">Id</th>
	    		<th style="text-align: left;  font-size: 13px;">Nombre de Medida</th>
	    		<th style="text-align: left;  font-size: 13px;">Unidad de Medida</th>
	    		
	    		<th style="text-align: left;  font-size: 13px;"></th>
	    		<th style="text-align: left;  font-size: 13px;"></th>
	  		</tr>
                <?php $registros = 1;?>
	            <?php foreach($resultSet as $res) {?>
	        		<tr>
	                   <td style="font-size: 13px;"> <?php echo $registros; ?>  </td>
	                   <td style="font-size: 13px;"> <?php echo $res->descripcion_unidades_medida; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->nombre_unidades_medida; ?>     </td> 
		               <td style="font-size: 13px;">	
		               		<div class="right">
			                    <a href="<?php echo $helper->url("UnidadesMedida","index"); ?>&id_unidades_medida=<?php echo $res->id_unidades_medida; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
			                </div>
			            
			            </td>
			             <td style="font-size: 13px;">   
			                	<div class="right">
			                    <a href="<?php echo $helper->url("UnidadesMedida","borrarId"); ?>&id_unidades_medida=<?php echo $res->id_unidades_medida; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
			                </div>
			               
		                 </td>
		    		</tr>
		    		<?php $registros ++; ?>
		        <?php } ?>
  
            
       	</table>     
      </section>
     </div>
        </form>
          	<div class="col-lg-12">
  					
   		      <?php include("view/modulos/beforefooter.php"); ?>
   			
   		</div>     
  
        
    		
   <span class="ir-arriba">^</span>
     </body>  
    </html>   