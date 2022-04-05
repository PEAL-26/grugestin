<?php

namespace App\Controllers\Auxiliares;

use App\Entities\Auxiliares\Naturalidade;
use App\Generics\BaseController;
use App\Generics\Formulario;
use App\Models\Auxiliares\NaturalidadeModel;
use App\Models\Auxiliares\ProvinciaModel;

class NaturalidadeController extends BaseController
{
	public function __construct()
	{
		$formulario = [
			'inputs' => [
				'nome' => Formulario::input('Nome', 'text', 'Digite o nome')
			]
		];

		parent::__construct(
			"Naturalidade",
			new Naturalidade(),
			new NaturalidadeModel(),
			"auxiliares/naturalidade",
			[
				'tabelaGenerica' => '',
				'formularioGenerico' => $formulario
			]
		);
	}
}
