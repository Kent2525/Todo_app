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
            'current_title_id' => $id,
            'contents' => $contents,
            ]);
    }

    public function create(int $id, Request $request)
    {   
        $current_title = Title::find($id);
        
        $content = new Content;
        $content->heading = $request->heading;
        $content->body = $request->body;
        
        $current_title->contents()->save($content);
        
        return redirect()->route('admin.task', [
            'id' => $current_title ->id,
        ]);  
    }//

    public function edit(int $id, Request $request)
    {   
        return redirect()->route('admin.task');
    }//
}
