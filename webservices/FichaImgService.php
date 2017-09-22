<?php
require_once '../core/DB_Functions.php';
$db = new DB_Functions();

if(isset($_GET['imagen']))
{
	if($_GET['imagen']=='fichas')
	{
		$dtImagen = $db->getCondiciones('id_fichas,foto_fichas_fotos', 'fichas_fotos', '1=1');
	
		
		if(!empty($dtImagen))
		{
			$listfotos = [];
			
			foreach ($dtImagen as $res)
			{
				$rowfoto = new stdClass();
				$rowfoto->id_fichas = $res->id_fichas;
				$rowfoto->foto_fichas_fotos=base64_encode(pg_unescape_bytea($res->foto_fichas_fotos));//$res->foto_fichas_fotos;
				$listfotos[]=$rowfoto;
			}
			
	 		$resultadosJson = json_encode($listfotos);
		   
	 	}
		
		echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';
	}
	
	if($_GET['imagen']=='especies')
	{
		$dtImagen = $db->getCondiciones('fe.id_fichas_especies,fe.id_fichas,es.id_especies,es.nombre_especies,es.logo_especies', 'especies es INNER JOIN fichas_especies fe on fe.id_especies = es.id_especies', '1=1 ORDER BY fe.id_fichas_especies');
		
		if(!empty($dtImagen))
		{
			$listfotos = [];
				
			foreach ($dtImagen as $res)
			{
				$rowfoto = new stdClass();
				$rowfoto->id_fichas_especies = $res->id_fichas_especies;
				$rowfoto->id_fichas = $res->id_fichas;
				$rowfoto->id_especies = $res->id_especies;
				$rowfoto->nombre_especies = $res->nombre_especies;
				$rowfoto->logo_especies=base64_encode(pg_unescape_bytea($res->logo_especies));//$res->foto_fichas_fotos;
				$listfotos[]=$rowfoto;
			}
				
			$resultadosJson = json_encode($listfotos);
			 
		}
		
		echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';
	}
}

/******************************PARA FALLOS*************************************/
// 	$imagen='iVBORw0KGgoAAAANSUhEUgAAAA4AAAATCAYAAACgADyUAAAAAXNSR0IArs4c6QAAAARnQU1BAACx
// jwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAK7SURBVDhPbZJbSFRBGIDHIoJ6DXoIquee6rHH
// 6C0IK0xLuomE5a1S1+u6uqbupsl6azdT024klBGolVaWJhYtopalbiWmqV1OF121cnf9mrPneKUf
// fmaY+b75Z/5zBP+Jzq5ubMUlFBQW0dbWrq8ujSWix+Mhw2zmWPhRjKZkTOY0/zxw315GRkZ0Sosl
// otGUTooxEWteDpZz2eRas8gvsGA9b2VX4B7cbrdOLhKfPG0hIvok6VmZ5Ekwv9SOvfIy2bZS8k2R
// 2HMiyMjJ1+lF4vWKYgqM4RRZDNBfxI/mTForolEeZUDvBRi8ijXhAN5ZjZ8X25pqGW/NobE8Hnoc
// 0C1hffR1lsJrB2XmcLw6Py9+/abQczEI+ir8oLezZD5npTT10IDdlq3Ty5rz+IqJH3Xx+Loc+Lrt
// eGXO9lyCjkKqDDt4835YJ5eJas9aC0NQakKZaUzC25TK9xtBtCZs5nrdMw3SY4nYXZ1Eb6hgtCqE
// X/0VKL1XwTfAx8wtNB5Zx9jC11gQ+5/dZciynpETguFjgr9ybazqIKMNNj5btzOaupqGgjA8Gq6J
// MzJfpGxk4rTAnSj4GSvoS9uGqzpMNjOM7ycFSrRgIG0t7c4eVdFEV8ttPkQKppNkJsuKUSuYOCXh
// 4i2M5W5gNEowJffccq/WFrcgdlTG8kWeOp0imJQVf0vg2xnBu+MrcUWsYsKgrU3HC+4k7+S3/An8
// orPoMEqMtqmKc7JaRZ2ro5p/5Lw2aitu+VC/2HnrPINhghmjFGRV9cpz8Nz1Z9LkIbIH5QlB+KTj
// F8dld+p3C14dFHyKDkCJE/xKCPCnEhfgX3PJTjfvFdy+36IqmqiGa2CY+vBNvAwUdAQJnGruF3QF
// C96GyLcFr6Gs8ppOLxLVmJT5/LmTB44M7lkOUXc2hNq8GGpu1tA7pGiQP+Afvs47dSuIk5EAAAAA
// SUVORK5CYII=';
	
// 	$resultadosJson = json_encode(array( array('id_fichas'=>0,'foto_fichas_fotos'=>$imagen)));
?>