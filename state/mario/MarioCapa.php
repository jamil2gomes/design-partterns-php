<?php

class MarioCapa implements MarioState{

    public function pegarCogumelo(){
        echo 'Mario ganhou 1000 pontos';
        return $this;
    }
 
    public function pegarFlor(){
        echo 'Mario Grande com fogo';
        return new MarioFogo();
    }
 
    public function pegarPena(){
        echo 'Mario ganhou 1000 pontos';
        return $this;
    }
 
    public function levarDano(){
        echo 'Mario grande';
        return new MarioGrande();
    }
}