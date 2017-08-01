
 <div class="head" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/headadmin.php"); ?>
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
 		
 			<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_guardar").click(function() 
			{
		    	 
		    	var nombre_unidades_medida = $("#nombre_unidades_medida").val();
		    	if (nombre_unidades_medida == "")
		    	{	$("#mensaje_nombre").text("Introduzca una Unidad de Medida");
		    		$("#mensaje_nombre").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
			    		$("#mensaje_nombre").fadeOut("slow"); //Muestra mensaje de error
		        }


			}); 
			$( "#nombre_unidades_medida" ).focus(function() {
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
    <body class="cuerpo">
    
        <div style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
     <?php include("view/modulos/menuadmin.php"); ?>
     </div>
       
  		 <form action="<?php echo $helper->url("UnidadesMedida","Inserta"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-6">
        	    <h4>Insertar Unidad de Medida</h4>
            	<hr/>
          <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
	         <div class="row">
				  <div class="col-xs-6 col-md-6">
				  	<p  class="formulario-subtitulo" >Unidad de Medida</p>
				  	<input type="text" name="nombre_unidades_medida" id="nombre_unidades_medida" value="<?php echo $resEdit->nombre_unidades_medida; ?>" class="form-control"/>
					<div id="mensaje_nombre" class="errores"></div>
				  </div>
			   </div>    
			
			 <hr>
			   
       		  <div class="row">
			  		<div class="col-xs-12 col-md-12" style="text-align: center;" >
			  			<input type="submit" id="btn_guardar" name="btn_guardar" value="Guardar" class="btn btn-success"/>
			  		</div>
				</div>     
                  
           
             <?php } } else {?>
	       <div class="row">
			  <div class="col-xs-6 col-md-6">
			  	<p  class="formulario-subtitulo" >Unidad de Medida </p>
			  	<input type="text" name="nombre_unidades_medida" id="nombre_unidades_medida" value="" class="form-control"/>
				<div id="mensaje_nombre" class="errores"></div>
			  </div>
			</div>
			  <hr>
		     
		
		 <hr>
		     <div class="row">
			  <div class="col-xs-12 col-md-12" style="text-align: center;" >
			  	<input type="submit" id="btn_guardar" name="btn_guardar" value="Guardar" class="btn btn-success"/>
			  </div>
			</div>     
                  
			<?php }?>    
	       
	     
          </form>
       
       
        <div class="col-lg-6">
            <h4>Unidades de Medida</h4>
            <hr/>
        </div>
       <form action="" method="get" >
        <section class="col-lg-6 usuario">
        <table class="table table-hover">
	         <tr class="info">
	    		<th style="text-align: left;  font-size: 13px;">Id</th>
	    		<th style="text-align: left;  font-size: 13px;">Unidad de Medida</th>
	    		
	    		<th style="text-align: left;  font-size: 13px;"></th>
	    		<th style="text-align: left;  font-size: 13px;"></th>
	  		</tr>
                <?php $registros = 1;?>
	            <?php foreach($resultSet as $res) {?>
	        		<tr>
	                   <td style="font-size: 13px;"> <?php echo $registros; ?>  </td>
		               <td style="font-size: 13px;"> <?php echo $res->nombre_unidades_medida; ?>     </td> 
		               <td style="font-size: 13px;">	
		               		<div class="right">
			                    <a href="<?php echo $helper->url("UnidadesMedida","index"); ?>&id_unidades_medida=<?php echo $res->id_unidades_medida; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
			                </div>
			            
			            </td>
			             <td style="font-size: 13px;">   
			                	<div class="right">
			                    <a href="<?php echo $helper->url("UnidadesMedida","borrarId"); ?>&id_unidades_medida=<?php echo $res->id_unidades_medida; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
			                </div>
			               
		                 </td>
		    		</tr>
		    		<?php $registros ++; ?>
		        <?php } ?>
  
            
       	</table>     
      </section>
       </form>
        	<div class="col-lg-12">
  					
   		     <?php include("view/modulos/servicios.php"); ?>	
   			
   		</div>     
  
         <?php include("view/modulos/beforefooter.php"); ?>
    		
   
     </body>  
    </html>   