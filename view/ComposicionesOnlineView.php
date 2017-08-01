<!DOCTYPE HTML>
<?php require_once 'config/global.php';?> 

<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Fichas de Productos OnLine- Vademano 2015</title>
   
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
    <div style="background-color: #4bae4f; " >
    <?php include("view/modulos/head.php"); ?>
      </div> 
       
       
       <p></p>
  		 <form action="<?php echo $helper->url("Composiciones","index_dos"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
          
         
		   		
            
          <?php if ($resultRep !="" ) { foreach($resultRep as $resRep) {?>
	       <div class="row">
	       		
	       		<div class="col-xs-6 col-md-6">
				
						<div class="row">
						  <div class="col-xs-12 col-md-12">
						  		<p class="titulos_vistasonline"><strong><?php echo $resRep->nombre_composiciones?></strong></font></p>
						  <hr>
						  </div>
						 </div>
						
						 <div class="row">
						  <div class="titulos_vistasonline" >
						  <td>
						 
						 </td>
						  <hr>
						  </div>
						 </div>
						
						
						<div class="row">
						 <div style=" position: absolute;  margin-left: 5%; width:40%;">
			  	 				
			  	 	<div class="titulos_vistasonline">
			  		<strong>CATEGORIA FARMACOLÓGICA:</strong>
			  		<hr>
			  		</div>
			  		<div class="titulos_vistasonline">
			  		<p><?php echo $resRep->categoria_farmacologica_composicion?></font></p>
			  		<hr>
			  		</div>
			  		
			  		<div class="titulos_vistasonline">
			  		<strong>SUBCATEGORIA FARMACOLÓGICA:</strong>
			  		<hr>
			  		</div>
			  		<div class="titulos_vistasonline">
			  		<p> <?php echo $resRep->subcategoria_farmacologica_composiciones?></p>
			  		<hr>
			  		</div>		
			  	 	
			  	 	<div class="titulos_vistasonline">
			  		<strong>INDICACIONES DE USO:</strong>
			  		<hr>
			  		</div>
			  		<div class="titulos_vistasonline">
			  		<p> <?php echo $resRep->indicaciones_uso_composiciones?></p>
			  		<hr>
			  		</div>
			  		
			  		<div class="titulos_vistasonline">
			  		<strong>FORMA DE ADMINISTRACIÓN:</strong>
			  		<hr>
			  		</div>
			  		<div class="titulos_vistasonline">
			  		<p> <?php echo $resRep->forma_administracion_composiciones?></p>
			  		<hr>
			  		
			  		</div>
			  		<div class="titulos_vistasonline">
			  		<strong>EFECTOS SECUNDARIOS:</strong>
			  		<hr>
			  		</div>
			  		<div class="titulos_vistasonline">
			  		<p> <?php echo $resRep->efectos_secundarios_composiciones?></p>
			  		<hr>
			  		</div>		 
						 </div>
						 </div>
						
				   	<div class="row">
						 <div style=" position: absolute;  margin-left: 50%; width:44%;">
			  	 	
			  	 	
			  	 	<div class="titulos_vistasonline">
			  		<strong>MECANISMOS DE ACCIÓN:</strong>
			  		<hr>
			  		</div>
			  		<div >
			  		<p> <?php echo $resRep->mecanismo_accion_composiciones?></p>
			  		<hr>
			  		</div>
			  	 	
			  	 	<div class="titulos_vistasonline">
			  		   <strong>PRECAUSIONES:</strong>
			  		<hr>
			  		</div>
			  		<div >
			  		<p><font size=3><?php echo $resRep->precausiones_composiociones?></font></p>
			  		<hr>
			  		</div>
			  	 	
			  	 	<div class="titulos_vistasonline">
			  		  <strong>ITERACCIONES:</strong>
			  		<hr>
			  		</div>
			  		<div >
			  		<p><<?php echo $resRep->interacciones_composiciones?></p>
			  		<hr>
			  		</div>			
			  		
			  		<div class="titulos_vistasonline">
			  		   <strong>CONTRAINDICACIONES:</strong>
			  		<hr>
			  		</div>
			  		<div class="titulos_vistasonline">
			  		<p><?php echo $resRep->contraindicaciones_composiciones?></p>
			  		<hr>
			  		</div>			  	 	
			  	 	
			  	 	<div class="titulos_vistasonline">
			  		   <strong>PERIODO DE RETIRO:</strong>
			  		<hr>
			  		</div>
			  		<div class="titulos_vistasonline">
			  		<p><?php echo $resRep->periodo_retirio_composiciones?></p>
			  		<hr>
			  		</div>
			  		  	 	
			  	 		</div>
			  	 	 		</div>
						 			</div>
				
				<div class="col-xs-6 col-md-6">
				</div>
			</div>		
	 <div style="background-color:#000000;  position: fixed; bottom: 0; width: 100%; color:#ffffff; font-family: sans-serif; font-size:55%; text-align: center; ">
	Copyright © Vademano 2015 </div>
	         	   
       	     <?php } } else {?>
	        		

	   <?php }?>  
          </form>
       	<div class="col-lg-12">
  					
    		
   		</div>     
  
       <footer class="col-lg-12">
     	 	
    	 </footer> 
   
     </body>  
    </html>   