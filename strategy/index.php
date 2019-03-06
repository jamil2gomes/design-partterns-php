<?php

require_once 'Orcamento.php';
require_once 'Imposto.php';
require_once 'ICMS.php';
require_once 'ISS.php';
require_once 'CalculadoraDeImpostos.php';


$reforma = new Orcamento(500);

$calculadora = new CalculadoraDeImposto();

echo $calculadora->calcula($reforma,new ICMS());
echo "<br>";
echo $calculadora->calcula($reforma, new ISS());


