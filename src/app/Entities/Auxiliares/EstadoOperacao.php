<?php

namespace App\Entities\Auxiliares;

use App\Generics\Entidade;
use App\Generics\Validacao;

class EstadoOperacao extends Entidade
{
    protected $attributes = [
        'id'               => null,
        'nome'               => null,
    ];

    public function valido()
    {
        Validacao::validarCampoVazio($this, 'nome');
        Validacao::validarTamanhoMaximoCampo($this, 'nome', 10);
        Validacao::validarCamposApenasLetras($this, 'nome');
        return !$this->temNotificacoes();
    }
}
