<?php

namespace App\Controllers\Auxiliares;

use App\Entities\Auxiliares\TipoFuncao;
use App\Generics\BaseController;
use App\Generics\Formulario;
use App\Models\Auxiliares\TipoFuncaoModel;

class TipoFuncaoController extends BaseController
{
	public function __construct()
	{
		$formulario = [
			'inputs' => [
				'nome' => Formulario::input('Nome', 'text', 'Digite o nome')
			]
		];

		parent::__construct(
			"Tipo de Função",
			new TipoFuncao(),
			new TipoFuncaoModel(),
			"auxiliares/tipo_funcao",
			[
				'tabelaGenerica' => '',
				'formularioGenerico' => $formulario
			]
		);
	}
}
