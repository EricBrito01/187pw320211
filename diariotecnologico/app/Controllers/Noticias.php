<?php

namespace App\Controllers;

class Noticias extends BaseController
{
	public function index()
	{
		$model = new \App\Models\ModelNoticias();

		$data["tabela"] = $model->findAll();
		$data["teste"] = time();

		echo view('noticiasView', $data);

	}
}


?>
