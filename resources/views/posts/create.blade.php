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
            <input type="month" name="month">
            @for($i=1;$i<=31;$i++)
            <div>
                <div>{{ $i }}</div>
                <input type="time" name="shifts[{{ $i }}][start_time]" step="900">
                <input type="time" name="shifts[{{ $i }}][end_time]" step="900">
            </div>
            @endfor
           
        
      
            <input type="submit" value="送信"/>
        </form>
        <div class="footer">
            <a href="/">ホームへ</a>
        </div>
    </body>
</html>
