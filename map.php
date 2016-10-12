<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_SESSION['member_id'])) {
	header("location:index.php?login=" . urlencode($_SERVER['REQUEST_URI']) . "&error=1");
	exit(0);
} else {
	require ("controllers/newpage_controller.php");
}
?>
<!DOCTYPE html>
<html lang="th">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>แก้ไข ตำแหน่งที่ตั้ง สำหรับรถเช่า Rentcnd ของคุณ</title>
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
											<span class="hdr-btn"><span class="hide-sm h5 text-normal"><span>ขั้นตอน 1:</span><span>&nbsp;</span></span><span class="h5 text-normal">เริ่มที่ข้อมูลพื้นฐาน</span></span>
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
												<h3 class="no-margin-padding">รถเช่าของคุณอยู่ที่ไหน</h3>
											</div>
											<div class="lys-location__map-pane">
												<div style="height: 100%; width: 100%; position: relative; background-color: rgb(164, 221, 245); overflow: hidden;">
													<img src="https://a2.muscache.com/airbnb/static/manage_listing/location/map-pin-moving-36d141c186e61720e2aeb4d1ddca2626.png" style="display:none;">
													<div class="" style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0;">
														<div style="position: absolute; left: 0px; top: 0px; overflow: hidden; width: 100%; height: 100%; z-index: 0; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;">
															<div style="position: absolute; left: 0px; top: 0px; z-index: 1; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0); will-change: transform;">
																<div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
																	<div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
																		<div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
																			<div style="width: 256px; height: 256px; position: absolute; left: 26px; top: 34px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -230px; top: 34px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 26px; top: -222px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 26px; top: 290px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 282px; top: 34px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -230px; top: -222px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -230px; top: 290px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 282px; top: -222px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 282px; top: 290px;"></div>
																		</div>
																	</div>
																</div>
																<div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;">
																	<div style="position: absolute; left: 0px; top: 0px; z-index: 30;">
																		<div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
																			<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 26px; top: 34px;">
																				<canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"></canvas>
																			</div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -230px; top: 34px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 26px; top: -222px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 26px; top: 290px;"></div>
																			<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 282px; top: 34px;">
																				<canvas width="256" height="256" draggable="false" style="width: 256px; height: 256px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;"></canvas>
																			</div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -230px; top: -222px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -230px; top: 290px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 282px; top: -222px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 282px; top: 290px;"></div>
																		</div>
																	</div>
																</div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
																<div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
																	<div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
																		<div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
																			<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 26px; top: 34px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -230px; top: 34px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 26px; top: -222px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 26px; top: 290px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 282px; top: 34px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -230px; top: -222px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -230px; top: 290px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 282px; top: -222px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 282px; top: 290px;"></div>
																		</div>
																	</div>
																	<div style="width: 34px; height: 50px; overflow: hidden; position: absolute; left: 225px; top: 130px; z-index: 170;"><img src="https://a1.muscache.com/airbnb/static/manage_listing/location/map-pin-set-683ede4db84e0e46fdb9ab28d204cac3.png" draggable="false" style="position: absolute; left: 0px; top: 0px; -webkit-user-select: none; width: 34px; height: 50px; border: 0px; padding: 0px; margin: 0px; max-width: none;">
																	</div>
																</div>
																<div style="position: absolute; z-index: 0; left: 0px; top: 0px;">
																	<div style="overflow: hidden;"></div>
																</div>
																<div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
																	<div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;">
																		<div style="position: absolute; left: 26px; top: 34px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1592!3i943!4i256!2m3!1e0!2sm!3i366038422!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=130045" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
																		</div>
																		<div style="position: absolute; left: -230px; top: 34px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1591!3i943!4i256!2m3!1e0!2sm!3i366038422!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=67963" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
																		</div>
																		<div style="position: absolute; left: 26px; top: -222px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1592!3i942!4i256!2m3!1e0!2sm!3i366038314!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=21635" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
																		</div>
																		<div style="position: absolute; left: 26px; top: 290px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1592!3i944!4i256!2m3!1e0!2sm!3i366038422!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=35017" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
																		</div>
																		<div style="position: absolute; left: 282px; top: 34px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1593!3i943!4i256!2m3!1e0!2sm!3i366038411!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=77172" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
																		</div>
																		<div style="position: absolute; left: -230px; top: -222px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1591!3i942!4i256!2m3!1e0!2sm!3i366038314!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=90624" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
																		</div>
																		<div style="position: absolute; left: -230px; top: 290px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1591!3i944!4i256!2m3!1e0!2sm!3i366038422!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=104006" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
																		</div>
																		<div style="position: absolute; left: 282px; top: -222px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1593!3i942!4i256!2m3!1e0!2sm!3i366038314!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=83717" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
																		</div>
																		<div style="position: absolute; left: 282px; top: 290px; transition: opacity 200ms ease-out;"><img src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1593!3i944!4i256!2m3!1e0!2sm!3i366038411!3m14!2sth!3sUS!5e18!12m1!1e47!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmYscy50OjM2fHMuZTpnLmZ8cC5jOiNmZmRlZDNjNyxzLnQ6NDB8cy5lOmcuZnxwLmM6I2ZmZDJlNWM3LHMudDozNXxzLmU6Zy5mfHAuYzojZmZlNmRmZDgscy50OjM5fHMuZTpnLmZ8cC5jOiNmZmNiYmNhYyxzLnQ6NDl8cy5lOmcuZnxwLnM6MTZ8cC5sOjI1LHMudDoxMDU5fHMuZTpnLmZ8cC5oOiM5ZDAwZmZ8cC5zOjI1fHAubDo1LHMudDo2fHMuZTpnLmZ8cC5jOiNmZjlmZGJmNHxwLmw6NQ!4e0&amp;token=113215" draggable="false" alt="" style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
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
																<div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;">
																	<div class="" style="position: absolute; overflow: hidden; margin-left: 0px; margin-top: 0px; left: 242px; top: 170px; z-index: 171; display: block;"></div><img src="https://maps.gstatic.com/intl/en_us/mapfiles/drag_cross_67_16.png" style="position: absolute; z-index: 1000002; display: none; margin-left: -8px; margin-top: -9px;">
																</div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
																<div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
																	<div onselectstart="return false;" ondragstart="return false;" title="" class="" style="position: absolute; overflow: hidden; opacity: 0.01; margin-left: 0px; margin-top: 0px; left: 242px; top: 170px; z-index: 171; display: block;"></div>
																	<div class="gmnoprint" title="" style="width: 34px; height: 50px; overflow: hidden; position: absolute; opacity: 0.01; cursor: pointer; left: 225px; top: 130px; z-index: 170;"><img src="https://a1.muscache.com/airbnb/static/manage_listing/location/map-pin-set-683ede4db84e0e46fdb9ab28d204cac3.png" draggable="false" style="position: absolute; left: 0px; top: 0px; -webkit-user-select: none; width: 34px; height: 50px; border: 0px; padding: 0px; margin: 0px; max-width: none;">
																	</div>
																</div>
																<div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
																	<div style="z-index: -202; cursor: pointer; display: none;">
																		<div style="width: 30px; height: 27px; overflow: hidden; position: absolute;"><img src="https://maps.gstatic.com/mapfiles/undo_poly.png" draggable="false" style="position: absolute; left: 0px; top: 0px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 90px; height: 27px;">
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
															<a target="_blank" href="https://maps.google.com/maps?ll=14.003035,99.992031&amp;z=11&amp;t=m&amp;hl=th&amp;gl=US&amp;mapclient=apiv3" title="คลิกเพื่อดูพื้นที่นี้ใน Google Maps " style="position: static; overflow: visible; float: none; display: inline;">
															<div style="width: 66px; height: 26px; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
															</div></a>
														</div>
														<div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 92px; top: 80px;">
															<div style="padding: 0px 0px 10px; font-size: 16px;">
																ข้อมูลแผนที่
															</div>
															<div style="font-size: 13px;">
																ข้อมูลแผนที่ ©2016 Google
															</div>
															<div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
															</div>
														</div>
														<div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 238px; bottom: 0px; width: 128px;">
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
														<div style="width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="https://maps.gstatic.com/mapfiles/api-3/images/sv5.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 112px; -webkit-user-select: none; border: 0px; padding: 0px; margin: 0px;">
														</div>
														<div draggable="false" class="gm-style-cc" style="-webkit-user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
															<div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
																<div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
															</div>
															<div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
																<a target="_new" title="รายงานข้อผิดพลาดในแผนที่ถนนหรือภาพถ่ายไปยัง Google" href="https://www.google.com/maps/@14.0030347,99.9920306,11z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">รายงานข้อผิดพลาดของแผนที่</a>
															</div>
														</div>
														<div class="gmnoprint gm-bundled-control" draggable="false" controlwidth="28" controlheight="55" style="margin: 10px; -webkit-user-select: none; position: absolute; left: 0px; top: 0px;">
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
													</div>
												</div>
											</div>
											<p class="space-top-4 text-gray">
												<span>ลากหมุดเพื่อเปลี่ยนตำแหน่งที่ตั้ง</span>
											</p>
										</div>
										<div class="main-panel__actions-wrapper">
											<div class="centered-content clearfix">
												<div class="bg-white main-panel-outer-half clearfix shadowed">
													<div class="no-margin-padding__sm main-panel-padding main-panel-progress pull-right main-panel-inner-half space-sm-8">
														<div class="divider hide-sm"></div>
														<div class="row no-margin-padding__sm">
															<div class="main-panel__actions col-sm-12 no-margin-padding__sm">
																<div>
																	<a class="btn-progress-back link-icon va-container va-container-v pull-left text-gray link--accessibility-outline" href="province.php?id=<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>"> <span class="icon hide-sm"></span><span class="va-middle"><h5 class="text-normal"><span>กลับไป</span></h5> </span> </a>
																	<a class="btn btn-large btn-progress-next btn-large__next-btn pull-right-md btn-soft-dark" href="generation.php?id=<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>">
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
														<p>
															<span>ผู้ใช้จะเห็นตำแหน่งที่คุณเลือก</span>
														</p>
														<div class="tip-address-img"></div>
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
																<span>ผู้ใช้จะเห็นตำแหน่งที่คุณเลือก</span>
															</p><div class="tip-address-img"></div>
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
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

</html>
