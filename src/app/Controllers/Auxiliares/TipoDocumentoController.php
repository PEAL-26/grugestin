<?php

namespace App\Controllers\Auxiliares;

use App\Entities\Auxiliares\TipoDocumento;
use App\Generics\BaseController;
use App\Generics\Formulario;
use App\Models\Auxiliares\TipoDocumentoModel;

class TipoDocumentoController extends BaseController
{
	public function __construct()
	{
		$formulario = [
			'inputs' => [
				'nome' => Formulario::input('Nome', 'text', 'Digite o nome')
			]
		];

		parent::__construct(
			"Tipo de Documento",
			new TipoDocumento(),
			new TipoDocumentoModel(),
			"auxiliares/tipo_documento",
			[
				'tabelaGenerica' => '',
				'formularioGenerico' => $formulario
			]
		);
	}
}
