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
    	<div>
       <?php include("view/modulos/head.php"); ?>
       </div>
<!-- 
<div class="row" ></div>   
 -->
   
<div class="col-lg-12 col-md-12">

	<div class="col-lg-6 col-md-6 col-xs-12">
		<div style="font-family: Arial; font-size:16pt; color:#31B046; width: 100%; text-align: center; ">
		<h2> <strong> <?php if($dicContenido['NOMBREFICHA']!=""){echo $dicContenido['NOMBREFICHA'];}else{/*{NOMBREFICHA}*/} ?></strong></h2>
		</div>
		<div style="width:100%">
		<div class="izq">
	
		<div id="divSerp" style="{cafa}">
			<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family:verdana; font-size:75%; width:100%;">
				<strong> CATEGORÍA FARMACOLÓGICA: </strong>
			</div>
			<div style="color:#010a01; font-family:Times New Roman; font-size:60%; width:100%; text-align: center;">
			<p> <?php if($dicContenido['CLASIFICACION']!=""){echo $dicContenido['CLASIFICACION'];}else{/*{CLASIFICACION}*/} ?> </p>
			</div>
		</div>
		<div  id="divSerp"  style="{fofa}" >
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
  			<strong> FORMA FARMACÉUTICA: </strong>
  		</div>
        <div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%; text-align: center;">
  		<p> <?php if($dicContenido['FORMA']!=""){echo $dicContenido['FORMA'];}else{/*{FORMA}*/} ?></p>
  		</div>
	    </div>
	
		<div id="divSerp"  style="{esde}">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; text-align:center; width:100%;">
		<strong> ESPECIES DE DESTINO: </strong>
		</div>
		 <div style=" margin-top:10px; text-align: center; font-family: Times New Roman; font-size:55%;  width:100%;" >
		 <?php if($dicContenido['TABLAESPECIES']!=""){echo $dicContenido['TABLAESPECIES'];}else{/*{TABLAESPECIES}*/} ?>
		</div>
		</div>
		
		<div id="divSerp"  style="{comp}">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
			<strong> COMPOSICIÓN: </strong>
		</div>
		<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
			<p><?php if($dicContenido['ENCABEZADO']!=""){echo $dicContenido['ENCABEZADO'];}else{/*{ENCABEZADO}*/} ?></p>	
		</div>
					
		<div style="color:#010a01; font-family: Times New Roman; font-size:55%; width:100%;">
		<?php if($dicContenido['TABLACOMP']!=""){echo $dicContenido['TABLACOMP'];}else{/*{TABLACOMP}*/} ?>	 
		</div>
		</div>
		
		<div id="divSerp"  style="{cara}">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
  			<strong> CARACTERISTICAS:  </strong>
  		</div>
  		<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
  		<p><?php if($dicContenido['ACCIONTERAPEUTICA']!=""){echo $dicContenido['ACCIONTERAPEUTICA'];}else{/*{ACCIONTERAPEUTICA}*/} ?></p>
  		</div>
		</div>
	
		<div id="divSerp"  style="{mede}">
			<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
				<strong> MECANISMOS DE ACCIÓN:  </strong>
			</div>
			<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
			<p> <?php if($dicContenido['MECANISMOACCION']!=""){echo $dicContenido['MECANISMOACCION'];}else{/*{MECANISMOACCION}*/} ?></p>
			</div>
		</div>
	
		<div id="divSerp"  style="{inde}">
			<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
				<strong> INDICACIONES DE USO:   </strong>
			</div>
			<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
			<p> <?php if($dicContenido['INDICACIONES']!=""){echo $dicContenido['INDICACIONES'];}else{/*{INDICACIONES}*/} ?> </p>
			</div>
		</div>
	
		<div id="divSerp"  style="{dode}">
			<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
				<strong> DOSIFICACIÓN DE <?php if($dicContenido['NOMBREFICHA']!=""){echo $dicContenido['NOMBREFICHA'];}else{/*{CLASIFICACION}*/} ?> </strong>
				
			</div>
			<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
			<p><?php if($dicContenido['DOSIFICACION']!=""){echo $dicContenido['DOSIFICACION'];}else{/*{DOSIFICACION}*/} ?></p>		
			</div>
			<div style="color:#010a01; font-family: Times New Roman; font-size:55%; width:100%;">
			<?php if($dicContenido['TABLADOSI']!=""){echo $dicContenido['TABLADOSI'];}else{/*{TABLADOSI}*/} ?> 
		    </div>
		</div>
	
		<div id="divSerp"  style="{pede}">
			<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
			<strong> PERIODO DE RETIRO:   </strong>
			</div>
			<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
			<p> <?php if($dicContenido['PERIODORETIRO']!=""){echo $dicContenido['PERIODORETIRO'];}else{/*{PERIODORETIRO}*/} ?></p>
			</div>
		</div>
	
		<div id="divSerp"  style="{adve}">
			<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
			<strong> ADVERTENCIAS: </strong>
			</div>
			<div style="margin-top:0px; color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
			<p> <?php if($dicContenido['ADVERTENCIAS']!=""){echo $dicContenido['ADVERTENCIAS'];}else{/*{ADVERTENCIAS}*/} ?> </p>
			</div>
		</div>
	
		
		
	</div>
	
	<div class="der">
		<div id="divSerp"  style="{vercategoria}">
		<div  class="imag" style="text-align:center; margin-top: 0px;">
		 &nbsp;<img src="view/DevuelveImagen.php?id_valor=<?php if($dicContenido['IDFICHA']!=""){echo $dicContenido['IDFICHA'];}else{/*{IDFICHA}*/} ?>&id_nombre=id_fichas&tabla=fichas_fotos&campo=foto_fichas_fotos" width="160px" height="190px" />
		</div>
		</div>
		
		<div id="divSerp"  style="{admi}">
			<div style="background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
				<strong> VÍA DE ADMINISTRACIÓN: </strong>
			</div>
			<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
			<?php if($dicContenido['TABLAADMINISTRACION']!=""){echo $dicContenido['TABLAADMINISTRACION'];}else{/*{TABLAADMINISTRACION}*/} ?>	  
			</div>
		</div>
		
		<div id="divSerp"  style="{inte}">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
		<strong> INTERACCIONES:   </strong>
		</div>
		<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
		<p><?php if($dicContenido['INTERACIONES']!=""){echo $dicContenido['INTERACIONES'];}else{/*{INTERACIONES}*/} ?> </p>
		</div>
		</div>
	
	<div id="divSerp"  style="{cont}">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
		<strong> CONTRAINDICACIONES:   </strong>
		</div>
		<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
		<p> <?php if($dicContenido['CONTRAINDICACIONES']!=""){echo $dicContenido['CONTRAINDICACIONES'];}else{/*{CONTRAINDICACIONES}*/} ?></p>
		</div>
	</div>
	
	<div id="divSerp"  style="{efco}">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
		<strong> EFECTOS COLATERALES:   </strong>
		</div>
		<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
		<p><?php if($dicContenido['EFECTOS']!=""){echo $dicContenido['EFECTOS'];}else{/*{EFECTOS}*/} ?> </p>
		</div>
	</div>
	
	<div id="divSerp"  style="{cons}">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
		<strong> CONSERVACIÓN:   </strong>
		</div>
		<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
		<p> <?php if($dicContenido['CONSERVACION']!=""){echo $dicContenido['CONSERVACION'];}else{/*{CONSERVACION}*/} ?> </p>
		</div>
	</div>
	
	<div id="divSerp"  style="{pres}">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
		<strong> PRESENTACIONES:   </strong>
		</div>
		<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
		<p> <?php if($dicContenido['PRESENTACION']!=""){echo $dicContenido['PRESENTACION'];}else{/*{PRESENTACION}*/} ?> </p>
		</div>
	</div>
	
	<div id="divSerp"  style="{reag}">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
			<strong> REGISTRO AGROCALIDAD: </strong>
		</div>
		<div style="margin-top:0px; color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
			<p> <?php if($dicContenido['REGISTO']!=""){echo $dicContenido['REGISTO'];}else{/*{REGISTO}*/} ?> </p>
		</div>
	</div>
	
	
    </div>
	
	</div>
	
	<div style="width:100%; float:left; border:1px dashed white; {fapo}" >
	<div style="width:20%; border:1px dashed white; float:left;">
	
	</div>
	<div style="width:50%; border:1px dashed white; float:left;" >
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
  		<strong> FABRICADO POR:   </strong>
  		</div>
  		<div style="color:#010a01; font-family: Times New Roman; font-size:55%; width:100%;">
  		<?php if($dicContenido['FABRICADOPOR']!=""){echo $dicContenido['FABRICADOPOR'];}else{/*{FABRICADOPOR}*/} ?> 
  		</div>
	</div>
	<div style="width:20%; border:1px dashed white; float:left;">
	<p> &nbsp;</p>
	</div>
	</div>
	
	<div style="width:100%; float:left; border:1px dashed white; {dipo}" >
	<div style="width:20%; border:1px dashed white; float:left;">
	
	</div>
	<div style="width:50%; border:1px dashed white; float:left;" >
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
  		<strong> DISTRIBUIDO POR:   </strong>
  		</div>
  		<div style="color:#010a01; font-family: Times New Roman; font-size:55%; width:100%;">
  		<?php if($dicContenido['DISTIBUIDOPOR']!=""){echo $dicContenido['DISTIBUIDOPOR'];}else{/*{DISTIBUIDOPOR}*/} ?>
  		</div>
	</div>
	<div style="width:20%; border:1px dashed white; float:left;">
	<p> &nbsp;</p>
	</div>
	</div>
	
	<div style="width:98%; float:left;  margin:10px; 0px;" >
		<table class="info" style="width:100%;"><tr>
		<td class="infotd" style="font-size: 60%; padding: 5px;" align="justify">
		<strong> DECLARACIÓN LEGAL: </strong>
		<br>
		El contenido de este sitio es sólo para motivos informativos y de ninguna manera
		se debe utilizar sin consultar a un médico veterinario Toda la información es 
		proporcionada por el fabricante y / o distribuidor del producto por lo tanto Vademano
		no asume responsabilidad por errores u omisiones en los contenidos que se publican aquí.
		</td>
     </tr></table>
	</div>
	
	</div>
	
	<!-- para el derecho -->
	
	<div class="col-lg-6 col-md-6 col-xs-12">
	 <form action="<?php echo $helper->url("FichasProductos","verFicha"); ?>&id_fichas=<?php echo $res->id_fichas; ?>&nombre_fichas=<?php echo $res->nombre_fichas; ?>"  method="post" target="_blank" enctype="multipart/form-data" >
	 	<div class="row">
	 		<div class=" col-lg-12 col-md-12 col-xs-12">
	 			<input type="submit" name="imprimirficha" id="imprimirficha" value="Imprimir" class="btn btn-success">
	 			<input type="hidden" id="id_fichas" name="id_fichas" value="<?php if($dicContenido['IDFICHA']!=""){echo $dicContenido['IDFICHA'];}else{/*{DISTIBUIDOPOR}*/}?>">
	 		</div>
	 	</div>
	 </form>
	</div>
</div>  
 
 <div style="float: left;  width: 98%; margin-top: 50px;">
 <div class="row">
    <div style="background-color:#000000;  width: 100%; color:#ffffff; font-family: sans-serif; font-size:85%; text-align: center; ">
	 Copyright © Vademano 2015
	</div>	
 </div>
 </div>  
 </body>  
</html>   