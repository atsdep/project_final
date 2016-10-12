<?php
session_start();
session_destroy();
if(isset($_GET['return'])){
	header("location:".$_GET['return']);
}else{
	header("location:..\index.php");
}

exit();
?>