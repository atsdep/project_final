<?php
session_start();
require ("../config/database.php");
require ("../config/connectdb.php");

if (isset($_POST["mode"])) {

	if ($_POST["mode"] == "add") {
		

		$birthday = date("Y-m-d",strtotime(str_replace('/', '-', $_POST['year'] . "-" . $_POST['month'] ."-". $_POST['day'])));
		$query = mysqli_query($connect, "INSERT INTO members(member_firstname
		,member_lastname
		,member_username
		,member_password
		,member_birthday
		)
		values('" . $_POST["fn"] . "'
		, '" . $_POST["ln"] . "'
		,'" . $_POST["em"] . "'
		,'" . md5($_POST["pw"]) . "'
		, '$birthday'
		);");

		if (!$query) {
			$data["error"] = true;
			$data["msg"] = "โปรดติดต่อผู้ดูแลระบบ";

		} else {
			$data["error"] = false;
			$data["msg"] = "รอโค๊ดเข้าสู่ระบบอัตโนมัติ";
		}
	} else if ($_POST["mode"] == "login") {
		$query = "SELECT * FROM members WHERE member_username = '" .$_POST["em"]. "' AND member_password = '".md5($_POST["pw"])."' ";
		$login_query = mysqli_query($connect, $query);
		
		$result_login = mysqli_fetch_assoc($login_query);
		$row_login = mysqli_num_rows($login_query);
		
		if($row_login == 1){
			if($_POST['re']){
				$data["error"] = false;
				$data["msg"] = $result_login["member_firstname"];
				$_SESSION['login'] = true;
				$_SESSION['member_id']= $result_login["member_id"];
				$_SESSION['member_firstname']= $result_login["member_firstname"];
				$data["repage"] = $_POST['re'];
				
			}else{
				$data["error"] = false;
				$data["msg"] = $result_login["member_firstname"];
				$_SESSION['login'] = true;
				$_SESSION['member_id']= $result_login["member_id"];
			}
			
		}else{
			$data["error"] = true;
			$data["msg"] = "อีเมลล์หรือรหัสผ่านของคุณไม่ถูกต้อง";
		}
	}

} else {
	header("location:../index.php");
}
echo json_encode($data);
require ("../config/closedb.php");
?>