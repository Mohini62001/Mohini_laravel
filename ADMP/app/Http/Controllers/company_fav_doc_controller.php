<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company_fav_doc;
use Hash;
use session;

class company_fav_doc_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function companyfavdoctor()  
    {
        $data=company_fav_doc::join('doctors','doctors.id','=','company_fav_docs.doctor_id')->join('specialists','specialists.id','=','doctors.specialist_id')->get();
        return view('company.fav-doctor',["companyfavdoctor_arr"=>$data]);
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
    public function company_fav_doc($id)
    {
        $data=new company_fav_doc;
        $data->company_id=Session('company_id');
        $data->doctor_id=$id; 
        $res=$data->save();
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
        //
    }
}
