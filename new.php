<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_SESSION['member_id'])) {
	//header("location:http://".$_SERVER['HTTP_HOST']."?pleaselogin=1");
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
									<?php if(isset($result_select_announce['announce_status']) and $result_select_announce['announce_status'] == 'unready' or $result_select_announce['announce_status'] == 'step1' or $result_select_announce['announce_status'] == 'step2'){
									?>
										<div class="col-md-7 landing__left-col fast-animation">
									<?php
									}else{
									?>
										<div class="col-md-7 landing__left-col fast-animation readyToPublish">
									<?php
									}
									?>
									
										<!-- readyToPublish ตอนเสร็จหมดแล้ว -->
										<div class="landing__left-col-content">
											<h2 class="landing__title-title space-5"><span>กลายเป็นเจ้าของรถเช่า Rentcnd</span></h2>

											<div step-header="step-1">
												<?php if(isset($result_select_announce['announce_status']) or $result_select_announce['announce_status'] == 'hide' or $result_select_announce['announce_status'] == 'ready' or $result_select_announce['announce_status'] == 'show'){
												?>
												<div class="landing-step-collection step-collection-completed">
													<?php }else{ ?>
													<div class="landing-step-collection">
														<!-- step-collection-completed กรอกเสร็จแล้ว -->
														<?php } ?>

														<div class="row row-condensed lys-vertical-align-middle-container">
															<div class="col-sm-10">
																<div class="va-container va-container-v va-container-h">
																	<div class="va-middle">
																		<div class="landing__step-content">
																			<strong class="landing__step-number text-base text-branding text-light-gray"><span>ขั้นตอนที่ 1</span></strong>
																			<div class="h3 landing__step-content-title landing__subtitle-width">
																				เริ่มที่ข้อมูลพื้นฐาน
																			</div>
																			<div class="landing__step-content-subtitle">
																				ประเภทรถ สิ่งอำนวยความสะดวกและอื่นๆ
																			</div>
																			<?php if(isset($result_select_announce['announce_status'])){ if($result_select_announce['announce_status'] != 'unready'){
																			?>
																			<span> <span class="" style="transition-delay:0ms;display:inline-block;"> <a class="link-soft-dark" href="/province.php?id=<?php if (isset($_GET['id'])) { echo $_GET['id']; }?>"> <span>เปลี่ยน</span> </a></span> </span>
																			<?php }
																				}
																			?>
																			
																			
																			
																			<?php if(isset($result_select_announce['announce_status'])){
																			if($result_select_announce['announce_status'] != 'step1' and $result_select_announce['announce_status'] == 'unready'){
																			?>
																			<div>
																				<a class="" href="province.php?id=<?php if (isset($_GET['id'])) { echo $_GET['id']; }?>">
																				<button class="btn btn-soft-dark space-top-1 text-large">
																					<span>ดำเนินการต่อ</span>
																				</button></a>
																			</div>
																			<?php } 
																			}else if (!isset($result_select_announce['announce_status'])){
																			?>
																			<div>
																				<a class="" href="province.php">
																				<button class="btn btn-soft-dark space-top-1 text-large">
																					<span>ดำเนินการต่อ</span>
																				</button></a>
																			</div>
																			
																			<?php
																			} ?>
																		</div>
																	</div>
																</div>
															</div>
															<?php if(isset($result_select_announce['announce_status']) and $result_select_announce['announce_status'] != 'unready'){ ?>
															<div class="col-sm-2 correct">
																<span>
																	<div class="text-center" style="transition-delay:0ms;transition-duration:250ms;">
																		<i class="icon icon-ok-fill icon-size-2 icon-soft-dark"></i>
																	</div></span>
															</div>
															<?php } ?>
														</div>
													</div>
													<hr>
												</div>
												<!-- step1 -->
												
												<div step-header="step-2">
												<?php if(isset($result_select_announce['announce_status']) and $result_select_announce['announce_status'] == 'ready'){
												?>
												<div class="landing-step-collection step-collection-completed">
													<?php }else{ ?>
													<div class="landing-step-collection">
														<!-- step-collection-completed กรอกเสร็จแล้ว -->
														<?php } ?>

														<div class="row row-condensed lys-vertical-align-middle-container">
															<div class="col-sm-10">
																<div class="va-container va-container-v va-container-h">
																	<div class="va-middle">
																		<?php
																				if(isset($result_select_announce['announce_status']) and $result_select_announce['announce_status'] != 'unready'){
																				?>
																				<div class="landing__step-content">
																			    <?php }else{ ?>
																			    <div class="landing__step-content disabled">
																			<?php } ?>
																		
																			<strong class="landing__step-number text-base text-branding text-light-gray"><span>ขั้นตอนที่ 2</span></strong>
																			<div class="h3 landing__step-content-title landing__subtitle-width">
																				รูปภาพ
																			</div>
																			<div class="landing__step-content-subtitle">
																				รูป รายละเอียดสั้นๆ ชื่อประกาศ
																			</div>
																			<?php if(isset($result_select_announce['announce_status'])){ if($result_select_announce['announce_status'] != 'step1' and $result_select_announce['announce_status'] != 'unready'){
																			?>
																			<span> <span class="" style="transition-delay:0ms;display:inline-block;"> <a class="link-soft-dark" href="/photos.php?id=<?php if (isset($_GET['id'])) { echo $_GET['id']; }?>"> <span>เปลี่ยน</span> </a></span> </span>
																			<?php }
																				}
																			?>
																			<?php if(isset($result_select_announce['announce_status'])){
																			if($result_select_announce['announce_status'] != 'unready' and $result_select_announce['announce_status'] == 'step1'){
																			?>
																			<div>
																				<a class="" href="photos.php?id=<?php if (isset($_GET['id'])) { echo $_GET['id']; }?>">
																				<button class="btn btn-soft-dark space-top-1 text-large">
																					<span>ดำเนินการต่อ</span>
																				</button></a>
																			</div>
																			<?php } } ?>
																		</div>
																	</div>
																</div>
															</div>
															<?php if(isset($result_select_announce['announce_status']) and $result_select_announce['announce_status'] != 'step1' and $result_select_announce['announce_status'] != 'unready'){ ?>
															<div class="col-sm-2 correct">
																<span>
																	<div class="text-center" style="transition-delay:0ms;transition-duration:250ms;">
																		<i class="icon icon-ok-fill icon-size-2 icon-soft-dark"></i>
																	</div></span>
															</div>
															<?php } ?>
														</div>
													</div>
													<hr>
												</div>
												<!-- step2 -->
												
												<div step-header="step-3">
												<?php if(isset($result_select_announce['announce_status']) and $result_select_announce['announce_status'] == 'ready'){
												?>
												<div class="landing-step-collection step-collection-completed">
													<?php }else{ ?>
													<div class="landing-step-collection">
														<!-- step-collection-completed กรอกเสร็จแล้ว -->
														<?php } ?>

														<div class="row row-condensed lys-vertical-align-middle-container">
															<div class="col-sm-10">
																<div class="va-container va-container-v va-container-h">
																	<div class="va-middle">
																		<?php
																				if(isset($result_select_announce['announce_status']) and $result_select_announce['announce_status'] != 'unready' and $result_select_announce['announce_status'] != 'step1'){
																				?>
																				<div class="landing__step-content">
																			    <?php }else{ ?>
																			    <div class="landing__step-content disabled">
																			<?php } ?>
																		
																			<strong class="landing__step-number text-base text-branding text-light-gray"><span>ขั้นตอนที่ 3</span></strong>
																			<div class="h3 landing__step-content-title landing__subtitle-width">
																				เตรียมพร้อมสำหรับผู้ใช้บริการ
																			</div>
																			<div class="landing__step-content-subtitle">
																				ราคา ปฎิทิน การตั้งค่าการจอง
																			</div>
																			<?php if(isset($result_select_announce['announce_status'])){ if($result_select_announce['announce_status'] == 'ready' or $result_select_announce['announce_status'] == 'hide' or $result_select_announce['announce_status'] == 'show'){
																			?>
																			<span> <span class="" style="transition-delay:0ms;display:inline-block;"> <a class="link-soft-dark" href="/choose-scope.php?id=<?php if (isset($_GET['id'])) { echo $_GET['id']; }?>"> <span>เปลี่ยน</span> </a></span> </span>
																			<?php }
																				}
																			?>
																			<?php if(isset($result_select_announce['announce_status'])){
																			if($result_select_announce['announce_status'] != 'unready' and $result_select_announce['announce_status'] == 'step2'){
																			?>
																			<div>
																				<a class="" href="choose-scope.php?id=<?php if (isset($_GET['id'])) { echo $_GET['id']; }?>">
																				<button class="btn btn-soft-dark space-top-1 text-large">
																					<span>ดำเนินการต่อ</span>
																				</button></a>
																			</div>
																			<?php } } ?>
																		</div>
																	</div>
																</div>
															</div>
															<?php if(isset($result_select_announce['announce_status']) and $result_select_announce['announce_status'] != 'unready' and $result_select_announce['announce_status'] != 'step1' and $result_select_announce['announce_status'] != 'step2'){ ?>
															<div class="col-sm-2 correct">
																<span>
																	<div class="text-center" style="transition-delay:0ms;transition-duration:250ms;">
																		<i class="icon icon-ok-fill icon-size-2 icon-soft-dark"></i>
																	</div></span>
															</div>
															<?php } ?>
														</div>
													</div>
													<hr>
												</div>
												<!-- step3 -->

															<?php
															if(isset($result_select_announce['announce_status']) and $result_select_announce['announce_status'] == 'ready'){
															?>

															<span>
																<div class="landing__publish-section">
																	<h3></h><span>เรียบร้อย!! พร้อมเผยแพร่แล้ว</span></h3>
																	<p class="text-gray">
																		<span>รถเช่าของคุณจะปรากฏบน Rentcnd ผู้ใช้คนอื่นสามารถจองตามที่ปฏิทินของคุณแสดงว่าบริการรถเช่าพร้อมคนขับของคุณว่าง</span>
																	</p>
																	<p class="text-rausch">
																		<span>*** คุณสามารถยืนยันรถเช่า และ ตัวตนของคุณเพื่อความน่าเชื่อถือและความไว้ใจแก่ผู้ใช้บริการคนอื่นๆ</span>
																	</p>
																	<div class="va-container va-container-v">
																		<button id="btn-new-show" type="button" class="btn btn-som va-middle text-large">
																			<span>ลงประกาศรถเช่า</span>
																		</button>
																	</div>
																</div></span>

															<?php } ?>
														</div>
														<!-- landing__left-col-content -->
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
															<?php if(isset($result_select_announce['announce_status']) and $result_select_announce['announce_status'] != 'unready' and $result_select_announce['announce_status'] != 'step1'){
															?>

															<div class="landing__more-info-card">
																<div class="preview-card text-center text-large">
																	<span>
																		<div class="preview-card--border media space-top-2 hide-sm">
																			<a href="cars.php?preview" target="_blank" class="link-reset link--accessibility-outline" alt="ตัวอย่างประกาศ">
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
															<?php
															}
															?>
														</div>
													</div> <!-- col-md-7 -->
								</span><!-- span main -->

							</div>
						</div>
					</div>
				</div>

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
