<?php

namespace App\Models;

use App\Generics\BaseModel;

class RequisicaoModel extends BaseModel
{
    protected $table         = 'requisicao';
    protected $allowedFields = ['nome'];
    // protected $returnType    =  Operacao::class;
    protected $useTimestamps = false;

}