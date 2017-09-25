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


echo json_encode($resultado);
}
else{
	
	
	echo "no entro";
}




	
?>