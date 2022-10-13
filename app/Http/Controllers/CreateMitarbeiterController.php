<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mitarbeiter;

class CreateMitarbeiterController extends Controller
{
    public function __invoke(Request $request)
	{

        $firmen_id = $request->input('firmen_id');
        $vorname = $request->input('vorname');
        $nachname = $request->input('nachname');
        $email = $request->input('email');

        $mitarbeiter =  Mitarbeiter::create([
            'firmen_id' => $firmen_id,
            'vorname' => $vorname,
            'nachname' =>  $nachname,
            'email' => $email,
        ]);

		return response()->json($mitarbeiter);
	}
}
