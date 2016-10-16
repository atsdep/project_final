<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
$query_province = mysqli_query($connect, "SELECT * FROM provinces Order by PROVINCE_NAME ASC");
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
		
		<link rel="stylesheet" href="css/jquery-fix.css">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<?php
		include 'config/js.php';
		?>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script type="text/javascript" src="js/for_rent_controller.js"></script>
	</head>

	<body class="with-new-header ">

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
													<span>ค้นหาอย่างละเอียด</span>
												</div>
												<form id="filters-from">
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
																		<label class="screen-reader-only" for="datespan-checkin">วันที่เช่า</label>
																		<input readonly id="from" type="text" name="checkin" class="checkin ui-datepicker-target" value="<?php if (isset($_GET['from'])) {echo $_GET['from'];}?>" placeholder="วว-ดด-ปปปป">
																	</div>
																	<div class="col-md-4 col-sm-6 space-1-sm">
																		<label class="screen-reader-only" for="datespan-checkout">ถึงวันที่</label>
																		<input readonly id="to" type="text" name="checkout" class="checkout ui-datepicker-target" value="<?php if (isset($_GET['to'])) {echo $_GET['to'];}?>" placeholder="วว-ดด-ปปปป">
																	</div>
																</div>
																<div class="col-md-4 col-sm-12 space-sm-1">
																	<div class="select select-block">
																		<label for="passenger" class="screen-reader-only"><span>จำนวนผู้โดยสาร</span></label>
																		<select id="passenger">
																			<?php
																			for ($i = 1; $i <= 15; $i++) {
																				if ($i != 15) {
																					if (isset($_GET['passenger'])) {
																						if ($_GET['passenger'] == $i) {
																							echo '<option selected="" value="' . $i . '">ผู้โดยสาร ' . $i . ' คน</option>';
																						} else {
																							echo '<option value="' . $i . '">ผู้โดยสาร ' . $i . ' คน</option>';
																						}
																					} else {
																						echo '<option value="' . $i . '">ผู้โดยสาร ' . $i . ' คน</option>';
																					}
																				} else {
																					if ($_GET['passenger'] > 14) {
																						echo '<option selected="" value="' . $i . '">ผู้โดยสาร 14+ คน</option>';
																					} else {
																						echo '<option value="' . $i . '">ผู้โดยสาร 14+ คน</option>';
																					}
																				}
																			}
																			?>
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
															<div id="filter-section-header-dates">
																<span>เป้าหมาย</span>
															</div>
														</div>
														<div class="col-lg-9 col-md-11">
															<div class="row row-condensed">
																<div class="col-lg-4 col-md-6 col-sm-12 space-sm-1">
																	<div class="select select-block">
																		<label for="source_province" class="screen-reader-only"><span>จังหวัดต้นทาง</span></label>
																		<select id="source_province">
																			<option disabled="" selected="" value="-1">จังหวัดต้นทาง</option>
																			<?php

																			while ($result_province = mysqli_fetch_assoc($query_province)) {
																				echo "<option value=\" " . $result_province['PROVINCE_ID'] . " \"> " . $result_province['PROVINCE_NAME'] . "</option> ";
																			}
																			?>
																		</select>
																	</div>
																</div>
																<div class="col-lg-4 col-md-6 col-sm-12 space-sm-1">
																	<div class="select select-block">
																		<label for="destination_province" class="screen-reader-only"><span>จังหวัดปลายทาง</span></label>
																		<select id="destination_province">
																			<option disabled="" selected="" value="-1">จังหวัดปลายทาง</option>
																			<?php
																			$query_province = mysqli_query($connect, "SELECT * FROM provinces Order by PROVINCE_NAME ASC");
																			while ($result_province = mysqli_fetch_assoc($query_province)) {
																				echo "<option value=\" " . $result_province['PROVINCE_ID'] . " \"> " . $result_province['PROVINCE_NAME'] . "</option> ";
																			}
																			?>
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
																<div class="col-lg-4 col-md-6 col-sm-12 space-sm-1">
																	<label id="entire-place-checkbox-label" class="checkbox facet-checkbox facet-checkbox--room-type panel panel-dark" for="">
																		<div class="facet-checkbox__icon-col">
																			<i class="icon h5"><img class="icon-sedan" src="img/icon-sedan.png"></i>
																		</div>
																		<div class="facet-checkbox__label-col">
																			<span>รถเก๋ง</span>
																		</div>
																		<div class="facet-checkbox__input-col">
																			<input id="sedan" type="checkbox" name="car-category" aria-labelledby="filter-section-header-room-types entire-place-checkbox-label" aria-describedby="entire-place-desc" value="">
																		</div></label>
																</div>
																<div class="col-lg-4 col-md-6 col-sm-12 space-sm-1">
																	<label id="entire-place-checkbox-label" class="checkbox facet-checkbox facet-checkbox--room-type panel panel-dark" for="">
																		<div class="facet-checkbox__icon-col">
																			<i class="icon h5"><img class="icon-van" src="img/icon-van.png"></i>
																		</div>
																		<div class="facet-checkbox__label-col">
																			<span>รถตู้</span>
																		</div>
																		<div class="facet-checkbox__input-col">
																			<input id="van" type="checkbox" name="car-category" aria-labelledby="filter-section-header-room-types entire-place-checkbox-label" aria-describedby="entire-place-desc" value="">
																		</div></label>
																</div>
															</div>
															<div class="row row-condensed space-top-md-4 space-top-lg-4" id="room-options">
																<div class="col-lg-4 col-md-6 col-sm-12 space-sm-1">
																	<label id="entire-place-checkbox-label" class="checkbox facet-checkbox facet-checkbox--room-type panel panel-dark" for="">
																		<div class="facet-checkbox__icon-col">
																			<i class="icon h5"><img class="icon-suv" src="img/icon-suv.png"></i>
																		</div>
																		<div class="facet-checkbox__label-col">
																			<span>รถอเนกประสงค์</span>
																		</div>
																		<div class="facet-checkbox__input-col">
																			<input id="suv" type="checkbox" name="car-category" aria-labelledby="filter-section-header-room-types entire-place-checkbox-label" aria-describedby="entire-place-desc" value="">
																		</div></label>
																</div>
																<div class="col-lg-4 col-md-6 col-sm-12 space-sm-1">
																	<label id="entire-place-checkbox-label" class="checkbox facet-checkbox facet-checkbox--room-type panel panel-dark" for="">
																		<div class="facet-checkbox__icon-col">
																			<i class="icon h5"><img class="icon-pickup" src="img/icon-pickup.png"></i>
																		</div>
																		<div class="facet-checkbox__label-col">
																			<span>รถกระบะ</span>
																		</div>
																		<div class="facet-checkbox__input-col">
																			<input id="pickup" type="checkbox" name="car-category" aria-labelledby="filter-section-header-room-types entire-place-checkbox-label" aria-describedby="entire-place-desc" value="">
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
																		<div id="slider-range"></div>																	
																	</div>
																	<div class="row">
																		<div class="col-6 pull-left">
																			<input type="text" id="price-left" readonly style="border:0; font-weight:bold;">																	</div>
																		<div class="col-6 text-right pull-right-price">
																			<input type="text" id="price-right" readonly style="border:0; font-weight:bold;">
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												
												<div id="btn-main-filters-confirm" class="filters-section panel-body panel-light intro-filter">
													<div class="row">
														<div class="col-lg-3 col-md-3">

														</div>
														<div class="col-lg-6 col-md-6">
															<button type="button" id="btn-confirm-filters-search" class="btn btn-block btn-soft-dark apply-filters-btn" disabled="">
																<span>ยืนยันการค้นหา</span>
															</button>
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
																		<label class="screen-reader-only"><span>ยี่ห้อรถยนต์</span></label>
																		<?php $query_car_brand = mysqli_query($connect, "SELECT * FROM car_brand ORDER BY car_brand_name ASC;"); ?>
																		<select id="car-brand">
																			<option selected="" value="-1">ยี่ห้อรถยนต์</option>
																		<?php
																		while ($result_brand = mysqli_fetch_assoc($query_car_brand)) {
																			echo "<option value=\" " . $result_brand['car_brand_id'] . " \"> " . $result_brand['car_brand_name'] . "</option> ";
																		}
																		?>
																		</select>
																	</div>
																</div>
																<div class="col-md-4 col-sm-12 space-sm-1">
																	<div class="select select-block">
																		<label class="screen-reader-only"><span>รุ่นรถยนต์</span></label>
																		<select id="car-gene" name="car-gene" class="" disabled="">
																			<option selected=""  value="" disabled="">รุ่นรถยนต์</option>
		
																		</select>
																	</div>
																</div>
																<div class="col-md-4 col-sm-12 space-sm-1">
																	<div class="select select-block">
																		<label class="screen-reader-only"><span>ปีรถยนต์</span></label>
																		<select id="car-year" name="car-year" class="">
																			<option selected="" value="" disabled="">ปีรถยนต์</option>
																			<option value="2016">2016</option>
																			<option value="2015">2015</option>
																			<option value="2014">2014</option>
																			<option value="2013">2013</option>
																			<option value="2012">2012</option>
																			<option value="2011">2011</option>
																			<option value="2010">2010</option>
																			<option value="2010">2009</option>
																			<option value="2010">2000</option>
																			<option value="2010">1999</option>
																			<option value="2010">1998</option>
																			<option value="2010">1997</option>
																			<option value="2010">1996</option>
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
																			<label class="media checkbox facet-checkbox" title="อินเทอร์เน็ตไร้สาย">
																				<div>
																					<input id="wifi" type="checkbox" value="1">
																				</div>
																				<div>
																					อินเทอร์เน็ตไร้สายภายในรถ
																				</div></label>
																		</div>
																		<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="น้ำดื่ม">
																				<div>
																					<input id="water" type="checkbox" value="1">
																				</div>
																				<div>
																					น้ำดื่ม
																				</div></label>
																		</div>
																		<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="กระดาษทิชชู่">
																				<div>
																					<input id="tissues" type="checkbox" value="1">
																				</div>
																				<div>
																					กระดาษทิชชู่
																				</div></label>
																		</div>
																		
																	</div>
																	<div id="filters-more-amenities" class="filters-more collapse">
																		<!-- filters-more collapse -->
																		<hr>
																		<div class="row row-condensed">
																			<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="หนังสือ">
																				<div>
																					<input id="book" type="checkbox" value="1">
																				</div>
																				<div>
																					หนังสือ
																				</div></label>
																			</div>
																			<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="เพลง">
																				<div>
																					<input id="music" type="checkbox" value="1">
																				</div>
																				<div>
																					เพลง
																				</div></label>
																			</div>
																			<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="เบาะนั่งสำหรับเด็ก">
																				<div>
																					<input id="childseat" type="checkbox" value="1">
																				</div>
																				<div>
																					เบาะนั่งสำหรับเด็ก   
																				</div></label>
																			</div>
																			<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="จอมอนิเตอร์ติดรถยนต์">
																				<div>
																					<input id="monitor" type="checkbox" value="1">
																				</div>
																				<div>
																					จอมอนิเตอร์ติดรถยนต์      
																				</div></label>
																			</div>
																			<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="ไฟชารจ์ 220V">
																				<div>
																					<input id="220v" type="checkbox" value="1">
																				</div>
																				<div>
																					ไฟชารจ์ 220V         
																				</div></label>
																			</div>
																			<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="ระบบฟอกอากาศในรถยนต์">
																				<div>
																					<input id="purifier" type="checkbox" value="1">
																				</div>
																				<div>
																					ระบบฟอกอากาศในรถยนต์       
																				</div></label>
																			</div>
																			<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="สูบบุหรี่ได้">
																				<div>
																					<input id="smoking" type="checkbox" value="1">
																				</div>
																				<div>
																					สูบบุหรี่ได้       
																				</div></label>
																			</div>
																			<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="นำสัตว์เลี้ยงไปด้วยได้">
																				<div>
																					<input id="pet" type="checkbox" value="1">
																				</div>
																				<div>
																					นำสัตว์เลี้ยงไปด้วยได้       
																				</div></label>
																			</div>
																			<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="แวะระหว่างทางได้">
																				<div>
																					<input id="car_stop" type="checkbox" value="1">
																				</div>
																				<div>
																					แวะระหว่างทางได้       
																				</div></label>
																			</div>
																			<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="ราคารวมค่าทางด่วน">
																				<div>
																					<input id="fuel_expenses" type="checkbox" value="1">
																				</div>
																				<div>
																					ราคารวมค่าทางด่วน       
																				</div></label>
																			</div>
																			<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="ราคารวมค่าทางด่วน">
																				<div>
																					<input id="expressway_expenses" type="checkbox" value="1">
																				</div>
																				<div>
																					ราคารวมค่าทางด่วน       
																				</div></label>
																			</div>
																			<div class="col-md-4">
																			<label class="media checkbox facet-checkbox" title="ราคารวมค่าจอดรถ">
																				<div>
																					<input id="park_expenses" type="checkbox" value="1">
																				</div>
																				<div>
																					ราคารวมค่าจอดรถ       
																				</div></label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-1">
																<button type="button" id="more-amenities" class="btn-link btn-link--icon sectionLabel_rcr7sj" aria-label="+ เพิ่มเติม">
																	<i id="icon-amenities" class="icon icon-caret-down hide-sm"></i><strong class="text-muted show-sm"><span>+ เพิ่มเติม</span></strong>
																</button>
															</div>
														</div>
													</div>
													<div class="filters-section panel-body panel-light">
														<div class="row">
															<div class="col-lg-2 col-md-12 text-center-sm text-center-md space-sm-1 sectionLabel_rcr7sj">
																<div id="filter-section-header-host_language">
																	<span>ภาษาของคนขับรถ</span>
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
																	<div id="filters-more-language" class="filters-more collapse">
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
																<button type="button" id="btn-more-language" class="btn-link btn-link--icon sectionLabel_rcr7sj" aria-label="+ เพิ่มเติม">
																	<i id="icon-language" class="icon icon-caret-down hide-sm"></i><strong class="text-muted show-sm"><span>+ เพิ่มเติม</span></strong>
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
																	<button type="button"  id="cancel-btn-more-filters" class="btn btn-block cancel-btn">
																		<span>ยกเลิก</span>
																	</button>
																</div>
																<div class="col-sm-6">
																	<button type="button" class="btn btn-block btn-soft-dark apply-filters-btn" disabled="">
																		<span>ยืนยันการค้นหา</span>
																	</button>
																</div>
															</div>
														</div>
													</div>
												</div>
												</form>
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
														<button id="btn-more-filters" type="button" class="btn">
															<span>ค้นหาอย่างละเอียด</span><span> </span>
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

													<?php
													$sql_select_all = "SELECT
													members.member_profile_photo,
													provinces.PROVINCE_NAME,
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
													WHERE announces.announce_status = 'show'
													ORDER BY announces.announce_update_date DESC";

													$query_ann_cars = mysqli_query($connect, $sql_select_all);
													//$result_ann_cars = mysqli_fetch_assoc($query_ann_cars);
													$row_ann_cars = mysqli_num_rows($query_ann_cars);
													
													if ($row_ann_cars >= 1) {
														while ($result_ann = mysqli_fetch_assoc($query_ann_cars)) {
															if (isset($result_ann['announce_photos_1'])) {
																$photo_main = 'img/' . $result_ann['announce_photos_1'];
															} else {
																$photo_main = 'img/no-image.jpg';
															}
															if (isset($result_ann['member_profile_photo'])) {
																$profile_photo = 'img/' . $result_ann['member_profile_photo'];
															} else {
																$profile_photo = 'img/profile.jpg';
															}
															$price = number_format($result_ann['announce_price']);
														?>
														<div class="listing-card-wrapper col-sm-12 space-2 col-md-4">
														<div class="listing">
															<div class="panel-image listing-img">
																<div>
																	<a href="cars.php?id=<?php echo $result_ann['announce_id']; ?>&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" class="media-photo media-cover" target="_blank">
																	<div class="listing-img-container media-cover text-center"><img src="<?php echo $photo_main ?>?aki_policy=x_medium" itemprop="image" class="img-responsive-height" alt="">
																		<img src="<?php echo $photo_main ?>?aki_policy=x_medium" itemprop="image" class="img-responsive-height hide" alt="">
																	</div></a>
																	<div class="slideshow-controls">
																		<button class="target-prev target-control block-link" aria-label="Previous">
																			<i class="icon icon-chevron-left icon-size-2 icon-white"></i>
																		</button>
																		<button class="target-next target-control block-link" aria-label="Next">
																			<i class="icon icon-chevron-right icon-size-2 icon-white"></i>
																		</button>
																	</div><a href="cars.php?id=<?php echo $result_ann['announce_id']; ?>&amp;checkin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="_blank">
																	<div class="panel-overlay-bottom-left panel-overlay-label panel-overlay-listing-label">
																		<div class="price-label">
																			<span><sup class="currency-prefix">฿</sup><span class="price-amount"><?php echo $price; ?></span><span> </span></span>
																		</div>
																	</div></a>
																</div>
															</div>
															<div class="panel-body panel-card-section">
																<div class="media">
																	<a href="profile.php?user=<?php echo $result_ann['member_id']; ?>" class="pull-right media-photo-badge card-profile-picture card-profile-picture-offset is-superhost">
																		<div class="media-photo media-round"><img src="<?php echo $profile_photo ?>?aki_policy=profile_medium" alt="">
																		</div>
																	</a>
																	<h3 title="<?php echo $result_ann['announce_title'] ?>" class="h5 listing-name text-truncate space-top-1">
																		<a href="/cars.php?id=<?php echo $result_ann['announce_id']; ?>&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="_blank" class="text-normal"> 
																			<span class="listing-name--display"><?php echo $result_ann['announce_title']; ?></span>
																		</a>
																	</h3>
																	<a href="/cars.php?id=<?php echo $result_ann['announce_id']; ?>&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="_blank" class="text-normal link-reset">
																	<div class="text-muted listing-location text-truncate">
																		<div class="">
																			<span><?php echo $result_ann['car_category_name'] ?></span><span> · </span>
																			<span><?php echo $result_ann['car_brand_name'] ?></span><span> · </span>
																			<span><?php echo $result_ann['car_gene_name'] ?></span><span> · </span>
																			<span><?php echo $result_ann['car_year'] ?></span><span> · </span>
																			<span><?php echo $result_ann['PROVINCE_NAME'] ?></span>
																		</div>
																	</div>
																	<div class="text-muted listing-location text-truncate">
																		<div class="">
																			<span class="person-capacity hide-md"><span>ผู้โดยสาร <?php echo $result_ann['announce_passenger'] ?> คน</span></span>

																			<span><span> · </span> <small>
																					<div class="star-rating-wrapper">
																						<div class="star-rating" content="4.5">
																							<div class="foreground">
																								<span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <i class="icon-star-half icon icon-beach icon-star-big"></i> </span>
																							</div>
																							<div class="background">
																								<span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span></span>
																							</div>
																						</div><span> </span><span class="h6 hide"><small><span></span></small></span>
																					</div> </small> <span> · </span> <span>ความคิดเห็น wait ข้อความ</span> </span>
																		</div>
																	</div> </a>
																</div>
															</div>
														</div>
													</div>

														<?php
														}
														}
													?>
													<!-- <div class="listing-card-wrapper col-sm-12 space-2 col-md-4">
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
																	</div></a><h3 title="Relive Resort,to live simply." class="h5 listing-name text-truncate space-top-1"><a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="_blank" class="text-normal"> <span class="listing-name--display">Yaris รถเช่าพร้อมคนขับ</span></a></h3>
																	<a href="/cars.php?id=7189445&ampcheckin=09-10-2016&amp;checkout=10-10-2016&amp;guests=1" target="listing_7189445" class="text-normal link-reset">
																	<div class="text-muted listing-location text-truncate">
																		<div class="">
																			<span>รถเก๋ง</span><span> · </span>
																			<span>Toyota</span><span> · </span>
																			<span>Yaris</span><span> · </span>
																			<span>2010</span><span> · </span>
																			<span>กรุงเทพมหานคร</span>
																		</div>
																	</div>
																	<div class="text-muted listing-location text-truncate">
																		<div class="">
																			<span class="person-capacity hide-md"><span>ผู้โดยสาร 2 คน</span></span>

																			<span><span> · </span> <small>
																					<div class="star-rating-wrapper">
																						<div class="star-rating" content="4.5">
																							<div class="foreground">
																								<span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"></i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <span> <i class="icon-star icon icon-beach icon-star-big"> </i> <span> </span> </span> <i class="icon-star-half icon icon-beach icon-star-big"></i> </span>
																							</div>
																							<div class="background">
																								<span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i><span> </span></span></span>
																							</div>
																						</div><span> </span><span class="h6 hide"><small><span></span></small></span>
																					</div> </small> <span> · </span> <span>ความคิดเห็น 2 ข้อความ</span> </span>
																		</div>
																	</div> </a>
																</div>
															</div>
														</div>
													</div> -->

												</div>
												<span style="font-size:0;"></span>
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
	<script  type="text/javascript">
  						$(document).ready(function(){
  			
  		var vFrom = $("#from").val();
  		var vTo = $("#to").val();
  		if(vFrom.length > 5 && vTo.length > 5){
  			$("#btn-booking").removeAttr("disabled");
  		}
  			
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

					beforeShow : function(input) {
						setTimeout(function() {
							var buttonPane = $(input).datepicker("widget").find(".ui-datepicker-buttonpane");

							var btn = $('<button type="button" class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all">Clear</button>');
							btn.unbind("click").bind("click", function() {
								$.datepicker._clearDate(input);
								$("#btn-booking").attr("disabled", "disabled");
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
					beforeShow : function(input) {
						setTimeout(function() {
							var buttonPane = $(input).datepicker("widget").find(".ui-datepicker-buttonpane");

							var btn = $('<button type="button" class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all">Clear</button>');
							btn.unbind("click").bind("click", function() {
								$.datepicker._clearDate(input);
								$("#btn-booking").attr("disabled", "disabled");
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

<?php
require ("config/closedb.php");
?>