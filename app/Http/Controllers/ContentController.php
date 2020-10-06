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
        $this ->validate($request, ['heading' =>'required']);
        $content = Content::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $content->fill($form)->save();
        
        return back();
    }

    public function delete(int $id)
    {   
        $content = Content::find($id);
        // dd($id);
        $content->delete();
        
        return back();
    }
}
