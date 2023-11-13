<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->get]);
    }
   public function create()
   {
       return view('posts.create');
   }
  public function store(Request $request, Post $shift)
  {
      $input = $request['shift'];
      $shift->fill($input)->save();
      return redirect('/posts/' . $shift->id);
  }
}
