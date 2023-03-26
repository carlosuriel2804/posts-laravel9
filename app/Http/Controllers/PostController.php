<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
   public function __construct(){
      $this->middleware('auth', ['only'=>['destroy']]); //Puede ser only or except
   }

   public function index()
   {
      $posts = Post::get();

      return view('posts.index', ['posts' => $posts]);
   }

   public function show(Post $post)
   {
      return view('posts.show', ['post' => $post]);
   }

   public function create()
   {
      return view('posts.create');
   }

   public function store(Request $request)
   {

      $request->validate([
         'title' => 'required',
         'body'=> 'required'
      ]);

      $post = new Post;
      $post->title = $request->input('title');
      $post->body = $request->input('body');
      $post->save();
      return to_route('posts.index');
   }
   public function destroy(Post $post)
   {
      $post->delete();
      return to_route('posts.index');
   }

   public function edit(Post $post)
   {
      return view('posts.edit', ['post' => $post]);
   }

   public function update(Request $request, Post $post)
   {
      $request->validate([
         'title' => 'required',
         'body'=> 'required'
      ]);

      $post->title = $request->input('title');
      $post->body = $request->input('body');
      $post->save();
      //session()->flash('status', 'Post updated!');
      return to_route('posts.show', $post);
   }
}