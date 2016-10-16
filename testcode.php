<?php

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

echo 'print_r($_GET);';
echo '<br>';
print_r($_GET); 
echo '<br>';

echo '<br>';
echo 'print_r($_GET["car_category"]);';
echo '<br>';
print_r($_GET['car_category']);

echo '<br>';
echo 'print_r($_GET["room_types"]);';
echo '<br>';
print_r($_GET["room_types"]);

?>