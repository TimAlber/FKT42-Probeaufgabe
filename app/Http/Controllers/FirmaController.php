<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firma;

class FirmaController extends Controller
{
    public function __invoke(Request $request)
	{
		$firma = Firma::all();
		return response()->json($firma);
	}
}
