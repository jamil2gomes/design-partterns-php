<?php

class DescontoPor5Itens extends DescontoTemplate{
  
  protected function verificaOrcamento(Orcamento $orcamento){
    return count($orcamento->getItens()) >= 5;
   
  }

  protected function retornaDesconto(Orcamento $orcamento){
    return $orcamento->getValor() * 0.1; 
  }



  


}