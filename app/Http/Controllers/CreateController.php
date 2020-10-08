<?php

namespace App\Http\Controllers;

use App\Title;
use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CreateController extends Controller
{
    public function add()
    {
        return view('admin.create');  
    }//

    public function create(Request $request)
    {   
        $this ->validate($request, Title::$rules);
        $title = new Title;     
        $form = $request->all();
        unset($form['_token']);
        $title->user_id = Auth::id();
        $title->fill($form)->save();
        
    
        return redirect('/admin/task');
    }
}
