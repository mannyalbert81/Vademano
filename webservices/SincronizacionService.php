<?php

require_once '../core/DB_Functions.php';
$db = new DB_Functions();

$accion=(isset($_POST['action']))?$_POST['action']:'';
$_id_usuario  = (isset($_POST['id_usuario']))?$_POST['id_usuario']:'';	

if(isset($_GET['idusuario']))
{
	Consulta
	

	$resultadosJson = json_encode($listfotos);

echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';
	
}

if($accion=="consulta"){

	
$columnas = "estado.nombre_estado, 
  			usuarios.id_usuario,
			usuarios.nombres_usuario, 
 			usuarios.apellidos_usuario, 
 			usuarios.usuario_usuario, 
  			usuarios.celular_usuario, 
  			usuarios.telefono_usuario";


$tabla = "public.usuarios, 
  		  public.estado";
$where = " id_usuario = '$_id_usuario'  ";
$resultado = $db->getCondiciones($columnas, $tabla, $where);


echo json_encode($resultado);
}
else{
	
	
	echo "no entro";
}




	