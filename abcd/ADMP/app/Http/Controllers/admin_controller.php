<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\doctor;
use App\Models\patient;
use App\Models\companie;
use App\Models\appointments;
use App\Models\manager;
use App\Models\mr;
use Hash;
use Session;
use Alert;
use Exception;

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
        //
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

    public function myaccount()
	{
		$data=admin::where("id","=",session('admin_id'))->first();
		return view('admin.profile',["fetch"=>$data]);
	}


    public function editadmin()
    {
        $data=admin::where("id","=",session('admin_id'))->first();
        return view('admin.profile',["fetch"=>$data]);
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
        $data=admin::find($id);
        $old_img=$data->img;
        $data->name=$request->name;
       

        // img upload
		if($request->hasFile('img'))
		{
			$file=$request->file('img');  // get file
			$file_name=time() . "_img." . $request->file('img')->getClientOriginalExtension();// make file name
			$file->move('upload/admin',$file_name); //file name move upload in public		
			$data->img=$file_name; // file name store in db
            //unlink('upload/admin/'.$old_img);
			
		}

        $data->save();
        Alert::success('Congrats', 'You\'ve Successfully Update You\'re Profile');
		return redirect('/admin-profile');
    }
    
    public function login(Request $request)
    {
        return view('Admin.login');
    }
//
    public function profile()
	{  
		$data=admin::where("id","=",session('admin_id'))->first();
		return view('admin.profile',["fetch"=>$data]);
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
                    $request->Session()->put('name',$data->name);
                    $request->Session()->put('img',$data->img);
                    Alert::success('Congrats', 'You\'ve Successfully Login');
                   return redirect('/admin');
               
           }
           else
           {
            Alert::error('Fail', 'Login Failed due to Wrong email');
            return redirect('/admin-login');//->with('fail','Login Failed due to Wrong Password');
           }
       }
       else
       {
        Alert::error('Fail', 'Login Failed due to Wrong email');
        return redirect('/admin-login');//->with('fail','Login Failed due to Wrong email');
       }
    }

///////////////change password
public function adminchangepassword(Request $request)
{
    $data=$request->validate([
        'oldpassword' => 'required',
        'newpassword' => 'required|string|min:6',
        'confirm_password' => 'required|same:newpassword|min:6',
    
    ]);
    $data=admin::where("id","=",Session('admin_id'))->first();
    if(Hash::check($request->oldpassword, $data->password))
       {
        $data->password=Hash::make($request->newpassword);
        $data->dpass=$request->newpassword;
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

public function adminchangecreate()
{
    return view('admin.settings');
}

    public function logout()
    {
        Session()->pull('admin_id');
        Session()->pull('email');
        Session()->pull('name');
        Session()->pull('img');
        return redirect('/admin-login');
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

    public function dashboard()
    {
        $data=patient::all();
        $data1=doctor::all();
        $data2=companie::all();
        $data3=manager::all();
        $data4=appointments::all();
        $data5=mr::all();
        $total_patient=count($data);
        $total_doctor=count($data1);
        $total_company=count($data2);
        $total_manager=count($data3);
        $total_appointment=count($data4);
        $total_mr=count($data5);
        return view('admin.index',['total_patient'=>$total_patient,'total_doctor'=>$total_doctor,'total_company'=>$total_company,
        'total_manager'=>$total_manager,'total_appointment'=>$total_appointment,'total_mr'=>$total_mr]);
    }
}
