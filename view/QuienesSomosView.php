 <div class="head menu" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/head.php"); ?>
 </div>
 
 <?php include("view/modulos/slide.php"); ?>
 

<!DOCTYPE HTML>
<html lang="es">
   	 <head>
        <meta charset="utf-8"/>
        <title>Quienes Somos - Vademano 2015</title>
        	<link rel="stylesheet" href="view/css/bootstrap.css">
           <script src="view/js/jquery.js"></script>
		  
		  <script src="view/js/bootstrapValidator.min.js"></script>
		  <script src="view/js/noty.js"></script>
		  <script src="view/js/ValidarQuienesSomos.js"></script>   
 
  <link rel="stylesheet" href="view/font-awesome/css/font-awesome.min.css">
  
   <script src="http://maps.google.com/maps/api/js?key=AIzaSyDyu4jW-edLYPnTIBRqHtUxisvp3NRVBps"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
     
         <style type="text/css">
		    #mapa{
		      border:1px solid red;
		   
		      height: 500px;
		        width: 100%;
		    }
		  </style>
		  
    <style type="text/css">

 h4 {
	    font-size: 25px;
	    font-style: verdana;
	    color:#696969;
	    text-decoration:none;
	    text-shadow: -0px -0px 0px #101010, 0px 1px 0px #505050;
	  }
	</style>
	
	
	
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
	 
 		
   	 </head>
   
   
   
     <body class="cuerpo" >
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">	
    	
    <form id="form-mensajes" action="<?php echo $helper->url("Mensajes","index"); ?>" method="post" class="col-lg-12 col-md-12 col-xs-12">
   	
   			<div class="row" style="margin-top: 40px;" >
			  <div class="col-xs-12 col-md-1 col-lg-1">
			  </div>
			  
			  <div>
			  <div class="col-xs-12 col-md-10 col-lg-10" style=" background-color: #fbfbfb; border-radius: 5px 5px 5px 5px;"> 
				  <div class="col-xs-12 col-md-6 col-lg-6" style="margin-top: 20px; " >
				  	<div style="text-align:justify; ">
				    	<div class="media">
				
						  <div class="media-body">
						    <div>
						    	<h4 class="media-heading"    >Quienes Somos </h4>
						    	<br>
						    </div>
						    	<p>
						    	  <strong>VADEMANO</strong>, somos un equipo de profesionales ecuatorianos comprometidos con el sector productivo
						    	  nacional en el desarrollo de servicios y herramientas para satisfacer las necesidades de nuestros
						    	  clientes con eficiencia y eficacia.
						    	  
						    	  <br><br>
								  <strong>MISIÓN:</strong>
								  <br><br>
								  <strong>VADEMANO</strong> es una empresa proveedora de servicios de información científico-técnica actualizada permanentemente,
								   alcanzando la excelencia en nuestras actividades, con productos innovadores que respondan en forma rápida y sensible a las
								   necesidades de los clientes; favoreciendo el crecimiento integral de nuestros proveedores, de la comunidad ecuatoriana;
								   promoviendo la protección medio ambiental.
								  
								  <br><br>
								  <strong>VISIÓN:</strong>
								  <br><br>
								  Para el año 2025 seremos una empresa con servicio y atención de categoría internacional,
								  líderes en la innovación y presentación de productos digitales,
								  con una planificación y organización adecuada que responda a los retos de los usuarios y de la competencia,
								  siendo preferidos por la calidad, disponibilidad, confiabilidad de la información entregada.
								    
								  <br><br>
								  <strong>VALORES CORPORATIVOS:</strong>
								     <br><br>  
					                ·         Ética profesional
									 <br>
									·         Responsabilidad
									 <br>
									·         Lealtad
									 <br>
									·         Puntualidad
									 <br>
									·         Liderazgo
									 <br>
									·         Excelencia en el servicio
							    </p>
						  </div>
						</div>
				    	
					</div>   
				
					 <div class="row">
		            	<div class="col-xs-12 col-md-6 col-lg-6">
		            	  <div id="mapa" name="mapa" style="height:200px;border:2px solid green;"></div>
		
		            	</div>
		            	<div class="col-xs-12 col-md-6 col-lg-6">
		            		<hr>
		            	  	<p class="contacto">   <span class="glyphicon glyphicon-road fa-spin" aria-hidden="true"></span>  Edif. MAGAP Piso 9</p>
					  		<p class="contacto">   <span class="glyphicon glyphicon-globe fa-spin" aria-hidden="true"></span> Quito – Ecuador</p>
					  		<p class="contacto">   <span class="glyphicon glyphicon-phone-alt fa-spin" aria-hidden="true"></span> (+59)2 436 4566 - (+59)3 987 968 467</p>
					  		<p class="contacto">   <span class="glyphicon glyphicon-comment fa-spin" aria-hidden="true"></span> Skype: vademano</p>
					  		<p class="contacto">  <span class="glyphicon glyphicon-envelope fa-spin" aria-hidden="true"></span> info@vademano.com</p>
					        <hr>    	  	
		            	</div>
		            </div>	
				  	
				  </div>
				  <div class="col-lg-6 col-md-6 col-xs-12">
				  
           <h4 >Enviar Mensaje</h4>
            <hr/>
           <?php if (isset($resultado)) {?>
        	<?php if ($resultado == "true") {?>
        	
	        	  <div class="alert alert-success" role="alert">Tu mensaje se envio <strong> correctamente </strong>, Responderemos tu mensaje al correo que ingresaste.</div>
				
			<?php }else {?>
				  <div class="alert alert-danger" role="alert">Ocurrio un error al enviar su mensaje, vuelva a intentarlo.</div>
				
			<?php }} ?>
			
			<div class="row">
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                             <label id="nombres_usuario"  class="control-label">Nombres:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-address-book" ></i></span>
							  <input class="form-control" type="text" id="nombres_usuario" name="nombres_usuario" placeholder="Nombres">
							</div>
							<span class="help-block"></span>
							</div>
            
            
            </div>
		    
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                             <label for="apellidos_usuario" class="control-label">Apellidos:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-address-book-o"></i></span>
							  <input class="form-control" type="text" id="apellidos_usuario" name="apellidos_usuario" placeholder="Apellidos">
							</div>
                        	<span class="help-block" ></span>
							</div>
            
		    </div>
			</div>
			
			
		
		    
		    <div class="row">
			<div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                                  <label for="paises" class="control-label">Pais:</label>
                                  <select name="paises" id="paises"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultPais as $res) {?>
										<option value="<?php echo $res->id_pais; ?>" ><?php echo $res->nombre_pais; ?> </option>
							        <?php } ?>
								   </select> 
                                 <span class="help-block" ></span>
            </div>
            
            </div>
			
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                                  <label for="provincias" class="control-label">Provincia:</label>
                                  <select name="provincias" id="provincias"  class="form-control" >
                                  <option value=""> -- SIN ESPECIFICAR -- </option>
								   </select> 
                            <span class="help-block" ></span>
            </div>
            
            </div>
			</div>		
	  		
	  		<div class="row">
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                             <label for="telefono_usuario" class="control-label">Teléfono:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-volume-control-phone"></i></span>
							  <input class="form-control" type="text" id="telefono_usuario" name="telefono_usuario" placeholder="Teléfono">
							</div>							
							</div>
            
            
            </div>
		    
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                             <label for="celular_usuario" class="control-label">Celular:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
							  <input class="form-control" type="text" id="celular_usuario" name="celular_usuario" placeholder="Celular">
							</div>                        	
							</div>
            
		    </div>
			</div>
			

        	
        			
        	<div class="row">        	
        	  
		    <div class="col-xs-12 col-md-12 col-lg-12">
		    <div class="form-group">
                             <label for="correo_usuario" class="control-label">Email:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							  <input class="form-control" type="email" id="correo_usuario" name="correo_usuario" placeholder="Email">
							</div>
                        	<span class="help-block" ></span>
							</div>
            
		    </div>        	
            </div>
            
             <div class="row">
	         <div class="col-xs-12 col-md-12 col-lg-12">
		     <div class="form-group ">
		                          <label for="mensaje" class="control-label">Mensaje:</label>
                                  <textarea type="text"  class="form-control" id="mensaje" name="mensaje" value=""  placeholder="Mensaje"></textarea>
                                  <span class="help-block" ></span>
			 
             </div>
		     </div>
	  		 </div> 
           
	   		
		    
		    
		     <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; ">
						    <div class="col-xs-12 col-md-4 col-lg-4" style="text-align: center;">
						    </div>
						     <div class="col-xs-12 col-md-4 col-lg-4" style="text-align: center;">
						      <div class="form-group">
						      
				                    <button type="submit" id="btn_guardar" value="" name="btn_guardar" class="btn btn-info btn-block" ><i class="fa fa-unlock fa-spin" aria-hidden="true"></i> Enviar</button>
				          
				            </div>
						    </div>
						     <div class="col-xs-12 col-md-4 col-lg-4" style="text-align: center;">
						    </div>
						    </div>
		     	  </div>
				  </div>
				  </div>
				  
			  
			  <div class="col-xs-12 col-md-1 col-lg-1">
			  </div>
			</div>
   	
   	  </form>
   	
   	 <br>
   	 
   		  
   		  <div class="col-xs-12 col-md-12 col-lg-12">
   		 <?php include("view/modulos/small_slide.php"); ?>
   		 </div>
   		  <br>
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
   	 	<span class="ir-arriba">^</span>
    </body>
</html>