<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngredientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $ingredients = Ingredient::paginate(10);
        return view('ingredient.index',['ingredients'=>$ingredients]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          //
          $ingredients = DB::table('ingredients')
          ->orderBy('name')
          ->get();
      return view('ingredient.new', ['ingredients' => $ingredients]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $ingredient = new Ingredient();
        $ingredient->name = $request->name;
        $ingredient->id = $request->id;
        $ingredient->save();

        $ingredients = Ingredient::select('ingredients.*')-> paginate(10);
           // ->select('pizzas.*')
           // ->get();
           return view('ingredient.index',['ingredients'=>$ingredients]);
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
        $ingredient = Ingredient::find($id);

        $ingredients = DB::table('ingredients')
            ->orderBy('id')
            ->get();
        return view('ingredient.edit',['ingredient'=>$ingredient]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $ingredient = Ingredient::find($id);
        $ingredient->name = $request->name;
        $ingredient->save();

        $ingredients = Ingredient::select('ingredients.*')-> paginate(10);
        //$pizzas = DB::table('pizzas')
        //    ->get();
        return view('ingredient.index',['ingredients' => $ingredients]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $ingredient = Ingredient::find($id);
        $ingredient->delete();

        $ingredients = Ingredient::select('ingredients.*')-> paginate(10);
           // ->select('pizzas.*')
           // ->get();
        return view('ingredient.index',['ingredients' => $ingredients]);
    }
}
