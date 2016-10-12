<?php
	$sql_select_member = "SELECT * FROM members WHERE  member_id = '".$_SESSION['member_id']."'";
	$query_select_member = mysqli_query($connect, $sql_select_member);
	$row_select_member = mysqli_num_rows($query_select_member);
	if(!$query_select_member){
		header("location:index.php");
	}else{
		if($row_select_member ==1){
			$result_member = mysqli_fetch_assoc($query_select_member);
		}else{
			header("location:index.php");
		}
	}
?>