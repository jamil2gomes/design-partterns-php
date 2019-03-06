<?php
require_once 'DescontoPor5Itens.php';
require_once 'DescontoPor500Reais.php';
require_once 'SemDesconto.php';

/*
class CalculadorDeDescontos {
      public function calcula(Orcamento $orcamento) {
        // verifica primeira regra de possível desconto
        if(count($orcamento->getItens()) > 5) {
          return $orcamento->getValor() * 0.1;
        }

        // verifica segunda regra de possível desconto
        else if($orcamento->getValor() > 500.0) {
          return $orcamento->getValor() * 0.07;
        }

        // verifica terceira, quarta, quinta regra de possível desconto ...
        // um monte de ifs daqui pra baixo
      }
    }
*/

class CalculadorDeDescontos{

  public function calcula(Orcamento $orcamento) {
    
    $d1 = new DescontoPor5Itens();
    $d2 = new DescontoPor500Reais();
    $d3 = new SemDesconto();

    $d1->setProximo($d2);
    $d2->setProximo($d3);

    return $d1->desconta($orcamento);
  }

}