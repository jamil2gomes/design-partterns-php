<?php
class MarioPequeno implements MarioState{

    public function pegarCogumelo(){
        echo 'Mario Grande';
        return new MarioGrande();
    }
 
    public function pegarFlor(){
        echo 'Mario Grande com fogo';
        return new MarioFogo();
    }
 
    public function pegarPena(){
        echo 'Mario Grande com capa';
        return new MarioCapa();
    }
 
    public function levarDano(){
        echo 'Mario morto';
        return new MarioMorto();
    }
}