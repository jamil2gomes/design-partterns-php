<?php
require 'AutoLoad.php';

$nota =  NotaFiscalBuilder::builder()
                            ->empresa('Empresa X')
                            ->comCnpj('12345')
                            ->addItens(new Item('Tijolo',30))
                            ->addItens(new Item('Cimento',40))
                            ->comObservacao('Alguma observacao aqui')
                            ->naData(date('Y-m-d'))
                            ->get();

echo $nota;