<?php
class Multiplicacao extends Operadores
{

    public function avalia() 
    {
        $resultadoDaEsquerda = $this->esquerda->avalia();
        $resultadoDaDireita  = $this->direita->avalia();

        return $resultadoDaEsquerda * $resultadoDaDireita;
    }

    public function aceita(Visistor $impressora){
        $impressora->visitaMultiplicacao($this);
    }
}