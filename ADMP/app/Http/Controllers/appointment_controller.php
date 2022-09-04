<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointments;
use App\Models\doctor;
use App\Models\patient;
use hash;
use session;

class appointment_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=appointments::join('patients','patients.id','=','appointments.patient_id')->where('doc_id','=',Session('doctor_id'))->get();
        return view('doctor.doctor-dashboard',["appointments_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.book_appointment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new appointments;
        $data->date=$request->date;
        $data->comment=$request->comment;
        $data->time=$request->time;

        $data=doctor::where("id","=",$doc_id)->get();
       // $doctordata=doctor::find($id);
        //$doc_id=$doctordata->id;
        //$doctor_id_arr=doctor::where('doctor_id','=',$doctor_id)->get();
        $data->patient_id=Session('patient_id');
        $res=$data->save();
       // $doctor_id
       // $data->doc_id=
       return redirect('patient.book_by_otp')->with('success','appointment add suceess');
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
