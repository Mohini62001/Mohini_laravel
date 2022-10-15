<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Hash;
use Alert;

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
        return view('Admin.register');
    }

    public function login()
    {
        return view('Admin.login');
      
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'password'=>'required',
            'email'=>'required',
        ]);
        $data=new admin;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);

        $res=$data->save();
        return redirect('/login');
    }

    public function adminlogin(Request $request)
    {
        $data=$request->validate([
            
            'email'=>'required|email',
            'password'=>'required',
        ]);
       $data=admin::where("email","=",$request->email)->first();
       if($data)
       {
           if(Hash::check($request->password, $data->password))
           {
                    $request->Session()->put('admin_id',$data->id);
                    $request->Session()->put('email',$data->email);
                    Alert::success('Congrats', 'You\'ve Successfully Login');
                    return redirect('/home');
               
           }
           else
           {
            Alert::error('Fail', 'Login Failed due to Wrong email');
            return redirect('/login');
           }
       }
       else
       {
        Alert::error('Fail', 'Login Failed due to Wrong email');
        return redirect('/login');
       }
    }

    public function changepasswordcreate()
    {
        return view('Admin.change_password');
      
    }

    public function changepassword(Request $request)
    {
        $data=$request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',
        
        ]);
       $data=admin::where("id","=",Session('admin_id'))->first();
       
        if(Hash::check($request->oldpassword, $data->password))
           {
            $data->password=Hash::make($request->newpassword);
            $data->update();
            Alert::success('Done', 'You\'re Password Change Success');
            return back();
           }
           else
           {
            Alert::error('fail', 'Please Enter Correct Old Password');
            return back();
           }
    }

    public function logout()
    {
        Session()->pull('admin_id');
        Session()->pull('email');
       
        return redirect('/login');
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
