<?php

namespace Idrd\Parques\Repo;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Dotacion extends Eloquent {
	
	protected $table = 'parquedotacion';
	protected $primaryKey = 'Id';
	protected $connection = '';
	public $timestamps = false;

}