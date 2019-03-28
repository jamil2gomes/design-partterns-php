<?php

 function carregaClasse($nome){
    require_once  $nome.'.php';
}



spl_autoload_register("carregaClasse");