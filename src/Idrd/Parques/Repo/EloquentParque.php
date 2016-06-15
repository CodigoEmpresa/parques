<?php 

namespace Idrd\Parques\Repo;

use Idrd\Parques\Repo\ParqueInterface;

class EloquentParque implements ParqueInterface {

	private $app;
	private $model;

	public function __construct($app)
	{
		$this->app = $app ?: app();
	}

	public function buscar($key)
	{
		$model = $this->model();

		return $model->whereRaw('CONCAT (Nombre, " ", Id_IDRD) LIKE "%'.$key.'%"', array())
					->orderBy('Nombre', 'asc')
					->get();
	}

	private function model()
	{
		$this->model = $this->app['config']->get('parques.modelo_parque');
		if ($this->model)
			return $this->app[$this->model];
		
		throw new \Exception("No se encuentra el modelo especificado en config/parques.php", 639);
	}
}