<?php 

namespace Idrd\Parques\Repo;

interface ParqueInterface {

	/**
	 * [buscar Buscar un parque]
	 * @param  [key] $key  [Llave para buscar]
	 * @return [mixed]     [Idrd\Parques\Repo\PArque o NULL si no existe el parque]
	 */
	public function buscar($key);

} 