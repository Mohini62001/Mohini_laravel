<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\faq;
use Alert;

class faq_controller extends Controller
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
        $data=faq::all();
        return view('Admin.faq',["faq_arr"=>$data]);  
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
            'Title' => 'required',
            'Answer' => 'required',
            
        ]);
        $data=new faq;
        $data->Title=$request->Title;
        $data->Answer=$request->Answer;

        $res=$data->save();
        Alert::success('Done', 'You\'ve Successfully Add FAQ');
        return back();
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
        $data=faq::find($id);
        return view('Admin.edit_faq',["fetch"=>$data]);
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
        $data=faq::find($id);
        $data->Title=$request->Title;
        $data->Answer=$request->Answer;

        $data->save();
        return redirect('/faq');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=faq::find($id);
        $data->delete();
        Alert::success('Done', 'You\'ve Successfully Delete FAQ');
        return back();
    }
}
