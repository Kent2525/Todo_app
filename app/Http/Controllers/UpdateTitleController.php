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

    public function update(Request $request)
    {   
        $this ->validate($request, ['title' =>'required']);
        $title = Title::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $title->fill($form)->save();
        
        return redirect('/admin/task');
    }
}
