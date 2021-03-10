<?php

// https://www.php.net/manual/pt_BR/language.types.object.php

echo '<pre>';
echo "########################<br>";
echo "#### OOP #######<br>";
echo "########################<br>";

class calculadora
{

  public $num1;
  public $num2;

  public function soma() {
    $res = $this->num1 + $this->num2;

    return $res;
  }

  public function subtracao() {
    $res = $this->num1 - $this->num2;

    return $res;
  }
  public function multiplicacao() {
    $res = $this->num1 * $this->num2;

    return $res;
  }

  public function divisao($tipoRes = "div") {
    if($tipoRes == "div")$res = $this->num1 / $this->num2;
    else if ($tipoRes == "mod") $res = $this->num1 % $this->num2;

    return $res;
  }

}

$objeto = new calculadora;

var_dump($objeto);

$objeto->num1 = 7;
$objeto->num2 = 3;

var_dump($objeto);

var_dump($objeto->soma());
var_dump($objeto->subtracao());
var_dump($objeto->multiplicacao());

var_dump($objeto->divisao("div"));
var_dump($objeto->divisao("mod"));


 ?>
