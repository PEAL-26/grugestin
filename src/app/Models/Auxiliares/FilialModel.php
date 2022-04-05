<?php

namespace App\Models\Auxiliares;

use App\Entities\Auxiliares\Filial;
use App\Generics\BaseModel;

class FilialModel extends BaseModel
{
    protected $table         = 'filial';
    protected $allowedFields = ['nome'];
    protected $returnType    =  Filial::class;
    protected $useTimestamps = false;
    protected $propriedadesValorUnico = ['nome'];
}
