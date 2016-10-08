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
		
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">
		<link rel="stylesheet" href="css/host.css">

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
					<a href="/" class="header-belo hide"> <span class="screen-reader-only"> Airbnb </span> </a>
				</div>
				<div class="action--sm"></div>
				<nav class="nav--sm" role="navigation"></nav>
				<div class="search-modal-container"></div>
			</div>

			<header class="regular-header clearfix hide-sm" id="new-header" role="banner">

				<div class="comp pull-left">
					<a href="/" class="hdr-btn link-reset belo-container" aria-label="Airbnb"> <i class="icon icon-pos--lower  icon-airbnb-alt h2 show-login"></i> <i class="icon icon-pos--lower  icon-airbnb show-logout"></i> </a>
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

				<div class="comp pull-right show-logout">
					<a data-login-modal="" href="/login" data-redirect="redirect_params[action]=host&amp;redirect_params[controller]=info" class="hdr-btn link-reset"> เข้าสู่ระบบ </a>
				</div>
				<div class="comp pull-right show-logout">
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

				<div id="js-header-help-menu">
					<div class="comp pull-right no-border help-trigger-wrapper no-hover" data-reactid=".5">
						<a class="hdr-btn js-help-toggle link-reset needsclick" href="/help" data-reactid=".5.0"><span class="margin-right--tiny hide-md" data-reactid=".5.0.0">ความช่วยเหลือ</span><span data-reactid=".5.0.1">&nbsp;</span><i class="header-icon icon-lifesaver-alt-gray" data-reactid=".5.0.2"></i></a>
						<div class="field-guide panel help-side-panel" data-reactid=".5.1">
							<div data-reactid=".5.1.0">
								<div class="side-panel-header text-center" data-reactid=".5.1.0.0">
									<a href="/help" class="link-reset" data-reactid=".5.1.0.0.1"><span data-reactid=".5.1.0.0.1.0">ความช่วยเหลือของ Airbnb</span></a><a href="#" data-prevent-default="true" class="close-button pull-right link-reset" data-reactid=".5.1.0.0.2"><i class="icon icon-remove" data-reactid=".5.1.0.0.2.0"></i></a>
								</div>
								<div class="main-content" data-reactid=".5.1.0.1">
									<div class="text-left search-container" data-reactid=".5.1.0.1.0">
										<div class="search-input-container" data-reactid=".5.1.0.1.0.0">
											<div class="search-input-inner-container" data-reactid=".5.1.0.1.0.0.0">
												<div class="icon-search-container" data-reactid=".5.1.0.1.0.0.0.0">
													<i class="icon-gray icon icon-search dls-search-bar-icon icon-size-1" data-reactid=".5.1.0.1.0.0.0.0.0"></i>
												</div>
												<input class="search-input dls-search-input" type="text" name="q" autocomplete="off" maxlength="1024" value="" placeholder="ขอความช่วยเหลือหรือค้นหาโดยใช้คำสำคัญ" data-reactid=".5.1.0.1.0.0.0.1">
											</div>
										</div>
										<div class="search-results-container text-dark-gray" data-reactid=".5.1.0.1.0.1">
											<div style="margin-top:0;margin-bottom:0;margin-left:0;margin-right:0;display:;" data-reactid=".5.1.0.1.0.1.0">
												<div class="search-results" data-reactid=".5.1.0.1.0.1.0.0">
													<div data-reactid=".5.1.0.1.0.1.0.0.0">
														<div class="search-panel-header panel-header no-border" data-reactid=".5.1.0.1.0.1.0.0.0.0">
															บทความที่แนะนำ
														</div><a href="/help/getting-started" class="article-link link-reset hover-item dls-article-link-panel" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/getting-started">
														<div class="hover-item__content va-container" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/getting-started.0">
															<div class="pull-left article-title" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/getting-started.0.0">
																คู่มือการเริ่มต้น
															</div>
															<div class="va-middle article-link-arrow" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/getting-started.0.1">
																<div class="article-icon-container" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/getting-started.0.1.0">
																	<i class="icon icon-gray icon-size-1 icon-chevron-right" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/getting-started.0.1.0.0"></i>
																</div>
															</div>
														</div></a><a href="/help/article/125" class="article-link link-reset hover-item dls-article-link-panel" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/125">
														<div class="hover-item__content va-container" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/125.0">
															<div class="pull-left article-title" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/125.0.0">
																ราคาถูกกำหนดสำหรับการจองของฉันอย่างไร
															</div>
															<div class="va-middle article-link-arrow" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/125.0.1">
																<div class="article-icon-container" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/125.0.1.0">
																	<i class="icon icon-gray icon-size-1 icon-chevron-right" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/125.0.1.0.0"></i>
																</div>
															</div>
														</div></a><a href="/help/article/450" class="article-link link-reset hover-item dls-article-link-panel" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/450">
														<div class="hover-item__content va-container" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/450.0">
															<div class="pull-left article-title" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/450.0.0">
																ตัวตนที่ได้รับการยืนยันคืออะไร
															</div>
															<div class="va-middle article-link-arrow" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/450.0.1">
																<div class="article-icon-container" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/450.0.1.0">
																	<i class="icon icon-gray icon-size-1 icon-chevron-right" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/450.0.1.0.0"></i>
																</div>
															</div>
														</div></a><a href="/help/article/380" class="article-link link-reset hover-item dls-article-link-panel" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/380">
														<div class="hover-item__content va-container" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/380.0">
															<div class="pull-left article-title" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/380.0.0">
																ฉันจะจองที่พักบน Airbnb ได้อย่างไร
															</div>
															<div class="va-middle article-link-arrow" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/380.0.1">
																<div class="article-icon-container" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/380.0.1.0">
																	<i class="icon icon-gray icon-size-1 icon-chevron-right" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/380.0.1.0.0"></i>
																</div>
															</div>
														</div></a><a href="/help/article/92" class="article-link link-reset hover-item dls-article-link-panel" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/92">
														<div class="hover-item__content va-container" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/92.0">
															<div class="pull-left article-title" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/92.0.0">
																ฉันจะชำระเงินสำหรับการจองที่พักอย่างไร
															</div>
															<div class="va-middle article-link-arrow" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/92.0.1">
																<div class="article-icon-container" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/92.0.1.0">
																	<i class="icon icon-gray icon-size-1 icon-chevron-right" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/92.0.1.0.0"></i>
																</div>
															</div>
														</div></a><a href="/help/article/84" class="article-link link-reset hover-item dls-article-link-panel" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/84">
														<div class="hover-item__content va-container" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/84.0">
															<div class="pull-left article-title" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/84.0.0">
																การแนะนำและเครดิตการเดินทางทำงานอย่างไร
															</div>
															<div class="va-middle article-link-arrow" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/84.0.1">
																<div class="article-icon-container" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/84.0.1.0">
																	<i class="icon icon-gray icon-size-1 icon-chevron-right" data-reactid=".5.1.0.1.0.1.0.0.0.1:$/help/article/84.0.1.0.0"></i>
																</div>
															</div>
														</div></a>
													</div>
												</div>
											</div><div class="expandable-indicator" data-reactid=".5.1.0.1.0.1.2"></div>
										</div>
									</div>
								</div>
								<div class="help-link-bottom text-center" data-reactid=".5.1.0.2">
									<a href="/help" data-prevent-default="true" data-reactid=".5.1.0.2.1"><span data-reactid=".5.1.0.2.1.0">ไปที่ศูนย์ช่วยเหลือ</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="hide js-header-business-travel comp pull-right background-light-gray">
					<a class="hdr-btn link-reset needsclick" href="/business/dashboard?s=nav"> <span class="margin-right--tiny hide-md">ธุรกิจ</span> <i class="header-icon js-business-travel-icon icon-business-travel-gray"></i> </a>
				</div>

				<div class="comp pull-right show-login">
					<a class="needsclick no-crawl hdr-btn link-reset js-inbox-comp message-link" href="/inbox" data-href="/inbox" rel="nofollow">
					<div class="inbox-icon-container text-center">
						<span class="margin-right--tiny hide-md">ข้อความ</span>
						<i class="js-message-icon header-icon message-icon icon-message-alt-gray"> <i class="alert-count unread-count text-center fade in">1</i> </i>
					</div> </a>

					<div class="panel  drop-down-menu notifications-dropdown">
						<div class="loading" data-reactid=".1"></div>
					</div>
				</div>

				<div class="comp pull-right show-trips show-login js-trips-menu-container">
					<a class="needsclick no-crawl hdr-btn link-reset js-trips-comp trips-comp" href="/trips" rel="nofollow" data-href="/trips">
					<div class="inbox-icon-container text-center">
						<span class="margin-right--tiny hide-md">การเดินทาง</span>
						<i class="header-icon js-trips-icon icon-suitcase-gray"> <i class="alert-count js-trips-unread-count text-center fade">0</i> </i>
					</div> </a>

					<div class="panel  drop-down-menu trips-dropdown">
						<div class="loading" data-reactid=".2"></div>
					</div>
				</div>

				<div class="comp pull-right show-host">
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

				<div class="comp pull-right city-host-button hide">
					<a class="hdr-btn link-reset js-host-menu-icon city-host-icon-wrapper" href="/city-hosts?source=hdr">
					<div>
						<span>City Hosts</span>
						<img class="beta-badge" src="https://a0.muscache.com/airbnb/static/magical_trips/guest/beta-badge-56a0d5bc185adfe79992a46991964070.png" alt="Beta" height="15">
					</div> </a>
				</div>

				<div class="comp pull-right not-launched comp-hire-a-host">
					<a class="hdr-btn link-reset lys-link hire-a-host-link" href="/co-hosting?ref=header_button"> <span class="btn btn-small btn-hire-a-host"> </span></a>
					<div class="panel  drop-down-menu hire-a-host-dropdown">
						<p class="panel-body">
							<a class="link-reset hire-a-host-tooltip" href="/co-hosting?ref=header_button"> Tooltip content! </a>
						</p>
					</div>
				</div>

				<div class="comp pull-right hide-host comp-become-a-host  hide">
					<a class="hdr-btn link-reset lys-link js-become-a-host-link comp-become-a-host__link" href="/rooms/new?from_nav=1&amp;link=1"> <span class="btn btn-small btn-become-a-host"> มาเป็นเจ้าของที่พัก <i class="icon icon-gift icon-host-referral-gift js-host-referral-gift-icon hide "></i> </span> </a>
					<div class="panel  drop-down-menu js-become-a-host-dropdown">
						<a class="link-reset panel-body hover-item hide js-become-a-host-lys" href="/become-a-host?from_nav=1&amp;link=2">
						<div class="hover-item__content">
							ลงประกาศที่พัก
						</div> </a>
						<a class="link-reset js-become-a-host-tooltip panel-body hover-item" href="/rooms/new?from_nav=1&amp;link=3">
						<div class="tooltip-content">
							คุณสามารถมีรายได้ ฿4,071 จากการแบ่งปันบ้านของคุณใน Nonthaburi ในหนึ่งสัปดาห์ เป็นเจ้าของที่พักสิ
						</div> </a>
						<a class="link-reset panel-body hover-item js-become-a-host-why-host hide" href="/host?from_nav=1">
						<div class="hover-item__content">
							วิธีการทำงานของการให้เช่าที่พัก
						</div> </a>
					</div>
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
								<div class="col-sm-12 col-md-6 col-lg-5 space-md-8 space-md-top-8 text-contrast bg-babu" data-reactid=".26cmo4oabcw.1.1.0">
									<div class="row space-top-8 space-8" data-reactid=".26cmo4oabcw.1.1.0.0">
										<div class="col-sm-offset-1 col-sm-10 col-lg-9 col-left" data-reactid=".26cmo4oabcw.1.1.0.0.0">
											<h1 class="header-card__title" data-reactid=".26cmo4oabcw.1.1.0.0.0.0"><strong data-reactid=".26cmo4oabcw.1.1.0.0.0.0.0">รับรายได้ในฐานะเจ้าของที่พัก Airbnb</strong></h1>
											<p class="header-card__body space-top-4 space-4" data-reactid=".26cmo4oabcw.1.1.0.0.0.1">
												จากประหยัดเพื่อซ่อมบ้านไปจนถึงการเดินทางในฝัน เจ้าของที่พักใช้รายได้เพิ่มเติมเพื่อสานต่อความหลงใหลของพวกเขา
											</p><a href="/rooms/new?from_sh=1" class="header-card__button btn btn-primary btn-large" id="header-sign-up-button" data-reactid=".26cmo4oabcw.1.1.0.0.0.2"><span data-reactid=".26cmo4oabcw.1.1.0.0.0.2.0">เริ่มเป็นเจ้าของที่พัก</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="space-top-6" data-reactid=".26cmo4oabcw.4">
							<div class="page-container-responsive" data-reactid=".26cmo4oabcw.4.0">
								<div class="text-branding text-center h4 how-hosting-works__title text-muted" data-reactid=".26cmo4oabcw.4.0.0">
									<span data-reactid=".26cmo4oabcw.4.0.0.0">วิธีการทำงานของการให้เช่าที่พัก</span>
								</div>
								<div class="how-hosting-works__section space-top-6" data-reactid=".26cmo4oabcw.4.0.1:$0">
									<div data-reactid=".26cmo4oabcw.4.0.1:$0.0">
										<span class="how-hosting-works__section-label" data-reactid=".26cmo4oabcw.4.0.1:$0.0.0">1</span>
									</div><h2 data-reactid=".26cmo4oabcw.4.0.1:$0.1"><strong data-reactid=".26cmo4oabcw.4.0.1:$0.1.0">สมัครเป็นเจ้าของที่พัก</strong></h2>
									<div class="how-hosting-works__section-sub-title" data-reactid=".26cmo4oabcw.4.0.1:$0.2">
										เริ่มโดยสร้างที่พักของคุณ ซึ่งเหมือนหน้าโปรไฟล์สำหรับสถานที่ของคุณ
									</div>
									<div class="row" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0">
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$0">
											<div data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$0.0">
												<i class="icon icon-home icon-size-2 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$0.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$0.0.1">
													ในที่พักมีอะไร?
												</div>
												<div class="info-item__body" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$0.0.2">
													คุณกำลังกรอกรายละเอียด ถ่ายและอัพโหลดรูปและเลือกราคา ที่พักของคุณช่วยให้ผู้เข้าพักรู้ว่าที่พักคุณมีราคาเท่าไร
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$1">
											<div data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$1.0">
												<i class="icon icon-group icon-size-2 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$1.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$1.0.1">
													ใครสามารถจองที่พักได้บ้าง
												</div>
												<div class="info-item__body" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$1.0.2">
													คุณตั้งค่าสถานะว่างและกฎของที่พักสำหรับที่พักของคุณ การควบคุมของเจ้าของที่พักและการตั้งค่าปฏิทินสามารถช่วยทำให้การให้เช่าที่พักง่ายขึ้น
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$2">
											<div data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$2.0">
												<i class="icon icon-handshake icon-size-2 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$2.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$2.0.1">
													เราจะคอยช่วยคุณ
												</div>
												<div class="info-item__body" data-reactid=".26cmo4oabcw.4.0.1:$0.3:$0.$2.0.2">
													ตั้งแต่การเตรียมบ้านคุณให้พร้อมและการเลือกราคาไปจนถึงการเข้าใจความรับผิดชอบของคุณภายใต้กฎหมายท้องถิ่น เรามีเครื่องมือและทรัพยากรสำหรับคุณ
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="how-hosting-works__section space-top-6" data-reactid=".26cmo4oabcw.4.0.1:$1">
									<div data-reactid=".26cmo4oabcw.4.0.1:$1.0">
										<span class="how-hosting-works__section-label" data-reactid=".26cmo4oabcw.4.0.1:$1.0.0">2</span>
									</div><h2 data-reactid=".26cmo4oabcw.4.0.1:$1.1"><strong data-reactid=".26cmo4oabcw.4.0.1:$1.1.0">ผู้เข้าพักหาที่พักของคุณและจอง</strong></h2>
									<div class="how-hosting-works__section-sub-title" data-reactid=".26cmo4oabcw.4.0.1:$1.2">
										คุณจะได้รับการยืนยันการจองและข้อความจากผู้เข้าพักของคุณ
									</div>
									<div class="row" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0">
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$0">
											<div data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$0.0">
												<i class="icon icon-comment icon-size-2 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$0.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$0.0.1">
													ส่งข้อความถึงผู้เข้าพักของคุณ
												</div>
												<div class="info-item__body" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$0.0.2">
													การรับส่งข้อความออนไลน์และทางแอพช่วยคุณทำความรู้จักกับผู้เข้าพักและตอบคำถาม
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$1">
											<div data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$1.0">
												<i class="icon icon-suitcase icon-size-2 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$1.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$1.0.1">
													วางแผนสำหรับการเช็คอิน
												</div>
												<div class="info-item__body" data-reactid=".26cmo4oabcw.4.0.1:$1.3:$0.$1.0.2">
													เจ้าของที่พักบางคนพบผู้เข้าพักด้วยตัวเองเพื่อมอบกุญแจ บางคนให้รหัสประตู คุณเลือกว่าวิธีไหนเหมาะกับคุณ
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="how-hosting-works__section space-top-6" data-reactid=".26cmo4oabcw.4.0.1:$2">
									<div data-reactid=".26cmo4oabcw.4.0.1:$2.0">
										<span class="how-hosting-works__section-label" data-reactid=".26cmo4oabcw.4.0.1:$2.0.0">3</span>
									</div><h2 data-reactid=".26cmo4oabcw.4.0.1:$2.1"><strong data-reactid=".26cmo4oabcw.4.0.1:$2.1.0">ต้อนรับผู้เข้าพักของคุณ</strong></h2>
									<div class="how-hosting-works__section-sub-title" data-reactid=".26cmo4oabcw.4.0.1:$2.2">
										เจ้าของที่พักบางคนเสนออาหารเช้า คนอื่นไม่ได้ดูแลใกล้ชิด คุณเป็นผู้ตัดสินใจเองว่าต้องการให้เช่าที่พักแบบไหน
									</div>
									<div class="row" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0">
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$0">
											<div data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$0.0">
												<i class="icon icon-essentials icon-size-2 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$0.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$0.0.1">
													เริ่มด้วยของพื้นฐาน
												</div>
												<div class="info-item__body" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$0.0.2">
													เจ้าของที่พักส่วนใหญ่ทำความสะอาดทุกจุดที่ผู้เข้าพักใช้ได้ และจัดหาสิ่งของจำเป็นเช่น ผ้าปูที่นอนสะอาด ผ้าขนหนูและกระดาษชำระ
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$1">
											<div data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$1.0">
												<i class="icon icon-id-card-back icon-size-2 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$1.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$1.0.1">
													วิธีที่ผู้เข้าพักจ่ายเงิน
												</div>
												<div class="info-item__body" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$1.0.2">
													Airbnb จัดการการชำระเงินทั้งหมด คุณไม่ต้องจัดการเรื่องเงินโดยตรง ผู้เข้าพักถูกเรียกเก็บเงินก่อนพวกเขามาถึง
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$2">
											<div data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$2.0">
												<i class="icon icon-money-deposit icon-size-2 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$2.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$2.0.1">
													วิธีรับชำระเงินของคุณ
												</div>
												<div class="info-item__body" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$0.$2.0.2">
													บางวิธีที่คุณเลือกได้เพื่อรับชำระเงินประกอบด้วย Paypal, การฝากเงินโดยตรง และการโอนเงินข้ามประเทศ การชำระเงินของคุณถูกส่งโดยอัตโนมัติ 24 ชั่วโมงหลังผู้เข้าพักของคุณเช็คอิน ง่ายมาก
												</div>
											</div>
										</div>
									</div>
									<div class="row" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1">
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1.$0">
											<div data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1.$0.0">
												<i class="icon icon-tag icon-size-2 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1.$0.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1.$0.0.1">
													รายได้และค่าธรรมเนียม
												</div>
												<div class="info-item__body" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1.$0.0.2">
													การลงประกาศที่พักของคุณบน Airbnb ไม่มีค่าใช้จ่าย Airbnb เก็บค่าบริการเจ้าของที่พัก 3% สำหรับการจองแต่ละครั้ง
												</div>
											</div>
										</div>
										<div class="col-md-6 col-lg-4" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1.$1">
											<div data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1.$1.0">
												<i class="icon icon-filter icon-size-2 text-babu space-top-4 info-item__icon" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1.$1.0.0"></i>
												<div class="info-item__title space-2 space-top-2" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1.$1.0.1">
													ควรเรียกเก็บเงินเท่าไร
												</div>
												<div class="info-item__body" data-reactid=".26cmo4oabcw.4.0.1:$2.3:$1.$1.0.2">
													คุณเป็นผู้ตัดสินใจว่าจะเรียกเก็บเงินเท่าไร หลังสมัคร คุณจะสามารถใช้เครื่องมือที่ช่วยให้คุณตั้งราคาที่พิจารณาแนวโน้มการเดินทางและราคาสำหรับที่พักคล้ายกัน
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<script type="application/json" data-hypernova-key="slash_hostbundlejs">
					<!--{"phrases":{"here_is_what_you_could_earn":"ดูว่าคุณสร้างรายได้ได้เท่าไรใน %{city_name}","here_is_what_you_could_earn_no_city":"ดูว่าคุณสามารถมีรายได้เท่าไร","nearby_hosting_info":"ร่วมกับเจ้าของที่พัก %{hosting_number} %{line_break}%{city_name} คน","nearby_hosting_info_v2":"ร่วมกับเจ้าของที่พักหลายร้อยคนใน %{line_break}%{city_name}","how_much_could_you_make":"ดูว่าคุณสามารถมีรายได้เท่าไรจากการให้เช่าที่พักของคุณบน Airbnb","entire_place":"สถานที่ทั้งหมด","private_room":"ห้องส่วนตัว","typical_hosts_make":"ต่อเดือน เจ้าของที่พัก Airbnb ใกล้ที่นี่มีรายได้เฉลี่ย","price_estimate_explanation":"รายได้ต่อเดือนคำนวณจากการคิดรายได้เฉลี่ยสำหรับที่พักในพื้นที่ของคุณที่มีการจองต่อเนื่องช่วง 3 เดือนที่ผ่านมา ตัวเลขนี้เป็นการคาดการณ์เท่านั้นและรายได้ที่คุณได้รับจริงขึ้นอยู่กับการกำหนดราคา ประเภทและตำแหน่งที่ตั้งของที่พักของคุณและปัจจัยอื่นๆ","mini_model_price_estimate_explanation":"ประมาณการณ์จากราคาที่พักตามที่ตั้ง ฤดูกาล ประเภทที่พัก และจำนวนผู้เข้าพักที่คล้ายกัน รายได้ที่แน่นอนของคุณอาจแตกต่างไปตามราคา ประเภท และที่ตั้งของที่พัก รวมถึงฤดูกาล ความต้องการ และปัจจัยอื่นๆ","list_your_space":"ลงประกาศที่พัก","enter_location":"กรอกตำแหน่งที่ตั้ง","hosts_around_the_world":"เจ้าของที่พัก Airbnb ทั่วโลก","autopricing_error":"ข้อมูลไม่พอสำหรับแผนที่ส่วนนี้ ลองบริเวณอื่นหรือระดับการซูมอื่น","autopricing_error_no_map_view":"เครื่องคำนวณรายได้ไม่ทำงานตอนนี้ ลองรีเฟรชหน้า","wmpw.become_a_host_title_no_name":"มาเตรียมความพร้อมของคุณในการเป็นเจ้าของที่พักกันเถอะ","wmpw.become_a_host_title_with_name":"สวัสดี %{userName}! มาเตรียมความพร้อมของคุณในการเป็นเจ้าของที่พักกันเถอะ","wmpw.what_kind_of_place":"คุณมีที่พักประเภทไหน","wmpw.number_of_guests":"สำหรับผู้เข้าพัก %{smart_count} คน","wmpw.for_duration_week":"ที่พักสำหรับหนึ่งสัปดาห์ เราคิดว่าคุณสามารถมีรายได้","for_plural_weeks":"สำหรับ %{smart_count} สัปดาห์","for_plural_month":"สำหรับ %{smart_count} เดือน","sign_up_button":"สมัครเพื่อให้เช่าที่พัก","cta_button_signed_in":"เริ่มเป็นเจ้าของที่พัก","header_card.title":"รับรายได้ในฐานะเจ้าของที่พัก Airbnb","header_card.title.san_diego":"ห้องผู้เข้าพักของเราช่วยจ่ายค่าดูแลสนามหลังบ้านของเรา","header_card.title.seattle":"ห้องว่างที่เรามีเหลือช่วยสนับสนุนธุรกิจในฝันของเรา","header_card.title.toronto":"ห้องว่างของฉันช่วยจ่ายค่าการเดินทางของฉัน","header_card.body":"จากประหยัดเพื่อซ่อมบ้านไปจนถึงการเดินทางในฝัน เจ้าของที่พักใช้รายได้เพิ่มเติมเพื่อสานต่อความหลงใหลของพวกเขา","header_card.body_marketing":"เจ้าของที่พัก Airbnb มีรายได้โดยการแบ่งปันบ้านกับนักท่องเที่ยว","cohost_promotion_banner.body_message":"มีพื้นที่ว่างแต่ไม่มีเวลาปล่อยเช่าใช่หรือไม่ เจ้าของที่พักร่วมสามารถช่วยคุณได้","cohost_promotion_banner.get_cohost":"หาเจ้าของที่พักร่วม","earning_estimation.title":"รายได้ที่คุณควรได้รับใน %{tag_start}%{location}%{tag_end}","earning_estimation.title.no_city":"สิ่งที่คุณสามารถได้รับ","earning_estimation.duration_text":"ค่าเฉลี่ยรายสัปดาห์","earning_estimation.amount.error.title":"ข้อมูลไม่เพียงพอ","earning_estimation.amount.error.body":"อย่างน้อยก็ยัง เจ้าของที่พักในท้องถิ่นใหม่เช่นคุณช่วยเรารวบรวมข้อมูลเกี่ยวกับรายได้เพิ่มเติม","how_hosting_works.title":"วิธีการทำงานของการให้เช่าที่พัก","how_hosting_works.load_more_button":"ดูข้อมูลเพิ่มเติม","how_hosting_works.step1.title":"สมัครเป็นเจ้าของที่พัก","how_hosting_works.step1.sub_title":"เริ่มโดยสร้างที่พักของคุณ ซึ่งเหมือนหน้าโปรไฟล์สำหรับสถานที่ของคุณ","how_hosting_works.step1.item1.title":"ในที่พักมีอะไร?","how_hosting_works.step1.item1.body":"คุณกำลังกรอกรายละเอียด ถ่ายและอัพโหลดรูปและเลือกราคา ที่พักของคุณช่วยให้ผู้เข้าพักรู้ว่าที่พักคุณมีราคาเท่าไร","how_hosting_works.step1.item2.title":"ใครสามารถจองที่พักได้บ้าง","how_hosting_works.step1.item2.body":"คุณตั้งค่าสถานะว่างและกฎของที่พักสำหรับที่พักของคุณ การควบคุมของเจ้าของที่พักและการตั้งค่าปฏิทินสามารถช่วยทำให้การให้เช่าที่พักง่ายขึ้น","how_hosting_works.step1.item3.title":"เราจะคอยช่วยคุณ","how_hosting_works.step1.item3.body":"ตั้งแต่การเตรียมบ้านคุณให้พร้อมและการเลือกราคาไปจนถึงการเข้าใจความรับผิดชอบของคุณภายใต้กฎหมายท้องถิ่น เรามีเครื่องมือและทรัพยากรสำหรับคุณ","how_hosting_works.step2.title":"ผู้เข้าพักหาที่พักของคุณและจอง","how_hosting_works.step2.sub_title":"คุณจะได้รับการยืนยันการจองและข้อความจากผู้เข้าพักของคุณ","how_hosting_works.step2.item1.title":"ส่งข้อความถึงผู้เข้าพักของคุณ","how_hosting_works.step2.item1.body":"การรับส่งข้อความออนไลน์และทางแอพช่วยคุณทำความรู้จักกับผู้เข้าพักและตอบคำถาม","how_hosting_works.step2.item2.title":"วางแผนสำหรับการเช็คอิน","how_hosting_works.step2.item2.body":"เจ้าของที่พักบางคนพบผู้เข้าพักด้วยตัวเองเพื่อมอบกุญแจ บางคนให้รหัสประตู คุณเลือกว่าวิธีไหนเหมาะกับคุณ","how_hosting_works.step3.title":"ต้อนรับผู้เข้าพักของคุณ","how_hosting_works.step3.sub_title":"เจ้าของที่พักบางคนเสนออาหารเช้า คนอื่นไม่ได้ดูแลใกล้ชิด คุณเป็นผู้ตัดสินใจเองว่าต้องการให้เช่าที่พักแบบไหน","how_hosting_works.step3.item1.title":"เริ่มด้วยของพื้นฐาน","how_hosting_works.step3.item1.body":"เจ้าของที่พักส่วนใหญ่ทำความสะอาดทุกจุดที่ผู้เข้าพักใช้ได้ และจัดหาสิ่งของจำเป็นเช่น ผ้าปูที่นอนสะอาด ผ้าขนหนูและกระดาษชำระ","how_hosting_works.step3.item2.title":"วิธีที่ผู้เข้าพักจ่ายเงิน","how_hosting_works.step3.item2.body":"Airbnb จัดการการชำระเงินทั้งหมด คุณไม่ต้องจัดการเรื่องเงินโดยตรง ผู้เข้าพักถูกเรียกเก็บเงินก่อนพวกเขามาถึง","how_hosting_works.step3.item3.title":"วิธีรับชำระเงินของคุณ","how_hosting_works.step3.item3.body":"บางวิธีที่คุณเลือกได้เพื่อรับชำระเงินประกอบด้วย Paypal, การฝากเงินโดยตรง และการโอนเงินข้ามประเทศ การชำระเงินของคุณถูกส่งโดยอัตโนมัติ 24 ชั่วโมงหลังผู้เข้าพักของคุณเช็คอิน ง่ายมาก","how_hosting_works.step3.item4.title":"รายได้และค่าธรรมเนียม","how_hosting_works.step3.item4.body":"การลงประกาศที่พักของคุณบน Airbnb ไม่มีค่าใช้จ่าย Airbnb เก็บค่าบริการเจ้าของที่พัก 3% สำหรับการจองแต่ละครั้ง","how_hosting_works.step3.item5.title":"ควรเรียกเก็บเงินเท่าไร","how_hosting_works.step3.item5.body":"คุณเป็นผู้ตัดสินใจว่าจะเรียกเก็บเงินเท่าไร หลังสมัคร คุณจะสามารถใช้เครื่องมือที่ช่วยให้คุณตั้งราคาที่พิจารณาแนวโน้มการเดินทางและราคาสำหรับที่พักคล้ายกัน","trust_and_guarantee.title":"เราคอยสนับสนุนคุณอยู่เสมอ","trust_and_guarantee.sub_title":"Airbnb วางแผนล่วงหน้าเพื่อคุ้มครองคุณและบ้านของคุณ","trust_and_guarantee.item1.title":"&amp;#3647;30,000,000 การรับประกันสำหรับเจ้าของที่พัก","trust_and_guarantee.item1.body":"การรับประกันสำหรับเจ้าของที่พักคุ้มครองบ้านและสิ่งของของคุณจากความเสียหายจากอุบัติเหตุ เจ้าของที่พักทุกคนที่มีที่พักบน Airbnb มีสิทธิได้รับการคุ้มครองโดยไม่มีค่าใช้จ่ายเพิ่มเติม คุณไม่ต้องทำอะไรเพื่อสมัคร","trust_and_guarantee.item2.title":"การรับประกันปกป้องเจ้าของที่พัก","trust_and_guarantee.item2.body":"การรับประกันปกป้องเจ้าของที่พักออกแบบมาเพื่อคุ้มครองคุณจากการรับผิดในกรณีที่ผู้เข้าพักของคุณได้รับบาดเจ็บหรือสร้างความเสียหายในทรัพย์สิน ประกันนี้รวมอยู่เป็นส่วนหนึ่งของบัญชี Airbnb ของคุณ","trust_and_guarantee.item3.title":"Airbnb สร้างอยู่บนความไว้ใจ","trust_and_guarantee.item3.body":"เราจำเป็นต้องได้รับข้อมูลที่ยืนยันแล้วจากทั้งเจ้าของที่พักและผู้เข้าพัก รวมเบอร์โทรด้วย หลังการเดินทาง ทุกคนมีโอกาสเขียนความคิดเห็น ความคิดเห็นทำให้ผู้เข้าพักรับผิดชอบต่อการปฏิบัติต่อเจ้าของที่พักและบ้านของพวกเขาด้วยความเคารพ","trust_and_guarantee.item4.title":"มากกว่าเงินมากมาย","trust_and_guarantee.item4.body":"นอกจากรายได้เพิ่มเติม เจ้าของที่พักเข้าร่วมชุมชนสนับสนุนทั่วโลก มีโอกาสเรียนรู้จาก Airbnb และเจ้าของที่พักคนอื่นเสมอ","videos.video1.title":"ฟังความเห็นของเจ้าของที่พักจากปากของพวกเขา","videos.video2.title":"Airbnb คือคนที่มีโปรไฟล์","videos.video3.title":"การปกป้องเพื่อความสบายใจของคุณ","videos.video4.title":"ความไว้ใจทำให้ได้ผล","videos.video5.title":"แสดงตัวตนของคุณด้วยโปรไฟล์ของคุณ","videos.video6.title":"การวางแผนการมาถึง","videos.video7.title":"การรับชำระเงิน","videos.video8.title":"ความคิดเห็นช่วยคุณปรับปรุง","footer.title":"เตรียมตัวพบผู้เข้าพัก","subnav_title":"รับ %{tag_start}%{amount}%{tag_end} สำหรับการจอง %{smart_count} สัปดาห์","subnav_duration":"สำหรับ %{smart_count} สัปดาห์"},"data":{"list_space_room_types_info":[{"value":"Entire home/apt","display_string":"ที่พักทั้งหมด","slug":"entire_home_apt"},{"value":"Private room","display_string":"ห้องส่วนตัว","slug":"private_room"},{"value":"Shared room","display_string":"ห้องเช่าร่วม","slug":"shared_room"}],"list_space_accommodates_info":[{"display_string":"ผู้เข้าพัก 1 คน","request_string":"1","value":1},{"display_string":"ผู้เข้าพัก 2 คน","request_string":"2","value":2},{"display_string":"ผู้เข้าพัก 3 คน","request_string":"3","value":3},{"display_string":"ผู้เข้าพัก 4 คน","request_string":"4","value":4},{"display_string":"ผู้เข้าพัก 5 คน","request_string":"5","value":5},{"display_string":"ผู้เข้าพัก 6 คน","request_string":"6","value":6},{"display_string":"ผู้เข้าพัก 7 คน","request_string":"7","value":7},{"display_string":"ผู้เข้าพัก 8 คน","request_string":"8","value":8},{"display_string":"ผู้เข้าพัก 9 คน","request_string":"9","value":9},{"display_string":"ผู้เข้าพัก 10 คน","request_string":"10","value":10},{"display_string":"ผู้เข้าพัก 11 คน","request_string":"11","value":11},{"display_string":"ผู้เข้าพัก 12 คน","request_string":"12","value":12},{"display_string":"ผู้เข้าพัก 13 คน","request_string":"13","value":13},{"display_string":"ผู้เข้าพัก 14 คน","request_string":"14","value":14},{"display_string":"ผู้เข้าพัก 15 คน","request_string":"15","value":15},{"display_string":"ผู้เข้าพัก 16+ คน","request_string":"16+","value":16}],"how_hosting_works":[{"title":"สมัครเป็นเจ้าของที่พัก","sub_title":"เริ่มโดยสร้างที่พักของคุณ ซึ่งเหมือนหน้าโปรไฟล์สำหรับสถานที่ของคุณ","items":[{"title":"ในที่พักมีอะไร?","body":"คุณกำลังกรอกรายละเอียด ถ่ายและอัพโหลดรูปและเลือกราคา ที่พักของคุณช่วยให้ผู้เข้าพักรู้ว่าที่พักคุณมีราคาเท่าไร","icon_name":"home"},{"title":"ใครสามารถจองที่พักได้บ้าง","body":"คุณตั้งค่าสถานะว่างและกฎของที่พักสำหรับที่พักของคุณ การควบคุมของเจ้าของที่พักและการตั้งค่าปฏิทินสามารถช่วยทำให้การให้เช่าที่พักง่ายขึ้น","icon_name":"group"},{"title":"เราจะคอยช่วยคุณ","body":"ตั้งแต่การเตรียมบ้านคุณให้พร้อมและการเลือกราคาไปจนถึงการเข้าใจความรับผิดชอบของคุณภายใต้กฎหมายท้องถิ่น เรามีเครื่องมือและทรัพยากรสำหรับคุณ","icon_name":"handshake"}]},{"title":"ผู้เข้าพักหาที่พักของคุณและจอง","sub_title":"คุณจะได้รับการยืนยันการจองและข้อความจากผู้เข้าพักของคุณ","items":[{"title":"ส่งข้อความถึงผู้เข้าพักของคุณ","body":"การรับส่งข้อความออนไลน์และทางแอพช่วยคุณทำความรู้จักกับผู้เข้าพักและตอบคำถาม","icon_name":"comment"},{"title":"วางแผนสำหรับการเช็คอิน","body":"เจ้าของที่พักบางคนพบผู้เข้าพักด้วยตัวเองเพื่อมอบกุญแจ บางคนให้รหัสประตู คุณเลือกว่าวิธีไหนเหมาะกับคุณ","icon_name":"suitcase"}]},{"title":"ต้อนรับผู้เข้าพักของคุณ","sub_title":"เจ้าของที่พักบางคนเสนออาหารเช้า คนอื่นไม่ได้ดูแลใกล้ชิด คุณเป็นผู้ตัดสินใจเองว่าต้องการให้เช่าที่พักแบบไหน","items":[{"title":"เริ่มด้วยของพื้นฐาน","body":"เจ้าของที่พักส่วนใหญ่ทำความสะอาดทุกจุดที่ผู้เข้าพักใช้ได้ และจัดหาสิ่งของจำเป็นเช่น ผ้าปูที่นอนสะอาด ผ้าขนหนูและกระดาษชำระ","icon_name":"essentials"},{"title":"วิธีที่ผู้เข้าพักจ่ายเงิน","body":"Airbnb จัดการการชำระเงินทั้งหมด คุณไม่ต้องจัดการเรื่องเงินโดยตรง ผู้เข้าพักถูกเรียกเก็บเงินก่อนพวกเขามาถึง","icon_name":"id-card-back"},{"title":"วิธีรับชำระเงินของคุณ","body":"บางวิธีที่คุณเลือกได้เพื่อรับชำระเงินประกอบด้วย Paypal, การฝากเงินโดยตรง และการโอนเงินข้ามประเทศ การชำระเงินของคุณถูกส่งโดยอัตโนมัติ 24 ชั่วโมงหลังผู้เข้าพักของคุณเช็คอิน ง่ายมาก","icon_name":"money-deposit"},{"title":"รายได้และค่าธรรมเนียม","body":"การลงประกาศที่พักของคุณบน Airbnb ไม่มีค่าใช้จ่าย Airbnb เก็บค่าบริการเจ้าของที่พัก 3% สำหรับการจองแต่ละครั้ง","icon_name":"tag"},{"title":"ควรเรียกเก็บเงินเท่าไร","body":"คุณเป็นผู้ตัดสินใจว่าจะเรียกเก็บเงินเท่าไร หลังสมัคร คุณจะสามารถใช้เครื่องมือที่ช่วยให้คุณตั้งราคาที่พิจารณาแนวโน้มการเดินทางและราคาสำหรับที่พักคล้ายกัน","icon_name":"filter"}]}],"trust_and_guarantee":{"title":"เราคอยสนับสนุนคุณอยู่เสมอ","sub_title":"Airbnb วางแผนล่วงหน้าเพื่อคุ้มครองคุณและบ้านของคุณ","items":[{"title":"&amp;#3647;30,000,000 การรับประกันสำหรับเจ้าของที่พัก","body":"การรับประกันสำหรับเจ้าของที่พักคุ้มครองบ้านและสิ่งของของคุณจากความเสียหายจากอุบัติเหตุ เจ้าของที่พักทุกคนที่มีที่พักบน Airbnb มีสิทธิได้รับการคุ้มครองโดยไม่มีค่าใช้จ่ายเพิ่มเติม คุณไม่ต้องทำอะไรเพื่อสมัคร","icon_name":"host-guarantee"},{"title":"Airbnb สร้างอยู่บนความไว้ใจ","body":"เราจำเป็นต้องได้รับข้อมูลที่ยืนยันแล้วจากทั้งเจ้าของที่พักและผู้เข้าพัก รวมเบอร์โทรด้วย หลังการเดินทาง ทุกคนมีโอกาสเขียนความคิดเห็น ความคิดเห็นทำให้ผู้เข้าพักรับผิดชอบต่อการปฏิบัติต่อเจ้าของที่พักและบ้านของพวกเขาด้วยความเคารพ","icon_name":"ok-alt"},{"title":"มากกว่าเงินมากมาย","body":"นอกจากรายได้เพิ่มเติม เจ้าของที่พักเข้าร่วมชุมชนสนับสนุนทั่วโลก มีโอกาสเรียนรู้จาก Airbnb และเจ้าของที่พักคนอื่นเสมอ","icon_name":"lifesaver"}]},"input_placeholder":null,"videos":[{"title":"ฟังความเห็นของเจ้าของที่พักจากปากของพวกเขา","video_mp4":"https://a2.muscache.com/airbnb/static/hear_from_hosts.mp4","video_webm":"https://a0.muscache.com/airbnb/static/hear_from_hosts.webm"},{"title":"Airbnb คือคนที่มีโปรไฟล์","video_mp4":"https://a0.muscache.com/airbnb/static/people_with_profiles.mp4","video_webm":"https://a1.muscache.com/airbnb/static/people_with_profiles.webm"},{"title":"การปกป้องเพื่อความสบายใจของคุณ","video_mp4":"https://a1.muscache.com/airbnb/static/protection_for_your_peace_of_mind.mp4","video_webm":"https://a2.muscache.com/airbnb/static/protection_for_your_peace_of_mind.webm"},{"title":"ความไว้ใจทำให้ได้ผล","video_mp4":"https://a2.muscache.com/airbnb/static/trust_makes_it_work.mp4","video_webm":"https://a0.muscache.com/airbnb/static/trust_makes_it_work.webm"},{"title":"แสดงตัวตนของคุณด้วยโปรไฟล์ของคุณ","video_mp4":"https://a2.muscache.com/airbnb/static/express_yourself_with_profile.mp4","video_webm":"https://a1.muscache.com/airbnb/static/express_yourself_with_profile.webm"},{"title":"การวางแผนการมาถึง","video_mp4":"https://a1.muscache.com/airbnb/static/planning_for_arrival.mp4","video_webm":"https://a2.muscache.com/airbnb/static/planning_for_arrival.webm"},{"title":"การรับชำระเงิน","video_mp4":"https://a2.muscache.com/airbnb/static/getting_paid.mp4","video_webm":"https://a2.muscache.com/airbnb/static/getting_paid.webm"},{"title":"ความคิดเห็นช่วยคุณปรับปรุง","video_mp4":"https://a2.muscache.com/airbnb/static/reviews_help_you_improve.mp4","video_webm":"https://a1.muscache.com/airbnb/static/reviews_help_you_improve.webm"}],"ethnio_id":95725,"header_class":"","header_title_text":"รับรายได้ในฐานะเจ้าของที่พัก Airbnb","header_body_text":"จากประหยัดเพื่อซ่อมบ้านไปจนถึงการเดินทางในฝัน เจ้าของที่พักใช้รายได้เพิ่มเติมเพื่อสานต่อความหลงใหลของพวกเขา","show_login_signup_on_lys":false,"login_signup_type":"modal","experiments":{"slash_host_jp":false,"slash_host_cohost_promotion":false}},"trebuchets":{}}-->
				</script>
			</div>

		</main>

		<div id="footer-promo-mount"></div>
		<div id="footer" class="container-brand-dark footer-surround footer-container">
			<footer class="page-container-responsive" role="contentinfo">
				<div class="row row-condensed">
					<div class="col-md-3 col-md-offset-1">
						<div class="language-curr-picker clearfix space-2">
							<div class="language-picker">
								<div class="select select-large select-block space-2" data-reactid=".3">
									<label for="language-selector" class="screen-reader-only" data-reactid=".3.0"><span data-reactid=".3.0.0">เลือกภาษา</span></label>
									<select class="language-selector" id="language-selector" data-reactid=".3.1">
										<option value="id" data-reactid=".3.1.$id">Bahasa Indonesia</option><option value="ms" data-reactid=".3.1.$ms">Bahasa Melayu</option><option value="ca" data-reactid=".3.1.$ca">Català</option><option value="da" data-reactid=".3.1.$da">Dansk</option><option value="de" data-reactid=".3.1.$de">Deutsch</option><option value="en" data-reactid=".3.1.$en">English</option><option value="es" data-reactid=".3.1.$es">Español</option><option value="el" data-reactid=".3.1.$el">Eλληνικά</option><option value="fr" data-reactid=".3.1.$fr">Français</option><option value="it" data-reactid=".3.1.$it">Italiano</option><option value="hu" data-reactid=".3.1.$hu">Magyar</option><option value="nl" data-reactid=".3.1.$nl">Nederlands</option><option value="no" data-reactid=".3.1.$no">Norsk</option><option value="pl" data-reactid=".3.1.$pl">Polski</option><option value="pt" data-reactid=".3.1.$pt">Português</option><option value="fi" data-reactid=".3.1.$fi">Suomi</option><option value="sv" data-reactid=".3.1.$sv">Svenska</option><option value="tr" data-reactid=".3.1.$tr">Türkçe</option><option value="is" data-reactid=".3.1.$is">Íslenska</option><option value="cs" data-reactid=".3.1.$cs">Čeština</option><option value="ru" data-reactid=".3.1.$ru">Русский</option><option selected="" value="th" data-reactid=".3.1.$th">ภาษาไทย</option><option value="zh" data-reactid=".3.1.$zh">中文 (简体)</option><option value="zh-TW" data-reactid=".3.1.$zh-TW">中文 (繁體)</option><option value="ja" data-reactid=".3.1.$ja">日本語</option><option value="ko" data-reactid=".3.1.$ko">한국어</option>
									</select>
								</div>
							</div>
							<div class="currency-picker">
								<div class="space-2" data-reactid=".4">
									<label for="currency-selector" class="screen-reader-only" data-reactid=".4.0"><span data-reactid=".4.0.0">เลือกสกุลเงิน</span></label>
									<div class="select select-block select-large" data-reactid=".4.1">
										<select id="currency-selector" data-reactid=".4.1.0">
											<option value="AED" data-reactid=".4.1.0.$AED">AED</option><option value="ARS" data-reactid=".4.1.0.$ARS">ARS</option><option value="AUD" data-reactid=".4.1.0.$AUD">AUD</option><option value="BGN" data-reactid=".4.1.0.$BGN">BGN</option><option value="BRL" data-reactid=".4.1.0.$BRL">BRL</option><option value="CAD" data-reactid=".4.1.0.$CAD">CAD</option><option value="CHF" data-reactid=".4.1.0.$CHF">CHF</option><option value="CLP" data-reactid=".4.1.0.$CLP">CLP</option><option value="CNY" data-reactid=".4.1.0.$CNY">CNY</option><option value="COP" data-reactid=".4.1.0.$COP">COP</option><option value="CRC" data-reactid=".4.1.0.$CRC">CRC</option><option value="CZK" data-reactid=".4.1.0.$CZK">CZK</option><option value="DKK" data-reactid=".4.1.0.$DKK">DKK</option><option value="EUR" data-reactid=".4.1.0.$EUR">EUR</option><option value="GBP" data-reactid=".4.1.0.$GBP">GBP</option><option value="HKD" data-reactid=".4.1.0.$HKD">HKD</option><option value="HRK" data-reactid=".4.1.0.$HRK">HRK</option><option value="HUF" data-reactid=".4.1.0.$HUF">HUF</option><option value="IDR" data-reactid=".4.1.0.$IDR">IDR</option><option value="ILS" data-reactid=".4.1.0.$ILS">ILS</option><option value="INR" data-reactid=".4.1.0.$INR">INR</option><option value="JPY" data-reactid=".4.1.0.$JPY">JPY</option><option value="KRW" data-reactid=".4.1.0.$KRW">KRW</option><option value="MAD" data-reactid=".4.1.0.$MAD">MAD</option><option value="MXN" data-reactid=".4.1.0.$MXN">MXN</option><option value="MYR" data-reactid=".4.1.0.$MYR">MYR</option><option value="NOK" data-reactid=".4.1.0.$NOK">NOK</option><option value="NZD" data-reactid=".4.1.0.$NZD">NZD</option><option value="PEN" data-reactid=".4.1.0.$PEN">PEN</option><option value="PHP" data-reactid=".4.1.0.$PHP">PHP</option><option value="PLN" data-reactid=".4.1.0.$PLN">PLN</option><option value="RON" data-reactid=".4.1.0.$RON">RON</option><option value="RUB" data-reactid=".4.1.0.$RUB">RUB</option><option value="SAR" data-reactid=".4.1.0.$SAR">SAR</option><option value="SEK" data-reactid=".4.1.0.$SEK">SEK</option><option value="SGD" data-reactid=".4.1.0.$SGD">SGD</option><option selected="" value="THB" data-reactid=".4.1.0.$THB">THB</option><option value="TRY" data-reactid=".4.1.0.$TRY">TRY</option><option value="TWD" data-reactid=".4.1.0.$TWD">TWD</option><option value="UAH" data-reactid=".4.1.0.$UAH">UAH</option><option value="USD" data-reactid=".4.1.0.$USD">USD</option><option value="UYU" data-reactid=".4.1.0.$UYU">UYU</option><option value="VND" data-reactid=".4.1.0.$VND">VND</option><option value="ZAR" data-reactid=".4.1.0.$ZAR">ZAR</option>
										</select>
									</div>
								</div>
							</div>
							<div class="cx-number"></div>
						</div>

					</div>

					<div class="col-md-2 col-md-offset-1 hide-sm">
						<h2 class="h5">บริษัท</h2>
						<ul class="list-layout">
							<li>
								<a href="/about/about-us" class="link-contrast">เกี่ยวกับเรา</a>
							</li>
							<li>
								<a href="/careers" class="link-contrast">อาชีพ</a>
							</li>
							<li>
								<a href="/press/news" class="link-contrast">สื่อข่าวสาร</a>
							</li>
							<li>
								<a href="http://blog.airbnb.com" class="link-contrast">บล็อก</a>
							</li>
							<li>
								<a href="/help?from=footer" class="link-contrast">ความช่วยเหลือ</a>
							</li>
							<li>
								<a href="/policies" class="link-contrast">นโยบาย</a>
							</li>
							<li>
								<a href="/disaster-response" class="link-contrast">การรับมือภัยพิบัติ</a>
							</li>
							<li>
								<a href="/terms" class="link-contrast">เงื่อนไขและความเป็นส่วนตัว</a>
							</li>
						</ul>
					</div>

					<div class="col-md-2 hide-sm">
						<h2 class="h5">ค้นพบ</h2>
						<ul class="list-layout">
							<li>
								<a href="/trust" class="link-contrast">ความไว้ใจและความปลอดภัย</a>
							</li>
							<li>
								<a href="/invite?r=6" class="link-contrast">เชิญเพื่อน</a>
							</li>
							<li>
								<a href="/gift?s=footer" class="link-contrast">บัตรของขวัญ</a>
							</li>
							<li>
								<a href="/wishlists/airbnb_picks" class="link-contrast">ที่พักที่ Airbnb คัดสรร</a>
							</li>
							<li>
								<a href="/mobile" class="link-contrast">โทรศัพท์มือถือ</a>
							</li>
							<li>
								<a href="https://www.airbnbaction.com?utm_source=airbnb&amp;utm_medium=footer&amp;utm_campaign=product" class="link-contrast" target="_blank">การดำเนินการของ Airbnb</a>
							</li>
							<li>
								<a href="/business-travel?s=footer" class="link-contrast">การเดินทางเพื่อธุรกิจ</a>
							</li>
							<li>
								<a href="/sitemaps" class="link-contrast">แผนที่เว็บไซต์</a>
							</li>
						</ul>
					</div>

					<div class="col-md-2 hide-sm">
						<h2 class="h5">การให้เช่าที่พัก</h2>
						<ul class="list-layout">
							<li>
								<a href="/host" class="link-contrast">เหตุผลที่ควรให้เช่าที่พักบน Airbnb</a>
							</li>
							<li>
								<a href="/hospitality" class="link-contrast">การต้อนรับ</a>
							</li>
							<li>
								<a href="/help/responsible-hosting" class="link-contrast">การให้เช่าที่พักอย่างมีความรับผิดชอบ</a>
							</li>
							<li>
								<a href="/home-safety" class="link-contrast">ความปลอดภัยในบ้าน</a>
							</li>
							<li>
								<a href="/host/instant" class="link-contrast">จองทันที</a>
							</li>
						</ul>
					</div>
				</div>

				<div class="col-sm-12 space-4 space-top-4 show-sm">
					<ul class="list-layout list-inline text-center h5">
						<li>
							<a href="/about/about-us" class="link-contrast">เกี่ยวกับเรา</a>
						</li>
						<li>
							<a href="/careers" class="link-contrast">อาชีพ</a>
						</li>
						<li>
							<a href="/press/news" class="link-contrast">สื่อข่าวสาร</a>
						</li>
						<li>
							<a href="http://blog.airbnb.com" class="link-contrast">บล็อก</a>
						</li>
						<li>
							<a href="/terms" class="link-contrast">เงื่อนไขและความเป็นส่วนตัว</a>
						</li>
					</ul>
				</div>

				<hr class="footer-divider space-top-8 space-4 hide-sm">

				<div class="text-center">
					<h2 class="h5 space-4 hide-sm">ติดตามเราได้ที่</h2>
					<ul class="list-layout list-inline" itemscope="" itemtype="http://schema.org/Organization">
						<link itemprop="url" href="https://th.airbnb.com">
						<meta itemprop="logo" content="https://a2.muscache.com/airbnb/static/logos/belo-200x200-4d851c5b28f61931bf1df28dd15e60ef.png">
						<li>
							<a href="https://www.facebook.com/airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank"> <span class="screen-reader-only">Facebook</span> <i class="icon footer-icon icon-facebook"></i> </a>
						</li>
						<li>
							<a href="https://plus.google.com/+airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" rel="publisher" target="_blank"> <span class="screen-reader-only">Google+</span> <i class="icon footer-icon icon-google-plus"></i> </a>
						</li>

						<li>
							<a href="https://twitter.com/airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank"> <span class="screen-reader-only">Twitter</span> <i class="icon footer-icon icon-twitter"></i> </a>
						</li>

						<li>
							<a href="https://www.linkedin.com/company/airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank"> <span class="screen-reader-only">LinkedIn</span> <i class="icon footer-icon icon-linkedin"></i> </a>
						</li>

						<li>
							<a href="https://www.pinterest.com/airbnb/" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank"> <span class="screen-reader-only">Pinterest</span> <i class="icon footer-icon icon-pinterest"></i> </a>
						</li>
						<li>
							<a href="https://www.youtube.com/user/Airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank"> <span class="screen-reader-only">YouTube</span> <i class="icon footer-icon icon-youtube"></i> </a>
						</li>
						<li>
							<a href="https://instagram.com/airbnb" class="link-contrast footer-icon-container" itemprop="sameAs" target="_blank"> <span class="screen-reader-only">Instagram</span> <i class="icon footer-icon icon-instagram"></i> </a>
						</li>
					</ul>
					<div class="space-top-2 text-muted">
						© Airbnb, Inc.
					</div>
				</div>
			</footer>

		</div>

		<meta content="{&quot;canonical_host&quot;:&quot;th.airbnb.com&quot;,&quot;language&quot;:&quot;th&quot;,&quot;locale&quot;:&quot;th&quot;,&quot;api_config&quot;:{&quot;baseUrl&quot;:&quot;https://th.airbnb.com/api&quot;,&quot;key&quot;:&quot;d306zoyjsyarp7ifhu67rjxn52tv0t20&quot;},&quot;deep_link&quot;:null,&quot;tracking_context&quot;:{&quot;source&quot;:&quot;monorail&quot;,&quot;platform&quot;:&quot;js&quot;,&quot;version&quot;:&quot;9ac9c8ef594e76cc312688550453f0f88bdcecee&quot;,&quot;controller&quot;:&quot;info&quot;,&quot;action&quot;:&quot;host&quot;,&quot;req_uuid&quot;:&quot;52ddec6a-1491-45cc-986f-6f7535b4d4d9&quot;,&quot;shardset&quot;:&quot;a0,a1,a2&quot;},&quot;no_flash_alerts&quot;:null,&quot;google_maps_url&quot;:&quot;https://maps.googleapis.com/maps/api/js?language=th&amp;region=US&amp;v=3.24&amp;libraries=places&amp;client=gme-airbnbinc&amp;channel=monorail-prod&quot;,&quot;airbnb_open_street_map_js_url&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/mapbox.bundle-382ed224bd2833677d53.js&quot;,&quot;airbnb_open_street_map_css_url&quot;:&quot;https://a1.muscache.com/airbnb/static/mapbox/mapbox-2413745018eab23321bb6ef63237e2d6.css&quot;,&quot;d3_js_url&quot;:&quot;https://a0.muscache.com/airbnb/static/vendor/d3.v3.5.17.min-5482cf82071bdbae91300ccc092b8ebb.js&quot;,&quot;sift_key&quot;:&quot;3d72676b30&quot;,&quot;pellet_id&quot;:&quot;kfgn8s24&quot;}" id="_bootstrap-layout-init">
		<meta content="{&quot;language&quot;:&quot;th&quot;,&quot;locale&quot;:&quot;th&quot;,&quot;country&quot;:&quot;TH&quot;,&quot;tld_country&quot;:&quot;US&quot;,&quot;currencies&quot;:{&quot;AED&quot;:{&quot;symbol&quot;:&quot;&amp;#1583;.&amp;#1573;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;ﺩ.ﺇ&quot;}},&quot;ARS&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;AUD&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;BGN&quot;:{&quot;symbol&quot;:&quot;&amp;#1083;&amp;#1074;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;лв&quot;}},&quot;BRL&quot;:{&quot;symbol&quot;:&quot;R$&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;CAD&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;CHF&quot;:{&quot;symbol&quot;:&quot;CHF&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true,&quot;hide_code_if_symbol_shown&quot;:true}},&quot;CLP&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;CNY&quot;:{&quot;symbol&quot;:&quot;&amp;#65509;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;￥&quot;}},&quot;COP&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;CRC&quot;:{&quot;symbol&quot;:&quot;&amp;#8353;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₡&quot;}},&quot;CZK&quot;:{&quot;symbol&quot;:&quot;&amp;#75;&amp;#269;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;Kč&quot;}},&quot;DKK&quot;:{&quot;symbol&quot;:&quot;kr&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true,&quot;explicit_currency_not_aesthetic&quot;:true}},&quot;EUR&quot;:{&quot;symbol&quot;:&quot;&amp;euro;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;€&quot;,&quot;position&quot;:&quot;special&quot;}},&quot;GBP&quot;:{&quot;symbol&quot;:&quot;&amp;pound;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;£&quot;}},&quot;HKD&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;HRK&quot;:{&quot;symbol&quot;:&quot;kn&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;HUF&quot;:{&quot;symbol&quot;:&quot;Ft&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;IDR&quot;:{&quot;symbol&quot;:&quot;Rp&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;ILS&quot;:{&quot;symbol&quot;:&quot;&amp;#8362;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₪&quot;}},&quot;INR&quot;:{&quot;symbol&quot;:&quot;&amp;#8377;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₹&quot;}},&quot;JPY&quot;:{&quot;symbol&quot;:&quot;&amp;yen;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;¥&quot;,&quot;space_between_price_and_symbol&quot;:true}},&quot;KRW&quot;:{&quot;symbol&quot;:&quot;&amp;#8361;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₩&quot;}},&quot;MAD&quot;:{&quot;symbol&quot;:&quot;MAD&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;MXN&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;MYR&quot;:{&quot;symbol&quot;:&quot;&amp;#82;&amp;#77;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;RM&quot;}},&quot;NOK&quot;:{&quot;symbol&quot;:&quot;kr&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true,&quot;explicit_currency_not_aesthetic&quot;:true}},&quot;NZD&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;PEN&quot;:{&quot;symbol&quot;:&quot;&amp;#83;&amp;#47;&amp;#46;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;S/.&quot;}},&quot;PHP&quot;:{&quot;symbol&quot;:&quot;&amp;#8369;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₱&quot;}},&quot;PLN&quot;:{&quot;symbol&quot;:&quot;z&amp;#22;&amp;#322;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;zł&quot;,&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true}},&quot;RON&quot;:{&quot;symbol&quot;:&quot;lei&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;RUB&quot;:{&quot;symbol&quot;:&quot;&amp;#1088;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₽&quot;,&quot;position&quot;:&quot;after&quot;}},&quot;SAR&quot;:{&quot;symbol&quot;:&quot;SR&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;SEK&quot;:{&quot;symbol&quot;:&quot;kr&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true,&quot;explicit_currency_not_aesthetic&quot;:true}},&quot;SGD&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;THB&quot;:{&quot;symbol&quot;:&quot;&amp;#3647;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;฿&quot;}},&quot;TRY&quot;:{&quot;symbol&quot;:&quot;&amp;#84;&amp;#76;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₺&quot;,&quot;position&quot;:&quot;after&quot;,&quot;space_between_price_and_symbol&quot;:true}},&quot;TWD&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}},&quot;UAH&quot;:{&quot;symbol&quot;:&quot;&amp;#8372;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₴&quot;}},&quot;USD&quot;:{&quot;symbol&quot;:&quot;$&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{}},&quot;UYU&quot;:{&quot;symbol&quot;:&quot;&amp;#36;&amp;#85;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;$U&quot;}},&quot;VND&quot;:{&quot;symbol&quot;:&quot;&amp;#8363;&quot;,&quot;code_required&quot;:false,&quot;options&quot;:{&quot;unicode_symbol&quot;:&quot;₫&quot;}},&quot;ZAR&quot;:{&quot;symbol&quot;:&quot;R&quot;,&quot;code_required&quot;:true,&quot;options&quot;:{}}},&quot;current_locale_name&quot;:&quot;ภาษาไทย&quot;,&quot;languages&quot;:[{&quot;locale_name&quot;:&quot;Bahasa Indonesia&quot;,&quot;locale&quot;:&quot;id&quot;},{&quot;locale_name&quot;:&quot;Bahasa Melayu&quot;,&quot;locale&quot;:&quot;ms&quot;},{&quot;locale_name&quot;:&quot;Català&quot;,&quot;locale&quot;:&quot;ca&quot;},{&quot;locale_name&quot;:&quot;Dansk&quot;,&quot;locale&quot;:&quot;da&quot;},{&quot;locale_name&quot;:&quot;Deutsch&quot;,&quot;locale&quot;:&quot;de&quot;},{&quot;locale_name&quot;:&quot;English&quot;,&quot;locale&quot;:&quot;en&quot;},{&quot;locale_name&quot;:&quot;Español&quot;,&quot;locale&quot;:&quot;es&quot;},{&quot;locale_name&quot;:&quot;Eλληνικά&quot;,&quot;locale&quot;:&quot;el&quot;},{&quot;locale_name&quot;:&quot;Français&quot;,&quot;locale&quot;:&quot;fr&quot;},{&quot;locale_name&quot;:&quot;Italiano&quot;,&quot;locale&quot;:&quot;it&quot;},{&quot;locale_name&quot;:&quot;Magyar&quot;,&quot;locale&quot;:&quot;hu&quot;},{&quot;locale_name&quot;:&quot;Nederlands&quot;,&quot;locale&quot;:&quot;nl&quot;},{&quot;locale_name&quot;:&quot;Norsk&quot;,&quot;locale&quot;:&quot;no&quot;},{&quot;locale_name&quot;:&quot;Polski&quot;,&quot;locale&quot;:&quot;pl&quot;},{&quot;locale_name&quot;:&quot;Português&quot;,&quot;locale&quot;:&quot;pt&quot;},{&quot;locale_name&quot;:&quot;Suomi&quot;,&quot;locale&quot;:&quot;fi&quot;},{&quot;locale_name&quot;:&quot;Svenska&quot;,&quot;locale&quot;:&quot;sv&quot;},{&quot;locale_name&quot;:&quot;Türkçe&quot;,&quot;locale&quot;:&quot;tr&quot;},{&quot;locale_name&quot;:&quot;Íslenska&quot;,&quot;locale&quot;:&quot;is&quot;},{&quot;locale_name&quot;:&quot;Čeština&quot;,&quot;locale&quot;:&quot;cs&quot;},{&quot;locale_name&quot;:&quot;Русский&quot;,&quot;locale&quot;:&quot;ru&quot;},{&quot;locale_name&quot;:&quot;ภาษาไทย&quot;,&quot;locale&quot;:&quot;th&quot;},{&quot;locale_name&quot;:&quot;中文 (简体)&quot;,&quot;locale&quot;:&quot;zh&quot;},{&quot;locale_name&quot;:&quot;中文 (繁體)&quot;,&quot;locale&quot;:&quot;zh-TW&quot;},{&quot;locale_name&quot;:&quot;日本語&quot;,&quot;locale&quot;:&quot;ja&quot;},{&quot;locale_name&quot;:&quot;한국어&quot;,&quot;locale&quot;:&quot;ko&quot;}]}" id="_bootstrap-i18n-init">
		<meta content="{&quot;enabled&quot;:true,&quot;appId&quot;:&quot;138566025676&quot;,&quot;scope&quot;:&quot;email,user_birthday,user_likes,user_education_history,user_hometown,user_location,user_friends&quot;,&quot;sdkUrl&quot;:&quot;https://connect.facebook.net/th_TH/sdk.js&quot;}" id="_bootstrap-facebook-init">
		<meta content="{&quot;packages/field_guide.bundle.js&quot;:&quot;https://a1.muscache.com/airbnb/static/packages/field_guide.bundle-b8a43d47500c25de1aad.js&quot;,&quot;packages/airlock_modal.bundle.js&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/airlock_modal.bundle-e6cd14b5af8291f22140.js&quot;,&quot;packages/airlock_inline.bundle.js&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/airlock_inline.bundle-a4f80040e004ff66f8e5.js&quot;,&quot;packages/account_activation.bundle.js&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/account_activation.bundle-a8985c16a09369b6cb32.js&quot;,&quot;packages/reset_password_modal.bundle.js&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/reset_password_modal.bundle-c931d71c594f88fa024e.js&quot;}" id="_bootstrap-javascript_paths">
		<meta content="{&quot;show_engagement_overlay_p2&quot;:false,&quot;show_engagement_overlay_p3&quot;:false,&quot;show_engagement_overlay_p1&quot;:false,&quot;account_activation_flow&quot;:true,&quot;host_growth.show_dashboard_moweb_nav_bar&quot;:true,&quot;px_trips_menu_in_header&quot;:true,&quot;back_to_search_results&quot;:false,&quot;first_visit_survey&quot;:true,&quot;oauth_popup&quot;:true,&quot;modal_audit&quot;:true,&quot;referrals_avatar_dropdown_entry_point_copy&quot;:true,&quot;p1_dissallow_locationsless_search_sm_v2&quot;:true,&quot;react_sm_search_modal_v3&quot;:true,&quot;sm_search_rm_room_type&quot;:true,&quot;use_android_deep_link&quot;:true,&quot;sm_preload_latest_search&quot;:true,&quot;ehp_infants_v2_roll_out&quot;:true,&quot;china_mapbox_street_force_trebuchet&quot;:false,&quot;china_mapbox_street&quot;:true,&quot;china_app_banner_bottom&quot;:false,&quot;china_moweb_loading_indicators&quot;:false,&quot;global_moweb_loading_indicators&quot;:false,&quot;render_sitewide_footer_instant_promo&quot;:true,&quot;post_signup_engagement_modal&quot;:true,&quot;lys_login_signup_location_v2&quot;:true,&quot;lys_login_signup_type_v2&quot;:false,&quot;mt_show_city_host_link_header&quot;:true}" id="_bootstrap-trebuchet">
		<meta content="&quot;info#host&quot;" id="_bootstrap-controller_action_pair">
		<meta content="false" id="_bootstrap-show-signup-garden">
		<meta content="true" id="_bootstrap-download_garden_enabled">
		<meta content="false" id="_bootstrap-help-dropdown-experiment-enabled">
		<meta content="{&quot;email&quot;:&quot;3a59b756784936e86b6ccdfa7739af1dc1766b6879df4b173729584938a8d51d&quot;,&quot;first_name&quot;:&quot;220c121291f6446ab898e760db13876ebbb32ffb61482a2e2b29fdf5ef00e6b4&quot;,&quot;last_name&quot;:&quot;7a9e63e201072aa6d8e79ef027adec2a2c4399e1f72753083626539e4dccbc4f&quot;,&quot;gender&quot;:&quot;62c66a7a5dd70c3146618063c344e531e6d4b59e379808443ce962b3abd63c5a&quot;,&quot;date_of_birth&quot;:&quot;9ab9f88a0416e5c6e2530824650f0ab8fcd1ff4240cc6bf4e133bfa00a48d758&quot;,&quot;external_id&quot;:&quot;8cf3ba341751bd20385169d7adfe9f0b85594e4c80a11fdaaed8e6a9c0a3b302&quot;}" id="_bootstrap-facebook_advanced_matching">
		<meta content="{}" id="_bootstrap-pg_active_facebook_experiments">
		<meta content="&quot;https://a2.muscache.com/airbnb/static/packages/engagement_carousel.bundle-fcfcd4c34aab49047965.js&quot;" id="_bootstrap-engagement_post_signup_js">
		<meta content="{&quot;should_load_inspectlet&quot;:true,&quot;tags&quot;:{&quot;user_id&quot;:98642671,&quot;bev&quot;:&quot;1475856628_EeFjYraU4sxS4xlx&quot;,&quot;page&quot;:&quot;slash_host&quot;}}" id="_bootstrap-inspectlet_data">
		<meta content="{&quot;env&quot;:&quot;production&quot;,&quot;client_id&quot;:&quot;5ca541ad-47b9-4b16-8045-2f4c6e830450&quot;,&quot;client_key&quot;:&quot;production_r29fkzj4_pfpfmbt48yh4ht8c&quot;}" id="_bootstrap-amex_checkout">
		<meta content="{&quot;js&quot;:&quot;https://a1.muscache.com/airbnb/static/packages/surveyair.bundle-cfde92bcd5b24464284f.js&quot;,&quot;css&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/surveyair-46037f656707ea1bcd124dc2999262e4.css&quot;}" id="_bootstrap-surveyair">
		<meta content="{&quot;js&quot;:&quot;https://a0.muscache.com/airbnb/static/packages/browser-update.bundle-79214a54504ab1b647ac.js&quot;}" id="_bootstrap-browser-update">
		<meta content="&quot;https://a0.muscache.com/airbnb/static/china_typeahead_data-06cee030dd9f4e721c7044d7e83e002e.json&quot;" id="_bootstrap-china_typeahead_data">
		<meta content="{&quot;mario_copy_monorail_p3_modal.title.variation0&quot;:&quot;ขอต้อนรับสู่ Airbnb&quot;,&quot;mario_copy_monorail_p3_modal.title.variation1&quot;:&quot;Airbnb มีอยู่ในเกือบทุกแห่งหน&quot;,&quot;mario_copy_monorail_p3_modal.title.variation2&quot;:&quot;บ้าน Airbnb ยอดเยี่ยมที่ราคาเท่าใดก็ตาม&quot;,&quot;mario_copy_monorail_p3_modal.title.variation3&quot;:&quot;มีประสบการณ์ Airbnb แบบห้าดาว&quot;,&quot;mario_copy_monorail_p3_modal.summary.variation0&quot;:&quot;เลือกจากบ้านไม่เหมือนใครมากกว่า 2 ล้านหลังสำหรับการเดินทางครั้งถัดไปของคุณ ไม่ว่าจะเป็นกับครอบครัว เพื่อนหรือเพื่องาน&quot;,&quot;mario_copy_monorail_p3_modal.summary.variation1&quot;:&quot;หาบ้าน 2 ล้านหลังในเกือบทุกเมืองทั่วโลก และเนื่องจากมีเมืองอยู่ทั่วโลก คุณสามารถพักในที่ที่คุณต้องการ&quot;,&quot;mario_copy_monorail_p3_modal.summary.variation2&quot;:&quot;จองสถานที่ที่ตรงกับงบประมาณใดก็ตาม ตั้งแต่สตูดิโอเรียบง่ายไปจนถึงบ้านหรู และหาบ้านที่มีสิ่งอำนวยความสะดวกพื้นฐาน เช่น WiFi และครัวโดยไม่มีค่าใช้จ่ายเพิ่มเติม&quot;,&quot;mario_copy_monorail_p3_modal.summary.variation3&quot;:&quot;เลือกจากบ้านไร้ที่ติและออกแบบมาอย่างดี ทั้งหมดนี้มีบุคลิกและรูปแบบการให้เช่าที่พักของเจ้าของที่พักแต่ละคนต่างกันไป&quot;,&quot;mario_copy_monorail_referrals.tab_text.variation0&quot;:&quot;เครดิตการเดินทาง&quot;,&quot;mario_copy_monorail_referrals.tab_text.variation1&quot;:&quot;เชิญเพื่อน&quot;,&quot;mario_copy_monorail_referrals.tab_text.variation2&quot;:&quot;แนะนำเพื่อน&quot;,&quot;mario_copy_monorail_referrals.tab_text.variation3&quot;:&quot;ผู้ได้รับการแนะนำ&quot;,&quot;mario_copy_monorail_referrals.banner_body_text.variation0&quot;:&quot;ให้ส่วนลดเพื่อคุณ %{sign_up_credit} สำหรับการเดินทางของเขาบน Airbnb และคุณจะได้รับเครดิตการเดินทางถึง %{total_credit}&quot;,&quot;engagement_overlay.single_page.title&quot;:&quot;ยินดีต้อนรับสู่ Airbnb&quot;,&quot;engagement_overlay.single_page.summary&quot;:&quot;เลือกจากบ้านไม่เหมือนใครมากกว่า 2 ล้านหลังสำหรับการเดินทางครั้งถัดไปของคุณ ไม่ว่าจะเป็นกับครอบครัว เพื่อนหรือเพื่องาน&quot;,&quot;engagement_overlay.single_page.complete&quot;:&quot;เริ่มต้น&quot;,&quot;3things_headline_onboarding&quot;:&quot;3 สิ่งที่ควรทราบเกี่ยวกับ Airbnb&quot;,&quot;3things_body_onboarding&quot;:&quot;นี่คือเหตุผลที่คนหลายล้านคนเลือก Airbnb เมื่อพวกเขาเดินทางกับครอบครัว เพื่อนหรือเพื่องาน&quot;,&quot;quality1_headline_onboarding&quot;:&quot;ประสบการณ์ 5 ดาวในสถานที่ไม่เหมือนใคร&quot;,&quot;quality1_body_onboarding&quot;:&quot;หาบ้านสะอาดและออกแบบอย่างสวยงามทั่วโลก และได้รับความคิดเห็นและคำแนะนำโดยผู้เข้าพักในอดีต&quot;,&quot;value1_headline_onboarding&quot;:&quot;ความสะดวกสบายของบ้านที่ราคาดีเยี่ยม&quot;,&quot;value1_body_onboarding&quot;:&quot;จองสถานที่ที่เหมาะกับงบเท่าใดก็ตาม บ้านหลายหลังก็มี WiFi ครัวและสิ่งอำนวยความสะดวกพื้นฐานโดยไม่ต้องจ่ายค่าใช้จ่ายเพิ่มเติม&quot;,&quot;location1_headline_onboarding&quot;:&quot;บ้านหลายล้านหลังในมากกว่า 190 ประเทศ&quot;,&quot;location1_body_onboarding&quot;:&quot;ค้นหาบ้านพัก 2 ล้านแห่งจากเกือบทุกเมืองทั่วโลก คุณจะพักที่ใดก็ได้ตามต้องการเพราะมีที่พักกระจายอยู่ทั่วโลก&quot;,&quot;service1_headline_onboarding&quot;:&quot;เจ้าของที่พักใส่ใจการพักของคุณ&quot;,&quot;service1_body_onboarding&quot;:&quot;แทนที่จะมีพนักงานต้อนรับ คุณจะมีเจ้าของที่พักที่จะคอยตอบคำถามเกี่ยวกับบ้านและบริเวณใกล้เคียงของพวกเขา&quot;,&quot;shared.Next&quot;:&quot;ถัดไป&quot;,&quot;shared.Back&quot;:&quot;กลับไป&quot;,&quot;shared.Got it&quot;:&quot;เข้าใจแล้ว&quot;,&quot;engagement.onboarding.modal.title&quot;:&quot;หาบ้านใน %{localized_city} บน Airbnb&quot;,&quot;start_searching&quot;:&quot;เริ่มค้นหา&quot;,&quot;engagement.discover&quot;:&quot;ค้นพบบ้านทั้งหลังและห้องส่วนตัวที่ดีเลิศสำหรับการเดินทางใดก็ตาม&quot;,&quot;first_visit_survey.help_us&quot;:&quot;ช่วยเราเรียนรู้เพิ่มเติมเกี่ยวกับคนที่เข้าชม Airbnb&quot;,&quot;first_visit_survey.ready&quot;:&quot;คุณรู้สึกว่าคุณพร้อมแค่ไหนที่จะลองใช้ Airbnb สำหรับการเดินทางครั้งถัดไปของคุณ&quot;,&quot;first_visit_survey.ready.not_ready&quot;:&quot;ไม่พร้อมเลย&quot;,&quot;first_visit_survey.ready.ready&quot;:&quot;พร้อมปานกลาง&quot;,&quot;first_visit_survey.ready.sort_of_ready&quot;:&quot;พร้อมเล็กน้อย&quot;,&quot;first_visit_survey.ready.totally_ready&quot;:&quot;พร้อมอย่างยิ่ง&quot;,&quot;first_visit_survey.ready.very_ready&quot;:&quot;พร้อมมาก&quot;,&quot;first_visit_survey.planning_trip&quot;:&quot;คุณกำลังวางแผนการเดินทางอยู่ใช่ไหม&quot;,&quot;first_visit_survey.planning_trip.trip_in_mind&quot;:&quot;ใช่ ฉันรู้ว่าฉันกำลังจะไปที่ไหน&quot;,&quot;first_visit_survey.planning_trip.not_sure_where&quot;:&quot;ใช่ แต่ฉันไม่รู้ว่าฉันกำลังไปที่ไหน&quot;,&quot;first_visit_survey.planning_trip.no_plans&quot;:&quot;ฉันเพียงมองเฉยๆ&quot;,&quot;signup_survey.how_learned&quot;:&quot;คุณรู้จัก Airbnb ได้อย่างไร&quot;,&quot;signup_survey.event&quot;:&quot;ที่งานอีเวนท์&quot;,&quot;signup_survey.friend_family&quot;:&quot;จากเพื่อนหรือสมาชิกในครอบครัว&quot;,&quot;signup_survey.internet_search&quot;:&quot;การค้นหาทางอินเทอร์เน็ต&quot;,&quot;signup_survey.news_article&quot;:&quot;บทความข่าว&quot;,&quot;signup_survey.online_ad&quot;:&quot;โฆษณาออนไลน์&quot;,&quot;signup_survey.print_ad&quot;:&quot;โฆษณาสิ่งพิมพ์ บิลบอร์ด หรือโปสเตอร์&quot;,&quot;signup_survey.social_media&quot;:&quot;สื่อสังคมหรือบล็อกโพสต์&quot;,&quot;signup_survey.tv&quot;:&quot;ทีวี&quot;,&quot;signup_survey.dont_remember&quot;:&quot;ฉันจำไม่ได้&quot;,&quot;signup_survey.other&quot;:&quot;อื่นๆ&quot;,&quot;skip&quot;:&quot;ข้าม&quot;,&quot;guest_picker_guests_label&quot;:&quot;ผู้เข้าพัก %{smart_count} คน&quot;,&quot;guest_picker_adult_count&quot;:&quot;ผู้ใหญ่ %{smart_count} คน&quot;,&quot;guest_picker_child_count&quot;:&quot;เด็ก %{smart_count} คน&quot;,&quot;guest_picker_infant_count&quot;:&quot;ทารก %{smart_count} คน&quot;,&quot;guest_picker_age_range&quot;:&quot;อายุ %{min} - %{max} ปี&quot;,&quot;guest_picker_age_under&quot;:&quot;อายุน้อยกว่า %{age} ปี&quot;,&quot;guest_picker_guest_maximum&quot;:&quot;จำนวนผู้เข้าพักมากสุด %{smart_count} คน&quot;,&quot;guest_picker_close&quot;:&quot;ปิด&quot;,&quot;guest_picker_increment&quot;:&quot;ยอดเพิ่มขึ้นของ %{label}&quot;,&quot;guest_picker_decrement&quot;:&quot;ยอดลดลงของ %{label}&quot;,&quot;guest_picker_adults&quot;:&quot;ผู้ใหญ่&quot;,&quot;guest_picker_children&quot;:&quot;เด็ก&quot;,&quot;guest_picker_infants&quot;:&quot;ทารก&quot;,&quot;saved_search_search_for_city_address_landmark&quot;:&quot;ค้นหาตามเมือง ที่อยู่ สถานที่ที่น่าสนใจ...&quot;,&quot;saved_search_search_button&quot;:&quot;ค้นหา&quot;,&quot;saved_search_please_set_location&quot;:&quot;กรุณาตั้งค่าสถานที่ตั้ง&quot;,&quot;saved_search_checkin&quot;:&quot;เช็คอิน&quot;,&quot;saved_search_checkout&quot;:&quot;เช็คเอาท์&quot;,&quot;saved_search_number_of_guests&quot;:&quot;จำนวนผู้เข้าพัก&quot;,&quot;saved_search_recent_searches&quot;:&quot;การค้นหาเมื่อเร็วๆนี้&quot;,&quot;saved_search_destinations&quot;:&quot;จุดหมายปลายทาง&quot;,&quot;saved_search_guests&quot;:&quot;ผู้เข้าพัก %{smart_count} คน&quot;,&quot;android.strings.search_where_to&quot;:&quot;ไปที่ไหน&quot;,&quot;shared.Close&quot;:&quot;ปิด&quot;,&quot;Clear Dates&quot;:&quot;ลบวันที่&quot;,&quot;smart_banner.title&quot;:&quot;Airbnb สำหรับ iOS&quot;,&quot;smart_banner.title_android&quot;:&quot;Airbnb สำหรับ Android&quot;,&quot;smart_banner.INSTALL&quot;:&quot;ติดตั้ง&quot;,&quot;smart_banner.OPEN MOBILE APP&quot;:&quot;เปิด&quot;,&quot;shared.Close&quot;:&quot;ปิด&quot;,&quot;Password&quot;:&quot;รหัสผ่าน&quot;,&quot;users.Confirm_Password_to_Continue&quot;:&quot;ยืนยันรหัสผ่านเพื่อดำเนินการต่อ&quot;,&quot;users.Confirm_Password&quot;:&quot;ยืนยันรหัสผ่าน&quot;,&quot;users.Cancel&quot;:&quot;ยกเลิก&quot;,&quot;users.Please_enter_your_Airbnb_password_to_continue.&quot;:&quot;เพื่อความปลอดภัยของคุณ โปรดกรอกรหัสผ่าน Airbnb เพื่อดำเนินการต่อ&quot;,&quot;user.signup.forgot_password&quot;:&quot;ลืมรหัสผ่านใช่ไหม&quot;,&quot;users.Confirm_Facebook_Password&quot;:&quot;ยืนยันรหัสผ่าน Facebook&quot;,&quot;home&quot;:&quot;หน้าแรก&quot;,&quot;download_the_app&quot;:&quot;ดาวน์โหลดแอพ&quot;,&quot;sign_up&quot;:&quot;ลงทะเบียน&quot;,&quot;log_in&quot;:&quot;เข้าสู่ระบบ&quot;,&quot;alerts&quot;:&quot;ข้อความเตือน&quot;,&quot;inbox&quot;:&quot;กล่องข้อความ&quot;,&quot;discover&quot;:&quot;ค้นพบ&quot;,&quot;search&quot;:&quot;ค้นหา&quot;,&quot;how_it_works&quot;:&quot;Airbnb ทำงานอย่างไร&quot;,&quot;help&quot;:&quot;ความช่วยเหลือ&quot;,&quot;invite_friends&quot;:&quot;เชิญเพื่อน&quot;,&quot;logout&quot;:&quot;ออกจากระบบ&quot;,&quot;name&quot;:&quot;ผู้ใช้&quot;,&quot;photography&quot;:&quot;การถ่ายภาพ&quot;,&quot;your_trips&quot;:&quot;การเดินทางของคุณ&quot;,&quot;become_a_host&quot;:&quot;มาเป็นเจ้าของที่พัก&quot;,&quot;dashboard&quot;:&quot;แดชบอร์ด&quot;,&quot;close&quot;:&quot;ปิด&quot;,&quot;android.strings.search_where_to&quot;:&quot;ไปที่ไหน&quot;,&quot;checkin&quot;:&quot;เช็คอิน&quot;,&quot;checkout&quot;:&quot;เช็คเอาท์&quot;,&quot;shared.Check in&quot;:&quot;เช็คอิน&quot;,&quot;shared.Check out&quot;:&quot;เช็คเอาท์&quot;,&quot;clear_dates&quot;:&quot;ลบวันที่&quot;,&quot;x_guests&quot;:&quot;ผู้เข้าพัก %{smart_count} คน&quot;,&quot;entire_home&quot;:&quot;บ้านทั้งหลัง&quot;,&quot;private_room&quot;:&quot;ห้องส่วนตัว&quot;,&quot;shared_room&quot;:&quot;ห้องที่พักร่วมกัน&quot;,&quot;number_of_guests&quot;:&quot;จำนวนผู้เข้าพัก&quot;,&quot;room_type_0&quot;:&quot;บ้าน/อพาร์ทเมนท์ทั้งหลัง&quot;,&quot;room_type_1&quot;:&quot;ห้องส่วนตัว&quot;,&quot;room_type_2&quot;:&quot;ห้องเช่าร่วม&quot;,&quot;find_a_place&quot;:&quot;หาที่พัก&quot;,&quot;shared.x guests&quot;:&quot;ผู้เข้าพัก %{smart_count} คน&quot;,&quot;guests&quot;:&quot;ผู้เข้าพัก&quot;,&quot;room_type&quot;:&quot;ประเภทห้อง&quot;,&quot;shared.Help Center&quot;:&quot;ศูนย์ช่วยเหลือ&quot;,&quot;shared.Ask the Community&quot;:&quot;ถามชุมชน&quot;,&quot;Back&quot;:&quot;กลับไป&quot;,&quot;view this article in the help center&quot;:&quot;ดูบทความนี้ในศูนย์ช่วยเหลือ&quot;,&quot;field_guide.error.no_load_topic&quot;:&quot;ไม่มีบทความความช่วยเหลือที่แนะนำอยู่—เข้าชม%{link_start}ศูนย์ช่วยเหลือ%{link_end}แทน&quot;,&quot;field_guide.no_results&quot;:&quot;ไม่พบผลการค้นหา&quot;,&quot;field_guide.suggested_actions&quot;:&quot;การกระทำที่แนะนำ&quot;,&quot;field_guide.search_down&quot;:&quot;ไม่สามารถค้นหาได้ โปรดลองอีกครั้งในภายหลัง&quot;,&quot;field_guide.articles_result_title&quot;:&quot;บทความที่เกี่ยวกับ \&quot;%{query}\&quot;&quot;,&quot;field_guide.search_result_title&quot;:&quot;ผลการค้นหา \&quot;%{query}\&quot;&quot;,&quot;field_guide.suggested_articles&quot;:&quot;บทความที่แนะนำ&quot;,&quot;field_guide.how_can_we_help&quot;:&quot;เราจะช่วยคุณได้อย่างไร?&quot;,&quot;field_guide.welcome_name_how_can_we_help&quot;:&quot;ยินดีต้อนรับ %{first_name}! เราจะช่วยคุณได้อย่างไร&quot;,&quot;field_guide.welcome_how_can_we_help&quot;:&quot;ยินดีต้อนรับ! เราจะช่วยได้อย่างไร&quot;,&quot;field_guide.search_for_anything&quot;:&quot;ค้นหาอะไรก็ตาม (การจองที่พัก การได้รับเงิน ความคิดเห็น&quot;,&quot;field_guide.search_for_help&quot;:&quot;ขอความช่วยเหลือหรือค้นหาโดยใช้คำสำคัญ&quot;,&quot;field_guide.cant_find_what_youre_looking_for&quot;:&quot;ไม่พบสิ่งที่คุณมองหาอยู่หรือ&quot;,&quot;help.Visit the Help Center&quot;:&quot;ไปที่ศูนย์ช่วยเหลือ&quot;,&quot;help.Airbnb Help&quot;:&quot;ความช่วยเหลือของ Airbnb&quot;,&quot;help_center.search.Host articles related to query&quot;:&quot;บทความของเจ้าของที่พักที่เกี่ยวกับ ‘%{query}’&quot;,&quot;help_center.search.Guest articles related to query&quot;:&quot;บทความของผู้เข้าพักที่เกี่ยวกับ ‘%{query}’&quot;,&quot;help_center.search.X articles for query.v2&quot;:&quot;%{smart_count} บทความสำหรับ ‘%{query}’&quot;,&quot;help_center.search.There are no results for query&quot;:&quot;ไม่มีผลลัพธ์สำหรับ ‘%{query}’&quot;,&quot;help_center.search.Help Center results for query&quot;:&quot;ผลลัพธ์ในศูนย์ช่วยเหลือสำหรับ ‘%{query}’&quot;,&quot;help_center.search.See all Help Center results&quot;:&quot;ดูผลลัพธ์ในศูนย์ช่วยเหลือทั้งหมด&quot;,&quot;help_center.search.Community results for query&quot;:&quot;ผลลัพธ์ชุมชนสำหรับ ‘%{query}’&quot;,&quot;help_center.search.See all Community Center results&quot;:&quot;ดูผลลัพธ์ในศูนย์ชุมชนทั้งหมด&quot;,&quot;shared.Messages&quot;:&quot;ข้อความ&quot;,&quot;shared.Notifications&quot;:&quot;การแจ้งเตือน&quot;,&quot;shared.See all&quot;:&quot;ดูทั้งหมด&quot;,&quot;shared.View Dashboard&quot;:&quot;ดูแดชบอร์ด&quot;,&quot;shared.View Inbox&quot;:&quot;ดูกล่องข้อความ&quot;,&quot;notifications.Unread Messages In Inbox&quot;:&quot;คุณมี %{smart_count} ข้อความที่ยังไม่ได้อ่านในกล่องข้อความของคุณ&quot;,&quot;notifications.Unread Messages In Inbox From Last 7 Days&quot;:&quot;คุณมี %{smart_count} ข้อความที่ยังไม่ได้อ่านในกล่องข้อความของคุณจากสัปดาห์ที่ผ่านมา&quot;,&quot;notifications.Additional Unread Messages&quot;:&quot;คุณมี %{smart_count} ข้อความที่ยังไม่อ่านเพิ่มเติม&quot;,&quot;notifications.Additional Unread Messages Last Week&quot;:&quot;คุณมี %{smart_count} ข้อความที่ยังไม่อ่านเพิ่มเติมจากสัปดาห์ที่แล้ว&quot;,&quot;notifications.5+ Notifications&quot;:&quot;มีการแจ้งเตือนมากกว่า 5 ครั้งรอคุณอยู่ใน %{link_start}แดชบอร์ด%{link_end}ของคุณ&quot;,&quot;notifications.Read All Notifications&quot;:&quot;มีการแจ้งเตือน %{smart_count} รายการรอคุณอยู่ใน%{link_start}แดชบอร์ด%{link_end}&quot;,&quot;notifications.Read All Messages&quot;:&quot;ไม่มีข้อความใหม่ คุณอ่านครบหมดแล้ว!&quot;,&quot;notifications.Error&quot;:&quot;ขออภัย ไม่สามารถโหลดข้อความใหม่ได้ในขณะนี้ %{link_start}ดูกล่องข้อความ%{link_end}&quot;,&quot;airlock.title&quot;:&quot;การรักษาความปลอดภัย&quot;,&quot;airlock.multi_friction_selection.title&quot;:&quot;ช่วยเราทำให้บัญชีของคุณปลอดภัย&quot;,&quot;airlock.multi_friction_selection.description&quot;:&quot;เราต้องการยืนยันว่าเป็นคุณที่พยายามเข้าถึงบัญชีของคุณจริงๆ โปรดเลือกหนึ่งในวิธีต่อไปนี้เพื่อยืนยันตัวคุณเอง&quot;,&quot;airlock.cvv_verification.multi_select_title&quot;:&quot;บัตรเครดิต&quot;,&quot;airlock.cvv_verification.multi_select_helper&quot;:&quot;กรอกรหัสการรักษาความปลอดภัย (ฟรี)&quot;,&quot;airlock.cvv_verification.title&quot;:&quot;การยืนยันบัตรเครดิต&quot;,&quot;airlock.cvv_verification.verified&quot;:&quot;ยืนยันบัญชีแล้ว&quot;,&quot;airlock.cvv_verification.response.title&quot;:&quot;ช่วยเราทำให้บัญชีของคุณปลอดภัย&quot;,&quot;airlock.cvv_verification.response.description&quot;:&quot;เราต้องการยืนยันว่าเป็นคุณที่พยายามเข้าถึงบัญชีของคุณจริงๆ โปรดยืนยันตัวตนของคุณโดยกรอกรหัสรักษาความปลอดภัยจากบัตรเครดิตที่คุณใช้ในอดีต&quot;,&quot;airlock.cvv_verification.response.credit_card_label&quot;:&quot;บัตรเครดิต&quot;,&quot;airlock.cvv_verification.response.security_code_label&quot;:&quot;รหัสรักษาความปลอดภัย&quot;,&quot;airlock.cvv_verification.response.invalid&quot;:&quot;กรอกค่าไม่ถูกต้อง! กรุณาลองอีกครั้ง&quot;,&quot;airlock.photo_id_verification.title&quot;:&quot;การยืนยันตัวตนด้วยรูปถ่าย&quot;,&quot;airlock.photo_id_verification.option_selection.title&quot;:&quot;ยืนยันตัวตนคุณ&quot;,&quot;airlock.photo_id_verification.option_selection.description&quot;:&quot;การเข้าพักในที่พักที่จองผ่าน Airbnb เป็นการพักในบ้านของคนอื่น การสแกนบัตรประจำตัวที่ทางการออกให้จะช่วยให้เจ้าของที่พักของคุณรู้สึกสบายใจในการแบ่งพื้นที่ของตนให้ผู้อื่นเข้ามาอยู่ด้วย&quot;,&quot;airlock.photo_id_verification.response.title&quot;:&quot;สแกนบัตรประจำตัว&quot;,&quot;airlock.photo_id_verification.verified&quot;:&quot;ยืนยันบัญชีแล้ว&quot;,&quot;airlock.photo_id_verification.response.invalid&quot;:&quot;เกิดข้อผิดพลาดขณะสแกนบัตรประจำตัว โปรดลองอีกครั้ง&quot;,&quot;airlock.captcha.thread_create.response.description&quot;:&quot;บางครั้งโปรแกรมอัตโนมัติก็ใช้เว็บไซต์ในทางผิดและพยายามส่งข้อความหลอกลวงถึงคนอื่น ทำข้อความเตือนด้านล่างให้เสร็จเพื่อแสดงว่าคุณเป็นบุคคลแท้จริงที่ต้องการส่งข้อความนี้&quot;,&quot;airlock.captcha.response.invalid&quot;:&quot;โปรดพยายามทำการเตือนด้านล่างให้เสร็จอีกครั้ง&quot;,&quot;airlock.phone_verification.multi_select_title&quot;:&quot;โทรศัพท์&quot;,&quot;airlock.phone_verification.multi_select_helper&quot;:&quot;รับรหัสผ่านการโทรหรือ SMS&quot;,&quot;airlock.phone_verification.title&quot;:&quot;การยืนยันทางโทรศัพท์&quot;,&quot;airlock.phone_verification.option_selection.title&quot;:&quot;มาช่วยกันทำให้บัญชีของคุณปลอดภัย&quot;,&quot;airlock.phone_verification.listing_activate.option_selection.title&quot;:&quot;คุณต้องยืนยันการเปลี่ยนแปลงนี้&quot;,&quot;airlock.phone_verification.payout_gibraltar_instrument_create.option_selection.title&quot;:&quot;คุณต้องยืนยันการเปลี่ยนแปลงนี้&quot;,&quot;airlock.phone_verification.option_selection.description&quot;:&quot;เราต้องการยืนยันว่าเป็นคุณจริงๆ ที่พยายามเข้าถึงบัญชีของคุณ เราจะส่งรหัสไปยังเบอร์โทรที่คุณยืนยันก่อนหน้านี้ใน Airbnb&quot;,&quot;airlock.phone_verification.listing_activate.option_selection.description&quot;:&quot;เราต้องการยืนยันว่าเป็นคุณจริงๆ ที่พยายามเพิ่มที่พัก เราจะส่งรหัสไปยังเบอร์โทรที่คุณยืนยันก่อนหน้านี้ใน Airbnb&quot;,&quot;airlock.phone_verification.payout_gibraltar_instrument_create.option_selection.description&quot;:&quot;เราต้องการยืนยันว่าเป็นคุณจริงๆ ที่พยายามเพิ่มวิธีรับชำระเงิน เราจะส่งรหัสไปยังเบอร์โทรที่คุณยืนยันก่อนหน้านี้ใน Airbnb&quot;,&quot;airlock.phone_verification.option_selection.how&quot;:&quot;จะให้เราส่งรหัสไปทางไหน?&quot;,&quot;airlock.phone_verification.option_selection.where&quot;:&quot;เราควรส่งรหัสไปที่ไหน?&quot;,&quot;airlock.phone_verification.response.title&quot;:&quot;กรอกรหัส 4 หลัก&quot;,&quot;airlock.phone_verification.We sent a code to your phone number&quot;:&quot;เราส่งรหัสไปยังเบอร์โทรของคุณที่ลงท้ายด้วย %{last_four_digits}&quot;,&quot;airlock.phone_verification.Depending on your provider&quot;:&quot;อาจใช้เวลา 2-3 นาทีขึ้นอยู่กับผู้ให้บริการของคุณ&quot;,&quot;airlock.phone_verification.We will wait right here&quot;:&quot;เราจะรอที่นี่&quot;,&quot;airlock.phone_verification.Send me a text message&quot;:&quot;ส่งข้อความสั้นถึงฉัน (SMS)&quot;,&quot;airlock.phone_verification.Call me&quot;:&quot;โทรหาฉัน&quot;,&quot;airlock.api_error&quot;:&quot;มีบางอย่างผิดปกติขณะที่ดำเนินการคำขอของคุณ โปรดลองอีกครั้ง&quot;,&quot;airlock.phone_verification.Phone number ending in&quot;:&quot;เบอร์โทรที่ลงท้ายด้วย %{last_four}&quot;,&quot;airlock.phone_verification.Enter Your Code&quot;:&quot;กรอกรหัสของคุณ&quot;,&quot;airlock.phone_verification.response.invalid&quot;:&quot;ดูเหมือนคุณกรอกรหัสไม่ถูกต้อง&quot;,&quot;airlock.email_verification.multi_select_title&quot;:&quot;อีเมล์&quot;,&quot;airlock.email_verification.multi_select_helper&quot;:&quot;รับอีเมลยืนยัน&quot;,&quot;airlock.phone_verification_or_email_verification.title&quot;:&quot;การยืนยันโทรศัพท์&quot;,&quot;airlock.phone_verification_or_email_verification.option_selection.title&quot;:&quot;ช่วยเราทำให้บัญชีของคุณปลอดภัย&quot;,&quot;airlock.phone_verification_or_email_verification.option_selection.description&quot;:&quot;เราต้องการยืนยันว่าเป็นคุณจริงๆ ที่พยายามเข้าถึงบัญชีคุณ ดังนั้นเราจะส่งรหัสความปลอดภัยไปที่โทรศัพท์หรืออีเมลของคุณเพื่อยืนยันการเข้าใช้บัญชี&quot;,&quot;airlock.phone_verification_or_email_verification.option_selection.how&quot;:&quot;เราควรส่งรหัสอย่างไร&quot;,&quot;airlock.phone_verification_or_email_verification.option_selection.where&quot;:&quot;เราควรส่งรหัสไปที่ไหน&quot;,&quot;airlock.phone_verification_or_email_verification.response.title&quot;:&quot;กรอกรหัส 4 หลักของคุณ&quot;,&quot;airlock.phone_verification_or_email_verification.We sent a code to your phone number&quot;:&quot;เราส่งรหัสไปยังเบอร์โทรของคุณที่ลงท้ายด้วย %{last_four_digits}&quot;,&quot;airlock.phone_verification_or_email_verification.Depending on your provider&quot;:&quot;อาจใช้เวลา 2-3 นาทีขึ้นอยู่กับผู้ให้บริการของคุณ&quot;,&quot;airlock.phone_verification_or_email_verification.We will wait right here&quot;:&quot;เราจะรอที่นี่&quot;,&quot;airlock.phone_verification_or_email_verification.Send me a text message&quot;:&quot;ส่งข้อความสั้นถึงฉัน (SMS)&quot;,&quot;airlock.phone_verification_or_email_verification.Call me&quot;:&quot;โทรหาฉัน&quot;,&quot;airlock.phone_verification_or_email_verification.Phone number ending in&quot;:&quot;เบอร์โทรที่ลงท้ายด้วย %{last_four}&quot;,&quot;airlock.phone_verification_or_email_verification.Enter Your Code&quot;:&quot;กรอกรหัสของคุณ&quot;,&quot;airlock.phone_verification_or_email_verification.response.invalid&quot;:&quot;ดูเหมือนคุณกรอกรหัสไม่ถูกต้อง&quot;,&quot;airlock.identity_info_confirmation.response.confirm_details&quot;:&quot;ยืนยันรายละเอียด&quot;,&quot;airlock.identity_info_confirmation.response.make_sure_details_are_correct&quot;:&quot;ใช้เวลาสักครู่ตรวจให้แน่ใจว่ารายละเอียดบัญชีของคุณยังถูกต้องอยู่&quot;,&quot;airlock.identity_info_confirmation.response.name&quot;:&quot;ชื่อ&quot;,&quot;airlock.identity_info_confirmation.response.first_name&quot;:&quot;ชื่อแรก&quot;,&quot;airlock.identity_info_confirmation.response.last_name&quot;:&quot;ชื่อสกุล&quot;,&quot;airlock.identity_info_confirmation.response.email&quot;:&quot;อีเมล&quot;,&quot;airlock.identity_info_confirmation.response.birthday&quot;:&quot;วันเกิด&quot;,&quot;airlock.identity_info_confirmation.response.birthday_month&quot;:&quot;เดือน&quot;,&quot;airlock.identity_info_confirmation.response.birthday_day&quot;:&quot;วัน&quot;,&quot;airlock.identity_info_confirmation.response.birthday_year&quot;:&quot;ปี&quot;,&quot;airlock.identity_info_confirmation.response.confirm_and_continue&quot;:&quot;ยืนยันและดำเนินการต่อ&quot;,&quot;airlock.identity_info_confirmation.response.you_are_X_years_old&quot;:&quot;คุณได้ระบุว่าคุณมีอายุ %{emphasis_start}%{smart_count} ปี%{emphasis_end}&quot;,&quot;airlock.identity_info_confirmation.response.is_this_age_correct&quot;:&quot;ถูกต้องหรือไม่&quot;,&quot;airlock.identity_info_confirmation.response.not_correct_change_my_birthday&quot;:&quot;ไม่ เปลี่ยนวันเกิดของฉัน&quot;,&quot;airlock.identity_info_confirmation.response.yes_my_birthday_is_correct&quot;:&quot;ใช่ ถูกต้องแล้ว&quot;,&quot;airlock.password_reset.response.title&quot;:&quot;เปลี่ยนรหัสผ่านตอนนี้เลย&quot;,&quot;airlock.password_reset.response.description&quot;:&quot;การเปลี่ยนรหัสผ่านเป็นวิธีง่ายๆ ในการทำให้บัญชีคุณปลอดภัยเสมอ เปลี่ยนรหัสผ่านตอนนี้เลย&quot;,&quot;airlock.password_reset.response.current_password&quot;:&quot;รหัสผ่านปัจจุบัน&quot;,&quot;airlock.password_reset.response.new_password&quot;:&quot;รหัสผ่านใหม่&quot;,&quot;airlock.password_reset.response.confirm_new_password&quot;:&quot;ยืนยันอีเมลใหม่&quot;,&quot;airlock.password_reset.Next&quot;:&quot;เปลี่ยนรหัสผ่าน&quot;,&quot;airlock.email_verification.option_selection.title&quot;:&quot;ยืนยันอีเมลแอดเดรสของคุณ&quot;,&quot;airlock.email_verification.option_selection.description&quot;:&quot;เรากำลังจะส่งอีเมลยืนยันบัญชีของคุณไปยัง: %{linebreak} %{user_email} %{linebreak} %{linebreak} หากคุณมีปัญหาในการรับอีเมลนี้ โปรดตรวจดูโฟลเดอร์ขยะ&quot;,&quot;airlock.email_verification.response.title&quot;:&quot;เช็คอีเมล์&quot;,&quot;airlock.email_verification.response.description&quot;:&quot;เราเพิ่งส่งอีเมลไปยัง %{linebreak} %{user_email} %{linebreak} %{linebreak} เมื่อคุณยืนยันอีเมลแอดเดรสของคุณ คุณก็พร้อมใช้งานเว็บไซต์แล้ว&quot;,&quot;airlock.email_verification.response.Next&quot;:&quot;เรียบร้อย&quot;,&quot;airlock.email_verification.cant_get_to_email&quot;:&quot;เข้าถึงอีเมลคุณไม่ได้ใช่ไหม&quot;,&quot;airlock.email_verification.let_us_know&quot;:&quot;แจ้งให้เราทราบ&quot;,&quot;airlock.device_association_email_verification.option_selection.title&quot;:&quot;โปรดยืนยันอุปกรณ์ของคุณ&quot;,&quot;airlock.device_association_email_verification.option_selection.description&quot;:&quot;เพื่อรักษาความปลอดภัยของบัญชีของคุณ เราจะส่งอีเมลยืนยันตัวตนของคุณบนอุปกรณ์ของคุณไปยัง:  %{linebreak} %{user_email} %{linebreak} %{linebreak} หากคุณมีปัญหาในการรับอีเมล โปรดตรวจดูโฟลเดอร์อีเมลขยะของคุณ %{linebreak} %{linebreak} หากต้องการยืนยันตัวตน โปรดเปิดลิงค์บนเบราว์เซอร์ของอุปกรณ์ที่คุณใช้อยู่ตอนนี้&quot;,&quot;airlock.device_association_email_verification.response.title&quot;:&quot;เช็คอีเมล์&quot;,&quot;airlock.device_association_email_verification.response.description&quot;:&quot;เราได้ส่งอีเมลยืนยันอุปกรณ์ไปยัง%{linebreak} %{user_email}%{linebreak} %{linebreak} โปรดเปิดลิงค์นี้ใน %{emphasis_start}เบราว์เซอร์บนอุปกรณ์ที่ใช้อยู่%{emphasis_end} เพื่อยืนยันอุปกรณ์ของคุณ&quot;,&quot;airlock.device_association_email_verification.response.Next&quot;:&quot;เรียบร้อย&quot;,&quot;airlock.device_association_email_verification.cant_get_to_email&quot;:&quot;เข้าถึงอีเมลคุณไม่ได้ใช่ไหม&quot;,&quot;airlock.device_association_email_verification.let_us_know&quot;:&quot;แจ้งให้เราทราบ&quot;,&quot;airlock.account_disabled.introduction.title&quot;:&quot;หยุดใช้งานบัญชีผู้ใช้แล้ว&quot;,&quot;airlock.account_disabled.introduction.introduction&quot;:&quot;เพื่อช่วยปกป้องข้อมูลของคุณ เราได้บล็อกบัญชี Airbnb ของคุณไว้ชั่วคราว&quot;,&quot;airlock.account_disabled.introduction.description&quot;:&quot;หากต้องการกู้คืนการเข้าถึง โปรดส่งอีเมลถึง account.disabled@airbnb.com จากอีเเมลแอดเดรสที่เชื่อมโยงกับบัญชี Airbnb ของคุณ&quot;,&quot;airlock.no_phone_access.introduction.title&quot;:&quot;การส่งอีเมลถึงเราจะใช้เวลานานขึ้น&quot;,&quot;airlock.no_phone_access.introduction.introduction&quot;:&quot;ด้วยเหตุผลด้านความปลอดภัย การให้ Airbnb ยืนยันการเปลี่ยนแปลงนี้เองอาจใช้เวลา 1-2 วัน โปรดส่งอีเมลถึงเราที่ <a href=\&quot;mailto:account.disabled@airbnb.com\&quot;>account.disabled@airbnb.com</a> จากอีเมลแอดเดรสที่เชื่อมโยงกับบัญชีของคุณ และเราจะจัดการต่อหลังจากนั้นเอง&quot;,&quot;airlock.no_phone_access.introduction.tip.title&quot;:&quot;ทำการปรับปรุงนี้เร็วกว่าด้วยโทรศัพท์ของคุณ&quot;,&quot;airlock.no_phone_access.introduction.tip.description&quot;:&quot;หากคุณกำลังเดินทางหรือโทรศัพท์ของคุณไม่มีสัญญาณ โปรดรอจนกว่าคุณจะมีสัญญาณใหม่และพยายามทำการปรับปรุงใหม่&quot;,&quot;airlock.no_phone_access.Send Me a Code&quot;:&quot;ส่งรหัสให้ฉัน&quot;,&quot;airlock.no_email_access.introduction.title&quot;:&quot;การส่งอีเมลถึงเราจะใช้เวลานานขึ้น&quot;,&quot;airlock.no_email_access.introduction.introduction&quot;:&quot;ด้วยเหตุผลด้านความปลอดภัย การให้ Airbnb ยืนยันการเปลี่ยนแปลงนี้เองอาจใช้เวลา 1-2 วัน โปรดส่งอีเมลถึงเราที่ <a href=\&quot;mailto:account.disabled@airbnb.com\&quot;>account.disabled@airbnb.com</a> จากอีเมลแอดเดรสที่เชื่อมโยงกับบัญชีของคุณ และเราจะจัดการต่อหลังจากนั้นเอง&quot;,&quot;airlock.no_email_access.introduction.tip.title&quot;:&quot;ทำการปรับปรุงนี้เร็วกว่าด้วยโทรศัพท์ของคุณ&quot;,&quot;airlock.no_email_access.introduction.tip.description&quot;:&quot;หากคุณกำลังเดินทางหรือโทรศัพท์ของคุณไม่มีสัญญาณ โปรดรอจนกว่าคุณจะมีสัญญาณใหม่และพยายามทำการปรับปรุงใหม่&quot;,&quot;airlock.contact_us.response.title&quot;:&quot;ติดต่อเรา&quot;,&quot;airlock.contact_us.response.description&quot;:&quot;เพื่อความปลอดภัยของคุณ โปรดยืนยันบัญชีของคุณ โปรดติดต่อเราที่ <a href=\&quot;mailto:account.disabled@airbnb.com\&quot;>security.check@airbnb.com</a>&quot;,&quot;airlock.contact_us_chargeback.response.title&quot;:&quot;ติดต่อเรา&quot;,&quot;airlock.contact_us_chargeback.response.description&quot;:&quot;เราตรวจตราการจองและการโต้ตอบของผู้ใช้ทั้งหมดบน Airbnb อย่างใกล้ชิดมาก น่าเสียดายที่เนื่องจากความกังวลเกี่ยวกับความถูกต้องของวิธีชำระเงินของคุณ เราได้หยุดการทำงานของบัญชีของคุณ โปรดอีเมลหาเราที่ <a href=\&quot;mailto:account.enable@airbnb.com\&quot;>account.enable@airbnb.com</a> เพื่ออุทธรณ์การตัดสินใจของเราและเรียกใช้งานบัญชีของคุณใหม่&quot;,&quot;airlock.introduction&quot;:&quot;เพื่อดำเนินการต่อ โปรดทำความท้าทายบางประการให้เสร็จ&quot;,&quot;airlock.Get Started&quot;:&quot;เริ่มต้น&quot;,&quot;airlock.Continue&quot;:&quot;ดำเนินการต่อ&quot;,&quot;airlock.Next&quot;:&quot;ต่อไป&quot;,&quot;airlock.Done&quot;:&quot;เรียบร้อย&quot;,&quot;airlock.Back&quot;:&quot;ย้อนกลับ&quot;,&quot;airlock.Email Airbnb&quot;:&quot;อีเมล Airbnb&quot;,&quot;airlock.Start Over&quot;:&quot;เริ่มใหม่&quot;,&quot;airlock.success.Thanks&quot;:&quot;ขอบคุณ %{first_name}&quot;,&quot;airlock.success.You are done&quot;:&quot;เสร็จเรียบร้อยแล้ว! คุณสามารถกลับไปสิ่งที่คุณทำก่อนหน้านี้&quot;,&quot;have_a_moment&quot;:&quot;ขอเวลาสักครู่ได้ไหม&quot;,&quot;help_make_experience_better&quot;:&quot;ช่วยเราทำให้ประสบการณ์ Airbnb ของคุณดีขึ้นโดยกรอกแบบสำรวจสั้นๆ&quot;,&quot;lets_do_this&quot;:&quot;ตอบแบบสำรวจเลย!&quot;,&quot;thanks_for_helping&quot;:&quot;ขอบคุณที่ตอบแบบสำรวจ!&quot;,&quot;fill_out_survey&quot;:&quot;เราจะยินดีมากถ้าคุณช่วยทำแบบสำรวจสั้นๆ นี้&quot;,&quot;surveyair_cancel&quot;:&quot;ยกเลิก&quot;,&quot;surveyair_submit&quot;:&quot;ส่ง&quot;,&quot;surveyair_next&quot;:&quot;ถัดไป&quot;,&quot;surveyair_back&quot;:&quot;กลับไป&quot;,&quot;surveyair_pagination&quot;:&quot;%{currentPage} จาก %{totalNumPages} หน้า&quot;,&quot;surveyair_strongly_disagree&quot;:&quot;ไม่เห็นด้วยอย่างยิ่ง&quot;,&quot;surveyair_disagree&quot;:&quot;ไม่เห็นด้วย&quot;,&quot;surveyair_neutral&quot;:&quot;กลางๆ&quot;,&quot;surveyair_agree&quot;:&quot;เห็นด้วย&quot;,&quot;surveyair_strongly_agree&quot;:&quot;เห็นด้วยอย่างยิ่ง&quot;,&quot;surveyair_no_answer&quot;:&quot;ไม่มีคำตอบ&quot;,&quot;surveyair_very_difficult&quot;:&quot;ยากมาก&quot;,&quot;surveyair_difficult&quot;:&quot;ยาก&quot;,&quot;surveyair_easy&quot;:&quot;ง่าย&quot;,&quot;surveyair_very_easy&quot;:&quot;ง่ายมาก&quot;,&quot;shared.Close this modal&quot;:&quot;ปิดวิธีนี้&quot;,&quot;your_trips.x_guest(s)&quot;:&quot;ผู้เข้าพัก %{smart_count} คน&quot;,&quot;your_trips.x_listing(s)&quot;:&quot;ที่พัก %{smart_count} รายการ&quot;,&quot;shared.Trips&quot;:&quot;การเดินทาง&quot;,&quot;header.View Trips&quot;:&quot;ดูการเดินทาง&quot;,&quot;header.View Wish Lists&quot;:&quot;ดู Wish List&quot;,&quot;header.You Have X Wish List(s)&quot;:&quot;คุณมี %{smart_count} Wish List&quot;,&quot;header.X home(s)&quot;:&quot;บ้าน %{smart_count} หลัง&quot;,&quot;header.Popular Wish Lists&quot;:&quot;Wish List ยอดนิยม&quot;,&quot;your_trips.Error&quot;:&quot;ขออภัย ตอนนี้เราโหลดการอัปเดตการเดินทางของคุณไม่ได้ %{link_start}ดูการเดินทาง%{link_end}&quot;,&quot;reservation_status.timedout&quot;:&quot;หมดอายุ&quot;,&quot;shared.Wish Lists&quot;:&quot;Wish List&quot;,&quot;header.Create a wish list&quot;:&quot;สร้าง wish list&quot;,&quot;header.No wish list created&quot;:&quot;ไม่มีการสร้าง wish list&quot;,&quot;header.No upcoming trips&quot;:&quot;ไม่มีการเดินทางที่กำลังจะมาถึง&quot;,&quot;header.Continue searching in (x)&quot;:&quot;ค้นหาต่อไปใน %{location}&quot;,&quot;create_new_wish_list&quot;:&quot;สร้างรายการ Wish List ใหม่&quot;,&quot;wish_list_name&quot;:&quot;ชื่อรายการที่พักใน Wish List&quot;,&quot;priv.everyone&quot;:&quot;ทุกคน&quot;,&quot;priv.invite_only&quot;:&quot;คำเชิญเท่านั้น&quot;,&quot;priv.privacy_settings&quot;:&quot;การตั้งค่าความเป็นส่วนตัว&quot;,&quot;priv.everyone_description&quot;:&quot;มองเห็นได้ทุกคนรวมถึงโปรไฟล์ Airbnb สาธารณะของคุณ&quot;,&quot;priv.invite_only_description&quot;:&quot;มีอยู่ในคุณและเพื่อนคนใดก็ตามที่คุณเชิญเห็นเท่านั้น&quot;,&quot;shared.Save&quot;:&quot;บันทึก&quot;,&quot;shared.Cancel&quot;:&quot;ยกเลิก&quot;,&quot;dl.heading&quot;:&quot;ต้องการเปิดหน้านี้ในแอพบนมือถือ Airbnb หรือไม่&quot;,&quot;dl.open_in_app&quot;:&quot;เปิดในแอพ&quot;,&quot;dl.no_thanks&quot;:&quot;ไม่ ขอบคุณ&quot;,&quot;dl.interstitial.continue&quot;:&quot;ดำเนินการต่อ&quot;,&quot;dl.interstitial.sign_up_with_browser&quot;:&quot;สมัครโดยใช้เบราว์เซอร์แทน&quot;,&quot;dl.interstitial.get_the_app_for_a_faster&quot;:&quot;รับแอพของเราสำหรับ Airbnb ที่เร็วขึ้นและง่ายขึ้น&quot;,&quot;shared.Log_in&quot;:&quot;เข้าสู่ระบบ&quot;,&quot;must_log_in&quot;:&quot;คุณต้องเข้าสู่ระบบเพื่อดำเนินการต่อ&quot;,&quot;log_in_to_save&quot;:&quot;เข้าสู่ระบบเพื่อบันทึกที่พักนี้เข้าในรายการ Wish List&quot;,&quot;concur.link_your_account&quot;:&quot;เชื่อมโยงบัญชีผู้ใช้ Concur ของคุณ&quot;,&quot;concur.sign_up&quot;:&quot;ลงทะเบียนเพื่อเดินทางกับ Airbnb และติดตามค่าใช้จ่ายของคุณผ่าน Concur&quot;,&quot;shared.Sign up with email&quot;:&quot;ลงทะเบียนด้วยอีเมล์&quot;,&quot;shared.Continue with Email&quot;:&quot;ดำเนินการต่อด้วยอีเมล&quot;,&quot;shared.Create Account&quot;:&quot;สร้างบัญชี&quot;,&quot;shared.Google&quot;:&quot;Google&quot;,&quot;shared.Facebook&quot;:&quot;Facebook&quot;,&quot;signup_method.continue_with_service&quot;:&quot;ทำ %{service_name} ต่อไป&quot;,&quot;signup_method.signup_with_service&quot;:&quot;สมัครโดยใช้ %{service_name}&quot;,&quot;login_method.login_with_service&quot;:&quot;เข้าสู่ระบบด้วย %{service_name}&quot;,&quot;shared.Sign up with Facebook&quot;:&quot;ลงทะเบียนด้วย Facebook&quot;,&quot;shared.Sign up with WeChat&quot;:&quot;ลงทะเบียนด้วย WeChat&quot;,&quot;shared.Sign up with Weibo&quot;:&quot;ลงทะเบียนกับ Weibo&quot;,&quot;shared.Sign up with Google&quot;:&quot;ลงทะเบียนกับ Google&quot;,&quot;shared.Log in with WeChat&quot;:&quot;เข้าสู่ระบบด้วย WeChat&quot;,&quot;shared.Log in with Weibo&quot;:&quot;เข้าสู่ระบบด้วย Weibo&quot;,&quot;shared.Log in with Facebook&quot;:&quot;เข้าสู่ระบบด้วย Facebook&quot;,&quot;shared.Log in with Google&quot;:&quot;เข้าสู่ระบบด้วย Google&quot;,&quot;user.signup.already_member&quot;:&quot;เป็นสมาชิก Airbnb แล้วใช่ไหม&quot;,&quot;shared.generic_tos_acceptance_2016&quot;:&quot;การสมัครแสดงว่าฉันยอมรับ %{terms_of_service_link} %{payments_terms_link} %{privacy_policy_link} %{guest_refund_policy_link} และ %{host_guarantee_terms_link} ของ Airbnb&quot;,&quot;i_also_agree_to_follow_nondiscrimination_policy_and_help_our_community&quot;:&quot;ข้าพเจ้ายังยอมรับ %{nondiscrimination_policy_link} ของ Airbnb และช่วยชุมชนของเราสร้างโลกที่ผู้คนจากทุกพื้นเพรู้สึกเป็นส่วนหนึ่งและได้รับความเคารพ&quot;,&quot;shared.Terms of Service&quot;:&quot;เงื่อนไขการให้บริการ&quot;,&quot;shared.Payments Terms of Service&quot;:&quot;เงื่อนไขการให้บริการการชำระเงิน&quot;,&quot;shared.Privacy_Policy&quot;:&quot;นโยบายความเป็นส่วนตัว&quot;,&quot;shared.Guest Refund Policy&quot;:&quot;นโยบายการคืนเงินให้ผู้เข้าพัก&quot;,&quot;shared.Host_Guarantee_Terms&quot;:&quot;เงื่อนไขการรับประกันเจ้าของที่พัก&quot;,&quot;terms.Nondiscrimination Policy&quot;:&quot;นโยบายต่อต้านการแบ่งแยก&quot;,&quot;shared.or&quot;:&quot;หรือ&quot;,&quot;shared.Learn_more&quot;:&quot;เรียนรู้เพิ่มเติม&quot;,&quot;Email Address&quot;:&quot;อีเมล์แอดเดรส&quot;,&quot;shared.Remember me&quot;:&quot;จำฉัน&quot;,&quot;user.signup.forgot_password_moweb&quot;:&quot;เข้าสู่ระบบไม่ได้ใช่ไหม&quot;,&quot;signup.use phone number instead&quot;:&quot;ใช้เบอร์โทรแทน&quot;,&quot;user.signup.no account yet&quot;:&quot;ไม่มีบัญชีหรือ&quot;,&quot;shared.Sign up&quot;:&quot;ลงทะเบียน&quot;,&quot;signup.other methods&quot;:&quot;ใช้วิธีอื่น&quot;,&quot;First name&quot;:&quot;ชื่อแรก&quot;,&quot;Last name&quot;:&quot;ชื่อสกุล&quot;,&quot;Email address&quot;:&quot;อีเมล&quot;,&quot;Confirm Password&quot;:&quot;ยืนยันรหัสผ่าน&quot;,&quot;Work email&quot;:&quot;อีเมลงาน&quot;,&quot;tooltip.signup_form.work_email&quot;:&quot;เราจะใช้อีเมลนี้เพิ่มคุณเข้าในบัญชี Airbnb สำหรับธุรกิจของบริษัทของคุณ&quot;,&quot;user.signup.opt_in_emails.coupons&quot;:&quot;ฉันอยากได้คูปองและแรงบันดาลใจ&quot;,&quot;Birthday&quot;:&quot;วันเกิด&quot;,&quot;user.signup.validation.birthday.must be 18 or older&quot;:&quot;ในการลงทะเบียน คุณต้องมีอายุอย่างน้อย 18 ปี คนอื่นจะไม่เห็นวันเกิดของคุณ&quot;,&quot;user.birthday.month&quot;:&quot;เดือน&quot;,&quot;user.birthday.day&quot;:&quot;วัน&quot;,&quot;user.birthday.year&quot;:&quot;ปี&quot;,&quot;signup.Sign up with Phone Number&quot;:&quot;สมัครด้วยเบอร์โทร&quot;,&quot;signup.use email instead&quot;:&quot;ใช้อีเมลแทน&quot;,&quot;signup.Enter 4 digit code&quot;:&quot;กรอกรหัส 4 หลัก&quot;,&quot;signup.Input your confirmation code&quot;:&quot;เราได้ส่ง SMS ไปยัง %{mobile_number} กรอกโค้ดในข้อความนั้น&quot;,&quot;signup.change my number&quot;:&quot;เปลี่ยนเบอร์โทร&quot;,&quot;signup.Send code again&quot;:&quot;ส่งรหัสอีกครั้ง&quot;,&quot;shared.Phone number&quot;:&quot;หมายเลขโทรศัพท์&quot;,&quot;auth_merge.error&quot;:&quot;ไม่สามารถดำเนินการได้ โปรดลองใหม่ภายหลัง&quot;,&quot;auth_merge.password&quot;:&quot;โปรดกรอกรหัสผ่านของคุณ&quot;,&quot;auth_merge.signup_with_existing_email&quot;:&quot;สวัสดี! โปรดเข้าสู่ระบบด้วยอีเมลที่ใช้สมัคร Airbnb ของคุณ&quot;,&quot;auth_merge.signup_with_existing_facebook_account&quot;:&quot;สวัสดี! คุณได้เข้าร่วม Airbnb โดยใช้ Facebook ดังนั้นโปรดใช้ Facebook เพื่อเข้าสู่ระบบ&quot;,&quot;auth_merge.login_with_different_account&quot;:&quot;เข้าสู่ระบบโดยใช้บัญชีผู้ใช้อื่น&quot;,&quot;shared.Take me back to my last search results&quot;:&quot;กลับไปที่ผลการค้นหา&quot;,&quot;referrals.travel_credit_available_explanation&quot;:&quot;เครดิตการเดินทาง%{tag_start}%{credit_amount}ของคุณ%{tag_end}จะถูกใช้กับการเดินทางครั้งแรกของคุณที่มีมูลค่าอย่างน้อย%{min_trip_cost}โดยอัตโนมัติ&quot;,&quot;referrals.coupon_expires_at&quot;:&quot;วันที่หมดอายุ %{expiration_date}&quot;,&quot;referrals.see_terms_and_conditions&quot;:&quot;ดูข้อกำหนด&quot;,&quot;choose_language&quot;:&quot;เลือกภาษา&quot;,&quot;choose_currency&quot;:&quot;เลือกสกุลเงิน&quot;,&quot;datepicker_updated_years_ago&quot;:&quot;ปรับปรุงเมื่อ %{smart_count} ปีที่แล้ว&quot;,&quot;datepicker_updated_months_ago&quot;:&quot;ปรับปรุงเมื่อ %{smart_count} เดือนที่แล้ว&quot;,&quot;datepicker_updated_days_ago&quot;:&quot;ปรับปรุงเมื่อ %{smart_count} วันที่แล้ว&quot;,&quot;datepicker_updated_today&quot;:&quot;ปรับปรุงวันนี้&quot;,&quot;datepicker_never_updated&quot;:&quot;ไม่เคยปรับปรุงเลย&quot;,&quot;datepicker_min_nights&quot;:&quot;จำนวนคืนในการพักต่ำสุด %{smart_count}&quot;,&quot;datepicker_min_nights_this_month&quot;:&quot;%{smart_count} คืนขั้นต่ำ เดือนนี้&quot;,&quot;datepicker_min_nights_varies&quot;:&quot;จำนวนการพักขั้นต่ำไม่เท่ากัน&quot;,&quot;sorry_something_went_wrong&quot;:&quot;ขออภัย มีบางอย่างผิดพลาด โปรดรีเฟรชหน้านี้และลองใหม่&quot;}" id="_bootstrap-phrases">
		<meta content="{&quot;engagement/overlay_panel1.jpg&quot;:&quot;https://a2.muscache.com/airbnb/static/engagement/overlay_panel1-457ef05a7508fd8b5f8eeaf251e29d1d.jpg&quot;,&quot;engagement/overlay_panel2.jpg&quot;:&quot;https://a2.muscache.com/airbnb/static/engagement/overlay_panel2-e527fcc4de6fccdc96feb6d70f8c58f2.jpg&quot;,&quot;engagement/overlay_panel3.jpg&quot;:&quot;https://a0.muscache.com/airbnb/static/engagement/overlay_panel3-f7b1e2d0007f6298c069df4dcce311db.jpg&quot;,&quot;engagement/overlay_panel4.jpg&quot;:&quot;https://a0.muscache.com/airbnb/static/engagement/overlay_panel4-bf9eb62d4e8befc4d7a41a520a3dcad3.jpg&quot;,&quot;engagement/overlay_panel5.jpg&quot;:&quot;https://a1.muscache.com/airbnb/static/engagement/overlay_panel5-cdcad426b1dd8956d9b0ff454dd4441e.jpg&quot;,&quot;engagement/overlay_panel6.jpg&quot;:&quot;https://a0.muscache.com/airbnb/static/engagement/overlay_panel6-04171448ba4eb0337d06cb9aa1a22559.jpg&quot;,&quot;engagement/overlay_panel7.jpg&quot;:&quot;https://a0.muscache.com/airbnb/static/engagement/overlay_panel7-58b03c50e1eac957ec12f6ced3bf7872.jpg&quot;,&quot;engagement/overlay_panel8.jpg&quot;:&quot;https://a0.muscache.com/airbnb/static/engagement/overlay_panel8-b6915b7a14b1ce8d1081b078b867ea34.jpg&quot;,&quot;engagement/overlay_panel9.jpg&quot;:&quot;https://a1.muscache.com/airbnb/static/engagement/overlay_panel9-bbe13adcee0122f5325db135211af175.jpg&quot;,&quot;engagement/overlay_panel10.jpg&quot;:&quot;https://a0.muscache.com/airbnb/static/engagement/overlay_panel10-993449dfdae5ea316589c0a84558f2f6.jpg&quot;,&quot;magical_trips/guest/beta-badge.png&quot;:&quot;https://a0.muscache.com/airbnb/static/magical_trips/guest/beta-badge-56a0d5bc185adfe79992a46991964070.png&quot;,&quot;engagement/ModalPhotos_Horizontal/Bikes.jpg&quot;:&quot;https://a0.muscache.com/airbnb/static/engagement/ModalPhotos_Horizontal/Bikes-07f9c7e8a46c37d31435a3797fc6d59a.jpg&quot;,&quot;engagement/ModalPhotos_Horizontal/Cherries.jpg&quot;:&quot;https://a2.muscache.com/airbnb/static/engagement/ModalPhotos_Horizontal/Cherries-c3107359f006f445670493e45434fa9e.jpg&quot;,&quot;engagement/ModalPhotos_Horizontal/Listing.jpg&quot;:&quot;https://a1.muscache.com/airbnb/static/engagement/ModalPhotos_Horizontal/Listing-67cde6835b69d93b1d3984eb9f227928.jpg&quot;,&quot;engagement/ModalPhotos_Horizontal/Surf.jpg&quot;:&quot;https://a2.muscache.com/airbnb/static/engagement/ModalPhotos_Horizontal/Surf-2b8a0111c4e79b00da1c101d00fbb9fb.jpg&quot;,&quot;engagement/ModalPhotos_Vertical/Bikes.jpg&quot;:&quot;https://a2.muscache.com/airbnb/static/engagement/ModalPhotos_Vertical/Bikes-fdcf8bcfb1d22a91dbf88c315f07e3d0.jpg&quot;,&quot;engagement/ModalPhotos_Vertical/Cherries.jpg&quot;:&quot;https://a1.muscache.com/airbnb/static/engagement/ModalPhotos_Vertical/Cherries-aa16cab99cee827e6beb0518436dfd8f.jpg&quot;,&quot;engagement/ModalPhotos_Vertical/Listing.jpg&quot;:&quot;https://a2.muscache.com/airbnb/static/engagement/ModalPhotos_Vertical/Listing-1e948927c0e09cb34baf2333e540c48d.jpg&quot;,&quot;engagement/ModalPhotos_Vertical/Surf.jpg&quot;:&quot;https://a2.muscache.com/airbnb/static/engagement/ModalPhotos_Vertical/Surf-dfafeba46bace57b5adcdcaa5dd95017.jpg&quot;,&quot;account_activation/modal-booking-ready.png&quot;:&quot;https://a1.muscache.com/airbnb/static/account_activation/modal-booking-ready-811e8edb5f67e88df1e36e474d12153e.png&quot;,&quot;account_activation/welcome.jpg&quot;:&quot;https://a1.muscache.com/airbnb/static/account_activation/welcome-62b2f84cb13fd2c6f6eb1c904ab3d5c8.jpg&quot;,&quot;account_activation/success.jpg&quot;:&quot;https://a1.muscache.com/airbnb/static/account_activation/success-d838dc8bc3a8c165a048dbd20a90abdc.jpg&quot;,&quot;partners/concur_pre_link.png&quot;:&quot;https://a0.muscache.com/airbnb/static/partners/concur_pre_link-63058dcdce0a710086c79101b68e178c.png&quot;,&quot;user_pic-225x225.png?v=2&quot;:&quot;https://a0.muscache.com/airbnb/static/user_pic-225x225.png?v=2&quot;,&quot;signinup/hello@2x.png&quot;:&quot;https://a0.muscache.com/airbnb/static/signinup/hello@2x-6755b9e17e788bf166f7a44d6e636238.png&quot;,&quot;signinup/google_icon_2x.png&quot;:&quot;https://a1.muscache.com/airbnb/static/signinup/google_icon_2x-745c2280e5004d4c90e3ca4e60e3f677.png&quot;}" id="_bootstrap-image_paths">
		<meta content="{&quot;mario_copy_monorail_p3_modal&quot;:{&quot;erf&quot;:&quot;engagement_overlay_modal_p3_copy_expt&quot;,&quot;assignments&quot;:{&quot;treatment_unknown&quot;:{&quot;title&quot;:&quot;variation0&quot;,&quot;summary&quot;:&quot;variation0&quot;},&quot;control&quot;:{&quot;title&quot;:&quot;variation0&quot;,&quot;summary&quot;:&quot;variation0&quot;},&quot;location&quot;:{&quot;title&quot;:&quot;variation1&quot;,&quot;summary&quot;:&quot;variation1&quot;},&quot;price&quot;:{&quot;title&quot;:&quot;variation2&quot;,&quot;summary&quot;:&quot;variation2&quot;},&quot;quality&quot;:{&quot;title&quot;:&quot;variation3&quot;,&quot;summary&quot;:&quot;variation3&quot;}}},&quot;mario_copy_monorail_referrals&quot;:{&quot;erf&quot;:&quot;monorail_referrals_tab_text_v2&quot;,&quot;assignments&quot;:{&quot;treatment_unknown&quot;:{&quot;tab_text&quot;:&quot;variation0&quot;,&quot;banner_body_text&quot;:&quot;variation0&quot;},&quot;control&quot;:{&quot;tab_text&quot;:&quot;variation0&quot;,&quot;banner_body_text&quot;:&quot;variation0&quot;},&quot;treatment1_invite_friends&quot;:{&quot;tab_text&quot;:&quot;variation1&quot;,&quot;banner_body_text&quot;:&quot;variation0&quot;},&quot;treatment2_refer_a_friend&quot;:{&quot;tab_text&quot;:&quot;variation2&quot;,&quot;banner_body_text&quot;:&quot;variation0&quot;},&quot;treatment3_referrals&quot;:{&quot;tab_text&quot;:&quot;variation3&quot;,&quot;banner_body_text&quot;:&quot;variation0&quot;}}}}" id="_bootstrap-mario_erf_configs">
		<script src="https://a0.muscache.com/airbnb/static/packages/libs_jquery.bundle-4205000bc8f6175a022f.js" type="text/javascript"></script>

		<script src="https://a2.muscache.com/airbnb/static/packages/core.bundle-895c915af6c561f0e30e.js" type="text/javascript"></script>

		<div id="fb-root" class=" fb_reset">
			<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
				<div></div>
			</div>
			<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
				<div>
					<iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/P5DLcu0KGJB.js?version=42#channel=f1fe19331b69c74&amp;origin=https%3A%2F%2Fth.airbnb.com" style="border: none;"></iframe>
				</div>
			</div>
		</div>

		<script src="https://a1.muscache.com/airbnb/static/packages/mystique/slash_host.bundle-5a429f76d4718cf71422.js" type="text/javascript"></script>

		<!-- ver. 9ac9c8ef594e76cc312688550453f0f88bdcecee -->
		<div class="pac-container pac-logo" style="display: none; width: 234px; position: absolute; left: 445px; top: 707px;"></div>
		<div class="adgurd-alert adguard-assistant-button-fixed adguard-assistant-button-top adguard-assistant-button-right">
			<div class="adgurd-alert-wrap">
				<div class="adgurd-alert-logo-small"></div>
				<div class="adgurd-alert-cont" style="opacity: 0; display: none;">
					<div class="adgurd-alert-tail"></div><div class="adgurd-alert-head"></div><div class="adgurd-alert-text"></div><div class="adgurd-alert-more"></div>
				</div>
			</div>
		</div>
		<div class="tooltip tooltip-bottom-middle" data-position="undefined" role="tooltip" aria-hidden="true">
			<p class="panel-body">
				ประมาณการณ์จากราคาที่พักตามที่ตั้ง ฤดูกาล ประเภทที่พัก และจำนวนผู้เข้าพักที่คล้ายกัน รายได้ที่แน่นอนของคุณอาจแตกต่างไปตามราคา ประเภท และที่ตั้งของที่พัก รวมถึงฤดูกาล ความต้องการ และปัจจัยอื่นๆ
			</p>
		</div>
		<div style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.40838812575142347"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.6110838261167388" width="0" height="0" src="https://bat.r.msn.com/action-uic/0?ti=5187185&amp;Ver=2&amp;mid=07509c1f-6d55-00cf-4151-085ae8133ed7&amp;evt=pageLoad&amp;lt=3288&amp;pi=-1748725250&amp;lg=th&amp;sw=1360&amp;sh=768&amp;sc=24&amp;tl=ให้เช่าห้อง บ้าน หรืออพาร์ทเมนท์ของคุณใน Airbnb&amp;p=https%3A%2F%2Fth.airbnb.com%2Fhost&amp;r=&amp;rn=273582"><img style="width:0px; height:0px; display:none; visibility:hidden;" id="batBeacon0.5270984929297393" width="0" height="0" src="https://bat.bing.com/action/0?ti=5187185&amp;Ver=2&amp;mid=07509c1f-6d55-00cf-4151-085ae8133ed7&amp;evt=pageLoad&amp;lt=3288&amp;pi=-1748725250&amp;lg=th&amp;sw=1360&amp;sh=768&amp;sc=24&amp;tl=ให้เช่าห้อง บ้าน หรืออพาร์ทเมนท์ของคุณใน Airbnb&amp;p=https%3A%2F%2Fth.airbnb.com%2Fhost&amp;r=&amp;rn=809669">
		</div>
	</body>	
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

</html>
