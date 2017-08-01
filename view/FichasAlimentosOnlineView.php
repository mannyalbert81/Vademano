<!DOCTYPE HTML>
<?php require_once 'config/global.php';?> 

<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Fichas de Alimentos OnLine- Vademano 2015</title>
   
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
    <body class="cuerpo">
    
       <?php include("view/modulos/headadmin.php"); ?>
       
       
       
       
  		 <form action="<?php echo $helper->url("FichasAlimentos","index_dos"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
          
         <?php if ($id_fichas > 0) { ?>
        	  
		   		
            
          <?php if ($resultRep !="" ) { foreach($resultRep as $resRep) {?>
	       <div class="row">
	       		<div class="col-xs-2 col-md-2">
	       		</div>
	       		<div class="col-xs-8 col-md-8">
				
						<div class="row">
						  <div class="col-xs-12 col-md-12">
						  		<p style="font-family: sans-serif; color:#000000; whidth: 100%; text-align: center; "><strong><?php echo $resRep->nombre_fichas?></strong></p>
						  <hr>
						  </div>
						 </div>
						<div class="row">
						  <div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%; text-align: center;" >
						  <td>
						  		<img src="<?php echo base_url ?>view/DevuelveImagen.php?id_valor=<?php echo $resRep->id_distribuidores?>&id_nombre=id_distribuidores&tabla=distribuidores&campo=logo_distribuidores"  width="120" height="80" />
						 </td>
						 
						  <hr>
						  </div>
						 </div>
						
						
						
						<div class="row">
						 <div style=" position: absolute;  margin-left: 5%; width:40%;">
			  	 				
			  	 	<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">
			  		<strong>TIPO DE ALIMENTO:</strong>
			  		<hr>
			  		</div>
			  		<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">
			  		<p> <?php echo $resRep->tipo_alimento_fichas?></p>
			  		<hr>
			  		</div>
			  		
			  		<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%; text-align: center;">
			  		<strong>PRESENTACION</strong>
			  		<hr>
			  		</div>
			  		<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%; text-align: center;">
			  		  <?php if ($resultDos !="" ) { foreach($resultDos as $resDos) {?>
       <img src="		<?php echo base_url ?>view/DevuelveImagen.php?id_valor=<?php echo $resDos->id_especies?>&id_nombre=id_especies&tabla=especies&campo=logo_especies"  width="40" height="40" />    
      <?php }} ?>
			  		  <hr>
			  		</div>
			  	 	
			  		<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">
			  		<strong>COMPOSICION:</strong>
			  		<hr>
			  			<table border="2"; style="width:99%";>
			  				<tr >
			  					<th style="text-align: center";>Principio Activo</th>
			  					<th style="text-align: center";>Contenido</th>
			  				</tr>
			  			<?php if ($resultCom !="" ) { foreach($resultCom as $resCom) {?>
							<tr style="text-align: center";>
								<td> <?php echo $resCom->nombre_composiciones?></td>
								<td> <?php echo $resCom->cantidad_fichas_composiciones?></td>
							</tr>
										
						<?php }} ?>
			  			</table>
			  		</div>
			  		<hr>
			  		<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">
			  		<strong>INGREDIENTES:</strong>
			  		<hr>
			  		</div>
			  		<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">
			  		<p> <?php echo $resRep->ingredientes_fichas?></p>
			  		<hr>
			  		</div>		
			  	    
			  		
			  		<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">
			  		<strong>INDICACIONES:</strong>
			  		<hr>
			  		</div>
			  		<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">
			  		<p> <?php echo $resRep->indicaciones_uso_fichas?></p>
			  		<hr>
			  		</div>		
			  	    
			  	    
			  		<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">
			  		<strong>TABLA DE DOSIFICACION DE </strong><strong><?php echo $resRep->nombre_fichas?></strong>
			  		<hr>
			  		<table border="2"; style="width:99%";>
			  				<tr >
			  					<th style="text-align: center";>Especie</th>
			  					<th style="text-align: center";>Dosis</th>
			  				</tr>
			  			<?php if ($resultDos !="" ) { foreach($resultDos as $resDos) {?>
							<tr style="text-align: center";>
								<td> <?php echo $resDos->nombre_especies?></td>
								<td> <?php echo $resDos->dosis_fichas_dosificacion?></td>
							</tr>
										
						<?php }} ?>
			  			</table>
			  		</div>
			  		<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">
			  		<strong>PERIODO DE RETIRO:</strong>
			  		<hr>
			  		</div>
			  		<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">
			  		<p> <?php echo $resRep->periodo_retiro_fichas?></p>
			  		<hr>
			  		</div>
			  	 	
			  		 </div>
						 </div>
						
				   	<div class="row">
						 <div style=" position: absolute;  margin-left: 50%; width:44%;">
			  	 	
			  	 	<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%; text-align: center;">
			  		<img src="<?php echo base_url ?>view/DevuelveImagen.php?id_valor=<?php echo $resRep->id_fichas?>&id_nombre=id_fichas&tabla=fichas_fotos&campo=foto_fichas_fotos" width="180" height="200" />	
			  		<hr>
			  		</div>
			  	 	
			  	 	
			  	 	<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">
			  		<strong>CONSERVACION:</strong>
			  		<hr>
			  		</div>
			  		<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">
			  		<p> <?php echo $resRep->conservacion_fichas?></p>
			  		<hr>
			  		</div>
			  	 	
			  	 	<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">
			  		<strong>PRESENTACIONES:</strong>
			  		<hr>
			  		</div>
			  		<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">
			  		<p> <?php echo $resRep->presentacion_fichas?></p>
			  		<hr>
			  		</div>
			  	 	
			  	 	
			  	 	<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">
			  		<strong>REGISTRO DE AGROLOCALIDAD:</strong>
			  		<hr>
			  		</div>
			  		<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">
			  		<p> <?php echo $resRep->registro_sanitario_fichas?></p>
			  		<hr>
			  		</div>
			  	 	
			  	 	
			  	 	<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">
			  		<strong>FABRICANTE:</strong>
			  		<hr>
			  		</div>
			  		<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">
			  		<p> <?php echo $resRep->nombre_laboratorios?></p>
			  		<hr>
			  		</div>
			  	 	
			  	 	<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">
			  		<strong>DISTRIBUIDO POR:</strong>
			  		<hr>
			  		</div>
			  		<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">
			  		<p> <?php echo $resRep->nombre_distribuidores?></p>
			  		<hr>
			  		</div>
			  	 	
			  	 	
			  	 	 </div>
						 </div>
				</div>
				<div class="col-xs-2 col-md-2">
				</div>
			</div>		
	 <div style="background-color:#000000;  position: fixed; bottom: 0; width: 100%; color:#ffffff; font-family: sans-serif; font-size:55%; text-align: center; ">
	Copyright © Vademano 2015 </div>
	         	   
       	     <?php } } else {?>
	        		<?php }?>

	   <?php }?>  
          </form>
       	<div class="col-lg-12">
  					
    		
   		</div>     
  
       <footer class="col-lg-12">
     	 	
    	 </footer> 
   
     </body>  
    </html>   