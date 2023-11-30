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
            <p class="month_error" style="color:red">{{ $errors->first('month') }}</p>
            @for($i=1;$i<=31;$i++)
            <div>
                <div>{{ $i }}</div>
                <input type="time" name="shifts[{{ $i }}][start_time]" step="900">
                <input type="time" name="shifts[{{ $i }}][end_time]" step="900">
            </div>

            @endfor
           

            <input type="submit" onclick="confirmDeletion()"　value="送信"/>
                      
            <script>
            function confirmDeletion() {
              if (confirm("登録後は変更できませんよろしいですか？")) {
                alert("登録しました。");
              } else {
                alert("登録をキャンセルしました。");
              }
            }
            </script>
        </form>
        
        <div class="footer">
            <a href="/">ホームへ</a>
        </div>
    </body>
</html>
