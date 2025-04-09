<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $orders = DB::table('orders')
            ->join('clients', 'orders.client_id','=', 'clients.id')
            ->join('user','clients.user_id','=', 'user.id')
            ->join('branches', 'orders.branch_id','=', 'branches.id')
            ->join('employees', 'orders.delivery_person_id','=', 'employees.id')
            ->join('user as u2','employees.user_id', '=','u2.id')
            ->select('orders.*', 'user.name as name_client', 'branches.name as name_branch', 'branches.address as branch_address',
            'u2.name as name_employee')
            ->paginate(10);
        return view('order.index', ['orders'=>$orders]);

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
