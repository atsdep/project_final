<!DOCTYPE html>
<html lang="th">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>index</title>
		<meta name="description" content="">
		<meta name="author" content="adtha">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body>
		<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Logo</a>
				</div>

				<div class="collapse navbar-collapse" id="header">
					<ul class="nav navbar-nav navbar-right">
						<li class="">
							<a href="index.php" class="visible-xs">หน้าแรก</a>
						</li>
						<li class="">
							<a href="start.php" class="visible-xs">สร้างรายได้จากการขับรถ</a>
							<a href="start.php" class="btn hidden-xs btn-primary btn-new">สร้างรายได้จากการขับรถ</a>
						</li>
						<li class="">
							<a href="#">ความช่วยเหลือ</a>
						</li>

						<?php
						if(!isset($_SESSION['login'])){

						?>

						<li class="">
							<a href="#" data-toggle="modal" data-target="#modal-register">ลงทะเบียน</a>
						</li>

						<li class="">
							<a href="#" data-toggle="modal" data-target="#modal-login">เข้าสู่่ระบบ </a>
						</li>

						<?php
						} else {
						?>
						<li class="">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><?php echo $result_mem['mem_name'] ?></a>
							<ul class="dropdown-menu">
								<li>
									<a href="profile.php">แก้ไขข้อมูลส่วนตัว</a>
								</li>
								<li>
									<a href="my_reservations.php">ข้อมูลการจอง</a>
								</li>
								<li>
									<a href="process/logout.php">ออกจากระบบ</a>
								</li>
							</ul>
						</li>
						<?php
						}
						?>

						<!-- <li class="">
						<a href="#" class=".visible-xs-*">ค้นหา</a>
						</li> -->
					</ul>
				</div>

			</div>
			<!-- container-fluid -->
		</nav>

		<div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">ลงทะเบียน</h4>
					</div>
					<div class="modal-body">
						<button type="button" data-toggle="modal" data-target="#register-email" data-dismiss="modal" aria-label="Close">
							ลงทะเบียนโดยใช้อีเมล
						</button>
						<hr>
						หรือ
						<hr>
						<button>
							ลงทะเบียนโดยใช้ Facebook
						</button>
					</div>
					<div class="modal-footer">
						<div class="row">
							มีบัญชีผู้ใช้ Rentcnd อยู่แล้วใช่ไหม
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-login" data-dismiss="modal" aria-label="Close">
								เข้าสู่ระบบ
							</button>
						</div>

					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">เข้าสู่ระบบ</h4>
					</div>
					<div class="modal-body">
						<button type="button" data-toggle="modal" data-target="#register-email" data-dismiss="modal" aria-label="Close">
							เข้าสู่ระบบด้วย Facebook
						</button>
						<hr>
						หรือ
						<hr>
						<form>
							<div class="row">
								<input type="text" id="LoginEmail" name="LoginEmail" placeholder="อีเมลล์แอดเดรส">
							</div>
							<div class="row">
								<input type="password" id="LoginPassword" name="LoginPassword" placeholder="รหัสผ่าน">
							</div>
							<div class="row">
								<button id="btnLogin" type="button">
									เข้าสู่ระบบ
								</button>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<div class="row">
							ไม่มีบัญชีใช่ไหม?
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-register" data-dismiss="modal" aria-label="Close">
								ลงทะเบียน
							</button>
						</div>

					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<div class="modal fade" id="register-email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<h4 class="modal-title">ลงทะเบียน</h4>
					</div>
					<div class="modal-body">
						ลงทะเบียน <a href="#">Facebook</a>
						<hr>
						<form>
							<div class="row">
								<input type="text" id="firstname"  name="firstname" placeholder="ชื่อแรก">
								<span class="error" id="errorName">กรุณาใส่ชื่อของท่าน</span>
							</div>
							<div class="row">
								<input type="text" id="surname" name="surname" placeholder="ชื่อสกุล">
							</div>
							<div class="row">
								<input type="text" id="email" name="email" placeholder="อีเมลล์แอดเดรส">
							</div>
							<div class="row">
								<input type="password" id="password" name="password" placeholder="รหัสผ่าน">
							</div>
							<div class="row">
								<input type="password" id="con_pwd" name="con_pwd" placeholder="ยืนยันรหัสผ่าน">
							</div>
							<div class="row">
								<button id="btnRegister" type="button">
									ลงทะเบียน
								</button>
							</div>
						</form>

					</div>
					<div class="modal-footer">
						<div class="row">
							มีบัญชีผู้ใช้ Rentcnd อยู่แล้วใช่ไหม
							<button type="button" class="btn btn-primary">
								เข้าสู่ระบบ
							</button>
						</div>

					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

		<header class="intro-header" style="background-image: url('img/header-bg-1.jpg')">
			<div class="	">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
						<div class="site-heading">
							<h1 class="h1 text-jumbo">รถเช่าพร้อมคนขับ</h1>
							<h4 class="h4 text-contrast space-4">ให้คุณเลือกเช่ารถพร้อมคนขับรถ ทั่วประเทศ 77 จังหวัด </h4>
							<a href="#" class="btn hidden-xs btn-contrast btn-lg btn-semi-transparent">วิธีใช้งาน Rentcnd</a>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="panel-dark host-banner host-banner--fade-in space-top-8 no-margin">
			<div class="page-container-responsive">
				<div class="panel host-banner--panel-no-border">
					<div class="row">
						<div class="col-sm-8 hidden-xs">
							<div class="host-banner__media-container">
								<a href="#" class="link-reset"> <img class="img-auto" src="img/banner1.jpg"> </a>
							</div>
						</div>
						<div class="col-md-4 host-banner__body">
							<div class="media-cover media-cover-dark background-cover host-banner__welcome-guest visible-xs"></div>
							<div class="va-container va-container-v va-container-h">
								<div class="va-middle host-banner__content--cta-right">
									<div class="host-banner__title space-4">
										<strong> การให้เช่ารถพร้อมบริการขับ </strong>
									</div>
									<div class="host-banner__subtitle space-4">
										สร้างรายได้จากการขับรถของตัวเอง
									</div>
									<a href="start.php" class="link-reset host-banner__btn"> <strong class="btn btn-host btn-large btn-block host-banner__cta"> ลงประกาศ</strong> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-dark no-border-top no-border-bottom no-margin">
			<div id="discovery-container">
				<div class="discovery-section page-container-responsive page-container-no-padding">
					<div class="section-intro text-center row-space-6 ">
						<h2 class="row-space-1"><strong>เลือกประเภทรถยนต์</strong></h2>
						<p class="text-lead">
							ค้นหารถยนต์ตามที่คุณต้องการใช้บริการ
						</p>
					</div>
					<div class="discovery-tiles">
						<div class="homepage-mudule">
							<div class="row carousel-item">
								<div class="col-lg-3 rm-padding-sm col-md-12">
									<div class="discovery-card rm-padding-sm row-space-4" style="background-image: url('img/car.jpg')">
										<a href="#" class="link-reset">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> รถเก๋ง </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								<div class="col-lg-3 rm-padding-sm col-md-6">
									<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " style="background-image: url('img/van.jpg')">
										<a href="#" class="link-reset" data-hook="discovery-card" data-id="Kuala Lumpur">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> รถตู้ </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								<div class="col-lg-3 rm-padding-sm col-md-6">
									<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " style="background-image: url('img/suv.jpg')">
										<a href="#" class="link-reset" data-hook="discovery-card" data-id="Kuala Lumpur">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h20 text-center">
													<strong> รถอเนกประสงค์ </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								<div class="col-lg-3 rm-padding-sm col-md-6">
									<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " style="background-image: url('img/4.jpg')">
										<a href="#" class="link-reset" data-hook="discovery-card" data-id="Kuala Lumpur">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> รถกระบะ </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-lg-4 col-lg-offset-4 row-space-top-4">
									<a href="announce.php?result=all" class="btn btn-large btn-block btn-findall" data-hook="discovery-see-all-button"> ดูประกาศทั้งหมด </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="footer" class="container-brand-dark row-space-top-6">
			<footer class="page-container-responsive">
				<div class="row row-condensed">
					<div class="col-sm-12 space-4 space-top-4 show-sm">
						<ul class="list-layout list-inline text-center h5">
							<li>
								<a href="/about/about-us" class="link-contrast">เกี่ยวกับเรา</a>
							</li>
							<li>
								<a href="/help?from=footer" class="link-contrast">ความช่วยเหลือ</a>
							</li>
							<li>
								<a href="/terms" class="link-contrast">เงื่อนไขและความเป็นส่วนตัว</a>
							</li>
						</ul>
					</div>

					<!-- <div class="col-lg-12 col-md-12 col-md-offset-1 hide-sm">
					<h2 class="h5">บริษัท</h2>

					<ul class="list-layout">
					<li>
					<a href="/about/about-us" class="link-contrast">เกี่ยวกับเรา</a>
					</li>
					<li>
					<a href="/help?from=footer" class="link-contrast">ความช่วยเหลือ</a>
					</li>
					<li>
					<a href="/terms" class="link-contrast">เงื่อนไขและความเป็นส่วนตัว</a>
					</li>
					</ul>
					</div> -->

				</div>

				<!-- <hr class="footer-divider space-top-8 space-4 hide-sm"> -->
				<div class="row row-condensed">
					<div class="text-center">
						<h2 class="h5 space-4 hide-sm">ติดตามเราได้ที่</h2>
						<ul class="list-layout list-inline">
							<li>
								<a href="https://www.facebook.com/adthasid.suksomthawisap" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">Facebook</span> <i class="icon footer-icon fa fa-facebook"></i> </a>
							</li>

							<li>
								<a href="https://plus.google.com/+airbnb" class="link-contrast footer-icon-container"  rel="publisher" target="_blank"> <span class="screen-reader-only">Google+</span> <i class="icon footer-icon fa fa-google-plus"></i> </a>
							</li>

							<li>
								<a href="https://twitter.com/airbnb" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">Twitter</span> <i aria-hidden="true" class="icon footer-icon fa fa-twitter"></i> </a>
							</li>

							<li>
								<a href="https://www.linkedin.com/company/airbnb" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">LinkedIn</span> <i class="icon footer-icon fa fa-linkedin"></i> </a>
							</li>

							<li>
								<a href="https://www.pinterest.com/airbnb/" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">Pinterest</span> <i class="icon footer-icon fa fa-pinterest"></i> </a>
							</li>
							<li>
								<a href="https://www.youtube.com/user/Airbnb" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">YouTube</span> <i class="icon footer-icon fa fa-youtube-play"></i> </a>
							</li>
							<li>
								<a href="https://instagram.com/airbnb" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">Instagram</span> <i class="icon footer-icon fa fa-instagram"></i> </a>
							</li>
						</ul>
						<div class="space-top-2 text-muted">
							Copyright © 2016 Adthasid Suksomthawisap.  All right reserved.
						</div>
					</div>
			</footer>
		</div>

	</body>
</html>
