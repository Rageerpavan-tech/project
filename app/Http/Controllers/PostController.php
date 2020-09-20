<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::all();
    
        return view('home',compact('posts'))->with('posts',$posts);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    	$request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);
    
        Post::create($request->all());

        return redirect('posts');
      }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function show($id)
    {
    	$post = Post::find($id);
        return view('show', compact('post'));
    }
}
