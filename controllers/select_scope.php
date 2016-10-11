<?php

if (isset($_SESSION['login'])) {
	$query = mysqli_query($connect, "SELECT announce_scope FROM announces WHERE announce_id =  '" . $_SESSION['new_ann_id'] . "' ");
	$result_scope = mysqli_fetch_assoc($query);
}
?>