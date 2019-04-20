<?php

class Impressora{

    public function visitaSoma(Soma $soma){
        echo "(";
        //conteudo da esquerda
        $soma->getEsquerda()->aceita($this);
        echo " + ";
        //conteudo da direita
        $soma->getDireita()->aceita($this);
        echo ")";
    }

    public function visitaSubtracao(Subtracao $sub){
        echo "(";
        //conteudo da esquerda
        $sub->getEsquerda()->aceita($this);
        echo " - ";
        //conteudo da direita
        $sub->getDireita()->aceita($this);
        echo ")";
    }

    public function visitaMultiplicacao(Multiplicacao $mult){
        echo "(";
        //conteudo da esquerda
        $mult->getEsquerda()->aceita($this);
        echo " * ";
        //conteudo da direita
        $mult->getDireita()->aceita($this);
        echo ")";
    }
    
    public function visitaNumero(Numero $numero){
        echo $numero->getNumero();
    }
}