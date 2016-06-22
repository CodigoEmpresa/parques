<?php

namespace Idrd\Parques\Repo;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\Config as Config;

class TipoParque extends Eloquent {
	
	protected $table = 'tipo';
	protected $primaryKey = 'Id_Tipo';
	protected $fillable = ['Tipo'];
	protected $connection = '';
	public $timestamps = false;

	public function __construct()
	{
		$this->connection = config('parques.conexion');
	}

	public function parques()
	{
		return $this->hasMany(config('parques.modelo_parque'), 'Id_Tipo');
	}


}