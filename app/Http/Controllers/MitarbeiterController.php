<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitarbeiter;

class MitarbeiterController extends Controller
{

	public function __invoke(Request $request)
	{
		$mitarbeiter = Mitarbeiter::all();
		return response()->json($mitarbeiter);
	}

}
