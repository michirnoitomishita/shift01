<?php
$str = '';
$file = fopen ('data/todo.txt' , 'r');
flock($file,LOCK_EX);

if ($file){
  while($line = fgets($file)){
    $str .="<tr><td>{$line}</td></tr>";
  }
}
flock($file,LOCK_UN);
fclose($file);

?>


<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>焼肉やすもり〇〇店スタッフシフトアプリ（一覧画面）</title>
<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      padding: 20px;
    }

    fieldset {
      border: none;
      width: 80%;
      margin: 0 auto;
      background-color: #fff;
      box-shadow: 0px 0px 20px rgba(0,0,0,0.1);
      padding: 20px;
    }

    a {
      display: inline-block;
      margin-bottom: 20px;
      text-decoration: none;
      color: #007BFF;
      padding: 10px 20px;
      background-color: white;
      box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #007BFF;
      color: white;
    }

    button {
      color: #fff;
      background-color: #dc3545;
      border: none;
      padding: 5px 10px;
      border-radius: 3px;
    }

    button:hover {
      background-color: #c82333;
    }
  </style>


</head>

<body>
  <fieldset>
    <legend>焼肉やすもり〇〇店スタッフシフトアプリ（一覧画面）</legend>
    <a href="shift_txt_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>メンバー<br>番号　/　名前　/　備考　/　入力日　</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        <?= $str ?>
        
      </tbody>
    </table>
  </fieldset>
</body>

</html>