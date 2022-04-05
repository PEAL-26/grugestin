<?php

namespace App\Controllers\Auxiliares;

use App\Entities\Auxiliares\EstadoRequisicao;
use App\Generics\BaseController;
use App\Generics\Formulario;
use App\Models\Auxiliares\EstadoRequisicaoModel;

class EstadoRequisicaoController extends BaseController
{
	public function __construct()
	{
		$formulario = [
			'inputs' => [
				'nome' => Formulario::input('Nome', 'text', 'Digite o nome')
			]
		];

		parent::__construct(
			"Estado da Requisição",
			new EstadoRequisicao(),
			new EstadoRequisicaoModel(),
			"auxiliares/estado_requisicao",
			[
				'tabelaGenerica' => '',
				'formularioGenerico' => $formulario 
			]
		);
	}

}
