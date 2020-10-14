<?php

namespace App\Http\Controllers;

use App\Title;
use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{

    public function index()
    {
        // ログイン中のユーザーのタイトルテーブルを取得
        $titles = Auth::user()->titles()->get();
        // $titles = Title::all();
        return view('admin.task.index', [
            'titles' => $titles,
        ]);
    }

    public function show(int $id)
    {
        $titles = Auth::user()->titles()->get();
        // $titles = Title::all();
        $currentTitle = Title::find($id);
        $testcontents = Content::all();
        
        return view('admin.task.show', [
            'titles' => $titles,
            'currentTitle' => $currentTitle,
            'testcontents' => $testcontents,
        ]);
    }
    
    public function addTitle()
    {
        $titles = Auth::user()->titles()->get();
        return view('admin.task.addTitle', [
            'titles' => $titles,
        ]);
    }

    
    public function delete(Request $request)
    {   
        $content = Title::find($request->id);
        $content->delete();
        
        return redirect('/todo');
    }

    public function editTitle(Request $request)
    {
        $titles = Auth::user()->titles()->get();
        $currentTitle = Title::find($request->id);
        return view('admin.task.editTitle', [
            'titles' => $titles,
            'currentTitle' => $currentTitle,
        ]);
    }
    
    public function addContent(int $id, Request $request)
    {
        $titles = Auth::user()->titles()->get();
        $currentTitle = Title::find($request->id);
        $testcontents = Content::all();
        return view('admin.task.addContent', [
            'titles' => $titles,
            'currentTitle' => $currentTitle,
            'testcontents' => $testcontents,
        ]);
    }
}
