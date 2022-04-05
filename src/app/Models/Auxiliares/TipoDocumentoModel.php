<?php

namespace App\Models\Auxiliares;

use App\Entities\Auxiliares\TipoDocumento;
use App\Generics\BaseModel;

class TipoDocumentoModel extends BaseModel
{
    protected $table         = 'tipo_documento';
    protected $allowedFields = ['nome'];
    protected $returnType    =  TipoDocumento::class;
    protected $useTimestamps = false;
    protected $propriedadesValorUnico = ['nome'];
}
