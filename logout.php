<body background="arka2.jpg" >

<?php
session_start();
ob_start();

session_destroy();

echo "<font color=pink size=50px>Çıkış Yaptınız.<br>Ana Sayfaya Yönlendiriliyorsunuz";

header("Refresh: 5; url=index.php");

ob_end_flush();
?>