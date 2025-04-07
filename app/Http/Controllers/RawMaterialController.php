<?php

namespace App\Http\Controllers;

use App\Models\RawMaterial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RawMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rawMaterials = RawMaterial::paginate(10);
        return view('raw_material.index',['rawMaterials'=>$rawMaterials]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rawMaterials = DB::table('raw_materials')
            ->orderBy('name')
            ->get();
        return view('raw_material.new', ['rawMaterials' => $rawMaterials]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rawMaterial = new RawMaterial();
        $rawMaterial->name = $request->name;
        $rawMaterial->unit = $request->unit;
        $rawMaterial->current_stock = $request->stock;
        $rawMaterial->save();

        $rawMaterials = RawMaterial::select('raw_materials.*')-> paginate(10);
           // ->select('pizzas.*')
           // ->get();
        return view('raw_material.index',['rawMaterials' => $rawMaterials]);
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
        $rawMaterial = RawMaterial::find($id);

        $rawMaterials = DB::table('raw_materials')
            ->orderBy('id')
            ->get();
        return view('raw_material.edit',['rawMaterial'=>$rawMaterial]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $rawMaterial = RawMaterial::find($id);
        $rawMaterial->name = $request->name;
        $rawMaterial->unit = $request->unit;
        $rawMaterial->current_stock = $request->stock;
        $rawMaterial->save();

        $rawMaterials = RawMaterial::select('raw_materials.*')-> paginate(10);
        //$pizzas = DB::table('pizzas')
        //    ->get();
        return view('raw_material.index',['rawMaterials' => $rawMaterials]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $rawMaterial = RawMaterial::find($id);
        $rawMaterial->delete();

        $rawMaterials = RawMaterial::select('raw_materials.*')-> paginate(10);
           // ->select('pizzas.*')
           // ->get();
        return view('raw_material.index',['rawMaterials' => $rawMaterials]);
    }
}
