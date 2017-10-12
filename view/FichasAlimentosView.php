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
         
.contenedor-img {
width: 90px;
height: 75px;
float: left;
overflow: hidden;
position: relative;
text-align: center;
cursor: default;
background: #fff;
}
.contenedor-img .mascara,.contenedor-img .contenido {
width: 90px;
height: 75px;
position: absolute;
overflow: hidden;
top: 0;
left: 0
}
.contenedor-img img {
display: block;
position: relative;

}
.contenedor-img h6 {
text-transform: uppercase;
color: #fff;
text-align: center;
position: relative;
font-size: 12px;
padding: 10px;
background: rgba(0, 0, 0, 0.9);
margin: 20px 0 0 0
}
.contenedor-img p {
font-size: 12px;
position: relative;
color: #fff;
padding: 10px 20px 10px;
text-align: center
}
.contenedor-img a.link {
display: inline-block;
text-decoration: none;
padding: 7px 14px;
background: #222;
color: #fff;
text-transform: uppercase;
box-shadow: 0 0 1px #000
}
.contenedor-img a.link:hover {
box-shadow: 0 0 5px #000
}



/*Ejemplo 1*/
.ejemplo-1 img {
transition: all 0.2s linear;
}
.ejemplo-1 .mascara {
opacity: 0;
background-color: rgba(46,157,120, 0.7);
transition: all 0.3s ease-in-out;
}
.ejemplo-1 h6 {
transform: translateX(-200px);/*Desplazamos a la izquierda*/
opacity: 0;
transition: all 0.7s ease-in-out;
}
.ejemplo-1 p {
transform: translateX(200px);/*Desplazamos a la derecha*/
opacity: 0;
transition: all 0.4s linear;
}
.ejemplo-1 a.link{
opacity: 0;
transition: all 0.4s ease-in-out;
transform: translateY(100px)/*Desplazamos para abajo*/
}
.ejemplo-1:hover img {
transform: scale(1.1);/*Damos un ligero zoom a la imagen*/
}
.ejemplo-1:hover .mascara {
opacity: 1;
}
.ejemplo-1:hover h6,
.ejemplo-1:hover p,
.ejemplo-1:hover a.link {
opacity: 1;
transform: translateX(0px);/*Regresamos a las posiciones originales*/
}
.ejemplo-1:hover p {
transition-delay: 0.1s;
}
.ejemplo-1:hover a.link {
transition-delay: 0.2s; /*Aplicamos un pequeño retardo para que se muestre al final*/
transform: translateY(0px);
}
                
</style>
       
       
       
    </head>
    <body style="background-color: #FAFAFA;">
    
    
       
  	  
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
			  <div class="row">
	        <div class="col-xs-12 col-md-12">
		    <?php if ($existe == "true") {?><div class="alert alert-danger" role="alert">El Alimento <strong><?php echo $nombre_fichas;?></strong> ya esta Registrado en nuestro Sistema.</div><?php }?>	
	        </div>
	        </div>
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
	         <div class="col-lg-4" style="margin-top: 2px;">
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
	    		<th style="text-align: left;  font-size: 13px;">Id</th>
	    		<th style="text-align: left;  font-size: 13px;">Nombre Producto</th>
	    		<th style="text-align: left;  font-size: 13px;">Tipo Alimento</th>
	    		<th style="text-align: left;  font-size: 13px;">Ingredientes</th>
	    		<th style="text-align: left;  font-size: 13px;">Presentacion</th>
	    		<th style="text-align: left;  font-size: 13px;">Laboratorio</th>
	    		<th style="text-align: left;  font-size: 13px;">Registro Sanitario</th>
	    		<th style="text-align: left;  font-size: 13px;">Logo</th>
	    		
	    		<th style="text-align: left;  font-size: 13px;"></th>
	    		<th style="text-align: left;  font-size: 13px;"></th>
	    		<th style="text-align: left;  font-size: 13px;"></th>
	  		</tr>
                
	            <?php foreach($resultSet as $res) {?>
	        		<tr>
	                  
	                   <td style="font-size: 12px;"> <?php echo $res->id_fichas; ?>  </td>
		               <td style="font-size: 12px;"> <?php echo $res->nombre_fichas; ?>     </td> 
		               <td style="font-size: 12px;"> <?php echo $res->tipo_alimento_fichas; ?>     </td> 
		               <td style="font-size: 12px;"> <?php echo $res->ingredientes_fichas; ?>     </td>
		               <td style="font-size: 12px;"> <?php echo $res->presentacion_fichas; ?>     </td> 
		               <td style="font-size: 12px;"> <?php echo $res->nombre_laboratorio; ?>     </td> 
		               <td style="font-size: 12px;"> <?php echo $res->registro_sanitario_fichas; ?>     </td> 
		                <td style="font-size: 12px;"><div class="contenedor-img ejemplo-1"><img type="image" name="image" src="view/DevuelveImagen.php?id_valor=<?php echo $res->id_fichas; ?>&id_nombre=id_fichas&tabla=fichas_fotos&campo=foto_fichas_fotos"  alt="<?php echo $res->id_fichas_fotos; ?>" width="90" height="75" >      
				       <div class="mascara">  
			           <h6><?php echo $res->nombre_fichas; ?> </h6>  
			           </div>  
			           </div>
			         </td>
		               
		               <td>
			           		<div class="right">
			                    <a href="<?php echo $helper->url("FichasAlimentos","verFichaOnline"); ?>&id_fichas=<?php echo $res->id_fichas; ?>" class="btn btn-info" target="_blank"><i class="glyphicon glyphicon-eye-open"></i></a>
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
        	<div class="col-xs-12 col-md-12" style="margin-top: 51px;">
  					
   		     <?php include("view/modulos/beforefooter.php"); ?>	
   			 
   		</div>     
 
    		
       
   <span class="ir-arriba">^</span>
     </body>  
    </html>   