<div class="head" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/headadmin.php"); ?>
 </div>

<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Usuarios  - Vademano 2015</title>
   
   		  	<link rel="stylesheet" href="view/css/bootstrap.css">
     <link rel="stylesheet" href="view/css/estilos.css">
  <script src="view/js/jquery.js"></script>
  <script src="view/js/bootstrapValidator.min.js"></script>
  <script src="view/js/noty.js"></script>
 		
 	 <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	
 		<script>

		$(document).ready(function(){

		    $fecha=$('#fecha_nacimiento_usuario');
		    if ($fecha[0].type!="date"){
		    $fecha.attr('readonly','readonly');
		    $fecha.datepicker({
	    		changeMonth: true,
	    		changeYear: true,
	    		dateFormat: "yy-mm-dd",
	    		yearRange: "1990:2017"
	    		});
		    }

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
		    	var id_rol = $("#id_rol").val();
		    	var id_estado = $("#id_estado").val();
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





		    	if (id_rol == "")
		    	{
			    	
		    		$("#mensaje_id_rol").text("Seleccione");
		    		$("#mensaje_id_rol").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_id_rol").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	if (id_estado == "")
		    	{
			    	
		    		$("#mensaje_id_estado").text("Seleccione");
		    		$("#mensaje_id_estado").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_id_estado").fadeOut("slow"); //Muestra mensaje de error
		            
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

				$( "#id_rol" ).focus(function() {
					$("#mensaje_id_rol").fadeOut("slow");
    			});
				$( "#id_estado" ).focus(function() {
					$("#mensaje_id_estado").fadeOut("slow");
    			});
				$( "#fecha_nacimiento_usuario" ).focus(function() {
					$("#mensaje_fecha_nacimiento").fadeOut("slow");
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
       
  
       
          <?php		   
		  ?>

       
       
  		 <form action="<?php echo $helper->url("Usuarios","index_dos"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
         <div class="col-lg-12 division"; style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px; "   >
         
         <?php if ($id_usuario > 0) { ?>
        	    <h4>Insertar Usuarios</h4>
            	<hr/>
            	
		   		
            
          <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
	       
		        
           
  			<div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="correo_usuario" class="control-label">Email:</label>
                                  <input type="email" class="form-control" id="correo_usuario" name="correo_usuario" value="<?php echo $resEdit->correo_usuario; ?>"  placeholder="Email" readonly>
                                  <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $resEdit->id_usuario;?>"  placeholder="Id">
                                  <div id="mensaje_correo" class="errores"></div>
            </div>
            
		    </div>
		    
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="ccorreo_usuario" class="control-label">Confirme Email:</label>
                                  <input type="email" class="form-control" id="ccorreo_usuario" name="ccorreo_usuario" value="<?php echo $resEdit->correo_usuario; ?>"  placeholder="Confirme Email" readonly>
                                 <div id="mensaje_ccorreo" class="errores"></div>
            </div>
		    </div>
			</div>
           
           
           
           <div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="nombres_usuario" class="control-label">Nombres:</label>
                                  <input type="text" class="form-control" id="nombres_usuario" name="nombres_usuario" value="<?php echo $resEdit->nombres_usuario; ?>"  placeholder="Nombres">
                                  <div id="mensaje_nombres" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="apellidos_usuario" class="control-label">Apellidos:</label>
                                  <input type="text" class="form-control" id="apellidos_usuario" name="apellidos_usuario" value="<?php echo $resEdit->apellidos_usuario; ?>"  placeholder="Apellidos">
                                   <div id="mensaje_apellidos" class="errores"></div>
            </div>
		    </div>
			</div>
         
			
			<div class="row">
			<div class="col-xs-6 col-md-6">
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
            
            <div class="col-xs-6 col-md-6" id="div_extra_ocupaciones_usuario" style="display: none;" >
		    <div class="form-group ">
		                          <label for="extra_ocupaciones_usuario" class="control-label">Especifique su Ocupación:</label>
                                  <input type="text" class="form-control" id="extra_ocupaciones_usuario" name="extra_ocupaciones_usuario" value="<?php echo $resEdit->extra_ocupacion_usuario; ?>"  placeholder="Ocupación">
                                  <span class="help-block"></span>
            </div>
		    </div>
            </div>
			
			
			 
            <div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="clave_usuario" class="control-label">Clave Usuario:</label>
                                  <input type="password" class="form-control" id="clave_usuario" name="clave_usuario" value=""  placeholder="Clave">
                                    <div id="mensaje_clave" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="cclave_usuario" class="control-label">Confirme Clave:</label>
                                  <input type="password" class="form-control" id="cclave_usuario" name="cclave_usuario" value=""  placeholder="Confirme Clave">
                                  <div id="mensaje_cclave" class="errores"></div>
            </div>
		    </div>
			</div>
			
			
			
			
			
			
            <div class="row">
			<div class="col-xs-6 col-md-6">
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
			
		    <div class="col-xs-6 col-md-6">
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
			<div class="col-xs-6 col-md-6">
		    <div class="form-group">
                                  <label for="id_rol" class="control-label">Rol:</label>
                                  <select name="id_rol" id="id_rol"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultRol as $res) {?>
										<option value="<?php echo $res->id_rol; ?>" <?php if ($res->id_rol == $resEdit->id_rol )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_rol; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_rol" class="errores"></div>
            </div>
            </div>
			
			<div class="col-xs-6 col-md-6">
		    <div class="form-group">
                                  <label for="id_estado" class="control-label">Estado:</label>
                                  <select name="id_estado" id="id_estado"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEst as $res) {?>
										<option value="<?php echo $res->id_estado; ?>" <?php if ($res->id_estado == $resEdit->id_estado )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_estado; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_estado" class="errores"></div>
            </div>
            </div>
			</div>
			
			<div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="fecha_nacimiento_usuario" class="control-label">Fecha Nacimiento:</label>
                                  <input type="date" class="form-control" id="fecha_nacimiento_usuario" name="fecha_nacimiento_usuario" data-date-format="YYYY-MM-DD" value="<?php echo $resEdit->fecha_nacimiento_usuario; ?>"  placeholder="Fecha Nacimiento">
                                   <div id="mensaje_fecha_nacimiento" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="telefono_usuario" class="control-label">Teléfono:</label>
                                  <input type="text" class="form-control" id="telefono_usuario" name="telefono_usuario" value="<?php echo $resEdit->telefono_usuario; ?>"  placeholder="Teléfono">
                                  <span class="help-block"></span>
            </div>
		    </div>
		    </div>
           
          <div class="row">
           <div class="col-xs-6 col-md-6">
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
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="correo_usuario" class="control-label">Email:</label>
                                  <input type="email" class="form-control" id="correo_usuario" name="correo_usuario" value="<?php echo $usuario_usuario;?>"  placeholder="Email" readonly>
                                   <input type="hidden" class="form-control" id="id_usuario" name="id_usuario" value="<?php echo $id_usuario;?>"  placeholder="Id">
                                  <div id="mensaje_correo" class="errores"></div>
            </div>
            </div>
		    
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="ccorreo_usuario" class="control-label">Confirme Email:</label>
                                  <input type="email" class="form-control" id="ccorreo_usuario" name="ccorreo_usuario" value="<?php echo $usuario_usuario;?>"  placeholder="Confirme Email" readonly>
                                  <div id="mensaje_ccorreo" class="errores"></div>
            </div>
		    </div>
			</div>
           
           
           
           <div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="nombres_usuario" class="control-label">Nombres:</label>
                                  <input type="text" class="form-control" id="nombres_usuario" name="nombres_usuario" value=""  placeholder="Nombres">
                                  <div id="mensaje_nombres" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="apellidos_usuario" class="control-label">Apellidos:</label>
                                  <input type="text" class="form-control" id="apellidos_usuario" name="apellidos_usuario" value=""  placeholder="Apellidos">
                                  <div id="mensaje_apellidos" class="errores"></div>
            </div>
		    </div>
			</div>
         
			
			<div class="row">
			<div class="col-xs-6 col-md-6">
		    <div class="form-group">
                                  <label for="ocupaciones" class="control-label">Ocupación:</label>
                                  <select name="ocupaciones" id="ocupaciones"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultOcu as $res) {?>
										<option value="<?php echo $res->id_ocupaciones; ?>"  ><?php echo $res->nombre_ocupaciones; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_ocupaciones" class="errores"></div>
            </div>
            
            </div>
            
            <div class="col-xs-6 col-md-6" id="div_extra_ocupaciones_usuario" style="display: none;" >
		    <div class="form-group ">
		                          <label for="extra_ocupaciones_usuario" class="control-label">Especifique su Ocupación:</label>
                                  <input type="text" class="form-control" id="extra_ocupaciones_usuario" name="extra_ocupaciones_usuario" value=""  placeholder="Ocupación">
                                  <span class="help-block"></span>
            </div>
		    </div>
            </div>
			
			
			 
            <div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="clave_usuario" class="control-label">Clave Usuario:</label>
                                  <input type="password" class="form-control" id="clave_usuario" name="clave_usuario" value=""  placeholder="Clave">
                                <div id="mensaje_clave" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="cclave_usuario" class="control-label">Confirme Clave:</label>
                                  <input type="password" class="form-control" id="cclave_usuario" name="cclave_usuario" value=""  placeholder="Confirme Clave">
                               <div id="mensaje_cclave" class="errores"></div>
            </div>
		    </div>
			</div>
			
			
			
			
			
			
            <div class="row">
			<div class="col-xs-6 col-md-6">
		    <div class="form-group">
                                  <label for="paises" class="control-label">Pais:</label>
                                  <select name="paises" id="paises"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultPais as $res) {?>
										<option value="<?php echo $res->id_pais; ?>" ><?php echo $res->nombre_pais; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_paises" class="errores"></div>
            </div>
            
            </div>
			
		    <div class="col-xs-6 col-md-6">
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
			<div class="col-xs-6 col-md-6">
		    <div class="form-group">
                                  <label for="id_rol" class="control-label">Rol:</label>
                                  <select name="id_rol" id="id_rol"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultRol as $res) {?>
										<option value="<?php echo $res->id_rol; ?>" ><?php echo $res->nombre_rol; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_rol" class="errores"></div>
            </div>
            </div>
			
			<div class="col-xs-6 col-md-6">
		    <div class="form-group">
                                  <label for="id_estado" class="control-label">Estado:</label>
                                  <select name="id_estado" id="id_estado"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEst as $res) {?>
										<option value="<?php echo $res->id_estado; ?>" ><?php echo $res->nombre_estado; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_estado" class="errores"></div>
            </div>
            </div>
			</div>
			
			<div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="fecha_nacimiento_usuario" class="control-label">Fecha Nacimiento:</label>
                                  <input type="date" class="form-control" id="fecha_nacimiento_usuario" name="fecha_nacimiento_usuario" value=""  placeholder="Fecha Nacimiento">
                                  <div id="mensaje_fecha_nacimiento" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="telefono_usuario" class="control-label">Teléfono:</label>
                                  <input type="text" class="form-control" id="telefono_usuario" name="telefono_usuario" value=""  placeholder="Teléfono">
                                 
            </div>
		    </div>
		    
		   
		    </div>
           
          <div class="row">
           <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="celular_usuario" class="control-label">Celular:</label>
                                  <input type="text" class="form-control" id="celular_usuario" name="celular_usuario" value=""  placeholder="Celular">
                                
            </div>
		    </div>
           </div>
        
            <div class="row">
		    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; margin-top: 20px;">
		    <div class="form-group">
                                  <button type="submit" id="btn_guardar" name="btn_guardar" class="btn btn-success">Afiliarse</button>
            </div>
		    </div>
		    </div>
        
		       
			<?php }?>    
	     
	      
	     
	     
	     
	      <?php } else { ?>
	      
	        
	        <?php echo "hola: ".$nombre_distribuidores;?>
	        <?php  }?>  
	        
	        </div>
          </form>
       
             	<div class="col-lg-12">
  					
   		     <?php include("view/modulos/servicios.php"); ?>	
   			 
   		</div>     
  <?php include("view/modulos/beforefooter.php"); ?>
    		
       
   
     </body>  
    </html>   