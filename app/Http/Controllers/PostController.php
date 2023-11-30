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
       return view('posts.show')->with(['shifts' => $shift->where('user_id',Auth::id())->get()]);
   }
      public function management(Shift $shift)
    {
        return view('posts.management')->with(['shifts' => $shift->getPaginateByLimit()]);
    }
    public function list(Shift $shift,User $user)
    {
        $shifts = $shift->where('user_id',Auth::id())->get();
        // $all_list=[];
        // $all_list=[
        //     ['name'=>'田中','shift'=>[
        //         '1'=>[
        //             'start'=>'17','end'=>'21'
        //             ]]]];
        // $user_num=1;
        // $month=2023-11- このような形で今月を取得する
        // for($i=1;$i<=$user_num;$i++){
        //     $user_list=['name'=>Auth::user()->name,'shift'=>[]];
            $shift_list=[];
            for($j=1;$j<=31;$j++){
              $myshift=$shifts->where('date','2023-11-'.$j);
               if($myshift){
                   
                $shift_list+=['start_time'=>$myshift[0]['start_time']];
               }else{
                   $shift_list+=[];
               }
            }
            dd($shift_list);
            // $user_list['shift']=$shift_list;
            // $all_list+=$user_list;

        return view('posts.list')->with(['all_lists' => $shift_list]);
        
    }
    public function password()
    {
        return view('posts.password');
    }
  

  public function store(Request $request)
  {
      $month = $request['month'];
      $is_null = true;
      $shift_all = $request['shifts'];
      for($i=1;$i<=31;$i++){
          $input_shift=$shift_all[$i];
          if($input_shift['start_time'] and $input_shift['end_time']){
            //  $shift=DB::table('shift');
            $shift=new Shift();
             $input_shift+=['date'=>$month.'-'.$i]; 
             $input_shift+=['user_id' => \Auth::id()];
             $shift->create($input_shift);
             $is_null = false;
          };
      }
      if($is_null){
          return redirect('/posts/create');
      }else{
          return redirect('/');

      }

  }
  
    public function edit(Shift $shift)
    {
        return view('posts.edit')->with(['shift' => $shift]);
    }
    public function update(Request $request, Shift $shift)
    {
        $input_shift = $request['shift'];
        $shift->fill($input_shift)->save();
        return redirect('/posts/management');
    }
    public function delete(Shift $shift)
    {
        $shift->delete();
        return redirect('/posts/management');
    }

}

