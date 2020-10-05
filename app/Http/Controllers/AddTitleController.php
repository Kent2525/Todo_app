<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddTitleController extends Controller
{
    public function add()
    {
        return view('admin.addtitle');  
    }//
}
