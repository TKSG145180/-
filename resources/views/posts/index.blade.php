<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Shift</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <style>
                .antialiased{
              height:53px;
              padding-top:1px;
            }
            .antialiased a{
              width: 180px;
              padding:15px;
              color:#ffffff;
              font-size: 15px;
              line-height: 120%;
              text-align: center;
              text-decoration: none;
              background: #1B73BA;
              display: block;
              position:relative;
              -webkit-border-radius: 12px;
              -moz-border-radius: 12px;
              border-radius: 12px;
              -webkit-box-shadow:4px 4px 0px 0px rgba(0,0,0,0.2);
              -moz-box-shadow:4px 4px 0px 0px rgba(0,0,0,0.2);
              box-shadow:4px 4px 0px 0px rgba(0,0,0,0.2);
              -webkit-transition: 0.3s ease-out;
              -moz-transition: 0.3s ease-out;
              -o-transition: 0.3s ease-out;
              transition: 0.3s ease-out;
            }
            .antialiased a:hover{
              margin:4px 0 0 4px ;
              -webkit-box-shadow:0 0 0px 0px rgba(0,0,0,0.2);
              -moz-box-shadow:0 0 0px 0px rgba(0,0,0,0.2);
              box-shadow:0 0 0px 0px rgba(0,0,0,0.2);
            }
            
            
       </style>
      </head>
    <body class="antialiased">
        <h1>バイトシフト</h1>
        <h4>※後半のシフトは5日まで、前半のシフトは20日まで</h4>
            <div>
                <h2><a href="/posts/list">決定済みシフト</h2></a>
                <h3><a href='/posts/create'>希望シフトはこちら</a></h3>
                <h3><a href='/posts/show'>登録したシフトはこちら</a></h3>
                <h3><a href='/posts/password'>シフト管理</a></h3>
                
            </div>
    </body>
</html>