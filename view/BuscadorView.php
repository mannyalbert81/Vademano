<!DOCTYPE HTML>
<html lang="es">
   	 <head>
        <meta charset="utf-8"/>
        <title>Vademano 2015</title>
         <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		  <link rel="stylesheet" href="view/css/bootstrap.css">		   
          <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	      <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
 		  <link rel="stylesheet" href="view/font-awesome/css/font-awesome.min.css">
 		  
 		<style type="text/css">
		.zoom{
			transition: 1.5s ease;
	 		-moz-transition: 1.5s ease; /* Firefox */
	 		-webkit-transition: 1.5s ease; /* Chrome - Safari */
	 		-o-transition: 1.5s ease; /* Opera */
		}
		.zoom:hover{
			transform : scale(1.2);
			-moz-transform : scale(1.2); /* Firefox */
			-webkit-transform : scale(1.2); /* Chrome - Safari */
			-o-transform : scale(1.2); /* Opera */
			-ms-transform : scale(1.2); /* IE9 */
		}
	   </style>
 		
 		
  		<script> 
  		$(document).ready(function(){
		      
		        $("#a_imagen_favorito").click(function(){
      				//$("#mensaje_favorito").text("Agregando a Favoritos");
			    	//$("#mensaje_favorito").fadeIn("slow"); //Muestra mensaje de error
			   		//$("#mensaje_nombre").fadeOut("slow");
					//return false;
				});	
			});
	</script>
<script >
</script>
  	
  	<script >
		$(document).ready(function(){
		    // cada vez que se cambia el valor del combo
		    $("#chk_busquedaavanzada").click(function() 
			{
		    	if( $("#chk_busquedaavanzada").prop('checked') ) {
		    		
		    		$("#div-container-avanzado").fadeIn("slow");
		    		
			    }
		    	else
		    	{
		    		$("#div-container-avanzado").fadeOut("slow");
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
		    $("#option-productos").click(function() 
			{
	
	    		$("#div-productos").fadeIn("slow");
	    		$("#div-alimentos").fadeOut("slow");
	    		$("#div-principios").fadeOut("slow");
	    		$("#div-laboratorios").fadeOut("slow");
	    		$("#div-distribuidores").fadeOut("slow");
	    		
	    		
			}); 
		    $("#option-alimentos").click(function() 
					{
			
			    		$("#div-productos").fadeOut("slow");
			    		$("#div-alimentos").fadeIn("slow");
			    		$("#div-principios").fadeOut("slow");
			    		$("#div-laboratorios").fadeOut("slow");
			    		$("#div-distribuidores").fadeOut("slow");
			    		
			});
		    $("#option-principios").click(function() 
					{
			
			    		$("#div-productos").fadeOut("slow");
			    		$("#div-alimentos").fadeOut("slow");
			    		$("#div-principios").fadeIn("slow");
			    		$("#div-laboratorios").fadeOut("slow");
			    		$("#div-distribuidores").fadeOut("slow");
			}); 
		    $("#option-laboratorios").click(function() 
					{
			
			    		$("#div-productos").fadeOut("slow");
			    		$("#div-alimentos").fadeOut("slow");
			    		$("#div-principios").fadeOut("slow");
			    		$("#div-laboratorios").fadeIn("slow");
			    		$("#div-distribuidores").fadeOut("slow");
			}); 
		    $("#option-distribuidores").click(function() 
					{
			
			    		$("#div-productos").fadeOut("slow");
			    		$("#div-alimentos").fadeOut("slow");
			    		$("#div-principios").fadeOut("slow");
			    		$("#div-laboratorios").fadeOut("slow");
			    		$("#div-distribuidores").fadeIn("slow");
			}); 
				    
		    $(".contenedor-img a.linkfavorito").click(function(){
				var link=$(this).attr("href");
				var producto = $(this).data("producto");
				var nombreproducto = $(this).data("nomproducto");
				
				if(producto>0)
				{
					var datos = {id_fichas:producto};

					 $.post(link, datos, function(resultado) {

						 if(resultado==1){alert('El producto se ha añadido a la lista de favoritos');}else{alert('Error al ingresar a la list de favoritos');}
							 
         		  	}, 'json');
					 
				}
			   
			    return false;
		    });	    
		    
		}); 
	</script>
       

      
      
        <style>
			body {
			
			    /* Ubicación de la imagen */
		  background-image: url(view/images/fondo_azul.png);
		  height: 100%;
		
			}
			
			/*Estilos Base*/
			.contenedor-img {
			width: 200px;
			height: 150px;
			float: left;
			overflow: hidden;
			position: relative;
			text-align: center;
			cursor: default;
			background: #fff;
			margin: 10px;
			}
			.contenedor-img .mascara,.contenedor-img .contenido {
			width: 200px;
			height: 160px;
			position: absolute;
			overflow: hidden;
			top: 0;
			left: 0
			}
			.contenedor-img img {
			display: block;
			position: relative;
			
			}
			.contenedor-img h2 {
			text-transform: uppercase;
			color: #fff;
			text-align: center;
			position: relative;
			font-size: 17px;
			padding: 3px;
			background: rgba(0, 0, 0, 0.9);
			margin: 10px 0 0 0;
			}
			.contenedor-img h6 {
			text-transform: uppercase;
			color: black;
			text-align: center;
			position: relative;
			font-size: 12px;
			font-weight:bold;
			padding: 0px;
			background: rgb(170,224,111); /* Old browsers */
			margin: 0px 0 0 0;
			}
			.contenedor-img p {
			font-size: 12px;
			position: relative;
			color: #fff;
			padding: 10px;
			text-align: center;
			font-weight: bold;
			}
			.contenedor-img a.link {
			display: inline-block;
			text-decoration: none;
			padding: 7px 14px;
			background: #222;
			color: #fff;
			text-transform: uppercase;
			box-shadow: 0 0 1px #000
			}
			.contenedor-img a.link:hover {
			box-shadow: 0 0 5px #000
			}
			/*agregado para link de favorito*/
			.contenedor-img a.linkfavorito {
			display: inline-block;
			text-decoration: none;
			padding: 5px;
			background: #222;
			color: #fff;
			text-transform: uppercase;
			box-shadow: 0 0 1px #000
			}
			
			/*Ejemplo 1*/
			.ejemplo-1 img {
			transition: all 0.2s linear;
			}
			.ejemplo-1 .mascara {
			opacity: 0;
			background-color: rgba(46,157,120, 0.7);
			transition: all 0.3s ease-in-out;
			}
			.ejemplo-1 h2 {
			transform: translateX(-200px);/*Desplazamos a la izquierda*/
			opacity: 0;
			transition: all 0.7s ease-in-out;
			}
			.ejemplo-1 p {
			transform: translateX(200px);/*Desplazamos a la derecha*/
			opacity: 0;
			transition: all 0.4s linear;
			}
			.ejemplo-1 a.link{
			opacity: 0;
			transition: all 0.4s ease-in-out;
			transform: translateY(100px)/*Desplazamos para abajo*/
			}
			.ejemplo-1:hover img {
			transform: scale(1.1);/*Damos un ligero zoom a la imagen*/
			}
			.ejemplo-1:hover .mascara {
			opacity: 1;
			}
			.ejemplo-1:hover h2,
			.ejemplo-1:hover p,
			.ejemplo-1:hover a.link {
			opacity: 1;
			transform: translateX(0px);/*Regresamos a las posiciones originales*/
			}
			.ejemplo-1:hover p {
			transition-delay: 0.1s;
			}
			.ejemplo-1:hover a.link {
			transition-delay: 0.2s; /*Aplicamos un pequeño retardo para que se muestre al final*/
			transform: translateY(0px);
			}
			
			/*principios*/
			.principioA img {
			transition: all 0.2s linear;
			}
			.principioA .mascara {
			opacity: 0;
			background-color: rgba(46,157,120, 0.7);
			transition: all 0.3s ease-in-out;
			}
			.principioA h2 {
			transform: translateX(-200px);/*Desplazamos a la izquierda*/
			opacity: 0;
			transition: all 0.7s ease-in-out;
			}
			.principioA p {
			transform: translateX(200px);/*Desplazamos a la derecha*/
			opacity: 0;
			transition: all 0.4s linear;
			}
			.principioA a.link{
			opacity: 0;
			transition: all 0.4s ease-in-out;
			transform: translateY(100px)/*Desplazamos para abajo*/
			}
			.principioA:hover img {
			transform: scale(1.1);/*Damos un ligero zoom a la imagen*/
			}
			.principioA:hover .mascara {
			opacity: 1;
			}
			.principioA:hover h2,
			.principioA:hover p,
			.principioA:hover a.link {
			opacity: 1;
			transform: translateX(0px);/*Regresamos a las posiciones originales*/
			}
			.principioA:hover p {
			transition-delay: 0.1s;
			}
			.principioA:hover a.link {
			transition-delay: 0.2s; /*Aplicamos un pequeño retardo para que se muestre al final*/
			transform: translateY(0px);
			}
			</style>
			
			
			
			
   	 </head>
   
     
   
     <body  >
     
      <?php
   
		   $sel_contenido_busqueda = "";
		   
		   if($_SERVER['REQUEST_METHOD']=='POST' )
		   {
		      $sel_contenido_busqueda = $_POST['contenido_busqueda'];
		      
		   }
		   if($_SERVER['REQUEST_METHOD']=='GET' )
		   {
		   	//$sel_contenido_busqueda = $_GET['contenido_busqueda'];
		   }
		?>
        
     <div id="caja">
	 <?php include("view/modulos/menu_only.php"); ?>
     </div>
    
    	 
      <form id="form" action="<?php echo $helper->url("Buscador","index"); ?>" method="post"   class="col-lg-12">
         
   
    	 <div class="row" style=" margin-top:50px; text-align: center;"  >
			  <div class="col-xs-5 col-md-5">
			  	
			  </div>
			  <div class="col-xs-4 col-md-4">
			    	<a href="index.php?controller=Usuarios&action=cerrar_sesion"><img src="view/images/logo_vademano.png" class="img-responsive zoom" alt="Responsive image"></a>
			  </div>
			  <div class="col-xs-3 col-md-3">
			  	
			  </div>
		 </div>
	     <div class="row" style="text-align: center;"  >
	     <div class="col-xs-4 col-md-4">
		 </div>
		 
			  <div class="col-xs-4 col-md-4">
			  	<div class="input-group">
			      <input type="text" name="contenido_busqueda" id="contenido_busqueda" value="<?php if ($sel_contenido_busqueda != ""){echo $sel_contenido_busqueda;} ?>" class="form-control" placeholder="Texto a buscar...">
			      <div id="mensaje_contenido" class="errores"></div>	
			      <span class="input-group-btn">
			        <button type="submit" id="btn_buscar" name="btn_buscar" class="btn btn-primary"><span class="glyphicon glyphicon-search	" ><?php echo "" ;?> </span></button>
			      </span>
			    </div>
			  </div>
			  <div class="col-xs-4 col-md-4">
			  	
			</div>
			 
		 </div>
	
    	  <div class="row" style="text-align: center; margin-top: 15px;"  >
			 	
			  <div class="col-xs-5 col-md-5">
			  	
			  </div>
			  
			  <div class="col-xs-2 col-md-2" >
			        <input type="checkbox"  name="chk_busquedaavanzada" id="chk_busquedaavanzada"  value="bavanzada" > Busqueda Avanzada
			  </div>
			  
			  <div class="col-xs-5 col-md-5">
			  	
			  </div>	

		  </div>
    	 <hr>
    	  <div  id="div-container-avanzado" style="display: none;" >
    	  <div class="row"   >
    	  	<div class="col-xs-6 col-md-1">
			</div>
    	    <div class="col-xs-6 col-md-10">
			  
    	  
	    	  	<div class="col-xs-6 col-md-3">
	    	  		<p class="calibri-bold" >Clasificacion Farmacologica</p>
				</div>
	    	  
	    	  	<div class="col-xs-6 col-md-2">
				  	<p class="calibri-bold" >Especies</p>
				  	
				</div>
	    	  	<div class="col-xs-6 col-md-3">
				  	<p class="calibri-bold">Principios Activos</p>
				</div>
	    	  	<div class="col-xs-6 col-md-2">
				  	<p class="calibri-bold">Forma de Administracion</p>
				
				</div>
	    	  	<div class="col-xs-6 col-md-2">
				  	<p class="calibri-bold">Laboratorio</p>
				
				</div>
	    	  
	    	  	
    	  	</div>
			<div class="col-xs-6 col-md-1">
	    	</div>
			    	  	
    	  </div>

		  <div class="row">
    	  	<div class="col-xs-6 col-md-1">
    	  	</div>
    	  	<div class="col-xs-6 col-md-10">
	    	 
	    	  
	    	  	<div class="col-xs-6 col-md-3">
	    	  	<select name="categoria_farmacologica" id="categoria_farmacologica"  class="form-control" size="5" style="font-family: calibri; " >
							<option value="0"  > --SELECCIONE--</option>
							<?php foreach($resultCat as $resCat) {?>
								<option value="<?php echo $resCat->clasificacion_farmacologica_fichas; ?>"  ><?php echo $resCat->clasificacion_farmacologica_fichas; ?> </option>
								
				        	<?php } ?>
					</select> 
				</div>
	    	  
	    	  	<div class="col-xs-6 col-md-2" >
				  	<select name="id_especies" id="id_especies"  class="form-control" size="5" style="font-family: calibri; " >
							<option value="0"  > --SELECCIONE--</option>
							<?php foreach($resultEsp as $resEsp) {?>
								<option value="<?php echo $resEsp->id_especies; ?>"  ><?php echo $resEsp->nombre_especies; ?> </option>
								
				        	<?php } ?>
					</select> 
				  	
				</div>
	    	  	<div class="col-xs-6 col-md-3" >
				  	<select name="id_composiciones" id="id_composiciones"  class="form-control" size="5" style="font-family: calibri; ">
							<option value="0"  > --SELECCIONE--</option>
							<?php foreach($resultCom as $resCom) {?>
								<option value="<?php echo $resCom->id_composiciones; ?>"  ><?php echo $resCom->nombre_composiciones; ?> </option>
								
				        	<?php } ?>
					</select>
				</div>
	    	  	<div class="col-xs-6 col-md-2" style="height: 60px;">
				  	<select name="forma_administracion" id="forma_administracion"  class="form-control" size="5" style="font-family: calibri;">
							<option value="0"  > --SELECCIONE--</option>
							<?php foreach($resultFor as $resFor) {?>
								<option value="<?php echo $resFor->id_formas_administracion; ?>"  ><?php echo $resFor->nombre_formas_administracion; ?> </option>
								
				        	<?php } ?>
					</select>
				</div>
	    	  	<div class="col-xs-6 col-md-2" style="height: 60px;">
				  		<select name="id_laboratorios" id="id_laboratorios"  class="form-control" size="5" style="font-family: calibri;">
							<option value="0"  > --SELECCIONE--</option>	
							<?php foreach($resultLab as $resLab) {?>
					    	<option value="<?php echo $resLab->id_laboratorios; ?>"  ><?php echo $resLab->nombre_laboratorios; ?> </option>
							<?php } ?>
					 </select>
				</div>
	    	  
	    	  	
			</div>
			
    	  	<div class="col-xs-6 col-md-1">
    	  	</div>	
    	  </div>
    	  <hr>
    	  <div class="row">
	    		<div class="col-xs-6 col-md-1">
    	  	</div>
    	  	<div class="col-xs-6 col-md-10" >
    	  		<div class="col-xs-1 col-md-1">
    	  		</div>
    	  		<div class="col-xs-2 col-md-2">
    	  		</div>
    	  		<div class="col-xs-2 col-md-2">
    	  		
    	  		</div>
    	  		<div class="col-xs-2 col-md-2">
    	  				<button type="submit" id="btn_filtrar" name="btn_filtrar" class="btn btn-primary" style="width: 100%;"  ><span class="glyphicon glyphicon-filter" ><?php echo " Filtrar" ;?> </span></button>
    	  		</div>
    	  		<div class="col-xs-2 col-md-2">
    	  		</div>
    	  		<div class="col-xs-2 col-md-2">
    	  		</div>
    	  		  		
	    	   	<div class="col-xs-1 col-md-1">
    	  		</div>	
	    	 
    	  			
    	  	</div>
    	  	<div class="col-xs-6 col-md-1">
    	  	</div>  		
	    	  		
			</div>
    	  
    	 	<hr>
    	 	
    	  </div>
    	  <div class="row" >
    	 	<div class="col-xs-3 col-md-3">
    	 	</div>
    	 	<div class="col-xs-9 col-md-9" >
    	 	
    	 	<ul class="nav nav-pills" role="tablist" >
			  <li role="presentation" id="option-productos" class="active"><a href="#">Productos <span class="badge"><?php echo $CantProductos;?></span></a></li>
		      <li role="presentation" id="option-alimentos" class="active"><a href="#">Alimentos <span class="badge"><?php echo $CantAlimentos;?></span></a></li>
			  <li role="presentation" id="option-principios" class="active"><a href="#">Principios Activos <span class="badge"><?php echo $CantPrincipios;?></span></a></li>
			  <li role="presentation" id="option-laboratorios" class="active"><a href="#">Laboratorios <span class="badge"><?php echo $CantLaboratorios;?></span></a></li>
			  <li role="presentation" id="option-distribuidores" class="active"><a href="#">Distribuidores <span class="badge"><?php echo $CantDistribuidores;?></span></a></li>
			  
			</ul>
    	 	
    	 	</div>
    	 	<div class="col-xs-3 col-md-3">
    	 	<input type="hidden" name="controlador" id="controlador" value="">
    	 	</div>
    	 	</div>
    	  <div  class="row " id= "div-productos"   style="margin-top:50px; text-align: center; display: none;"  >
    	    <div class="col-xs-1 col-md-1">
    	    <span id="respuesta"></span>
    	    </div>
    	    <div   class="col-md-11 col-xs-11" style="margin-top:50px; text-align: center; "  > 	
    	  	
    	   <?php $celdas = 0;
    	   
    	   if ($resultPro !="") {  
    	   	
    	   	foreach($resultPro as $res) {
    	   	
    	   		$status = session_status();  
    	   		
    	   		if  (isset( $_SESSION['id_usuario'] )){  ?> 
		        
		        <div class="contenedor-img ejemplo-1">
		        
                 <img src="view/DevuelveImagen.php?id_valor=<?php echo $res->id_fichas; ?>&id_nombre=id_fichas&tabla=fichas_fotos&campo=foto_fichas_fotos" width="200" height="150"  alt="<?php echo $res->nombre_fichas; ?>" />
                 <div class="mascara">
                 <a class="linkfavorito" href="<?php echo $helper->url("FichasFavoritos","AgregarFavoritos"); ?>" id="a_imagen_favorito" data-producto="<?php echo $res->id_fichas; ?>" data-nomproducto="<?php echo $res->nombre_fichas; ?>" >
	  	      		<img  id="imagen_favorito" name="imagen_favorito" width="10px;" height="10px;" src="view/images/icono_heart.png" alt="Agregar a Favoritos" >
	  	         </a>
                 <h2><?php echo $res->nombre_fichas; ?></h2>
                 <p><?php echo $res->clasificacion_farmacologica_fichas; ?></p>
                 <a class="link" href="<?php echo $helper->url("FichasProductos","verFichaOnline"); ?>&id_fichas=<?php echo $res->id_fichas; ?>&nombre_fichas=<?php echo $res->nombre_fichas; ?>" target="_blank">Leer mas</a>
                 </div>
                 </div>
				             
		         <?php } else { ?>	
		         
		         <div class="contenedor-img ejemplo-1">
                 <img src="view/DevuelveImagen.php?id_valor=<?php echo $res->id_fichas; ?>&id_nombre=id_fichas&tabla=fichas_fotos&campo=foto_fichas_fotos" width="200" height="150"  alt="<?php echo $res->nombre_fichas; ?>" />
                 <div class="mascara">
                 <h2><?php echo $res->nombre_fichas; ?></h2>
                 <p><?php echo $res->clasificacion_farmacologica_fichas; ?></p>
                 <a class="link" href="<?php echo $helper->url("FichasProductos","verFichaOnline"); ?>&id_fichas=<?php echo $res->id_fichas; ?>&nombre_fichas=<?php echo $res->nombre_fichas; ?>" target="_blank">Leer mas</a>
                 </div>
                 </div>
		        
		        
		          <?php  }?>
			      
    	   	<?php } ?>
				 
				  
    	  	<?php  } ?>
    	  </div>  
    	  </div>
    	  
    	  <div id= "div-principios" class="row" style="margin-top:50px; text-align: center; display: none;"   > 
		   <div class="col-xs-1 col-md-1">
    	    </div>	
	      <div  class="col-md-11 col-xs-11" style="margin-top:50px; text-align: center;"   > 
		  
    	  	
    	   <?php $celdas = 0;?>
    		<?php if (!empty($resultPrinBus) || $resultPrinBus!="") { ?>
    	    <?php foreach($resultPrinBus as $res) {?>
	      		  
	      		 <div class="contenedor-img principioA">
	      		 <h6><?php echo $res->nombre_composiciones; ?></h6>
                 <img src="view/images/principios-activos.jpg" width="200" height="150"  alt=""  />
                 <div class="mascara">
                 <h2><?php echo $res->nombre_composiciones; ?></h2>
                 <p><?php echo ''; ?></p>
                 <a class="link" href="<?php echo $helper->url("Composiciones","VistaComposicionesOnline"); ?>&id_composiciones=<?php echo $res->id_composiciones;?>" target="_blank" >Leer mas</a>
                 </div>
                 </div>
	        	
				<?php }  ?>        
	        
    	  	<?php  } ?>
    	   </div> 
		 </div>
	
		<div id= "div-laboratorios" class="row" style="margin-top:50px; text-align: center; display: none;"  >	
		   <div class="col-xs-1 col-md-1">
    	    </div>	
	      <div  class="col-md-11 col-xs-11" style="margin-top:50px; text-align: center;"   > 
    	   <?php $celdas = 0;?>
    		<?php if ($resultLabBus !="") { ?>
    	    <?php foreach($resultLabBus as $res) {?>
	      		  
	      		 <div class="contenedor-img ejemplo-1">
                 <img src="view/DevuelveImagen.php?id_valor=<?php echo $res->id_laboratorios; ?>&id_nombre=id_laboratorios&tabla=laboratorios&campo=logo_laboratorios" width="200" height="150"  alt="<?php echo $res->nombre_fichas; ?>" />
                 <div class="mascara">
                 <h2><?php echo $res->nombre_laboratorios; ?></h2>
                 <p><?php echo ''; ?></p>
                 <a class="link" href="<?php echo $helper->url("Laboratorios","VistaLaboratoriosOnline"); ?>&id_laboratorios=<?php echo $res->id_laboratorios; ?>"  target="_blank" >Leer mas</a>
                 </div>
                 </div>
	        	
			      				
			       <?php }
    	   		} ?>
    	  	</div>
		  </div>
		  
	     <div  id= "div-distribuidores" class="row" style="margin-top:50px; text-align: center; display: none;"  >
	      <div class="col-xs-1 col-md-1">
    	    </div>	
	      <div  class="col-md-11 col-xs-11" style="margin-top:50px; text-align: center;"   > 
    	   <?php $celdas = 0;?>
    		<?php if ($resultDisBus !="") { ?>
    	    <?php foreach($resultDisBus as $res) {?>
	      		  
	        	<div class="contenedor-img ejemplo-1">
                 <img src="view/DevuelveImagen.php?id_valor=<?php echo $res->id_distribuidores; ?>&id_nombre=id_distribuidores&tabla=distribuidores&campo=logo_distribuidores" width="200" height="150"  alt="<?php echo $res->nombre_fichas; ?>" />
                 <div class="mascara">
                 <h2><?php echo $res->nombre_distribuidores; ?></h2>
                 <p><?php echo ''; ?></p>
                 <a class="link" href="<?php echo $helper->url("Distribuidores","VistaDistribuidoresOnline"); ?>&id_distribuidores=<?php echo $res->id_distribuidores; ?>"  target="_blank" >Leer mas</a>
                 </div>
                 </div>
                  <?php }?>
    	  	<?php } ?>
    	   </div>
    	  </div>		
		 <div  id= "div-alimentos" class="row" style="margin-top:50px; text-align: center; display: none;"  >
	       <div class="col-xs-1 col-md-1">
    	    </div>	
	       <div  class="col-md-11 col-xs-11" style="margin-top:50px; text-align: center;"   > 
    	   <?php $celdas = 0;?>
    		<?php if ($resultAli !="") { ?>
    	    <?php foreach($resultAli as $res) {?>
    	         
    	         <div class="contenedor-img ejemplo-1">
                 <img src="view/DevuelveImagen.php?id_valor=<?php echo $res->id_fichas; ?>&id_nombre=id_fichas&tabla=fichas_fotos&campo=foto_fichas_fotos" width="200" height="150"  alt="<?php echo $res->nombre_fichas; ?>" />
                 <div class="mascara">
                 <h2><?php echo $res->nombre_fichas; ?></h2>
                 <p><?php echo ''; ?></p>
                 <a class="link" href="<?php echo $helper->url("FichasAlimentos","verFichaOnline"); ?>&id_fichas=<?php echo $res->id_fichas; ?>&nombre_fichas=<?php echo $res->nombre_fichas; ?>"  target="_blank" >Leer mas</a>
                 </div>
                 </div>
                 
	        <?php  } ?>
	        
    	  	<?php  } ?>
    	  	</div>
    	  </div>
   			
	 </form>
	 	 
	 <div style="width: 100%; padding:50px 0px; float: left;"></div>	
	 <span class="ir-arriba">^</span>    	 
    </body>
</html>