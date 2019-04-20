<?php

class Numero implements Expressao{
        private $valor;

        function __construct($valor){
            $this->valor = $valor;
        }

    public function avalia(){
        return $this->valor;
    }

    public function getNumero(){
        return $this->valor;
    }

    public function aceita(Visitor $impressora){
        $impressora->visitaNumero($this);
    }
}