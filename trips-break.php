<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_SESSION['member_id'])) {
	//header("location:http://".$_SERVER['HTTP_HOST']."?pleaselogin=1");
	header("location:index.php?login=" . urlencode($_SERVER['REQUEST_URI']) . "&error=1");
	exit(0);
} else {
	require ("controllers/select_member.php");
}
?>
<!DOCTYPE html>
<html lang="th">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>การจองของคุณ - Rentcnd</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">

		<link rel="stylesheet" href="css/mycar.css">

		<link rel="stylesheet" href="css/adthasid.css">

		<link rel="stylesheet" href="css/trips.css">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<?php
		include 'config/js.php';
		?>
		<script src="js/trips_controller.js" type="text/javascript"></script>
	</head>

	<body class="with-new-header ">

		<?php
		include 'include/all_header.php';
		function DateThai($strDate) {
			$strYear = date("Y", strtotime($strDate));
			$strMonth = date("n", strtotime($strDate));
			$strDay = date("j", strtotime($strDate));
			$strHour = date("H", strtotime($strDate));
			$strMinute = date("i", strtotime($strDate));
			$strSeconds = date("s", strtotime($strDate));
			$strMonthCut = ARRAY("", "มกรา", "กุมภา", "มีนา", "เมษา", "พฤษภา", "มิถุนา", "กรกฎา", "สิงหา", "กันยา", "ตุลา", "พฤศจิกา", "ธันวา");
			$strMonthThai = $strMonthCut[$strMonth];
			return "$strDay $strMonthThai $strYear";
		}
		?>
		<main id="site-content" role="main">

			<div class="subnav hide-print">
				<div class="page-container-responsive">
					<ul class="subnav-list">
						<li>
							<a href="mycar.php" aria-selected="false" class="subnav-item cohosting-ml-tooltip-trigger" id="rooms-item">รถเช่าของคุณ</a>
						</li>
						<li>
							<a href="users.php" aria-selected="false" class="subnav-item" id="user-profile-item">โปรไฟล์</a>
						</li>
						<li>
							<a href="trips.php" aria-selected="true" class="subnav-item" id="account-item">การเดินทางของคุณ</a>
						</li>
						<li>
							<a href="account.php" aria-selected="false" class="subnav-item" id="account-item">บัญชี</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="page-container-responsive space-top-4 space-4">

				<div class="row">
					<div class="col-md-3 space-sm-3">
						<ul class="sidenav-list">
							<li>
								<a href="trips.php" aria-selected="true" class="sidenav-item">การเดินทางของคุณ</a>
							</li>
							<!-- <div class="space-top-4 space-4">
							<a href="new.php" aria-selected="false" class="btn btn-host">เพิ่มรถเช่าใหม่</a>
							</div> -->

						</ul>
					</div>
					<div class="col-md-9">
						<div class="your-listings-flash-container"></div>

						<div class="panel">
							<div class="panel-body">
							<?php 
								$sql_select_booking = "SELECT provinces.PROVINCE_NAME,
								bookings.*
								FROM bookings
								INNER JOIN provinces
								ON provinces.PROVINCE_ID = bookings.booking_destination
								WHERE member_id = '" . $_SESSION['member_id'] . "' AND booking_status != 'finish' ORDER BY booking_date_begin ASC ";
								$query_select_booking = mysqli_query($connect, $sql_select_booking);
								$row_booking = mysqli_num_rows($query_select_booking);
								
								if($row_booking >= 1){
							?>
								<p>
									การจองที่กำลังจะมาถึง
								</p>
								
								<div class="col-lg-12 col-md-12 col-sm-12">
									<table>
										<tr>
											<th>รหัสการจอง</th>
											<th>ปลายทาง</th>
											<th>เริ่มต้น</th>
											<th>สิ้นสุด</th>
											<th>ราคา</th>
											<th>สถานะ</th>
											<th>เมนู</th>
										</tr>

									
							<?php	
									
									while ($result_booking = mysqli_fetch_assoc($query_select_booking)) {
							?>
										<tr>
											<td><a href="booking-detail.php?bid=<?php echo $result_booking['booking_code'] ?>"><?php echo $result_booking['booking_code'] ?></a></td>
											<td><?php echo $result_booking['PROVINCE_NAME'] ?></td>
											<td><?php echo DateThai($result_booking['booking_date_begin']) ?></td>
											<td><?php echo DateThai($result_booking['booking_date_end']) ?></td>
											<td>฿<?php echo number_format($result_booking['booking_total_price']) ?></td>
											<td><?php echo $result_booking['booking_status'] ?></td>
											<td>ยกเลิก</td>
										</tr>
							<?php			
									}
							?>
								</table>
							</div>
							<?php
								}else{
							?>
								<p>
									ไม่มีการจองที่กำลังจะมาถึง
								</p>
							<?php
								}
							?>
								
								
								<span class="space-top-2"> <a href="trips.php?all=1">ดูประวัติการจองรถเช่าในอดีต</a> </span>

							</div>
						</div>

					</div>
				</div>

			</div>

		</main>

		<?php
		include 'include/footer.php';
		?>
	</body>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

</html>
