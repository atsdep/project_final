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

			<div class="page-container-responsive space-top-4 space-4">

				<div class="row">
					<div class="col-md-3">

						<ul class="sidenav-list">	
							<li>
								<a href="account.php" aria-selected="true" class="sidenav-item">ความปลอดภัย</a>
							</li>
							
						</ul>

					</div>
					<div class="col-md-9">

						<form accept-charset="UTF-8" action="https://th.airbnb.com/change_password" method="post">
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
													<input class="input-block" id="user_password_confirmation" name="user[password_confirmation]" size="30" type="password">
												</div>
											</div>
										</div>
										<div class="col-lg-5 password-strength" data-hook="password-strength"></div>
									</div>
								</div>
								<div class="panel-footer">
									<button type="submit" class="btn btn-primary">
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
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

</html>
