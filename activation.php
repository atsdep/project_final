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

		<title>สร้างรายได้จากการขับรถของตัวเอง กับ Rentcnd</title>
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
			$sql_select_ann = "SELECT members.member_firstname,
			announces.announce_photos_1,
			announces.announce_title
			FROM announces
			INNER JOIN members
			ON announces.member_id = members.member_id
			WHERE announces.announce_id = '" . $_GET['id'] . "'";
			
			$query_ann = mysqli_query($connect, $sql_select_ann);
			$result_ann = mysqli_fetch_assoc($query_ann);
			$row_ann = mysqli_num_rows($query_ann);
			if($row_ann == 1){
				if (isset($result_ann['announce_photos_1'])) {
					$photos_1 = 'img/' . $result_ann['announce_photos_1'];
				} else {
					$photos_1 = 'img/car_default_no_photos.png';
				}
			}
			
			
			if (isset($result_mem['member_profile_photo'])) {
				$profile_photo = 'img/' . $result_mem['member_profile_photo'];
			} else {
				$profile_photo = 'img/profile.jpg';
				$verify_profile_photo = 0;
			}
			
		
		?>
		<main id="site-content" role="main">
			
			<input name="destination" id="destination" type="hidden" value="<?php echo $_GET['destination'] ?>">
			<input name="checkin" id="checkin" type="hidden" value="<?php echo $_GET['checkout'] ?>">
			<input name="checkout" id="checkout" type="hidden" value="<?php echo $_GET['checkout'] ?>">
			<input name="passenger" id="passenger" type="hidden" value="<?php echo $_GET['passenger'] ?>">
			<input name="id" id="id" type="hidden" value="<?php echo $_GET['id'] ?>">
			
			<input name="verify_profile_photo" id="verify_profile_photo" type="hidden" value="<?php echo $verify_profile_photo ?>">

			<div class="page-container-full bg-white" data-react-checksum="955207149">
				<div class="account-activation-standalone space-4 space-top-4">
					<div class="activation-step-panel" tabindex="-1">
						<noscript></noscript>
						<div class="activation-step-panel__body">
							<h3><span>เตรียมพร้อมจองรถเช่าและคนขับ</span><span> กับ <?php echo $result_ann['member_firstname'] ?></span></h3>
							<div class="space-6 space-top-6">
								<div class="profile-pic-duo">
									<div class="profile-pic-duo__user-left"><img class="profile-pic-duo__image media-photo media-round" src="<?php echo $profile_photo ?>?aki_policy=profile_x_medium" alt="<?php echo $result_mem['member_firstname'] ?>">
									</div>
									<div class="profile-pic-duo__logo highlighted-icon">
										<div class="highlighted-icon__background bg-soft-dark media-round"></div><i class="highlighted-icon__icon icon icon-star  icon-size-2 icon-white"></i>
									</div>
									<div class="profile-pic-duo__user-right"><img class="profile-pic-duo__image media-photo media-round" src="<?php echo $photos_1 ?>?aki_policy=profile_x_medium" alt="<?php echo $result_ann['announce_title'] ?>">
									</div>
								</div>
							</div>
							<p class="text-lead space-2 space-top-4">
								<span>เราขอให้ทุกคนใน Rentcnd ยืนยันบางสิ่งก่อนเช่าบริการหรือให้เช่ารถพร้อมคนขับ</span>
							</p>
							<p class="text-lead space-4">
								<span>คุณต้องทำสิ่งนี้ครั้งเดียวเท่านั้น</span>
							</p>
							<div class="activation-footer__container">
								<div class="activation-footer">
									<button id="btn-next-activation-page" type="button" class="btn btn-soft-dark btn-large btn-block">
										<span>ถัดไป</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>

		<div id="signup-modal" class="modal fade" role="dialog" aria-describedby="signup-modal-content"  tabindex="-1">
			<div class="">
				<div class="">
					<div class="modal-content signup signup-login-form__container" id="signup-modal-content">

						<div class="modal-header panel-header">
							ลงทะเบียน
							<a href="#" class="modal-close" data-dismiss="modal" data-behavior="modal-close"></a>
						</div>

						<div class="alert alert-with-icon alert-error alert-header panel-header hidden-element notice" id="notice">
							<i class="icon alert-icon icon-alert-alt"></i>

						</div>

						<div class="panel-padding panel-body signup-login-form__extra-panel-body first">

							<div class="social-buttons">

								<a href="/oauth_connect?from=facebook_signup&amp;redirect_url=%2Frooms%2Fnew%3Ffrom_sh%3D1&amp;service=facebook" class="btn icon-btn create-using-facebook btn-block signup-login-form__btn-xl space-1 btn-large btn-facebook js-facebook-auth"> <span class="icon-container"> <i class="icon icon-facebook"></i> </span> <span class="text-container"> ลงทะเบียนโดยใช้ Facebook </span> </a>

							</div>

							<div class="text-center social-links hide">
								สมัครด้วย <a href="#" class="js-facebook-auth">Facebook</a>
							</div>

							<div class="signup-or-separator">
								<span class="h6 signup-or-separator--text">หรือ</span>
								<hr>
							</div>

							<!--[if (gt IE 8)|!(IE)]><!-->
							<div class="text-center">
								<a href="/signup_login?sm=2" class="create-using-email btn-block signup-login-form__btn-xl space-2 btn btn-soft btn-block signup-login-form__btn-xl btn-large large icon-btn" id="create_using_email_button"> <i class="icon icon-envelope"></i> ลงทะเบียนโดยใช้อีเมล </a>
							</div>
							<!--<![endif]-->
							<!--[if (lte IE 8) & IE]>
							<div class="text-center">
							<a href="/signup_login?sm=2" class="create-using-email btn-block signup-login-form__btn-xl space-2 btn btn-primary btn-block signup-login-form__btn-xl btn-large large icon-btn" id="create_using_email_button">
							<i class="icon icon-envelope"></i>
							ลงทะเบียนโดยใช้อีเมล
							</a>  </div>
							<![endif]-->

						</div>

						<div class="panel-body js-login-footer signup-login-form__extra-panel-body">
							<div class="clearfix">
								<span class="signup-login-form__switch-copy"> มีบัญชีผู้ใช้ rentcnd อยู่แล้วใช่ไหม </span>
								<a href="/login?" class="modal-link link-to-login-in-signup btn btn-default signup-login-form__btn-soft-border signup-login-form__btn-font-normal signup-login-form__switch-button" data-modal-href="/login_modal?" data-modal-type="login"> เข้าสู่ระบบ </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
		include 'include/footer.php';
		?>
	</body>
</html>
