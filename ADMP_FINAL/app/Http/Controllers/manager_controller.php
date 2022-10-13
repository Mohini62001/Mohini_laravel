<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companie;
use App\Models\manager;
use App\Models\division;
use App\Mail\company_managermail;
use App\Mail\mforget_password_otp;
use App\Mail\managerregistermail;
use Mail;
use Hash;
use Session;
use Alert;
use Exception;

class manager_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminmanagerindex()
    {
        $data=manager::all();

        return view('admin.manager',["comapany_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminmanagercreate()
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
    public function adminmanagerstore(Request $request)
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
        $data->dpass=$request->password;
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
        Alert::success('Done', 'You\'ve Successfully Add Manager');
        return redirect('admin-add-manager');
    }


    public function manager_status(Request $request, $id)
    { 
        $data=manager::find($id);
        $status=$data->status;
        if($status=='Unblock')
        {
            Session()->pull('manager_id');
            Session()->pull('manageremail');
            Session()->pull('manager_company_id');
            Session()->pull('manager_division_id');
            Session()->pull('mprofile_img');
            Session()->pull('mname');
            $data->status='Block';
            $data->save();
            Alert::success('Done', 'You\'ve Successfully Block Manager');
            return back();
        }
        else
        {
            $data->status='Unblock';
            $data->save();
            Alert::success('Done', 'You\'ve Successfully Unblock Manager');
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
    public function adminmanageredit($id)
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
    public function adminmanagerupdate(Request $request, $id)
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
        Alert::success('Done', 'You\'ve Successfully Update Manager');
		return redirect('/admin-manager');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function adminmanagerdestroy($id)
    {
        $data=manager::findorFail($id);
        try
        {
            $data->delete();
            Alert::success('Done', 'You\'ve Successfully Delete Manager');
            return redirect('admin-manager');
        }
        catch(\Exception $ex)
        {
            Alert::error('Fail', 'Something went wrong or Some Data alreday added in other data');
            return back();
        }
    }

/////////////////////////////////////Company Panel/////////////////////////////////////////

public function companymanagercreate()
{
    $division_id_arr=division::where('company_id','=',Session('company_id'))->get();
    return view('company.add-manager',["division_id_arr"=>$division_id_arr]);
} 

public function companymanagerstore(Request $request)
{  
     $data=$request->validate([
    
    'Manager_name'=>'required|regex:/[a-zA-z0-9\s]+/',
    'division_id'=>'required',
    'first_name'=>'required|alpha',
    'last_name'=>'required|alpha',
    'email'=>'required|email|unique:managers',
    'password'=>'required|min:6|unique:managers',
    'mprofile_img'=>'required|mimes:jpeg,png,jpg,gif,svg',
    'visiting_card'=>'required|mimes:jpeg,png,jpg,gif,svg',
    
]);
    $data=new manager;

    $data->Manager_name=$request->Manager_name;
    $data->company_id=Session('company_id');
    $data->division_id=$request->division_id;
$first_name=$data->first_name=$request->first_name;
$last_name=$data->last_name=$request->last_name;
$email=$data->email=$request->email;
$dpass=$data->dpass=$request->password;
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
    if($res)
    {
        $data=['email'=>$email,'first_name'=>$first_name,'last_name'=>$last_name,'dpass'=>$dpass,'body'=>""];
       
        Mail::to($email)->send(new company_managermail($data));
        Alert::success('Done', 'You\'ve Successfully Add Manager');
        return back();
    }
    else
    {
         Alert::error('Fail', 'Not Success');
    }
    //Alert::success('Done', 'You\'ve Successfully Add Manager');
    return redirect('company-add-manager');
}

public function company_manager_status(Request $request, $id)
{ 
    $data=manager::find($id);
    $status=$data->status;
    if($status=='Unblock')
    {
        Session()->pull('manager_id');
        Session()->pull('manageremail');
        Session()->pull('manager_company_id');
        Session()->pull('manager_division_id');
        Session()->pull('mprofile_img');
        Session()->pull('mname');
        $data->status='Block';
        $data->save();
        Alert::success('Done', 'You\'ve Successfully Block Manager');
        return back();
    }
    else
    {
        $data->status='Unblock';
        $data->save();
        Alert::success('Done', 'You\'ve Successfully Unblock Manager');
        return back();
    }
    
}

public function companymanagerindex()
    {
        $data=manager::where('company_id','=',session('company_id'))->get();
        return view('company.manager',["comapany_arr"=>$data]);
    }

public function companymanageredit($id)
    {
        $data=manager::find($id);
        $division_id_arr=division::all();
        return view('company.edit-manager',["fetch"=>$data,"division_id_arr"=>$division_id_arr]);
    }

    public function companymanagerupdate(Request $request, $id)
    {   
        $data=manager::find($id);
        $data->division_id=$request->division_id;
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
        Alert::success('Done', 'You\'ve Successfully Update Manager');
		return redirect('/company-manager');
    }

    public function companymanagerdestroy($id)
    {
        $data=manager::findorFail($id);
        try
        {
            $data->delete();
            Alert::success('Done', 'You\'ve Successfully Delete Manager');
            return redirect('company-manager');
        }
        catch(\Exception $ex)
        {
            Alert::error('Fail', 'Something went wrong or Some Data alreday added in other data');
            return back();
        }
    }


    ////////////////////////////////////////////manager panel//////////////////////////////////
    public function mregisterview(Request $request)
    {
        $com_arr=companie::all();
        $division_arr=division::all();
        return view('manager.manager_register',["com_arr"=>$com_arr,"division_arr"=>$division_arr]);
    }

    public function getdivision(Request $request)
    {
		$data['divisions']=division::where("company_id","=",$request->company_id)->orderBy('division_name', 'ASC')->get();
        return response()->json($data);	
        
    }

    public function managerregister(Request $request)
{  
     $data=$request->validate([
    
    'Manager_name'=>'required|regex:/[a-zA-z0-9\s]+/',
    'division_id'=>'required',
    'company_id'=>'required',
    'first_name'=>'required|alpha',
    'last_name'=>'required|alpha',
    'email'=>'required|email|unique:managers',
    'password'=>'required|min:6',
    'mprofile_img'=>'required',
    'visiting_card'=>'required',
    
]);
    $data=new manager;

    $data->Manager_name=$request->Manager_name;
    $data->company_id=Session('company_id');
    $data->division_id=$request->division_id;
$first_name=$data->first_name=$request->first_name;
$last_name=$data->last_name=$request->last_name;
$email=$data->email=$request->email;
$dpass=$data->dpass=$request->password;
    $data->password=Hash::make($request->password);
    $data->status='Block';

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
    if($res)
    {
        $data=['email'=>$email,'first_name'=>$first_name,'last_name'=>$last_name,'dpass'=>$dpass,'body'=>""];
       
        Mail::to($email)->send(new managerregistermail($data));
        Alert::success('Done', 'You\'ve Successfully Register');
        return redirect('/manager');
    }
    else
    {
         Alert::error('Fail', 'Not Success');
    }
    //Alert::success('Done', 'You\'ve Successfully Add Manager');
    return back();
}

    public function login(Request $request)
    {
        return view('manager.login');
    }

    public function managerlogin(Request $request)
    {
        $data=$request->validate([
            
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);
        $data=manager::where("email","=","$request->email")->first();
        if($data)
        {
            if(Hash::check($request->password, $data->password))
            {
               $status=$data->status;
               if($status=="Unblock")
               {
                $request->Session()->put('manager_id',$data->id);
                $request->Session()->put('manageremail', $data->email);
                $request->Session()->put('manager_company_id',$data->company_id);
                $request->Session()->put('manager_division_id',$data->division_id);
                $mname=$data->first_name." ".$data->last_name; 
                $request->Session()->put('mname',$mname);
                $request->Session()->put('mprofile_img', $data->mprofile_img);
                Alert::success('Congrats', 'You\'ve Successfully Login');
                return redirect('manager-dashboard');
                }
                else
                {
                Alert::error('Fail', 'Login Failed due to Blocked Manager');
                return back();
                }
            }
            else
            {
                Alert::error('Fail', 'Login Failed due to Wrong Password');
                return redirect('/manager');
            }
        }
        else
        {
            Alert::error('Fail', 'Login Failed due to Wrong email');
            return redirect('/manager');
        }
    }

    public function managerlogout()
    {
        Session()->pull('manager_id');
        Session()->pull('manageremail');
        Session()->pull('manager_company_id');
        Session()->pull('manager_division_id');
        Session()->pull('mprofile_img');
        Session()->pull('mname');
        return redirect('/manager');
    }
////////////////forgot password
public function mforgetview()
{
    return view('manager.mforgot_password');
}

public function mforgot_password(Request $request)
    {
        $data=$request->validate([            
            'email'=>'required|email',
        ]);
        $email=$request->email;
        $data=manager::where("email","=",$request->email)->first();
        if($data)
        {
            $otpmanager_id=$data->id;
            $request->Session()->put('otpmanager_id',$otpmanager_id);
            $otp=rand(111111,999999);
            $request->Session()->put('mforgot_pass_otp',$otp);
            $data=['mforgot_pass_otp'=>Session('mforgot_pass_otp'),'body'=>"Your OTP for reset your password"];
            Mail::to($email)->send(new mforget_password_otp($data));
            return redirect('/menter_otp');
        }
        else
        {
            Alert::error('fail', 'Email does not match with your registered mail');
            return redirect('/mforgot_password');
        }     
    }

    public function menter_otp(Request $request)
    {
        if(Session('mforgot_pass_otp'))
        {
            return view('manager.menter_otp');   
        }
        else
        {
            return redirect('/manager');
        }
    }

    public function mstore_otp(Request $request)
    {
        
            $data=$request->validate([            
            'otp'=>'required|numeric'
            ]);

            $otp=$request->otp;
            $mforgot_pass_otp=Session('mforgot_pass_otp');
            if($otp==$mforgot_pass_otp)
            {
                Session()->pull('mforgot_pass_otp');
                Session()->put('mreset_pass',$otp);
                Alert::success('success', 'OTP match success');
                return redirect('/mreset_password');
            }
            else
            {
                Alert::error('fail', 'OTP does not match');
                return redirect('/menter_otp');
            }
    }

    public function mreset_password(Request $request)
    {
        if(Session('mreset_pass'))
        {
            return view('manager.mreset_password');
        }
    }

    public function mpassword_store(Request $request)
    {
        $data=$request->validate([
            'reset_pass' => 'required|string|min:6',
            'confirm_password' => 'required|same:reset_pass|min:6',
        ]);
        manager::where('id','=',Session('otpmanager_id'))->update(['password'=>Hash::make($request->reset_pass),'dpass'=>$request->reset_pass]);
        Session()->pull('otpmanager_id');
        Session()->pull('mreset_pass');
        Alert::success('Done', 'You\'re Password Reset Success');
        return redirect('/manager');
    }
    ///////////////change password
public function managerchangepassword(Request $request)
{
    $data=$request->validate([
        'oldpassword' => 'required',
        'newpassword' => 'required|string|min:6',
        'confirm_password' => 'required|same:newpassword|min:6',
    
    ]);
    $data=manager::where("id","=",Session('manager_id'))->first();
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

public function managerchangecreate()
{
    return view('manager.setting');
}

    public function managerprofile()
	{  
		$data=manager::where("id","=",session('manager_id'))->first();
		return view('manager.profile',["fetch"=>$data]);
	}

    public function editmanager($id)
    {
        $data=manager::where("id","=",session('manager_id'))->first();
        return view('manager.profile',["fetch"=>$data]);
    }

    public function managerupdate(Request $request, $id)
    {
        $data=manager::find($id);

        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->Manager_name=$request->Manager_name;
        $data->email=$request->email;
        $old_img=$data->mprofile_img;
        $old_img2=$data->visiting_card;

        // img upload
        if($request->hasFile('mprofile_img'))
		{
            $file=$request->file('mprofile_img');  // get file
            $file_name=time()."_mprofile_img.".$request->file('mprofile_img')->getClientOriginalExtension();// make file name
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
        Alert::success('Done', 'You\'ve Successfully Update Your Profile');
		return redirect('/manager-profile');
    }


}
