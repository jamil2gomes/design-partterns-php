<?php

class Soma extends Operadores{

    public function avalia(){
        $resultadoDaEsquerda = $this->esquerda->avalia();
        $resultadoDaDireita = $this->direita->avalia();

        return $resultadoDaEsquerda + $resultadoDaDireita;
    }

    public function aceita(Impressora $impressora){
        $impressora->visitaSoma($this);
    }
}