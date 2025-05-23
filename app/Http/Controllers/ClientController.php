<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        /*$clients = Client::paginate(10);
        return view('client.index',['clients'=>$clients]);
        */
        $clients = DB::table('clients')
            ->join('user','clients.user_id', '=', 'user.id')
            ->select('clients.*', 'user.name', 'user.email', 'user.role')
            ->paginate(10);
        return view('client.index',['clients'=>$clients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users = DB::table('user')
            ->where('user.role','cliente')
            ->orderBy('name')
            ->get();
        return view('client.new', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $client = new Client();
        $client->id = $request->id;
        $client->addres = $request->addres;
        $client->phone = $request->phone;
        $client->user_id = $request->code;
        $client->save();

        $clients = DB::table('clients')
            ->join('user','clients.user_id', '=', 'user.id')
            ->select('clients.*', 'user.name', 'user.email', 'user.role')
            ->paginate(10);
        return view('client.index',['clients'=>$clients]);
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
        $client = Client::find($id);

        $users = DB::table('user')
            ->orderBy('id')
            ->get();
        return view('client.edit',['client'=>$client, 'users'=>$users]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $client = Client::find($id);
        $client->addres = $request->addres;
        $client->phone = $request->phone;
        $client->user_id = $request->code;
        $client->save();

        $clients = DB::table('clients')
            ->join('user','clients.user_id', '=', 'user.id')
            ->select('clients.*', 'user.name', 'user.email', 'user.role')
            ->paginate(10);
        return view('client.index',['clients'=>$clients]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $client = Client::find($id);
        $client->delete();

        $clients = DB::table('clients')
            ->join('user','clients.user_id', '=', 'user.id')
            ->select('clients.*', 'user.name', 'user.email', 'user.role')
            ->paginate(10);
        return view('client.index',['clients'=>$clients]);
    }
}
