<?php 

namespace Idrd\Parques\Repo;

interface LocalizacionInterface {

	public function buscarLocalidad($key);

	public function obtenerUpz($id_localidad);

	public function obtenerBarrios($id_upz);
} 