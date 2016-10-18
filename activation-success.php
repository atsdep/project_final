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
									<h3><span>คุณพร้อมแล้ว!</span></h3>
									<div class="space-2 activation-image-panel__success-icon">
										<i class="icon icon-ok-fill icon-size-3 icon-lima"></i>
									</div>
									<p class="text-lead space-4 space-top-4">
										<span>กำลังนำคุณไปที่การจองของคุณ</span><span class="animating-ellipsis"></span>
									</p>
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
