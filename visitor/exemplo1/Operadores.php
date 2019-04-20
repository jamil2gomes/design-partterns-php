<?php

abstract class Operadores implements Expressao{
    protected $direita;
    protected $esquerda;

    function __construct(Expressao $ladoEsquerdo, Expressao $ladoDireito){
        $this->direita  = $ladoDireito;
        $this->esquerda = $ladoEsquerdo;
    }

    public function getEsquerda(){
        return $this->esquerda;
    }

    public function getDireita(){
        return $this->direita;
    }
}