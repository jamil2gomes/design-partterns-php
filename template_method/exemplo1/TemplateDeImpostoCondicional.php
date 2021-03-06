<?php

abstract class TemplateDeimpostoCondicional implements Imposto{

    public function calcula(Orcamento $orcamento){
        if ($this->deveUsarMaximo($orcamento)){
            return $this->taxacaoMaxima($orcamento);
        }
        return $this->taxacaoMinima($orcamento);
    }

    protected abstract function deveUsarMaximo(Orcamento $orcamento);

    protected abstract function taxacaoMaxima(Orcamento $orcamento);

    protected abstract function taxacaoMinima(Orcamento $orcamento);
   
}