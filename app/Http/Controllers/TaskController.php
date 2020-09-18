<?php

namespace App\Http\Controllers;

use App\Title;
use App\Content;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function add()
    {
        return view('admin.task');  
    }//

    public function index(int $id)
    {
        $titles = Title::all();
        $currentTitle = Title::find($id);
        $currentContent = Content::find($id);

        return view('admin.task', [
            'titles' => $titles,
            'currentTitle' => $currentTitle,
        ]);
    }
    

    public function create(Request $request)
    {   
        $title = new Title;     
        $form = $request->all();
        unset($form['_token']);
        $title->fill($form)->save();
        
        // public function create(Request $request)
        // {   
            
        //     $title = new Title;
        //     $title->title = $request->title;
        //     $title->save();
        // }
    
        return redirect('/admin/task/1');
    }

    // public function delete(Request $request)
    // {   
    //     $content = Title::find($request->id);
    //     $content->delete();
        
    //     return redirect('/admin/task/1');
    // }
}

