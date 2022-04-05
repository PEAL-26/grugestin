<?php

namespace App\Models\Auxiliares;

use App\Entities\Auxiliares\EstadoCivil;
use App\Generics\BaseModel;

class EstadoCivilModel extends BaseModel
{
    protected $table         = 'estado_civil';
    protected $allowedFields = ['nome'];
    protected $returnType    =  EstadoCivil::class;
    protected $useTimestamps = false;
    protected $propriedadesValorUnico = ['nome'];
}
