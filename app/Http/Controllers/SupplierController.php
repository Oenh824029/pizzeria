<?php

namespace App\Http\Controllers;

use App\Models\Suppliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $suppliers = Suppliers::paginate(10);
        return view('supplier.index',['suppliers'=>$suppliers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $suppliers = DB::table('suppliers')
            ->orderBy('name')
            ->get();
        return view('supplier.new', ['suppliers' => $suppliers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $supplier = new Suppliers();
        $supplier->name = $request->name;
        $supplier->contact_info = $request->contact;
        $supplier->id = $request->id;
        $supplier->save();

        $suppliers = Suppliers::select('suppliers.*')-> paginate(10);
           // ->select('pizzas.*')
           // ->get();
        return view('supplier.index',['suppliers' => $suppliers]);
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
