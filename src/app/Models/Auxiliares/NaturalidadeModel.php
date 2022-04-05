<?php

namespace App\Models\Auxiliares;

use App\Entities\Auxiliares\Naturalidade;
use App\Generics\BaseModel;

class NaturalidadeModel extends BaseModel
{
    protected $table         = 'naturalidade';
    protected $allowedFields = ['nome', 'provincia_id'];
    protected $returnType    =  Naturalidade::class;
    protected $useTimestamps = false;
    protected $propriedadesValorUnico = ['nome'];
}
