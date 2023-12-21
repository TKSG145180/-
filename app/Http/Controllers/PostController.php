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
use Carbon\Carbon;

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
    public function list(Shift $shift)
    {
        // 今月と来月を取得
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        $nextMonth =  Carbon::now()->addMonth()->month;
        $nextYear =  Carbon::now()->addMonth()->year;
        $days_num_list = [31, 28, 31, 30 ,31, 30, 31, 31, 30, 31, 30, 31];
        $show_date = [];
        $show_date["current_month"] = $currentMonth;
        $show_date["next_month"] = $nextMonth;
        $current_month_day_num = $days_num_list[$currentMonth-1];
        $next_month_day_num = $days_num_list[$nextMonth-1];

        // シフトの表示
        $shifts = $shift->where('user_id',Auth::id())->get();

        // 今の月
        $current_month_shift_list = [];
        for($i=1;$i<=$current_month_day_num;$i++){
            $current_month_shift_list[$i] = "なし";
        };

        for($i=1;$i<=$current_month_day_num;$i++){
            $shift = $shifts->where('date', $currentYear.'-'.$currentMonth.'-'.$i)->first();
            if($shift){
                $shift_time['start_time'] = $shift->start_time;
                $shift_time['end_time'] = $shift->end_time;
                $current_month_shift_list[$i] = $shift_time;
            };
        }

        // 次の月
        $next_month_shift_list = [];
        for($i=1;$i<=$next_month_day_num;$i++){
            $next_month_shift_list[$i] = "なし";
        };

        for($i=1;$i<=$next_month_day_num;$i++){
            $shift = $shifts->where('date', $nextYear.'-'.$nextMonth.'-'.$i)->first();
            if($shift){
                $shift_time['start_time'] = $shift->start_time;
                $shift_time['end_time'] = $shift->end_time;
                $next_month_shift_list[$i] = $shift_time;
            };
        }

        return view('posts.list')->with(['show_date' => $show_date, 'current_month_shift_list' => $current_month_shift_list, 'next_month_shift_list' => $next_month_shift_list]);
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

