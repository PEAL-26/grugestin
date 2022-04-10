<?php

namespace App\Generics;

use CodeIgniter\Entity\Entity;

abstract class Entidade extends Entity
{

    public function __construct($dados = null)
    {
        parent::__construct($dados);
        $this->notificacoes = new Notificacao();
    }

    function __call($method, $args)
    {
        $callback = array($this->notificacoes, $method);
        if (is_callable($callback))
            return call_user_func_array($callback, $args);
    }

    public function init($dados = null)
    {
        return $this->__construct($dados);
    }

    public function existeProrpiedade($propriedade)
    {
        return array_key_exists($propriedade, $this->attributes);
    }

    public abstract function valido();
}
