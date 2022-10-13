<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company_request;
use App\Models\manager_request;
use App\Models\mr_request;
use App\Models\manager_fav_doc;
use App\Models\company_fav_doc;
use App\Models\mr_fav_doc;
use Hash;
use Session;
use Alert;
use Exception;

class visitor_request_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=company_request::where("doctor_id","=",Session('doctor_id'))->get();
        $data1=manager_request::where("doctor_id","=",Session('doctor_id'))->get();
        $data2=mr_request::where("doctor_id","=",Session('doctor_id'))->get();
        return view('doctor.visitor_request',["company_visitor_arr"=>$data,"manager_visitor_arr"=>$data1,"mr_visitor_arr"=>$data2]);
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

    public function manager_visitor_request(Request $request, $id)
    {
		$data=$request->validate([
            'visiting_card'=>'required|image',
			]);
			
        $data=new manager_request;
        $data->manager_id=Session('manager_id');
        $data->doctor_id=$id; 
        $data->status='Pending';

        // visiting card upload
		$file3=$request->file('visiting_card');  // get file
		$file_name3=time()."_visiting_card_img.".$request->file('visiting_card')->getClientOriginalExtension();// make file name
		$file3->move('upload/visitingcard',$file_name3); //file name move upload in public		
		$data->visiting_card=$file_name3; // file name store in db

        $res=$data->save();
        Alert::success('Done', 'You\'ve Successfully Add to Request Doctor');
        return back();
    }

    
    public function doctor_approve_manager(Request $request, $id)
    { 
        $data=manager_request::find($id);
        $status=$data->status;
        $manager_id=$data->manager_id;
        if($status=='Pending')
        {
            $data->status='Approved';
            $data->save();

            $data=new manager_fav_doc;
            $data->manager_id=$manager_id;
            $data->doctor_id=Session('doctor_id');
            $data->save();
            Alert::success('Done', 'You\'ve Successfully Approved');
            return back();
        }
        
        else{
            $data->status='Pending';
            $data->save();
            $data=manager_fav_doc::where('manager_id','=',$manager_id)->where('doctor_id','=',Session('doctor_id'))->delete();
       
            
            Alert::success('Done', 'You\'ve  Successfully Pending');
            return back();
        }
        
    }

    public function company_visitor_request(Request $request, $id)
    {
		$data=$request->validate([
            'visiting_card'=>'required|image',
			]);
			
        $data=new company_request;
        $data->company_id=Session('company_id');
        $data->doctor_id=$id; 
        $data->status='Pending';

        // visiting card upload
		$file3=$request->file('visiting_card');  // get file
		$file_name3=time()."_visiting_card_img.".$request->file('visiting_card')->getClientOriginalExtension();// make file name
		$file3->move('upload/visitingcard',$file_name3); //file name move upload in public		
		$data->visiting_card=$file_name3; // file name store in db

        $res=$data->save();
        Alert::success('Done', 'You\'ve Successfully Add to Request Doctor');
        return back();
    }

    public function doctor_approve_company(Request $request, $id)
    { 
        $data=company_request::find($id);
        $status=$data->status;
        $company_id=$data->company_id;
        if($status=='Pending')
        {
            $data->status='Approved';
            $data->save();

            $data=new company_fav_doc;
            $data->company_id=$company_id;
            $data->doctor_id=Session('doctor_id');
            $data->save();
            Alert::success('Done', 'You\'ve Successfully Approved');
            return back();
        }
        
        else{
            $data->status='Pending';
            $data->save();

            $data=company_fav_doc::where('company_id','=',$company_id)->where('doctor_id','=',Session('doctor_id'))->delete();
       
            
            Alert::success('Done', 'You\'ve  Successfully Pending');
            return back();
        }
        
    }

    public function mr_visitor_request(Request $request, $id)
    {
		$data=$request->validate([
            'visiting_card'=>'required|image',
			]);
			
        $data=new mr_request;
        $data->mr_id=Session('mr_id');
        $data->doctor_id=$id; 
        $data->status='Pending';

        // visiting card upload
		$file3=$request->file('visiting_card');  // get file
		$file_name3=time()."_visiting_card_img.".$request->file('visiting_card')->getClientOriginalExtension();// make file name
		$file3->move('upload/visitingcard',$file_name3); //file name move upload in public		
		$data->visiting_card=$file_name3; // file name store in db

        $res=$data->save();
        Alert::success('Done', 'You\'ve Successfully Add to Request Doctor');
        return back();
    }

    public function doctor_approve_mr(Request $request, $id)
    { 
        $data=mr_request::find($id);
        $status=$data->status;
        $mr_id=$data->mr_id;
        if($status=='Pending')
        {
            $data->status='Approved';
            $data->save();

            $data=new mr_fav_doc;
            $data->mr_id=$mr_id;
            $data->doctor_id=Session('doctor_id');
            $data->save();
            Alert::success('Done', 'You\'ve Successfully Approved');
            return back();
        }
        
        else{
            $data->status='Pending';
            $data->save();

            $data=mr_fav_doc::where('mr_id','=',$mr_id)->where('doctor_id','=',Session('doctor_id'))->delete();
       
            
            Alert::success('Done', 'You\'ve  Successfully Pending');
            return back();
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
