<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_SESSION['member_id'])) {
	header("location:index.php?login=" . urlencode($_SERVER['REQUEST_URI']) . "&error=1");
	exit(0);
} else {
	require ("/controllers/newpage_controller.php");
	require 'controllers/select_scope.php';
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>แก้ไข ราคาสำหรับ รถเช่า Rentcnd ของคุณ</title>
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
												<h3 class="no-margin-padding">ราคาพื้นฐาน</h3>
											</div>
											<p class="text-muted">
												<span>ราคาพื้นฐานของคุณคืออัตราราคารายวันตามค่าเริ่มต้นของคุณ</span>
											</p>
											<div>
												<div class="space-top-4">
													<div>
														<div class="">
															<h4 class="text-muted space-4"><span>ภายในจังหวัด</span></h4>
															<label for="price-stepper" class="h4 text-muted text-normal"><span>ราคาพื้นฐาน</span></label>
															<div>
																
																	<div class="increment-btn no-padding">
																		<div class="increment-btn btn-group no-padding">
																			<form id="form-price-one">
																			<div class="text-gray btn increment-jumbo increment-btn__label" tabindex="0" role="textbox">
																				<div class="increment-btn__border-container-label text-truncated">
																					<span>฿</span>
																					<input class="increment-btn__input" id="price-one" type="number" style="width: 60px;">
																					<span class="text-muted"><span> ต่อวัน</span></span>
																				</div>
																			</div>
																		</div>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
												<?php
												if(isset($result_scope['announce_scope'])){
												if($result_scope['announce_scope'] == 0){
												?>

												<div class="space-top-6">
													<h4 class="text-muted space-4"><span>ปลายทางต่างจังหวัด</span></h4>
													<div class="row space-4">
														<div class="col-sm-9">
															test
														</div>
														<div class="col-sm-3 text-right">
															<a href="#" data-prevent-default="true" class="remove-cursor"></a>
														</div>
													</div>
													<div class="row space-4">
														<div class="col-sm-9">
															เชียงใหม่ <span>฿4,800</span> ต่อวัน
														</div>
														<div class="col-sm-3 text-right">
															<a href="#" data-prevent-default="true" class="remove-cursor"></a>
														</div>
													</div>
													<form>
														<div class="input-btn-group flex-container-h">
															<div class="flex-item flex-item-fill-parent">
																<div class="select select-block select-jumbo">
																	<select id="province" name="province" class="">
																		<option value="0" disabled=""  selected="">เลือกจังหวัด</option>
																		<option value="1">Toyota</option>
																	</select>
																</div>
																<div class="increment-btn space-top-1">
																	<div class="increment-btn btn-group no-padding">
																		<div class="text-gray btn increment-jumbo increment-btn__label" tabindex="0" role="textbox">
																			<div class="increment-btn__border-container-label text-truncated">
																				<span>฿</span>
																				<input class="increment-btn__input" id="price-stepper" type="number" style="width: 5px;">
																				<span class="text-muted"><span>ต่อวัน</span></span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>

															<div class="flex-item">
																<button type="submit" class="btn btn-jumbo">
																	<span>เพิ่ม</span>
																</button>
															</div>
														</div>
													</form>
												</div>

												<?php
												}
												}
												?>

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
																	<a class="btn-progress-back link-icon va-container va-container-v pull-left text-gray link--accessibility-outline" href="price-terms.php<?php if(isset($_GET['id'])){ echo '?id='.$_GET['id'];}?>"><span class="icon hide-sm"></span><span class="va-middle"><h5 class="text-normal"><span>กลับไป</span></h5> </span> </a>
																	<a id="btn-next-price" class="btn btn-large btn-progress-next btn-large__next-btn pull-right-md btn-soft-dark" href="calendar.php<?php if(isset($_GET['id'])){ echo '?id='.$_GET['id'];}?>">
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
															<span>ฮาโหลเทส 1 2 3 4</span>
														</p>
														<p>
															<span>วันทูทีโฟ</span>
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
																<span>จำนวนและประเภทเตียงที่คุณมีกำหนดว่าผู้เข้าพักกี่คนสามารถพักในที่พักของคุณได้อย่างสบายๆ</span>
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
</html>
