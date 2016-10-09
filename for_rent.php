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

		<title>ค้นหา - Rentcnd</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">

		<link rel="stylesheet" href="css/search.css">

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

			<div class="map-search">
				<!-- map-search -->
				<div class="sidebar">
					<!--sidebar filters-open -->
					<div id="katamari-container">

						<div>
							<div>
								<div>
									<div>
										<div class="filters collapse" style="">
											<!--filters collapse -->
											<div>
												<div class="panel-header filters-section show-sm">
													<span>ตัวกรอง</span>
												</div>
												<div class="filters-section panel-body panel-light intro-filter">
													<div class="row">
														<div class="col-lg-3 col-md-12 text-center-sm text-center-md space-sm-1 sectionLabel_rcr7sj">
															<div id="filter-section-header-dates">
																<span>วันที่</span>
															</div>
														</div>
														<div class="col-lg-9 col-md-11">
															<div class="row row-condensed">
																<div>
																	<div class="col-md-4 col-sm-6 space-1-sm">
																		<label class="screen-reader-only" for="datespan-checkin">เช็คอิน</label>
																		<input id="datespan-checkin" type="text" name="checkin" class="checkin ui-datepicker-target" value="09-10-2016" placeholder="เช็คอิน">
																	</div>
																	<div class="col-md-4 col-sm-6 space-1-sm">
																		<label class="screen-reader-only" for="datespan-checkout">เช็คเอาท์</label>
																		<input id="datespan-checkout" type="text" name="checkout" class="checkout ui-datepicker-target" value="10-10-2016" placeholder="เช็คเอาท์">
																	</div>
																</div>
																<div class="col-md-4 col-sm-12 space-sm-1">
																	<div class="select select-block">
																		<label for="guest-select" class="screen-reader-only"><span>จำนวนผู้โดยสาร</span></label>
																		<select id="guest-select">
																			<option selected="" value="1">ผู้โดยสาร 1 คน</option>
																			<option value="2">ผู้โดยสาร 2 คน</option>
																			<option value="3">ผู้โดยสาร 3 คน</option>
																			<option value="4">ผู้โดยสาร 4 คน</option>
																			<option value="5">ผู้โดยสาร 5 คน</option>
																			<option value="6">ผู้โดยสาร 6 คน</option>
																			<option value="7">ผู้โดยสาร 7 คน</option>
																			<option value="8">ผู้โดยสาร 8 คน</option>
																			<option value="9">ผู้โดยสาร 9 คน</option>
																			<option value="10">ผู้โดยสาร 10 คน</option>
																			<option value="11">ผู้โดยสาร 11 คน</option>
																			<option value="12">ผู้โดยสาร 12 คน</option>
																			<option value="13">ผู้โดยสาร 13 คน</option>
																			<option value="14">ผู้โดยสาร 14 คน</option>
																			<option value="15">ผู้โดยสาร 15 คน</option>
																			<option value="16">ผู้โดยสาร 16+ คน</option>
																		</select>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="filters-section panel-body panel-light intro-filter">
													<div class="row">
														<div class="col-lg-3 col-md-12 text-center-sm text-center-md space-sm-1 sectionLabel_rcr7sj">
															<div id="filter-section-header-room-types">
																<span>ประเภทรถ</span><span> </span><span><i class="icon icon-question hide-sm hide-md"></i></span>
															</div>
														</div>
														<div class="col-lg-9 col-md-11">
															<div class="row row-condensed" id="room-options">
																<div class="col-md-4 col-sm-12 space-sm-1">
																	<label id="entire-place-checkbox-label" class="checkbox facet-checkbox facet-checkbox--room-type panel panel-dark" for="">
																		<div class="facet-checkbox__icon-col">
																			<i class="icon h5 icon-star"></i>
																		</div>
																		<div class="facet-checkbox__label-col">
																			<span>รถเก๋ง</span>
																		</div>
																		<div class="facet-checkbox__input-col">
																			<input id="facet-checkbox-entire-place" type="checkbox" name="room-type" aria-labelledby="filter-section-header-room-types entire-place-checkbox-label" aria-describedby="entire-place-desc" value="">
																		</div></label>
																</div>
																<div class="col-md-4 col-sm-12 space-sm-1">
																	<label id="entire-place-checkbox-label" class="checkbox facet-checkbox facet-checkbox--room-type panel panel-dark" for="">
																		<div class="facet-checkbox__icon-col">
																			<i class="icon h5 icon-star"></i>
																		</div>
																		<div class="facet-checkbox__label-col">
																			<span>รถตู้</span>
																		</div>
																		<div class="facet-checkbox__input-col">
																			<input id="facet-checkbox-entire-place" type="checkbox" name="room-type" aria-labelledby="filter-section-header-room-types entire-place-checkbox-label" aria-describedby="entire-place-desc" value="">
																		</div></label>
																</div>
															</div>
															<div class="row row-condensed space-top-md-4 space-top-lg-4" id="room-options">
																<div class="col-md-4 col-sm-12 space-sm-1">
																	<label id="entire-place-checkbox-label" class="checkbox facet-checkbox facet-checkbox--room-type panel panel-dark" for="">
																		<div class="facet-checkbox__icon-col">
																			<i class="icon h5 icon-star"></i>
																		</div>
																		<div class="facet-checkbox__label-col">
																			<span>รถอเนกประสงค์</span>
																		</div>
																		<div class="facet-checkbox__input-col">
																			<input id="facet-checkbox-entire-place" type="checkbox" name="room-type" aria-labelledby="filter-section-header-room-types entire-place-checkbox-label" aria-describedby="entire-place-desc" value="">
																		</div></label>
																</div>
																<div class="col-md-4 col-sm-12 space-sm-1">
																	<label id="entire-place-checkbox-label" class="checkbox facet-checkbox facet-checkbox--room-type panel panel-dark" for="">
																		<div class="facet-checkbox__icon-col">
																			<i class="icon h5 icon-star"></i>
																		</div>
																		<div class="facet-checkbox__label-col">
																			<span>รถกระบะ</span>
																		</div>
																		<div class="facet-checkbox__input-col">
																			<input id="facet-checkbox-entire-place" type="checkbox" name="room-type" aria-labelledby="filter-section-header-room-types entire-place-checkbox-label" aria-describedby="entire-place-desc" value="">
																		</div></label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="filters-section panel-body panel-light intro-filter">
													<div class="row">
														<div class="col-lg-3 col-md-12 text-center-sm text-center-md space-sm-1 ectionLabel_rcr7sj">
															<div id="filter-section-header-price">
																<span>ช่วงราคา</span>
															</div>
														</div>
														<div class="col-lg-9 col-md-11">
															<div>
																<div class="p2-slider-new">
																	<div class="rheostat rheostat-horizontal space-2" style="position:relative;">
																		<div class="rheostat-background"></div><button aria-valuemax="35000" aria-valuemin="350" aria-valuenow="350" aria-disabled="false" data-handle-key="0" class="rheostat-handle" role="slider" style="left:0%;position:absolute;" tabindex="0" type="button"></button><button aria-valuemax="35000" aria-valuemin="350" aria-valuenow="35000" aria-disabled="false" data-handle-key="1" class="rheostat-handle" role="slider" style="left:100%;position:absolute;" tabindex="0" type="button"></button><div class="rheostat-progress" style="left:0%;width:100%;"></div>
																	</div>
																	<div class="row">
																		<div class="col-6">
																			<span><span class="price"><span>฿500</span><span></span></span></span>
																		</div>
																		<div class="col-6 text-right">
																			<span><span class="price"><span>฿15,000</span><span>+</span></span></span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="filters-section panel-body panel-light">
													<div class="row">
														<div class="col-lg-2 col-md-12 text-center-sm text-center-md space-sm-1 sectionLabel_rcr7sj">
															<div id="filter-section-header-size">
																<span>เลือกรถยนต์</span>
															</div>
														</div>
														<div class="col-lg-9 col-md-11">
															<div class="row row-condensed">
																<div class="col-md-4 col-sm-12 space-sm-1">
																	<div class="select select-block">
																		<label for="map-search-min_bedrooms" class="screen-reader-only"><span>ยี่ห้อรถยนต์</span></label>
																		<select id="map-search-min_bedrooms">
																			<option selected="" value="-1">ยี่ห้อรถยนต์</option>

																		</select>
																	</div>
																</div>
																<div class="col-md-4 col-sm-12 space-sm-1">
																	<div class="select select-block">
																		<label for="map-search-min_bathrooms" class="screen-reader-only"><span>รุ่นรถยนต์</span></label>
																		<select id="map-search-min_bathrooms">
																			<option selected="" value="-1">รุ่นรถยนต์</option>

																		</select>
																	</div>
																</div>
																<div class="col-md-4 col-sm-12 space-sm-1">
																	<div class="select select-block">
																		<label for="map-search-min_beds" class="screen-reader-only"><span>ปีรถยนต์</span></label>
																		<select id="map-search-min_beds">
																			<option selected="" value="-1">ปีรถยนต์</option>

																		</select>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="filters-section panel-body panel-light">
													<div class="row">
														<div class="col-lg-2 col-md-12 text-center-sm text-center-md space-sm-1 sectionLabel_rcr7sj">
															<div id="filter-section-header-options">
																<span>ตัวเลือก</span>
															</div>
														</div>
														<div class="col-lg-9 col-md-11">
															<div class="row row-condensed">
																<div id="OptionFilterItem-superhost" class="col-lg-4 col-md-6">
																	<label class="row row-condensed" for="filter-option-superhost">
																		<div class="col-md-2 col-sm-1 col-middle-alt">
																			<input id="filter-option-superhost" type="checkbox" value="superhost">
																		</div>
																		<div class="col-md-10 col-sm-11 col-middle-alt needsclick">
																			<div class="superhost-badge needsclick"></div><span>เจ้าของรถเช่าดีเด่น</span>
																			<br>
																			<small class="text-muted needsclick"><span>เช่ากับเจ้าของรถเช่าที่โดดเด่น</span><span><span> </span><a href="/superhost" target="_blank" rel="noopener noreferrer"><span>เรียนรู้เพิ่มเติม</span></a></span></small>
																		</div></label>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="dynamic-filters filters-section">
													<div class="filters-section panel-body panel-light">
														<div class="row">
															<div class="col-lg-2 col-md-12 text-center-sm text-center-md space-sm-1 sectionLabel_rcr7sj">
																<div id="filter-section-header-amenities">
																	<span>สิ่งอำนวยความสะดวก</span>
																</div>
															</div>
															<div class="col-lg-9 col-md-11">
																<div>
																	<div class="row row-condensed">
																		<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="อินเทอร์เน็ตไร้สาย" for="filter-option-amenities-4">
																				<div>
																					<input id="filter-option-amenities-4" type="checkbox" value="อินเทอร์เน็ตไร้สาย">
																				</div>
																				<div>
																					อินเทอร์เน็ตไร้สายภายในรถ
																				</div></label>
																		</div>
																		<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="สระว่ายน้ำ" for="filter-option-amenities-7">
																				<div>
																					<input id="filter-option-amenities-7" type="checkbox" value="สระว่ายน้ำ">
																				</div>
																				<div>
																					น้ำดื่ม
																				</div></label>
																		</div>
																		<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="ห้องครัว" for="filter-option-amenities-8">
																				<div>
																					<input id="filter-option-amenities-8" type="checkbox" value="ห้องครัว">
																				</div>
																				<div>
																					ขนม
																				</div></label>
																		</div>
																	</div>
																	<div class="filters-more">
																		<!-- filters-more collapse -->
																		<hr>
																		<div class="row row-condensed">
																			<div class="col-md-4">
																				<label class="media checkbox facet-checkbox" title="กุญแจบนประตูห้องนอน" for="filter-option-amenities-42">
																					<div>
																						<input id="filter-option-amenities-42" type="checkbox" value="กุญแจบนประตูห้องนอน">
																					</div>
																					<div>
																						สูบบุหรี่ได้
																					</div></label>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-1">
																<button class="btn-link btn-link--icon sectionLabel_rcr7sj" aria-label="+ เพิ่มเติม">
																	<i class="icon icon-caret-up hide-sm"></i><strong class="text-muted show-sm"><span>+ เพิ่มเติม</span></strong>
																</button>
															</div>
														</div>
													</div>
													<div class="filters-section panel-body panel-light">
														<div class="row">
															<div class="col-lg-2 col-md-12 text-center-sm text-center-md space-sm-1 sectionLabel_rcr7sj">
																<div id="filter-section-header-host_language">
																	<span>Host language</span>
																</div>
															</div>
															<div class="col-lg-9 col-md-11">
																<div>
																	<div class="row row-condensed">
																		<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="ภาษาไทย" for="filter-option-host_language-65536">
																				<div>
																					<input id="filter-option-host_language-65536" type="checkbox" value="ภาษาไทย">
																				</div>
																				<div>
																					ภาษาไทย
																				</div></label>
																		</div>
																		<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="English" for="filter-option-host_language-1">
																				<div>
																					<input id="filter-option-host_language-1" type="checkbox" value="English">
																				</div>
																				<div>
																					English
																				</div></label>
																		</div>
																		<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="Español" for="filter-option-host_language-64">
																				<div>
																					<input id="filter-option-host_language-64" type="checkbox" value="Español">
																				</div>
																				<div>
																					Español
																				</div></label>
																		</div>
																	</div>
																	<div class="filters-more">
																		<hr>
																		<div class="row row-condensed">
																			<div class="col-md-4">
																				<label class="media checkbox facet-checkbox" title="Bahasa Indonesia" for="filter-option-host_language-4096">
																					<div>
																						<input id="filter-option-host_language-4096" type="checkbox" value="Bahasa Indonesia">
																					</div>
																					<div>
																						Bahasa Indonesia
																					</div></label>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-1">
																<button class="btn-link btn-link--icon sectionLabel_rcr7sj" aria-label="+ เพิ่มเติม">
																	<i class="icon icon-caret-up hide-sm"></i><strong class="text-muted show-sm"><span>+ เพิ่มเติม</span></strong>
																</button>
															</div>
														</div>
													</div>
												</div>
												<div class="panel-body panel-light show-sm">
													<div class="sticky-apply-filters-placeholder"></div>
												</div>
												<div class="panel-light panel-btn-sm filters-footer filters-footer-sm fixed">
													<div class="row row-condensed">
														<div class="col-md-8 col-lg-7 col-md-offset-4 col-lg-offset-5">
															<div class="row row-condensed space-sm-7">
																<div class="col-sm-6">
																	<button class="btn btn-block cancel-btn">
																		<span>ยกเลิก</span>
																	</button>
																</div>
																<div class="col-sm-6">
																	<button class="btn btn-block btn-primary apply-filters-btn" disabled="">
																		<span>Apply filters</span>
																	</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>
									<div class="banner airbnb-plus-banner panel-body hide">
										<div class="panel airbnb-plus-banner__panel">
											<div class="pull-left">
												<div class="space-top-1 label-contrast airbnb-plus-tag">
													<span>เลือก</span>
												</div>
											</div>
											<div class="pull-right space-top-1">
												<label class="toggle toggle--color-hackberry">
													<input type="checkbox" class="toggle__checkbox">
													<div class="toggle__track"></div>
													<div class="toggle__handle">
														<span>ปิด</span>
													</div></label>
											</div>
										</div>
									</div>
									<div class="sidebar-header panel-body clearfix panel-light">
										<div class="pull-left">
											<div>
												<div class="applied-filters-container hide-sm">
													<span class="pull-left show-filters">
														<button type="button" class="btn">
															<span>ตัวกรอง</span><span> </span>
														</button></span><ul class="applied-filters list-unstyled"></ul>
												</div>
											</div>
										</div>

									</div>

									<div class="sidebar-header-placeholder"></div>
									<div aria-live="polite" class="search-results">
										<div class="outer-listings-container space-2">
											<div class="listings-container">
												<div class="">
													<div class="listing-card-wrapper col-sm-12 space-2 col-md-3">
														<div class="listing">
															<div class="panel-image listing-img">
																<div>
																	<a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" class="media-photo media-cover" target="listing_7189445">
																	<div class="listing-img-container media-cover text-center"><img src="img/car.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height" alt="">
																		<img src="img/car.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height hide" alt="">
																	</div></a>
																	<div class="slideshow-controls">
																		<button class="target-prev target-control block-link" aria-label="Previous">
																			<i class="icon icon-chevron-left icon-size-2 icon-white"></i>
																		</button>
																		<button class="target-next target-control block-link" aria-label="Next">
																			<i class="icon icon-chevron-right icon-size-2 icon-white"></i>
																		</button>
																	</div><a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445">
																	<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
																		<div class="price-label">
																			<span><sup class="currency-prefix">฿</sup><span class="price-amount">3,000</span><span> </span></span>
																		</div>
																	</div></a>
																</div>
															</div>
															<div class="panel-body panel-card-section">
																<div class="media">
																	<a href="profile.php?user=001" class="pull-right media-photo-badge card-profile-picture card-profile-picture-offset is-superhost">
																	<div class="media-photo media-round"><img src="img/profile.jpg?aki_policy=profile_medium" alt="">
																	</div></a><h3 title="Relive Resort,to live simply." class="h5 listing-name text-truncate space-top-1"><a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal"> <span class="listing-name--display">Yaris รถเช่าพร้อมคนขับ</span></a></h3>
																	<a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal link-reset">
																	<div class="text-muted listing-location text-truncate">
																		<div class="">
																			<span>รถเก๋ง</span><span class="person-capacity hide-md"><span> · </span><span>ผู้โดยสาร 2 คน</span></span><span><span> · </span><small>
																					<div class="star-rating-wrapper">
																						<div class="star-rating" content="4.5">
																							<div class="foreground">
																								<span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <i class="icon-star-half icon icon-beach icon-star-big"></i> </span>
																							</div>
																							<div class="background">
																								<span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span></span>
																							</div>
																						</div><span> </span><span class="h6 hide"><small><span></span></small></span>
																					</div></small></span>
																		</div>
																	</div></a>
																</div>
															</div>
														</div>
													</div>

													<div class="listing-card-wrapper col-sm-12 space-2 col-md-3">
														<div class="listing">
															<div class="panel-image listing-img">
																<div>
																	<a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" class="media-photo media-cover" target="listing_7189445">
																	<div class="listing-img-container media-cover text-center"><img src="img/van.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height" alt="">
																		<img src="img/van.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height hide" alt="">
																	</div></a>
																	<div class="slideshow-controls">
																		<button class="target-prev target-control block-link" aria-label="Previous">
																			<i class="icon icon-chevron-left icon-size-2 icon-white"></i>
																		</button>
																		<button class="target-next target-control block-link" aria-label="Next">
																			<i class="icon icon-chevron-right icon-size-2 icon-white"></i>
																		</button>
																	</div><a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445">
																	<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
																		<div class="price-label">
																			<span><sup class="currency-prefix">฿</sup><span class="price-amount">3,000</span><span> </span></span>
																		</div>
																	</div></a>
																</div>
															</div>
															<div class="panel-body panel-card-section">
																<div class="media">
																	<a href="profile.php?user=001" class="pull-right media-photo-badge card-profile-picture card-profile-picture-offset is-superhost">
																	<div class="media-photo media-round"><img src="img/profile.jpg?aki_policy=profile_medium" alt="">
																	</div></a><h3 title="Relive Resort,to live simply." class="h5 listing-name text-truncate space-top-1"><a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal"> <span class="listing-name--display">Yaris รถเช่าพร้อมคนขับ</span></a></h3>
																	<a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal link-reset">
																	<div class="text-muted listing-location text-truncate">
																		<div class="">
																			<span>รถเก๋ง</span><span class="person-capacity hide-md"><span> · </span><span>ผู้โดยสาร 2 คน</span></span><span><span> · </span><small>
																					<div class="star-rating-wrapper">
																						<div class="star-rating" content="4.5">
																							<div class="foreground">
																								<span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <i class="icon-star-half icon icon-beach icon-star-big"></i> </span>
																							</div>
																							<div class="background">
																								<span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span></span>
																							</div>
																						</div><span> </span><span class="h6 hide"><small><span></span></small></span>
																					</div></small></span>
																		</div>
																	</div></a>
																</div>
															</div>
														</div>
													</div>
													
													<div class="listing-card-wrapper col-sm-12 space-2 col-md-3">
														<div class="listing">
															<div class="panel-image listing-img">
																<div>
																	<a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" class="media-photo media-cover" target="listing_7189445">
																	<div class="listing-img-container media-cover text-center"><img src="img/4.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height" alt="">
																		<img src="img/4.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height hide" alt="">
																	</div></a>
																	<div class="slideshow-controls">
																		<button class="target-prev target-control block-link" aria-label="Previous">
																			<i class="icon icon-chevron-left icon-size-2 icon-white"></i>
																		</button>
																		<button class="target-next target-control block-link" aria-label="Next">
																			<i class="icon icon-chevron-right icon-size-2 icon-white"></i>
																		</button>
																	</div><a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445">
																	<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
																		<div class="price-label">
																			<span><sup class="currency-prefix">฿</sup><span class="price-amount">3,000</span><span> </span></span>
																		</div>
																	</div></a>
																</div>
															</div>
															<div class="panel-body panel-card-section">
																<div class="media">
																	<a href="profile.php?user=001" class="pull-right media-photo-badge card-profile-picture card-profile-picture-offset is-superhost">
																	<div class="media-photo media-round"><img src="img/profile.jpg?aki_policy=profile_medium" alt="">
																	</div></a><h3 title="Relive Resort,to live simply." class="h5 listing-name text-truncate space-top-1"><a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal"> <span class="listing-name--display">Yaris รถเช่าพร้อมคนขับ</span></a></h3>
																	<a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal link-reset">
																	<div class="text-muted listing-location text-truncate">
																		<div class="">
																			<span>รถเก๋ง</span><span class="person-capacity hide-md"><span> · </span><span>ผู้โดยสาร 2 คน</span></span><span><span> · </span><small>
																					<div class="star-rating-wrapper">
																						<div class="star-rating" content="4.5">
																							<div class="foreground">
																								<span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <i class="icon-star-half icon icon-beach icon-star-big"></i> </span>
																							</div>
																							<div class="background">
																								<span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span></span>
																							</div>
																						</div><span> </span><span class="h6 hide"><small><span></span></small></span>
																					</div></small></span>
																		</div>
																	</div></a>
																</div>
															</div>
														</div>
													</div>
													
													<div class="listing-card-wrapper col-sm-12 space-2 col-md-3">
														<div class="listing">
															<div class="panel-image listing-img">
																<div>
																	<a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" class="media-photo media-cover" target="listing_7189445">
																	<div class="listing-img-container media-cover text-center"><img src="img/suv.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height" alt="">
																		<img src="img/suv.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height hide" alt="">
																	</div></a>
																	<div class="slideshow-controls">
																		<button class="target-prev target-control block-link" aria-label="Previous">
																			<i class="icon icon-chevron-left icon-size-2 icon-white"></i>
																		</button>
																		<button class="target-next target-control block-link" aria-label="Next">
																			<i class="icon icon-chevron-right icon-size-2 icon-white"></i>
																		</button>
																	</div><a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445">
																	<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
																		<div class="price-label">
																			<span><sup class="currency-prefix">฿</sup><span class="price-amount">3,000</span><span> </span></span>
																		</div>
																	</div></a>
																</div>
															</div>
															<div class="panel-body panel-card-section">
																<div class="media">
																	<a href="profile.php?user=001" class="pull-right media-photo-badge card-profile-picture card-profile-picture-offset is-superhost">
																	<div class="media-photo media-round"><img src="img/profile.jpg?aki_policy=profile_medium" alt="">
																	</div></a><h3 title="Relive Resort,to live simply." class="h5 listing-name text-truncate space-top-1"><a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal"> <span class="listing-name--display">Yaris รถเช่าพร้อมคนขับ</span></a></h3>
																	<a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal link-reset">
																	<div class="text-muted listing-location text-truncate">
																		<div class="">
																			<span>รถเก๋ง</span><span class="person-capacity hide-md"><span> · </span><span>ผู้โดยสาร 2 คน</span></span><span><span> · </span><small>
																					<div class="star-rating-wrapper">
																						<div class="star-rating" content="4.5">
																							<div class="foreground">
																								<span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <i class="icon-star-half icon icon-beach icon-star-big"></i> </span>
																							</div>
																							<div class="background">
																								<span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span></span>
																							</div>
																						</div><span> </span><span class="h6 hide"><small><span></span></small></span>
																					</div></small></span>
																		</div>
																	</div></a>
																</div>
															</div>
														</div>
													</div>
													<div class="listing-card-wrapper col-sm-12 space-2 col-md-3">
														<div class="listing">
															<div class="panel-image listing-img">
																<div>
																	<a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" class="media-photo media-cover" target="listing_7189445">
																	<div class="listing-img-container media-cover text-center"><img src="img/van.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height" alt="">
																		<img src="img/van.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height hide" alt="">
																	</div></a>
																	<div class="slideshow-controls">
																		<button class="target-prev target-control block-link" aria-label="Previous">
																			<i class="icon icon-chevron-left icon-size-2 icon-white"></i>
																		</button>
																		<button class="target-next target-control block-link" aria-label="Next">
																			<i class="icon icon-chevron-right icon-size-2 icon-white"></i>
																		</button>
																	</div><a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445">
																	<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
																		<div class="price-label">
																			<span><sup class="currency-prefix">฿</sup><span class="price-amount">3,000</span><span> </span></span>
																		</div>
																	</div></a>
																</div>
															</div>
															<div class="panel-body panel-card-section">
																<div class="media">
																	<a href="profile.php?user=001" class="pull-right media-photo-badge card-profile-picture card-profile-picture-offset is-superhost">
																	<div class="media-photo media-round"><img src="img/profile.jpg?aki_policy=profile_medium" alt="">
																	</div></a><h3 title="Relive Resort,to live simply." class="h5 listing-name text-truncate space-top-1"><a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal"> <span class="listing-name--display">Yaris รถเช่าพร้อมคนขับ</span></a></h3>
																	<a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal link-reset">
																	<div class="text-muted listing-location text-truncate">
																		<div class="">
																			<span>รถเก๋ง</span><span class="person-capacity hide-md"><span> · </span><span>ผู้โดยสาร 2 คน</span></span><span><span> · </span><small>
																					<div class="star-rating-wrapper">
																						<div class="star-rating" content="4.5">
																							<div class="foreground">
																								<span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <i class="icon-star-half icon icon-beach icon-star-big"></i> </span>
																							</div>
																							<div class="background">
																								<span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span></span>
																							</div>
																						</div><span> </span><span class="h6 hide"><small><span></span></small></span>
																					</div></small></span>
																		</div>
																	</div></a>
																</div>
															</div>
														</div>
													</div>
													
													<div class="listing-card-wrapper col-sm-12 space-2 col-md-3">
														<div class="listing">
															<div class="panel-image listing-img">
																<div>
																	<a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" class="media-photo media-cover" target="listing_7189445">
																	<div class="listing-img-container media-cover text-center"><img src="img/4.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height" alt="">
																		<img src="img/4.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height hide" alt="">
																	</div></a>
																	<div class="slideshow-controls">
																		<button class="target-prev target-control block-link" aria-label="Previous">
																			<i class="icon icon-chevron-left icon-size-2 icon-white"></i>
																		</button>
																		<button class="target-next target-control block-link" aria-label="Next">
																			<i class="icon icon-chevron-right icon-size-2 icon-white"></i>
																		</button>
																	</div><a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445">
																	<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
																		<div class="price-label">
																			<span><sup class="currency-prefix">฿</sup><span class="price-amount">3,000</span><span> </span></span>
																		</div>
																	</div></a>
																</div>
															</div>
															<div class="panel-body panel-card-section">
																<div class="media">
																	<a href="profile.php?user=001" class="pull-right media-photo-badge card-profile-picture card-profile-picture-offset is-superhost">
																	<div class="media-photo media-round"><img src="img/profile.jpg?aki_policy=profile_medium" alt="">
																	</div></a><h3 title="Relive Resort,to live simply." class="h5 listing-name text-truncate space-top-1"><a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal"> <span class="listing-name--display">Yaris รถเช่าพร้อมคนขับ</span></a></h3>
																	<a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal link-reset">
																	<div class="text-muted listing-location text-truncate">
																		<div class="">
																			<span>รถเก๋ง</span><span class="person-capacity hide-md"><span> · </span><span>ผู้โดยสาร 2 คน</span></span><span><span> · </span><small>
																					<div class="star-rating-wrapper">
																						<div class="star-rating" content="4.5">
																							<div class="foreground">
																								<span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <i class="icon-star-half icon icon-beach icon-star-big"></i> </span>
																							</div>
																							<div class="background">
																								<span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span></span>
																							</div>
																						</div><span> </span><span class="h6 hide"><small><span></span></small></span>
																					</div></small></span>
																		</div>
																	</div></a>
																</div>
															</div>
														</div>
													</div>
													
													<div class="listing-card-wrapper col-sm-12 space-2 col-md-3">
														<div class="listing">
															<div class="panel-image listing-img">
																<div>
																	<a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" class="media-photo media-cover" target="listing_7189445">
																	<div class="listing-img-container media-cover text-center"><img src="img/suv.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height" alt="">
																		<img src="img/suv.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height hide" alt="">
																	</div></a>
																	<div class="slideshow-controls">
																		<button class="target-prev target-control block-link" aria-label="Previous">
																			<i class="icon icon-chevron-left icon-size-2 icon-white"></i>
																		</button>
																		<button class="target-next target-control block-link" aria-label="Next">
																			<i class="icon icon-chevron-right icon-size-2 icon-white"></i>
																		</button>
																	</div><a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445">
																	<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
																		<div class="price-label">
																			<span><sup class="currency-prefix">฿</sup><span class="price-amount">3,000</span><span> </span></span>
																		</div>
																	</div></a>
																</div>
															</div>
															<div class="panel-body panel-card-section">
																<div class="media">
																	<a href="profile.php?user=001" class="pull-right media-photo-badge card-profile-picture card-profile-picture-offset is-superhost">
																	<div class="media-photo media-round"><img src="img/profile.jpg?aki_policy=profile_medium" alt="">
																	</div></a><h3 title="Relive Resort,to live simply." class="h5 listing-name text-truncate space-top-1"><a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal"> <span class="listing-name--display">Yaris รถเช่าพร้อมคนขับ</span></a></h3>
																	<a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal link-reset">
																	<div class="text-muted listing-location text-truncate">
																		<div class="">
																			<span>รถเก๋ง</span><span class="person-capacity hide-md"><span> · </span><span>ผู้โดยสาร 2 คน</span></span><span><span> · </span><small>
																					<div class="star-rating-wrapper">
																						<div class="star-rating" content="4.5">
																							<div class="foreground">
																								<span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <i class="icon-star-half icon icon-beach icon-star-big"></i> </span>
																							</div>
																							<div class="background">
																								<span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span></span>
																							</div>
																						</div><span> </span><span class="h6 hide"><small><span></span></small></span>
																					</div></small></span>
																		</div>
																	</div></a>
																</div>
															</div>
														</div>
													</div>
													<div class="listing-card-wrapper col-sm-12 space-2 col-md-3">
														<div class="listing">
															<div class="panel-image listing-img">
																<div>
																	<a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" class="media-photo media-cover" target="listing_7189445">
																	<div class="listing-img-container media-cover text-center"><img src="img/van.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height" alt="">
																		<img src="img/van.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height hide" alt="">
																	</div></a>
																	<div class="slideshow-controls">
																		<button class="target-prev target-control block-link" aria-label="Previous">
																			<i class="icon icon-chevron-left icon-size-2 icon-white"></i>
																		</button>
																		<button class="target-next target-control block-link" aria-label="Next">
																			<i class="icon icon-chevron-right icon-size-2 icon-white"></i>
																		</button>
																	</div><a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445">
																	<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
																		<div class="price-label">
																			<span><sup class="currency-prefix">฿</sup><span class="price-amount">3,000</span><span> </span></span>
																		</div>
																	</div></a>
																</div>
															</div>
															<div class="panel-body panel-card-section">
																<div class="media">
																	<a href="profile.php?user=001" class="pull-right media-photo-badge card-profile-picture card-profile-picture-offset is-superhost">
																	<div class="media-photo media-round"><img src="img/profile.jpg?aki_policy=profile_medium" alt="">
																	</div></a><h3 title="Relive Resort,to live simply." class="h5 listing-name text-truncate space-top-1"><a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal"> <span class="listing-name--display">SUPERCAR THAILAND NAJA JINGJING NA</span></a></h3>
																	<a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal link-reset">
																	<div class="text-muted listing-location text-truncate">
																		<div class="">
																			<span>รถเก๋ง</span><span class="person-capacity hide-md"><span> · </span><span>ผู้โดยสาร 2 คน</span></span><span><span> · </span><small>
																					<div class="star-rating-wrapper">
																						<div class="star-rating" content="4.5">
																							<div class="foreground">
																								<span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <i class="icon-star-half icon icon-beach icon-star-big"></i> </span>
																							</div>
																							<div class="background">
																								<span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span></span>
																							</div>
																						</div><span> </span><span class="h6 hide"><small><span></span></small></span>
																					</div></small></span>
																		</div>
																	</div></a>
																</div>
															</div>
														</div>
													</div>
													
													<div class="listing-card-wrapper col-sm-12 space-2 col-md-3">
														<div class="listing">
															<div class="panel-image listing-img">
																<div>
																	<a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" class="media-photo media-cover" target="listing_7189445">
																	<div class="listing-img-container media-cover text-center"><img src="img/4.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height" alt="">
																		<img src="img/4.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height hide" alt="">
																	</div></a>
																	<div class="slideshow-controls">
																		<button class="target-prev target-control block-link" aria-label="Previous">
																			<i class="icon icon-chevron-left icon-size-2 icon-white"></i>
																		</button>
																		<button class="target-next target-control block-link" aria-label="Next">
																			<i class="icon icon-chevron-right icon-size-2 icon-white"></i>
																		</button>
																	</div><a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445">
																	<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
																		<div class="price-label">
																			<span><sup class="currency-prefix">฿</sup><span class="price-amount">3,000</span><span> </span></span>
																		</div>
																	</div></a>
																</div>
															</div>
															<div class="panel-body panel-card-section">
																<div class="media">
																	<a href="profile.php?user=001" class="pull-right media-photo-badge card-profile-picture card-profile-picture-offset is-superhost">
																	<div class="media-photo media-round"><img src="img/profile.jpg?aki_policy=profile_medium" alt="">
																	</div></a><h3 title="Relive Resort,to live simply." class="h5 listing-name text-truncate space-top-1"><a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal"> <span class="listing-name--display">Yaris รถเช่าพร้อมคนขับ</span></a></h3>
																	<a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal link-reset">
																	<div class="text-muted listing-location text-truncate">
																		<div class="">
																			<span>รถเก๋ง</span><span class="person-capacity hide-md"><span> · </span><span>ผู้โดยสาร 2 คน</span></span><span><span> · </span><small>
																					<div class="star-rating-wrapper">
																						<div class="star-rating" content="4.5">
																							<div class="foreground">
																								<span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <i class="icon-star-half icon icon-beach icon-star-big"></i> </span>
																							</div>
																							<div class="background">
																								<span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span></span>
																							</div>
																						</div><span> </span><span class="h6 hide"><small><span></span></small></span>
																					</div></small></span>
																		</div>
																	</div></a>
																</div>
															</div>
														</div>
													</div>
													
													<div class="listing-card-wrapper col-sm-12 space-2 col-md-3">
														<div class="listing">
															<div class="panel-image listing-img">
																<div>
																	<a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" class="media-photo media-cover" target="listing_7189445">
																	<div class="listing-img-container media-cover text-center"><img src="img/suv.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height" alt="">
																		<img src="img/suv.jpg?aki_policy=x_medium" itemprop="image" class="img-responsive-height hide" alt="">
																	</div></a>
																	<div class="slideshow-controls">
																		<button class="target-prev target-control block-link" aria-label="Previous">
																			<i class="icon icon-chevron-left icon-size-2 icon-white"></i>
																		</button>
																		<button class="target-next target-control block-link" aria-label="Next">
																			<i class="icon icon-chevron-right icon-size-2 icon-white"></i>
																		</button>
																	</div><a href="cars.php?id=7189445&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445">
																	<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
																		<div class="price-label">
																			<span><sup class="currency-prefix">฿</sup><span class="price-amount">3,000</span><span> </span></span>
																		</div>
																	</div></a>
																</div>
															</div>
															<div class="panel-body panel-card-section">
																<div class="media">
																	<a href="profile.php?user=001" class="pull-right media-photo-badge card-profile-picture card-profile-picture-offset is-superhost">
																	<div class="media-photo media-round"><img src="img/profile.jpg?aki_policy=profile_medium" alt="">
																	</div></a><h3 title="Relive Resort,to live simply." class="h5 listing-name text-truncate space-top-1"><a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal"> <span class="listing-name--display">Yaris รถเช่าพร้อมคนขับ</span></a></h3>
																	<a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal link-reset">
																	<div class="text-muted listing-location text-truncate">
																		<div class="">
																			<span>รถเก๋ง</span><span class="person-capacity hide-md"><span> · </span><span>ผู้โดยสาร 2 คน</span></span><span><span> · </span><small>
																					<div class="star-rating-wrapper">
																						<div class="star-rating" content="4.5">
																							<div class="foreground">
																								<span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <i class="icon-star-half icon icon-beach icon-star-big"></i> </span>
																							</div>
																							<div class="background">
																								<span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span></span>
																							</div>
																						</div><span> </span><span class="h6 hide"><small><span></span></small></span>
																					</div></small></span>
																		</div>
																	</div></a>
																</div>
															</div>
														</div>
													</div>

												</div><span style="font-size:0;"></span>
											</div>
										</div>
										<div class="results-footer">
											<div class="pagination-buttons-container space-8">
												<div class="results_count">
													<span><span>1</span><span> – </span><span>18</span><span> จาก</span><span><span>รถเช่า 169 รายการ</span></span></span>
												</div>
												<div class="pagination pagination-responsive">
													<ul class="list-unstyled">
														<li class="active">
															<a href="/s/เชียงใหม่--ไทย?page=1" data-prevent-default="true">1</a>
														</li>
														<li class="">
															<a href="/s/เชียงใหม่--ไทย?page=2" rel="next" data-prevent-default="true">2</a>
														</li>
														<li class="">
															<a href="/s/เชียงใหม่--ไทย?page=3" rel="next" data-prevent-default="true">3</a>
														</li>
														<li class="gap">
															<span class="gap">…</span>
														</li>
														<li class="">
															<a href="/s/เชียงใหม่--ไทย?page=10" rel="next" data-prevent-default="true">10</a>
														</li>
														<li class="next next_page">
															<a href="/s/เชียงใหม่--ไทย?page=2" rel="next" data-prevent-default="true"><span class="screen-reader-only"><span>ถัดไป</span></span><i class="icon icon-caret-right"></i></a>
														</li>
													</ul>
												</div>
											</div>
										</div><div></div>
									</div><div></div><div></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>

	</body>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

</html>
