<?php
$host = 'localhost';
$username = 'root';
$pw='';
$database = 'smcnews';
$conn = mysql_connect($host,$username,$pw,$databse);
if($conn){
	die("Connection failed".mysqli_connect_error());
}

?>