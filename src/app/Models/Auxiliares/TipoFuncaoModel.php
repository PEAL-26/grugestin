<?php

namespace App\Models\Auxiliares;

use App\Entities\Auxiliares\TipoFuncao;
use App\Generics\BaseModel;

class TipoFuncaoModel extends BaseModel
{
    protected $table         = 'tipo_funcao';
    protected $allowedFields = ['nome'];
    protected $returnType    =  TipoFuncao::class;
    protected $useTimestamps = false;
    protected $propriedadesValorUnico = ['nome'];
}
