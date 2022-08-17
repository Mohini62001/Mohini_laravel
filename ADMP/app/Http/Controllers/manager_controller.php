<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companie;
use App\Models\manager;
use Hash;

class manager_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=manager::join('companies','managers.company_id','=','companies.id')->get();

        return view('admin.manager',["comapany_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company_id_arr=companie::all();
        return view('admin.add-manager',["company_id_arr"=>$company_id_arr]);
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
        'company_id'=>'required',
        'Manager_name'=>'required|regex:/[a-zA-z0-9\s]+/',
        'first_name'=>'required|alpha',
        'last_name'=>'required|alpha',
        'email'=>'required|email|unique:managers',
        'password'=>'required|min:6|unique:managers',
        'mprofile_img'=>'required|mimes:jpeg,png,jpg,gif,svg',
        'visiting_card'=>'required|mimes:jpeg,png,jpg,gif,svg',
        
    ]);
        $data=new manager;

        $data->Manager_name=$request->Manager_name;
        $data->company_id=$request->company_id;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);

        // img upload
		$file=$request->file('mprofile_img');  // get file
		$file_name=time()."_mprofile_img.".$request->file('mprofile_img')->getClientOriginalExtension();// make file name
		$file->move('upload/manager',$file_name); //file name move upload in public		
		$data->mprofile_img=$file_name; // file name store in db

        // visitingcard upload
		$file2=$request->file('visiting_card');  // get file
		$file_name2=time()."_visiting_card.".$request->file('visiting_card')->getClientOriginalExtension();// make file name
		$file2->move('upload/visitingcard',$file_name2); //file name move upload in public		
		$data->visiting_card=$file_name2; // file name store in db

        $res=$data->save();
        return redirect('admin-add-manager')->with('success','Add Manager Success');
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
        $data=manager::find($id);
        $company_id_arr=companie::all();
        return view('admin.edit-manager',["fetch"=>$data,"company_id_arr"=>$company_id_arr]);
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
        
        $data=manager::find($id);

        $data->company_id=$request->company_id;
        $data->Manager_name=$request->Manager_name;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $old_img=$data->mprofile_img;
        $old_img2=$data->visiting_card;

        //img upload
        if($request->hasFile('mprofile_img'))
		{
			$file=$request->file('mprofile_img');  // get file
			$file_name=time() . "_mprofile_img." . $request->file('mprofile_img')->getClientOriginalExtension();// make file name
			$file->move('upload/manager',$file_name); //file name move upload in public		
			$data->mprofile_img=$file_name; // file name store in db
			unlink('upload/manager/'.$old_img);
		}
         // visitingcard upload
         if($request->hasFile('visiting_card'))
		{
            $file2=$request->file('visiting_card');  // get file
            $file_name2=time()."_visiting_card.".$request->file('visiting_card')->getClientOriginalExtension();// make file name
            $file2->move('upload/visitingcard',$file_name2); //file name move upload in public		
            $data->visiting_card=$file_name2; // file name store in db
            unlink('upload/visitingcard/'.$old_img2);
        }

        $data->save();
		return redirect('/admin-manager')->with('success','Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=manager::find($id);
        $data->delete();
        return redirect('admin-manager')->with("success","Manager deleted successfully");
    }
}
