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

			<div class="page-container-responsive page-container-auth space-top-4 space-8">
				<div class="row">
					<div class="col-md-6 col-lg-4 col-center">
						<div class="panel">
							<div class="alert alert-with-icon alert-error alert-header panel-header hidden-element forgot-password-notice notice">
								<i class="icon alert-icon icon-alert-alt"></i>

							</div>

							<h3 class="panel-header panel-header-gray forgot_password_container forgot-password-panel-js"> ตั้งค่ารหัสผ่านใหม่ </h3>
							<div class="panel-padding panel-body forgot-password-panel-js">
								<form accept-charset="UTF-8" action="/forgot_password" class="forgot-password-email " method="post">
									<div style="margin:0;padding:0;display:inline">
										<input name="utf8" type="hidden" value="✓">
										<input name="authenticity_token" type="hidden" value="V4$.airbnb.com$mg_-JPALL6U$iviEg1E9GjTt0HmJJSooGHBRw9Txd1uLFE0conH5rK8=">
									</div>
									<p>
										ป้อนอีเมลแอดเดรสที่เชื่อมโยงกับบัญชีของคุณ จากนั้นเราจะส่งอีเมลไปให้คุณตั้งรหัสผ่านใหม่
									</p>
									<div class="textInput text-input-container control-group">
										<input class="decorative-input" id="email" name="email" placeholder="อีเมล์" type="email" value="adthasid@hotmail.com">
									</div>
									<hr>
									<button type="submit" class="btn btn-primary">
										ส่งลิงค์ตั้งรหัสผ่านใหม่
									</button>
								</form>
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
