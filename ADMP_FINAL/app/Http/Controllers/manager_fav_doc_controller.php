<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\manager_fav_doc;
use App\Models\visitor_slots;
use Hash;
use Session;
use Alert;
use Exception;

class manager_fav_doc_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function managerfavdoctor()  
    {
        $data=manager_fav_doc::join('doctors','doctors.id','=','manager_fav_docs.doctor_id')
        ->where('manager_fav_docs.manager_id','=',Session('manager_id'))->where('visitor_status','=','Available')
        ->get(['doctors.first_name','doctors.last_name','doctors.profile_img','manager_fav_docs.doctor_id']);
        
        $slot_manager_arr=visitor_slots::all();
        return view('manager.fav-doctor',["managerfavdoctor_arr"=>$data,"slot_manager_arr"=>$slot_manager_arr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manager_fav_doc($id)
    {
        $data=new manager_fav_doc;
        $data->manager_id=Session('manager_id');
        $data->doctor_id=$id; 
        $res=$data->save();
        Alert::success('Done', 'You\'ve Successfully Add to Favourite Doctor');
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
    public function manager_fav_doc_del($id)
    {
        $data=manager_fav_doc::where('doctor_id','=',$id)->where('manager_id','=',Session('manager_id'))->delete();
        return back();
    }
}
