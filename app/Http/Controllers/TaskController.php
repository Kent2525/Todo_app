<?php

namespace App\Http\Controllers;

use App\Title;
use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function add()
    {
        return view('admin.task');  
    }//

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
        // dd($testcontents);
        return view('admin.task.show', [
            'titles' => $titles,
            'currentTitle' => $currentTitle,
            'testcontents' => $testcontents,
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
        
        // public function create(Request $request)
        // {   
            
        //     $title = new Title;
        //     $title->title = $request->title;
        //     $title->save();
        // }
    
        return redirect('/admin/task');
    }

    public function delete(Request $request)
    {   
        $content = Title::find($request->id);
        $content->delete();
        
        return redirect('/admin/task');
    }
}

