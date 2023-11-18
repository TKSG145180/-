<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Shift;
use App\Http\Requests\PostRequest;

use DateTime;

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
   public function show(Post $post)
   {
       return view ('posts.show')->with(['post' => $post]);
   }
  public function store(PostRequest $request, Shift $shift)
  {
      $input = $request['shifts'];
      $input +=['user_id'=>1];
      $shift->fill($input)->save();
      return redirect('/');
  }
}

