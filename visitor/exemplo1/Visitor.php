<?php

interface Visitor{
    public function visitaNumero(Numero $numero);
    public function visitaSoma(Soma $soma);
    public function visitaSubtracao(Subtracao $sub);
    public function visitaMultiplicacao(Multiplicacao $mult);
}