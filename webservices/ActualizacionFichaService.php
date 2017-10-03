<?php

require_once '../core/DB_Functions.php';
$db = new DB_Functions();

if(isset($_GET['actualizar']))
{
	
	
	if($_GET['actualizar']=='actualizacion')
	{
		$dtResults = $db->getCondiciones('count(*) as total', 'public.fichas_service', '1=1');
	
		if(!empty($dtResults))
		{
			$resultadosJson = json_encode($dtResults);
	
		}
	
		echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';
	}
}











	
?>