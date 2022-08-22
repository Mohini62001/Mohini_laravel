<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient_slots;
use App\Models\doctor;
use Hash;
use session;

class patient_slots_controller extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $morningmonday=patient_slots::where('day','=','Monday')->where('time','=','Morning')->where('doc_id','=',session('doctor_id'))->get();
        return view('doctor.patient-schedule-timings');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            
        $time=$request->time;
        $day=$request->day;
        $no_slots=$request->no_slots;
        $min=$request->min;
        $start_time=$request->start_time;
        date_default_timezone_set('asia/calcutta');
        $i=0;
        while($i<$no_slots)
        {   
            $data=new patient_slots;
            $data->time=$time;    
            $data->doc_id=Session('doctor_id');
            $data->day=$day;
            $data->slot_timing=date('H:i',strtotime($min,strtotime($start_time)));
            $start_time=date('H:i',strtotime($min,strtotime($start_time)));
            $data->save();
            $i++;

        }
        return redirect('doctor-patient-schedule-timings')->with('success','Schedule add success');
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
