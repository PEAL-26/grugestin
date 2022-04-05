<?php

namespace App\Entities\Funcionarios;

use App\Generics\Entidade;

class Funcionario extends Entidade
{
    protected $attributes = [
        'id'                => null,
        'naturalidade_id'   => null,
        'provincia_id'      => null,
        'estado_civil_id'   => null,
        'filial_id'         => null,
        'funcao_id'         => null,
        'codigo'            => null,
        'nome'              => null,
        'nome_pai'          => null,
        'nome_mae'          => null,
        'bilhete_identidade'=> null,
        'sexo'              => null,
        'endereco'          => null,
        'data_nascimento'   => null,
        'salario_base'      => null,
        'ano_vinculo'       => null,
        'observacao'        => null,
        'estado'            => null,
        'data_cadastro'     => null,
    ];

    public function valido()
    {
        // Validacao::validarCampoVazio($this, 'nome');
        // Validacao::validarTamanhoMaximoCampo($this, 'nome', 30);
        // Validacao::validarCamposApenasLetras($this, 'nome');
        return !$this->temNotificacoes();
    }
}
