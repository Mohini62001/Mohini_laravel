<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productadv;
use App\Models\categorie;
use Hash;

class productadv_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=productadv::all();
		return view('Backend.Admin.manageproduct',["product_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_id_arr=categorie::all();
        return view('Backend.Admin.addproduct',["category_id_arr"=>$category_id_arr]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new productadv;
	
		// img upload
		$file=$request->file('img');  // get file
		$file_name=time() . "_img." . $request->file('img')->getClientOriginalExtension();// make file name
		$file->move('upload/product',$file_name); //file name move upload in public		
		$data->img=$file_name; // file name store in db
		
		$data->productname=$request->productname;
		$data->productprice=$request->productprice;
		$data->description=$request->description;
		$data->productlink=$request->productlink;
		
		$data->cate_id=$request->cate_id;
	
		$res=$data->save();
		return redirect('/addproduct')->with('success','Add Product Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=productadv::all();
		return view('Frontend.shop-2',["front_arr"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editpro($id)
    {
        $data=productadv::find($id);
		$category_id_arr=categorie::all();
		return view('Backend.Admin.editproduct',["fetch"=>$data,"category_id_arr"=>$category_id_arr]);
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
        $data=productadv::find($id);
		$old_img=$data->img;
		$data->productname=$request->productname;
		$data->productprice=$request->productprice;
		$data->description=$request->description;
		$data->productlink=$request->productlink;
		$data->cate_id=$request->cate_id;
		
		// img upload
		if($request->hasFile('img'))
		{
			$file=$request->file('img');  // get file
			$file_name=time() . "_img." . $request->file('img')->getClientOriginalExtension();// make file name
			$file->move('upload/product',$file_name); //file name move upload in public		
			$data->img= $file_name; // file name store in db
			unlink('upload/product',$old_img);
		}
		
		$data->save();
		return redirect('/manageproduct')->with('success','Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=productadv::find($id);
		$data->delete();
		return redirect('admin-manageproduct')->with("success","Product deleted successfully");
    }
}
