<?php
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

$user = $_GET['username'];
$username = addslashes($user);
$password = $_GET['password'];
$pwd = md5($password);
$sql = "select * from mc where mc_id='{$username}' and password='{$pwd}' limit 1;";
echo 'sql:',$sql,"<br>";
mysql_close();  
?>