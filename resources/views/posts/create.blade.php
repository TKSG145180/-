<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        
        <h1>希望シフト</h1>
        <form action="/posts" method="POST">
            @csrf
                <p><input type="date" name="shifts[date]" step="900"><strong>開始時刻</strong></p>
            <p><input type="time" name="shifts[start_time]" step="900"><strong>開始時刻</strong></p>
            <p><input type="time" name="shifts[end_time]" step="900"><strong>終了時刻</strong></p>
            <input type="submit" value="送信"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
