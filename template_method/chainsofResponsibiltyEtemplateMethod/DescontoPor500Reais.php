<?php

class DescontoPor500Reais extends DescontoTemplate {

    protected function verificaOrcamento(Orcamento $orcamento){
      return $orcamento->getValor() > 500;
    }
  
    protected function retornaDesconto(Orcamento $orcamento){
      return $orcamento->getValor() * 0.07;
    }
}