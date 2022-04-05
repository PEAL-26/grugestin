<?php

namespace App\Entities\Produtos;

use App\Generics\Entidade;

class Produto extends Entidade
{
    protected $attributes = [

    ];

    public function valido()
    {
        // Validacao::validarCampoVazio($this, 'nome');
        // Validacao::validarTamanhoMaximoCampo($this, 'nome', 30);
        // Validacao::validarCamposApenasLetras($this, 'nome');
        return !$this->temNotificacoes();
    }
}
