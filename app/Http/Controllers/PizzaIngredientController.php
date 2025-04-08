<?php

namespace App\Http\Controllers;

use App\Models\PizzaIngredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PizzaIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pizzaIngredients = DB::table('pizza_ingredients')
            ->join('pizzas','pizza_ingredients.pizza_id', '=', 'pizzas.id')
            ->join('ingredients', 'pizza_ingredients.ingredient_id','=', 'ingredients.id')
            ->select('pizza_ingredients.*', 'pizzas.name as pizza_name', 'ingredients.name as ingredient_name')
            ->paginate(10);
        return view('pizza_ingredient.index',['pizzaIngredients'=>$pizzaIngredients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
