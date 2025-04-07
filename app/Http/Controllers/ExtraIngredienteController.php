<?php

namespace App\Http\Controllers;

use App\Models\ExtraIngredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExtraIngredienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $extraIngredients = ExtraIngredient::paginate(10);
        return view('extra_ingredient.index',['extraIngredients'=>$extraIngredients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $extraIngredients = DB::table('extra_ingredients')
            ->orderBy('name')
            ->get();
        return view('extra_ingredient.new', ['extraIngredients' => $extraIngredients]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $extraIngredient = new ExtraIngredient();
        $extraIngredient->name = $request->name;
        $extraIngredient->id = $request->id;
        $extraIngredient->price = $request->price;
        $extraIngredient->save();

        $extraIngredients = ExtraIngredient::select('extra_ingredients.*')-> paginate(10);
           // ->select('pizzas.*')
           // ->get();
        return view('extra_ingredient.index',['extraIngredients' => $extraIngredients]);
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
