<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
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
    <body>
        <h1>希望シフト</h1>
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
                    <button onclick="location.href='/posts/list'">承認</button>
                </div>
                <div class="inline-block_shift">
                    <form action="/posts/{{ $shift->id }}" id="form_{{ $shift->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $shift->id }})">削除</button> 
                    </form>
                </div>
                <div class="inline-block_shift">
                    <button onclick="location.href='/posts/{{$shift->id}}/edit'">変更</button>
                </div>
                @endforeach
             <script>
                function deletePost(id) {
                    'use strict'
            
                    if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        <div class='paginate'>
            {{ $shifts->links() }}
        </div>
        <p><a href='/'>ホームへ戻る</a></p>
    </body>
</html>