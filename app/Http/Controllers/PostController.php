<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Shift;
use App\Models\User;
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
   public function show(Shift $shift)
   {
       return view('posts.show')->with(['shift' => $shift]);
   }
      public function management()
    {
        return view('posts.management');
    }
    public function list()
    {
        return view('posts.list');
    }


  public function store(PostRequest $request, Shift $shift)
  {
      $shift->user_id = \Auth::id();
      $input_shift = $request['shifts'];
      $shift->fill($input_shift);
      $shift->save();
      return redirect('/posts/{user}');
   
  }
}

