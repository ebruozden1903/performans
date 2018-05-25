
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ebru ÖZDEN</title>
</head>

<link rel="stylesheet" type="text/css" href="style/stil.css">
<body>
<body background="arka.jpg">

	<div id="wrapper">
<div id="header">
		<img src="isim.png" width="600" height="50" align="left"><img src="logo.png" width="50" height="50" align="">
	
</div>


		<form action="login.php" method="POST"><br><br>
<img src="iletisim.png" width="600" height="200" align="center">
<form>

<table align="right">
<br><br>
<tr>
<td><font color="white">Kullanıcı Adı</td><td><font color="white">:</td>
<td><input type="text" name="username"></td>
</tr>

<tr>
<td><font color="white">Şifre</td><td><font color="white">:</td>
<td><input type="password" name="password"></td>
</tr>

<tr>
<td></td>
<td></td>
<td><input type="submit" value="Giriş"></td>
</tr>
</table>
</form>
<table align="right">


                   <form method="post" action="index.php"><br>
     <tr> <td><b><font color="white">Adı</td> <td><b><font color="white">:</td><td><input type="text" name="username"></td></tr><br>
     <tr><td><b><font color="white">Soyadı</td>  <td><b><font color="white">:</td><td><input type="text" name="surname"></td></tr><br>
      <tr> <td><b><font color="white">E-Mail</td>  <td><b><font color="white">:</td><td><input type="text" name="mail"></td></tr><br>
     <tr><td><b> <font color="white">Şifre</td>  <td><b><font color="white">:</td><td><input type="password" name="password"></td></tr><br>
  <tr> <td><b> <font color="white">Tekrar Şifre</td>  <td><b><font color="white">:</td><td><input type="password" name="passwordd"></td></tr><br><br><br><br><br><br><br><br><br>
        
       <tr><td></td><td></td><td> <input type="submit" name="gonder" value="KAYDET"></td></tr>

    
</form>

</table>
<br><br><br><br>
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
<?php
    @$kontrol = $_POST['gonder'];
    if($kontrol)
    {
        $username= $_POST['username'];
        $surname= $_POST['surname'];
        $mail= $_POST['mail'];
        $password= $_POST['password'];
        $passwordd= $_POST['passwordd'];
        include("baglanti.php");
        if($password==$passwordd)
            
        {
        mysql_query("insert into user(username,surname,mail,password) values('$username','$surname','$mail','$password')",$baglanti) or die ("veri eklenemedi" .mysql_error());
        echo "<h1><font color=white>Veriniz Eklendi..";
        }
        else echo "Parolalar eşleşmiyor.";



    }
?>
	</html>