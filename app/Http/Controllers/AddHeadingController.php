<?php

namespace App\Http\Controllers;

use App\Title;
use App\Content;
use Illuminate\Http\Request;

class AddHeadingController extends Controller
{
    public function add()
    {
        return view('admin.task');  
    }//

    public function create(Request $request)
    {   
        $this ->validate($request, Content::$rules);
        $current_title = Title::find($request->id);
        $content = new Content();
        $content->heading = $request->heading;
        $current_title->contents()->save($content);

        // $content = Content::find($request->id);
        // $form = $request->all();
        // unset($form['_token']);
        // $content->fill($form)->save();
        
        return redirect('/admin/task');
    }
}

