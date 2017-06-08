<?php
/************************************************************\
*
*		XSS TESTING
*		read more hacking tutorial : www.vishnuvalentino.com
*
\************************************************************/
error_reporting(E_ALL^E_NOTICE);
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XSS Testing | vishnuvalentino.com</title>
</head>

<body>
<form action="" method="post">
	Search : <input name="nama" /><input name="send" type="submit" value="send" />
</form>
<?php
if($_POST['send'] == "send"){
echo "<br><br>XSS VULNERABLE = ".$_POST['nama'];
echo "<br />WITH CHARACTER FILTERING = ".htmlspecialchars($_POST['nama']);
}
?>
</body>
</html>