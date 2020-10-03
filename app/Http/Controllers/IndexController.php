<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;
use App\Content;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index() {
        dump( session('tags') );
        return view('index');
    }
    public function store(Request $request) {
        $tags = $request->input('tags');
        
        // #区切りで送られてくるので、配列の形に分割する
        $tags = explode('#', $tags);
        
        // 最初は空なので除く
        array_shift($tags);
        
        // セッションに保存する
        session(['tags' => $tags]);
        
        return redirect('/admin/title');
        
    }
}
