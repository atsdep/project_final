<?php
if(isset($_GET['id']) and strlen($_GET['id']) == 10){
	$sql_select_announce = "SELECT announce_id FROM announces WHERE announce_id = '".$_GET['id']."'";
	$query_select_announce = mysqli_query($connect, $sql_select_announce);
	$row_select_announce = mysqli_num_rows($query_select_announce);
	if(!$query_select_announce){
		header("location:for_rent.php");
	}else{
		if($row_select_announce ==1){
			//$result_select_announce = mysqli_fetch_assoc($query_select_announce);
		}else{
			header("location:for_rent.php");
		}
	}
}else if(!isset($_GET['id'])){
	header("location:for_rent.php");
}else{
	header("location:for_rent.php");
}
?>