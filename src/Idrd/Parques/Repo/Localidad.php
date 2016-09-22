<?php

namespace Idrd\Parques\Repo;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\Config as Config;

class Localidad extends Eloquent {
	
	protected $table = 'localidad';
	protected $primaryKey = 'Id_Localidad';
	protected $fillable = ['Localidad'];
	protected $connection = '';
	public $timestamps = false;

	public function __construct()
	{
		$this->connection = config('parques.conexion');
	}

	public function parques()
	{
		return $this->hasMany(config('parques.modelo_parque'), 'Id_Localidad');
	}

	public function upz()
	{
		return $this->hasMany(config('parques.modelo_upz'), 'IdLocalidad');
	}
}