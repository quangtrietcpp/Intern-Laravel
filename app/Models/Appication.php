<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;



class Application extends BaseModel
{
    use SoftDeletes;
    protected $table = 'applications';
    protected $perPage = 10;
    protected $dates = [
        'deleted_at'
    ];
    protected $fillable = [
        'job_id',
        'Application_id',
        'message',
    ];

    public static function getList()
    {
        return Application::all();
    }
    public function get($applicationId)
    {
        return Application::select('id', 'job_id', 'Application_id', 'message', 'created_at', 'updated_at');
        where ('id', $applicationId);
    }

    public function createApplication($data)
    {
        return Application::create($data);
        return Application::insert($data);
    }

    public function updateApplication($applicationId, $data)
    {
        return Application::where('id', $applicationId)
              ->update($data);
    }

    public function deleteApplication($applicationId)
    {
        return Application::destroy($applicationId);
    }
}
