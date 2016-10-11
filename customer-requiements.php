<?php
session_start();
require 'config/database.php';
require 'config/connectdb.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>แก้ไข ข้อกำหนดสำหรับผู้ใช้บริการ รถเช่า Rentcnd ของคุณ</title>
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
												<h3 class="no-margin-padding">อ่านข้อกำหนดสำหรับผู้จะเช่ารถ Rentcnd</h3>
											</div>
											<div>
												<div>
													<div class="space-5">
														<div class="space-3">
															<span>Rentcnd กำหนดให้ผู้ใช้บริการทุกคนส่งข้อมูลต่อไปนี้ก่อนจองรถเช่า</span>
														</div>
														<div class="clearfix space-1">
															<div class="green-checkmark col-sm-1">
																<span class="green-checkmark-icon"></span>
															</div>
															<div class="pull-left col-sm-11">
																<span>อีเมลแอดเดรสที่ยืนยันแล้ว</span>
															</div>
														</div>
														<div class="clearfix space-1">
															<div class="green-checkmark col-sm-1">
																<span class="green-checkmark-icon"></span>
															</div>
															<div class="pull-left col-sm-11">
																<span>เบอร์โทรที่ยืนยันแล้ว</span>
															</div>
														</div>
														<div class="clearfix space-1">
															<div class="green-checkmark col-sm-1">
																<span class="green-checkmark-icon"></span>
															</div>
															<div class="pull-left col-sm-11">
																<span>รูปโปรไฟล์</span>
															</div>
														</div>
														<div class="clearfix space-1">
															<div class="green-checkmark col-sm-1">
																<span class="green-checkmark-icon"></span>
															</div>
															<div class="pull-left col-sm-11">
																<span>ข้อมูลการชำระเงิน</span>
															</div>
														</div>
													</div>
													<div class="space-5">
														<div class="space-3">
															<span>ผู้ใช้บริการยังต้องทำสิ่งต่อไปนี้ในขณะจองรถเช่า</span>
														</div>
														<div class="clearfix space-1">
															<div class="green-checkmark col-sm-1">
																<span class="green-checkmark-icon"></span>
															</div>
															<div class="pull-left col-sm-11">
																<span>ยอมรับกฎของบริการรถเช่าพร้อมคนขับของคุณ</span>
															</div>
														</div>
														<div class="clearfix space-1">
															<div class="green-checkmark col-sm-1">
																<span class="green-checkmark-icon"></span>
															</div>
															<div class="pull-left col-sm-11">
																<span>แจ้งเป้าหมายการเดินทางของพวกเขาให้คุณทราบ</span>
															</div>
														</div>
													</div>
												</div>
												<div class="space-3">
													<a href="#" data-prevent-default="true" class="link-reset"><span>เพิ่มข้อกำหนดเพิ่มเติมสำหรับผู้ใช้บริการ</span></a>
												</div>
												<div>
													<div class="space-5">
														<p class="text-muted text-large space-3">
															<span>ข้อกำหนดมากขึ้นสามารถหมายถึงโอกาสการได้รับการจองน้อยลง</span>
														</p>
														<form id="form-customer-requiements">
														<div class="ib-requirement text-jumb-normal space-3">
															<input id="government_id" type="checkbox" class="col-sm-1" value="government_id">
															<div class="pull-left col-sm-11">
																<label for="government_id"><span>บัตรประจำตัวที่รัฐบาลออกให้ที่ส่งให้ Rentcnd</span></label>
															</div><div class="clearfix"></div>
														</div>
														</form>
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
																	<a class="btn-progress-back link-icon va-container va-container-v pull-left text-gray link--accessibility-outline" href="calendar.php"> <span class="icon hide-sm"></span><span class="va-middle"><h5 class="text-normal"><span>กลับไป</span></h5> </span> </a>
																	<a class="btn btn-large btn-progress-next btn-large__next-btn pull-right-md btn-soft-dark" href="car-rules.php">
																	<div class="btn-progress-next__text">
																		<span>ถัดไป</span>
																	</div> </a>
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
									<div class="help-panel-container">
										<div class="hide-sm help-panel panel">
											<div class="panel-body">
												<div class="help-panel__bulb-img help-soft space-2"></div>
												<div class="help-panel__text">
													<div>
														<p>
															<span>คุณจำเป็นต้องรู้สึกมั่นใจทุกครั้งที่ผู้ใช้มาใช้บริการรถเช่าของคุณ เราจึงกำหนดให้ผู้ใช้บริการแต่ละคนกรอกข้อมูลบางประการก่อนจองรถเช่า</span>
														</p>
														<p>
															<span>คุณจะตั้งค่ากฎของรถเช่าสำหรับผู้ใช้บริการรถเช่าของคุณในหน้าถัดไป</span>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="show-sm help-panel__floating-container">
											<span class="tooltip-popup__transition-container">
												<div class="help-panel--expanded help-panel__floating-panel bg-white help-panel__floating-panel--upward help-panel__floating-panel--leftward">
													<div class="help-panel__bulb-img"></div><div class="help-panel__close-icon"></div>
													<div class="help-panel__floating-panel-body help-panel__text">
														<div>
															<p>
																<span>Mobile</span>
															</p>
														</div>
													</div>
												</div>
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
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

</html>
