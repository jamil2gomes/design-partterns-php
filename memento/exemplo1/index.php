<?php

date_default_timezone_set("Brazil/East");

function carregaClasse($nome){
    require_once $nome.".php";
}

spl_autoload_register("carregaClasse");


$historico = new Historico();
$contrato = new Contrato("Contrato 1", date("Y-m-d"));

echo "<pre>";

print_r($contrato);
$historico->addEstados($contrato->salvaEstado());

$contrato->avancaEstado();
print_r($contrato);
$historico->addEstados($contrato->salvaEstado());

$contrato->avancaEstado();
print_r($contrato);

$primeiroEstadoDoContratoV1 = $historico->getEstado(0)->getContrato();

$primeiroEstadoDoContratoV2 = $historico->getEstado(0);

print_r($primeiroEstadoDoContratoV1);

print_r($primeiroEstadoDoContratoV2);

echo "</pre>";
