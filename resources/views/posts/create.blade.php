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
            <div>
                <h3>日付</h3>
                <input type="date" name="shifts[date]" >
                <p class="date_error" style="color:red">{{ $errors->first('shifts.date') }}</p>
            </div>
            
            <div>
                <h3>開始時間</h3>
                <input type="time" name="shifts[start_time]" step="900">
                 <p class="time_error" style="color:red">{{ $errors->first('shifts.start_time') }}</p>

            </div>
            
            <div>
                <h3>終了時刻</h3>
                <input type="time" name="shifts[end_time]" step="900">
                <p class="time_error" style="color:red">{{ $errors->first('shifts.end_time') }}</p>

            </div>
            
            <input type="submit" value="送信"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
