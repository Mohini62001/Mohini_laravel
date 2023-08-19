<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\categorie;
use Alert;

class product_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=product::all();
        return view('Admin.manage_product',["product_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate_id_arr=categorie::all();
        return view('Admin.add_product',["cate_id_arr"=>$cate_id_arr]);
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
            'product_name' => 'required',
            'url' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'keywords' => 'required',
            'cate_id' => 'required',
            'product_name_fr' => 'required',
            'meta_title_fr' => 'required',
            'meta_description_fr' => 'required',
            'keywords_fr' => 'required',
            'child_cate_id' => 'required|same:cate_id',
            'product_img' => 'required',
            
        
        ]);
        $data=new product;
        $data->product_name=$request->product_name;
        $data->url=$request->url;
        $data->meta_title=$request->meta_title;
        $data->meta_description=$request->meta_description;
        $data->keywords=$request->keywords;
        $data->cate_id=$request->cate_id;
        $data->product_name_fr=$request->product_name_fr;
        $data->meta_title_fr=$request->meta_title_fr;
        $data->meta_description_fr=$request->meta_description_fr;
        $data->keywords_fr=$request->keywords_fr;

        // product_img upload
		$file=$request->file('product_img');  
		$file_name=time()."_product_img.".$request->file('product_img')->getClientOriginalExtension();
		$file->move('Admin/upload/product',$file_name); 		
		$data->product_img=$file_name;

        $res=$data->save();
        Alert::success('Done', 'You\'ve Successfully Add Product');
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
        $data=product::find($id);
        $cate_id_arr=categorie::all();
        return view('Admin.edit_product',["fetch"=>$data,"cate_id_arr"=>$cate_id_arr]);
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
        $data=product::find($id);
        $data->product_name=$request->product_name;
        $data->url=$request->url;
        $data->meta_title=$request->meta_title;
        $data->meta_description=$request->meta_description;
        $data->keywords=$request->keywords;
        $data->cate_id=$request->cate_id;
        $data->product_name_fr=$request->product_name_fr;
        $data->meta_title_fr=$request->meta_title_fr;
        $data->meta_description_fr=$request->meta_description_fr;
        $data->keywords_fr=$request->keywords_fr;
        $old_img=$data->product_img;
        
        // img upload
        if($request->hasFile('product_img'))
		{
            $file=$request->file('product_img');  
            $file_name=time()."_product_img.".$request->file('product_img')->getClientOriginalExtension();
            $file->move('Admin/upload/product',$file_name); 		
            $data->product_img=$file_name;
            //unlink('Admin/upload/product/'.$old_img);
        }

        $data->save();
        Alert::success('Done', 'You\'ve Successfully Update Product');
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
        $data=product::find($id);
        $data->delete();

        
        Alert::success('Done', 'You\'ve Successfully Delete Product');
        return back();
    }
}
