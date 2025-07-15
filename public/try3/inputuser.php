<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">

<?php
function getParam($key, $pattern, $error){
	//POSTのパラメータを取り出す
	$val = filter_input(INPUT_POST, $key);

	//文字エンコーディング(UTF-8)のチェック
	if(! mb_check_encoding($val, 'UTF-8')){
		die('文字エンコーディングが不正です');
	}

	//引数で受け取ったパターンでチェック
	if(mb_ereg($pattern, $val) == false) {
		die($error);
	}
	return $val;
}

$username = getParam('username', "^([ぁ-んァ-ン一-龯]{1,20})$", '20文字以内で名前を入力してください。記号等は利用できません。');
$addr = getParam('useraddress', "^([ぁ-んァ-ン一-龯0-9０-９-]{1,30})$", '30文字以内で住所を入力してください。記号等は利用できません。');
$mail = getParam('usermail', "^[a-zA-Z0-9.-_]+@[a-zA-Z0-9.-_]+$", '正しいメールアドレス形式で入力してください。記号は.-_@のみ利用可能。');

?>

  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
<?php
echo "あなたが入力した値<br>";
echo "名前：" . $username . "<br>";
echo "住所：" . $addr . "<br>";
echo "メールアドレス：" .$mail ;
?>
    </h2>
    </div>
  </body>
</html>
