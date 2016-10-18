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
	} else {
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

		<title>ยืนยันอีเมลล์ กับ Rentcnd</title>
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
			<input name="$verify_profile_photo" id="$verify_profile_photo" type="hidden" value="<?php echo $verify_profile_photo ?>">

			<div class="page-container-full bg-white" data-react-checksum="955207149">
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
											<i class="dot dot-success"></i>
										</div>
										<div class="activation-step-marker">
											<i class="dot dot-light-gray"></i>
										</div>

									</div>
								</div>
							</div>
							<div class="activation-step-panel__wrapper">
								<div class="activation-step-panel__body">
									<div class="email-verification-form">
										<h3 class="space-1"><span>เช็คอีเมล์</span></h3>
										<div class="text-lead space-4">
											<div>
												<span>แตะลิงค์ในอีเมล์ที่เราส่งให้คุณ</span>
											</div>
											<div>
												<span>การยืนยันอีเมล์แอดเดรสจะช่วยให้เราส่งข้อมูลการเดินทางให้คุณได้</span>
											</div>
										</div>
										<div class="space-4 space-top-4">
											<div class="activation-icon-container">
												<div class="activation-icon-wrapper">
													<i class="icon icon-envelope icon-size-3 icon-gray"></i>
												</div>
											</div>
										</div>
										<div class="space-2">
											<label class="screen-reader-only" for="email_confirmation_input_0"><span>อีเมล์แอดเดรส</span></label>
											<input id="email_confirmation_input_0" type="email" class="text-center" value="adthasid_em@hotmail.com" disabled="">
										</div>
										<div>
											<button type="button" class="btn btn-primary btn-block space-2">
												<span>ส่งอีเมลใหม่</span>
											</button>
											<button class="btn-link" type="button">
												<span>เปลี่ยนอีเมล์แอดเดรส</span>
											</button>
										</div>
									</div>
									<div class="email-verification-form" tabindex="-1">
										<h3 class="space-1"><span>ยืนยันอีเมล์</span></h3>
										<p class="text-lead space-4">
											<span>เราจะส่งอีเมล์ไปยังที่อยู่ด้านล่าง แตะลิงค์ในอีเมลเพื่อยืนยันว่าเป็นคุณ</span>
										</p>
										<div class="space-4 space-top-4">
											<div class="activation-icon-container">
												<div class="activation-icon-wrapper">
													<i class="icon icon-envelope icon-size-3 icon-gray"></i>
												</div>
											</div>
										</div>
										<div class="space-2">
											<label class="screen-reader-only" for="email_confirmation_input_0"><span>อีเมล์แอดเดรส</span></label>
											<input id="email_confirmation_input_0" type="email" class="text-center" value="adthasid_em@hotmail.com" placeholder="อีเมล์แอดเดรส">
										</div>
										<div class="verification-flow__call-to-action-container">
											<div class="verification-flow__call-to-action">
												<button type="button" class="btn btn-primary btn-block">
													<span>ส่งอีเมล์ยืนยัน</span>
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
