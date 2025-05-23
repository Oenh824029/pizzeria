<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $branches = Branch::paginate(10);
        return view('branch.index',['branches'=>$branches]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $branches = DB::table('branches')
            ->orderBy('name')
            ->get();
        return view('branch.new', ['branches' => $branches]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $branch = new Branch();
        $branch->name = $request->name;
        $branch->address = $request->address;
        $branch->id = $request->id;
        $branch->save();

        $branches = Branch::select('branches.*')-> paginate(10);
           // ->select('pizzas.*')
           // ->get();
        return view('branch.index',['branches' => $branches]);
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
        $branch = Branch::find($id);

        $branches = DB::table('branches')
            ->orderBy('id')
            ->get();
        return view('branch.edit',['branch'=>$branch]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $branch = Branch::find($id);
        $branch->name = $request->name;
        $branch->address = $request->address;
        $branch->save();

        $branches = Branch::select('branches.*')-> paginate(10);
        //$pizzas = DB::table('pizzas')
        //    ->get();
        return view('branch.index',['branches' => $branches]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $branch = Branch::find($id);
        $branch->delete();

        $branches = Branch::select('branches.*')-> paginate(10);
           // ->select('pizzas.*')
           // ->get();
        return view('branch.index',['branches' => $branches]);
    }
}
