<?php

namespace App\Http\Controllers;

use App\Models\CategoryModel;
use Auth;
use App\Models\User;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $data['active_class']='category';
        $data['getRecord'] = CategoryModel::getRecord();
        return view('backend.category.list',$data);
    }

    public function add_category()
    {
        $data['active_class']='category';
        return view('backend.category.add',$data);
    }

    public function insert_category(Request $request)
    {
        request()->validate([
            'name'=>'required',
            'title'=>'required',
            'slug'=>'required',
            'meta_title'=>'required',
            'meta_description'=>'required',
            'meta_keywords'=>'required'

        ]);

        $save= new CategoryModel;
        $save->name =trim($request->name);
        $save->slug =trim($request->slug);
        $save->title =trim($request->title);
        $save->meta_title =trim($request->meta_title);
        $save->meta_description =trim($request->meta_description);
        $save->meta_keywords =trim($request->meta_keywords);
        $save->status =trim($request->status);
        $save->save();
        return redirect('panel/category/list')->with('success','Category Successfully Added!');

    }

    public function delete_category($id)
    {
        $save = CategoryModel::getsingle($id);
        $save->is_delete = 1;
        $save->save();
        return redirect('panel/category/list')->with('success','Category Successfully Deleted!');
    }

    public function edit_category($id)
    {
        $data['active_class']='category';
        $data['getRecord'] = CategoryModel::getSingle($id);
        return view('backend.category.edit',$data);
    }
    public function update_category($id,Request $request)
    {
        request()->validate([
            'name'=>'required',
            'title'=>'required',
            'slug'=>'required',
            'meta_title'=>'required',
            'meta_description'=>'required',
            'meta_keywords'=>'required'

        ]);

        $save= CategoryModel::getSingle($id);
        $save->name =trim($request->name);
        $save->slug =trim($request->slug);
        $save->title =trim($request->title);
        $save->meta_title =trim($request->meta_title);
        $save->meta_description =trim($request->meta_description);
        $save->meta_keywords =trim($request->meta_keywords);
        $save->status =trim($request->status);
        $save->save();
        return redirect('panel/category/list')->with('success','Category Successfully Updated!');

    }
}
