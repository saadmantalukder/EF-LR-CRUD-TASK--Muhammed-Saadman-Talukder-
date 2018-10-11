<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class post_controller extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'post_title'=>'required',
            'post_description'=>'required',
        ]);
        $post= new Post;
        $post->post_title = $request->input('post_title');
        $post->post_description = $request->input('post_description');
        //$post->date()=$request->input('post_time');
        
        $post->save();
        return redirect('/')->with('Successfull Posted!', 'Posted');
        
    }
    public function get(){
        $posts=Post::all();
        return view('home')->with('posts',$posts);
    }
    public function edit(Post $post){
        return view('edit');
    }
}
