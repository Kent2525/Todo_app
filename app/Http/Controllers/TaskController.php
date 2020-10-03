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

    public function show($id) 
    {
    }

    // モーダルでの保存処理
    public function update(Request $request, $id) 
    {
        $request->validate([
            'heading' => 'required',
            'content' => 'required',
        ]);
        $title_id = $request->input('title_id');
        $content = Content::find($id);
        $content->heading = $request->input('heading');
        $content->body = $request->input('content');
        $content->title_id = $title_id;
        $content->save();
        return back();
    }

    public function delete($id) {
        Content::destroy($id);
        return back();
    }
}
