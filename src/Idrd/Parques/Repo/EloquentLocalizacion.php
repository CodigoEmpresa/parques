<?php 

namespace Idrd\Parques\Repo;

use Idrd\Parques\Repo\LocalizacionInterface;

class EloquentLocalizacion implements LocalizacionInterface {

	private $app;
	private $model;

	public function __construct($app)
	{
		$this->app = $app ?: app();
	}

	public function buscarLocalidad($key)
	{
		$model = $this->model('parques.modelo_localidad');

		return $model->where('localidad', 'LIKE', '%'.$key.'%')
					->orderBy('Localidad', 'asc')
					->get();
	}

	public function obtenerUpz($id_localidad)
	{
		$model = $this->model('parques.modelo_localidad');
		$model->with('upz')->find($id_localidad);

		return $model->upz;
	}

	public function obtenerBarrios($id_upz)
	{
		$model = $this->model('parques.modelo_upz');
		$model->with('barrios')->find($id_upz);

		return $model->barrios;
	}

	private function model($cfgmodelo)
	{
		$this->model = $this->app['config']->get($cfgmodelo);
		if ($this->model)
			return $this->app[$this->model];
		
		throw new \Exception("No se encuentra el modelo especificado en config/parques.php", 639);
	}
}