<?php
session_start();
require ("../config/database.php");
require ("../config/connectdb.php");
require '../config/datetime.php';
if (isset($_POST["mode"])) {
	$member_id = $_SESSION['member_id'];

	if ($_POST["mode"] == "booking") {

		$date = date("Y-m-d H:i:s");
		$sql_insert_booking = "INSERT INTO bookings (booking_code
		,member_id
		,announce_id
		,booking_description
		,booking_destination
		,booking_passenger
		,booking_date_begin
		,booking_date_end
		,booking_create_date
		,booking_total_price
		)values('" . $_POST["booking_code"] . "'
		,'" . $member_id . "'
		,'" . $_POST["announce_id"] . "'
		,'" . $_POST["message"] . "'
		,'" . $_POST["destination"] . "'
		,'" . $_POST["booking_passenger"] . "'
		,'" . $_POST["booking_date_begin"] . "'
		,'" . $_POST["booking_date_end"] . "'
		,'" . $date . "'
		,'" . $_POST["totalprice"] . "'
		)";

		$add_booking_query = mysqli_query($connect, $sql_insert_booking);
		if (!$add_booking_query) {
			$data["error"] = true;
			$data["msg"] = "จองไม่สำเร็จ " . $sql_insert_booking;
		} else {
			$data["error"] = false;
			$data["msg"] = "จองเรียบร้อย " . $sql_insert_booking;
		}
	}

} else {
	header("location:../index.php");
}

echo json_encode($data);
require ("../config/closedb.php");
?>