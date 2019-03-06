<?php

class Orcamento{

    private $valor;
    private $itens = [];

    function __construct($valor) {
        $this->valor = $valor;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getItens() {
        return $this->itens;
    }

    public function adicionaItem(Item $item) {
       array_push($this->itens, $item);
    }

}