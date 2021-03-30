<?php

namespace App\Controllers;

class Fontes extends BaseController
{
	public function read()
	{
		$model = new \App\Models\ModelFontes();

		$data["tabela"] = $model->findAll();
		$data["teste"] = time();

		echo view('fontesView', $data);
	}

	public function createInit() {
		//https://codeigniter4.github.io/userguide/outgoing/views.html#displaying-a-view
		echo view('fontes/createForm');

	}

	public function createBE() {
		$model = new \App\Models\ModelFontes();

		$data = $this->request->getPost();

		$model->insert($data);
	}



}


?>
