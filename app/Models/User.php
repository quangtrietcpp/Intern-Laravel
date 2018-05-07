<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends BaseModel
{
    use SoftDeletes;
    protected $table = 'users';
    protected $perPage = 10;
    protected $dates = [
        'deleted_at'
    ];
    protected $fillable = [
        'username',
        'email',
        'password',
        'skills',
    ];

    public static function getList()
    {
        return User::all();
    }
    public function get($userId)
    {
        return User::select('id', 'username', 'email', 'skills', 'created_at', 'updated_at');
        where ('id', $userId);
    }

    public function createUser($data)
    {
        return User::create($data);
        return User::insert($data);
    }

    public function updateUser($userId, $data)
    {
        return User::where('id', $userId)
              ->update($data);
    }

    public function deleteUser($userId)
    {
        return User::destroy($userId);
    }
}
