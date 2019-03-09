<?php

abstract class DescontoTemplate implements IDesconto{

    protected $proximoDesconto;

    public function setProximo(IDesconto $proximo) {
        $this->proximoDesconto = $proximo;
      }


    public function desconta(Orcamento $orcamento){
      
        if($this->verificaOrcamento($orcamento)){
           return $this->retornaDesconto($orcamento);

        }else if (!is_null($this->proximoDesconto)){
            return $this->proximoDesconto->desconta($orcamento);
        }else{
            throw new Exception("Sem Desconto");
        }
    }



    protected abstract function verificaOrcamento(Orcamento $orcamento);

    protected abstract function retornaDesconto(Orcamento $orcamento);

    
   
}

