<?php

namespace App\Models\Auxiliares;

use App\Entities\Auxiliares\TipoOperacao;
use App\Generics\BaseModel;

class TipoOperacaoModel extends BaseModel
{
    protected $table         = 'tipo_operacao';
    protected $allowedFields = ['nome'];
    protected $returnType    =  TipoOperacao::class;
    protected $useTimestamps = false;
    protected $propriedadesValorUnico = ['nome'];
}
