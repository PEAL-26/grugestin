<?php

namespace App\Controllers\Auxiliares;

use App\Entities\Auxiliares\TipoRequisicao;
use App\Generics\BaseController;
use App\Generics\Formulario;
use App\Models\Auxiliares\TipoRequisicaoModel;

class TipoRequisicaoController extends BaseController
{
	public function __construct()
	{
		$formulario = [
			'inputs' => [
				'nome' => Formulario::input('Nome', 'text', 'Digite o nome')
			]
		];

		parent::__construct(
			"Tipo de Requisição",
			new TipoRequisicao(),
			new TipoRequisicaoModel(),
			"auxiliares/tipo_requisicao",
			[
				'tabelaGenerica' => '',
				'formularioGenerico' => $formulario
			]
		);
	}
}
