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
        $clients = DB::table('user')
            ->where('user.role','cliente')
            ->orderBy('id')
            ->get();

        $branches = DB::table('branches')
            ->orderBy('id')
            ->get();

        $deliveryPersons = DB::table('user')
            ->where('user.role','empleado')
            ->orderBy('id')
            ->get();

        return view('order.new',['clients'=>$clients, 
        'branches'=>$branches,
        'deliveryPersons'=>$deliveryPersons]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $order = new Order();
        $order->id = $request->id;
        $order->client_id = $request-> codeClient;
        $order->branch_id = $request-> codeBranch;
        $order->total_price = $request ->price;
        $order->status = $request->status;
        $order->delivery_type = $request->delivery_type;
        $order->delivery_person_id = $request->codeDelivery;
        $order->save();

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
        $order = Order::find($id);

        $clients = DB::table('user')
            ->where('user.role','cliente')
            ->orderBy('id')
            ->get();

        $branches = DB::table('branches')
            ->orderBy('id')
            ->get();

        $deliveryPersons = DB::table('user')
            ->where('user.role','empleado')
            ->orderBy('id')
            ->get();
        
        return view('order.edit',['order'=>$order,'clients'=>$clients, 
            'branches'=>$branches,
            'deliveryPersons'=>$deliveryPersons]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $order = Order::find($id);
        $order->client_id = $request-> codeClient;
        $order->branch_id = $request-> codeBranch;
        $order->total_price = $request ->price;
        $order->status = $request->status;
        $order->delivery_type = $request->delivery_type;
        $order->delivery_person_id = $request->codeDelivery;
        $order->save();

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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $order = Order::find($id);
        $order->delete();

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
}
