<?php

namespace App\Controllers\Auxiliares;

use App\Entities\Auxiliares\Funcao;
use App\Generics\BaseController;
use App\Generics\Formulario;
use App\Models\Auxiliares\FuncaoModel;
use App\Models\Auxiliares\TipoFuncaoModel;

class FuncaoController extends BaseController
{
	public function __construct()
	{
		$formulario = [
			'inputs' => [
				'nome' => Formulario::input('Nome', 'text', 'Digite o nome')
			]
		];

		$tiposFuncoes = new TipoFuncaoModel();
		parent::inicializar(
			"Função",
			new Funcao(),
			new FuncaoModel(),
			"auxiliares/funcao",
			[
				"tiposFuncoes" => $tiposFuncoes->listarTodos(),
				'tabelaGenerica' => '',
				'formularioGenerico' => $formulario
			]
		);
	}
}
