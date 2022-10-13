<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Firma;

class CreateFirmaController extends Controller
{

    public function __invoke(Request $request)
	{
        $firmenname = $request->input('firmenname');
        $firma = Firma::create([
            'firmenname' => $firmenname,
        ]);
        return response()->json($firma);
	}

}
