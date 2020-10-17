<?php

namespace App\Http\Controllers;

use App\Title;
use App\Content;
use Illuminate\Http\Request;

class AddContentController extends Controller
{
    public function create(Request $request)
    {   
        $this ->validate($request, ['heading' =>'required|max:300']);
        $current_title = Title::find($request->id);
        $content = new Content();
        $content->heading = $request->heading;
        $current_title->contents()->save($content);      
        return redirect()->route('todo.show', ['id' => $current_title->id]);
    }
}

