<div class="navbar navbar-bottom"  >
<footer>
        
<div class="row" style="margin-top: 40px; background-color: #272525;  " >
  

	<div class="col-sm-1 col-md-1">
  	</div>
  	
  	<div class="col-sm-10 col-md-10">
  	  	
  	  	<div class="col-sm-3 col-md-3"></div>
  	  	
  	  	<div class="col-sm-3 col-md-3">
	  		<div class= "before-footer-titulo">
				<strong> Informacion </strong> 
	    	</div>
	    	<div style="margin-top: 20px;" >	
	      		
	      		<p class="before-footer-texto">   <span class="glyphicon glyphicon-road" aria-hidden="true"></span>  Edif. MAGAP Piso 9</p>
		  		<p class="before-footer-texto">   <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Quito – Ecuador</p>
		  		<p class="before-footer-texto">   <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> (+59)2 436 4566 - (+59)3 987 968 467</p>
		  		<p class="before-footer-texto">   <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Skype: vademano</p>
		  		<p class="before-footer-texto">  <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info@vademoano.com</p>
			</div>
	    	
	  	</div>
	  	
	  	
	  	
	  	<div class="col-sm-3 col-md-3">
	  		<div class= "before-footer-titulo"   >
				<strong> Zona de Usuarios </strong> 
	    	</div>
	    	<div style="margin-top: 20px;" >	
	      		<a href="<?php echo $helper->url("Preguntas","index"); ?>" class="before-footer-texto" > <span class="glyphicon glyphicon-pencil" ><?php echo " Preguntas Frecuentes" ;?></span> </a><br>
	      	 <?php $status = session_status();  ?>
		        <?php if  (isset( $_SESSION['nombres_usuario'] )){  ?> 
			 	
	      		<a href="#" class="before-footer-texto" ><span class="glyphicon glyphicon-star-empty" ><?php echo " Productos Favoritos" ;?></span> </a><br>
				<a href="#" class="before-footer-texto" ><span class="glyphicon glyphicon-heart" ><?php echo " Productos Recientes" ;?></span> </a><br>
				
				<a href="#" class="before-footer-texto" ><span class="glyphicon glyphicon-tasks" ><?php echo " Actualizar Datos de Usuario" ;?></span> </a><br>
				
				<?php } ?>
			</div>
	    	
	  	</div>
	  	<div class="col-sm-3 col-md-3"></div>
	  	
	</div>
	
	<div class="col-sm-1 col-md-1" >
  	</div>
  	
</div>
</footer>
</div>
    