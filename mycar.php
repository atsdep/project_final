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

		<title>สร้างรายได้จากการขับรถของตัวเอง กับ Rentcnd</title>
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
								<a href="mycar.php" aria-selected="true" class="sidenav-item">รถเช่าของคุณ</a>
							</li>
							<li>
								<a href="my_reservations.php" aria-selected="false" class="sidenav-item">การจองของคุณ</a>
							</li>
							<li>
								<a href="customer_reservations.php" aria-selected="false" class="sidenav-item">การจองของลูกค้า</a>
							</li>
							<li>
								<a href="requirements.php" aria-selected="false" class="sidenav-item">ข้อกำหนดในการจอง</a>
							</li>

							<div class="space-top-4 space-4">
								<a href="new.php" aria-selected="false" class="btn btn-host">เพิ่มรถเช่าใหม่</a>
							</div>

						</ul>
					</div>
					<div class="col-md-9">
						<div class="your-listings-flash-container"></div>
						<div id="listings-container">
							<div >
								<noscript ></noscript>
								<div class="suspension-container" >
									<div class="panel space-4" >
										<div class="panel-header active-panel-header" >
											<div class="row" >
												<div class="col-sm-6 active-panel-padding" >
													กำลังดำเนินการ
												</div><div id="ib-master-switch-container" class="col-sm-6" ></div>
											</div>
										</div>
										<ul class="list-unstyled list-layout" >
											<li class="listing panel-body" data-hosting-id="15425938" >
												<div class="row row-table" >
													<i class="icon icon-size-1 icon-remove icon-remove-listing show-sm" ></i>
													<div class="col-middle space-sm-2 space-top-sm-4 col-md-5 listing-photo" >
														<a href="/manage-listing/15425938/photos" >
														<div class="media-photo media-photo-block-lg" >
															<div class="media-cover text-center" ><img class="img-responsive-height" src="https://a1.muscache.com/airbnb/static/page3/v3/room_default_no_photos-f209d3d70c1bed81fb0822b68e913045.png" >
															</div>
														</div></a>
													</div>
													<div class="col-sm-10 col-lg-7 col-middle" >
														<div class="row row-table" >
															<div class="col-lg-10" >
																<div class="listing-progress" >
																	<div class="progress progress-bar__lean" role="progressbar" aria-valuenow="4" aria-valuemin="0" aria-valuemax="7" >
																		<div class="progress-bar progress-bar-success progress-bar__babu" style="width:57%;" ></div>
																	</div>
																	<div class="text-babu space-top-1" >
																		<span >คุณลงประกาศรถเช่าเสร็จ 57%</span>
																	</div><div class="space-top-2" ></div>
																</div>
															</div>
														</div><span class="h4" ><a href="/manage-listing/15425938" class="text-normal" ><span ><span >ห้องส่วนตัว ใน Tambon Kamphaeng Saen</span></span></a></span>
														<div class="text-muted text-grey space-top-1 last-modified-date" >
															<span >ปรับปรุงล่าสุดวันที่ 9 ตุลาคม 2016</span>
														</div>
														<div class="space-top-4" >
															<a class="btn btn__first-btn btn-primary" href="/manage-listing/15425938" ><span >ลงประกาศรถเช่าให้เสร็จ</span></a><a class="btn btn__second-btn" href="/rooms/15425938" ><span >ดูตัวอย่าง</span></a>
														</div><noscript ></noscript>
													</div>
												</div>
											</li>
											<li class="listing panel-body" data-hosting-id="15417960" >
												<div class="row row-table" >
													<i class="icon icon-size-1 icon-remove icon-remove-listing show-sm" ></i>
													<div class="col-middle space-sm-2 space-top-sm-4 col-md-5 listing-photo" >
														<a href="/manage-listing/15417960" >
														<div class="media-photo media-photo-block-lg" >
															<div class="media-cover text-center" ><img class="img-responsive-height" src="https://a2.muscache.com/im/pictures/2cb713a5-2c80-423b-82e4-f20938845b97.jpg?aki_policy=small" >
															</div>
														</div></a>
													</div>
													<div class="col-sm-10 col-lg-7 col-middle" >
														<div class="row row-table" >
															<div class="col-lg-10" >
																<div class="listing-progress" >
																	<div class="text-babu space-top-1" >
																		<span >พร้อมที่จะประกาศแล้ว!</span>
																	</div><div class="space-top-2" ></div>
																</div>
															</div>
														</div><span class="h4" ><a href="/manage-listing/15417960" class="text-normal" ><span ><span >test system</span></span></a></span>
														<div class="text-muted text-grey space-top-1 last-modified-date" >
															<span >ปรับปรุงล่าสุดวันที่ 9 ตุลาคม 2016</span>
														</div>
														<div class="space-top-4" >
															<a class="btn btn__first-btn btn-primary" href="/manage-listing/15417960?listnow" ><span >ลงประกาศรถเช่า</span></a><a class="btn btn__second-btn" href="/rooms/15417960" ><span >ดูตัวอย่าง</span></a>
														</div><noscript ></noscript>
													</div><i class="icon icon-size-1 icon-remove icon-remove-listing hide-sm" ></i>
												</div>
											</li>
											<li class="listing panel-body" data-hosting-id="15415428" >
												<div class="row row-table" >
													<i class="icon icon-size-1 icon-remove icon-remove-listing show-sm" ></i>
													<div class="col-middle space-sm-2 space-top-sm-4 col-md-5 listing-photo" >
														<a href="/manage-listing/15415428" >
														<div class="media-photo media-photo-block-lg" >
															<div class="media-cover text-center" ><img class="img-responsive-height" src="https://a2.muscache.com/im/pictures/7c8222b0-ba61-40a0-9932-c7ae96a757ba.jpg?aki_policy=small" >
															</div>
														</div></a>
													</div>
													<div class="col-sm-10 col-lg-7 col-middle" >
														<div class="row row-table" >
															<div class="col-lg-10" >
																<div class="listing-progress" >
																	<div class="text-babu space-top-1" >
																		<span >พร้อมที่จะประกาศแล้ว!</span>
																	</div><div class="space-top-2" ></div>
																</div>
															</div>
														</div><span class="h4" ><a href="/manage-listing/15415428" class="text-normal" ><span ><span >ขอเทส</span></span></a></span>
														<div class="text-muted text-grey space-top-1 last-modified-date" >
															<span >ปรับปรุงล่าสุดวันที่ 8 ตุลาคม 2016</span>
														</div>
														<div class="space-top-4" >
															<a class="btn btn__first-btn btn-primary" href="/manage-listing/15415428?listnow" ><span >ลงประกาศรถเช่า</span></a><a class="btn btn__second-btn" href="/rooms/15415428" ><span >ดูตัวอย่าง</span></a>
														</div><noscript ></noscript>
													</div>
												</div>
											</li>
										</ul>
									</div><noscript ></noscript><noscript ></noscript>
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
