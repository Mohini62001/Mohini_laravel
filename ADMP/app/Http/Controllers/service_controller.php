<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use App\Models\drspecialitie;
use session;
class service_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=service::all();
        $data1=drspecialitie::all();
        return view('doctor.add-service-specialization',["service_arr"=>$data],["special_arr"=>$data1]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('doctor.add-service-specialization');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addservice(Request $request)
    {
        $data=new service;
        $data->title=$request->title;
        $data->doctor_id=session('doctor_id');
        $data->save();
		return redirect('/doctor-service-specialization')->with('success','Update Success');
    }

    public function addspecialitie(Request $request)
    {
        $data=new drspecialitie;
        $data->title=$request->title;
        $data->doctor_id=session('doctor_id');
        $data->save();
		return redirect('/doctor-service-specialization')->with('success','Update Success');
        
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
        //
    }
}
