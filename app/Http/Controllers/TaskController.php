<?php

namespace App\Http\Controllers;

use App\Title;
use App\Content;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function add()
    {
        return view('admin.task');  
    }//

    public function index()
    {
        $posts1 = Title::all();
        $posts = Content::all();
        return view('admin.task', ['posts' => $posts]);
    }
}
