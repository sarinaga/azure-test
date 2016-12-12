<!doctype html>
<html>
<head>
<title>新規ユーザー登録</title>
</head>
<body>
<h1>新規ユーザー登録</h1>

<form action="action.php" method="post">
ユーザー名: <input type="text" name="name" /><?php print "<b class="err">$error_info->name</b>";  ?><br />
メールアドレス: <input type="email" name="mailto" /><?php print "<b class="err">$error_info->mailto</b>"; ?><br />
仮パスワード:  <input type="password" name="password" /><?php print "<b class="err">$error_info->password</b>"; ?><br />
仮パスワード(再入力):  <input type="verify_password" name="password" /><br />
<input type="submit" />
</form>



</body>
<html>


