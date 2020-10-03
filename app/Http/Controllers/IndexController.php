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
        
        // ログインしている場合
        if( Auth::check() ) {
            
            // タイトルの新規作成
            $title = new Title;
            $title->user_id = Auth::id();
            $title->title = '新規作成されました';
            $title->save();

            // コンテントの新規作成
            foreach( $tags as $tag ) {
                $content = new Content;
                $content->heading = $tag;
                $content->body = '';
                $content->title_id = $title->id;
                $content->save();
            }

            return redirect('/admin/title');
        }else {
            // セッションに保存する
            session(['tags' => $tags]);

            return redirect('/admin/title');
        }
        
    }
}
