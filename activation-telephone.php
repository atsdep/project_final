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

			<div class="page-container-full bg-white" data-react-checksum="955207149">
				<div class="account-activation-standalone space-4 space-top-4">
					<span>
						<div class="activation-step-panel" tabindex="-1">
							<div class="activation-step-panel__header">
								<div class="space-3">
									<div class="text-center">
										<div class="activation-step-marker">
											<i class="dot dot-success"></i>
										</div>
										<div class="activation-step-marker">
											<i class="dot dot-light-gray"></i>
										</div>
										<div class="activation-step-marker">
											<i class="dot dot-success"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="activation-step-panel__wrapper">
								<div class="activation-step-panel__body">
									<div class="activation-phone-verification-form">
										<h3 class="space-1"><span>ยืนยันหมายเลขโทรศัพท์</span></h3>
										<div class="text-lead space-4">
											<span>เพื่อให้เจ้าของที่พักของคุณสามารถติดต่อคุณช่วงการเดินทางของคุณและเพื่อให้ Airbnb รู้ว่าจะติดต่อคุณได้อย่างไร</span>
										</div>
										<div class="space-4 space-top-4">
											<div class="activation-icon-container">
												<div class="activation-icon-wrapper">
													<i class="icon icon-phone-android icon-size-3 icon-gray"></i>
												</div>
											</div>
										</div>
										<div class="col-sm-10 col-center">
											<div>
												<div class="input-addon space-2 phone-verification__input-addon">
													<span class="input-prefix phone-verification__input-prefix">+1</span>
													<input id="activation_phone_number_0" type="tel" class="input-stem phone-verification__input-stem" placeholder="" inputmode="numeric" value="">
													<label class="screen-reader-only" for="activation_phone_number_0"><span>เบอร์โทร</span></label>
												</div>
												<div class="space-2">
													<span class="text-gray text-low-importance"><span>ไม่ใช่ใน สหรัฐอเมริกา ใช่ไหม</span><span> </span>
														<div class="change-country-link">
															<span><span><a data-prevent-default="true"><span>เปลี่ยนประเทศ</span></a></span></span>
															<select class="change-country-select">
																<option value="CG">คองโก</option><option value="CD">สาธารณรัฐประชาธิปไตยคองโก</option><option value="MK">มาซิโดเนีย</option><option value="GR">กรีซ</option><option value="GL">กรีนแลนด์</option><option value="GU">กวม</option><option value="GP">กวาเดอลูป</option><option value="KH">กัมพูชา</option><option value="GT">กัวเตมาลา</option><option value="QA">กาตาร์</option><option value="GH">กานา</option><option value="GA">กาบอง</option><option value="GY">กายอานา</option><option value="GN">กินี</option><option value="GW">กินี-บิสเซา</option><option value="GD">เกรเนดา</option><option value="KR">เกาหลีใต้</option><option value="CX">เกาะคริสต์มาส</option><option value="GS">เกาะเซาท์จอร์เจียและหมู่เกาะเซาท์แซนด์วิช</option><option value="NF">เกาะนอร์ฟอล์ก</option><option value="IM">เกาะแมน</option><option value="GG">เกิร์นซีย์</option><option value="GM">แกมเบีย</option><option value="KM">คอโมโรส</option><option value="CR">คอสตาริกา</option><option value="KZ">คาซัคสถาน</option><option value="KI">คิริบาส</option><option value="KG">คีร์กีซสถาน</option><option value="CW">คูราเซา</option><option value="KW">คูเวต</option><option value="KE">เคนยา</option><option value="CV">เคปเวิร์ด</option><option value="CA">แคนาดา</option><option value="CM">แคเมอรูน</option><option value="HR">โครเอเชีย</option><option value="CO">โคลอมเบีย</option><option value="GE">จอร์เจีย</option><option value="JO">จอร์แดน</option><option value="JM">จาเมกา</option><option value="DJ">จิบูตี</option><option value="CN">จีน</option><option value="JE">เจอร์ซีย์</option><option value="TD">ชาด</option><option value="CL">ชิลี</option><option value="SM">ซานมารีโน</option><option value="WS">ซามัว</option><option value="SA">ซาอุดีอาระเบีย</option><option value="EH">ซาฮาราตะวันตก</option><option value="ZW">ซิมบับเว</option><option value="SS">ซูดานใต้</option><option value="SR">ซูรินาเม</option><option value="SC">เซเชลส์</option><option value="KN">เซนต์คิตส์และเนวิส</option><option value="BL">เซนต์บาร์เธเลมี</option><option value="MF">เซนต์มาติน</option><option value="SX">เซนต์มาร์ติน</option><option value="LC">เซนต์ลูเซีย</option><option value="VC">เซนต์วินเซนต์และเกรนาดีนส์</option><option value="SH">เซนต์เฮเลนา</option><option value="SN">เซเนกัล</option><option value="RS">เซอร์เบีย</option><option value="ST">เซาตูเมและปรินซิปี</option><option value="SL">เซียร์ราลีโอน</option><option value="PM">แซงปีแยร์และมีเกอลง</option><option value="ZM">แซมเบีย</option><option value="SO">โซมาเลีย</option><option value="CY">ไซปรัส</option><option value="JP">ญี่ปุ่น</option><option value="DK">เดนมาร์ก</option><option value="DM">โดมินิกา</option><option value="TT">ตรินิแดดและโตเบโก</option><option value="TO">ตองกา</option><option value="TL">ติมอร์ตะวันออก</option><option value="TR">ตุรกี</option><option value="TN">ตูนิเซีย</option><option value="TV">ตูวาลู</option><option value="TM">เติร์กเมนิสถาน</option><option value="TK">โตเกเลา</option><option value="TG">โตโก</option><option value="TW">ไต้หวัน</option><option value="TJ">ทาจิกิสถาน</option><option value="TZ">แทนซาเนีย</option><option value="TH">ไทย</option><option value="VA">นครรัฐวาติกัน</option><option value="NO">นอร์เวย์</option><option value="NA">นามิเบีย</option><option value="NR">นาอูรู</option><option value="NI">นิการากัว</option><option value="NC">นิวแคลิโดเนีย</option><option value="NZ">นิวซีแลนด์</option><option value="NU">นีอูเอ</option><option value="NL">เนเธอร์แลนด์</option><option value="BQ">เนเธอร์แลนด์แคริบเบียน</option><option value="NP">เนปาล</option><option value="NG">ไนจีเรีย</option><option value="NE">ไนเจอร์</option><option value="BR">บราซิล</option><option value="IO">บริติชอินเดียนโอเชียนเทร์ริทอรี</option><option value="BN">บรูไน</option><option value="BW">บอตสวานา</option><option value="BA">บอสเนียและเฮอร์เซโกวีนา</option><option value="BD">บังกลาเทศ</option><option value="BG">บัลแกเรีย</option><option value="BB">บาร์เบโดส</option><option value="BH">บาห์เรน</option><option value="BS">บาฮามาส</option><option value="BI">บุรุนดี</option><option value="BF">บูร์กินาฟาโซ</option><option value="BJ">เบนิน</option><option value="BE">เบลเยียม</option><option value="BY">เบลารุส</option><option value="BZ">เบลีซ</option><option value="BM">เบอร์มิวดา</option><option value="BO">โบลิเวีย</option><option value="PK">ปากีสถาน</option><option value="PA">ปานามา</option><option value="PG">ปาปัวนิวกินี</option><option value="PY">ปารากวัย</option><option value="PS">ปาเลสไตน์</option><option value="PW">ปาเลา</option><option value="PE">เปรู</option><option value="PR">เปอร์โตริโก</option><option value="PT">โปรตุเกส</option><option value="PL">โปแลนด์</option><option value="FR">ฝรั่งเศส</option><option value="FJ">ฟิจิ</option><option value="FI">ฟินแลนด์</option><option value="PH">ฟิลิปปินส์</option><option value="GF">เฟรนช์เกียนา</option><option value="PF">เฟรนช์โปลินีเซีย</option><option value="BT">ภูฏาน</option><option value="MN">มองโกเลีย</option><option value="MS">มอนต์เซอร์รัต</option><option value="ME">มอนเตเนโกร</option><option value="MU">มอริเชียส</option><option value="MR">มอริเตเนีย</option><option value="MD">มอลโดวา</option><option value="MT">มอลตา</option><option value="MV">มัลดีฟส์</option><option value="MO">มาเก๊า</option><option value="MG">มาดากัสการ์</option><option value="YT">มายอต</option><option value="MQ">มาร์ตินีก</option><option value="MW">มาลาวี</option><option value="ML">มาลี</option><option value="MY">มาเลเซีย</option><option value="MX">เม็กซิโก</option><option value="MM">เมียนม่าร์ [พม่า]</option><option value="MZ">โมซัมบิก</option><option value="MC">โมนาโก</option><option value="MA">โมร็อกโก</option><option value="FM">ไมโครนีเซีย</option><option value="GI">ยิบรอลตาร์</option><option value="UG">ยูกันดา</option><option value="UA">ยูเครน</option><option value="YE">เยเมน</option><option value="DE">เยอรมนี</option><option value="RW">รวันดา</option><option value="RU">รัสเซีย</option><option value="RE">เรอูนียง</option><option value="RO">โรมาเนีย</option><option value="LU">ลักเซมเบิร์ก</option><option value="LV">ลัตเวีย</option><option value="LA">ลาว</option><option value="LI">ลิกเตนสไตน์</option><option value="LT">ลิทัวเนีย</option><option value="LY">ลิเบีย</option><option value="LS">เลโซโท</option><option value="LB">เลบานอน</option><option value="LR">ไลบีเรีย</option><option value="VU">วานูอาตู</option><option value="WF">วาลลิสและฟุตูนา</option><option value="VE">เวเนซุเอลา</option><option value="VN">เวียดนาม</option><option value="LK">ศรีลังกา</option><option value="ES">สเปน</option><option value="SJ">สฟาลบาร์และยานไมเอน</option><option value="SK">สโลวะเกีย</option><option value="SI">สโลวีเนีย</option><option value="SZ">สวาซิแลนด์</option><option value="CH">สวิตเซอร์แลนด์</option><option value="SE">สวีเดน</option><option selected="" value="US">สหรัฐอเมริกา</option><option value="AE">สหรัฐอาหรับเอมิเรตส์</option><option value="GB">สหราชอาณาจักร</option><option value="CZ">สาธารณรัฐเช็ก</option><option value="DO">สาธารณรัฐโดมินิกัน</option><option value="CF">สาธารณรัฐแอฟริกากลาง</option><option value="SG">สิงคโปร์</option><option value="CK">หมู่เกาะคุก</option><option value="KY">หมู่เกาะเคย์แมน</option><option value="CC">หมู่เกาะโคโคส</option><option value="SB">หมู่เกาะโซโลมอน</option><option value="TC">หมู่เกาะเติกส์และหมู่เกาะเคคอส</option><option value="MP">หมู่เกาะนอร์เทิร์นมาเรียนา</option><option value="VG">หมู่เกาะบริติชเวอร์จิน</option><option value="PN">หมู่เกาะพิตแคร์น</option><option value="FK">หมู่เกาะฟอล์กแลนด์ [อิสลาส มาลวินาส]</option><option value="FO">หมู่เกาะแฟโร</option><option value="MH">หมู่เกาะมาร์แชลล์</option><option value="VI">หมู่เกาะยูเอสเวอร์จิน</option><option value="AX">หมู่เกาะโอลันด์</option><option value="AS">อเมริกันซามัว</option><option value="AU">ออสเตรเลีย</option><option value="AT">ออสเตรีย</option><option value="AD">อันดอร์รา</option><option value="AF">อัฟกานิสถาน</option><option value="AZ">อาเซอร์ไบจาน</option><option value="AR">อาร์เจนตินา</option><option value="AM">อาร์เมเนีย</option><option value="AW">อารูบา</option><option value="GQ">อิเควทอเรียลกินี</option><option value="IT">อิตาลี</option><option value="IN">อินเดีย</option><option value="ID">อินโดนีเซีย</option><option value="IQ">อิรัก</option><option value="IL">อิสราเอล</option><option value="EG">อียิปต์</option><option value="UZ">อุซเบกิสถาน</option><option value="UY">อุรุกวัย</option><option value="EC">เอกวาดอร์</option><option value="ET">เอธิโอเปีย</option><option value="ER">เอริเทรีย</option><option value="SV">เอลซัลวาดอร์</option><option value="EE">เอสโตเนีย</option><option value="AI">แองกวิลลา</option><option value="AO">แองโกลา</option><option value="AG">แอนติกาและบาร์บูดา</option><option value="ZA">แอฟริกาใต้</option><option value="DZ">แอลจีเรีย</option><option value="AL">แอลเบเนีย</option><option value="OM">โอมาน</option><option value="IS">ไอซ์แลนด์</option><option value="IE">ไอร์แลนด์</option><option value="CI">ไอวอรี่โคสต์</option><option value="HK">ฮ่องกง</option><option value="HN">ฮอนดูรัส</option><option value="HU">ฮังการี</option><option value="HT">เฮติ</option>
															</select>
														</div></span>
												</div>
											</div>
											<div class="space-top-1 space-1">
												<div class="verification-flow__call-to-action-container">
													<div class="verification-flow__call-to-action">
														<button type="button" class="btn btn-primary btn-large">
															<span>ยืนยันหมายเลขโทรศัพท์</span>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div></span>
				</div>
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
