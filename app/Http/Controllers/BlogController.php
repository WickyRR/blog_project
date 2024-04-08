<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\BlogModel;
use App\Models\CategoryModel;
use Illuminate\Http\Request;
use Auth;
use Str;
class BlogController extends Controller
{
    public function blog()
    {
        $data['active_class'] = 'blog';
        $data['getRecord'] = BlogModel::getRecords();

        return view('backend.blog.list',$data);

    }
    public function add_blog()
    {
        $data['getCategory'] = CategoryModel::getCategory();
        $data['active_class'] = 'blog';
        return view('backend.blog.add',$data);
    }

    public function insert_blog(Request $request)
    {

        $save = new BlogModel;
        $save->user_id = Auth::user()->id;
        $save->title = trim($request->title);
        $save->category_id = trim($request->category_id);
        $save->description = trim($request->description);
        $save->meta_description = trim($request->meta_description);
        $save->meta_keywords = trim($request->meta_keywords);
        $save->is_published = trim($request->is_published);
        $save->status = trim($request->status);

        $slug = Str::slug($request->title);

        $checkSlug = BlogModel::where('slug','=',$slug)->first();
        if(!empty($checkSlug))
        {
            $dbslug = $slug.'_'.$save->id;
        }
        else
        {
            $dbslug = $slug;
        }
        $save->slug = $dbslug;

        if(!empty($request->file('image_file')))
        {
            $ext = $request->file('image_file')->getClientOriginalExtension();
            $file =  $request->file('image_file');
            $filename = $dbslug.'.'.$ext;
            $file->move('uploads/images/',$filename);
            $save->image_file = $filename;
        }

        $save->save();
        return redirect('panel/blog/list')->with('success','Post Successfully Created!');

    }

    public function edit_blog($id)
    {
        $data['getRecord']= BlogModel::getSingle($id);
        $data['getCategory'] = CategoryModel::getCategory();
        return view('backend.blog.edit',$data);

    }

    public function update_blog($id,Request $request)
    {

    }

    public function delete_blog($id)
    {
        $save = BlogModel::getSingle($id);
        $save->is_delete = 1;
        $save->save();

        return redirect('panel/blog/list')->with('success', "PostDeleted Successfully!");
    }
}
