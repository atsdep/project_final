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

		<title>โปรไฟล์ - Rentcnd</title>
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
							<a href="users.php" aria-selected="true" class="subnav-item" id="user-profile-item">โปรไฟล์</a>
						</li>
						<li>
							<a href="account.php" aria-selected="false" class="subnav-item" id="account-item">บัญชี</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="page-container-responsive space-top-4 space-4">

				<div class="row">
					<div class="col-md-3 space-sm-4">
						<div class="sidenav">
							<ul class="sidenav-list">
								<li>
									<a href="users.php" aria-selected="false" class="sidenav-item">แก้ไขข้อมูลส่วนตัว</a>
								</li>
								<li>
									<a href="profile_picture.php" aria-selected="false" class="sidenav-item">รูปโปรไฟล์</a>
								</li>
								<li>
									<a href="edit_verification.php" aria-selected="false" class="sidenav-item">ความไว้ใจและการยืนยันตัวตน</a>
								</li>
								<li>
									<a href="reviews.php" aria-selected="true" class="sidenav-item">ความคิดเห็น</a>
								</li>
								<li></li>
							</ul>
						</div>

						<a href="profile.php" class="btn btn-block space-top-4">ดูโปรไฟล์</a>
					</div>
					<div class="col-md-9">

						<ul class="tabs" role="tablist">
							<li>
								<a class="tab-item" href="#" role="tab" aria-controls="received" aria-selected="true"> ความคิดเห็นเกี่ยวกับคุณ </a>
							</li>
							<li>
								<a href="#" class="tab-item" role="tab" aria-controls="sent" aria-selected="false"> ความคิดเห็นที่คุณเขียน </a>
							</li>
						</ul>

						<div id="dashboard-content">

							<div id="reviews" class="space-top-4">
								<div class="tab-panel" role="tabpanel" aria-hidden="false" id="received">
									<div class="panel">
										<div class="panel-header">
											ความคิดเห็นในอดีต
										</div>
										<div class="panel-body">
											<p class="text-lead">
												การแสดงความคิดเห็นบน Rentcnd จะทำได้หลังจากเช็คเอาท์แล้ว ความคิดเห็นที่คุณได้รับจะปรากฏที่นี่และบนโปรไฟล์สาธารณะของคุณ
											</p>

											<ul class="list-layout reviews-list space-top-4">
												<li class="reviews-list-item">
													ยังไม่มีใครแสดงความคิดเห็นเกี่ยวกับคุณ
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="tab-panel" role="tabpanel" aria-hidden="true" id="sent">
									<div class="panel">
										<div class="panel-header">
											ความคิดเห็นที่จะเขียน
										</div>
										<div class="panel-body">

											<ul class="list-layout reviews-list">
												<li class="reviews-list-item">
													ไม่มีใครให้แสดงความคิดเห็นในตอนนี้ ดูเหมือนว่าจะถึงเวลาเดินทางอีกแล้ว!
												</li>
											</ul>
										</div>
									</div>

									<div class="panel space-top-4">
										<div class="panel-header">
											ความคิดเห็นที่คุณเขียนในอดีต
										</div>
										<div class="panel-body"></div>
									</div>

								</div>
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
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

</html>
