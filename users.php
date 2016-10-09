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
									<a href="users.php" aria-selected="true" class="sidenav-item">แก้ไขข้อมูลส่วนตัว</a>
								</li>
								<li>
									<a href="edit_verification.php" aria-selected="false" class="sidenav-item">ความไว้ใจและการยืนยันตัวตน</a>
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

							<form accept-charset="UTF-8" action="/update/63856890" data-hook="update-profile-form" enctype="multipart/form-data" id="update_form" method="post">
								<div style="margin:0;padding:0;display:inline">
									<input name="utf8" type="hidden" value="✓">
									<input name="authenticity_token" type="hidden" value="V4$.Rentcnd.com$YP4tThly0ng$c_NfIUJHtitKZ29ST6PxJjkEiWohugZMfz-VmjAITgU=">
								</div>

								<div class="panel space-4">
									<div class="panel-header">
										รูปโปรไฟล์
									</div>
									<div class="panel-body photos-section">
										<div class="row">
											<div class="col-lg-4 text-center">
												<div class="profile_pic_container picture-main space-sm-2 space-md-2" data-picture-id="134912144">
													<div class="media-photo profile-pic-background">
														<img alt="Adthasid" height="225" src="https://a2.muscache.com/im/pictures/26ff8bef-2333-4265-b6d2-cc1e86b349b4.jpg?aki_policy=profile_x_medium" title="Adthasid" width="225">
													</div>
													<div class="media-photo media-round">
														<img alt="Adthasid" height="225" src="https://a2.muscache.com/im/pictures/26ff8bef-2333-4265-b6d2-cc1e86b349b4.jpg?aki_policy=profile_x_medium" title="Adthasid" width="225">
													</div>
													<button class="picture-tile-delete overlay-btn" data-behavior="tooltip" aria-label="ลบ">
														<i class="icon icon-trash"></i>
													</button>
												</div>
											</div>
											<div class="col-lg-8">
												<ul class="list-layout picture-tiles clearfix ui-sortable"></ul>

												<p>
													รูปหน้าตรงที่ชัดเจนเป็นวิธีสำคัญที่เจ้าของที่พักและผู้เข้าพักจะได้เรียนรู้เกี่ยวกับกันและกัน การเป็นเจ้าบ้านให้ทิวทัศน์ไม่น่าสนุกแน่! กรุณาอัพโหลดรูปภาพที่แสดงหน้าคุณอย่างชัดเจน
												</p>

												<div class="row row-condensed">
													<div class="col-md-6 space-top-4 col-offset-2">
														<span class="btn btn-block btn-large file-input-container"> อัพโหลดไฟล์
															<form accept-charset="UTF-8" action="https://th.airbnb.com/users/ajax_image_upload" enctype="multipart/form-data" id="ajax_upload_form" method="post" name="ajax_upload_form" target="upload_frame">
																<div style="margin:0;padding:0;display:inline">
																	<input name="utf8" type="hidden" value="✓">
																	<input name="authenticity_token" type="hidden" value="V4$.airbnb.com$YP4tThly0ng$c_NfIUJHtitKZ29ST6PxJjkEiWohugZMfz-VmjAITgU=">
																</div>
																<input id="user_id" name="user_id" type="hidden" value="63856890">
																<input id="callback" name="callback" type="hidden" value="EditProfile">
																<input id="user_profile_pic" name="user[profile_pic]" type="file">
															</form> <iframe id="upload_frame" name="upload_frame" style="display:none;"></iframe> </span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="panel space-4">
									<div class="panel-header">
										จำเป็นต้องป้อน
									</div>
									<div class="panel-body">
										<div class="row row-condensed space-4">
											<label class="text-right col-sm-3" for="user_first_name"> ชื่อ </label>
											<div class="col-sm-9">

												<input id="user_first_name" name="user[first_name]" size="30" type="text" value="Adthasid">

											</div>
										</div>

										<div class="row row-condensed space-4">
											<label class="text-right col-sm-3" for="user_last_name"> นามสกุล </label>
											<div class="col-sm-9">

												<input id="user_last_name" name="user[last_name]" size="30" type="text" value="Suksomthawisap">

												<div class="text-muted space-top-1">
													ระบบจะแบ่งปันข้อมูลส่วนนี้ก็ต่อเมื่อคุณได้ยืนยันการจองกับผู้ใช้ Rentcnd อีกคนแล้วเท่านั้น
												</div>
											</div>
										</div>

										<div class="row row-condensed space-4">
											<label class="text-right col-sm-3" for="user_sex"> ฉันเป็น <i class="icon icon-lock icon-ebisu" data-behavior="tooltip" aria-label="ส่วนตัว"></i> </label>
											<div class="col-sm-9">

												<div class="select">
													<select id="user_sex" name="user[sex]">
														<option value="">เพศ</option>
														<option value="Male" selected="selected">ผู้ชาย</option>
														<option value="Female">ผู้หญิง</option>
														<option value="Other">อื่น ๆ</option>
													</select>
												</div>

												<div class="text-muted space-top-1">
													เราใช้ข้อมูลนี้สำหรับการวิเคราะห์และจะไม่แบ่งปันข้อมูลนี้กับผู้ใช้คนอื่น ๆ
												</div>
											</div>
										</div>

										<div class="row row-condensed space-4">
											<label class="text-right col-sm-3" for="user_birthdate"> วันเกิด <i class="icon icon-lock icon-ebisu" data-behavior="tooltip" aria-label="ส่วนตัว"></i> </label>
											<div class="col-sm-9">

												<div class="select">
													<select id="user_birthdate_2i" name="user[birthdate(2i)]">
														<option value="1">มกราคม</option>
														<option value="2">กุมภาพันธ์</option>
														<option value="3">มีนาคม</option>
														<option value="4">เมษายน</option>
														<option value="5">พฤษภาคม</option>
														<option selected="selected" value="6">มิถุนายน</option>
														<option value="7">กรกฎาคม</option>
														<option value="8">สิงหาคม</option>
														<option value="9">กันยายน</option>
														<option value="10">ตุลาคม</option>
														<option value="11">พฤศจิกายน</option>
														<option value="12">ธันวาคม</option>
													</select>

												</div>
												<div class="select">
													<select id="user_birthdate_3i" name="user[birthdate(3i)]">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option selected="selected" value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
													</select>

												</div>
												<div class="select">
													<select id="user_birthdate_1i" name="user[birthdate(1i)]">
														<option value="1998">1998</option>
														<option value="1997">1997</option>
														<option value="1996">1996</option>
														<option value="1995">1995</option>
														<option value="1994">1994</option>
														<option selected="selected" value="1993">1993</option>
														<option value="1992">1992</option>
														<option value="1991">1991</option>
														<option value="1990">1990</option>
														<option value="1989">1989</option>
														<option value="1988">1988</option>
														<option value="1987">1987</option>
														<option value="1986">1986</option>
														<option value="1985">1985</option>
														<option value="1984">1984</option>
														<option value="1983">1983</option>
														<option value="1982">1982</option>
														<option value="1981">1981</option>
														<option value="1980">1980</option>
														<option value="1979">1979</option>
														<option value="1978">1978</option>
														<option value="1977">1977</option>
														<option value="1976">1976</option>
														<option value="1975">1975</option>
														<option value="1974">1974</option>
														<option value="1973">1973</option>
														<option value="1972">1972</option>
														<option value="1971">1971</option>
														<option value="1970">1970</option>
														<option value="1969">1969</option>
														<option value="1968">1968</option>
														<option value="1967">1967</option>
														<option value="1966">1966</option>
														<option value="1965">1965</option>
														<option value="1964">1964</option>
														<option value="1963">1963</option>
														<option value="1962">1962</option>
														<option value="1961">1961</option>
														<option value="1960">1960</option>
														<option value="1959">1959</option>
														<option value="1958">1958</option>
														<option value="1957">1957</option>
														<option value="1956">1956</option>
														<option value="1955">1955</option>
														<option value="1954">1954</option>
														<option value="1953">1953</option>
														<option value="1952">1952</option>
														<option value="1951">1951</option>
														<option value="1950">1950</option>
														<option value="1949">1949</option>
														<option value="1948">1948</option>
														<option value="1947">1947</option>
														<option value="1946">1946</option>
														<option value="1945">1945</option>
														<option value="1944">1944</option>
														<option value="1943">1943</option>
														<option value="1942">1942</option>
														<option value="1941">1941</option>
														<option value="1940">1940</option>
														<option value="1939">1939</option>
														<option value="1938">1938</option>
														<option value="1937">1937</option>
														<option value="1936">1936</option>
														<option value="1935">1935</option>
														<option value="1934">1934</option>
														<option value="1933">1933</option>
														<option value="1932">1932</option>
														<option value="1931">1931</option>
														<option value="1930">1930</option>
														<option value="1929">1929</option>
														<option value="1928">1928</option>
														<option value="1927">1927</option>
														<option value="1926">1926</option>
														<option value="1925">1925</option>
														<option value="1924">1924</option>
														<option value="1923">1923</option>
														<option value="1922">1922</option>
														<option value="1921">1921</option>
														<option value="1920">1920</option>
														<option value="1919">1919</option>
														<option value="1918">1918</option>
														<option value="1917">1917</option>
														<option value="1916">1916</option>
													</select>

												</div>

												<div class="text-muted space-top-1">
													วันมหัศจรรย์ที่คุณลืมตาขึ้นมาดูโลกใบนี้ เราใช้ข้อมูลนี้สำหรับการวิเคราะห์และจะไม่แบ่งปันข้อมูลนี้กับผู้ใช้คนอื่น
												</div>
											</div>
										</div>

										<div class="row row-condensed space-4">
											<label class="text-right col-sm-3" for="user_email"> อีเมล์แอดเดรส <i class="icon icon-lock icon-ebisu" data-behavior="tooltip" aria-label="ส่วนตัว"></i> </label>
											<div class="col-sm-9">

												<input id="user_email" name="user[email]" size="30" type="text" value="adthasid@hotmail.com">

												<div class="text-muted space-top-1">
													เราจะไม่แบ่งปันอีเมลแอดเดรสส่วนตัวของคุณกับผู้ใช้คนอื่นบน Rentcnd <a href="/help/article/694" target="blank">เรียนรู้เพิ่มเติม</a>
												</div>
											</div>
										</div>

										<div class="row row-condensed space-4">
											<label class="text-right col-sm-3" for="user_phone"> เบอร์โทรศัพท์ <i class="icon icon-lock icon-ebisu" data-behavior="tooltip" aria-label="ส่วนตัว"></i> </label>
											<div class="col-sm-9">

												<div class="clearfix" id="phone-number">
													<div class="phone-numbers-container has-phone-numbers">
														<div class="phone-numbers-hide-during-verify">
															<div class="no-phone-numbers">
																<p>
																	ไม่ได้ใส่หมายเลขโทรศัพท์
																</p>
															</div>
															<table class="phone-numbers-table" cellspacing="0" cellpadding="0">
																<tbody>
																	<tr class="verified" data-id="42546355" data-number="66922728921" data-country="TH">
																		<th class="edit-profile-confirmable-field__label"> +66 *** *** 921 </th>
																		<td><span class="verified"> <i class="icon icon-ok"></i> ยืนยันแล้ว </span><span class="unverified"> <a class="verify button-steel btn gray" href="#" rel="sms"> ยืนยันผ่าน SMS </a> <a class="verify button-steel btn gray" href="#" rel="call"> ยืนยันผ่านการโทร </a> </span></td>
																		<td class="remove-container"><a href="https://th.Rentcnd.com/phone_numbers/delete/42546355" data-authenticity-token="V4$.Rentcnd.com$YP4tThly0ng$c_NfIUJHtitKZ29ST6PxJjkEiWohugZMfz-VmjAITgU=" class="remove" title="ลบ"> <i class="icon icon-remove"></i> </a></td>
																	</tr>
																</tbody>
															</table>

															<a class="add link-icon" href="#"> <i class="icon icon-add"></i> <span class="link-icon__text"> เพิ่มหมายเลขโทรศัพท์ </span> </a>
														</div>

														<div class="phone-number-verify-widget">
															<p class="pnaw-verification-error"></p>
															<div class="pnaw-step1">
																<div class="phone-number-input-widget" id="phone-number-input-widget-3ffc68ab">
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
																<div class="phone-number-input-widget" id="phone-number-input-widget-40ec2457">
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
																<div class="phone-number-input-widget" id="phone-number-input-widget-d277ee86">
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
																	<a class="btn btn-primary" href="#" rel="verify" data-old-phone-number="66922728921"> ตรวจสอบความถูกต้อง </a>
																	<a class="cancel" rel="cancel" href="#"> ยกเลิก </a>
																</div>
																<p class="cancel-message">
																	หากมาไม่ถึง ให้คลิกยกเลิกและลองใหม่
																</p>
															</div>
														</div>

													</div>

												</div>

												<div class="text-muted space-top-1">
													ระบบจะแบ่งปันข้อมูลส่วนนี้ก็ต่อเมื่อเมื่อคุณได้ยืนยันการจองกับผู้ใช้ Rentcnd อีกคนแล้วเท่านั้น เราเชื่อว่าการทำเช่นนี้ทำให้ทุกฝ่ายติดต่อกันได้
												</div>
											</div>
										</div>

										<div class="row row-condensed space-4">
											<label class="text-right col-sm-3" for="user_profile_info_current_city"> คุณอยู่ที่ไหน </label>
											<div class="col-sm-9">

												<input id="user_profile_info_current_city" name="user_profile_info[current_city]" placeholder="เช่น ปารีส ฝรั่งเศส / บรูกลิน นิวยอร์ค / ชิคาโก อิลลินอยส์" size="30" type="text" value="Bangkok, Thailand">

											</div>
										</div>

										<div class="row row-condensed space-4">
											<label class="text-right col-sm-3" for="user_profile_info_about"> บรรยายตัวคุณ </label>
											<div class="col-sm-9">
												<textarea cols="40" id="user_profile_info_about" name="user_profile_info[about]" rows="5"></textarea>																																				
												





												<div class="text-muted space-top-1">
													Rentcnd สร้างมาจากพื้นฐานความสัมพันธ์ ช่วยให้คนอื่นได้รู้จักคุณ
													<br>
													<br>
													บอกเกี่ยวกับสิ่งที่คุณชอบ อะไรคือ 5 สิ่งที่คุณขาดไม่ได้ แบ่งปันจุดหมายปลายทางการเดินทาง หนังสือ ภาพยนตร์ รายการทีวี ดนตรี และอาหารโปรดของคุณ
													<br>
													<br>
													บอกว่าการมีคุณเป็นผู้ใช้บริการหรือเจ้าของรถเช่าเป็นอย่างไร รูปแบบการเดินทางของคุณเป็นอย่างไร การเป็นเจ้าของรถเช่าบน Rentcnd เป็นอย่างไร
													<br>
													<br>
													เล่าเรื่องของคุณให้ฟัง คุณมีคติพจน์ในการใช้ชีวิตหรือไม่
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="panel space-4">
									<div class="panel-header">
										ตัวเลือกเพิ่มเติม
									</div>
									<div class="panel-body">
										<div class="row row-condensed space-4">
											<label class="text-right col-sm-3" for="user_languages"> ภาษา </label>
											<div class="col-sm-9">

												<div class="space-top-1"></div>
												<div class="multiselect languages" data-select_dialog_url="https://th.Rentcnd.com/users/languages_multiselect">
													<div class="space-1">

													</div>
													<div class="none text-muted space-1">
														ไม่มี
													</div>
													<a class="link-icon multiselect-add-more" href="#"> <i class="icon icon-add"></i> <span class="link-icon__text"> เพิ่มอีก </span> </a>
													<input id="user_languages" name="user[languages]" type="hidden" value="">
													<span class="template hide multiselect-option" data-key="%KEY%"> <span class="btn btn-small space-1"> %VALUE%
															&nbsp; <small> <a href="#" class="text-normal"> <i class="x icon icon-remove" title="ลบที่เลือก"></i> </a> </small> </span>&nbsp; </span>

												</div>

												<div class="text-muted space-top-1">
													เพิ่มภาษาใดก็ตามที่คนอื่นพูดกับคุณได้บน Rentcnd
												</div>
											</div>
										</div>

										<div class="row row-condensed space-4">
											<label class="text-right col-sm-3" for="user_emergency_contact_title"> ผู้ติดต่อฉุกเฉิน <i class="icon icon-lock icon-ebisu" data-behavior="tooltip" aria-label="ส่วนตัว"></i> </label>
											<div class="col-sm-9">

												<div class="space-top-1">
													<a id="emergency_contact_add" class="emergency_contact_trigger" href="#"> <i class="icon icon-add"></i> เพิ่มผู้ติดต่อ </a>
												</div>

												<div class="text-muted space-top-1">
													แจ้งข้อมูลติดต่อที่ไว้ใจได้แก่ทีมประสบการณ์ลูกค้าเพื่อให้เราแจ้งเตือนได้ในสถานการณ์ฉุกเฉิน
												</div>
											</div>
										</div>

										<div id="emergency_contact_popout" style="display:none">
											<div class="row row-condensed space-4">
												<label class="text-right col-sm-3" for="user_emergency_contact_name"> ชื่อ </label>
												<div class="col-sm-9">

													<input id="user_emergency_contact_name" name="user_emergency_contact[name]" size="30" type="text">

												</div>
											</div>
											<div class="row row-condensed space-4">
												<label class="text-right col-sm-3" for="user_emergency_contact_phone"> โทรศัพท์ </label>
												<div class="col-sm-9">

													<input id="user_emergency_contact_phone" name="user_emergency_contact[phone]" size="30" type="text">

												</div>
											</div>
											<div class="row row-condensed space-4">
												<label class="text-right col-sm-3" for="user_emergency_contact_email"> อีเมล์ </label>
												<div class="col-sm-9">

													<input id="user_emergency_contact_email" name="user_emergency_contact[email]" size="30" type="text">

												</div>
											</div>
											<div class="row row-condensed space-4">
												<label class="text-right col-sm-3" for="user_emergency_contact_relationship"> ความสัมพันธ์ </label>
												<div class="col-sm-9">

													<input id="user_emergency_contact_relationship" name="user_emergency_contact[relationship]" size="30" type="text">

												</div>
											</div>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-primary btn-large">
									บันทึก
								</button>
							</form>

							<div class="modal reauth-modal" role="dialog" aria-hidden="true">
								<div class="modal-table">
									<div class="modal-cell">
										<div class="modal-content signup">

											<div id="reauthenticate_container">
												<form accept-charset="UTF-8" action="?" id="reauth_form" method="post">
													<div style="margin:0;padding:0;display:inline">
														<input name="utf8" type="hidden" value="✓">
														<input name="authenticity_token" type="hidden" value="V4$.Rentcnd.com$YP4tThly0ng$c_NfIUJHtitKZ29ST6PxJjkEiWohugZMfz-VmjAITgU=">
													</div>
													<h3 class="panel-header panel-header-gray"> ยืนยันรหัสผ่านเพื่อดำเนินการต่อ </h3>
													<div class="panel-header alert alert-header alert-with-icon alert-danger" hidden="">
														<i class="icon icon-alert-alt alert-icon"></i>
														<span class="reauth-error"></span>
													</div>
													<div class="panel-padding panel-body">
														<div class="textInput text-input-container" id="inputEmail">
															<input name="id" type="hidden" value="63856890">
															<input class="decorative-input" id="confirm_password" name="password" placeholder="รหัสผ่าน" type="password">
															<div class="clearfix control-group space-top-2 text-right">
																<a href="/forgot_password?email=adthasid%40hotmail.com" class="forgot-password">ลืมรหัสผ่านใช่ไหม</a>
															</div>
														</div>
													</div>
													<div class="panel-footer">
														<button type="submit" class="btn btn-primary">
															ยืนยันรหัสผ่าน
														</button>
													</div>
												</form>
											</div>

										</div>
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
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>

</html>
