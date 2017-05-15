<?php
$dbhost = 'localhost';
$username = 'root';
$password = '';
$db = 'register';
mysql_connect ("$dbhost" , "$username" , "$password");


mysql_select_db($db);
echo "connected to database..";
?>