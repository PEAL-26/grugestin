<?php

namespace App\Models\Auxiliares;

use App\Entities\Auxiliares\Provincia;
use App\Generics\BaseModel;

class ProvinciaModel extends BaseModel
{
    protected $table         = 'provincia';
    protected $allowedFields = ['nome'];
    protected $returnType    =  Provincia::class;
    protected $useTimestamps = false;
    protected $propriedadesValorUnico = ['nome'];
}
