<?php
# FileName="conn3Sixteen.php"
# Type="MYSQL"
# HTTP="true"
$hostname_conn3Sixteen = "localhost";
$database_conn3Sixteen = "contacts";
$username_conn3Sixteen = "arturo019";
$password_conn3Sixteen = "osman019";
$conn3Sixteen = mysql_pconnect($hostname_conn3Sixteen, $username_conn3Sixteen, $password_conn3Sixteen) or die(mysql_error());
$db = mysql_select_db($database_conn3Sixteen, $conn3Sixteen);
?>