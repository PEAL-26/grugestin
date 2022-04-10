<?php

namespace App\Controllers;

use App\Entities\Produtos\Produto;
use App\Generics\BaseController;
use App\Models\ProdutoModel;

class ProdutoController extends BaseController
{
    public function __construct()
    {
        parent::inicializar(
            "Produtos",
            new Produto(),
            new ProdutoModel(),
            "produtos"
        );
    }
}
