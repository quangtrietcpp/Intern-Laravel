<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;



class Category extends BaseModel
{
    use SoftDeletes;
    protected $table = 'categories';
    protected $perPage = 10;
    protected $dates = [
        'deleted_at'
    ];
    protected $fillable = [
        'name',
    ];

    public static function getList()
    {
        return Category::all();
    }
    public function get($categoryId)
    {
        return Category::select('id', 'name', 'created_at', 'updated_at');
        where ('id', $categoryId);
    }

    public function createCategory($data)
    {
        return Category::create($data);
        return Category::insert($data);
    }

    public function updateCategory($categoryId, $data)
    {
        return Category::where('id', $categoryId)
              ->update($data);
    }

    public function deleteCategory($categoryId)
    {
        return Category::destroy($categoryId);
    }
}
