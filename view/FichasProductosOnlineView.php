<!DOCTYPE HTML>
<?php require_once 'config/global.php';?> 

<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Fichas de Productos OnLine- Vademano 2015</title>
   
   		  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  			   
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		
		<script>
		    webshims.setOptions('forms-ext', {types: 'date'});
			webshims.polyfill('forms forms-ext');
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
    	<div>
       <?php include("view/modulos/head.php"); ?>
       </div>
       
       
       
  		 <form action="<?php echo $helper->url("FichasProductos","index_dos"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
          
         <?php if ($id_fichas > 0) { ?>
        	  
		   		
            
          <?php if ($resultRep !="" ) { foreach($resultRep as $resRep) {?>
	       <div class="row"  >
	       		
	       		<div class="col-xs-6 col-md-6">
				
						<div class="row">
						  <div class="col-xs-12 col-md-12">
						  <hr>
						  		<h3>
						  		<div style="font-family: sans-serif; color:#648B31 whidth: 100%; text-align: center; "><strong style="font-family: sans-serif; color:#648B31; font-size:150%"><?php echo $resRep->nombre_fichas?></strong></div>	
						  		</h3>
						  <hr>
						  </div>
						 </div>
						
  
						
					<div class="row">
						 <div style=" position: absolute;  margin-left: 5%; width:40%;">
			  	 			<?php if ($resRep->clasificacion_farmacologica_fichas != ""){?>	
					  	 	<div style="margin-top:10px; font-family: sans-serif; font-size:100%; width:100%; text-align: center;">
					  		
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong><?php echo $resRep->clasificacion_farmacologica_fichas?></strong></p>
					  		
					  		<hr>
					  		</div>
					  		<?php } ?>
					  		
					  		<?php if ($resRep->forma_terapeutica_fichas != ""){?>	
					  	 	<div style="margin-top:10px; font-family: sans-serif; font-size:100%; width:100%; text-align: center; ">
					  		
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong><?php echo $resRep->forma_terapeutica_fichas?></strong></p>
					  		
					  		<hr>
					  		</div>
					  		<?php } ?>
					  		
					  		
					  	 	<div style="color:#010a01; font-family: sans-serif; font-size:85%; width:100%; text-align: center;">
					  		  
					  		  <?php if ($resultEs !="" ) { foreach($resultEs as $resEs) {?>
									<img src="<?php echo base_url ?>view/DevuelveImagen.php?id_valor=<?php echo $resEs->id_especies?>&id_nombre=id_especies&tabla=especies&campo=logo_especies"  width="40" height="40" />				
								<?php }} ?>
					  		  
					  		  
					  		<hr>
					  		</div>
					  	 	
					  	 			
					  	 	<div style="margin-top:10px;  font-family: sans-serif; font-size:100%; width:100%;">
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong>COMPOSICIÓN:</strong></p>
					  		<hr>
					  		</div>
					  		<?php if ($resRep->encabezado_tabla_fichas != ""){?>
					  		<div style=" color:#010a01; font-family: sans-serif; font-size:75%; width:100%; ">
					  		<p align="justify"><?php echo $resRep->encabezado_tabla_fichas?></p>
					  		
					  		</div>
					  		<?php } ?>
					  			<table border="2"; style="font-family: sans-serif; font-size:90%;  width:100%;">
					  				<tr >
					  					<th style="text-align: center; background-color:#648B31; color:#FFFFFF;";>Principio Activo</th>
					  					<th style="text-align: center; background-color:#648B31; color:#FFFFFF;";>Contenido</th>
					  					
					  				</tr>
					  			<?php if ($resultCom !="" ) { foreach($resultCom as $resCom) {?>
									<tr style="text-align: center; font-size:75%;">
										<td> <?php echo $resCom->nombre_composiciones?></td>
										<td> <?php echo $resCom->cantidad_fichas_composiciones?><?php echo $resCom->nombre_unidades_medida?></td>
										
									</tr>
												
								<?php }} ?>
					  			</table>
					  		<hr>
					  		
					  		<?php if ($resRep->accion_terapeutica_fichas != ""){?>	
					  	 	<div style="margin-top:10px; font-family: sans-serif; font-size:100%; width:100%;">
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong>CARACTERÍSTICAS:</strong></p>
					  		<hr>
					  		</div>
					  		<div style="color:#010a01; font-family: sans-serif; font-size:85%; width:100%;">
					  		<p> <?php echo $resRep->accion_terapeutica_fichas?></p>
					  		<hr>
					  		</div>
					  		<?php } ?>
					  		
							 <?php if ($resRep->mecanismo_accion_fichas != ""){?>	
					  	 	<div style="margin-top:10px; font-family: sans-serif; font-size:100%; width:100%;">
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong>MECANISMOS DE ACCIÓN:</strong></p>
					  		<hr>
					  		</div>
					  		<div style="color:#010a01; font-family: sans-serif; font-size:85%; width:100%; ">
					  		<p align="justify"> <?php echo $resRep->mecanismo_accion_fichas?></p>
					  		<hr>
					  		</div>		
					  	    <?php } ?>
							
                             <?php if ($resRep->indicaciones_uso_fichas != ""){?>	
					  	 	<div style="margin-top:10px; font-family: sans-serif; font-size:100%; width:100%;">
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong>INDICACIONES:</strong></p>
					  		<hr>
					  		</div>
					  		<div style="color:#010a01; font-family: sans-serif; font-size:85%; width:100%; ">
					  		<p align="justify"> <?php echo $resRep->indicaciones_uso_fichas?></p>
					  		<hr>
					  		</div>		
					  	    <?php } ?>
					  	    
							<?php if ($resRep->encabezado_dosificacion_fichas != ""){?>
					  	    <div style="margin-top:10px; font-family: sans-serif; font-size:100%; width:100%;">
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong>DOSIFICACIÓN DE </strong><strong><?php echo $resRep->nombre_fichas?></strong></p>
					  		<hr>
					  		</div>
					  		<div style="color:#010a01; font-family: sans-serif; font-size:85%; width:100%; ">
					  		<p align="justify"><?php echo $resRep->encabezado_dosificacion_fichas?></p>
					  		
					  		</div>
					  		<?php } ?>
					  		
					  		<hr>
							<?php if ($resRep->periodo_retiro_fichas != ""){?>	
					  	 	<div style="margin-top:10px; font-family: sans-serif; font-size:100%; width:100%;">
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong>TIEMPO DE RETIRO:</strong></p>
					  		<hr>
					  		</div>
					  		<div style="color:#010a01; font-family: sans-serif; font-size:85%; width:100%;">
					  		<p> <?php echo $resRep->periodo_retiro_fichas?></p>
					  		<hr>
					  		</div>
					  	 	<?php } ?>
					  	 	
					  	 	<?php if ($resRep->advertencias_fichas != ""){?>
					  	 	<div style="margin-top:10px; font-family: sans-serif; font-size:100%; width:100%;">
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong>ADVERTENCIAS:</strong></p>
					  		<hr>
					  		</div>
					  		<div style="color:#010a01; font-family: sans-serif; font-size:85%; width:100%;">
					  		<p> <?php echo $resRep->advertencias_fichas?></p>
					  		<hr>
					  		</div>
					  	 	<?php } ?>
					  	 	
							
					  	 	
					  	 	
					  	</div>
					  	     
					  	    		  	     
			    	 </div>
						
				   	<div class="row">
						 <div style="  margin-left: 50%; width:44%;">
			  	 	         
					  	 	<div style="color:#010a01; font-family: sans-serif; font-size:85%; width:100%; text-align: center;">
					  		<img src="<?php echo base_url ?>view/DevuelveImagen.php?id_valor=<?php echo $resRep->id_fichas?>&id_nombre=id_fichas&tabla=fichas_fotos&campo=foto_fichas_fotos" width="180" height="200" />	
					  		<hr>
					  		</div>
					  	 	<div style="margin-top:10px; font-family: sans-serif; font-size:100%; width:100%;">
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong>VIA DE ADMINISTRACIÓN:</strong></p>
					  		<hr>
					  		</div>
					  		<div style="color:#010a01; font-family: sans-serif; font-size:85%; width:100%; ">
					  		<?php if ($resFicAdm !="" ) { foreach($resFicAdm as $resAdm) {?>
							<p align="justify">	<?php echo $resAdm->nombre_formas_administracion?></p>
					  		<?php }} ?>
					  		</div>
					  			
					  		<hr>
							
							<?php if ($resRep->interacciones_fichas != ""){?>	
					  	 	<div style="margin-top:10px; font-family: sans-serif; font-size:100%; width:100%;">
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong>INTERACCIONES:</strong></p>
					  		<hr>
					  		</div>
					  		<div style="color:#010a01; font-family: sans-serif; font-size:85%; width:100%;">
					  		<p> <?php echo $resRep->interacciones_fichas?></p>
					  		<hr>
					  		</div>
					  		<?php } ?>
					  	 	
					  	 	<?php if ($resRep->contraindicaciones_fichas != ""){?>	
					  	 	<div style="margin-top:10px; font-family: sans-serif; font-size:100%; width:100%;">
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong>CONTRAINDICACIONES:</strong></p>
					  		<hr>
					  		</div>
					  		<div style="color:#010a01; font-family: sans-serif; font-size:85%; width:100%;">
					  		<p> <?php echo $resRep->contraindicaciones_fichas?></p>
					  		<hr>
					  		</div>
					  		<?php } ?>
					  	 	
					  	 	<?php if ($resRep->efectos_colaterales_fichas != ""){?>
					  	 	<div style="margin-top:10px; font-family: sans-serif; font-size:100%; width:100%;">
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong>EFECTOS COLATERALES:</strong></p>
					  		<hr>
					  		</div>
					  		<div style="color:#010a01; font-family: sans-serif; font-size:85%; width:100%;">
					  		<p><?php echo $resRep->efectos_colaterales_fichas?></p>
					  		<hr>
					  		</div>
					  	 	<?php } ?>
					  	 	
					  	 	<?php if ($resRep->conservacion_fichas != ""){?>
					  	 	<div style="margin-top:10px; font-family: sans-serif; font-size:100%; width:100%;">
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong>CONSERVACIÓN:</strong></p>
					  		<hr>
					  		</div>
					  		<div style="color:#010a01; font-family: sans-serif; font-size:85%; width:100%;">
					  		<p> <?php echo $resRep->conservacion_fichas?></p>
					  		<hr>
					  		</div>
					  	 	<?php } ?>
					  	 	
					  	 	<?php if ($resRep->presentacion_fichas != ""){?>
					  	 	<div style="margin-top:10px; font-family: sans-serif; font-size:100%; width:100%;">
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong>PRESENTACIONES:</strong></p>
					  		<hr>
					  		</div>
					  		<div style="color:#010a01; font-family: sans-serif; font-size:85%; width:100%;">
					  		<p> <?php echo $resRep->presentacion_fichas?></p>
					  		<hr>
					  		</div>
					  	 	<?php } ?>
					  	 	
					  	 	<?php if ($resRep->registro_sanitario_fichas != ""){?>
					  	 	<div style="margin-top:10px; font-family: sans-serif; font-size:100%; width:100%;">
					  		<p style="background-color:#999E9A; color:#FFFFFF;"><strong>REGISTRO DE AGROLOCALIDAD:</strong></p>
					  		<hr>
					  		</div>
					  		<div style="color:#010a01; font-family: sans-serif; font-size:85%; width:100%;">
					  		<p> <?php echo $resRep->registro_sanitario_fichas?></p>
					  		<hr>
					  		</div>
					  		<?php } ?>
					  	</div>	  	 	
			  	 	</div>
			  	 	
				     <div class="row" >
						<div class="col-xs-2 col-md-2">
						</div>
						
						
						<div class="col-xs-8 col-md-8" style=" text-align: center; position: relative; top: 900px; left: 30px;">
												
						 
			  					<?php if ($resultLab !="" ) { foreach($resultLab as $resLab) {?>
			  					<div class="media">
								  <div class="media-left media-middle">
								    <a href="<?php echo $resLab->web_laboratorios; ?>">
								      <img class="media-object" src="<?php echo base_url ?>view/DevuelveImagen.php?id_valor=<?php echo $resLab->id_laboratorios?>&id_nombre=id_laboratorios&tabla=laboratorios&campo=logo_laboratorios"  width="120" height="80" alt="<?php echo $resLab->nombre_laboratorios; ?>">
								    </a>
								  </div>
								  <div class="media-body">
								  <p><strong>FABRICANTE</strong></p>
								    <h5 class="media-heading"><strong> <?php echo $resLab->nombre_laboratorios; ?> </strong>  </h5>
								    <p><strong>Telefono:</strong> <?php echo $resLab->telefono_persona_contacto_laboratorios; ?>   </p>
			  						<p><strong>Email:</strong> <?php echo $resLab->email_laboratorios; ?>   </p>
			  						<p><strong>Web:</strong> <?php echo $resLab->web_laboratorios; ?>   </p>
			  					
								  </div>
								</div>
								<hr>
			  					<?php } }?>
						</div>
						
						<div class="col-xs-2 col-md-2">
						</div>
			  		</div>	
			  		
			  		<div class="row" >
						<div class="col-xs-2 col-md-2">
						</div>
						
						<div class="col-xs-8 col-md-8" style=" text-align: center; position: relative; top: 900px; left: 20px;">
											
						 
			  					<?php if ($resultDis !="" ) { foreach($resultDis as $resDis) {?>
			  					<div class="media">
								  <div class="media-left media-middle">
								    <a href="<?php echo $resDis->web_distribuidores; ?>">
								      <img src="<?php echo base_url ?>view/DevuelveImagen.php?id_valor=<?php echo $resDis->id_distribuidores?>&id_nombre=id_distribuidores&tabla=distribuidores&campo=logo_distribuidores"  width="120" height="80" alt="<?php echo $resDis->nombre_distribuidores; ?>">
								    
									</a>
								  </div>
								  <div class="media-body">
								  <p><strong>DISTRIBUIDOR</strong></p>
								    <h5 class="media-heading"><strong> <?php echo $resDis->nombre_distribuidores; ?> </strong>  </h5>
								    <p><strong>Telefono:</strong> <?php echo $resDis->telefono_persona_contacto_distribuidores; ?>   </p>
			  						<p><strong>Email:</strong> <?php echo $resDis->email_distribuidores; ?>   </p>
			  						<p><strong>Web:</strong> <?php echo $resDis->web_distribuidores; ?>   </p>
			  					
								  </div>
								</div>
								<hr>
			  					<?php } }?>
						</div>
					
					
					
					<table border="2"; style="font-family: sans-serif; font-size:75%;  width:100%; position: relative; top: 900px; left: 20px;">
					<tr>
					<th>DECLARACIÓN LEGAL:</th>
					</tr>
					<tr>
					
                    <td>El contenido de este sitio es sólo para motivos informativos y de ninguna manera se debe utilizar sin consultar a un médico veterinario. Toda la información es proporcionada por el fabricante y / o distribuidor del producto por lo tanto Vademano no asume responsabilidad por errores u omisiones en los contenidos que se publican aquí.</td>
					
					</tr>
					</table> 		
			  			
						<div class="col-xs-2 col-md-2">
						</div>
			  		</div>
			  		
			  		<div class="row" >
			  		<div class="col-xs-8 col-md-8" style=" text-align: center; position: relative; top: 900px; left: 20px;">
					<p><strong>.</strong></p>
					
					</div>
			  		</div>
			  		
			  	</div>
				
				<div class="col-xs-1 col-md-1">
				<?php if ($resultRep !="" ) {  foreach($resultRep as $res) {?>
				
				<!-- cambio eliminacion de repeticion enlace -->
				
	      		<div style="margin-top:200px; position: fixed;">
						 <a href="<?php echo $helper->url("FichasProductos","ReporteFicha"); ?>&id_fichas=<?php echo $res->id_fichas; ?>&nombre_fichas=<?php echo $res->nombre_fichas; ?>" class="btn btn-info"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> Version Imprimible</a>
					</div>
					     
				</div>
				
				<?php }}?>
			</div>
			
					
						
		 	
			
		    <div style="background-color:#000000;  position: fixed; bottom: 0; width: 98%; color:#ffffff; font-family: sans-serif; font-size:85%; text-align: center; ">
					Copyright © Vademano 2015
					
					
			 
				</div>
	         	   
       	     <?php } } ?>
	      

	   <?php }?>
	   
	      
	     
          </form>
       
       <footer class="col-lg-12">
     	 			 	
			  	 		
    	 </footer> 
   
     </body>  
    </html>   