<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index() {
        return view('index');
    }
    public function store(Request $request) {
        $request->input('tags');
        $title = new Title;
        if( Auth::check() ) {
            $title->user_id = Auth::id();
            $title->title = '新規作成されました';
            $title->save();
            return redirect('/admin/title');
        }
        
    }
}
