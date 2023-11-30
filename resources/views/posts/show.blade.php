<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
         <style>  
       table{
          border:3px black solid;　
          border-collapse: collapse;　
         }
        th,td{
          border:1px black solid;
        }
        
        .inline-block_shift {
        display: inline-block;  
        background-color:  #ccc;
        }
        
    </style>  
    </head>
    <h2 id="table">シフト管理</h2>
        
            @foreach($shifts as $shift)
                <table>
    			    <thead>
    			        <tr>
    			            <th>ユーザーid</th>
    			            <th>名前</th>
    			            <th>日時</th>
    			            <th>開始時刻</th>
    			            <th>終了時刻</th>
    			        </tr>
    			    </thead>
    			    <tbody>
    			        <tr>
    			            <td>{{ $shift->user_id }}</td>
    			            <td>{{ $shift->user->name }}</td>
    			            <td>日時{{ $shift->date }}</td>
    			            <td>開始時刻{{ $shift->start_time }}</td>
    			            <td>終了時刻{{ $shift->end_time }}</td>
    			        </tr>
                    </tbody>
                </table>
                <div class="inline-block_shift">
                    <form action="/posts/{{ $shift->id }}" id="form_{{ $shift->id }}" method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
                @endforeach
                
        <div class="footer">
            <p><a href="/">ホームへ</a></p>
        </div>
    </body>
</html>