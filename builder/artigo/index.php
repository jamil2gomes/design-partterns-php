<?php

require_once 'Artigo.php';
require_once 'Blog.php';
require_once 'ArtigoBuilder.php';
require_once 'BlogBuilder.php';

$blog = BlogBuilder::builder()
                    ->autor('Jamil')
                    ->titulo('texto qualquer')
                    ->paginas(2)
                    ->texto('blablabla')
                    ->publicadoEm(date('2019-04-25'))
                    ->get();

echo $blog;