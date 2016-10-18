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

		<title>รถเช่าของคุณ - Rentcnd</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">

		<link rel="stylesheet" href="css/mycar.css">

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
							<a href="mycar.php" aria-selected="true" class="subnav-item cohosting-ml-tooltip-trigger" id="rooms-item">รถเช่าของคุณ</a>
						</li>
						<li>
							<a href="users.php" aria-selected="false" class="subnav-item" id="user-profile-item">โปรไฟล์</a>
						</li>
						<li>
							<a href="trips.php" aria-selected="false" class="subnav-item" id="account-item">การเดินทางของคุณ</a>
						</li>
						<li>
							<a href="account.php" aria-selected="false" class="subnav-item" id="account-item">บัญชี</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="page-container-responsive space-top-4 space-4">

				<div class="row">
					<div class="col-md-3 space-sm-3">
						<ul class="sidenav-list">
							<li>
								<a href="mycar.php" aria-selected="false" class="sidenav-item">รถเช่าของคุณ</a>
							</li>
							<li>
								<a href="customer_reservations.php" aria-selected="false" class="sidenav-item">การจองของลูกค้า</a>
							</li>
							<li>
								<a href="requirements.php" aria-selected="true" class="sidenav-item">ข้อกำหนดในการจอง</a>
							</li>

							<div class="space-top-4 space-4">
								<a href="new.php" aria-selected="false" class="btn btn-host">เพิ่มรถเช่าใหม่</a>
							</div>

						</ul>
					</div>
					<div class="col-md-9">
						<div class="your-listings-flash-container"></div>

						<form accept-charset="UTF-8" action="/users/update_reservation_requirements/63856890" method="post">
							<div style="margin:0;padding:0;display:inline">
								<input name="utf8" type="hidden" value="✓">
								<input name="authenticity_token" type="hidden" value="V4$.airbnb.com$YP4tThly0ng$c_NfIUJHtitKZ29ST6PxJjkEiWohugZMfz-VmjAITgU=">
							</div>
							<div class="panel">
								<div class="panel-header">
									บัตรประจำตัวที่ยืนยันแล้ว
								</div>
								<div class="panel-body">

									<input id="id" name="id" type="hidden" value="63856890">

									<p>
										ผู้ใช้บริการของคุณจะจำเป็นต้องยืนยันตัวตนของเขาก่อนจองรถเช่ากับคุณ <a href="/help/article/450" target="_blank"> เรียนรู้เพิ่มเติม </a>
									</p>
									<p>
										ก่อนที่คุณจะสามารถขอให้ผู้ใช้บริการยืนยันตัวตนของเขาได้ คุณจะจำเป็นต้องยืนยันตัวตนคุณก่อน!
									</p>
									<p>
										<a href="/verify">ยืนยันตัวตนคุณ</a>เพื่อเริ่มใช้งานข้อกำหนดนี้
									</p>
									<label for="user_preference_require_guest_checkpoint">
										<input name="user_preference[require_guest_checkpoint]" type="hidden" value="0">
										<input disabled="disabled" id="user_preference_require_guest_checkpoint" name="user_preference[require_guest_checkpoint]" type="checkbox" value="1">
										ขอให้ผู้ใช้บริการของคุณทำการยืนยันตัวตน </label>
								</div>
								<div class="panel-body">
									<input class="btn btn-soft-dark" name="commit" type="submit" value="บันทึกข้อกำหนดในการจองรถเช่า">
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
