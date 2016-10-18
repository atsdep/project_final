<?php
header('Content-Type: text/html; charset=utf-8');
// echo date("d/m/Y",strtotime(str_replace('/', '-', '2016-10-10'))). "<br>";
//
// //$birthday = $_POST['year'] . "-" . $_POST['month'] ."-". $_POST['day'];
// echo $birthday = 2016 . "-" . 06 ."-". 23 . "<br>";
//
// echo date("Y-m-d",strtotime(str_replace('/', '-', 2016 . "-" . 06 ."-". 23))). "<br>";
// echo strlen($_GET['id']). "<br>";
// //header("location:http://".$_SERVER['HTTP_HOST']."/start.php");
// $location = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
// echo $location . "<br>";
// $string = $_SERVER['REQUEST_URI'];
// if(!stristr($string, 't') === FALSE) {
// echo '"earth" not found in string'. "<br>";
// }else{
// echo 'have'. "<br>";

function DateThai($strDate) {
	$strYear = date("Y", strtotime($strDate));
	$strMonth = date("n", strtotime($strDate));
	$strDay = date("j", strtotime($strDate));
	$strHour = date("H", strtotime($strDate));
	$strMinute = date("i", strtotime($strDate));
	$strSeconds = date("s", strtotime($strDate));
	$strMonthCut = ARRAY("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
	$strMonthThai = $strMonthCut[$strMonth];
	return "$strDay $strMonthThai $strYear";
}

//$date_begin = date("Y/m/d", strtotime(str_replace('/', '-', '19/10/2016')));

$test = date("Y,m,d", strtotime(str_replace('/', '-', '19/10/2016')));

echo  date("Y,m,d", strtotime(str_replace('/', '-', '19/10/2016')));
echo date("Y,m,d", strtotime(str_replace('/', '-', '19/10/2016')));
//$strDate = $date_begin;

//echo DateThai($strDate). "<br>";

//echo $date_begin. "<br>";
echo $test. "<br>";
// echo 'print_r($_GET);';
// echo '<br>';
// print_r($_GET);
// echo '<br>';
//
// echo '<br>';
// echo 'print_r($_GET["car_category"]);';
// echo '<br>';
// print_r($_GET['car_category']);
//
// echo '<br>';
// echo 'print_r($_GET["room_types"]);';
// echo '<br>';
// print_r($_GET["room_types"]);
?>