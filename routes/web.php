<?php

use App\Http\Controllers\PizzaController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\ExtraIngredienteController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\RawMaterialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PizzaSizeControlller;
use App\Http\Controllers\PizzaIngredientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderPizzaController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // rutas de la vista pizza

Route::get('/pizzas',[PizzaController::class, 'index'])->name('pizzas.index');
Route::post('/pizzas',[PizzaController::class,'store'])->name('pizzas.store');
Route::get('/pizzas/create',[PizzaController::class, 'create'])->name('pizzas.create');
Route::delete('/pizzas/{pizza}',[PizzaController::class, 'destroy'])->name('pizzas.destroy');
Route::put('/pizzas/{pizza}',[PizzaController::class, 'update'])->name('pizzas.update');
Route::get('/pizzas/{pizza}/edit',[PizzaController::class, 'edit'])->name('pizzas.edit');

// rutas de la vista ingredientes
Route::get('/ingredients',[IngredientsController::class, 'index'])->name('ingredients.index');
Route::post('/ingredients',[IngredientsController::class,'store'])->name('ingredients.store');
Route::get('/ingredients/create',[IngredientsController::class, 'create'])->name('ingredients.create');
Route::delete('/ingredients/{ingredient}',[IngredientsController::class, 'destroy'])->name('ingredients.destroy');
Route::put('/ingredients/{ingredient}',[IngredientsController::class, 'update'])->name('ingredients.update');
Route::get('/ingredients/{ingredient}/edit',[IngredientsController::class, 'edit'])->name('ingredients.edit');

// rutas de extra ingredientes
Route::get('/extra_ingredients',[ExtraIngredienteController::class, 'index'])->name('extra_ingredients.index');
Route::post('/extra_ingredients',[ExtraIngredienteController::class,'store'])->name('extra_ingredients.store');
Route::get('/extra_ingredients/create',[ExtraIngredienteController::class, 'create'])->name('extra_ingredients.create');
Route::delete('/extra_ingredients/{extraIngredient}',[ExtraIngredienteController::class, 'destroy'])->name('extra_ingredients.destroy');
Route::put('/extra_ingredients/{extraIngredient}',[ExtraIngredienteController::class, 'update'])->name('extra_ingredients.update');
Route::get('/extra_ingredients/{extraIngredient}/edit',[ExtraIngredienteController::class, 'edit'])->name('extra_ingredients.edit');

// rutas de branches o sucursales
Route::get('/branches',[BranchController::class, 'index'])->name('branches.index');
Route::post('/branches',[BranchController::class,'store'])->name('branches.store');
Route::get('/branches/create',[BranchController::class, 'create'])->name('branches.create');
Route::delete('/branches/{branch}',[BranchController::class, 'destroy'])->name('branches.destroy');
Route::put('/branches/{branch}',[BranchController::class, 'update'])->name('branches.update');
Route::get('/branches/{branch}/edit',[BranchController::class, 'edit'])->name('branches.edit');

// rutas de proveedores
Route::get('/suppliers',[SupplierController::class, 'index'])->name('suppliers.index');
Route::post('/suppliers',[SupplierController::class,'store'])->name('suppliers.store');
Route::get('/suppliers/create',[SupplierController::class, 'create'])->name('suppliers.create');
Route::delete('/suppliers/{supplier}',[SupplierController::class, 'destroy'])->name('suppliers.destroy');
Route::put('/suppliers/{supplier}',[SupplierController::class, 'update'])->name('suppliers.update');
Route::get('/suppliers/{supplier}/edit',[SupplierController::class, 'edit'])->name('suppliers.edit');

// rutas de materias primas
Route::get('/raw_materials',[RawMaterialController::class, 'index'])->name('raw_materials.index');
Route::post('/raw_materials',[RawMaterialController::class,'store'])->name('raw_materials.store');
Route::get('/raw_materials/create',[RawMaterialController::class, 'create'])->name('raw_materials.create');
Route::delete('/raw_materials/{rawMaterial}',[RawMaterialController::class, 'destroy'])->name('raw_materials.destroy');
Route::put('/raw_materials/{rawMaterial}',[RawMaterialController::class, 'update'])->name('raw_materials.update');
Route::get('/raw_materials/{rawMaterial}/edit',[RawMaterialController::class, 'edit'])->name('raw_materials.edit');

// ruta de usuarios
Route::get('/users',[UserController::class, 'index'])->name('users.index');
Route::post('/users',[UserController::class,'store'])->name('users.store');
Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
Route::delete('/users/{user}',[UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{user}',[UserController::class, 'update'])->name('users.update');
Route::get('/users/{user}/edit',[UserController::class, 'edit'])->name('users.edit');

// rutas de clientes
Route::get('/clients',[ClientController::class, 'index'])->name('clients.index');
Route::post('/clients',[ClientController::class,'store'])->name('clients.store');
Route::get('/clients/create',[ClientController::class, 'create'])->name('clients.create');
Route::delete('/clients/{client}',[ClientController::class, 'destroy'])->name('clients.destroy');
Route::put('/clients/{client}',[ClientController::class, 'update'])->name('clients.update');
Route::get('/clients/{client}/edit',[ClientController::class, 'edit'])->name('clients.edit');

// rutas de empleados 
Route::get('/employees',[EmployeeController::class, 'index'])->name('employees.index');
Route::post('/employees',[EmployeeController::class,'store'])->name('employees.store');
Route::get('/employees/create',[EmployeeController::class, 'create'])->name('employees.create');
Route::delete('/employees/{employee}',[EmployeeController::class, 'destroy'])->name('employees.destroy');
Route::put('/employees/{employee}',[EmployeeController::class, 'update'])->name('employees.update');
Route::get('/employees/{employee}/edit',[EmployeeController::class, 'edit'])->name('employees.edit');

// rutas de pizza size
Route::get('/pizza_sizes',[PizzaSizeControlller::class, 'index'])->name('pizza_sizes.index');
Route::post('/pizza_sizes',[PizzaSizeControlller::class,'store'])->name('pizza_sizes.store');
Route::get('/pizza_sizes/create',[PizzaSizeControlller::class, 'create'])->name('pizza_sizes.create');
Route::delete('/pizza_sizes/{pizzaSize}',[PizzaSizeControlller::class, 'destroy'])->name('pizza_sizes.destroy');
Route::put('/pizza_sizes/{pizzaSize}',[PizzaSizeControlller::class, 'update'])->name('pizza_sizes.update');
Route::get('/pizza_sizes/{pizzaSize}/edit',[PizzaSizeControlller::class, 'edit'])->name('pizza_sizes.edit');

// rutas de pizza ingredients
Route::get('/pizza_ingredients',[PizzaIngredientController::class, 'index'])->name('pizza_ingredients.index');
Route::post('/pizza_ingredients',[PizzaIngredientController::class,'store'])->name('pizza_ingredients.store');
Route::get('/pizza_ingredients/create',[PizzaIngredientController::class, 'create'])->name('pizza_ingredients.create');
Route::delete('/pizza_ingredients/{pizzaIngredient}',[PizzaIngredientController::class, 'destroy'])->name('pizza_ingredients.destroy');
Route::put('/pizza_ingredients/{pizzaIngredient}',[PizzaIngredientController::class, 'update'])->name('pizza_ingredients.update');
Route::get('/pizza_ingredients/{pizzaIngredient}/edit',[PizzaIngredientController::class, 'edit'])->name('pizza_ingredients.edit');

// rutas de ordenes
Route::get('/orders',[OrderController::class, 'index'])->name('orders.index');
Route::post('/orders',[OrderController::class,'store'])->name('orders.store');
Route::get('/orders/create',[OrderController::class, 'create'])->name('orders.create');
Route::delete('/orders/{order}',[OrderController::class, 'destroy'])->name('orders.destroy');
Route::put('/orders/{order}',[OrderController::class, 'update'])->name('orders.update');
Route::get('/orders/{order}/edit',[OrderController::class, 'edit'])->name('orders.edit');

// rutas de las ordenes de las pizzas
Route::get('/order_pizzas',[OrderPizzaController::class, 'index'])->name('order_pizzas.index');
Route::post('/order_pizzas',[OrderPizzaController::class,'store'])->name('order_pizzas.store');
Route::get('/order_pizzas/create',[OrderPizzaController::class, 'create'])->name('order_pizzas.create');
});

require __DIR__.'/auth.php';
