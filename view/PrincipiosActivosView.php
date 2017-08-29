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
    
  
       
  	    <div class="col-lg-6">
             <form action="<?php echo $helper->url("PrincipiosActivos","index_dos"); ?>" method="post">
                <div class="panel panel-info">
       		<div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-plus'></i> Nuevo Principio Activo</h4>
	         </div>
	         <div class="panel-body">
              <div class="col-xs-8 col-md-8"  >
				  <input type="text" id="nombre_composiciones" name="nombre_composiciones" value=""  placeholder="Nombre Principio" class="form-control"/>
				  <div id="mensaje_nombre" class="errores"></div>
			 </div>	
			 
              <div class="col-xs-2 col-md-2"  style="margin-top: 7px;" >
				  	<button type="submit" id="btn_agregar_composiciones" name="btn_agregar_composiciones"  class="btn btn-primary"><span class="glyphicon glyphicon-plus	" ><?php echo "" ;?> </span></button>
			 </div>
			 </div>
			 </div>
             </form>
            <div class="row">
	       <div class="col-xs-12 col-md-12">
		    <?php if ($existe == "true") {?><div class="alert alert-danger" role="alert">El Principio Activo <strong><?php echo $nombre_composiciones;?></strong> ya esta registrado en nuestro sistema.</div><?php }?>	
	        </div>
	         </div>
        </div>
         <form action="<?php echo $helper->url("PrincipiosActivos","index"); ?>" method="post">
          <div class="col-lg-6">  
            <div class="panel panel-info">
         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-search'></i> Buscar Principio Activo</h4>
	         </div>
	         <div class="panel-body"> 
        
	          <div class="col-xs-4 col-md-4"   >
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
            
            <hr/>
        </div>
        </div></div>
      
     
	    
        <section class="col-lg-12 usuario" >
        <table class="table table-hover">
	         <tr class="info">
	    		<th style="text-align: left;  font-size: 13px;">Id</th>
	    		<th style="text-align: left;  font-size: 13px;">Nombre Principio</th>
	    		<th style="text-align: left;  font-size: 13px;">Categoria Farmacologica</th>
	    		<th style="text-align: left;  font-size: 13px;">Forma Administracion</th>
	    		<th style="text-align: left;  font-size: 13px;">Mecanismo de Accion</th>
	    		<th style="text-align: left;  font-size: 13px;">Interacciones</th>
	    		<th style="text-align: left;  font-size: 13px;">Periodo Retirio</th>
	    		<th style="text-align: left;  font-size: 13px;"></th>
	    		<th style="text-align: left;  font-size: 13px;"></th>
	    		<th style="text-align: left;  font-size: 13px;"></th>
	  		</tr>
                <?php $registro = 1;?>
	            <?php foreach($resultSet as $res) {?>
	        		<tr>
	            	   <td style="font-size: 13px;"> <?php echo $registro; ?>     </td>
		               <td style="font-size: 13px;"> <?php echo $res->nombre_composiciones; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->categoria_farmacologica_composicion; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->forma_administracion_composiciones; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->mecanismo_accion_composiciones; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->interacciones_composiciones; ?>        </td> 
		               <td style="font-size: 13px;"> <?php echo $res->periodo_retirio_composiciones; ?>      </td>
		              <?php $registro ++ ;?> 
		               
		                <td>
			           		<div class="right">
			                    <a href="<?php echo $helper->url("Composiciones","VistaComposicionesOnline"); ?>&id_composiciones=<?php echo $res->id_composiciones; ?>" class="btn btn-info" target="_blank"><i class="glyphicon glyphicon-print"></i></a>
			                </div>
			            
			             </td>
		               <td style="font-size: 13px;">
			           		<div class="right">
			                    <a href="<?php echo $helper->url("PrincipiosActivos","index_dos"); ?>&id_composiciones_edit=<?php echo $res->id_composiciones; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
			                </div>
			            
			             </td>
			             <td style="font-size: 13px;">   
			                	<div class="right">
			                    <a href="<?php echo $helper->url("PrincipiosActivos","borrarId"); ?>&id_composiciones=<?php echo $res->id_composiciones; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
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
  					
   		     <?php include("view/modulos/beforefooter.php"); ?>
   			 
   		</div>     
 
    		
       
   
     </body>  
    </html>   