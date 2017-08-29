<div class="head menu" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/headadmin.php"); ?>
 </div>
<div class="menu1" >
     <?php include("view/modulos/menuadmin.php"); ?>
     </div>
<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Distribuidores - Vademano 2015</title>
   
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
		    $("#btn_agregar_distribuidor").click(function() 
			{
		    	
		    	var nombre_distribuidores = $("#nombre_distribuidores").val();
		    
		    	if (nombre_distribuidores == "")
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
			$( "#nombre_distribuidores" ).focus(function() {
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
    
      
       
  	   
             <form action="<?php echo $helper->url("Distribuidores","index_dos"); ?>" method="post"   class="col-lg-6">
             
             <div class="panel panel-info">
            <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-plus'></i> Nuevo Distribuidor</h4>
	         </div>
	         <div class="panel-body">
              
			  <div class="col-xs-8 col-md-8"  >
				  <input type="text" id="nombre_distribuidores" name="nombre_distribuidores" value=""  placeholder="Nombre Distribuidor" class="form-control"/>
				  <div id="mensaje_nombre" class="errores"></div>
			 </div>	
              <div class="col-xs-2 col-md-2"  style="margin-top: 7px;">
				  	
				  	<button type="submit" id="btn_agregar_distribuidor" name="btn_agregar_distribuidor"  class="btn btn-primary"><span class="glyphicon glyphicon-plus	" ><?php echo "" ;?> </span></button>
			 </div>
			 </div>
			 </div>
			<div class="row">
	        <div class="col-xs-12 col-md-12">
		    <?php if ($existe == "true") {?><div class="alert alert-danger" role="alert">El Distribuidor <strong><?php echo $nombre_distribuidores;?></strong> ya esta registrado en nuestro sistema.</div><?php }?>	
	        </div>
	        </div>
            </form>
           
      
       
        <form action="<?php echo $helper->url("Distribuidores","index"); ?>" method="post" >
            
        <div class="col-lg-6">
       
         <div class="panel panel-info">
         <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-search'></i> Buscar Distribuidores</h4>
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
	          <div class="col-xs-4 col-md-4" style="margin-top: 6px;" >	
	          	<button type="submit" id="btn_buscar" name="btn_buscar" class="btn btn-primary"><span class="glyphicon glyphicon-search	" ><?php echo "" ;?> </span></button>
	          </div>
            
            <hr/>
        </div>
        </div>
        </div>
        
        </form>
        
       <form action=""  >
        <section class="col-lg-12 usuario">
        <table class="table table-hover">
	         <tr class="info">
	    		<th style="text-align: left;  font-size: 14px;">Id</th>
	    		<th style="text-align: left;  font-size: 14px;">Nombre Distribuidor</th>
	    		<th style="text-align: left;  font-size: 14px;">Persona Contacto</th>
	    		<th style="text-align: left;  font-size: 14px;">Telefono Persona Contacto</th>
	    		<th style="text-align: left;  font-size: 14px;">Email Distribuidor</th>
	    		<th style="text-align: left;  font-size: 14px;">Web Distribuidor</th>
	    		<th style="text-align: left;  font-size: 14px;">Contactos</th>
	    		<th style="text-align: left;  font-size: 14px;">Logo</th>
	    		<th style="text-align: left;  font-size: 14px;"></th>
	    		<th style="text-align: left;  font-size: 14px;"></th>
	    		<th style="text-align: left;  font-size: 14px;"></th>
	  		  </tr>
                <?php $registros = 1; ?>
	            <?php foreach($resultSet as $res) {?>
	        		<tr>
	                   <td style="font-size: 13px;"> <?php echo $registros; ?>  </td>
					   <td style="font-size: 13px;"> <?php echo $res->nombre_distribuidores; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->persona_contacto_distribuidores; ?>     </td> 
					   <td style="font-size: 13px;"> <?php echo $res->telefono_persona_contacto_distribuidores; ?>     </td>
		               <td style="font-size: 13px;"> <?php echo $res->email_distribuidores; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->web_distribuidores; ?>     </td> 
		               <td style="font-size: 13px;"> <?php echo $res->nombre_direcciones; ?>     </td>           
		               <td style="font-size: 13px;"> <input type="image" name="image" src="view/DevuelveImagen.php?id_valor=<?php echo $res->id_distribuidores; ?>&id_nombre=id_distribuidores&tabla=distribuidores&campo=logo_distribuidores"  alt="<?php echo $res->nombre_distribuidores; ?>" width="80" height="60" >      </td>
		              
		              <td>
			           		<div class="right">
			                    <a href="<?php echo $helper->url("Distribuidores","VistaDistribuidoresOnline"); ?>&id_distribuidores=<?php echo $res->id_distribuidores; ?>" class="btn btn-info" target="_blank"><i class="glyphicon glyphicon-print"></i></a>
			                </div>
			            
			             </td>
		               <td style="font-size: 13px;">
			           		<div class="right">
			                    <a href="<?php echo $helper->url("Distribuidores","index_dos"); ?>&id_distribuidores_edit=<?php echo $res->id_distribuidores; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
			                </div>
			            
			             </td>
			             <td style="font-size: 13px;">   
			                	<div class="right">
			                    <a href="<?php echo $helper->url("Distribuidores","borrarId"); ?>&id_distribuidores=<?php echo $res->id_distribuidores; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
			                </div>
			                <hr/>
		               </td>
		              
		    		</tr>
		    		<?php $registros ++; ?>
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
  
    		
   <span class="ir-arriba">^</span>
     </body>  
    </html>   