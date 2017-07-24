<?php

$base_url = "http://192.168.10.10:4000/Vademano/";


$id_fichas                             = "";
$nombre_fichas						   = "";	  
$encabezado_tabla_fichas			   = "";	
$accion_terapeutica_fichas			   = ""; 
$clasificacion_farmacologica_fichas    = ""; 
$forma_terapeutica_fichas			   = "";	 
$indicaciones_uso_fichas			   = "";	 
$contraindicaciones_fichas			   = "";	 
$periodo_retiro_fichas				   = "";	 
$advertencias_fichas				   = "";	 
$presentacion_fichas				   = "";	 
$registro_sanitario_fichas			   = "";	 
$efectos_colaterales_fichas            = "";
$mecanismo_accion_fichas               = "";
$interacciones_fichas                   = "";
$conservacion_fichas                   = "";
$encabezado_dosificacion_fichas         = "";


//require('view/fpdf/fpdf.php');

require_once('view/dompdf/dompdf_config.inc.php' );;

foreach($resultRep as $res) 
{
	$id_fichas                             = $res->id_fichas;
	$nombre_fichas						   = $res->nombre_fichas;
	$encabezado_tabla_fichas			   = $res->encabezado_tabla_fichas;
	$accion_terapeutica_fichas			   = $res->accion_terapeutica_fichas;
	$clasificacion_farmacologica_fichas    = $res->clasificacion_farmacologica_fichas;
	$forma_terapeutica_fichas			   = $res->forma_terapeutica_fichas;
	$indicaciones_uso_fichas			   = $res->indicaciones_uso_fichas;
	$contraindicaciones_fichas			   = $res->contraindicaciones_fichas;
	$periodo_retiro_fichas				   = $res->periodo_retiro_fichas;
	$advertencias_fichas				   = $res->advertencias_fichas;
	$presentacion_fichas				   = $res->presentacion_fichas;
	$registro_sanitario_fichas			   = $res->registro_sanitario_fichas;
	$efectos_colaterales_fichas            = $res->efectos_colaterales_fichas;
    $mecanismo_accion_fichas               = $res->mecanismo_accion_fichas;
	$interacciones_fichas                   = $res->interacciones_fichas;
	$conservacion_fichas                   = $res->conservacion_fichas;
	$encabezado_dosificacion_fichas         = $res->encabezado_dosificacion_fichas;
	$logo_fichas_fotos = '<img src="'. $base_url.'view/DevuelveImagen.php?id_valor='.$id_fichas.'&id_nombre=id_fichas&tabla=fichas_fotos&campo=foto_fichas_fotos" width="180" height="200" />';
}
$id_distribuidores          ="";
$nombre_distribuidores      ="";
$telefono_persona_contacto_distribuidores =""; 
$email_distribuidores                     ="";
$web_distribuidores                       ="";


foreach($resultDis as $res) 
{
	$id_distribuidores                          = $res->id_distribuidores;
	$nombre_distribuidores					   = $res->nombre_distribuidores;
	$telefono_persona_contacto_distribuidores  = $res->telefono_persona_contacto_distribuidores;
	$email_distribuidores			           = $res->email_distribuidores;
	$web_distribuidores                        = $res->web_distribuidores;
    $logo_distribuidores = '<img src="'. $base_url.'view/DevuelveImagen.php?id_valor='.$id_distribuidores.'&id_nombre=id_distribuidores&tabla=distribuidores&campo=logo_distribuidores" width="120" height="80" />';
                           
	}

$id_laboratorios               ="";
$nombre_laboratorios           ="";
$telefono_persona_contacto_laboratorios         =""; 
$email_laboratorios            ="";
$web_laboratorios              ="";

if ($resultLab !="")
{

foreach($resultLab as $res) 
{
	$id_laboratorios                          = $res->id_laboratorios;
	$nombre_laboratorios					   = $res->nombre_laboratorios;
	$telefono_persona_contacto_laboratorios                  = $res->telefono_persona_contacto_laboratorios;
	$email_laboratorios			           = $res->email_laboratorios;
	$web_laboratorios                        = $res->web_laboratorios;
    $logo_laboratorios = '<img src="'. $base_url.'view/DevuelveImagen.php?id_valor='.$id_laboratorios.'&id_nombre=id_laboratorios&tabla=laboratorios&campo=logo_laboratorios" width="120" height="80" />';
                           
	}
}

$tabla_administracion = "";
$texto_administracion = "";
if ($resFicAdm !="")
{
	$texto_administracion = "<table border='1' style='width:100%;'  >";
	
	
	

foreach($resFicAdm as $resAdm) 
{
	$id_fichas_formas_administracion                             = $resAdm->id_fichas_formas_administracion;
	$nombre_formas_administracion                             = $resAdm->nombre_formas_administracion;
 	
           $texto_administracion = $texto_administracion . "<tr style='text-align: center;'>";
			$texto_administracion = $texto_administracion ."<td>";
				$texto_administracion = $texto_administracion .$nombre_formas_administracion;
			$texto_administracion = $texto_administracion ."</td>";
		$texto_administracion = $texto_administracion ."</tr>";
	}
	$texto_administracion = $texto_administracion . "</table>";
}
$tabla_administracion = $texto_administracion; 


$tabla_composiciones = "";
$texto_composiciones = "";
if ($resultCom !="")
{
	$texto_composiciones = "<table border='1' style='width:100%;'  >";
	
	$texto_composiciones = $texto_composiciones . "<tr >";
	$texto_composiciones = $texto_composiciones ."<th>";
	$texto_composiciones = $texto_composiciones . "Principio Activo";
	$texto_composiciones = $texto_composiciones ."</th>";
	$texto_composiciones = $texto_composiciones ."<th>";
	$texto_composiciones = $texto_composiciones ."Contenido";
	$texto_composiciones = $texto_composiciones ."</th>";
	$texto_composiciones = $texto_composiciones ."</tr>";
	
	
	foreach($resultCom as $resCom)
	{
		$nombre_composiciones           = $resCom->nombre_composiciones;
		$cantidad_fichas_composiciones  = $resCom->cantidad_fichas_composiciones;
			
		
		$texto_composiciones = $texto_composiciones . "<tr style='text-align: center;'>";
			$texto_composiciones = $texto_composiciones ."<td>";
				$texto_composiciones = $texto_composiciones .$nombre_composiciones;
			$texto_composiciones = $texto_composiciones ."</td>";
			$texto_composiciones = $texto_composiciones ."<td>";
				$texto_composiciones = $texto_composiciones .$cantidad_fichas_composiciones;
			$texto_composiciones = $texto_composiciones ."</td>";
		$texto_composiciones = $texto_composiciones ."</tr>";
	}
	$texto_composiciones = $texto_composiciones . "</table>";
}
$tabla_composiciones = $texto_composiciones; 


$tabla_dosificacion = "";
$tabla_especies = "";
$texto_dosificacion = "";
$texto_especies ="";
if ($resultDos !="")
{
	$texto_dosificacion = "<table border='1' style='width:100%;' >";

	$texto_dosificacion = $texto_dosificacion . "<tr >";
	$texto_dosificacion = $texto_dosificacion ."<th>";
	$texto_dosificacion = $texto_dosificacion . "Especie";
	$texto_dosificacion = $texto_dosificacion ."</th>";
	$texto_dosificacion = $texto_dosificacion ."<th>";
	$texto_dosificacion = $texto_dosificacion ."Dosis";
	$texto_dosificacion = $texto_dosificacion ."</th>";
	$texto_dosificacion = $texto_dosificacion ."</tr>";


	foreach($resultDos as $resDos)
	{
		$nombre_especies           = $resDos->nombre_especies  ;
		$dosis_fichas_dosificacion  = $resDos->dosis_fichas_dosificacion;
		$id_fichas           = $resEs->id_fichas  ;
		$id_especies           = $resEs->id_especies  ;

		$texto_dosificacion = $texto_dosificacion . "<tr style='text-align: center;'>";
		$texto_dosificacion = $texto_dosificacion ."<td>";
		$texto_dosificacion = $texto_dosificacion .$nombre_especies;
		$texto_dosificacion = $texto_dosificacion ."</td>";
		$texto_dosificacion = $texto_dosificacion ."<td>";
		$texto_dosificacion = $texto_dosificacion .$dosis_fichas_dosificacion;
		$texto_dosificacion = $texto_dosificacion ."</td>";
		$texto_dosificacion = $texto_dosificacion ."</tr>";
		
		
		$texto_especies = $texto_especies .  '<img src="'. $base_url.'view/DevuelveImagen.php?id_valor='.$id_especies.'&id_nombre=id_especies&tabla=especies&campo=logo_especies"  width="40" height="40" />';
		
	}
	$texto_dosificacion = $texto_dosificacion . "</table>";
}
$tabla_dosificacion = $texto_dosificacion;
$tabla_especies = $texto_especies;

$tabla_especies1 = "";
$texto_especies1 ="";
if ($resultEs !="")
{


	foreach($resultEs as $resEs)
	{
		$nombre_especies           = $resEs->nombre_especies  ;
		$id_fichas           = $resEs->id_fichas  ;
		$id_especies           = $resEs->id_especies  ;
		
		
		$texto_especies1 = $texto_especies1 .  '<img src="'. $base_url.'view/DevuelveImagen.php?id_valor='.$id_especies.'&id_nombre=id_especies&tabla=especies&campo=logo_especies"  width="40" height="40" />';
		
	}
}
$tabla_especies1 = $texto_especies1;

	
    

$html =
  '<html>'.
  '<head>'.
  	'<meta charset="utf-8"/>'.
  	'<title> '. $nombre_fichas  .' Vademano 2015</title>'.
  	
  '</head>'.
  '<body>'.
  '<div style="font-family: sans-serif; color:#31B046; whidth: 100%; text-align: center; ">'.
  	'<p  ><h2> <strong>'. $nombre_fichas  .'   </strong></h2> </p>'.
  	
  '</div>'.
  

  ///TABLA una COLUMNAS
  
  '<div style=" position: absolute;  margin-left: 0%; width:49%;">'.
  	    
		'<if>'.($clasificacion_farmacologica_fichas != "").'<{>'.
		'<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
  			'<strong>'. 'CATEGORÍA FARMACOLÓGICA:'. '</strong>'.
  		'</div>'.
        '<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%; text-align: center;">'.
  		'<p> '.$clasificacion_farmacologica_fichas.'</p>'.
  		'</div>'.
  		'<}>'. 
		
		'<if>'.($forma_terapeutica_fichas != "").'<{>'.
		'<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
  			'<strong>'. 'FORMA FARMACÉUTICA:'. '</strong>'.
  		'</div>'.
        '<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%; text-align: center;">'.
  		'<p> '.$forma_terapeutica_fichas.'</p>'.
  		'</div>'.
        '<}>'. 
         
  	     '<div style="text-align: center; width:100%;" >'.
    
  		$tabla_especies1.
  	    '</div>'.
        
   
  
  		'<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
  			'<strong>'. 'COMPOSICIÓN:'. '</strong>'.
  			
  		'</div>'.
           '<if>'.($encabezado_tabla_fichas != "").'<{>'.
		   '<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
  			'<p>'.$encabezado_tabla_fichas.'</p>'.	
  			'</div>'.
			'<}>'.			
			'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
  			''.	$tabla_composiciones .''.
  		'</div>'.
             
		  '<if>'.($accion_terapeutica_fichas != "").'<{>'.	 
         '<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
  			'<strong>'. 'CARACTERISTICAS: '. '</strong>'.
  		'</div>'.
  		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
  			'<p> '.$accion_terapeutica_fichas.'</p>'.
  		'</div>'.
  		'<}>'.			
		
	    '<if>'.($mecanismo_accion_fichas != "").'<{>'.	 
        '<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
  			'<strong>'. 'MECANISMOS DE ACCIÓN: '. '</strong>'.
  		'</div>'.
  		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
  			'<p> '.$mecanismo_accion_fichas.'</p>'.
  		'</div>'.
  		'<}>'.			
		
  		'<if>'.($indicaciones_uso_fichas != "").'<{>'.	 
        '<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
  			'<strong>'. 'INDICACIONES DE USO:  '. '</strong>'.
  		'</div>'.
  		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
  			'<p> '.$indicaciones_uso_fichas.'</p>'.
  		'</div>'.
  		'<}>'.
		
		'<if>'.($encabezado_dosificacion_fichas != "").'<{>'.
  		'<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
  			'<strong>'. 'DOSIFICACIÓN DE  '. '</strong>'.
			'<strong>'.$nombre_fichas. '</strong>'.
  		'</div>'.
		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
  			''.	$encabezado_dosificacion_fichas .''.	
  			'</div>'.
  		'<}>'.
		
		'<if>'.($periodo_retiro_fichas != "").'<{>'.
  		'<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
  		'<strong>'. 'PERIODO DE RETIRO:  '. '</strong>'.
  		'</div>'.
  		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
  		'<p> '.$periodo_retiro_fichas.'</p>'.
  		'</div>'.
  		'<}>'.
		
		'<if>'.($advertencias_fichas != "").'<{>'.
  		'<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
  		'<strong>'. 'ADVERTENCIAS:'. '</strong>'.
  		'</div>'.
  		'<div style="margin-top:10px; color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
  		'<p>'.$advertencias_fichas .'</p>'.
  		'</div>'.
  		'<}>'.
		
		'<if>'.($tabla_administracion != "").'<{>'.
  		'<div style="background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
			'<strong>'. 'VÍA DE ADMINISTRACIÓN:'. '</strong>'.
		'</div>'.
		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
			''. $tabla_administracion .''.
		'</div>'.
		'<}>'.
		
  	'</div>'.
  	
	  	
	//derecha
	'<div style="position: absolute;  margin-left: 50%; width:49%;">'.
          '<div style="text-align: center; width:100%;" >'.
          $logo_fichas_fotos .
    	'</div>'.
		
		'<if>'.($interacciones_fichas != "").'<{>'.
		'<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
		'<strong>'. 'INTERACCIONES:  '. '</strong>'.
		'</div>'.
		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
		'<p> '.$interacciones_fichas.'</p>'.
		'</div>'.
          '<}>'.
		
        '<if>'.($contraindicaciones_fichas != "").'<{>'.		
		'<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
		'<strong>'. 'CONTRAINDICACIONES:  '. '</strong>'.
		'</div>'.
		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
		'<p> '.$contraindicaciones_fichas.'</p>'.
		'</div>'.
           '<}>'.
		
          '<if>'.($efectos_colaterales_fichas != "").'<{>'.		
		'<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
		'<strong>'. 'EFECTOS COLATERALES:  '. '</strong>'.
		'</div>'.
		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
		'<p> '.$efectos_colaterales_fichas.'</p>'.
		'</div>'.
		'<}>'.
		
		'<if>'.($conservacion_fichas != "").'<{>'.
		'<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
		'<strong>'. 'CONSERVACIÓN:  '. '</strong>'.
		'</div>'.
		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
		'<p> '.$conservacion_fichas.'</p>'.
		'</div>'.
		'<}>'.
		
		'<if>'.($presentacion_fichas != "").'<{>'.
		'<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
		'<strong>'. 'PRESENTACIONES:  '. '</strong>'.
		'</div>'.
		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
		'<p> '.$presentacion_fichas.'</p>'.
		'</div>'.
		'<}>'.
		
		'<if>'.($registro_sanitario_fichas != "").'<{>'.
		'<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
			'<strong>'. 'REGISTRO AGROCALIDAD:'. '</strong>'.
		'</div>'.
		'<div style="margin-top:10px; color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
			'<p>'.	$registro_sanitario_fichas .'</p>'.
		'</div>'.
		'<}>'.
		
        '<if>'.($logo_laboratorios != "").'<{>'.
		'<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
		'<strong>'. 'FABRICADO POR:'. '</strong>'.
		'</div>'.
		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
		'<p>'.$logo_laboratorios .'</p>'.
		'</div>'.
         '<}>'.
		/*
		'<if>'.($logo_distribuidores != "").'<{>'.
		'<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
		'<strong>'. 'DISTRIBUIDO POR:'. '</strong>'.
		'</div>'.
		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
		'<p>'.$logo_distribuidores .'</p>'.
		'</div>'.
		'<}>'.
		*/
		'<div style="margin-top:10px; background-color:#999E9A; color:#FFFFFF; font-family: sans-serif; font-size:75%; width:100%;">'.
		'<strong>'. 'DECLARACIÓN LEGAL:'. '</strong>'.
		'</div>'.
		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
		''.'El contenido de este sitio es sólo para motivos informativos y de ninguna manera se debe utilizar sin consultar a un médico veterinario. Toda la información es proporcionada por el fabricante y / o distribuidor del producto por lo tanto Vademano no asume responsabilidad por errores u omisiones en los contenidos que se publican aquí..'.''.
		'</div>'.
		
	'</div>'.
		
		
	
	'<div style="background-color:#000000;  position: fixed; bottom: 0; width: 100%; color:#ffffff; font-family: sans-serif; font-size:55%; text-align: center; ">'.
	'Copyright © Vademano 2015'.
	'</div>'.
  	
  	

  
  
  '</body></html>';
 
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();

$dompdf->stream($nombre_fichas .'.pdf',array('Attachment'=>0));

?>