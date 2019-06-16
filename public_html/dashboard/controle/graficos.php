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
if (isset($barchart)) {
    $array = $obj->orcamentoLocalMes($barMes);
}
echo json_encode($array);
