<?php

class Subtracao extends Operadores{

    function __construct( Expressao $esquerda, Expressao $direita){
        parent::__construct($esquerda, $direita);
    }



    public function avalia(){
        $resultadoDaEsquerda = $this->esquerda->avalia();
        $resultadoDaDireita = $this->direita->avalia();
        
        return $resultadoDaEsquerda - $resultadoDaDireita;
    }
}