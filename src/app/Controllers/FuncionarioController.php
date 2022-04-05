<?php

namespace App\Controllers;

use App\Entities\Funcionarios\Funcionario;
use App\Generics\BaseController;
use App\Generics\Formulario;
use App\Models\FuncionarioModel;

class FuncionarioController extends BaseController
{
    public function __construct()
	{
		// $formulario = [
		// 	'inputs' => [
		// 		'nome' => Formulario::input('Nome', 'text', 'Digite o nome')
		// 	]
		// ];

		parent::__construct(
			"Funcionários",
			new Funcionario(),
			new FuncionarioModel(),
			"funcionarios",
			[
				// 'tabelaGenerica' => '',
				// 'formularioGenerico' => $formulario
			]
		);
	}
}
