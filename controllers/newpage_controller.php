<?php
if(isset($_GET['id']) and strlen($_GET['id']) == 10){
	$sql_select_announce = "SELECT * FROM announces WHERE announce_id = '".$_GET['id']."' and member_id = '".$_SESSION['member_id']."'";
	$query_select_announce = mysqli_query($connect, $sql_select_announce);
	$row_select_announce = mysqli_num_rows($query_select_announce);
	if(!$query_select_announce){
		header("location:index.php");
	}else{
		if($row_select_announce ==1){
			$result_select_announce = mysqli_fetch_assoc($query_select_announce);
		}else{
			header("location:index.php");
		}
	}
}else{
	$string = $_SERVER['REQUEST_URI'];
  	if(stristr($string, 'new.php') === FALSE and stristr($string, 'province.php') === FALSE) {
	header("location:index.php");
	}
}
?>