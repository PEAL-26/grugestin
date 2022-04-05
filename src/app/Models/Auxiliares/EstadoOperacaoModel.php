<?php

namespace App\Models\Auxiliares;

use App\Entities\Auxiliares\EstadoOperacao;
use App\Generics\BaseModel;

class EstadoOperacaoModel extends BaseModel
{
    protected $table         = 'estado_operacao';
    protected $allowedFields = ['nome'];
    protected $returnType    =  EstadoOperacao::class;
    protected $useTimestamps = false;
    protected $propriedadesValorUnico = ['nome'];
}
