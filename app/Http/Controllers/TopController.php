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

    public function create(Request $request)
    {
        $content = Content::all();
        $form = $request->all();
        unset($form['_token']);
        dd($form);
        $content->fill($form)->save();  
             
        return back();
    }   
}
