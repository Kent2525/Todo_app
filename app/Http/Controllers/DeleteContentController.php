<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteContentController extends Controller
{
    public function add()
    {
        return view('admin.task');  
    }

    public function delete(Request $request)
    {   
        $content = Content::find($request->id);
        $content->delete();
        
        return redirect('/admin/task/1');
    }

}
