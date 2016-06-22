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

	public function tipo()
	{
		return $this->belongsTo(config('parques.modelo_tipo'), 'Id_Tipo');
	}

}