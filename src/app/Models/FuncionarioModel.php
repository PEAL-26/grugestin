<?php

namespace App\Models;

use App\Generics\BaseModel;

class FuncionarioModel extends BaseModel
{
    protected $table         = 'funcionario';
    protected $allowedFields = ['nome'];
    // protected $returnType    =  Operacao::class;
    protected $useTimestamps = false;

}