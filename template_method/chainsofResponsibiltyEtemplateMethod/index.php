<?php
require 'Orcamento.php';
require 'Item.php';
require 'IDesconto.php';
require 'DescontoTemplate.php';
require 'DescontoPor5Itens.php';
require 'DescontoPor500Reais.php';
require 'CalculadorDeDescontos.php';


$calculador = new CalculadorDeDescontos();

$orcamento = new Orcamento(1100.0);
$orcamento->adicionaItem(new Item("CANETA", 150.0));
//$orcamento->adicionaItem(new Item("CANETA", 150.0));
//$orcamento->adicionaItem(new Item("CANETA", 150.0));
//$orcamento->adicionaItem(new Item("CANETA", 150.0));
//$orcamento->adicionaItem(new Item("CANETA", 150.0));
//$orcamento->adicionaItem(new Item("CANETA", 150.0));


echo $orcamento->getValor().'<br>';
echo count($orcamento->getItens()).'<br>';


try {
    $desconto = $calculador->calcula($orcamento);
    echo 'desconto: R$ '.$desconto;
} catch (Exception $e) {
    echo $e->getMessage();
}




