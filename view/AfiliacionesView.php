<div class="head menu" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/head.php"); ?>
</div>
<?php include("view/modulos/slide.php"); ?>
<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Afiliaciones - Vademano 2015</title>
 	 	<link rel="stylesheet" href="view/css/bootstrap.css">
           <script src="view/js/jquery.js"></script>
		  <script src="view/js/bootstrapValidator.min.js"></script>
		  <script src="view/js/noty.js"></script>
		  <script src="view/js/ValidarAfiliaciones.js"></script>   
          <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
     
    
    <link rel="stylesheet" href="view/font-awesome/css/font-awesome.min.css">
    
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyDyu4jW-edLYPnTIBRqHtUxisvp3NRVBps"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
     
	<style type="text/css">

 h4 {
	    font-size: 25px;
	    font-style: verdana;
	    color:#696969;
	    text-decoration:none;
	    text-shadow: -0px -0px 0px #101010, 0px 1px 0px #505050;
	  }
	</style>
	
		<script>
		$(document).ready(function(){
		    $fecha=$('#fecha_nacimiento_usuario');
		    if ($fecha[0].type!="date"){
		    $fecha.attr('readonly','readonly');
		    $fecha.datepicker({
	    		changeMonth: true,
	    		changeYear: true,
	    		dateFormat: "yy-mm-dd",
	    		yearRange: "1900:2017"
	    		});
		    }

		   

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
	
 
 			
    </head>
    
    <body class="cuerpo">
    <form  id="form-afiliaciones" action="<?php echo $helper->url("Afiliaciones","InsertaAfiliados"); ?>" method="post" class="col-lg-12 col-md-12 col-xs-12">
      
    	  <div class="row" style="margin-top: 20px;" >
    	 
			  <div class="col-xs-12 col-md-1 col-lg-1">
			  </div>
			  
			  <div>
			  <div class="col-xs-12 col-md-10 col-lg-10" style=" background-color: #fbfbfb; border-radius: 5px 5px 5px 5px;"> 
				  <div class="col-xs-12 col-md-6 col-lg-6" style="margin-top: 30px; " >
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
					<hr> 
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
				  	<hr>
				  </div>
			  <div class="col-lg-6 col-md-6 col-xs-12 division" style=" margin-top: 20px">
            <h4>Afiliación</h4>
         
           <?php if (isset($resultado)) {?>
        	<?php if ($resultado == "true") {?>
        	
	        	  <div class="alert alert-success" role="alert">Tu afiliacion se realizo <strong> correctamente </strong>, Enviamos a tu emil la informacion necesaria para el acceso al sistema.</div>
				
			<?php }else {?>
				  <div class="alert alert-danger" role="alert">Ocurrio un error al realizar su afiliacion, vuelva a intentarlo.</div>
				
			<?php } ?>
	        
           <?php }  ?>
		     
            <?php if (!empty($resultEdit)) { foreach($resultEdit as $resEdit) {?>
           
           
           
  			<div class="row">
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group ">
		                          <label for="correo_usuario" class="control-label">Email:</label>
                                  <input type="email" class="form-control" id="correo_usuario" name="correo_usuario" value="<?php echo $resEdit->correo_usuario; ?>"  placeholder="Email">
                                 <div id="mensaje_correo" class="errores"></div>
            </div>
            
		    </div>
		    
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group ">
		                          <label for="ccorreo_usuario" class="control-label">Confirme Email:</label>
                                  <input type="email" class="form-control" id="ccorreo_usuario" name="ccorreo_usuario" value="<?php echo $resEdit->correo_usuario; ?>"  placeholder="Confirme Email">
                                 <div id="mensaje_ccorreo" class="errores"></div>
            </div>
		    </div>
			</div>
           
           
           
           <div class="row">
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group ">
		                          <label for="nombres_usuario" class="control-label">Nombres:</label>
                                  <input type="text" class="form-control" id="nombres_usuario" name="nombres_usuario" value="<?php echo $resEdit->nombres_usuario; ?>"  placeholder="Nombres">
                                  <div id="mensaje_nombres" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group ">
		                          <label for="apellidos_usuario" class="control-label">Apellidos:</label>
                                  <input type="text" class="form-control" id="apellidos_usuario" name="apellidos_usuario" value="<?php echo $resEdit->apellidos_usuario; ?>"  placeholder="Apellidos">
                                   <div id="mensaje_apellidos" class="errores"></div>
            </div>
		    </div>
			</div>
         
			
			<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                                  <label for="ocupaciones" class="control-label">Ocupación:</label>
                                  <select name="ocupaciones" id="ocupaciones"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultOcu as $res) {?>
										<option value="<?php echo $res->id_ocupaciones; ?>" <?php if ($res->id_ocupaciones == $resEdit->id_ocupaciones )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_ocupaciones; ?> </option>
							        <?php } ?>
								   </select> 
                                   <div id="mensaje_ocupaciones" class="errores"></div>
            </div>
            </div>
            
            <div class="col-xs-12 col-md-6 col-lg-6" id="div_extra_ocupaciones_usuario" style="display: none;" >
		    <div class="form-group ">
		                          <label for="extra_ocupaciones_usuario" class="control-label">Especifique su Ocupación:</label>
                                  <input type="text" class="form-control" id="extra_ocupaciones_usuario" name="extra_ocupaciones_usuario" value="<?php echo $resEdit->extra_ocupacion_usuario; ?>"  placeholder="Ocupación">
                                  <span class="help-block"></span>
            </div>
		    </div>
            </div>
			
			
			 
            <div class="row">
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group ">
		                          <label for="clave_usuario" class="control-label">Clave Usuario:</label>
                                  <input type="password" class="form-control" id="clave_usuario" name="clave_usuario" value=""  placeholder="Clave">
                                    <div id="mensaje_clave" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group ">
		                          <label for="cclave_usuario" class="control-label">Confirme Clave:</label>
                                  <input type="password" class="form-control" id="cclave_usuario" name="cclave_usuario" value=""  placeholder="Confirme Clave">
                                  <div id="mensaje_cclave" class="errores"></div>
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
										<option value="<?php echo $res->id_pais; ?>" <?php if ($res->id_pais == $resEdit->id_pais )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_pais; ?> </option>
							        <?php } ?>
								   </select> 
                                    <div id="mensaje_paises" class="errores"></div>
            </div>
            </div>
			
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                                  <label for="provincias" class="control-label">Provincia:</label>
                                  <select name="provincias" id="provincias"  class="form-control" >
                                  <option value=""> -- SIN ESPECIFICAR -- </option>
								   </select> 
                                  <div id="mensaje_provincias" class="errores"></div>
            </div>
            </div>
			</div>
			
			
			<div class="row">
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group ">
		                          <label for="fecha_nacimiento_usuario" class="control-label">Fecha Nacimiento:</label>
                                  <input type="date" class="form-control" id="fecha_nacimiento_usuario" name="fecha_nacimiento_usuario" data-date-format="YYYY-MM-DD" value="<?php echo $resEdit->fecha_nacimiento_usuario; ?>"  placeholder="Fecha Nacimiento">
                                   <div id="mensaje_fecha_nacimiento" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group ">
		                          <label for="telefono_usuario" class="control-label">Teléfono:</label>
                                  <input type="text" class="form-control" id="telefono_usuario" name="telefono_usuario" value="<?php echo $resEdit->telefono_usuario; ?>"  placeholder="Teléfono">
                                  <span class="help-block"></span>
            </div>
		    </div>
		    </div>
           
          <div class="row">
           <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group ">
		                          <label for="celular_usuario" class="control-label">Celular:</label>
                                  <input type="text" class="form-control" id="celular_usuario" name="celular_usuario" value="<?php echo $resEdit->celular_usuario; ?>"  placeholder="Celular">
                                  <span class="help-block"></span>
            </div>
		    </div>
           </div>
        
            <div class="row">
		    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; margin-top: 20px;">
		    <div class="form-group">
                                  <button type="submit" id="btn_guardar" name="btn_guardar" class="btn btn-success">Actualizar</button>
            </div>
		    </div>
		    </div>
        
        
          
           
             <?php } } else {?>
			
			 

  			<div class="row">
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                             <label for="correo_usuario" class="control-label">Email:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
							  <input class="form-control" type="email" id="correo_usuario" name="correo_usuario" placeholder="Email">
							</div>
							<span class="help-block"></span>
							</div>
            
            
            </div>
		    
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                             <label for="ccorreo_usuario" class="control-label">Confirme Email:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
							  <input class="form-control" type="email" id="ccorreo_usuario" name="ccorreo_usuario" placeholder="Confirme Email">
							</div>
                        	<span class="help-block "></span>
							</div>
            
		    </div>
			</div>
           
           
           
           <div class="row">
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    
		    <div class="form-group">
                             <label for="nombres_usuario" class="control-label">Nombres:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
							  <input class="form-control" type="text" id="nombres_usuario" name="nombres_usuario" placeholder="Nombres">
							</div>
                            <span class="help-block "></span>
							</div>
		    </div>
		    
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                             <label for="apellidos_usuario" class="control-label">Apellidos:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
							  <input class="form-control" type="text" id="apellidos_usuario" name="apellidos_usuario" placeholder="Apellidos">
							</div>
                            <span class="help-block " ></span>
							</div>
		    
		    </div>
			</div>
         
			
			<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                                  <label for="ocupaciones" class="control-label">Ocupación:</label>
                                  <select name="ocupaciones" id="ocupaciones"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultOcu as $res) {?>
										<option value="<?php echo $res->id_ocupaciones; ?>"  ><?php echo $res->nombre_ocupaciones; ?> </option>
							        <?php } ?>
								   </select> 
                                  <span class="help-block"></span>
            </div>
            
            </div>
            
            <div class="col-xs-12 col-md-6 col-lg-6" id="div_extra_ocupaciones_usuario" style="display: none;" >
		    <div class="form-group">
                             <label for="extra_ocupaciones_usuario" class="control-label">Especifique su Ocupación:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-folder-open"></i></span>
							  <input class="form-control" type="text" id="extra_ocupaciones_usuario" name="extra_ocupaciones_usuario" placeholder="Ocupación">
							</div>
                        	</div>
		    
		    </div>
            </div>
			
				
			 
            <div class="row">
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                             <label for="clave_usuario" class="control-label">Clave Usuario:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
							  <input class="form-control" type="password" id="clave_usuario" name="clave_usuario" placeholder="Clave">
							</div>
                            <span class="help-block"></span>
							</div>
		    
		    </div>
		    
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                             <label for="cclave_usuario" class="control-label">Confirme Usuario:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
							  <input class="form-control" type="password" id="cclave_usuario" name="cclave_usuario" placeholder="Confirme Clave">
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
                                  <span class="help-block"></span>
            </div>
            
            </div>
			
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                                  <label for="provincias" class="control-label">Provincia:</label>
                                  <select name="provincias" id="provincias"  class="form-control" >
                                  <option value=""> -- SIN ESPECIFICAR -- </option>
								   </select> 
                             <span class="help-block"></span>
            </div>
            
            </div>
			</div>
			
			
			<div class="row">
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    <div class="form-group">
                             <label for="fecha_nacimiento_usuario" class="control-label">Fecha Nacimiento:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							  <input class="form-control" type="date" id="fecha_nacimiento_usuario" name="fecha_nacimiento_usuario" placeholder="Fecha Nacimiento">
							</div>
                            <span class="help-block"></span>
							</div>
		    
		    </div>
		    
		    <div class="col-xs-12 col-md-6 col-lg-6">
		    
		    <div class="form-group">
                             <label for="telefono_usuario" class="control-label">Teléfono:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-tablet"></i></span>
							  <input class="form-control" type="text" id="telefono_usuario" name="telefono_usuario" placeholder="Teléfono">
							</div>
                          </div>
		    </div>
		    
		   
		    </div>
           
          <div class="row">
           <div class="col-xs-12 col-md-6 col-lg-6">
		     <div class="form-group">
                             <label for="celular_usuario" class="control-label">Celular:</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-tablet"></i></span>
							  <input class="form-control" type="text" id="celular_usuario" name="celular_usuario" placeholder="Celular">
							</div>
                          </div>
		    </div>
           </div>
           
          
           
          
		    
		     <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; ">
						    <div class="col-xs-12 col-md-4 col-lg-4" style="text-align: center;">
						    </div>
						     <div class="col-xs-12 col-md-4 col-lg-4" style="text-align: center;">
						      <div class="form-group">
						      
				                    <button type="submit" id="btn_guardar" name="btn_guardar" class="btn btn-success btn-block"><i class="fa fa-lock fa-spin" aria-hidden="true"></i> Afiliarse</button>
           
				            </div>
						    </div>
						     <div class="col-xs-12 col-md-4 col-lg-4" style="text-align: center;">
						    </div>
						    </div>
		    
        
           
		<?php }?>    
	               	
		  
			  <br>
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