<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doc_fav_patient;
use App\Models\appointments;
use session;
use Alert;
use Exception;

class doc_fav_patients_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function mypatient()  
    {
        $data=doc_fav_patient::join('patients','patients.id','=','doc_fav_patients.patient_id')->where('doctor_id','=',Session('doctor_id'))->get();
        return view('doctor.my-patients',["mypatient"=>$data]);
    }


    public function patientview($id)
    {
        $data=doc_fav_patient::join('patients','patients.id','=','doc_fav_patients.patient_id')->where('patients.id','=',$id)->first();
        $patient_id=$id;
        $patient_appointment_arr=appointments::where('appointments.patient_id','=',$id);
        return view('doctor.patient-profile',["fetch"=>$data,"patient_appointment_arr"=>$patient_appointment_arr]);
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
        //
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
