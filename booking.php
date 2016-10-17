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

		<title>สร้างรายได้จากการขับรถของตัวเอง กับ Rentcnd</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">

		<link rel="stylesheet" href="css/studybooking.css">
		<link rel="stylesheet" href="css/studybookingp4.css">
		<link rel="stylesheet" href="css/adthasid.css">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<?php
		include 'config/js.php';
		?>
	</head>

	<body class="with-new-header">

		<?php
		include 'include/all_header.php';
		?>

		<main id="site-content" role="main">
			<div id="main-view" class="main-view page-container-responsive     space-top-md-6 space-md-6 space-top-lg-6 space-lg-6">

				<form action="/payments/create_booking_v2" method="post" id="checkout-form">
					<input name="code" type="hidden" value="5HTW8N">
					<input name="hosting_id" type="hidden" value="9355572">
					<input name="date" type="hidden" value="2016-10-18">
					<input name="nights" type="hidden" value="1">
					<input name="number_of_guests" type="hidden" value="1">
					<input name="special_offer_id" type="hidden" value="">
					<input name="sig" type="hidden" value="">
					<input name="ref" type="hidden" value="">
					<input name="wishlist_id" type="hidden" value="">

					<div class="row">
						<div class="col-sm-12 p4-error-header space-1">
							<div class="alert alert-with-icon alert-error alert-block hide space-lg-2 space-md-2" id="form-errors">
								<i class="icon alert-icon icon-alert-alt"></i>

								<div class="h5 space-1 error-header">
									เกือบเสร็จแล้ว!
								</div>
								<ul></ul>

							</div>

							<div class="alert alert-with-icon alert-error alert-block hide space-lg-2 space-md-2" id="server-error">
								<i class="icon alert-icon icon-alert-alt"></i>

								น่าเสียดายที่ข้อผิดพลาดที่เกิดจากเซิร์ฟเวอร์ทำให้คำขอของคุณไม่สมบูรณ์ อาจมีการซ่อมบำรุง Rentcnd อยู่หรือการเชื่อมโยงของคุณอาจหมดเวลาแล้ว โปรดลองใหม่

							</div>

							<div class="alert alert-with-icon alert-error alert-block hide space-lg-2 space-md-2" id="house-rules-error">
								<i class="icon alert-icon icon-alert-alt"></i>

								<div class="h5 space-1 error-header">
									กฏของรถเช่าและข้อกำหนด
								</div>
								<p>
									ก่อนจอง ให้ยอมรับกฎของรถเช่าและข้อกำหนดก่อน
								</p>

							</div>

						</div>
					</div>

					<div class="row">
						<div class="col-md-5 col-md-push-7 space-lg-2 space-md-2 side-summary-container">
							<div data-hypernova-key="p4_sidebarbundlejs">
								<div class="summary-card col-center">
									<div class="background-cover summary-card__payments-listing-image" style="background-image:url(img/icon-sedan.png?aki_policy=large);"></div>
									<div class="pull-right space-3 summary-card__host-profile-photo">
										<div class="media-photo media-round"><img class="summary-card__host-profile-photo-src" src="img/profile.jpg?aki_policy=profile_x_medium" alt="Name">
										</div>
									</div>
									<div class="panel">
										<div class="panel-body">
											<div class="text-muted space-2">
												<span>ให้เช่ารถเช่าโดย Name</span>
											</div>
											<div class="sidebar-text-large">
												Title
											</div>
											<div class="hide-sm text-muted">
												<ul class="list-layout summary-card__additional-details-list">
													<li>
														ประเภท
													</li>
													
														<small>
															<div class="star-rating-wrapper">
																<div class="star-rating" content="4.5">
																	<div class="foreground">
																		<span><span><i class="icon-star icon icon-beach icon-star-big"></i><span>
																		</span></span><span><i class="icon-star icon icon-beach icon-star-big"></i><span> </span></span>
																		<span><i class="icon-star icon icon-beach icon-star-big"></i><span> </span></span>
																		<span><i class="icon-star icon icon-beach icon-star-big"></i><span> </span></span>
																		<i class="icon-star-half icon icon-beach icon-star-big"></i></span>
																	</div>
																	<div class="background">
																		<span><span><i class="icon-star icon icon-light-gray icon-star-big"></i>
																			<span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i>
																			<span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i>
																			<span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i>
																			<span> </span></span><span><i class="icon-star icon icon-light-gray icon-star-big"></i>
																			<span> </span></span></span>
																	</div>
																</div>
																<span> </span>
																
															</div>
													   </small>
													
												
														<span>ความคิดเห็น 36 ข้อความ</span>
													
												</ul>
												<div>
													จังหวัด
												</div>
											</div>
											
										</div>
										<hr class="hr-booking">
										<div class="panel-body hide-sm">
											<div class="row row-condensed">
												
												<div class="col-sm-5">
													<div class="text-muted space-bottom-2">
														<span>วันที่เช่า</span>
													</div><span>18 ตุลา 2016</span>
												</div>
												<div class="col-sm-2 summary-card__check-in-icon">
													<i class="icon icon-chevron-right icon-light-gray"></i>
												</div>
												<div class="col-sm-5">
													<div class="text-muted space-bottom-2">
														<span>ถึงวันที่</span>
													</div><span>19 ตุลา 2016</span>
												</div>
											</div>
											
										</div>
										<hr class="hr-booking">
										<div class="panel-body hide-sm">
											<table class="summary-card__billing-table">
												<tbody>
													<tr class="price-item">
														<th class="price-item__header" scope="row"><span>฿353 x 1 วัน</span><span>&nbsp;</span></th><td class="text-right price-item__price">
														<div class="">
															<span>฿353</span>
														</div></td>
													</tr>
													<!-- <tr class="price-item">
														<th class="price-item__header" scope="row">
															<span>ค่าเชื้อเพลิง</span><span>&nbsp;</span>
															<span><span><i class="icon icon-question"></i></span></span>
															</th><td class="text-right price-item__price">
														<div class="">
															<span>฿35</span>
														</div></td>
													</tr> -->
												</tbody>
											</table>
										</div>
										<hr class="hr-booking">
										<div class="panel-body hide-sm">
											<button class="sidebar-text-large space-2 summary-card__total-price" tabindex="-1">
												<table class="summary-card__billing-table">
													<tbody>
														<tr class="price-item">
															<th class="price-item__header" scope="row"><span>ทั้งหมด</span><span>&nbsp;</span></th><td class="text-right price-item__price">
															<div class="">
																<span>฿388</span><sup>THB</sup>
															</div></td>
														</tr>
													</tbody>
												</table>
											</button>
											<div class="cancellation-policy">
												<span><span>นี่อาจจะเป็นเพียงแค่ราคาโดยประมาณ กรุณาติดต่อเจ้าของรถช่าเพื่อตกลงราคาที่เหมาะสมสำหรับการเดินทางของคุณ </span></span>
											</div>
											<!-- <div class="cancellation-policy">
												<span><span>นโยบายยกเลิกการจองรถเช่า: </span><span><a href="" target="_blank"><span>ยืดหยุ่น</span></a></span></span>
											</div> -->
										</div>
										<div class="show-sm panel-body text-center">
											<a><span>ดูการกำหนดราคาและสรุปการเดินทาง</span></a>
										</div>
										<input type="hidden" value="1" name="apply_airbnb_credit" id="apply_airbnb_credit">
									</div>
									<!-- <div class="hide-sm">
										<div class="risk-messagebox-container space-top-md-4 space-top-lg-5">
											<div class="risk-messagebox-pane row row-condensed">
												<div class="va-container va-container-h va-container-v">
													<div class="col-sm-10">
														<h4 class="risk-messagebox__title space-top-1"><span>Airbnb จะไม่ขอให้คุณโอนเงินเด็ดขาด</span></h4>
														<hr>
													</div>
													<div class="va-middle col-sm-2">
														<div class="img--air-defender-no-overlap text-right"></div>
													</div>
												</div>
												<div class="col-sm-10 col-md-12 col-lg-12 risk-messagebox__content">
													<span>การชำระเงินผ่านเว็บไซต์หรือแอพ Airbnb จะช่วยรักษาความปลอดภัยของการชำระเงินของคุณ และช่วยให้คุณได้รับการคุ้มครองภายใต้นโยบายที่บังคับใช้</span>
												</div>
											</div>
										</div>
									</div> -->
								</div>
							</div>
						</div>

						<div id="content-container" class="summary-card-page-content col-md-7 col-md-pull-5">

							<div class="accordion-panel" data-panel-name="AboutYourTrip">
								<section data-hook="accordion-panel-header">
									<header class="accordion-header text-lead space-top-2">
										<div class="row">
											<div class="col-md-10 text-left">
												<div class="h3 pull-left">
													1. เกี่ยวกับการเดินทางของคุณ
												</div><div class="hide-sm pull-left title-content__wrapper"></div>
											</div><div class="col-md-2 text-right header-edit-link"></div>
										</div><div class="space-2"></div>
									</header>
								</section>
								<div class="accordion-panel__content accordion-panel--expanded">
									<div data-hypernova-key="p4_first_messagebundlejs">
										<div class="p4-first-message">
											<div class="space-4">
												<div class="guest-details">
													<span>ใครกำลังจะมา</span>
													<div class="row space-top-1">
														<div class="col-lg-6 col-md-12 space-sm-2 space-md-2">
															<div class="select first-message-select guest-details-select">
																<select class="">
																	<option selected="" value="1">ผู้โดยสาร 1 คน</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="space-7">
												<div>
													<label for="guest-message-input"><span>กล่าวสวัสดีเจ้าของรถเช่าของคุณและบอกพวกเขาว่าทำไมคุณจึงใช้บริการ:</span><span></span></label>
													<div class="guest-message-textarea">
														<div>
															<textarea class="" id="message-to-host-input" name="message_to_host" placeholder="กำลังไปเยี่ยมครอบครัวหรือเพื่อนใช่ไหม กำลังไปเที่ยวชมสถานที่ต่างๆ ใช่ไหม สิ่งนี้ช่วยเจ้าของรถเช่าของคุณวางแผนสำหรับการเดินทางของคุณ" rows="4"></textarea>
														</div>
													</div>
												</div>
												<div class="space-top-1">
													<div></div>
												</div>
											</div>
											<div class="space-6">
												<div class="panel house-rules">
													<div class="panel-body house-rules__wrapper">
															<h3 class="text-center"><span>กฎของรถเช่าของ Name</span></h3>
														<div>
															<div class="structured-house-rules">
																<div class="structured-house-rules__rule house-rules__guest-control">
																	<span>ไม่เหมาะสำหรับสัตว์เลี้ยง</span><span>&nbsp;</span><i class="icon icon-ok-alt icon-babu structured-house-rules__rule-checkmark"></i>
																</div>
																<div class="structured-house-rules__rule house-rules__guest-control">
																	<span>ไม่สูบบุหรี่ภายในรถ</span><span>&nbsp;</span><i class="icon icon-ok-alt icon-babu structured-house-rules__rule-checkmark"></i>
																</div>
															</div>
														</div>
														<!-- <div class="house-rules__content">
															<pre class="house-rules__user-content">On arrival 100 bht deposit for the shower towel and 100 bht deposit for the lock is required</pre>
															<div class="house-rules__content-expandable-indicator hide"></div>
														</div> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								

									<div data-react-checksum="-224179263">
										<div class="text-lead">
											<div class="terms media">
												<div class="media-body terms-media-body">
													<label for="agrees-to-terms" class="va-container">
														<div class="va-top accordion-checkbox">
															<input class="" id="agrees-to-terms" name="" type="checkbox" value="1">
														</div>
														<div class="va-top" id="agrees-to-terms-text">
															<div>
																ข้าพเจ้ายอมรับ <a href="#" class="house-rules-link" id="house-rules-modal-trigger">กฎของรถเช่า</a>และ <a href="" class="cancel-policy-link" target="_blank">นโยบายยกเลิกการจองรถเช่า</a>
															</div>
														</div></label>
												</div>
											</div>
										</div><span></span>
										<div class="space-top-3">
											<div id="payment-form-submit-wrapper">
												<button class="btn btn-large btn-soft-dark disabled">
													<span>ดำเนินการต่อ</span>
												</button>
											</div>
											<div class="space-top-1" id="payment-form-submit-explanation">
												<span class="text-muted" id="verify-explain"><span>จากนั้น คุณจะยืนยันตัวตนของคุณสำหรับเจ้าของรถเช่าของคุณ</span></span>
											</div>
										</div>
										<div class="hide" data-hook="jumio-verification-panel">
											<div class="space-1">
												<div class="space-2 space-top-2 text-lead">
													<div>
														<div class="space-2 space-top-2">
															<h4><span>แสดงบัตรประจำตัวของคุณแก่ Name</span></h4>
															<p class="text-muted">
																<span>เจ้าของรถเช่า Name ขอให้ผู้เข้าพักแสดงบัตรประจำตัวที่ทางการออกให้แก่ Airbnb ก่อนทำการจอง เราจะไม่เปิดเผยบัตรของคุณกับเจ้าของรถเช่า และคุณไม่ต้องแสดงบัตรอีกจนกว่าบัตรจะหมดอายุ</span>
															</p>
														</div>
														<button type="button" class="btn btn-primary btn-large">
															<span>ถ่ายรูปบัตรประจำตัวคุณ</span>
														</button>
													</div>
												</div><noscript></noscript>
											</div>
										</div>
										<div id="house-rules-modal" class="modal" role="dialog" aria-hidden="true" data-trigger="#house-rules-modal-trigger">
											<div class="modal-table">
												<div class="modal-cell">
													<div class="modal-content">
														<div class="panel-header house-rules-modal-label">
															<span>กฎของรถเช่าของ Name</span><a href="#" class="panel-close" data-behavior="modal-close">×</a>
														</div>
														<div class="panel-body house-rules-modal-body">
															<div class="expandable_house_rules">
																<div class="structured_house_rules">
																	<div class="row col-sm-12">
																		<span>ไม่เหมาะสำหรับสัตว์เลี้ยง</span>
																	</div>
																	<div class="row col-sm-12 space-top-1">
																		<span>ไม่มีงานสังสรรค์หรือเหตุการณ์</span>
																	</div>
																	<div class="row">
																		<div class="col-sm-2">
																			<hr class="structured_house_rules__hr">
																		</div>
																	</div>
																</div>
																<div class="react-expandable expanded">
																	<div class="expandable-content">
																		<div>
																			<p>
																				<span>On arrival 100 bht deposit for the shower towel and 100 bht deposit for the lock is required</span>
																			</p>
																		</div><div class="expandable-indicator"></div>
																	</div><span class="react-expandable-trigger-more">
																		<button class="btn-link btn-link--bold" type="button">
																			<span>+ เพิ่มเติม</span>
																		</button></span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- <section data-hook="progress_button">
										<div class="row space-2 space-top-2">
											<div class="col-sm-4">
												<button class="btn btn-large btn-primary" type="button">
													<span>ถัดไป</span>
												</button>
											</div>
										</div>
									</section> -->
								</div>
							</div>
							<div class="accordion-style-checkout__section">
								<div data-hypernova-key="p4_agree_checkbox_termsbundlejs">
									<div data-react-checksum="-224179263">
										<span></span><span></span><span></span>
										<div class="hide" data-hook="jumio-verification-panel">
											<div class="space-1">
												<div class="space-2 space-top-2 text-lead">
													<div>
														<div class="space-2 space-top-2">
															<h4><span>แสดงบัตรประจำตัวของคุณแก่ Name</span></h4>
															<p class="text-muted">
																<span>เจ้าของรถเช่า Name ขอให้ผู้เข้าพักแสดงบัตรประจำตัวที่ทางการออกให้แก่ Airbnb ก่อนทำการจอง เราจะไม่เปิดเผยบัตรของคุณกับเจ้าของรถเช่า และคุณไม่ต้องแสดงบัตรอีกจนกว่าบัตรจะหมดอายุ</span>
															</p>
														</div>
														<button type="button" class="btn btn-primary btn-large">
															<span>ถ่ายรูปบัตรประจำตัวคุณ</span>
														</button>
													</div>
												</div><noscript></noscript>
											</div>
										</div>
										<div id="house-rules-modal" class="modal" role="dialog" aria-hidden="true" data-trigger="#house-rules-modal-trigger">
											<div class="modal-table">
												<div class="modal-cell">
													<div class="modal-content">
														<div class="panel-header house-rules-modal-label">
															<span>กฎของรถเช่าของ Name</span><a href="#" class="panel-close" data-behavior="modal-close">×</a>
														</div>
														<div class="panel-body house-rules-modal-body">
															<div class="expandable_house_rules">
																<div class="structured_house_rules">
																	<div class="row col-sm-12">
																		<span>ไม่เหมาะสำหรับสัตว์เลี้ยง</span>
																	</div>
																	<div class="row col-sm-12 space-top-1">
																		<span>ไม่มีงานสังสรรค์หรือเหตุการณ์</span>
																	</div>
																	<div class="row">
																		<div class="col-sm-2">
																			<hr class="structured_house_rules__hr">
																		</div>
																	</div>
																</div>
																<div class="react-expandable expanded">
																	<div class="expandable-content">
																		<div>
																			<p>
																				<span>On arrival 100 bht deposit for the shower towel and 100 bht deposit for the lock is required</span>
																			</p>
																		</div><div class="expandable-indicator"></div>
																	</div><span class="react-expandable-trigger-more">
																		<button class="btn-link btn-link--bold" type="button">
																			<span>+ เพิ่มเติม</span>
																		</button></span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="show-sm space-top-2">
								<div class="accordion-style-checkout__section">
									<div data-hook="mobile-total">
										<div>
											<div class="sidebar-text-large">
												<div>
													<span>ทั้งหมด</span><span>&nbsp;</span><span>฿388</span>
												</div>
											</div><a href="#" data-prevent-default="true"><span>ดูการกำหนดราคาและสรุปการเดินทาง</span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<input type="hidden" name="device_data" id="device_data" value="{&quot;device_session_id&quot;:&quot;8abc69e50490f5834c283ea3640b7087&quot;,&quot;fraud_merchant_id&quot;:&quot;600000&quot;,&quot;correlation_id&quot;:&quot;3603f1e4cb70838473333f5116495726&quot;}">
				</form>
			</div>

		</main>

		<div id="signup-modal" class="modal fade" role="dialog" aria-describedby="signup-modal-content"  tabindex="-1">
			<div class="">
				<div class="">
					<div class="modal-content signup signup-login-form__container" id="signup-modal-content">

						<div class="modal-header panel-header">
							ลงทะเบียน
							<a href="#" class="modal-close" data-dismiss="modal" data-behavior="modal-close"></a>
						</div>

						<div class="alert alert-with-icon alert-error alert-header panel-header hidden-element notice" id="notice">
							<i class="icon alert-icon icon-alert-alt"></i>

						</div>

						<div class="panel-padding panel-body signup-login-form__extra-panel-body first">

							<div class="social-buttons">

								<a href="/oauth_connect?from=facebook_signup&amp;redirect_url=%2Frooms%2Fnew%3Ffrom_sh%3D1&amp;service=facebook" class="btn icon-btn create-using-facebook btn-block signup-login-form__btn-xl space-1 btn-large btn-facebook js-facebook-auth"> <span class="icon-container"> <i class="icon icon-facebook"></i> </span> <span class="text-container"> ลงทะเบียนโดยใช้ Facebook </span> </a>

							</div>

							<div class="text-center social-links hide">
								สมัครด้วย <a href="#" class="js-facebook-auth">Facebook</a>
							</div>

							<div class="signup-or-separator">
								<span class="h6 signup-or-separator--text">หรือ</span>
								<hr>
							</div>

							<!--[if (gt IE 8)|!(IE)]><!-->
							<div class="text-center">
								<a href="/signup_login?sm=2" class="create-using-email btn-block signup-login-form__btn-xl space-2 btn btn-soft btn-block signup-login-form__btn-xl btn-large large icon-btn" id="create_using_email_button"> <i class="icon icon-envelope"></i> ลงทะเบียนโดยใช้อีเมล </a>
							</div>
							<!--<![endif]-->
							<!--[if (lte IE 8) & IE]>
							<div class="text-center">
							<a href="/signup_login?sm=2" class="create-using-email btn-block signup-login-form__btn-xl space-2 btn btn-primary btn-block signup-login-form__btn-xl btn-large large icon-btn" id="create_using_email_button">
							<i class="icon icon-envelope"></i>
							ลงทะเบียนโดยใช้อีเมล
							</a>  </div>
							<![endif]-->

						</div>

						<div class="panel-body js-login-footer signup-login-form__extra-panel-body">
							<div class="clearfix">
								<span class="signup-login-form__switch-copy"> มีบัญชีผู้ใช้ rentcnd อยู่แล้วใช่ไหม </span>
								<a href="/login?" class="modal-link link-to-login-in-signup btn btn-default signup-login-form__btn-soft-border signup-login-form__btn-font-normal signup-login-form__switch-button" data-modal-href="/login_modal?" data-modal-type="login"> เข้าสู่ระบบ </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php
		include 'include/footer.php';
		?>
	</body>
</html>
