<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
require ("config/datetime.php");
if (!isset($_SESSION['member_id'])) {
	//header("location:http://".$_SERVER['HTTP_HOST']."?pleaselogin=1");
	header("location:index.php?login=" . urlencode($_SERVER['REQUEST_URI']) . "&error=1");
	exit(0);
} else {
	require ("controllers/mycartab_controller.php");
}
?>
<!DOCTYPE html>
<html lang="th">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>สร้างรายได้จากการขับรถของตัวเอง กับ Rentcnd</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">

		<link rel="stylesheet" href="css/mycar.css">

		<link rel="stylesheet" href="css/adthasid.css">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<?php
		include 'config/js.php';
		?>
		<script src="js/mycartab_controller.js" type="text/javascript"></script>
	</head>

	<body class="with-new-header ">

		<?php
		include 'include/all_header.php';
		?>
		<main id="site-content" role="main">

			<div class="subnav hide-print">
				<div class="page-container-responsive">
					<ul class="subnav-list">
						<li>
							<a href="mycar.php" aria-selected="true" class="subnav-item cohosting-ml-tooltip-trigger" id="rooms-item">รถเช่าของคุณ</a>
						</li>
						<li>
							<a href="users.php" aria-selected="false" class="subnav-item" id="user-profile-item">โปรไฟล์</a>
						</li>
						<li>
							<a href="trips.php" aria-selected="false" class="subnav-item" id="account-item">การเดินทางของคุณ</a>
						</li>
						<li>
							<a href="account.php" aria-selected="false" class="subnav-item" id="account-item">บัญชี</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="page-container-responsive space-top-4 space-4">

				<div class="row">
					<div class="col-md-3 space-sm-3">
						<ul class="sidenav-list">
							<li>
								<a href="mycar.php" aria-selected="true" class="sidenav-item">รถเช่าของคุณ</a>
							</li>
							<li>
								<a href="my_reservations.php" aria-selected="false" class="sidenav-item">การจองของคุณ</a>
							</li>
							<li>
								<a href="customer_reservations.php" aria-selected="false" class="sidenav-item">การจองของลูกค้า</a>
							</li>
							<li>
								<a href="requirements.php" aria-selected="false" class="sidenav-item">ข้อกำหนดในการจอง</a>
							</li>

							<div class="space-top-4 space-4">
								<a href="new.php" aria-selected="false" class="btn btn-host">เพิ่มรถเช่าใหม่</a>
							</div>

						</ul>
					</div>
					<div class="col-md-9">
						<div class="your-listings-flash-container"></div>
						<div id="listings-container">
							<div>
								<div class="suspension-container" >
									<!-- <div class="panel space-4" >
										<div class="panel-header active-panel-header" >
											<div class="row" >
												<div class="col-sm-6 active-panel-padding" >
													กำลังดำเนินการ
												</div><div id="ib-master-switch-container" class="col-sm-6" ></div>
											</div>
										</div>
										<ul class="list-unstyled list-layout"> -->
											<?php
											
												$query_ann = mysqli_query($connect, "SELECT * FROM announces WHERE member_id =  '" . $_SESSION['member_id'] . "' AND announce_status != 'show' AND announce_status != 'hide' ORDER by  announces.announce_update_date DESC ");
												$row_all = mysqli_num_rows($query_ann);
												if($row_all > 0) {
											?>
									<div class="panel space-4" >
										<div class="panel-header active-panel-header" >
											<div class="row" >
												<div class="col-sm-6 active-panel-padding" >
													กำลังดำเนินการ
												</div><div id="ib-master-switch-container" class="col-sm-6" ></div>
											</div>
										</div>
										<ul class="list-unstyled list-layout">			
												
													
													
											<?php		
												while ($result_ann = mysqli_fetch_assoc($query_ann)) {
											?>
											<li class="listing panel-body">
												<div class="row row-table" >
													<i class="icon icon-size-1 icon-remove icon-remove-listing show-sm" ></i>
													<div class="col-middle space-sm-2 space-top-sm-4 col-md-5 listing-photo" >
														<a href="new.php?id=<?php echo $result_ann['announce_id'] ;?> ">
														<div class="media-photo media-photo-block-lg" >
															<?php 
															if(!isset($result_ann['announce_photos_1'])){
																$img = "img/car_default_no_photos";
															}else{
																$img = 'img/'.$result_ann['announce_photos_1'];
															}
															
															?>
															<div class="media-cover text-center" ><img class="img-responsive-height" src="<?php echo $img ;?>" >
															</div>
														</div></a>
													</div>
													<div class="col-sm-10 col-lg-7 col-middle">
														<div class="row row-table" >
															<div class="col-lg-10" >
																<div class="listing-progress" >
																	<div class="text-babu space-top-1" >
																		<?php
																		switch ($result_ann['announce_status']) {
																			case 'step1' :
																				echo '<span>เหลืออีก 2 ขั้นตอนเท่านั้น</span>';
																				break;
																			case 'step2' :
																				echo '<span>เหลืออีก 1 ขั้นตอนเท่านั้น</span>';
																				break;
																			case 'ready' :
																				echo '<span>พร้อมที่จะประกาศแล้ว!</span>';
																				break;
																			default :
																				echo '<span>คุณลงประกาศรถเช่ายังไม่เสร็จ!</span>';
																				break;
																		}
																		?>
																		
																	</div><div class="space-top-2" ></div>
																</div>
															</div>
														</div><span class="h4"><a href="new.php?id=<?php echo $result_ann['announce_id'] ;?>" class="text-normal" ><span ><span ><?php echo $result_ann['announce_title']; ?></span></span></a></span>
														<div class="text-muted text-grey space-top-1 last-modified-date" >
															<?php
															$date = date_create($result_ann['announce_update_date']);
															$strDate = $result_ann['announce_update_date'];
															?>
															<span >ปรับปรุงล่าสุดวันที่  <?php echo DateThai($strDate); ?></span>
														</div>
														
														<div class="space-top-4" >
															<a class="btn btn__first-btn btn-soft-dark" href="new.php?id=<?php echo $result_ann['announce_id'] ;?> "><span >ลงประกาศรถเช่าให้เสร็จ</span></a><a target="_blank" class="btn btn__second-btn" href="cars.php?id=<?php echo $result_ann['announce_id'] ;?> "><span >ดูตัวอย่าง</span></a>
														</div><noscript ></noscript>
													</div>
													<i class="icon icon-size-1 icon-remove icon-remove-listing hide-sm"></i>
												</div>
											</li>
											
											<?php
											}
											}
											?>
											
										</ul>
									</div>
									
								
								<?php
									$query_ann = mysqli_query($connect, "SELECT * FROM announces WHERE member_id =  '" . $_SESSION['member_id'] . "' AND announce_status = 'show' ORDER by  announces.announce_update_date DESC ");
									$row_all = mysqli_num_rows($query_ann);
									if($row_all > 0) {
								?>	
								<div class="panel space-4">
										<div class="panel-header active-panel-header">
											<div class="row">
												<div class="col-sm-6 active-panel-padding">
													ลงประกาศแล้ว
												</div><div id="ib-master-switch-container" class="col-sm-6"></div>
											</div>
										</div>
										<div class=" ib-master-switch-alert">
											<div class="alert alert-block alert-success">
												<button class="alert-close" type="button"></button>
												<div>
													บันทึกแล้ว! เปิดใช้งานการจองทันทีสำหรับที่พักทุกแห่งของคุณที่เปิดให้จองแล้ว
												</div>
											</div>
										</div>
										<ul class="list-unstyled list-layout">
								
								
								
								<?php		
									while ($result_ann = mysqli_fetch_assoc($query_ann)) {
								?>
								
											<li class="listing panel-body">
												<div class="row row-table">
													<div class="col-middle space-sm-2 space-top-sm-4 col-md-5 listing-photo">
														<a href="new.php?id=<?php echo $result_ann['announce_id']; ?>">
														<div class="media-photo media-photo-block-lg">
															<?php 
															if(!isset($result_ann['announce_photos_1'])){
																$img = "img/car_default_no_photos";
															}else{
																$img = 'img/'.$result_ann['announce_photos_1'];
															}
															
															?>
															<div class="media-cover text-center"><img class="img-responsive-height" src="<?php echo $img ?>?aki_policy=small">
															</div>
														</div></a>
													</div>
													<div class="col-sm-10 col-lg-7 col-middle">
														<div class="row row-table">
															<div class="col-lg-10"></div>
														</div><span class="h4"><a href="new.php?id=<?php echo $result_ann['announce_id']; ?>" class="text-normal"><span><span><?php echo $result_ann['announce_title'] ?></span></span></a></span>
														<!-- <div class="text-normal space-top-2">
															<?php echo $result_ann['car_province'] ?>
														</div> -->
														<div class="text-muted text-grey space-top-1 last-modified-date">
															<?php
															$date = date_create($result_ann['announce_update_date']);
															$strDate = $result_ann['announce_update_date'];
															?>
															<span >ปรับปรุงล่าสุดวันที่  <?php echo DateThai($strDate); ?></span>
														</div>
														<div class="space-top-4">
															<a class="btn btn__first-btn" href="calendar.php?id=<?php echo $result_ann['announce_id']; ?>"><span>ปฏิทินและอื่นๆ</span></a>
															<a class="btn btn__second-btn" href="cars.php?id=<?php echo $result_ann['announce_id'] ;?>">
																<span>ดูตัวอย่าง</span></a><a href="new.php?id=<?php echo $result_ann['announce_id']; ?>"  class="ib-toggle link-reset"  data-ib-enabled="true"></a>
														</div>
													</div>
												</div>
											</li>
								<?php
									}
								}
								?>
								</ul>
								</div>	
								
									
								<?php
									$query_ann = mysqli_query($connect, "SELECT * FROM announces WHERE member_id =  '" . $_SESSION['member_id'] . "' AND announce_status = 'hide' ORDER by  announces.announce_update_date DESC ");
									$row_all = mysqli_num_rows($query_ann);
									if($row_all > 0) {
								?>	
								<div class="panel space-4">
										<div class="panel-header active-panel-header">
											<div class="row">
												<div class="col-sm-6 active-panel-padding">
													ปิดประกาศอยู่
												</div><div id="ib-master-switch-container" class="col-sm-6"></div>
											</div>
										</div>
										<ul class="list-unstyled list-layout">
								
								
								
								<?php		
									while ($result_ann = mysqli_fetch_assoc($query_ann)) {
								?>
								
											<li class="listing panel-body">
												<div class="row row-table">
													<div class="col-middle space-sm-2 space-top-sm-4 col-md-5 listing-photo">
														<a href="new.php?id=<?php echo $result_ann['announce_id']; ?>">
														<div class="media-photo media-photo-block-lg">
															<?php 
															if(!isset($result_ann['announce_photos_1'])){
																$img = "img/car_default_no_photos";
															}else{
																$img = 'img/'.$result_ann['announce_photos_1'];
															}
															
															?>
															<div class="media-cover text-center"><img class="img-responsive-height" src="<?php echo $img ?>?aki_policy=small">
															</div>
														</div></a>
													</div>
													<div class="col-sm-10 col-lg-7 col-middle">
														<div class="row row-table">
															<div class="col-lg-10"></div>
														</div><span class="h4"><a href="new.php?id=<?php echo $result_ann['announce_id']; ?>" class="text-normal"><span><span><?php echo $result_ann['announce_title'] ?></span></span></a></span>
														<!-- <div class="text-normal space-top-2">
															<?php echo $result_ann['car_province'] ?>
														</div> -->
														<div class="text-muted text-grey space-top-1 last-modified-date">
															<?php
															$date = date_create($result_ann['announce_update_date']);
															$strDate = $result_ann['announce_update_date'];
															?>
															<span >ปรับปรุงล่าสุดวันที่  <?php echo DateThai($strDate); ?></span>
														</div>
														<div>
															<div class="unlisted-listing-action__toggle-button">
																<div id="hosting_id_15495789" class="activation-notification availability-select space-top-4">
																	<i class="dot space-top-2 dot-align-top dot-danger dot-red"></i>&nbsp;
																	<div class="select">
																		<select>
																			<option value="listed">ลงทะเบียนแล้ว</option>

																			<option value="unlisted">ปิดประกาศ</option>
																		</select>
																	</div>

																</div>
															</div><a class="btn unlisted-listing-action__preview-button" href="cars.php?id=<?php echo $result_ann['announce_id'] ;?> "><span>ดูตัวอย่าง</span></a>
														</div>
													</div>
												</div>
											</li>
								<?php
									}
								}
								?>
								</ul>
								</div>

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</main>

		<?php
		include 'include/footer.php';
		?>

	</body>
</html>
