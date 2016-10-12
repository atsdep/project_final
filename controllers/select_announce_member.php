<?php

if (isset($_SESSION['login'])) {
	$query = mysqli_query($connect, "SELECT * FROM announces WHERE member_id =  '" . $_SESSION['member_id'] . "' ");
	$result_ann = mysqli_fetch_assoc($query);
	$row_ann = mysqli_num_rows($query);
}
?>