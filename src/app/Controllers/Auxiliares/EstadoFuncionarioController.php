<?php

namespace App\Controllers\Auxiliares;

use App\Entities\Auxiliares\EstadoFuncionario;
use App\Generics\BaseController;
use App\Generics\Formulario;
use App\Models\Auxiliares\EstadoFuncionarioModel;

class EstadoFuncionarioController extends BaseController
{
	public function __construct()
	{
		$formulario = [
			'inputs' => [
				'nome' => Formulario::input('Nome', 'text', 'Digite o nome')
			]
		];

		parent::inicializar(
			"Estado do Funcionário",
			new EstadoFuncionario(),
			new EstadoFuncionarioModel(),
			"auxiliares/estado_funcionario",
			[
				'tabelaGenerica' => '',
				'formularioGenerico' => $formulario
			]
		);
	}
}
