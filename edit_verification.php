<?php
session_start();
?>
<!DOCTYPE html>
<html lang="th">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>โปรไฟล์ - Rentcnd</title>
		<meta name="description" content="">
		<meta name="author" content="Adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">

		<link rel="stylesheet" href="css/phonenumber.css">
		<link rel="stylesheet" href="css/editprofile.css">

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

			<div class="subnav hide-print">
				<div class="page-container-responsive">
					<ul class="subnav-list">
						<li>
							<a href="mycar.php" aria-selected="false" class="subnav-item cohosting-ml-tooltip-trigger" id="rooms-item">รถเช่าของคุณ</a>
						</li>
						<li>
							<a href="users.php" aria-selected="true" class="subnav-item" id="user-profile-item">โปรไฟล์</a>
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
					<div class="col-md-3 space-sm-4">
						<div class="sidenav">
							<ul class="sidenav-list">
								<li>
									<a href="users.php" aria-selected="false" class="sidenav-item">แก้ไขข้อมูลส่วนตัว</a>
								</li>
								<li>
									<a href="profile_picture.php" aria-selected="false" class="sidenav-item">รูปโปรไฟล์</a>
								</li>
								<li>
									<a href="edit_verification.php" aria-selected="true" class="sidenav-item">ความไว้ใจและการยืนยันตัวตน</a>
								</li>
								<li>
									<a href="reviews.php" aria-selected="false" class="sidenav-item">ความคิดเห็น</a>
								</li>
								<li></li>
							</ul>
						</div>

						<a href="profile.php" class="btn btn-block space-top-4">ดูโปรไฟล์</a>
					</div>
					<div class="col-md-9">

						<div id="dashboard-content">
							<div class="alert alert-success" style="display:none;">
								เราส่งอีเมล์ยืนยันให้คุณอีกครั้งแล้ว โปรดตรวจสอบกล่องข้อความของคุณ
							</div>
							<div class="alert alert-error" style="display:none;">
								ไม่สามารถส่งอีเมล์ยืนยัน โปรดลองใหม่ภายหลัง
							</div>

							<div class="panel space-3">
								<div class="panel-body">
									<div class="row row-table">
										<div class="col-7 col-middle">
											<p>
												<strong>ยืนยันตัวตนของคุณ</strong>
											</p>
											<p>
												การยืนยันตัวตนของคุณเป็นวิธีที่ง่ายที่สุดที่จะช่วยสร้างความไว้ใจในชุมชน Rentcnd เราจะยืนยันตัวตนของคุณโดยดูว่าข้อมูลจากบัญชีออนไลน์ตรงกับบัตรประจำตัวที่ทางการออกให้หรือไม่ <a href="/help/article/450">เรียนรู้เพิ่มเติม</a>
											</p>
											<p>
												หรือคุณสามารถเลือกเพิ่มการยืนยันที่คุณต้องการเท่านั้นด้านล่าง
											</p>
										</div>
										<div class="col-5 col-middle text-center">
											<div class="verify-button-container">
												<a href="/verify" class="btn btn-large btn-soft-dark">ยืนยันตัวตนของฉัน</a>
											</div>
										</div>
									</div>

								</div>
							</div>

							<div class="panel verified-container">
								<div class="panel-header">
									การยืนยันตัวตนปัจจุบันของคุณ
								</div>
								<div class="panel-body">
									<ul class="list-layout edit-verifications-list">
										<li class="edit-verifications-list-item clearfix email verified">
											<h4>อีเมลแอดเดรส</h4>
											<p class="description">
												คุณยืนยันอีเมล์ของคุณแล้ว <b>adthasid@hotmail.com</b> อีเมล์ที่ได้รับการยืนยันเป็นสิ่งสำคัญที่ช่วยให้เราสามารถสื่อสารกับคุณอย่างปลอดภัย

											</p>
										</li>
									</ul>
								</div>
							</div>

							<div class="panel space-top-4 unverified-container">
								<div class="panel-header">
									เพิ่มการยืนยันตัวตนเพิ่มเติม
								</div>
								<div class="panel-body">
									<ul class="list-layout edit-verifications-list">
										<li class="phone unverified space-4 clearfix">
											<h4> เบอร์โทร </h4>
											<p class="description">
												ช่วยทำให้การสื่อสารกับเบอร์โทรศัพท์ที่ยืนยันแล้วง่ายขึ้น เราจะส่งรหัสไปให้คุณทาง SMS โปรดกรอกรหัสด้านล่างเพื่อยืนยันว่าคุณเป็นบุคคลที่กำลังติดต่อกับเราจริง ๆ
											</p>

											<p class="description">
												เราจะแบ่งปันหมายเลขโทรศัพท์ของคุณกับสมาชิก Rentcnd อีกคนเมื่อคุณมีการจองรถเช่าที่ได้รับการยืนยันแล้วเท่านั้น
											</p>

											<div class="phone-numbers-container">
												<div class="phone-numbers-hide-during-verify">
													<div class="no-phone-numbers">
														<p>
															ไม่ได้ใส่หมายเลขโทรศัพท์
														</p>
													</div>
													<table class="phone-numbers-table" cellspacing="0" cellpadding="0"></table>

													<a class="add link-icon" href="#"> <i class="icon icon-add"></i> <span class="link-icon__text"> เพิ่มหมายเลขโทรศัพท์ </span> </a>
												</div>

												<div class="phone-number-verify-widget">
													<p class="pnaw-verification-error"></p>
													<div class="pnaw-step1">
														<div class="phone-number-input-widget" id="phone-number-input-widget-a58ce656">
															<label for="phone_country">เลือกประเทศ:</label>
															<div class="select">
																<select id="phone_country" name="phone_country">
																	<option value="CG" data-prefix="242">คองโก</option><option value="CD" data-prefix="243">สาธารณรัฐประชาธิปไตยคองโก</option><option value="MK" data-prefix="389">มาซิโดเนีย</option><option value="GR" data-prefix="30">กรีซ</option><option value="GL" data-prefix="299">กรีนแลนด์</option><option value="GU" data-prefix="1">กวม</option><option value="GP" data-prefix="590">กวาเดอลูป</option><option value="KH" data-prefix="855">กัมพูชา</option><option value="GT" data-prefix="502">กัวเตมาลา</option><option value="QA" data-prefix="974">กาตาร์</option><option value="GH" data-prefix="233">กานา</option><option value="GA" data-prefix="241">กาบอง</option><option value="GY" data-prefix="592">กายอานา</option><option value="GN" data-prefix="224">กินี</option><option value="GW" data-prefix="245">กินี-บิสเซา</option><option value="GD" data-prefix="1">เกรเนดา</option><option value="KR" data-prefix="82">เกาหลีใต้</option><option value="CX" data-prefix="61">เกาะคริสต์มาส</option><option value="GS" data-prefix="500">เกาะเซาท์จอร์เจียและหมู่เกาะเซาท์แซนด์วิช</option><option value="NF" data-prefix="672">เกาะนอร์ฟอล์ก</option><option value="IM" data-prefix="44">เกาะแมน</option><option value="GG" data-prefix="44">เกิร์นซีย์</option><option value="GM" data-prefix="220">แกมเบีย</option><option value="KM" data-prefix="269">คอโมโรส</option><option value="CR" data-prefix="506">คอสตาริกา</option><option value="KZ" data-prefix="7">คาซัคสถาน</option><option value="KI" data-prefix="686">คิริบาส</option><option value="CU" data-prefix="53">คิวบา</option><option value="KG" data-prefix="996">คีร์กีซสถาน</option><option value="CW" data-prefix="599">คูราเซา</option><option value="KW" data-prefix="965">คูเวต</option><option value="KE" data-prefix="254">เคนยา</option><option value="CV" data-prefix="238">เคปเวิร์ด</option><option value="CA" data-prefix="1">แคนาดา</option><option value="CM" data-prefix="237">แคเมอรูน</option><option value="HR" data-prefix="385">โครเอเชีย</option><option value="CO" data-prefix="57">โคลอมเบีย</option><option value="GE" data-prefix="995">จอร์เจีย</option><option value="JO" data-prefix="962">จอร์แดน</option><option value="JM" data-prefix="1">จาเมกา</option><option value="DJ" data-prefix="253">จิบูตี</option><option value="CN" data-prefix="86">จีน</option><option value="JE" data-prefix="44">เจอร์ซีย์</option><option value="TD" data-prefix="235">ชาด</option><option value="CL" data-prefix="56">ชิลี</option><option value="SM" data-prefix="378">ซานมารีโน</option><option value="WS" data-prefix="685">ซามัว</option><option value="SA" data-prefix="966">ซาอุดีอาระเบีย</option><option value="EH" data-prefix="212">ซาฮาราตะวันตก</option><option value="ZW" data-prefix="263">ซิมบับเว</option><option value="SS" data-prefix="211">ซูดานใต้</option><option value="SR" data-prefix="597">ซูรินาเม</option><option value="SC" data-prefix="248">เซเชลส์</option><option value="KN" data-prefix="1">เซนต์คิตส์และเนวิส</option><option value="BL" data-prefix="590">เซนต์บาร์เธเลมี</option><option value="MF" data-prefix="590">เซนต์มาติน</option><option value="SX" data-prefix="1">เซนต์มาร์ติน</option><option value="LC" data-prefix="1">เซนต์ลูเซีย</option><option value="VC" data-prefix="1">เซนต์วินเซนต์และเกรนาดีนส์</option><option value="SH" data-prefix="290">เซนต์เฮเลนา</option><option value="SN" data-prefix="221">เซเนกัล</option><option value="RS" data-prefix="381">เซอร์เบีย</option><option value="ST" data-prefix="239">เซาตูเมและปรินซิปี</option><option value="SL" data-prefix="232">เซียร์ราลีโอน</option><option value="PM" data-prefix="508">แซงปีแยร์และมีเกอลง</option><option value="ZM" data-prefix="260">แซมเบีย</option><option value="SO" data-prefix="252">โซมาเลีย</option><option value="CY" data-prefix="357">ไซปรัส</option><option value="JP" data-prefix="81">ญี่ปุ่น</option><option value="DK" data-prefix="45">เดนมาร์ก</option><option value="DM" data-prefix="1">โดมินิกา</option><option value="TT" data-prefix="1">ตรินิแดดและโตเบโก</option><option value="TO" data-prefix="676">ตองกา</option><option value="TL" data-prefix="670">ติมอร์ตะวันออก</option><option value="TR" data-prefix="90">ตุรกี</option><option value="TN" data-prefix="216">ตูนิเซีย</option><option value="TV" data-prefix="688">ตูวาลู</option><option value="TM" data-prefix="993">เติร์กเมนิสถาน</option><option value="TK" data-prefix="690">โตเกเลา</option><option value="TG" data-prefix="228">โตโก</option><option value="TW" data-prefix="886">ไต้หวัน</option><option value="TJ" data-prefix="992">ทาจิกิสถาน</option><option value="TZ" data-prefix="255">แทนซาเนีย</option><option value="TH" data-prefix="66" selected="selected">ไทย</option><option value="VA" data-prefix="379">นครรัฐวาติกัน</option><option value="NO" data-prefix="47">นอร์เวย์</option><option value="NA" data-prefix="264">นามิเบีย</option><option value="NR" data-prefix="674">นาอูรู</option><option value="NI" data-prefix="505">นิการากัว</option><option value="NC" data-prefix="687">นิวแคลิโดเนีย</option><option value="NZ" data-prefix="64">นิวซีแลนด์</option><option value="NU" data-prefix="683">นีอูเอ</option><option value="NL" data-prefix="31">เนเธอร์แลนด์</option><option value="BQ" data-prefix="599">เนเธอร์แลนด์แคริบเบียน</option><option value="NP" data-prefix="977">เนปาล</option><option value="NG" data-prefix="234">ไนจีเรีย</option><option value="NE" data-prefix="227">ไนเจอร์</option><option value="BR" data-prefix="55">บราซิล</option><option value="IO" data-prefix="246">บริติชอินเดียนโอเชียนเทร์ริทอรี</option><option value="BN" data-prefix="673">บรูไน</option><option value="BW" data-prefix="267">บอตสวานา</option><option value="BA" data-prefix="387">บอสเนียและเฮอร์เซโกวีนา</option><option value="BD" data-prefix="880">บังกลาเทศ</option><option value="BG" data-prefix="359">บัลแกเรีย</option><option value="BB" data-prefix="1">บาร์เบโดส</option><option value="BH" data-prefix="973">บาห์เรน</option><option value="BS" data-prefix="1">บาฮามาส</option><option value="BI" data-prefix="257">บุรุนดี</option><option value="BF" data-prefix="226">บูร์กินาฟาโซ</option><option value="BJ" data-prefix="229">เบนิน</option><option value="BE" data-prefix="32">เบลเยียม</option><option value="BY" data-prefix="375">เบลารุส</option><option value="BZ" data-prefix="501">เบลีซ</option><option value="BM" data-prefix="1">เบอร์มิวดา</option><option value="BO" data-prefix="591">โบลิเวีย</option><option value="PK" data-prefix="92">ปากีสถาน</option><option value="PA" data-prefix="507">ปานามา</option><option value="PG" data-prefix="675">ปาปัวนิวกินี</option><option value="PY" data-prefix="595">ปารากวัย</option><option value="PS" data-prefix="970">ปาเลสไตน์</option><option value="PW" data-prefix="680">ปาเลา</option><option value="PE" data-prefix="51">เปรู</option><option value="PR" data-prefix="1">เปอร์โตริโก</option><option value="PT" data-prefix="351">โปรตุเกส</option><option value="PL" data-prefix="48">โปแลนด์</option><option value="FR" data-prefix="33">ฝรั่งเศส</option><option value="FJ" data-prefix="679">ฟิจิ</option><option value="FI" data-prefix="358">ฟินแลนด์</option><option value="PH" data-prefix="63">ฟิลิปปินส์</option><option value="GF" data-prefix="594">เฟรนช์เกียนา</option><option value="PF" data-prefix="689">เฟรนช์โปลินีเซีย</option><option value="BT" data-prefix="975">ภูฏาน</option><option value="MN" data-prefix="976">มองโกเลีย</option><option value="MS" data-prefix="1">มอนต์เซอร์รัต</option><option value="ME" data-prefix="382">มอนเตเนโกร</option><option value="MU" data-prefix="230">มอริเชียส</option><option value="MR" data-prefix="222">มอริเตเนีย</option><option value="MD" data-prefix="373">มอลโดวา</option><option value="MT" data-prefix="356">มอลตา</option><option value="MV" data-prefix="960">มัลดีฟส์</option><option value="MO" data-prefix="853">มาเก๊า</option><option value="MG" data-prefix="261">มาดากัสการ์</option><option value="YT" data-prefix="262">มายอต</option><option value="MQ" data-prefix="596">มาร์ตินีก</option><option value="MW" data-prefix="265">มาลาวี</option><option value="ML" data-prefix="223">มาลี</option><option value="MY" data-prefix="60">มาเลเซีย</option><option value="MX" data-prefix="52">เม็กซิโก</option><option value="MM" data-prefix="95">เมียนม่าร์ [พม่า]</option><option value="MZ" data-prefix="258">โมซัมบิก</option><option value="MC" data-prefix="377">โมนาโก</option><option value="MA" data-prefix="212">โมร็อกโก</option><option value="FM" data-prefix="691">ไมโครนีเซีย</option><option value="GI" data-prefix="350">ยิบรอลตาร์</option><option value="UG" data-prefix="256">ยูกันดา</option><option value="UA" data-prefix="380">ยูเครน</option><option value="YE" data-prefix="967">เยเมน</option><option value="DE" data-prefix="49">เยอรมนี</option><option value="RW" data-prefix="250">รวันดา</option><option value="RU" data-prefix="7">รัสเซีย</option><option value="RE" data-prefix="262">เรอูนียง</option><option value="RO" data-prefix="40">โรมาเนีย</option><option value="LU" data-prefix="352">ลักเซมเบิร์ก</option><option value="LV" data-prefix="371">ลัตเวีย</option><option value="LA" data-prefix="856">ลาว</option><option value="LI" data-prefix="423">ลิกเตนสไตน์</option><option value="LT" data-prefix="370">ลิทัวเนีย</option><option value="LY" data-prefix="218">ลิเบีย</option><option value="LS" data-prefix="266">เลโซโท</option><option value="LB" data-prefix="961">เลบานอน</option><option value="LR" data-prefix="231">ไลบีเรีย</option><option value="VU" data-prefix="678">วานูอาตู</option><option value="WF" data-prefix="681">วาลลิสและฟุตูนา</option><option value="VE" data-prefix="58">เวเนซุเอลา</option><option value="VN" data-prefix="84">เวียดนาม</option><option value="LK" data-prefix="94">ศรีลังกา</option><option value="ES" data-prefix="34">สเปน</option><option value="SJ" data-prefix="47">สฟาลบาร์และยานไมเอน</option><option value="SK" data-prefix="421">สโลวะเกีย</option><option value="SI" data-prefix="386">สโลวีเนีย</option><option value="SZ" data-prefix="268">สวาซิแลนด์</option><option value="CH" data-prefix="41">สวิตเซอร์แลนด์</option><option value="SE" data-prefix="46">สวีเดน</option><option value="US" data-prefix="1">สหรัฐอเมริกา</option><option value="AE" data-prefix="971">สหรัฐอาหรับเอมิเรตส์</option><option value="GB" data-prefix="44">สหราชอาณาจักร</option><option value="CZ" data-prefix="420">สาธารณรัฐเช็ก</option><option value="DO" data-prefix="1">สาธารณรัฐโดมินิกัน</option><option value="CF" data-prefix="236">สาธารณรัฐแอฟริกากลาง</option><option value="SG" data-prefix="65">สิงคโปร์</option><option value="CK" data-prefix="682">หมู่เกาะคุก</option><option value="KY" data-prefix="1">หมู่เกาะเคย์แมน</option><option value="CC" data-prefix="61">หมู่เกาะโคโคส</option><option value="SB" data-prefix="677">หมู่เกาะโซโลมอน</option><option value="TC" data-prefix="1">หมู่เกาะเติกส์และหมู่เกาะเคคอส</option><option value="MP" data-prefix="1">หมู่เกาะนอร์เทิร์นมาเรียนา</option><option value="VG" data-prefix="1">หมู่เกาะบริติชเวอร์จิน</option><option value="PN" data-prefix="64">หมู่เกาะพิตแคร์น</option><option value="FK" data-prefix="500">หมู่เกาะฟอล์กแลนด์ [อิสลาส มาลวินาส]</option><option value="FO" data-prefix="298">หมู่เกาะแฟโร</option><option value="MH" data-prefix="692">หมู่เกาะมาร์แชลล์</option><option value="VI" data-prefix="1">หมู่เกาะยูเอสเวอร์จิน</option><option value="AX" data-prefix="358">หมู่เกาะโอลันด์</option><option value="AS" data-prefix="1">อเมริกันซามัว</option><option value="AU" data-prefix="61">ออสเตรเลีย</option><option value="AT" data-prefix="43">ออสเตรีย</option><option value="AD" data-prefix="376">อันดอร์รา</option><option value="AF" data-prefix="93">อัฟกานิสถาน</option><option value="AZ" data-prefix="994">อาเซอร์ไบจาน</option><option value="AR" data-prefix="54">อาร์เจนตินา</option><option value="AM" data-prefix="374">อาร์เมเนีย</option><option value="AW" data-prefix="297">อารูบา</option><option value="GQ" data-prefix="240">อิเควทอเรียลกินี</option><option value="IT" data-prefix="39">อิตาลี</option><option value="IN" data-prefix="91">อินเดีย</option><option value="ID" data-prefix="62">อินโดนีเซีย</option><option value="IQ" data-prefix="964">อิรัก</option><option value="IL" data-prefix="972">อิสราเอล</option><option value="EG" data-prefix="20">อียิปต์</option><option value="UZ" data-prefix="998">อุซเบกิสถาน</option><option value="UY" data-prefix="598">อุรุกวัย</option><option value="EC" data-prefix="593">เอกวาดอร์</option><option value="ET" data-prefix="251">เอธิโอเปีย</option><option value="ER" data-prefix="291">เอริเทรีย</option><option value="SV" data-prefix="503">เอลซัลวาดอร์</option><option value="EE" data-prefix="372">เอสโตเนีย</option><option value="AI" data-prefix="1">แองกวิลลา</option><option value="AO" data-prefix="244">แองโกลา</option><option value="AG" data-prefix="1">แอนติกาและบาร์บูดา</option><option value="ZA" data-prefix="27">แอฟริกาใต้</option><option value="DZ" data-prefix="213">แอลจีเรีย</option><option value="AL" data-prefix="355">แอลเบเนีย</option><option value="OM" data-prefix="968">โอมาน</option><option value="IS" data-prefix="354">ไอซ์แลนด์</option><option value="IE" data-prefix="353">ไอร์แลนด์</option><option value="CI" data-prefix="225">ไอวอรี่โคสต์</option><option value="HK" data-prefix="852">ฮ่องกง</option><option value="HN" data-prefix="504">ฮอนดูรัส</option><option value="HU" data-prefix="36">ฮังการี</option><option value="HT" data-prefix="509">เฮติ</option>
																</select>
															</div>

															<label for="phone_number">เพิ่มหมายเลขโทรศัพท์:</label>
															<div class="pniw-number-container clearfix">
																<div class="pniw-number-prefix">
																	+66
																</div>
																<input type="tel" class="pniw-number" id="phone_number">
															</div>
															<input type="hidden" data-role="phone_number" name="phone" value="66">
															<input type="hidden" name="user_id" value="63856890">
														</div>

														<div class="pnaw-verify-container">
															<a class="btn btn-primary" href="#" rel="sms">ตรวจสอบความถูกต้องทาง SMS</a>
															<a class="btn btn-primary" href="#" rel="call">ตรวจสอบความถูกต้องด้วยการโทร</a>
															<a class="cancel" rel="cancel" href="#" style="display: none;">ยกเลิก</a>
															<a class="why-verify" href="/help/article/277" target="_blank">ทำไมต้องตรวจสอบความถูกต้อง</a>
														</div>
													</div>
													<div class="pnaw-step2">
														<p class="message"></p>
														<label for="phone_number_verification">กรุณาใส่รหัส 4 หลัก:</label>
														<input type="text" pattern="[0-9]*" id="phone_number_verification">

														<div class="pnaw-verify-container">
															<a class="btn btn-primary" href="#" rel="verify"> ตรวจสอบความถูกต้อง </a>
															<a class="cancel" rel="cancel" href="#"> ยกเลิก </a>
														</div>
														<p class="cancel-message">
															ถ้าคุณไม่ได้รับข้อความ กรุณาคลิกยกเลิก และลองยืนยันทางโทรศัพท์แทน
														</p>
													</div>
												</div>

												<div class="phone-number-verify-widget">
													<p class="pnaw-verification-error"></p>
													<div class="pnaw-step1">
														<div class="phone-number-input-widget" id="phone-number-input-widget-3c14c275">
															<label for="phone_country">เลือกประเทศ:</label>
															<div class="select">
																<select id="phone_country" name="phone_country">
																	<option value="CG" data-prefix="242">คองโก</option><option value="CD" data-prefix="243">สาธารณรัฐประชาธิปไตยคองโก</option><option value="MK" data-prefix="389">มาซิโดเนีย</option><option value="GR" data-prefix="30">กรีซ</option><option value="GL" data-prefix="299">กรีนแลนด์</option><option value="GU" data-prefix="1">กวม</option><option value="GP" data-prefix="590">กวาเดอลูป</option><option value="KH" data-prefix="855">กัมพูชา</option><option value="GT" data-prefix="502">กัวเตมาลา</option><option value="QA" data-prefix="974">กาตาร์</option><option value="GH" data-prefix="233">กานา</option><option value="GA" data-prefix="241">กาบอง</option><option value="GY" data-prefix="592">กายอานา</option><option value="GN" data-prefix="224">กินี</option><option value="GW" data-prefix="245">กินี-บิสเซา</option><option value="GD" data-prefix="1">เกรเนดา</option><option value="KR" data-prefix="82">เกาหลีใต้</option><option value="CX" data-prefix="61">เกาะคริสต์มาส</option><option value="GS" data-prefix="500">เกาะเซาท์จอร์เจียและหมู่เกาะเซาท์แซนด์วิช</option><option value="NF" data-prefix="672">เกาะนอร์ฟอล์ก</option><option value="IM" data-prefix="44">เกาะแมน</option><option value="GG" data-prefix="44">เกิร์นซีย์</option><option value="GM" data-prefix="220">แกมเบีย</option><option value="KM" data-prefix="269">คอโมโรส</option><option value="CR" data-prefix="506">คอสตาริกา</option><option value="KZ" data-prefix="7">คาซัคสถาน</option><option value="KI" data-prefix="686">คิริบาส</option><option value="CU" data-prefix="53">คิวบา</option><option value="KG" data-prefix="996">คีร์กีซสถาน</option><option value="CW" data-prefix="599">คูราเซา</option><option value="KW" data-prefix="965">คูเวต</option><option value="KE" data-prefix="254">เคนยา</option><option value="CV" data-prefix="238">เคปเวิร์ด</option><option value="CA" data-prefix="1">แคนาดา</option><option value="CM" data-prefix="237">แคเมอรูน</option><option value="HR" data-prefix="385">โครเอเชีย</option><option value="CO" data-prefix="57">โคลอมเบีย</option><option value="GE" data-prefix="995">จอร์เจีย</option><option value="JO" data-prefix="962">จอร์แดน</option><option value="JM" data-prefix="1">จาเมกา</option><option value="DJ" data-prefix="253">จิบูตี</option><option value="CN" data-prefix="86">จีน</option><option value="JE" data-prefix="44">เจอร์ซีย์</option><option value="TD" data-prefix="235">ชาด</option><option value="CL" data-prefix="56">ชิลี</option><option value="SM" data-prefix="378">ซานมารีโน</option><option value="WS" data-prefix="685">ซามัว</option><option value="SA" data-prefix="966">ซาอุดีอาระเบีย</option><option value="EH" data-prefix="212">ซาฮาราตะวันตก</option><option value="ZW" data-prefix="263">ซิมบับเว</option><option value="SS" data-prefix="211">ซูดานใต้</option><option value="SR" data-prefix="597">ซูรินาเม</option><option value="SC" data-prefix="248">เซเชลส์</option><option value="KN" data-prefix="1">เซนต์คิตส์และเนวิส</option><option value="BL" data-prefix="590">เซนต์บาร์เธเลมี</option><option value="MF" data-prefix="590">เซนต์มาติน</option><option value="SX" data-prefix="1">เซนต์มาร์ติน</option><option value="LC" data-prefix="1">เซนต์ลูเซีย</option><option value="VC" data-prefix="1">เซนต์วินเซนต์และเกรนาดีนส์</option><option value="SH" data-prefix="290">เซนต์เฮเลนา</option><option value="SN" data-prefix="221">เซเนกัล</option><option value="RS" data-prefix="381">เซอร์เบีย</option><option value="ST" data-prefix="239">เซาตูเมและปรินซิปี</option><option value="SL" data-prefix="232">เซียร์ราลีโอน</option><option value="PM" data-prefix="508">แซงปีแยร์และมีเกอลง</option><option value="ZM" data-prefix="260">แซมเบีย</option><option value="SO" data-prefix="252">โซมาเลีย</option><option value="CY" data-prefix="357">ไซปรัส</option><option value="JP" data-prefix="81">ญี่ปุ่น</option><option value="DK" data-prefix="45">เดนมาร์ก</option><option value="DM" data-prefix="1">โดมินิกา</option><option value="TT" data-prefix="1">ตรินิแดดและโตเบโก</option><option value="TO" data-prefix="676">ตองกา</option><option value="TL" data-prefix="670">ติมอร์ตะวันออก</option><option value="TR" data-prefix="90">ตุรกี</option><option value="TN" data-prefix="216">ตูนิเซีย</option><option value="TV" data-prefix="688">ตูวาลู</option><option value="TM" data-prefix="993">เติร์กเมนิสถาน</option><option value="TK" data-prefix="690">โตเกเลา</option><option value="TG" data-prefix="228">โตโก</option><option value="TW" data-prefix="886">ไต้หวัน</option><option value="TJ" data-prefix="992">ทาจิกิสถาน</option><option value="TZ" data-prefix="255">แทนซาเนีย</option><option value="TH" data-prefix="66" selected="selected">ไทย</option><option value="VA" data-prefix="379">นครรัฐวาติกัน</option><option value="NO" data-prefix="47">นอร์เวย์</option><option value="NA" data-prefix="264">นามิเบีย</option><option value="NR" data-prefix="674">นาอูรู</option><option value="NI" data-prefix="505">นิการากัว</option><option value="NC" data-prefix="687">นิวแคลิโดเนีย</option><option value="NZ" data-prefix="64">นิวซีแลนด์</option><option value="NU" data-prefix="683">นีอูเอ</option><option value="NL" data-prefix="31">เนเธอร์แลนด์</option><option value="BQ" data-prefix="599">เนเธอร์แลนด์แคริบเบียน</option><option value="NP" data-prefix="977">เนปาล</option><option value="NG" data-prefix="234">ไนจีเรีย</option><option value="NE" data-prefix="227">ไนเจอร์</option><option value="BR" data-prefix="55">บราซิล</option><option value="IO" data-prefix="246">บริติชอินเดียนโอเชียนเทร์ริทอรี</option><option value="BN" data-prefix="673">บรูไน</option><option value="BW" data-prefix="267">บอตสวานา</option><option value="BA" data-prefix="387">บอสเนียและเฮอร์เซโกวีนา</option><option value="BD" data-prefix="880">บังกลาเทศ</option><option value="BG" data-prefix="359">บัลแกเรีย</option><option value="BB" data-prefix="1">บาร์เบโดส</option><option value="BH" data-prefix="973">บาห์เรน</option><option value="BS" data-prefix="1">บาฮามาส</option><option value="BI" data-prefix="257">บุรุนดี</option><option value="BF" data-prefix="226">บูร์กินาฟาโซ</option><option value="BJ" data-prefix="229">เบนิน</option><option value="BE" data-prefix="32">เบลเยียม</option><option value="BY" data-prefix="375">เบลารุส</option><option value="BZ" data-prefix="501">เบลีซ</option><option value="BM" data-prefix="1">เบอร์มิวดา</option><option value="BO" data-prefix="591">โบลิเวีย</option><option value="PK" data-prefix="92">ปากีสถาน</option><option value="PA" data-prefix="507">ปานามา</option><option value="PG" data-prefix="675">ปาปัวนิวกินี</option><option value="PY" data-prefix="595">ปารากวัย</option><option value="PS" data-prefix="970">ปาเลสไตน์</option><option value="PW" data-prefix="680">ปาเลา</option><option value="PE" data-prefix="51">เปรู</option><option value="PR" data-prefix="1">เปอร์โตริโก</option><option value="PT" data-prefix="351">โปรตุเกส</option><option value="PL" data-prefix="48">โปแลนด์</option><option value="FR" data-prefix="33">ฝรั่งเศส</option><option value="FJ" data-prefix="679">ฟิจิ</option><option value="FI" data-prefix="358">ฟินแลนด์</option><option value="PH" data-prefix="63">ฟิลิปปินส์</option><option value="GF" data-prefix="594">เฟรนช์เกียนา</option><option value="PF" data-prefix="689">เฟรนช์โปลินีเซีย</option><option value="BT" data-prefix="975">ภูฏาน</option><option value="MN" data-prefix="976">มองโกเลีย</option><option value="MS" data-prefix="1">มอนต์เซอร์รัต</option><option value="ME" data-prefix="382">มอนเตเนโกร</option><option value="MU" data-prefix="230">มอริเชียส</option><option value="MR" data-prefix="222">มอริเตเนีย</option><option value="MD" data-prefix="373">มอลโดวา</option><option value="MT" data-prefix="356">มอลตา</option><option value="MV" data-prefix="960">มัลดีฟส์</option><option value="MO" data-prefix="853">มาเก๊า</option><option value="MG" data-prefix="261">มาดากัสการ์</option><option value="YT" data-prefix="262">มายอต</option><option value="MQ" data-prefix="596">มาร์ตินีก</option><option value="MW" data-prefix="265">มาลาวี</option><option value="ML" data-prefix="223">มาลี</option><option value="MY" data-prefix="60">มาเลเซีย</option><option value="MX" data-prefix="52">เม็กซิโก</option><option value="MM" data-prefix="95">เมียนม่าร์ [พม่า]</option><option value="MZ" data-prefix="258">โมซัมบิก</option><option value="MC" data-prefix="377">โมนาโก</option><option value="MA" data-prefix="212">โมร็อกโก</option><option value="FM" data-prefix="691">ไมโครนีเซีย</option><option value="GI" data-prefix="350">ยิบรอลตาร์</option><option value="UG" data-prefix="256">ยูกันดา</option><option value="UA" data-prefix="380">ยูเครน</option><option value="YE" data-prefix="967">เยเมน</option><option value="DE" data-prefix="49">เยอรมนี</option><option value="RW" data-prefix="250">รวันดา</option><option value="RU" data-prefix="7">รัสเซีย</option><option value="RE" data-prefix="262">เรอูนียง</option><option value="RO" data-prefix="40">โรมาเนีย</option><option value="LU" data-prefix="352">ลักเซมเบิร์ก</option><option value="LV" data-prefix="371">ลัตเวีย</option><option value="LA" data-prefix="856">ลาว</option><option value="LI" data-prefix="423">ลิกเตนสไตน์</option><option value="LT" data-prefix="370">ลิทัวเนีย</option><option value="LY" data-prefix="218">ลิเบีย</option><option value="LS" data-prefix="266">เลโซโท</option><option value="LB" data-prefix="961">เลบานอน</option><option value="LR" data-prefix="231">ไลบีเรีย</option><option value="VU" data-prefix="678">วานูอาตู</option><option value="WF" data-prefix="681">วาลลิสและฟุตูนา</option><option value="VE" data-prefix="58">เวเนซุเอลา</option><option value="VN" data-prefix="84">เวียดนาม</option><option value="LK" data-prefix="94">ศรีลังกา</option><option value="ES" data-prefix="34">สเปน</option><option value="SJ" data-prefix="47">สฟาลบาร์และยานไมเอน</option><option value="SK" data-prefix="421">สโลวะเกีย</option><option value="SI" data-prefix="386">สโลวีเนีย</option><option value="SZ" data-prefix="268">สวาซิแลนด์</option><option value="CH" data-prefix="41">สวิตเซอร์แลนด์</option><option value="SE" data-prefix="46">สวีเดน</option><option value="US" data-prefix="1">สหรัฐอเมริกา</option><option value="AE" data-prefix="971">สหรัฐอาหรับเอมิเรตส์</option><option value="GB" data-prefix="44">สหราชอาณาจักร</option><option value="CZ" data-prefix="420">สาธารณรัฐเช็ก</option><option value="DO" data-prefix="1">สาธารณรัฐโดมินิกัน</option><option value="CF" data-prefix="236">สาธารณรัฐแอฟริกากลาง</option><option value="SG" data-prefix="65">สิงคโปร์</option><option value="CK" data-prefix="682">หมู่เกาะคุก</option><option value="KY" data-prefix="1">หมู่เกาะเคย์แมน</option><option value="CC" data-prefix="61">หมู่เกาะโคโคส</option><option value="SB" data-prefix="677">หมู่เกาะโซโลมอน</option><option value="TC" data-prefix="1">หมู่เกาะเติกส์และหมู่เกาะเคคอส</option><option value="MP" data-prefix="1">หมู่เกาะนอร์เทิร์นมาเรียนา</option><option value="VG" data-prefix="1">หมู่เกาะบริติชเวอร์จิน</option><option value="PN" data-prefix="64">หมู่เกาะพิตแคร์น</option><option value="FK" data-prefix="500">หมู่เกาะฟอล์กแลนด์ [อิสลาส มาลวินาส]</option><option value="FO" data-prefix="298">หมู่เกาะแฟโร</option><option value="MH" data-prefix="692">หมู่เกาะมาร์แชลล์</option><option value="VI" data-prefix="1">หมู่เกาะยูเอสเวอร์จิน</option><option value="AX" data-prefix="358">หมู่เกาะโอลันด์</option><option value="AS" data-prefix="1">อเมริกันซามัว</option><option value="AU" data-prefix="61">ออสเตรเลีย</option><option value="AT" data-prefix="43">ออสเตรีย</option><option value="AD" data-prefix="376">อันดอร์รา</option><option value="AF" data-prefix="93">อัฟกานิสถาน</option><option value="AZ" data-prefix="994">อาเซอร์ไบจาน</option><option value="AR" data-prefix="54">อาร์เจนตินา</option><option value="AM" data-prefix="374">อาร์เมเนีย</option><option value="AW" data-prefix="297">อารูบา</option><option value="GQ" data-prefix="240">อิเควทอเรียลกินี</option><option value="IT" data-prefix="39">อิตาลี</option><option value="IN" data-prefix="91">อินเดีย</option><option value="ID" data-prefix="62">อินโดนีเซีย</option><option value="IQ" data-prefix="964">อิรัก</option><option value="IL" data-prefix="972">อิสราเอล</option><option value="EG" data-prefix="20">อียิปต์</option><option value="UZ" data-prefix="998">อุซเบกิสถาน</option><option value="UY" data-prefix="598">อุรุกวัย</option><option value="EC" data-prefix="593">เอกวาดอร์</option><option value="ET" data-prefix="251">เอธิโอเปีย</option><option value="ER" data-prefix="291">เอริเทรีย</option><option value="SV" data-prefix="503">เอลซัลวาดอร์</option><option value="EE" data-prefix="372">เอสโตเนีย</option><option value="AI" data-prefix="1">แองกวิลลา</option><option value="AO" data-prefix="244">แองโกลา</option><option value="AG" data-prefix="1">แอนติกาและบาร์บูดา</option><option value="ZA" data-prefix="27">แอฟริกาใต้</option><option value="DZ" data-prefix="213">แอลจีเรีย</option><option value="AL" data-prefix="355">แอลเบเนีย</option><option value="OM" data-prefix="968">โอมาน</option><option value="IS" data-prefix="354">ไอซ์แลนด์</option><option value="IE" data-prefix="353">ไอร์แลนด์</option><option value="CI" data-prefix="225">ไอวอรี่โคสต์</option><option value="HK" data-prefix="852">ฮ่องกง</option><option value="HN" data-prefix="504">ฮอนดูรัส</option><option value="HU" data-prefix="36">ฮังการี</option><option value="HT" data-prefix="509">เฮติ</option>
																</select>
															</div>

															<label for="phone_number">เพิ่มหมายเลขโทรศัพท์:</label>
															<div class="pniw-number-container clearfix">
																<div class="pniw-number-prefix">
																	+66
																</div>
																<input type="tel" class="pniw-number" id="phone_number">
															</div>
															<input type="hidden" data-role="phone_number" name="phone" value="66">
															<input type="hidden" name="user_id" value="63856890">
														</div>

														<div class="pnaw-verify-container">
															<a class="btn btn-primary" href="#" rel="sms">ตรวจสอบความถูกต้องทาง SMS</a>
															<a class="btn btn-primary" href="#" rel="call">ตรวจสอบความถูกต้องด้วยการโทร</a>
															<a class="cancel" rel="cancel" href="#" style="display: none;">ยกเลิก</a>
															<a class="why-verify" href="/help/article/277" target="_blank">ทำไมต้องตรวจสอบความถูกต้อง</a>
														</div>
													</div>
													<div class="pnaw-step2">
														<p class="message"></p>
														<label for="phone_number_verification">กรุณาใส่รหัส 4 หลัก:</label>
														<input type="text" pattern="[0-9]*" id="phone_number_verification">

														<div class="pnaw-verify-container">
															<a class="btn btn-primary" href="#" rel="verify"> ตรวจสอบความถูกต้อง </a>
															<a class="cancel" rel="cancel" href="#"> ยกเลิก </a>
														</div>
														<p class="cancel-message">
															ถ้าคุณไม่ได้รับข้อความ กรุณาคลิกยกเลิก และลองยืนยันทางโทรศัพท์แทน
														</p>
													</div>
												</div>

												<div class="phone-number-replace-widget">
													<p class="pnaw-verification-error"></p>
													<div class="pnaw-step1">
														<div class="phone-number-input-widget" id="phone-number-input-widget-2004a55f">
															<label for="phone_country">เลือกประเทศ:</label>
															<div class="select">
																<select id="phone_country" name="phone_country">
																	<option value="CG" data-prefix="242">คองโก</option><option value="CD" data-prefix="243">สาธารณรัฐประชาธิปไตยคองโก</option><option value="MK" data-prefix="389">มาซิโดเนีย</option><option value="GR" data-prefix="30">กรีซ</option><option value="GL" data-prefix="299">กรีนแลนด์</option><option value="GU" data-prefix="1">กวม</option><option value="GP" data-prefix="590">กวาเดอลูป</option><option value="KH" data-prefix="855">กัมพูชา</option><option value="GT" data-prefix="502">กัวเตมาลา</option><option value="QA" data-prefix="974">กาตาร์</option><option value="GH" data-prefix="233">กานา</option><option value="GA" data-prefix="241">กาบอง</option><option value="GY" data-prefix="592">กายอานา</option><option value="GN" data-prefix="224">กินี</option><option value="GW" data-prefix="245">กินี-บิสเซา</option><option value="GD" data-prefix="1">เกรเนดา</option><option value="KR" data-prefix="82">เกาหลีใต้</option><option value="CX" data-prefix="61">เกาะคริสต์มาส</option><option value="GS" data-prefix="500">เกาะเซาท์จอร์เจียและหมู่เกาะเซาท์แซนด์วิช</option><option value="NF" data-prefix="672">เกาะนอร์ฟอล์ก</option><option value="IM" data-prefix="44">เกาะแมน</option><option value="GG" data-prefix="44">เกิร์นซีย์</option><option value="GM" data-prefix="220">แกมเบีย</option><option value="KM" data-prefix="269">คอโมโรส</option><option value="CR" data-prefix="506">คอสตาริกา</option><option value="KZ" data-prefix="7">คาซัคสถาน</option><option value="KI" data-prefix="686">คิริบาส</option><option value="CU" data-prefix="53">คิวบา</option><option value="KG" data-prefix="996">คีร์กีซสถาน</option><option value="CW" data-prefix="599">คูราเซา</option><option value="KW" data-prefix="965">คูเวต</option><option value="KE" data-prefix="254">เคนยา</option><option value="CV" data-prefix="238">เคปเวิร์ด</option><option value="CA" data-prefix="1">แคนาดา</option><option value="CM" data-prefix="237">แคเมอรูน</option><option value="HR" data-prefix="385">โครเอเชีย</option><option value="CO" data-prefix="57">โคลอมเบีย</option><option value="GE" data-prefix="995">จอร์เจีย</option><option value="JO" data-prefix="962">จอร์แดน</option><option value="JM" data-prefix="1">จาเมกา</option><option value="DJ" data-prefix="253">จิบูตี</option><option value="CN" data-prefix="86">จีน</option><option value="JE" data-prefix="44">เจอร์ซีย์</option><option value="TD" data-prefix="235">ชาด</option><option value="CL" data-prefix="56">ชิลี</option><option value="SM" data-prefix="378">ซานมารีโน</option><option value="WS" data-prefix="685">ซามัว</option><option value="SA" data-prefix="966">ซาอุดีอาระเบีย</option><option value="EH" data-prefix="212">ซาฮาราตะวันตก</option><option value="ZW" data-prefix="263">ซิมบับเว</option><option value="SS" data-prefix="211">ซูดานใต้</option><option value="SR" data-prefix="597">ซูรินาเม</option><option value="SC" data-prefix="248">เซเชลส์</option><option value="KN" data-prefix="1">เซนต์คิตส์และเนวิส</option><option value="BL" data-prefix="590">เซนต์บาร์เธเลมี</option><option value="MF" data-prefix="590">เซนต์มาติน</option><option value="SX" data-prefix="1">เซนต์มาร์ติน</option><option value="LC" data-prefix="1">เซนต์ลูเซีย</option><option value="VC" data-prefix="1">เซนต์วินเซนต์และเกรนาดีนส์</option><option value="SH" data-prefix="290">เซนต์เฮเลนา</option><option value="SN" data-prefix="221">เซเนกัล</option><option value="RS" data-prefix="381">เซอร์เบีย</option><option value="ST" data-prefix="239">เซาตูเมและปรินซิปี</option><option value="SL" data-prefix="232">เซียร์ราลีโอน</option><option value="PM" data-prefix="508">แซงปีแยร์และมีเกอลง</option><option value="ZM" data-prefix="260">แซมเบีย</option><option value="SO" data-prefix="252">โซมาเลีย</option><option value="CY" data-prefix="357">ไซปรัส</option><option value="JP" data-prefix="81">ญี่ปุ่น</option><option value="DK" data-prefix="45">เดนมาร์ก</option><option value="DM" data-prefix="1">โดมินิกา</option><option value="TT" data-prefix="1">ตรินิแดดและโตเบโก</option><option value="TO" data-prefix="676">ตองกา</option><option value="TL" data-prefix="670">ติมอร์ตะวันออก</option><option value="TR" data-prefix="90">ตุรกี</option><option value="TN" data-prefix="216">ตูนิเซีย</option><option value="TV" data-prefix="688">ตูวาลู</option><option value="TM" data-prefix="993">เติร์กเมนิสถาน</option><option value="TK" data-prefix="690">โตเกเลา</option><option value="TG" data-prefix="228">โตโก</option><option value="TW" data-prefix="886">ไต้หวัน</option><option value="TJ" data-prefix="992">ทาจิกิสถาน</option><option value="TZ" data-prefix="255">แทนซาเนีย</option><option value="TH" data-prefix="66" selected="selected">ไทย</option><option value="VA" data-prefix="379">นครรัฐวาติกัน</option><option value="NO" data-prefix="47">นอร์เวย์</option><option value="NA" data-prefix="264">นามิเบีย</option><option value="NR" data-prefix="674">นาอูรู</option><option value="NI" data-prefix="505">นิการากัว</option><option value="NC" data-prefix="687">นิวแคลิโดเนีย</option><option value="NZ" data-prefix="64">นิวซีแลนด์</option><option value="NU" data-prefix="683">นีอูเอ</option><option value="NL" data-prefix="31">เนเธอร์แลนด์</option><option value="BQ" data-prefix="599">เนเธอร์แลนด์แคริบเบียน</option><option value="NP" data-prefix="977">เนปาล</option><option value="NG" data-prefix="234">ไนจีเรีย</option><option value="NE" data-prefix="227">ไนเจอร์</option><option value="BR" data-prefix="55">บราซิล</option><option value="IO" data-prefix="246">บริติชอินเดียนโอเชียนเทร์ริทอรี</option><option value="BN" data-prefix="673">บรูไน</option><option value="BW" data-prefix="267">บอตสวานา</option><option value="BA" data-prefix="387">บอสเนียและเฮอร์เซโกวีนา</option><option value="BD" data-prefix="880">บังกลาเทศ</option><option value="BG" data-prefix="359">บัลแกเรีย</option><option value="BB" data-prefix="1">บาร์เบโดส</option><option value="BH" data-prefix="973">บาห์เรน</option><option value="BS" data-prefix="1">บาฮามาส</option><option value="BI" data-prefix="257">บุรุนดี</option><option value="BF" data-prefix="226">บูร์กินาฟาโซ</option><option value="BJ" data-prefix="229">เบนิน</option><option value="BE" data-prefix="32">เบลเยียม</option><option value="BY" data-prefix="375">เบลารุส</option><option value="BZ" data-prefix="501">เบลีซ</option><option value="BM" data-prefix="1">เบอร์มิวดา</option><option value="BO" data-prefix="591">โบลิเวีย</option><option value="PK" data-prefix="92">ปากีสถาน</option><option value="PA" data-prefix="507">ปานามา</option><option value="PG" data-prefix="675">ปาปัวนิวกินี</option><option value="PY" data-prefix="595">ปารากวัย</option><option value="PS" data-prefix="970">ปาเลสไตน์</option><option value="PW" data-prefix="680">ปาเลา</option><option value="PE" data-prefix="51">เปรู</option><option value="PR" data-prefix="1">เปอร์โตริโก</option><option value="PT" data-prefix="351">โปรตุเกส</option><option value="PL" data-prefix="48">โปแลนด์</option><option value="FR" data-prefix="33">ฝรั่งเศส</option><option value="FJ" data-prefix="679">ฟิจิ</option><option value="FI" data-prefix="358">ฟินแลนด์</option><option value="PH" data-prefix="63">ฟิลิปปินส์</option><option value="GF" data-prefix="594">เฟรนช์เกียนา</option><option value="PF" data-prefix="689">เฟรนช์โปลินีเซีย</option><option value="BT" data-prefix="975">ภูฏาน</option><option value="MN" data-prefix="976">มองโกเลีย</option><option value="MS" data-prefix="1">มอนต์เซอร์รัต</option><option value="ME" data-prefix="382">มอนเตเนโกร</option><option value="MU" data-prefix="230">มอริเชียส</option><option value="MR" data-prefix="222">มอริเตเนีย</option><option value="MD" data-prefix="373">มอลโดวา</option><option value="MT" data-prefix="356">มอลตา</option><option value="MV" data-prefix="960">มัลดีฟส์</option><option value="MO" data-prefix="853">มาเก๊า</option><option value="MG" data-prefix="261">มาดากัสการ์</option><option value="YT" data-prefix="262">มายอต</option><option value="MQ" data-prefix="596">มาร์ตินีก</option><option value="MW" data-prefix="265">มาลาวี</option><option value="ML" data-prefix="223">มาลี</option><option value="MY" data-prefix="60">มาเลเซีย</option><option value="MX" data-prefix="52">เม็กซิโก</option><option value="MM" data-prefix="95">เมียนม่าร์ [พม่า]</option><option value="MZ" data-prefix="258">โมซัมบิก</option><option value="MC" data-prefix="377">โมนาโก</option><option value="MA" data-prefix="212">โมร็อกโก</option><option value="FM" data-prefix="691">ไมโครนีเซีย</option><option value="GI" data-prefix="350">ยิบรอลตาร์</option><option value="UG" data-prefix="256">ยูกันดา</option><option value="UA" data-prefix="380">ยูเครน</option><option value="YE" data-prefix="967">เยเมน</option><option value="DE" data-prefix="49">เยอรมนี</option><option value="RW" data-prefix="250">รวันดา</option><option value="RU" data-prefix="7">รัสเซีย</option><option value="RE" data-prefix="262">เรอูนียง</option><option value="RO" data-prefix="40">โรมาเนีย</option><option value="LU" data-prefix="352">ลักเซมเบิร์ก</option><option value="LV" data-prefix="371">ลัตเวีย</option><option value="LA" data-prefix="856">ลาว</option><option value="LI" data-prefix="423">ลิกเตนสไตน์</option><option value="LT" data-prefix="370">ลิทัวเนีย</option><option value="LY" data-prefix="218">ลิเบีย</option><option value="LS" data-prefix="266">เลโซโท</option><option value="LB" data-prefix="961">เลบานอน</option><option value="LR" data-prefix="231">ไลบีเรีย</option><option value="VU" data-prefix="678">วานูอาตู</option><option value="WF" data-prefix="681">วาลลิสและฟุตูนา</option><option value="VE" data-prefix="58">เวเนซุเอลา</option><option value="VN" data-prefix="84">เวียดนาม</option><option value="LK" data-prefix="94">ศรีลังกา</option><option value="ES" data-prefix="34">สเปน</option><option value="SJ" data-prefix="47">สฟาลบาร์และยานไมเอน</option><option value="SK" data-prefix="421">สโลวะเกีย</option><option value="SI" data-prefix="386">สโลวีเนีย</option><option value="SZ" data-prefix="268">สวาซิแลนด์</option><option value="CH" data-prefix="41">สวิตเซอร์แลนด์</option><option value="SE" data-prefix="46">สวีเดน</option><option value="US" data-prefix="1">สหรัฐอเมริกา</option><option value="AE" data-prefix="971">สหรัฐอาหรับเอมิเรตส์</option><option value="GB" data-prefix="44">สหราชอาณาจักร</option><option value="CZ" data-prefix="420">สาธารณรัฐเช็ก</option><option value="DO" data-prefix="1">สาธารณรัฐโดมินิกัน</option><option value="CF" data-prefix="236">สาธารณรัฐแอฟริกากลาง</option><option value="SG" data-prefix="65">สิงคโปร์</option><option value="CK" data-prefix="682">หมู่เกาะคุก</option><option value="KY" data-prefix="1">หมู่เกาะเคย์แมน</option><option value="CC" data-prefix="61">หมู่เกาะโคโคส</option><option value="SB" data-prefix="677">หมู่เกาะโซโลมอน</option><option value="TC" data-prefix="1">หมู่เกาะเติกส์และหมู่เกาะเคคอส</option><option value="MP" data-prefix="1">หมู่เกาะนอร์เทิร์นมาเรียนา</option><option value="VG" data-prefix="1">หมู่เกาะบริติชเวอร์จิน</option><option value="PN" data-prefix="64">หมู่เกาะพิตแคร์น</option><option value="FK" data-prefix="500">หมู่เกาะฟอล์กแลนด์ [อิสลาส มาลวินาส]</option><option value="FO" data-prefix="298">หมู่เกาะแฟโร</option><option value="MH" data-prefix="692">หมู่เกาะมาร์แชลล์</option><option value="VI" data-prefix="1">หมู่เกาะยูเอสเวอร์จิน</option><option value="AX" data-prefix="358">หมู่เกาะโอลันด์</option><option value="AS" data-prefix="1">อเมริกันซามัว</option><option value="AU" data-prefix="61">ออสเตรเลีย</option><option value="AT" data-prefix="43">ออสเตรีย</option><option value="AD" data-prefix="376">อันดอร์รา</option><option value="AF" data-prefix="93">อัฟกานิสถาน</option><option value="AZ" data-prefix="994">อาเซอร์ไบจาน</option><option value="AR" data-prefix="54">อาร์เจนตินา</option><option value="AM" data-prefix="374">อาร์เมเนีย</option><option value="AW" data-prefix="297">อารูบา</option><option value="GQ" data-prefix="240">อิเควทอเรียลกินี</option><option value="IT" data-prefix="39">อิตาลี</option><option value="IN" data-prefix="91">อินเดีย</option><option value="ID" data-prefix="62">อินโดนีเซีย</option><option value="IQ" data-prefix="964">อิรัก</option><option value="IL" data-prefix="972">อิสราเอล</option><option value="EG" data-prefix="20">อียิปต์</option><option value="UZ" data-prefix="998">อุซเบกิสถาน</option><option value="UY" data-prefix="598">อุรุกวัย</option><option value="EC" data-prefix="593">เอกวาดอร์</option><option value="ET" data-prefix="251">เอธิโอเปีย</option><option value="ER" data-prefix="291">เอริเทรีย</option><option value="SV" data-prefix="503">เอลซัลวาดอร์</option><option value="EE" data-prefix="372">เอสโตเนีย</option><option value="AI" data-prefix="1">แองกวิลลา</option><option value="AO" data-prefix="244">แองโกลา</option><option value="AG" data-prefix="1">แอนติกาและบาร์บูดา</option><option value="ZA" data-prefix="27">แอฟริกาใต้</option><option value="DZ" data-prefix="213">แอลจีเรีย</option><option value="AL" data-prefix="355">แอลเบเนีย</option><option value="OM" data-prefix="968">โอมาน</option><option value="IS" data-prefix="354">ไอซ์แลนด์</option><option value="IE" data-prefix="353">ไอร์แลนด์</option><option value="CI" data-prefix="225">ไอวอรี่โคสต์</option><option value="HK" data-prefix="852">ฮ่องกง</option><option value="HN" data-prefix="504">ฮอนดูรัส</option><option value="HU" data-prefix="36">ฮังการี</option><option value="HT" data-prefix="509">เฮติ</option>
																</select>
															</div>

															<label for="phone_number">เพิ่มหมายเลขโทรศัพท์:</label>
															<div class="pniw-number-container clearfix">
																<div class="pniw-number-prefix">
																	+66
																</div>
																<input type="tel" class="pniw-number" id="phone_number">
															</div>
															<input type="hidden" data-role="phone_number" name="phone" value="66">
															<input type="hidden" name="user_id" value="63856890">
														</div>

														<div class="pnaw-verify-container">
															<a class="btn btn-primary" href="#" rel="sms">ตรวจสอบความถูกต้องทาง SMS</a>
															<a class="cancel" rel="cancel" href="#" style="display: none;">ยกเลิก</a>
															<a class="why-verify" href="/help/article/277" target="_blank">ทำไมต้องตรวจสอบความถูกต้อง</a>
														</div>
													</div>
													<div class="pnaw-step2">
														<p class="message"></p>
														<label for="phone_number_verification">กรุณาใส่รหัส 4 หลัก:</label>
														<input type="text" pattern="[0-9]*" id="phone_number_verification">

														<div class="pnaw-verify-container">
															<a class="btn btn-primary" href="#" rel="verify" data-old-phone-number=""> ตรวจสอบความถูกต้อง </a>
															<a class="cancel" rel="cancel" href="#"> ยกเลิก </a>
														</div>
														<p class="cancel-message">
															หากมาไม่ถึง ให้คลิกยกเลิกและลองใหม่
														</p>
													</div>
												</div>

											</div>

										</li>
										<li class="facebook unverified space-4 clearfix">
											<h4> Facebook </h4>
											<div class="row">
												<div class="col-7">
													<p class="description verification-text-description">
														ลงชื่อเข้าใช้ใน Facebook และค้นหาการเชื่อมต่อที่ไว้ใจได้กับเจ้าของรถเช่าและผู้ใช้บริการทั่วโลก
													</p>
												</div>

												<div class="col-5">
													<div class="disconnect-button-container">
														<a href="https://th.Rentcnd.com/oauth/delete?service=facebook" class="btn gray" data-method="post" rel="nofollow">หยุดเชื่อมต่อ</a>
														&nbsp;&nbsp;&nbsp;&nbsp;
														<i class="icon icon-question icon-question-sign" data-behavior="tooltip" rel="tooltip" style="font-size: " aria-label="คุณสามารถเชื่อมต่อใหม่ภายหลังได้เสมอ"></i>
													</div>
												</div>
											</div>

										</li>
									</ul>
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
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

</html>
