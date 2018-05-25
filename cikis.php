
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ebru ÖZDEN</title>
</head>

<link rel="stylesheet" type="text/css" href="style/stil.css">
<body>
	<div id="wrapper">
<div id="header">
		
		
	
</div>

	
<?php
session_start();
ob_start();

session_destroy();

echo "Çıkış Yaptınız.<br>Ana Sayfaya Yönlendiriliyorsunuz...";

header("Refresh: 10; url=index.php");

ob_end_flush();
?>
<img src="yukleniyor.gif" align="left" width="700" height="700"></div>
<div id="footer">
		
		<a href="http://www.facebook.com">
<img src="facebook.png" width="50" height="50" align="left"></a>

<a href="http://www.instagram.com">
<img src="instagram.png" width="50" height="50" align="left"></a>

<a href="http://www.youtube.com">
<img src="youtube.png" width="50" height="50" align="left"></a>

<a href="http://www.google.com"> 
<img src="google.png" width="50" height="50" align="left"></a>

<a href="http://www.twitter.com"> 
<img src="Twitter.png" width="50" height="50" align="left"></a>

	
</div>
</body>
	</html>
