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
        $titles = Title::all();
        $current_title = Title::find($id);   
        $contents = Content::where('title_id', $current_title->id)->get();

        return view('admin.task', [
            'titles' => $titles,
            'contents' => $contents,
            ]);
    }
    

    public function create(Request $request)
    {   
        $title = new Title;     
        $form = $request->all();
        unset($form['_token']);
        $title->fill($form)->save();

        // $content = new Content;
        // $form = $request->all();
        // unset($form['_token']);
        // $current_title = Title::find($id);
        // $current_title->content->save($content);

        
        // public function create(Request $request)
        // {   
            
        //     $title = new Title;
        //     $title->title = $request->title;
        //     $title->save();

        //     $content = new Content;
        //     $content->heading = $request->heading;
        //     $content->body = $request->body;
        //     $current_title = Title::find($id);
        //     $content_title->contents()->save($content);
            
        //     return redirect('/');
        // // }
        
    
        return redirect('/admin/task/1');
    }
}

