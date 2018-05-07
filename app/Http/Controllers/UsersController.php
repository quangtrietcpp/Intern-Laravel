<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller as AppController;
use App\Models as Database;

class UsersController extends AppController
{
    public function create()
    {
        return view('users.create');
    }
}
