<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\companie;
use App\Models\visitor_slots;
use App\Models\company_appointment;
use App\Models\manager_appointment;
use App\Models\appointments;
use App\Models\mr_appointment;
use App\Models\doc_fav_patient;
use App\Models\company_fav_doc;
use App\Models\manager;
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
    public function all_company_appointment()
    {
        $data=company_appointment::join('companies','companies.id','=','company_appointments.company_id')
        ->join('visitor_slots','visitor_slots.id','=','company_appointments.slot_id')
        ->join('doctors','doctors.id','=','company_appointments.doctor_id')
        ->get(['doctors.first_name','doctors.last_name','companies.company_name','visitor_slots.start_time','visitor_slots.end_time','visitor_slots.day','company_appointments.*']);
       return view('admin.company-appointment',["all_companyappointment_arr"=>$data]);
    }

    public function index()
    {
        $data=company_appointment::join('doctors','doctors.id','=','company_appointments.doctor_id')
        ->join('visitor_slots','visitor_slots.id','=','company_appointments.slot_id')
        ->where('company_appointments.company_id','=',Session('company_id'))
        ->get(['doctors.*','visitor_slots.start_time','visitor_slots.end_time','company_appointments.*']);
       return view('company.myappointment',["myappointment_arr"=>$data]);
    }

    public function appview()
    {
        $data1=company_fav_doc::where('company_id','=',Session('company_id'))->get();
        if(!empty($data1))
        {
            $total_company_fav_doc=count($data1);
        }
        else
        {
            $total_company_fav_doc="0";
        }     

        $data2=manager::where('company_id','=',Session('company_id'))->get();
        if(!empty($data2))
        {
            $total_manager=count($data2);
        }
        else
        {
            $total_manager="0";
        }   

        $today=date('Y-m-d');
        $data=company_appointment::join('doctors','doctors.id','=','company_appointments.doctor_id')
        ->join('visitor_slots','visitor_slots.id','=','company_appointments.slot_id')
        ->where('companyappdate','=',$today)
        ->where('company_appointments.company_id','=',Session('company_id'))
        ->get(['doctors.*','visitor_slots.start_time','visitor_slots.day','visitor_slots.end_time','company_appointments.*']);
       return view('company.index',["comp_todayappointment_arr"=>$data,'total_company_fav_doc'=>$total_company_fav_doc,'total_manager'=>$total_manager]);
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
        
        $companyappointments=company_appointment::where('doctor_id','=',Session('doctor_id'))->get();
        if(!empty($companyappointments))
        {
            $total_company_appointment=count($companyappointments);
        }
        else
        {
            $total_company_appointment="0";
        }  
        $managerappointments=manager_appointment::where('doctor_id','=',Session('doctor_id'))->get();
        if(!empty($managerappointments))
        {
            $total_manager_appointment=count($managerappointments);
        }
        else
        {
            $total_manager_appointment="0";
        } 
        $mrappointments=mr_appointment::where('doctor_id','=',Session('doctor_id'))->get();
        if(!empty($mrappointments))
        {
            $total_mr_appointment=count($mrappointments);
        }
        else
        {
            $total_mr_appointment="0";
        } 
        $data=company_appointment::join('companies','companies.id','=','company_appointments.company_id')
        ->join('visitor_slots','visitor_slots.id','=','company_appointments.slot_id')
        ->where('doctor_id','=',Session('doctor_id'))
        ->get(['companies.company_name','visitor_slots.start_time','visitor_slots.end_time','company_appointments.*']);

        $data1=manager_appointment::join('managers','managers.id','=','manager_appointments.manager_id')
        ->join('visitor_slots','visitor_slots.id','=','manager_appointments.slot_id')
        ->where('doctor_id','=',Session('doctor_id'))
        ->get(['managers.Manager_name','visitor_slots.start_time','visitor_slots.end_time','manager_appointments.*']);

        $data2=mr_appointment::join('mrs','mrs.id','=','mr_appointments.mr_id')
        ->join('visitor_slots','visitor_slots.id','=','mr_appointments.slot_id')
        ->where('doctor_id','=',Session('doctor_id'))
        ->get(['mrs.first_name','mrs.last_name','visitor_slots.start_time','visitor_slots.end_time','mr_appointments.*']);

       return view('doctor.company-dashboard',["companyapp_arr"=>$data,"managerapp_arr"=>$data1,"mrapp_arr"=>$data2,
       "total_company_appointment"=>$total_company_appointment,
       "total_manager_appointment"=>$total_manager_appointment,"total_mr_appointment"=>$total_mr_appointment]);
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
        $data->companyappdate=$request->companyappdate; 
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
       $data=company_appointment::findorFail($id);
        try
        {
            $data->delete();
            Alert::success('Done', 'You\'ve Successfully Delete Appointment');
            return back();
        }
        catch(\Exception $ex)
        {
            Alert::error('Fail', 'Something went wrong or Some Data alreday added in other data');
            return back();
        }
    }

    public function appointment_destroy($id)
    { 
       $data=company_appointment::findorFail($id);
        try
        {
            $data->delete();
            Alert::success('Done', 'You\'ve Successfully Delete Appointment ');
            return back();
        }
        catch(\Exception $ex)
        {
            Alert::error('Fail', 'Something went wrong or Some Data alreday added in other data');
            return back();
        }
    }
}
