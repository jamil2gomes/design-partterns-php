<?php
 class Reprovado implements EstadoDeUmOrcamento{

     public function aplica(Orcamento $orcamento){
        throw new Exception("Um orçamento reprovado não pode receber desconto");
     }

     public function aprova(Orcamento $orcamento){
        throw new Exception("Orçamento reprovado não pode ser aprovado");

     }
     public function reprova(Orcamento $orcamento){
        throw new Exception("Orçamento reprovado não pode ser reprovado");

     }
     public function finaliza(Orcamento $orcamento){
        throw new Exception("Orçamento reprovado não pode ser finalizado");
        
     }
 }