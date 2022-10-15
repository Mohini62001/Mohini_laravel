<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companie;
use App\Models\manager;
use App\Models\mr;
use App\Mail\manager_mrmail;
use App\Mail\mrforget_password_otp;
use Mail;
use Hash;
use session;
use Alert;
use Exception;

class mr_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=mr::join('companies','companies.id','=','mrs.company_id')->get(['mrs.*','companies.company_name']);
       return view('admin.mr',["mr_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company_id_arr=companie::all();
        $manager_id_arr=manager::all();
        return view('admin.add-mr',["company_id_arr"=>$company_id_arr,"manager_id_arr"=>$manager_id_arr]);
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
            'manager_id'=>'required',
            'company_name'=>'required|regex:/[a-zA-z0-9\s]+/',
            'first_name'=>'required|alpha',
            'last_name'=>'required|alpha',
            'email'=>'required|email|unique:managers',
            'password'=>'required|min:6|unique:managers',
            'mrprofile_img'=>'required',
            'visiting_card'=>'required',
            
        ]);
        $data=new mr;

        $data->company_id=$request->company_id;
        $data->manager_id=$request->manager_id;
        $data->company_name=$request->company_name;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->dpass=$request->password;
        $data->password=Hash::make($request->password);

        // img upload
		$file=$request->file('mrprofile_img');  // get file
		$file_name=time()."_mrprofile_img.".$request->file('mrprofile_img')->getClientOriginalExtension();// make file name
		$file->move('upload/mr',$file_name); //file name move upload in public		
		$data->mrprofile_img=$file_name; // file name store in db

        // visitingcard upload
		$file2=$request->file('visiting_card');  // get file
		$file_name2=time()."_visiting_card.".$request->file('visiting_card')->getClientOriginalExtension();// make file name
		$file2->move('upload/visitingcard',$file_name2); //file name move upload in public		
		$data->visiting_card=$file_name2; // file name store in db

        $res=$data->save();
        Alert::success('Done', 'You\'ve Successfully Add MR');
        return redirect('admin-add-mr');

    }

    public function mr_status(Request $request, $id)
    { 
        $data=mr::find($id);
        $status=$data->status;
        if($status=='Unblock')
        {
            Session()->pull('mr_id');
            Session()->pull('mremail');
            Session()->pull('mr_company_id');
            Session()->pull('mrprofile_img');
            Session()->pull('mrname');
            $data->status='Block';
            $data->save();
            Alert::success('Done', 'You\'ve Successfully Block MR');
            return back();
        }
        else
        {
            $data->status='Unblock';
            $data->save();
            Alert::success('Done', 'You\'ve Successfully Unblock MR');
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
        $data=mr::find($id);
        $company_id_arr=companie::all();
        $manager_id_arr=manager::all();
        return view('admin.edit-mr',["fetch"=>$data,"company_id_arr"=>$company_id_arr,"manager_id_arr"=>$manager_id_arr]);
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
        $data=mr::find($id);

        $data->company_id=$request->company_id;
        $data->manager_id=$request->manager_id;
        $data->company_name=$request->company_name;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $old_img=$data->mrprofile_img;
        $old_img2=$data->visiting_card;

        //img upload
        if($request->hasFile('mrprofile_img'))
		{
			$file=$request->file('mrprofile_img');  // get file
			$file_name=time() . "_mrprofile_img." . $request->file('mrprofile_img')->getClientOriginalExtension();// make file name
			$file->move('upload/mr',$file_name); //file name move upload in public		
			$data->mrprofile_img=$file_name; // file name store in db
			unlink('upload/mr/'.$old_img);
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
        Alert::success('Done', 'You\'ve Successfully Update MR');
		return redirect('/admin-mr');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=mr::findorFail($id);
        try
        {
            $data->delete();
            Alert::success('Done', 'You\'ve Successfully Delete MR');
            return redirect('admin-mr');
        }
        catch(\Exception $ex)
        {
            Alert::error('Fail', 'Something went wrong or Some Data alreday added in other data');
            return back();
        }
    }


    /////////////////////////////////Company Panel//////////////////////////////////////////////

    public function companymrcreate()
    {
        $company_id_arr=companie::all();
        $manager_id_arr=manager::all();
        return view('company.add-mr',["company_id_arr"=>$company_id_arr,"manager_id_arr"=>$manager_id_arr]);
    }

    public function companymrstore(Request $request)
    {   
        $data=$request->validate([
            'company_id'=>'required',
            'manager_id'=>'required',
            'company_name'=>'required|regex:/[a-zA-z0-9\s]+/',
            'first_name'=>'required|alpha',
            'last_name'=>'required|alpha',
            'email'=>'required|email|unique:mrs',
            'password'=>'required|min:6',
            'mrprofile_img'=>'required',
            'visiting_card'=>'required',
            
        ]);
        $data=new mr;

        $data->company_id=$request->session('company_id');
        $data->manager_id=$request->manager_id;
        $data->company_name=$request->company_name;
    $first_name=$data->first_name=$request->first_name;
    $last_name=$data->last_name=$request->last_name;
    $email=$data->email=$request->email;
    $dpass=$data->dpass=$request->password;
        $data->password=Hash::make($request->password);

        // img upload
		$file=$request->file('mrprofile_img');  // get file
		$file_name=time()."_mrprofile_img.".$request->file('mrprofile_img')->getClientOriginalExtension();// make file name
		$file->move('upload/mr',$file_name); //file name move upload in public		
		$data->mrprofile_img=$file_name; // file name store in db

        // visitingcard upload
		$file2=$request->file('visiting_card');  // get file
		$file_name2=time()."_visiting_card.".$request->file('visiting_card')->getClientOriginalExtension();// make file name
		$file2->move('upload/visitingcard',$file_name2); //file name move upload in public		
		$data->visiting_card=$file_name2; // file name store in db

        $res=$data->save();
        if($res)
        {
            $data=['title'=>$email,'first_name'=>$first_name,'last_name'=>$last_name,'dpass'=>$dpass,'body'=>""];
           
            Mail::to($email)->send(new company_mrmail($data));
            Alert::success('Done', 'You\'ve Successfully Add MR');
            return back();
        }
        else
        {
             Alert::error('Fail', 'Not Success');
        }
        //Alert::success('Done', 'You\'ve Successfully Add MR');
        return redirect('company-add-mr');

    }

    public function company_mr_status(Request $request, $id)
    { 
        $data=mr::find($id);
        $status=$data->status;
        if($status=='Unblock')
        {
            Session()->pull('mr_id');
            Session()->pull('mremail');
            Session()->pull('mr_company_id');
            Session()->pull('mrprofile_img');
            Session()->pull('mrname');
            $data->status='Block';
            $data->save();
            Alert::success('Done', 'You\'ve Successfully Block MR');
            return back();
        }
        else
        {
            $data->status='Unblock';
            $data->save();
            Alert::success('Done', 'You\'ve Successfully Unblock MR');
            return back();
        }
        
    }

    public function companymrindex()
    {
        $data=mr::all();
        //$data=mr::join2('managers','companies','mrs.manager_id','=','managers.id','mrs.company_id','=','companies.id')->get();
        return view('company.mr',["mr_arr"=>$data]);
    }

    public function companymredit($id)
    {
        $data=mr::find($id);
        $company_id_arr=companie::all();
        $manager_id_arr=manager::all();
        return view('company.edit-mr',["fetch"=>$data,"company_id_arr"=>$company_id_arr,"manager_id_arr"=>$manager_id_arr]);
    }

    public function companymrupdate(Request $request, $id)
    {
        $data=mr::find($id);

        $data->company_id=$request->company_id;
        $data->manager_id=Session('manager_id');
        $data->company_name=$request->company_name;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $old_img=$data->mrprofile_img;
        $old_img2=$data->visiting_card;

        //img upload
        if($request->hasFile('mrprofile_img'))
		{
			$file=$request->file('mrprofile_img');  // get file
			$file_name=time() . "_mrprofile_img." . $request->file('mrprofile_img')->getClientOriginalExtension();// make file name
			$file->move('upload/mr',$file_name); //file name move upload in public		
			$data->mrprofile_img=$file_name; // file name store in db
			unlink('upload/mr/'.$old_img);
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
        Alert::success('Done', 'You\'ve Successfully Update MR');
		return redirect('/company-mr');
    }

    public function companymrdestroy($id)
    {
        $data=mr::findorFail($id);
        try
        {
            $data->delete();
            Alert::success('Done', 'You\'ve Successfully Delete MR');
            return redirect('company-mr');
        }
        catch(\Exception $ex)
        {
            Alert::error('Fail', 'Something went wrong or Some Data alreday added in other data');
            return back();
        }
    }

    //////////////////////////////////////////////////manager panel/////////////////////////////////////

    public function managermrcreate()
    {
        $company_id_arr=companie::all();
        return view('manager.add-mr',["company_id_arr"=>$company_id_arr]);
    }

    public function managermrstore(Request $request)      
    {   
        $data=$request->validate([
            'company_id'=>'required',
           // 'manager_id'=>'required',
            'company_name'=>'required|regex:/[a-zA-z0-9\s]+/',
            'first_name'=>'required|alpha',
            'last_name'=>'required|alpha',
            'email'=>'required|email|unique:mrs',
            'password'=>'required|min:6',
            'mrprofile_img'=>'required',
            'visiting_card'=>'required',
            
        ]);
        
        $data=new mr;

        $data->company_id=$request->company_id;
        $data->manager_id=Session('manager_id');
        $data->company_name=$request->company_name;
    $first_name=$data->first_name=$request->first_name;
    $last_name=$data->last_name=$request->last_name;
    $email=$data->email=$request->email;
    $dpass=$data->dpass=$request->password;
        $data->password=Hash::make($request->password);

        // img upload
		$file=$request->file('mrprofile_img');  // get file
		$file_name=time()."_mrprofile_img.".$request->file('mrprofile_img')->getClientOriginalExtension();// make file name
		$file->move('upload/mr',$file_name); //file name move upload in public		
		$data->mrprofile_img=$file_name; // file name store in db

        // visitingcard upload
		$file2=$request->file('visiting_card');  // get file
		$file_name2=time()."_visiting_card.".$request->file('visiting_card')->getClientOriginalExtension();// make file name
		$file2->move('upload/visitingcard',$file_name2); //file name move upload in public		
		$data->visiting_card=$file_name2; // file name store in db

        $res=$data->save();
        if($res)
        {
            $data=['email'=>$email,'first_name'=>$first_name,'last_name'=>$last_name,'dpass'=>$dpass,'body'=>""];
           
            Mail::to($email)->send(new manager_mrmail($data));
            Alert::success('Done', 'You\'ve Successfully Add MR');
            return back();
        }
        else
        {
             Alert::error('Fail', 'Not Success');
        }
       // Alert::success('Done', 'You\'ve Successfully Add MR');
        return redirect('manager-add-mr');

    }

    public function manager_mr_status(Request $request, $id)
    { 
        $data=mr::find($id);
        $status=$data->status;
        if($status=='Unblock')
        {
            Session()->pull('mr_id');
            Session()->pull('mremail');
            Session()->pull('mr_company_id');
            Session()->pull('mrprofile_img');
            Session()->pull('mrname');
            $data->status='Block';
            $data->save();
            Alert::success('Done', 'You\'ve Successfully Block MR');
            return back();
        }
        else
        {
            $data->status='Unblock';
            $data->save();
            Alert::success('Done', 'You\'ve Successfully Unblock MR');
            return back();
        }
        
    }

    public function managermrindex()
    {
        $data=mr::all();
        //$data=mr::join2('managers','companies','mrs.manager_id','=','managers.id','mrs.company_id','=','companies.id')->get();
        return view('manager.mr',["mr_arr"=>$data]);
    }

    public function managermredit($id)
    {
        $data=mr::find($id);
        $company_id_arr=companie::all();
        return view('manager.edit-mr',["fetch"=>$data,"company_id_arr"=>$company_id_arr]);
    }

    public function managermrupdate(Request $request, $id)
    {
        $data=mr::find($id);

        $data->company_id=$request->company_id;
        $data->manager_id=Session('manager_id');
        $data->company_name=$request->company_name;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $old_img=$data->mrprofile_img;
        $old_img2=$data->visiting_card;

        //img upload
        if($request->hasFile('mrprofile_img'))
		{
			$file=$request->file('mrprofile_img');  // get file
			$file_name=time() . "_mrprofile_img." . $request->file('mrprofile_img')->getClientOriginalExtension();// make file name
			$file->move('upload/mr',$file_name); //file name move upload in public		
			$data->mrprofile_img=$file_name; // file name store in db
			//unlink('upload/mr/'.$old_img);
		}
         // visitingcard upload
         if($request->hasFile('visiting_card'))
		{
            $file2=$request->file('visiting_card');  // get file
            $file_name2=time()."_visiting_card.".$request->file('visiting_card')->getClientOriginalExtension();// make file name
            $file2->move('upload/visitingcard',$file_name2); //file name move upload in public		
            $data->visiting_card=$file_name2; // file name store in db
           // unlink('upload/visitingcard/'.$old_img2);
        }

        $data->save();
        Alert::success('Done', 'You\'ve Successfully Update MR');
		return redirect('/manager-mr');
    }

    public function managermrdestroy($id)
    {
        $data=mr::findorFail($id);
        try
        {
            $data->delete();
            Alert::success('Done', 'You\'ve Successfully Delete MR');
            return redirect('manager-mr');
        }
        catch(\Exception $ex)
        {
            Alert::error('Fail', 'Something went wrong or Some Data alreday added in other data');
            return back();
        }
    }

    ///////////////////////////////////////////////mr panel////////////////////////////////////////////////////
    public function login(Request $request)
    {
        return view('mr.login');
    }

    public function mrlogin(Request $request)
    {
        $data=$request->validate([
            
            'email'=>'required|email',
            'password'=>'required|min:6',
        ]);
        $data=mr::where("email","=","$request->email")->first();
        if($data)
        {
            if(Hash::check($request->password, $data->password))
            {
                $status=$data->status;
                if($status=="Unblock")
                {
                $request->Session()->put('mr_id',$data->id);
                $request->Session()->put('mremail', $data->email);
                $request->Session()->put('mr_company_id',$data->company_id);
                $mrname=$data->first_name." ".$data->last_name; 
                $request->Session()->put('mrname',$mrname);
                $request->Session()->put('mrprofile_img', $data->mrprofile_img);
                Alert::success('Congrats', 'You\'ve Successfully Login');
                return redirect('mr-dashboard');
                }
                else
                {
                Alert::error('Fail', 'Login Failed due to Blocked MR');
                return back();
                }
            }
            else
            {
                Alert::error('Fail', 'Login Failed due to Wrong Password');
                return redirect('/mr');
            }
        }
        else
        {
            Alert::error('Fail', 'Login Failed due to Wrong email');
            return redirect('/mr');
        }
    }

    public function mrlogout()
    {
        Session()->pull('mr_id');
        Session()->pull('mremail');
        Session()->pull('mr_company_id');
        Session()->pull('mrprofile_img');
        Session()->pull('mrname');
        
        return redirect('/mr');
    }

    ////////////////forgot password
public function mrforgetview()
{
    return view('mr.mrforgot_password');
}

public function mrforgot_password(Request $request)
    {
        $data=$request->validate([            
            'email'=>'required|email',
        ]);
        $email=$request->email;
        $data=mr::where("email","=",$request->email)->first();
        if($data)
        {
            $otpmr_id=$data->id;
            $request->Session()->put('otpmr_id',$otpmr_id);
            $otp=rand(111111,999999);
            $request->Session()->put('mrforgot_pass_otp',$otp);
            $data=['mrforgot_pass_otp'=>Session('mrforgot_pass_otp'),'body'=>"Your OTP for reset your password"];
            Mail::to($email)->send(new mrforget_password_otp($data));
            return redirect('/mrenter_otp');
        }
        else
        {
            Alert::error('fail', 'Email does not match with your registered mail');
            return redirect('/mrforgot_password');
        }     
    }

    public function mrenter_otp(Request $request)
    {
        if(Session('mrforgot_pass_otp'))
        {
            return view('mr.mrenter_otp');   
        }
        else
        {
            return redirect('/mr');
        }
    }

    public function mrstore_otp(Request $request)
    {
        
            $data=$request->validate([            
            'otp'=>'required|numeric'
            ]);

            $otp=$request->otp;
            $mrforgot_pass_otp=Session('mrforgot_pass_otp');
            if($otp==$mrforgot_pass_otp)
            {
                Session()->pull('mrforgot_pass_otp');
                Session()->put('mrreset_pass',$otp);
                Alert::success('success', 'OTP match success');
                return redirect('/mrreset_password');
            }
            else
            {
                Alert::error('fail', 'OTP does not match');
                return redirect('/mrenter_otp');
            }
    }

    public function mrreset_password(Request $request)
    {
        if(Session('mrreset_pass'))
        {
            return view('mr.mrreset_password');
        }
    }

    public function mrpassword_store(Request $request)
    {
        $data=$request->validate([
            'reset_pass' => 'required|string|min:6',
            'confirm_password' => 'required|same:reset_pass|min:6',
        ]);
        mr::where('id','=',Session('otpmr_id'))->update(['password'=>Hash::make($request->reset_pass),'dpass'=>$request->reset_pass]);
        Session()->pull('otpmr_id');
        Session()->pull('mrreset_pass');
        Alert::success('Done', 'You\'re Password Reset Success');
        return redirect('/mr');
    }
    ///////////////change password
public function mrchangepassword(Request $request)
{
    $data=$request->validate([
        'oldpassword' => 'required',
        'newpassword' => 'required|string|min:6',
        'confirm_password' => 'required|same:newpassword|min:6',
    
    ]);
    $data=mr::where("id","=",Session('mr_id'))->first();
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

public function mrchangecreate()
{
    return view('mr.setting');
}

    public function mrprofile()
	{  
		$data=mr::where("id","=",session('mr_id'))->first();
		return view('mr.profile',["fetch"=>$data]);
	}

    public function editmr($id)
    {
        $data=mr::where("id","=",session('mr_id'))->first();
        return view('mr.profile',["fetch"=>$data]);
    }

    public function mrupdate(Request $request, $id)
    {
        $data=mr::find($id);

        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
       $data->email=$request->email;
        $old_img=$data->mrprofile_img;
        $old_img2=$data->visiting_card;

        // img upload
        if($request->hasFile('mrprofile_img'))
		{
            $file=$request->file('mrprofile_img');  // get file
            $file_name=time()."_mrprofile_img.".$request->file('mrprofile_img')->getClientOriginalExtension();// make file name
            $file->move('upload/mr',$file_name); //file name move upload in public		
            $data->mrprofile_img=$file_name; // file name store in db
            unlink('upload/mr/'.$old_img);
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
		return redirect('/mr-profile');
    }

}
