<?php
require 'database.php';
require 'connectdb.php';
?>

<html>
<head>
<title>Rentcnd test upload</title>
</head>
<body>
<?php
	if(copy($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
	{

		//$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
		//$objDB = mysql_select_db("mydatabase");
		$strSQL = "INSERT INTO files ";
		$strSQL .="(Name,FilesName) VALUES ('".$_POST["txtName"]."','".$_FILES["filUpload"]["name"]."')";
		$objQuery = mysqli_query($connect, $strSQL);
		
		if(!$objQuery){
			echo $strSQL;
		}else{
			//echo 'save ' . $strSQL;
		}
	}else{
		echo 'test';
	}
	require 'closedb.php';
?>
<a href="PageUploadToMySQL3.php">View files</a>
</body>
</html>