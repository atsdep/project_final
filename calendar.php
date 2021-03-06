<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_SESSION['member_id'])) {
	header("location:index.php?login=" . urlencode($_SERVER['REQUEST_URI']) . "&error=1");
	exit(0);
} else {
	require ("controllers/calendar_controller.php");
	require ("controllers/newpage_controller.php");
	require ("config/datetime.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>แก้ไข ปฏิทิน สำหรับรถเช่า Rentcnd ของคุณ</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">

		<link rel="stylesheet" href="css/car.css">

		<link rel="stylesheet" href="css/adthasid.css">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<?php
		require ("config/js.php");
		?>
		<script src="js/new_stepone_controller.js" type="text/javascript"></script>
	</head>

	<body class="with-new-header ">
		<main id="site-content" role="main">
			<div id="lys-redesign-div">
				<div>
					<div>
						<div class="list-your-space__progress">
							<div class="list-your-space__header">
								<div class="airbnb-header new">
									<div class="regular-header clearfix">
										<div class="comp pull-left">
											<a href="/" class="hdr-btn link-reset belo-container text-logo" aria-label="Rentcnd"> Rentcnd </a>
										</div>
										<div class="comp comp__step-bar-wrapper no-hover pull-left hide-sm">
											<span class="hdr-btn"><span class="hide-sm h5 text-normal"><span>ขั้นตอน 3:</span><span>&nbsp;</span></span><span class="h5 text-normal">เตรียมพร้อมสำหรับผู้ใช้บริการ</span></span>
										</div>
										<div class="lys-navbar__save-and-exit comp pull-right h5 text-normal bg-white">
											<span><span class="hide-md hide-lg"> <a href="#" class="lys-navbar__save-and-exit-link hdr-btn" data-prevent-default="true"> <span>ทางออก</span> </a> </span> <span class="hide-sm"> <a href="new.php" class="lys-navbar__save-and-exit-link hdr-btn" data-prevent-default="true"> <span>บันทึกและออก</span> </a></span> </span>
										</div>
									</div>
								</div>
								<div>
									<div class="progress-bar__container"></div>
								</div>
							</div><div class="left-backdrop"></div><div class="right-backdrop hide-sm bg-white right-backdrop--with-bg"></div>
							<div class="list-your-space__content">
								<div class="centered-content clearfix">
									<div class="main-panel-container no-padding-h bg-white main-panel-outer-half clearfix" tabindex="-1">

										<div class="main-panel main-panel-padding main-panel-progress pull-right main-panel-inner-half space-sm-8">
											<div class="panel--no-border panel-title">
												<h3 class="no-margin-padding">ปฏิทิน</h3>
											</div>

											<div class="day-picker-container">

												<div class="DayPicker text-center va-top space-8">
													<table>
														<caption class="DayPicker-caption space-2">
															<strong><?php echo $thaimonth[date("n")] , " ", date(" Y ")?></strong>
														</caption>
														<thead class="text-gray text-center text-small">
															<tr>
																<td>อา</td><td>จ</td><td>อ</td><td>พ</td><td>พฤ</td><td>ศ</td><td>ส</td>
															</tr><tr class="week-header-filler"></tr>
														</thead>
														<tbody id="one_mouth">
									
														<?php
														$m = date("m");
														$y = date("Y");
														calendar($m, $y);
														?>
									
														</tbody>
													</table>
												</div>
												
												<div class="DayPicker text-center va-top space-8">
												<table>
												<caption class="DayPicker-caption space-2">
													<strong><?php echo $thaimonth[date("n", strtotime('+1 month'))] , " ", date(" Y ") ?></strong>
												</caption>
												<thead class="text-gray text-center text-small">
													<tr>
													<td>อา</td><td>จ</td><td >อ</td><td>พ</td><td>พฤ</td><td>ศ</td><td>ส</td>
													</tr><tr class="week-header-filler"></tr>
												</thead>
												<tbody id="two_mouth">
												<?php
												$m = date("m", strtotime('+1 month'));
												$y = date("Y");
												calendar($m, $y);
												?>
												</tbody>
												</table>
												</div>
												
												<div class="DayPicker text-center va-top space-8">
												<table>
												<caption class="DayPicker-caption space-2">
													<strong><?php echo $thaimonth[date("n", strtotime('+2 month'))] , " ", date(" Y ") ?></strong>
												</caption>
												<thead class="text-gray text-center text-small">
													<tr>
													<td>อา</td><td>จ</td><td >อ</td><td>พ</td><td>พฤ</td><td>ศ</td><td>ส</td>
													</tr><tr class="week-header-filler"></tr>
												</thead>
												<tbody id="three_mouth">
												<?php
												$m = date("m", strtotime('+2 month'));
												$y = date("Y");
												calendar($m, $y);
												?>
												</tbody>
												</table>
												</div>

												<div class="shared-tooltip-styles availability-tooltip text-center text-large availability-tooltip--transition tooltip-bottom-middle" style="top:0;left:0;position:absolute;opacity:0;pointer-events:none;" role="tooltip" aria-hidden="true">
													<div class="panel-body">
														<p>
															<span>วันนี้ถูกบล็อกไม่ให้มีการจอง</span>
														</p>
													</div>
												</div>
												<div class="shared-tooltip-styles availability-tooltip text-center text-large availability-tooltip--transition tooltip-bottom-middle" style="top:0;left:0;position:absolute;opacity:0;pointer-events:none;" role="tooltip" aria-hidden="true">
													<div class="panel-body">
														<p>
															<span>วันนี้ว่างให้จอง</span>
														</p>
													</div>
												</div>
											</div>
											<div>
												<p>
													<span>เมื่อคุณเผยแพร่รถเช่าของคุณ คุณสามารถบล็อกวันเพิ่มเติมได้</span>
												</p>
											</div>
										</div>

										<!-- button -->
										<div class="main-panel__actions-wrapper">
											<div class="centered-content clearfix">
												<div class="bg-white main-panel-outer-half clearfix shadowed">
													<div class="no-margin-padding__sm main-panel-padding main-panel-progress pull-right main-panel-inner-half space-sm-8">
														<div class="divider hide-sm"></div>
														<div class="row no-margin-padding__sm">
															<div class="main-panel__actions col-sm-12 no-margin-padding__sm">
																<div>
																	<a class="btn-progress-back link-icon va-container va-container-v pull-left text-gray link--accessibility-outline" href="price.php<?php if(isset($_GET['id'])){ echo '?id='.$_GET['id'];}?>"> <span class="icon hide-sm"></span><span class="va-middle"><h5 class="text-normal"><span>กลับไป</span></h5> </span> </a>
																	<a id="btn-next-calendar" class="btn btn-large btn-progress-next btn-large__next-btn pull-right-md btn-soft-dark" href="customer-requiements.php<?php if(isset($_GET['id'])){ echo '?id='.$_GET['id'];}?>">
																	<div class="btn-progress-next__text">
																		<span>ถัดไป</span>
																	</div> </a>
																	<input type="hidden" value="<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>" id="ann_id">
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="waypoint-container">
											<span style="font-size:0;"></span>
										</div>
									</div>
									<div class="help-panel-container">
										<div class="hide-sm help-panel panel">
											<div class="panel-body">
												<div class="help-panel__bulb-img help-soft space-2"></div>
												<div class="help-panel__text">
													<div>
														<p class="space-3">
															<span>ผู้ใช้จะเห็นปฏิทินของคุณและขอจองวันที่ว่าง</span>
														</p>
														<hr class="space-3">
														<div class="clearfix">
															<div class="pull-left calendar-image__tip-click-drag"></div>
															<div class="calendar-tip-text">
																<span>คลิกเพื่อเปิดวันที่คุณต้องการเปิดบริการ</span>
																<br><br>
																<span>คลิกเพื่อบล็อกวันที่คุณไม่ต้องการผู้ใช้บริการ</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="show-sm help-panel__floating-container">
											<span class="tooltip-popup__transition-container">
												<div class="help-panel--expanded help-panel__floating-panel bg-white help-panel__floating-panel--upward help-panel__floating-panel--leftward">
													<div class="help-panel__bulb-img"></div><div class="help-panel__close-icon"></div>
													<div class="help-panel__floating-panel-body help-panel__text">
														<div>
															<p>
																<span>Mobile</span>
															</p>
														</div>
													</div>
												</div>
												<div class="help-panel--collapsed help-panel__bulb-img-bubble">
													<div class="help-panel__bulb-img img-center"></div>
												</div> </span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>
	</body>
		<script type="text/javascript">
		$(document).ready(function() {
			var number = <?php echo date("j")?>
							;

							var step_oneMouth = document.querySelectorAll("#one_mouth td.DayPicker-day");
							for (var i = 0; i < step_oneMouth.length; i++) {

								if (step_oneMouth[i].innerHTML < number && step_oneMouth[i].innerHTML != "") {
									step_oneMouth[i].className = "DayPicker-day DayPicker-day--blocked-past-date";
								}
							}//block date

							$("td.DayPicker-day--available").click(function(e) {
								$(this).toggleClass("DayPicker-day--available DayPicker-day--unavailable");
							});
							
	$("#btn-next-calendar").click(function(e) {

		var select_date_ava = document.querySelectorAll("td.DayPicker-day--available");
		//หาวันที่เปิดทั้งหมด
		var ava_all_date = new Array(select_date_ava.length);
		//สร้าง อาเรตามความยาวมาเก็บ
		for (var i = 0; i < select_date_ava.length; i++) {

			ava_all_date[i] = $(select_date_ava[i]).attr("data-date");
			//เก็บค่าวันที่ที่ว่าง
			

		}//find available date

		var select_date_unava = document.querySelectorAll("td.DayPicker-day--unavailable");
		var unava_all_date = new Array(select_date_ava.length);
		for (var i = 0; i < select_date_unava.length; i++) {

			unava_all_date[i] = $(select_date_unava[i]).attr("data-date");
			

		}//find unavailable date
		var ann_id = $("#ann_id").val();
		var vOpen = ava_all_date;
		var vClose = unava_all_date;
		var mode = "update_calendar";
		var vOpen_length = select_date_ava.length;
		var vClose_length = select_date_unava.length;


		$.post("controllers/new_controller.php", {
			ann_id : ann_id,
			open : vOpen,
			close : vClose,
			mode : mode,
			open_length : vOpen_length,
			close_length : vClose_length

		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}
		}, "json");
	});

	});
	</script>
</html>
