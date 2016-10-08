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

		<title>Start</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">
		
		<link rel="stylesheet" href="css/host.css">
		
		<link rel="stylesheet" href="css/adthasid.css">
		
		

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	</head>

	<body class="with-new-header ">

		<div id="header" class="airbnb-header new  logged_in">
			<div class="header--sm show-sm" aria-hidden="true">
				<a href="#" aria-label="หน้าแรก" data-prevent-default="" class="link-reset burger--sm"> <i class="icon icon-reorder icon-rausch"></i> <span class="screen-reader-only"> Airbnb </span> </a>
				<div class="title--sm text-center">
					<button class="btn btn-block search-btn--sm search-modal-trigger " style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
						<i class="icon icon-search icon-gray"></i>
						<span class="search-placeholder--sm"> ไปที่ไหน </span>
					</button>
					<a href="/" class="header-belo hide"> <span class="screen-reader-only"> Rentcnd </span> </a>
				</div>
				<div class="action--sm"></div>
				<nav class="nav--sm" role="navigation"></nav>
				<div class="search-modal-container"></div>
			</div>

			<header class="regular-header clearfix hide-sm" id="new-header" role="banner">

				<div class="comp pull-left">
					<a href="/" class="hdr-btn link-reset belo-container" aria-label="Rentcnd"> Rendcnd </a>
				</div>

				<div class="comp pull-right show-login">
					<a class="no-crawl hdr-btn link-reset header-avatar-trigger needsclick" rel="nofollow" href="/dashboard" data-href="/dashboard" data-href-host="/trips"> <span class="value_name margin-right--tiny hide-md">I'Art</span>
					<div class="media-photo media-round user-profile-image header-icon icon-profile-alt-gray"><img width="28" height="28" src="https://a2.muscache.com/im/pictures/aa1d894d-eff1-4c2f-854d-d198b7b5f544.jpg?aki_policy=profile_small" alt="">
					</div> </a>

					<div class="panel  drop-down-menu avatar-tooltip--new">
						<div class="panel-header no-border hide-lg">
							<strong><span class="value_name">I'Art</span></strong>
						</div>
						<a href="/trips" class="js-your-trips-item panel-body link-reset hover-item no-crawl hide">
						<div class="hover-item__content">
							การเดินทางของคุณ
						</div> </a>
						<a href="/city-hosts?source=hdr" class="hide city-host-button-md panel-body link-reset hover-item">
						<div class="hover-item__content">
							City Hosts
							<img class="beta-badge" src="https://a0.muscache.com/airbnb/static/magical_trips/guest/beta-badge-56a0d5bc185adfe79992a46991964070.png" alt="Beta" height="18">
						</div> </a><a href="/wishlists/my" class="js-wishlists-item panel-body link-reset hover-item no-crawl hide">
						<div class="hover-item__content">
							Wish List
						</div> </a>
						<a href="/users/edit" class=" panel-body link-reset hover-item no-crawl">
						<div class="hover-item__content">
							แก้ไขข้อมูลส่วนตัว
						</div> </a>
						<a href="/invite?r=3" class="travel-credit-item panel-body link-reset hover-item">
						<div class="hover-item__content">
							เชิญเพื่อน
						</div> </a><a href="/users/notifications" class=" panel-body link-reset hover-item no-crawl">
						<div class="hover-item__content">
							การตั้งค่าบัญชี
						</div> </a>
						<a href="/business-travel?s=nav" class="business-travel  panel-body link-reset hover-item">
						<div class="hover-item__content">
							การเดินทางเพื่อธุรกิจ
						</div> </a><a href="/things-to-do" class="js-guidebook-item panel-body link-reset hover-item">
						<div class="hover-item__content">
							คู่มือนำเที่ยวของฉัน
						</div> </a><a href="/logout" class=" panel-body link-reset hover-item no-crawl">
						<div class="hover-item__content">
							ออกจากระบบ
						</div> </a>
					</div>
				</div>

				<div class="comp pull-right">
					<a data-login-modal="" href="/login" data-redirect="redirect_params[action]=host&amp;redirect_params[controller]=info" class="hdr-btn link-reset"> เข้าสู่ระบบ </a>
				</div>
				<div class="comp pull-right">
					<a data-signup-modal="" data-header-view="true" href="/signup_login" data-redirect="redirect_params[action]=host&amp;redirect_params[controller]=info" class="hdr-btn link-reset"> ลงทะเบียน </a>
				</div>

				<div class="comp pull-right show-travel-credit js-travel-credit-menu-container hide">
					<a class="needsclick no-crawl hdr-btn link-reset js-travel-credit-comp" href="/invite?r=3" rel="nofollow" data-href="/invite?r=3">
					<div class="gift-icon-container text-center">
						<span class="margin-right--tiny hide-md">เครดิต</span>
						<i class="header-icon js-travel-credit-icon icon-gift-alt-gray"> <i class="alert-count js-travel-credit-unread-count text-center fade in">1</i> </i>
					</div> </a>

					<div class="panel  drop-down-menu travel-credit-dropdown"></div>
				</div>

				<div class="comp pull-right">
					<a class="needsclick host-icon-wrapper no-crawl hdr-btn link-reset js-host-menu-icon" href="/dashboard" rel="nofollow" data-href="/dashboard"> <span class="hide-md margin-right--tiny"> เจ้าของที่พัก </span> <i class="header-icon host-icon icon-home-gray js-host-icon"> <i class="alert-count js-host-item-count listing-count text-center fade">0</i> </i> </a>

					<div class="panel  drop-down-menu host-tooltip--new">
						<div class="panel-header no-border hide-lg">
							<span><strong>เจ้าของที่พัก</strong></span>
						</div>
						<div class="hover-item panel-body relist-your-space hide">
							<a href="#" class="link-reset click-area">
							<div class="cta-container va-container va-container-v">
								<div class="va-middle">
									<div class="cta-text">
										ลงประกาศที่พักให้เสร็จ
									</div>
									<div class="cta-text-v3-reactivate hide">
										เปิดใช้งานบัญชีใหม่
									</div>
									<div class="progress">
										<div class="progress-bar"></div>
									</div>
								</div>
							</div> </a>
							<div class="close-button hide">
								<a href="#" class="alert-close"></a>
							</div>
						</div>

						<a href="/dashboard" class=" panel-body link-reset hover-item origin-item js-host-dashboard-link no-crawl">
						<div class="hover-item__content">
							แดชบอร์ด
							<i class="alert-count js-pending-request-count--inline text-center fade">0</i>
						</div> </a>
						<a href="/rooms" class=" panel-body link-reset hover-item origin-item js-host-calendar-link hide no-crawl">
						<div class="hover-item__content">
							ปฏิทิน

						</div> </a>
						<a href="/rooms" class=" panel-body link-reset hover-item origin-item js-host-manage-listings-link no-crawl">
						<div class="hover-item__content">
							จัดการที่พัก
							<i class="alert-count listing-count listing-count--inline text-center fade">0</i>
						</div> </a>
						<a href="/rooms/new" class=" panel-body link-reset hover-item origin-item js-host-list-your-space-link">
						<div class="hover-item__content">
							ลงประกาศที่พัก

						</div> </a><a href="/my_reservations" class=" panel-body link-reset hover-item origin-item js-host-my-reservations-link no-crawl">
						<div class="hover-item__content">
							การจองของคุณ

						</div> </a>
						<a href="/users/transaction_history" class=" panel-body link-reset hover-item origin-item js-host-transaction-history-link no-crawl">
						<div class="hover-item__content">
							ประวัติการทำธุรกรรม

						</div> </a>
						<a href="/refer?r=41" class=" panel-body link-reset hover-item origin-item hide item-refer-hosts js-host-refer-hosts-link no-crawl">
						<div class="hover-item__content">
							ชวนคนอื่นมาเป็นเจ้าของที่พัก
							<span class="label label-pink label-new">ใหม่</span>
						</div> </a>
						<a href="/users/reviews" class=" panel-body link-reset hover-item origin-item js-host-reviews-link no-crawl">
						<div class="hover-item__content">
							ความคิดเห็น

						</div> </a>
						<a href="/host-assist" class=" panel-body link-reset hover-item origin-item hide item-host-assist js-host-assist-link no-crawl">
						<div class="hover-item__content">
							เจ้าของที่พักช่วย

						</div> </a>
						<a href="/hospitality" class=" panel-body link-reset hover-item origin-item js-host-hospitality-link">
						<div class="hover-item__content">
							การต้อนรับ

						</div> </a>
					</div>
				</div>

				<div class="comp pull-right hide-host comp-become-a-host">
					<a class="hdr-btn link-reset lys-link js-become-a-host-link comp-become-a-host__link" href="/rooms/new?from_nav=1&amp;link=1"> <span class="btn btn-small btn-become-a-host"> สร้างรายได้จากการขับรถ</span> </a>
				</div>

				<div class="comp pull-left back-to-search-results-wrapper"></div>

				<div class="comp search-bar-wrapper" role="search">
					<form action="/s" class="search-form" data-reactid=".0">
						<div data-reactid=".0.0">
							<div class="search-bar" data-reactid=".0.0.0">
								<i class="header-icon icon-search-alt-gray search-icon" aria-hidden="true" data-reactid=".0.0.0.0"></i><label class="screen-reader-only" for="header-search-form" aria-hidden="true" data-reactid=".0.0.0.1">ไปที่ไหน</label>
								<input type="text" placeholder="ไปที่ไหน" autocomplete="off" name="location" id="header-search-form" class="location" value="" data-reactid=".0.0.0.2">
								<input type="hidden" name="source" value="hdr" data-reactid=".0.0.0.4">
							</div><div id="header-search-settings" class="panel search-settings header-menu" data-reactid=".0.0.1"></div>
						</div>
					</form>
				</div>

			</header>

		</div>

		<script src="https://a0.muscache.com/airbnb/static/packages/header_cookie.bundle-cbed4f8007c1e3c328f8.js" type="text/javascript"></script>

		<main id="site-content" role="main">

			<div id="slash-host-container">
				<div data-hypernova-key="slash_hostbundlejs">
					<div class="slash-host-container" data-reactid=".26cmo4oabcw" data-react-checksum="202664992">
						<div data-reactid=".26cmo4oabcw.0">
							<div class="subnav-container" data-reactid=".26cmo4oabcw.0.0">
								<div class="subnav hide-sm" data-sticky="true" aria-hidden="true" data-transition-at="#header-sign-up-button" data-reactid=".26cmo4oabcw.0.0.0">
									<div class="page-container-responsive" data-reactid=".26cmo4oabcw.0.0.0.0">
										<div class="pull-right hide-sm" data-reactid=".26cmo4oabcw.0.0.0.0.1">
											<a href="/rooms/new?from_sh=1" class="btn btn-large btn-primary btn-block" data-reactid=".26cmo4oabcw.0.0.0.0.1.0"><span data-reactid=".26cmo4oabcw.0.0.0.0.1.0.0">เริ่มเป็นเจ้าของที่พัก</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="header" data-reactid=".26cmo4oabcw.1">
							<div class="header__photo " data-reactid=".26cmo4oabcw.1.0"></div>
							<div class="page-container-responsive header-card" data-reactid=".26cmo4oabcw.1.1">
								<div class="col-sm-12 col-md-6 col-lg-5 space-md-8 space-md-top-8 text-contrast bg-soft pull-right">
									<div class="row space-top-8 space-8" data-reactid=".26cmo4oabcw.1.1.0.0">
										<div class="col-sm-offset-1 col-sm-10 col-lg-9 col-left" data-reactid=".26cmo4oabcw.1.1.0.0.0">
											<h1 class="header-card__title" data-reactid=".26cmo4oabcw.1.1.0.0.0.0"><strong>ลงประกาศให้เช่ารถพร้อมบริการขับรถที่ Rentcnd</strong></h1>
											<p class="header-card__body space-top-4 space-4">
												สร้างรายได้ด้วยการขับรถของคุณเอง
											</p><a href="new.php" class="header-card__button btn btn-primary btn-large" id="header-sign-up-button"><span>เริ่มเป็นเจ้าของรถเช่า</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="space-top-6" data-reactid=".26cmo4oabcw.4">
							<div class="page-container-responsive" data-reactid=".26cmo4oabcw.4.0">
								<div class="text-branding text-center h4 how-hosting-works__title text-muted" data-reactid=".26cmo4oabcw.4.0.0">
									<span data-reactid=".26cmo4oabcw.4.0.0.0">วิธีการทำงานของการให้เช่ารถพร้อมคนขับ</span>
								</div>
								<div class="how-hosting-works__section space-top-6" data-reactid=".26cmo4oabcw.4.0.1:$0">
									<div data-reactid=".26cmo4oabcw.4.0.1:$0.0">
										<span class="how-hosting-works__section-label" data-reactid=".26cmo4oabcw.4.0.1:$0.0.0">1</span>
									</div><h2 data-reactid=".26cmo4oabcw.4.0.1:$0.1"><strong data-reactid=".26cmo4oabcw.4.0.1:$0.1.0">สมัครเป็นเจ้าของรถเช่า</strong></h2>
									<div class="how-hosting-works__section-sub-title" data-reactid=".26cmo4oabcw.4.0.1:$0.2">
										เริ่มโดยสร้างประกาศรถเช่าของคุณ ซึ่งเหมือนหน้าโปรไฟล์สำหรับรถเช่าของคุณ
									</div>
									<div class="row" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0">
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$0">
											<div data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$0.0">
												<i class="fa fa-car icon-size-1 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$0.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$0.0.1">
													รถของคุณมีอะไร?
												</div>
												<div class="info-item__body" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$0.0.2">
													คุณจะต้องกรอกรายละเอียด ถ่ายและอัพโหลดรูปและกำหนดราคา บริการรถเช่าพร้อมคนขับของคุณเพื่อช่วยให้ผู้จะใช้บริการรู้ว่าบริการของคุณมีราคาเท่าไร
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$1">
											<div data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$1.0">
												<i class="fa fa-users icon-size-2 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$1.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$1.0.1">
													ใครสามารถจองรถเช่าได้บ้าง
												</div>
												<div class="info-item__body" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$1.0.2">
													คุณตั้งค่าสถานะว่างและกฎของที่พักสำหรับที่พักของคุณ การควบคุมของเจ้าของที่พักและการตั้งค่าปฏิทินสามารถช่วยทำให้การให้เช่าที่พักง่ายขึ้น
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<div class="how-hosting-works__section space-top-6" data-reactid=".26cmo4oabcw.4.0.1:$1">
									<div data-reactid=".26cmo4oabcw.4.0.1:$1.0">
										<span class="how-hosting-works__section-label" data-reactid=".26cmo4oabcw.4.0.1:$1.0.0">2</span>
									</div><h2 data-reactid=".26cmo4oabcw.4.0.1:$1.1"><strong data-reactid=".26cmo4oabcw.4.0.1:$1.1.0">ผู้ใช้บริการหารถเช่าของคุณและจอง</strong></h2>
									<div class="how-hosting-works__section-sub-title" data-reactid=".26cmo4oabcw.4.0.1:$1.2">
										คุณจะได้รับการแจ้งเตือนเมื่อมีคนขอจองใช้บริการของคุณ
									</div>
									<div class="row" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0">
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$0">
											<div data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$0.0">
												<i class="fa fa-mobile icon-size-2 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$0.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$0.0.1">
													ติดต่อกับผู้ใช้บริการของคุณ
												</div>
												<div class="info-item__body">
													เราจะทำการส่งข้อมูลการติดต่อระหว่างคุณกับผู้ใช้บริการของคุณเพื่อใช้ในการติดต่อสื่อสารกัน
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$1">
											<div data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$1.0">
												<i class="fa fa-suitcase icon-size-2 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$1.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$1.0.1">
													วางแผนสำหรับการเดินทาง
												</div>
												<div class="info-item__body" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$1.0.2">
													คุณเตรียมพร้อมสำหรับการเดินทางไปบริการขับรถให้ลูกค้าของคุณ คุณเลือกว่าจะบริการแบบไหนให้ลูกค้าประทับใจ
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="how-hosting-works__section space-top-6" data-reactid=".26cmo4oabcw.4.0.1:$2">
									<div data-reactid=".26cmo4oabcw.4.0.1:$2.0">
										<span class="how-hosting-works__section-label" data-reactid=".26cmo4oabcw.4.0.1:$2.0.0">3</span>
									</div><h2 data-reactid=".26cmo4oabcw.4.0.1:$2.1"><strong data-reactid=".26cmo4oabcw.4.0.1:$2.1.0">บริการผู้ใช้บริการของคุณ</strong></h2>
									<div class="how-hosting-works__section-sub-title" data-reactid=".26cmo4oabcw.4.0.1:$2.2">
										เจ้าของรถเช่าบางคนเตรียมพร้อมสิ่งอำนวยความสะดวกอื่นๆ ให้ผู้ใช้บริการ  คุณเป็นผู้ตัดสินใจเองว่าต้องการให้เขาประทับใจคุณมากแค่ไหน
									</div>
									<div class="row" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0">
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$0">
											<div data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$0.0">
												<i class="fa fa-smile-o icon-size-2 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$0.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$0.0.1">
													เริ่มด้วยของพื้นฐาน
												</div>
												<div class="info-item__body">
													ผู้บริการรถเช่าส่วนใหญ่ทำความสะอาดรถทุกครั้ง และจัดหาสิ่งของจำเป็นเช่น กระดาษชำระ  หรือ อุปกรณ์จดบันทึก
												</div>
											</div>
										</div>
										
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1.$1">
											<div data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1.$1.0">
												<i class="fa fa-money icon-size-2 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1.$1.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1.$1.0.1">
													ควรเรียกเก็บเงินเท่าไร
												</div>
												<div class="info-item__body" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1.$1.0.2">
													คุณเป็นผู้ตัดสินใจว่าจะกำหนดราคา หรือเรียกเก็บเงินเท่าไหร่ คุณควรติดต่อกับผูู้ใช้บริการโดยตรงเพื่อความชัดเจนในข้อตกลง
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<script src="js/study.js" type="text/javascript"></script>
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
