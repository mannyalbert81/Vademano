<?php

require_once '../core/DB_Functions.php';
$db = new DB_Functions();

$accion=(isset($_POST['action']))?$_POST['action']:'';
	

if($accion=="consulta"){

	
$columnas = "fichas_service.id_fichas, 
  fichas_service.nombre_fichas, 
  fichas_service.encabezado_tabla_fichas, 
  fichas_service.farmacocinetica_fichas, 
  fichas_service.accion_terapeutica_fichas, 
  fichas_service.clasificacion_farmacologica_fichas, 
  fichas_service.forma_terapeutica_fichas, 
  fichas_service.indicaciones_uso_fichas, 
  fichas_service.interacciones_fichas, 
  fichas_service.contraindicaciones_fichas, 
  fichas_service.periodo_retiro_fichas, 
  fichas_service.advertencias_fichas, 
  fichas_service.presentacion_fichas, 
  fichas_service.registro_sanitario_fichas, 
  fichas_service.id_fichas_fotos, 
  fichas_service.consultas_fichas, 
  fichas_service.buscador, 
  fichas_service.mecanismo_accion_fichas, 
  fichas_service.conservacion_fichas, 
  fichas_service.efectos_colaterales_fichas, 
  fichas_service.ingredientes_fichas, 
  fichas_service.tipo_alimento_fichas, 
  fichas_service.encabezado_dosificacion_fichas, 
  fichas_service.tipo_ficha, 
  fichas_service.tabla_formas_administracion, 
  fichas_service.tabla_laboratorios, 
  fichas_service.tabla_distribuidores, 
  fichas_service.tabla_composicion, 
  fichas_service.tabla_dosificacion";


$talba = "public.fichas_service";
$where = "1=1";
$resultado = $db->getCondiciones($columnas, $talba, $where);


echo json_encode($resultado);
}
else{
	
	
	echo "no entro";
}




	
?>