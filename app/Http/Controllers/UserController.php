<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::paginate(10);
        return view('user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users = DB::table('user')
            ->orderBy('name')
            ->get();
        return view('user.new', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->id = $request->id;
        $user->save();

        $users = User::select('user.*')-> paginate(10);
           // ->select('pizzas.*')
           // ->get();
        return view('user.index',['users' => $users]);
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
        $user = User::find($id);

        $users = DB::table('user')
            ->orderBy('id')
            ->get();
        return view('user.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();

        $users = User::select('user.*')-> paginate(10);
        //$pizzas = DB::table('pizzas')
        //    ->get();
        return view('user.index',['users' => $users]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::find($id);
        $user->delete();

        $users = User::select('user.*')-> paginate(10);
           // ->select('pizzas.*')
           // ->get();
        return view('user.index',['users' => $users]);
    }
}
