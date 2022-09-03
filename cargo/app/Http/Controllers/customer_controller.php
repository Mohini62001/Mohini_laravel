<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Hash;

class customer_controller extends Controller
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
        return view('Frontend.Layout.header');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new customer;
        $data->username=$request->username;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);

        $res=$data->save();
        //return redirect('/customerlogin');
    }

    public function customercreate()
    {
        return view('Frontend.Layout.header');
    }

    public function customerlogin(Request $request)
    {
        $data=customer::where("email","=",$request->email)->first();
        if($data)
        {
            if(Hash::check($request->password,$data->password))
            {
                $status=$data->status;
                if($status=="Unblock")
                {
                    $request->Session()->put('customer_id',$data->id);
                    $request->Session()->put('email',$data->email);
                    return redirect('/index');
                }
                else
                {
                    return redirect('/customerlogin');
                }
            }
            else
            {
                return redirect('/customerlogin');
            }
        }
        else
        {
            return redirect('/customerlogin');
        }
       
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
