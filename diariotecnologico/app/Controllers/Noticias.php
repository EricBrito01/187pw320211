<?php

namespace App\Controllers;

class Noticias extends BaseController
{
	public function read()
	{
		$model = new \App\Models\ModelNoticias();

		$data["tabela"] = $model->findAll();
		$data["teste"] = time();

		echo view('noticiasView', $data);
	}

	public function createInit() {
		//https://codeigniter4.github.io/userguide/outgoing/views.html#displaying-a-view
		echo view('noticias/createForm');

	}

	public function createBE() {
		$model = new \App\Models\ModelNoticias();

		$data = $this->request->getPost();

		$model->insert($data);
	}

}
?>