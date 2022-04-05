<?php

namespace App\Controllers\Auxiliares;

use App\Entities\Auxiliares\EstadoCivil;
use App\Generics\BaseController;
use App\Generics\Formulario;
use App\Models\Auxiliares\EstadoCivilModel;

class EstadoCivilController extends BaseController
{
	public function __construct()
	{
		$formulario = [
			'inputs' => [
				'nome' => Formulario::input('Nome', 'text', 'Digite o nome')
			]
		];

		parent::__construct(
			"Estado Civil",
			new EstadoCivil(),
			new EstadoCivilModel(),
			"auxiliares/estado_civil",
			[
				'tabelaGenerica' => '',
				'formularioGenerico' => $formulario
			]
		);
	}
}
