<?php

namespace App\Models;

use App\Generics\BaseModel;

class OperacaoModel extends BaseModel
{
    protected $table         = 'operacao';
    protected $allowedFields = ['nome'];
    // protected $returnType    =  Operacao::class;
    protected $useTimestamps = false;

}