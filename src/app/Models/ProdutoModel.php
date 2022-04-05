<?php

namespace App\Models;

use App\Generics\BaseModel;

class ProdutoModel extends BaseModel
{
    protected $table         = 'produto';
    protected $allowedFields = ['nome'];
    // protected $returnType    =  Operacao::class;
    protected $useTimestamps = false;

}