<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller as AppController;
use App\Models as Database;

class JobsController extends AppController
{
    public function index()
    {
        $jobItems = Database\Job::getList();
        return view('jobs.index', compact('jobItems'));
    }
    public function find_job()
    {
        $jobItems = Database\Job::getList();
        return view('jobs.find_job', compact('jobItems'));
    }
}
