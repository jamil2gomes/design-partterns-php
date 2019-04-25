<?php
class ConcluiPedido implements Comando {

    private $pedido;

    function __construct(Pedido $pedido) {
        $this->pedido = $pedido;
    }

    public function executa() {
        $pedido->finaliza();
    }

}