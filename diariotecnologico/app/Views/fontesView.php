<?php

echo "<pre>";

$table = new \CodeIgniter\View\Table();

$data = $tabela;



$table->setHeading(
                                'id',
                                'nome',
                                'url',
                                'comentario',
                                'horario',
                                'ativado',
                                'ultimoUsuario',);

echo $table->generate($data);

 ?>
