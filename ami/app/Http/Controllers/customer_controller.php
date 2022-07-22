<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Hash;
use Session;

class customer_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=customer::all();
		return view('Backend.Admin.managecustomer',["customer_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Frontend.fregister');
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
		$data->Username=$request->username;
		$data->Name=$request->name;
		$data->Email=$request->email;
		$data->MobileNo=$request->mobileno;
		$data->Address=$request->address;
        $data->Password=Hash::make($request->password);
		
		$res=$data->save();
		return redirect('/flogin')->with("success","Registration Success");
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
        $data=customer::find($id);
		return view('Frontend.editprofile',["fetch"=>$data]);
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
        $data=customer::find($id);
		$old_img=$data->img;
		
		$data->name=$request->name;
		$data->email=$request->email;
		$data->address=$request->address;
		$data->mobileno=$request->mobileno;
		
		// img upload
		if($request->hasFile('img'))
		{
			$file=$request->file('img');  // get file
			$file_name=time() . "_img." . $request->file('img')->getClientOriginalExtension();// make file name
			$file->move('upload/customer',$file_name); //file name move upload in public		
			$data->img=$file_name; // file name store in db
			
		}

		$data->save();
		return redirect('/myaccount')->with('success','Update Success');
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

    public function flogin(Request $request)
    {
        return view('Frontend.flogin');
    }
	
	public function fuserlogin(Request $request)
    {
       $data=customer::where("username","=",$request->username)->first();
       if($data)
       {
           if(Hash::check($request->password, $data->password))
           {
               $status=$data->status;
               if($status=="Unblock")
               {
                   $request->Session()->put('customer_id',$data->id);
                   $request->Session()->put('username',$data->username);
                   return redirect('/index');
               }
               else
               {
                return redirect('/flogin')->with('fail','Login Failed due to Blocked User');
               }
           }
           else
           {
            return redirect('/flogin')->with('fail','Login Failed due to Wrong Password');
           }
       }
       else
       {
        return redirect('/flogin')->with('fail','Login Failed due to Wrong user');
       }
    }
	
	public function myaccount()
	{
		$data=customer::where("id","=",session('customer_id'))->first();
		return view('Frontend.myaccount',["fetch"=>$data]);
	}
	
	 
	public function flogout()
    {
        Session()->pull('customer_id');
        Session()->pull('username');
        return redirect('/index');
    }

}
