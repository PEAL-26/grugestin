<?php

namespace App\Models\Auxiliares;

use App\Entities\Auxiliares\Funcao;
use App\Generics\BaseModel;

class FuncaoModel extends BaseModel
{
    protected $table         = 'funcao';
    protected $allowedFields = ['nome', 'tipo_funcao_id'];
    protected $returnType    =  Funcao::class;
    protected $useTimestamps = false;
    protected $propriedadesValorUnico = ['nome'];
}
