<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller as AppController;
use App\Models as Database;

class CategoriesController extends AppController
{
    public function index()
    {
        $categoryItems = Database\Category::getList();
        return view('jobs.create', compact('categoryItems'));
    }
}
