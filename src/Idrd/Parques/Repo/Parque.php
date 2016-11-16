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

	public function localidad()
	{
		return $this->belongsTo(config('parques.modelo_localidad'), 'Id_Localidad');
	}

	public function upz()
	{
		return $this->belongsTo(config('parques.modelo_upz'), 'Upz');
	}

	public function dotaciones()
	{
		return $this->belongsToMany(config('parques.modelo_dotacion'), 'parquedotacion', 'Id_Parque', 'Id_Dotacion')
					->withPivot('Num_Dotacion', 'Estado', 'Material', 'iluminacion', 'Aprovechamientoeconomico', 'Area', 'MaterialPiso', 'Cerramiento', 'Camerino', 'Luz', 'Agua', 'Gas', 'Capacidad', 'Carril', 'Bano', 'BateriaSanitaria', 'Descripcion', 'Diag_Mantenimiento', 'Diag_Construcciones', 'Posicionamiento', 'Destinacion', 'Imagen', 'Fecha', 'TipoCerramiento', 'AlturaCerramiento', 'Largo', 'Ancho', 'Cubierto', 'Dunt', 'B_Masculino', 'B_Femenino', 'B_Discapacitado', 'C_Vehicular', 'C_BiciParqueadero', 'Publico');
	}
}