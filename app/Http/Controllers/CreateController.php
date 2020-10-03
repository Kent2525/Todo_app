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
        
        // public function create(Request $request)
        // {   
            
        //     $title = new Title;
        //     $title->title = $request->title;
        //     $title->save();
        // }
    
        return redirect('/admin/task');
    }
}
