<?php

class calculos extends dados {

  public function delta() {

    $res = ($this->b ** 2) - 4 * $this->a * $this->c;

    $this->delta = $res;

    return $res;
  }

  public function bhaskara() {
    $this->x1 = (-$this->b + sqrt($this->delta())) / 2 * $this->a;
    $this->x2 = (-$this->b - sqrt($this->delta())) / 2 * $this->a;

    return [$this->x1, $this->x2];
  }


}




 ?>
