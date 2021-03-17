<?php

namespace App\Controllers;

class Bhaskara extends BaseController
{
    public function index()
    {
        echo 'Hello World!';
    }

    public function numAleatorio($multiplicador, $divisor)
    {
        $randomico = rand(-30,30);

        $resultado = $randomico * $multiplicador;

        echo "<br>";

        echo "O numero aleatório é " . $randomico . " - Multiplicador: " . $multiplicador;
        echo "<br>";

        echo "Resultado da multiplicação" . $resultado;

        echo "<br>";
        echo "<br>";

        echo "Resultado da Divisao: " . ($resultado / $divisor);
    }

    public function lerBanco()
    {
        // Instanciar (chamar) Modelo
        // https://codeigniter.com/user_guide/models/model.html#accessing-models

        $modeloBhaskara = new \App\Models\ModelBhaskara();

        $dados = $modeloBhaskara->findAll();

        // echo "<pre>";
        // var_dump($dados);

        echo view('tabela', ['paraTabela' => $dados]);
    }

    public function escreveBanco()
    {
// https://codeigniter.com/user_guide/models/model.html#saving-data

        $modeloBhaskara = new \App\Models\ModelBhaskara();

        $data = [
            'a' => rand(),
            'b' => rand(),
            'c' => rand(),
            'delta' => rand(),
            'x1' => rand(),
            'x2' => rand()
        ];

        $modeloBhaskara->insert($data);

        var_dump($data);

    }


}



?>
