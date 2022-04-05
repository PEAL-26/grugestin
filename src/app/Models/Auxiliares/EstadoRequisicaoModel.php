<?php

namespace App\Models\Auxiliares;

use App\Entities\Auxiliares\EstadoRequisicao;
use App\Generics\BaseModel;
use CodeIgniter\Model;

class EstadoRequisicaoModel extends BaseModel
{
    protected $table         = 'estado_requisicao';
    protected $allowedFields = ['nome'];
    protected $returnType    =  EstadoRequisicao::class;
    protected $useTimestamps = false;
    protected $propriedadesValorUnico = ['nome'];
}
