<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqController extends Controller
{
   public function __construct(){
      $this->middleware('auth', ['only'=>['edit', 'update', 'destroy']]); //Puede ser only or except
   }

   public function index()
   {
      $faqs = Faq::get();

      return view('faqs.index', ['faqs' => $faqs]);
   }

   public function show(Faq $faq)
   {
      return view('faqs.show', ['faq' => $faq]);
   }
  /*
   public function create()
   {
      return view('faqs.create');
   }

   public function store(Request $request)
   {

      $request->validate([
         'title' => 'required',
         'body' => 'required'
      ]);

      $faq = new Faq;
      $faq->title = $request->input('title');
      $faq->title = $request->input('body');
      $faq->save();
      return to_route('faqs.index');
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
         'title' => 'required'
      ]);

      $post->title = $request->input('title');
      $post->save();
      //session()->flash('status', 'Post updated!');
      return to_route('posts.show', $post);
   }
   */
}