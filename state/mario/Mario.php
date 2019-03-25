<?php

class Mario{

    protected $estado;

    public function __construct(){
        $this->estado = new MarioPequeno();
    }

    public function pegarCogumelo(){
        $this->estado->pegarCogumelo();
    }

    public function pegarFlor(){
        $this->estado->pegarFlor();
    }

    public function pegarPena(){
        $this->estado->pegarPena();
    }

    public function levarDano(){
        $this->estado->levarDano();
    }
}