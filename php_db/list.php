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
  
  
  foreach ($stmt as $row) {
    echo $row['id'].'：'.$row['name'];
    echo "<br>\n";
  
  }
?>
<p><a href="./">トップに戻る</a></p>

</body>
</html>


