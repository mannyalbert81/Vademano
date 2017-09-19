<?php

require_once '../core/DB_Functions.php';
$db = new DB_Functions();


if (isset($_POST['accion']) && isset($_POST['cliente'])   ) {

	// receiving the post params
	$accion = $_POST['accion'];
	$cliente = $_POST['cliente'];
	if ($accion == 'CONSULTAR')
	{
		$columnas = " rc_pedidos_cab.numero_pedidos_cab, fc_clientes.ruc_clientes, rc_pedidos_cab.fcha_pedidos_cab, COUNT(rc_pedidos_det.id_productos) AS registros";
		$talba = "public.rc_pedidos_cab, public.rc_pedidos_det, public.fc_clientes";
		$where = " rc_pedidos_det.id_pedidos_cab = rc_pedidos_cab.id_pedidos_cab AND fc_clientes.id_clientes = rc_pedidos_cab.id_clientes  AND fc_clientes.razon_social_clientes = '$cliente'
		GROUP BY rc_pedidos_cab.numero_pedidos_cab, fc_clientes.ruc_clientes, rc_pedidos_cab.fcha_pedidos_cab
		ORDER BY rc_pedidos_cab.numero_pedidos_cab";
		$resultado = $db->getCondiciones($columnas, $talba, $where);
	}
	echo json_encode($resultado);

	};
	
	
	
	
	
	
	
	
?>