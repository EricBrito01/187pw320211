<?php

// $a = 2; // MOTIVOS HISTORICOS
// $b = -16;
// $c = -18;

// $a = $_GET["a"]; // MOTIVOS HISTORICOS
// $b = $_GET["b"];
// $c = $_GET["c"];

$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];


function discriminante($a, $b, $c) {


  $delta = $b ** 2 - (4 * $a * $c);
  return $delta;
}

if(discriminante($a, $b, $c) < 0) {
  //https://www.php.net/manual/pt_BR/function.exit.php
  exit("NAO EXISTEM RESULTADOS REAIS");
} else if (discriminante($a, $b, $c) == 0) {

  echo "Δ = 0, então a equação possui apenas um resultado real ou possui dois resultados iguais (essas duas afirmações são equivalentes)";

}  else if (discriminante($a, $b, $c) > 0) {

  echo "Δ > 0, então a equação possui dois resultados distintos reais.";

}

$x1 = (((-1 * $b) + sqrt(discriminante($a, $b, $c)))) / (2 * $a);
$x2 = (((-1 * $b) - sqrt(discriminante($a, $b, $c)))) / (2 * $a);


echo '<br><br><br>';
var_dump(discriminante($a, $b, $c));

echo '<br><br><br>';
var_dump($x1);
var_dump($x2);

// session_start();
//
// var_dump($_SESSION);

$link = mysqli_connect("localhost", "root", "", "pw3");

// var_dump($link); // verifica conexão MOTIVOS HISTORICOS

mysqli_query($link, "insert into bhaskara (a, b, c, delta, x1, x2) values ($a, $b, $c, " .discriminante($a, $b, $c). ", $x1, $x2)");



 ?>
