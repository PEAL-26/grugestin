<?php

namespace App\Controllers;

use App\Entities\Funcionarios\Funcionario;
use App\Generics\BaseController;
use App\Models\FuncionarioModel;

class FuncionarioController extends BaseController
{
	public function __construct()
	{
		parent::inicializar(
			"Funcionários",
			new Funcionario(),
			new FuncionarioModel(),
			"funcionarios"
		);
	}

	public function getCreateBulk()
	{
		$this->create["subTitulo"] = 'Adicionar vários';
		$this->create["accao"] = $this->url . '/adicionar-varios';
		$this->create["view"] = $this->view . '/cadastro_varios';

		return view($this->create['view'], $this->create);
	}

	public function postCreateBulk()
	{
		$dataPost = $this->request->getPost();
		$entidade = $this->entidade->init($dataPost);
		if (!$entidade->valido()) {
			$this->create["validacao"] = $entidade->getNotificacoes();
			return view($this->create["view"], $this->create);
		}

		$resultado = $this->model->salvar($entidade);

		if ($resultado !== true) {
			$this->create["entidade"] = $entidade;
			$this->create["validacao"] = $resultado->getNotificacoes(false, true);
			return view($this->create["view"], $this->create);
		}

		return redirect($this->url);
	}
}
