@extends('app') {{-- Indicar el nombre de la pag donde se va a agregar--}}

@section('content') {{-- Indicar el nombre del @ yield que se indico en la pagina donde se va a agregar este código--}}

    <style>
        .borderN{
            border: 1px solid whitesmoke;
            border-radius: 1rem;
            background-color: rgba(130, 213, 219, 0.3);
        }
        label{
            color: black;
        }
        .row1{
            width: 16%;
            justify-content: center;
        }
        .rowbtn{
            width: 22%;
            justify-content: center;
        }
        .rowbtn1{
            width: 22%;
            display:flex;
            justify-content: center;
        }
        a{
            text-decoration: none;
            color:black;
        }
        h4{
            color: whitesmoke;
        }
        h6{
            color: whitesmoke;
        }

    </style>


    <div class="container w-50 borderN p-4 mt-5">

        <div>
 
                <div style="display: flex; justify-content:space-around">
                    <div class="row row1 py-1">
                        <div class="col-md-9 d-flex aling-items-center" style="justify-content: center;">
                            <h4>Nombre</h4>
                        </div>
                    </div>   
                    <div class="row row1 py-1">
                        <div class="col-md-9 d-flex aling-items-center" style="justify-content: center;">
                            <h4>NIT</h4>
                        </div>
                    </div>    
                    <div class="row row1 py-1">    
                        <div class="col-md-9 d-flex aling-items-center" style="justify-content: center;">
                            <h4>Ciudad</h4>
                        </div>
                    </div>
                    <div class="row row1 py-1">
                        <div class="col-md-9 d-flex aling-items-center" style="justify-content: center;">
                            <h4>Dirección</h4>
                        </div>
                    </div>   
                    <div class="row row1 py-1">
                        <div class="col-md-9 d-flex aling-items-center" style="justify-content: center;">
                            <h6>Número de Habitaciones</h6>
                        </div>
                    </div> 
                    <div class="rowbtn py-1">
                        <div class="col-md-9 d-flex aling-items-center" style="justify-content: center;">
                            <h4>-----------------</h4>
                        </div>
                    </div> 



                </div>    

        </div>


        <div>
            @foreach ( $Hoteles as $Hotel )
                <div style="display: flex; justify-content:space-around">
                    <div class="row row1 py-1">
                        <div class="col-md-9 d-flex aling-items-center" style="justify-content: center;">
                            <a href="{{ route('Hoteles-edit', ['id'=> $Hotel->id]) }}"> {{ $Hotel->Nombre }}</a>
                        </div>
                    </div>   
                    <div class="row row1 py-1">
                        <div class="col-md-9 d-flex aling-items-center" style="justify-content: center;">
                            <a href="{{ route('Hoteles-edit', ['id'=> $Hotel->id]) }}"> {{ $Hotel->NIT }}</a>
                        </div>
                    </div>    
                    <div class="row row1 py-1">    
                        <div class="col-md-9 d-flex aling-items-center" style="justify-content: center;">
                            <a href="{{ route('Hoteles-edit', ['id'=> $Hotel->id]) }}"> {{ $Hotel->Ciudad }}</a>
                        </div>
                    </div>
                    <div class="row row1 py-1">
                        <div class="col-md-9 d-flex aling-items-center" style="justify-content: center;">
                            <a href="{{ route('Hoteles-edit', ['id'=> $Hotel->id]) }}"> {{ $Hotel->Direccion }}</a>
                        </div>
                    </div>   
                    <div class="row row1 py-1">
                        <div class="col-md-9 d-flex aling-items-center" style="justify-content: center;">
                            <a href="{{ route('Hoteles-edit', ['id'=> $Hotel->id]) }}"> {{ $Hotel->N_Habitaciones }}</a>
                        </div>
                    </div> 
                    <div class="rowbtn1 py-1">

                        <div class=" d-flex " style="justify-content: center; width:45%">
                            <button class="btn btn-info btn-sm" style="border-color: black;">
                                <a href="{{ route('Hoteles-edit', ['id'=> $Hotel->id]) }}">Habitaciones</a>
                            </button>
                        </div>

                        <div class=" d-flex " style="justify-content: center; width:45%">
                            <form action="{{ route('Hoteles-destroy', [$Hotel->id]) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm" style="border-color: black;">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>    
            @endforeach
        </div>
    </div>
@endsection