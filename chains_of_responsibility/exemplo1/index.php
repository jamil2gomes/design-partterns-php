<?php
require 'Orcamento.php';
require 'Item.php';
require 'IDesconto.php';
require 'CalculadorDeDescontos.php';


$calculador = new CalculadorDeDescontos();

$orcamento = new Orcamento(300.0);
$orcamento->adicionaItem(new Item("CANETA", 150.0));
$orcamento->adicionaItem(new Item("LAPIS", 50.0));

$desconto = $calculador->calcula($orcamento);

echo $desconto;