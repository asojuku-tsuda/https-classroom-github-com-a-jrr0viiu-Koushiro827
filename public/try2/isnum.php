<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
<?php
if(empty($_GET['indata'])){
  die("内容を入力してください。");
}

$indata = filter_input(INPUT_GET, 'indata'); // GETリクエストからデータを取得

if (mb_ereg('^[0-9]+$', $indata) == false) { // 数字かどうかを判定
    die("数字を入力してください。");
}
echo "入力された数字は： " . $indata;
?>
    </h2>
    </div>
  </body>
</html>