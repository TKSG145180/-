<!DOCTYPE html>
<html>
    <head>
        <style>
        .centering_parent {
        padding: 20px;              /* 余白指定 */
        text-align:  center;        /* 中央寄せ */
        background-color:  #ddd;    /* 背景色指定 */
        height: 100px;              /* 高さ指定 */
        }

        .centering_item {
        background-color: #FFEB3B;  /* 背景色指定 */
        }
        </style>
    </head>
    
    <body>
        <div class="centering_parent">
            <p>パスワードを入れてください</p>
        <input id="password-input" type="password">
        <input type='button' value="送信" onclick="check()">
        </div>
        <script>
        function check(){

            if(document.getElementById("password-input").value=="hujisawa"){
            location.href = '/posts/management';
            }
           }
        </script>
    </body>

</html>


