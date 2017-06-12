<?php
include "../Modal/dbConnection.php";

$myusername = $_POST['u'];
$color      = $_POST['p'];
$mobile     = $_POST['m'];

$myusername = stripslashes($myusername);
$color      = stripslashes($color);
$mobile     = stripslashes($mobile);
$myusername = mysql_real_escape_string($myusername);
$color      = mysql_real_escape_string($color);
$mobile     = mysql_real_escape_string($mobile);

$sql="SELECT * FROM userlogin WHERE Name='$myusername' and Mobile='$mobile'";
$result=mysql_query($sql);


// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_start();
$_SESSION['un'] = $myusername;

header("location: ../userPanel.php");
}
else {
echo "<br/><h1>Invalid Username or Password</h1><br/>Try again";
$url = "index.php";
header("Refresh: 2; url=".$url);
}

$uName = $_POST['u'];
$password = $_POST['p'];
$mobile   = $_POST['m'];


$query = "SELECT * FROM `userlogin` WHERE 'Name'='$userName'";

echo $query;

echo $userName;
echo $password;
echo $mobile;
?>
