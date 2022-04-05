<?php

namespace App\Models\Auxiliares;

use App\Entities\Auxiliares\EstadoFuncionario;
use App\Generics\BaseModel;

class EstadoFuncionarioModel extends BaseModel
{
    protected $table         = 'estado_funcionario';
    protected $allowedFields = ['nome'];
    protected $returnType    =  EstadoFuncionario::class;
    protected $useTimestamps = false;
    protected $propriedadesValorUnico = ['nome'];
}
