<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_SESSION['member_id'])) {
	header("location:index.php?login=" . urlencode($_SERVER['REQUEST_URI']) . "&error=1");
	exit(0);
}else if ($_GET['mid'] != $_SESSION['member_id']){
	header("location:index.php?");
}else {
	require ("/controllers/newpage_controller.php");
	require ("/controllers/verifycheck_controller.php");
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>แก้ไข หัวข้อประกาศ สำหรับรถเช่า Rentcnd ของคุณ</title>
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
							</div><div class="left-backdrop"></div><div class="right-backdrop hide-sm bg-white right-backdrop--with-bg"></div>
							<div class="list-your-space__content">
								<div class="centered-content clearfix">
									<div class="main-panel-container no-padding-h bg-white main-panel-outer-half clearfix" tabindex="-1">

										<div class="main-panel main-panel-padding main-panel-progress pull-right main-panel-inner-half space-sm-8">
											<div class="panel--no-border panel-title">
												<h3 class="no-margin-padding">เพิ่มเบอร์มือถือของคุณ</h3>
											</div>

											<div class="col-md-3 no-margin-padding">
												<div class="lys-icon-container text-center">
													<div class="lys-icon-group">
														<div class="phone-icon__phone"></div><span></span>
													</div>
												</div>
											</div>
											<div class="col-md-9 space-top-2 no-padding">
												<noscript></noscript>
												<div class="">
													<div class="phone-verification-form">
														<div class="row">
															<div class="col-md-8 phone-input">
																<div class="input-addon">
																	<span class="input-prefix input-jumbo">+66</span>
																	<input type="tel" class="input-stem inspectletIgnore input-jumbo" id="phone_number" placeholder="" inputmode="numeric" value="">
																	<span class="input-suffix btn btn-primary btn-jumbo invisible"><span>ตรวจสอบความถูกต้อง</span></span>
																</div>
															</div>
														</div>
														<div class="row space-top-1">
															<div class="col-12">
																<span class="text-gray text-low-importance"><span>ไม่ใช่ใน ไทย ใช่ไหม</span><span> </span>
																	<div class="change-country-link">
																		<span><span><a data-prevent-default="true"><span>เปลี่ยนประเทศ</span></a></span></span>
																		<select class="change-country-select">
																			<option value="CG">คองโก</option><option value="CD">สาธารณรัฐประชาธิปไตยคองโก</option><option value="MK">มาซิโดเนีย</option><option value="GR">กรีซ</option><option value="GL">กรีนแลนด์</option><option value="GU">กวม</option><option value="GP">กวาเดอลูป</option><option value="KH">กัมพูชา</option><option value="GT">กัวเตมาลา</option><option value="QA">กาตาร์</option><option value="GH">กานา</option><option value="GA">กาบอง</option><option value="GY">กายอานา</option><option value="GN">กินี</option><option value="GW">กินี-บิสเซา</option><option value="GD">เกรเนดา</option><option value="KR">เกาหลีใต้</option><option value="CX">เกาะคริสต์มาส</option><option value="GS">เกาะเซาท์จอร์เจียและหมู่เกาะเซาท์แซนด์วิช</option><option value="NF">เกาะนอร์ฟอล์ก</option><option value="IM">เกาะแมน</option><option value="GG">เกิร์นซีย์</option><option value="GM">แกมเบีย</option><option value="KM">คอโมโรส</option><option value="CR">คอสตาริกา</option><option value="KZ">คาซัคสถาน</option><option value="KI">คิริบาส</option><option value="KG">คีร์กีซสถาน</option><option value="CW">คูราเซา</option><option value="KW">คูเวต</option><option value="KE">เคนยา</option><option value="CV">เคปเวิร์ด</option><option value="CA">แคนาดา</option><option value="CM">แคเมอรูน</option><option value="HR">โครเอเชีย</option><option value="CO">โคลอมเบีย</option><option value="GE">จอร์เจีย</option><option value="JO">จอร์แดน</option><option value="JM">จาเมกา</option><option value="DJ">จิบูตี</option><option value="CN">จีน</option><option value="JE">เจอร์ซีย์</option><option value="TD">ชาด</option><option value="CL">ชิลี</option><option value="SM">ซานมารีโน</option><option value="WS">ซามัว</option><option value="SA">ซาอุดีอาระเบีย</option><option value="EH">ซาฮาราตะวันตก</option><option value="ZW">ซิมบับเว</option><option value="SS">ซูดานใต้</option><option value="SR">ซูรินาเม</option><option value="SC">เซเชลส์</option><option value="KN">เซนต์คิตส์และเนวิส</option><option value="BL">เซนต์บาร์เธเลมี</option><option value="MF">เซนต์มาติน</option><option value="SX">เซนต์มาร์ติน</option><option value="LC">เซนต์ลูเซีย</option><option value="VC">เซนต์วินเซนต์และเกรนาดีนส์</option><option value="SH">เซนต์เฮเลนา</option><option value="SN">เซเนกัล</option><option value="RS">เซอร์เบีย</option><option value="ST">เซาตูเมและปรินซิปี</option><option value="SL">เซียร์ราลีโอน</option><option value="PM">แซงปีแยร์และมีเกอลง</option><option value="ZM">แซมเบีย</option><option value="SO">โซมาเลีย</option><option value="CY">ไซปรัส</option><option value="JP">ญี่ปุ่น</option><option value="DK">เดนมาร์ก</option><option value="DM">โดมินิกา</option><option value="TT">ตรินิแดดและโตเบโก</option><option value="TO">ตองกา</option><option value="TL">ติมอร์ตะวันออก</option><option value="TR">ตุรกี</option><option value="TN">ตูนิเซีย</option><option value="TV">ตูวาลู</option><option value="TM">เติร์กเมนิสถาน</option><option value="TK">โตเกเลา</option><option value="TG">โตโก</option><option value="TW">ไต้หวัน</option><option value="TJ">ทาจิกิสถาน</option><option value="TZ">แทนซาเนีย</option><option value="TH">ไทย</option><option value="VA">นครรัฐวาติกัน</option><option value="NO">นอร์เวย์</option><option value="NA">นามิเบีย</option><option value="NR">นาอูรู</option><option value="NI">นิการากัว</option><option value="NC">นิวแคลิโดเนีย</option><option value="NZ">นิวซีแลนด์</option><option value="NU">นีอูเอ</option><option value="NL">เนเธอร์แลนด์</option><option value="BQ">เนเธอร์แลนด์แคริบเบียน</option><option value="NP">เนปาล</option><option value="NG">ไนจีเรีย</option><option value="NE">ไนเจอร์</option><option value="BR">บราซิล</option><option value="IO">บริติชอินเดียนโอเชียนเทร์ริทอรี</option><option value="BN">บรูไน</option><option value="BW">บอตสวานา</option><option value="BA">บอสเนียและเฮอร์เซโกวีนา</option><option value="BD">บังกลาเทศ</option><option value="BG">บัลแกเรีย</option><option value="BB">บาร์เบโดส</option><option value="BH">บาห์เรน</option><option value="BS">บาฮามาส</option><option value="BI">บุรุนดี</option><option value="BF">บูร์กินาฟาโซ</option><option value="BJ">เบนิน</option><option value="BE">เบลเยียม</option><option value="BY">เบลารุส</option><option value="BZ">เบลีซ</option><option value="BM">เบอร์มิวดา</option><option value="BO">โบลิเวีย</option><option value="PK">ปากีสถาน</option><option value="PA">ปานามา</option><option value="PG">ปาปัวนิวกินี</option><option value="PY">ปารากวัย</option><option value="PS">ปาเลสไตน์</option><option value="PW">ปาเลา</option><option value="PE">เปรู</option><option value="PR">เปอร์โตริโก</option><option value="PT">โปรตุเกส</option><option value="PL">โปแลนด์</option><option value="FR">ฝรั่งเศส</option><option value="FJ">ฟิจิ</option><option value="FI">ฟินแลนด์</option><option value="PH">ฟิลิปปินส์</option><option value="GF">เฟรนช์เกียนา</option><option value="PF">เฟรนช์โปลินีเซีย</option><option value="BT">ภูฏาน</option><option value="MN">มองโกเลีย</option><option value="MS">มอนต์เซอร์รัต</option><option value="ME">มอนเตเนโกร</option><option value="MU">มอริเชียส</option><option value="MR">มอริเตเนีย</option><option value="MD">มอลโดวา</option><option value="MT">มอลตา</option><option value="MV">มัลดีฟส์</option><option value="MO">มาเก๊า</option><option value="MG">มาดากัสการ์</option><option value="YT">มายอต</option><option value="MQ">มาร์ตินีก</option><option value="MW">มาลาวี</option><option value="ML">มาลี</option><option value="MY">มาเลเซีย</option><option value="MX">เม็กซิโก</option><option value="MM">เมียนม่าร์ [พม่า]</option><option value="MZ">โมซัมบิก</option><option value="MC">โมนาโก</option><option value="MA">โมร็อกโก</option><option value="FM">ไมโครนีเซีย</option><option value="GI">ยิบรอลตาร์</option><option value="UG">ยูกันดา</option><option value="UA">ยูเครน</option><option value="YE">เยเมน</option><option value="DE">เยอรมนี</option><option value="RW">รวันดา</option><option value="RU">รัสเซีย</option><option value="RE">เรอูนียง</option><option value="RO">โรมาเนีย</option><option value="LU">ลักเซมเบิร์ก</option><option value="LV">ลัตเวีย</option><option value="LA">ลาว</option><option value="LI">ลิกเตนสไตน์</option><option value="LT">ลิทัวเนีย</option><option value="LY">ลิเบีย</option><option value="LS">เลโซโท</option><option value="LB">เลบานอน</option><option value="LR">ไลบีเรีย</option><option value="VU">วานูอาตู</option><option value="WF">วาลลิสและฟุตูนา</option><option value="VE">เวเนซุเอลา</option><option value="VN">เวียดนาม</option><option value="LK">ศรีลังกา</option><option value="ES">สเปน</option><option value="SJ">สฟาลบาร์และยานไมเอน</option><option value="SK">สโลวะเกีย</option><option value="SI">สโลวีเนีย</option><option value="SZ">สวาซิแลนด์</option><option value="CH">สวิตเซอร์แลนด์</option><option value="SE">สวีเดน</option><option selected="" value="US">สหรัฐอเมริกา</option><option value="AE">สหรัฐอาหรับเอมิเรตส์</option><option value="GB">สหราชอาณาจักร</option><option value="CZ">สาธารณรัฐเช็ก</option><option value="DO">สาธารณรัฐโดมินิกัน</option><option value="CF">สาธารณรัฐแอฟริกากลาง</option><option value="SG">สิงคโปร์</option><option value="CK">หมู่เกาะคุก</option><option value="KY">หมู่เกาะเคย์แมน</option><option value="CC">หมู่เกาะโคโคส</option><option value="SB">หมู่เกาะโซโลมอน</option><option value="TC">หมู่เกาะเติกส์และหมู่เกาะเคคอส</option><option value="MP">หมู่เกาะนอร์เทิร์นมาเรียนา</option><option value="VG">หมู่เกาะบริติชเวอร์จิน</option><option value="PN">หมู่เกาะพิตแคร์น</option><option value="FK">หมู่เกาะฟอล์กแลนด์ [อิสลาส มาลวินาส]</option><option value="FO">หมู่เกาะแฟโร</option><option value="MH">หมู่เกาะมาร์แชลล์</option><option value="VI">หมู่เกาะยูเอสเวอร์จิน</option><option value="AX">หมู่เกาะโอลันด์</option><option value="AS">อเมริกันซามัว</option><option value="AU">ออสเตรเลีย</option><option value="AT">ออสเตรีย</option><option value="AD">อันดอร์รา</option><option value="AF">อัฟกานิสถาน</option><option value="AZ">อาเซอร์ไบจาน</option><option value="AR">อาร์เจนตินา</option><option value="AM">อาร์เมเนีย</option><option value="AW">อารูบา</option><option value="GQ">อิเควทอเรียลกินี</option><option value="IT">อิตาลี</option><option value="IN">อินเดีย</option><option value="ID">อินโดนีเซีย</option><option value="IQ">อิรัก</option><option value="IL">อิสราเอล</option><option value="EG">อียิปต์</option><option value="UZ">อุซเบกิสถาน</option><option value="UY">อุรุกวัย</option><option value="EC">เอกวาดอร์</option><option value="ET">เอธิโอเปีย</option><option value="ER">เอริเทรีย</option><option value="SV">เอลซัลวาดอร์</option><option value="EE">เอสโตเนีย</option><option value="AI">แองกวิลลา</option><option value="AO">แองโกลา</option><option value="AG">แอนติกาและบาร์บูดา</option><option value="ZA">แอฟริกาใต้</option><option value="DZ">แอลจีเรีย</option><option value="AL">แอลเบเนีย</option><option value="OM">โอมาน</option><option value="IS">ไอซ์แลนด์</option><option value="IE">ไอร์แลนด์</option><option value="CI">ไอวอรี่โคสต์</option><option value="HK">ฮ่องกง</option><option value="HN">ฮอนดูรัส</option><option value="HU">ฮังการี</option><option value="HT">เฮติ</option>
																		</select>
																	</div></span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-9 space-top-2 no-padding">
												<noscript></noscript>
												<div class="">
													<div class="phone-verification-form">
														<div class="row">
															<div class="col-md-8 phone-input">
																<div class="input-addon">
																	<span class="input-prefix input-jumbo">+66</span>
																	<input type="tel" class="input-stem inspectletIgnore input-jumbo" id="phone_number" placeholder="" inputmode="numeric" value="">
																	<span class="input-suffix btn btn-primary btn-jumbo"><span>ตรวจสอบความถูกต้อง</span></span>
																</div>
															</div>
														</div>
														<div class="row space-top-1">
															<div class="col-12">
																<span class="text-gray text-low-importance"><span>ไม่ใช่ใน ไทย ใช่ไหม</span><span> </span>
																	<div class="change-country-link">
																		<span><span><a data-prevent-default="true"><span>เปลี่ยนประเทศ</span></a></span></span>
																		<select class="change-country-select">
																			<option value="CG">คองโก</option><option value="CD">สาธารณรัฐประชาธิปไตยคองโก</option><option value="MK">มาซิโดเนีย</option><option value="GR">กรีซ</option><option value="GL">กรีนแลนด์</option><option value="GU">กวม</option><option value="GP">กวาเดอลูป</option><option value="KH">กัมพูชา</option><option value="GT">กัวเตมาลา</option><option value="QA">กาตาร์</option><option value="GH">กานา</option><option value="GA">กาบอง</option><option value="GY">กายอานา</option><option value="GN">กินี</option><option value="GW">กินี-บิสเซา</option><option value="GD">เกรเนดา</option><option value="KR">เกาหลีใต้</option><option value="CX">เกาะคริสต์มาส</option><option value="GS">เกาะเซาท์จอร์เจียและหมู่เกาะเซาท์แซนด์วิช</option><option value="NF">เกาะนอร์ฟอล์ก</option><option value="IM">เกาะแมน</option><option value="GG">เกิร์นซีย์</option><option value="GM">แกมเบีย</option><option value="KM">คอโมโรส</option><option value="CR">คอสตาริกา</option><option value="KZ">คาซัคสถาน</option><option value="KI">คิริบาส</option><option value="KG">คีร์กีซสถาน</option><option value="CW">คูราเซา</option><option value="KW">คูเวต</option><option value="KE">เคนยา</option><option value="CV">เคปเวิร์ด</option><option value="CA">แคนาดา</option><option value="CM">แคเมอรูน</option><option value="HR">โครเอเชีย</option><option value="CO">โคลอมเบีย</option><option value="GE">จอร์เจีย</option><option value="JO">จอร์แดน</option><option value="JM">จาเมกา</option><option value="DJ">จิบูตี</option><option value="CN">จีน</option><option value="JE">เจอร์ซีย์</option><option value="TD">ชาด</option><option value="CL">ชิลี</option><option value="SM">ซานมารีโน</option><option value="WS">ซามัว</option><option value="SA">ซาอุดีอาระเบีย</option><option value="EH">ซาฮาราตะวันตก</option><option value="ZW">ซิมบับเว</option><option value="SS">ซูดานใต้</option><option value="SR">ซูรินาเม</option><option value="SC">เซเชลส์</option><option value="KN">เซนต์คิตส์และเนวิส</option><option value="BL">เซนต์บาร์เธเลมี</option><option value="MF">เซนต์มาติน</option><option value="SX">เซนต์มาร์ติน</option><option value="LC">เซนต์ลูเซีย</option><option value="VC">เซนต์วินเซนต์และเกรนาดีนส์</option><option value="SH">เซนต์เฮเลนา</option><option value="SN">เซเนกัล</option><option value="RS">เซอร์เบีย</option><option value="ST">เซาตูเมและปรินซิปี</option><option value="SL">เซียร์ราลีโอน</option><option value="PM">แซงปีแยร์และมีเกอลง</option><option value="ZM">แซมเบีย</option><option value="SO">โซมาเลีย</option><option value="CY">ไซปรัส</option><option value="JP">ญี่ปุ่น</option><option value="DK">เดนมาร์ก</option><option value="DM">โดมินิกา</option><option value="TT">ตรินิแดดและโตเบโก</option><option value="TO">ตองกา</option><option value="TL">ติมอร์ตะวันออก</option><option value="TR">ตุรกี</option><option value="TN">ตูนิเซีย</option><option value="TV">ตูวาลู</option><option value="TM">เติร์กเมนิสถาน</option><option value="TK">โตเกเลา</option><option value="TG">โตโก</option><option value="TW">ไต้หวัน</option><option value="TJ">ทาจิกิสถาน</option><option value="TZ">แทนซาเนีย</option><option value="TH">ไทย</option><option value="VA">นครรัฐวาติกัน</option><option value="NO">นอร์เวย์</option><option value="NA">นามิเบีย</option><option value="NR">นาอูรู</option><option value="NI">นิการากัว</option><option value="NC">นิวแคลิโดเนีย</option><option value="NZ">นิวซีแลนด์</option><option value="NU">นีอูเอ</option><option value="NL">เนเธอร์แลนด์</option><option value="BQ">เนเธอร์แลนด์แคริบเบียน</option><option value="NP">เนปาล</option><option value="NG">ไนจีเรีย</option><option value="NE">ไนเจอร์</option><option value="BR">บราซิล</option><option value="IO">บริติชอินเดียนโอเชียนเทร์ริทอรี</option><option value="BN">บรูไน</option><option value="BW">บอตสวานา</option><option value="BA">บอสเนียและเฮอร์เซโกวีนา</option><option value="BD">บังกลาเทศ</option><option value="BG">บัลแกเรีย</option><option value="BB">บาร์เบโดส</option><option value="BH">บาห์เรน</option><option value="BS">บาฮามาส</option><option value="BI">บุรุนดี</option><option value="BF">บูร์กินาฟาโซ</option><option value="BJ">เบนิน</option><option value="BE">เบลเยียม</option><option value="BY">เบลารุส</option><option value="BZ">เบลีซ</option><option value="BM">เบอร์มิวดา</option><option value="BO">โบลิเวีย</option><option value="PK">ปากีสถาน</option><option value="PA">ปานามา</option><option value="PG">ปาปัวนิวกินี</option><option value="PY">ปารากวัย</option><option value="PS">ปาเลสไตน์</option><option value="PW">ปาเลา</option><option value="PE">เปรู</option><option value="PR">เปอร์โตริโก</option><option value="PT">โปรตุเกส</option><option value="PL">โปแลนด์</option><option value="FR">ฝรั่งเศส</option><option value="FJ">ฟิจิ</option><option value="FI">ฟินแลนด์</option><option value="PH">ฟิลิปปินส์</option><option value="GF">เฟรนช์เกียนา</option><option value="PF">เฟรนช์โปลินีเซีย</option><option value="BT">ภูฏาน</option><option value="MN">มองโกเลีย</option><option value="MS">มอนต์เซอร์รัต</option><option value="ME">มอนเตเนโกร</option><option value="MU">มอริเชียส</option><option value="MR">มอริเตเนีย</option><option value="MD">มอลโดวา</option><option value="MT">มอลตา</option><option value="MV">มัลดีฟส์</option><option value="MO">มาเก๊า</option><option value="MG">มาดากัสการ์</option><option value="YT">มายอต</option><option value="MQ">มาร์ตินีก</option><option value="MW">มาลาวี</option><option value="ML">มาลี</option><option value="MY">มาเลเซีย</option><option value="MX">เม็กซิโก</option><option value="MM">เมียนม่าร์ [พม่า]</option><option value="MZ">โมซัมบิก</option><option value="MC">โมนาโก</option><option value="MA">โมร็อกโก</option><option value="FM">ไมโครนีเซีย</option><option value="GI">ยิบรอลตาร์</option><option value="UG">ยูกันดา</option><option value="UA">ยูเครน</option><option value="YE">เยเมน</option><option value="DE">เยอรมนี</option><option value="RW">รวันดา</option><option value="RU">รัสเซีย</option><option value="RE">เรอูนียง</option><option value="RO">โรมาเนีย</option><option value="LU">ลักเซมเบิร์ก</option><option value="LV">ลัตเวีย</option><option value="LA">ลาว</option><option value="LI">ลิกเตนสไตน์</option><option value="LT">ลิทัวเนีย</option><option value="LY">ลิเบีย</option><option value="LS">เลโซโท</option><option value="LB">เลบานอน</option><option value="LR">ไลบีเรีย</option><option value="VU">วานูอาตู</option><option value="WF">วาลลิสและฟุตูนา</option><option value="VE">เวเนซุเอลา</option><option value="VN">เวียดนาม</option><option value="LK">ศรีลังกา</option><option value="ES">สเปน</option><option value="SJ">สฟาลบาร์และยานไมเอน</option><option value="SK">สโลวะเกีย</option><option value="SI">สโลวีเนีย</option><option value="SZ">สวาซิแลนด์</option><option value="CH">สวิตเซอร์แลนด์</option><option value="SE">สวีเดน</option><option selected="" value="US">สหรัฐอเมริกา</option><option value="AE">สหรัฐอาหรับเอมิเรตส์</option><option value="GB">สหราชอาณาจักร</option><option value="CZ">สาธารณรัฐเช็ก</option><option value="DO">สาธารณรัฐโดมินิกัน</option><option value="CF">สาธารณรัฐแอฟริกากลาง</option><option value="SG">สิงคโปร์</option><option value="CK">หมู่เกาะคุก</option><option value="KY">หมู่เกาะเคย์แมน</option><option value="CC">หมู่เกาะโคโคส</option><option value="SB">หมู่เกาะโซโลมอน</option><option value="TC">หมู่เกาะเติกส์และหมู่เกาะเคคอส</option><option value="MP">หมู่เกาะนอร์เทิร์นมาเรียนา</option><option value="VG">หมู่เกาะบริติชเวอร์จิน</option><option value="PN">หมู่เกาะพิตแคร์น</option><option value="FK">หมู่เกาะฟอล์กแลนด์ [อิสลาส มาลวินาส]</option><option value="FO">หมู่เกาะแฟโร</option><option value="MH">หมู่เกาะมาร์แชลล์</option><option value="VI">หมู่เกาะยูเอสเวอร์จิน</option><option value="AX">หมู่เกาะโอลันด์</option><option value="AS">อเมริกันซามัว</option><option value="AU">ออสเตรเลีย</option><option value="AT">ออสเตรีย</option><option value="AD">อันดอร์รา</option><option value="AF">อัฟกานิสถาน</option><option value="AZ">อาเซอร์ไบจาน</option><option value="AR">อาร์เจนตินา</option><option value="AM">อาร์เมเนีย</option><option value="AW">อารูบา</option><option value="GQ">อิเควทอเรียลกินี</option><option value="IT">อิตาลี</option><option value="IN">อินเดีย</option><option value="ID">อินโดนีเซีย</option><option value="IQ">อิรัก</option><option value="IL">อิสราเอล</option><option value="EG">อียิปต์</option><option value="UZ">อุซเบกิสถาน</option><option value="UY">อุรุกวัย</option><option value="EC">เอกวาดอร์</option><option value="ET">เอธิโอเปีย</option><option value="ER">เอริเทรีย</option><option value="SV">เอลซัลวาดอร์</option><option value="EE">เอสโตเนีย</option><option value="AI">แองกวิลลา</option><option value="AO">แองโกลา</option><option value="AG">แอนติกาและบาร์บูดา</option><option value="ZA">แอฟริกาใต้</option><option value="DZ">แอลจีเรีย</option><option value="AL">แอลเบเนีย</option><option value="OM">โอมาน</option><option value="IS">ไอซ์แลนด์</option><option value="IE">ไอร์แลนด์</option><option value="CI">ไอวอรี่โคสต์</option><option value="HK">ฮ่องกง</option><option value="HN">ฮอนดูรัส</option><option value="HU">ฮังการี</option><option value="HT">เฮติ</option>
																		</select>
																	</div></span>
															</div>
														</div>

													</div>
												</div>
											</div>
											<div class="col-md-3 no-margin-padding">
												<div class="lys-icon-container text-center">
													<div class="lys-icon-group">
														<span>
															<div class="phone-icon__bubble-group">
																<div class="phone-icon__phone"></div><div class="phone-icon__bubble"></div>
															</div></span>
													</div>
												</div>
											</div>
											<div class="col-md-9 space-top-2 no-padding">
												<noscript></noscript>
												<div class="row" tabindex="-1">
													<div class="col-md-12">
														<p class="">
															<span>ตกลง ตรวจดูโทรศัพท์ของคุณ +66 922 728 921 เพื่อดูข้อความจากเรา กรอกรหัสเป็นตัวเลข 4 หลัก</span>
														</p>
														<div class="">
															<div class="row space-top-3">
																<div class="col-4">
																	<input class="phone-number-verification input-jumbo" type="number" pattern="[0-9]*" id="phone_number_verification" placeholder="####">
																</div>
															</div>
															<div class="space-top-2">
																<small><a href="#" data-prevent-default="true">ลองใหม่</a><span><span>&nbsp;·&nbsp;</span><a href="#" data-prevent-default="true">โทรหาฉันแทน</a></span></small>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-9 space-top-2 no-padding">
												<noscript></noscript>
												<div class="row phone-verification-form" tabindex="-1">
													<div class="col-md-5">
														<div class="input-addon input-addon-jumbo__verified">
															<span class="input-prefix input-jumbo">+66</span>
															<input type="tel" class="phone-verified input-stem inspectletIgnore input-jumbo" id="phone_number" value="922728921" disabled="">
															<div class="input-suffix ok-fill-babu input-jumbo"></div>
														</div>
													</div>
												</div>
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
																	<a class="btn-progress-back link-icon va-container va-container-v pull-left text-gray link--accessibility-outline" href="title.php?id=<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>"> <span class="icon hide-sm"></span><span class="va-middle"><h5 class="text-normal"><span>กลับไป</span></h5> </span> </a>
																	<a id="next-title" class="btn btn-large btn-progress-next btn-large__next-btn pull-right-md btn-soft-dark" href="new.php?id=<?php if(isset($_GET['id'])){ echo $_GET['id'];}?>">
																	<div class="btn-progress-next__text">
																		<span>ถัดไป</span>
																	</div> </a>
																</div>
																<input type="hidden" value="<?php if(isset($_GET['mid'])){ echo $_GET['mid'];}?>" id="member_id">
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
												<div class="help-panel__bulb-img space-2"></div>
												<div class="help-panel__text">
													<div>
														<p>
															<span>ทุกคนบน Airbnb มีรูปโปรไฟล์ รวมผู้เข้าพักของคุณ ดังนั้นคุณจะทราบว่าจะมีใครมาพัก และผู้เข้าพักจะทราบว่าพวกเขากำลังติดต่ออยู่กับคนจริงๆ อยู่ด้วย</span>
														</p>
														<p>
															<span>ตรวจให้แน่ใจว่ารูปแสดงหน้าคุณชัดเจน</span>
														</p>
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
</html>
