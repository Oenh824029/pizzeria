<?php


use App\Http\Controllers\PizzaController;
use App\Http\Controllers\IngredientsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// rutas de la vista pizza

Route::get('/pizzas',[PizzaController::class, 'index'])->name('pizzas.index');
Route::post('/pizzas',[PizzaController::class,'store'])->name('pizzas.store');
Route::get('/pizzas/create',[PizzaController::class, 'create'])->name('pizzas.create');
Route::delete('/pizzas/{pizza}',[PizzaController::class, 'destroy'])->name('pizzas.destroy');
Route::put('/pizzas/{pizza}',[PizzaController::class, 'update'])->name('pizzas.update');
Route::get('/pizzas/{pizza}/edit',[PizzaController::class, 'edit'])->name('pizzas.edit');

// rutas de la vista ingredientes
Route::get('/ingredients',[IngredientsController::class, 'index'])->name('ingredients.index');