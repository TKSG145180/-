<!DOCTYPE html>
<html lang="ja">

<head>
      
    <meta charset="UTF-8">
      <title>決定済みシフト</title>
      
    <link rel="stylesheet" href="style.css">
     <style>
        table.st-tbl1 {
            width: 1000px;
            /*見切れるように1000pxにしている*/
        }

        .st-tbl1 thead th {
            /* 縦スクロール時を固定 */
            position: sticky;
            top: 0;
            /* tbody内のセルより手前に表示する */
            z-index: 1;
        }

        .st-tbl1 th:first-child {
            /* 横スクロールを固定 */
            position: sticky;
            left: 0;
            background: #f1f1fd;
        }

        .st-tbl1 thead th:first-child {
            /* 一番左端のthead thが横スクロール時に隠れない様に */
            z-index: 2;
            background: #424242;
        }

        .st-tbl1 th,
        .st-tbl1 td {
            border-collapse: collapse;
            text-align: left;
            padding: .2rem .5rem;
            font-weight: normal;
        }

        .st-tbl1 thead th {
            background: #424242;
            color: #E0E0E0;
        }

        .st-tbl1 thead th {
            position: sticky;
            top: 0;
            z-index: 1;
        }

        .st-tbl1 th:first-child {
            position: sticky;
            left: 0;
            background: #f1f1fd;
        }
    </style>
</head>

<body>
    <div class="flex">
        <div class="w-1/2">
            <h1>{{ $show_date['current_month'] }}月のシフト</h1>
            <div>
                @foreach($current_month_shift_list as $shift) 
                    <p>{{$loop->index+1}}日：
                    @if(is_array($shift))
                        {{ $current_month_shift_list[$loop->index+1]['start_time'] }} ~ {{ $current_month_shift_list[$loop->index+1]['end_time'] }}
                    @else
                        {{ $current_month_shift_list[$loop->index+1] }}
                    @endif
                    </p>
                @endforeach
            </div>
        </div>
        <div class="w-1/2">
            <h1>{{ $show_date['next_month'] }}月のシフト</h1>
            <div>
                @foreach($next_month_shift_list as $shift) 
                    <p>{{$loop->index+1}}日：
                    @if(is_array($shift))
                        {{ $next_month_shift_list[$loop->index+1]['start_time'] }} ~ {{ $next_month_shift_list[$loop->index+1]['end_time'] }}
                    @else
                        {{ $next_month_shift_list[$loop->index+1] }}
                    @endif
                    </p>
                @endforeach
            </div>
        </div>
    </div>
        
        
    </body>