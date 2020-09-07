<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function add()
    {
        return view('admin.task');  
    }//

    public function index()
    {
        $post = [
            'task' =>'これはControllerを通したmsg',
        ];
        return view('admin.task', $post);
    }
}
