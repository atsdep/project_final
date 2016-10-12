<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_SESSION['member_id'])) {
	header("location:index.php?login=" . urlencode($_SERVER['REQUEST_URI']) . "&error=1");
	exit(0);
} else {
	require ("controllers/newpage_controller.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>สรุป สำหรับรถเช่า Rentcnd ของคุณ</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">

		<link rel="stylesheet" href="css/car.css">

		<link rel="stylesheet" href="css/adthasid.css">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<?php
		include 'config/js.php';
		?>
		<script src="js/new_stepone_controller.js" type="text/javascript"></script>
	</head>

	<body class="with-new-header ">
		<main id="site-content" role="main">
			<div id="lys-redesign-div">
				<div>
					<div>
						<div class="list-your-space__progress">
							<div class="list-your-space__header">
								<div class="airbnb-header new">
									<div class="regular-header clearfix">
										<div class="comp pull-left">
											<a href="/" class="hdr-btn link-reset belo-container text-logo" aria-label="Rentcnd"> Rentcnd </a>
										</div>
										<div class="comp comp__step-bar-wrapper no-hover pull-left hide-sm">
											<span class="hdr-btn"><span class="hide-sm h5 text-normal"><span>ขั้นตอน 3:</span><span>&nbsp;</span></span><span class="h5 text-normal">เตรียมพร้อมสำหรับผู้ใช้บริการ</span></span>
										</div>
										<div class="lys-navbar__save-and-exit comp pull-right h5 text-normal bg-white">
											<span><span class="hide-md hide-lg"> <a href="#" class="lys-navbar__save-and-exit-link hdr-btn" data-prevent-default="true"> <span>ทางออก</span> </a> </span> <span class="hide-sm"> <a href="new.php" class="lys-navbar__save-and-exit-link hdr-btn" data-prevent-default="true"> <span>บันทึกและออก</span> </a></span> </span>
										</div>
									</div>
								</div>
								<div>
									<div class="progress-bar__container"></div>
								</div>
							</div><div class="left-backdrop"></div><div class="right-backdrop hide-sm bg-white right-backdrop--with-bg"></div>
							<div class="list-your-space__content">
								<div class="centered-content clearfix">
									<div class="main-panel-container no-padding-h bg-white main-panel-outer-half clearfix" tabindex="-1">

										<div class="main-panel main-panel-padding main-panel-progress pull-right main-panel-inner-half space-sm-8">
											<div class="panel--no-border panel-title">
												<h3 class="no-margin-padding">ตามการตั้งค่าของคุณ นี่เป็นสิ่งที่คุณคาดการณ์ได้</h3>
											</div>
											<div>
												<div class="space-top-8">
													<div class="space-2 booking-scenario__meet-guest"></div>
													<div class="">
														<div>
															<p>
																<strong><span>เธอว่างจองรถเช่าเริ่มตั้งแต่ 20 ตุลา</span></strong>
															</p>
															<p>
																<span>ญาญ่ากำลังวางแผนการเดินทางและคิดว่ารถเช่าของคุณเหมาะกับการเดินทางของเธอ</span>
															</p>
														</div>
													</div>
												</div>
												<div class="space-top-8">
													<div class="space-2 booking-scenario__arrival"></div>
													<div class="">
														<div>
															<p>
																<strong><span>ผู้ใช้บริการส่งข้อความพร้อมคำขอจองของพวกเขา</span></strong>
															</p>
															<p>
																<span>ญาญ่าบอกว่าเธอจะมาที่เมืองสำหรับงานและเธอต้องการใช้บริการรถเช่าพร้อมคนขับของคุณ</span>
															</p>
														</div>
													</div>
												</div>
												<div class="space-top-8">
													<div class="space-2 booking-scenario__approve-requests"></div>
													<div class="">
														<div>
															<p>
																<strong><span>คุณจะจำเป็นต้องอนุญาตคำขอภายใน 24 ชั่วโมง</span></strong>
															</p>
															<p>
																<span>ญาญ่ากำลังรอการตอบกลับจากคุณเพื่อวางแผนการเดินทางส่วนที่เหลือ</span>
															</p>
														</div>
													</div>
												</div>
												<div class="space-top-8">
													<div class="space-2 booking-scenario__welcome-customer"></div>
													<div class="">
														<div>
															<p>
																<strong>ต้อนรับผู้ใช้บริการที่เช่าบริการของคุณ!</span></strong>
															</p>
															<p>
																<span>ก่อนไปรับญาญ่า ให้คุยรายละเอียดการเดินทางเพื่อเตรียมความพร้อม</span>
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="main-panel__actions-wrapper">
											<div class="centered-content clearfix">
												<div class="bg-white main-panel-outer-half clearfix shadowed">
													<div class="no-margin-padding__sm main-panel-padding main-panel-progress pull-right main-panel-inner-half space-sm-8">
														<div class="divider hide-sm"></div>
														<div class="row no-margin-padding__sm">
															<div class="main-panel__actions col-sm-12 no-margin-padding__sm">
																<div>
																	<a class="btn-progress-back link-icon va-container va-container-v pull-left text-gray link--accessibility-outline" href="car-rules.php<?php if(isset($_GET['id'])){ echo '?id='.$_GET['id'];}?>"> <span class="icon hide-sm"></span><span class="va-middle"><h5 class="text-normal"><span>กลับไป</span></h5> </span> </a>
																	<a id="btn-new-end" class="btn btn-large btn-progress-next btn-large__next-btn pull-right-md btn-soft-dark" href="new.php<?php if(isset($_GET['id'])){ echo '?id='.$_GET['id'];}?>">
																	<div class="btn-progress-next__text">
																		<span>จบ</span>
																	</div> </a>
																	<input type="hidden" value="<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>" id="ann_id">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="waypoint-container">
											<span style="font-size:0;"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>

	</body>
</html>
