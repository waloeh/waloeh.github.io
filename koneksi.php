<?php 

$server ="localhost";
$username ="id5858602_tauco";
$password ="stekmal1976";
$database ="id5858602_waloeh";

mysql_connect($server, $username, $password) or die("Koneksi Tidak Ada");
mysql_select_db($database) or die("database Tidak Ditemukan");
 
?>