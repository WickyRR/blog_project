<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table = 'category';

    protected $fillable = [
        'name',
        'slug',
        'title',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'status',

    ];
    static public function getRecord()
    {
        return self::select('category.*')
        ->where('is_delete','=',0)
        ->orderBy('id','desc')
        ->paginate(10);
    }
    static function getSingle($id)
    {
        return self::find($id);
    }

    static public function getCategory()
    {
        return self::select('category.*')
        ->where('status','=',1)
        ->where('is_delete','=',0)
        ->orderBy('id','desc')
        ->get();

    }
}
