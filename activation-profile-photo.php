<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_SESSION['member_id'])) {
	header("location:index.php");
	exit(0);
} else {
	if (!isset($_GET['id']) || !isset($_GET['destination']) || !isset($_GET['checkin']) || !isset($_GET['checkout']) || !isset($_GET['passenger'])) {
		header("location:for_rent.php");
	}else{
		require 'controllers/select_member.php';
		require 'controllers/cars_page_controller.php';
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

		<title>อัพโหลดรูปโปรไฟล์ของคุณ</title>
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
		<script type="text/javascript" src="js/activation_controller.js"></script>
	</head>

	<body class="with-new-header">

		<?php
		include 'include/all_header.php';
		
			if (isset($result_mem['member_profile_photo'])) {
				$profile_photo = 'img/' . $result_mem['member_profile_photo'];
			} else {
				$profile_photo = 'img/profile.jpg';
				$verify_profile_photo = 0;
			}
			
			if ($result_mem['member_telephone_verified'] == 0) {
				$verify_telephone = 0;
			} else {
				$verify_telephone = 1;
			}
		?>

		<main id="site-content" role="main">
			
			<input name="destination" id="destination" type="hidden" value="<?php echo $_GET['destination'] ?>">
			<input name="checkin" id="checkin" type="hidden" value="<?php echo $_GET['checkout'] ?>">
			<input name="checkout" id="checkout" type="hidden" value="<?php echo $_GET['checkout'] ?>">
			<input name="passenger" id="passenger" type="hidden" value="<?php echo $_GET['passenger'] ?>">
			<input name="id" id="id" type="hidden" value="<?php echo $_GET['id'] ?>">
			
			<input name="verify_telephone" id="verify_telephone" type="hidden" value="<?php echo $verify_telephone ?>">

			<div class="page-container-full bg-white">
				<div class="account-activation-standalone space-4 space-top-4">
					<span>
						<div class="activation-step-panel" tabindex="-1">
							<div class="activation-step-panel__header">
								<div class="space-3">
									<div class="text-center">
										<div class="activation-step-marker">
											<i class="dot dot-success"></i>
										</div>
										<div class="activation-step-marker">
											<i class="dot dot-success"></i>
										</div>
										<div class="activation-step-marker">
											<i class="dot dot-light-gray"></i>
										</div>
										<div class="activation-step-marker">
											<i class="dot dot-light-gray"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="activation-step-panel__wrapper">
								<div class="activation-step-panel__body">
									<div class="activation-phone-verification-form">
										<h3 class="space-1"><span>เพิ่มรูปโปรไฟล์ของคุณ</span></h3>
										<div class="col-sm-10 col-center space-top-4">
											<div id="upload-profile" class="profile-photo__container va-container-md">
												<div class="profile-photo--with-background-image media-photo media-round media-photo-badge va-middle"><img class="" src="img/profile.jpg?aki_policy=profile_x_medium" height="144" width="144" alt="">
												</div>
												<div class="show-sm space-2">

												</div>
												<div class="va-middle-activation">
													<button type="button" class="btn btn-facebook space-1 space-top-2 btn-jumbo text-truncated profile-photo-button btn-jumbo-activation-facebook">
														<i class="icon h4 icon-facebook"></i><span>ใช้รูป Facebook</span>
													</button>
													<br>
													<span>
														<input class="hidden-file-input-with-label" id="upload_photo_input_7cd78851-8ecf-4d05-a990-d0fb64d417b8" type="file" accept="image/*" capture="" name="image">
														<label for="upload_photo_input_7cd78851-8ecf-4d05-a990-d0fb64d417b8" class="btn btn-jumbo btn-jumbo-activation"><i class="icon h4 icon-upload"></i> <span>&nbsp;&nbsp;</span> <span>อัพโหลดรูปภาพ</span> </label> </span>
														<input class="" id="" type="file" accept="image/*" capture="" name="image">
												</div>

											</div>

										</div>
										<div class="text-lead space-top-4">
											<span>เพื่อให้เจ้าของรถเช่าของคุณทราบว่าพวกเขากำลังติดต่ออยู่กับคนจริงๆ </span>
										</div>
										<div class="activation-footer__container space-top-4">
											<div class="activation-footer">
												<button id="btn-next-activation-profile-page" type="button" class="btn btn-soft-dark btn-large btn-block">
													<span>ถัดไป</span>
												</button>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
						</div></span>
						
				</div>
			</div>

		</main>


		<?php
		include 'include/footer.php';
		?>
	</body>
</html>
