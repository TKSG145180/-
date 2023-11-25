<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1 class="title">シフト編集画面</h1>
            <div class="content">
                <form action="/posts/{{ $shift->id }}" method="POST">
                    @csrf
                    @method('PUT')
                      <div class='content__title'>
                            <h2>時間変更</h2>
                            <h3>{{ $shift->user->name }}</h3>
                           <p>{{ $shift->date }}</p>
                		   <p><input type="time" name="shift[start_time]" value="{{ $shift->start_time }}">開始時刻</p>
                		   <p><input type="time" name="shift[end_time]"value="{{ $shift->end_time }}">終了時刻</p>
                        <input type="submit" value="更新">
                    </div>
                </form>
            </div>
        </body>
           <div class="footer">
            <a href="/">戻る</a>
        </div>
</html> 