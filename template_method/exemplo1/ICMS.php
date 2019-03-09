<?php

class ICMS extends TemplateDeImpostoCondicional
{

    protected function deveUsarMaximo(Orcamento $orcamento){
        return $orcamento->getValor() > 500;
    }

    protected function taxacaoMaxima(Orcamento $orcamento){
        return $orcamento->getValor * 0.05;
    }
    protected function taxacaoMinima(Orcamento $orcamento){
        return $orcamento->getValor() * 0.15;
    }
}
