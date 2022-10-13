<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use App\Models\drspecialitie;
use session;
use Alert;
class service_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=service::where("doctor_id","=",Session('doctor_id'))->get();
        $data1=drspecialitie::where("doctor_id","=",Session('doctor_id'))->get();
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
        $data=$request->validate([
            'service'=>'required',
            
        ]);
        $data=new service;
        $data->title=$request->service;
        $data->doctor_id=session('doctor_id');
        $data->save();
        Alert::success('Done', 'You\'ve Successfully Add Service');
		return redirect('/doctor-service-specialization');
    }

    public function addspecialitie(Request $request)
    {
        $data=$request->validate([
            'specialization'=>'required',
            
        ]);
        $data=new drspecialitie;
        $data->title=$request->specialization;
        $data->doctor_id=session('doctor_id');
        $data->save();
        Alert::success('Done', 'You\'ve Successfully Add Specialization');
		return redirect('/doctor-service-specialization');
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
    public function servicedelete($id)
    {
        $data=service::find($id);
        $data->delete();
        Alert::success('Done', 'You\'ve Successfully Delete Service');
        return redirect('/doctor-service-specialization');

    }

    public function specialdelete($id)
    {
        $data=drspecialitie::find($id);
        $data->delete();
        Alert::success('Done', 'You\'ve Successfully Delete Specialization');
        return redirect('/doctor-service-specialization');

    }
}
