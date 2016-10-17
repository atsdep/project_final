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

	if (isset($_SESSION['member_id'])) {
		$sql_select_member = "SELECT * FROM members WHERE  member_id = '" . $_SESSION['member_id'] . "'";
		$query_select_member = mysqli_query($connect, $sql_select_member);
		$row_select_member = mysqli_num_rows($query_select_member);
		if (!$query_select_member) {
			header("location:index.php");
		} else {
			if ($row_select_member == 1) {
				$result_member = mysqli_fetch_assoc($query_select_member);
			} else {
				header("location:index.php");
			}
		}
	}

	if ($_POST["mode"] == "province") {

		if (isset($_POST['ann_id']) and strlen($_POST['ann_id']) == 10) {
			$sql_select_announce = "SELECT * FROM announces WHERE announce_id = '" . $_POST['ann_id'] . "' and member_id = '" . $_SESSION['member_id'] . "'";
			$query_select_announce = mysqli_query($connect, $sql_select_announce);
			$row_select_announce = mysqli_num_rows($query_select_announce);
			if (!$query_select_announce) {
				header("location:index.php");
			} else {
				if ($row_select_announce == 1) {
					$sql_update_ann = "UPDATE announces SET car_province = '" . $_POST["province"] . "' WHERE announce_id = '" . $_POST['ann_id'] . "'";

					$update_ann_query = mysqli_query($connect, $sql_update_ann);

					if (!$update_ann_query) {
						$data["error"] = true;
						$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;
					} else {
						$data["goto"] = "map.php?id=" . $_POST["ann_id"];
						$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;

					}

				} else {
					header("location:index.php");
				}
			}

		} else {
			$date = date("Y-m-d H:i:s");
			$sql_insert_ann = "INSERT INTO announces (member_id,car_province,announce_create_date)
			values($member_id,'" . $_POST["province"] . "', '" . $date . "' )";

			$add_ann_query = mysqli_query($connect, $sql_insert_ann);
			if (!$add_ann_query) {
				$data["error"] = true;
				$data["msg"] = "ลงประกาศไม่สำเร็จ " . $sql_insert_ann;
			} else {

				$sql_select_ann = "SELECT * FROM announces WHERE member_id = $member_id ORDER BY announce_id DESC Limit 1";
				$ann_query = mysqli_query($connect, $sql_select_ann);

				$result_select_ann = mysqli_fetch_assoc($ann_query);
				$row_select_ann = mysqli_num_rows($ann_query);

				if ($row_select_ann == 1) {
					$data["error"] = false;
					$data["msg"] = "บันทึกเรียบร้อยแล้ว ";
					$data["ann_id"] = $result_select_ann['announce_id'];
					$data["goto"] = "map.php?id=" . $result_select_ann['announce_id'];
				} else {
					$data["error"] = true;
					$data["msg"] = "ระบบผิดพลาด ";
				}
			}
		}

	} else if ($_POST["mode"] == "car-gene") {

		$sql_update_ann = "UPDATE announces SET car_gene_id = '" . $_POST["car_gene"] . "'
		WHERE announce_id = '" . $_POST["ann_id"] . "'";

		$update_ann_query = mysqli_query($connect, $sql_update_ann);

		if (!$update_ann_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;
		} else {

			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;

		}

	} else if ($_POST["mode"] == "car-year") {

		$sql_update_ann = "UPDATE announces SET car_year = '" . $_POST["car_year"] . "'
		WHERE announce_id = '" . $_POST["ann_id"] . "'";

		$update_ann_query = mysqli_query($connect, $sql_update_ann);

		if (!$update_ann_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;
		} else {

			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;

		}

	} else if ($_POST["mode"] == "type_of_fuel") {

		$sql_update_ann = "UPDATE announces SET type_of_fuel = '" . $_POST["type_of_fuel"] . "'
		WHERE announce_id = '" . $_POST["ann_id"] . "'";

		$update_ann_query = mysqli_query($connect, $sql_update_ann);

		if (!$update_ann_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;
		} else {

			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;

		}

	} else if ($_POST["mode"] == "passenger") {

		$sql_update_ann = "UPDATE announces SET announce_passenger = '" . $_POST["passenger"] . "'
		WHERE announce_id = '" . $_POST["ann_id"] . "'";

		$update_ann_query = mysqli_query($connect, $sql_update_ann);

		if (!$update_ann_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;
		} else {

			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;

		}

	} else if ($_POST["mode"] == "amenities") {

		$sql_update_ann = "UPDATE announces SET wifi = '" . $_POST["wifi"] . "'
		,water = '" . $_POST["water"] . "'
		,book = '" . $_POST["book"] . "'
		,music = '" . $_POST["music"] . "'
		,tissues = '" . $_POST["tissues"] . "'
		,220v = '" . $_POST["v220v"] . "'
		,purifier = '" . $_POST["purifier"] . "'
		,childseat = '" . $_POST["childseat"] . "'
		,monitor =  '" . $_POST["monitor"] . "'
		WHERE announce_id = '" . $_POST["ann_id"] . "'";

		$update_ann_query = mysqli_query($connect, $sql_update_ann);

		if (!$update_ann_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;
		} else {

			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;
		}
	} else if ($_POST["mode"] == "additional_service") {

		if ($result_select_announce['announce_status'] == 'unready') {
			$sql_update_ann = "UPDATE announces SET car_stop = '" . $_POST["car_stop"] . "'
			,announce_status = 'step1'
			WHERE announce_id = '" . $_POST["ann_id"] . "'";
		} else {
			$sql_update_ann = "UPDATE announces SET car_stop = '" . $_POST["car_stop"] . "'
			WHERE announce_id = '" . $_POST["ann_id"] . "'";
		}

		$update_ann_query = mysqli_query($connect, $sql_update_ann);

		if (!$update_ann_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;
		} else {

			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;
		}
	} else if ($_POST["mode"] == "description") {

		$sql_update_ann = "UPDATE announces SET announce_description = '" . $_POST["description"] . "'
		WHERE announce_id = '" . $_POST["ann_id"] . "'";

		$update_ann_query = mysqli_query($connect, $sql_update_ann);

		if (!$update_ann_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;
		} else {

			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;
		}
	} else if ($_POST["mode"] == "title") {

		if ($result_select_announce['announce_status'] == 'step1') {
			$sql_update_ann = "UPDATE announces SET announce_title = '" . $_POST["title"] . "'
			,announce_status = 'step2'
			WHERE announce_id = '" . $_POST["ann_id"] . "'";
		} else {
			$sql_update_ann = "UPDATE announces SET announce_title = '" . $_POST["title"] . "'
			WHERE announce_id = '" . $_POST["ann_id"] . "'";

		}

		$update_ann_query = mysqli_query($connect, $sql_update_ann);

		if (!$update_ann_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;
		} else {

			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;
		}
	} else if ($_POST["mode"] == "add-telephone") {

		$sql_update_member = "UPDATE members SET member_telephone = '" . $_POST["tel_number"] . "'
		,member_otp = '" . $_POST["otp"] . "'
		WHERE member_id = '" . $_SESSION['member_id'] . "'";

		$update_member_query = mysqli_query($connect, $sql_update_member);

		if (!$update_member_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_member;
		} else {

			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_member;
		}
	} else if ($_POST["mode"] == "phone_number_verification") {

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
	} else if ($_POST["mode"] == "scope") {

		$sql_update_ann = "UPDATE announces SET announce_scope = '" . $_POST["scope"] . "'
		WHERE announce_id = '" . $_POST["ann_id"] . "'";

		$update_ann_query = mysqli_query($connect, $sql_update_ann);

		if (!$update_ann_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;
		} else {

			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;
		}
	} else if ($_POST["mode"] == "price_terms") {

		$sql_update_ann = "UPDATE announces SET fuel_expenses = '" . $_POST["fuel"] . "'
		,expressway_expenses = '" . $_POST["expressway"] . "'
		,park_expenses = '" . $_POST["park"] . "'
		WHERE announce_id = '" . $_POST["ann_id"] . "'";

		$update_ann_query = mysqli_query($connect, $sql_update_ann);

		if (!$update_ann_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;
		} else {

			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;
		}
	} else if ($_POST["mode"] == "price") {

		$sql_update_ann = "UPDATE announces SET announce_price = '" . $_POST["price"] . "'
		WHERE announce_id = '" . $_POST["ann_id"] . "'";

		$update_ann_query = mysqli_query($connect, $sql_update_ann);

		if (!$update_ann_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;
		} else {

			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;
		}
	} else if ($_POST["mode"] == "update_calendar") {

		$member_id = $_SESSION['member_id'];

		if ($_POST["open_length"] > 0) {
			for ($i = 0; $i < $_POST["open_length"]; $i++) {
				$row_open_date = 0;
				$sql_select_open_date = "SELECT * FROM calendars WHERE date = '" . $_POST["open"][$i] . "' AND member_id = $member_id";
				$query_open_date = mysqli_query($connect, $sql_select_open_date);
				$row_open_date = mysqli_num_rows($query_open_date);
				if ($row_open_date > 0) {
					$sql_update_open_date = "UPDATE calendars SET status = '1' WHERE date = '" . $_POST["open"][$i] . "' AND member_id = $member_id;";
					$query_update_open_date = mysqli_query($connect, $sql_update_open_date);
					if (!$query_update_open_date) {
						$data["error"] = true;
						$data["msg"][$i] = $i . "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง" . $sql_update_open_date;
					} else {
						$data["error"] = false;
						$data["msg"][$i] = $i . "อัพเดทเรียบร้อยแล้ว" . $sql_update_open_date;
					}
				} else {
					$sql_insert_open_date = "INSERT INTO calendars (member_id, date, status)VALUES ( $member_id, '" . $_POST["open"][$i] . "' , '1');";
					$query_insert_open_date = mysqli_query($connect, $sql_insert_open_date);
					if (!$query_insert_open_date) {
						$data["error"] = true;
						$data["msg"][$i] = $i . "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง" . $sql_insert_open_date;
					} else {
						$data["error"] = false;
						$data["msg"][$i] = $i . " วันที่เปิด " . $sql_insert_open_date;
					}
				}
			}
		}
		if ($_POST["close_length"] > 0) {
			for ($i = 0; $i < $_POST["close_length"]; $i++) {
				$row_close_date = 0;
				$sql_select_close_date = "SELECT * FROM calendars WHERE date = '" . $_POST["close"][$i] . "' AND member_id = $member_id";
				$query_close_date = mysqli_query($connect, $sql_select_close_date);
				$row_close_date = mysqli_num_rows($query_close_date);
				if ($row_close_date > 0) {
					$sql_update_close_date = "UPDATE calendars SET status = '0' WHERE date = '" . $_POST["close"][$i] . "' AND member_id = $member_id;";
					$query_update_close_date = mysqli_query($connect, $sql_update_close_date);
					if (!$query_update_close_date) {
						$data["error"] = true;
						$data["msg"][$i] = $i . "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง" . $sql_update_close_date;
					} else {
						$data["error"] = false;
						$data["msg"][$i] = $i . "อัพเดทเรียบร้อยแล้ว" . $sql_update_close_date;
					}
				} else {
					$sql_insert_close_date = "INSERT INTO calendars (member_id, date, status)VALUES ( $member_id, '" . $_POST["close"][$i] . "' , '0');";
					$query_insert_close_date = mysqli_query($connect, $sql_insert_close_date);
					if (!$query_insert_close_date) {
						$data["error"] = true;
						$data["msg"][$i] = $i . "ขออถัยไม่สามารถบันทึกข้อมูลได้ในขณะนี้ โปรดกลับมาใหม่ในภายหลัง" . $sql_insert_close_date;
					} else {
						$data["error"] = false;
						$data["msg"][$i] = $i . " วันที่เปิด " . $sql_insert_close_date;
					}
				}
			}
		}

	} else if ($_POST["mode"] == "customer_requiements") {

		$sql_update_member = "UPDATE members SET id_verify_booking = '" . $_POST["government_id"] . "'
		WHERE member_id = '" . $_SESSION['member_id'] . "'";

		$update_member_query = mysqli_query($connect, $sql_update_member);

		if (!$update_member_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_member;
		} else {
			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_member;

		}

	} else if ($_POST["mode"] == "smoking") {

		$sql_update_ann = "UPDATE announces SET smoking = '" . $_POST["smoking"] . "'
		WHERE announce_id = '" . $_POST["ann_id"] . "'";

		$update_ann_query = mysqli_query($connect, $sql_update_ann);

		if (!$update_ann_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;
		} else {
			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;
		}
	} else if ($_POST["mode"] == "pet") {

		$sql_update_ann = "UPDATE announces SET pet = '" . $_POST["pet"] . "'
		WHERE announce_id = '" . $_POST["ann_id"] . "'";

		$update_ann_query = mysqli_query($connect, $sql_update_ann);

		if (!$update_ann_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;
		} else {
			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;
		}
	} else if ($_POST["mode"] == "announce_ready") {

		if ($result_select_announce['announce_status'] == 'step2') {

			$sql_update_ann = "UPDATE announces SET announce_status = 'ready'
		WHERE announce_id = '" . $_POST["ann_id"] . "'";

			$update_ann_query = mysqli_query($connect, $sql_update_ann);

			if (!$update_ann_query) {
				$data["error"] = true;
				$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;
			} else {
				$data["error"] = false;
				$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;
			}

		} else {
			$data["error"] = false;
		}

	} else if ($_POST["mode"] == "announce_show") {

		$sql_update_ann = "UPDATE announces SET announce_status = 'show'
		WHERE announce_id = '" . $_POST["ann_id"] . "'";

		$update_ann_query = mysqli_query($connect, $sql_update_ann);

		if (!$update_ann_query) {
			$data["error"] = true;
			$data["msg"] = "ระบบผิดพลาด " . $sql_update_ann;

		} else {
			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $sql_update_ann;
			$data["goto"] = "mycar.php";
		}
	}

} else {
	header("location:../index.php");
}

echo json_encode($data);
require ("../config/closedb.php");
?>