<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Employee::all();
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data =  $request->validate([
        //     'first_name' => 'required|min:2|max:10',
        //     'color' => 'required|min:3|max:10',
        // ]);

        return Employee::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'address' => $request->address,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Employee::findOrFail($id);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        return Employee::find($id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'age' => $request->age,
            'address' => $request->address,
            'email' => $request->email
        ]);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Employee::find($id)->delete();
        //
    }
}
