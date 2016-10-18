<?php
session_start();
require ("../config/database.php");
require ("../config/connectdb.php");
require '../config/datetime.php';
if (isset($_POST["mode"])) {
	$member_id = $_SESSION['member_id'];

	if ($_POST["mode"] == "verify_profile") {

		$sql_update_member = "UPDATE members SET member_profile_photo = 'profile-4.jpg'
		WHERE member_id = '" . $_SESSION['member_id']. "'";

		$update_member_query = mysqli_query($connect, $sql_update_member);

		if (!$update_member_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_member;
		} else {

			$data["msg"] = "อัพเดทเรียบร้อยแล้ว " . $sql_update_member;

		}

	} else if ($_POST["mode"] == "add-telephone") {

		$sql_update_member = "UPDATE members SET member_telephone = '" . $_POST["activation_phone_number"] . "'
		,member_otp = '" . $_POST["otp"] . "'
		WHERE member_id = '" . $_SESSION['member_id'] . "'";

		$update_member_query = mysqli_query($connect, $sql_update_member);

		if (!$update_member_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_member;
		} else {

			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_member;
		}
	}else if ($_POST["mode"] == "phone_number_verification") {

		$sql_select_member = "SELECT member_otp FROM members WHERE member_otp = '" . $_POST["otp"] . "'
		AND member_id = '" . $_SESSION['member_id'] . "'";

		$select_member_query = mysqli_query($connect, $sql_select_member);
		$row_member = mysqli_num_rows($select_member_query);

		if ($row_member == 1) {

			$sql_update_member = "UPDATE members SET member_telephone_verified = '1'
			WHERE member_id = '" . $_SESSION['member_id'] . "'";
			$update_member_query = mysqli_query($connect, $sql_update_member);

			if (!$update_member_query) {
				$data["error"] = true;
				$data["msg"] = "ระบบผิดพลาด " . $sql_update_member;
			} else {
				$data["error"] = false;
				$data["result"] = 'correct';
				$data["msg"] = "ถูกต้อง " . $sql_update_member;
			}

		} else {

			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_select_member;
		}
	}
} else {
	header("location:../index.php");
}

echo json_encode($data);
require ("../config/closedb.php");
?>