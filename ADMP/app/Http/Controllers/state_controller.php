<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\state;
use App\Models\citie;
use App\Models\area;

class state_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $state=state::all();
        $city=citie::all();
        $area=area::all();
        return view('admin.location',["state_arr"=>$state,"city_arr"=>$city,"area_arr"=>$area]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


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
 
    ///state
    public function addstate(Request $request)
    {
        $data=new state;
        $data->name=$request->name;

        $data->save();
        return redirect('/admin-location')->with('success','State Add Success');
    }

    ////city
    public function addcity(Request $request)
    {
        $data=new citie;
        $data->sid=$request->sid;
        $data->city_name=$request->city_name;

        $data->save();
        return redirect('/admin-location')->with('succes','City Add Success');
    }

    ////area
    public function addarea(Request $request)
    {
        $data=new area;
        $data->city_id=$request->city_id;
        $data->area_name=$request->area_name;

        $data->save();
        return redirect('/admin-location')->with('succe','City Add Success');
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
