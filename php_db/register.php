<!doctype html>
<html>
<head>
<title>�V�K���[�U�[�o�^</title>
</head>
<body>
<h1>�V�K���[�U�[�o�^</h1>

<form action="action.php" method="post">
���[�U�[��: <input type="text" name="name" /><?php print "<b class="err">$error_info->name</b>";  ?><br />
���[���A�h���X: <input type="email" name="mailto" /><?php print "<b class="err">$error_info->mailto</b>"; ?><br />
���p�X���[�h:  <input type="password" name="password" /><?php print "<b class="err">$error_info->password</b>"; ?><br />
���p�X���[�h(�ē���):  <input type="verify_password" name="password" /><br />
<input type="submit" />
</form>



</body>
<html>


