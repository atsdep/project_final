<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
require ("controllers/select_member.php");
?>
<!DOCTYPE html>
<html lang="th">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>รถเช่าพร้อมคนขับ กับ Rentcnd</title>
		<meta name="description" content="">
		<meta name="author" content="adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->

		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">

		<link rel="stylesheet" href="css/main_study.css">

		<!-- <link rel="stylesheet" href="css/studymain.css"> -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/adthasid.css">

		<!-- <link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css"> -->
		<script src="dist/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	</head>

	<body class="with-new-header home_view v2 p1 fixed-header">
		<main id="site-content" role="main">
			<?php
			include 'include/all_header.php';
			?>
		
			<div class="hero shift-with-hiw js-hero">
				<div class="hero__background" data-native-currency="THB" aria-hidden="true">
					<div class="air-slideshow hero-slideshow">
						<ul class="air-slideshow__list list-unstyled js-hero-slideshow">
							<li class="air-slide air-slide--active">
								<img alt="Rentcnd P1" src="img/header-bg-1.jpg" width="100%">
							</li>
						</ul>
					</div>
				</div>

				<div class="hero__content page-container page-container-full text-center">
					<div class="va-container va-container-v va-container-h">
						<div class="va-middle">
							<div class="">
								<a href="#" class="btn hide-md hide-lg btn-contrast btn-large btn-semi-transparent"> วิธีใช้งาน Rentcnd </a>

								<h2 class="text-branding text-jumbo text-contrast hero__heading"> รถเช่าพร้อมคนขับ </h2>
								<div class="h4 text-contrast space-4">
									ให้คุณเลือกเช่ารถพร้อมคนขับรถ ทั่วประเทศ 77 จังหวัด
								</div>

								<button class="btn btn-large js-learn-about-airbnb hide">
									เรียนรู้เกี่ยวกับ Rentcnd
								</button>
							</div>

							<!-- <div class="show-sm sm-search">
								<div class="input-addon" id="sm-search-field" style="display: table; table-layout: fixed; width: 100%;">
									<span class="input-stem input-large fake-search-field"> ไปที่ไหน </span>
									<i class="input-suffix btn btn-primary icon icon-full icon-search"></i>
								</div>

							</div> -->

							<a href="#" class="btn hide-sm btn-contrast btn-large btn-semi-transparent"> วิธีใช้งาน Rentcnd </a>

						</div>
					</div>
					<!-- <div id="search-bar-container" class="hero__content-footer hide-sm">
						<div class="page-container-responsive search-bar-responsive-container">

							<div id="searchbar">
								<div class="SearchForm row" role="search">
									<form action="/s" method="get">
										<div class="SearchForm__inputs-wrapper col-md-10">
											<div class="row">
												<div class="SearchForm__location col-md-4 col-lg-5">
													<div>
														<div>
															<label class="input-placeholder-group LocationInput__label"><span class="input-placeholder-label screen-reader-only">ไปที่ไหน</span>
																<input class="LocationInput input-large" name="location" type="text" placeholder="ไปที่ไหน" autocomplete="off" value="">
															</label>
															<div class="LocationInput__error hide">
																<span>กรุณาตั้งค่าสถานที่ตั้ง</span>
															</div>
														</div>
													</div>
												</div>
												<div class="SearchForm__dates col-md-5 text-left">
													<div class="DateRangePicker">
														<div>
															<div class="DateRangePickerInput">
																<div class="DateInput">
																	<label class="DateInput__label" for="startDate">เช็คอิน</label>
																	<input class="DateInput__input" type="text" id="startDate" name="startDate" value="" placeholder="เช็คอิน" autocomplete="off" maxlength="10">
																	<div class="DateInput__display-text">
																		เช็คอิน
																	</div>
																</div>
																<div class="DateRangePickerInput__arrow">
																	<svg viewBox="0 0 1000 1000">
																		<path d="M694.4 242.4l249.1 249.1c11 11 11 21 0 32L694.4 772.7c-5 5-10 7-16 7s-11-2-16-7c-11-11-11-21 0-32l210.1-210.1H67.1c-13 0-23-10-23-23s10-23 23-23h805.4L662.4 274.5c-21-21.1 11-53.1 32-32.1z"></path>
																	</svg>
																</div>
																<div class="DateInput">
																	<label class="DateInput__label" for="endDate">เช็คเอาท์</label>
																	<input class="DateInput__input" type="text" id="endDate" name="endDate" value="" placeholder="เช็คเอาท์" autocomplete="off" maxlength="10">
																	<div class="DateInput__display-text">
																		เช็คเอาท์
																	</div>
																</div>
																<button type="button" class="DateRangePickerInput__clear-dates DateRangePickerInput__clear-dates--hide">
																	<span class="screen-reader-only"><span>ลบวันที่</span></span>
																	<svg viewBox="0 0 12 12">
																		<path d="M11.53.47a.75.75 0 0 0-1.061 0l-4.47 4.47L1.529.47A.75.75 0 1 0 .468 1.531l4.47 4.47-4.47 4.47a.75.75 0 1 0 1.061 1.061l4.47-4.47 4.47 4.47a.75.75 0 1 0 1.061-1.061l-4.47-4.47 4.47-4.47a.75.75 0 0 0 0-1.061z"></path>
																	</svg>
																</button>
															</div>
															
														</div>
													</div>
												</div>
												<div class="SearchForm__guests text-left col-md-3 col-lg-2">
													<div class="select select-block select-large">
														<select aria-label="จำนวนผู้เข้าพัก" name="guests">
															<option selected="" value="1">ผู้เข้าพัก 1 คน</option><option value="2">ผู้เข้าพัก 2 คน</option><option value="3">ผู้เข้าพัก 3 คน</option><option value="4">ผู้เข้าพัก 4 คน</option><option value="5">ผู้เข้าพัก 5 คน</option><option value="6">ผู้เข้าพัก 6 คน</option><option value="7">ผู้เข้าพัก 7 คน</option><option value="8">ผู้เข้าพัก 8 คน</option><option value="9">ผู้เข้าพัก 9 คน</option><option value="10">ผู้เข้าพัก 10 คน</option><option value="11">ผู้เข้าพัก 11 คน</option><option value="12">ผู้เข้าพัก 12 คน</option><option value="13">ผู้เข้าพัก 13 คน</option><option value="14">ผู้เข้าพัก 14 คน</option><option value="15">ผู้เข้าพัก 15 คน</option><option value="16">ผู้เข้าพัก 16+ คน</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<input type="hidden" name="source" value="bb">
										<div class="SearchForm__submit col-sm-2">
											<button type="submit" class="btn btn-primary btn-large btn-block">
												<span class="SearchForm__submit-text"><span>ค้นหา</span></span>
											</button>
										</div>
									</form>
								</div>
							</div>

						</div>
					</div> -->
				</div>
			</div>

			<!--[if (gt IE 8)|!(IE)]><!-->
			<!--<![endif]-->

			<div class="js-host-banner panel-dark host-banner host-banner--fade-in">
				<div class="page-container-responsive">
					<div class="panel host-banner--panel-no-border space-top-8">
						<div class="row">
							<div class="col-sm-8 hide-sm">
								<div class="host-banner__media-container">
									<a href="/rooms/new?p1_b=1" class="host-banner__image-link">
									<div class="air-slideshow hide-sm host-banner__slide">
										<ul class="list-unstyled" id="host-banner-slideshow">
											<li class="air-slide background-cover host-banner__welcome-guest air-slide--next" aria-hidden="true" style="display: block;"></li>
										</ul>
									</div> </a>
									<!--[if (gt IE 8)|!(IE)]><!-->
									<div class="host-banner__video-container js-host-banner-video-play hide-sm hide">
										<div class="background-cover host-banner__video-preview"></div>
										
										<i id="host-banner__play-button" class="host-banner__play-icon icon icon-video-play icon-white"></i>
									</div>
									<!--<![endif]-->
								</div>
							</div>
							<div class="col-md-4 host-banner__body js-host-banner-body">
								<div class="media-cover media-cover-dark background-cover host-banner__welcome-guest show-sm"></div>
								<div class="va-container va-container-v va-container-h">
									<div class="va-middle host-banner__content--cta-right js-host-banner-content">
										<div class="host-banner__title space-4">
											<strong> การให้เช่ารถพร้อมบริการขับรถ </strong>
										</div>
										<div class="host-banner__subtitle space-4">
											สร้างรายได้จากการขับรถของตัวเอง

										</div>
										<a href="/rooms/new?p1_b=1" class="link-reset host-banner__btn"> <strong class="btn btn-host btn-large btn-block host-banner__cta"> ลงประกาศรถเช่าพร้อมคนขับ </strong> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="panel panel-dark no-border-top no-border-bottom">
				<div id="discovery-container">
					
					<div class="discovery-section page-container-responsive page-container-no-padding" id="discover-recommendations">
						<div class="section-intro text-center space-6 space-top-8">
							<h2 class="space-1"><strong>เลือกประเภทรถยนต์</strong></h2>
							<p class="text-lead">
								ค้นหารถยนต์ตามที่คุณต้องการใช้บริการ
							</p>
						</div>
						<div class="discovery-tiles">

							<div class="row">

								<div class="col-lg-3 col-md-6 col-sm-12 rm-padding-sm">
									<div class="category-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('img/car.jpg')">
										<a href="for_rent.php" class="link-reset" data-hook="category-card">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> รถเก๋ง </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								
								<div class="col-lg-3 col-md-6 col-sm-12 rm-padding-sm">
									<div class="category-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('img/van.jpg')">
										<a href="for_rent.php" class="link-reset" data-hook="category-card" >
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> รถตู้ </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								
								<div class="col-lg-3 col-md-6 col-sm-12 rm-padding-sm">
									<div class="category-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('img/suv.jpg');">
										<a href="for_rent.php" class="link-reset" data-hook="category-card">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> รถอเนกประสงค์ </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								
								<div class="col-lg-3 col-md-6 col-sm-12 rm-padding-sm">
									<div class="category-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('img/4.jpg');">
										<a href="for_rent.php" class="link-reset" data-hook="category-card">
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

						</div>
					</div>

					<div class="discovery-section hide page-container-responsive page-container-no-padding space-6" id="guidebook"></div>
				</div>
			</div>


			<div class="panel panel-dark no-border-top">
				<div id="discovery-container">
					<div class="discovery-section hide page-container-responsive page-container-no-padding" id="discovery-saved-searches"></div>

					<div class="discovery-section hide page-container-responsive page-container-no-padding" id="weekend-recommendations"></div>

					<div class="discovery-section page-container-responsive page-container-no-padding space-6" id="discover-recommendations">
						<div class="section-intro text-center space-6 space-top-8">
							<h2 class="space-1"><strong>เที่ยวทั่วไทย</strong></h2>
							<p class="text-lead">
								เช่ารถพร้อมคนขับกับเรา จัดกระเป๋า แล้วลุยกันเลย!
							</p>
						</div>
						<div class="discovery-tiles">

							<div class="row">

								<div class="col-lg-8 col-md-12 rm-padding-sm">
									<div class="discovery-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('http://www.wegointer.com/wp-content/uploads/2014/07/bk1.jpg'">
										<a href="#" class="link-reset" data-hook="discovery-card">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> กรุงเทพมหานคร </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm space-4">
									<div class="">
										<div class="darken-on-hover-container">
											<a href="cars.php" class="text-normal link-reset">
											<div class="discovery-card darken-on-hover discovery-listing" style="background-image:url('img/car.jpg')">
												<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
													<sup class="h6 text-contrast"> ฿ </sup>
													<span class="h3 price-amount"> 3,500 </span>
													<sup class="h6 text-contrast"> </sup>
												</div>

												<div class="va-container va-container-v va-container-h">
													<div class="va-middle text-center text-contrast">
														<div class="media-photo media-round space-2 card-profile-picture">
															<img alt="" height="50" src="img/adthasid.jpg" width="50">
														</div>
														<div class="h3 strong">
															ให้เช่ารถเช่าโดย Adthasid
														</div>
														<div>
															กรุงเทพมหานคร
														</div>
													</div>
												</div>

											</div> </a>

										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm">
									<div class="discovery-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('http://cdn.airportthai.co.th/uploads/profiles/0000000001/filemanager/images/%E0%B8%AB%E0%B8%B2%E0%B8%94%E0%B8%81%E0%B8%B0%E0%B8%95%E0%B8%B0.jpg')">
										<a href="#" class="link-reset" data-hook="discovery-card">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> แดดอ่อนๆบนชายหาดในภูเก็ต </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm">
									<div class="discovery-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('http://i1232.photobucket.com/albums/ff375/maximo2519/2.jpg')">
										<a href="#" class="link-reset" data-hook="discovery-card">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> เชียงใหม่ </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm">
									<div class="discovery-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('http://www.krabiview.com/th/wp-content/uploads/2015/07/poda-island-attraction-thailand-1.jpg')">
										<a href="#" class="link-reset" data-hook="discovery-card">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> กระบี่ </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>

							</div>

						</div>
					</div>

					<div class="discovery-section hide page-container-responsive page-container-no-padding space-6" id="guidebook"></div>
				</div>
			</div>

		</main>

		<?php
		include 'include/footer.php';
		?>

		<div id="question-birthday" class="tooltip tooltip-bottom-middle signup-login-form__tooltip" role="tooltip" aria-hidden="true" data-trigger="#birthday-signup-form-question-trigger" data-position="top" style="left: 368.828px; top: 410px;">
			<p class="panel-body">
				ในการลงทะเบียน คุณต้องมีอายุอย่างน้อย 18 ปี คนอื่นจะไม่เห็นวันเกิดของคุณ
			</p>
		</div>

	</body>

	<?php
	require ('config/js.php');
	?>
	<script src="js/adthasid.js" type="text/javascript"></script>
	<script type="text/javascript">

	$(document).ready(function() {

	<?php if(isset($_GET['login']) AND !isset($_SESSION['member_id']) ){

	?>$("#modal-login").modal();<?php
		}
	?>
	});

	</script>
</html>
