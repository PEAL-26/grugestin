<?php

namespace App\Generics;

use Exception;

class Notificacao
{
    private $notificacoes = [];

    public function __construct()
    {
    }

    /**
     *@param array $notifucacoes: array de notificações [propriedade1 => mensagem1, propriedade2 => mensagem2, ...]
     *@return void
     *@return exception : caso não seja um array ou não tenha informado a mensagem
     */
    public function addNotificacoes($notifucacoes)
    {
        if (is_Array($notifucacoes)) {
            foreach ($notifucacoes as $propriedade => $mensagem) {
                if (empty($propriedade)) throw  new Exception("Propriedade não informada.");
                if (empty($mensagem)) throw new Exception("Mensagem não informada.");
                $this->addNotificacao($propriedade, $mensagem);
            }
        }

        throw new Exception("Não foi informado um array de notificações.");
    }

    public function addNotificacao($propriedade, $mensagem)
    {
        $this->notificacoes[] = array(
            $propriedade => $mensagem
        );
    }

    public function getNotificacoes($lista = false, $mostrarPropriedade = false)
    {
        $notificaoes = '';
        foreach ($this->notificacoes as $propriedades) {
            foreach ($propriedades as $propriedade => $mensagem) {
                if ($lista == true) {
                    $notificaoes .= '<li>' . ($mostrarPropriedade ? '<b>[' . $propriedade . ']</b> ' : '') . $mensagem . '</li>';
                } else {
                    $notificaoes .= ($mostrarPropriedade ? '<b>[' . $propriedade . ']</b> ' : '') . $mensagem . '<br>';
                }
            }
        }

        return $notificaoes;
    }

    public function temNotificacoes()
    {
        return count($this->notificacoes) > 0 ? true : false;
    }

    public function limparNotificacoes()
    {
        $this->notificacoes = [];
    }
}
