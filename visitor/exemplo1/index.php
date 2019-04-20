<?php

function carregaClasse($nome){
    require_once $nome.".php";
}

spl_autoload_register("carregaClasse");

/*avaliar uma expressão
 exemplo: 1 + 1  ou (2 + 1) +(3 + 4) ou 1 
 tudo tem q ser visto como uma expressão mesmo que seja só um número
 Visualiza como uma arvore:

                 +
             +       +
          2    1   3    4
 */
  
// (2 + 3) + (3 + 4)
$esquerda = new Soma(new Numero(2), new Numero(3));
$direita = new Soma(new Numero(3) , new Numero(4));

$impressora = new Impressora();

$expressao = new Soma($esquerda, $direita);

$expressao->aceita($impressora);

echo " = ";

echo $expressao->avalia();
echo "<br>";

//(3 + 8) - (10 - 3)
$esquerda = new Soma(new Numero(3), new Numero(8));
$direita = new Subtracao(new Numero(10) , new Numero(3));

$impressora2 = new Impressora();
$expressao2 = new Subtracao($esquerda, $direita);

$expressao2->aceita($impressora2);

echo " = ";

echo $expressao2->avalia();
