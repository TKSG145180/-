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
            <div class="title">
                <input type="text" name="shift[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <textarea name="shift[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>