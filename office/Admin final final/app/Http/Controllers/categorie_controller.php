<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;
use Alert;

class categorie_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=categorie::all();
        return view('Admin.manage_category',["category_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate_arr=categorie::all();
        return view('Admin.add_category',["cate_arr"=>$cate_arr]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_category(Request $request)
    {  
         $data=$request->validate([
        'category_name' => 'required',
        'short_title' => 'required',
        'short_description' => 'required',
        'description_title' => 'required',
        'description' => 'required',
        'url' => 'required',
        'order' => 'required',
        'meta_title' => 'required',
        'meta_description' => 'required',
        'keywords' => 'required',
        'parent_id' => 'required',
        'child_id' => 'required|same:parent_id',
        'category_name_fr' => 'required',
        'short_title_fr' => 'required',
        'short_description_fr' => 'required',
        'description_title_fr' => 'required',
        'description_fr' => 'required',
        'meta_title_fr' => 'required',
        'meta_description_fr' => 'required',
        'keywords_fr' => 'required',
        'category_img' => 'required',
        'banner_img' => 'required',
        'home_cate_img' => 'required',
    
    ]);
        $data=new categorie;
        $data->category_name=$request->category_name;
        $data->short_title=$request->short_title;
        $data->short_description=$request->short_description;
        $data->description_title=$request->description_title;
        $data->description=$request->description;
        $data->url=$request->url;
        $data->order=$request->order;
        $data->meta_title=$request->meta_title;
        $data->meta_description=$request->meta_description;
        $data->keywords=$request->keywords;
        $data->parent_id=$request->parent_id;
        $data->category_name_fr=$request->category_name_fr;
        $data->short_title_fr=$request->short_title_fr;
        $data->short_description_fr=$request->short_description_fr;
        $data->description_title_fr=$request->description_title_fr;
        $data->description_fr=$request->description_fr;
        $data->meta_title_fr=$request->meta_title_fr;
        $data->meta_description_fr=$request->meta_description_fr;
        $data->keywords_fr=$request->keywords_fr;
        
        // banner_img upload
        $filesarr = [];
        if($request->hasfile('category_img'))
        {
            foreach($request->file('category_img') as $file)
            {
                $name = time().rand(111111,999999).'category_img.'.$file->extension();
                $file->move('Admin/upload/category/',$name);
                $filesarr[] = $name;       
            }
            $data->category_img=implode(",",$filesarr);
        }

        // home_cate_img upload
        $filesarr = [];
        if($request->hasfile('home_cate_img'))
        {
            foreach($request->file('home_cate_img') as $file)
            {
                $name = time().rand(111111,999999).'home_cate_img.'.$file->extension();
                $file->move('Admin/upload/category/home/',$name);
                $filesarr[] = $name;       
            }
            $data->home_cate_img=implode(",",$filesarr);
        }

        // banner_img upload
        $filesarr = [];
        if($request->hasfile('banner_img'))
        {
            foreach($request->file('banner_img') as $file)
            {
                $name = time().rand(111111,999999).'banner_img.'.$file->extension();
                $file->move('Admin/upload/category/banner/',$name);
                $filesarr[] = $name;       
            }
            $data->banner_img=implode(",",$filesarr);
        }

        $res=$data->save();
        Alert::success('Done', 'You\'ve Successfully Add Category');
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
        $data=categorie::find($id);
        $cate_arr=categorie::all();
        return view('Admin.edit_category',["fetch"=>$data,"cate_arr"=>$cate_arr]);
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
        $data=categorie::find($id);
        $data->category_name=$request->category_name;
        $data->short_title=$request->short_title;
        $data->short_description=$request->short_description;
        $data->description_title=$request->description_title;
        $data->description=$request->description;
        $data->url=$request->url;
        $data->order=$request->order;
        $data->meta_title=$request->meta_title;
        $data->meta_description=$request->meta_description;
        $data->keywords=$request->keywords;
        $data->parent_id=$request->parent_id;
        $data->category_name_fr=$request->category_name_fr;
        $data->short_title_fr=$request->short_title_fr;
        $data->short_description_fr=$request->short_description_fr;
        $data->description_title_fr=$request->description_title_fr;
        $data->description_fr=$request->description_fr;
        $data->meta_title_fr=$request->meta_title_fr;
        $data->meta_description_fr=$request->meta_description_fr;
        $data->keywords_fr=$request->keywords_fr;

        //category_img
        $filesarr = [];
        if($request->hasfile('category_img'))
        {
            foreach($request->file('category_img') as $file)
            {
                $name = time().rand(111111,999999).'category_img.'.$file->extension();
                $file->move('Admin/upload/category/',$name);
                $filesarr[] = $name;
                
            }
            $data->category_img=implode(",",$filesarr);
        }

        //home_cate_img
        $filesarr = [];
        if($request->hasfile('home_cate_img'))
        {
            foreach($request->file('home_cate_img') as $file)
            {
                $name = time().rand(111111,999999).'home_cate_img.'.$file->extension();
                $file->move('Admin/upload/category/home/',$name);
                $filesarr[] = $name;
                
            }
            $data->home_cate_img=implode(",",$filesarr);
        }

        //banner_img
        $filesarr = [];
        if($request->hasfile('banner_img'))
        {
            foreach($request->file('banner_img') as $file)
            {
                $name = time().rand(111111,999999).'banner_img.'.$file->extension();
                $file->move('Admin/upload/category/banner/',$name);
                $filesarr[] = $name;
                
            }
            $data->banner_img=implode(",",$filesarr);
        }

        $data->save();
        Alert::success('Done', 'You\'ve Successfully Update Category');
		return redirect('/category/manage_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=categorie::find($id);
        $data->delete();
        Alert::success('Done', 'You\'ve Successfully Delete Catyegory');
        return back();
    }
}
