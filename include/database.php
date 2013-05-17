<?php
$server="localhost";
$username="root";
$password="";
$database="anmoltank";

$con=mysql_connect($server,$username,$password);
	mysql_select_db($database,$con);
?>