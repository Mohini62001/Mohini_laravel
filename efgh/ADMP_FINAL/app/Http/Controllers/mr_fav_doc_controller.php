<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mr_fav_doc;
use App\Models\visitor_slots;
use Hash;
use session;
use Alert;
use Exception;

class mr_fav_doc_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mrfavdoctor()  
    {
        $data=mr_fav_doc::join('doctors','doctors.id','=','mr_fav_docs.doctor_id')
        ->where('mr_fav_docs.mr_id','=',Session('mr_id'))->where('visitor_status','=','Available')
        ->get(['doctors.first_name','doctors.last_name','doctors.profile_img','mr_fav_docs.doctor_id']);
        
        $slot_mr_arr=visitor_slots::all();
        return view('mr.fav-doctor',["mrfavdoctor_arr"=>$data,"slot_mr_arr"=>$slot_mr_arr]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mr_fav_doc($id)
    {
        $data=new mr_fav_doc;
        $data->mr_id=Session('mr_id');
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
    public function mr_fav_doc_del($id)
    {
        $data=mr_fav_doc::where('doctor_id','=',$id)->where('mr_id','=',Session('mr_id'))->delete();
        return back();
    }
}
