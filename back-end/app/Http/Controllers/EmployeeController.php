<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee =  Employee::all();
       return view('Employee.show',compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $employee=Employee::all();
        return view('Employee.create',compact('employee'));
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee=new Employee();
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->password=$request->password;
        $employee->nat_id=$request->nat_id;
        $employee->image=$request->image;
        $employee->address=$request->address;
        $employee->phone_num=$request->phone_num;
        $employee->save();
         return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee=Employee::findorfail($id);
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $employee=Employee::findorfail($id);
        $employee->name=$request->name;
        $employee->email=$request->email;
        $employee->password=$request->password;
        $employee->nat_id=$request->nat_id;
        $employee->image=$request->image;
        $employee->address=$request->address;
        $employee->phone_num=$request->phone_num;
        $employee->save();
        return redirect()->route('employee.index'); 
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $employee=Employee::findorfail($id)->delete();
        return redirect()->route('employee.index');
    }
}
