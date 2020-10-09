<?php

namespace App\Http\Controllers;

use App\Title;
use App\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function edit(Request $request)
    {   
        $this ->validate($request, ['heading' =>'required']);
        $content = Content::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $content->fill($form)->save(); 
        dd($form);      
        return back();
    }

    public function delete(Request $request)
    {   
        $content = Content::find($request->id);
        $content->delete();
        return back();
    }
}
