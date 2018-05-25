<?php
include("kullanicipassword.php");
session_start();

if(!isset($_SESSION["login"])){

echo "Bu sayfayı görüntüleyemezsiniz...";

}else{

echo "Admin sayfası<br>";
echo "<a href=\"cikis.php\">Çıkış Yap</a>";

}

?>