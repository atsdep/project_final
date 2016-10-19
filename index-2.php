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
			<script>
				var AIR = AIR || {};
				! function() {
					var xhr,
					    callbacks = [],
					    loaded = false,
					    response = null,
					    url = '/discovery/discover_feed';

					AIR.onCustomRecommendedDestinationsLoad = function(callback) {
						if (loaded) {
							// [do not release zalgo]
							// http://blog.izs.me/post/59142742143/designing-apis-for-asynchrony
							setTimeout(function() {
								callback(response);
							}, 0);
						} else {
							callbacks.push(callback);
						}
					};

					if (window.XMLHttpRequest) {
						xhr = new XMLHttpRequest();
					} else if (window.ActiveXObject) {
						xhr = new ActiveXObject("Microsoft.XMLHTTP");
					} else {
						return;
						// Can't do XHR - Give up
					}

					xhr.onreadystatechange = function() {
						var status;

						if (xhr.readyState != 4)
							return false;

						status = xhr.status;
						if (status !== 200) {
							response = '{"error": "Internal server error"}';
						} else {
							response = xhr.responseText;
						}

						loaded = true;
						while (callbacks.length > 0) {
							callbacks.pop()(response);
						}

						return (status === 200);
					};
					url += window.location.search;
					xhr.open('get', url, true);
					xhr.setRequestHeader('Accept', 'application/json');
					// WE MUST set the XHR http headers since this is loaded on a cached home page which without
					// this code it will run the cross domain POST request which logs the user out for no reason
					// without even successfully transfering the cookie session.
					xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
					xhr.send();
				}();

			</script>

			<div class="hero shift-with-hiw js-hero">
				<div class="hero__background" data-native-currency="THB" aria-hidden="true">
					<div class="air-slideshow hero-slideshow">
						<ul class="air-slideshow__list list-unstyled js-hero-slideshow hide">
							<li class="air-slide air-slide--active">
								<img alt="P1f1" src="https://a0.muscache.com/airbnb/static/P1F1.jpg" width="100%">
							</li>
							<li class="air-slide">
								<img data-image-url="https://a0.muscache.com/airbnb/static/Live-There_IMG_5818.jpg" alt="" width="100%">
							</li>
							<li class="air-slide">
								<img data-image-url="https://a0.muscache.com/airbnb/static/Live-There_Los_Angeles_Elliott_Pool_House_16-03-21_0137.jpg" alt="" width="100%">
							</li>
							<li class="air-slide">
								<img data-image-url="https://a0.muscache.com/airbnb/static/Live-There_Los_Angeles_Elliott_Pool_House_16-03-21_6529.jpg" alt="" width="100%">
							</li>
							<li class="air-slide">
								<img data-image-url="https://a0.muscache.com/airbnb/static/Live-There_Paris_Elliott_A-Frame-Loft_16-03-08_3255.jpg" alt="" width="100%">
							</li>
							<li class="air-slide">
								<img data-image-url="https://a0.muscache.com/airbnb/static/Live-There_Paris_Elliott_Tower-View_16-03-09_4364.jpg" alt="" width="100%">
							</li>
							<li class="air-slide">
								<img data-image-url="https://a0.muscache.com/airbnb/static/Live-There_Tokyo_Elliott_Artist-Loft_20160222_0153_comp.jpg" alt="" width="100%">
							</li>
							<li class="air-slide">
								<img data-image-url="https://a0.muscache.com/airbnb/static/Live-There_Tokyo_Elliott_Dinner_20160223_0137.jpg" alt="" width="100%">
							</li>
							<li class="air-slide">
								<img data-image-url="https://a0.muscache.com/airbnb/static/Live-There_Tokyo_Elliott_Family-House_20160221_0003.jpg" alt="" width="100%">
							</li>
							<li class="air-slide">
								<img data-image-url="https://a0.muscache.com/airbnb/static/Live-There_Tokyo_Elliott_Sento_20160223_0078.jpg" alt="" width="100%">
							</li>
							<li class="air-slide">
								<img data-image-url="https://a0.muscache.com/airbnb/static/Live-There_Tokyo_FarhadSamari-40.jpg" alt="" width="100%">
							</li>
						</ul>
					</div>
					<video preload="auto" loop="loop" id="pretzel-video" class="video-playing">
						<source src="https://a0.muscache.com/airbnb/static/P1-background-vid-compressed-2.mp4" type="video/mp4">
						<source src="https://a0.muscache.com/airbnb/static/P1-background-vid-compressed-2.webm" type="video/webm">
					</video>

				</div>

				<div class="hero__content page-container page-container-full text-center">
					<div class="va-container va-container-v va-container-h">
						<div class="va-middle">
							<div class="">
								<a href="/info/how_it_works" class="btn hide-md hide-lg btn-contrast btn-large btn-semi-transparent"> วิธีใช้งาน Airbnb </a>

								<h2 class="text-branding text-jumbo text-contrast hero__heading"> ใช้ชีวิตอยู่ที่นั่น </h2>
								<div class="h4 text-contrast space-4">
									จองบ้านจากเจ้าของที่พักในท้องถิ่นใน 191+ ประเทศและสัมผัสสถานที่หนึ่งเหมือนกับคุณอยู่ที่นั่น
								</div>

								<button class="btn btn-large
								js-learn-about-airbnb hide">
									เรียนรู้เกี่ยวกับ Airbnb
								</button>
							</div>

							<div class="show-sm sm-search">
								<div class="input-addon" id="sm-search-field" style="display: table; table-layout: fixed; width: 100%;">
									<span class="input-stem input-large fake-search-field"> ไปที่ไหน </span>
									<i class="input-suffix btn btn-primary icon icon-full icon-search"></i>
								</div>

							</div>

							<a href="/info/how_it_works" class="btn hide-sm btn-contrast btn-large btn-semi-transparent"> วิธีใช้งาน Airbnb </a>

						</div>
					</div>
					<div id="search-bar-container" class="hero__content-footer hide-sm">
						<div class="page-container-responsive search-bar-responsive-container">

							<div id="searchbar">
								<div class="SearchForm row" role="search" data-reactid=".3">
									<form action="/s" method="get" data-reactid=".3.0">
										<div class="SearchForm__inputs-wrapper col-md-10" data-reactid=".3.0.0">
											<div class="row" data-reactid=".3.0.0.0">
												<div class="SearchForm__location col-md-4 col-lg-5" data-reactid=".3.0.0.0.0">
													<div data-reactid=".3.0.0.0.0.0">
														<div data-reactid=".3.0.0.0.0.0.0">
															<label class="input-placeholder-group LocationInput__label" data-reactid=".3.0.0.0.0.0.0.0"><span class="input-placeholder-label screen-reader-only" data-reactid=".3.0.0.0.0.0.0.0.0">ไปที่ไหน</span>
																<input class="LocationInput input-large" name="location" type="text" placeholder="ไปที่ไหน" autocomplete="off" value="" data-reactid=".3.0.0.0.0.0.0.0.2">
															</label>
															<div class="LocationInput__error hide" data-reactid=".3.0.0.0.0.0.0.1">
																<span data-reactid=".3.0.0.0.0.0.0.1.0">กรุณาตั้งค่าสถานที่ตั้ง</span>
															</div>
														</div>
													</div>
												</div>
												<div class="SearchForm__dates col-md-5 text-left" data-reactid=".3.0.0.0.1">
													<div class="DateRangePicker" data-reactid=".3.0.0.0.1.0">
														<div data-reactid=".3.0.0.0.1.0.0">
															<div class="DateRangePickerInput" data-reactid=".3.0.0.0.1.0.0.0">
																<div class="DateInput" data-reactid=".3.0.0.0.1.0.0.0.0">
																	<label class="DateInput__label" for="startDate" data-reactid=".3.0.0.0.1.0.0.0.0.0">เช็คอิน</label>
																	<input class="DateInput__input" type="text" id="startDate" name="startDate" value="" placeholder="เช็คอิน" autocomplete="off" maxlength="10" data-reactid=".3.0.0.0.1.0.0.0.0.1">
																	<div class="DateInput__display-text" data-reactid=".3.0.0.0.1.0.0.0.0.2">
																		เช็คอิน
																	</div>
																</div>
																<div class="DateRangePickerInput__arrow" data-reactid=".3.0.0.0.1.0.0.0.1">
																	<svg viewBox="0 0 1000 1000" data-reactid=".3.0.0.0.1.0.0.0.1.0">
																		<path d="M694.4 242.4l249.1 249.1c11 11 11 21 0 32L694.4 772.7c-5 5-10 7-16 7s-11-2-16-7c-11-11-11-21 0-32l210.1-210.1H67.1c-13 0-23-10-23-23s10-23 23-23h805.4L662.4 274.5c-21-21.1 11-53.1 32-32.1z" data-reactid=".3.0.0.0.1.0.0.0.1.0.0"></path>
																	</svg>
																</div>
																<div class="DateInput" data-reactid=".3.0.0.0.1.0.0.0.2">
																	<label class="DateInput__label" for="endDate" data-reactid=".3.0.0.0.1.0.0.0.2.0">เช็คเอาท์</label>
																	<input class="DateInput__input" type="text" id="endDate" name="endDate" value="" placeholder="เช็คเอาท์" autocomplete="off" maxlength="10" data-reactid=".3.0.0.0.1.0.0.0.2.1">
																	<div class="DateInput__display-text" data-reactid=".3.0.0.0.1.0.0.0.2.2">
																		เช็คเอาท์
																	</div>
																</div>
																<button type="button" class="DateRangePickerInput__clear-dates DateRangePickerInput__clear-dates--hide" data-reactid=".3.0.0.0.1.0.0.0.3">
																	<span class="screen-reader-only" data-reactid=".3.0.0.0.1.0.0.0.3.0"><span data-reactid=".3.0.0.0.1.0.0.0.3.0.0">ลบวันที่</span></span>
																	<svg viewBox="0 0 12 12" data-reactid=".3.0.0.0.1.0.0.0.3.1">
																		<path d="M11.53.47a.75.75 0 0 0-1.061 0l-4.47 4.47L1.529.47A.75.75 0 1 0 .468 1.531l4.47 4.47-4.47 4.47a.75.75 0 1 0 1.061 1.061l4.47-4.47 4.47 4.47a.75.75 0 1 0 1.061-1.061l-4.47-4.47 4.47-4.47a.75.75 0 0 0 0-1.061z" data-reactid=".3.0.0.0.1.0.0.0.3.1.0"></path>
																	</svg>
																</button>
															</div>
															<div class="DateRangePicker__picker DateRangePicker__picker--direction-left DateRangePicker__picker--invisible DateRangePicker__picker--horizontal" data-reactid=".3.0.0.0.1.0.0.1">
																<div class="DayPicker DayPicker--horizontal" style="width:618px;margin-left:;margin-top:;" data-reactid=".3.0.0.0.1.0.0.1.0">
																	<div data-reactid=".3.0.0.0.1.0.0.1.0.0">
																		<div class="DayPicker__nav" data-reactid=".3.0.0.0.1.0.0.1.0.0.0">
																			<span class="DayPicker__nav--prev" data-reactid=".3.0.0.0.1.0.0.1.0.0.0.0">
																				<svg viewBox="0 0 1000 1000" data-reactid=".3.0.0.0.1.0.0.1.0.0.0.0.0">
																					<path d="M336.2 274.5l-210.1 210h805.4c13 0 23 10 23 23s-10 23-23 23H126.1l210.1 210.1c11 11 11 21 0 32-5 5-10 7-16 7s-11-2-16-7l-249.1-249c-11-11-11-21 0-32l249.1-249.1c21-21.1 53 10.9 32 32z" data-reactid=".3.0.0.0.1.0.0.1.0.0.0.0.0.0"></path>
																				</svg></span><span class="DayPicker__nav--next" data-reactid=".3.0.0.0.1.0.0.1.0.0.0.1">
																				<svg viewBox="0 0 1000 1000" data-reactid=".3.0.0.0.1.0.0.1.0.0.0.1.0">
																					<path d="M694.4 242.4l249.1 249.1c11 11 11 21 0 32L694.4 772.7c-5 5-10 7-16 7s-11-2-16-7c-11-11-11-21 0-32l210.1-210.1H67.1c-13 0-23-10-23-23s10-23 23-23h805.4L662.4 274.5c-21-21.1 11-53.1 32-32.1z" data-reactid=".3.0.0.0.1.0.0.1.0.0.0.1.0.0"></path>
																				</svg></span>
																		</div>
																		<div class="DayPicker__week-headers" data-reactid=".3.0.0.0.1.0.0.1.0.0.1">
																			<div class="DayPicker__week-header" style="width:50%;left:0%;" data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0">
																				<ul data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0.0">
																					<li data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0.0.$0">
																						<small data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0.0.$0.0">อา.</small>
																					</li>
																					<li data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0.0.$1">
																						<small data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0.0.$1.0">จ.</small>
																					</li>
																					<li data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0.0.$2">
																						<small data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0.0.$2.0">อ.</small>
																					</li>
																					<li data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0.0.$3">
																						<small data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0.0.$3.0">พ.</small>
																					</li>
																					<li data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0.0.$4">
																						<small data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0.0.$4.0">พฤ.</small>
																					</li>
																					<li data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0.0.$5">
																						<small data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0.0.$5.0">ศ.</small>
																					</li>
																					<li data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0.0.$6">
																						<small data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-0.0.$6.0">ส.</small>
																					</li>
																				</ul>
																			</div>
																			<div class="DayPicker__week-header" style="width:50%;left:50%;" data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1">
																				<ul data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1.0">
																					<li data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1.0.$0">
																						<small data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1.0.$0.0">อา.</small>
																					</li>
																					<li data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1.0.$1">
																						<small data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1.0.$1.0">จ.</small>
																					</li>
																					<li data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1.0.$2">
																						<small data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1.0.$2.0">อ.</small>
																					</li>
																					<li data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1.0.$3">
																						<small data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1.0.$3.0">พ.</small>
																					</li>
																					<li data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1.0.$4">
																						<small data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1.0.$4.0">พฤ.</small>
																					</li>
																					<li data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1.0.$5">
																						<small data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1.0.$5.0">ศ.</small>
																					</li>
																					<li data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1.0.$6">
																						<small data-reactid=".3.0.0.0.1.0.0.1.0.0.1.$week-1.0.$6.0">ส.</small>
																					</li>
																				</ul>
																			</div>
																		</div>
																		<div class="transition-container transition-container--horizontal" style="width: 618px; height: 336px;" data-reactid=".3.0.0.0.1.0.0.1.0.0.2">
																			<div class="CalendarMonthGrid CalendarMonthGrid--horizontal" style="transform:translateX(0px);-ms-transform:translateX(0px);-moz-transform:translateX(0px);-webkit-transform:translateX(0px);" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0">
																				<div class="CalendarMonth CalendarMonth--horizontal" data-visible="false" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16">
																					<table data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0">
																						<caption class="CalendarMonth__caption js-CalendarMonth__caption" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.0">
																							<strong data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.0.0">กันยายน 2016</strong>
																						</caption>
																						<tbody class="js-CalendarMonth__grid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1">
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$0">
																								<td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$0.$0"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$0.$1"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$0.$2"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$0.$3"></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$0.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$0.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$0.$4.0.0">1</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$0.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$0.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$0.$5.0.0">2</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$0.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$0.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$0.$6.0.0">3</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1">
																								<td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$0.0.0">4</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$1.0.0">5</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$2.0.0">6</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$3.0.0">7</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$4.0.0">8</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$5.0.0">9</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$1.$6.0.0">10</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2">
																								<td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$0.0.0">11</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$1.0.0">12</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$2.0.0">13</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$3.0.0">14</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$4.0.0">15</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$5.0.0">16</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$2.$6.0.0">17</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3">
																								<td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$0.0.0">18</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$1.0.0">19</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$2.0.0">20</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$3.0.0">21</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$4.0.0">22</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$5.0.0">23</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$3.$6.0.0">24</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4">
																								<td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$0.0.0">25</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$1.0.0">26</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$2.0.0">27</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$3.0.0">28</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$4.0.0">29</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$5.0.0">30</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$09-16.0.1.$4.$6"></td>
																							</tr>
																						</tbody>
																					</table>
																				</div>
																				<div class="CalendarMonth CalendarMonth--horizontal" data-visible="true" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16">
																					<table data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0">
																						<caption class="CalendarMonth__caption js-CalendarMonth__caption" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.0">
																							<strong data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.0.0">ตุลาคม 2016</strong>
																						</caption>
																						<tbody class="js-CalendarMonth__grid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1">
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$0">
																								<td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$0.$0"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$0.$1"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$0.$2"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$0.$3"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$0.$4"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$0.$5"></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$0.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$0.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$0.$6.0.0">1</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1">
																								<td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$0.0.0">2</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$1.0.0">3</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$2.0.0">4</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$3.0.0">5</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$4.0.0">6</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$5.0.0">7</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$1.$6.0.0">8</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2">
																								<td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$0.0.0">9</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$1.0.0">10</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$2.0.0">11</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$3.0.0">12</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$4.0.0">13</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$5.0.0">14</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$2.$6.0.0">15</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3">
																								<td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$0.0.0">16</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$1.0.0">17</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--blocked CalendarMonth__day--blocked-out-of-range" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$2.0.0">18</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$3.0.0">19</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$4.0.0">20</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$5.0.0">21</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$3.$6.0.0">22</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4">
																								<td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$0.0.0">23</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$1.0.0">24</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$2.0.0">25</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$3.0.0">26</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$4.0.0">27</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$5.0.0">28</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$4.$6.0.0">29</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$5">
																								<td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$5.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$5.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$5.$0.0.0">30</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$5.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$5.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$5.$1.0.0">31</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$5.$2"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$5.$3"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$5.$4"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$5.$5"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$10-16.0.1.$5.$6"></td>
																							</tr>
																						</tbody>
																					</table>
																				</div>
																				<div class="CalendarMonth CalendarMonth--horizontal" data-visible="true" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16">
																					<table data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0">
																						<caption class="CalendarMonth__caption js-CalendarMonth__caption" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.0">
																							<strong data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.0.0">พฤศจิกายน 2016</strong>
																						</caption>
																						<tbody class="js-CalendarMonth__grid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1">
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0">
																								<td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$0"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$1"></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$2.0.0">1</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$3.0.0">2</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$4.0.0">3</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$5.0.0">4</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$0.$6.0.0">5</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1">
																								<td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$0.0.0">6</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$1.0.0">7</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$2.0.0">8</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$3.0.0">9</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$4.0.0">10</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$5.0.0">11</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$1.$6.0.0">12</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2">
																								<td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$0.0.0">13</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$1.0.0">14</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$2.0.0">15</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$3.0.0">16</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$4.0.0">17</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$5.0.0">18</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$2.$6.0.0">19</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3">
																								<td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$0.0.0">20</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$1.0.0">21</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$2.0.0">22</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$3.0.0">23</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$4.0.0">24</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$5.0.0">25</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$3.$6.0.0">26</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4">
																								<td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4.$0.0.0">27</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4.$1.0.0">28</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4.$2.0.0">29</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4.$3.0.0">30</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4.$4"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4.$5"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$11-16.0.1.$4.$6"></td>
																							</tr>
																						</tbody>
																					</table>
																				</div>
																				<div class="CalendarMonth CalendarMonth--horizontal" data-visible="false" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16">
																					<table data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0">
																						<caption class="CalendarMonth__caption js-CalendarMonth__caption" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.0">
																							<strong data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.0.0">ธันวาคม 2016</strong>
																						</caption>
																						<tbody class="js-CalendarMonth__grid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1">
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$0">
																								<td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$0.$0"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$0.$1"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$0.$2"></td><td class="CalendarMonth__day CalendarMonth__day--outside " data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$0.$3"></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$0.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$0.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$0.$4.0.0">1</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$0.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$0.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$0.$5.0.0">2</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$0.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$0.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$0.$6.0.0">3</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1">
																								<td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$0.0.0">4</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$1.0.0">5</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$2.0.0">6</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$3.0.0">7</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$4.0.0">8</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$5.0.0">9</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$1.$6.0.0">10</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2">
																								<td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$0.0.0">11</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$1.0.0">12</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$2.0.0">13</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$3.0.0">14</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$4.0.0">15</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$5.0.0">16</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$2.$6.0.0">17</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3">
																								<td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$0.0.0">18</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$1.0.0">19</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$2.0.0">20</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$3.0.0">21</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$4.0.0">22</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$5.0.0">23</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$3.$6.0.0">24</span>
																								</div></td>
																							</tr>
																							<tr data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4">
																								<td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$0">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$0.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$0.0.0">25</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$1">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$1.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$1.0.0">26</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$2">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$2.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$2.0.0">27</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$3">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$3.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$3.0.0">28</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$4">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$4.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$4.0.0">29</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$5">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$5.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$5.0.0">30</span>
																								</div></td><td class="CalendarMonth__day CalendarMonth__day--valid" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$6">
																								<div class="CalendarDay" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$6.0">
																									<span class="CalendarDay__day" data-reactid=".3.0.0.0.1.0.0.1.0.0.2.0.$12-16.0.1.$4.$6.0.0">31</span>
																								</div></td>
																							</tr>
																						</tbody>
																					</table>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="SearchForm__guests text-left col-md-3 col-lg-2" data-reactid=".3.0.0.0.2">
													<div class="select select-block select-large" data-reactid=".3.0.0.0.2.0">
														<select aria-label="จำนวนผู้เข้าพัก" name="guests" data-reactid=".3.0.0.0.2.0.0">
															<option selected="" value="1" data-reactid=".3.0.0.0.2.0.0.$1">ผู้เข้าพัก 1 คน</option><option value="2" data-reactid=".3.0.0.0.2.0.0.$2">ผู้เข้าพัก 2 คน</option><option value="3" data-reactid=".3.0.0.0.2.0.0.$3">ผู้เข้าพัก 3 คน</option><option value="4" data-reactid=".3.0.0.0.2.0.0.$4">ผู้เข้าพัก 4 คน</option><option value="5" data-reactid=".3.0.0.0.2.0.0.$5">ผู้เข้าพัก 5 คน</option><option value="6" data-reactid=".3.0.0.0.2.0.0.$6">ผู้เข้าพัก 6 คน</option><option value="7" data-reactid=".3.0.0.0.2.0.0.$7">ผู้เข้าพัก 7 คน</option><option value="8" data-reactid=".3.0.0.0.2.0.0.$8">ผู้เข้าพัก 8 คน</option><option value="9" data-reactid=".3.0.0.0.2.0.0.$9">ผู้เข้าพัก 9 คน</option><option value="10" data-reactid=".3.0.0.0.2.0.0.$10">ผู้เข้าพัก 10 คน</option><option value="11" data-reactid=".3.0.0.0.2.0.0.$11">ผู้เข้าพัก 11 คน</option><option value="12" data-reactid=".3.0.0.0.2.0.0.$12">ผู้เข้าพัก 12 คน</option><option value="13" data-reactid=".3.0.0.0.2.0.0.$13">ผู้เข้าพัก 13 คน</option><option value="14" data-reactid=".3.0.0.0.2.0.0.$14">ผู้เข้าพัก 14 คน</option><option value="15" data-reactid=".3.0.0.0.2.0.0.$15">ผู้เข้าพัก 15 คน</option><option value="16" data-reactid=".3.0.0.0.2.0.0.$16">ผู้เข้าพัก 16+ คน</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<input type="hidden" name="source" value="bb" data-reactid=".3.0.1">
										<div class="SearchForm__submit col-sm-2" data-reactid=".3.0.2">
											<button type="submit" class="btn btn-primary btn-large btn-block" data-reactid=".3.0.2.0">
												<span class="SearchForm__submit-text" data-reactid=".3.0.2.0.0"><span data-reactid=".3.0.2.0.0.0">ค้นหา</span></span>
											</button>
										</div>
									</form>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<section class="
			how-it-works
			how-it-works--overlay
			js-how-it-works" aria-hidden="true" style="top: -663px;">

				<a href="#" class="how-it-works__close panel-close js-close-how-it-works"> <span class="screen-reader-only"> ปิดวิธีทำงาน </span> × </a>

				<div class="page-container-responsive panel-contrast text-contrast">

					<h2 class="screen-reader-only"> วิธีใช้งาน Airbnb </h2>

					<div class="row space-top-8 text-center">

						<div class="how-it-works__step how-it-works__step-one col-md-4">
							<div class="panel-body">
								<div class="how-it-works__image"></div>
								<h3> ค้นพบสถานที่น่าทึ่ง </h3>
								<p>
									หาเจ้าของที่พักที่มีห้องเหลือ บ้านทั้งหลัง และที่พักที่ไม่เหมือนใครอย่างปราสาทและกระท่อมน้ำแข็ง
								</p>
							</div>
						</div>

						<div class="how-it-works__step how-it-works__step-two col-md-4">
							<div class="panel-body">
								<div class="how-it-works__image"></div>
								<h3> จองที่พัก </h3>
								<p>
									ติดต่อเจ้าของที่พัก ยืนยันวันที่เดินทาง และจ่ายเงิน ทั้งหมดนี้ผ่านบริการที่ไว้ใจได้ของ Airbnb
								</p>
							</div>
						</div>

						<div class="how-it-works__step how-it-works__step-three col-md-4">
							<div class="panel-body">
								<div class="how-it-works__image"></div>
								<h3> การเดินทาง </h3>
								<p>
									รู้สึกเหมือนอยู่บ้าน ไม่ว่าจะไปที่ใดในโลก <a href="/help/getting-started/how-to-travel">เรียนรู้เพิ่มเติม</a>เกี่ยวกับวิธีเดินทางใน Airbnb
								</p>
							</div>
						</div>

					</div>

					<div class="row space-top-4 space-4 text-center">
						<p>
							<a href="/help/getting-started/how-to-host">เรียนรู้เพิ่มเติม</a>เกี่ยวกับการเป็นเจ้าของที่พักบน Airbnb และแสดงให้ผู้เข้าพักเห็นว่ามาถูกที่แล้ว
						</p>
					</div>

				</div>
			</section>

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
											<li class="air-slide background-cover host-banner__green-doors" aria-hidden="true" style="display: none;"></li>
											<li class="air-slide background-cover host-banner__having-dinner air-slide--active" aria-hidden="false" style="display: list-item; opacity: 0.737428;"></li>
										</ul>
									</div> </a>
									<!--[if (gt IE 8)|!(IE)]><!-->
									<div class="host-banner__video-container js-host-banner-video-play hide-sm hide">
										<div class="background-cover host-banner__video-preview"></div>
										<div id="host-banner-video-raw" data-id="host-banner-video" data-class="host-banner__video" data-preload="none" data-mp4="https://a0.muscache.com/airbnb/static/host_banner_v1.mp4" data-webm="https://a0.muscache.com/airbnb/static/host_banner_v1.webm" data-video-id="3"></div>
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
											<strong> การให้เช่าที่พักเปิดโลกแห่งโอกาส </strong>
										</div>
										<div class="host-banner__subtitle space-4">
											สร้างรายได้จากการให้นักเดินทางเช่าห้องว่าง
										</div>
										<a href="/rooms/new?p1_b=1" class="link-reset host-banner__btn"> <strong class="btn btn-host btn-large btn-block host-banner__cta"> คุณจะทำเงินได้เท่าไร </strong> </a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="react-hero-promo-container panel-dark"></div>

			<div class="panel panel-dark no-border-top">
				<div id="discovery-container">
					<div class="discovery-section hide page-container-responsive page-container-no-padding" id="discovery-saved-searches"></div>

					<div class="discovery-section hide page-container-responsive page-container-no-padding" id="weekend-recommendations"></div>

					<div class="discovery-section page-container-responsive page-container-no-padding space-6" id="discover-recommendations">
						<noscript>
							&lt;div class="all-destinations space-top-6"&gt;
							&lt;h5 class="space-4 text-center"&gt;
							&lt;p&gt;
							เปิด Javascript เพื่อให้ Airbnb สามารถทำงานได้
							&lt;/p&gt;
							&lt;p&gt;
							ในขณะเดียวกันนี่เป็นสถานที่ยอดนิยมบางส่วนให้สำรวจ
							&lt;/p&gt;
							&lt;/h5&gt;
							&lt;div class="row space-8 text-center"&gt;
							&lt;div class="col-2"&gt;
							&lt;p&gt;&lt;a href="/s/Anna-Maria-Island--FL"&gt;Anna Maria Island&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Aruba"&gt;Aruba&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Asheville--NC?type=bnb"&gt;Asheville&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Aspen--CO"&gt;Aspen&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Austin--TX"&gt;Austin&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Bermuda"&gt;Bermuda&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Boone--NC?type=cabin"&gt;Boone&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Cannon-Beach--OR"&gt;Cannon Beach&lt;/a&gt;&lt;/p&gt;
							&lt;/div&gt;
							&lt;div class="col-2"&gt;
							&lt;p&gt;&lt;a href="/s/Cocoa-Beach--FL"&gt;Cocoa Beach&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Daytona-Beach--FL"&gt;Daytona Beach&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Destin--FL"&gt;Destin&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Florida--United-States"&gt;Florida&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Florida-Keys"&gt;Florida Keys&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Fredericksburg--TX?type=bnb"&gt;Fredericksburg&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Gulf-Shores--AL"&gt;Gulf Shores&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Hawaii--United-States"&gt;Hawaii&lt;/a&gt;&lt;/p&gt;
							&lt;/div&gt;
							&lt;div class="col-2"&gt;
							&lt;p&gt;&lt;a href="/s/Hilton-Head-Island--SC"&gt;Hilton Head Island&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Key-West--FL"&gt;Key West&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Lake-Tahoe--CA"&gt;Lake Tahoe&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Los-Angeles--CA"&gt;Los Angeles&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Maine--United-States"&gt;Maine&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Maui--HI"&gt;Maui&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Myrtle-Beach--SC"&gt;Myrtle Beach&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/New-Orleans--LA?type=bnb"&gt;New Orleans&lt;/a&gt;&lt;/p&gt;
							&lt;/div&gt;
							&lt;div class="col-2"&gt;
							&lt;p&gt;&lt;a href="/s/North-Myrtle-Beach--SC"&gt;North Myrtle Beach&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Orange-Beach--AL"&gt;Orange Beach&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Orlando--FL"&gt;Orlando&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Outer-Banks--NC"&gt;Outer Banks&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/O‘ahu--HI"&gt;O‘ahu&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Palm-Springs--CA"&gt;Palm Springs&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Panama-City--FL"&gt;Panama City&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Pigeon-Forge--TN?type=cabin"&gt;Pigeon Forge&lt;/a&gt;&lt;/p&gt;
							&lt;/div&gt;
							&lt;div class="col-2"&gt;
							&lt;p&gt;&lt;a href="/s/Portland--OR"&gt;Portland&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Saint-Augustine--FL?type=bnb"&gt;Saint Augustine&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/San-Diego--CA"&gt;San Diego&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/San-Francisco--CA"&gt;San Francisco&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Sanibel-Island--FL"&gt;Sanibel Island&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Santa-Barbara--CA"&gt;Santa Barbara&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Santa-Catalina-Island--CA"&gt;Santa Catalina Island&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Seaside--OR"&gt;Seaside&lt;/a&gt;&lt;/p&gt;
							&lt;/div&gt;
							&lt;div class="col-2"&gt;
							&lt;p&gt;&lt;a href="/s/Seattle--WA"&gt;Seattle&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Sedona--AZ?type=bnb"&gt;Sedona&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Siesta-Key--FL"&gt;Siesta Key&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Sonoma--CA"&gt;Sonoma&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/South-Padre-Island--TX"&gt;South Padre Island&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Sunriver--OR"&gt;Sunriver&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Tybee-Island--GA"&gt;Tybee Island&lt;/a&gt;&lt;/p&gt;
							&lt;p&gt;&lt;a href="/s/Virginia-Beach--VA"&gt;Virginia Beach&lt;/a&gt;&lt;/p&gt;
							&lt;/div&gt;
							&lt;/div&gt;

							&lt;/div&gt;
						</noscript>
						<div class="section-intro text-center space-6 space-top-8">
							<h2 class="space-1"><strong>สำรวจโลก</strong></h2>
							<p class="text-lead">
								ดูว่าใครๆ เขาไปไหนกันในโลกใบนี้บ้าง
							</p>
						</div>
						<div class="discovery-tiles">

							<div class="row">

								<div class="col-lg-8 col-md-12 rm-padding-sm">
									<div class="discovery-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('https://a1.muscache.com/ic/discover/85?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px');" data-sm-img-url="https://a1.muscache.com/ic/discover/85?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px">
										<a href="/s/New-York--NY?source=ds" class="link-reset" data-hook="discovery-card" data-id="New York">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> นิวยอร์ก </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm space-4">
									<div class="">
										<div class="darken-on-hover-container">
											<a href="/rooms/1113347" class="text-normal link-reset">
											<div class="discovery-card darken-on-hover discovery-listing" style="background-image:url('https://a0.muscache.com/im/pictures/18824431/2c5c092a_original.jpg?aki_policy=x_medium')">
												<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
													<sup class="h6 text-contrast"> ฿ </sup>
													<span class="h3 price-amount"> 6337 </span>
													<sup class="h6 text-contrast"> </sup>
												</div>

												<div class="va-container va-container-v va-container-h">
													<div class="va-middle text-center text-contrast">
														<div class="media-photo media-round space-2 card-profile-picture">
															<img alt="" height="50" src="https://a1.muscache.com/im/users/6096273/profile_pic/1366962533/original.jpg?aki_policy=profile_medium" width="50">
														</div>
														<div class="h3 strong">
															ให้เช่าที่พักโดย Paul &amp; Jessica
														</div>
														<div>
															หาดเฮอร์โมซา
														</div>
													</div>
												</div>

											</div> </a>

										</div>
									</div>
								</div>

								<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm ">
									<div class="discovery-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('https://a0.muscache.com/ic/pictures/discovery/attribute_photos/beach_1x1.jpg?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;size=large_cover&amp;downsize=326px:326px&amp;v=6');" data-sm-img-url="https://a0.muscache.com/ic/pictures/discovery/attribute_photos/beach_2x1.jpg?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;size=large_cover&amp;downsize=655px:326px&amp;v=6">
										<a href="/s/Hawaii--United-States?source=ds" class="link-reset" data-hook="discovery-card" data-id="">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> แดดอ่อนๆบนชายหาดในฮาวาย </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm hide-sm">
									<div class="discovery-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('https://a1.muscache.com/ic/discover/396?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=326px:326px');" data-sm-img-url="https://a0.muscache.com/ic/discover/397?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px">
										<a href="/s/Paris--France?source=ds" class="link-reset" data-hook="discovery-card" data-id="Paris">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> ปารีส </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm hide-sm">
									<div class="discovery-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('https://a0.muscache.com/ic/discover/228?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;crop=0.67xw:1xh;*,*&amp;downsize=326px:326px');" data-sm-img-url="https://a2.muscache.com/ic/discover/2752?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;crop=0.67xw:1xh;*,*&amp;downsize=655px:326px">
										<a href="/s/Barcelona--Spain?source=ds" class="link-reset" data-hook="discovery-card" data-id="Barcelona">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> บาร์เซโลนา </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>

								<div class="col-lg-4 col-md-6 col-sm-12 rm-padding-sm space-4">
									<div class="">
										<div class="darken-on-hover-container">
											<a href="/rooms/492596" class="text-normal link-reset">
											<div class="discovery-card darken-on-hover discovery-listing" style="background-image:url('https://a1.muscache.com/im/pictures/12978640/7d58d55d_original.jpg?aki_policy=x_medium')">
												<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
													<sup class="h6 text-contrast"> ฿ </sup>
													<span class="h3 price-amount"> 5771 </span>
													<sup class="h6 text-contrast"> </sup>
												</div>

												<div class="va-container va-container-v va-container-h">
													<div class="va-middle text-center text-contrast">
														<div class="media-photo media-round space-2 card-profile-picture">
															<img alt="" height="50" src="https://a0.muscache.com/im/users/2430022/profile_pic/1422648116/original.jpg?aki_policy=profile_medium" width="50">
														</div>
														<div class="h3 strong">
															ให้เช่าที่พักโดย Peter &amp; James
														</div>
														<div>
															ลอนดอน
														</div>
													</div>
												</div>

											</div> </a>

										</div>
									</div>
								</div>

								<div class="col-lg-8 col-md-12 hide-sm rm-padding-sm">
									<div class="discovery-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('https://a2.muscache.com/ic/discover/42?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px');" data-sm-img-url="https://a2.muscache.com/ic/discover/42?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px">
										<a href="/s/London--United-Kingdom?source=ds" class="link-reset" data-hook="discovery-card" data-id="London">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> ลอนดอน </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>

								<div class="col-lg-4 col-md-6 hide-sm rm-padding-sm col-switch col-md-push-6 col-lg-push-0">
									<div class="discovery-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('https://a2.muscache.com/ic/discover/275?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=326px:326px');" data-sm-img-url="https://a1.muscache.com/ic/discover/276?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px">
										<a href="/s/San-Francisco--CA?source=ds" class="link-reset" data-hook="discovery-card" data-id="San Francisco">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> ซานฟรานซิสโก </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								<div class="col-lg-4 col-md-6 hide-sm rm-padding-sm ">
									<div class="discovery-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('https://a1.muscache.com/ic/discover/94?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=326px:326px');" data-sm-img-url="https://a0.muscache.com/ic/discover/95?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;v=33b4f2&amp;downsize=655px:326px">
										<a href="/s/Berlin--Germany?source=ds" class="link-reset" data-hook="discovery-card" data-id="Berlin">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> กรุงเบอร์ลิน </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								<div class="col-lg-4 col-md-6 hide-sm rm-padding-sm ">
									<div class="discovery-card rm-padding-sm space-4 darken-on-hover " style="background-image:url('https://a0.muscache.com/ic/pictures/discovery/attribute_photos/romantic_1x1.jpg?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;size=large_cover&amp;downsize=326px:326px&amp;v=6');" data-sm-img-url="https://a0.muscache.com/ic/pictures/discovery/attribute_photos/romantic_2x1.jpg?interpolation=lanczos-none&amp;output-format=jpg&amp;output-quality=70&amp;size=large_cover&amp;downsize=655px:326px&amp;v=6">
										<a href="/s/Budapest--Hungary?source=ds" class="link-reset" data-hook="discovery-card" data-id="Budapest">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> ตกหลุมรักใน บูดาเปสต์ </strong>
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

			<div id="belong-anywhere-container" class="air-slideshow belong-anywhere hide-sm js-belong-anywhere">
				<ul class="belong-anywhere__slides list-unstyled belong-anywhere--loaded" id="belong-anywhere-slideshow">
					<!--[if (gt IE 8)|!(IE)]><!-->
					<li class="air-slide air-slide--active
					background-cover belong-anywhere__belong" aria-hidden="false">
						<div class="row row-table row-full-height text-center">
							<div class="col-sm-12 col-middle">
								<div class="text-jumbo text-contrast text-branding">
									รู้สึกคุ้นเคยทุกที่
								</div>
								<div class="h3 text-contrast space-3">
									ดูวิธีที่เจ้าของที่พัก Airbnb สร้างความรู้สึกเป็นส่วนหนึ่งทั่วโลก
								</div>
								<a href="#" data-prevent-default="" id="belong-play-button" class="link-reset"> <i class="belong-anywhere__icon icon icon-video-play text-contrast text-jumbo"></i> <span class="screen-reader-only"> เล่นวิดีโอทุกที่เป็นของคุณ </span> </a>
							</div>
						</div>
					</li>
					<li class="air-slide background-cover belong-anywhere__belo" aria-hidden="true">
						<div class="row row-table row-full-height text-center">
							<div class="col-sm-12 col-middle">
								<div class="text-jumbo text-contrast text-branding">
									มาทำความรู้จักกับ Bélo (เบโล)
								</div>
								<div class="h3 text-contrast space-3">
									ความเป็นมาของความลงตัว
								</div>
								<a id="belo-play-button" class="belong-anywhere__icon text-contrast text-jumbo link-reset" href="#"> <i class="icon icon-video-play"></i> <span class="screen-reader-only"> เล่นวิดีโอ Bélo </span> </a>
							</div>
						</div>
					</li>
					<!--<![endif]-->
					<!--[if (gt IE 8)|!(IE)]><!-->
					<li class="air-slide belong-anywhere__create" aria-hidden="true">
						<!--<![endif]-->
						<a href="https://create.airbnb.com"> <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="" height="292" data-original="https://a1.muscache.com/airbnb/static/homepages/create-02-06fcf9119127632bdeeec8a3aa2cddce.png" class="col-center lazy">
						<div class="row space-top-6">
							<div class="col-md-3 col-offset-1">
								<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Create Airbnb" data-original="https://a0.muscache.com/airbnb/static/homepages/create-01-91da0830c13bb80e81530326600da7a5.png" class="pull-right lazy">
							</div>
							<div class="col-md-7 space-top-2">
								<div class="h2 text-contrast">
									<strong> ทำให้ Airbnb เป็นของคุณ </strong>
								</div>
								<div class="h2 text-contrast belong-anywhere__create-subtitle">
									<strong> สร้างสัญลักษณ์ บอกเล่าเรื่องราว </strong>
								</div>
							</div>
						</div> </a>
					</li>
					<li class="air-slide belong-anywhere__rentals" aria-hidden="true">
						<div class="row row-table row-full-height text-center">
							<div class="col-sm-6 col-middle">
								<div class="belong-anywhere__rentals-title text-jumbo text-contrast
								text-branding space-3">
									บ้านคุณ ทุกที่ในโลก
								</div>
								<div class="belong-anywhere__rentals-subtitle h3 text-contrast space-4">
									บน Airbnb ห้องพักวันหยุดให้ความรู้สึกเหมือนบ้าน หากทุกสิ่งจากวิลล่าหรูไปจนถึงอพาร์ทเมนท์เป็นมิตรต่อครอบครัว
								</div>
								<div class="row">
									<div class="col-sm-6 col-offset-3">
										<a href="/vacation-rentals" class="btn btn-contrast btn-large btn-semi-transparent"> เริ่มสำรวจ </a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
				<!--[if (gt IE 8)|!(IE)]><!-->
				<a href="#" aria-controls="belong-anywhere-slideshow" class="air-slideshow__prev link-reset text-jumbo js-previous-slide"> <i class="icon icon-chevron-left text-contrast"></i> <span class="screen-reader-only"> ก่อนหน้านี้ </span> </a>
				<a href="#" aria-controls="belong-anywhere-slideshow" class="air-slideshow__next link-reset text-jumbo js-next-slide"> <i class="icon icon-chevron-right text-contrast"></i> <span class="screen-reader-only">ต่อไป</span> </a>
				<!--<![endif]-->
			</div>

			<!--[if (gt IE 8)|!(IE)]><!-->
			<div id="belong-video-player" class="fullscreen-video-player fullscreen-video-player--hidden" aria-hidden="true">
				<div class="row row-table row-full-height">
					<div class="col-sm-12 col-middle text-center">
						<video preload="none" video-id="1">
							<source src="https://a0.muscache.com/airbnb/static/Belong_p1_v2.mp4" type="video/mp4">
							<source src="https://a0.muscache.com/airbnb/static/Belong_p1_v2.webm" type="video/webm">
						</video>

						<i id="play-button-belong" class="fullscreen-video-player__icon icon icon-video-play icon-white hide"></i>
						<a id="close-fullscreen-belong" class="fullscreen-video-player__close link-reset" href="#"> <i class="icon icon-remove"></i> <span class="screen-reader-only"> ออกจากหน้าจอเต็ม </span> </a>
					</div>
				</div>
			</div>
			<div id="belo-video-player" class="fullscreen-video-player fullscreen-video-player--hidden" aria-hidden="true">
				<div class="row row-table row-full-height">
					<div class="col-sm-12 col-middle text-center">
						<video preload="none" video-id="2">
							<source src="https://a0.muscache.com/airbnb/static/belo-3.mp4" type="video/mp4">
							<source src="https://a0.muscache.com/airbnb/static/belo-3.webm" type="video/webm">
						</video>

						<i id="play-button-belo" class="fullscreen-video-player__icon icon icon-video-play icon-white hide"></i>
						<a id="close-fullscreen-belo" class="fullscreen-video-player__close link-reset" href="#"> <i class="icon icon-remove"></i> <span class="screen-reader-only"> ออกจากหน้าจอเต็ม </span> </a>
					</div>
				</div>
			</div>

			<!--<![endif]-->

			<section id="community-wrapper" class="community space-4 hide-sm">

				<div class="space-top-8 space-8 text-center">
					<h2><strong>ชุมชนของเรา</strong></h2>
				</div>

				<ul class="community__container row col-center list-unstyled js-community-container">

					<li class="col-md-6 col-lg-3 space-md-4">
						<div class="community-card community-card--create js-community-card community-card--show-images">
							<div class="panel">
								<a href="https://create.airbnb.com" class="community-card__link
								panel-image media-photo
								media-link
								js-community-card-create"> <div class="media-cover media-cover-dark"></div>
								<div class="row row-table row-full-height">
									<div class="col-sm-12 col-middle text-contrast text-center">
										<div class="space-5">
											<img src="https://a0.muscache.com/airbnb/static/homepages/create-logo2-3b7774a2b2ed6e4b930ce744916e5849.png" alt="Create Airbnb" width="105" height="36" class="lazy" data-original="https://a0.muscache.com/airbnb/static/homepages/create-logo2-3b7774a2b2ed6e4b930ce744916e5849.png" style="display: inline;">
										</div>
										<div class="space-3">
											<img src="https://a1.muscache.com/airbnb/static/homepages/create-img-bd380285eda2b7e32ba35c00c10699b7.png" alt="" class="lazy" data-original="https://a1.muscache.com/airbnb/static/homepages/create-img-bd380285eda2b7e32ba35c00c10699b7.png" style="display: inline;">
										</div>
										<div class="h3">
											<strong> สร้าง Airbnb ในแบบตัวคุณ </strong>
										</div>
										<div>
											สร้างสัญลักษณ์และบอกเล่าเรื่องราวเกี่ยวกับตัวคุณเอง
										</div>
									</div>
								</div> </a>
							</div>
						</div>
					</li>

					<li class="col-md-6 col-lg-3 space-md-4">
						<div class="community-card community-card--traveling                   js-community-card community-card--show-images">
							<div class="panel">
								<a href="/help/getting-started/how-to-travel" ,="" class="community-card__link panel-image media-photo media-link text-center"> <div class="media-cover media-cover-dark background-cover"></div>
								<div class="community-card__header">
									<div class="community-card__header-label">
										<strong class="text-contrast"> การเดินทาง </strong>
									</div>
								</div>
								<div class="row row-table row-full-height text-contrast">
									<div class="col-sm-10 col-center col-bottom">
										<div class="h2">
											<strong>แกร์รี่และลีแอนน์</strong>
										</div>

										<div class="space-4">
											ข้ามมหาสมุทรหรือเมือง แกร์รี่และลีแอนน์ค้นหาประสบการณ์ท้องถิ่นเสมอ
											<br>
											<br>
											<u>เรียนรู้เพิ่มเติมเกี่ยวกับการเดินทางบน Airbnb</u>
										</div>

									</div>
								</div> </a>
							</div>
						</div>
					</li>

					<li class="col-md-6 col-lg-3 space-md-4">
						<div class="community-card                                     community-card--business                   js-community-card community-card--show-images">
							<div class="panel">
								<a href="/business-travel" ,="" class="community-card__link
								panel-image
								media-photo
								media-link
								text-center
								js-community-card-business"> <div class="media-cover media-cover-dark background-cover"></div>
								<div class="community-card__header">
									<div class="community-card__header-label">
										<strong class="text-contrast"> การเดินทางเพื่อธุรกิจ </strong>
									</div>
								</div>
								<div class="row row-table row-full-height text-contrast">
									<div class="col-sm-11 col-center col-bottom">
										<div class="h2">
											<strong> Airbnb สำหรับธุรกิจ </strong>
										</div>

										<div class="space-8">
											รู้สึกเหมือนอยู่บ้าน ไม่ว่างานคุณจะนำคุณไปที่ไหน
											<br>
											<br>
											<u>ให้ทีมของคุณใช้ Airbnb</u>
										</div>
									</div>
								</div> </a>
							</div>
						</div>
					</li>

					<li class="col-md-6 col-lg-3 space-md-4">
						<div class="community-card community-card--hosting js-community-card community-card--show-images">
							<div class="panel">
								<a href="/help/getting-started/how-to-host" ,="" class="community-card__link panel-image media-photo media-link text-center"> <div class="media-cover media-cover-dark background-cover"></div>
								<div class="community-card__header">
									<div class="community-card__header-label">
										<strong class="text-contrast"> การเป็นเจ้าของที่พัก </strong>
									</div>
								</div>
								<div class="row row-table row-full-height">
									<div class="col-sm-12 col-center col-bottom text-contrast">
										<div class="h2">
											<strong>พาทริเชีย</strong>
										</div>
										<div class="space-4">
											ช่างภาพมืออาชีพ พาทริเชียชอบช่วยผู้เข้าพักสำรวจฉากศิลปะของเซี่ยงไฮ้
											<br>
											<br>
											<u>เรียนรู้เพิ่มเติมเกี่ยวกับการให้เช่าที่พักบน Airbnb</u>
										</div>
									</div>
								</div> </a>
							</div>
						</div>
					</li>

				</ul>

			</section>
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
