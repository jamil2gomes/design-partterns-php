<?php

abstract class TemplateDeImpostoCondicional extends Imposto{

    function __construct($imposto = null){
        parent::__construct($imposto);
    }


    public function calcula(Orcamento $orcamento){
        if ($this->deveUsarMaximo($orcamento)){
            return $this->taxacaoMaxima($orcamento) + $this->calculaOutroImposto($orcamento);
        }
        return $this->taxacaoMinima($orcamento) + $this->calculaOutroImposto($orcamento);
    }

    protected abstract function deveUsarMaximo(Orcamento $orcamento);

    protected abstract function taxacaoMaxima(Orcamento $orcamento);

    protected abstract function taxacaoMinima(Orcamento $orcamento);
   
}