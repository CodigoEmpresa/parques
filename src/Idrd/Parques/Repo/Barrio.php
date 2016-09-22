<?php

namespace Idrd\Parques\Repo;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\Config as Config;

class Barrio extends Eloquent {
	
	protected $table = 'Barrios';
	protected $primaryKey = 'IdBarrio';
	protected $fillable = ['Barrio', 'CodUpz'];
	protected $connection = '';
	public $timestamps = false;

	public function __construct()
	{
		$this->connection = config('parques.conexion');
	}

	public function upz()
	{
		return $this->belongsTo(config('parques.modelo_upz'), 'CodUpz');
	}
}