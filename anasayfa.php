
<?php
session_start();
ob_start();

if(@$_SESSION["login"])
{	echo "<!DOCTYPE html><html><head>	<title></title></head>
<body>";
	
		include('header.php');
		include('article.php');
		include('footer.php');
echo "
</body>
</html>";
}
else {
	echo "Bu alana erişmek için kullanıcı girişi yapınız.";
		}

 ?>



