<?php

namespace App\Http\Controllers;

use App\Title;
use App\Content;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $title_posts = Title::where('user_id', auth()->user()->id)->get();
        return view('admin.task', ['title_posts' => $title_posts]);
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'heading' => 'required',
            'content' => 'required',
        ]);
        $content = new Content;
        $content->heading = $request->input('heading');
        $content->body = $request->input('content');
        $content->title_id = $id;
        $content->save();
        return back();
    }

    // admin/task/3のようなURLにアクセスした際にそのidに対応したContentsを表示する
    public function show($id) 
    {
        $title_posts = Title::where('user_id', auth()->user()->id)->get();
        $heading_posts = Content::where('title_id', $id)->get();
        return view('admin.task', ['title_posts' => $title_posts, 'heading_posts' => $heading_posts, 'id' => $id]);
    }

    // モーダルでの保存処理
    public function update(Request $request, $id) 
    {
        $request->validate([
            'heading' => 'required',
            'content' => 'required',
        ]);
        $content = Content::find($id);
        $content->heading = $request->input('heading');
        $content->body = $request->input('content');
        $content->title_id = $id;
        $content->save();
        return back();
    }

    public function delete($id) {
        Content::destroy($id);
        return redirect('/admin');
    }
}
