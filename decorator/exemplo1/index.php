<?php
require_once 'Orcamento.php';
require_once 'Imposto.php';
require_once 'TemplateDeImpostoCondicional.php';
require_once 'KCV.php';
require_once 'ICMS.php';
require_once 'ISS.php';
require_once 'CalculadoraDeImpostos.php';


$reforma = new Orcamento(300);

$calculadora = new CalculadoraDeImposto();
echo 'Imposto ISS: '. $calculadora->calcula($reforma, new ISS());
echo '<br>Imposto ICMS: '.$calculadora->calcula($reforma, new ICMS());
echo '<br>Imposto KCV: '.$calculadora->calcula($reforma, new KCV());
echo '<br>Soma de ICMS e ISS e KCV: '. $calculadora->calcula($reforma,new ICMS(new ISS(new KCV())));
echo "<br>";



