<?php
  include './prog.php';
  $stmt = getUserList();
?>

<!doctype html>
<html>
<head>
<title>登録済ユーザー一覧</title>
</head>
<body>
<h1>登録済ユーザー一覧</h1>
<?php
  print_r($stmt);
  print "<p>data base data</p>\n";
?>
<p><a href="./">トップに戻る</a></p>

</body>
</html>


