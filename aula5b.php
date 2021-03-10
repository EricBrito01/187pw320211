<?php

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

?>
