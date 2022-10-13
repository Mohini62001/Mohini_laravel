<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stockiest;
use App\Models\state;
use App\Models\citie;
use App\Models\area;
use App\Models\medicine;
use App\Models\companie;
use session;
use Alert;
use Exception;

class stockiest_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //////////////////////////////////////admin/////////////////////////////////////////////////
    public function index()
    {
        $data=stockiest::join('companies','companies.id','=','stockiests.company_id')
        ->join('areas','areas.id','=','stockiests.area')
        ->get(['companies.company_name','areas.area_name','stockiests.*']);
        return view('admin.stockiest',["stockiest_arr"=>$data]);
    }

/////////////////////////////////doctor/////////////////////////////////////////////////////////

public function allstockiest(Request $request)
    {
        $all_medicine=medicine::orderBy('medicine_name','ASC')->get();
        $city_arr=citie::orderBy('city_name', 'ASC')->get();

        $medicine_name=$request->medicine_name;
        $city_name=$request->city_name;
        if($medicine_name!="" && $city_name!="")
        {
            $company_data=companie::join('medicines','medicines.company_id','=','companies.id')
            ->where('medicines.medicine_name','=',$medicine_name)->first();
            $company_id=$company_data->company_id;
            $city_data=citie::where('city_name','=',$city_name)->first();
            $city_id=$city_data->id;
            $data=stockiest::join('companies','companies.id','=','stockiests.company_id')
            ->join('cities','cities.id','=','stockiests.city')
            ->where('stockiests.company_id','=',$company_id)
            ->where('stockiests.city','=',$city_id)
            ->get(['companies.company_name','cities.city_name','stockiests.*']);
        }
        elseif($medicine_name!="")
        {
            $company_data=companie::join('medicines','medicines.company_id','=','companies.id')
            ->where('medicines.medicine_name','=',$medicine_name)->first();
           $company_id=$company_data->company_id;
           
            $data=stockiest::join('companies','companies.id','=','stockiests.company_id')
            ->join('cities','cities.id','=','stockiests.city')
            ->where('stockiests.company_id','=',$company_id)
            ->get(['companies.company_name','cities.city_name','stockiests.*']);
        }
        elseif($city_name!="")
        {
            
            $city_data=citie::where('city_name','=',$city_name)->first();
            $city_id=$city_data->id;
            $data=stockiest::join('companies','companies.id','=','stockiests.company_id')
            ->join('cities','cities.id','=','stockiests.city')
            ->where('stockiests.city','=',$city_id)
            ->get(['companies.company_name','cities.city_name','stockiests.*']);
        }
        else
        {
            $data=stockiest::join('companies','companies.id','=','stockiests.company_id')
            ->join('cities','cities.id','=','stockiests.city')
            ->get(['companies.company_name','cities.city_name','stockiests.*']);
          
        }
        
        return view('doctor.company-find',["alltockiest_arr"=>$data,"all_medicine"=>$all_medicine
        ,"city_arr"=>$city_arr]);

       
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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

    //////////////////////////////////////company panel//////////////////////////
    public function companystockiestindex()
    {
        $data=stockiest::join('cities','cities.id','=','stockiests.city')
        ->where('company_id','=',Session('company_id'))->get(['cities.city_name','stockiests.*']);
        return view('company.stockiest',["stockiest_arr"=>$data]);
    }

    public function companystockiescreate()
    {
        $state_id_arr=state::all();
        $city_id_arr=citie::all();
        $area_id_arr=area::all();
        return view('company.add-stockiest',["state_id_arr"=>$state_id_arr,"city_id_arr"=>$city_id_arr,"area_id_arr"=>$area_id_arr]);
    }

    public function companystockieststore(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'state'=>'required',
            'city'=>'required',
            'area'=>'required',
            'mobile_no'=>'required|digits:10',
            'address'=>'required',
            'pincode'=>'required|numeric|digits:6',
        ]);
        $data=new stockiest;
        $data->company_id=Session('company_id');
        $data->name=$request->name;
        $data->state=$request->state;
        $data->city=$request->city;
        $data->area=$request->area;
        $data->mobile_no=$request->mobile_no;
        $data->address=$request->address;
        $data->pincode=$request->pincode;

        $res=$data->save();
        Alert::success('Done', 'You\'ve Successfully Add Stockiest');
        return redirect('company-add-stockiest');

    }

    ///////////////////////////////////////////manager panel////////////////////////////////////////

    public function managerstockiestindex()
    {
        $data=stockiest::join('cities','cities.id','=','stockiests.city')
        ->where('manager_id','=',Session('manager_id'))->get(['cities.city_name','stockiests.*']);
        return view('manager.stockiest',["stockiest_arr"=>$data]);
    }

    public function managerstockiescreate()
    {
        $state_id_arr=state::all();
        $city_id_arr=citie::all();
        $area_id_arr=area::all();
        return view('manager.add-stockiest',["state_id_arr"=>$state_id_arr,"city_id_arr"=>$city_id_arr,"area_id_arr"=>$area_id_arr]);
    }

    public function managerstockieststore(Request $request)
    {
        $data=$request->validate([
            'name'=>'required',
            'state'=>'required',
            'city'=>'required',
            'area'=>'required',
            'mobile_no'=>'required|digits:10',
            'address'=>'required',
            'pincode'=>'required|numeric|digits:6',
        ]);
       $data=new stockiest;
       $data->manager_id=Session('manager_id');
       $data->company_id=Session('manager_company_id');
       $data->name=$request->name;
       $data->state=$request->state;
       $data->city=$request->city;
       $data->area=$request->area;
       $data->mobile_no=$request->mobile_no;
       $data->address=$request->address;
       $data->pincode=$request->pincode;

       $res=$data->save();
       Alert::success('Done', 'You\'ve Successfully Add Stockiest');
       return redirect('manager-add-stockiest');

    }


///////////////////////////////////////////mr panel////////////////////////////////////////

public function mrstockiestindex()
{
    $data=stockiest::where('mr_id','=',Session('mr_id'))->get();
    return view('mr.stockiest',["stockiest_arr"=>$data]);
}

public function mrstockiescreate()
{
    $state_id_arr=state::all();
    $city_id_arr=citie::all();
    $area_id_arr=area::all();
    return view('mr.add-stockiest',["state_id_arr"=>$state_id_arr,"city_id_arr"=>$city_id_arr,"area_id_arr"=>$area_id_arr]);
}

public function mrstockieststore(Request $request)
{
    $data=$request->validate([
        'name'=>'required',
        'state'=>'required',
        'city'=>'required',
        'area'=>'required',
        'address'=>'required',
        'pincode'=>'required|numeric|digits:6',
    ]);
   $data=new stockiest;
   $data->mr_id=Session('mr_id');
   $data->company_id=Session('mr_company_id');
   $data->name=$request->name;
   $data->state=$request->state;
   $data->city=$request->city;
   $data->area=$request->area;
   $data->address=$request->address;
   $data->pincode=$request->pincode;

   $res=$data->save();
   Alert::success('Done', 'You\'ve Successfully Add Stockiest');
   return redirect('mr-add-stockiest');

}
}
