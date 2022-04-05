<?php

namespace App\Generics;

use CodeIgniter\Model;
use Exception;

class BaseModel extends Model
{

	protected $propriedadesValorUnico = [];

	public function __construct()
	{
		parent::__construct();
		$this->notificacoes = new Notificacao();
	}

	function __call($method, $args)
	{
		$callback = array($this->notificacoes, $method);
		if (is_callable($callback))
			return call_user_func_array($callback, $args);
	}

	public function salvar($entidade)
	{
		$this->verificarExisteValorUnico($entidade);

		if (!$this->temNotificacoes()) {
			if ($entidade->id == 0) $resultado = $this->insert($entidade);
			else $resultado = $this->update($entidade->id, $entidade);
		}

		if (isset($resultado)  && $resultado == false)
			$this->notificacoes->addNotificacao('erro', 'Ocorreu um erro ao salvar o registro... <b>Entre em contacto com o suporte.<b>');

		return $this->temNotificacoes() ? $this : true;
	}

	protected function addPropriedadesValorUnico($propriedades)
	{
		if (is_Array($propriedades)) {
			foreach ($propriedades as $propriedade) {
				$this->propriedadesValorUnico[$propriedade] = true;
			}
		} else {
			$this->propriedadesValorUnico[$propriedades] = true;
		}
	}

	private function verificarExisteValorUnico($dados)
	{
		foreach ($this->propriedadesValorUnico as $propriedade) {
			if (!$dados->existeProrpiedade($propriedade))  throw new Exception("A Propriedade [{$propriedade}] não existe.");

			$valor = trim($dados->{$propriedade});

			if (is_null($valor) ||  empty($valor)) throw new Exception("O valor da Propriedade [{$propriedade}] não pode ser nulo ou vazio.");

			$found = $this->db
				->query("SELECT * FROM {$this->table} WHERE {$propriedade} LIKE '{$valor}'")
				->getResult();

			if (count($found)) {
				if ($dados->id == 0)
					$this->addNotificacao($propriedade, "Esse registro já existe.");

				if ($dados->id != 0 && $found[0]->id != $dados->id)
					$this->addNotificacao($propriedade, "Esse registro já existe.");
			}
		}
	}

	public function listarTodos()
	{
		// $this->db->table($this->table . ' c')
		//     ->select('c.*, e.titulo')
		// $this->db->table($this->table);

		return $this;
	}
}
