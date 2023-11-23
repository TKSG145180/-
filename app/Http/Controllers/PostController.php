<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Shift;
use App\Models\User;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;
use App\Providers\AppServiceProcider;

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
      public function management(Shift $shift)
    {
        return view('posts.management')->with(['shifts' => $shift->getPaginateByLimit()]);
    }
    public function list()
    {
        return view('posts.list');
    }


  public function store(Request $request)
  {
      $month = $request['month'];
      $shift_all = $request['shifts'];
      for($i=1;$i<=31;$i++){
          $input_shift=$shift_all[$i];
          if($input_shift['start_time'] and $input_shift['end_time']){
            //  $shift=DB::table('shift');
            $shift=new Shift();
             $input_shift+=['date'=>$month.'-'.$i]; 
             $input_shift+=['user_id' => \Auth::id()];
             $shift->create($input_shift);

          };
      }
      
      return redirect('/');
   
  }
}

