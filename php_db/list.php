<?php
  include './list_prog.php';
  $stmt = getUserList();
?>

<!doctype html>
<html>
<head>
<title></title>
</head>
<body>
<h1>登録済ユーザー一覧</h1>
<?php
  print_r($stmt);
  print "<p>data base data</p>\n";
?>
</body>
</html>


