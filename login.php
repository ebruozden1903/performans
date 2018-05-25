<body background="arka2.jpg" >
<?php 
session_start();
$username = $_POST['username']; 
$password = $_POST['password'];

 include("baglan.php");

if ($username && $password) {
    
   $sorgula = mysql_query("select * from user where username= '$username' and password='$password'");
   $verisay = mysql_num_rows($sorgula);

   if ($verisay != 0) {
        $_SESSION['login']=true; 
       $session['username'] = $username;
       $session['password'] = $password;

       echo "<h3><br><br><br><br><br><br><br><br><br><br><br><br><font color=aqua>BAŞARILI<h3/><br/> <a href='anasayfa.php'><font color=RED>PROFİLE GİT.</a>";
       
      


   }else {

       echo "<font color=pink>KULLANICI ADI VEYA ŞİFRE YANLIŞ <a href='index.php'><font color=pink>Anasayfa</a>";
       
   }

}else{

    echo "<h1><b><font color='red'>Kullanıcı adı ve şifre ile giriş yapınız..";
    include ("index.php");
}
?>
</body>
</html>