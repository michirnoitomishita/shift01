<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>焼肉やすもり〇〇店スタッフシフトアプリ（入力画面）</title>
  <style>
    body {
      background-color: #f5f5f5;
      font-family: Arial, sans-serif;
    }

    form {
      width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      box-shadow: 0px 0px 20px rgba(0,0,0,0.1);
    }

    fieldset {
      border: none;
    }

    div {
      margin-bottom: 10px;
    }

    input[type="text"], input[type="date"] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    button {
      width: 100%;
      padding: 10px;
      border: none;
      background-color: #007BFF;
      color: white;
      border-radius: 5px;
    }

    button:hover {
      background-color: #0056b3;
    }

    a {
      display: inline-block;
      margin-bottom: 20px;
      text-decoration: none;
      color: #007BFF;
    }
  </style>
</head>

<body>
  <form action="shift_txt_create.php" method="POST" >
    <fieldset>
      <legend>焼肉やすもり〇〇店スタッフシフト管理アプリ（入力画面）</legend>
      <a href="shift_txt_read.php">一覧画面</a>
      <div>
        スタッフNO: <input type="text" name="no">
      </div>
      <div>
        名前: <input type="text" name="name">
      </div>
      <div>
        備考: <input type="text" name="com">
      </div>
      <div>
        記入日: <input type="date" name="deadline">
      </div>
      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>