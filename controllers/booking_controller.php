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
		,booking_member_id
		,announce_id
		,booking_destination
		,booking_passenger
		,booking_date_begin
		,booking_date_end
		,booking_create_date
		,booking_total_price
		)values('" . $_POST["booking_code"] . "'
		,'" . $member_id . "'
		,'" . $_POST["announce_id"] . "'
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
						
			$sql = "SELECT booking_id FROM bookings WHERE booking_member_id = $member_id ORDER by  booking_create_date DESC LIMIT 1";
			$query = mysqli_query($connect, $sql);		
			$row = mysqli_num_rows($query);
			if ($row != 1) {
				$data["error"] = true;
				$data["msg"] = "จองไม่สำเร็จ " . $sql;
			} else {
				$result = mysqli_fetch_assoc($query);
				$sql_insert = "INSERT INTO message (message_booking_id)values('" . $result['booking_id'] . "')";
				$query_insert = mysqli_query($connect, $sql_insert);
				if (!$query_insert) {
					$data["error"] = true;
					$data["msg"] = "จองไม่สำเร็จ " . $sql_insert;
				} else {
					$sql = "SELECT message_id FROM message WHERE message_booking_id = '" . $result['booking_id'] . "'";
					$query = mysqli_query($connect, $sql);		
					$row = mysqli_num_rows($query);
					if ($row != 1) {
						$data["error"] = true;
						$data["msg"] = "จองไม่สำเร็จ " . $sql;
					} else {
						$result = mysqli_fetch_assoc($query);
						$sql_insert = "INSERT INTO message_detail (message_text
						,message_member_id
						,message_id
						)values('" . $_POST["message"] . "'
						,'" . $member_id . "'
						,'" . $result['message_id'] . "'
						)";
						$query_insert = mysqli_query($connect, $sql_insert);
						if (!$query_insert) {
							$data["error"] = true;
							$data["msg"] = "จองไม่สำเร็จ " . $sql_insert;
						} else {
							$data["error"] = false;
							$data["msg"] = "จองเรียบร้อย " . $sql_insert;
						}
					}
				}
			}	
			
			
		}
	}

} else {
	header("location:../index.php");
}

echo json_encode($data);
require ("../config/closedb.php");
?>