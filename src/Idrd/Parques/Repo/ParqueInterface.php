<?php 

namespace Idrd\Parques\Repo;

interface ParqueInterface {

	/**
	 * [buscar Buscar un parque]
	 * @param  [key] $key  [Llave para buscar]
	 * @return [mixed]     [Idrd\Parques\Repo\PArque o NULL si no existe el parque]
	 */
	public function buscar($key);

	/**/
	public function todos();

	/**/
	public function obtener($id_parque);

	/**/
	public function obtenerPorTipo($id_tipo);


	/**/
	public function grandesEscenarios();
} 