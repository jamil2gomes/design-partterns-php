<?php

class KCV extends Imposto{

    function __construct($imposto = null){
        parent::__construct($imposto);
    }
    public function calcula(Orcamento $orcamento){
        return $orcamento->getValor() * 0.02;
    }
}