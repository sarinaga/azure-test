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
  if (count($stmt) > 0){
    ?>
    <table>
      <thead>
        <tr>
          <?php
            $row  = $stmt[0];
            foreach(array_keys($row) as $col){
              print "<th>$col</th>\n":
            }
          ?>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
            foreach ($stmt as $row) {
              foreach(array_keys($row) as $col){
                print "<td>$row[$col]</td>\n";
              }
            }
          ?>
        </tr>
      </tbody>
    </table>
    <?php
  }
?>
<p><a href="./">トップに戻る</a></p>

</body>
</html>


