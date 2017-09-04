<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostsController extends Controller
{
	public function index()    //function inside the controller is called a controller 'action'
	{
		return view('posts.index');   //create posts folder in views and inside that create the file called index.blade.php
	}
	
	public function show()
	{
		return view('posts.show');
	}
	
	public function create()
	{
		return view('posts.create');
	}
	
	public function store()
	{
		//dd(request('title'));
		
		$post = new \App\Post;
		
		$post->title = request('title');
		$post->body = request('body');
		
		$post->save();
		
		return(redirect('/'));
	}
}
