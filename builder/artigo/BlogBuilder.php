<?php

class BlogBuilder implements ArtigoBuilder{

    private $artigo;

    public function __construct(){
        $this->artigo = new Blog();
    }

    public static function builder():ArtigoBuilder{
        return new BlogBuilder();
    }

    public function autor($autor):ArtigoBuilder{
        $this->artigo->setAutor($autor);
        return $this;
    }

    public function titulo($titulo):ArtigoBuilder{
        $this->artigo->setTitulo($titulo);
        return $this;
    }

    public function paginas(int $paginas):ArtigoBuilder{
        $this->artigo->setPaginas($paginas);
        return $this;
    }

    public function texto($texto):ArtigoBuilder{
        $this->artigo->setTexto($texto);
        return $this;
    }

    public function publicadoEm($data):ArtigoBuilder{
        $this->artigo->setDataDaPublicacao($data);
        return $this;
    }

    public function get():Artigo{
        return $this->artigo;
    }
    
}