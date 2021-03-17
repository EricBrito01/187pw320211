<?php
// https://codeigniter4.github.io/userguide/outgoing/table.html#initializing-the-class
$table = new \CodeIgniter\View\Table();

$template = [
        'table_open'         => '<table border="1`" cellpadding="4" cellspacing="0">' ];

$table->setTemplate($template);
$table->setHeading('id', 'a', 'b', 'c', 'DISCRIMINANTE', 'X1', 'X2');

echo $table->generate($paraTabela);



 ?>
