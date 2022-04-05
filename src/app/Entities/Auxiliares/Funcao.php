<?php

namespace App\Entities\Auxiliares;

use App\Generics\Entidade;
use App\Generics\Validacao;

class Funcao extends Entidade
{
    protected $attributes = [
        'id'               => null,
        'nome'             => null,
        'tipo_funcao_id'   => null,
        'tipo_funcao_nome'   => null,
    ];

    public function valido()
    {
        Validacao::validarCampoVazio($this, 'nome');
        Validacao::validarTamanhoMaximoCampo($this, 'nome', 50);
        Validacao::validarCamposApenasLetras($this, 'nome');
        Validacao::validarCampoMaiorQue($this, 'tipo_funcao_id', 0);
        return !$this->temNotificacoes();
    }
}
