<?php

class Finalizado implements TipoDeContrato{

    public function avanca(Contrato $contrato){
        throw new Exception("Contrato já se encontra finaliado!");
    }
}