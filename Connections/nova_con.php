<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_nova_con = "localhost";
$database_nova_con = "nova_airline_db";
$username_nova_con = "root";
$password_nova_con = "";
$nova_con = mysql_pconnect($hostname_nova_con, $username_nova_con, $password_nova_con) or trigger_error(mysql_error(),E_USER_ERROR); 
?>