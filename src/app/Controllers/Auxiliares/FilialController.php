<?php

namespace App\Controllers\Auxiliares;

use App\Entities\Auxiliares\Filial;
use App\Generics\BaseController;
use App\Generics\Formulario;
use App\Models\Auxiliares\FilialModel;

class FilialController extends BaseController
{
	public function __construct()
	{
		$formulario = [
			'inputs' => [
				'nome' => Formulario::input('Nome', 'text', 'Digite o nome')
			]
		];

		parent::inicializar(
			"Filial",
			new Filial(),
			new FilialModel(),
			"auxiliares/filial",
			[
				'tabelaGenerica' => '',
				'formularioGenerico' => $formulario
			]
		);
	}
}
