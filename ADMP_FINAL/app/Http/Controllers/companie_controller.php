<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companie;
use App\Models\company_fav_doc;
use App\Models\manager;
use App\Mail\companymail;
use App\Mail\companyregistermail;
use App\Mail\cforget_password_otp;
use Mail;
use Hash;
use Session;
use Alert;
use Exception;

class companie_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admincompanyindex()
    {
        $data=companie::all();
        return view('admin.company',["companie_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admincompanycreate()
    {
        return view('admin.add-company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *///
    public function admincompanystore(Request $request)
    {   
        $data=$request->validate([
            'first_name'=>'required|alpha',
            'last_name'=>'required|alpha',
            'company_name'=>'required|unique:companies|regex:/[a-zA-z0-9\s]+/',
            'email'=>'required|email|unique:companies',
            'password'=>'required|min:6',
            'cprofile_img'=>'required|mimes:jpeg,png,jpg,gif,svg',
            'visiting_card'=>'required|mimes:jpeg,png,jpg,gif,svg',

        ]);
        $data=new companie;
        
    $first_name=$data->first_name=$request->first_name;
    $last_name=$data->last_name=$request->last_name;
        $data->company_name=$request->company_name;
    $email=$data->email=$request->email;
    $dpass=$data->dpass=$request->password;
        $data->password=Hash::make($request->password);

        // img upload
		$file=$request->file('cprofile_img');  // get file
		$file_name=time()."_cprofile_img.".$request->file('cprofile_img')->getClientOriginalExtension();// make file name
		$file->move('upload/companyprofile',$file_name); //file name move upload in public		
		$data->cprofile_img=$file_name; // file name store in db

        // visitingcard upload
		$file2=$request->file('visiting_card');  // get file
		$file_name2=time()."_visiting_card.".$request->file('visiting_card')->getClientOriginalExtension();// make file name
		$file2->move('upload/visitingcard',$file_name2); //file name move upload in public		
		$data->visiting_card=$file_name2; // file name store in db

        $res=$data->save();
        if($res)
		{
			$data=['email'=>$email,'first_name'=>$first_name,'last_name'=>$last_name,'dpass'=>$dpass,'body'=>""];
           
			Mail::to($email)->send(new companymail($data));
            Alert::success('Done', 'You\'ve Successfully Add Company');
			return back();
		}
		else
		{
			 Alert::error('Fail', 'Not Success');
		}
       // Alert::success('Done', 'You\'ve Successfully Add Company');
        return redirect('admin-add-company');

    }

    public function company_status(Request $request, $id)
    { 
        $data=companie::find($id);
        $status=$data->status;
        if($status=='Unblock')
        {
            Session()->pull('company_id');
            Session()->pull('email');
            Session()->pull('cprofile_img');
            Session()->pull('cname');
            $data->status='Block';
            $data->save();
            Alert::success('Done', 'You\'ve Successfully Block Company');
            return back();
        }
        else
        {
            $data->status='Unblock';
            $data->save();
            Alert::success('Done', 'You\'ve Successfully Unblock Company');
            return back();
        }
        
    }

    //------login------
    
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
    public function admincompanyedit($id)
    {
        $data=companie::find($id);
        return view('admin.edit-company',["fetch"=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admincompanyupdate(Request $request, $id)
    {
        $data=companie::find($id);

        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->company_name=$request->company_name;
        $data->email=$request->email;
        $old_img=$data->cprofile_img;
        $old_img2=$data->visiting_card;

        // img upload
        if($request->hasFile('cprofile_img'))
		{
            $file=$request->file('cprofile_img');  // get file
            $file_name=time()."_cprofile_img.".$request->file('cprofile_img')->getClientOriginalExtension();// make file name
            $file->move('upload/companyprofile',$file_name); //file name move upload in public		
            $data->cprofile_img=$file_name; // file name store in db
            unlink('upload/companyprofile/'.$old_img);
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
        Alert::success('Done', 'You\'ve Successfully Update Company');
		return redirect('/admin-company')->with('success','Update Success');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function admincompanydestroy($id)
    {
        $data=companie::findorFail($id);
		try{
        $data->delete();
		Alert::success('Done', 'You\'ve Successfully Delete Company');
        return redirect('admin-company');
		}
		catch(\Exception $ex)
		{
			Alert::error('Fail', 'Something went wrong or Some Data alreday added in other data');
			return back();
		}
    }

    ///=====================company panel================================================================

    public function cregisterview(Request $request)
    {
        return view('company.company_register');
    }

    public function companyregister(Request $request)
    {   
        $data=$request->validate([
            'first_name'=>'required|alpha',
            'last_name'=>'required|alpha',
            'company_name'=>'required|unique:companies|regex:/[a-zA-z0-9\s]+/',
            'email'=>'required|email|unique:companies',
            'password'=>'required|min:6',
            'cprofile_img'=>'required',
            'visiting_card'=>'required',

        ]);
        $data=new companie;
        
    $first_name=$data->first_name=$request->first_name;
    $last_name=$data->last_name=$request->last_name;
        $data->company_name=$request->company_name;
    $email=$data->email=$request->email;
    $dpass=$data->dpass=$request->password;
        $data->password=Hash::make($request->password);
        $data->status='Block';

        // img upload
		$file=$request->file('cprofile_img');  // get file
		$file_name=time()."_cprofile_img.".$request->file('cprofile_img')->getClientOriginalExtension();// make file name
		$file->move('upload/companyprofile',$file_name); //file name move upload in public		
		$data->cprofile_img=$file_name; // file name store in db

        // visitingcard upload
		$file2=$request->file('visiting_card');  // get file
		$file_name2=time()."_visiting_card.".$request->file('visiting_card')->getClientOriginalExtension();// make file name
		$file2->move('upload/visitingcard',$file_name2); //file name move upload in public		
		$data->visiting_card=$file_name2; // file name store in db

        $res=$data->save();
        if($res)
		{
			$data=['email'=>$email,'first_name'=>$first_name,'last_name'=>$last_name,'dpass'=>$dpass,'body'=>""];
           
			Mail::to($email)->send(new companyregistermail($data));
            Alert::success('Done', 'You\'ve Successfully Register');
			return redirect('/company');
		}
		else
		{
			 Alert::error('Fail', 'Not Success');
		}
       // Alert::success('Done', 'You\'ve Successfully Add Company');
        return back();

    }

    public function login(Request $request)
    {
        return view('company.login');
    }

    public function companylogin(Request $request)
    {
        $data=$request->validate([
            
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);
        $data=companie::where("email","=","$request->email")->first();
        if($data)
        {
            if(Hash::check($request->password, $data->password))
            {
               $status=$data->status;
               if($status=="Unblock")
               {
                $request->Session()->put('company_id',$data->id);
                $request->Session()->put('email', $data->email);
                $cname=$data->first_name." ".$data->last_name; 
                $request->Session()->put('cname',$cname);
                $request->Session()->put('cprofile_img', $data->cprofile_img);
                Alert::success('Congrats', 'You\'ve Successfully Login');
                return redirect('company-dashboard');
               }
               else
               {
                Alert::error('Fail', 'Login Failed due to Blocked Company');
                return back();
               }
            }
            else
            {
                Alert::error('Fail', 'Login Failed due to Wrong Password');
                return redirect('/company');
            }
        }
        else
        {
            Alert::error('Fail', 'Login Failed due to Wrong email');
            return redirect('/company');
        }
    }
////////////////forgot password
public function cforgetview()
{
    return view('company.cforgot_password');
}

public function cforgot_password(Request $request)
    {
        $data=$request->validate([            
            'email'=>'required|email',
        ]);
        $email=$request->email;
        $data=companie::where("email","=",$request->email)->first();
        if($data)
        {
            $otpcompany_id=$data->id;
            $request->Session()->put('otpcompany_id',$otpcompany_id);
            $otp=rand(111111,999999);
            $request->Session()->put('cforgot_pass_otp',$otp);
            $data=['cforgot_pass_otp'=>Session('cforgot_pass_otp'),'body'=>"Your OTP for reset your password"];
            Mail::to($email)->send(new cforget_password_otp($data));
            return redirect('/center_otp');
        }
        else
        {
            Alert::error('fail', 'Email does not match with your registered mail');
            return redirect('/cforgot_password');
        }     
    }

    public function center_otp(Request $request)
    {
        if(Session('cforgot_pass_otp'))
        {
            return view('company.center_otp');   
        }
        else
        {
            return redirect('/company');
        }
    }

    public function cstore_otp(Request $request)
    {
        
            $data=$request->validate([            
            'otp'=>'required|numeric'
            ]);

            $otp=$request->otp;
            $cforgot_pass_otp=Session('cforgot_pass_otp');
            if($otp==$cforgot_pass_otp)
            {
                Session()->pull('cforgot_pass_otp');
                Session()->put('creset_pass',$otp);
                Alert::success('success', 'OTP match success');
                return redirect('/creset_password');
            }
            else
            {
                Alert::error('fail', 'OTP does not match');
                return redirect('/center_otp');
            }
    }

    public function creset_password(Request $request)
    {
        if(Session('creset_pass'))
        {
            return view('company.creset_password');
        }
    }

    public function cpassword_store(Request $request)
    {
        $data=$request->validate([
            'reset_pass' => 'required|string|min:6',
            'confirm_password' => 'required|same:reset_pass|min:6',
        ]);
        companie::where('id','=',Session('otpcompany_id'))->update(['password'=>Hash::make($request->reset_pass),'dpass'=>$request->reset_pass]);
        Session()->pull('otpcompany_id');
        Session()->pull('creset_pass');
        Alert::success('Done', 'You\'re Password Reset Success');
        return redirect('/company');
    }
///////////////change password
public function companychangepassword(Request $request)
{
    $data=$request->validate([
        'oldpassword' => 'required',
        'newpassword' => 'required|string|min:6',
        'confirm_password' => 'required|same:newpassword|min:6',
    
    ]);
    $data=companie::where("id","=",Session('company_id'))->first();
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

public function companychangecreate()
{
    return view('company.setting');
}

    public function companylogout()
    {
        Session()->pull('company_id');
        Session()->pull('email');
        Session()->pull('cprofile_img');
        Session()->pull('cname');
        return redirect('/company');
    }

    public function companyprofile()
	{  
		$data=companie::where("id","=",session('company_id'))->first();
		return view('company.profile',["fetch"=>$data]);
	}

    public function editcompany($id)
    {
        $data=companie::where("id","=",session('company_id'))->first();
        return view('company.profile',["fetch"=>$data]);
    }

    public function companyupdate(Request $request, $id)
    {
        $data=companie::find($id);

        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->company_name=$request->company_name;
        $data->email=$request->email;
        $old_img=$data->cprofile_img;
        $old_img2=$data->visiting_card;

        // img upload
        if($request->hasFile('cprofile_img'))
		{
            $file=$request->file('cprofile_img');  // get file
            $file_name=time()."_cprofile_img.".$request->file('cprofile_img')->getClientOriginalExtension();// make file name
            $file->move('upload/companyprofile',$file_name); //file name move upload in public		
            $data->cprofile_img=$file_name; // file name store in db
            unlink('upload/companyprofile/'.$old_img);
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
        Alert::success('Done', 'You\'ve Successfully Update Company Profile');
		return redirect('/company-profile');
    }

    

}

    


    

