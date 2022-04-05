<?php

namespace App\Models;

use App\Generics\BaseModel;

class UsuarioModel extends BaseModel
{
    protected $table         = 'usuario';
    // protected $allowedFields = ['nome'];
    // protected $returnType    =  Operacao::class;
    protected $useTimestamps = false;
}
