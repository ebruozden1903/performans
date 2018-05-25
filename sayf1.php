
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	session_start();
ob_start();

if(@$_SESSION["login"]){
		include("header.php");
		include("icerik1.php");
		include("footer.php");
}
else {
	echo "Bu alana erişmek için kullanıcı girişi yapınız.";
		}

 ?>
