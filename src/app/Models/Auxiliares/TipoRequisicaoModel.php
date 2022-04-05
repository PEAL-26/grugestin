<?php

namespace App\Models\Auxiliares;

use App\Entities\Auxiliares\TipoRequisicao;
use App\Generics\BaseModel;

class TipoRequisicaoModel extends BaseModel
{
    protected $table         = 'tipo_requisicao';
    protected $allowedFields = ['nome'];
    protected $returnType    =  TipoRequisicao::class;
    protected $useTimestamps = false;
    protected $propriedadesValorUnico = ['nome'];
}
