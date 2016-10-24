<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_SESSION['member_id'])) {
	header("location:index.php?login=" . urlencode($_SERVER['REQUEST_URI']) . "&error=1");
	exit(0);
} else {
	require ("controllers/newpage_controller.php");
	
	$msg = "";
	//if upload button is pressed
	if(isset($_POST['upload'])){
		// the path to store the uplaoded image
		$target = "img/".basename($_FILES['image']['name']);
		
	
		// Get all the submitted data form the form
		$image = $_FILES['image']['name'];

		$sql = "UPDATE announces SET announce_photos_1 = '$image' WHERE announce_id = '" . $_GET['id'] . "'";
		mysqli_query($connect, $sql); //stores the submitted data into the database table: images
		
		// Now let's move the uploaded image into the folder : images
		if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
			$msg ="Image uploaded successfully";
			
		}else{
			$msg = "There was a problem uploading image";
		}
		
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>แก้ไข รูปภาพ สำหรับรถเช่า Rentcnd ของคุณ?</title>
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
		include 'config/js.php';
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
											<span class="hdr-btn"><span class="hide-sm h5 text-normal"><span>ขั้นตอน 2:</span><span>&nbsp;</span></span><span class="h5 text-normal">รูปภาพ</span></span>
										</div>
										<div class="lys-navbar__save-and-exit comp pull-right h5 text-normal bg-white">
											<span><span class="hide-md hide-lg"> <a href="#" class="lys-navbar__save-and-exit-link hdr-btn" data-prevent-default="true"> <span>ทางออก</span> </a> </span> <span class="hide-sm"> <a href="new.php" class="lys-navbar__save-and-exit-link hdr-btn" data-prevent-default="true"> <span>บันทึกและออก</span> </a></span> </span>
										</div>
									</div>
								</div>
								<div>
									<div class="progress-bar__container"></div>
								</div>
							</div>
							<div class="full-backdrop"></div>

							<div class="list-your-space__content">
								<div class="centered-content clearfix">
									<div class="main-panel-container no-padding-h bg-white col-sm-12 no-padding-h" tabindex="-1">
										<div class="main-panel main-panel-padding main-panel-progress col-sm-12 main-panel-inner-full space-sm-8">
											<div class="panel--no-border panel-title">
												<h3 class="no-margin-padding">รูปถ่าย</h3>
											</div>
											<div class="row extend-margin-h photo-card__content space-4">
												<div class="help-panel__floating-container">
													<span class="tooltip-popup__transition-container">
														<div class="help-panel--collapsed help-panel__bulb-img-bubble">
															<div class="help-panel__bulb-img img-center"></div>
														</div> </span>
												</div>
												<div class="row no-margin-h">
													<form method="post" action="#" enctype="multipart/form-data">
													<?php
														$sql = "SELECT announce_photos_1 FROM announces WHERE announce_id = '" . $_GET['id'] . "'";
														$query = mysqli_query($connect, $sql);
														$row = mysqli_num_rows($query);
														$result = mysqli_fetch_assoc($query);
														if(!empty($result['announce_photos_1'])){
													?>
													<div class="col-sm-12 no-padding-h">
														<div class="drag-and-drop__container list-unstyled photo-list__container">
															<div class="col-sm-12" draggable="false">
																<div class="photos-list__item">
																	<div class="panel-image" data-confirm="false"><img class="hide" role="presentation" src="img/<?php echo $result['announce_photos_1'] ?>">
																		<div class="photo-preview__title-badge">
																			<span class="text-cover-photo text-large text-normal"><span>รูปหน้าปก</span></span><div class="icon__title-photo-badge icon--with-margin pull-right"></div>
																		</div>
																		<div class="photo-preview__btns not-always-show">
																			<div class="btn photo-preview__btn photo-preview__delete-btn" onClick="DeleteCover(<?php echo $_GET['id']?>)">
																				<div class="img__icon-trash-large img__icon-large pull-left"></div>
																			</div>
																		</div>
																		<div class="media-photo media-photo-block photos-list__title-canvas" style="height:285.6666666666667px;">
																			<div class="media-cover text-center img-with-border"><img id="blah" role="presentation" class="img-responsive-height img-preview-15480579_221120381 photo-preview__cover-img-responsive" data-index="0" src="img/<?php echo $result['announce_photos_1']?>" style="position: relative; top: -142.177px;">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<?php
														}else{
													?>
													<div id="input-main-photos" class="col-sm-12 space-4">
														<div>
															
															<input class="input-file" type="file" id="photo-image" name="image" accept="image/jpg, image/jpeg, image/png, image/gif" multiple="">
															<label class="col label--no-margin-padding" for="photo-image">
																<div class="panel-body photos__empty-frame photos__empty-drag-highlight va-container va-container-h va-container-v">
																	<div class="va-middle text-center text-gray img__upload-photos-ghosts">
																		<div class="col col-center">
																			<div class="btn btn-soft-dark btn-jumbo">
																				<i class="icon icon-upload"></i><span> </span><span>เลือกรูปภาพ</span>
																			</div>
																			<!-- <div class="row space-top-2">
																				<div class="h4 text-normal">
																					<span>หรือลากเข้ามา</span>
																				</div>
																			</div> -->
																		</div>
																	</div>
																</div></label>
														</div>
													</div>
													<?php
														}
													?>
													
													<div id="show-photos" class="col-sm-12 no-padding-h hide">
														<div class="drag-and-drop__container list-unstyled photo-list__container">
															<div class="col-sm-12" draggable="false">
																<div class="photos-list__item">
																	<div class="panel-image" data-confirm="false"><img class="hide" role="presentation" src="">
																		<div class="photo-preview__title-badge">
																			<span class="text-cover-photo text-large text-normal"><span>รูปหน้าปก</span></span><div class="icon__title-photo-badge icon--with-margin pull-right"></div>
																		</div>
																		<div class="photo-preview__btns not-always-show">
																			<div class="btn photo-preview__btn photo-preview__delete-btn">
																				<div class="img__icon-trash-large img__icon-large pull-left"></div>
																			</div>
																		</div>
																		<div class="media-photo media-photo-block photos-list__title-canvas" style="height:285.6666666666667px;">
																			<div class="media-cover text-center img-with-border"><img id="blah" role="presentation" class="img-responsive-height img-preview-15480579_221120381 photo-preview__cover-img-responsive" data-index="0" src="" style="position: relative; top: -142.177px;">
																			</div>
																		</div>
																	</div>
																</div>
																<button class="btn btn-soft-dark btn-jumbo" type="submit" name="upload" value="Upload Image"> 
																	อัพโหลด
																</button>
															</div>
														</div>
													</div>
													</form>
												</div>
											</div>
										</div>
										<div class="main-panel__actions-wrapper">
											<div class="centered-content clearfix">
												<div class="bg-white col-sm-12 no-padding-h shadowed">
													<div class="no-margin-padding__sm main-panel-padding main-panel-progress col-sm-12 main-panel-inner-full space-sm-8">
														<div class="divider hide-sm"></div>
														<div class="row no-margin-padding__sm">
															<div class="main-panel__actions col-sm-12 no-margin-padding__sm">
																<div>
																	<a class="btn-progress-back link-icon va-container va-container-v pull-left text-gray link--accessibility-outline" href="new.php?id=<?php
																	if (isset($_GET['id'])) { echo $_GET['id'];
																	}
																	?>"><span class="icon hide-sm"></span><span class="va-middle"> <h5 class="text-normal"><span>กลับไป</span></h5> </span> </a>
																	<a class="btn btn-large btn-progress-next btn-large__next-btn pull-right-md" href="description.php?id=<?php
																	if (isset($_GET['id'])) { echo $_GET['id'];
																	}
																	?>">
																	<div class="btn-progress-next__text">
																		<span>ถัดไป</span>
																	</div></a>
																	<input type="hidden" value="<?php
																	if (isset($_GET['id'])) { echo $_GET['id'];
																	}
																	?>" id="ann_id">
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

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main>
		<script type="text/javascript" charset="utf-8">
			function DeleteCover(id) {
				var mode = "DeleteCover";
				var ann_id = $("#ann_id").val();
				$.post("controllers/new_controller.php", {
					id : id,
					ann_id : ann_id,
					mode : mode
				}, function(data) {
					if (data.error) {
						console.log(data.msg);
					} else {
						console.log(data.msg);
						//location.reload();
						window.location.assign(data.goto);
					}
				}, "json");
				return false;
			};
		</script>

	</body>
</html>
