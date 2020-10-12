<?php

namespace App\Http\Controllers;

use App\Title;
use App\Content;
use Validator;
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
        $validator = Validator::make($request->all(), [
            'heading' => 'required',
        ],
        [
            'heading' =>'テスト',
        ]);

        if($validator->fails()){
            return redirect('/#testarea');
        }
        // $validator = $this ->validate($request, ['heading' =>'required']);
        //     if($validator->fails()){
        //     return redirect('/#testarea');
        // }
        
        $title = new Title;     
        $title->user_id = Auth::id();
        $title->save();

        $currentTitleId = $title->id;
        $form = $request->all();
        unset($form['_token']);
        $headings = $form['heading'];
        foreach ($headings as $heading) {
            // Content のインスタンスの heading に $heading を設定する。
            $content = new Content;
            $content ->heading = $heading;
            $content ->title_id = $currentTitleId;
            // Content を保存する。
            $content->save();
        }
             
        return redirect('/todo');
    }   
}
