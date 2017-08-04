 <div class="head" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/headadmin.php"); ?>
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
 		
 		<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_guardar").click(function() 
			{
		    	var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		    	 
		    	var nombre_distribuidores = $("#nombre_distribuidores").val();
		    	var email_distribuidores = $("#email_distribuidores").val();
		    	
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


			    
		    	if (regex.test($('#email_distribuidores').val().trim()))
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
			$( "#nombre_distribuidores" ).focus(function() {
					$("#mensaje_nombre").fadeOut("slow");
    			});
		
				$( "#email_distribuidores" ).focus(function() {
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
		    	 
		    	var nombre_distribuidores = $("#nombre_distribuidores").val();
		    	var email_distribuidores = $("#email_distribuidores").val();
		    	
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


			    
		    	if (regex.test($('#email_distribuidores').val().trim()))
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
			$( "#nombre_distribuidores" ).focus(function() {
					$("#mensaje_nombre").fadeOut("slow");
    			});
		
				$( "#email_distribuidores" ).focus(function() {
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
           $sel_id_distribuidores = "";
		   $sel_nombre_distribuidores = "";
		   $sel_persona_contacto_distribuidores = "";
		   $sel_telefono_persona_contacto_distribuidores = "";
		   $sel_email_distribuidores = "";
		   $sel_web_distribuidores = "";
		   
		   if ($nuevo_distribuidores)
		   {
		   
		   }
		   else
		   {
			   	if($_SERVER['REQUEST_METHOD']=='POST' )
			   	{
			   		//$sel_foto_fichas_fotos = $_FILES['foto_fichas_fotos'];
			   		$sel_id_distribuidores = $_POST['id_distribuidores'];
			   		$sel_nombre_distribuidores = $_POST['nombre_distribuidores'];
			   		$sel_persona_contacto_distribuidores = $_POST['persona_contacto_distribuidores'];
			   		$sel_telefono_persona_contacto_distribuidores = $_POST['telefono_persona_contacto_distribuidores'];
			   		$sel_email_distribuidores = $_POST['email_distribuidores'];
			   		$sel_web_distribuidores = $_POST['web_distribuidores'];
			   	}
			   
			   	if($_SERVER['REQUEST_METHOD']=='GET' )
			   	{
			   		
			   		
			   		if ($resultEdit !="" ) {
			   		
			   		}
			   		else 
			   		{
				   		$sel_id_distribuidores = $_GET['id_distribuidores'];
				   		$sel_nombre_distribuidores = $_GET['nombre_distribuidores'];
				   		$sel_persona_contacto_distribuidores = $_GET['persona_contacto_distribuidores'];
				   		$sel_telefono_persona_contacto_distribuidores = $_GET['telefono_persona_contacto_distribuidores'];
				   		$sel_email_distribuidores = $_GET['email_distribuidores'];
				   		$sel_web_distribuidores = $_GET['web_distribuidores'];
			   		}
			   		
			   		
			   		
			   		
			   	}
			
		   
		   }
		   
		   		
		   
		?>

       
       
  		 <form action="<?php echo $helper->url("Distribuidores","index_dos"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
            <div class="col-lg-12 division"; style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px; "   >
       
         <?php if ($id_distribuidores > 0) { ?>
        	    <h4>Insertar Distribuidores</h4>
            	<hr/>
            	
		   		
            
          <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
	       
			 
       	   	<div class="row">
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="nombre_distribuidores" class="control-label">Nombre Distribuidor:</label>
                                  <input type="text" class="form-control" id="nombre_distribuidores" name="nombre_distribuidores" value="<?php if (!empty($resEdit)){  echo $resEdit->nombre_distribuidores;} else {echo $sel_nombre_distribuidores;} ?>"  placeholder="Nombre Distribuidor" readonly>
                                  <input type="hidden" name="id_distribuidores" id="id_distribuidores" value="<?php if (!empty($resEdit)){ echo $resEdit->id_distribuidores;}  else {echo $sel_id_distribuidores;}   ?>" class="form-control"/>
								  <input type="hidden" name="tipo_direcciones" id="tipo_direcciones" value="1" class="form-control"/>
				 				  <div id="mensaje_nombre" class="errores"></div>
            </div>
            </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="persona_contacto_distribuidores" class="control-label">Nombre Persona Contacto:</label>
                                  <input type="text" class="form-control" id="persona_contacto_distribuidores" name="persona_contacto_distribuidores" value="<?php if (!empty($resEdit)){ echo $resEdit->persona_contacto_distribuidores; } else {echo $sel_persona_contacto_distribuidores;}    ?>"  placeholder="Nombre Persona Contacto">
            </div>
		    </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="telefono_persona_contacto_distribuidores" class="control-label">Telefono Persona Contacto:</label>
                                  <input type="text" class="form-control" id="telefono_persona_contacto_distribuidores" name="telefono_persona_contacto_distribuidores" value="<?php if (!empty($resEdit)){  echo $resEdit->telefono_persona_contacto_distribuidores; } else {echo $sel_telefono_persona_contacto_distribuidores;}   ?>"  placeholder="Telefono Persona Contacto">
            </div>
		    </div>
			</div>
       	     
       	     
       	     <?php if(!empty($resultEditDir)){foreach($resultEditDir as $resEditDir) {?>
       	    
       	    <div class="row">
       	    <div class="col-xs-2 col-md-2">
		    <div class="form-group">
                                  <label for="id_provincia" class="control-label">Provincia Distribuidor:</label>
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
                                  <label for="id_canton" class="control-label">Canton Distribuidor:</label>
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
		                          <label for="telefono_direcciones" class="control-label">Teléfono Distribuidor:</label>
                                  <input type="text" class="form-control" id="telefono_direcciones" name="telefono_direcciones" value="<?php echo $resEditDir->telefono_direcciones; ?>"  placeholder="Teléfono Distribuidor">
             					  <input type="hidden" name="id_direcciones" id="id_direcciones" value="<?php echo $resEditDir->id_direcciones;   ?>" class="form-control"/>
								  <div id="mensaje_telefono_direcciones" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-2 col-md-2">
		    <div class="form-group ">
		                          <label for="celular_direcciones" class="control-label">Celular Distribuidor:</label>
                                  <input type="text" class="form-control" id="celular_direcciones" name="celular_direcciones" value="<?php echo $resEditDir->celular_direcciones; ?>"  placeholder="Celular Distribuidor">
                                  <div id="mensaje_celular_direcciones" class="errores"></div>
            </div>
		    </div>
            <div class="col-xs-3 col-md-3">
		    <div class="form-group ">
		                          <label for="direccion_direcciones" class="control-label">Dirección Distribuidor:</label>
                                  <input type="text" class="form-control" id="direccion_direcciones" name="direccion_direcciones" value="<?php echo $resEditDir->direccion_direcciones; ?>"  placeholder="Dirección Distribuidor">
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
                                  <label for="id_provincia" class="control-label">Provincia Distribuidor:</label>
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
                                  <label for="id_canton" class="control-label">Canton Distribuidor:</label>
                                  <select name="id_canton" id="id_canton"  class="form-control" >
                                  <option value=""> -- SIN ESPECIFICAR -- </option>
								   </select> 
                             <div id="mensaje_canton" class="errores"></div>
            </div>
            </div>
            
            <div class="col-xs-2 col-md-2">
		    <div class="form-group ">
		                          <label for="telefono_direcciones" class="control-label">Teléfono Distribuidor:</label>
                                  <input type="text" class="form-control" id="telefono_direcciones" name="telefono_direcciones" value=""  placeholder="Teléfono Distribuidor">
             					  <input type="hidden" name="id_direcciones" id="id_direcciones" value="0" class="form-control"/>
								  <div id="mensaje_telefono_direcciones" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-2 col-md-2">
		    <div class="form-group ">
		                          <label for="celular_direcciones" class="control-label">Celular Distribuidor:</label>
                                  <input type="text" class="form-control" id="celular_direcciones" name="celular_direcciones" value=""  placeholder="Celular Distribuidor">
                                  <div id="mensaje_celular_direcciones" class="errores"></div>
            </div>
		    </div>
            <div class="col-xs-3 col-md-3">
		    <div class="form-group ">
		                          <label for="direccion_direcciones" class="control-label">Dirección Distribuidor:</label>
                                  <input type="text" class="form-control" id="direccion_direcciones" name="direccion_direcciones" value=""  placeholder="Dirección Distribuidor">
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
					                       <a name="editar_dir" id="editar_dir" href="<?php echo $helper->url("Distribuidores","index_dos"); ?>&id_direcciones_editar=<?php echo $res->id_direcciones; ?>&nombre_distribuidores=<?php echo $nombre_distribuidores; ?>&id_distribuidores=<?php echo $id_distribuidores; ?>&persona_contacto_distribuidores=<?php echo $sel_persona_contacto_distribuidores; ?>&telefono_persona_contacto_distribuidores=<?php echo $sel_telefono_persona_contacto_distribuidores; ?>&web_distribuidores=<?php echo $sel_web_distribuidores; ?>&email_distribuidores=<?php echo $sel_email_distribuidores; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </div>
					             </td>
					             <td style="font-size: 11px;">   
					                	<div class="right">
					                       <a name="borrar_dir" id="borrar_dir" href="<?php echo $helper->url("Distribuidores","index_dos"); ?>&id_direcciones=<?php echo $res->id_direcciones; ?>&nombre_distribuidores=<?php echo $nombre_distribuidores; ?>&id_distribuidores=<?php echo $id_distribuidores; ?>&persona_contacto_distribuidores=<?php echo $sel_persona_contacto_distribuidores; ?>&telefono_persona_contacto_distribuidores=<?php echo $sel_telefono_persona_contacto_distribuidores; ?>&web_distribuidores=<?php echo $sel_web_distribuidores; ?>&email_distribuidores=<?php echo $sel_email_distribuidores; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
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
		                          <label for="email_distribuidores" class="control-label">Email Distribuidor:</label>
                                  <input type="email" class="form-control" id="email_distribuidores" name="email_distribuidores" value="<?php if (!empty($resEdit)){  echo $resEdit->email_distribuidores;}else {echo $sel_email_distribuidores;}   ?>"  placeholder="Email Distribuidor">
                                  <div id="mensaje_email" class="errores"></div>
            </div>
            </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="web_distribuidores" class="control-label">Web Distribuidor:</label>
                                  <input type="text" class="form-control" id="web_distribuidores" name="web_distribuidores" value="<?php if (!empty($resEdit)){ echo $resEdit->web_distribuidores; }else {echo $sel_web_distribuidores;}    ?>"  placeholder="Web Distribuidor">
            </div>
		    </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="logo_distribuidores" class="control-label">Logo Distribuidor:</label>
                                  <input type="file" class="form-control" id="logo_distribuidores" name="logo_distribuidores" value=""  placeholder="Seleccione Imagen">
           						  
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
		                          <label for="nombre_distribuidores" class="control-label">Nombre Distribuidor:</label>
                                  <input type="text" class="form-control" id="nombre_distribuidores" name="nombre_distribuidores" value="<?php if ($sel_nombre_distribuidores !="") {echo $sel_nombre_distribuidores; } else {echo $nombre_distribuidores;}     ?>"  placeholder="Nombre Distribuidor" readonly>
                                  <input type="hidden" name="id_distribuidores" id="id_distribuidores" value="<?php if ($sel_id_distribuidores !="") {echo $sel_id_distribuidores; } else {echo $id_distribuidores;}     ?>" class="form-control"/>
								  <input type="hidden" name="tipo_direcciones" id="tipo_direcciones" value="1" class="form-control"/>
				 				  <div id="mensaje_nombre" class="errores"></div>
            </div>
            </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="persona_contacto_distribuidores" class="control-label">Nombre Persona Contacto:</label>
                                  <input type="text" class="form-control" id="persona_contacto_distribuidores" name="persona_contacto_distribuidores" value="<?php if ($sel_persona_contacto_distribuidores !="") {echo $sel_persona_contacto_distribuidores; } else{ echo $persona_contacto_distribuidores;}     ?>"  placeholder="Nombre Persona Contacto">
            </div>
		    </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="telefono_persona_contacto_distribuidores" class="control-label">Telefono Persona Contacto:</label>
                                  <input type="text" class="form-control" id="telefono_persona_contacto_distribuidores" name="telefono_persona_contacto_distribuidores" value="<?php if ($sel_telefono_persona_contacto_distribuidores !="") {echo $sel_telefono_persona_contacto_distribuidores; }else{ echo $telefono_persona_contacto_distribuidores;}       ?>"  placeholder="Telefono Persona Contacto">
            </div>
		    </div>
			</div>
       	     
       	    <?php if(!empty($resultEditDir)){foreach($resultEditDir as $resEditDir) {?>
       	    
       	    <div class="row">
       	    <div class="col-xs-2 col-md-2">
		    <div class="form-group">
                                  <label for="id_provincia" class="control-label">Provincia Distribuidor:</label>
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
                                  <label for="id_canton" class="control-label">Canton Distribuidor:</label>
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
		                          <label for="telefono_direcciones" class="control-label">Teléfono Distribuidor:</label>
                                  <input type="text" class="form-control" id="telefono_direcciones" name="telefono_direcciones" value="<?php echo $resEditDir->telefono_direcciones; ?>"  placeholder="Teléfono Distribuidor">
             					  <input type="hidden" name="id_direcciones" id="id_direcciones" value="<?php echo $resEditDir->id_direcciones;   ?>" class="form-control"/>
								  <div id="mensaje_telefono_direcciones" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-2 col-md-2">
		    <div class="form-group ">
		                          <label for="celular_direcciones" class="control-label">Celular Distribuidor:</label>
                                  <input type="text" class="form-control" id="celular_direcciones" name="celular_direcciones" value="<?php echo $resEditDir->celular_direcciones; ?>"  placeholder="Celular Distribuidor">
                                  <div id="mensaje_celular_direcciones" class="errores"></div>
            </div>
		    </div>
            <div class="col-xs-3 col-md-3">
		    <div class="form-group ">
		                          <label for="direccion_direcciones" class="control-label">Dirección Distribuidor:</label>
                                  <input type="text" class="form-control" id="direccion_direcciones" name="direccion_direcciones" value="<?php echo $resEditDir->direccion_direcciones; ?>"  placeholder="Dirección Distribuidor">
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
                                  <label for="id_provincia" class="control-label">Provincia Distribuidor:</label>
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
                                  <label for="id_canton" class="control-label">Canton Distribuidor:</label>
                                  <select name="id_canton" id="id_canton"  class="form-control" >
                                  <option value=""> -- SIN ESPECIFICAR -- </option>
								   </select> 
                             <div id="mensaje_canton" class="errores"></div>
            </div>
            </div>
            
            <div class="col-xs-2 col-md-2">
		    <div class="form-group ">
		                          <label for="telefono_direcciones" class="control-label">Teléfono Distribuidor:</label>
                                  <input type="text" class="form-control" id="telefono_direcciones" name="telefono_direcciones" value=""  placeholder="Teléfono Distribuidor">
             					  <input type="hidden" name="id_direcciones" id="id_direcciones" value="0" class="form-control"/>
								  <div id="mensaje_telefono_direcciones" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="col-xs-2 col-md-2">
		    <div class="form-group ">
		                          <label for="celular_direcciones" class="control-label">Celular Distribuidor:</label>
                                  <input type="text" class="form-control" id="celular_direcciones" name="celular_direcciones" value=""  placeholder="Celular Distribuidor">
                                  <div id="mensaje_celular_direcciones" class="errores"></div>
            </div>
		    </div>
            <div class="col-xs-3 col-md-3">
		    <div class="form-group ">
		                          <label for="direccion_direcciones" class="control-label">Dirección Distribuidor:</label>
                                  <input type="text" class="form-control" id="direccion_direcciones" name="direccion_direcciones" value=""  placeholder="Dirección Distribuidor">
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
					                       <a name="editar_dir" id="editar_dir" href="<?php echo $helper->url("Distribuidores","index_dos"); ?>&id_direcciones_editar=<?php echo $res->id_direcciones; ?>&nombre_distribuidores=<?php echo $nombre_distribuidores; ?>&id_distribuidores=<?php echo $id_distribuidores; ?>&persona_contacto_distribuidores=<?php echo $sel_persona_contacto_distribuidores; ?>&telefono_persona_contacto_distribuidores=<?php echo $sel_telefono_persona_contacto_distribuidores; ?>&web_distribuidores=<?php echo $sel_web_distribuidores; ?>&email_distribuidores=<?php echo $sel_email_distribuidores; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </div>
					             </td>
					             <td style="font-size: 12px;">   
					                	<div class="right">
					                       <a name="borrar_dir" id="borrar_dir" href="<?php echo $helper->url("Distribuidores","index_dos"); ?>&id_direcciones=<?php echo $res->id_direcciones; ?>&nombre_distribuidores=<?php echo $nombre_distribuidores; ?>&id_distribuidores=<?php echo $id_distribuidores; ?>&persona_contacto_distribuidores=<?php echo $sel_persona_contacto_distribuidores; ?>&telefono_persona_contacto_distribuidores=<?php echo $sel_telefono_persona_contacto_distribuidores; ?>&web_distribuidores=<?php echo $sel_web_distribuidores; ?>&email_distribuidores=<?php echo $sel_email_distribuidores; ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
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
		                          <label for="email_distribuidores" class="control-label">Email Distribuidor:</label>
                                  <input type="email" class="form-control" id="email_distribuidores" name="email_distribuidores" value="<?php if ($sel_email_distribuidores !="") {echo $sel_email_distribuidores; }else{ echo $email_distribuidores;}        ?>"  placeholder="Email Distribuidor">
                                  <div id="mensaje_email" class="errores"></div>
            </div>
            </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="web_distribuidores" class="control-label">Web Distribuidor:</label>
                                  <input type="text" class="form-control" id="web_distribuidores" name="web_distribuidores" value="<?php if ($sel_web_distribuidores !="") {echo $sel_web_distribuidores; } else{ echo $web_distribuidores;}       ?>"  placeholder="Web Distribuidor">
            </div>
		    </div>
		    
		    <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="logo_distribuidores" class="control-label">Logo Distribuidor:</label>
                                  <input type="file" class="form-control" id="logo_distribuidores" name="logo_distribuidores" value=""  placeholder="Seleccione Imagen">
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
	      
	        
	        <?php echo "hola: ".$nombre_distribuidores;?>
	        <?php  }?> 
	        <br> <br>
	        </div>
          </form>
       
             	<div class="col-lg-12">
  					
   		     <?php include("view/modulos/servicios.php"); ?>	
   			 
   		</div>     
  <?php include("view/modulos/beforefooter.php"); ?>
    		
       
   
     </body>  
    </html>   