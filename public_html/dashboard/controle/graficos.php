<?php
require_once "../Classes/Graficos.php";
extract($_POST);
$obj = new Graficos();
if (isset($linechart)) {
    $array = $obj->visitantePeriodo($dataInicio, $dataFinal);
}
if (isset($piechart)) {
    $array = $obj->localAcessoMes($pieMes);
}
echo json_encode($array);
