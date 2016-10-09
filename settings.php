<?php
session_start();
?>
<!DOCTYPE html>
<html lang="th">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>บัญชี - Rentcnd</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">

		<link rel="stylesheet" href="css/phonenumber.css">
		<link rel="stylesheet" href="css/editprofile.css">

		<link rel="stylesheet" href="css/adthasid.css">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body class="with-new-header ">

		<?php
		include 'include/all_header.php';
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
							<a href="account.php" aria-selected="true" class="subnav-item" id="account-item">บัญชี</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="page-container-responsive space-top-4 space-4">

				<div class="row">
					<div class="col-md-3">

						<ul class="sidenav-list">
							<li>
								<a href="account.php" aria-selected="false" class="sidenav-item">ความปลอดภัย</a>
							</li>
							<li>
								<a href="settings.php" aria-selected="true" class="sidenav-item">การตั้งค่า</a>
							</li>
						</ul>

					</div>
					<div class="col-md-9">

						<div class="panel">
							<div class="panel-header">
								ยกเลิกบัญชีผู้ใช้
							</div>
							<div class="panel-body">
								<button id="cancel-account-button" class="btn btn-primary">
									ยกเลิกบัญชีผู้ใช้ของฉัน
								</button>
								<div id="cancel-account-form" class="hide">
									<div class="row">
										<div class="col-7">
											<h5> ช่วยบอกเหตุผลที่คุณขอยกเลิกการใช้บริการ </h5>

											<form accept-charset="UTF-8" action="https://th.airbnb.com/users/delete/63856890" method="post">
												<div style="margin:0;padding:0;display:inline">
													<input name="utf8" type="hidden" value="✓">
													<input name="authenticity_token" type="hidden" value="V4$.airbnb.com$YP4tThly0ng$c_NfIUJHtitKZ29ST6PxJjkEiWohugZMfz-VmjAITgU=">
												</div>
												<div class="space-2">
													<label for="reason_safety_concerns">
														<input id="reason_safety_concerns" name="reason" type="radio" value="safety_concerns">
														ฉันมีความกังวลเรื่องความปลอดภัย </label>
													<label for="reason_privacy_concerns">
														<input id="reason_privacy_concerns" name="reason" type="radio" value="privacy_concerns">
														ฉันมีความกังวลเรื่องความเป็นส่วนตัว </label>
													<label for="reason_not_useful">
														<input id="reason_not_useful" name="reason" type="radio" value="not_useful">
														ฉันคิดว่าบริการนี้ไม่มีประโยชน์ </label>
													<label for="reason_dont_understand_how_to_use">
														<input id="reason_dont_understand_how_to_use" name="reason" type="radio" value="dont_understand_how_to_use">
														ฉันไม่เข้าใจวิธีการใช้งาน </label>
													<label for="reason_temporary">
														<input id="reason_temporary" name="reason" type="radio" value="temporary">
														ฉันยกเลิกการใช้บริการชั่วคราวเท่านั้น แล้วฉันจะกลับมาใหม่ </label>
													<label for="reason_other">
														<input id="reason_other" name="reason" type="radio" value="other">
														อื่น ๆ </label>
												</div>

												<div class="space-2">
													<label for="details"> มีข้อมูลอื่นๆ อยากบอกเราเพิ่มเติมหรือไม่ </label>
													<textarea class="input-block" id="details" name="details"></textarea>
												</div>

												<div class="space-2">
													<label> เราสามารถติดต่อคุณเพื่อขอรายละเอียดเพิ่มเติมได้หรือไม่ </label>
													<label class="label-inline" for="reason_yes">
														<input id="contact_ok_yes" name="contact_ok" type="radio" value="yes">
														ได้ </label>
													<label class="label-inline" for="reason_no">
														<input id="contact_ok_no" name="contact_ok" type="radio" value="no">
														ไม่ </label>
												</div>

												<h5> จะเกิดอะไรขึ้น </h5>
												<ul class="space-4">
													<li>
														โปรไฟล์และที่พักต่าง ๆ ของคุณจะหายไป
													</li>
													<li>
														เราจะคิดถึงคุณมาก
													</li>
												</ul>

												<button type="submit" class="btn btn-primary">
													ยกเลิกบัญชีผู้ใช้ของฉัน
												</button>
												<button class="btn" type="button" id="cancel-cancellation-button">
													อย่ายกเลิกบัญชี
												</button>
											</form>
										</div>

										<div class="col-5">
											<h5> ทางเลือกอื่นๆนอกเหนือจากการยกเลิกบัญชี </h5>

											<h6><a href="https://th.airbnb.com/users/privacy/63856890">ปรับการตั้งค่าความเป็นส่วนตัวของฉัน</a></h6>
											<p>
												ปิดการสร้างดัชนีค้นหาบนที่พักของคุณเพื่อป้องกันไม่ให้เครื่องมือค้นหาเช่น Google และ Bing แสดงที่พักของคุณในผลการค้นหาของเครื่องมือเหล่านั้น
											</p>
											<h6><a href="https://th.airbnb.com/users/notifications/63856890">เปลี่ยนการตั้งค่าการแจ้งเตือน</a></h6>
											<p>
												เราส่งอีเมล์ให้คุณมากเกินไปหรือเปล่า คุณสามารถเปลี่ยนการตั้งค่าการแจ้งเตือนของตนเองได้
											</p>
											<h6><a href="https://th.airbnb.com/rooms">ซ่อนที่พักของฉัน</a></h6>
											<p>
												ลบที่พักของคุณออกจากการแสดงผลหรือระบบค้นหาเพื่อยุติการให้เช่าที่พักบน Airbnb
											</p>
										</div>
									</div>
								</div>
							</div>

							<div class="panel-body">
								<button id="cancel-account-button" class="btn btn-primary hide">
									ยกเลิกบัญชีผู้ใช้ของฉัน
								</button>
								<div id="cancel-account-form" class="">
									<div class="row">
										<div class="col-7">
											<h5> ช่วยบอกเหตุผลที่คุณขอยกเลิกการใช้บริการ </h5>

											<form accept-charset="UTF-8" action="https://th.airbnb.com/users/delete/63856890" method="post">
												<div style="margin:0;padding:0;display:inline">
													<input name="utf8" type="hidden" value="✓">
													<input name="authenticity_token" type="hidden" value="V4$.airbnb.com$YP4tThly0ng$c_NfIUJHtitKZ29ST6PxJjkEiWohugZMfz-VmjAITgU=">
												</div>
												<div class="space-2">
													<label for="reason_safety_concerns">
														<input id="reason_safety_concerns" name="reason" type="radio" value="safety_concerns">
														ฉันมีความกังวลเรื่องความปลอดภัย </label>
													<label for="reason_privacy_concerns">
														<input id="reason_privacy_concerns" name="reason" type="radio" value="privacy_concerns">
														ฉันมีความกังวลเรื่องความเป็นส่วนตัว </label>
													<label for="reason_not_useful">
														<input id="reason_not_useful" name="reason" type="radio" value="not_useful">
														ฉันคิดว่าบริการนี้ไม่มีประโยชน์ </label>
													<label for="reason_dont_understand_how_to_use">
														<input id="reason_dont_understand_how_to_use" name="reason" type="radio" value="dont_understand_how_to_use">
														ฉันไม่เข้าใจวิธีการใช้งาน </label>
													<label for="reason_temporary">
														<input id="reason_temporary" name="reason" type="radio" value="temporary">
														ฉันยกเลิกการใช้บริการชั่วคราวเท่านั้น แล้วฉันจะกลับมาใหม่ </label>
													<label for="reason_other">
														<input id="reason_other" name="reason" type="radio" value="other">
														อื่น ๆ </label>
												</div>

												<div class="space-2">
													<label for="details"> มีข้อมูลอื่นๆ อยากบอกเราเพิ่มเติมหรือไม่ </label>
													<textarea class="input-block" id="details" name="details"></textarea>
												</div>

												<div class="space-2">
													<label> เราสามารถติดต่อคุณเพื่อขอรายละเอียดเพิ่มเติมได้หรือไม่ </label>
													<label class="label-inline" for="reason_yes">
														<input id="contact_ok_yes" name="contact_ok" type="radio" value="yes">
														ได้ </label>
													<label class="label-inline" for="reason_no">
														<input id="contact_ok_no" name="contact_ok" type="radio" value="no">
														ไม่ </label>
												</div>

												<h5> จะเกิดอะไรขึ้น </h5>
												<ul class="space-4">
													<li>
														โปรไฟล์และที่พักต่าง ๆ ของคุณจะหายไป
													</li>
													<li>
														เราจะคิดถึงคุณมาก
													</li>
												</ul>

												<button type="submit" class="btn btn-primary">
													ยกเลิกบัญชีผู้ใช้ของฉัน
												</button>
												<button class="btn" type="button" id="cancel-cancellation-button">
													อย่ายกเลิกบัญชี
												</button>
											</form>
										</div>

										<div class="col-5">
											<h5> ทางเลือกอื่นๆนอกเหนือจากการยกเลิกบัญชี </h5>

											<h6><a href="https://th.airbnb.com/users/privacy/63856890">ปรับการตั้งค่าความเป็นส่วนตัวของฉัน</a></h6>
											<p>
												ปิดการสร้างดัชนีค้นหาบนที่พักของคุณเพื่อป้องกันไม่ให้เครื่องมือค้นหาเช่น Google และ Bing แสดงที่พักของคุณในผลการค้นหาของเครื่องมือเหล่านั้น
											</p>
											<h6><a href="https://th.airbnb.com/users/notifications/63856890">เปลี่ยนการตั้งค่าการแจ้งเตือน</a></h6>
											<p>
												เราส่งอีเมล์ให้คุณมากเกินไปหรือเปล่า คุณสามารถเปลี่ยนการตั้งค่าการแจ้งเตือนของตนเองได้
											</p>
											<h6><a href="https://th.airbnb.com/rooms">ซ่อนที่พักของฉัน</a></h6>
											<p>
												ลบที่พักของคุณออกจากการแสดงผลหรือระบบค้นหาเพื่อยุติการให้เช่าที่พักบน Airbnb
											</p>
										</div>
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
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

</html>
