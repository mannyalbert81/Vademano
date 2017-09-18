<?php
require_once '../core/DB_Functions.php';
$db = new DB_Functions();

if(isset($_POST['action']))
{
	switch ($_POST['action'])
	{
		case 'insertar' :
			$array=array('a'=>1);
			echo json_encode($array);
		break;
	}
}
?>