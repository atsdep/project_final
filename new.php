<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_SESSION['member_id'])) {
	//header("location:http://".$_SERVER['HTTP_HOST']."?pleaselogin=1");
	header("location:index.php?login=" . urlencode($_SERVER['REQUEST_URI']) . "&error=1");
	exit(0);
} else {
	if (isset($_GET['id'])) {
		require ("controllers/newpage_controller.php");
	}
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

		<title>ลงประกาศรถเช่าพร้อมคนขับ กับ Rentcnd</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">

		<link rel="stylesheet" href="css/new.css">
		<link rel="stylesheet" href="css/adthasid.css">
		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<?php
		include 'config/js.php';
		?>
		<script src="js/new_stepone_controller.js" type="text/javascript"></script>
		<script src="js/check_announce_status.js" type="text/javascript"></script>
	</head>

	<body class="with-new-header ">

		<?php
		include 'include/all_header.php';
		?>

		<main id="site-content" role="main">

			<meta name="pinterest" content="nopin">
			<div id="lys-redesign-div">
				<div>
					<div>
						<div class="bg-white">
							<div>
								<div class="h5 text-normal lys-navbar__preview-link-container show-sm">
									<div class="lys-navbar__preview-link preview-link-not-available">
										<a class="" href="/cars.php" target="_blank"><span>ตัวอย่าง</span></a>
									</div>
								</div>
							</div>
							<div class="landing-width bg-white row row-condensed list-your-space__landing-content">
								<span>
									<div id="finish" class="col-md-7 landing__left-col">
										<div class="landing__left-col-content">
											<h2 class="landing__title-title space-5"><span>สวัสดีคุณ <?php echo $result_mem['member_firstname']  ;?>! มาเตรียมความพร้อมของคุณในการเป็นเจ้าของรถเช่ากับ Rentcnd กันเถอะ</span></h2>
											<div class="step-1">
												<div class="landing-step-collection">
													<div class="row row-condensed lys-vertical-align-middle-container">
														<div class="col-sm-10">
															<div class="va-container va-container-v va-container-h">
																<div class="va-middle">
																	<div class="landing__step-content" style="transition-delay:0ms;">
																		<strong class="landing__step-number text-base text-branding text-light-gray"><span>ขั้นตอนที่ 1</span></strong>
																		<div class="h3 landing__step-content-title landing__subtitle-width">
																			เริ่มที่ข้อมูลพื้นฐาน
																		</div>
																		<div class="landing__step-content-subtitle">
																			ข้อมูลรุ่นรถยนต์ สิ่งอำนวยความสะดวกและอื่นๆ
																		</div>
																		<span id="edit-announce" class="hide"><span class="" style="transition-delay:0ms;display:inline-block;"><a class="link-soft-dark" href="province.php<?php if (isset($_GET['id'])) { echo '?id=' . $_GET['id'];};?>">
																				<span>เปลี่ยน</span></a></span></span>
																		<span><span class="space-top-2" style="transition-delay:0ms;display:inline-block;">
																				<div id="btn-continue">
																					<a class="" href="province.php<?php if (isset($_GET['id'])) { echo '?id=' . $_GET['id'];};?>">
																					<button class="btn btn-soft-dark space-top-1 text-large">
																						<span>ดำเนินการต่อ</span>
																					</button></a>
																				</div></span></span>
																	</div>
																</div>
															</div>
														</div>
														<div id="correct" class="col-sm-2 lys-vertical-align-middle hide">
															<span>
																<div class="text-center" style="transition-delay:1200ms;transition-duration:250ms;">
																	<i class="icon icon-ok-fill icon-size-2 icon-soft-dark correct"></i>
																</div></span>
														</div>
													</div>
												</div>
												<hr>
											</div>
											<div class="step-2">
												<div class="landing-step-collection">
													<div class="row row-condensed lys-vertical-align-middle-container">
														<div class="col-sm-10">
															<div class="va-container va-container-v va-container-h">
																<div class="va-middle">
																	<div class="landing__step-content disabled" style="transition-delay:600ms;">
																		<strong class="landing__step-number text-base text-branding text-light-gray"><span>ขั้นตอนที่ 2</span></strong>
																		<div class="h3 landing__step-content-title landing__subtitle-width">
																			รูปภาพ
																		</div>
																		<div class="landing__step-content-subtitle">
																			รูป รายละเอียดสั้นๆ ชื่อประกาศ
																		</div>
																		<span id="edit-announce" class="hide"><span class="" style="transition-delay:0ms;display:inline-block;"><a class="link-soft-dark" href="photos.php<?php if (isset($_GET['id'])) { echo '?id=' . $_GET['id'];};
																				?>"><span>เปลี่ยน</span></a></span></span>
																		<span><span class="space-top-2" style="transition-delay:0ms;display:inline-block;">
																				<div id="btn-continue" class="hide">
																					<a class="" href="photos.php<?php if (isset($_GET['id'])) { echo '?id=' . $_GET['id'];};?>">
																					<button class="btn btn-soft-dark space-top-1 text-large">
																						<span>ดำเนินการต่อ</span>
																					</button></a>
																				</div></span></span>
																	</div>
																</div>
															</div>
														</div>
														<div id="correct" class="col-sm-2 lys-vertical-align-middle hide">
															<span>
																<div class="text-center" style="transition-delay:1200ms;transition-duration:250ms;">
																	<i class="icon icon-ok-fill icon-size-2 icon-soft-dark correct"></i>
																</div></span>
														</div>
													</div>
												</div>
												<hr>
											</div>
											<div class="step-3">
												<div class="landing-step-collection">
													<div class="row row-condensed lys-vertical-align-middle-container">
														<div class="col-sm-10">
															<div class="va-container va-container-v va-container-h">
																<div class="va-middle">
																	<div class="landing__step-content disabled" style="transition-delay:1500ms;">
																		<strong class="landing__step-number text-base text-branding text-light-gray"><span> ขั้นตอนที่ที่ 3</span></strong>
																		<div class="h3 landing__step-content-title landing__subtitle-width">
																			เตรียมพร้อมสำหรับผู้ใช้บริการ
																		</div>
																		<div class="landing__step-content-subtitle">
																			ราคา ปฎิทิน การตั้งค่าการจอง
																		</div>
																		<span id="edit-announce" class="hide"><span class="" style="transition-delay:0ms;display:inline-block;"><a class="link-soft-dark" href="choose-scope.php<?php if (isset($_GET['id'])) { echo '?id=' . $_GET['id'];};
																				?>"><span>เปลี่ยน</span></a></span></span>
																		<span><span class="space-top-2" style="transition-delay:0ms;display:inline-block;">
																				<div id="btn-continue" class="hide">
																					<a class="" href="choose-scope.php<?php if (isset($_GET['id'])) { echo '?id=' . $_GET['id'];};?>">
																					<button class="btn btn-soft-dark space-top-1 text-large">
																						<span>ดำเนินการต่อ</span>
																					</button></a>
																				</div></span></span>
																	</div>
																</div>
															</div>
														</div>
														<div id="correct" class="col-sm-2 lys-vertical-align-middle hide">
															<span>
																<div class="text-center" style="transition-delay:1200ms;transition-duration:250ms;">
																	<i class="icon icon-ok-fill icon-size-2 icon-soft-dark correct"></i>
																</div></span>
														</div>
													</div>
												</div>
												<hr>
											</div>
											<span>
												<div class="landing__publish-section hide">
													<h3><span>เยี่ยม! คุณพร้อมเผยแพร่ประกาศแล้ว</span></h3>
													<p class="text-gray">
														<span>ไม่นานหลังจากนี้ รถเช่าของคุณจะปรากฏบน  Rentcnd ผู้ใช้บริการสามารถจองวันแรกที่ปฏิทินของคุณแสดงว่ารถเช่าคุณว่าง</span>
													</p>
													<p class="text-rausch">
														<span>*** คุณสามารถยืนยันรถเช่า และ ตัวตนของคุณเพื่อความน่าเชื่อถือและความไว้ใจแก่ผู้ใช้บริการคนอื่นๆ</span>
													</p>
													<div  class="va-container va-container-v">
														<input id="ann_id" type="hidden" value="<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>">
														<button id="btn-new-show" type="button" class="btn btn-som va-middle text-large">
															<span>ลงประกาศรถเช่า</span>
														</button>
														
													<div class="va-middle ready-to-publish-tooltip">
														
														<!-- <div class="help-panel__floating-container">
															<span class="tooltip-popup__transition-container">
																<div class="help-panel--collapsed help-panel__bulb-img-bubble">
																	<div class="help-panel__bulb-img img-center"></div>
																</div>
															</span>
														</div> -->
													</div>
													</div>
													</div>
												</span>
										</div>
									</div><!-- col-md-7 -->
									<div class="col-md-5 landing__right-col">
										<div>
											<div class="landing__animation hide-sm lys-vertical-align-middle-container">
												<span>
													<div style="transition-duration:250ms;">
														<div class="landing__svg-container lys-vertical-align-middle">
															<img src="img/flower.png" />
														</div>
													</div></span>
											</div>

											<!-- <div class="landing__more-info-card">
											<div class="hide-sm">
											<span>
											<div class="panel wmpw-panel fast-animation">

											<div class="panel-body">
											<div class="help-panel__bulb-img space-2"></div>
											<div class="text-large text-gray">
											<span>กรอกข้อมูลให้ครบเพื่อความสะดวกแก่ผู้ใช้บริการ</span>
											</div>
											</div>
											</div> </span>
											</div>
											</div> -->
											
											<div class="landing__more-info-card hide">
												<div class="preview-card text-center text-large">
													<span>
														<div class="preview-card--border media space-top-2 hide-sm">
															<a href="cars.php<?php if(isset($_GET['id'])) { echo '?id=' .  $_GET['id'].'&preview' ;} ;  ?>" target="_blank" class="link-reset link--accessibility-outline" alt="ตัวอย่างประกาศ">
															<div class="panel-body va-container">
																<div class="media-body preview-card--right-col va-middle text-truncated">
																	<span>ชื่อประกาศ</span>
																	<br>
																	<span class="text-rausch"><span>ตัวอย่าง</span></span>
																</div>
																<div class="pull-right media-photo preview-card__img-container" style="height:69px;width:104px;background-position:center;background-size:cover;">
																	<div title="ภาพหน้าแรกของรถเช่า" style="height:69px;width:104px;background-position:center;background-size:cover;background-image:url(../img/car.jpg?aki_policy=x_small);"></div>
																</div>
															</div></a>
														</div></span>
												</div>
											</div>
										</div>
									</div> <!-- col-md-5 --> </span><!-- span main -->

							</div>
						</div>
					</div>
				</div>
				<input type="hidden" id="announce_status" value="<?php if (isset($result_select_announce['announce_status'])) { echo $result_select_announce['announce_status']; }; ?>">
				<div class="col-sm-2 lys-vertical-align-middle">

				</div>
			</div>
			<!-- lys-redesign-div -->
		</main>

		<?php
		include 'include/footer.php';
		?>
	</body>

</html>
