<?php

class NotaFiscal{
    private $empresa;
    private $cnpj;
    private $itens = [];
    private $valorBruto = 0;
    private $valorImposto = 0;
    private $observacoes;
    private $dataEmissao;


    public function setEmpresa($empresa){
        $this->empresa = $empresa;
    }

    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }

    public function addItens(Item $itens){
        $this->itens[] = $itens;
        $this->valorBruto += $itens->getValor();
        $this->valorImposto += $itens->getValor()*0.02;
    }

    public function setObservacao($observacoes){
        $this->observacoes = $observacoes;
    }

    public function setDataEmissao($data){
        if(is_null($data)) 
            $this->dataEmissao = date('Y-m-d');
        else
            $this->dataEmissao = $data;
    }

    public function __toString(){
        return "Nota Fiscal:
                     empresa:{$this->empresa} 
                     cnpj: {$this->cnpj}
                     itens: {$this->itens}
                     valor bruto: {$this->valorBruto}
                     valor imposto: {$this->valorImposto}
                     observação: {$this->observacoes}
                     ";
    }
}