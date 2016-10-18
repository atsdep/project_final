<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_SESSION['member_id'])) {
	header("location:index.php?login=" . urlencode($_SERVER['REQUEST_URI']) . "&error=1");
	exit(0);
}else if ($_GET['mid'] != $_SESSION['member_id']){
	header("location:index.php?");
}else {
	require ("controllers/newpage_controller.php");
	require ("controllers/verifycheck_controller.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>แก้ไข หัวข้อประกาศ สำหรับรถเช่า Rentcnd ของคุณ</title>
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
											<span class="hdr-btn"><span class="hide-sm h5 text-normal"><span>ขั้นตอน 2:</span><span>&nbsp;</span></span><span class="h5 text-normal">รูปภาพ</span></span>
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
												<h3 class="no-margin-padding">เพิ่มเบอร์มือถือของคุณ</h3>
											</div>
											<div id="pic-process" class="col-md-3 no-margin-padding hide">
												<div class="lys-icon-container text-center">
													<div class="lys-icon-group">
														<span>
															<div class="phone-icon__bubble-group">
																<div class="phone-icon__phone"></div><div class="phone-icon__bubble"></div>
															</div>
														</span>
													</div>
												</div>
											</div>
											<div id="pic-default" class="col-md-3 no-margin-padding">
												<div class="lys-icon-container text-center">
													<div class="lys-icon-group">
														<div class="phone-icon__phone"></div><span></span>
													</div>
												</div>
											</div>
											<div id="input-number" class="col-md-9 space-top-2 no-padding">
												<div class="">
													<div class="phone-verification-form">
														<div class="row">
															<div class="col-md-8 phone-input">
																<div class="input-addon">
																	<input type="tel" class="input-stem inspectletIgnore input-jumbo" pattern="[0-9]*" id="phone_number" placeholder="" inputmode="numeric" value="">
																	<span id="btn-verify" class="input-suffix btn btn-soft-dark btn-jumbo"><span>ตรวจสอบความถูกต้อง</span></span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											
											<div id="verify-process" class="col-md-9 space-top-2 no-padding hide">
												<div class="row" tabindex="-1">
													<div class="col-md-12">
														<p class="">
															<span>ตรวจดูโทรศัพท์ของคุณ <span id="tel-number"></span> เพื่อดูข้อความจากเรา กรอกรหัสเป็นตัวเลข 4 หลัก</span>
														</p>
														<div class="">
															<div class="row space-top-3">
																<div class="col-4">
																	<input class="phone-number-verification input-jumbo" type="number" pattern="[0-9]*" id="phone_number_verification" placeholder="####">
																</div>
																<div class="col-4">
																	<button id="btn-verification" type="button" class="btn-soft-dark space-top-2">ยืนยัน</button>
																</div>
															</div>
															<div class="space-top-2">
																<small><a href="#" data-prevent-default="true">ลองใหม่</a></small>
															</div>
														</div>
														<div class="row space-top-3">
																<span id="example-code"></span>
														</div>
													</div>
												</div>
											</div>
											<div id="verify-success" class="col-md-9 space-top-2 no-padding hide">
												<div class="row phone-verification-form" tabindex="-1">
													<div class="col-md-5">
														<div class="input-addon input-addon-jumbo__verified">
															<input type="tel" class="phone-verified input-stem inspectletIgnore input-jumbo" id="phone_number" value="" disabled="">
															<div class="input-suffix ok-fill-babu input-jumbo"></div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- button -->
										<div class="main-panel__actions-wrapper">
											<div class="centered-content clearfix">
												<div class="bg-white main-panel-outer-half clearfix shadowed">
													<div class="no-margin-padding__sm main-panel-padding main-panel-progress pull-right main-panel-inner-half space-sm-8">
														<div class="divider hide-sm"></div>
														<div class="row no-margin-padding__sm">
															<div class="main-panel__actions col-sm-12 no-margin-padding__sm">
																<div>
																	<a class="btn-progress-back link-icon va-container va-container-v pull-left text-gray link--accessibility-outline" href="title.php?id=<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>"> <span class="icon hide-sm"></span><span class="va-middle"><h5 class="text-normal"><span>กลับไป</span></h5> </span> </a>
																	<a id="next-title" class="btn btn-large btn-progress-next btn-large__next-btn pull-right-md btn-soft-dark" href="new.php?id=<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>">
																	<div class="btn-progress-next__text">
																		<span>ถัดไป</span>
																	</div> </a>
																</div>
																<input type="hidden" value="<?php if(isset($_GET['mid'])){ echo $_GET['mid'];}?>" id="member_id">
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
									<div class="help-panel-container">
										<div class="hide-sm help-panel panel">
											<div class="panel-body">
												<div class="help-panel__bulb-img space-2"></div>
												<div class="help-panel__text">
													<div>
														<p>
															<span>ผู้เช่าบริการที่ได้รับการยืนยันเท่านั้นที่ได้รับเบอร์โทรของคุณ การกระทำนี้ช่วยให้ผู้เช่าบริการติดต่อคุณได้เร็วขึ้น</span>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="show-sm help-panel__floating-container">
											<span class="tooltip-popup__transition-container">
												<!-- <div class="help-panel--expanded help-panel__floating-panel bg-white help-panel__floating-panel--upward help-panel__floating-panel--leftward">
													<div class="help-panel__bulb-img"></div><div class="help-panel__close-icon"></div>
													<div class="help-panel__floating-panel-body help-panel__text">
														<div>
															<p>
																<span>Mobile</span>
															</p>
														</div>
													</div>
												</div> -->
												<div class="help-panel--collapsed help-panel__bulb-img-bubble">
													<div class="help-panel__bulb-img img-center"></div>
												</div> </span>
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
