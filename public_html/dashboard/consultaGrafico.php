<?php 

include_once"Classes/Meta.php";

$obj = new Meta();
$array = array();
for ($i = 1; $i <= 12; $i++) {
	$consulta = $obj->progresso("vizualizações");
	$obj->getMes($i);
	$obj->getAno(2019);
	



	foreach ($obj as $mes) {
		if($mes['total'])
			$array[] = $mes['total'];
		else
			$array[] = 0;
	}

}
echo json_encode($array);

?>