<?php

namespace App\Http\Controllers;

use App\Models\PizzaSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PizzaSizeControlller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pizzaSizes = DB::table('pizza_size')
            ->join('pizzas','pizza_size.pizza_size_id', '=', 'pizzas.id')
            ->select('pizza_size.*', 'pizzas.name')
            ->paginate(10);
        return view('pizza_size.index',['pizzaSizes'=>$pizzaSizes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $pizzas = DB::table('pizzas')
            ->orderBy('name')
            ->get();
        return view('pizza_size.new', ['pizzas' => $pizzas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $pizzaSize = new PizzaSize();
        $pizzaSize->id = $request->id;
        $pizzaSize->size = $request->size;
        $pizzaSize->price = $request->price;
        $pizzaSize->pizza_id = $request->code;
        $pizzaSize->save();

        $pizzaSizes = DB::table('pizza_size')
            ->join('pizzas','pizza_size.pizza_size_id', '=', 'pizzas.id')
            ->select('pizza_size.*', 'pizzas.name')
            ->paginate(10);
        return view('pizza_size.index',['pizzaSizes'=>$pizzaSizes]);
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
        $pizzaSize = PizzaSize::find($id);

        $pizzas = DB::table('pizzas')
            ->orderBy('id')
            ->get();
        return view('pizza_size.edit',['pizzaSize'=>$pizzaSize, 'pizzas'=>$pizzas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pizzaSize = PizzaSize::find($id);
        $pizzaSize->size = $request->size;
        $pizzaSize->price = $request->price;
        $pizzaSize->size = $request->size;
        $pizzaSize->pizza_id = $request->code;
        $pizzaSize->save();

        $pizzaSizes = DB::table('pizza_size')
            ->join('pizzas','pizza_size.pizza_size_id', '=', 'pizzas.id')
            ->select('pizza_size.*', 'pizzas.name')
            ->paginate(10);
        return view('pizza_size.index',['pizzaSizes'=>$pizzaSizes]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pizzaSize = PizzaSize::find($id);
        $pizzaSize->delete();

        $pizzaSizes = DB::table('pizza_size')
            ->join('pizzas','pizza_size.pizza_size_id', '=', 'pizzas.id')
            ->select('pizza_size.*', 'pizzas.name')
            ->paginate(10);
        return view('pizza_size.index',['pizzaSizes'=>$pizzaSizes]);
    }
}
