<?php

include 'includes/dados.php';
include 'includes/calculos.php';

echo "<pre>";

$bhaskara = new calculos;

$bhaskara->a = 1;
$bhaskara->b = 12;
$bhaskara->c = -13;

// var_dump($bhaskara->delta());
$bhaskara->bhaskara();
var_dump($bhaskara);



 ?>
