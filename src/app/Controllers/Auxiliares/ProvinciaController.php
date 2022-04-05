<?php

namespace App\Controllers\Auxiliares;

use App\Entities\Auxiliares\Provincia;
use App\Generics\BaseController;
use App\Generics\Formulario;
use App\Models\Auxiliares\ProvinciaModel;

class ProvinciaController extends BaseController
{
	public function __construct()
	{
		$formulario = [
			'inputs' => [
				'nome' => Formulario::input('Nome', 'text', 'Digite o nome')
			]
		];

		parent::__construct(
			"Província",
			new Provincia(),
			new ProvinciaModel(),
			"auxiliares/provinvicia",
			[
				'tabelaGenerica' => '',
				'formularioGenerico' => $formulario
			]
		);
	}
}