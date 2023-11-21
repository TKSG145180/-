<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
       <h1>希望シフト確認</h1>
        <form action="/posts" method="POST">
            <h3>日時</h3>
            <p>{{ $shift->date }}</p>
            <h3>開始時間</h3>
            <p>{{ $shift->start_time }}</p>
            <h3>終了時刻</h3>
        　　 <p>{{ $shift->end_time }}</p>

        </form>
        <div class="footer">
            <p><a href="/posts/create">シフト登録画面へ</a></p>
            <p><a href="/">ホームへ</a></p>
        </div>
    </body>
</html>