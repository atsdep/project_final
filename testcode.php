<?php

echo date("d/m/Y",strtotime(str_replace('/', '-', '2016-10-10')));

//$birthday = $_POST['year'] . "-" . $_POST['month'] ."-". $_POST['day'];
echo $birthday = 2016 . "-" . 06 ."-". 23;

echo date("Y-m-d",strtotime(str_replace('/', '-', 2016 . "-" . 06 ."-". 23)));
header("location:http://".$_SERVER['HTTP_HOST']."/start.php");
?>