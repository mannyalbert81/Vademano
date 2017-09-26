<?php

require_once '../core/DB_Functions.php';
$db = new DB_Functions();

function Insertar(){

if(isset($_GET['id_usuario']))
{
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
	
} 
			$resultadosJson = json_encode($resultado);
	}

echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';

?>
	