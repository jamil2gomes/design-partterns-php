<?php
class MarioFogo implements MarioState{

    public function pegarCogumelo(){
        echo 'Mario ganhou 1000 pontos';
        return $this;
    }
 
    public function pegarFlor(){
        echo 'Mario ganhou 1000 pontos';
        return $this;
    }
 
    public function pegarPena(){
        echo 'Mario Grande com capa';
        return new MarioCapa();
    }
 
    public function levarDano(){
        echo 'Mario grande';
        return new MarioGrande();
    }
}