<?php
if (isset($_SESSION['login'])) {
	$query_type = mysqli_query($connect, "SELECT type_of_fuel FROM announces ORDER BY type_of_fuel ASC;");
}
?>