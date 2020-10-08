<?php

namespace App\Http\Controllers;

use App\Title;
use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
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
        // ログイン中のユーザーのタイトルテーブルを取得
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
        // ログイン中のユーザーのタイトルテーブルを取得
        $titles = Auth::user()->titles()->get();
        return view('admin.task.addTitle', [
            'titles' => $titles,
        ]);
    }

    
    public function create(Request $request)
    {   
        $this ->validate($request, ['title' =>'required']);
        $title = new Title;     
        $form = $request->all();
        unset($form['_token']);
        $title->user_id = Auth::id();
        $title->fill($form)->save();
        
        return redirect('/admin/task');
    }
    
    public function delete(Request $request)
    {   
        $content = Title::find($request->id);
        $content->delete();
        
        return redirect('/admin/task');
    }

    public function editTitle(Request $request)
    {
        // ログイン中のユーザーのタイトルテーブルを取得
        $titles = Auth::user()->titles()->get();
        $currentTitle = Title::find($request->id);
        // dd($currentTitle);
        return view('admin.task.editTitle', [
            'titles' => $titles,
            'currentTitle' => $currentTitle,
        ]);
    }
    
    public function addheading(int $id, Request $request)
    {
        // ログイン中のユーザーのタイトルテーブルを取得
        $titles = Auth::user()->titles()->get();
        $currentTitle = Title::find($request->id);
        $testcontents = Content::all();
        return view('admin.task.addheading', [
            'titles' => $titles,
            'currentTitle' => $currentTitle,
            'testcontents' => $testcontents,
        ]);
    }
}

