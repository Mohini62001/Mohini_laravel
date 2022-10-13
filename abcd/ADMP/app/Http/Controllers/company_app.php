<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\companie;
use App\Models\visitor_slots;
use App\Models\company_appointment;
use Hash;
use session;
use Alert;
use Exception;


class company_app extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=company_appointment::join('doctors','doctors.id','=','company_appointments.doctor_id')
        ->join('visitor_slots','visitor_slots.id','=','company_appointments.slot_id')
        ->get(['doctors.first_name','doctors.last_name','visitor_slots.start_time','visitor_slots.end_time','company_appointments.*']);
       return view('company.myappointment',["myappointment_arr"=>$data]);
    }

    public function company_appointment()
    {
        $data=company_appointment::join('companies','companies.id','=','company_appointments.company_id')
        ->join('visitor_slots','visitor_slots.id','=','company_appointments.slot_id')
        ->where('doctor_id','=',Session('doctor_id'))
        ->get(['companies.company_name','visitor_slots.start_time','visitor_slots.end_time','company_appointments.*']);
       return view('doctor.company-appointments',["companyappointment_arr"=>$data]);
    }

    public function companydashboard_appointment()
    {
        $data=company_appointment::join('companies','companies.id','=','company_appointments.company_id')
        ->join('visitor_slots','visitor_slots.id','=','company_appointments.slot_id')
        ->where('doctor_id','=',Session('doctor_id'))
        ->get(['companies.company_name','visitor_slots.start_time','visitor_slots.end_time','company_appointments.*']);
       return view('doctor.company-dashboard',["companyapp_arr"=>$data]);
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
    public function company_app_book(Request $request)
    {
        $data=new company_appointment;
        $data->slot_id=$request->slot_id;
        $data->company_id=Session('company_id');
        $data->doctor_id=$request->doctor_id; 
        $data->save();
        Alert::success('Done', 'You\'ve Successfully Add Appointment');
        return back();
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
       $data=company_appointment::find($id);
       $data->delete();
        Alert::success('Done', 'You\'ve Successfully Delete Appointment');
        return back();
    }

    public function appointment_destroy($id)
    { 
       $data=company_appointment::find($id);
       $data->delete();
        Alert::success('Done', 'You\'ve Successfully Delete Appointment');
        return back();
    }
}
