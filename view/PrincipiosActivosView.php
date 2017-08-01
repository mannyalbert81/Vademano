 <div class="head" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
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
 		
 		<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_agregar_composiciones").click(function() 
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
    
     <div style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
     <?php include("view/modulos/menuadmin.php"); ?>
     </div>
       
  	    <div class="col-lg-6">
             <form action="<?php echo $helper->url("PrincipiosActivos","index_dos"); ?>" method="post"   class="col-lg-6">
            
              
			  <div class="col-xs-8 col-md-8"  >
				  <input type="text" id="nombre_composiciones" name="nombre_composiciones" value=""  placeholder="Nombre Principio" class="form-control"/>
				  <div id="mensaje_nombre" class="errores"></div>
			 </div>	
              <div class="col-xs-2 col-md-2"  >
				  	
				  	<button type="submit" id="btn_agregar_composiciones" name="btn_agregar_composiciones"  class="btn btn-primary"><span class="glyphicon glyphicon-plus	" ><?php echo "" ;?> </span></button>
			 </div>
             </form>
            <hr/>
        </div>
         <form action="<?php echo $helper->url("PrincipiosActivos","index"); ?>" method="post">
           
        <div class="col-lg-6">
	          <div class="col-xs-4 col-md-4"  >
	          	<input type="search" class="form-control" name="contenido_busqueda" id="contenido_busqueda" placeholder="texto a buscar">
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
	          <div class="col-xs-4 col-md-4"  >	
	          	<button type="submit" id="btn_buscar" name="btn_buscar" class="btn btn-primary"><span class="glyphicon glyphicon-search	" ><?php echo "" ;?> </span></button>
	          </div>
            
            <hr/>
        </div>
       </form>
       <form action=""  >
        <section class="col-lg-12 usuario" >
        <table class="table table-hover">
	         <tr class="info">
	    		<th style="text-align: left;  font-size: 13px;">Id</th>
	    		<th style="text-align: left;  font-size: 13px;">Nombre Principio</th>
	    		<th style="text-align: left;  font-size: 13px;">Categoria Farmacologica</th>
	    		<th style="text-align: left;  font-size: 13px;">Subcategoria Farmacologica</th>
	    		<th style="text-align: left;  font-size: 13px;">Indicaciones de Uso</th>
	    		<th style="text-align: left;  font-size: 13px;">Forma Administracion</th>
	    		<th style="text-align: left;  font-size: 13px;">Efectos Secundarioses</th>
	    		<th style="text-align: left;  font-size: 13px;">Mecanismo de Accion</th>
	    		<th style="text-align: left;  font-size: 13px;">Precausiones</th>
	    		<th style="text-align: left;  font-size: 13px;">Interacciones</th>
	    		<th style="text-align: left;  font-size: 13px;">Contraindicaciones</th>
	    		<th style="text-align: left;  font-size: 13px;">Periodo Retirio</th>
	    		<th style="text-align: left;  font-size: 13px;"></th>
	    		<th style="text-align: left;  font-size: 13px;"></th>
	  		</tr>
                <?php $registro = 1;?>
	            <?php foreach($resultSet as $res) {?>
	        		<tr>
	            	   <td style="font-size: 13px;"> <?php echo $registro; ?>     </td>
		               <td style="font-size: 13px;"> <?php echo $res->nombre_composiciones; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->categoria_farmacologica_composicion; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->subcategoria_farmacologica_composiciones; ?>     </td>
		               <td style="font-size: 13px;"> <?php echo $res->indicaciones_uso_composiciones; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->forma_administracion_composiciones; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->efectos_secundarios_composiciones; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->mecanismo_accion_composiciones; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->precausiones_composiociones; ?>     </td>
		               <td style="font-size: 13px;"> <?php echo $res->interacciones_composiciones; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->contraindicaciones_composiciones; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->periodo_retirio_composiciones; ?>     </td>
		              <?php $registro ++ ;?> 
		               <td style="font-size: 13px;">
			           		<div class="right">
			                    <a href="<?php echo $helper->url("PrincipiosActivos","index_dos"); ?>&id_composiciones_edit=<?php echo $res->id_composiciones; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
			                </div>
			            
			             </td>
			             <td style="font-size: 13px;">   
			                	<div class="right">
			                    <a href="<?php echo $helper->url("PrincipiosActivos","borrarId"); ?>&id_composiciones=<?php echo $res->id_composiciones; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
			                </div>
			                <hr/>
		               </td>
		               
		    		</tr>
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