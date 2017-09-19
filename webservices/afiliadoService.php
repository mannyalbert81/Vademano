<?php
//header('Access-Control-Allow-Origin: *');

  require_once '../core/DB_Functions.php';
  $db = new DB_Functions();

	if(isset($_POST['action']))
	{
		switch ($_POST['action'])
		{
			case 'insertar' :
				insertar();
				break;
		}
	}


 function insertar(){
 	$array=array('a'=>1);
 	echo json_encode($array);
 }
	
	
?>