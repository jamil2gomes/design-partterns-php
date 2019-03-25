<?php

class Blog implements Artigo{

    private $autor;
    private $titulo;
    private $paginas;
    private $dataPublicacao;
    private $texto;

    public function setAutor($nome){
        $this->autor = $nome;
    }

    public function setTitulo($nome){
        $this->titulo = $nome;
    }


    public function setPaginas($paginas){
        $this->paginas = $paginas;
    }

    public function setDataDaPublicacao($data){
        if(is_null($data))
            $this->dataPublicacao = date('Y-m-d');
        else
            $this->dataPublicacao = $data;
    }

    public function setTexto($texto){
        $this->texto = $texto;
    }

    public function __toString(){
        return 'Blog:['.
                    'autor: '.$this->autor.
                    'título: '.$this->titulo.
                    'num. páginas: '.$this->paginas.
                    'data: '.$this->dataPublicacao.
                    'texto: '.$this->texto.
                ']';
    }


}