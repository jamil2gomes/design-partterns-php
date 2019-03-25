<?php
 class EmAprovacao implements EstadoDeUmOrcamento{
    private $jaDescontado = false;

     public function aplica(Orcamento $orcamento){
        if(!$jaDescontado){
         $orcamento->setValor($orcamento->getValor()-$orcamento->getValor()-0.02);
         $jaDescontado = true;
      }else{
         throw new Exception("Já descontado");
      }
     }

     public function aprova(Orcamento $orcamento){
        $orcamento->setEstado(new Aprovado());
     }
     public function reprova(Orcamento $orcamento){
        $orcamento->setEstado(new Reprovado());
     }
     public function finaliza(Orcamento $orcamento){
        throw new Exception("Orçamento em aprovação não pode ser finalizado");
        
     }
 }