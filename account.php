<?php
session_start();
?>
<!DOCTYPE html>
<html lang="th">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>บัญชี - Rentcnd</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">

		<link rel="stylesheet" href="css/phonenumber.css">
		<link rel="stylesheet" href="css/editprofile.css">

		<link rel="stylesheet" href="css/adthasid.css">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<?php
		include 'config/js.php';
		?>
	</head>

	<body class="with-new-header ">

		<?php
		include 'include/all_header.php';
		?>
		<main id="site-content" role="main">

			<div class="subnav hide-print">
				<div class="page-container-responsive">
					<ul class="subnav-list">
						<li>
							<a href="stats.php" aria-selected="false" class="subnav-item" id="rooms-item">สถิติ</a>
						</li>
						<li>
							<a href="inbox.php" aria-selected="false" class="subnav-item" id="rooms-item">กล่องข้อความ</a>
						</li>
						<li>
							<a href="mycar.php" aria-selected="false" class="subnav-item cohosting-ml-tooltip-trigger" id="rooms-item">รถเช่าของคุณ</a>
						</li>
						<li>
							<a href="users.php" aria-selected="false" class="subnav-item" id="user-profile-item">โปรไฟล์</a>
						</li>
						<li>
							<a href="trips.php" aria-selected="false" class="subnav-item" id="account-item">การเดินทางของคุณ</a>
						</li>
						<li>
							<a href="account.php" aria-selected="true" class="subnav-item" id="account-item">บัญชี</a>
						</li>
					</ul>
				</div>
			</div>
			
		
				<div id="old_pwd_error" class="alert alert-with-icon alert-error hide">
					<a id="close" href="account.php" class="close alert-close" data-prevent-default="">×</a><i class="icon alert-icon icon-alert-alt"></i>รหัสผ่านเก่า ไม่ถูกต้อง
				</div>
			
				<div id="success" class="alert alert-with-icon alert-success hide">
					<a id="close" href="account.php" class="close alert-close" data-prevent-default="">×</a><i class="icon alert-icon icon-alert-alt"></i>ทำการเปลียนแปลงรหัสผ่านเรียบร้อยแล้ว
				</div>
			

			<div class="page-container-responsive space-top-4 space-4">

				<div class="row">
					<div class="col-md-3">

						<ul class="sidenav-list">	
							<li>
								<a href="account.php" aria-selected="true" class="sidenav-item">ความปลอดภัย</a>
							</li>
							<li>
								<a href="payout_preferences.php" aria-selected="false" class="sidenav-item">วิธีรับชำระเงินที่ต้องการ</a>
							</li>
							
						</ul>

					</div>
					<div class="col-md-9">

						<form id="change-pwd" accept-charset="UTF-8" action="#" method="post">
							<div style="margin:0;padding:0;display:inline">
								<input name="utf8" type="hidden" value="✓">
								<input name="authenticity_token" type="hidden" value="V4$.airbnb.com$YP4tThly0ng$c_NfIUJHtitKZ29ST6PxJjkEiWohugZMfz-VmjAITgU=">
							</div>
							<div id="change_your_password" class="panel space-4">
								<div class="panel-header">
									เปลี่ยนรหัสผ่าน
								</div>
								<div class="panel-body">
									<input id="id" name="id" type="hidden" value="63856890">
									<input id="redirect_on_error" name="redirect_on_error" type="hidden" value="/users/security/63856890">
									<input id="user_password_ok" name="user[password_ok]" type="hidden" value="true">
									<div class="row">
										<div class="col-lg-7">
											<div class="row row-condensed space-2">
												<div class="col-md-5 text-right">
													<label for="old_password"> รหัสผ่านเก่า </label>
												</div>
												<div class="col-md-7">
													<input class="input-block" id="old_password" name="old_password" type="password">
												</div>
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-lg-7">
											<div class="row row-condensed space-2">
												<div class="col-md-5 text-right">
													<label for="user_password"> รหัสผ่านใหม่ </label>
												</div>
												<div class="col-7">
													<input class="input-block" data-hook="new_password" id="new_password" name="user[password]" size="30" type="password">
												</div>
											</div>

											<div class="row row-condensed space-2">
												<div class="col-md-5 text-right">
													<label for="user_password_confirmation"> ยืนยันรหัสผ่าน </label>
												</div>
												<div class="col-md-7">
													<input class="input-block" id="password_confirmation" name="user[password_confirmation]" size="30" type="password">
												</div>
											</div>
										</div>
										<div class="col-lg-5 password-strength" data-hook="password-strength"></div>
									</div>
								</div>
								<div class="panel-footer">
									<button id="btn_change_pwd" type="button" class="btn btn-soft-dark">
										ปรับปรุงรหัสผ่าน
									</button>
								</div>
							</div>
						</form>

					</div>
				</div>

			</div>

		</main>

		<?php
		include 'include/footer.php';
		?>
	</body>
	<script type="text/javascript">
		$("#btn_change_pwd").click(function() {
			var mode = "change_pwd";
			var old_password = $("#old_password").val();
			var new_password = $("#new_password").val();
			var password_confirmation = $("#password_confirmation").val();

			if (old_password.length < 3) {
				alert('กรุณากรอกรหัสผ่านมากกว่า 8 ตัวอักษร');
				$("#old_password").focus();
				return false;
			}else if (new_password.length < 3) {
				alert('กรุณากรอกรหัสผ่านมากกว่า 8 ตัวอักษร');
				$("#new_password").focus();
				return false;
			}else if (password_confirmation != new_password) {
				alert('รหัสผ่านใหม่ไม่ตรงกัน');
				$("#password_confirmation").focus();
				return false;
			} else {
				$.post("controllers/account_controller.php", {
					mode : mode,
					old_password : old_password,
					new_password : new_password
				}, function(data) {
					if (data.error) {
						console.log(data.msg);
						if(data.msg == 'old_pwd_error'){
							$("#old_pwd_error").removeClass('hide');
							$("#success").addClass('hide');
						}
					} else {
						console.log(data.msg);
						
    					document.getElementById('change-pwd').reset();
						$("#success").removeClass('hide');
						$("#old_pwd_error").addClass('hide');
					}

				}, "json");
			}

		});

	</script>

</html>
