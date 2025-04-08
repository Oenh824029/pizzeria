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
            //->join('user','clients.user_id', '=', 'user.id')
            //->select('clients.*', 'user.name', 'user.email', 'user.role')
            ->paginate(10);
        return view('pizza_size.index',['pizzaSizes'=>$pizzaSizes]);
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
