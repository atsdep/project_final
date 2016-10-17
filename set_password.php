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

			<div class=" page-container-responsive space-top-8 space-8">
				<div class="row">
					<div class="col-4 col-center">
						<div class="panel">
							<div class="panel-header">
								ตั้งค่ารหัสผ่านของคุณใหม่
							</div>
							<div class="panel-body">
								<form accept-charset="UTF-8" action="https://th.airbnb.com/users/set_password" id="password-form" method="post">
									<div style="margin:0;padding:0;display:inline">
										<input name="utf8" type="hidden" value="✓">
										<input name="authenticity_token" type="hidden" value="V4$.airbnb.com$xD8BI1YkQfU$hRcvo97A4Sv3xsma1Y31ZWi4fi9SMR9qwfp1BBOaLcA=">
									</div>

									<input id="id" name="id" type="hidden" value="99120320">
									<input id="sig" name="sig" type="hidden">
									<input id="redirect" name="redirect" type="hidden">

									<div class="space-1">
										<input data-hook="new_password" id="new_password" name="user[password]" placeholder="รหัสผ่านใหม่" size="30" type="password">
										<div data-hook="password-strength" class="password-strength">
											คำแนะนำ: ใช้อักขระอย่างน้อย 8 ตัว อย่าใช้รหัสผ่านซ้ำจากเว็บไซต์อื่นหรือรวมคำที่ชัดเจนในรหัสผ่านเช่นชื่อหรืออีเมลของคุณ
										</div>
									</div>
									<div class="space-3">
										<input id="user_password_confirmation" name="user[password_confirmation]" placeholder="ยืนยันรหัสผ่าน" size="30" type="password">
									</div>

									<input class="btn btn-primary btn-block btn-large" name="commit" type="submit" value="บันทึกและดำเนินการต่อ">

									<div class="space-top-2">
										<small> การคลิก "บันทึกและดำเนินการต่อ" แสดงว่าคุณยืนยันว่าคุณยอมรับ<a href="https://th.airbnb.com/terms#terms-tab-pane" target="_blank">เงื่อนไขการให้บริการ</a> และ <a href="https://th.airbnb.com/terms#privacy-tab-pane" target="_blank">นโยบายความเป็นส่วนตัว</a> แล้ว </small>
									</div>
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
