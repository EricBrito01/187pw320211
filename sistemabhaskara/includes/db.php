<?php

class banco {

  public $conexao;

  public function conectar() {
    $this->conexao = mysqli_connect("localhost", "root", "", "pw3");
  }

  public function listaTodos() {
    $this->conectar();

    $resultado = mysqli_query($this->conexao, "select * from bhaskara");

    return $resultado;
  }

  public function insere($dados) {
    $this->conectar();

    $query = "insert into bhaskara (a, b, c, delta, x1, x2) values
                                   (
                                     ".$dados["a"].",
                                     ".$dados["b"].",
                                     ".$dados["c"].",
                                     ".$dados["delta"].",
                                     ".$dados["x1"].",
                                     ".$dados["x2"]."
                                   )";

    $resposta = mysqli_query($this->conexao, $query);


    // var_dump($resposta); //Debug
    // var_dump($this->conexao);

    // var_dump($query);
  }

  public function delete($id) {
    $this->conectar();

    $query = "delete from bhaskara where id = $id";

     mysqli_query($this->conexao, $query);
  }
}



 ?>
