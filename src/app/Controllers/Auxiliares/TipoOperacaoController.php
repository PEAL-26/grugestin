<?php

namespace App\Controllers\Auxiliares;

use App\Entities\Auxiliares\TipoOperacao;
use App\Generics\BaseController;
use App\Generics\Formulario;
use App\Models\Auxiliares\TipoOperacaoModel;

class TipoOperacaoController extends BaseController
{
	public function __construct()
	{
		$formulario = [
			'inputs' => [
				'nome' => Formulario::input('Nome', 'text', 'Digite o nome')
			]
		];

		parent::inicializar(
			"Tipo de Operação",
			new TipoOperacao(),
			new TipoOperacaoModel(),
			"auxiliares/tipo_operacao",
			[
				'tabelaGenerica' => '',
				'formularioGenerico' => $formulario
			]
		);
	}
}
