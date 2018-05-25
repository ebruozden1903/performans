<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<title>İletişim Formu</title>
<style>
body{
background-color:#ffe6cc;
}
h1{
color:#ff0000;
}
textarea{
background-color:#efefef;
font-weight:bold;
font-size: 13px; 
padding: 3px; 
font-family: Tahoma, Verdana;
color:navy;
}
td{
font-weight:bold;
font-size: 13pt; 
font-family: Arial, Verdana;
color:red;
}
input{
background-color:#efefef;
width: 250px;
font-weight:bold;
color:navy;
}
</style>
<!-- ksabitk  -->
</head>

<body>
<div align="center">
<h1>İletişim Formu</h1>
<form method="post" action="mailto:isim@mail.com">
<input name="id" type="hidden" value="1775">
<table cellpadding="10px" border="0">
<tr>
<td align="right">Adınız : </td>
<td><input name="sender_name" type="text"></td>
</tr>
<tr>
<td align="right">e-Mail : </td>
<td><input name="sender_email" type="text"></td>
</tr>
<tr>
<td align="right">Konu : </td>
<td><input name="subject" type="text"></td>
</tr>
<tr>
<td align="right" valign="top">Mesaj : </td>
<td>
<textarea rows="10" cols="40" name="message">
</textarea></td>
</tr>
<tr>
<td colspan="2" align="center">
<input value="Gönder" name="send" type="submit" id="send" style="width:100;color:#ff0000;"></td>
</tr>
</table>
<p>&nbsp;</p>
</form>
</div>
<p><a href="mailto:emailadresiniz">email adresiniz</a> </p>
</body>

</html>