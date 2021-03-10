<?php

class geratabela extends banco {

  public function geratabelahtml() {
    $tabelaDados = $this->listatodos();


    $tabela = array();

    for ($i=0; $i < 10000000; $i++) {

      $resultado_array = mysqli_fetch_assoc($tabelaDados);

    //https://www.php.net/manual/en/control-structures.break.php
      if($resultado_array == NULL) break;

      $tabela[] = $resultado_array;
      // var_dump($resultado_array);
    }

    $html = "";
    $html .= "<table style='width:100%; border: 1px solid black;'>";

      foreach ($tabela as $key => $linha) {
        $html .= "<tr style='border: 1px solid black;'>";

          foreach ($linha as $key => $celula) {
            $html .= "<td style='border: 1px solid black;'>";

            $html .= $celula;

            $html .= "</td>";
          }



        $html .= "<td>";
        $html .= "<a href='deletalinha.php?id=".$linha["id"]."'> DELETE </a>";
        $html .= "</td>";
        $html .= "</tr>";
      }
    $html .= "</table>";

    return $html;
  }

}




 ?>
