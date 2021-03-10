<?php
// https://www.php.net/manual/pt_BR/function.include.php

include 'aula5b.php';
include 'aula5c.php';

$calculadoraTotal = new cientifica;

$calculadoraTotal->num1 = 55;
$calculadoraTotal->num2 = 44;


var_dump($calculadoraTotal->soma());

 ?>
