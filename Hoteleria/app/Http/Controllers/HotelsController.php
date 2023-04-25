<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\room;

class HotelsController extends Controller
{
    /**
     * index para mostrar todos los elementos de 'todo'
     * store para guardar en 'todo'
     * update para actualizar un todo
     * destroy para eliminar un todo
     * edit para mostrar el formulario de edicion
     */
    public function store(Request $request){

        $request-> validate([ /*Acá se validan y condicionan las variables las variables */
            'Nombre' => 'required|min:3'

        ]);

        $Hotel = new Hotel;
        $Hotel->Nombre = $request->Nombre;
        $Hotel->NIT = $request->NIT;
        $Hotel->Ciudad = $request->Ciudad;
        $Hotel->Direccion = $request->Dirección;
        $Hotel->N_Habitaciones = $request->Habitaciones;


        $Hotel->save();

        return redirect()->route('Hotels')->with('success', 'Hotel registrado correctamente');

    }

    public function store2(Request $request){

        $request-> validate([ /*Acá se validan y condicionan las variables las variables */
            'Nombre' => 'required|min:3'

        ]);

        $Room = new room;
        $Room->Tipo_de_habitacion = $request->tipo_habitación;
        $Room->Acomodacion = $request->acomodación;
        $Room->Hotel = $request->Nombre;
        $Room->N_Habitaciones = $request->Habitaciones_2;


        $Room->save();

        return redirect()->route('Hotels')->with('success', 'Habitaciones actualizadas correctamente');

    }


    public function hotels (){
       
        return view('Hoteles.hotels');
    }

    public function Ver_hotels (){
        /*$Hoteles = Hotel::all();*/
        $Hoteles= Hotel::OrderBy('Nombre', 'ASC')->get();
        return view('Hoteles.hotels_view', ['Hoteles'=>$Hoteles]);
    }

    


    public function show ($id){
        $Hotel = Hotel::find($id);
        return view('Hoteles.show', ['Hotel'=>$Hotel]);
    }

    public function update (Request $request, $id){
        $Hotel = Hotel::find($id);
        $Hotel->Nombre = $request->Nombre;
        $Hotel->N_Habitaciones = $request->Habitaciones;
        $Hotel->save();

        /*dd($Hotel); es como un console log*/

        /*return view('Hotels.index', ['success'=>'Tarea Actualizada']);*/
        return redirect()->route('Ver_Hotels')-> with('success','Tarea Actualizada!');
    }

    public function destroy ($id){
        $Hotel = Hotel::find($id);
        $Hotel->delete();

        return redirect()->route('Ver_Hotels')-> with('success','Tarea Eliminada!');
        
    }
}
