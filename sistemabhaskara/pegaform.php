<?php

include 'includes/dados.php';
include 'includes/calculos.php';
include 'includes/db.php';


$bhaskara = new calculos;

$bhaskara->a = $_POST["a"];
$bhaskara->b =  $_POST["b"];
$bhaskara->c =  $_POST["c"];

// var_dump($bhaskara->delta());
$bhaskara->bhaskara();
var_dump($bhaskara);

$dados = array();

$dados["a"] = $bhaskara->a;
$dados["b"] = $bhaskara->b;
$dados["c"] = $bhaskara->c;
$dados["delta"] = $bhaskara->delta;
$dados["x1"] = $bhaskara->x1;
$dados["x2"] = $bhaskara->x2;


$banco = new banco;

$banco->insere($dados);

header("Location: tabela.php");

 ?>
