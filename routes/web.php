<?php


use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// rutas de la vista pizza

Route::get('/pizzas',[PizzaController::class, 'index']);