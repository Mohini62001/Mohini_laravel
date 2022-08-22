<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stockiest;
use App\Models\state;
use App\Models\citie;
use App\Models\area;
use session;

class stockiest_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=stockiest::all();
        return view('admin.stockiest',["stockiest_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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

    //////////////////////////////////////company panel//////////////////////////
    public function companystockiestindex()
    {
        $data=stockiest::all();
        return view('company.stockiest',["stockiest_arr"=>$data]);
    }

    public function companystockiescreate()
    {
        $state_id_arr=state::all();
        $city_id_arr=citie::all();
        $area_id_arr=area::all();
        return view('company.add-stockiest',["state_id_arr"=>$state_id_arr,"city_id_arr"=>$city_id_arr,"area_id_arr"=>$area_id_arr]);
    }

    public function companystockieststore(Request $request)
    {
        $data=new stockiest;
        $data->company_id=Session('company_id');
        $data->name=$request->name;
        $data->state=$request->state;
        $data->city=$request->city;
        $data->area=$request->area;
        $data->address=$request->address;
        $data->pincode=$request->pincode;

        $res=$data->save();
        return redirect('company-add-stockiest')->with('success','Stockiest Add Success');

    }

    ///////////////////////////////////////////manager panel////////////////////////////////////////

    public function managerstockiestindex()
    {
        $data=stockiest::all();
        return view('manager.stockiest',["stockiest_arr"=>$data]);
    }

    public function managerstockiescreate()
    {
        $state_id_arr=state::all();
        $city_id_arr=citie::all();
        $area_id_arr=area::all();
        return view('manager.add-stockiest',["state_id_arr"=>$state_id_arr,"city_id_arr"=>$city_id_arr,"area_id_arr"=>$area_id_arr]);
    }

    public function managerstockieststore(Request $request)
    {
       $data=new stockiest;
       $data->manager_id=Session('manager_id ');
       $data->name=$request->name;
       $data->state=$request->state;
       $data->city=$request->city;
       $data->area=$request->area;
       $data->address=$request->address;
       $data->pincode=$request->pincode;

       $res=$data->save();
       return redirect('manager-add-stockiest')->with('success','Stockiest Add Success');

    }
}
