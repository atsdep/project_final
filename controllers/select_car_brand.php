<?php
if (isset($_SESSION['login'])) {
	$query_car_brand = mysqli_query($connect, "SELECT * FROM car_brand ORDER BY car_brand_name ASC;");
}
?>