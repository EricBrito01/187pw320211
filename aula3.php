<?php

echo '<pre>';
echo "########################<br>";
echo "#### Funções do Usuário #######<br>";
echo "########################<br>";

// 3 tipos basicos de funções do Usuário

function printHoraMaisAleatorio() {


  echo time() . rand(1,999) . '<br>';
  // echo time();
}

printHoraMaisAleatorio();



$timestamp = 0;

function modificaVariavelExterna() {
  global $timestamp;

  $timestamp = time();
}

modificaVariavelExterna();

var_dump($timestamp);


function respondePiMaisAleatorio() {
  // https://www.php.net/manual/en/function.pi.php
  $pi = pi();

  // https://www.php.net/manual/en/function.rand.php
  $aleatorio = rand(111111, 999999);

  return $pi . $aleatorio;
}

respondePiMaisAleatorio();

var_dump(respondePiMaisAleatorio());


function respondeComParametro($num1 = 12, $num2 = 22) {

  $soma = $num1 + $num2;

  return $soma;
}

// $resultado = respondeComParametro(2, 5);
$resultado = respondeComParametro();
var_dump($resultado);


echo "########################<br>";
echo "#### Operadores Aritmeticos #######<br>";
echo "########################<br>";
// https://www.php.net/manual/pt_BR/language.operators.arithmetic.php

$a = 5;
$b = 3;

// Exponenciação com FUNCAO
// https://www.php.net/manual/pt_BR/function.pow
var_dump(pow($a, $b));

// Raiz Quadrada
// https://www.php.net/manual/pt_BR/function.sqrt

var_dump(pow($a, $b));


//https://www.php.net/manual/pt_BR/function.sqrt
var_dump(sqrt($a));
var_dump(sqrt($b));

// https://www.php.net/manual/pt_BR/function.abs
$c = $b - $a;

var_dump($c);
var_dump(abs($c));


 ?>
