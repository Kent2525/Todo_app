<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Title;
use App\Content;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Support\Facades\Auth;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( ! empty(session('tags')) ) {
            $this->sessionTags();
        }
        $id = Auth::id();
        $title_posts = Title::where('user_id', $id)->get();
        $heading_posts = $title_posts[0]->contents;
        $title_id = $title_posts[0]->id;
        return redirect("/admin/title/{$title_id}");
        // return view('admin.task', ['title_posts' => $title_posts, 'heading_posts' => $heading_posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = new Title;
        $title->user_id = Auth::id();
        $title->title = '新規作成されました';
        $title->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        dump( session('tags') );
        dump($id);
        $title_posts = Title::where('user_id', Auth::id())->get();
        $heading_posts = Content::where('title_id', $id)->get();
        return view('admin.task', ['title_posts' => $title_posts, 'heading_posts' => $heading_posts, 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {        
        $id = $request->input('titleid'); 
        $title = Title::find($id);
        $title->user_id = auth()->user()->id;
        $title->title = $request->input('title');
        $title->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Title::destroy($id);
        return back();
    }


    public function sessionTags() {
        $tags = session('tags');
        // タイトルの新規作成
        $title = new Title;
        $title->user_id = Auth::id();
        $title->title = '新規作成されました';
        $title->save();

        // dd($title->id);

        // コンテントの新規作成
        foreach( $tags as $tag ) {
            $content = new Content;
            $content->heading = $tag;
            $content->body = '';
            $content->title_id = $title->id;
            $content->save();
        }

        // dd($title->id);
        // session()->forget('tags');
        

        return redirect("/admin/title/{$title->id}");

    }
}
