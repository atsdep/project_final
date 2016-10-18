<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_SESSION['member_id'])) {
	//header("location:http://".$_SERVER['HTTP_HOST']."?pleaselogin=1");
	header("location:index.php?login=" . urlencode($_SERVER['REQUEST_URI']) . "&error=1");
	exit(0);
} else {
	if (!isset($_GET['code'])) {
		header("location:index.php");
		exit(0);
	} else {
		//require ("controllers/cars_page_controller.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>รายละเอียดการจองของคุณ</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">

		<link rel="stylesheet" href="css/adthasid.css">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<?php
		include 'config/js.php';
		?>
	</head>

	<body class="with-new-header">

		<?php
		include 'include/all_header.php';
		
		function DateThai($strDate) {
			$strYear = date("Y", strtotime($strDate));
			$strMonth = date("n", strtotime($strDate));
			$strDay = date("j", strtotime($strDate));
			$strHour = date("H", strtotime($strDate));
			$strMinute = date("i", strtotime($strDate));
			$strSeconds = date("s", strtotime($strDate));
			$strMonthCut = ARRAY("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
			$strMonthThai = $strMonthCut[$strMonth];
			return "$strDay $strMonthThai $strYear";
		}

		$sql_select_booking = "SELECT provinces.PROVINCE_NAME,
		announces.announce_title,
		announces.announce_photos_1,
		announces.announce_id,
		members.member_firstname,
		members.member_profile_photo,
		members.member_telephone,
		members.member_id,
		bookings.*
		FROM bookings
		INNER JOIN provinces
		ON provinces.PROVINCE_ID = bookings.booking_destination
		INNER JOIN announces
		ON bookings.announce_id = announces.announce_id
		INNER JOIN members
		ON announces.member_id = members.member_id
		WHERE bookings.booking_code = '" . $_GET['code'] . "'
		";

		$query_select_booking = mysqli_query($connect, $sql_select_booking);
		$row_booking = mysqli_num_rows($query_select_booking);
		$result_booking = mysqli_fetch_assoc($query_select_booking);
		if ($row_booking >= 1) {

			if (isset($result_booking['announce_photos_1'])) {
				$photos_1 = 'img/' . $result_booking['announce_photos_1'];
			} else {
				$photos_1 = 'img/car_default_no_photos.png';
			}

			if (isset($result_booking['member_profile_photo'])) {
				$profile_photo = 'img/' . $result_booking['member_profile_photo'];
			} else {
				$profile_photo = 'img/profile.jpg';
			}
		}
		?>

		<main id="site-content" role="main">
			<div class="shared-itinerary-container">
				<div class="page-container-responsive">
					<div class="hide-print">
						<div class="show-sm space-4 listing-photo-main-sm">
							<div class="hide-print"><img class="media-photo media-photo-block img-responsive listing-large-photo" src="<?php echo $photos_1 ?>?aki_policy=x_large">
								<div class="row row-condensed space-top-2 show-lg">
									<div class="col-6"><img class="media-photo media-photo-block img-responsive listing-small-photo" src="<?php echo $photos_1 ?>?aki_policy=large">
									</div>
									<div class="col-6"><img class="media-photo media-photo-block img-responsive listing-small-photo" src="<?php echo $photos_1 ?>?aki_policy=large">
									</div>
								</div>
							</div>
						</div>
					</div>
					<section class="space-top-8 space-top-sm-4 space-4 itinerary-header-container">
						<div class="row itinerary-header">
							<div class="col-9">
								<h2 class="text-center-on-sm"><span>คุณกำลังจะเดินทางไปที่ <?php echo $result_booking['PROVINCE_NAME'] ?>!</span></h2>
								<div class="text-center-on-sm">
									<span>รหัสการจอง:</span><span> </span><span><?php echo $result_booking['booking_code'] ?></span><span>. </span>
									<br class="show-sm">
									<span class="hide-print"><span><span><a href="change.php?code=<?php echo $result_booking['booking_code'] ?>"><span>ทำการเปลี่ยนแปลงการจอง</span></a></span></span></span>
								</div>
							</div>
							<div class="col-3 text-right itinerary-header-buttons hide-print">
								<span class="hide-sm">
									<button type="button" class="btn">
										พิมพ์
									</button></span>
							</div>
						</div>
					</section>
					<div class="show-md">
						<div class="hide-print"><img class="media-photo media-photo-block img-responsive listing-large-photo" src="<?php echo $photos_1 ?>?aki_policy=x_large">
							<div class="row row-condensed space-top-2 show-lg">
								<div class="col-6"><img class="media-photo media-photo-block img-responsive listing-small-photo" src="<?php echo $photos_1 ?>?aki_policy=large">
								</div>
								<div class="col-6"><img class="media-photo media-photo-block img-responsive listing-small-photo" src="<?php echo $photos_1 ?>?aki_policy=large">
								</div>
							</div>
						</div>
					</div>
					<div class="row space-8 itinerary-content">
						<div class="col-lg-7">
							<div class="itinerary-card">
								<div class="show-md">
									<div class="panel space-2 contact-host-card">
										<div class="panel-body text-center">
											<div class="space-4"></div><a href="profile.php?mid=<?php echo $result_booking['member_id'] ?>" target="_blank" class="media-photo media-link media-round space-3 host-image hide-print"><img src="<?php echo $profile_photo ?>?aki_policy=profile_x_medium" width="90" height="90" alt="<?php echo $result_booking['member_firstname'] ?>"></a>
											<div>
												<div class="space-1">
													<strong>เจ้าของรถเช่าของคุณ <?php echo $result_booking['member_firstname'] ?></strong>
												</div>
												<p class="space-3 text-padding">
													มีคำถามเกี่ยวกับการจองของคุณ วิธีที่ดีที่สุดในการรับข้อมูลคือการถามเจ้าของรถเช่าของคุณโดยตรง
												</p>
											</div>
											<div>
												<div class="md-host-phone">
													<i class="icon icon-size-1 icon-phone-alt"></i><a href="tel:<?php echo $result_booking['member_telephone']?>"><span>&nbsp;&nbsp;</span><span><?php echo $result_booking['member_telephone']?></span></a>
												</div>
											</div><div class="space-top-lg-5 space-top-sm-1"></div>
										</div>
									</div>
								</div>
								<div class="panel-white panel">
									<div class="show-sm">
										<div class="panel space-2 contact-host-card">
											<div class="panel-body text-center">
												<div class="space-4"></div><a href="profile.php?mid=<?php echo $result_booking['member_id'] ?>" target="_blank" class="media-photo media-link media-round space-3 host-image hide-print"><img src="<?php echo $profile_photo ?>?aki_policy=profile_x_medium" width="90" height="90" alt="<?php echo $result_booking['member_firstname'] ?>"></a>
												<div>
													<div class="space-1">
														<strong>เจ้าของรถเช่าของคุณ <?php echo $result_booking['member_firstname'] ?></strong>
													</div>
													<p class="space-3 text-padding">
														มีคำถามเกี่ยวกับการจองของคุณ วิธีที่ดีที่สุดในการรับข้อมูลคือการถามเจ้าของรถเช่าของคุณโดยตรง
													</p>
												</div>
												<div>
													
													<div class="md-host-phone">
														<i class="icon icon-size-1 icon-phone-alt"></i><a href="tel:<?php echo $result_booking['member_telephone']?>"><span>&nbsp;&nbsp;</span><span><?php echo $result_booking['member_telephone']?></span></a>
													</div>
												</div><div class="space-top-lg-5 space-top-sm-1"></div>
											</div>
										</div>
										<hr class="panel-hr">
									</div>
									<div class="panel-body">
										<div class="row row-table checkin-checkout">
											<div class="show-sm">
												<div class="col-sm-6">
													<strong>เริ่มวันที่</strong>
													<br>
													<span><?php echo DateThai($result_booking['booking_date_begin']) ?></span>
													<br>
													
												</div>
												<div class="col-sm-6">
													<strong>ถึงวันที่</strong>
													<br>
													<span><?php echo DateThai($result_booking['booking_date_end']) ?></span>
													<br>
													
												</div>
											</div>
											<div class="hide-sm">
												<div class="col-3">
													<strong>เริ่มวันที่</strong>
												</div>
												<div class="col-3">
													<span><?php echo DateThai($result_booking['booking_date_begin']) ?></span>
													<br>
													
												</div>
												<div class="col-3">
													<strong>ถึงวันที่</strong>
												</div>
												<div class="col-3">
													<span><?php echo DateThai($result_booking['booking_date_end']) ?></span>
													<br>
													
												</div>
											</div>
										</div>
									</div>
									<div class="panel-body text-center-on-sm">
										<div class="row row-table">
											<div class="col-3">
												<strong><span>ที่อยู่</span></strong>
											</div>
											<div class="col-9">
												<div>
													Soi Phet Kasem 23
													<br>
													กรุงเทพ, Krung Thep Maha Nakhon 10160
													<br>
													ไทย
													<br>
												</div>
											</div>
										</div>
									</div>
									<hr class="panel-hr">
									<div class="panel-body text-center-on-sm">
										<div class="row row-table">
											<div class="col-3">
												<strong><span>กฏของรถเช่า</span></strong>
											</div>
											<div class="col-9">
												<div class="expandable_house_rules">

													<div class="react-expandable expanded">
														<div class="expandable-content">
															<div>
																<p>
																	<span>- ห้ามสูบบุหรี่ภายในรถยนต์</span>
																</p>
															</div><div class="expandable-indicator"></div>
														</div><span class="react-expandable-trigger-more">
															<!-- <button class="btn-link btn-link--bold" type="button">
																<span>+ เพิ่มเติม</span>
															</button></span> -->
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="panel-body text-center-on-sm">
										<div class="row row-table">
											<div class="col-3">
												<strong><span>ราคารวม</span></strong>
											</div>
											<div class="col-9">
												<table>
													<tbody>
														<tr>
															<td class="billing-table-cell">x วัน</td><td><span>฿<?php echo number_format($result_booking['booking_total_price']) ?></span></td>
														</tr>
													</tbody>
												</table>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-5 hide-print">
							<div class="show-lg">
								<div class="panel space-2 contact-host-card">
									<div class="panel-body text-center">
										<div class="space-4"></div><a href="profile.php?mid=<?php echo $result_booking['member_id'] ?>" target="_blank" class="media-photo media-link media-round space-3 host-image hide-print"><img src="<?php echo $profile_photo ?>?aki_policy=profile_x_medium" width="90" height="90" alt="<?php echo $result_booking['member_firstname'] ?>"></a>
										<div>
											<div class="space-1">
												<strong>เจ้าของรถเช่าของคุณ <?php echo $result_booking['member_firstname'] ?></strong>
											</div>
											<p class="space-3 text-padding">
												มีคำถามเกี่ยวกับการจองของคุณ วิธีที่ดีที่สุดในการรับข้อมูลคือการถามเจ้าของรถเช่าของคุณโดยตรง
											</p>
										</div>
										<div>
											
											<div class="md-host-phone">
												<i class="icon icon-size-1 icon-phone-alt"></i><a href="tel:<?php echo $result_booking['member_telephone']?>"><span>&nbsp;&nbsp;</span><span><?php echo $result_booking['member_telephone']?></span></a>
											</div>
										</div><div class="space-top-lg-5 space-top-sm-1"></div>
									</div>
								</div>
								<div class="hide-print"><img class="media-photo media-photo-block img-responsive listing-large-photo" src="<?php echo $photos_1 ?>?aki_policy=x_large">
									<div class="row row-condensed space-top-2 show-lg">
										<div class="col-6"><img class="media-photo media-photo-block img-responsive listing-small-photo" src="<?php echo $photos_1 ?>?aki_policy=large">
										</div>
										<div class="col-6"><img class="media-photo media-photo-block img-responsive listing-small-photo" src="<?php echo $photos_1 ?>?aki_policy=large">
										</div>
									</div>
								</div>
							</div>
							<section class="space-6">
								<div class="listing-info-text"></div>
							</section>
						</div>
					</div>
				</div>
			</div>

		</main>

		<?php
		include 'include/footer.php';
		?>
	</body>
</html>
