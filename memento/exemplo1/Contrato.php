<?php

class Contrato {
    private $nome;
    private $data;
    private $tipo; //novo - em andamento - finalizado

    function __construct($nome, $data, $tipo = null){
        $this->nome = $nome;
        $this->data = $data;
        if(!is_null($tipo))
            $this->tipo = $tipo;
        else
            $this->tipo = new Novo();
    }

    public function setTipo(TipoDeContrato $tipo){
        $this->tipo = $tipo;
    }

    public function avancaEstado(){
        $this->tipo->avanca($this);
    }

    public function salvaEstado():Estado{
        return new Estado(new Contrato($this->nome, $this->data, $this->tipo));
    }
}