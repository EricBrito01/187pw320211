<?php

namespace App\Controllers;

class Fontes extends BaseController
{
	public function index()
	{
		$model = new \App\Models\ModelFontes();

		$data["tabela"] = $model->findAll();
		$data["teste"] = time();

		echo view('fontesView', $data);
	}
}


?>
