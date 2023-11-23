<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>希望シフト</h1>
         <form action="/posts" method="POST">
            @foreach($shifts as $shift)
             <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;">
            <div>
                <p>{{ $shift->user_id }}</p>
                <p>日時{{ $shift->date }}</p>
                <p>開始時刻{{ $shift->start_time }}  終了時刻{{ $shift->end_time }}</p>
                <p>
                    <a href='/posts/list'>承認</a>
                    <a href='/posts/management'>拒否</a>
                </p>
            </div>
          </div>

            @endforeach
        <div class='paginate'>
            {{ $shifts->links() }}
        </div>
    </body>
</html>