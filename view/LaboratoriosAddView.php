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
        <title>Laboratorios - Vademano 2015</title>
   
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
		    $("#btn_guardar").click(function() 
			{
		    	var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		    	 
		    	var nombre_laboratorios = $("#nombre_laboratorios").val();
		    	var email_laboratorios = $("#email_laboratorios").val();
		    	
		    	if (nombre_laboratorios == "")
		    	{
					
			    	$("#mensaje_nombre").text("Introduzca un Nombre");
		    		$("#mensaje_nombre").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_nombre").fadeOut("slow"); //Muestra mensaje de error
		            
			    }


			    
		    	if (regex.test($('#email_laboratorios').val().trim()))
		    	{
		    		$("#mensaje_email").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	else 
		    	{
		    		$("#mensaje_email").text("Introduzca un correo Valido");
		    		$("#mensaje_email").fadeIn("slow"); //Muestra mensaje de error
		            return false;	
			    }
			    
				
			}); 
			$( "#nombre_laboratorios" ).focus(function() {
					$("#mensaje_nombre").fadeOut("slow");
    			});
		
				$( "#email_laboratorios" ).focus(function() {
					$("#mensaje_email").fadeOut("slow");
    			});
				
		      
				    
		}); 

	</script>


		<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_actualizar").click(function() 
			{
		    	var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		    	 
		    	var nombre_laboratorios = $("#nombre_laboratorios").val();
		    	var email_laboratorios = $("#email_laboratorios").val();
		    	
		    	if (nombre_laboratorios == "")
		    	{
					
			    	$("#mensaje_nombre").text("Introduzca un Nombre");
		    		$("#mensaje_nombre").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_nombre").fadeOut("slow"); //Muestra mensaje de error
		            
			    }


			    
		    	if (regex.test($('#email_laboratorios').val().trim()))
		    	{
		    		$("#mensaje_email").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	else 
		    	{
		    		$("#mensaje_email").text("Introduzca un correo Valido");
		    		$("#mensaje_email").fadeIn("slow"); //Muestra mensaje de error
		            return false;	
			    }
			    
				

	    		    				    

			}); 
			$( "#nombre_laboratorios" ).focus(function() {
					$("#mensaje_nombre").fadeOut("slow");
    			});
		
				$( "#email_laboratorios" ).focus(function() {
					$("#mensaje_email").fadeOut("slow");
    			});
				
		      
				    
		}); 

	</script>
	
	
		<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_agregar_direcciones").click(function() 
			{
		    	 
		    	var id_provincia = $("#id_provincia").val();
		    	var id_canton = $("#id_canton").val();
		    	
		    	
		    	if (id_provincia == "")
		    	{
					
			    	$("#mensaje_provincia").text("Seleccione");
		    		$("#mensaje_provincia").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_provincia").fadeOut("slow"); //Muestra mensaje de error
		            
			    }


			    
		    	
			    
				if (id_canton == "")
				{
					$("#mensaje_canton").text("Seleccione");
		    		$("#mensaje_canton").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_canton").fadeOut("slow"); //Muestra mensaje de error    
				}

	    		    				    

			}); 
			$( "#id_provincia" ).focus(function() {
					$("#mensaje_provincia").fadeOut("slow");
    			});
		
				$( "#id_canton" ).focus(function() {
					$("#mensaje_canton").fadeOut("slow");
    			});
				
		      
				    
		}); 

	</script>
	
	
	
	
	
	<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#id_provincia").change(function() {
				
               // 
               var $canton = $("#id_canton");
               $canton.empty();	
               var id_provincia = $(this).val();
               if(id_provincia > 0)
               {
            	   var datos = {
            			   id_provincia : $(this).val()
                   };

            	   $canton.append("<option value= " +"" +" > --SIN ESPECIFICAR--</option>");
            	   $.post("<?php echo $helper->url("Provincias","devuelveCanton"); ?>", datos, function(resultCan) {

            		 		$.each(resultCan, function(index, value) {
            		 		$canton.append("<option value= " +value.id_canton +" >" + value.nombre_canton  + "</option>");	
                       		 });

            		 		 	 		   
            		  }, 'json');


               }
               else
               {
            	  
               }
               
		    });


		   
		   
		    
		}); 

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
    
    
       
          <?php
           $sel_id_laboratorios = "";
		   $sel_nombre_laboratorios = "";
		   $sel_persona_contacto_laboratorios = "";
		   $sel_telefono_persona_contacto_laboratorios = "";
		   $sel_email_laboratorios = "";
		   $sel_web_laboratorios = "";
		   
		   if ($nuevo_laboratorios)
		   {
		   
		   }
		   else
		   {
			   	if($_SERVER['REQUEST_METHOD']=='POST' )
			   	{
			   		$sel_id_laboratorios = $_POST['id_laboratorios'];
			   		$sel_nombre_laboratorios = $_POST['nombre_laboratorios'];
			   		$sel_persona_contacto_laboratorios = $_POST['persona_contacto_laboratorios'];
			   		$sel_telefono_persona_contacto_laboratorios = $_POST['telefono_persona_contacto_laboratorios'];
			   		$sel_email_laboratorios = $_POST['email_laboratorios'];
			   		$sel_web_laboratorios = $_POST['web_laboratorios'];
			   	}
			   
			   	if($_SERVER['REQUEST_METHOD']=='GET' )
			   	{
			   		
			   		if ($resultEdit !="" ) {
			   		
			   		}
			   		else 
			   		{
				   		$sel_id_laboratorios = $_GET['id_laboratorios'];
				   		$sel_nombre_laboratorios = $_GET['nombre_laboratorios'];
				   		$sel_persona_contacto_laboratorios = $_GET['persona_contacto_laboratorios'];
				   		$sel_telefono_persona_contacto_laboratorios = $_GET['telefono_persona_contacto_laboratorios'];
				   		$sel_email_laboratorios = $_GET['email_laboratorios'];
				   		$sel_web_laboratorios = $_GET['web_laboratorios'];
			   		}
			   		
			   	}
			
		   }
		   
		   	
		?>

       
       
  		 <form action="<?php echo $helper->url("Laboratorios","index_dos"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
            <div class="col-lg-12 division"; style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px; "   >
       
         <?php if ($id_laboratorios > 0) { ?>
        	    <h4>Insertar Laboratorios</h4>
            	<hr/>
            	
		   		
            
          <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
	       
			 
       	   	<div class="row">
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="nombre_laboratorios" class="control-label">Nombre Laboratorios:</label>
                                  <input type="text" class="form-control" id="nombre_laboratorios" name="nombre_laboratorios" value="<?php if (!empty($resEdit)){  echo $resEdit->nombre_laboratorios;} else {echo $sel_nombre_laboratorios;} ?>"  placeholder="Nombre Laboratorios" readonly>
                                  <input type="hidden" name="id_laboratorios" id="id_laboratorios" value="<?php if (!empty($resEdit)){ echo $resEdit->id_laboratorios;}  else {echo $sel_id_laboratorios;}   ?>" class="form-control"/>
								  <input type="hidden" name="tipo_direcciones" id="tipo_direcciones" value="2" class="form-control"/>
				 				  <div id="mensaje_nombre" class="errores"></div>
            </div>
            </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="persona_contacto_laboratorios" class="control-label">Nombre Persona Contacto:</label>
                                  <input type="text" class="form-control" id="persona_contacto_laboratorios" name="persona_contacto_laboratorios" value="<?php if (!empty($resEdit)){ echo $resEdit->persona_contacto_laboratorios; } else {echo $sel_persona_contacto_laboratorios;}    ?>"  placeholder="Nombre Persona Contacto">
            </div>
		    </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="telefono_persona_contacto_laboratorios" class="control-label">Telefono Persona Contacto:</label>
                                  <input type="text" class="form-control" id="telefono_persona_contacto_laboratorios" name="telefono_persona_contacto_laboratorios" value="<?php if (!empty($resEdit)){  echo $resEdit->telefono_persona_contacto_laboratorios; } else {echo $sel_telefono_persona_contacto_laboratorios;}   ?>"  placeholder="Telefono Persona Contacto">
            </div>
		    </div>
			</div>
       	     
       	     
       	     <?php if(!empty($resultEditDir)){foreach($resultEditDir as $resEditDir) {?>
       	    
       	    <div class="row">
       	    <div class="col-xs-2 col-md-2">
		    <div class="form-group">
                                  <label for="id_provincia" class="control-label">Provincia Laboratorio:</label>
                                  <select name="id_provincia" id="id_provincia"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultProv as $res) {?>
										<option value="<?php echo $res->id_provincia; ?>" <?php if ($res->id_provincia == $resEditDir->id_provincia )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_provincia; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_provincia" class="errores"></div>
            </div>
            </div>
            
            <div class="col-xs-2 col-md-2">
		    <div class="form-group">
                                  <label for="id_canton" class="control-label">Canton Laboratorio:</label>
                                  <select name="id_canton" id="id_canton"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultCan as $res) {?>
										<option value="<?php echo $res->id_canton; ?>" <?php if ($res->id_canton == $resEditDir->id_canton )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_canton; ?> </option>
							        <?php } ?>
								   </select> 
                             <div id="mensaje_canton" class="errores"></div>
            </div>
            </div>
            
            <div class="col-xs-2 col-md-2">
		    <div class="form-group ">
		                          <label for="telefono_direcciones" class="control-label">Teléfono Laboratorio:</label>
                                  <input type="text" class="form-control" id="telefono_direcciones" name="telefono_direcciones" value="<?php echo $resEditDir->telefono_direcciones; ?>"  placeholder="Teléfono Laboratorio">
             					  <input type="hidden" name="id_direcciones" id="id_direcciones" value="<?php echo $resEditDir->id_direcciones;   ?>" class="form-control"/>
								  <div id="mensaje_telefono_direcciones" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-2 col-md-2">
		    <div class="form-group ">
		                          <label for="celular_direcciones" class="control-label">Celular Laboratorio:</label>
                                  <input type="text" class="form-control" id="celular_direcciones" name="celular_direcciones" value="<?php echo $resEditDir->celular_direcciones; ?>"  placeholder="Celular Laboratorio">
                                  <div id="mensaje_celular_direcciones" class="errores"></div>
            </div>
		    </div>
            <div class="col-xs-3 col-md-3">
		    <div class="form-group ">
		                          <label for="direccion_direcciones" class="control-label">Dirección Laboratorio:</label>
                                  <input type="text" class="form-control" id="direccion_direcciones" name="direccion_direcciones" value="<?php echo $resEditDir->direccion_direcciones; ?>"  placeholder="Dirección Laboratorio">
                                  <div id="mensaje_direccion_direcciones" class="errores"></div>
            </div>
		    </div>
		    
		   
		   
		    <div class="col-xs-1 col-md-1" style="text-align: center; margin-top: 23px;">
		    <div class="form-group">
                                  <button type="submit" id="btn_agregar_direcciones" name="btn_agregar_direcciones" class="btn btn-success">Actualizar</button>
            </div>
		    </div>
		    </div>
       	    
       	    
       	    
       	    
       	    <?php }} else {?>
       	    
       	    <div class="row">
       	    <div class="col-xs-2 col-md-2">
		    <div class="form-group">
                                  <label for="id_provincia" class="control-label">Provincia Laboratorio:</label>
                                  <select name="id_provincia" id="id_provincia"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultProv as $res) {?>
										<option value="<?php echo $res->id_provincia; ?>"  ><?php echo $res->nombre_provincia; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_provincia" class="errores"></div>
            </div>
            </div>
            
            <div class="col-xs-2 col-md-2">
		    <div class="form-group">
                                  <label for="id_canton" class="control-label">Canton Laboratorio:</label>
                                  <select name="id_canton" id="id_canton"  class="form-control" >
                                  <option value=""> -- SIN ESPECIFICAR -- </option>
								   </select> 
                             <div id="mensaje_canton" class="errores"></div>
            </div>
            </div>
            
            <div class="col-xs-2 col-md-2">
		    <div class="form-group ">
		                          <label for="telefono_direcciones" class="control-label">Teléfono Laboratorio:</label>
                                  <input type="text" class="form-control" id="telefono_direcciones" name="telefono_direcciones" value=""  placeholder="Teléfono Laboratorio">
             					  <input type="hidden" name="id_direcciones" id="id_direcciones" value="0" class="form-control"/>
								  <div id="mensaje_telefono_direcciones" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-2 col-md-2">
		    <div class="form-group ">
		                          <label for="celular_direcciones" class="control-label">Celular Laboratorio:</label>
                                  <input type="text" class="form-control" id="celular_direcciones" name="celular_direcciones" value=""  placeholder="Celular Laboratorio">
                                  <div id="mensaje_celular_direcciones" class="errores"></div>
            </div>
		    </div>
            <div class="col-xs-3 col-md-3">
		    <div class="form-group ">
		                          <label for="direccion_direcciones" class="control-label">Dirección Laboratorio:</label>
                                  <input type="text" class="form-control" id="direccion_direcciones" name="direccion_direcciones" value=""  placeholder="Dirección Laboratorio">
                                  <div id="mensaje_direccion_direcciones" class="errores"></div>
            </div>
		    </div>
		    
		   
		   
		    <div class="col-xs-1 col-md-1" style="text-align: center; margin-top: 23px;">
		    <div class="form-group">
                                  <button type="submit" id="btn_agregar_direcciones" name="btn_agregar_direcciones" class="btn btn-success">Agregar</button>
            </div>
		    </div>
		    </div>
       	    
       	    
       	    
       	    <?php }?>
       	    
			
			


			<?php $cantidad = 0;?>
			<?php $registro = 1;?>
			<?php $id_direcciones = 0;?>
			<?php foreach($resultDir as $res) {?>
			<?php $cantidad = $cantidad + 1 ;?>
			<?php }?>
			<?php if ($cantidad > 0) {?>
  		      <section class="col-lg-12 col-md-12 col-xs-6" style="overflow-y:scroll;">
  	    	  <table class="table table-hover">
			         <tr class="info">
			    		<th style="text-align: left;  font-size: 11px;">Id</th>
			    		<th style="text-align: left;  font-size: 11px;">Provincia</th>
			    		<th style="text-align: left;  font-size: 11px;">Ciudad</th>
			    		<th style="text-align: left;  font-size: 11px;">Dirección</th>
			    		<th style="text-align: left;  font-size: 11px;">Teléfono</th>
			    		<th style="text-align: left;  font-size: 11px;">Celular</th>
			    		<th style="text-align: left;  font-size: 11px;"></th>
			    		<th style="text-align: left;  font-size: 11px;"></th>
			    		
			    		
			  		</tr>
		                
			            <?php foreach($resultDir as $res) {?>
			        		<tr>
			                   <td style="font-size: 11px;"> <?php echo $registro; ?>  </td>
				               <td style="font-size: 11px;"> <?php echo $res->nombre_provincia; ?>     </td> 
				               <td style="font-size: 11px;"> <?php echo $res->nombre_canton; ?>     </td> 
				               <td style="font-size: 11px;"> <?php echo $res->direccion_direcciones; ?>     </td>
				               <td style="font-size: 11px;"> <?php echo $res->cod_telefono;?><?php echo $res->telefono_direcciones; ?> </td>
							   <td style="font-size: 11px;"> <?php echo $res->prefijo_telefonico_paises;?><?php echo $res->celular_direcciones; ?>     </td>
				               <?php $registro = $registro + 1; ?>
				                 <td style="font-size: 11px;">   
					                	<div class="right">
					                       <a name="editar_dir" id="editar_dir" href="<?php echo $helper->url("Laboratorios","index_dos"); ?>&id_direcciones_editar=<?php echo $res->id_direcciones; ?>&nombre_laboratorios=<?php echo $nombre_laboratorios; ?>&id_laboratorios=<?php echo $id_laboratorios; ?>&persona_contacto_laboratorios=<?php echo $sel_persona_contacto_laboratorios; ?>&telefono_persona_contacto_laboratorios=<?php echo $sel_telefono_persona_contacto_laboratorios; ?>&web_laboratorios=<?php echo $sel_web_laboratorios; ?>&email_laboratorios=<?php echo $sel_email_laboratorios; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </div>
					             </td>
					             <td style="font-size: 11px;">   
					                	<div class="right">
					                       <a name="borrar_dir" id="borrar_dir" href="<?php echo $helper->url("Laboratorios","index_dos"); ?>&id_direcciones=<?php echo $res->id_direcciones; ?>&nombre_laboratorios=<?php echo $nombre_laboratorios; ?>&id_laboratorios=<?php echo $id_laboratorios; ?>&persona_contacto_laboratorios=<?php echo $sel_persona_contacto_laboratorios; ?>&telefono_persona_contacto_laboratorios=<?php echo $sel_telefono_persona_contacto_laboratorios; ?>&web_laboratorios=<?php echo $sel_web_laboratorios; ?>&email_laboratorios=<?php echo $sel_email_laboratorios; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
						                </div>
					             </td>
				               
				    		</tr>
				        <?php } ?>
		            
		          	</table>     
		      </section>
		   	   <?php }?>	
		   	
		   	<div class="row">
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="email_laboratorios" class="control-label">Email Laboratorio:</label>
                                  <input type="email" class="form-control" id="email_laboratorios" name="email_laboratorios" value="<?php if (!empty($resEdit)){  echo $resEdit->email_laboratorios;}else {echo $sel_email_laboratorios;}   ?>"  placeholder="Email Laboratorio">
                                  <div id="mensaje_email" class="errores"></div>
            </div>
            </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="web_laboratorios" class="control-label">Web Laboratorio:</label>
                                  <input type="text" class="form-control" id="web_laboratorios" name="web_laboratorios" value="<?php if (!empty($resEdit)){ echo $resEdit->web_laboratorios; }else {echo $sel_web_laboratorios;}    ?>"  placeholder="Web Laboratorio">
            </div>
		    </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="logo_laboratorios" class="control-label">Logo Laboratorio:</label>
                                  <input type="file" class="form-control" id="logo_laboratorios" name="logo_laboratorios" value=""  placeholder="Seleccione Imagen">
           						  
            </div>
		    </div>
			</div>
		   	
		   	
           
		   <div class="row">
			  <div class="col-xs-12 col-md-12" style="text-align: center; margin-top:20px;" >
			  	<input type="submit" id="btn_actualizar" name="btn_actualizar" value="Actualizar" class="btn btn-success"/>
			  </div>
			</div>     
               
			       
	       
	       
	       
	         	   
       	     <?php } } else {?>
       	     
       	     
       	   	<div class="row">
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="nombre_laboratorios" class="control-label">Nombre Laboratorio:</label>
                                  <input type="text" class="form-control" id="nombre_laboratorios" name="nombre_laboratorios" value="<?php if ($sel_nombre_laboratorios !="") {echo $sel_nombre_laboratorios; } else {echo $nombre_laboratorios;}     ?>"  placeholder="Nombre Laboratorio" readonly>
                                  <input type="hidden" name="id_laboratorios" id="id_laboratorios" value="<?php if ($sel_id_laboratorios !="") {echo $sel_id_laboratorios; } else {echo $id_laboratorios;}     ?>" class="form-control"/>
								  <input type="hidden" name="tipo_direcciones" id="tipo_direcciones" value="2" class="form-control"/>
				 				  <div id="mensaje_nombre" class="errores"></div>
            </div>
            </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="persona_contacto_laboratorios" class="control-label">Nombre Persona Contacto:</label>
                                  <input type="text" class="form-control" id="persona_contacto_laboratorios" name="persona_contacto_laboratorios" value="<?php if ($sel_persona_contacto_laboratorios !="") {echo $sel_persona_contacto_laboratorios; } else{ echo $persona_contacto_laboratorios;}     ?>"  placeholder="Nombre Persona Contacto">
            </div>
		    </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="telefono_persona_contacto_laboratorios" class="control-label">Telefono Persona Contacto:</label>
                                  <input type="text" class="form-control" id="telefono_persona_contacto_laboratorios" name="telefono_persona_contacto_laboratorios" value="<?php if ($sel_telefono_persona_contacto_laboratorios !="") {echo $sel_telefono_persona_contacto_laboratorios; }else{ echo $telefono_persona_contacto_laboratorios;}       ?>"  placeholder="Telefono Persona Contacto">
            </div>
		    </div>
			</div>
       	     
       	    <?php if(!empty($resultEditDir)){foreach($resultEditDir as $resEditDir) {?>
       	    
       	    <div class="row">
       	    <div class="col-xs-2 col-md-2">
		    <div class="form-group">
                                  <label for="id_provincia" class="control-label">Provincia Laboratorio:</label>
                                  <select name="id_provincia" id="id_provincia"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultProv as $res) {?>
										<option value="<?php echo $res->id_provincia; ?>" <?php if ($res->id_provincia == $resEditDir->id_provincia )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_provincia; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_provincia" class="errores"></div>
            </div>
            </div>
            
            
            <div class="col-xs-2 col-md-2">
		    <div class="form-group">
                                  <label for="id_canton" class="control-label">Canton Laboratorio:</label>
                                  <select name="id_canton" id="id_canton"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultCan as $res) {?>
										<option value="<?php echo $res->id_canton; ?>" <?php if ($res->id_canton == $resEditDir->id_canton )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_canton; ?> </option>
							        <?php } ?>
								   </select> 
                             <div id="mensaje_canton" class="errores"></div>
            </div>
            </div>
            
            <div class="col-xs-2 col-md-2">
		    <div class="form-group ">
		                          <label for="telefono_direcciones" class="control-label">Teléfono Laboratorio:</label>
                                  <input type="text" class="form-control" id="telefono_direcciones" name="telefono_direcciones" value="<?php echo $resEditDir->telefono_direcciones; ?>"  placeholder="Teléfono Laboratorio">
             					  <input type="hidden" name="id_direcciones" id="id_direcciones" value="<?php echo $resEditDir->id_direcciones;   ?>" class="form-control"/>
								  <div id="mensaje_telefono_direcciones" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-2 col-md-2">
		    <div class="form-group ">
		                          <label for="celular_direcciones" class="control-label">Celular Laboratorio:</label>
                                  <input type="text" class="form-control" id="celular_direcciones" name="celular_direcciones" value="<?php echo $resEditDir->celular_direcciones; ?>"  placeholder="Celular Laboratorio">
                                  <div id="mensaje_celular_direcciones" class="errores"></div>
            </div>
		    </div>
            <div class="col-xs-3 col-md-3">
		    <div class="form-group ">
		                          <label for="direccion_direcciones" class="control-label">Dirección Laboratorio:</label>
                                  <input type="text" class="form-control" id="direccion_direcciones" name="direccion_direcciones" value="<?php echo $resEditDir->direccion_direcciones; ?>"  placeholder="Dirección Laboratorio">
                                  <div id="mensaje_direccion_direcciones" class="errores"></div>
            </div>
		    </div>
		    
		   
		   
		    <div class="col-xs-1 col-md-1" style="text-align: center; margin-top: 23px;">
		    <div class="form-group">
                                  <button type="submit" id="btn_agregar_direcciones" name="btn_agregar_direcciones" class="btn btn-success">Actualizar</button>
            </div>
		    </div>
		    </div>
       	    
       	    
       	    
       	    
       	    <?php }} else {?>
       	    
       	    <div class="row">
       	    <div class="col-xs-2 col-md-2">
		    <div class="form-group">
                                  <label for="id_provincia" class="control-label">Provincia Laboratorio:</label>
                                  <select name="id_provincia" id="id_provincia"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultProv as $res) {?>
										<option value="<?php echo $res->id_provincia; ?>"  ><?php echo $res->nombre_provincia; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_provincia" class="errores"></div>
            </div>
            </div>
            
            <div class="col-xs-2 col-md-2">
		    <div class="form-group">
                                  <label for="id_canton" class="control-label">Canton Laboratorio:</label>
                                  <select name="id_canton" id="id_canton"  class="form-control" >
                                  <option value=""> -- SIN ESPECIFICAR -- </option>
								   </select> 
                             <div id="mensaje_canton" class="errores"></div>
            </div>
            </div>
            
            <div class="col-xs-2 col-md-2">
		    <div class="form-group ">
		                          <label for="telefono_direcciones" class="control-label">Teléfono Laboratorio:</label>
                                  <input type="text" class="form-control" id="telefono_direcciones" name="telefono_direcciones" value=""  placeholder="Teléfono Laboratorio">
             					  <input type="hidden" name="id_direcciones" id="id_direcciones" value="0" class="form-control"/>
								  <div id="mensaje_telefono_direcciones" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-2 col-md-2">
		    <div class="form-group ">
		                          <label for="celular_direcciones" class="control-label">Celular Laboratorio:</label>
                                  <input type="text" class="form-control" id="celular_direcciones" name="celular_direcciones" value=""  placeholder="Celular Laboratorio">
                                  <div id="mensaje_celular_direcciones" class="errores"></div>
            </div>
		    </div>
            <div class="col-xs-3 col-md-3">
		    <div class="form-group ">
		                          <label for="direccion_direcciones" class="control-label">Dirección Laboratorio:</label>
                                  <input type="text" class="form-control" id="direccion_direcciones" name="direccion_direcciones" value=""  placeholder="Dirección Laboratorio">
                                  <div id="mensaje_direccion_direcciones" class="errores"></div>
            </div>
		    </div>
		    
		   
		   
		    <div class="col-xs-1 col-md-1" style="text-align: center; margin-top: 23px;">
		    <div class="form-group">
                                  <button type="submit" id="btn_agregar_direcciones" name="btn_agregar_direcciones" class="btn btn-success">Agregar</button>
            </div>
		    </div>
		    </div>
       	    
       	    
       	    
       	    <?php }?>
       	    			
			
			


			<?php $cantidad = 0;?>
			<?php $registro = 1;?>
			<?php $id_direcciones = 0;?>
			<?php foreach($resultDir as $res) {?>
			<?php $cantidad = $cantidad + 1 ;?>
			<?php }?>
			<?php if ($cantidad > 0) {?>
  		      <section class="col-lg-12 col-md-12 col-xs-6" style="overflow-y:scroll;">
  	    	  <table class="table table-hover">
			         <tr class="info">
			    		<th style="text-align: left;  font-size: 13px;">Id</th>
			    		<th style="text-align: left;  font-size: 13px;">Provincia</th>
			    		<th style="text-align: left;  font-size: 13px;">Ciudad</th>
			    		<th style="text-align: left;  font-size: 13px;">Dirección</th>
			    		<th style="text-align: left;  font-size: 13px;">Teléfono</th>
			    		<th style="text-align: left;  font-size: 13px;">Celular</th>
			    		<th style="text-align: left;  font-size: 13px;"></th>
			    		<th style="text-align: left;  font-size: 11px;"></th>
			    		
			    		
			  		</tr>
		                
			            <?php foreach($resultDir as $res) {?>
			        		<tr>
			                   <td style="font-size: 12px;"> <?php echo $registro; ?>  </td>
				               <td style="font-size: 12px;"> <?php echo $res->nombre_provincia; ?>     </td> 
				               <td style="font-size: 12px;"> <?php echo $res->nombre_canton; ?>     </td> 
				               <td style="font-size: 12px;"> <?php echo $res->direccion_direcciones; ?>     </td>
				               <td style="font-size: 12px;"> <?php echo $res->cod_telefono;?><?php echo $res->telefono_direcciones; ?> </td>
							   <td style="font-size: 12px;"> <?php echo $res->prefijo_telefonico_paises;?><?php echo $res->celular_direcciones; ?>     </td>
				               <?php $registro = $registro + 1; ?>
				                  <td style="font-size: 11px;">   
					                	<div class="right">
					                       <a name="editar_dir" id="editar_dir" href="<?php echo $helper->url("Laboratorios","index_dos"); ?>&id_direcciones_editar=<?php echo $res->id_direcciones; ?>&nombre_laboratorios=<?php echo $nombre_laboratorios; ?>&id_laboratorios=<?php echo $id_laboratorios; ?>&persona_contacto_laboratorios=<?php echo $sel_persona_contacto_laboratorios; ?>&telefono_persona_contacto_laboratorios=<?php echo $sel_telefono_persona_contacto_laboratorios; ?>&web_laboratorios=<?php echo $sel_web_laboratorios; ?>&email_laboratorios=<?php echo $sel_email_laboratorios; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </div>
					             </td>
					             <td style="font-size: 11px;">   
					                	<div class="right">
					                       <a name="borrar_dir" id="borrar_dir" href="<?php echo $helper->url("Laboratorios","index_dos"); ?>&id_direcciones=<?php echo $res->id_direcciones; ?>&nombre_laboratorios=<?php echo $nombre_laboratorios; ?>&id_laboratorios=<?php echo $id_laboratorios; ?>&persona_contacto_laboratorios=<?php echo $sel_persona_contacto_laboratorios; ?>&telefono_persona_contacto_laboratorios=<?php echo $sel_telefono_persona_contacto_laboratorios; ?>&web_laboratorios=<?php echo $sel_web_laboratorios; ?>&email_laboratorios=<?php echo $sel_email_laboratorios; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
						                </div>
					             </td>
				               
				    		</tr>
				        <?php } ?>
		            
		          	</table>     
		      </section>
		   	   <?php }?>	
		   	
		   	<div class="row">
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="email_laboratorios" class="control-label">Email Laboratorio:</label>
                                  <input type="email" class="form-control" id="email_laboratorios" name="email_laboratorios" value="<?php if ($sel_email_laboratorios !="") {echo $sel_email_laboratorios; }else{ echo $email_laboratorios;}        ?>"  placeholder="Email Laboratorio">
                                  <div id="mensaje_email" class="errores"></div>
            </div>
            </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="web_laboratorios" class="control-label">Web Laboratorio:</label>
                                  <input type="text" class="form-control" id="web_laboratorios" name="web_laboratorios" value="<?php if ($sel_web_laboratorios !="") {echo $sel_web_laboratorios; } else{ echo $web_laboratorios;}       ?>"  placeholder="Web Laboratorio">
            </div>
		    </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="logo_laboratorios" class="control-label">Logo Laboratorio:</label>
                                  <input type="file" class="form-control" id="logo_laboratorios" name="logo_laboratorios" value=""  placeholder="Seleccione Imagen">
           						  <div id="mensaje_logo" class="errores"></div>
            </div>
		    </div>
			</div>
		   	
		   	
           
		   <div class="row">
			  <div class="col-xs-12 col-md-12" style="text-align: center; margin-top:20px;" >
			  	<input type="submit" id="btn_guardar" name="btn_guardar" value="Guardar" class="btn btn-success"/>
			  </div>
			</div>     
               
		
		
		       
			<?php }?>    
	     
	      
	     
	     
	     
	      <?php } else { ?>
	      
	        
	        <?php echo "hola: ".$nombre_laboratorios;?>
	        <?php  }?> 
	        <br> <br>
	        </div>
          </form>
       
             	<div class="col-lg-12">
  					
   		       <?php include("view/modulos/beforefooter.php"); ?>	
   			 
   		</div>     

    		
       
   <span class="ir-arriba">^</span>
     </body>  
    </html>   