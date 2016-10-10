<?php
$connect = mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$utf8 = mysqli_set_charset($connect, "utf8");
?>