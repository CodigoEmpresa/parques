<?php

namespace Idrd\Parques\Repo;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Parque extends Eloquent {
	
	protected $table = 'parque';
	protected $primaryKey = 'Id';
	protected $connection = '';
	public $timestamps = false;

	public function __construct()
	{
		$this->connection = config('parques.conexion');
	}

}