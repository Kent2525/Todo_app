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
        $title_posts = Title::all();
        // ひとまず初期表示は、title_idが1のコンテントにする
        $heading_posts = Content::where('title_id', 1)->get();
        return view('admin.task', ['title_posts' => $title_posts, 'heading_posts' => $heading_posts]);
    }

    // admin/title/3のようなURLにアクセスした際にそのidに対応したContentsを表示する
    public function show($id) 
    {
        $title_posts = Title::all();
        $heading_posts = Content::where('title_id', $id)->get();
        return view('admin.task', ['title_posts' => $title_posts, 'heading_posts' => $heading_posts]);
    }
}
