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

		<link rel="stylesheet" href="css/alterations_study.css">
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
			<div data-hypernova-key="alterationsbundlejs">
				<div>
					<div class="page-container-responsive">

						<div class="row space-top-sm-2 space-top-8 change-or-cancel">
							
							<div class="col-sm-12 space-top-sm-4 space-top-md-0 col-md-7">
								<div class="space-md-4">
									<h2><small>คุณต้องการทำอะไร</small></h2>
								</div><a href="/reservation/change?code=X5DH3T&amp;visited=1" class="link-reset">
								<div class="panel space-2">
									<div class="panel-body panel-body-change-or-cancel row">
										<div class="col-sm-10 no-left-padding-sm col-lg-push-1">
											<h2 class="space-1"><small>เปลี่ยนการจองที่พัก</small></h2>
											<div class="text-muted hide-sm">
												เปลี่ยนวันที่เดินทาง ที่พักหรือจำนวนผู้เข้าพัก
											</div>
										</div>
										<div class="centered-padding icon-div col-sm-2 space-top-md-3 space-top-lg-2 col-lg-pull-10 col-lg-2">
											<i class="icon icon-rausch icon-size-2 icon-entire-place"></i>
										</div>
									</div>
								</div></a><a href="#" data-prevent-default="true" class="link-reset">
								<div class="panel space-2">
									<div class="panel-body panel-body-change-or-cancel row">
										<div class="col-sm-10 no-left-padding-sm col-lg-push-1">
											<h2 class="space-1"><small>ยกเลิกการจองที่พัก</small></h2>
											<div class="text-muted hide-sm">
												การจองที่พักนี้มีนโยบายยกเลิกการจองที่พักยืดหยุ่น
											</div>
										</div>
										<div class="centered-padding col-sm-2 icon-div space-top-md-3 space-top-lg-2 col-lg-pull-10 col-lg-2">
											<i class="icon icon-rausch icon-size-2 icon-ban-circle"></i>
										</div>
									</div>
								</div></a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>

		<?php
		include 'include/footer.php';
		?>
	</body>
</html>
