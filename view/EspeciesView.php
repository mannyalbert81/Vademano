 <div class="head" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/headadmin.php"); ?>
 </div>

<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Afiliaciones - Vademano 2015</title>
   
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
 		
 		
 		<script> 
			$(function(){
		      
		        $("#btn_guardar").click(function(){

		        	var logo_especies = $("#logo_especies").val();
			    	var nombre_especies = $("#nombre_especies").val();
			        
			    	if (nombre_especies == "")
			    	{
						
				    	$("#mensaje_nombre").text("Introduzca un Nombre");
			    		$("#mensaje_nombre").fadeIn("slow"); //Muestra mensaje de error
			            return false;
				    }
			    	else 
			    	{
						
				    	$("#mensaje_nombre").fadeOut("slow"); //Muestra mensaje de error
			            
				    }

			    	if (logo_especies == "")
			    	{
						
				    	$("#mensaje_logo_especies").text("Selecciones un Logo");
			    		$("#mensaje_logo_especies").fadeIn("slow"); //Muestra mensaje de error
			            return false;
				    }
			    	else 
			    	{
						
				    	$("#mensaje_logo_especies").fadeOut("slow"); //Muestra mensaje de error
				    	
				    }	

				     
	    	    });

		        $( "#nombre_especies" ).focus(function() {
					$("#mensaje_nombre").fadeOut("slow");

		        });
				$( "#logo_especies" ).focus(function() {
					$("#mensaje_logo_especies").fadeOut("slow");

				});	
			});
 		</script>


 		<script> 
			$(function(){
		      
		        $("#btn_limpiar").click(function(){

		        	$("#logo_especies").val('');
			    	$("#nombre_especies").val('');
			        

				     
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
       
  		 <form action="<?php echo $helper->url("Especies","Inserta"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-5">
        	    <h4>Insertar Especies</h4>
            	<hr/>
            	
		   		
            
             <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
	        
	        	<div class="row">
	        		<div class="col-xs-12 col-md-12"  >
	        			<p>
	        			Nombre Especie: 
	        			</p>
	        			<input type="text" name="nombre_especies" id="nombre_especies" value="<?php echo $resEdit->nombre_especies; ?>" class="form-control"/>
	        			<input type="hidden" name="id_especies" id="id_especies" value="<?php echo $resEdit->id_especies; ?>" class="form-control"/>
	        			<div id="mensaje_nombre" class="errores"></div>
	        		</div>
	        		
	        	</div>
	        	<div class="row">
	        		<div class="col-xs-12 col-md-12"  >
	        			<p>
	        				Logo  Especie:  
	        			</p>
	        				<input type="file" name="logo_especies" id="logo_especies" value="" class="form-control"/>
	        				<div id="mensaje_logo_especies" class="errores"></div>
	        		</div>
	        		
	        	</div>
	        
	            	
		      <input type="submit" id="btn_actualizar" name="btn_actualizar" value="Actualizar" class="btn btn-success"/>
              <input type="button" value="Limpiar" id="btn_limpiar" name="btn_limpiar"  class="btn btn-success" />   
		            
		            
            
		     <?php } } else {?>
		    		<div class="row">
	        		<div class="col-xs-12 col-md-12"  >
	        			<p>
	        			Nombre Especie: 
	        			</p>
	        			<input type="text" name="nombre_especies" id="nombre_especies" value="" class="form-control"/>
	        			<div id="mensaje_nombre" class="errores"></div>
	        		</div>
	        		
	        	</div>
	        		<div class="row">
	        		<div class="col-xs-12 col-md-12"  >
	        			<p>
	        				Logo  Especie:  
	        			</p>
	        				<input type="file" name="logo_especies" id="logo_especies" value="" class="form-control"/>
	        				
	        				<div id="mensaje_logo_especies" class="errores"></div>
	        		</div>
	        		
	        	</div>
	        
		     <input type="submit" id="btn_guardar" name="btn_guardar" value="Guardar" class="btn btn-success"/>
           <input type="button" value="Limpiar" id="btn_limpiar" name="btn_limpiar"  class="btn btn-success" />
		    
		            
		     <?php } ?>
		        
          
          </form>
       
       
        <div class="col-lg-7">
            <h4>Especies</h4>
            <hr/>
        </div>
       <form action="" method="get" >
        <section class="col-lg-7 usuario">
        <table class="table table-hover">
	         <tr class="info">
	    		<th style="text-align: left;  font-size: 14px;">Id</th>
	    		<th style="text-align: left;  font-size: 14px;">Nombre Especie</th>
	    		<th style="text-align: left;  font-size: 14px;">Logo Especie</th>
	    		<th style="text-align: left;  font-size: 14px;"></th>
	    		<th style="text-align: left;  font-size: 14px;"></th>
	  		</tr>
                <?php $registros = 1;?>
                 <?php foreach($resultSet as $res) {?>
	        		<tr>
	        		   
	                   <td style="font-size: 13px;"> <?php echo $registros; ?>  </td>
		               <td style="font-size: 13px;"> <?php echo $res->nombre_especies; ?>     </td> 
		               
		               <td style="font-size: 13px;"> <input type="image" name="image" src="view/DevuelveImagen.php?id_valor=<?php echo $res->id_especies; ?>&id_nombre=id_especies&tabla=especies&campo=logo_especies"  alt="<?php echo $res->id_especies; ?>" width="80" height="60" >      </td>
		               <td style="font-size: 13px;">
			           		<div class="right">
			                    <a href="<?php echo $helper->url("Especies","index"); ?>&id_especies=<?php echo $res->id_especies; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
			                </div>
			            
			             </td>
			             <td style="font-size: 13px;">   
			                	<div class="right">
			                    <a href="<?php echo $helper->url("Especies","borrarId"); ?>&id_especies=<?php echo $res->id_especies; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
			                </div>
			               
		               </td>
		    		</tr>
		    		<?php $registros ++?>
		        <?php } ?>
            
            <?php 
            
            //echo "<script type='text/javascript'> alert('Hola')  ;</script>";
            
            ?>
            
       	</table>     
      </section>
       </form>
        	<div class="col-lg-12">
  					
   		     <?php include("view/modulos/servicios.php"); ?>	
   			 
   		</div>     
  <?php include("view/modulos/beforefooter.php"); ?>
    		
        
   
     </body>  
    </html>   