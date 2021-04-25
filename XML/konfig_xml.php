<?php
$host = "localhost";
$user = "root"; //disesuaikan dengan settingan mysql
$pass = ""; //
$dbName = "dbxmlpunyairen";
mysql_connect($host, $user, $pass);
mysql_select_db($dbName)
or die ("Connect Failed !! : ".mysql_error());
?>
