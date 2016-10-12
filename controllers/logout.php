<?php
session_start();
session_destroy();
if(isset($_GET['return'])){
	if($_GET['return']!= "/new.php"){
		header("location:".$_GET['return']);
	}else{
		header("location:..\index.php");
	}
}else{
	header("location:..\index.php");
}

exit();
?>