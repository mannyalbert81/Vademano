  <div class="head" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/head.php"); ?>
 </div>

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
    
     
       
       <p></p>
  		 <form action="<?php echo $helper->url("Distribuidores","index_dos"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
          
         
		   		
            
          <?php if ($resultRep !="" ) { foreach($resultRep as $resRep) {?>
	       <div class="row">
	       		
	       		<div class="col-xs-6 col-md-6">
				
						<div class="row">
						  <div class="col-xs-12 col-md-12">
						  		<p style="font-family: sans-serif; color:#000000; whidth: 100%; text-align: center; "><font size=5><strong><?php echo $resRep->nombre_distribuidores?></strong></font></p>
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
			  		<font size=4><strong>CONTACTOS:</strong></font>
			  		<hr>
			  		</div>
			  		<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">
			  		<p><font size=3> <?php echo $resRep->persona_contacto_distribuidores?></font></p>
			  		<hr>
			  		</div>
			  		
			  		<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">
			  		<font size=4><strong>TELEFONO:</strong></font>
			  		<hr>
			  		</div>
			  		<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">
			  		<p><font size=3> <?php echo $resRep->telefono_persona_contacto_distribuidores?></font></p>
			  		<hr>
			  		</div>		
			  	 	
			  	 	<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">
			  		<font size=4><strong>MAIL:</strong></font>
			  		<hr>
			  		</div>
			  		<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">
			  		<p> <font size=3><?php echo $resRep->email_distribuidores?></font></p>
			  		<hr>
			  		</div>		 
						 </div>
						 </div>
						
				   	<div class="row">
						 <div style=" position: absolute;  margin-left: 50%; width:44%;">
			  	 	
			  	 	
			  	 	<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">
			  		<font size=4><strong>WEB:</strong></font>
			  		<hr>
			  		</div>
			  		<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">
			  		<p> <font size=3><?php echo $resRep->web_distribuidores?></font></p>
			  		<hr>
			  		</div>
			  	 	
			  	 	<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">
			  		<font size=4><strong>FECHA:</strong></font>
			  		<hr>
			  		</div>
			  		<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">
			  		<p><font size=3><?php echo $resRep->creado?></font></p>
			  		<hr>
			  		</div>
			  	 				  	 	
			  	 	</div>
			  	 	 </div>
						 </div>
				
				<div class="col-xs-6 col-md-6">
				</div>
			</div>		
	 
	         	   
       	     <?php } } else {?>
	        		

	   <?php }?>  
          </form>
         
  
      
   
     </body>  
    </html>   