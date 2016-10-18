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
					<div class="col-md-3 space-sm-4">
						<div class="sidenav">
							<ul class="sidenav-list">
								<li>
									<a href="users.php" aria-selected="false" class="sidenav-item">แก้ไขข้อมูลส่วนตัว</a>
								</li>
								<li>
									<a href="profile_picture.php" aria-selected="true" class="sidenav-item">รูปโปรไฟล์</a>
								</li>
								<li>
									<a href="edit_verification.php" aria-selected="false" class="sidenav-item">ความไว้ใจและการยืนยันตัวตน</a>
								</li>
								<li>
									<a href="reviews.php" aria-selected="false" class="sidenav-item">ความคิดเห็น</a>
								</li>
								<li></li>
							</ul>
						</div>

						<a href="profile.php" class="btn btn-block space-top-4">ดูโปรไฟล์</a>
					</div>
					<div class="col-md-9">

						<div id="dashboard-content">

							<div class="panel space-4">
								<div class="panel-header">
									รูปโปรไฟล์
								</div>
								<div class="panel-body photos-section">
									<div class="row">
										<div class="col-lg-4 text-center">
											<div class="profile_pic_container picture-main space-sm-2 space-md-2 loading" data-picture-id="219735421">
												<div class="media-photo profile-pic-background">
													<img alt="Adthasid" height="225" src="https://a2.muscache.com/im/pictures/79129b09-9049-4534-9233-261641df0ac4.jpg?aki_policy=profile_x_medium" title="Adthasid" width="225">
												</div>
												<div class="media-photo media-round">
													<img alt="Adthasid" height="225" src="https://a2.muscache.com/defaults/user_pic-225x225.png?v=2" title="Adthasid" width="225">
												</div>
												<button class="picture-tile-delete overlay-btn" data-behavior="tooltip" aria-label="ลบ">
													<i class="icon icon-trash"></i>
												</button>
											</div>
										</div>
										<div class="col-lg-8">
											<ul class="list-layout picture-tiles clearfix ui-sortable">
												<li class="picture-tile pull-left space-2" data-picture-id="219735421">
													<img src="https://a2.muscache.com/im/pictures/79129b09-9049-4534-9233-261641df0ac4.jpg?aki_policy=profile_medium" width="50" height="50" alt="">
													<button class="picture-tile-delete overlay-btn" data-behavior="tooltip" aria-label="ลบ">
														<i class="icon icon-trash"></i>
													</button>
												</li>
											</ul>

											<p>
												รูปหน้าตรงที่ชัดเจนเป็นวิธีสำคัญที่เจ้าของรถเช่าและผู้ใช้บริการจะได้เรียนรู้เกี่ยวกับกันและกัน  กรุณาอัพโหลดรูปภาพที่แสดงหน้าคุณอย่างชัดเจน
											</p>

											<div class="row row-condensed">
												<div class="col-md-6">
													<span class="btn btn-block btn-large file-input-container"> อัพโหลดไฟล์รูปภาพ
														<form accept-charset="UTF-8" action="https://th.airbnb.com/users/ajax_image_upload" enctype="multipart/form-data" id="ajax_upload_form" method="post" name="ajax_upload_form" target="upload_frame">
															<div style="margin:0;padding:0;display:inline">
																<input name="utf8" type="hidden" value="✓">
																<input name="authenticity_token" type="hidden" value="V4$.airbnb.com$KhLRFGaSjs0$JwNHIet7jJgoQOOqducwgF4iaG5wXWrTxMv-LUabMwM=">
															</div>
															<input id="user_id" name="user_id" type="hidden" value="63856890">
															<input id="callback" name="callback" type="hidden" value="EditProfile">
															<input id="user_profile_pic" name="user[profile_pic]" type="file">
														</form> <iframe id="upload_frame" name="upload_frame" style="display:none;"></iframe> </span>
												</div>
											</div>
										</div>
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
