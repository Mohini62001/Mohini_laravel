<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\state;
use App\Models\citie;
use App\Models\area;
use App\Models\specialist;
use App\Models\service;
use App\Models\drspecialitie;
use Hash;
use session;

class doctor_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=doctor::all();
		return view('admin.doctor-list',["doctor_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $special_id_arr=specialist::all();
        $state_id_arr=state::all();
        $city_id_arr=citie::all();
        $area_id_arr=area::all();
        
        return view('admin.add-doctor',["special_id_arr"=>$special_id_arr,"state_id_arr"=>$state_id_arr,"city_id_arr"=>$city_id_arr,"area_id_arr"=>$area_id_arr]);
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
            'first_name'=>'required|alpha',
            'last_name'=>'required|alpha',
            'short_tittle'=>'required',//check
            'email'=>'required|email|unique:doctors',
            //'gender'=>'required|in:male,female',//check
            'password'=>'required|string|unique:doctors|min:6',
            'dob'=>'required|date',
            'liacence_no'=>'required',//check
            'education'=>'required|regex:/[a-zA-z0-9\s]+/',
            'experience'=>'required|regex:/[a-zA-z0-9\s]+/',
            'hospital_name'=>'required|regex:/[a-zA-z0-9\s]+/',
            'dr_mobile'=>'required|numeric|digits:10|unique:doctors',
            'office_no'=>'required|alpha_num|string',
            'about'=>'required',
            'address'=>'required|max:200',
            'pincode'=>'required|numeric|digits:6',
            'day'=>'required',
            
            'consulting_fees'=>'required|numeric',
            'followup_fees'=>'required|numeric',
            'notification'=>'required|max:200',
            'specialist_id'=>'required',
            'state'=>'required',
            'city'=>'required',
            'area'=>'required',
            'profile_img'=>'required',
            'hospital_img'=>'required',
            'visit_card'=>'required',

        ]);

       

        $data=new doctor;
        
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->short_tittle=$request->short_tittle;
        $data->email=$request->email;
        $data->gender=$request->gender;
        $data->password=Hash::make($request->password);
        $data->dob=$request->dob;
        $data->liacence_no=$request->liacence_no;
        $data->education=$request->education;
        $data->experience=$request->experience;
        $data->hospital_name=$request->hospital_name;
        $data->dr_mobile=$request->dr_mobile;
        $data->office_no=$request->office_no;
        $data->about=$request->about;
        $data->address=$request->address;
        $data->pincode=$request->pincode;
        $data->google_map=$request->google_map;
        $data->day=implode(",",$request->day);
        $data->hospital_morning_to=$request->hospital_morning_to;
        $data->hospital_morning_from=$request->hospital_morning_from;
        $data->hospital_afternoon_to=$request->hospital_afternoon_to;
        $data->hospital_afternoon_from=$request->hospital_afternoon_from;
        $data->hospital_evening_to=$request->hospital_evening_to;
        $data->hospital_evening_from=$request->hospital_evening_from;
        $data->consulting_fees=$request->consulting_fees;
        $data->followup_fees=$request->followup_fees;
        $data->notification=$request->notification;

        $data->specialist_id=$request->specialist_id ;
        $data->state=$request->state;
        $data->city=$request->city;
        $data->area=$request->area;

        // img upload
		$file=$request->file('profile_img');  // get file
		$file_name=time()."_profile_img.".$request->file('profile_img')->getClientOriginalExtension();// make file name
		$file->move('upload/doctor',$file_name); //file name move upload in public		
		$data->profile_img=$file_name; // file name store in db

        // hospital upload
        $filesarr = [];
        if($request->hasfile('hospital_img'))
        {
            foreach($request->file('hospital_img') as $file)
            {
                $name = time().rand(100000,99999).'hospital_img.'.$file->extension();
                $file->move('upload/hospital/',$name);
                $filesarr[] = $name;       
            }
            $data->hospital_img=implode(",",$filesarr);
        }



        // visiting card upload
		$file3=$request->file('visit_card');  // get file
		$file_name3=time()."_visit_card_img.".$request->file('visit_card')->getClientOriginalExtension();// make file name
		$file3->move('upload/visitingcard',$file_name3); //file name move upload in public		
		$data->visit_card=$file_name3; // file name store in db

        $res=$data->save();
        return redirect('admin-add-doctor')->with('success','Add Doctor Success');

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
        $data=doctor::find($id);
        $special_id_arr=specialist::all();
        $state_id_arr=state::all();
        $city_id_arr=citie::all();
        $area_id_arr=area::all();
        return view('admin.edit-doctor',["fetch"=>$data,"special_id_arr"=>$special_id_arr,"state_id_arr"=>$state_id_arr,"city_id_arr"=>$city_id_arr,"area_id_arr"=>$area_id_arr]);
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
        $data=$request->validate([
            'first_name'=>'alpha',
            'last_name'=>'alpha',
            //'short_tittle'=>'required',//check
            //'email'=>'required|email|unique:doctors',
            //'gender'=>'required|in:male,female',//check
            //'password'=>'required|string|unique:doctors|min:6',
            'dob'=>'date',
            //'liacence_no'=>'required',//check
            'education'=>'regex:/[a-zA-z0-9\s]+/',
            'experience'=>'regex:/[a-zA-z0-9\s]+/',
            'hospital_name'=>'regex:/[a-zA-z0-9\s]+/',
            'dr_mobile'=>'digits:10',
            'office_no'=>'alpha_num|string',
            //'about'=>'required',
            'address'=>'max:200',
            'pincode'=>'digits:6',
            //'day'=>'required',
            'consulting_fees'=>'numeric',
            'followup_fees'=>'numeric',
            'notification'=>'max:200',
            //'specialist_id'=>'required',
            //'state'=>'required',
            //'city'=>'required',
            //'area'=>'required',
            'profile_img'=>'mimes:jpeg,png,jpg,gif',
            //'hospital_img'=>'mimes:jpeg,png,jpg,gif',
            'visit_card'=>'mimes:jpeg,png,jpg,gif',

        ]);



        $data=doctor::find($id);
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->short_tittle=$request->short_tittle;
        $data->gender=$request->gender;
        $data->dob=$request->dob;
        $data->liacence_no=$request->liacence_no;
        $data->education=$request->education;
        $data->experience=$request->experience;
        $data->hospital_name=$request->hospital_name;
        $data->dr_mobile=$request->dr_mobile;
        $data->office_no=$request->office_no;
        $data->about=$request->about;
        $data->address=$request->address;
        $data->pincode=$request->pincode;
        $data->google_map=$request->google_map;
        $data->day=implode(",",$request->day);
        $data->hospital_morning_to=$request->hospital_morning_to;
        $data->hospital_morning_from=$request->hospital_morning_from;
        $data->hospital_afternoon_to=$request->hospital_afternoon_to;
        $data->hospital_afternoon_from=$request->hospital_afternoon_from;
        $data->hospital_evening_to=$request->hospital_evening_to;
        $data->hospital_evening_from=$request->hospital_evening_from;
        $data->consulting_fees=$request->consulting_fees;
        $data->followup_fees=$request->followup_fees;
        $data->notification=$request->notification;
        $old_img=$data->profile_img;
        $old_img2=$data->hospital_img;
        $old_img3=$data->visit_card;

        $data->specialist_id=$request->specialist_id ;
        $data->state=$request->state;
        $data->city=$request->city;
        $data->area=$request->area;

        //img upload
        if($request->hasFile('profile_img'))
		{
			$file=$request->file('profile_img');  // get file
			$file_name=time() . "_profile_img." . $request->file('profile_img')->getClientOriginalExtension();// make file name
			$file->move('upload/doctor',$file_name); //file name move upload in public		
			$data->profile_img=$file_name; // file name store in db
			unlink('upload/doctor/'.$old_img);
		}
      
        //Hospital image upload/multi img upload

        $filesarr = [];
        if($request->hasfile('hospital_img'))
        {
            foreach($request->file('hospital_img') as $file)
            {
                $name = time().rand(111111,999999).'hospital_img.'.$file->extension();
                $file->move('upload/hospital/',$name);
                $filesarr[] = $name;
                
            }
            $data->hospital_img=implode(",",$filesarr);
        }

         // visiting card upload
         if($request->hasFile('visit_card'))
         {
            $file3=$request->file('visit_card');  // get file
            $file_name3=time()."_visit_card_img.".$request->file('visit_card')->getClientOriginalExtension();// make file name
            $file3->move('upload/visitingcard',$file_name3); //file name move upload in public		
            $data->visit_card=$file_name3; // file name store in db
            unlink('upload/visitingcard/'.$old_img3);
         }

        $data->save();
		return redirect('/admin-doctor')->with('success','Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    

    public function destroy($id)
    {
        $data=doctor::find($id);
		$data->delete();
		return redirect('admin-doctor')->with("success","Doctor deleted successfully");
    }

////////////////////////doctor panel///////////////////////////////////////////////////////////////////
public function login(Request $request)
    {
        return view('doctor.login');
    }

    public function doctorlogin(Request $request)
    {
        $data=doctor::where("email","=",$request->email)->first();
        if($data)
        {
            if(Hash::check($request->password, $data->password))
            {
                $doctor_status=$data->doctor_status;
                if($doctor_status=="Unblock")
                {
                    $request->Session()->put('doctor_id',$data->id);
                    $request->Session()->put('email',$data->email);
                    return redirect('/doctor-dashboard');

                }
                else
                {
                    return redirect('/doctor')->with('fail','Login Failed due to Blocked Doctor');
                }
            }
            else
            {
                return redirect('/doctor')->with('fail','Login Failed due to Wrong Password');
            }

        }
        else
       {
        return redirect('/doctor')->with('fail','Login Failed due to Wrong doctor');
       }
    }

    public function doctorlogout()
    {
        Session()->pull('doctor_id');
        Session()->pull('email');
        return redirect('/doctor');
    }

    public function editdoctor()
    {
        $data=doctor::where("id","=",session('doctor_id'))->first();
        $special_id_arr=specialist::all();
        $state_id_arr=state::all();
        $city_id_arr=citie::all();
        $area_id_arr=area::all();
        return view('doctor.doctor-profile-settings',["fetch"=>$data,"special_id_arr"=>$special_id_arr,"state_id_arr"=>$state_id_arr,"city_id_arr"=>$city_id_arr,"area_id_arr"=>$area_id_arr]);
    }

    public function updatedoctor(Request $request, $doctor_id)
    {   
       $data=$request->validate([
            'first_name'=>'alpha',
            'last_name'=>'alpha',
            //'short_tittle'=>'required',//check
            //'email'=>'required|email|unique:doctors',
            //'gender'=>'required|in:male,female',//check
            //'password'=>'required|string|unique:doctors|min:6',
            'dob'=>'date',
            //'liacence_no'=>'required',//check
            'education'=>'regex:/[a-zA-z0-9\s]+/',
            'experience'=>'regex:/[a-zA-z0-9\s]+/',
            'hospital_name'=>'regex:/[a-zA-z0-9\s]+/',
            'dr_mobile'=>'digits:10',
            'office_no'=>'alpha_num|string',
            //'about'=>'required',
            'address'=>'max:200',
            'pincode'=>'digits:6',
            //'day'=>'required',
            'consulting_fees'=>'numeric',
            'followup_fees'=>'numeric',
            'notification'=>'max:200',
            //'specialist_id'=>'required',
            //'state'=>'required',
            //'city'=>'required',
            //'area'=>'required',
            'profile_img'=>'mimes:jpeg,png,jpg,gif',
            //'hospital_img'=>'mimes:jpeg,png,jpg,gif',
            'visit_card'=>'mimes:jpeg,png,jpg,gif',

        ]);

        $data=doctor::where("id","=",session('doctor_id'))->first();
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->short_tittle=$request->short_tittle;
        $data->gender=$request->gender;
        $data->dob=$request->dob;
        $data->liacence_no=$request->liacence_no;
        $data->education=$request->education;
        $data->experience=$request->experience;
        $data->hospital_name=$request->hospital_name;
        $data->dr_mobile=$request->dr_mobile;
        $data->office_no=$request->office_no;
        $data->about=$request->about;
        $data->address=$request->address;
        $data->pincode=$request->pincode;
        $data->google_map=$request->google_map;
        $data->day=implode(",",$request->day);
        $data->hospital_morning_to=$request->hospital_morning_to;
        $data->hospital_morning_from=$request->hospital_morning_from;
        $data->hospital_afternoon_to=$request->hospital_afternoon_to;
        $data->hospital_afternoon_from=$request->hospital_afternoon_from;
        $data->hospital_evening_to=$request->hospital_evening_to;
        $data->hospital_evening_from=$request->hospital_evening_from;
        $data->consulting_fees=$request->consulting_fees;
        $data->followup_fees=$request->followup_fees;
        $data->notification=$request->notification;
       // $old_img=$data->profile_img;
        $old_img2=$data->hospital_img;
        $old_img3=$data->visit_card;

        $data->specialist_id=$request->specialist_id ;
        $data->state=$request->state;
        $data->city=$request->city;
        $data->area=$request->area;

        //img upload
        if($request->hasFile('profile_img'))
		{
			$file=$request->file('profile_img');  // get file
			$file_name=time() . "_profile_img." . $request->file('profile_img')->getClientOriginalExtension();// make file name
			$file->move('upload/doctor',$file_name); //file name move upload in public		
			$data->profile_img=$file_name; // file name store in db
			//unlink('upload/doctor/'.$old_img);
		}
         // hospital upload
         $filesarr = [];
        if($request->hasfile('hospital_img'))
        {
            foreach($request->file('hospital_img') as $file)
            {
                $name = time().rand(1000,9999).'hospital_img.'.$file->extension();
                $file->move('upload/hospital/',$name);
                $filesarr[] = $name;
                
            }
            $data->hospital_img=implode(",",$filesarr);
        }
         // visiting card upload
         if($request->hasFile('visit_card'))
         {
            $file3=$request->file('visit_card');  // get file
            $file_name3=time()."_visit_card_img.".$request->file('visit_card')->getClientOriginalExtension();// make file name
            $file3->move('upload/visitingcard',$file_name3); //file name move upload in public		
            $data->visit_card=$file_name3; // file name store in db
            unlink('upload/visitingcard/'.$old_img3);
         }

        $data->save();
		return redirect('/editdoctor')->with('success','Update Success');
    }
//////////////////////////Company panel////////////////////////////////////////////////////////////

public function companydoctorindex()
{
    $data=doctor::all();
    return view('company.doctor-list',["companydoctor_arr"=>$data]);
}

//////////////////////////Company panel////////////////////////////////////////////////////////////

public function managerdoctorindex()
{
    $data=doctor::all();
    return view('manager.doctor-list',["companydoctor_arr"=>$data]);
}

////////////////////////Patient Panel//////////////////////////////////////////////////////////
    public function doctorlist()
    {
        $data=doctor::all();
		return view('patient.search',["doctorlist_arr"=>$data]);
    }

    public function doctorview($id)
    {
        $data=doctor::find($id);
        $doctor_id=$data->id;
        $servicelist_arr=service::where('doctor_id','=',$doctor_id)->get();
        $special_arr=drspecialitie::where('doctor_id','=',$doctor_id)->get();
        return view('patient.doctor-profile',["fetch"=>$data,"servicelist_arr"=>$servicelist_arr,"special_arr"=>$special_arr]);
    }

} 