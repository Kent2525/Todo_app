<?php

namespace App\Http\Controllers;

use App\Title;
use App\Content;
use Illuminate\Http\Request;

class UpdateTitleController extends Controller
{

    public function add()
    {
        return view('admin.task');  
    }//

    public function update(int $id, Request $request)
    {   
        $content = Title::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        dd($form);
        $content->fill($form)->save();
        
        return redirect('/admin/task/1');
    }
}
