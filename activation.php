<?php
session_start();
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

	</head>

	<body class="with-new-header">

		<?php
		include 'include/all_header.php';
		?>

		<main id="site-content" role="main">

			<div class="page-container-full bg-white" data-react-checksum="955207149">
				<div class="account-activation-standalone space-4 space-top-4">
					<div class="activation-step-panel" tabindex="-1">
						<noscript></noscript>
						<div class="activation-step-panel__body">
							<h3><span>เตรียมพร้อมจองที่พักกับ ISanook</span></h3>
							<div class="space-6 space-top-6">
								<div class="profile-pic-duo">
									<div class="profile-pic-duo__user-left"><img class="profile-pic-duo__image media-photo media-round" src="https://a2.muscache.com/im/pictures/83041d5c-6f34-4d8b-aede-73f5d4d4c703.jpg?aki_policy=profile_x_medium" alt="">
									</div>
									<div class="profile-pic-duo__logo highlighted-icon">
										<div class="highlighted-icon__background bg-rausch media-round"></div><i class="highlighted-icon__icon icon icon-airbnb-alt icon-size-2 icon-white"></i>
									</div>
									<div class="profile-pic-duo__user-right"><img class="profile-pic-duo__image media-photo media-round" src="https://a0.muscache.com/im/users/8663142/profile_pic/1390547303/original.jpg?aki_policy=profile_x_medium" alt="ISanook">
									</div>
								</div>
							</div>
							<p class="text-lead space-2 space-top-4">
								<span>เราขอให้ทุกคนใน Airbnb ยืนยันบางสิ่งก่อนเดินทางหรือให้เช่าที่พัก</span>
							</p>
							<p class="text-lead space-4">
								<span>คุณต้องทำสิ่งนี้ครั้งเดียวเท่านั้น</span>
							</p>
							<div class="activation-footer__container">
								<div class="activation-footer">
									<button type="button" class="btn btn-primary btn-large btn-block">
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
