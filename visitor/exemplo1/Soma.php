<?php

class Soma extends Operadores{

    public function avalia(){
        $resultadoDaEsquerda = $this->esquerda->avalia();
        $resultadoDaDireita = $this->direita->avalia();

        return $resultadoDaEsquerda + $resultadoDaDireita;
    }

    public function aceita(Visitor $impressora){
        $impressora->visitaSoma($this);
    }
}