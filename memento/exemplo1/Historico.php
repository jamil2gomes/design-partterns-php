<?php

class Historico{

    private $estadosContrato;

    function __construct(){
        $this->estadosContrato = [];
    }

    public function getEstado(int $index){
        return $this->estadosContrato[$index];
    }

    public function addEstados(Estado $estado){
        $this->estadosContrato[] = $estado;
    }
}