<?php
$baglanti= @mysql_connect("localhost", "root") or die ("baglanamadi" .mysql_error());
		mysql_select_db("kullanicilar") or die ("baglanamadi" .mysql_error());
		mysql_query("set name utf8");
		?>