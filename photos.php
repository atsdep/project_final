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
														</div> <!-- <div class="help-panel--expanded help-panel__floating-panel bg-white help-panel__floating-panel--downward help-panel__floating-panel--leftward">
														<div class="help-panel__bulb-img"></div>
														<div class="help-panel__close-icon"></div>
														<div class="help-panel__floating-panel-body help-panel__text">
														<div class="lys-carousel">
														<div class="lys-carousel__height-container" style="height: 275px;">
														<span>
														<div class="">
														<div>
														<div class="photo-image__help-tip-1 img-center"></div>
														<p class="space-top-2">
														<span>เจ้าของที่พักส่วนใหญ่มีรูปอย่างน้อย 8 รูป คุณสามารถเริ่มด้วยรูปเดียวและค่อยมาเพิ่มภายหลังได้ การมีรูปในที่พักทุกแห่งที่ผู้เข้าพักใช้ได้ช่วยผู้เข้าพักจินตนาการภาพการพักในที่พักคุณ</span>
														</p>
														</div>
														</div></span>
														</div>
														<div class="flex-container-h space-top-4">
														<div class="flex-item">
														<button aria-label="กลับไป" class="lys-carousel__button lys-carousel__button--prev btn btn-large" disabled="">
														<i class="icon icon-arrow-large-left"></i>
														</button>
														</div>
														<div class="flex-item flex-item-fill-parent text-center help-panel__carousel-progress">
														<i class="dot help-panel__carousel-dot dot-gray"></i>
														<i class="dot help-panel__carousel-dot dot-light-gray"></i>
														<i class="dot help-panel__carousel-dot dot-light-gray"></i>
														</div>
														<div class="flex-item">
														<button aria-label="ถัดไป" class="lys-carousel__button lys-carousel__button--next btn btn-large">
														<i class="icon icon-arrow-large-right"></i>
														</button>
														</div>
														</div>
														</div>
														</div>
														</div> --></span>
												</div>
												<div class="row no-margin-h">

													<div class="col-sm-12 space-4">
														<div>
															<input class="input-file" type="file" id="photo-image" name="image" accept="image/jpg, image/jpeg, image/png, image/gif" multiple="">
															<label class="col label--no-margin-padding" for="photo-image">
																<div class="panel-body photos__empty-frame photos__empty-drag-highlight va-container va-container-h va-container-v">
																	<div class="va-middle text-center text-gray img__upload-photos-ghosts">
																		<div class="col col-center">
																			<div class="btn btn-soft-dark btn-jumbo">
																				<i class="icon icon-upload" ></i><span > </span><span>อัพโหลดรูปภาพ</span>
																			</div>
																			<div class="row space-top-2">
																				<div class="h4 text-normal">
																					<span>หรือลากเข้ามา</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div></label>
														</div>
													</div>
													<div class="col-sm-12 no-padding-h">
														<div class="drag-and-drop__container list-unstyled photo-list__container">
															<div class="col-sm-12" draggable="true">
																<div class="photos-list__item">
																	<div class="panel-image" data-confirm="false"><img class="hide" role="presentation" src="https://a2.muscache.com/im/pictures/25513508-e5c9-42b3-8875-5b4e21915b73.jpg?aki_policy=xx_large">
																		<div class="photo-preview__title-badge">
																			<span class="text-cover-photo text-large text-normal"><span>รูปหน้าปก</span></span>
																			<div class="icon__title-photo-badge icon--with-margin pull-right"></div>
																		</div>
																		<div class="photo-preview__btns always-show">
																			<div class="btn photo-preview__btn photo-preview__delete-btn">
																				<div class="img__icon-trash-large img__icon-large pull-left"></div>
																			</div>
																		</div>
																		<div class="media-photo media-photo-block photos-list__title-canvas" style="height:285.6666666666667px;">
																			<div class="media-cover text-center img-with-border"><img role="presentation" class="img-responsive-height img-preview-1475939817265 photo-preview__cover-img-responsive" data-index="0" src="https://a2.muscache.com/im/pictures/25513508-e5c9-42b3-8875-5b4e21915b73.jpg?aki_policy=xx_large" style="position: relative; top: -286.172px;">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="row">
																			<textarea class="photo-preview__caption-textarea" placeholder="เพิ่มคำบรรยายใต้ภาพ" style="height: 45px;"></textarea>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-sm-12 space-top-5 col-lg-4 col-md-6 photos-item__preview-card " draggable="true">
																<div class="photos-list__item">
																	<div class="panel-image" data-confirm="false">
																		<img class="hide" role="presentation" src="https://a2.muscache.com/im/pictures/c857d3dc-2262-4ada-92d2-ac96e29df624.jpg?aki_policy=xx_large">
																		<div class="photo-preview__btns always-show">
																			<div class="btn photo-preview__btn photo-preview__delete-btn">
																				<div class="img__icon-trash-large img__icon-large pull-left"></div>
																			</div>
																		</div>
																		<div class="media-photo media-photo-block photos-list__canvas" style="height:179.33333333333334px;">
																			<div class="media-cover text-center img-with-border"><img role="presentation" class="img-responsive-height img-preview-1475940282517" data-index="1" src="https://a2.muscache.com/im/pictures/c857d3dc-2262-4ada-92d2-ac96e29df624.jpg?aki_policy=x_medium">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="row">
																			<textarea class="photo-preview__caption-textarea" placeholder="เพิ่มคำบรรยายใต้ภาพ" style="height: 45px;"></textarea>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-sm-12 space-top-5 col-lg-4 col-md-6 photos-item__preview-card " draggable="true">
																<div class="photos-list__item">
																	<div class="panel-image" data-confirm="false">
																		<img class="hide" role="presentation" src="https://a2.muscache.com/im/pictures/c857d3dc-2262-4ada-92d2-ac96e29df624.jpg?aki_policy=xx_large">
																		<div class="photo-preview__btns always-show photo-preview__btns--show">
																			<div class="btn photo-preview__btn photo-preview__delete-btn photo-preview__delete--confirm">
																				<div class="img__icon-trash-large img__icon-large pull-left"></div>
																				<span class="text-white text-large text-normal text-remove-confirm"> <span>ลบใช่ไหม? </span> </span>
																			</div>
																		</div>
																		<div class="media-photo media-photo-block photos-list__canvas" style="height:179.33333333333334px;">
																			<div class="media-cover text-center img-with-border"><img role="presentation" class="img-responsive-height img-preview-1475940282517" data-index="1" src="https://a2.muscache.com/im/pictures/c857d3dc-2262-4ada-92d2-ac96e29df624.jpg?aki_policy=x_medium">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="row">
																			<textarea class="photo-preview__caption-textarea" placeholder="เพิ่มคำบรรยายใต้ภาพ" style="height: 45px;"></textarea>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-sm-12 space-top-5 col-lg-4 col-md-6 photos-item__preview-card " draggable="true">
																<div class="photos-list__item">
																	<div class="panel-image" data-confirm="false">
																		<img class="hide" role="presentation" src="https://a2.muscache.com/im/pictures/c857d3dc-2262-4ada-92d2-ac96e29df624.jpg?aki_policy=xx_large">
																		<div class="photo-preview__btns always-show">
																			<div class="btn photo-preview__btn photo-preview__delete-btn">
																				<div class="img__icon-trash-large img__icon-large pull-left"></div>
																			</div>
																		</div>
																		<div class="media-photo media-photo-block photos-list__canvas" style="height:179.33333333333334px;">
																			<div class="media-cover text-center img-with-border"><img role="presentation" class="img-responsive-height img-preview-1475940282517" data-index="1" src="https://a2.muscache.com/im/pictures/c857d3dc-2262-4ada-92d2-ac96e29df624.jpg?aki_policy=x_medium">
																			</div>
																		</div>
																	</div>
																	<div class="col-sm-12">
																		<div class="row">
																			<textarea class="photo-preview__caption-textarea" placeholder="เพิ่มคำบรรยายใต้ภาพ" style="height: 45px;"></textarea>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-lg-4 col-md-6 col-sm-12 space-top-5">
																<div>
																	<input class="input-file" type="file" id="photo-image" name="image" accept="image/jpg, image/jpeg, image/png, image/gif" multiple="">
																	<label class="col label--no-margin-padding" for="photo-image">
																		<div class="panel photos-list__add-photo photos__empty-drag-highlight" style="height: 179.333px;">
																			<div class="va-container va-container-v va-container-h">
																				<div class="va-middle text-center">
																					<div class="img__icon-plus-grey img-center"></div>
																					<div class="text-gray space-top-2">
																						<span>เพิ่มมากขึ้น</span>
																					</div>
																				</div>
																			</div>
																		</div></label>
																</div>
															</div>
															<div class="col-lg-4 col-md-6 col-sm-12 space-top-5">
																<div>
																	<input class="input-file" type="file" id="photo-image" name="image" accept="image/jpg, image/jpeg, image/png, image/gif" multiple="">
																	<label class="col label--no-margin-padding" for="photo-image">
																		<div class="panel photos-list__add-photo photos__empty-drag-highlight" style="height: 179.333px;">
																			<div class="va-container va-container-v va-container-h">
																				<div class="va-middle text-center">
																					<div class="img__icon-plus-grey img-center"></div>
																					<div class="text-gray space-top-2">
																						<span>เพิ่มมากขึ้น</span>
																					</div>
																				</div>
																			</div>
																		</div></label>
																</div>
															</div>
														</div>
													</div>
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
																	<a class="btn-progress-back link-icon va-container va-container-v pull-left text-gray link--accessibility-outline" href="/become-a-host/15417960/"><span class="icon hide-sm"></span><span class="va-middle"> <h5 class="text-normal"><span>กลับไป</span></h5> </span> </a>
																	<a class="btn btn-large btn-progress-next btn-large__next-btn pull-right-md" href="/become-a-host/15417960/highlights">
																	<div class="btn-progress-next__text">
																		<span>ถัดไป</span>
																	</div></a>
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

	</body>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

</html>
