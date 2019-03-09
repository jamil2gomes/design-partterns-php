<?php

class CalculadoraDeImposto 
{
    /* 3ª alternativa:
    O que muda de um if para o outro é só o objeto, pois ele utiliza o mesmo método. Então, recebe
    como segundo parametro o objeto e para garantir que seja um imposto o segundo parametro vamos 
    criar uma interface imposto*/
    public function calcula(Orcamento $orcamento, Imposto $imposto){
        return $imposto->calcula($orcamento);
    }

   
}

/*
 1ª alternativa:
    A medida que forem necessários mais impostos essa classe terá mais métodos. 
    (ruim pra manuntenção)

 public function calculaICMS(Orcamento $orcamento){
        return $orcamento->getValor() * 0.05;
    }

    public function calculaISS(Orcamento $orcamento){
        return $orcamento->getValor() * 0.1;
    }




 2ª alternativa:
  Criar classes pra cada imposto e dependendo do segundo parametro calcular o imposto em especifico.
  Isso é trocar 6 por meia dúzia.
   
  public function calculaICMS(Orcamento $orcamento, $imposto){
        if(imposto == "ICMS"){
            $icms = new ICMS();
            $icms->calcula($orcamento);
        }else if(imposto == "ISS"){
            $iss = new ISS();
            $iss->calcula($orcamento);
        }
    }

*/