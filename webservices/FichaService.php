<?php

require_once '../core/DB_Functions.php';
$db = new DB_Functions();

$accion=(isset($_POST['action']))?$_POST['action']:'';
	

if($accion=="consulta"){

	
$columnas = " f.id_fichas_service, 
  f.id_fichas, 
  f.nombre_fichas, 
  f.encabezado_tabla_fichas, 
  f.farmacocinetica_fichas, 
  f.accion_terapeutica_fichas, 
  f.clasificacion_farmacologica_fichas, 
  f.forma_terapeutica_fichas, 
  f.indicaciones_uso_fichas, 
  f.interacciones_fichas, 
  f.contraindicaciones_fichas, 
  f.periodo_retiro_fichas, 
  f.advertencias_fichas, 
  f.presentacion_fichas, 
  f.registro_sanitario_fichas, 
  f.id_fichas_fotos, 
  f.consultas_fichas, 
  f.buscador, 
  f.mecanismo_accion_fichas, 
  f.efectos_colaterales_fichas, 
  f.conservacion_fichas, 
  f.ingredientes_fichas, 
  f.tipo_alimento_fichas, 
  f.encabezado_dosificacion_fichas, 
  f.tipo_ficha, 
  f.tabla_formas_administracion, 
  f.tabla_laboratorios, 
  f.tabla_distribuidores, 
  f.tabla_composicion, 
  f.tabla_dosificacion, 
  ff.foto_fichas_fotos";


$talba = "public.fichas_service f
  LEFT JOIN public.fichas_fotos ff
  ON ff.id_fichas = f.id_fichas";
$where = "1=1";
$resultado = $db->getCondiciones($columnas, $talba, $where);

//var_dump($resultado);

if(!empty($resultado)){
	
	foreach ($resultado as $res)
			{
				$rowfoto = new stdClass();
				$rowfoto->id_fichas= $res->id_fichas;
				$rowfoto->nombre_fichas= $res->nombre_fichas;
				$rowfoto->encabezado_tabla_fichas= $res->encabezado_tabla_fichas;
				$rowfoto->farmacocinetica_fichas= $res->farmacocinetica_fichas;
				$rowfoto->accion_terapeutica_fichas= $res->accion_terapeutica_fichas;
				$rowfoto->clasificacion_farmacologica_fichas= $res->clasificacion_farmacologica_fichas;
				$rowfoto->forma_terapeutica_fichas= $res->forma_terapeutica_fichas;
				$rowfoto->indicaciones_uso_fichas= $res->indicaciones_uso_fichas;
				$rowfoto->interacciones_fichas= $res->interacciones_fichas;
				$rowfoto->contraindicaciones_fichas= $res->contraindicaciones_fichas;
				$rowfoto->periodo_retiro_fichas= $res->periodo_retiro_fichas;
				$rowfoto->advertencias_fichas= $res->advertencias_fichas;
				$rowfoto->presentacion_fichas= $res->presentacion_fichas;
				$rowfoto->presentacion_fichas= $res->registro_sanitario_fichas;
				$rowfoto->id_fichas_fotos= $res->id_fichas_fotos;
				$rowfoto->consultas_fichas= $res->consultas_fichas;
				$rowfoto->buscador= $res->buscador;
				$rowfoto->mecanismo_accion_fichas= $res->mecanismo_accion_fichas;
				$rowfoto->efectos_colaterales_fichas= $res->efectos_colaterales_fichas;
				$rowfoto->conservacion_fichas= $res->conservacion_fichas;
				$rowfoto->ingredientes_fichas= $res->ingredientes_fichas;
				$rowfoto->tipo_alimento_fichas= $res->tipo_alimento_fichas;
				$rowfoto->encabezado_dosificacion_fichas= $res->encabezado_dosificacion_fichas;
				$rowfoto->tipo_ficha= $res->tipo_ficha;
				$rowfoto->tabla_formas_administracion= $res->tabla_formas_administracion;
				$rowfoto->tabla_laboratorios= $res->tabla_laboratorios;
				$rowfoto->tabla_distribuidores= $res->tabla_distribuidores;
				$rowfoto->tabla_composicion= $res->tabla_composicion;
				$rowfoto->tabla_dosificacion= $res->tabla_dosificacion;
				$rowfoto->foto_fichas_fotos= base64_encode(pg_unescape_bytea($res->foto_fichas_fotos));
				
				$listfotos[]=$rowfoto;
				
			} 
			
			$resultadosJson = json_encode($listfotos);
	}

	

echo $resultadosJson;

}
else{
	
	
	echo "no entro";
}




	
?>