<?php

class Subtracao extends Operadores{

  
    public function avalia(){
        $resultadoDaEsquerda = $this->esquerda->avalia();
        $resultadoDaDireita = $this->direita->avalia();
        
        return $resultadoDaEsquerda - $resultadoDaDireita;
    }

    public function aceita(Visitor $impressora){
        $impressora->visitaSubtracao($this);
    }
}