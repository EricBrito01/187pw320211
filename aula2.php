<?php

// - Estrutura de Dados (Tipos, Séries, Arrays, Matrizes e etc...)
// - Estruturas de Decisão (IFELSE, case switch)
// - Laços de repetição (for, foreach, while, do while)
// - Funcoes
// - Operações de arquivo (ler, escrever, padrões (Json, XML))
// - Como os dados VEM DE BANCO
// - ORIENTACAO A OBJETOS

// https://www.php.net/manual/pt_BR/function.echo.php
echo '<pre>'; // Para imprimir até mesmo quebra de linha
echo "Oi, tudo bem?? Hoje vamos fazer uma revisão";
echo "<br>";
echo "<br>";
echo "<br>";

echo "
      #####################################
      ############# Variáveis #############
      #####################################";



$variavel1 = 0.00011;
$variavel2 = "12abc";

// https://www.php.net/manual/pt_BR/function.var-dump
echo "<br>";

var_dump($variavel1);
var_dump($variavel2);
var_dump($variavel3); // Essa variavel não existe, portanto resultado do Var_dump NULL

$soma = $variavel1 + $variavel2;

// $soma = (int)$soma; // O nome disso é CAST (coerção)
$soma = (string)$soma;

var_dump($soma);

echo "<br>";
echo "<br>";
echo "<br>";

echo "
      #####################################
      ############### Arrays ##############
      #####################################";
echo "<br>";

echo "
      #####################################
      ########## Arrays Indexados #########
      #####################################";
echo "<br>";

//https://www.php.net/manual/pt_BR/function.array
$conjunto = array();
var_dump($conjunto);
echo "<br>";

$conjunto[0] = "Primeira Posição";
var_dump($conjunto);
echo "<br>";

$conjunto[1] = "Segunda Posição";
var_dump($conjunto);
echo "<br>";

$conjunto[56] = "Terceira Posição";
var_dump($conjunto);
echo "<br>";


$conjunto[10] = 1234;
var_dump($conjunto);
echo "<br>";

// Utilizando o mesmo índice, o php SOBRESCREVE o valor contido no array
$conjunto[10] = 4321;
var_dump($conjunto);
echo "<br>";


$conjunto[] = "Posição automática";
var_dump($conjunto);
echo "<br>";

// CURIOSIDADE, NUNCA NUNCA NUNCA USEM ISSO EM ARRAYS
$conjunto[-2] = "Aberração";
var_dump($conjunto);
echo "<br>";

// Arrays podem carregar QUALQUER COISA
$conjunto[] = array("Primeiro elemento array2", "Segundo elemento array2");
var_dump($conjunto);
echo "<br>";

echo "<br>";
echo $conjunto[56];

echo "<br>";
echo $conjunto[58][1];


echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "
      #####################################
      ########## Arrays ASSOCIATIVOS ######
      #####################################";
echo "<br>";
$assoc = array();
var_dump($assoc);
echo "<br>";

$assoc["ID"] = 224;
$assoc["NOME"] = "Yuri Sá";
$assoc["EMAIL"] = "yuri@sa2.com.br";


var_dump($assoc);
echo "<br>";

echo $assoc["NOME"];
echo "<br>";


$conjunto[58] = $assoc;

var_dump($conjunto);
echo "<br>";


echo $conjunto[58]["NOME"];
echo $conjunto[58]["EMAIL"];

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "
      #####################################
      ##### Estruturas de Decisão #########
      #####################################";
echo "<br>";


$v1 = 4;
$v2 = 3;

if ($v1 < $v2) {
      $var = "CODIGO SE";
} elseif ($v1 == $v2) {
      $var = "CODIGO SENAO SE";
      // code...
} else {
      $var = "CODIGO SENAO";
}

var_dump($var);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "
      #####################################
      ##### Estruturas de REPETICAO #######
      #####################################";
echo "<br>";

// https://www.php.net/manual/pt_BR/control-structures.for.php

for ($i=0; $i < 10; $i++) {
      // echo "O valor de i é: " . $i;
      // echo "<br>";

      $arrayRepetitivo[] = sqrt($i);
}


var_dump($arrayRepetitivo);
echo "<br>";


//https://www.php.net/manual/pt_BR/control-structures.foreach.php
foreach ($assoc as $key => $value) {
      echo "Chave: " . $key;
      echo "   -    ";
      echo "Valor: " . $value;
      echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "
      #####################################
      # Funções Customizadas/Usuarios #####
      #####################################";
echo "<br>";


$soma = 1 + 2 ;

function soma($v1, $v2) {
      $retorno = $v1 + $v2;

      return $retorno;
}

var_dump(soma(3, 4));

function autoEstima($alune = "Nenhum alune definide") {

      echo "O Alune " . $alune . " é muito inteligente";
      echo "<br>";

}

autoEstima("Kaique");
autoEstima("Jose Adauto");
autoEstima("Janaina");
autoEstima();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

for ($i=0; $i < 5; $i++) {
      autoEstima(rand(111111,99999));
}

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "
      #####################################
      # Operacoes Com arquivo #####
      #####################################";
echo "<br>";

//https://www.php.net/manual/pt_BR/function.file-put-contents

file_put_contents("arquivo.txt", "STRING PARA ESCREVER NO ARQUIVO");

// https://www.php.net/manual/pt_BR/function.file-get-contents
$arquivo = file_get_contents("arquivo.txt");

var_dump($arquivo);

// Utilizando JSON para armazenar OBJETOS
var_dump(json_encode($conjunto));

file_put_contents("json.txt", json_encode($conjunto) );


$arquivoRecuperado = file_get_contents("json.txt");

$arrayRecuperado = json_decode($arquivoRecuperado);

var_dump($arrayRecuperado);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "
      #####################################
      # Dados do Banco #####
      #####################################";
echo "<br>";

$matriz = array();

$matriz[2]["ID"] = 1;
$matriz[2]["NOME"] = "YURI";
$matriz[2]["EMAIL"] = "yuri@etc";

$matriz[3]["ID"] = 2;
$matriz[3]["NOME"] = "KAIQUE";
$matriz[3]["EMAIL"] = "kaique@etec";

$matriz[4]["ID"] = 3;
$matriz[4]["NOME"] = "ALEXSANDRA";
$matriz[4]["EMAIL"] = "alexsandra@etec";

var_dump($matriz);
var_dump($matriz[3]["NOME"]);

echo "NOMES QUE TEMOS NA MATRIZ:<br>";
foreach ($matriz as $key => $value) {
      echo $value["NOME"] . "<br>";
}

// Nós vamos exportar a COLUNA EMAIL

$emails = array();

foreach ($matriz as $key => $value) {
      $emails[] = $value["EMAIL"].".gov.br";
}

var_dump($emails);

 ?>
