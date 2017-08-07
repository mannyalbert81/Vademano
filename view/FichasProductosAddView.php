<div class="head" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/headadmin.php"); ?>
 </div>

<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Agregar Fichas de Productos - Vademano 2015</title>
   
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
		    $("#btn_agregar_composicion").click(function() 
			{
		    	
		    	var id_composiciones = $("#id_composiciones").val();
		    	var cantidad_fichas_composiciones = $("#cantidad_fichas_composiciones").val();
		    	var id_unidades_medida = $("#id_unidades_medida").val();

		    	if (id_composiciones == "")
		    	{
					
			    	$("#mensaje_id_composiciones").text("Seleccione");
		    		$("#mensaje_id_composiciones").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_id_composiciones").fadeOut("slow"); //Muestra mensaje de error
		            
			    }

		    	if (cantidad_fichas_composiciones == "")
		    	{
					
			    	$("#mensaje_cantidad_fichas_composiciones").text("Introduzca una Cantidad");
		    		$("#mensaje_cantidad_fichas_composiciones").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_cantidad_fichas_composiciones").fadeOut("slow"); //Muestra mensaje de error
		            
			    }

		    	
		    	if (id_unidades_medida == "")
		    	{
					
			    	$("#mensaje_nombre_unidades_medida").text("Seleccione");
		    		$("#mensaje_nombre_unidades_medida").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_nombre_unidades_medida").fadeOut("slow"); //Muestra mensaje de error
		            
			    }
		    	
			}); 
			
			$( "#id_composiciones" ).focus(function() {
				$("#mensaje_id_composiciones").fadeOut("slow");
    		});
		
			$( "#cantidad_fichas_composiciones" ).focus(function() {
				$("#mensaje_cantidad_fichas_composiciones").fadeOut("slow");
    		});

			$( "#id_unidades_medida" ).focus(function() {
				$("#mensaje_nombre_unidades_medida").fadeOut("slow");
    		});
    							    				    
		}); 

	</script>
	
	<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_agregar_dosificacion").click(function() 
			{
		    	
		    	var id_especies = $("#id_especies_dosificacion").val();
		    	var dosis_fichas_dosificacion = $("#dosis_fichas_dosificacion").val();

		    	if (id_especies == "")
		    	{
					
			    	$("#mensaje_id_especies").text("Seleccione");
		    		$("#mensaje_id_especies").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_id_especies").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	if (dosis_fichas_dosificacion == "")
		    	{
					
			    	$("#mensaje_dosis_fichas_dosificacion").text("Campo Vacio");
		    		$("#mensaje_dosis_fichas_dosificacion").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_dosis_fichas_dosificacion").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }

		    	

			}); 
			
			$( "#id_especies_dosificacion" ).focus(function() {
				$("#mensaje_id_especies").fadeOut("slow");
    		});
		
			$( "#dosis_fichas_dosificacion" ).focus(function() {
				$("#mensaje_dosis_fichas_dosificacion").fadeOut("slow");
    		});
    							    
		}); 

	</script>


	<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_agregar_especies").click(function() 
			{
		    	
		    	var id_especies = $("#id_especies").val();
		    	
		    	if (id_especies == "")
		    	{
					
			    	$("#mensaje_id_especies_1").text("Seleccione");
		    		$("#mensaje_id_especies_1").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_id_especies_1").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	
		    	

			}); 
			
			$( "#id_especies" ).focus(function() {
				$("#mensaje_id_especies_1").fadeOut("slow");
    		});
		
			
    							    
		}); 

	</script>
	
	
	
	<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_agregar_admnistracion").click(function() 
			{
		    	
		    	var id_formas_administracion = $("#id_formas_administracion").val();
		    	
		    	if (id_formas_administracion == "")
		    	{
					
			    	$("#mensaje_id_formas_administracion").text("Seleccione");
		    		$("#mensaje_id_formas_administracion").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_id_formas_administracion").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	
		    	

			}); 
			
			$( "#id_formas_administracion" ).focus(function() {
				$("#mensaje_id_formas_administracion").fadeOut("slow");
    		});
		
			
    							    
		}); 

	</script>
	
	
	
	<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_agregar_distribuidores").click(function() 
			{
		    	
		    	var id_distribuidores = $("#id_distribuidores").val();
		    	
		    	if (id_distribuidores == "")
		    	{
					
			    	$("#mensaje_id_distribuidores").text("Seleccione");
		    		$("#mensaje_id_distribuidores").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_id_distribuidores").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	
		    	

			}); 
			
			$( "#id_distribuidores" ).focus(function() {
				$("#mensaje_id_distribuidores").fadeOut("slow");
    		});
		
			
    							    
		}); 

	</script>
	
	
	<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_agregar_laboratorios").click(function() 
			{
		    	
		    	var id_laboratorios = $("#id_laboratorios").val();
		    	
		    	if (id_laboratorios == "")
		    	{
					
			    	$("#mensaje_id_laboratorios").text("Seleccione");
		    		$("#mensaje_id_laboratorios").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_id_laboratorios").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	
		    	

			}); 
			
			$( "#id_laboratorios" ).focus(function() {
				$("#mensaje_id_laboratorios").fadeOut("slow");
    		});
		
			
    							    
		}); 

	</script>



	<script >
		$(document).ready(function(){

		    // cada vez que se cambia el valor del combo
		    $("#btn_guardar").click(function() 
			{
		    	
		    	var foto_fichas_fotos = $("#foto_fichas_fotos").val();
		    	var nombre_fichas = $("#nombre_fichas").val();
		    	var encabezado_tabla_fichas = $("#encabezado_tabla_fichas").val();
		    	var accion_terapeutica_fichas = $("#accion_terapeutica_fichas").val();
		    	var clasificacion_farmacologica_fichas = $("#clasificacion_farmacologica_fichas").val();
		    	var forma_terapeutica_fichas = $("#forma_terapeutica_fichas").val();;
		    	var indicaciones_uso_fichas = $("#indicaciones_uso_fichas").val();
		    	var interacciones_fichas = $("#interacciones_fichas").val();
		    	var contraindicaciones_fichas = $("#contraindicaciones_fichas").val();
		    	var periodo_retiro_fichas = $("#periodo_retiro_fichas").val();
		    	var advertencias_fichas = $("#advertencias_fichas").val();
		    	var presentacion_fichas = $("#presentacion_fichas").val();
		    	var registro_sanitario_fichas = $("#registro_sanitario_fichas").val();
		    	var mecanismo_accion_fichas = $("#mecanismo_accion_fichas").val();
		    	var efectos_colaterales_fichas = $("#efectos_colaterales_fichas").val();
		    	var conservacion_fichas = $("#conservacion_fichas").val();
		    	var encabezado_dosificacion_fichas = $("#encabezado_dosificacion_fichas").val();
		        
		    	if (nombre_fichas == "")
		    	{
					
			    	$("#mensaje_nombre").text("Campo Vacio");
		    		$("#mensaje_nombre").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_nombre").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
			    /*
		    	if (foto_fichas_fotos == "")
		    	{
					
			    	$("#mensaje_foto_fichas_fotos").text("Selecciones una Foto");
		    		$("#mensaje_foto_fichas_fotos").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_foto_fichas_fotos").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }	

		    	if (accion_terapeutica_fichas == "")
		    	{
					
			    	$("#mensaje_accion_terapeutica_fichas").text("Campo Vacio");
		    		$("#mensaje_accion_terapeutica_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_accion_terapeutica_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
				
		    	if (clasificacion_farmacologica_fichas == "")
		    	{
					
			    	$("#mensaje_clasificacion_farmacologica_fichas").text("Campo Vacio");
		    		$("#mensaje_clasificacion_farmacologica_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_clasificacion_farmacologica_fichas").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
				
		    	if (forma_terapeutica_fichas == "")
		    	{
					
			    	$("#mensaje_forma_terapeutica_fichas").text("Campo Vacio");
		    		$("#mensaje_forma_terapeutica_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_forma_terapeutica_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
				
		    	if (indicaciones_uso_fichas == "")
		    	{
					
			    	$("#mensaje_indicaciones_uso_fichas").text("Campo Vacio");
		    		$("#mensaje_indicaciones_uso_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_indicaciones_uso_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
				
		    	
		    	if (interacciones_fichas == "")
		    	{
					
			    	$("#mensaje_interacciones_fichas").text("Campo Vacio");
		    		$("#mensaje_interacciones_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_interacciones_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
				
		    	if (contraindicaciones_fichas == "")
		    	{
					
			    	$("#mensaje_contraindicaciones_fichas").text("Campo Vacio");
		    		$("#mensaje_contraindicaciones_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_contraindicaciones_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
				
		    	if (periodo_retiro_fichas == "")
		    	{
					
			    	$("#mensaje_periodo_retiro_fichas").text("Campo Vacio");
		    		$("#mensaje_periodo_retiro_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_periodo_retiro_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
				
		    	if (advertencias_fichas == "")
		    	{
					
			    	$("#mensaje_advertencias_fichas").text("Campo Vacio");
		    		$("#mensaje_advertencias_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_advertencias_fichas").fadeOut("slow"); //Muestra mensaje de error
			   
			    }
				

		    	if (presentacion_fichas == "")
		    	{
					
			    	$("#mensaje_presentacion_fichas").text("Campo Vacio");
		    		$("#mensaje_presentacion_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	
		    	else session_start();
				if(isset($_GET["id_fichas"]))
				{
			
					$_id_fichas = $_GET["id_fichas"];
					$_nombre_fichas = $_GET["nombre_fichas"];
					//Creamos el objeto usuario
					$fichas=new FichasModel();
					//Conseguimos todos los usuarios
					
					$fichas_composiciones = new FichasComposicionesModel();
					$where_com = "id_fichas = '$_id_fichas' ";
					
					$fichas_dosificacion = new FichasDosificacionModel();
					
					$fichas_especies = new FichasEspeciesModel();
					$where_es = "id_fichas = '$_id_fichas' ";	
					
					$fichas_formas_administracion = new FichasFormasAdministracionModel();
					$fichas_distribuidores = new FichasDistribuidoresModel();
					$fichas_laboratorios = new FichasLaboratoriosModel();
					
					
					$fichas_fotos = new FichasFotosModel();
			
			
					$columnas = " fichas.id_fichas,
							  fichas.nombre_fichas,
							  fichas.encabezado_tabla_fichas,
							  fichas.accion_terapeutica_fichas,
							  fichas.clasificacion_farmacologica_fichas,
							  fichas.forma_terapeutica_fichas,
							  fichas.indicaciones_uso_fichas,
							  fichas.interacciones_fichas,
							  fichas.contraindicaciones_fichas,
							  fichas.periodo_retiro_fichas,
							  fichas.advertencias_fichas,
							  fichas.presentacion_fichas,
							  fichas.registro_sanitario_fichas,
							  fichas_distribuidores.id_distribuidores,
							  distribuidores.nombre_distribuidores,
							  fichas_laboratorios.id_laboratorios,
							  laboratorios.nombre_laboratorios,
							  fichas.mecanismo_accion_fichas,
							  fichas.efectos_colaterales_fichas,
							  fichas.conservacion_fichas,
							  fichas.encabezado_dosificacion_fichas";
					$tablas   = "  public.fichas,
		  						public.distribuidores,
		  						public.laboratorios,
		  						public.fichas_distribuidores,
		  						public.fichas_laboratorios";
					$where    = " distribuidores.id_distribuidores = fichas_distribuidores.id_distribuidores AND laboratorios.id_laboratorios = fichas_laboratorios.id_laboratorios
					AND fichas_distribuidores.id_fichas =fichas.id_fichas AND fichas_laboratorios.id_fichas =fichas.id_fichas AND fichas.id_fichas = '$_id_fichas' ";
					$id       = "fichas.id_fichas";

					
			
					$columnas_com = "composiciones.nombre_composiciones, 
		  							fichas_composiciones.cantidad_fichas_composiciones, unidades_medida.nombre_unidades_medida";
					$tablas_com   = "public.fichas_composiciones,
		 							 public.composiciones, public.unidades_medida";
					$where_com    = "composiciones.id_composiciones = fichas_composiciones.id_composiciones AND fichas_composiciones.id_unidades_medida = unidades_medida.id_unidades_medida
									 AND fichas_composiciones.id_fichas = '$_id_fichas'	";
					$id_com		  = "composiciones.nombre_composiciones";	
					
					$columnas_dos = "especies.nombre_especies, fichas_dosificacion.dosis_fichas_dosificacion, fichas_dosificacion.id_fichas, fichas_dosificacion.id_especies";
					$tablas_dos   = "public.fichas_dosificacion, 
		  							 public.especies";
					$where_dos    = "fichas_dosificacion.id_especies = especies.id_especies
									 AND fichas_dosificacion.id_fichas = '$_id_fichas'	";
					$id_dos		  = "especies.nombre_especies";	

					$columnas_es = "especies.nombre_especies, fichas_especies.id_fichas, fichas_especies.id_especies";
					$tablas_es   = "public.fichas_especies, 
		  							 public.especies";
					$where_es    = "fichas_especies.id_especies = especies.id_especies
									 AND fichas_especies.id_fichas = '$_id_fichas'	";
					$id_es		  = "especies.nombre_especies";	
					
					
					
					$columnas_adm =  "fichas_formas_administracion.id_fichas_formas_administracion,
  							          formas_administracion.nombre_formas_administracion";
					$tablas_adm = "public.fichas_formas_administracion, public.formas_administracion";
					$where_adm  = "fichas_formas_administracion.id_formas_administracion = formas_administracion.id_formas_administracion
					AND  fichas_formas_administracion.id_fichas = '$_id_fichas' ";
					$id_adm     = "formas_administracion.nombre_formas_administracion";


					$columnas_distri =  " fichas_distribuidores.id_fichas_distribuidores,
							distribuidores.nombre_distribuidores";
					$tablas_distri = " public.fichas_distribuidores, public.distribuidores";
					$where_distri  = " fichas_distribuidores.id_distribuidores = distribuidores.id_distribuidores
					AND  fichas_distribuidores.id_fichas = '$_id_fichas' ";
					$id_distri     = "distribuidores.nombre_distribuidores";
					
					$columnas_labo =  " fichas_laboratorios.id_fichas_laboratorios,
							laboratorios.nombre_laboratorios";
					$tablas_labo = " public.fichas_laboratorios, public.laboratorios";
					$where_labo  = " fichas_laboratorios.id_laboratorios = laboratorios.id_laboratorios
					AND  fichas_laboratorios.id_fichas = '$_id_fichas' ";
					$id_labo     = "laboratorios.nombre_laboratorios";
					
	
					
			
					$resultRep = $fichas->getCondiciones($columnas, $tablas, $where, $id);
					
					$resultCom = $fichas_composiciones->getCondiciones($columnas_com, $tablas_com, $where_com, $id_com);
					$resultDos = $fichas_dosificacion->getCondiciones($columnas_dos, $tablas_dos, $where_dos, $id_dos);
					$resultEs = $fichas_especies->getCondiciones($columnas_es, $tablas_es, $where_es, $id_es);
		            $resFicAdm = $fichas_formas_administracion->getCondiciones($columnas_adm, $tablas_adm, $where_adm, $id_adm);
		            $resFicDistri = $fichas_distribuidores->getCondiciones($columnas_distri, $tablas_distri, $where_distri, $id_distri);
		            $resFicLabo = $fichas_laboratorios->getCondiciones($columnas_labo, $tablas_labo, $where_labo, $id_labo);
		        	$resultRep2 = "";
			
			
					///aqui aumento contador de visualizacion
					$colval_upd = " consultas_fichas = consultas_fichas + 1 ";
					$tabla_upd = "fichas";
					$where_upd = "id_fichas = '$_id_fichas' ";
					$resultUpd =  $fichas->UpdateBy($colval_upd, $tabla_upd, $where_upd);
					
					
					
					
					//muestro el reporte
			
					$this->report("Ficha",array(	"resultRep"=>$resultRep, "id_fichas"=>$_id_fichas, "nombre_fichas"=>$_nombre_fichas,
							"resultCom"=>$resultCom,
					        "resultDos"=>$resultDos,
							"resultEs"=>$resultEs,
					        "resFicAdm"=>$resFicAdm,
					        "resFicDistri"=>$resFicDistri,				
					        "resFicLabo"=>$resFicLabo
					));
			
				}
			
		    	{
					
			    	$("#mensaje_presentacion_fichas").fadeOut("slow"); //Muestra mensaje de error
			    	
			    }
				
		    	if (registro_sanitario_fichas == "")
		    	{
					
			    	$("#mensaje_registro_sanitario_fichas").text("Campo Vacio");
		    		$("#mensaje_registro_sanitario_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_registro_sanitario_fichas").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	
		    	if (mecanismo_accion_fichas == "")
		    	{
					
			    	$("#mensaje_mecanismo_accion_fichas").text("Campo Vacio");
		    		$("#mensaje_mecanismo_accion_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_mecanismo_accion_fichas").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	if (efectos_colaterles_fichas == "")
		    	{
					
			    	$("#mensaje_efectos_colaterles_fichas").text("Campo Vacio");
		    		$("#mensaje_efectos_colaterles_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_efectos_colaterles_fichas").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
		    	if (conservacion_fichas == "")
		    	{
					
			    	$("#mensaje_conservacion_fichas").text("Campo Vacio");
		    		$("#mensaje_conservacion_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_conservacion_fichas").fadeOut("slow"); //Muestra mensaje de error
			    
			    }

		    	if (encabezado_dosificacion_fichas == "")
		    	{
					
			    	$("#mensaje_encabezado_dosificacion_fichas").text("Campo Vacio");
		    		$("#mensaje_encabezado_dosificacion_fichas").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
					
			    	$("#mensaje_encabezado_dosificacion_fichas").fadeOut("slow"); //Muestra mensaje de error
			    
			    }
			    */
			}); 

			$( "#nombre_fichas" ).focus(function() {
				$("#mensaje_nombre").fadeOut("slow");
    		});
    		/*
			$( "#foto_fichas_fotos" ).focus(function() {
				$("#mensaje_fichas_fotos").fadeOut("slow");
    		});
			$( "#accion_terapeutica_fichas" ).focus(function() {
				$("#mensaje_accion_terapeutica_fichas").fadeOut("slow");
    		});
			$( "#clasificacion_farmacologica_fichas" ).focus(function() {
				$("#mensaje_clasificacion_farmacologica_fichas").fadeOut("slow");
    		});
			$( "#forma_terapeutica_fichas" ).focus(function() {
				$("#mensaje_forma_terapeutica_fichas").fadeOut("slow");
    		});
			$( "#indicaciones_uso_fichas" ).focus(function() {
				$("#mensaje_indicaciones_uso_fichas").fadeOut("slow");
    		});
			$( "#interacciones_fichas" ).focus(function() {
				$("#mensaje_interacciones_fichas").fadeOut("slow");
    		});
			$( "#contraindicaciones_fichas" ).focus(function() {
				$("#mensaje_contraindicaciones_fichas").fadeOut("slow");
    		});
			$( "#periodo_retiro_fichas" ).focus(function() {
				$("#mensaje_periodo_retiro_fichas").fadeOut("slow");
    		});
			$( "#advertencias_fichas" ).focus(function() {
				$("#mensaje_advertencias_fichas").fadeOut("slow");
    		});
			$( "#presentacion_fichas" ).focus(function() {
				$("#mensaje_presentacion_fichas").fadeOut("slow");
    		});
			$( "#registro_sanitario_fichas" ).focus(function() {
				$("#mensaje_registro_sanitario_fichas").fadeOut("slow");
    		});
			
			$( "#mecanismo_accion_fichas" ).focus(function() {
				$("#mensaje_mecanismo_accion_fichas").fadeOut("slow");
    		});
			$( "#efectos_colaterales_fichas" ).focus(function() {
				$("#mensaje_efectos_colaterales_fichas").fadeOut("slow");
    		});
			$( "#conservacion_fichas" ).focus(function() {
				$("#mensaje_conservacion_fichas").fadeOut("slow");
    		});
			$( "#encabezado_dosificacion_fichas" ).focus(function() {
				$("#mensaje_encabezado_dosificacion_fichas").fadeOut("slow");
    		});
				*/				    
		}); 

	</script>

		<script type="text/javascript">
		function mensaje(){
			
		  var respuesta = confirm('Seguro Desea Eliminar')
		   return respuesta;
		}
		
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
   
		   //$sel_foto_fichas_fotos = "";
		   $sel_id_fichas = "";
		   $sel_nombre_fichas = "";
		   $sel_encabezado_tabla_fichas = "";
		   $sel_accion_terapeutica_fichas = "";
		   $sel_clasificacion_farmacologica_fichas = "";
		   $sel_forma_terapeutica_fichas = "";
		   $sel_indicaciones_uso_fichas = "";
		   $sel_interacciones_fichas = "";
		   $sel_contraindicaciones_fichas = "";
		   $sel_periodo_retiro_fichas = "";
		   $sel_advertencias_fichas = "";
		   $sel_presentacion_fichas = "";
		   $sel_registro_sanitario_fichas = "";
		   
		   $sel_mecanismo_accion_fichas = "";
		   $sel_efectos_colaterales_fichas = "";
		   $sel_conservacion_fichas = "";
		   $sel_encabezado_dosificacion_fichas = "";
		   
		   if ($nueva_ficha)
		   {
		   	
		   }
		   else 
		   {
		   		if($_SERVER['REQUEST_METHOD']=='POST' )
		   		{
		   			
		   			//$sel_foto_fichas_fotos = $_FILES['foto_fichas_fotos'];  
		   			
		   			$sel_nombre_fichas = $_POST['nombre_fichas'];
		   			$sel_id_fichas = $_POST['id_fichas'];
					$sel_encabezado_tabla_fichas = $_POST['encabezado_tabla_fichas'];;
					$sel_accion_terapeutica_fichas = $_POST['accion_terapeutica_fichas'];
					$sel_clasificacion_farmacologica_fichas = $_POST['clasificacion_farmacologica_fichas'];
					$sel_forma_terapeutica_fichas = $_POST['forma_terapeutica_fichas'];
					$sel_indicaciones_uso_fichas = $_POST['indicaciones_uso_fichas'];
					$sel_interacciones_fichas = $_POST['interacciones_fichas'];
					$sel_contraindicaciones_fichas = $_POST['contraindicaciones_fichas'];
					$sel_periodo_retiro_fichas = $_POST['periodo_retiro_fichas'];
					$sel_advertencias_fichas = $_POST['advertencias_fichas'];
					$sel_presentacion_fichas = $_POST['presentacion_fichas'];
					$sel_registro_sanitario_fichas = $_POST['registro_sanitario_fichas'];
			    	$sel_mecanismo_accion_fichas = $_POST['mecanismo_accion_fichas'];
					$sel_efectos_colaterales_fichas = $_POST['efectos_colaterales_fichas'];
					$sel_conservacion_fichas = $_POST['conservacion_fichas'];
					$sel_encabezado_dosificacion_fichas = $_POST['encabezado_dosificacion_fichas'];
					
			     
		   		}
		   }
          
		   
		   		
		   
		?>

       
       
  		 <form action="<?php echo $helper->url("FichasProductos","index_dos"); ?>" method="post" enctype="multipart/form-data"  class="col-lg-12">
           <div class="col-lg-12 division"; style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px; "   >
        
         <?php if ($id_fichas > 0) { ?>
        	   
            	
		   		
            
          <?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
	         			 
			 
			<div class="panel panel-info" style="margin-top: 20px;">
            <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-plus'></i> Editar Ficha de Productos</h4>
	         </div>
	         <div class="panel-body">
	         
	         
	        <div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="nombre_fichas" class="control-label">Nombre Producto:</label>
                                  <input type="text" class="form-control" id="nombre_fichas" name="nombre_fichas" value="<?php echo $resEdit->nombre_fichas;     ?>"  placeholder="Nombre Producto" readonly />
                                 <input type="hidden" name="id_fichas" id="id_fichas" value="<?php echo $resEdit->id_fichas; ?>" class="form-control"/>
								<div id="mensaje_nombre" class="errores"></div>
			</div>
		    </div>
		    </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="clasificacion_farmacologica_fichas" class="control-label">Categoría Farmacológica:</label>
                                  <textarea type="text"  class="form-control" id="clasificacion_farmacologica_fichas" name="clasificacion_farmacologica_fichas" value=""  placeholder="Categoría Farmacológica"><?php echo  $resEdit->clasificacion_farmacologica_fichas; ?></textarea>
                                  <div id="mensaje_clasificacion_farmacologica_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="forma_terapeutica_fichas" class="control-label">Forma Farmacéutica:</label>
                                  <textarea type="text"  class="form-control" id="forma_terapeutica_fichas" name="forma_terapeutica_fichas" value=""  placeholder="Forma Farmacéutica"><?php echo $resEdit->forma_terapeutica_fichas; ?></textarea>
                                  <div id="mensaje_forma_terapeutica_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Editar, Eliminar o Agregar Composición</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	        <div class="row">
	        <div class="col-xs-12 col-md-12">
		     <div class="form-group ">
		                          <label for="encabezado_tabla_fichas" class="control-label">Texto Encabezado:</label>
                                  <input type="text" class="form-control" id="encabezado_tabla_fichas" name="encabezado_tabla_fichas" value="<?php echo $resEdit->encabezado_tabla_fichas;  ?>"  placeholder="Texto Encabezado" />
                                  <div id="mensaje_encabezado_tabla_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
		     
		     
		      <?php if(!empty($resultEditCompo)){foreach($resultEditCompo as $resultEditCompo) {?>
		      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_composiciones" class="control-label">Principio Activo:</label>
                                  <select name="id_composiciones" id="id_composiciones"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultCom as $res) {?>
										<option value="<?php echo $res->id_composiciones; ?>" <?php if ($res->id_composiciones == $resultEditCompo->id_composiciones )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_composiciones; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_composiciones" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="cantidad_fichas_composiciones" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="cantidad_fichas_composiciones" name="cantidad_fichas_composiciones" value="<?php echo $resultEditCompo->cantidad_fichas_composiciones; ?>"  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_composiciones" id="id_fichas_composiciones" value="<?php echo $resultEditCompo->id_fichas_composiciones;   ?>" class="form-control"/>
								  <div id="mensaje_cantidad_fichas_composiciones" class="errores"></div>
            </div>
		    </div>
             
             <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_unidades_medida" class="control-label">U/M:</label>
                                  <select name="id_unidades_medida" id="id_unidades_medida"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultUme as $res) {?>
										<option value="<?php echo $res->id_unidades_medida; ?>" <?php if ($res->id_unidades_medida == $resultEditCompo->id_unidades_medida )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_unidades_medida; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_nombre_unidades_medida" class="errores"></div>
             </div>
             </div>
	        </div>
		      
		      
		      <?php }} else {?>
		      
		      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_composiciones" class="control-label">Principio Activo:</label>
                                  <select name="id_composiciones" id="id_composiciones"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultCom as $res) {?>
										<option value="<?php echo $res->id_composiciones; ?>" ><?php echo $res->nombre_composiciones; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_composiciones" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="cantidad_fichas_composiciones" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="cantidad_fichas_composiciones" name="cantidad_fichas_composiciones" value=""  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_composiciones" id="id_fichas_composiciones" value="0" class="form-control"/>
								  <div id="mensaje_cantidad_fichas_composiciones" class="errores"></div>
            </div>
		    </div>
             
             <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_unidades_medida" class="control-label">U/M:</label>
                                  <select name="id_unidades_medida" id="id_unidades_medida"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultUme as $res) {?>
										<option value="<?php echo $res->id_unidades_medida; ?>" ><?php echo $res->nombre_unidades_medida; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_nombre_unidades_medida" class="errores"></div>
             </div>
             </div>
	        </div>
		      
		      <?php }?>
		     
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Nombre</th>
					    		<th style="text-align: left;  font-size: 11px;">Cantidad</th>
					    		<th style="text-align: left;  font-size: 11px;">Unidades de Medida</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					  		</tr>
				                
					            <?php foreach($resFicCom as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_composiciones; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_composiciones; ?>     </td> 
						               <td style="font-size: 11px;"> <?php echo $res->cantidad_fichas_composiciones; ?>     </td> 
						               <td style="font-size: 11px;"> <?php echo $res->nombre_unidades_medida; ?>     </td> 
						                <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_composiciones_editar=<?php echo $res->id_fichas_composiciones; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_composiciones_borrar=<?php echo $res->id_fichas_composiciones; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Principios </label>
			   </div>
			   
			   
	        </div>
	        
	        
	          <div class="row">
				  <div class="col-xs-12 col-md-6">
				  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
				  		<input type="submit" id="btn_agregar_composicion" name="btn_agregar_composicion" value="Agregar" class="btn btn-success"/>
				  	</div>
				  </div>
			   </div>
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="accion_terapeutica_fichas" class="control-label">Características:</label>
                                  <textarea type="text"  class="form-control" id="accion_terapeutica_fichas" name="accion_terapeutica_fichas" value=""  placeholder="Caracteristicas"><?php echo $resEdit->accion_terapeutica_fichas;       ?></textarea>
                                  <div id="mensaje_accion_terapeutica_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="mecanismo_accion_fichas" class="control-label">Mecanismo De Acción:</label>
                                  <textarea type="text"  class="form-control" id="mecanismo_accion_fichas" name="mecanismo_accion_fichas" value=""  placeholder="Mecanismo De Acción"><?php echo $resEdit->mecanismo_accion_fichas; ?></textarea>
                                  <div id="mensaje_mecanismo_accion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
			
			
			 <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="indicaciones_uso_fichas" class="control-label">Indicaciones de Uso:</label>
                                  <textarea type="text"  class="form-control" id="indicaciones_uso_fichas" name="indicaciones_uso_fichas" value=""  placeholder="Indicaciones de Uso"><?php echo $resEdit->indicaciones_uso_fichas; ?></textarea>
                                  <div id="mensaje_indicaciones_uso_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         
	         
	         <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Dosificación</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	        <div class="row">
	        <div class="col-xs-12 col-md-12">
		     <div class="form-group ">
		                          <label for="encabezado_dosificacion_fichas" class="control-label">Texto Encabezado:</label>
                                  <input type="text" class="form-control" id="encabezado_dosificacion_fichas" name="encabezado_dosificacion_fichas" value="<?php echo $resEdit->encabezado_dosificacion_fichas;  ?>"  placeholder="Texto Encabezado" />
                                  <div id="mensaje_encabezado_dosificacion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
		     
		     
		    <?php if(!empty($resultEditDosi)){foreach($resultEditDosi as $resultEditDosi) {?>
       	    <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_especies_dosificacion" class="control-label">Especies:</label>
                                  <select name="id_especies_dosificacion" id="id_especies_dosificacion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEspe as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" <?php if ($res->id_especies == $resultEditDosi->id_especies )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="dosis_fichas_dosificacion" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="dosis_fichas_dosificacion" name="dosis_fichas_dosificacion" value="<?php echo $resultEditDosi->dosis_fichas_dosificacion; ?>"  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_dosificacion" id="id_fichas_dosificacion" value="<?php echo $resultEditDosi->id_fichas_dosificacion;   ?>" class="form-control"/>
								  <div id="mensaje_dosis_fichas_dosificacion" class="errores"></div>
            </div>
		    </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_dosificacion" name="btn_agregar_dosificacion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
             
	        </div>
       	   
       	    <?php }} else {?>
       	     <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_especies_dosificacion" class="control-label">Especies:</label>
                                  <select name="id_especies_dosificacion" id="id_especies_dosificacion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEspe as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" ><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="dosis_fichas_dosificacion" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="dosis_fichas_dosificacion" name="dosis_fichas_dosificacion" value=""  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_dosificacion" id="id_fichas_dosificacion" value="0" class="form-control"/>
								  <div id="mensaje_dosis_fichas_dosificacion" class="errores"></div>
            </div>
		    </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_dosificacion" name="btn_agregar_dosificacion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
             
            
	        </div>
       	    <?php }?>
		    
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Especie</th>
					    		<th style="text-align: left;  font-size: 11px;">Dosis</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicDos as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_dosificacion; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_especies; ?>     </td> 
						               <td style="font-size: 11px;"> <?php echo $res->dosis_fichas_dosificacion; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_dosificacion_editar=<?php echo $res->id_fichas_dosificacion; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_dosificacion_borrar=<?php echo $res->id_fichas_dosificacion; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Especies </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         
	         
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Especies</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
	         
	         <?php if(!empty($resultEditEspecies)){foreach($resultEditEspecies as $resultEditEspecies) {?>
	           <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_especies" class="control-label">Especies:</label>
                                  <select name="id_especies" id="id_especies"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEsp as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" <?php if ($res->id_especies == $resultEditEspecies->id_especies )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies_1" class="errores"></div>
                                   <input type="hidden" name="id_fichas_especies" id="id_fichas_especies" value="<?php echo $resultEditEspecies->id_fichas_especies;   ?>" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_especies" name="btn_agregar_especies" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	    <?php }} else {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_especies" class="control-label">Especies:</label>
                                  <select name="id_especies" id="id_especies"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEsp as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" ><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies_1" class="errores"></div>
                                  <input type="hidden" name="id_fichas_especies" id="id_fichas_especies" value="0" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_especies" name="btn_agregar_especies" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	    <?php }?>
		   
            
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Especie</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicEs as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_especies; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_especies; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_especies_editar=<?php echo $res->id_fichas_especies; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_especies_borrar=<?php echo $res->id_fichas_especies; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Especies </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         
	         
	         
	         
	         
	         
	         
	            
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Vía de Administración</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
	          <?php if(!empty($resultEditFormAdm)){foreach($resultEditFormAdm as $resultEditFormAdm) {?>
	         <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_formas_administracion" class="control-label">Vía de Administración:</label>
                                  <select name="id_formas_administracion" id="id_formas_administracion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultFormAd as $res) {?>
										<option value="<?php echo $res->id_formas_administracion; ?>" <?php if ($res->id_formas_administracion == $resultEditFormAdm->id_formas_administracion )  echo  ' selected="selected" '  ;  ?>  ><?php echo $res->nombre_formas_administracion; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_formas_administracion" class="errores"></div>
                                  <input type="hidden" name="id_fichas_formas_administracion" id="id_fichas_formas_administracion" value="<?php echo $resultEditFormAdm->id_fichas_formas_administracion;   ?>" class="form-control"/>
								  
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_admnistracion" name="btn_agregar_admnistracion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     <?php }} else {?>
       	     
       	     <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_formas_administracion" class="control-label">Vía de Administración:</label>
                                  <select name="id_formas_administracion" id="id_formas_administracion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultFormAd as $res) {?>
										<option value="<?php echo $res->id_formas_administracion; ?>" ><?php echo $res->nombre_formas_administracion; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_formas_administracion" class="errores"></div>
                                  <input type="hidden" name="id_fichas_formas_administracion" id="id_fichas_formas_administracion" value="0" class="form-control"/>
								  
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_admnistracion" name="btn_agregar_admnistracion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     <?php }?>
		 
            
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Via de Administración</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicAdm as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_formas_administracion; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_formas_administracion; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_formas_administracion_editar=<?php echo $res->id_fichas_formas_administracion; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_formas_administracion_borrar=<?php echo $res->id_fichas_formas_administracion; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Vias de Administración </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="interacciones_fichas" class="control-label">Interacciones:</label>
                                  <textarea type="text"  class="form-control" id="interacciones_fichas" name="interacciones_fichas" value=""  placeholder="Interacciones"><?php echo $resEdit->interacciones_fichas; ?></textarea>
                                  <div id="mensaje_interacciones_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="contraindicaciones_fichas" class="control-label">Contra Indicaciones:</label>
                                  <textarea type="text"  class="form-control" id="contraindicaciones_fichas" name="contraindicaciones_fichas" value=""  placeholder="Contra Indicaciones"><?php echo $resEdit->contraindicaciones_fichas; ?></textarea>
                                  <div id="mensaje_contraindicaciones_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="efectos_colaterales_fichas" class="control-label">Efectos Colaterales:</label>
                                  <textarea type="text"  class="form-control" id="efectos_colaterales_fichas" name="efectos_colaterales_fichas" value=""  placeholder="Efectos Colaterales"><?php echo $resEdit->efectos_colaterales_fichas; ?></textarea>
                                  <div id="mensaje_efectos_colaterales_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="periodo_retiro_fichas" class="control-label">Periodo de Retiro:</label>
                                  <textarea type="text"  class="form-control" id="periodo_retiro_fichas" name="periodo_retiro_fichas" value=""  placeholder="Periodo de Retiro"><?php echo $resEdit->periodo_retiro_fichas; ?></textarea>
                                  <div id="mensaje_periodo_retiro_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="advertencias_fichas" class="control-label">Advertencias:</label>
                                  <textarea type="text"  class="form-control" id="advertencias_fichas" name="advertencias_fichas" value=""  placeholder="Advertencias"><?php echo $resEdit->advertencias_fichas; ?></textarea>
                                  <div id="mensaje_advertencias_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="presentacion_fichas" class="control-label">Presentaciones:</label>
                                  <textarea type="text"  class="form-control" id="presentacion_fichas" name="presentacion_fichas" value=""  placeholder="Presentaciones"><?php echo $resEdit->presentacion_fichas; ?></textarea>
                                  <div id="mensaje_presentacion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="conservacion_fichas" class="control-label">Conservación:</label>
                                  <textarea type="text"  class="form-control" id="conservacion_fichas" name="conservacion_fichas" value=""  placeholder="Conservación"><?php echo $resEdit->conservacion_fichas; ?></textarea>
                                  <div id="mensaje_conservacion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="registro_sanitario_fichas" class="control-label">Regristro Agrocalidad:</label>
                                  <textarea type="text"  class="form-control" id="registro_sanitario_fichas" name="registro_sanitario_fichas" value=""  placeholder="Regristro Agrocalidad"><?php echo $resEdit->registro_sanitario_fichas; ?></textarea>
                                  <div id="mensaje_registro_sanitario_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         
	         
	         
	         
	         
	         
	          
	            
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Distribuidores</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
	       <?php if(!empty($resultEditDistri)){foreach($resultEditDistri as $resultEditDistri) {?>
	        <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_distribuidores" class="control-label">Distribuidores:</label>
                                  <select name="id_distribuidores" id="id_distribuidores"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultDis as $res) {?>
										<option value="<?php echo $res->id_distribuidores; ?>" <?php if ($res->id_distribuidores == $resultEditDistri->id_distribuidores )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_distribuidores; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_distribuidores" class="errores"></div>
                                  <input type="hidden" name="id_fichas_distribuidores" id="id_fichas_distribuidores" value="<?php echo $resultEditDistri->id_fichas_distribuidores;   ?>" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_distribuidores" name="btn_agregar_distribuidores" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	   <?php }} else {?>
       	   
       	    <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_distribuidores" class="control-label">Distribuidores:</label>
                                  <select name="id_distribuidores" id="id_distribuidores"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultDis as $res) {?>
										<option value="<?php echo $res->id_distribuidores; ?>" ><?php echo $res->nombre_distribuidores; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_distribuidores" class="errores"></div>
                                  <input type="hidden" name="id_fichas_distribuidores" id="id_fichas_distribuidores" value="0" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_distribuidores" name="btn_agregar_distribuidores" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	   <?php }?>
		    
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Nombre del Distribuidor</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicDistri as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_distribuidores; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_distribuidores; ?>     </td> 
						                <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_distribuidores_editar=<?php echo $res->id_fichas_distribuidores; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_distribuidores_borrar=<?php echo $res->id_fichas_distribuidores; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Distribuidores </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         
	         
	             
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Laboratorios</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
		     
		     
       	     <?php if(!empty($resultEditLabo)){foreach($resultEditLabo as $resultEditLabo) {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_laboratorios" class="control-label">Laboratorios:</label>
                                  <select name="id_laboratorios" id="id_laboratorios"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultLab as $res) {?>
										<option value="<?php echo $res->id_laboratorios; ?>" <?php if ($res->id_laboratorios == $resultEditLabo->id_laboratorios )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_laboratorios; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_laboratorios" class="errores"></div>
                                   <input type="hidden" name="id_fichas_laboratorios" id="id_fichas_laboratorios" value="<?php echo $resultEditLabo->id_fichas_laboratorios;   ?>" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_laboratorios" name="btn_agregar_laboratorios" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     
       	     <?php }} else {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_laboratorios" class="control-label">Laboratorios:</label>
                                  <select name="id_laboratorios" id="id_laboratorios"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultLab as $res) {?>
										<option value="<?php echo $res->id_laboratorios; ?>" ><?php echo $res->nombre_laboratorios; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_laboratorios" class="errores"></div>
                                  <input type="hidden" name="id_fichas_laboratorios" id="id_fichas_laboratorios" value="0" class="form-control"/>
								
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_laboratorios" name="btn_agregar_laboratorios" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     <?php }?>
       	     
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Nombre del Laboratorio</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicLabo as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_laboratorios; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_laboratorios; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_laboratorios_editar=<?php echo $res->id_fichas_laboratorios; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_laboratorios_borrar=<?php echo $res->id_fichas_laboratorios; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Laboratorios </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	        <div class="row">
	        <div class="col-xs-3 col-md-3">
		    <div class="form-group ">
		                          <label for="logo_especies" class="control-label">Logo del Producto:</label>
                                  <input type="file" class="form-control" id="foto_fichas_fotos" name="foto_fichas_fotos" accept="image/*" class="form-control" />
                                  <div id="mensaje_foto_fichas_fotos" class="errores"></div>
            </div>
		    </div>
	        </div> 
	         
	         
	          <div class="row">
			  <div class="col-xs-12 col-md-12" style="text-align: center;" >
			  	<input type="submit" id="btn_guardar" name="btn_guardar" value="Guardar Ficha" class="btn btn-success"/>
			  </div>
			 </div> 
	         
			 </div>
			 </div>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 
			 <?php } } else {?>
			 
			 
			 
			 
			 
			 
			 
			 
			 
			<div class="panel panel-info" style="margin-top: 20px;">
            <div class="panel-heading">
	         <h4><i class='glyphicon glyphicon-plus'></i> Insetar Nueva Ficha de Productos</h4>
	         </div>
	         <div class="panel-body">
	         
	         
	        <div class="row">
		    <div class="col-xs-6 col-md-6">
		    <div class="form-group ">
		                          <label for="nombre_fichas" class="control-label">Nombre Producto:</label>
                                  <input type="text" class="form-control" id="nombre_fichas" name="nombre_fichas" value="<?php if ($sel_nombre_fichas !="") {echo $sel_nombre_fichas; } else {echo $nombre_fichas;}     ?>"  placeholder="Nombre Producto" readonly />
                                 <input type="hidden" name="id_fichas" id="id_fichas" value="<?php if ($sel_id_fichas !="") {echo $sel_id_fichas; } else {echo $id_fichas;} ?>" class="form-control"/>
								<div id="mensaje_nombre" class="errores"></div>
			</div>
		    </div>
		    </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="clasificacion_farmacologica_fichas" class="control-label">Categoría Farmacológica:</label>
                                  <textarea type="text"  class="form-control" id="clasificacion_farmacologica_fichas" name="clasificacion_farmacologica_fichas" value=""  placeholder="Categoría Farmacológica"><?php if ($sel_clasificacion_farmacologica_fichas !="") {echo $sel_clasificacion_farmacologica_fichas; } else{ echo $clasificacion_farmacologica_fichas;}     ?> </textarea>
                                  <div id="mensaje_clasificacion_farmacologica_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="forma_terapeutica_fichas" class="control-label">Forma Farmacéutica:</label>
                                  <textarea type="text"  class="form-control" id="forma_terapeutica_fichas" name="forma_terapeutica_fichas" value=""  placeholder="Forma Farmacéutica"><?php if ($sel_forma_terapeutica_fichas !="") {echo $sel_forma_terapeutica_fichas; } else{ echo $forma_terapeutica_fichas;}  ?></textarea>
                                  <div id="mensaje_forma_terapeutica_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Composición</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	        <div class="row">
	        <div class="col-xs-12 col-md-12">
		     <div class="form-group ">
		                          <label for="encabezado_tabla_fichas" class="control-label">Texto Encabezado:</label>
                                  <input type="text" class="form-control" id="encabezado_tabla_fichas" name="encabezado_tabla_fichas" value="<?php if ($sel_encabezado_tabla_fichas !="") {echo $sel_encabezado_tabla_fichas; } else{ echo $encabezado_tabla_fichas;}  ?>"  placeholder="Texto Encabezado" />
                                  <div id="mensaje_encabezado_tabla_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
		     
		      <?php if(!empty($resultEditCompo)){foreach($resultEditCompo as $resultEditCompo) {?>
		      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_composiciones" class="control-label">Principio Activo:</label>
                                  <select name="id_composiciones" id="id_composiciones"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultCom as $res) {?>
										<option value="<?php echo $res->id_composiciones; ?>" <?php if ($res->id_composiciones == $resultEditCompo->id_composiciones )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_composiciones; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_composiciones" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="cantidad_fichas_composiciones" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="cantidad_fichas_composiciones" name="cantidad_fichas_composiciones" value="<?php echo $resultEditCompo->cantidad_fichas_composiciones; ?>"  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_composiciones" id="id_fichas_composiciones" value="<?php echo $resultEditCompo->id_fichas_composiciones;   ?>" class="form-control"/>
								  <div id="mensaje_cantidad_fichas_composiciones" class="errores"></div>
            </div>
		    </div>
             
             <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_unidades_medida" class="control-label">U/M:</label>
                                  <select name="id_unidades_medida" id="id_unidades_medida"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultUme as $res) {?>
										<option value="<?php echo $res->id_unidades_medida; ?>" <?php if ($res->id_unidades_medida == $resultEditCompo->id_unidades_medida )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_unidades_medida; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_nombre_unidades_medida" class="errores"></div>
             </div>
             </div>
	        </div>
		      
		      
		      <?php }} else {?>
		      
		      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_composiciones" class="control-label">Principio Activo:</label>
                                  <select name="id_composiciones" id="id_composiciones"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultCom as $res) {?>
										<option value="<?php echo $res->id_composiciones; ?>" ><?php echo $res->nombre_composiciones; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_composiciones" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="cantidad_fichas_composiciones" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="cantidad_fichas_composiciones" name="cantidad_fichas_composiciones" value=""  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_composiciones" id="id_fichas_composiciones" value="0" class="form-control"/>
								  <div id="mensaje_cantidad_fichas_composiciones" class="errores"></div>
            </div>
		    </div>
             
             <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_unidades_medida" class="control-label">U/M:</label>
                                  <select name="id_unidades_medida" id="id_unidades_medida"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultUme as $res) {?>
										<option value="<?php echo $res->id_unidades_medida; ?>" ><?php echo $res->nombre_unidades_medida; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_nombre_unidades_medida" class="errores"></div>
             </div>
             </div>
	        </div>
		      
		      <?php }?>
		    
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Nombre</th>
					    		<th style="text-align: left;  font-size: 11px;">Cantidad</th>
					    		<th style="text-align: left;  font-size: 11px;">Unidades de Medida</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicCom as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_composiciones; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_composiciones; ?>     </td> 
						               <td style="font-size: 11px;"> <?php echo $res->cantidad_fichas_composiciones; ?>     </td> 
						               <td style="font-size: 11px;"> <?php echo $res->nombre_unidades_medida; ?>     </td> 
						                 <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_composiciones_editar=<?php echo $res->id_fichas_composiciones; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_composiciones_borrar=<?php echo $res->id_fichas_composiciones; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Principios </label>
			   </div>
	        </div>
	        
	        
	          <div class="row">
				  <div class="col-xs-12 col-md-6">
				  	<div class="col-xs-12 col-md-12" style="text-align: center;" >
				  		<input type="submit" id="btn_agregar_composicion" name="btn_agregar_composicion" value="Agregar" class="btn btn-success"/>
				  	</div>
				  </div>
			   </div>
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="accion_terapeutica_fichas" class="control-label">Características:</label>
                                  <textarea type="text"  class="form-control" id="accion_terapeutica_fichas" name="accion_terapeutica_fichas" value=""  placeholder="Caracteristicas"><?php if ($sel_accion_terapeutica_fichas !="") {echo $sel_accion_terapeutica_fichas; }else{ echo $accion_terapeutica_fichas;}      ?></textarea>
                                  <div id="mensaje_accion_terapeutica_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="mecanismo_accion_fichas" class="control-label">Mecanismo De Acción:</label>
                                  <textarea type="text"  class="form-control" id="mecanismo_accion_fichas" name="mecanismo_accion_fichas" value=""  placeholder="Mecanismo De Acción"><?php if ($sel_mecanismo_accion_fichas !="") {echo $sel_mecanismo_accion_fichas; }else{ echo $mecanismo_accion_fichas;}   ?></textarea>
                                  <div id="mensaje_mecanismo_accion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
			
			
			 <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="indicaciones_uso_fichas" class="control-label">Indicaciones de Uso:</label>
                                  <textarea type="text"  class="form-control" id="indicaciones_uso_fichas" name="indicaciones_uso_fichas" value=""  placeholder="Indicaciones de Uso"><?php if ($sel_indicaciones_uso_fichas !="") {echo $sel_indicaciones_uso_fichas; }else{ echo $indicaciones_uso_fichas;}  ?></textarea>
                                  <div id="mensaje_indicaciones_uso_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         
	         
	         <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Dosificación</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	        <div class="row">
	        <div class="col-xs-12 col-md-12">
		     <div class="form-group ">
		                          <label for="encabezado_dosificacion_fichas" class="control-label">Texto Encabezado:</label>
                                  <input type="text" class="form-control" id="encabezado_dosificacion_fichas" name="encabezado_dosificacion_fichas" value="<?php if ($sel_encabezado_dosificacion_fichas !="") {echo $sel_encabezado_dosificacion_fichas; }else{ echo $encabezado_dosificacion_fichas;}   ?>"  placeholder="Texto Encabezado" />
                                  <div id="mensaje_encabezado_dosificacion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
		     
		      <?php if(!empty($resultEditDosi)){foreach($resultEditDosi as $resultEditDosi) {?>
       	    <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_especies_dosificacion" class="control-label">Especies:</label>
                                  <select name="id_especies_dosificacion" id="id_especies_dosificacion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEspe as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" <?php if ($res->id_especies == $resultEditDosi->id_especies )  echo  ' selected="selected" '  ;  ?> ><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="dosis_fichas_dosificacion" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="dosis_fichas_dosificacion" name="dosis_fichas_dosificacion" value="<?php echo $resultEditDosi->dosis_fichas_dosificacion; ?>"  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_dosificacion" id="id_fichas_dosificacion" value="<?php echo $resultEditDosi->id_fichas_dosificacion;   ?>" class="form-control"/>
								  <div id="mensaje_dosis_fichas_dosificacion" class="errores"></div>
            </div>
		    </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_dosificacion" name="btn_agregar_dosificacion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
             
	        </div>
       	   
       	    <?php }} else {?>
       	     <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-4 col-md-4">
		     <div class="form-group">
                                  <label for="id_especies_dosificacion" class="control-label">Especies:</label>
                                  <select name="id_especies_dosificacion" id="id_especies_dosificacion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEspe as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" ><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies" class="errores"></div>
             </div>
             </div>
             
            <div class="col-xs-4 col-md-4">
		    <div class="form-group ">
		                          <label for="dosis_fichas_dosificacion" class="control-label">Dosis:</label>
                                  <input type="text" class="form-control" id="dosis_fichas_dosificacion" name="dosis_fichas_dosificacion" value=""  placeholder="Dosis">
                                  <input type="hidden" name="id_fichas_dosificacion" id="id_fichas_dosificacion" value="0" class="form-control"/>
								  <div id="mensaje_dosis_fichas_dosificacion" class="errores"></div>
            </div>
		    </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_dosificacion" name="btn_agregar_dosificacion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
             
            
	        </div>
       	    <?php }?>
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Especie</th>
					    		<th style="text-align: left;  font-size: 11px;">Dosis</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicDos as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_dosificacion; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_especies; ?>     </td> 
						               <td style="font-size: 11px;"> <?php echo $res->dosis_fichas_dosificacion; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_dosificacion_editar=<?php echo $res->id_fichas_dosificacion; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_dosificacion_borrar=<?php echo $res->id_fichas_dosificacion; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Especies </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         
	         
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Especies</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
		  <?php if(!empty($resultEditEspecies)){foreach($resultEditEspecies as $resultEditEspecies) {?>
	           <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_especies" class="control-label">Especies:</label>
                                  <select name="id_especies" id="id_especies"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEsp as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" <?php if ($res->id_especies == $resultEditEspecies->id_especies )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies_1" class="errores"></div>
                                   <input type="hidden" name="id_fichas_especies" id="id_fichas_especies" value="<?php echo $resultEditEspecies->id_fichas_especies;   ?>" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_especies" name="btn_agregar_especies" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	    <?php }} else {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_especies" class="control-label">Especies:</label>
                                  <select name="id_especies" id="id_especies"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultEsp as $res) {?>
										<option value="<?php echo $res->id_especies; ?>" ><?php echo $res->nombre_especies; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_especies_1" class="errores"></div>
                                  <input type="hidden" name="id_fichas_especies" id="id_fichas_especies" value="0" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_especies" name="btn_agregar_especies" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	    <?php }?>
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Especie</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicEs as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_especies; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_especies; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_especies_editar=<?php echo $res->id_fichas_especies; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_especies_borrar=<?php echo $res->id_fichas_especies; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Especies </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         
	         
	         
	         
	         
	         
	         
	            
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Vía de Administración</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
		  <?php if(!empty($resultEditFormAdm)){foreach($resultEditFormAdm as $resultEditFormAdm) {?>
	         <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_formas_administracion" class="control-label">Vía de Administración:</label>
                                  <select name="id_formas_administracion" id="id_formas_administracion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultFormAd as $res) {?>
										<option value="<?php echo $res->id_formas_administracion; ?>" <?php if ($res->id_formas_administracion == $resultEditFormAdm->id_formas_administracion )  echo  ' selected="selected" '  ;  ?>  ><?php echo $res->nombre_formas_administracion; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_formas_administracion" class="errores"></div>
                                  <input type="hidden" name="id_fichas_formas_administracion" id="id_fichas_formas_administracion" value="<?php echo $resultEditFormAdm->id_fichas_formas_administracion;   ?>" class="form-control"/>
								  
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_admnistracion" name="btn_agregar_admnistracion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     <?php }} else {?>
       	     
       	     <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_formas_administracion" class="control-label">Vía de Administración:</label>
                                  <select name="id_formas_administracion" id="id_formas_administracion"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultFormAd as $res) {?>
										<option value="<?php echo $res->id_formas_administracion; ?>" ><?php echo $res->nombre_formas_administracion; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_formas_administracion" class="errores"></div>
                                  <input type="hidden" name="id_fichas_formas_administracion" id="id_fichas_formas_administracion" value="0" class="form-control"/>
								  
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_admnistracion" name="btn_agregar_admnistracion" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     <?php }?>
		 
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Via de Administración</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicAdm as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_formas_administracion; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_formas_administracion; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_formas_administracion_editar=<?php echo $res->id_fichas_formas_administracion; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_formas_administracion_borrar=<?php echo $res->id_fichas_formas_administracion; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Vias de Administración </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="interacciones_fichas" class="control-label">Interacciones:</label>
                                  <textarea type="text"  class="form-control" id="interacciones_fichas" name="interacciones_fichas" value=""  placeholder="Interacciones"><?php if ($sel_interacciones_fichas !="") {echo $sel_interacciones_fichas; }else{ echo $interacciones_fichas;} ?></textarea>
                                  <div id="mensaje_interacciones_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="contraindicaciones_fichas" class="control-label">Contra Indicaciones:</label>
                                  <textarea type="text"  class="form-control" id="contraindicaciones_fichas" name="contraindicaciones_fichas" value=""  placeholder="Contra Indicaciones"><?php if ($sel_contraindicaciones_fichas !="") {echo $sel_contraindicaciones_fichas; }else{ echo $contraindicaciones_fichas;} ?></textarea>
                                  <div id="mensaje_contraindicaciones_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="efectos_colaterales_fichas" class="control-label">Efectos Colaterales:</label>
                                  <textarea type="text"  class="form-control" id="efectos_colaterales_fichas" name="efectos_colaterales_fichas" value=""  placeholder="Efectos Colaterales"><?php if ($sel_efectos_colaterales_fichas !="") {echo $sel_efectos_colaterales_fichas; }else{ echo $efectos_colaterales_fichas;} ?></textarea>
                                  <div id="mensaje_efectos_colaterales_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="periodo_retiro_fichas" class="control-label">Periodo de Retiro:</label>
                                  <textarea type="text"  class="form-control" id="periodo_retiro_fichas" name="periodo_retiro_fichas" value=""  placeholder="Periodo de Retiro"><?php if ($sel_periodo_retiro_fichas !="") {echo $sel_periodo_retiro_fichas; }else{ echo $periodo_retiro_fichas;} ?></textarea>
                                  <div id="mensaje_periodo_retiro_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="advertencias_fichas" class="control-label">Advertencias:</label>
                                  <textarea type="text"  class="form-control" id="advertencias_fichas" name="advertencias_fichas" value=""  placeholder="Advertencias"><?php if ($sel_advertencias_fichas !="") {echo $sel_advertencias_fichas; }else{ echo $advertencias_fichas;}  ?></textarea>
                                  <div id="mensaje_advertencias_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="presentacion_fichas" class="control-label">Presentaciones:</label>
                                  <textarea type="text"  class="form-control" id="presentacion_fichas" name="presentacion_fichas" value=""  placeholder="Presentaciones"><?php if ($sel_presentacion_fichas !="") {echo $sel_presentacion_fichas; }else{ echo $presentacion_fichas;} ?></textarea>
                                  <div id="mensaje_presentacion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         <div class="row">
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="conservacion_fichas" class="control-label">Conservación:</label>
                                  <textarea type="text"  class="form-control" id="conservacion_fichas" name="conservacion_fichas" value=""  placeholder="Conservación"><?php if ($sel_conservacion_fichas !="") {echo $sel_conservacion_fichas; }else{ echo $conservacion_fichas;} ?></textarea>
                                  <div id="mensaje_conservacion_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     <div class="col-xs-6 col-md-6">
		     <div class="form-group ">
		                          <label for="registro_sanitario_fichas" class="control-label">Regristro Agrocalidad:</label>
                                  <textarea type="text"  class="form-control" id="registro_sanitario_fichas" name="registro_sanitario_fichas" value=""  placeholder="Regristro Agrocalidad"><?php if ($sel_registro_sanitario_fichas !="") {echo $sel_registro_sanitario_fichas; }else{ echo $registro_sanitario_fichas;} ?></textarea>
                                  <div id="mensaje_registro_sanitario_fichas" class="errores"></div>
			 
             </div>
		     </div>
		     </div>
	         
	         
	         
	         
	         
	         
	         
	         
	         
	          
	            
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Distribuidores</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
		    <?php if(!empty($resultEditDistri)){foreach($resultEditDistri as $resultEditDistri) {?>
	        <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_distribuidores" class="control-label">Distribuidores:</label>
                                  <select name="id_distribuidores" id="id_distribuidores"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultDis as $res) {?>
										<option value="<?php echo $res->id_distribuidores; ?>" <?php if ($res->id_distribuidores == $resultEditDistri->id_distribuidores )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_distribuidores; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_distribuidores" class="errores"></div>
                                  <input type="hidden" name="id_fichas_distribuidores" id="id_fichas_distribuidores" value="<?php echo $resultEditDistri->id_fichas_distribuidores;   ?>" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_distribuidores" name="btn_agregar_distribuidores" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	   <?php }} else {?>
       	   
       	    <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_distribuidores" class="control-label">Distribuidores:</label>
                                  <select name="id_distribuidores" id="id_distribuidores"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultDis as $res) {?>
										<option value="<?php echo $res->id_distribuidores; ?>" ><?php echo $res->nombre_distribuidores; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_distribuidores" class="errores"></div>
                                  <input type="hidden" name="id_fichas_distribuidores" id="id_fichas_distribuidores" value="0" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_distribuidores" name="btn_agregar_distribuidores" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	   <?php }?>
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Nombre del Distribuidor</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    	    <th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicDistri as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_distribuidores; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_distribuidores; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_distribuidores_editar=<?php echo $res->id_fichas_distribuidores; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_distribuidores_borrar=<?php echo $res->id_fichas_distribuidores; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Distribuidores </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	         
	         
	         
	             
	        <div class="col-xs-12 col-md-12 col-lg-12">
	        <div class="panel panel-info">
            <div class="panel-heading">
	        <h4><i class='glyphicon glyphicon-plus'></i> Insertar Laboratorios</h4>
	        </div>
	        <div class="panel-body">
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         
		      <?php if(!empty($resultEditLabo)){foreach($resultEditLabo as $resultEditLabo) {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_laboratorios" class="control-label">Laboratorios:</label>
                                  <select name="id_laboratorios" id="id_laboratorios"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultLab as $res) {?>
										<option value="<?php echo $res->id_laboratorios; ?>" <?php if ($res->id_laboratorios == $resultEditLabo->id_laboratorios )  echo  ' selected="selected" '  ;  ?>><?php echo $res->nombre_laboratorios; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_laboratorios" class="errores"></div>
                                   <input type="hidden" name="id_fichas_laboratorios" id="id_fichas_laboratorios" value="<?php echo $resultEditLabo->id_fichas_laboratorios;   ?>" class="form-control"/>
								 
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_laboratorios" name="btn_agregar_laboratorios" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     
       	     <?php }} else {?>
       	      <div class="row">
		     <?php $cantidad=0;?>
	         <div class="col-xs-6 col-md-6">
		     <div class="form-group">
                                  <label for="id_laboratorios" class="control-label">Laboratorios:</label>
                                  <select name="id_laboratorios" id="id_laboratorios"  class="form-control" >
                                  <option value="" selected="selected">--Seleccione--</option>
									<?php foreach($resultLab as $res) {?>
										<option value="<?php echo $res->id_laboratorios; ?>" ><?php echo $res->nombre_laboratorios; ?> </option>
							        <?php } ?>
								   </select> 
                                  <div id="mensaje_id_laboratorios" class="errores"></div>
                                  <input type="hidden" name="id_fichas_laboratorios" id="id_fichas_laboratorios" value="0" class="form-control"/>
								
             </div>
             </div>
             
             
            <div class="col-xs-4 col-md-4" style="margin-top:18px";>
		    <div class="form-group ">
		                         <input type="submit" id="btn_agregar_laboratorios" name="btn_agregar_laboratorios" value="Agregar" class="btn btn-success"/>
			   
            </div>
		    </div>
            </div>
       	     <?php }?>
       	     
		    </div>
		    
		    
	        <div class="col-xs-6 col-md-6 col-lg-6">
	         <div class="col-xs-12 col-md-12">
	         <label  class="control-label">Agregados:</label>
			  	  	<section class="col-lg-12 " style="height:100px;overflow-y:scroll;">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Nombre del Laboratorio</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php foreach($resFicLabo as $res) {?>
					        		<?php $cantidad= $cantidad + 1; ?>
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_fichas_laboratorios; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->nombre_laboratorios; ?>     </td> 
						               <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_laboratorios_editar=<?php echo $res->id_fichas_laboratorios; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("FichasProductos","index_dos"); ?>&id_fichas_laboratorios_borrar=<?php echo $res->id_fichas_laboratorios; ?>&id_fichas=<?php echo $id_fichas; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php } ?>
				            
				       	</table>     
				    </section>
				     <label  class="control-label">Se han agregado <?php  echo $cantidad ?> Laboratorios </label>
			   </div>
	        </div>
	         
	        
	        </div>
	        </div>
	        </div>
	         
	         
	         
	        <div class="row">
	        <div class="col-xs-3 col-md-3">
		    <div class="form-group ">
		                          <label for="logo_especies" class="control-label">Logo del Producto:</label>
                                  <input type="file" class="form-control" id="foto_fichas_fotos" name="foto_fichas_fotos" accept="image/*" class="form-control" />
                                  <div id="mensaje_foto_fichas_fotos" class="errores"></div>
            </div>
		    </div>
	        </div> 
	         
	         
	          <div class="row">
			  <div class="col-xs-12 col-md-12" style="text-align: center;" >
			  	<input type="submit" id="btn_guardar" name="btn_guardar" value="Guardar Ficha" class="btn btn-success"/>
			  </div>
			 </div> 
	         
			 </div>
			 </div>
			 
			 
			  	
		  
		 
           
			  
		    
           
        
		
		<?php }?>

	   <?php }?>  
	   
	     </div>
       
          </form>
       
           	<div class="col-lg-12">
  					
   		     <?php include("view/modulos/servicios.php"); ?>	
   			 
   		</div>     
  <?php include("view/modulos/beforefooter.php"); ?>
    		
       
   
     </body>  
    </html>   