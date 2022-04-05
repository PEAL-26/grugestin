<?php

namespace App\Entities\Usuarios;

use App\Generics\Entidade;

class Usuario extends Entidade
{
    protected $attributes = [];

    public function valido()
    {
        // Validacao::validarCampoVazio($this, 'nome');
        // Validacao::validarTamanhoMaximoCampo($this, 'nome', 30);
        // Validacao::validarCamposApenasLetras($this, 'nome');
        return !$this->temNotificacoes();
    }
}
