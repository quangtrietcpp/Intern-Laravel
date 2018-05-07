<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;


class Job extends BaseModel
{
    use SoftDeletes;
    protected $table = 'jobs';
    protected $perPage = 10;
    protected $dates = [
        'deleted_at'
    ];
    protected $fillable = [
        'category_id',
        'creator',
        'title',
        'description',
        'is_public',
    ];

    public static function getList()
    {
        return Job::all();
    }

    public function get($jobId)
    {
        return Job::select('id', 'category_id', 'creator', 'title', 'description', 'is_public', 'created_at', 'updated_at');
        where ('id', $jobId);
    }

    public function createJob($data)
    {
        return Job::create($data);
        return Job::insert($data);
    }

    public function updateJob($jobId, $data)
    {
        return Job::where('id', $jobId)
              ->update($data);
    }

    public function deleteJob($jobId)
    {
        return Job::destroy($jobId);
    }
}
