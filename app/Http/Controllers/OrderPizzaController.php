<?php

namespace App\Http\Controllers;

use App\Models\OrderPizza;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderPizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $orderPizzas = DB::table('order_pizza')
            ->join('orders', 'order_pizza.order_id','=','orders.id')
            ->join('pizza_size','order_pizza.pizza_size_id','=','pizza_size.id')
            ->select('order_pizza.*','orders.id as order_id','pizza_size.size')
            ->paginate(10);
        return view('order_pizza.index',['orderPizzas'=>$orderPizzas]);    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $orders = DB::table('orders')
            ->orderBy('id')
            ->get();
        
        $pizzaSizes = DB::table('pizza_size')
            ->orderBy('id')
            ->get();
        return view('order_pizza.new',['orders'=>$orders,'pizzaSizes'=>$pizzaSizes ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $orderPizza = new OrderPizza();
        $orderPizza->id = $request->id;
        $orderPizza->order_id = $request->codeOrden;
        $orderPizza->pizza_size_id = $request->codePizzaSize;
        $orderPizza->quantity = $request->quantity;
        $orderPizza->save();

        $orderPizzas = DB::table('order_pizza')
            ->join('orders', 'order_pizza.order_id','=','orders.id')
            ->join('pizza_size','order_pizza.pizza_size_id','=','pizza_size.id')
            ->select('order_pizza.*','orders.id as order_id','pizza_size.size')
            ->paginate(10);
        return view('order_pizza.index',['orderPizzas'=>$orderPizzas]); 
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
