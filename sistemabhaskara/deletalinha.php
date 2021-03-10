<?php

include 'includes/db.php';

$banco = new banco;


$banco->delete($_GET["id"]);

header("Location: tabela.php");

 ?>
