<?php

namespace Idrd\Parques\Repo;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Dotacion extends Eloquent {
	
	protected $table = 'dotacion';
	protected $primaryKey = 'Id_Dotacion';
	protected $connection = '';
	public $timestamps = false;

	public function __construct()
	{
		$this->connection = config('parques.conexion');
	}

	public function parques()
	{
		return $this->belongsToMany(config('parques.modelo_parque'), 'parquedotacion','Id_Dotacion','Id_Parque')
					->withPivot('Num_Dotacion', 'Estado', 'Material', 'iluminacion', 'Aprovechamientoeconomico', 'Area', 'MaterialPiso', 'Cerramiento', 'Camerino', 'Luz', 'Agua', 'Gas', 'Capacidad', 'Carril', 'Bano', 'BateriaSanitaria', 'Descripcion', 'Diag_Mantenimiento', 'Diag_Construcciones', 'Posicionamiento', 'Destinacion', 'Imagen', 'Fecha', 'TipoCerramiento', 'AlturaCerramiento', 'Largo', 'Ancho', 'Cubierto', 'Dunt', 'B_Masculino', 'B_Femenino', 'B_Discapacitado', 'C_Vehicular', 'C_BiciParqueadero', 'Publico');
	}

}