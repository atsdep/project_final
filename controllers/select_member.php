<?php

if (isset($_SESSION['login'])) {
	$query = mysqli_query($connect, "SELECT * FROM members WHERE member_id =  '" . $_SESSION['member_id'] . "' ");
	$result_mem = mysqli_fetch_assoc($query);
}
?>