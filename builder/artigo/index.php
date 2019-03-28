<?php

require_once 'AutoLoad.php';




$blog = BlogBuilder::builder()
                    ->autor('Jamil')
                    ->titulo('texto qualquer')
                    ->paginas(2)
                    ->texto('blablabla')
                    ->publicadoEm(date('2019-04-25'))
                    ->get();

echo $blog;