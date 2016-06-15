<?php

namespace Idrd\Parques\Controllers;

use App\Http\Controllers\Controller;
use Idrd\Parques\Repo\ParqueInterface;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Validator;

class ParqueController extends Controller {

	private $repositorio;

	public function __construct(ParqueInterface $repositorio)
	{
		$this->repositorio = $repositorio;
	}

	public function buscar(Request $request, $key)
	{
		$resultados = $this->repositorio->buscar($key);

		return response()->json($resultados);
	}

}