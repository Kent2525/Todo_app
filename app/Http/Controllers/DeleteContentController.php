<?php

use App\Title;
use App\Content;
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
        $currentContent = Title::find($request->id);
        $currentContent->delete();
        
        return redirect('/admin/task/1');
    }

}
