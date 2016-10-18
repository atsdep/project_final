<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_SESSION['member_id'])) {
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

		<title>สร้างรายได้จากการขับรถของตัวเอง กับ Rentcnd</title>
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
			<div class="page-container page-container-responsive space-top-4 space-4" id="change-container">
				<div>
					<div class="panel space-4">
						<div class="panel-header">
							<div class="row row-table">
								<div class="col-6 col-middle">
									การจอง  <?php echo $result_booking['booking_code'] ?>
								</div>
								<div class="col-6 col-middle">
									<a href="itinerary.php?code=<?php echo $result_booking['booking_code'] ?>" id="return-to-previous" class="btn pull-right"> กลับไปที่การจอง </a>
								</div>
							</div>
						</div>

						<div class="panel-body" id="original-details">
							<div class="panel-padding">
								<div class="row">
									<div class="col-3">
										<div class="media-photo">
											<img src="<?php echo $photos_1 ?>?aki_policy=small" class="img-responsive">
										</div>
									</div>
									<div class="col-6">
										<h4 class="hosting-name"><a href="cars.php?id=<?php echo $result_booking['announce_id']?>"><?php echo $result_booking['announce_title']?></a></h4>
										<p class="hosting-address">
											<?php echo $result_booking['PROVINCE_NAME']?>
										</p>
										<!-- <p class="hosting-address">
											Soi Phet Kasem 23, กรุงเทพ, Krung Thep Maha Nakhon 10160, ไทย
										</p> -->
										<div class="user-info row">

											<div class="col-sm-12">
												<div class="media">
													<a href="profile.php?mid=<?php echo $result_booking['member_id']?>" class="media-photo media-round profile-picture pull-left"> <img src="<?php echo $profile_photo ?>?aki_policy=profile_medium" width="68" height="68"> </a>
													<div class="media-body">
														<ul class="list-unstyled">
															<li class="user-name">
																<?php echo $result_booking['member_firstname']?>
															</li>
															<!-- <li>
																<a href="mailto:sabrina-got63xkyvltlet4y@host.airbnb.com">sabrina-got63xkyvltlet4y@host.airbnb.com</a>
															</li> -->
															<li>
																<?php echo $result_booking['member_telephone']?>
															</li>
														
														</ul>
													</div>
												</div>
											</div>

										</div>
									</div>
									<div class="col-3">
										<dl>
											<dt>
												เริ่มวันที่
											</dt>
											<dd>
												10-11-2016
											</dd>
											<dt>
												ถึงวันที่
											</dt>
											<dd>
												11-11-2016
											</dd>
											<dt>
												ผู้โดยสาร
											</dt>
											<dd>
												1
											</dd>
										</dl>
									</div>
								</div>
								<div class="row space-top-4">
									<div class="col-12">
										<h4> รวมเป็นเงินทั้งสิ้น: ฿<?php echo number_format($result_booking['booking_total_price']) ?> </h4>
									</div>
								</div>
							
							</div>
						</div>
					</div>

					<div class="panel space-4">
						<div class="panel-header">
							ปรับเปลี่ยนการจองรถเช่า
						</div>

						<div class="panel-body" id="alter-container">
							<form action="/reservation_alterations" id="details-form" method="post" accept-charset="UTF-8">
								<input name="authenticity_token" type="hidden" value="V4$.airbnb.com$TLPu3xmYlek$2HIYQhRJkc-rZlAGQBPr_B7ni5Ci9txVQlKXSFtbeUA=">
								<input type="hidden" name="code" value="X5DH3T">
								<div class="row overview-inputs">
									<div class="col-3">
										<label for="pricing[hosting_id]">รถเช่า</label>
										<div class="select select-block">
											<select name="pricing[hosting_id]" id="property">

												<option value="15133897" selected="selected" data-original="original"><?php echo $result_booking['announce_title']?></option>

											</select>
										</div>
										<label for="pricing_guests">ผู้โดยสาร</label>
										<div class="select">
											<select class="num-guests" id="pricing_guests" name="pricing[guests]">

												<option selected="selected" data-original="original">1 </option>

												<option>2 </option>

												<option>3 </option>

												<option>4 </option>

												<option>5 </option>

												<option>6 </option>

												<option>7 </option>

												<option>8 </option>

												<option>9 </option>

												<option>10 </option>

												<option>11 </option>

												<option>12 </option>

												<option>13 </option>

												<option>14 </option>

												<option>15 </option>

												<option>16+ </option>

											</select>
										</div>
									</div>
									<div class="col-3">
										<label for="pricing_start_date">เริ่มวันที่</label>
										<input type="text" class="datepicker checkin ui-datepicker-target" id="pricing_start_date" name="pricing[start_date]" value="10-11-2016">
										<label for="pricing_end_date">ถึงวันที่</label>
										<input type="text" class="datepicker checkout ui-datepicker-target" id="pricing_end_date" name="pricing[end_date]" value="11-11-2016">
									</div>
									<div class="col-6">
										<div id="new-subtotal-container">

											<table class="table">
												<tbody>
													<tr>
														<th class="new-subtotal-string">ยอดรวมเดิม</th>
														<td id="new-subtotal">฿<?php echo number_format($result_booking['booking_total_price']) ?></td>
													</tr>
												</tbody>
												<tfoot>
													<tr>
														<th>ยอดรวมใหม่</th>
														<td><span id="new-total">฿xxxx</span></td>
													</tr>
													<tr class="hide" id="price-difference-container">
														<th>ส่วนต่าง:</th>
														<td><span id="price-difference"></span></td>
													</tr>
												</tfoot>
											</table>

											<div class="row alteration-check">
												<div class="col-12">
													<span class="available icon-lima"></span>
													<span class="unavailable icon-rausch"></span>
												</div>
											</div>
										</div>
									</div>

								</div>
							</form>
							<div class="row space-top-4">
								<div class="col-12">
									<p id="new-cancellation-policy" style="display: none;">
										หากมีการยอมรับการเปลี่ยนแปลง การจองใหม่จะอยู่ภายใต้เงื่อนไขของนโยบายนี้ <a href="#" target="_blank"></a>
									</p>
									<p>

										การปรับเปลี่ยนนี้ขึ้นอยู่กับสถานะว่างของรถเช่าและต้องได้รับการอนุมัติจากผู้โดยสารและเจ้าของรถเช่า หากมีการยอมรับการเปลี่ยนแปลง ราคาอาจมีการเปลี่ยนแปลง ให้สอดคล้องกับราคาที่เปลี่ยนไป
									</p>
								</div>
							</div>
						</div>
						<div class="panel-footer" id="alter-buttons">
							<a href="#" class="btn" id="discard-alterations"> ยกเลิกการปรับเปลี่ยน </a>
							<a class="btn btn-soft-dark" id="alter-submit-button" href="#" disabled="disabled" data-prevent-default=""> ส่งการปรับเปลี่ยน </a>
						</div>

					</div>

					<div class="modal" role="dialog" data-trigger="#alter-submit-button" aria-hidden="true">
						<div class="modal-table">
							<div class="modal-cell">
								<div class="modal-content">
									<div class="panel-header">
										เปลี่ยนการจอง
									</div>
									<div class="panel-body">
										<p>
											คุณแน่ใจหรือว่าคุณต้องการเสนอการเปลี่ยนแปลงเหล่านี้
										</p>
									</div>
									<div class="panel-footer">
										<a class="btn" href="#" data-behavior="modal-close">ไม่</a>
										<a href="#" id="alteration-submit" class="btn btn-primary"> ใช่ เสนอการปรับเปลี่ยนเหล่านี้ </a>
									</div>
								</div>
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
</html>
