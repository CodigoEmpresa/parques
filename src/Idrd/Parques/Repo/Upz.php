<?php

namespace Idrd\Parques\Repo;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\Config as Config;

class Upz extends Eloquent {
	
	protected $table = 'upz';
	protected $primaryKey = 'Id_Upz';
	protected $fillable = ['Upz', 'cod_upz'];
	protected $connection = '';
	public $timestamps = false;

	public function __construct()
	{
		$this->connection = config('parques.conexion');
	}

	public function localidad()
	{
		return $this->belongsTo(config('parques.modelo_localidad'), 'Id_Localidad');
	}

	public function parques()
	{
		return $this->hasMany(config('parques.modelo_parque'), 'Id_Upz');
	}
}