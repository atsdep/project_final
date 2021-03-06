<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_SESSION['member_id'])) {
	header("location:index.php?login=" . urlencode($_SERVER['REQUEST_URI']) . "&error=1");
	exit(0);
} else {
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
												<h3 class="no-margin-padding">ชื่อหัวข้อประกาศของคุณ</h3>
											</div>

											<div>
												<fieldset class="lys-input__fieldset">
													<form id="form-title" name="form-title">
													<input autocomplete="off" id="title" type="text" aria-label="ชื่อประกาศ" placeholder="ชื่อประกาศ" value="" minlength="0" maxlength="50"class="lys-title__input">
													<strong> <span class="lys-input__remaining-char-count text-muted text-small">50 </span> </strong>
													</form>
												</fieldset>

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
																	<a class="btn-progress-back link-icon va-container va-container-v pull-left text-gray link--accessibility-outline" href="description.php?id=<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>"> <span class="icon hide-sm"></span><span class="va-middle"><h5 class="text-normal"><span>กลับไป</span></h5> </span> </a>
																	<?php
																	if($row_select_member ==1){
																		if($result_member['member_profile_photo'] != null and $result_member['member_telephone_verified'] == 1){
																			$link = "new.php?id=".$_GET['id'];
																		}else if ($result_member['member_profile_photo'] == null and $result_member['member_telephone_verified'] == 1) {
																			$link = 'profile-photo.php?mid='.$_SESSION['member_id'].'&id='.$_GET['id'];
																		}else if ($result_member['member_profile_photo'] != null and $result_member['member_telephone_verified'] == 0){
																			$link= 'verify-phone.php?mid='.$_SESSION['member_id'].'&id='.$_GET['id'];
																		}else{
																			$link = 'profile-photo.php?mid='.$_SESSION['member_id'].'&id='.$_GET['id'];
																		}
																	}
																	?>
																	<a id="next-title" class="btn btn-large btn-progress-next btn-large__next-btn pull-right-md btn-soft-dark" href="<?php echo $link ?>">
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
															<span>มีบางตัวอย่างจากรถเช่าใกล้เคียง</span>
														</p>
														<div class="va-container va-container-v space-1">
															<div class="pull-left lys-similar-listing__cover-img preview-card__img-container" style="height:75px;width:100px;background-position:center;background-size:cover;">
																<div title="ภาพหน้าแรกของรถเช่า" style="height:75px;width:100px;background-position:center;background-size:cover;background-image:url(img/car.jpg?aki_policy=small);"></div>
															</div>
															<div class="va-middle">
																Yaris 2010 1.5 E-Limited นครปฐม
															</div><div class="clearfix"></div>
															<br>
														</div>
														<div class="va-container va-container-v space-1">
															<div class="pull-left lys-similar-listing__cover-img preview-card__img-container" style="height:75px;width:100px;background-position:center;background-size:cover;">
																<div title="ภาพหน้าแรกของรถเช่า" style="height:75px;width:100px;background-position:center;background-size:cover;background-image:url(img/car.jpg?aki_policy=small);"></div>
															</div>
															<div class="va-middle">
																Yaris 2010 1.5 E-Limited นครปฐม
															</div><div class="clearfix"></div>
															<br>
														</div>
														<div class="va-container va-container-v space-1">
															<div class="pull-left lys-similar-listing__cover-img preview-card__img-container" style="height:75px;width:100px;background-position:center;background-size:cover;">
																<div title="ภาพหน้าแรกของรถเช่า" style="height:75px;width:100px;background-position:center;background-size:cover;background-image:url(img/car.jpg?aki_policy=small);"></div>
															</div>
															<div class="va-middle">
																Yaris 2010 1.5 E-Limited นครปฐม
															</div><div class="clearfix"></div>
															<br>
														</div>
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
