<div class="head" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/head.php"); ?>
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
  
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	
	
   <script src="http://maps.google.com/maps/api/js?key=AIzaSyDyu4jW-edLYPnTIBRqHtUxisvp3NRVBps"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
     
		
 	
 		


 		<script >
		$(document).ready(function(){
		    // cada vez que se cambia el valor del combo
		    $("#paises").change(function() {
				
               // 
                var $provincias = $("#provincias");
               // lo vaciamos
               
				///obtengo el id seleccionado
				
               var id_pais = $(this).val();
               $provincias.empty();
               
               if(id_pais > 0)
               {
            	   
            	   var datos = {
            			   id_pais : $(this).val()
                   };
                  $provincias.append("<option value= " +"" +" > --SIN ESPECIFICAR--</option>");
            	     
            	   $.post("<?php echo $helper->url("Provincias","devuelveProvincias"); ?>", datos, function(resultProv) {
            		 		$.each(resultProv, function(index, value) {
            		 		$provincias.append("<option value= " +value.id_provincia +" >" + value.nombre_provincia  + "</option>");	
                       		 });
            		 		 	 		   
            		  }, 'json');
               }
               else
               {
            	  
               }
               
		    });
		   
		   
		    
		}); 
	</script>

	
 		<script >
		$(document).ready(function(){
		    // cada vez que se cambia el valor del combo
		    $("#ocupaciones").click(function() {
				
               
               var id_ocupaciones = $(this).val();
				
               
               if(id_ocupaciones > 5)
               {
            	   $("#div_extra_ocupaciones_usuario").fadeIn("slow");
               }
            	
               else
               {
            	   $("#div_extra_ocupaciones_usuario").fadeOut("slow");
               }
               
		    });
		    $("#ocupaciones").change(function() {
	               var id_ocupaciones = $(this).val();
					
	               
	               if(id_ocupaciones > 5)
	               {
	            	   $("#div_extra_ocupaciones_usuario").fadeIn("slow");
	               }
	            	
	               else
	               {
	            	   $("#div_extra_ocupaciones_usuario").fadeOut("slow");
	               }
	               
			    });
				
		   
		   
		    
		}); 
	</script>
	
 
 		<script >
 		
		$(document).ready(function(){
			
		    // cada vez que se cambia el valor del combo
		    $("#btn_guardar").click(function() 
			{
		    	var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		    	var validaFecha = /([0-9]{4})\-([0-9]{2})\-([0-9]{2})/;
		    	 
		    	var correo_usuario = $("#correo_usuario").val();
		    	var ccorreo_usuario = $("#ccorreo_usuario").val();
		    	var clave_usuario = $("#clave_usuario").val();
		    	var cclave_usuario = $("#cclave_usuario").val();	
		    	var nombres_usuario = $("#nombres_usuario").val();
		    	var apellidos_usuario = $("#apellidos_usuario").val();
		    	var ocupaciones = $("#ocupaciones").val();
		    	var paises = $("#paises").val();
		    	var provincias = $("#provincias").val();
		    	
		    	var telefono_usuario = $("#telefono_usuario").val();
		    	var celular_usuario = $("#celular_usuario").val();
				
		    	
				var fecha_nacimiento_usuario = $("#fecha_nacimiento_usuario").val(); 	
					
		    	if (correo_usuario == "")
		    	{
			    	
		    		$("#mensaje_correo").text("Introduzca un correo");
		    		$("#mensaje_correo").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else if (regex.test($('#correo_usuario').val().trim()))
		    	{
		    		$("#mensaje_correo").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	else 
		    	{
		    		$("#mensaje_correo").text("Introduzca un correo Valido");
		    		$("#mensaje_correo").fadeIn("slow"); //Muestra mensaje de error
		            return false;	
			    }
		    	if (ccorreo_usuario == "")
		    	{
					
			    	$("#mensaje_ccorreo").text("Introduzca un correo");
		    		$("#mensaje_ccorreo").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else if (regex.test($('#ccorreo_usuario').val().trim()))
		    	{
		    		$("#mensaje_ccorreo").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	else 
		    	{
		    		$("#mensaje_ccorreo").text("Introduzca un correo Valido");
		    		$("#mensaje_ccorreo").fadeIn("slow"); //Muestra mensaje de error
		            return false;	
			    }
		    	if (correo_usuario != ccorreo_usuario)
		    	{
			    	
		    		$("#mensaje_ccorreo").text("Correos no Coinciden");
		    		$("#mensaje_ccorreo").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
				
				//nombre y apellidos
				
		    	if (nombres_usuario == "")
		    	{
			    	
		    		$("#mensaje_nombres").text("Introduzca un Nombre");
		    		$("#mensaje_nombres").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_nombres").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
		    	if (apellidos_usuario == "")
		    	{
			    	
		    		$("#mensaje_apellidos").text("Introduzca un Apellido");
		    		$("#mensaje_apellidos").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_apellidos").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	if (ocupaciones == "")
		    	{
			    	
		    		$("#mensaje_ocupaciones").text("Seleccione");
		    		$("#mensaje_ocupaciones").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_ocupaciones").fadeOut("slow"); //Muestra mensaje de error
		            
				}
				
						    	
				//la clave
		    	if (clave_usuario == "")
		    	{
		    		
		    		$("#mensaje_clave").text("Introduzca una Clave");
		    		$("#mensaje_clave").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_clave").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
		    	if (cclave_usuario == "")
		    	{
		    		
		    		$("#mensaje_cclave").text("Introduzca una Clave");
		    		$("#mensaje_cclave").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_cclave").fadeOut("slow"); 
		            
				}
		    	
		    	if (clave_usuario != cclave_usuario)
		    	{
			    	
		    		$("#mensaje_cclave").text("Correos no Coinciden");
		    		$("#mensaje_cclave").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else
		    	{
		    		$("#mensaje_cclave").fadeOut("slow"); 
			        
		    	}	
		    	if (paises == "")
		    	{
			    	
		    		$("#mensaje_paises").text("Seleccione");
		    		$("#mensaje_paises").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_paises").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	if (provincias == "")
		    	{
			    	
		    		$("#mensaje_provincias").text("Seleccione");
		    		$("#mensaje_provincias").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_provincias").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
				// la fecha
				if ((fecha_nacimiento_usuario.match(validaFecha)) && (fecha_nacimiento_usuario!='')) 
				{
			       $("#mensaje_fecha_nacimiento").fadeOut("slow");
			    } 
				else 
				{
		    		$("#mensaje_fecha_nacimiento").text("Fecha Incorrecta");
		    		$("#mensaje_fecha_nacimiento").fadeIn("slow"); //Muestra mensaje de error	
			       return false;
			    }
				//los telefonos
		    	
		    			    				    
			}); 
				
				$( "#correo_usuario" ).focus(function() {
					$("#mensaje_correo").fadeOut("slow");
    			});
		
				$( "#ccorreo_usuario" ).focus(function() {
					$("#mensaje_ccorreo").fadeOut("slow");
    			});
				$( "#nombres_usuario" ).focus(function() {
					$("#mensaje_nombres").fadeOut("slow");
    			});
				$( "#apellidos_usuario" ).focus(function() {
					$("#mensaje_apellidos").fadeOut("slow");
    			});
				$( "#ocupaciones" ).focus(function() {
					$("#mensaje_ocupaciones").fadeOut("slow");
    			});
				$( "#clave_usuario" ).focus(function() {
					$("#mensaje_clave").fadeOut("slow");
    			});
				$( "#cclave_usuario" ).focus(function() {
					$("#mensaje_cclave").fadeOut("slow");
    			});
				$( "#paises" ).focus(function() {
					$("#mensaje_paises").fadeOut("slow");
    			});
				$( "#provincias" ).focus(function() {
					$("#mensaje_provincias").fadeOut("slow");
    			});
				
				$( "#fecha_nacimiento_usuario" ).focus(function() {
					$("#mensaje_fecha_nacimiento").fadeOut("slow");
    			});
				
		      
				    
		}); 
	</script>
 		
 		
    </head>
    
    <body class="cuerpo">
    <form  action="<?php echo $helper->url("ConsultaTecnica","index"); ?>" method="post" class="col-lg-12">
    
    	  <div class="row" style="margin-top: 20px;" >
    	 
    	 
			  <div class="col-xs-1 col-md-1">
			  </div>
			  
			  <div>
			  <div class="col-xs-10 col-md-10" style=" background-color: #fbfbfb; border-radius: 5px 5px 5px 5px;"> 
			
			  <div class="col-lg-12 division" style=" margin-top: 20px">
            		  <div class="col-lg-6 col-md-6 col-xs-6">
				  
            <h4 >Enviar Consulta</h4>
            <hr/>
           
		    
            <div class="row">
            	<div class="col-xs-6 col-md-6">
            	  <p class="formulario-subtitulo">Nombres</p>
            	</div>
            	<div class="col-xs-6 col-md-6">
            	  <p class="formulario-subtitulo">Apellidos</p>
            	</div>
            </div>	
		    <div class="row">
            	<div class="col-xs-6 col-md-6">
            	  <input type="text" name="nombres_mensajes"  class="form-control"/>
            	</div>
            	<div class="col-xs-6 col-md-6">
            	  <input type="text" name="apellidos_mensajes"  class="form-control"/>
            	</div>
            </div>	
		    
		    <div class="row">
            	<div class="col-xs-6 col-md-6">
            	  <p class="formulario-subtitulo">Pais</p>
            	</div>
            	<div class="col-xs-6 col-md-6">
            	  <p class="formulario-subtitulo">Provincia</p>
            	</div>
            </div>		
	  		<div class="row">
            	<div class="col-xs-6 col-md-6">
            	  	<select name="paises" id="paises"  class="form-control" style="	width: 200px;">
						<?php foreach($resultPais as $resPais) {?>
							<option value="<?php echo $resPais->id_pais; ?>"  ><?php echo $resPais->nombre_pais; ?> </option>
			            <?php } ?>
					</select>
            	</div>
            	<div class="col-xs-6 col-md-6">
            	  	<select name="provincias" id="provincias"  class="form-control" style="	width: 200px;">
						
							<option value="0"  > -- SIN ESPECIFICAR -- </option>
			            
					</select>
            	</div>
            </div>		
	  		
	  		 <div class="row">
            	<div class="col-xs-6 col-md-6">
            	  <p class="formulario-subtitulo">Telefono</p>
            	</div>
            	<div class="col-xs-6 col-md-6">
            	  <p class="formulario-subtitulo">Celular</p>
            	</div>
            </div>    		
        	<div class="row">
            	<div class="col-xs-6 col-md-6">
            	  <input type="text" name="telefono_mensajes"  class="form-control"   />
            	</div>
            	<div class="col-xs-6 col-md-6">
            	  <input type="text" name="celular_mensajes"  class="form-control"   />
            	</div>
            </div>    		
        	 <div class="row">
            	<div class="col-xs-12 col-md-12">
            	  <p class="formulario-subtitulo">Email</p>
            	</div>
            	
            </div>
	  		 <div class="row">
            	<div class="col-xs-12 col-md-12">
            	  <input type="email" name="email_mensajes"  class="form-control"   />
            	</div>
            	
            </div>
	  		 <div class="row">
            	<div class="col-xs-12 col-md-12">
            	  <p class="formulario-subtitulo">Mensaje</p>
            	</div>
            	
            </div>
             <div class="row">
            	<div class="col-xs-12 col-md-12">
            	  <textarea rows="4" name="mensaje_mensajes" class="form-control" ></textarea>
            	</div>
            	
            </div>
            <br>
	   		<div class="row">
            	<div class="col-xs-12 col-md-12" style="text-align: center;">
            	  <input type="submit" value="Enviar" class="btn btn-success"/>
            	</div>
            	
            </div>
		<br>
     
				  </div>
         
           <?php if (isset($resultado)) {?>
        	<?php if ($resultado == "true") {?>
        	
	        	  <div class="alert alert-success" role="alert">Tu afiliacion se realizo <strong> correctamente </strong>, Enviamos a tu emil la informacion necesaria para el acceso al sistema.</div>
				
			<?php }else {?>
				  <div class="alert alert-danger" role="alert">Ocurrio un error al realizar su afiliacion, vuelva a intentarlo.</div>
				
			<?php } ?>
	        
           <?php }  ?>
		     
          
	      <?php if (!empty($nombre_fichas)) {?>
				<h4>Consulta Técnica <?php echo $nombre_fichas;?></h4>
			<?php }  ?>
			  
			  
           </div>
				
				  </div>
				  
				  </div>
				  
			  
			  <div class="col-xs-1 col-md-1">
			  
			  
			  </div>
			  
			</div>
			
			
    	
     
</form>     
        <div> 
   		 <?php include("view/modulos/servicios.php"); ?>	
   		  </div>
   		  
   		 <div style="margin-top: 20px; background-color: #4bae4f;">
   		 <?php include("view/modulos/small_slide.php"); ?>
   		 </div>
   		 
   		 <div style="background-color: #7acb5a;">
   	 	 <footer class="col-lg-12">
     	 	<?php include("view/modulos/footer.php"); ?>
    	 </footer> 
		 </div>
    	  <script type="text/javascript">
	    var mapa = new GMaps({
	      el: '#mapa',
	      lat: -1.666618,
	      lng: -78.174819,
	      zoom:7
	    });
	   
	   
	    
	  </script> 
   	 	
     </body>  
    	
    	
    	
    	
    	
    	
    	
    </html>   