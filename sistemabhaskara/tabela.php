<?php

include 'includes/db.php';
include 'includes/geratabela.php';


$htmlTabela = new geratabela;

echo $htmlTabela->geratabelahtml();


 ?>
