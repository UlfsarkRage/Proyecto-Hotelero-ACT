<?php

use App\Http\Controllers\TodosController;
use App\Http\Controllers\HotelsController;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Hoteles/Hotels');
});

/*Route::get('/todos', function () {
    return view('app');
});

Route::get('/todos', function () {
    return view('todos.hotels');
});*/




Route::get('/Hoteles', [HotelsController::class,'hotels'])->name('Hotels');
Route::get('/Hoteles/hotels_view', [HotelsController::class,'Ver_hotels'])->name('Ver_Hotels');



Route::post('/Hoteles', [HotelsController::class,'store'])->name('Hotels');


Route::get('/Hoteles/Rooms', [HotelsController::class,'index'])->name('Rooms');
Route::post('/Hoteles/Rooms', [HotelsController::class,'store2'])->name('Rooms');



Route::get('/Hoteles/{id}', [HotelsController::class,'show'])->name('Hoteles-edit');
Route::patch('/Hoteles{id}', [HotelsController::class,'update'])->name('Hoteles-update');
Route::delete('/Hoteles{id}', [HotelsController::class,'destroy'])->name('Hoteles-destroy');




Route::get('/images/{filename}', function ($filename){
    $path = storage_path('app/public/images/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

