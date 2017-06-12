<?php
$userName =  'root';
$host = '127.0.0.1';
$password = "";
$dbname = 'site';

//connection to the database
$dbhandle = mysql_connect($host, $userName, $password) or die("Unable to connect to MySQL");
echo "Database Connected";
mysql_select_db($dbname, $dbhandle) or DIE('Database name is not available!');
echo "Database NAme";
?>
