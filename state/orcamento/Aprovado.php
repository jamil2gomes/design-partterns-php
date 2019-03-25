<?php
 class Aprovado implements EstadoDeUmOrcamento{
    private $jaDescontado = false;

     public function aplica(Orcamento $orcamento){
        if(!$jaDescontado){
         $orcamento->setValor($orcamento->getValor()-$orcamento->getValor()*0.05);
         $jaDescontado = true;
      }else{
         throw new Exception("Já descontado!");
      }
     }

     public function aprova(Orcamento $orcamento){
        throw new Exception("Orçamento já se encontra aprovado");
     }
     public function reprova(Orcamento $orcamento){
        throw new Exception("Orçamento aprovado não pode ser reprovado");
     }
     public function finaliza(Orcamento $orcamento){
        $orcamento->setEstado(new Finalizado());
     }
 }