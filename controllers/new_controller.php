<?php
session_start();
require ("../config/database.php");
require ("../config/connectdb.php");
if (isset($_POST["mode"])) {
	$member_id = $_SESSION['member_id'];
	if ($_POST["mode"] == "step1-1") {

		$sql_insert_ann = "INSERT INTO announces (member_id,car_gene_id,car_year)
			values($member_id,'" . $_POST["gene"] . "','" . $_POST["year"] . "')";

		$add_ann_query = mysqli_query($connect, $sql_insert_ann);
		if (!$add_ann_query) {
			$data["error"] = true;
			$data["msg"] = "โปรดติดต่อผู้ดูแลระบบ";
		} else {

			$sql_select_ann = "SELECT * FROM announces WHERE member_id = $member_id ORDER BY announce_id DESC LIMIT 1";
			$ann_query = mysqli_query($connect, $sql_select_ann);
			
			$result_select_ann = mysqli_fetch_assoc($ann_query);
			$row_select_ann = mysqli_num_rows($ann_query);
			
			if($row_select_ann == 1){
				$_SESSION['new_ann_id'] = $result_select_ann['announce_id'];;
			}
			
			$data["error"] = false;
			$data["msg"] = "บันทึกเรียบร้อยแล้ว " . $_SESSION['new_ann_id'];
			$data["goto"] = "amenities.php?id=".$_SESSION['new_ann_id'];
		}
	}

} else {
	header("location:../index.php");
}

echo json_encode($data);
require ("../config/closedb.php");
?>