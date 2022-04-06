<?php

namespace App\Generics;

use CodeIgniter\Controller;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;
use Psr\Log\LoggerInterface;

class BaseController extends Controller
{
	protected $request;
	protected $helpers = ['form'];

	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		parent::initController($request, $response, $logger);
	}

	public function __construct()
	{
		//$this->request = \Config\Services::request();
	}

	public function inicializar(
		$titulo,
		$entidade,
		$model,
		$pathView,
		$outrosParametros = null
	) {

		$this->url = service('uri')->getSegment(1);
		$this->entidade = $entidade;
		$this->model = $model;
		$this->view = $pathView;
		$this->titulo = $titulo;

		$this->list = [
			"titulo" => $titulo,
			"subTitulo" => 'Listagem',
			"url" => $this->url,
			"urlNovo" => $this->url . '/novo',
			"urlDelete" => $this->url . '/remover/',
			"urlEdit" => $this->url . '/alterar/',
			"listagem" => null,
			"paginacao" => null,
			"view" => $this->view . '/index',
		];
		$this->list = $this->addOutrosParametros($this->list, $outrosParametros);

		$this->create = [
			"titulo" => $titulo,
			"subTitulo" => 'Novo',
			"url" => $this->url,
			"accao" => $this->url . '/novo',
			"entidade" => $entidade,
			"validacao" => null,
			"view" => $this->view . '/cadastro',
		];
		$this->create = $this->addOutrosParametros($this->create, $outrosParametros);

		$this->edit = [
			"titulo" => $titulo,
			"subTitulo" => 'Alterar',
			"url" => $this->url,
			"accao" => $this->url . '/alterar/',
			"entidade" => null,
			"validacao" => null,
			"view" => $this->view . '/cadastro',
			$outrosParametros
		];
		$this->edit = $this->addOutrosParametros($this->edit, $outrosParametros);

		$this->details = [
			"titulo" => $titulo,
			"subTitulo" => 'Detalhes',
			"url" => $this->url,
			"urlAlterar" => $this->url . '/alterar/',
			"entidade" => null,
			"view" => $this->view . '/detalhes',
			$outrosParametros
		];
		$this->details = $this->addOutrosParametros($this->details, $outrosParametros);
	}

	/**
	 * @param int countPager Número de registro por página
	 * @param array $outrosParametros Outros parâmetros que serão passados para a view ex.: [chave1 => valor1, chave2 => valor2]
	 */
	public function index($countPager = 5, $outrosParametros = [])
	{
		$this->list = $this->addOutrosParametros($this->list, $outrosParametros);

		$this->list["listagem"] = $this->model->listarTodos()->paginate($countPager);
		$this->list["paginacao"] = $this->model->pager;
		$this->list[] = $this->model->pager;

		return view($this->list["view"], $this->list);
	}

	public function getDetails($id, $outrosParametros = [])
	{
		$this->details = $this->addOutrosParametros($this->details, $outrosParametros);
		$found = $this->model->find($id);

		if (!$found)
			throw PageNotFoundException::forPageNotFound();

		$this->details["urlAlterar"] .= $id;
		$this->details["entidade"] = $found;
		return view($this->details["view"], $this->details);
	}

	public function getCreate($outrosParametros = [])
	{
		$this->create = $this->addOutrosParametros($this->create, $outrosParametros);
		return view($this->create["view"], $this->create);
	}

	public function postCreate($outrosParametros = [])
	{
		$this->create = $this->addOutrosParametros($this->create, $outrosParametros);

		$dataPost = $this->request->getPost();
		$entidade = $this->entidade->init($dataPost);
		if (!$entidade->valido()) {
			$this->create["validacao"] = $entidade->getNotificacoes();
			return view($this->create["view"], $this->create);
		}

		$resultado = $this->model->salvar($entidade);

		if ($resultado !== true) {
			$this->create["entidade"] = $entidade;
			$this->create["validacao"] = $resultado->getNotificacoes(false, true);
			return view($this->create["view"], $this->create);
		}

		return redirect($this->url);
	}

	public function getEdit($id, $outrosParametros = [])
	{
		$this->edit = $this->addOutrosParametros($this->edit, $outrosParametros);

		$found = $this->model->find($id);
		if (!$found)
			throw PageNotFoundException::forPageNotFound();

		$this->edit["accao"] .= $id;
		$this->edit["entidade"] = $found;
		return view($this->edit["view"], $this->edit);
	}

	public function postEdit($id, $outrosParametros = [])
	{
		$this->edit = $this->addOutrosParametros($this->edit, $outrosParametros);

		$found = $this->model->find($id);

		if (!$found)
			throw PageNotFoundException::forPageNotFound();

		$dataPost = $this->request->getPost();
		$entidade = $this->entidade->init($dataPost);

		if ($entidade->id != $found->id)
			throw PageNotFoundException::forPageNotFound();

		if (!$entidade->valido()) {
			$this->edit["entidade"] = $entidade;
			$this->edit["validacao"] = $entidade->getNotificacoes();
			$this->edit["accao"] .= $id;
			return view($this->edit["view"], $this->edit);
		}

		$resultado = $this->model->salvar($entidade);

		if ($resultado !== true) {
			$this->edit["entidade"] = $entidade;
			$this->edit["validacao"] = $resultado->getNotificacoes(false, true);
			$this->edit["accao"] .= $id;
			return view($this->edit["view"], $this->edit);
		}

		return redirect($this->url);
	}

	public function delete($id)
	{
		$msg = '';
		$sucesso = true;
		$found = $this->model->find($id);
		if ($found == null) {
			$msg .= "\nEsse registro não existe.";
			$sucesso = false;
		}

		if ($sucesso) {
			$resultado = $this->model->delete($id, 1);

			if ($resultado === true) {
				$msg .= "\nRegistro removido com sucesso.";
				$sucesso = true;
			} else {
				$msg .= "\nOcorreu um erro ao remover o registro. <br><b>Entre em contacto com o suporte.<b>";
				$sucesso = false;
			}
		}

		return json_encode(['success' => $sucesso, 'mensagem' => $msg]);
	}

	private function  addOutrosParametros($array, $outrosParametros)
	{
		if (!is_array($array))
			throw new Exception("O parâmetro array deve ser um array");

		if (!is_array($outrosParametros))
			throw new Exception("O parâmetro outrosParametros deve ser um array");

		if (count($outrosParametros)) {
			foreach ($outrosParametros as $chave => $valor) {
				$array[$chave] = $valor;
			}
		}

		return $array;
	}
}
