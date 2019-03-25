<?php
 class Finalizado implements EstadoDeUmOrcamento{

     public function aplica(Orcamento $orcamento){
        throw new Exception("Um orçamento finalizado não pode receber desconto");
     }

     public function aprova(Orcamento $orcamento){
        throw new Exception("Orçamento finalizado não pode ser aprovado");

     }
     public function reprova(Orcamento $orcamento){
        throw new Exception("Orçamento finalizado não pode ser reprovado");

     }
     public function finaliza(Orcamento $orcamento){
        throw new Exception("Orçamento finalizado não pode ser finalizado novamente");
        
     }
 }