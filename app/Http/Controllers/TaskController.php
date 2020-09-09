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

    public function index(int $id)
    {
        $title_posts = Title::all();
        $heading_posts = Content::all();
        return view('admin.task', ['title_posts' => $title_posts, 'heading_posts' => $heading_posts, 'current_title_id' => $id,]);
    }
}
