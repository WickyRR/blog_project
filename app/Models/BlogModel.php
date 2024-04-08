<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    use HasFactory;

    protected $table = 'blog';

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'category_id',
        'image_file',
        'description',
        'meta_keywords',
        'meta_description',
        'is_published',
        'status',
        'is_delete',

    ];
    static public function getRecords()
    {
        return self::select('blog.*','users.name as user_name','category.name as category_name')
            ->join('users','users.id','=','blog.user_id')
            ->join('category','category.id','=','blog.category_id')
            ->where('blog.is_delete','=',0)
            ->orderBy('blog.id','desc')
            ->paginate(10);

    }

    static public function getSingle($id)
    {
        return self::select('blog.*','users.name as user_name','category.name as category_name')
        ->join('users','users.id','=','blog.user_id')
        ->join('category','category.id','=','blog.category_id')
        ->where('blog.is_delete','=',0)
        ->where('blog.id','=',$id)
        ->get();
    }
}
