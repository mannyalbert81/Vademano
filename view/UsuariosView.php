<div class="head" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/headadmin.php"); ?>
 </div>

<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Usuarios - Vademano 2015</title>
   
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
		    $("#btn_agregar_usuario").click(function() 
			{
		    	var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		    	var nombre_usuario = $("#usuario_usuario").val();



		    	if (nombre_usuario == "")
		    	{
			    	
		    		$("#mensaje_nombre").text("Introduzca un correo");
		    		$("#mensaje_nombre").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else if (regex.test($('#usuario_usuario').val().trim()))
		    	{
		    		$("#mensaje_nombre").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	else 
		    	{
		    		$("#mensaje_nombre").text("Introduzca un correo Valido");
		    		$("#mensaje_nombre").fadeIn("slow"); //Muestra mensaje de error
		            return false;	
			    }



			    	    		    				    

			}); 
			$( "#usuario_usuario" ).focus(function() {
					$("#mensaje_nombre").fadeOut("slow");
    			});
		      
				    
		}); 

	</script>
	
	
	<script >
	/*
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_buscar").click(function() 
			{
		    	
		    	var contenido_busqueda = $("#contenido_busqueda").val();
		    	//var criterio_busqueda = $("#criterio_busqueda").val();
		    	if (contenido_busqueda == "")
		    	{
					
			    	$("#mensaje_contenido_busqueda").text("Introduzca un Contenido a Buscar");
		    		$("#mensaje_contenido_busqueda").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_contenido_busqueda").fadeOut("slow"); //Muestra mensaje de error
		            
			    }

		    	if (criterio_busqueda == 0)
		    	{
					
			    	$("#criterio_busqueda").text("Introduzca un Criterio de Busqueda");
		    		$("#criterio_busqueda").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#criterio_busqueda").fadeOut("slow"); //Muestra mensaje de error
		            
			    }

				
			    	    		    				    

			}); 
			$( "#contenido_busqueda" ).focus(function() {
					$("#mensaje_contenido_busqueda").fadeOut("slow");
    			});

			$( "#criterio_busqueda" ).focus(function() {
				$("#mensaje_criterio_busqueda").fadeOut("slow");
			});
	        
				    
		}); 
*/
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
       
  	    <div class="col-lg-6">
             <form action="<?php echo $helper->url("Usuarios","index_dos"); ?>" method="post"   class="col-lg-6">
            
              
			  <div class="col-xs-8 col-md-8"  >
				  <input type="email" id="usuario_usuario" name="usuario_usuario" value=""  placeholder="Correo Usuario" class="form-control"/>
				  <div id="mensaje_nombre" class="errores"></div>
			 </div>	
              <div class="col-xs-2 col-md-2"  >
				  	
				  	<button type="submit" id="btn_agregar_usuario" name="btn_agregar_usuario"  class="btn btn-primary"><span class="glyphicon glyphicon-plus	" ><?php echo "" ;?> </span></button>
			 </div>
           
           
        </div>
        
        </form>
       <form action="<?php echo $helper->url("Usuarios","index"); ?>" method="post" >
            
        <div class="col-lg-6">
	          <div class="col-xs-4 col-md-4 col-lg-4"  >
	          	<input type="text" class="form-control" name="contenido_busqueda" id="contenido_busqueda" placeholder="texto a buscar">
	          	<div id="mensaje_contenido_busqueda" class="errores"></div>
	          </div>
	          <div class="col-lg-4">
           <select name="criterio_busqueda" id="criterio_busqueda"  class="form-control">
                                    <?php foreach($resultMenu as $val=>$desc) {?>
                                         <option value="<?php echo $val ?>" <?php //if ($resRol->id_rol == $resEdit->id_rol )  echo  ' selected="selected" '  ;  ?> ><?php echo $desc ?> </option>
                                    <?php } ?>
                                        
           </select>
           <div id="mensaje_criterio_busqueda" class="errores"></div>
           </div>				   		
	          <div class="col-xs-4 col-md-4 col-lg-4"  >	
	          	<button type="submit" id="btn_buscar" name="btn_buscar" class="btn btn-primary"><span class="glyphicon glyphicon-search	" ><?php echo "" ;?> </span></button>
	          </div>
            
          
        </div>
       
      
       
         
        <table class="table table-hover">
	         <tr class="info">
	    		<th style="text-align: left;  font-size: 12px;">Id</th>
	    		<th style="text-align: left;  font-size: 12px;">Usuario</th>
	    		<th style="text-align: left;  font-size: 12px;">Nombres</th>
	    		<th style="text-align: left;  font-size: 12px;">Apellidos</th>
	    		<th style="text-align: left;  font-size: 12px;">Fecha Nacimineto</th>
	    		<th style="text-align: left;  font-size: 12px;">Pais</th>
	    		<th style="text-align: left;  font-size: 12px;">Provincia</th>
	    		<th style="text-align: left;  font-size: 12px;">Telefono</th>
	    		<th style="text-align: left;  font-size: 12px;">Celular</th>
	    		<th style="text-align: left;  font-size: 12px;">Correo</th>
	    		<th style="text-align: left;  font-size: 12px;">Rol</th>
	    		<th style="text-align: left;  font-size: 12px;">Estado</th>
	    		<th style="text-align: left;  font-size: 12px;">Ocupacion</th>
	    		<th style="text-align: left;  font-size: 12px;">Especificacion Ocupacion</th>
	    		<th style="text-align: left;  font-size: 12px;">Creado</th>
	    		<th style="text-align: left;  font-size: 12px;">Modificado</th>
	    		<th style="text-align: left;  font-size: 12px;"></th>
	    		<th style="text-align: left;  font-size: 12px;"></th>
	    		
	  		</tr>
                
	            <?php foreach($resultSet as $res) {?>
	        		<tr>
	                   <td style="font-size: 11px;"> <?php echo $res->id_usuario; ?>  </td>
		               <td style="font-size: 11px;"> <?php echo $res->usuario_usuario; ?>     </td>	
		               <td style="font-size: 11px;"> <?php echo $res->nombres_usuario; ?>     </td> 
		               <td style="font-size: 11px;"> <?php echo $res->apellidos_usuario; ?>     </td> 
		               <td style="font-size: 11px;"> <?php echo $res->fecha_nacimiento_usuario; ?>     </td>
		               <td style="font-size: 11px;"> <?php echo $res->nombre_pais; ?>     </td> 
		               <td style="font-size: 11px;"> <?php echo $res->nombre_provincia; ?>     </td>
		               <td style="font-size: 11px;"> <?php echo $res->telefono_usuario; ?>     </td>
		               <td style="font-size: 11px;"> <?php echo $res->celular_usuario; ?>     </td>
		               <td style="font-size: 11px;"> <?php echo $res->correo_usuario; ?>     </td>
		               <td style="font-size: 11px;"> <?php echo $res->nombre_rol; ?>     </td>
		               <td style="font-size: 11px;"> <?php echo $res->nombre_estado; ?>     </td>
		               <td style="font-size: 11px;"> <?php echo $res->nombre_ocupaciones; ?>     </td>
		               <td style="font-size: 11px;"> <?php echo $res->extra_ocupacion_usuario; ?>     </td>
		               <td style="font-size: 11px;"> <?php echo $res->creado; ?>     </td>
		               <td style="font-size: 11px;"> <?php echo $res->modificado; ?>     </td> 
		               
		               
		               <td>
			           		<div class="right">
			                    <a href="<?php echo $helper->url("Usuarios","index_dos"); ?>&id_usuario_edit=<?php echo $res->id_usuario; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
			                </div>
			            
			             </td>
			             <td>   
			                	<div class="right">
			                    <a href="<?php echo $helper->url("Usuarios","borrarId"); ?>&id_usuario=<?php echo $res->id_usuario; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
			                </div>
			                <hr/>
		               </td>
		               
		    		</tr>
		        <?php } ?>
            
            <?php 
            
           
            
            ?>
            
       	</table>     
       	 </form>
       <div> 
   		 <?php include("view/modulos/servicios.php"); ?>	
   		  </div>
   <div style="background-color: #7acb5a;">
   	 	 
    	 <footer class="col-lg-12" >
     	 	<?php include("view/modulos/footer.php"); ?>
    	 </footer>     
    	</div>
     </body>  
    </html>   