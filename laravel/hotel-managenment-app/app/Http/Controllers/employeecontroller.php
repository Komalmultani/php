<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\employee;
use Illuminate\Support\Facades\Hash;

class employeecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('employee');
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
        //validations rules
        $request->validate([
            "username"=>"required",
            "name"=>"required",
            "mobile"=>"required",
            "gender"=>"required",
            "address"=>"required",
            "password"=>"required",
        ]);
        //elequent ORM builder
        $data=array(
            "username"=>$request->username,
            "name"=>$request->name,
            "mobile"=>$request->mobile,
            "gender"=>$request->gender,
            "address"=>$request->address,
            "password"=>Hash::make($request->password)
        );
        //ORM elequent query builder
        employee::create($data);
        return redirect('/add-employee')->with('success','Employee added successfully');



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //ORM query  for show all data
        $data=employee::all();
        return view('/manageemployee',["data"=>$data]);
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
    }
}
