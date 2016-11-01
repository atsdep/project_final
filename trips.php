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
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>สร้างรายได้จากการขับรถของตัวเอง กับ Rentcnd</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->

		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">
		
		<link href="css/dashboard_study.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="css/trips_study.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="css/vat_invoices_dropdown_study.css" media="screen" rel="stylesheet" type="text/css" />
		<link href="css/referrals_modal_study.css" media="screen" rel="stylesheet" type="text/css" />
		
		<link rel="stylesheet" href="css/btn-custom.css">
		

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

			<div class="page-container-responsive space-4">
				<div id="your-trips-app-container">
					<div>
						<div class="current-trips">
							<div class="show-lg show-sm">
								<div>
									<div class="panel-additional-gap"></div>
									<?php
										$sql_select_booking = "SELECT provinces.PROVINCE_NAME,
										announces.announce_title,
										announces.announce_photos_1,
										announces.announce_id,
										members.member_firstname,
										members.member_profile_photo,
										members.member_id,
										message.message_id,
										bookings.*
										FROM bookings
										INNER JOIN provinces
										ON provinces.PROVINCE_ID = bookings.booking_destination
										INNER JOIN announces
										ON bookings.announce_id = announces.announce_id
										INNER JOIN members
										ON announces.member_id = members.member_id
										INNER JOIN message
										ON message.message_booking_id = bookings.booking_id
										WHERE bookings.booking_member_id = '". $_SESSION['member_id'] ."'
										AND booking_status != 'finish'
										ORDER BY booking_date_begin ASC ";
										$query_select_booking = mysqli_query($connect, $sql_select_booking);
										$row_booking = mysqli_num_rows($query_select_booking);

										if($row_booking >= 1){
											while ($result_booking = mysqli_fetch_assoc($query_select_booking)) {
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
									?>
									
									<div class="panel panel-your-trips">
										<div class="panel-body panel-body-your-trips panel-body-one-trip">
											<div class="meta meta-one-trip">
												
												<?php
												if($result_booking['booking_status'] == 'waiting'){
												?>
												<div class="banner pending-banner">
													<span class="status"><span>ค้างอยู่</span></span><span><span>การจองนี้ยังไม่ได้รับการยืนยัน</span></span><span class="hide-sm"><span>&nbsp;</span><span>เจ้าของรถเช่ามีเวลา 24 ชั่วโมงในการตอบ</span></span>
												</div>
												
												<?php
												}else if ($result_booking['booking_status'] == 'cancel_by_user' || $result_booking['booking_status'] == 'cancel_by_driver'){
												?>
												<div class="banner pending-banner">
													<span class="status">
														<span>ยกเลิกแล้ว</span>
													</span>
													<span>
														<?php
															if($result_booking['booking_status'] == 'cancel_by_user'){
														?>
														<span>คุณยกเลิกการจองนี้แล้ว</span>
														<?php
														}else{
														?>
														<span>เจ้าของรถเช่ายกเลิกการจองนี้แล้ว</span>
														<?php
														}
														?>
													</span>
												</div>
												
												<?php	
												}
												?>
												
												<div class="details show-check-in-out-time">
													<div class="schedule">
														<div class="space-3">
															<div class="city">
																<?php echo $result_booking['PROVINCE_NAME'] ?>
															</div>
															<div>
																<a href="cars.php?id=<?php echo $result_booking['announce_id'] ?>"><span class="listing-name text-dark-gray"><?php echo $result_booking['announce_title'] ?></span></a><span> · </span><span>ผู้โดยสาร <?php echo $result_booking['booking_passenger'] ?> คน</span>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12 col-lg-7">
																<div class="col-sm-5 pull-left text-left check-in-section">
																	<div class="check-in-out-date">
																		<strong><?php echo DateThai($result_booking['booking_date_begin']) ?></strong>
																	</div>
																</div>
																<div class="col-sm-2 text-center check-in-out-delimiter">
																	<i class="icon icon-chevron-right"></i>
																</div>
																<div class="col-sm-5 pull-right check-out-section">
																	<div class="check-in-out-date">
																		<strong><?php echo DateThai($result_booking['booking_date_end']) ?></strong>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="actions-wrap actions-your-trips">
													<div class="actions actions-your-trips">
														<div class="row row-your-trip">
															<div class="view-itinerary">
																<div class="col-lg-4 col-md-12 col-sm-12 action your-trips-lower-row">
																	<div class="your-trips-lower-row-column">
																		<div class="action-link-item">
																			<i class="icon  h3"></i>
																		</div>
																		<?php
																			if($result_booking['booking_status'] == 'approve'){
																			?>
																		<div class="action-link-item">
																			<a href="itinerary.php?code=<?php echo $result_booking['booking_code'] ?>" class="button-steel text-dark-gray action-text">ดูกำหนดการเดินทาง</a>
																		</div>
																		<?php
																			}
																		?>
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-md-12 col-sm-12 action your-trips-lower-row">
																<div class="your-trips-lower-row-column">
																	<div class="action-link-item">
																		<i class="icon icon-comment h3"></i>
																	</div>
																	<div class="action-link-item">
																		<a href="message.php?id=<?php echo $result_booking['message_id'] ?>" class="button-steel text-dark-gray action-text">ส่งข้อความ</a>
																	</div>
																</div>
															</div>
															<?php
																if($result_booking['booking_status'] == 'approve'){
															?>
															<div class="col-lg-4 col-md-12 col-sm-12 action your-trips-lower-row">
																<div class="your-trips-lower-row-column">
																	
																	<div class="action-link-item">
																		<i class="icon icon-calendar h3"></i>
																	</div>
																	
																	<div class="action-link-item">
																		<a href="change.php?code=<?php echo $result_booking['booking_code'] ?>" class="button-steel text-dark-gray action-text">เปลี่ยนการจองรถเช่า</a>
																	</div>
																
																
																</div>
															</div>
																<?php
																	}
																	?>
															
															<?php
																if($result_booking['booking_status'] == 'wait'){
															?>
															<div class="col-lg-4 col-md-12 col-sm-12 action your-trips-lower-row">
																<div class="your-trips-lower-row-column">
																	<div class="action-link-item">
																		<i class="icon icon-credit-card h3"></i>
																	</div>
																	<div class="action-link-item">
																		<a href="payment.php?code=<?php echo $result_booking['booking_code'] ?>" class="button-steel text-dark-gray action-text">ชำระค่ามัดจำ</a>
																	</div>
																</div>
															</div>
															<?php
																}
															?>
															<?php
																if($result_booking['booking_status'] != 'cancel_by_driver' && $result_booking['booking_status'] != 'cancel_by_user'){
															?>
															<div class="col-lg-4 col-md-12 col-sm-12 action your-trips-lower-row">
																<div class="your-trips-lower-row-column">
																	<div class="action-link-item">
																		<i class="icon icon-ban-circle h3"></i>
																	</div>
																	<div class="action-link-item">
																		<a href="alterations.php?code=<?php echo $result_booking['booking_code'] ?>" class="button-steel text-dark-gray action-text">ยกเลิกการจองรถเช่า</a>
																	</div>
																</div>
															</div>
															<?php
																}
															?>
															
														</div>
													</div>
												</div>
											</div>
											<div class="pin">
												<a href="cars.php?id=<?php echo $result_booking['announce_id'] ?>"><div class="listing-image-container media-cover-dark" style="background-image:url(&quot;<?php echo $photos_1 ?>?aki_policy=large&quot;);"></div></a>
												<div class="text-center">
													<a href="profile.php?mid=<?php echo $result_booking['member_id'] ?>" class="media-photo img-round card-profile-picture card-profile-picture-large"><img alt="Sabrina" height="50" width="50" src="<?php echo $profile_photo ?>?aki_policy=profile_small" title="<?php echo $result_booking['member_firstname'] ?>"></a>
													<div class="host-name">
														<?php echo $result_booking['member_firstname'] ?>
													</div>
													<?php
														if($result_booking['booking_status'] == 'approve'){
													?>
													<div class="action">
														<a href="itinerary.php?code=<?php echo $result_booking['booking_code'] ?>" class="space-top-2 btn btn-contrast btn-large btn-semi-transparent btn-contrast-itinerary itinerary itinerary-action">ดูกำหนดการเดินทาง</a>
													</div>
													<?php
														}
													?>
												</div>
											</div>
										</div>
									</div>
									
								
									<?php
									}
									}else{
									?>
									<div class="row no-trips">
										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="panel panel-your-trips space-top-4">
												<div class="panel-body panel-body-your-trips">
													<div class="meta">
														<div class="title show-lg">
															เลือกการผจญภัยครั้งถัดไปของคุณ
														</div>
														<div class="space-top-2 content">
															<p>คุณไม่มีการเดินทางที่กำลังจะมาถึง!</p>
															<p>เลือกเช่ารถพร้อมคนขับสำหรับการเดินทางของคุณ</p>
															
														</div>
														<div class="space-top-5 btn btn-large btn-soft-dark btn-invite-friends">
															<a href="for_rent.php">
															<div class="text-white invite">
																ค้นหารถเช่าพร้อมคนขับ!
															</div></a>
														</div>
													</div>
													<!-- <div class="pin no-trips-img"></div> -->
												</div>
											</div>
										</div>
									</div>

									<?php
									}
									?>
								<div class="panel panel-your-trips hide">
										<div class="panel-body panel-body-your-trips panel-body-one-trip">
											<div class="meta meta-one-trip">
												<div class="banner pending-banner">
													<span class="status"><span>ค้างอยู่</span></span><span><span>การจองนี้ยังไม่ได้รับการยืนยัน</span></span><span class="hide-sm"><span>&nbsp;</span><span>เจ้าของที่พักมีเวลา 24 ชั่วโมงในการตอบ</span></span>
												</div>
												<div class="details show-check-in-out-time">
													<div class="schedule">
														<div class="space-3">
															<div class="city">
																กรุงเทพ
															</div>
															<div>
																<a href="/rooms/15627025"><span class="listing-name text-dark-gray">บ้านสุขใจ</span></a><span> · </span><span>ผู้โดยสาร 1 คน</span>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12 col-lg-7">
																<div class="col-sm-5 pull-left text-left check-in-section">
																	<div class="check-in-out-date">
																		<strong>30 ต.ค. 2016</strong>
																	</div>
																	<div class="text-muted check-in-out-time">
																		<strong>เช็คอิน 15:00</strong>
																	</div>
																</div>
																<div class="col-sm-2 text-center check-in-out-delimiter">
																	<i class="icon icon-chevron-right"></i>
																</div>
																<div class="col-sm-5 pull-right check-out-section">
																	<div class="check-in-out-date">
																		<strong>31 ต.ค. 2016</strong>
																	</div>
																	<div class="text-muted check-in-out-time">
																		<strong>เช็คเอาท์ยืดหยุ่น</strong>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="actions-wrap actions-your-trips">
													<div class="actions actions-your-trips">
														<div class="row row-your-trip">
															<div class="view-itinerary">
																<div class="col-lg-4 col-md-12 col-sm-12 action your-trips-lower-row">
																	<div class="your-trips-lower-row-column">
																		<div class="action-link-item">
																			<i class="icon  h3"></i>
																		</div>
																		<div class="action-link-item">
																			<a href="itinerary.php?code=<?php echo $result_booking['booking_code'] ?>" class="button-steel text-dark-gray action-text">ดูกำหนดการเดินทาง</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-md-12 col-sm-12 action your-trips-lower-row">
																<div class="your-trips-lower-row-column">
																	<div class="action-link-item">
																		<i class="icon icon-comment h3"></i>
																	</div>
																	<div class="action-link-item">
																		<a href="/messaging/qt_for_reservation/RJTPAC" class="button-steel text-dark-gray action-text">ส่งข้อความ</a>
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-md-12 col-sm-12 action your-trips-lower-row">
																<div class="your-trips-lower-row-column">
																	<div class="action-link-item">
																		<i class="icon icon-calendar h3"></i>
																	</div>
																	<div class="action-link-item">
																		<a href="#" class="button-steel text-dark-gray action-text cancel-button"><span>ยกเลิกคำขอจองที่พัก</span></a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="pin">
												<a href="/rooms/15627025"><div class="listing-image-container media-cover-dark" style="background-image:url(&quot;https://a2.muscache.com/im/pictures/7788e694-b3f8-48ba-9577-e3e7b55b18c4.jpg?aki_policy=large&quot;);"></div></a>
												<div class="text-center">
													<a href="/users/show/100736637" class="media-photo img-round card-profile-picture card-profile-picture-large"><img alt="Rachen" height="50" width="50" src="https://a2.muscache.com/im/pictures/ba11a805-476d-46b3-849b-385a1fa4b17d.jpg?aki_policy=profile_small" title="Rachen"></a>
													<div class="host-name">
														Rachen
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="panel panel-your-trips hide">
										<div class="panel-body panel-body-your-trips panel-body-one-trip">
											<div class="meta meta-one-trip">
												<div class="banner canceled-banner">
													<span class="status"><span>ยกเลิกแล้ว</span></span><span><span>คุณยกเลิกการจองนี้แล้ว</span></span>
												</div>
												<div class="details show-check-in-out-time">
													<div class="schedule">
														<div class="space-3">
															<div class="city">
																กรุงเทพ
															</div>
															<div>
																<a href="/rooms/15133897"><span class="listing-name text-dark-gray">1 Room in condo  - Supalai Park, Bang Wa BTS</span></a><span> · </span><span>ผู้โดยสาร 1 คน</span>
															</div>
														</div>
														<div class="row">
															<div class="col-md-12 col-lg-7">
																<div class="col-sm-5 pull-left text-left check-in-section">
																	<div class="check-in-out-date">
																		<strong>10 พ.ย. 2016</strong>
																	</div>
																	<div class="text-muted check-in-out-time">
																		<strong>เช็คอินยืดหยุ่น</strong>
																	</div>
																</div>
																<div class="col-sm-2 text-center check-in-out-delimiter">
																	<i class="icon icon-chevron-right"></i>
																</div>
																<div class="col-sm-5 pull-right check-out-section">
																	<div class="check-in-out-date">
																		<strong>11 พ.ย. 2016</strong>
																	</div>
																	<div class="text-muted check-in-out-time">
																		<strong>เช็คเอาท์ยืดหยุ่น</strong>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="actions-wrap actions-your-trips">
													<div class="actions actions-your-trips">
														<div class="row row-your-trip">
															<div class="view-itinerary">
																<div class="col-lg-4 col-md-12 col-sm-12 action your-trips-lower-row">
																	<div class="your-trips-lower-row-column">
																		<div class="action-link-item">
																			<i class="icon  h3"></i>
																		</div>
																		<div class="action-link-item">
																			<a href="/reservation/receipt?code=X5DH3T" class="button-steel text-dark-gray action-text">ดูใบเสร็จรับเงิน</a>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-md-12 col-sm-12 action your-trips-lower-row">
																<div class="your-trips-lower-row-column">
																	<div class="action-link-item">
																		<i class="icon icon-comment h3"></i>
																	</div>
																	<div class="action-link-item">
																		<a href="/messaging/qt_for_reservation/X5DH3T" class="button-steel text-dark-gray action-text">ส่งข้อความ</a>
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-md-12 col-sm-12 action your-trips-lower-row">
																<div class="your-trips-lower-row-column">
																	<div class="action-link-item">
																		<i class="icon icon-credit-card h3"></i>
																	</div>
																	<div class="action-link-item">
																		<a href="/resolutions/reservation/X5DH3T" class="button-steel text-dark-gray action-text">ขอเงินคืน</a>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="pin">
												<a href="/rooms/15133897"><div class="listing-image-container media-cover-dark" style="background-image:url(&quot;https://a2.muscache.com/im/pictures/b163ac09-9c72-4d26-9c39-e7230a86c7f9.jpg?aki_policy=large&quot;);"></div></a>
												<div class="text-center">
													<a href="/users/show/95958096" class="media-photo img-round card-profile-picture card-profile-picture-large"><img alt="Sabrina" height="50" width="50" src="https://a2.muscache.com/im/pictures/21da0b27-2b5b-4386-9e33-7e92e5fd06b8.jpg?aki_policy=profile_small" title="Sabrina"></a>
													<div class="host-name">
														Sabrina
													</div>
													<div class="action">
														<a href="/reservation/receipt?code=X5DH3T" class="space-top-2 btn btn-contrast btn-large btn-semi-transparent itinerary cancel-action">ดูใบเสร็จรับเงิน</a>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
							
							
						</div>
						
						<?php
						$sql_finish = "SELECT provinces.PROVINCE_NAME,
						announces.announce_title,
						announces.announce_photos_1,
						announces.announce_id,
						members.member_firstname,
						members.member_profile_photo,
						members.member_id,
						message.message_id,
						bookings.*
						FROM bookings
						INNER JOIN provinces
						ON provinces.PROVINCE_ID = bookings.booking_destination
						INNER JOIN announces
						ON bookings.announce_id = announces.announce_id
						INNER JOIN members
						ON announces.member_id = members.member_id
						INNER JOIN message
						ON message.message_booking_id = bookings.booking_id
						WHERE bookings.booking_member_id = '". $_SESSION['member_id'] ."'
						AND bookings.booking_status = 'finish'
						ORDER BY booking_date_begin DESC";
						
						$query_finish = mysqli_query($connect, $sql_finish);
						$row_finish = mysqli_num_rows($query_finish);

						if($row_finish >= 1){
						?>
						<div id="finish-zone">
							<div class="space-top-8 space-4">
								<h2><span>การเดินทางที่ผ่านมา</span></h2>
							</div>
							<div class="past-trips">
								
								<div class="show-lg show-sm">
									<div class="row">
						<?php
							while ($finish = mysqli_fetch_assoc($query_finish)) {
								if (isset($finish['announce_photos_1'])) {
									$photos_1 = 'img/' . $finish['announce_photos_1'];
								} else {
									$photos_1 = 'img/car_default_no_photos.png';
								}
							if (isset($finish['member_profile_photo'])) {
								$profile_photo = 'img/' . $finish['member_profile_photo'];
							} else {
								$profile_photo = 'img/profile.jpg';
							}
						?>
										<div class="col-lg-4 col-md-6 col-sm-12">
											<div class="panel panel-your-trips">
												<div class="panel-body panel-body-your-trips panel-body-one-trip">
													<div class="meta meta-one-trip">
														
														<div class="details show-check-in-out-time">
															<div class="schedule">
																<div class="space-3">
																	<div class="city">
																		<?php echo $finish['PROVINCE_NAME'] ?>
																	</div>
																</div>
																<div>
																	<span><?php echo DateThai($finish['booking_date_begin']) ?> - <?php echo DateThai($finish['booking_date_end']) ?></span><span>
																		<br>
																	<span>ผู้โดยสาร <?php echo $finish['booking_passenger'] ?> คน</span></span>
																	<div class="space-top-1">
																		<a href="cars.php?id=<?php echo $finish['announce_id'] ?>">
																			<div class="listing-name text-dark-gray">
																				<?php echo $finish['announce_title'] ?>
																			</div>
																		</a>
																	</div>
																</div>
															</div>
														</div>
														<div class="actions-wrap actions-your-trips">
															<div class="actions actions-your-trips">
																<div class="row row-your-trip">
																	<div class="space-3">
																		<a href="" class="btn btn-large btn-soft-dark"><span>การใช้บริการของคุณเป็นอย่างไร</span></a>
																	</div>
																	<div class="col-lg-4 col-md-12 col-sm-12 action your-trips-lower-row">
																		<div class="your-trips-lower-row-column">
																			<div class="action-link-item">
																				<i class="icon  h3"></i>
																			</div>
																			<div class="action-link-item">
																				<a href="itinerary.php?code=<?php echo $finish['booking_code'] ?>" class="button-steel text-dark-gray action-text">ดูรายละเอียดการเดินทาง</a>
																			</div>
																		</div>
																	</div>
																	<div class="col-lg-4 col-md-12 col-sm-12 action your-trips-lower-row">
																		<div class="your-trips-lower-row-column">
																			<div class="action-link-item">
																				<i class="icon  h3"></i>
																			</div>
																			<!-- <div class="action-link-item">
																				<a href="" class="button-steel text-dark-gray action-text">ดูใบเสร็จรับเงิน</a>
																			</div> -->
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="pin">
														<a href="cars.php?id=<?php echo $finish['announce_id'] ?>"><div class="listing-image-container media-cover-dark" style="background-image:url(&quot;<?php echo $photos_1 ?>?aki_policy=large&quot;);"></div></a>
														<div class="text-center">
															<a href="" class="media-photo img-round card-profile-picture card-profile-picture-large"><img alt="Rachen" height="50" width="50" src="<?php echo $profile_photo; ?>" title="<?php echo $finish['member_firstname'] ?>"></a>
															<div class="host-name">
																<?php echo $finish['member_firstname'] ?>
															</div>
															<div class="action">
																<a href="itinerary.php?code=<?php echo $result_booking['booking_code'] ?>" class="space-top-2 btn btn-contrast btn-large btn-semi-transparent btn-contrast-itinerary itinerary itinerary-action">ดูกำหนดการเดินทาง</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div> <!-- item -->
										
						<?php
						}
						
						?>
									</div> <!-- row -->
								</div> <!-- show-lg show-sm -->
							</div> <!-- past-trips -->
						</div><!-- finish-zone -->
						
						<?php
						}
						
						?>

					</div>
				</div>

			</div>

		</main>

		<?php
		include 'include/footer.php';
		?>
	</body>
</html>
