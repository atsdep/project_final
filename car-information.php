<?php
session_start();
require 'config/database.php';
require 'config/connectdb.php';
if (!isset($_SESSION['member_id'])) {
	header("location:index.php?login=" . urlencode($_SERVER['REQUEST_URI']) . "&error=1");
	exit(0);
} else {
	require ("controllers/newpage_controller.php");
	require 'controllers/select_type_of_fuel.php';
}
?>
<!DOCTYPE html>
<html lang="th">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>แก้ไข ข้อมูลเพิ่มเติม สำหรับรถเช่า Rentcnd ของคุณ</title>
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

	<body class="with-new-header">
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
											<span class="hdr-btn"><span class="hide-sm h5 text-normal"><span>ขั้นตอน 1:</span><span>&nbsp;</span></span><span class="h5 text-normal">เริ่มที่ข้อมูลพื้นฐาน</span></span>
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
												<h3 class="no-margin-padding">รถของคุณเป็นรถอะไร</h3>
											</div>
											<div data-reactid="1">
												<div class="space-4">
													<div>
														<label class="h4 text-gray text-normal"><span>เลือกประเภทเชื้อเพลิง</span></label>
														<div class="select select-block select-jumbo">
															<select id="type_of_fuel" name="type_of_fuel" class="">
																<option selected="" value="" disabled="">ประเภทเชื้อเพลิง</option>
																<option value="เบนซิน 95">เบนซิน 95</option>
																<option value="แก๊สโซฮอล์ 91">แก๊สโซฮอล์ 91</option>
																<option value="แก๊สโซฮอล์ 95">แก๊สโซฮอล์ 95</option>
																<option value="แก๊สโซฮอล์ E20">แก๊สโซฮอล์ E20</option>
																<option value="แก๊สโซฮอล์ E85">แก๊สโซฮอล์ E85</option>
																<option value="ดีเซล">ดีเซล</option>
																<option value="แก๊ส LPG">แก๊ส LPG</option>
																<option value="แก๊ส NGV">แก๊ส NGV</option>
																<option value="ไฟฟ้า">ไฟฟ้า</option>
																<option value="เบนซินไฮบริด">เบนซินไฮบริด</option>
																<option value="ดีเซลไฮบริด">ดีเซลไฮบริด</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div data-reactid="1">
												<div class="space-4">
													<div>
														<label class="h4 text-gray text-normal"><span>จำนวนผู้โดยสารที่รองรับสูงสุด</span></label>
														<div class="select select-block select-jumbo">
															<select id="passenger" name="passenger">
																<option value="1">รองรับผู้โดยสาร 1 คน</option>
																<option value="2">รองรับผู้โดยสาร 2 คน</option>
																<option value="3">รองรับผู้โดยสาร 3 คน</option>
																<option value="4">รองรับผู้โดยสาร 4 คน</option>
																<option value="5">รองรับผู้โดยสาร 5 คน</option>
																<option value="6">รองรับผู้โดยสาร 6 คน</option>
																<option value="7">รองรับผู้โดยสาร 7 คน</option>
																<option value="8">รองรับผู้โดยสาร 8 คน</option>
																<option value="9">รองรับผู้โดยสาร 9 คน</option>
																<option value="10">รองรับผู้โดยสาร 10 คน</option>
																<option value="11">รองรับผู้โดยสาร 11 คน</option>
																<option value="12">รองรับผู้โดยสาร 12 คน</option>
																<option value="13">รองรับผู้โดยสาร 13 คน</option>
																<option value="14">รองรับผู้โดยสาร 14 คน</option>
																<option value="15">รองรับผู้โดยสาร 14+ คน</option>
															</select>
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
																	<a class="btn-progress-back link-icon va-container va-container-v pull-left text-gray link--accessibility-outline" href="generation.php?id=<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>"> <span class="icon hide-sm"></span><span class="va-middle"><h5 class="text-normal"><span>กลับไป</span></h5> </span> </a>

																	<a id="" class="btn btn-large btn-progress-next btn-large__next-btn pull-right-md btn-soft-dark" href="amenities.php?id=<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>"> 
																		<!-- <span id="process-loading" class="hide-sm loading" style="left: -123px; top: 10px;"></span> -->
																	<div class="btn-progress-next__text">
																		<span>ถัดไป</span>
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
									<div class="help-panel-container">
										<div class="hide-sm help-panel panel">
											<div class="panel-body">
												<div class="help-panel__bulb-img help-soft space-2"></div>
												<div class="help-panel__text">
													<div>
														<p>
															<span class="help-panel__title"><span>เลือกประเภทเชื้อเพลิง</span>
																<br>
															</span><span>บอกให้ผู้ใช้ทราบประเภทเชื้อเพลิงที่คุณใช้ตอนบริการ</span>
														</p>
														<p>
															<span class="help-panel__title"><span>จำนวนผู้โดยสารที่รองรับสูงสุด</span>
																<br>
															</span><span>กำหนดผู้โดยสารที่คุณสามารถรองรับได้สูงสุด  ควรมีที่นั่งรองรับสำหรับทุกคน</span>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="show-sm help-panel__floating-container">
											<span class="tooltip-popup__transition-container"> <!-- <div class="help-panel--expanded help-panel__floating-panel bg-white help-panel__floating-panel--upward help-panel__floating-panel--leftward">
												<div class="help-panel__bulb-img"></div><div class="help-panel__close-icon"></div>
												<div class="help-panel__floating-panel-body help-panel__text">
												<div>
												<p>
												<span>จำนวนและประเภทเตียงที่คุณมีกำหนดว่าผู้เข้าพักกี่คนสามารถพักในที่พักของคุณได้อย่างสบายๆ</span>
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
