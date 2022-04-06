<?php

namespace App\Controllers\Auxiliares;

use App\Entities\Auxiliares\EstadoOperacao;
use App\Generics\BaseController;
use App\Generics\Formulario;
use App\Models\Auxiliares\EstadoOperacaoModel;

class EstadoOperacaoController extends BaseController
{
	public function __construct()
	{
		$formulario = [
			'inputs' => [
				'nome' => Formulario::input('Nome', 'text', 'Digite o nome')
			]
		];

		parent::inicializar(
			"Estado da Operação",
			new EstadoOperacao(),
			new EstadoOperacaoModel(),
			"auxiliares/estado_operacao",
			[
				'tabelaGenerica' => '',
				'formularioGenerico' => $formulario
			]
		);
	}
}
