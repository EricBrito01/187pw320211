<?php

function discriminante($a, $b, $c) {


  $delta = $b ** 2 - (4 * $a * $c);
  return $delta;
}


echo '<pre>';
echo "########################<br>";
echo "#### Requests #######<br>";
echo "########################<br>";

//https://www.php.net/manual/pt_BR/reserved.variables.get

var_dump($_GET);

// var_dump(discriminante($_GET["a"], $_GET["b"], $_GET["c"])); // MOTIVOS HISTORICOS


// https://www.php.net/manual/pt_BR/reserved.variables.post




//https://www.php.net/manual/pt_BR/function.session-start.php

session_start();

// $_SESSION["STATUS"] = "VOCES DEVERIAM TER APRENDIDO ISSO EM PW2";

var_dump($_SESSION);



echo '<br><br><br><br>';
echo "########################<br>";
echo "#### Banco de dados #######<br>";
echo "########################<br>";

//https://www.php.net/manual/pt_BR/function.mysqli-connect.php

$link = mysqli_connect("localhost", "root", "", "pw3");

// var_dump($link); // verifica conexão MOTIVOS HISTORICOS

mysqli_query($link, "insert into bhaskara (a, b, c) values (11, 22, 33)");

?>
