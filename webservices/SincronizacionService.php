<?php

require_once '../core/DB_Functions.php';
$db = new DB_Functions();

if(isset($_GET['id_usuario']))
{
	$_id_usuario=trim($_GET['id_usuario']);
	$columnas = "es.nombre_estado,
  				us.id_usuario,
				us.nombres_usuario,
 				us.apellidos_usuario,
 			 	us.usuario_usuario,
  				us.celular_usuario,
  				us.telefono_usuario";
	
	

	$tabla = "usuarios us INNER JOIN  estado es
				ON us.id_estado = es.id_estado";
	$where = " es.nombre_estado='ACTIVO'  AND  us.id_usuario = '$_id_usuario'  ";
	
	
	$resultado = $db->getCondiciones($columnas, $tabla, $where);
	$resultadosJson="";
	
	if(!empty($resultado))
	{
		$listusuario = [];
		foreach ($resultado as $res)
		{
			$rowlist = new stdClass();			
			$rowlist->nombres = $res->nombres_usuario;
			$rowlist->apellidos = $res->apellidos_usuario;
			$rowlist->usuario = $res->usuario_usuario;
			$rowlist->celular = $res->celular_usuario;
			$rowlist->telefono = $res->telefono_usuario;
			$rowlist->estado = $res->nombre_estado;
			$listusuario[]=$rowlist;
		}
		$resultadosJson = json_encode($listusuario);
	}else{ 
		$resultadosJson=json_encode(array(array('nombres'=>1,'apellidos'=>1,'usuario'=>1,'celular'=>1,'telefono'=>1)));
	}
	
	echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';
} 
			



?>
	