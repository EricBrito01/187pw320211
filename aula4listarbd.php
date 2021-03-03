<?php
echo "<pre>";

$link = mysqli_connect("localhost", "root", "", "pw3");

$resultado = mysqli_query($link, "select * from bhaskara");

//https://www.php.net/manual/pt_BR/mysqli-result.fetch-assoc

$tabela = array();

for ($i=0; $i < 10000000; $i++) {

  $resultado_array = mysqli_fetch_assoc($resultado);

//https://www.php.net/manual/en/control-structures.break.php
  if($resultado_array == NULL) break;

  $tabela[] = $resultado_array;
  // var_dump($resultado_array);
}

echo "<table style='width:100%; border: 1px solid black;'>";

  foreach ($tabela as $key => $linha) {
    echo "<tr style='border: 1px solid black;'>";

      foreach ($linha as $key => $celula) {
        echo "<td style='border: 1px solid black;'>";

        echo $celula;

        echo "</td>";
      }

    echo "</tr>";
  }


echo "</table>";



 ?>
