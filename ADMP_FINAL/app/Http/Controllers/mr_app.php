<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\companie;
use App\Models\visitor_slots;
use App\Models\mr_appointment;
use App\Models\mr_fav_doc;
use Hash;
use session;
use Alert;
use Exception;

class mr_app extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return -\Illuminate\Http\Response
     */
    /////////////////////////////////////////////////////////admin panel//////////////////////////////////////////////////////
    public function all_mr_appointment()
    {
        $data=mr_appointment::join('mrs','mrs.id','=','mr_appointments.mr_id')
        ->join('doctors','doctors.id','=','mr_appointments.doctor_id')
        ->join('visitor_slots','visitor_slots.id','=','mr_appointments.slot_id')
        ->get(['doctors.first_name as dfirst_name','doctors.last_name as dlast_name','mrs.first_name','mrs.last_name','visitor_slots.start_time','visitor_slots.end_time','visitor_slots.day','mr_appointments.*']);
       return view('admin.mr-appointment',["all_mrappointment_arr"=>$data]);
    }
    //////////////////////////////////////////////////////company panel////////////////////////////////////////////
    public function all_companymr_appointment()
    {
        $data=mr_appointment::join('mrs','mrs.id','=','mr_appointments.mr_id')
        ->join('doctors','doctors.id','=','mr_appointments.doctor_id')
        ->join('visitor_slots','visitor_slots.id','=','mr_appointments.slot_id')
        ->where('mrs.company_id','=',Session('company_id'))
        ->get(['doctors.first_name as dfirst_name','doctors.last_name as dlast_name','mrs.first_name','mrs.last_name','visitor_slots.start_time','visitor_slots.end_time','visitor_slots.day','mr_appointments.*']);
       return view('company.mr-appointment',["all_companymrapp_arr"=>$data]);
    }

     //////////////////////////////////////////////////////manager panel////////////////////////////////////////////
     public function all_managermr_appointment()
     {
         $data=mr_appointment::join('mrs','mrs.id','=','mr_appointments.mr_id')
         ->join('doctors','doctors.id','=','mr_appointments.doctor_id')
         ->join('visitor_slots','visitor_slots.id','=','mr_appointments.slot_id')
         ->where('mrs.manager_id','=',Session('manager_id'))
         ->get(['doctors.first_name as dfirst_name','doctors.last_name as dlast_name','mrs.first_name','mrs.last_name','visitor_slots.start_time','visitor_slots.end_time','visitor_slots.day','mr_appointments.*']);
        return view('manager.mr-appointment',["all_managermrapp_arr"=>$data]);
     }
    ////////////////////////////////////////////////////////mr panel/////////////////////////////////////////////////////////
    public function index()
    {
        $data1=mr_fav_doc::where('mr_id','=',Session('mr_id'))->get();
        if(!empty($data1))
        {
            $total_mr_fav_doc=count($data1);
        }
        else
        {
            $total_mr_fav_doc="0";
        } 

        $data2=mr_appointment::where('mr_id','=',Session('mr_id'))->get();
        if(!empty($data1))
        {
            $total_mr_appointment=count($data2);
        }
        else
        {
            $total_mr_appointment="0";
        }
        $today=date('Y-m-d');
        $data=mr_appointment::join('doctors','doctors.id','=','mr_appointments.doctor_id')
        ->join('visitor_slots','visitor_slots.id','=','mr_appointments.slot_id')
        ->where('mrappdate','=',$today)
        ->where('mr_appointments.mr_id','=',Session('mr_id'))
        ->get(['doctors.first_name','doctors.last_name','doctors.profile_img','visitor_slots.start_time','visitor_slots.end_time','visitor_slots.created_at','mr_appointments.*']);
       return view('mr.index',["mrappointment_arr"=>$data,'total_mr_fav_doc'=>$total_mr_fav_doc,'total_mr_appointment'=>$total_mr_appointment]);
    }

    public function mr_all_appointment()
    {
        $data=mr_appointment::join('doctors','doctors.id','=','mr_appointments.doctor_id')
        ->join('visitor_slots','visitor_slots.id','=','mr_appointments.slot_id')
        ->where('mr_appointments.mr_id','=',Session('mr_id'))
        ->get(['doctors.first_name','doctors.last_name','doctors.profile_img','visitor_slots.start_time','visitor_slots.end_time','visitor_slots.created_at','mr_appointments.*']);
       return view('mr.myappointment',["mrallappointment_arr"=>$data]);
    }

    public function mr_appointment()
    {
        $data=mr_appointment::join('mrs','mrs.id','=','mr_appointments.mr_id')
        ->join('visitor_slots','visitor_slots.id','=','mr_appointments.slot_id')
        ->where('doctor_id','=',Session('doctor_id'))
        ->get(['mrs.first_name','mrs.last_name','visitor_slots.start_time','visitor_slots.end_time','mr_appointments.*']);
       return view('doctor.mr-appointments',["mr_appointment_arr"=>$data]);
    }

    public function mrdashboard_appointment()
    {
        
        $data=mr_appointment::join('mrs','mrs.id','=','mr_appointments.mr_id')
        ->join('visitor_slots','visitor_slots.id','=','mr_appointments.slot_id')
        ->where('doctor_id','=',Session('doctor_id'))
        ->get(['mrs.Manager_name','visitor_slots.start_time','visitor_slots.end_time','mr_appointments.*']);
       return view('mr.mr-dashboard',["companyapp_arr"=>$data]);
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
    public function mr_app_book(Request $request)
    {
        
        $data=new mr_appointment;
        $data->slot_id=$request->slot_id;
        $data->mr_id=Session('mr_id');
        $data->doctor_id=$request->doctor_id; 
        $data->mrappdate=$request->mrappdate; 
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
    public function mr_app_destroy($id)
    { 
        $data=mr_appointment::findorFail($id);
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

    public function mr_appointment_destroy($id)
    { 
       $data=mr_appointment::findorFail($id);
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
