<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Hash;
use Session;

class admin_controller extends Controller
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
        return view('Backend.Admin.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new admin;
		$data->Username=$request->username;
        $data->Password=Hash::make($request->password);
		
		$res=$data->save();
		return redirect('/login')->with("success","Registration Success");
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

    public function login(Request $request)
    {
        return view('Backend.Admin.login');
    }

    public function userlogin(Request $request)
    {
       $data=admin::where("username","=",$request->username)->first();
       if($data)
       {
           if(Hash::check($request->password, $data->password))
           {
               $status=$data->status;
               if($status=="Unblock")
               {
                   $request->Session()->put('admin_id',$data->id);
                   $request->Session()->put('username',$data->username);
                   return redirect('/admin');
               }
               else
               {
                return redirect('/login')->with('fail','Login Failed due to Blocked User');
               }
           }
           else
           {
            return redirect('/login')->with('fail','Login Failed due to Wrong Password');
           }
       }
       else
       {
        return redirect('/login')->with('fail','Login Failed due to Wrong user');
       }
    }

    public function logout()
    {
        Session()->pull('admin_id');
        Session()->pull('username');
        return redirect('/login');
    }
}
