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

    </style>


    <div class="container w-50 borderN p-4 mt-5">


        <form action="{{ route('Hotels') }}" method="POST">
            @csrf {{--Este parametro es obligatorio en todos los forms para evitar los hackeos--}}

            @if (session('success'))
                <div style="display: flex; justify-content:center">
                    <h6 class="alert alert-info" style="width: 30%;">{{ session('success') }}</h6>
                </div>
            @endif

            @error('Nombre')
                <div style="display: flex; justify-content:center">
                    <h6 class="alert alert-danger" style="width: 30%;">{{ $message }}</h6>
                </div>    
            @enderror

            <div class="mb-3 d-flex justify-content-around">
                <div style="width:40%">
                    <label for="Nombre" class="form-label">Nombre</label>
                    <div class="d-flex">
                        <input type="text" name="Nombre" class="form-control" required minlength="4">   
                        <span style="width:10%"><img class="m-1" style="width:100%"src="{{ url('/images/edificio-del-hotel.png') }}" alt=""></span>
                    </div>
                </div>
                <div style="width:40%">
                    <label for="NIT" class="form-label">NIT</label>
                    <div class="d-flex">
                        <input type="number" name="NIT" class="form-control" min="1" max="999999999" required>   
                        <span style="width:10%"><img class="m-1" style="width:100%"src="{{ url('/images/botones-del-hotel.png') }}" alt=""></span>
                    </div>
                </div>
            </div>
            <div class="mb-3 d-flex justify-content-around">
                <div style="width:40%">
                    <label for="Ciudad" class="form-label">Ciudad</label>
                    <div class="d-flex">
                        <input type="text" name="Ciudad" class="form-control" required> 
                        <span style="width:10%"><img class="m-1" style="width:100%"src="{{ url('/images/geolocalizar.png') }}" alt=""></span>
                    </div>  
                </div>
                <div style="width:40%">
                    <label for="Dirección" class="form-label">Dirección</label>
                    <div class="d-flex">
                        <input type="text" name="Dirección" class="form-control" required> 
                        <span style="width:10%"><img class="m-1" style="width:100%"src="{{ url('/images/atlas-libro.png') }}" alt=""></span>
                    </div>
                </div>  
            </div>

            <div class="mb-3 d-flex justify-content-around">
                <div style="width: 40%;">
                    <label for="Habitaciones" class="form-label">Número de habitaciones</label>
                    <div class="d-flex">
                        <input type="number" name="Habitaciones" class="form-control" min="1" max="100" required>  
                        <span style="width:10%"><img class="m-1" style="width:100%"src="{{ url('/images/campana-del-hotel.png') }}" alt=""></span>
                    </div>   
                </div>
                <div style="width: 40%; display:flex; justify-content:center; align-items:end;">
                    <button type="submit" class="btn btn-primary">Registrar hotel</button>
                </div>
            </div>


            
        </form>


        <!--<div>-->
            {{--@foreach ( $todos as $todo )--}}
                <!--<div class="row py-1">
                    <div class="col-md-9 d-flex aling-items-center">
                        <a href="{{-- route('todos-edit', ['id'=> $todo->id]) --}}"> {{-- $todo->title --}}</a>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end">
                        <form action="{{-- route('todos-destroy', [$todo->id]) --}}" method="post">
                            {{--@method('DELETE')
                            @csrf--}}
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </div>
                </div>-->

                
            {{--@endforeach--}}
        <!--</div>-->
    </div>
@endsection