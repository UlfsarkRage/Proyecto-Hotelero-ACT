<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\room;

class roomsController extends Controller
{
    public function store(Request $request){

        $request-> validate([ /*Acá se validan y condicionan las variables las variables */

            'Habitaciones' => 'required'

        ]);

        $Room = new room;
        $Room->Nombre = $request->Nombre;
        $Room->NIT = $request->NIT;
        $Room->Ciudad = $request->Ciudad;
        $Room->Direccion = $request->Dirección;
        $Room->N_Habitaciones = $request->Habitaciones;


        $Room->save();

        return redirect()->route('Rooms')->with('success', 'Habitaciones registradas correctamente');

    }
}
