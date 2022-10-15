<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\companie;
use App\Models\visitor_slots;
use App\Models\manager_appointment;
use App\Models\manager_fav_doc;
use App\Models\mr;
use Hash;
use session;
use Alert;
use Exception;

class manager_app extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//////////////////////////////admin panel//////////////////////////////////////////////////////////////
    public function all_manager_appointment()
    {
        $data=manager_appointment::join('managers','managers.id','=','manager_appointments.manager_id')
        ->join('doctors','doctors.id','=','manager_appointments.doctor_id')
        ->join('visitor_slots','visitor_slots.id','=','manager_appointments.slot_id')
        ->get(['doctors.first_name','doctors.last_name','managers.Manager_name','doctors.profile_img','visitor_slots.start_time','visitor_slots.end_time','visitor_slots.day','manager_appointments.*']);
       return view('admin.manager-appointment',["all_managerappointment_arr"=>$data]);
    }
    ////////////////////////////////////////company panel////////////////////////////////////////////////////////
    public function all_companymanager_appointment()
    {
        $data=manager_appointment::join('managers','managers.id','=','manager_appointments.manager_id')
        ->join('doctors','doctors.id','=','manager_appointments.doctor_id')
        ->join('visitor_slots','visitor_slots.id','=','manager_appointments.slot_id')
        ->where('managers.company_id','=',Session('company_id'))
        ->get(['doctors.first_name','doctors.last_name','managers.Manager_name','doctors.profile_img','visitor_slots.start_time','visitor_slots.end_time','visitor_slots.day','manager_appointments.*']);
       return view('company.manager-appointment',["all_managerapp_arr"=>$data]);
    }
    ///////////////////////////////////////////////////////manager panel//////////////////////////////////////////////
    public function index()
    {
        $data1=manager_fav_doc::where('manager_id','=',Session('manager_id'))->get();
        if(!empty($data1))
        {
            $total_manager_fav_doc=count($data1);
        }
        else
        {
            $total_manager_fav_doc="0";
        } 

        $data3=mr::where('manager_id','=',Session('manager_id'))->get();
        if(!empty($data1))
        {
            $total_my_mr=count($data3);
        }
        else
        {
            $total_my_mr="0";
        } 

        $data2=manager_appointment::where('manager_id','=',Session('manager_id'))->get();
        if(!empty($data1))
        {
            $total_manager_appointment=count($data2);
        }
        else
        {
            $total_manager_appointment="0";
        }
        $today=date('Y-m-d');
        $data=manager_appointment::join('doctors','doctors.id','=','manager_appointments.doctor_id')
        ->join('visitor_slots','visitor_slots.id','=','manager_appointments.slot_id')
        ->where('managerappdate','=',$today)
        ->where('manager_appointments.manager_id','=',Session('manager_id'))
        ->get(['doctors.first_name','doctors.last_name','doctors.profile_img','visitor_slots.start_time','visitor_slots.end_time','visitor_slots.created_at','manager_appointments.*']);
       return view('manager.index',["myappointment_arr"=>$data,'total_manager_fav_doc'=>$total_manager_fav_doc,
       'total_manager_appointment'=>$total_manager_appointment,'total_my_mr'=>$total_my_mr]);
    }

    public function manager_all_appointment()
    {
        $data=manager_appointment::join('doctors','doctors.id','=','manager_appointments.doctor_id')
        ->join('visitor_slots','visitor_slots.id','=','manager_appointments.slot_id')
        ->where('manager_appointments.manager_id','=',Session('manager_id'))
        ->get(['doctors.first_name','doctors.last_name','doctors.profile_img','visitor_slots.start_time','visitor_slots.end_time','visitor_slots.created_at','manager_appointments.*']);
       return view('manager.myappointment',["managerappointment_arr"=>$data]);
    }

    public function manager_appointment()
    {
        $data=manager_appointment::join('managers','managers.id','=','manager_appointments.manager_id')
        ->join('visitor_slots','visitor_slots.id','=','manager_appointments.slot_id')
        ->where('doctor_id','=',Session('doctor_id'))
        ->get(['managers.Manager_name','visitor_slots.start_time','visitor_slots.end_time','manager_appointments.*']);
       return view('doctor.manager-appointments',["managerappointment_arr"=>$data]);
    }

    public function managerdashboard_appointment()
    {
        $data=manager_appointment::join('managers','managers.id','=','manager_appointments.company_id')
        ->join('visitor_slots','visitor_slots.id','=','manager_appointments.slot_id')
        ->where('doctor_id','=',Session('doctor_id'))
        ->get(['managers.Manager_name','visitor_slots.start_time','visitor_slots.end_time','manager_appointments.*']);
       return view('manager.manager-dashboard',["companyapp_arr"=>$data]);
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
    public function manager_app_book(Request $request)
    {
        $data=new manager_appointment;
        $data->slot_id=$request->slot_id;
        $data->manager_id=Session('manager_id');
        $data->doctor_id=$request->doctor_id; 
        $data->managerappdate=$request->managerappdate; 
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
    public function manager_app_destroy($id)
    { 
      $data=manager_appointment::findorFail($id);
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
       $data=manager_appointment::findorFail($id);
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
}
