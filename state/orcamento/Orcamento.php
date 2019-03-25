<?php

class Orcamento 
{
    private $valor;
    private $estado;
    
    function __construct($valor){
        $this->valor = $valor;
        $estado = new EmAprovacao();
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($novoEstado){
        $this->estado = $novoEstado;
    }
    public function getValor(){
        return $this->valor;
    }

    public function setValor($novoValor){
        $this->valor = $novoValor;
    }

    public function aplicaDesconto(){
        $this->estado->aplica($this);
    }

    public function aprova(){
        $this->estado->aprova($this);
    }

    public function reprova(){
        $this->estado->reprova($this);
    }

    public function finaliza(){
        $this->estado->finaliza($this);
    }
}
