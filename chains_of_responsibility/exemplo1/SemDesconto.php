<?php

class SemDesconto implements IDesconto{ //representa o fim da corrente

    public function desconta(Orcamento $orcamento) {
        return 0;
    }

    public function setProximo(IDesconto $desconto) {
        // nao tem!
    }

}