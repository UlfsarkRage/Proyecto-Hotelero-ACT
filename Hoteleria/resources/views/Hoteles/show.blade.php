@extends('app') {{-- Indicar el nombre de la pag donde se va a agregar--}}

@section('content') {{-- Indicar el nombre del @ yield que se indico en la pagina donde se va a agregar este código--}}
    <div class="container w-25 border p-4 mt-4">

        <form action="{{ route('Rooms') }}" method="POST">
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



            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre del hotel</label>
                <input type="text" name="Nombre" class="form-control" value="{{ $Hotel->Nombre }}" readonly>
                <label for="Habitaciones" class="form-label">Número de habitaciones</label>
                <input type="number"id="max_habitaciones" name="Habitaciones" class="form-control" value="{{ $Hotel->N_Habitaciones }}" readonly>
               
            </div>
            
            <div>
                <div id="datos_habitaciones">
                    <div style="display:flex; justify-content:space-around;">
                        <div style="width: 40%; margin:3% 1%;">
                            <label for="tipo_habitación">Tipo Habitación</label>
                        
                            <select name="tipo_habitación" id="tipo_habitación" class="tipo_habitación form-control">
                                <option value="Estándar">Estándar</option>
                                <option value="Junior">Junior</option>
                                <option value="Suite">Suite</option>
                            </select>
                        </div>
                        
                        <div style="width: 40%; margin:3% 1%;">
                            <label for="acomodación">Acomodación</label>
                        
                            <select name="acomodación" id="acomodación" class="acomodación form-control">
                                <option value="Sencilla">Sencilla</option>
                                <option value="Doble">Doble</option>
                            </select>
                        </div>
                    </div>
                    <div style="display:flex; justify-content:space-around;">
                        <div style="width: 40%; margin:3% 1%;">
                            <label for="cantidad">Número de habitaciones</label>
                        
                            <input onchange="checkHabitaciones()" class="cantidad_int form-control" type="number" name="Habitaciones_2">
                        </div>
                        <div style="width: 40%; margin:3% 1%; display:flex; align-self:end; justify-content:end;">
                            <label for=""></label>
                            <button type="button" class="btn btn-warning" onclick="crearLinea()" style="height: 50%;"> + </button>
                        </div>
                    </div>
                </div>
                
            </div>

            <div style="display: flex; justify-content:space-around; margin:5% 1%;">
               
                <div>
                    <button type="submit" class="btn btn-primary">Registrar habitaciones</button>
                </div>
            </div>
        </form>
        <script>

                function crearLinea() { // Función que crea un div con todos los formatos para registrar los tipos de habitaciones
                    var capa = document.getElementById("datos_habitaciones"); // Se obtiene el div donde van todos los divs las líneas
                    var div = document.createElement("div"); // Se crea un div para la nueva linea
                    div.classList.add("borrable") // Añade la clase borrable al div creado
                    div.innerHTML = `
                    <div>
                        <div id="datos_habitaciones">
                            <div style="display:flex; justify-content:space-around;">
                                <div style="width: 40%; margin:3% 1%;">
                                    <label for="tipo_habitación">Tipo Habitación</label>
                                
                                    <select name="tipo_habitación" id="tipo_habitación" class="tipo_habitación form-control">
                                        <option value="Estándar">Estándar</option>
                                        <option value="Junior">Junior</option>
                                        <option value="Suite">Suite</option>
                                    </select>
                                </div>
                                
                                <div style="width: 40%; margin:3% 1%;">
                                    <label for="acomodación">Acomodación</label>
                                
                                    <select name="acomodación" id="acomodación" class="acomodación form-control">
                                        <option value="Sencilla">Sencilla</option>
                                        <option value="Doble">Doble</option>
                                    </select>
                                </div>
                            </div>
                            <div style="display:flex; justify-content:space-around;">
                                <div style="width: 40%; margin:3% 1%;">
                                    <label for="cantidad">Número de habitaciones</label>
                                
                                    <input onchange="checkHabitaciones()" class="cantidad_int form-control" type="number">
                                </div>
                                <div style="width: 40%; margin:3% 1%; display:flex; align-self:end; justify-content:end;">
                                    <label for=""></label>
                                    <button type="button" class="btn btn-warning" onclick="crearLinea()" style="height: 50%;"> + </button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    `; // Se rellena el div de la linea con el html que contiene los formatos
                    capa.appendChild(div); // Se ingresa el div de la linea actual al final del div que contiene todas las lineas

                    // Add event listener to the new select element
                    addEventListenerToSelect(div); // Se añade un listener al div creado
                }

                function addEventListenerToSelect(div) { // Función que recibe el div de una linea como argumento y añade un listener
                    const tipoHabitacionSelect = div.querySelector(".tipo_habitación"); // Obtiene todos selects con tipo_habitación
                    const acomodacionSelect = div.querySelector(".acomodación"); // Obtiene todos selects con acomodación

                    tipoHabitacionSelect.addEventListener("change", () => { // Listener que cambia los valores disponibles del select acomodación dependiendo del valor del select tipo_habitación
                        if (tipoHabitacionSelect.value === "Estándar") { // Sí el valor del select tipo_habitación es Estándar, las opciones disponibles son Sencilla, Doble.
                            acomodacionSelect.innerHTML = `
                        <option value="Sencilla">Sencilla</option>
                        <option value="Doble">Doble</option>
                        `;
                        } else if (tipoHabitacionSelect.value === "Junior") { // Sí el valor del select tipo_habitación es Estándar, las opciones disponibles son Triple, Cuádruple.
                            acomodacionSelect.innerHTML = `
                        <option value="Triple">Triple</option>
                        <option value="Cuádruple">Cuádruple</option>
                        `;
                        } else if (tipoHabitacionSelect.value === "Suite") { // Sí el valor del select tipo_habitación es Estándar, las opciones disponibles son Sencilla, Doble, Triple.
                            acomodacionSelect.innerHTML = `
                        <option value="Sencilla">Sencilla</option>
                        <option value="Doble">Doble</option>
                        <option value="Triple">Triple</option>
                        `;
                        } else { // Sí el valor del select tipo_habitación no es ninguno de los anteriores, las opciones disponibles son todas.
                            acomodacionSelect.innerHTML = `
                        <option value="Sencilla">Sencilla</option>
                        <option value="Doble">Doble</option>
                        <option value="Triple">Triple</option>
                        <option value="Cuádruple">Cuádruple</option>
                        `;
                        }
                    });
                }
                addEventListenerToSelect(document); // Agrega un listener de eventos al elemento select existente

                function checkHabitaciones() { // Revisa que la suma de todas las cantidades de habitaciones no sobrepase a la indicada como número de habitaciones del hotel
                    var cantidadElems = document.getElementsByClassName("cantidad_int"); // Obtiene todas las cantidades de habitaciones por linea
                    var totalCantidad = 0; // Variable para sumar la cantidad de habitaciones
                    for (var i = 0; i < cantidadElems.length; i++) { // Recorre la cantidad de inputs donde se indican la cantidad de habitaciones
                        totalCantidad += parseInt(cantidadElems[i].value); // Obtiene el valor de esos inputs y los suma a la variable para sumar la cantidad de habitaciones
                    }
                    var maxHabitaciones = parseInt(document.getElementById("max_habitaciones").value); // Define una variable que obtiene el máximo de habitaciones del hotel a traves del valor del input que lo muestra en pantala.
                    if (totalCantidad > maxHabitaciones) { // Sí el número es mayor a la cantidad máxima de habitaciones
                        alert("La cantidad de habitaciones indicadas supera la capacidad máxima."); // Muestra un alert

                        var container = document.getElementById("datos_habitaciones"); // Obtiene el div que contiene los divs de lineas 
                        let borrables = Array.prototype.slice.call(document.getElementsByClassName("borrable"), 0); // Obtiene todos los divs que tienen la clase borrable

                        for(element of borrables){ // Itera sobre todos los divs borrables
                            element.remove(); // Los borra
                        } 

                        for (var j = 0; j < cantidadElems.length; j++) { // Todos los inputs que indican la cantidad de habitaciones vuelven a ""
                            cantidadElems[j].value = ""; // Cambia el valor del elemento a ""
                        }
                    }
                }

        </script>

        
        
    </div>
@endsection