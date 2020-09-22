<?php

namespace App\Http\Controllers;

use App\Title;
use App\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function add()
    {
        return view('admin.task');  
    }//

    public function update(Request $request)
    {   
        $this ->validate($request, Content::$rules);
        $content = Content::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $content->fill($form)->save();
        
        return redirect('/admin/task');
    }

    public function delete(Request $request)
    {   
        $content = Content::find($request->id);
        $content->delete();
        
        return redirect('/admin/task');
    }
}
