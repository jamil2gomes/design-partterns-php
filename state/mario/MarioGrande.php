<?php

class MarioGrande implements MarioState{

    public function pegarCogumelo(){
        echo 'Mario ganhou 1000 pontos';
        return $this;
    }
 
    public function pegarFlor(){
        echo 'Mario Grande com fogo';
        return new MarioFogo();
    }
 
    public function pegarPena(){
        echo 'Mario com capa';
        return new MarioCapa();
    }
 
    public function levarDano(){
        echo 'Mario pequeno';
        return new MarioPequeno();
    }
}