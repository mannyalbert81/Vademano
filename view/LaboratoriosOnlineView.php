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
        div.izq{
	left:0px;  margin-top:-20px; width:49%; /*border: 1px solid blue;*/ float:left;
	}
	div.der{
	right:0px; margin-top:-10px; width:49%; /*border: 1px solid blue;*/ float:left;
	}
	#divSerp{
	 width:100%; /*border: 1px solid red;*/ padding:0px 5px;
	}
	.prueba{/* border:1px dashed green;*/}
	td.infotd {
	border:hidden;
	}
	table.info{
	border: 1px solid black;
	}
	footer
	{
    margin-top:50px;
    width:100%;
    height:200px;
    background-color:red;
	}
           
            
        </style>

 	
    </head>
    <body class="cuerpo">
    
     
      
  		 <form action="<?php echo $helper->url("Laboratorios","index_dos"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
           
          <?php if ($resultRep !="" ) { foreach($resultRep as $resRep) {?>
           <div class="col-lg-12 division"; style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px; "   >
           		
	       		   <div class="col-xs-6 col-md-6">
				  
				    <div class="row" style="margin-top:20px;">
					<div class="col-xs-12 col-md-12">
						  		<p style="font-family: Arial; color:#31B046; whidth: 100%; text-align: center;  "><font size=6><strong><?php echo $resRep->nombre_laboratorios?></strong></font></p>
					</div>
					</div>
					<div class="row">
					<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%; text-align: center;" >
					<img src="<?php echo base_url ?>view/DevuelveImagen.php?id_valor=<?php echo $resRep->id_laboratorios?>&id_nombre=id_laboratorios&tabla=Laboratorios&campo=logo_laboratorios"  width="120" height="90" />
				    </div>
				    </div>
						
						
					<div class="izq" >
		            <div  id="divSerp">
			  	 	<div style="margin-top:40px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:65%; width:100%;">
			  		<font size=3><strong>CONTACTOS:</strong></font>
			  		</div>
			  		
			  		
			  		<div style="color:#010a01; font-family: sans-serif; font-size:50%; width:100%;">
			  		<p> <font size=2><?php echo $resRep->persona_contacto_laboratorios?></font></p>
			  		</div>
			  		</div>
			  		
			  		<div  id="divSerp">
			  	 	<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:65%; width:100%;">
			  		<font size=3><strong>TELÉFONO:</strong></font>
			  		</div>
			  	
			  		<div style="color:#010a01; font-family: sans-serif; font-size:50%; width:100%;">
			  		<p><font size=2> <?php echo $resRep->telefono_persona_contacto_laboratorios?></font></p>
			  		</div>		
			  	 	</div>
			  	 	
			  	 	<div  id="divSerp">
			  	 	<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:65%; width:100%;">
			  		<font size=3><strong>MAIL:</strong></font>
			  		</div>
			  	
			  		<div style="color:#010a01; font-family: sans-serif; font-size:50%; width:100%;">
			  		<p> <font size=2><?php echo $resRep->email_laboratorios?></font></p>
			  		</div>		 
					</div>
				    </div>
					
					
					<div class="der">
				    <div  id="divSerp">
			  	 	<div style="margin-top:30px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:65%; width:100%;">
			  		<font size=3><strong>WEB:</strong></font>
			  		</div>
			  		
			  		<div style="color:#010a01; font-family: sans-serif; font-size:50%; width:100%;">
			  		<p><font size=2> <?php echo $resRep->web_laboratorios?></font></p>
			  	    </div>
			  	 	</div>
			  	 	
			  	 	<div  id="divSerp">
			  	 	<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:65%; width:100%;">
			  		<font size=3><strong>DIRECCIÓN:</strong></font>
			  		</div>
			  		
			  		<div style="color:#010a01; font-family: sans-serif; font-size:70%; width:100%;">
			  		<font size=2><?php if($tablaLab !=""){ echo $tablaLab;}?></font>
			  		</div>
			  	 	</div>
			  	 	</div>
			  	 	</br></br></br></br></br>
				    </div>
				
			
			<div class="col-xs-6 col-md-6" style="margin-top: 30px;">
			
		    <?php if (!empty($html)){echo $html;}?>
		    </div>
			</div>
	         	   
       	     <?php } } else {?>
	        		

	   <?php }?>  
	  
          </form>
      
    	 
   
     </body>  
    </html>   