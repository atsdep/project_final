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

		//*** Update Record ***//
		//$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
		//$objDB = mysql_select_db("mydatabase");

		$strSQL = "UPDATE files ";
		$strSQL .=" SET NAME = '".$_POST["txtName"]."' WHERE FilesID = '".$_GET["FilesID"]."' ";
		$objQuery = mysqli_query($connect, $strSQL);		
	
	if($_FILES["filUpload"]["name"] != "")
	{
		if(copy($_FILES["filUpload"]["tmp_name"],"myfile/".$_FILES["filUpload"]["name"]))
		{

			//*** Delete Old File ***//			
			@unlink("myfile/".$_POST["hdnOldFile"]);
			
			//*** Update New File ***//
			$strSQL = "UPDATE files ";
			$strSQL .=" SET FilesName = '".$_FILES["filUpload"]["name"]."' WHERE FilesID = '".$_GET["FilesID"]."' ";
			$objQuery = mysqli_query($connect, $strSQL);		

			echo "Copy/Upload Complete<br>";

		}
	}
?>
<a href="PageUploadToMySQL3.php">View files</a>
</body>
</html>

<?php
require 'closedb.php';
?>