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
        $title_posts = Title::where('user_id', auth()->user()->id)->get();

        // ひとまず初期表示は、title_idが1のコンテントにする
        $heading_posts = Content::where('title_id', 1)->get();
        return view('admin.task', ['title_posts' => $title_posts, 'heading_posts' => $heading_posts]);
    }

    // admin/title/3のようなURLにアクセスした際にそのidに対応したContentsを表示する
    public function show($id) 
    {
        $title_posts = Title::all();
        $heading_posts = Content::where('title_id', $id)->get();
        return view('admin.task', ['title_posts' => $title_posts, 'heading_posts' => $heading_posts, 'id' => $id]);
    }

    // モーダルでの保存処理
    public function store(Request $request, $id) 
    {
        $content = Content::find($id);
        $content->heading = $request->input('heading');
        $content->body = $request->input('content');
        $content->title_id = $id;
        $content->save();
        return back();
    }
}
