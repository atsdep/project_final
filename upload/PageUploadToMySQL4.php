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
	//$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
	//$objDB = mysql_select_db("mydatabase");
	$strSQL = "SELECT * FROM files WHERE FilesID = '".$_GET["FilesID"]."' ";
	$objQuery = mysqli_query($connect, $strSQL) or die ("Error Query [".$strSQL."]");
	$objResult = mysqli_fetch_array($objQuery);
?>
	<form name="form1" method="post" action="PageUploadToMySQL5.php?FilesID=<?php echo $_GET["FilesID"];?>" enctype="multipart/form-data">
	Edit Picture :<br>
	Name : <input type="text" name="txtName" value="<?php echo $objResult["Name"];?>"><br>
	<img style="position: relative; width: 300px; height: auto;"  src="myfile/<?php echo $objResult["FilesName"];?>"><br>
	Picture : <input type="file" name="filUpload"><br>
	<input type="hidden" name="hdnOldFile" value="<?php echo $objResult["FilesName"];?>">
	<input name="btnSubmit" type="submit" value="Submit">
	</form>
</body>
</html>
<?php
require 'closedb.php';
?>