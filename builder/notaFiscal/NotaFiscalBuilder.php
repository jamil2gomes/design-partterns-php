<?php

class NotaFiscalBuilder{
    
    private $notafiscal;

    public function __construct(){
        $this->notafiscal = new NotaFiscal();

    }

    public static function builder(){
        return new NotaFiscalBuilder();
    }

    public function empresa($empresa){
        $this->notafiscal->setEmpresa($empresa);
        return $this;
    }

    public function comCnpj($cnpj){
        $this->notafiscal->setCnpj($cnpj);
        return $this;
    }

    public function addItens(Item $item){
        $this->notafiscal->addItens($item);
        return $this;
    }
    public function comObservacao($observacao){
        $this->notafiscal->setObservacao($observacao);
        return $this;
    }

    public function naData($data){
        $this->notafiscal->setDataEmissao($data);
        return $this;
    }

    public function get():NotaFiscal{
        return $this->notafiscal;
    }
}