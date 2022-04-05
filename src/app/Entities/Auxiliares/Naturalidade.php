<?php

namespace App\Entities\Auxiliares;

use App\Generics\Entidade;
use App\Generics\Validacao;

class Naturalidade extends Entidade
{
    protected $attributes = [
        'id'               => null,
        'nome'               => null,
        'provincia_id'               => null,
        'provincia_nome'               => null,
    ];

    public function valido()
    {
        Validacao::validarCampoVazio($this, 'nome');
        Validacao::validarTamanhoMaximoCampo($this, 'nome', 50);
        Validacao::validarCamposApenasLetras($this, 'nome');
        Validacao::validarCampoMaiorQue($this, 'provincia_id', 0);
        return !$this->temNotificacoes();
    }
}
