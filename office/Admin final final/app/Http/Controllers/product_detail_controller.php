<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_detail;
use App\Models\product;
use Alert;

class product_detail_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data=product_detail::where('product_id','=',$id)->get();
        return view('Admin.manage_product_child',["product_child_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data=product::find($id);
        return view('Admin.add_product_child',["fetch"=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $data=$request->validate([
            'color' => 'required',
            'color_fr' => 'required',
            'size' => 'required',
            'pro_img' => 'required',
           
        ]);
        $data=product::find($id);
        $data=new product_detail;
        $data->product_id=$id;
        $data->color=$request->color;
        $data->color_fr=$request->color_fr;
        $data->size=$request->size;

        // images upload
		$file=$request->file('pro_img');  
		$file_name=time()."_pro_img.".$request->file('pro_img')->getClientOriginalExtension();
		$file->move('Admin/upload/product/product_child',$file_name); 		
		$data->pro_img=$file_name;

        $res=$data->save();
        Alert::success('Done', 'You\'ve Successfully Add Product Datails');
        return redirect('/product/manage_product');
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
        $data=product_detail::find($id);
        return view('Admin.edit_product_child',["fetch"=>$data]);
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
       $data=product_detail::find($id);
        $data->product_id=$request->product_id;
        $data->color=$request->color;
        $data->color_fr=$request->color_fr;
        $data->size=$request->size;
        $old_img=$data->image;

        // img upload
        if($request->hasFile('pro_img'))
		{
            $file=$request->file('pro_img');  
            $file_name=time()."_pro_img.".$request->file('pro_img')->getClientOriginalExtension();
            $file->move('Admin/upload/product/product_child',$file_name); 		
            $data->pro_img=$file_name;
            //unlink('Admin/upload/product/product_child/'.$old_img);
        }

        $data->update();
        Alert::success('Done', 'You\'ve Successfully Update Product Datails');
        return redirect('/product/manage_product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=product_detail::find($id);
        $data->delete();
        Alert::success('Done', 'You\'ve Successfully Delete Product Details');
        return back();
    }
}
