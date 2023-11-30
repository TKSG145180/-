<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>決定済みシフト</title>
  <link rel="stylesheet" href="style.css">
 <style> 
          table.st-tbl1{
            width: 1000px;
            /*見切れるように1000pxにしている*/
        }
        .st-tbl1 thead th {
          /* 縦スクロール時を固定 */
          position: sticky;
          top: 0;
          /* tbody内のセルより手前に表示する */
          z-index: 1;
        }
        .st-tbl1 th:first-child {
          /* 横スクロールを固定 */
          position: sticky;
          left: 0;
          background: #f1f1fd;
        }
        .st-tbl1 thead th:first-child {
          /* 一番左端のthead thが横スクロール時に隠れない様に */
          z-index: 2;
          background: #424242;
        }
        .st-tbl1 th,
        .st-tbl1 td{
          border-collapse: collapse;
          text-align: left;
          padding: .2rem .5rem;
          font-weight: normal;
        }
        .st-tbl1 thead th {
          background: #424242;
          color: #E0E0E0;
        }
        .st-tbl1 thead th {
          position: sticky;
          top: 0;
          z-index: 1;
        }
        .st-tbl1 th:first-child {
          position: sticky;
          left: 0;
          background: #f1f1fd;
        }
</style>
</head>
<body>
   <table class="st-tbl1">
    <thead>
      <tr>
        @for($i =1; $i<=31; $i++) 
        <th>{{ $i }}</th>
        @endfor
    </thead>
    <tbody>
      <tr>
        
        <td>名前</td>
        @foreach($all_lists as $user_lists)
          <p>{{ $user_lists }}</p>
        @endforeach
      </tr>
    </tbody>
  </table>
  
</body>
