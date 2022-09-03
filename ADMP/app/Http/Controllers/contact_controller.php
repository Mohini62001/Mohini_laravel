<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contact_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact=contact::all();
        return view('admin.contact',["contact"=>$contact]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'mobileno'=>'required|numeric|digits:10',
            'comment'=>'required',
        ]);
        $data=new contact;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->mobileno=$request->mobileno;
        $data->comment=$request->comment;

        $res=$data->save();

        return redirect('contact')->with('success','Contact Sent Success');
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
        $data=contact::find($id);
        $data->delete();
        return redirect('admin-contact')->with('success','Deleted successfully');
    }
}
