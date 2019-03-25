<?php 

interface Artigo{
    
    public function setAutor($nome);
    public function setTitulo($nome);
    public function setPaginas($paginas);
    public function setDataDaPublicacao($data);
    public function setTexto($texto);
    public function __toString();
}