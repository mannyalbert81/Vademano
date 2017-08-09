<div class="head" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/headadmin.php"); ?>
 </div>

<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Fichas de Alimentos - Vademano 2015</title>
   
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
		    $("#btn_agregar_fichas").click(function() 
			{
		    	
		    	var nombre_fichas = $("#nombre_fichas").val();
		    
		    	if (nombre_fichas == "")
		    	{
					
			    	$("#mensaje_nombre").text("Introduzca un Nombre para este Producto");
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
	<script >
	/*
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_buscar").click(function() 
			{
		    	
		    	var contenido_busqueda = $("#contenido_busqueda").val();
		    	var criterio_busqueda = $("#criterio_busqueda").val();
		    	if (contenido_busqueda == "")
		    	{
					
			    	$("#contenido_busqueda").text("Introduzca un Contenido a Buscar");
		    		$("#contenido_busqueda").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#contenido_busqueda").fadeOut("slow"); //Muestra mensaje de error
		            
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


<script type="text/javascript">
		function mensaje(){
			
		  var respuesta = confirm('Seguro Desea Eliminar')
		   return respuesta;
		}
		
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
       
  	  
             <form action="<?php echo $helper->url("FichasAlimentos","index_dos"); ?>" method="post"   class="col-lg-6">
             
        <div class="panel panel-info">
         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-search'></i> Nueva Ficha de Alimentos</h4>
	         </div>
	         <div class="panel-body"> 
              
			  <div class="col-xs-8 col-md-8"  >
				  <input type="text" id="nombre_fichas" name="nombre_fichas" value=""  placeholder="Nombre del Alimento" class="form-control"/>
				  <div id="mensaje_nombre" class="errores"></div>
			 </div>	
              <div class="col-xs-2 col-md-2" style="margin-top: 7px;" >
				  	
				  	<button type="submit" id="btn_agregar_fichas" name="btn_agregar_fichas"  class="btn btn-primary"><span class="glyphicon glyphicon-plus	" ><?php echo "" ;?> </span></button>
			 </div></div></div>
             </form>
            
        
       
         <form action="<?php echo $helper->url("FichasAlimentos","index"); ?>" method="post">
       
        <div class="col-lg-6">
         <div class="panel panel-info">
         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-search'></i> Buscar Ficha de Alimentos</h4>
	         </div>
	         <div class="panel-body"> 
	          <div class="col-xs-4 col-md-4"  >
	          	<input type="search" class="form-control" name="contenido_busqueda" id="contenido_busqueda" placeholder="texto a buscar">
	          	<div id="mensaje_contenido_busqueda" class="errores"></div>
	          </div>
	         <div class="col-lg-4" style="margin-top: 4px;">
           <select name="criterio_busqueda" id="criterio_busqueda"  class="form-control">
                                    <?php foreach($resultMenu as $val=>$desc) {?>
                                         <option value="<?php echo $val ?>" <?php //if ($resRol->id_rol == $resEdit->id_rol )  echo  ' selected="selected" '  ;  ?> ><?php echo $desc ?> </option>
                                    <?php } ?>
                                        
           </select>
           <div id="mensaje_criterio_busqueda" class="errores"></div>
           </div>			   		
	          <div class="col-xs-4 col-md-4"  style="margin-top: 6px;">	
	          	<button type="submit" id="btn_buscar" name="btn_buscar" class="btn btn-primary"><span class="glyphicon glyphicon-search	" ><?php echo "" ;?> </span></button>
	          </div>
             </div>
            </div>
        </div>
        </form>
       <form action=""  >
        
        <table class="table table-hover">
	         <tr class="info">
	    		<th style="text-align: left;  font-size: 14px;"></th>
	    		<th style="text-align: left;  font-size: 14px;">Id</th>
	    		<th style="text-align: left;  font-size: 14px;">Nombre Producto</th>
	    		<th style="text-align: left;  font-size: 14px;">Tipo Alimento</th>
	    		<th style="text-align: left;  font-size: 14px;">Registro Sanitario</th>
	    		<th style="text-align: left;  font-size: 14px;">Indicaciones de Uso</th>
	    		<th style="text-align: left;  font-size: 14px;">Periodo de Retiro</th>
	    		<th style="text-align: left;  font-size: 14px;">Presentacion</th>
	    		<th style="text-align: left;  font-size: 14px;">Conservacion</th>
	    		<th style="text-align: left;  font-size: 14px;">Ingredientes</th>
	    		
	    		<th style="text-align: left;  font-size: 14px;"></th>
	    		<th style="text-align: left;  font-size: 14px;"></th>
	    		<th style="text-align: left;  font-size: 14px;"></th>
	  		</tr>
                
	            <?php foreach($resultSet as $res) {?>
	        		<tr>
	                  <td style="font-size: 13px;"> <input type="image" name="image" src="view/DevuelveImagen.php?id_valor=<?php echo $res->id_fichas_fotos; ?>&id_nombre=id_fichas_fotos&tabla=fichas_fotos&campo=foto_fichas_fotos"  alt="<?php echo $res->id_fichas_fotos; ?>" width="80" height="60" >      </td>
	                  
	                   <td style="font-size: 13px;"> <?php echo $res->id_fichas; ?>  </td>
		               <td style="font-size: 13px;"> <?php echo $res->nombre_fichas; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->tipo_alimento_fichas; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->registro_sanitario_fichas; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->indicaciones_uso_fichas; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->periodo_retiro_fichas; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->presentacion_fichas; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->conservacion_fichas; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->ingredientes_fichas; ?>     </td>
		               
		               <td>
			           		<div class="right">
			                    <a href="<?php echo $helper->url("FichasProductos","verFicha"); ?>&id_fichas=<?php echo $res->id_fichas; ?>" class="btn btn-info" target="_blank"><i class="glyphicon glyphicon-print"></i></a>
			                </div>
			            
			             </td>
		               
		               
		               <td>
			           		<div class="right">
			                    <a href="<?php echo $helper->url("FichasAlimentos","index_dos"); ?>&id_fichas_edit=<?php echo $res->id_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
			                </div>
			            
			             </td>
			             <td>   
			                	<div class="right">
			                    <a href="<?php echo $helper->url("FichasAlimentos","borrarId"); ?>&id_fichas=<?php echo $res->id_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
			                </div>
			                <hr/>
		               </td>
		               
		    		</tr>
		        <?php } ?>
            
            <?php 
            
            //echo "<script type='text/javascript'> alert('Hola')  ;</script>";
            
            ?>
            
       	</table>     
    
       </form>
        	<div class="col-lg-12">
  					
   		     <?php include("view/modulos/servicios.php"); ?>	
   			 
   		</div>     
  <?php include("view/modulos/beforefooter.php"); ?>
    		
       
   
     </body>  
    </html>   