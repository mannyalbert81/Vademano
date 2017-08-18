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
    
    
    <script >
	$(document).ready(function(){
			
		$("#enviar_email").click(function(){
					
			$('#div_email').toggle("slow");
		
		});
	});
	</script>
	
    
    
    <script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_enviar").click(function() 
			{
		    	 
		    	var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
		    	var validaFecha = /([0-9]{4})\-([0-9]{2})\-([0-9]{2})/;
		    	 
		    	var correo_usuario = $("#correo_usuario").val();
		    	var nombres_usuario = $("#nombres_usuario").val();

		    	if (correo_usuario == "")
		    	{
			    	
		    		$("#mensaje_correo").text("Introduzca un correo");
		    		$("#mensaje_correo").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else if (regex.test($('#correo_usuario').val().trim()))
		    	{
		    		$("#mensaje_correo").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	else 
		    	{
		    		$("#mensaje_correo").text("Introduzca un correo Valido");
		    		$("#mensaje_correo").fadeIn("slow"); //Muestra mensaje de error
		            return false;	
			    }

		    	if (nombres_usuario == "")
		    	{
			    	
		    		$("#mensaje_nombres").text("Introduzca un Nombre");
		    		$("#mensaje_nombres").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_nombres").fadeOut("slow"); //Muestra mensaje de error
		            
				}


			}); 
		    $( "#correo_usuario" ).focus(function() {
				$("#mensaje_correo").fadeOut("slow");
			});
		    $( "#nombres_usuario" ).focus(function() {
				$("#mensaje_nombres").fadeOut("slow");
			});
		      
				    
		}); 

	</script>

    
    </head>
    <body class="cuerpo">
    	

 <form action="<?php echo $helper->url("FichasProductos","verFicha"); ?>&id_fichas=<?php echo $dicContenido['IDFICHA']; ?>"  method="post" target="_blank" enctype="multipart/form-data" class="col-lg-12">
   <div class="col-lg-12 col-md-12 division" ; style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px; ">
	<div class="col-lg-7 col-md-7 col-xs-12" style="margin-top: 30px;">
		<div style="font-family: Arial; font-size:16pt; color:#31B046; width: 100%; text-align: center; ">
		<font size=6><strong> <?php if($dicContenido['NOMBREFICHA']!=""){echo $dicContenido['NOMBREFICHA'];}else{/*{NOMBREFICHA}*/} ?></strong></font>
		</div>
		
		<div style="width:100%; margin-top:40px;">
		<div class="izq">
	
		<div id="divSerp" style="<?php if($dicContenido['cafa']!=""){echo $dicContenido['cafa'];}else{/*{{cafa}}*/} ?>">
			<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family:verdana; font-size:75%; width:100%;">
				<font size=3><strong> CATEGORÍA FARMACOLÓGICA: </strong></font>
			</div>
			<div style="color:#010a01; font-family:Times New Roman; font-size:60%; width:100%; text-align: center;">
			<p style="text-align: justify;"><font size=2><?php if($dicContenido['CLASIFICACION']!=""){echo $dicContenido['CLASIFICACION'];}else{/*{CLASIFICACION}*/} ?> </font></p>
			</div>
		</div>
		<div  id="divSerp"  style="<?php if($dicContenido['fofa']!=""){echo $dicContenido['fofa'];}else{/*{{fofa}}*/} ?>" >
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
  			<font size=3><strong> FORMA FARMACÉUTICA: </strong></font>
  		</div>
        <div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%; text-align: center;">
  		<p style="text-align: justify;"><font size=2><?php if($dicContenido['FORMA']!=""){echo $dicContenido['FORMA'];}else{/*{FORMA}*/} ?></font></p>
  		</div>
	    </div>
	
		<div id="divSerp"  style="<?php if($dicContenido['esde']!=""){echo $dicContenido['esde'];}else{/*{{esde}}*/} ?>">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; text-align:center; width:100%;">
		<font size=3><strong> ESPECIES DE DESTINO: </strong></font>
		</div>
		 <div style=" margin-top:10px; text-align: center; font-family: Times New Roman; font-size:55%;  width:100%;" >
		 <?php if($dicContenido['TABLAESPECIES']!=""){echo $dicContenido['TABLAESPECIES'];}else{/*{TABLAESPECIES}*/} ?>
		</div>
		</div>
		
		<div id="divSerp"  style="<?php if($dicContenido['comp']!=""){echo $dicContenido['comp'];}else{/*{{comp}}*/} ?>">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
			<font size=3><strong> COMPOSICIÓN: </strong></font>
		</div>
		<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
			<p style="text-align: justify;"><font size=2><?php if($dicContenido['ENCABEZADO']!=""){echo $dicContenido['ENCABEZADO'];}else{/*{ENCABEZADO}*/} ?></font></p>	
		</div>
					
		<div style="color:#010a01; font-family: Times New Roman; font-size:55%; width:100%;">
		<font size=4><?php if($dicContenido['TABLACOMP']!=""){echo $dicContenido['TABLACOMP'];}else{/*{TABLACOMP}*/} ?>	</font> 
		</div>
		</div>
		
		<div id="divSerp"  style="<?php if($dicContenido['cara']!=""){echo $dicContenido['cara'];}else{/*{{cara}}*/} ?>">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
  			<font size=3><strong> CARACTERISTICAS:  </strong></font>
  		</div>
  		<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
  		<p style="text-align: justify;"><font size=2><?php if($dicContenido['ACCIONTERAPEUTICA']!=""){echo $dicContenido['ACCIONTERAPEUTICA'];}else{/*{ACCIONTERAPEUTICA}*/} ?></font></p>
  		</div>
		</div>
	
		<div id="divSerp"  style="<?php if($dicContenido['mede']!=""){echo $dicContenido['mede'];}else{/*{{mede}}*/} ?>">
			<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
				<font size=3><strong> MECANISMOS DE ACCIÓN:  </strong></font>
			</div>
			<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
			<p style="text-align: justify;"><font size=2><?php if($dicContenido['MECANISMOACCION']!=""){echo $dicContenido['MECANISMOACCION'];}else{/*{MECANISMOACCION}*/} ?></font></p>
			</div>
		</div>
	
		<div id="divSerp"  style="<?php if($dicContenido['inde']!=""){echo $dicContenido['inde'];}else{/*{{inde}}*/} ?>">
			<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
				<font size=3><strong> INDICACIONES DE USO:   </strong></font>
			</div>
			<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
			<p style="text-align: justify;"><font size=2><?php if($dicContenido['INDICACIONES']!=""){echo $dicContenido['INDICACIONES'];}else{/*{INDICACIONES}*/} ?></font></p>
			</div>
		</div>
	
		<div id="divSerp"  style="<?php if($dicContenido['dode']!=""){echo $dicContenido['dode'];}else{/*{{dode}}*/} ?>">
			<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
				<font size=3><strong> DOSIFICACIÓN DE <?php if($dicContenido['NOMBREFICHA']!=""){echo $dicContenido['NOMBREFICHA'];}else{/*{CLASIFICACION}*/} ?> </strong></font>
				
			</div>
			<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
			<p style="text-align: justify;"><font size=2><?php if($dicContenido['DOSIFICACION']!=""){echo $dicContenido['DOSIFICACION'];}else{/*{DOSIFICACION}*/} ?></font></p>		
			</div>
			<div style="color:#010a01; font-family: Times New Roman; font-size:55%; width:100%;">
			<font size=4><?php if($dicContenido['TABLADOSI']!=""){echo $dicContenido['TABLADOSI'];}else{/*{TABLADOSI}*/} ?></font>
		    </div>
		</div>
	
		<div id="divSerp"  style="<?php if($dicContenido['pede']!=""){echo $dicContenido['pede'];}else{/*{{pede}}*/} ?>">
			<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
			<font size=3><strong> PERIODO DE RETIRO:   </strong></font>
			</div>
			<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
			<p style="text-align: justify;"><font size=2><?php if($dicContenido['PERIODORETIRO']!=""){echo $dicContenido['PERIODORETIRO'];}else{/*{PERIODORETIRO}*/} ?></font></p>
			</div>
		</div>
	
		<div id="divSerp"  style="<?php if($dicContenido['adve']!=""){echo $dicContenido['adve'];}else{/*{{adve}}*/} ?>">
			<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
			<font size=3><strong> ADVERTENCIAS: </strong></font>
			</div>
			<div style="margin-top:0px; color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
			<p style="text-align: justify;"><font size=2><?php if($dicContenido['ADVERTENCIAS']!=""){echo $dicContenido['ADVERTENCIAS'];}else{/*{ADVERTENCIAS}*/} ?></font></p>
			</div>
		</div>
	
		
		
	</div>
	
	<div class="der">
		<div id="divSerp"  style="{vercategoria}">
		<div  class="imag" style="text-align:center; margin-top: 0px;">
		 &nbsp;<img src="view/DevuelveImagen.php?id_valor=<?php if($dicContenido['IDFICHA']!=""){echo $dicContenido['IDFICHA'];}else{/*{IDFICHA}*/} ?>&id_nombre=id_fichas&tabla=fichas_fotos&campo=foto_fichas_fotos" width="160px" height="190px" />
		</div>
		</div>
		
		<div id="divSerp"  style="<?php if($dicContenido['admi']!=""){echo $dicContenido['admi'];}else{/*{{admi}}*/} ?>">
			<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
				<font size=3><strong> VÍA DE ADMINISTRACIÓN: </strong></font>
			</div>
			<div style="color:#010a01; font-family: Times New Roman; font-size:58%; width:100%;">
			<font size=2><?php if($dicContenido['TABLAADMINISTRACION']!=""){echo $dicContenido['TABLAADMINISTRACION'];}else{/*{TABLAADMINISTRACION}*/} ?></font>  
			</div>
		</div>
		
		<div id="divSerp"  style="<?php if($dicContenido['inte']!=""){echo $dicContenido['inte'];}else{/*{{inte}}*/} ?>">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
		<font size=3><strong> INTERACCIONES:   </strong></font>
		</div>
		<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
		<p style="text-align: justify;"><font size=2><?php if($dicContenido['INTERACIONES']!=""){echo $dicContenido['INTERACIONES'];}else{/*{INTERACIONES}*/} ?> </font></p>
		</div>
		</div>
	
	<div id="divSerp"  style="<?php if($dicContenido['cont']!=""){echo $dicContenido['cont'];}else{/*{{cont}}*/} ?>">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
		<font size=3><strong> CONTRAINDICACIONES:   </strong></font>
		</div>
		<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
		<p style="text-align: justify;"><font size=2><?php if($dicContenido['CONTRAINDICACIONES']!=""){echo $dicContenido['CONTRAINDICACIONES'];}else{/*{CONTRAINDICACIONES}*/} ?></font></p>
		</div>
	</div>
	
	<div id="divSerp"  style="<?php if($dicContenido['efco']!=""){echo $dicContenido['efco'];}else{/*{{efco}}*/} ?>">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
		<font size=3><strong> EFECTOS COLATERALES:   </strong></font>
		</div>
		<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
		<p style="text-align: justify;"><font size=2><?php if($dicContenido['EFECTOS']!=""){echo $dicContenido['EFECTOS'];}else{/*{EFECTOS}*/} ?></font></p>
		</div>
	</div>
	
	<div id="divSerp"  style="<?php if($dicContenido['cons']!=""){echo $dicContenido['cons'];}else{/*{{cons}}*/} ?>">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
		<font size=3><strong> CONSERVACIÓN:   </strong></font>
		</div>
		<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
		<p style="text-align: justify;"> <font size=2><?php if($dicContenido['CONSERVACION']!=""){echo $dicContenido['CONSERVACION'];}else{/*{CONSERVACION}*/} ?> </font></p>
		</div>
	</div>
	
	<div id="divSerp"  style="<?php if($dicContenido['pres']!=""){echo $dicContenido['pres'];}else{/*{{pres}}*/} ?>">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
		<font size=3><strong> PRESENTACIONES:   </strong></font>
		</div>
		<div style="color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
		<p style="text-align: justify;"><font size=2><?php if($dicContenido['PRESENTACION']!=""){echo $dicContenido['PRESENTACION'];}else{/*{PRESENTACION}*/} ?></font></p>
		</div>
	</div>
	
	<div id="divSerp"  style="<?php if($dicContenido['reag']!=""){echo $dicContenido['reag'];}else{/*{{reag}}*/} ?>">
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:75%; width:100%;">
			<font size=3><strong> REGISTRO AGROCALIDAD: </strong></font>
		</div>
		<div style="margin-top:0px; color:#010a01; font-family: Times New Roman; font-size:60%; width:100%;">
			<p style="text-align: justify;"><font size=2><?php if($dicContenido['REGISTO']!=""){echo $dicContenido['REGISTO'];}else{/*{REGISTO}*/} ?> </font></p>
		</div>
	</div>
	
	
    </div>
	
	</div>
	
	<div style="width:100%; float:left; border:1px dashed white; <?php if($dicContenido['fapo']!=""){echo $dicContenido['fapo'];}else{/*{{fapo}}*/} ?>" >
	<div style="width:20%; border:1px dashed white; float:left;">
	
	</div>
	<div style="width:50%;  float:left;" >
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:85%; width:100%;">
  		<font size=3><strong> FABRICADO POR:   </strong></font>
  		</div>
  		<div style="color:#010a01; font-family: Times New Roman; font-size:75%; width:100%;"><font size=4>
  		<?php if($dicContenido['FABRICADOPOR']!=""){echo $dicContenido['FABRICADOPOR'];}else{/*{FABRICADOPOR}*/} ?></font>
  		</div>
	</div>
	<div style="width:20%; border:1px dashed white; float:left;">
	<p> &nbsp;</p>
	</div>
	</div>
	
	<div style="width:100%; float:left; border:1px dashed white; <?php if($dicContenido['dipo']!=""){echo $dicContenido['dipo'];}else{/*{dipo}*/} ?>" >
	<div style="width:20%; border:1px dashed white; float:left;">
	
	</div>
	<div style="width:50%; border:1px dashed white; float:left;" >
		<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: verdana; font-size:85%; width:100%;">
  		<font size=3><strong> DISTRIBUIDO POR:   </strong></font>
  		</div>
  		<div style="color:#010a01; font-family: Times New Roman; font-size:75%; width:100%;"><font size=4>
  		<?php if($dicContenido['DISTIBUIDOPOR']!=""){echo $dicContenido['DISTIBUIDOPOR'];}else{/*{DISTIBUIDOPOR}*/} ?></font>
  		</div>
	</div>
	<div style="width:20%; border:1px dashed white; float:left;">
	<p> &nbsp;</p>
	</div>
	</div>
	
	<?php if (!empty($html)){?>
	<div class="col-lg-12 col-md-12 col-xs-12" style="margin-top: 30px;">
		<?php	echo $html;?>
    </div>
    <?php }?>
	
	<div style="width:98%; float:left;  margin:10px; 0px;" >
		<table class="info" style="width:100%;"><tr>
		<td class="info" style="font-size: 60%; padding: 5px;" align="justify">
		<font size=3 style="color:#010a01; font-family: Times New Roman;  width:100%;"><strong> DECLARACIÓN LEGAL: </strong></font>
		<br>
		<font size=2 style="color:#010a01; font-family: Times New Roman;  width:100%;">El contenido de este sitio es sólo para motivos informativos y de ninguna manera
		se debe utilizar sin consultar a un médico veterinario Toda la información es 
		proporcionada por el fabricante y / o distribuidor del producto por lo tanto Vademano
		no asume responsabilidad por errores u omisiones en los contenidos que se publican aquí.
		</font></td>
     </tr></table>
	</div>
	
	</div>
	
	<!-- para el derecho -->
	
	<div class="col-lg-5 col-md-5 col-xs-12" style="margin-top: 30px;">
	 	
	 	  
	 	   <div class="row">
	 		<div class=" col-lg-4 col-md-4 col-xs-3">
	 		 
	 	   <h4><button type="submit" name="imprimirficha" id="imprimirficha" value="" style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.25); border-radius: 15px 15px 15px 15px; width: 150; height: 100" class='glyphicon glyphicon-print'><h4 style = "font-family: Arial;"> Imprimir Ficha Producto</h4></button></h4>
	 			<input type="hidden" id="id_fichas" name="id_fichas" value="<?php if($dicContenido['IDFICHA']!=""){echo $dicContenido['IDFICHA'];}else{/*{DISTIBUIDOPOR}*/}?>"/>
	 		
	 		
           </div>
           
           <div class=" col-lg-4 col-md-4 col-xs-3">
	 		
	 		 <h4><button type="button" name="enviar_email" id="enviar_email" style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.25); border-radius: 15px 15px 15px 15px; width: 150; height: 100" value="" class='glyphicon glyphicon-envelope'><h4 style = "font-family: Arial;"> Enviar Ficha por Email</h4></button></h4>
	 		
           </div>
           <div class=" col-lg-4 col-md-4 col-xs-3">

	 		 <h4><button type="button" name="consulta_tecnica" id="consulta_tecnica" style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.25); border-radius: 15px 15px 15px 15px; width: 150; height: 100" value="" class='glyphicon glyphicon-user' ><h4 style = "font-family: Arial;">   Consulta Técnica</h4> </button></h4>

           </div>
        </div>
        
        <div class="row">
        <div class="col-xs-12 col-md-12" id="div_email" style="display: none;" >
      
       	 <div class="panel panel-info">
	     <div class="panel-body"> 
         
       <div class="col-xs-6 col-md-6 col-lg-6">
        <img src="view/DevuelveImagen.php?id_valor=<?php if($dicContenido['IDFICHA']!=""){echo $dicContenido['IDFICHA'];}else{/*{IDFICHA}*/} ?>&id_nombre=id_fichas&tabla=fichas_fotos&campo=foto_fichas_fotos" width="160px" height="190px" />
	   </div>
       
       <div class="col-xs-6 col-md-6 col-lg-6">
           <div class="col-xs-12 col-md-12">
		    <div class="form-group ">
		                          <label for="correo_usuario" class="control-label">Email:</label>
                                  <input type="email" class="form-control" id="correo_usuario" name="correo_usuario" value=""  placeholder="Email">
                                  <div id="mensaje_correo" class="errores"></div>
            </div>
            </div>
            <div class="col-xs-12 col-md-12">
		    <div class="form-group ">
		                          <label for="nombres_usuario" class="control-label">Nombre:</label>
                                  <input type="text" class="form-control" id="nombres_usuario" name="nombres_usuario" value=""  placeholder="Nombre">
                                  <div id="mensaje_nombres" class="errores"></div>
            </div>
		    </div>
		    
		    <div class="row">
		    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; margin-top: 20px;">
		    <div class="form-group">
		      <input type="submit" id="btn_enviar" name="btn_enviar"  onclick="this.form.action='<?php echo $helper->url("FichasProductos","enviarficha"); ?>&id_fichas=<?php echo $dicContenido['IDFICHA']; ?>'" value="Enviar"  class="btn btn-info"/>
		    </div>
		    </div>
		    </div>
		    </div>
       </div>
        </div>
        </div>
      </div>
	
	</div>
</div>  
  </form>
 <div style="float: left;  width: 98%; margin-top: 50px;">
 <div class="row">
    <div style="background-color:#000000;  width: 100%; color:#ffffff; font-family: sans-serif; font-size:85%; text-align: center; ">
	
	</div>	
 </div>
 </div>  
 </body>  
</html>   