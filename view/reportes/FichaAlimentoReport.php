<?php

$base_url = "http://192.168.10.154:4000/Vademano/";


$id_fichas                             = "";
$nombre_fichas						   = "";	  
$indicaciones_uso_fichas			   = "";	 
$periodo_retiro_fichas				   = "";	 
$presentacion_fichas				   = "";	 
$registro_sanitario_fichas			   = "";	 
$id_distribuidores					   = "";	 
$nombre_distribuidores			    	= "";
$id_laboratorios                       = ""; 
$nombre_laboratorios                   = "";
$conservacion_fichas                   = "";
$ingredientes_fichas                    = "";
$tipo_alimento_fichas                   = "";

//require('view/fpdf/fpdf.php');

require_once('view/dompdf/dompdf_config.inc.php' );;

foreach($resultRep as $res) 
{
	$id_fichas                             = $res->id_fichas;
	$nombre_fichas						   = $res->nombre_fichas;
	$indicaciones_uso_fichas			   = $res->indicaciones_uso_fichas;
	$periodo_retiro_fichas				   = $res->periodo_retiro_fichas;
	$presentacion_fichas				   = $res->presentacion_fichas;
	$registro_sanitario_fichas			   = $res->registro_sanitario_fichas;
	$id_distribuidores					   = $res->id_distribuidores;
	$nombre_distribuidores			    	= $res->nombre_distribuidores;
	$id_laboratorios                       = $res->id_laboratorios;
	$nombre_laboratorios                   = $res->nombre_laboratorios;
	$conservacion_fichas                   = $res->conservacion_fichas;
	$ingredientes_fichas                   = $res->ingredientes_fichas;
	$tipo_alimento_fichas                   = $res->tipo_alimento_fichas;
	
	$logo_fichas_fotos = '<img src="'. $base_url.'view/DevuelveImagen.php?id_valor='.$id_fichas.'&id_nombre=id_fichas&tabla=fichas_fotos&campo=foto_fichas_fotos" width="180" height="200" />';
}

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
		$id_fichas           = $resDos->id_fichas  ;
		$id_especies           = $resDos->id_especies  ;

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


  

$html =
  '<html>'.
  '<head>'.
  	'<meta charset="utf-8"/>'.
  	'<title> '. $nombre_fichas  .' Vademano 2015</title>'.
  	
  '</head>'.
  '<body>'.
  '<div style="font-family: sans-serif; color:#000000; whidth: 100%; text-align: right; ">'.
  	'<p  ><h2> <strong>'. $nombre_fichas  .'   </strong></h2> </p>'.
  	'<hr>'.
  '</div>'.
  
  ///LAB AN DISTRIBUI
  '<div style="		position: absolute; left:40%; width:250px;">'.
  	'<table style="whidth: 100%; text-align: center; "> '.
  		'<tr>'.
  			'<td>'.
  				'<img src="'. $base_url.'view/DevuelveImagen.php?id_valor='.$id_distribuidores.'&id_nombre=id_distribuidores&tabla=distribuidores&campo=logo_distribuidores"  width="120" height="80" />'.
  			//'<input type="image" name="image" src="'. $base_url.'view/DevuelveImagen.php?id_valor=12&id_nombre=id_fichas&tabla=fichas_fotos&campo=foto_fichas_fotos"  width="120" height="100" >'.
  			'</td>'.
  			//'<td>'.
  				//'<img src="'. $base_url.'view/DevuelveImagen.php?id_valor='.$id_laboratorios.'&id_nombre=id_laboratorios&tabla=laboratorios&campo=logo_laboratorios"  width="120" height="80" />'.
  			//'</td>'.
  		'</tr>'.
  	'</table>'.
  '</div>'.
  
  //posiciono el logo
'<div style="position: absolute; left:60%; margin-top:100px;  ">'.
	$logo_fichas_fotos.
'</div>'.

  ///TABLA una COLUMNAS
	'<div style="width:50%; margin-top:100px; text-align: center;  ">'.
	'<div style="font-family: sans-serif; " >'.
	'<p><strong>'.$tipo_alimento_fichas. '</p></strong>'.
	 
	'</div>'.
	'<div style="text-align: center; width:100%;" >'.
	
	$tabla_especies.
	'</div>'.
	'</div>'.
    
 
  '<div style=" position: absolute;  margin-left: 0%; width:49%;">'.
  
       
  		
  		'<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">'.
  			'<strong>'. 'COMPOSICIÓN NUTRICIONAL:'. '</strong>'.
  			'<hr>'.
  		'</div>'.
  			'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
  			''.	$tabla_composiciones .''.
  		'</div>'.
  		'<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">'.
  			'<strong>'. 'INGREDIENTES: '. '</strong>'.
  			'<hr>'.
  		'</div>'.
  		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
  			'<p> '.$ingredientes_fichas.'</p>'.
  		'</div>'.
        
  		'<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">'.
  			'<strong>'. 'INDICACIONES DE USO:  '. '</strong>'.
  		'<hr>'.
  		'</div>'.
  		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
  	     '<p>'.$indicaciones_uso_fichas.'</p>'.
  		'</div>'.
          
          
  		'<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">'.
  			'<strong>'. 'RECOMENDACIÓN DE ALIMENTACIÓN DIARIA DE  '. '</strong>'.
			'<strong>'.$nombre_fichas. '</strong>'.
  		'<hr>'.
  		'</div>'.
  		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
  			''.	$tabla_dosificacion .''.
  		'</div>'.
  		'<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">'.
  		'<strong>'. 'PERIODO DE RETIRO:  '. '</strong>'.
  		'<hr>'.
  		'</div>'.
  		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
  		'<p> '.$periodo_retiro_fichas.'</p>'.
  		'</div>'.
  		
  	'</div>'.
  	
	  	
	//derecha
	'<div style="margin-top:154px; position: absolute;  margin-left: 50%; width:49%;">'.
	 
		'<div style="background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">'.
			'<strong>'. 'CONSERVACIÓN:'. '</strong>'.
			'<hr>'.
		'</div>'.
		
		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
		'<p> '  .$conservacion_fichas. '</p>'.
		'</div>'.
	
		'<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">'.
		'<strong>'. 'PRESENTACIONES: '. '</strong>'.
		'<hr>'.
		'</div>'.
		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
		'<p> '.$presentacion_fichas.'</p>'.
		'</div>'.
				
		'<div style="margin-top:10px; background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">'.
			'<strong>'. 'REGISTRO AGROCALIDAD:'. '</strong>'.
		'<hr>'.
		'</div>'.
		'<div style="margin-top:10px; color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
			''.	$registro_sanitario_fichas .''.
		'</div>'.

		'</div>'.
		
		//UBICACION AL FINAL
		//'<div style="margin-top:400px; position: absolute;  margin-left: 10%; width:30%;">'.
		//'<img src="'. $base_url.'view/DevuelveImagen.php?id_valor='.$id_laboratorios.'&id_nombre=id_laboratorios&tabla=laboratorios&campo=logo_laboratorios"  width="120" height="80" />'.
		//'<p> '.'<img src="'. $base_url.'view/DevuelveImagen.php?id_valor='.$id_distribuidores.'&id_nombre=id_distribuidores&tabla=distribuidores&campo=logo_distribuidores"  width="120" height="80" />'.'</p>'.
		
		//'</div>'.
		
		
		'<div style="margin-top:400px; position: absolute;  margin-left: 30%; width:40%;">'.
		
		'<div style="background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">'.
		'<strong>'. 'FABRICADO POR:'. '</strong>'.
		'<hr>'.
		'</div>'.
		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
		''.$nombre_laboratorios.''.
			
		'</div>'.
		
		'<div style="background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">'.
		'<strong>'. 'DISTRIBUIDO POR:'. '</strong>'.
		'<hr>'.
		'</div>'.
		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
		''.	$nombre_distribuidores .''.
		'</div>'.
		'<div style="background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">'.
		'</div>'.
		'</div>'.
		
		'<div style="margin-top:500px; position: absolute;  margin-left: 5%; width:88%;">'.
		'<div style="background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">'.
		'<strong>'. 'DECLARACIÓN LEGAL:'. '</strong>'.
		'<hr>'.
		'</div>'.
		'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%; text-aling:justify";>'.
		''.'The contents of this site are for informational purposes only and in no way should by used without consulting a professional veterinarian. All the information above is provided by the manufacturer and/or distributor of the productl; therefore, no responsibility is assumed by vademano for any errors or omissions in the contents published here.'.''.
		'</div>'.
		'</div>'.
		
		//'<div style="margin-top:600px; position: absolute;  margin-left: 0%; width:99%;">'.
		
	//	'<div style="background-color:#FFFFFF; color:#000000; font-family: sans-serif; font-size:75%; width:100%;">'.
		//'<strong>'. 'DECLARACION LEGAL:'. '</strong>'.
		//'<hr>'.
		//'</div>'.
		//'<div style="color:#010a01; font-family: sans-serif; font-size:55%; width:100%;">'.
		//'<p> '.'The contents of this site are for informational purposes only and in no way should by used without consulting a professional veterinarian. All the information above is provided by the manufacturer and/or distributor of the productl; therefore, no responsibility is assumed by vademano for any errors or omissions in the contents published here.'.'</p>'.
		//'</div>'.
	//'</div>'.
	
	'<div style="background-color:#000000;  position: fixed; bottom: 0; width: 100%; color:#ffffff; font-family: sans-serif; font-size:55%; text-align: center; ">'.
	'Copyright © Vademano 2015'.
	'</div>'.
  	
  	/*	
  		'<tr style="color:#4bae4f; font-family: sans-serif; font-size:75%; " >'.
  		'<td>'.
  		
  		'<hr>'.
  		'</td>'.
  		'<td>'.
  		'<strong>'. 'SERVICIO AL CLIENTE:'. '</strong>'.
  		'<hr>'.
  		'</td>'.
  		'</tr>'.
  		'<tr>'.
  		'<td>'.
  		
  		'</td>'.
  		'<td>'.
  		''.	$nombre_distribuidores .''.
  		'</td>'.
  		'</tr>'.
  		*/

  
  
  '</body></html>';
 
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();

$dompdf->stream($nombre_fichas .'.pdf',array('Attachment'=>0));

?>