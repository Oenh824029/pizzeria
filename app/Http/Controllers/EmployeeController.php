<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $employees = DB::table('employees')
            ->join('user','employees.user_id', '=', 'user.id')
            ->select('employees.*', 'user.name', 'user.email', 'user.role')
            ->paginate(10);
        return view('employee.index',['employees'=>$employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users = DB::table('user')
            ->where('user.role','empleado')
            ->orderBy('name')
            ->get();
        return view('employee.new', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $employee = new Employee();
        $employee->id = $request->id;
        $employee->position = $request->position;
        $employee->identification = $request->identification;
        $employee->salary = $request->salary;
        $employee->hire_date = $request->hire;
        $employee->user_id = $request->code;
        $employee->save();

        $employees = DB::table('employees')
            ->join('user','employees.user_id', '=', 'user.id')
            ->select('employees.*', 'user.name', 'user.email', 'user.role')
            ->paginate(10);
        return view('employee.index',['employees'=>$employees]);
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
        $employee = Employee::find($id);
        
        $users = DB::table('user')
            ->orderBy('id')
            ->get();
        return view('employee.edit',['employee'=>$employee, 'users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $employee = Employee::find($id);
        $employee->position = $request->position;
        $employee->identification = $request->identification;
        $employee->salary = $request->salary;
        $employee->hire_date = $request->hire;
        $employee->user_id = $request->code;
        $employee->save();

        $employees = DB::table('employees')
            ->join('user','employees.user_id', '=', 'user.id')
            ->select('employees.*', 'user.name', 'user.email', 'user.role')
            ->paginate(10);
        return view('employee.index',['employees'=>$employees]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $employee = Employee::find($id);
        $employee->delete();

        $employees = DB::table('employees')
            ->join('user','employees.user_id', '=', 'user.id')
            ->select('employees.*', 'user.name', 'user.email', 'user.role')
            ->paginate(10);
        return view('employee.index',['employees'=>$employees]);
    }
}
