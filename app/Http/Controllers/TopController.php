<?php

namespace App\Http\Controllers;

use App\Title;
use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TopController extends Controller
{
    public function index()
    {
        return view('top');  
    }

    public function create()
    {
        $content = Content::all();
        unset($form['_token']);
        $content->fill($form)->save();  
        dd($form);     
        return back();
    }   
}
