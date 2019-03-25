<?php
interface ArtigoBuilder{
    public function autor(string $nome);
    public function titulo(string $nome);
    public function paginas(int $paginas);
    public function publicadoEm($data);
    public function texto($texto);
    
    public function get():Artigo;
    
}