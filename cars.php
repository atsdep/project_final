<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_GET['id'])) {
	header("location:index.php");
	exit(0);
}
?>
<!DOCTYPE html>
<html lang="th">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>ชื่อประกาศ รถเก๋ง ให้เช่า ในกรุงเทพ</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">

		<link rel="stylesheet" href="css/cars.css">

		<link rel="stylesheet" href="css/adthasid.css">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body class="with-new-header no_wiggle_webkit">
		
		

		<?php
		include 'include/all_header.php';
		function DateThai($strDate) {
			$strYear = date("Y", strtotime($strDate));
			$strMonth = date("n", strtotime($strDate));
			$strDay = date("j", strtotime($strDate));
			$strHour = date("H", strtotime($strDate));
			$strMinute = date("i", strtotime($strDate));
			$strSeconds = date("s", strtotime($strDate));
			$strMonthCut = ARRAY("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
			$strMonthThai = $strMonthCut[$strMonth];
			return "$strMonthThai $strYear";
		}
		?>
		<main id="site-content" role="main">
		<?php
		if (isset($_GET['id'])) {
			$sql_select_all = "SELECT members.member_firstname,
			members.member_profile_photo,
			members.member_regis_date,
			provinces.PROVINCE_NAME,
			provinces.PROVINCE_NAME_ENG,
			car_category.car_category_name,
			car_gene.car_gene_name,
			car_brand.car_brand_name,
			announces.*
			FROM announces
			INNER JOIN provinces
			ON announces.car_province = provinces.PROVINCE_ID
			INNER JOIN car_gene
			ON car_gene.car_gene_id = announces.car_gene_id
			INNER JOIN car_brand
			ON car_brand.car_brand_id = car_gene.car_brand_id
			INNER JOIN car_category
			ON car_gene.car_category_id = car_category.car_category_id
			INNER JOIN members
			ON announces.member_id = members.member_id
			WHERE announces.announce_id = '" . $_GET['id'] . "'";

			$query_ann_cars = mysqli_query($connect, $sql_select_all);
			$result_ann_cars = mysqli_fetch_assoc($query_ann_cars);
			$row_ann_cars = mysqli_num_rows($query_ann_cars);
		}
		if ($row_ann_cars == 1) {
			$price = number_format($result_ann_cars['announce_price']);
			$title = $result_ann_cars['announce_title'];
			$province = $result_ann_cars['PROVINCE_NAME'];
			$province_eng = $result_ann_cars['PROVINCE_NAME_ENG'];
			if (isset($result_ann_cars['announce_photos_1'])) {
				$photos_1 = 'img/' . $result_ann_cars['announce_photos_1'];
			} else {
				$photos_1 = 'img/car_default_no_photos.png';
			}

			if (isset($result_ann_cars['member_profile_photo'])) {
				$profile_photo = 'img/' . $result_ann_cars['member_profile_photo'];
			} else {
				$profile_photo = 'img/profile.jpg';
			}
			$car_gene = $result_ann_cars['car_gene_name'];
			$car_brand = $result_ann_cars['car_brand_name'];
			$car_year = $result_ann_cars['car_year'];
			$car_category = $result_ann_cars['car_category_name'];
			$passenger = $result_ann_cars['announce_passenger'];
			$description = $result_ann_cars['announce_description'];
			$member_create_date = $result_ann_cars['member_regis_date'];
		}
			?>	
		
			<div class="subnav-container">
				<div class="subnav book-it show-md" data-sticky="true" data-transition-at="#details" aria-hidden="true">
					<div class="page-container-responsive">
						<div class="pull-left text-contrast subnav-element">
							<div class="va-container va-container-v">
								<div class="va-middle">
									<strong>
									<div>
										<div>
											<span class="h3 text-contrast price-amount"><span>฿<?php echo $price ?></span></span>
											<span class="listing-price__per-night hide-sm"> <span>ต่อวัน</span></span>
										</div>
									</div> </strong>
								</div>
							</div>
						</div>

						<div class="tablet-bookit-btn-container js-bookit-btn-container pull-right">
							<button type="submit" class="btn btn-primary btn-large" id="sticky-md-book-it-btn">
								<span class="book-it__btn-text"> ขอจอง </span>
								<span class="book-it__btn-text--contact-host hide"> ติดต่อเจ้าของรถเช่า </span>
								<span class="book-it__btn-text--instant hide"> <i class="icon icon-bolt icon-beach h4"></i> จองทันที </span>
							</button>
						</div>
					</div>
				</div>

				<div data-sticky="true" data-transition-at="#summary" aria-hidden="true" class="subnav section-titles hide-md">
					<div class="page-container-responsive">
						<ul class="subnav-list">
							<li>
								<a href="#photos" aria-selected="true" class="subnav-item"> รูปภาพ </a>
							</li>
							<li>
								<a href="#summary" class="subnav-item" aria-selected="false"> เกี่ยวกับรถเช่านี้ </a>
							</li>
							<li>
								<a href="#reviews" class="subnav-item" aria-selected="false"> ความคิดเห็น </a>
							</li>
							<li>
								<a href="#host-profile" class="subnav-item" aria-selected="false"> เจ้าของรถเช่า </a>
							</li>
							<li>
								<a href="#neighborhood" class="subnav-item" aria-selected="false"> ตำแหน่งที่ตั้ง </a>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div id="room">

				<div>
					<div>
						<div id="photos" class="with-photos with-modal">
							<span class="cover-photo"><img class="hide" alt="" width="0" src="<?php echo $photos_1?>?aki_policy=large" srcset="https://a2.muscache.com/im/pictures/2cb713a5-2c80-423b-82e4-f20938845b97.jpg?aki_policy=large 639w,https://a2.muscache.com/im/pictures/2cb713a5-2c80-423b-82e4-f20938845b97.jpg?aki_policy=xx_large 1440w"> <span class="cover-img-container" data-hook="cover-img-container">
									<div class="cover-img" style="background-image:url(<?php echo $photos_1?>?aki_policy=xx_large);">
										<div class="link-reset panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label show-sm">
											<div>
												<span class="h3 text-contrast price-amount"><span>฿<?php echo $price ?></span></span>
												<span class="listing-price__per-night hide-sm"> <span>ต่อวัน</span></span>
												<input type="hidden" id="price-value" value="<?php echo $result_ann_cars['announce_price'] ?>" />
											</div>
										</div>
									</div></span>
								<div class="slideshow-inline-preload hide">
									<img class="carousel-image img-responsive-height" src="<?php echo $photos_1?>?aki_policy=x_large" alt="">
								</div>
								<div class="hero__view-photos">
									<button type="button" class="btn">
										<span>ดูรูป</span>
									</button>
								</div></span>
						</div>

					</div>
				</div>

				<div id="photo-social-share-widget" class="hide">
					<div class="social-share-widget p3-photo-social-share-widget text-light-gray photo-widget-0 show-lg-inline-block" data-tooltip_id="p3-slideshow-social-share-tooltip-0">
						<span class="share-title"> แบ่งปัน: </span>
						<span class="share-triggers"> <a class="share-btn link-icon" data-email-share-link="/rooms/15417960/email_listing?photo=0" data-network="email" rel="nofollow" title="อีเมล์" href="#"> <span class="screen-reader-only">อีเมล์</span> <i class="icon icon-envelope social-icon-size"></i> </a> <a class="share-btn messenger-btn link-icon messenger-btn" data-network="messenger" rel="nofollow" title="Messenger" href="http://www.facebook.com/dialog/send?app_id=138566025676&amp;link=https%3A%2F%2Fth.airbnb.com%2Frooms%2F15417960%3Fbev_ref%3D1475419335_oovQhuSde3yORaX6%26photo%3D0%26user_id%3D63856890%26s%3D24&amp;redirect_uri=https%3A%2F%2Fth.airbnb.com%2Frooms%2F15417960%3Fbev_ref%3D1475419335_oovQhuSde3yORaX6%26photo%3D0%26user_id%3D63856890%26s%3D24" data-messenger-share-link="https://th.airbnb.com/rooms/15417960?bev_ref=1475419335_oovQhuSde3yORaX6&amp;photo=0&amp;user_id=63856890&amp;s=24" target="_blank"> <span class="screen-reader-only">Messenger</span> <i class="social-icon-size icon icon-facebook-messenger"></i> </a> <a class="share-btn link-icon" data-network="facebook" rel="nofollow" title="Facebook" href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Fth.airbnb.com%2Frooms%2F15417960%3Fbev_ref%3D1475419335_oovQhuSde3yORaX6%26photo%3D0%26user_id%3D63856890%26s%3D3" data-facebook-share-link="https://th.airbnb.com/rooms/15417960?bev_ref=1475419335_oovQhuSde3yORaX6&amp;photo=0&amp;user_id=63856890&amp;s=3" target="_blank"> <span class="screen-reader-only">Facebook</span> <i class="icon icon-facebook social-icon-size"></i> </a> <a class="share-btn embed-btn link-icon" data-network="embed" rel="nofollow" title="ฝังรถเช่านี้" data-photo-index="0" href="#"> <span class="screen-reader-only">ฝังรถเช่านี้</span> <i class="icon icon-code social-icon-size"></i> </a> <a class="share-btn link-icon" data-network="pinterest" rel="nofollow" title="Pinterest" href="//www.pinterest.com/pin/create/button/?url=https%3A%2F%2Fth.airbnb.com%2Frooms%2F15417960%3Fbev_ref%3D1475419335_oovQhuSde3yORaX6%26photo%3D0%26user_id%3D63856890%26s%3D16&amp;media=https%3A%2F%2Fa2.muscache.com%2Fim%2Fpictures%2F2cb713a5-2c80-423b-82e4-f20938845b97.jpg%3Faki_policy%3Dx_large&amp;description=%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%94%E0%B8%B9%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%9E%E0%B8%B1%E0%B8%81%E0%B8%A2%E0%B8%AD%E0%B8%94%E0%B9%80%E0%B8%A2%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A1%E0%B8%99%E0%B8%B5%E0%B9%89%E0%B8%9A%E0%B8%99+Airbnb%3A+test+system+-+%E0%B8%AD%E0%B8%9E%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%97%E0%B9%80%E0%B8%A1%E0%B8%99%E0%B8%97%E0%B9%8C+%E0%B9%83%E0%B8%AB%E0%B9%89%E0%B9%80%E0%B8%8A%E0%B9%88%E0%B8%B2+%E0%B9%83%E0%B8%99+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E" target="_blank"> <span class="screen-reader-only">Pinterest</span> <i class="icon icon-pinterest social-icon-size"></i> </a> <span class="hide more-btn"> ··· </span> </span>

					</div>
					<div class="social-share-widget p3-photo-social-share-widget text-light-gray photo-widget-1 show-lg-inline-block" data-tooltip_id="p3-slideshow-social-share-tooltip-1">
						<span class="share-title"> แบ่งปัน: </span>
						<span class="share-triggers"> <a class="share-btn link-icon" data-email-share-link="/rooms/15417960/email_listing?photo=1" data-network="email" rel="nofollow" title="อีเมล์" href="#"> <span class="screen-reader-only">อีเมล์</span> <i class="icon icon-envelope social-icon-size"></i> </a> <a class="share-btn messenger-btn link-icon messenger-btn" data-network="messenger" rel="nofollow" title="Messenger" href="http://www.facebook.com/dialog/send?app_id=138566025676&amp;link=https%3A%2F%2Fth.airbnb.com%2Frooms%2F15417960%3Fbev_ref%3D1475419335_oovQhuSde3yORaX6%26photo%3D1%26user_id%3D63856890%26s%3D24&amp;redirect_uri=https%3A%2F%2Fth.airbnb.com%2Frooms%2F15417960%3Fbev_ref%3D1475419335_oovQhuSde3yORaX6%26photo%3D1%26user_id%3D63856890%26s%3D24" data-messenger-share-link="https://th.airbnb.com/rooms/15417960?bev_ref=1475419335_oovQhuSde3yORaX6&amp;photo=1&amp;user_id=63856890&amp;s=24" target="_blank"> <span class="screen-reader-only">Messenger</span> <i class="social-icon-size icon icon-facebook-messenger"></i> </a> <a class="share-btn link-icon" data-network="facebook" rel="nofollow" title="Facebook" href="http://www.facebook.com/sharer.php?u=https%3A%2F%2Fth.airbnb.com%2Frooms%2F15417960%3Fbev_ref%3D1475419335_oovQhuSde3yORaX6%26photo%3D1%26user_id%3D63856890%26s%3D3" data-facebook-share-link="https://th.airbnb.com/rooms/15417960?bev_ref=1475419335_oovQhuSde3yORaX6&amp;photo=1&amp;user_id=63856890&amp;s=3" target="_blank"> <span class="screen-reader-only">Facebook</span> <i class="icon icon-facebook social-icon-size"></i> </a> <a class="share-btn embed-btn link-icon" data-network="embed" rel="nofollow" title="ฝังรถเช่านี้" data-photo-index="1" href="#"> <span class="screen-reader-only">ฝังรถเช่านี้</span> <i class="icon icon-code social-icon-size"></i> </a> <a class="share-btn link-icon" data-network="pinterest" rel="nofollow" title="Pinterest" href="//www.pinterest.com/pin/create/button/?url=https%3A%2F%2Fth.airbnb.com%2Frooms%2F15417960%3Fbev_ref%3D1475419335_oovQhuSde3yORaX6%26photo%3D1%26user_id%3D63856890%26s%3D16&amp;media=https%3A%2F%2Fa2.muscache.com%2Fim%2Fpictures%2Fb3c359cd-c2e1-41ca-9dcd-2a9f9f1856f5.jpg%3Faki_policy%3Dx_large&amp;description=%E0%B8%A5%E0%B8%AD%E0%B8%87%E0%B8%94%E0%B8%B9%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%9E%E0%B8%B1%E0%B8%81%E0%B8%A2%E0%B8%AD%E0%B8%94%E0%B9%80%E0%B8%A2%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%A1%E0%B8%99%E0%B8%B5%E0%B9%89%E0%B8%9A%E0%B8%99+Airbnb%3A+test+system+-+%E0%B8%AD%E0%B8%9E%E0%B8%B2%E0%B8%A3%E0%B9%8C%E0%B8%97%E0%B9%80%E0%B8%A1%E0%B8%99%E0%B8%97%E0%B9%8C+%E0%B9%83%E0%B8%AB%E0%B9%89%E0%B9%80%E0%B8%8A%E0%B9%88%E0%B8%B2+%E0%B9%83%E0%B8%99+%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E" target="_blank"> <span class="screen-reader-only">Pinterest</span> <i class="icon icon-pinterest social-icon-size"></i> </a> <span class="hide more-btn"> ··· </span> </span>

					</div>
				</div>

				<div id="summary" class="panel room-section">
					<div class="page-container-responsive">
						<div class="row">
							<div class="col-lg-8">
								<div>
									<div class="summary-component">
										<div class="space-4 space-top-4">
											<div class="row">
												<div class="col-md-3 space-sm-4 text-center space-sm-2">
													<div class="media-photo-badge">
														<a href="#host-profile" class="media-photo media-round"> <img alt="ใช้รูปโปรไฟล์" class="host-profile-image" height="115" width="115" data-pin-nopin="true" src="<?php echo $profile_photo?>?aki_policy=profile_x_medium" title="Adthasid"></a>
													</div>
												</div>
												<div class="col-md-9">
													<h1 class="overflow h3 space-1 text-center-sm" id="listing_name"><?php echo $title ?></h1>
													<div id="display-address" class="space-2 text-muted text-center-sm" data-location="กรุงเทพมหานคร">
														<a href="#neighborhood" class="link-reset"><?php echo $province . ', ' . $province_eng; ?></a>
														<span> &nbsp; </span>
														<a href="#reviews" class="link-reset hide-sm">
														<div class="star-rating-wrapper" itemscope="" itemprop="aggregateRating" itemtype="http://schema.org/AggregateRating" aria-label="5 จาก 5 ดาวจาก 24 รีวิว">
															<div class="star-rating" itemprop="ratingValue" content="5">
																<div class="foreground">
																	<span>
																		<span><i class="icon-star icon icon-beach star-rating-icons"></i><span> </span></span>
																		<span><i class="icon-star icon icon-beach star-rating-icons"></i><span> </span></span>
																		<span><i class="icon-star icon icon-beach star-rating-icons"></i><span> </span></span>
																		<span><i class="icon-star-half icon icon-beach star-rating-icons"></i></i><span> </span></span>
																		<span><i class="icon-star icon icon-light-gray star-rating-icons"></i><span> </span></span>
																		
																	</span>
																</div>
																<div class="background">
																	<span><span><i class="icon-star icon icon-light-gray star-rating-icons"></i><span> </span></span><span><i class="icon-star icon icon-light-gray star-rating-icons"></i><span> </span></span><span><i class="icon-star icon icon-light-gray star-rating-icons"></i><span> </span></span><span><i class="icon-star icon icon-light-gray star-rating-icons"></i><span> </span></span><span><i class="icon-star icon icon-light-gray star-rating-icons"></i><span> </span></span></span>
																</div>
															</div><span> </span><span class="h6"><small><span itemprop="reviewCount">24</span></small></span>
														</div></a>

													</div>
													<div class="row row-condensed text-muted text-center">
														
														<div class="col-sm-3">
															<?php 
															if($car_category=='รถเก๋ง')
															 echo	'<i class="icon icon-size-2" aria-hidden="true"><img class="icon-sedan-carspage" src="img/icon-sedan.png"></i>';
															?>
															
														</div>
														<div class="col-sm-3">
															<i class="icon icon-group icon-size-2" aria-hidden="true"></i>
														</div>
														<!-- <div class="col-sm-3">
															<i class="icon icon-shared-room icon-size-2" aria-hidden="true"></i>
														</div> -->
														
														<!--<div class="col-sm-3">
															<i class="icon icon-star icon-size-2" aria-hidden="true"></i>
														</div> -->
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-3 text-muted text-center hide-sm">
													<a href="#host-profile" class="link-reset text-wrap">Adthasid</a>
												</div>
												<div class="col-md-9">
													<div class="row row-condensed text-muted text-center">
														<div class="col-sm-3">
															<?php echo $car_category ?>
														</div>
														<div class="col-sm-3">
															ผู้โดยสาร <?php echo $passenger ?> คน
														</div>
														<!-- <div class="col-sm-3">
															3 ที่นั่ง
														</div> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="col-lg-4">
								<div class="book-it js-book-it" style="display: block;">
									<div class="book-it__container js-book-it-container" style="top: 0px;">

										<div>
											<div>
												<div class="">
													<div itemprop="offers" class="book-it__price" style="height: 40px;">
														<div class="row">
															<div class="col-sm-8">
																<div class="screen-reader-only">
																	<span class="h3"><span>฿<?php echo $price ?></span></span><span>ต่อวัน</span>
																</div>
																<div class="book-it__price-amount text-special" aria-hidden="true">
																	<span class="h3"><span>฿<?php echo $price ?></span></span>
																</div>
															</div>
															<div class="col-sm-4">
																<div class="book-it__payment-period-container pull-right" aria-hidden="true">
																	<div class="book-it__payment-period">
																		<span>ต่อวัน</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<form id="booking-form">
														<div class="panel book-it-panel">
															<div class="panel-body panel-light">
																<div class="row row-condensed space-3">
																	<div class="col-md-12">
																		<div>
																			<label for="number_of_guests_15417960" class="book-it__label"><span>ปลายทาง</span></label>
																			<div class="select select-block">
																				<select id="number_of_guests_15417960" name="number_of_guests">
																					<option selected="" value="1">ภายในจังหวัด<?php echo $province ?></option>
																					<!-- <option value="2">นครปฐม</option> -->
																				</select>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="row row-condensed space-3">
																	<div class="col-md-9">
																		<div class="row row-condensed">
																			<div class="col-sm-6">
																				<label class="book-it__label">วันที่เช่า</label>
																				<input value="" id="from" type="text" name="checkin" class="checkin ui-datepicker-target" placeholder="วว-ดด-ปปปป">
																			</div>
																			<div class="col-sm-6">
																				<label class="book-it__label">ถึงวันที่</label>
																				<input value="" id="to" type="text" name="checkout" class="checkout ui-datepicker-target" placeholder="วว-ดด-ปปปป">
																			</div>
																		</div>
																	</div>
																	<div class="col-md-3">
																		<div>
																			<label class="book-it__label"><span>ผู้โดยสาร</span></label>
																			<div class="select select-block">
																				<select name="number_of_guests">
																					<option selected="" value="1">1</option>
																					<?php  
																						for($i=2; $i<= $passenger; $i++){
																							echo '<option value="'.$i.'">'.$i.'</option>';
																						}
																					?>
																				</select>
																			</div>
																		</div>
																	</div>
																</div>
																<div id="book-it__subtotal" class="book-it__subtotal hide">
																	<div class="">
																	<table class="table">
																		<tbody>
																			<tr class="price-item">
																				<td>
																					<span>฿<?php echo $price  ?> x <span id="day"></span> วัน</span>
																					<span>&nbsp;</span>
																				</td>
																				<td class="text-right price-item__price">
																					<div class=""><span id="price-process"></span></div>
																				</td>
																			</tr>
																			<tr class="price-item">
																				<td>
																					<span>รวมค่าเชื้อเพลิง</span>
																					<span>&nbsp;</span>
																					<span>
																						<span>
																						<i class="icon icon-question"></i>
																						</span>
																					</span>
																				</td>
																				<td class="text-right price-item__price">
																					<div class=""><span>฿XXX</span></div>
																				</td>
																			</tr>
																			<tr class="price-item">
																				<td>
																					<span>ไม่รวมค่าทางด่วน</span>
																					<span>&nbsp;</span>
																					<span>
																						<span>
																						<i class="icon icon-question"></i>
																						</span>
																					</span>
																				</td>
																				<td class="text-right price-item__price">
																					<div class=""><span>฿XXX</span></div>
																				</td>
																			</tr>
																			<tr class="price-item">
																				<td>
																					<span>รวมค่าจอดรถ</span>
																					<span>&nbsp;</span>
																					<span>
																						<span>
																						<i class="icon icon-question"></i>
																						</span>
																					</span>
																				</td>
																				<td class="text-right price-item__price">
																					<div class=""><span>฿XXX</span></div>
																				</td>
																			</tr>
																			<tr>
																				<td>
																					<span>ทั้งหมด</span>
																				</td>
																				<td class="text-right">
																					<span id="total-price"></span>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																	</div>
																</div>
																<div>
																	<button id="btn-booking" type="button" class="btn btn-soft-dark btn-large btn-block" disabled="">
																		<span>ขอจอง</span>
																	</button>
																	<div class="bookit-message__container text-center text-muted">
																		<small><span>ราคาเริ่มต้นโดยประมาณ</span></small>
																	</div>
																</div>
																<div class="hide">
																	<button type="button" class="btn btn-primary btn-large btn-small btn-block">
																		<span>ติดต่อเจ้าของรถเช่า</span>
																	</button>
																</div>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>

									</div>

									<div class="modal" role="dialog" aria-hidden="true" id="book-it-sm-modal">
										<div class="modal-table">
											<div class="modal-cell">
												<div class="modal-content">
													<div class="panel-header">
														<a href="#" class="modal-close" data-behavior="modal-close"> × <span class="screen-reader-only">ปิด</span> </a>
														ขอจอง
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>

					<div>
						<div>
							<div id="details" class="details-section webkit-render-fix">
								<div class="page-container-responsive">
									<div class="row">
										<div class="col-lg-8 js-details-column">
											<div class="space-8 space-top-8">
												<h4 class="space-4 text-center-sm"><span><span>เกี่ยวกับรถเช่านี้ </span>
													<?php if($result_ann_cars['member_id'] == $_SESSION['member_id']){ ?><span>(<a href="new.php?id=<?php echo $_GET['id'] ?>" class="link-underline"><span>แก้ไขรถเช่า</span></a></span><span>)</span> <?php } ?>
													</span></h4>
												<div>
													<p>
														<span><?php echo $description ?></span>
													</p>
												</div>
												<!-- <div class="row row-condensed">
												<div class="contact-host-div col-12">
												<div>
												<button class="btn-link btn-link--bold" type="button">
												<span>ติดต่อเจ้าของรถเช่า</span>
												</button>
												</div>
												</div>
												</div> -->
												<hr>
												<div class="row">
													<div class="col-md-3 text-muted">
														<div>
															<span>รถเช่า</span>
														</div>
														<div class="edit-link--hide">
															<i class="icon icon-edit icon-rausch"></i><span>&nbsp;</span><a href="/manage-listing/15417960/basics"><strong> <span>แก้ไข</span> </strong> </a>
														</div>
													</div>
													<div class="col-md-9">
														<div class="row">
															<div class="col-md-6">
																<div>
																	<span>ยี่ห้อ:</span><span>&nbsp;</span><strong><?php echo $car_brand ?></strong>
																</div>
																<div>
																	<span>รุ่น:</span><span>&nbsp;</span><strong><?php echo $car_gene ?></strong>
																</div>
																<div>
																	<span>ปี:</span><span>&nbsp;</span><strong><?php echo $car_year ?></strong>
																</div>
															</div>
															<div class="col-md-6">
																<div>
																	<span>ประเภท:</span><span>&nbsp;</span><strong><?php echo $car_category ?></strong>
																</div>
																<div>
																	<span>รองรับผู้โดยสาร:</span><span>&nbsp;</span><strong><?php echo $passenger ?> คน</strong>
																</div>
																<div>
																	<span>ประเภทเชื้อเพลิง:</span><span>&nbsp;</span><strong><?php echo $result_ann_cars['type_of_fuel'] ?></strong>
																</div>
																<!-- <div>
																	<span>ขนาดเครื่องยนต์:</span><span>&nbsp;</span><strong>1800 cc</strong>
																</div> -->
																<!-- <div>
																	<span>สี:</span><span>&nbsp;</span><strong>ขาว</strong>
																</div> -->
																<!-- <div>
																	<span>รองรับผู้โดยสาร:</span><span>&nbsp;</span><strong>1</strong>
																</div> -->
															</div>
														</div>
														<div class="row">
															<div class="col-md-6">
																<strong><a href="#house-rules" class="react-house-rules-trigger" data-prevent-default="true"> <span>กฏของรถเช่า</span></a></strong>
															</div>
														</div>
													</div>
												</div>
												<hr>
												<div class="row amenities">
													<div class="col-md-3 text-muted">
														<div>
															<span>สิ่งอำนวยความสะดวก</span>
														</div>
														<div class="edit-link--hide">
															<i class="icon icon-edit icon-rausch"></i><span>&nbsp;</span><a href="/manage-listing/15417960/basics"><strong> <span>แก้ไข</span> </strong> </a>
														</div>
													</div>
													<div class="col-md-9 expandable">
														<div class="expandable-content-summary">
															<div class="row">
																<div class="col-sm-6">
																	<!-- <div>
																		<div class="space-1">
																			<span><i class="icon h3 icon-paw"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id="amenity-short-tooltip-trigger-12"><strong><a href="/s/กรุงเทพ--ไทย?amenity=pet-friendly" class="link-reset">นำสัตว์เลี้ยงไปด้วยได้</a></strong></span>
																		</div>
																	</div> -->
																	<div>
																		<div class="space-1">
																			<?php 
																				if($result_ann_cars['wifi'] == 1){
																					echo '<span><i class="icon h3 icon-wifi"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id=""><span>Wifi ภายในรถ</span></span>';
																				}else{
																					echo '<span id="amenity-long-tooltip-trigger-28"><del>Wifi ภายในรถ</del></span>';
																				}
																			?>
																			
																		</div>
																	</div>
																	<div>
																		<div class="space-1">
																			<?php 
																				if($result_ann_cars['water'] == 1){
																					echo '<span><i class="icon h3 icon-wifi"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id=""><span>น้ำดื่ม</span></span>';
																				}else{
																					echo '<span id="amenity-long-tooltip-trigger-28"><del>น้ำดื่ม</del></span>';
																				}
																			?>
																		</div>
																	</div>
																	<!-- <button class="expandable-trigger-more btn-link btn-link--bold" type="button">
																		<span>+ เพิ่มเติม</span>
																	</button> -->
																</div>
																<div class="col-sm-6">
																	<div>
																		<div class="space-1">
																			<?php 
																				if($result_ann_cars['book'] == 1){
																					echo '<span><i class="icon h3 icon-wifi"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id=""><span>หนังสือ</span></span>';
																				}else{
																					echo '<span id="amenity-long-tooltip-trigger-28"><del>หนังสือ</del></span>';
																				}
																			?>
																		</div>
																	</div>
																	<div>
																		<div class="space-1">
																			<?php 
																				if($result_ann_cars['music'] == 1){
																					echo '<span><i class="icon h3 icon-wifi"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id=""><span>เพลง</span></span>';
																				}else{
																					echo '<span id="amenity-long-tooltip-trigger-28"><del>เพลง</del></span>';
																				}
																			?>
																		</div>
																	</div>
																</div>

															</div>
														</div>
														<div class="">
															<!-- expandable-content -->
															<!-- expandable-content-full -->
															<div class="row">
																<div class="col-sm-6">
																	<div>
																		<div class="space-1">
																			<?php 
																				if($result_ann_cars['tissues'] == 1){
																					echo '<span><i class="icon h3 icon-wifi"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id=""><span>กระดาษทิชชู่</span></span>';
																				}else{
																					echo '<span id="amenity-long-tooltip-trigger-28"><del>กระดาษทิชชู่</del></span>';
																				}
																			?>
																		</div>
																	</div>

																</div>
																<div class="col-sm-6">
																	<div>
																		<div class="space-1">
																			<?php 
																				if($result_ann_cars['childseat'] == 1){
																					echo '<span><i class="icon h3 icon-wifi"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id=""><span>เบาะนั่งสำหรับเด็ก</span></span>';
																				}else{
																					echo '<span id="amenity-long-tooltip-trigger-28"><del>เบาะนั่งสำหรับเด็ก</del></span>';
																				}
																			?>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	<div>
																		<div class="space-1">
																			<?php 
																				if($result_ann_cars['monitor'] == 1){
																					echo '<span><i class="icon h3 icon-wifi"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id=""><span>จอมอนิเตอร์ในรถยนต์</span></span>';
																				}else{
																					echo '<span id="amenity-long-tooltip-trigger-28"><del>จอมอนิเตอร์ในรถยนต์</del></span>';
																				}
																			?>
																		</div>
																	</div>

																</div>
																<div class="col-sm-6">
																	<div>
																		<div class="space-1">
																			<?php 
																				if($result_ann_cars['220v'] == 1){
																					echo '<span><i class="icon h3 icon-wifi"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id=""><span>ไฟชาร์จ 220V</span></span>';
																				}else{
																					echo '<span id="amenity-long-tooltip-trigger-28"><del>ไฟชาร์จ 220V</del></span>';
																				}
																			?>
																		</div>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-6">
																	<div>
																		<div class="space-1">
																			<?php 
																				if($result_ann_cars['purifier'] == 1){
																					echo '<span><i class="icon h3 icon-wifi"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id=""><span>ระบบฟอกอากาศในรถยนต์</span></span>';
																				}else{
																					echo '<span id="amenity-long-tooltip-trigger-28"><del>ระบบฟอกอากาศในรถยนต์</del></span>';
																				}
																			?>
																		</div>
																	</div>

																</div>
																<div class="col-sm-6">
																	<div>
																		<div class="space-1">
																			<?php 
																				if($result_ann_cars['smoking'] == 1){
																					echo '<span><i class="icon h3 icon-smoking"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id=""><span>สูบบุหรี่ได้</span></span>';
																				}else{
																					echo '<span id="amenity-long-tooltip-trigger-28"><del>สูบบุหรี่ได้</del></span>';
																				}
																			?>
																		</div>
																	</div>
																</div>
																<div class="col-sm-6">
																	<div>
																		<div class="space-1">
																			<?php 
																				if($result_ann_cars['pet'] == 1){
																					echo '<span><i class="icon h3 icon-paw"></i><span>&nbsp;&nbsp;&nbsp;</span></span><span id=""><span>นำสัตว์เลี้ยงเข้ามาได้</span></span>';
																				}else{
																					echo '<span id="amenity-long-tooltip-trigger-28"><del>นำสัตว์เลี้ยงเข้ามาได้</del></span>';
																				}
																			?>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<hr>
												<div class="row">
													<div class="col-md-3 text-muted">
														<div>
															<span>ราคา</span>
														</div>
														<div class="edit-link--hide">
															<i class="icon icon-edit icon-rausch"></i><span>&nbsp;</span><a href="/manage-listing/15417960/basics"><strong> <span>แก้ไข</span> </strong> </a>
														</div>
													</div>
													<div class="col-md-9">
														<div class="structured_house_rules">
															<div class="row col-sm-6">
																<span><strong><?php echo 'ภายในจังหวัด'.$province; ?></strong></span><span> <strong>฿<?php echo $price ?></strong></span>
															</div>
															<br>
															<div class="row">
																<div class="col-sm-2">
																	<hr class="structured_house_rules__hr">
																</div>
															</div>
															<div class="row col-sm-12">
																<?php 
																	if($result_ann_cars['fuel_expenses'] == 1){
																		echo '<span id="">ราคารวมค่าเชื้อเพลิง</span>';
																	}else{
																		echo '<span id=""><del>ราคารวมค่าเชื้อเพลิง</del></span>';
																	}
																?>										
															</div>
															<div class="row col-sm-12">
																<?php 
																	if($result_ann_cars['expressway_expenses'] == 1){
																		echo '<span id="">ราคารวมค่าทางด่วน</span>';
																	}else{
																		echo '<span id=""><del>ราคารวมค่าทางด่วน</del></span>';
																	}
																?>														
															</div>
															<div class="row col-sm-12">
																<?php 
																	if($result_ann_cars['park_expenses'] == 1){
																		echo '<span id="">ราคารวมค่าจอดรถ</span>';
																	}else{
																		echo '<span id=""><del>ราคารวมค่าจอดรถ</del></span>';
																	}
																?>	
															</div>
															<!-- <div class="row col-sm-12 space-top-1">
																<span>อาจไม่ปลอดภัยหรือเหมาะกับเด็ก (อายุ 0-12 ปี)</span>
															</div>
															<div class="row col-sm-12 space-top-1">
																<span>เวลาเช็คอินคือหลัง 15:00</span>
															</div> -->
															<!-- <div class="row">
																<div class="col-sm-2">
																	<hr class="structured_house_rules__hr">
																</div>
															</div> -->
														</div>

														<!-- <div>
															<div class="react-expandable expanded">
																<div class="expandable-content">
																	<div>
																		<p>
																			<span><?php echo 'ภายในจังหวัด Test: '?><span><?php echo '฿'. $price; ?></span></span>
																			<br>
																			<span class="space-top-1"><?php echo 'ภายในจังหวัด Test2: '?><span><?php echo '฿'. $price; ?></span></span>
																		</p>
																	</div><div class="expandable-indicator"></div>
																</div><span class="react-expandable-trigger-more">
																	<button class="btn-link btn-link--bold" type="button">
																		<span>+ เพิ่มเติม</span>
																	</button></span>
															</div>
														</div> -->
													</div>
												</div>
												<hr>
												<div class="row description" id="description">
													<div class="col-md-3 text-muted">
														<div>
															<span>รายละเอียด</span>
														</div>
														<div class="edit-link--hide">
															<i class="icon icon-edit icon-rausch"></i><span>&nbsp;</span><a href="/manage-listing/15417960/basics"><strong> <span>แก้ไข</span> </strong> </a>
														</div>
													</div>
													<div class="col-md-9">
														<div>
															<div class="react-expandable expanded">
																<div class="expandable-content expandable-content-long">
																	<div>
																		<p>
																			<span><?php echo $description ?></span>
																		</p>
																	</div><div class="expandable-indicator"></div>
																</div>
																<span class="react-expandable-trigger-more">
																	<button class="btn-link btn-link--bold" type="button">
																		<span>+ เพิ่มเติม</span>
																	</button></span>
															</div>
														</div>
													</div>
												</div>
												<hr>
												<div class="row react-house-rules" id="house-rules">
													<div class="col-md-3 text-muted">
														<div>
															<span>กฏของรถเช่า</span>
														</div>
														<div class="edit-link--hide">
															<i class="icon icon-edit icon-rausch"></i><span>&nbsp;</span><a href="/manage-listing/15417960/basics"><strong> <span>แก้ไข</span> </strong> </a>
														</div>
													</div>
													<div class="col-md-9">
														<div class="structured_house_rules">
															<!-- <div class="row col-sm-12">
																<span>ไม่ดื่มในรถ</span>
															</div> -->
															<?php
																if($result_ann_cars['pet'] == 0){
															?>
																<div class="row col-sm-12 space-top-1">
																<span>ไม่เหมาะสำหรับสัตว์เลี้ยง</span>
																</div>
															<?php
																}
															?>
															<?php
																if($result_ann_cars['smoking'] == 0){
															?>
																<div class="row col-sm-12 space-top-1">
																<span>ห้ามสูบบุหรี่ภายในรถ</span>
																</div>
															<?php
																}
															?>
															<!-- <div class="row">
																<div class="col-sm-2">
																	<hr class="structured_house_rules__hr">
																</div>
															</div> -->
														</div>

														<!-- <div>
															<div class="react-expandable expanded">
																<div class="expandable-content">
																	<div>
																		<p>
																			<span>- wait</span>
																			<br>
																			<span>- wait</span>
																		</p>
																	</div><div class="expandable-indicator"></div>
																</div><span class="react-expandable-trigger-more">
																	<button class="btn-link btn-link--bold" type="button">
																		<span>+ เพิ่มเติม</span>
																	</button></span>
															</div>
														</div> -->
													</div>
												</div>
												<!-- <hr>
												<div class="row">
													<div class="col-md-3 text-muted">
														<div>
															<span>ว่าง</span>
														</div>
														<div class="edit-link--hide">
															<i class="icon icon-edit icon-rausch"></i><span>&nbsp;</span><a href="/manage-listing/15417960/basics"><strong> <span>แก้ไข</span> </strong> </a>
														</div>
													</div>
													<div class="col-md-9">
														<div class="row">
															<div class="col-md-6">
																<strong>1 วัน</strong> การเช่าขั้นต่ำ
															</div>
															<div class="col-md-6">
																<a id="view-calendar" href="#"><strong> <span>ดูปฏิทิน</span> </strong> </a>
															</div>
														</div>
													</div>
												</div> -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="reviews" class="room-section webkit-render-fix">
								<div class="panel">
									<div class="page-container-responsive space-2">
										<div class="row">
											<div class="col-lg-8">
												<div class="review-wrapper">

													<div class="review-main">
														<div class="review-content">
															<div class="panel-body">
																<h4 class="space-4 text-center-sm"><span>ยังไม่มีความคิดเห็น</span></h4>
																<div>
																	<p>
																		<span>คุณสามารถเขียนความคิดเห็นหลังจากใช้บริการรถเช่านี้</span>
																	</p>
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
						
							<div id="host-profile" class="room-section webkit-render-fix">
								<div class="page-container-responsive space-top-8 space-8">
									<div class="row">
										<div class="col-lg-8">
											<h4 class="space-2 text-center-sm"><span>เจ้าของรถเช่าของคุณ</span></h4>
											<hr class="space-4 space-top-2">
											<div class="row">
												<div class="col-md-3 text-center">
													<div class="media-photo-badge">
														<a target="_blank" href="profile.php?mid=<?php echo $result_ann_cars['member_id'] ;?>" class="media-photo media-round"><img alt="Ed &amp; Tum" class="media-photo media-round" height="90" width="90" data-pin-nopin="true" src="<?php echo $profile_photo ?>?aki_policy=profile_x_medium"
															title="<?php echo $result_ann_cars['member_firstname']; ?>"></a><img src="https://a0.muscache.com/airbnb/static/badges/superhost_photo_badge-a38e6a7d2afe0e01146ce910da3915f5.png" class="superhost-photo-badge" alt="">
													</div>
												</div>
												<div class="col-md-9">
													<h3 class="space-1"><a class="link-reset" target="_blank" href="profile.php?mid=<?php echo $result_ann_cars['member_id'] ;?>"><?php echo $result_ann_cars['member_firstname'] ?></a></h3>
													<div class="row row-condensed space-2">
														<div class="col-md-12 text-muted">
															
															<span><?php echo $result_ann_cars['PROVINCE_NAME'] ?></span><span> · </span><span>เป็นสมาชิกตั้งแต่ <?php echo DateThai($member_create_date); ?></span>
														</div>
													</div>
													<div class="react-expandable expanded">
														<div class="expandable-content expandable-content-long">
															<div>
																<p>
																	<span>wait</span>
																</p>
															</div><div class="expandable-indicator"></div>
														</div><span class="react-expandable-trigger-more">
															<button class="btn-link btn-link--bold" type="button">
																<span>+ เพิ่มเติม</span>
															</button></span>
													</div>
													<!-- <div class="row row-condensed space-2">
														<div class="col-md-6">
															<span><span>อัตราการตอบกลับ:</span><span> </span><strong>100%</strong><small class="response-details text-muted hide"><span>(</span><span>ช่วง 90 วันที่ผ่านมา</span><span>)</span></small></span>
															<div>
																<span>เวลาตอบ:</span><span> </span><strong>ภายในหนึ่งชั่วโมง</strong>
															</div>
														</div>
													</div> -->
													<div class="space-top-3">
														<div class="badge-container space-4">
															<a class="link-reset" rel="nofollow" href="/users/show/13880301#reviews">
															<div class="text-center text-wrap">
																<div class="badge-pill h3">
																	<span class="badge-pill-count">20</span>
																</div>
																<br class="show-sm">
																<span class="badge-pill-label">ความคิดเห็น</span>
															</div></a>
														</div>
														<div class="badge-container space-4">
															<a class="link-reset" rel="nofollow" href="/users/show/13880301#references">
															<div class="text-center text-wrap">
																<div class="badge-pill h3">
																	<span class="badge-pill-count">1</span>
																</div>
																<br class="show-sm">
																<span class="badge-pill-label">การชมเชย</span>
															</div></a>
														</div>
														<div class="badge-container space-4">
															<div>
																<a class="link-reset" rel="nofollow">
																<div class="text-center text-wrap" id="verified-id-icon"><img alt="ยืนยัน" src="https://a1.muscache.com/airbnb/static/badges/verified_badge-6ee370f5ca86a52ed6198fac858ac1f4.png" width="32" height="32">
																	<br class="show-sm">
																	<span class="badge-pill-label">ยืนยัน</span>
																</div></a>
															</div>
														</div>
													</div>
													<div class="">
														<button type="button" class="btn btn-primary btn-small">
															<span>ติดต่อเจ้าของรถเช่า</span>
														</button>
														<div>
															
														</div>
													</div>
												</div>
											</div>

											<!-- <div class="">
											<hr class="space-4 space-top-4">
											<div class="row">
											<div class="col-md-3">
											<div class="text-muted">
											<div class="space-2">
											<span>เจ้าของรถเช่าร่วม</span><span><i name="additional-hosts" id="tooltip-additional-hosts" class="icon icon-additional-hosts icon icon-question additional-hosts-icon text-muted"></i></span>
											</div>
											</div>
											</div>
											<div class="col-md-9">
											<div>
											<ul class="list-unstyled space-0"></ul>
											</div>
											</div>
											</div>
											</div> -->
											<!-- end -->
										</div>
									</div>
								</div>
							</div><!-- end profile -->
						</div>
					</div>

					<div id="neighborhood" class="room-section">
						<!-- <div style="position:relative;" class="page-container-responsive">
							<div class="p3-location--map">
								<div class="panel location-panel">
									<div style="height: 100%; width: 100%; position: relative; background-color: rgb(164, 221, 245); overflow: hidden;">
										
										<div class="" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;">
											<div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;">
												<div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0); will-change: transform;">
													<div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
														<div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
															<div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
																<div style="width: 256px; height: 256px; position: absolute; left: 476px; top: 156px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 220px; top: 156px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 476px; top: -100px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 476px; top: 412px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 732px; top: 156px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 220px; top: 412px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 220px; top: -100px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 732px; top: -100px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 732px; top: 412px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 988px; top: 156px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -36px; top: 156px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -36px; top: -100px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 988px; top: -100px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -36px; top: 412px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 988px; top: 412px;"></div>
															</div>
														</div>
													</div>
													<div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
														<div style="position: absolute; left: 0px; top: 0px; z-index: 30;">
															<div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 476px; top: 156px;">
																	<canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"></canvas>
																</div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 220px; top: 156px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 476px; top: -100px;"></div>
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 476px; top: 412px;">
																	<canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"></canvas>
																</div>
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 732px; top: 156px;">
																	<canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"></canvas>
																</div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 220px; top: 412px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 220px; top: -100px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 732px; top: -100px;"></div>
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 732px; top: 412px;">
																	<canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"></canvas>
																</div>
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 988px; top: 156px;">
																	<canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"></canvas>
																</div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -36px; top: 156px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -36px; top: -100px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 988px; top: -100px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -36px; top: 412px;"></div>
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 988px; top: 412px;">
																	<canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"></canvas>
																</div>
															</div>
														</div>
													</div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div>
													<div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
														<div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
															<div style="position: absolute; left: 476px; top: 156px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i12768!3i7560!4i256!2m3!1e0!2sm!3i366038411!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=114109" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
															<div style="position: absolute; left: 220px; top: 156px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i12767!3i7560!4i256!2m3!1e0!2sm!3i366038411!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=121480" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
															<div style="position: absolute; left: 476px; top: -100px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i12768!3i7559!4i256!2m3!1e0!2sm!3i366038411!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=116732" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
															<div style="position: absolute; left: 476px; top: 412px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i12768!3i7561!4i256!2m3!1e0!2sm!3i366038411!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=19081" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
															<div style="position: absolute; left: 732px; top: 156px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i12769!3i7560!4i256!2m3!1e0!2sm!3i366038399!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=48610" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
															<div style="position: absolute; left: 220px; top: 412px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i12767!3i7561!4i256!2m3!1e0!2sm!3i366038411!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=26452" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
															<div style="position: absolute; left: 220px; top: -100px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i12767!3i7559!4i256!2m3!1e0!2sm!3i366038411!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=124103" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
															<div style="position: absolute; left: 732px; top: -100px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i12769!3i7559!4i256!2m3!1e0!2sm!3i366038399!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=51233" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
															<div style="position: absolute; left: 732px; top: 412px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i12769!3i7561!4i256!2m3!1e0!2sm!3i366038399!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=84653" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
															<div style="position: absolute; left: 988px; top: 156px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i12770!3i7560!4i256!2m3!1e0!2sm!3i366038411!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=11434" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
															<div style="position: absolute; left: -36px; top: 156px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i12766!3i7560!4i256!2m3!1e0!2sm!3i366038411!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=128851" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
															<div style="position: absolute; left: -36px; top: -100px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i12766!3i7559!4i256!2m3!1e0!2sm!3i366038411!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=403" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
															<div style="position: absolute; left: 988px; top: -100px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i12770!3i7559!4i256!2m3!1e0!2sm!3i366038399!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=87000" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
															<div style="position: absolute; left: -36px; top: 412px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i12766!3i7561!4i256!2m3!1e0!2sm!3i366038411!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=33823" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
															<div style="position: absolute; left: 988px; top: 412px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i14!2i12770!3i7561!4i256!2m3!1e0!2sm!3i366038411!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=47477" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
														</div>
													</div>
												</div>
												<div style="position: absolute; left: 0px; top: 0px; z-index: 2; width: 100%; height: 100%; transition-duration: 0.3s; opacity: 0; display: none;" class="gm-style-pbc">
													<p class="gm-style-pbt">
														ใช้ 2 นิ้วเพื่อเลื่อนแผนที่
													</p>
												</div><div style="position: absolute; left: 0px; top: 0px; z-index: 3; width: 100%; height: 100%;"></div>
												<div style="position: absolute; left: 0px; top: 0px; z-index: 4; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);">
													<div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
													<div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
														<div style="z-index: -202; cursor: pointer; display: none;">
															<div style="width: 30px; height: 27px; overflow: hidden; position: absolute;"><img src="https://maps.gstatic.com/mapfiles/undo_poly.png" draggable="false" style="position: absolute; left: 0px; top: 0px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 90px; height: 27px;">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
												<a target="_blank" href="https://maps.google.com/maps?ll=13.73869,100.550249&amp;z=14&amp;t=m&amp;hl=th&amp;gl=US&amp;mapclient=apiv3" title="คลิกเพื่อดูพื้นที่นี้ใน Google Maps " style="position: static; overflow: visible; float: none; display: inline;">
												<div style="width: 66px; height: 26px; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
												</div></a>
											</div>
											<div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 365px; top: 234px;">
												<div style="padding: 0px 0px 10px; font-size: 16px;">
													ข้อมูลแผนที่
												</div>
												<div style="font-size: 13px;">
													ข้อมูลแผนที่ ©2016 Google
												</div>
												<div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
												</div>
											</div>
											<div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 334px; bottom: 0px; width: 128px;">
												<div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px;">
													<div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
														<div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
													</div>
													<div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
														<a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">ข้อมูลแผนที่</a><span>ข้อมูลแผนที่ ©2016 Google</span>
													</div>
												</div>
											</div>
											<div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
												<div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
													ข้อมูลแผนที่ ©2016 Google
												</div>
											</div>
											<div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; -webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 133px; bottom: 0px;">
												<div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
													<div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
												</div>
												<div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
													<a href="https://www.google.com/intl/th_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">ข้อกำหนดในการใช้งาน</a>
												</div>
											</div>
											<div style="width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 75px; right: 0px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/sv5.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 112px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
											</div>
											<div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
												<div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
													<div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
												</div>
												<div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
													<a target="_new" title="รายงานข้อผิดพลาดในแผนที่ถนนหรือภาพถ่ายไปยัง Google" href="https://www.google.com/maps/@13.73869,100.5502489,14z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">รายงานข้อผิดพลาดของแผนที่</a>
												</div>
											</div>
											<div class="gmnoprint gm-bundled-control" draggable="false" controlwidth="28" controlheight="55" style="margin: 10px; -webkit-user-select: none; position: absolute; right: 28px; top: 0px;">
												<div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 0px;">
													<div draggable="false" style="-webkit-user-select: none; box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;">
														<div title="ขยาย" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
															<div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;">
															</div>
														</div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div>
														<div title="ย่อ" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;">
															<div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div draggable="false" class="gm-style-cc" style="position: absolute; -webkit-user-select: none; height: 14px; line-height: 14px; right: 238px; bottom: 0px;">
												<div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
													<div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
												</div>
												<div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
													<span>500 ม.&nbsp;</span>
													<div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 54px;">
														<div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"></div><div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); left: 0px; bottom: 0px;"></div><div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div><div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);"></div><div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<ul id="guidebook-recommendations" class="hide">
									<li class="user-image">
										<a href="profile?mid=<?php $result_ann_cars['member_id'] ;?>"><img alt="Adthasid" data-pin-nopin="true" height="90" src="<?php echo $profile_photo?>?aki_policy=profile_x_medium" title="Adthasid" width="90"></a>
									</li><li href="" class="info" data-neighborhood-id="3300"></li>
								</ul>
								<div id="hover-card" class="panel">
									<div>
										<div class="sliding-carousel">
											<div class="carousel-view" style="height: 286px;">
												<ul class="carousel-item-list list-unstyled" style="left: 0px; width: 1575px;">
													<li class="carousel-item">
														<div class="carousel-image media-photo media-photo-block">
															<div class="media-cover media-cover-dark" style="background-image:url('https://a0.muscache.com/locations/uploads/photo/image/35258/558_3642_0_2800_three_UpperSukhumvit_Lewin_27.jpg');"></div>
															<div class="title text-center row row-table text-contrast space-top-3">
																<div class="col-8 col-offset-2 col-middle">
																	<div class="h3">
																		<a href="http://th.airbnb.com/locations/bangkok/upper-sukhumvit" target="_blank" class="link-reset">สุขุมวิทตอนปลาย</a>
																	</div>
																	<p>
																		ตึกสูงสุดชิคทอดเรียงไปตามถนนสายนี้
																	</p>
																</div>
															</div>
															<div class="header row row-table text-center text-contrast">
																<div class="col-12 col-center">
																	<div class="h6 text-contrast">
																		<span>บริเวณรถเช่า</span>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="carousel-item">
														<div class="carousel-image media-photo media-photo-block">
															<div class="media-cover" style="background-image:url('https://a0.muscache.com/locations/uploads/photo/image/19810/558_3642_0_2800_three_UpperSukhumvit_Lewin_03.jpg');"></div>
														</div>
													</li>
													<li class="carousel-item">
														<div class="carousel-image media-photo media-photo-block">
															<div class="media-cover" style="background-image:url('https://a0.muscache.com/locations/uploads/photo/image/34886/558_3642_0_2800_three_UpperSukhumvit_Lewin_33.jpg');"></div>
														</div>
													</li>
													<li class="carousel-item">
														<div class="carousel-image media-photo media-photo-block">
															<div class="media-cover" style="background-image:url('https://a1.muscache.com/locations/uploads/photo/image/19842/558_3642_0_2800_three_UpperSukhumvit_Lewin_40.jpg');"></div>
														</div>
													</li>
													<li class="carousel-item">
														<div class="carousel-image media-photo media-photo-block">
															<div class="media-cover" style="background-image:url('https://a1.muscache.com/locations/uploads/photo/image/19817/558_3642_0_2800_three_UpperSukhumvit_Lewin_38.jpg');"></div>
														</div>
													</li>
												</ul>
											</div>
											<div class="carousel-chevron left">
												<i class="icon icon-chevron-left icon-gray icon-size-2"></i>
											</div>
											<div class="carousel-chevron right">
												<i class="icon icon-chevron-right icon-gray icon-size-2"></i>
											</div>
										</div>
										<div class="panel-body">
											<div class="row space-2">
												<div class="col-12 text-center">
													<i class="dot icon-size-1 dot-ebisu"></i><i class="dot icon-size-1 "></i><i class="dot icon-size-1 "></i><i class="dot icon-size-1 "></i><i class="dot icon-size-1 "></i>
												</div>
											</div>
											<div class="tags text-center">
												พัฒนาใหม่ · อพาร์ทเม้นท์ · ราคาสูง · เติบโตเร็ว · สวนเบญจสิริ · นานาชาติ
											</div>
										</div>
									</div>
									<div class="panel-body">
										<div class="text-center">
											ตำแหน่งที่ตั้งของรถเช่า
										</div>
										<div class="text-center">
											<span class="listing-location"><a class="text-muted" href="/s/%E0%B8%81%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%80%E0%B8%97%E0%B8%9E--%E0%B9%84%E0%B8%97%E0%B8%A2"><span>กรุงเทพ,</span></a></span><span class="listing-location"><a class="text-muted" href="/s/Krung-Thep-Maha-Nakhon--%E0%B9%84%E0%B8%97%E0%B8%A2"><span>Krung Thep Maha Nakhon,</span></a></span><span class="listing-location"><a class="text-muted" href="/s/%E0%B9%84%E0%B8%97%E0%B8%A2"><span>ไทย</span></a></span>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
					<!-- map -->

					<div id="similar-listings">
						<div class="space-2 space-top-4">
							<div class="page-container-responsive the-one-thing sliding-carousel-container">
								<h4 class="space-4 text-center-sm">รถเช่าที่คล้ายกัน</h4>
								<div class="sliding-carousel similar-listings">
									<div class="carousel-view" style="height: 293px;">
										<ul class="carousel-item-list list-unstyled row" style="left: 0px; width: 8640px;">
											<li class="carousel-item page-container-responsive">
												<div class="col-md-4">
													<div class="listing" itemscope="" itemtype="http://schema.org/Enumeration">
														<div class="panel-image listing-img listing-img--hide-carousel-controls">
															<div>
																<a href="#" class="media-photo media-cover" target="listing_8752630">
																<div class="listing-img-container media-cover text-center">
																	<img src="img/suv.jpg?aki_policy=x_medium" class="img-responsive-height" alt="Title Name - อเนกประสงค์">
																	<img src="https://a1.muscache.com/im/pictures/111436697/e0a0549a_original.jpg?aki_policy=x_medium" class="img-responsive-height hide" alt="Title Name - กระบะ">
																</div></a>
																<a href="#" target="listing_8752630">
																<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
																	<div class="price-label">
																		<span> <sup class="currency-prefix">฿</sup><span class="price-amount">1992</span><span> </span></span>
																	</div>
																</div></a>
															</div>
														</div>
														<div class="panel-body panel-card-section">
															<div class="media">
																<a href="#" class="pull-right media-photo-badge card-profile-picture card-profile-picture-offset">
																<div class="media-photo media-round"><img src="img/profile.jpg?aki_policy=profile_medium" alt="Bruno">
																</div> </a>
																<h3 title="Title Name" class="h5 listing-name text-truncate space-top-1"><a href="#" target="listing_8752630" class="text-normal"><span class="listing-name--display">Title Name</span></a></h3>
																<a href="#" target="listing_8752630" class="text-normal link-reset">
																<div class="text-muted listing-location text-truncate">
																	<div class="">
																		<span><span>รถอเนกประสงค์</span></span>
																	</div>
																</div> </a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="listing" itemscope="" itemtype="http://schema.org/Enumeration">
														<div class="panel-image listing-img listing-img--hide-carousel-controls">
															<div>
																<a href="#" class="media-photo media-cover" target="listing_8752630">
																<div class="listing-img-container media-cover text-center">
																	<img src="img/4.jpg?aki_policy=x_medium" class="img-responsive-height" alt="Title Name - บ้าน/อพาร์ทเมนท์ทั้งหลัง">
																	<img src="https://a1.muscache.com/im/pictures/111436697/e0a0549a_original.jpg?aki_policy=x_medium" class="img-responsive-height hide" alt="Title Name - บ้าน/อพาร์ทเมนท์ทั้งหลัง">
																</div></a>
																<a href="#" target="listing_8752630">
																<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
																	<div class="price-label">
																		<span> <sup class="currency-prefix">฿</sup><span class="price-amount">1992</span><span> </span></span>
																	</div>
																</div></a>
															</div>
														</div>
														<div class="panel-body panel-card-section">
															<div class="media">
																<a href="#" class="pull-right media-photo-badge card-profile-picture card-profile-picture-offset">
																<div class="media-photo media-round"><img src="img/profile.jpg?aki_policy=profile_medium" alt="Bruno">
																</div> </a>
																<h3 title="Title Name" class="h5 listing-name text-truncate space-top-1"><a href="#" target="listing_8752630" class="text-normal"><span class="listing-name--display">Title Name</span></a></h3>
																<a href="#" target="listing_8752630" class="text-normal link-reset">
																<div class="text-muted listing-location text-truncate">
																	<div class="">
																		<span><span>รถกระบะ</span></span>
																	</div>
																</div> </a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4">
													<div class="listing" itemscope="" itemtype="http://schema.org/Enumeration">
														<div class="panel-image listing-img listing-img--hide-carousel-controls">
															<div>
																<a href="#" class="media-photo media-cover" target="listing_8752630">
																<div class="listing-img-container media-cover text-center">
																	<img src="img/van.jpg?aki_policy=x_medium" class="img-responsive-height" alt="Title Name - บ้าน/อพาร์ทเมนท์ทั้งหลัง">
																	<img src="https://a1.muscache.com/im/pictures/111436697/e0a0549a_original.jpg?aki_policy=x_medium" class="img-responsive-height hide" alt="Title Name - บ้าน/อพาร์ทเมนท์ทั้งหลัง">
																</div></a>
																<a href="#" target="listing_8752630">
																<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
																	<div class="price-label">
																		<span> <sup class="currency-prefix">฿</sup><span class="price-amount">1992</span><span> </span></span>
																	</div>
																</div></a>
															</div>
														</div>
														<div class="panel-body panel-card-section">
															<div class="media">
																<a href="#" class="pull-right media-photo-badge card-profile-picture card-profile-picture-offset">
																<div class="media-photo media-round"><img src="https://a2.muscache.com/im/users/1113464/profile_pic/1444381640/original.jpg?aki_policy=profile_medium" alt="Bruno">
																</div> </a>
																<h3 title="Title Name" class="h5 listing-name text-truncate space-top-1"><a href="#" target="listing_8752630" class="text-normal"><span class="listing-name--display">Title Name</span></a></h3>
																<a href="#" target="listing_8752630" class="text-normal link-reset">
																<div class="text-muted listing-location text-truncate">
																	<div class="">
																		<span><span>รถตู้</span></span>
																	</div>
																</div> </a>
															</div>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<div class="carousel-chevron left hide">
										<i class="icon icon-chevron-left icon-gray icon-size-2"></i>
									</div>
									<div class="carousel-chevron right">
										<i class="icon icon-chevron-right icon-gray icon-size-2"></i>
									</div>
								</div>
								<!-- คล้ายกัน -->

							</div>
						</div>
					</div>
					<!-- คล้ายกันจบ -->

				</div>

			</div>
		</main>

		<script defer="defer" src="https://a1.muscache.com/airbnb/static/packages/libs_jquery.bundle-7ab814581bff9b7bc04e.js" type="text/javascript"></script>

		<script defer="defer" src="https://a2.muscache.com/airbnb/static/packages/core.bundle-22abb006d78d6dcf01a2.js" type="text/javascript"></script>

		<script defer="defer" src="https://a0.muscache.com/airbnb/static/packages/p3.bundle-77c32b0ec7881da174ce.js" type="text/javascript"></script><script defer="defer" src="https://a1.muscache.com/airbnb/static/packages/perimeterx-b3072e564f1a9cd5888443b5d12dd00c.js" type="text/javascript"></script>

		<?php if(isset($_GET['preview'])) {
			if($result_ann_cars['member_id'] == $_SESSION['member_id']){
		?>
			<div class="preview-footer footer-surround footer-container">
			<div class="fixed-container bg-hof text-contrast">
				<div class="page-container-responsive">
					<div class="va-container va-container-v va-container-h">
						<span class="h5 va-middle hide-sm"> นี่เป็นตัวอย่างการแสดงรถเช่าของคุณ </span>

						<div class="va-middle text-right">
							<button type="button" onclick="self.close()" class="btn btn-soft-dark btn-large" id="dismiss-preview-popup">ตกลง ดำเนินการต่อ</button>
						</div>
					</div>
				</div>
			</div>
			</div>
		<?php
			}
		}?>
		
		

		<div>
			<div>
				<div class="SlideshowModal__slideshow-preload hide"><img src="https://a2.muscache.com/im/pictures/b3c359cd-c2e1-41ca-9dcd-2a9f9f1856f5.jpg?aki_policy=x_large" alt="">
				</div>
				<div class="SlideshowModal__slideshow-preload hide"><img src="https://a2.muscache.com/im/pictures/2cb713a5-2c80-423b-82e4-f20938845b97.jpg?aki_policy=small" alt=""><img src="https://a2.muscache.com/im/pictures/b3c359cd-c2e1-41ca-9dcd-2a9f9f1856f5.jpg?aki_policy=small" alt="">
				</div>
			</div>
		</div>
		<?php
		$sql_select_calendar = "SELECT * FROM calendars WHERE member_id = '" . $result_ann_cars['member_id'] . "'";
		$query_calendar = mysqli_query($connect, $sql_select_calendar);
		
		$date = array();
		while ($result_date = mysqli_fetch_assoc($query_calendar)) {
			$date_expire = $result_date['date'];
			$expire = strtotime($date_expire);
			$today = strtotime(date("Y-m-d"));

			if ($today <= $expire && $result_date['status'] == 0) {
				array_push($date, $date_expire);
			} else {

			}
		}
		?>

	</body>

  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script  type="text/javascript">
  		$(document).ready(function(){
  		
  		function daysDifference(d0, d1) {
  		var diff = new Date(+d1).setHours(12) - new Date(+d0).setHours(12);
  			return Math.round(diff/8.64e7);
		}
		
		
		
  		$("#booking-form").change(function (e){
  			var vFrom = $("#from").val();
  			var vTo = $("#to").val();
  			if(vFrom.length > 5 && vTo.length > 5){
  			$("#book-it__subtotal").removeClass("hide");
  			$("#btn-booking").removeAttr("disabled");
  			var day1 = vFrom.slice(6) + "," + vFrom.slice(3,5) + "," + vFrom.slice(0,2);
  			var day2 = vTo.slice(6) + "," + vTo.slice(3,5) + "," + vTo.slice(0,2);
  			var d0 = new Date(day1);
			var d1 = new Date(day2);
			var differ = daysDifference(d0,d1);
			
			if(differ >= 1){
				console.log(differ+1 + ' day');
				
				var formatter = new Intl.NumberFormat('en-US', {
  					style: 'currency',
  					currency: 'THB',
  					minimumFractionDigits: 0,
				});
				
				var differday = differ+1;
				document.getElementById("day").innerHTML = differday ;
				var price_value =  $("#price-value").val();
				var price_process = price_value*differday;
				var price_slice = formatter.format(price_process).slice(3,100);
				document.getElementById("price-process").innerHTML = '฿'+price_slice;
				document.getElementById("total-price").innerHTML = '฿'+price_slice;
			}
			
  		}
  		});
  		
  		
  		
  			
  		var day = new Array(<?php echo json_encode($date); ?>
			);

			$(function() {
				var d = new Date();
				var dateFormat = "dd/mm/yy",
				    from = $("#from").datepicker({
				    dateFormat : 'dd/mm/yy',
					showButtonPanel : true,
					minDate : 0,
					maxDate : '+3M',
					beforeShowDay : function(date) {
						var datestring = jQuery.datepicker.formatDate('yy-mm-dd', date);
						var hindex = $.inArray(datestring);
						if (hindex > -1) {
							return [true];
						}
						var aindex = $.inArray(datestring, day[0]);
						return [aindex == -1]
					},
					beforeShow : function(input) {
						setTimeout(function() {
							var buttonPane = $(input).datepicker("widget").find(".ui-datepicker-buttonpane");

							var btn = $('<button type="button" class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all">Clear</button>');
							btn.unbind("click").bind("click", function() {
								$.datepicker._clearDate(input);
								$("#btn-booking").attr("disabled","disabled");
							});

							btn.appendTo(buttonPane);

						}, 1);
					}
				}).on("change", function() {
					to.datepicker("option", "minDate", getDate(this));
				}),
					
				    to = $("#to").datepicker({
				    dateFormat : 'dd/mm/yy',
					showButtonPanel : true,
					minDate : 0,
					maxDate : '+3M',
					beforeShowDay : function(date) {
						var datestring = jQuery.datepicker.formatDate('yy-mm-dd', date);
						var hindex = $.inArray(datestring);
						if (hindex > -1) {
							return [true];
						}
						var aindex = $.inArray(datestring, day[0]);
						return [aindex == -1]
					},
					beforeShow : function(input) {
						setTimeout(function() {
							var buttonPane = $(input).datepicker("widget").find(".ui-datepicker-buttonpane");

							var btn = $('<button type="button" class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all">Clear</button>');
							btn.unbind("click").bind("click", function() {
								$.datepicker._clearDate(input);
								$("#btn-booking").attr("disabled","disabled");
							});

							btn.appendTo(buttonPane);

						}, 1);
					}
				}).on("change", function() {
					from.datepicker("option", "maxDate", getDate(this));
					$("#btn-booking").removeAttr("disabled");
				});

				function getDate(element) {
					var date;
					try {
						date = $.datepicker.parseDate(dateFormat, element.value);
					} catch(error) {
						date = null;
					}
					return date;
				}
				   

			});
	
			
		});
  		
  </script>
</html>
