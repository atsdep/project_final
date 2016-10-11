<?php
if (isset($_SESSION['login'])) {
	$query_province = mysqli_query($connect, "SELECT * FROM provinces Order by PROVINCE_NAME ASC");
}
?>