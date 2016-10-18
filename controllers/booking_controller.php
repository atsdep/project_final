<?php
session_start();
require ("../config/database.php");
require ("../config/connectdb.php");
require '../config/datetime.php';
if (isset($_POST["mode"])) {
	$member_id = $_SESSION['member_id'];

	if (isset($_POST['ann_id']) and strlen($_POST['ann_id']) == 10) {
		$sql_select_announce = "SELECT * FROM announces WHERE announce_id = '" . $_POST['ann_id'] . "' and member_id = '" . $_SESSION['member_id'] . "'";
		$query_select_announce = mysqli_query($connect, $sql_select_announce);
		$row_select_announce = mysqli_num_rows($query_select_announce);
		if (!$query_select_announce) {
			header("location:index.php");
		} else {
			if ($row_select_announce == 1) {
				$result_select_announce = mysqli_fetch_assoc($query_select_announce);
			} else {
				header("location:index.php");
			}
		}
	}
} else {
	header("location:../index.php");
}

echo json_encode($data);
require ("../config/closedb.php");
?>