<?php

interface IDesconto {

    public function desconta(Orcamento $orcamento);

    public function setProximo(IDesconto $proximo); //busca o próximo desconto

  }