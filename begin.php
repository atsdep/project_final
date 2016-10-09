<html lang="th" xmlns:fb="http://ogp.me/ns/fb#">
	<!--<![endif]-->
	<head>
		
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css">

		<!--[if lte IE 9]>
		<script src="https://a1.muscache.com/airbnb/static/packages/libs_ie_support.bundle-f0aa9d7f48b220729e95.js" type="text/javascript"></script>
		<![endif]-->

	</head>
	<body class="with-new-header modal-open" style="top: 0px;">

		<!-- ver. a6418f13bc3fd751092b5cfd39ffe5bf99cddcb6 -->
		<div class="modal signup-modal-container show" role="dialog" aria-hidden="false" aria-labelledby="signup-modal-content" aria-describedby="signup-modal-content" tabindex="-1">
			<div class="modal-table">
				<div class="modal-cell">
					<div class="modal-content signup signup-login-form__container" id="signup-modal-content">

						<div class="modal-header panel-header show-sm">
							ลงทะเบียน
							<a href="#" class="modal-close" data-behavior="modal-close"></a>
						</div>

						<div class="alert alert-with-icon alert-error alert-header panel-header hidden-element notice" id="notice">
							<i class="icon alert-icon icon-alert-alt"></i>

						</div>

						<div class="panel-padding panel-body signup-login-form__extra-panel-body first">

							<div class="social-buttons">

								<a href="/oauth_connect?from=facebook_signup&amp;service=facebook" class="btn icon-btn create-using-facebook btn-block signup-login-form__btn-xl space-1 btn-large btn-facebook js-facebook-auth"> <span class="icon-container"> <i class="icon icon-facebook"></i> </span> <span class="text-container"> ลงทะเบียนโดยใช้ Facebook </span> </a>

								<a href="/oauth_connect?from=google_signup&amp;service=google" class="btn icon-btn create-using-google btn-block signup-login-form__btn-xl space-1 btn-large btn-google js-google-auth"> <!--?xml version="1.0" encoding="UTF-8" standalone="no"?-->
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="icon icon-google-image">
									<defs></defs>
									<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<g id="super-g">
											<path d="M9,3.48 C10.69,3.48 11.83,4.21 12.48,4.82 L15.02,2.34 C13.46,0.89 11.43,0 9,0 C5.48,0 2.44,2.02 0.96,4.96 L3.87,7.22 C4.6,5.05 6.62,3.48 9,3.48 L9,3.48 L9,3.48 Z" id="Shape" fill="#EA4335"></path>
											<path d="M17.64,9.2 C17.64,8.46 17.58,7.92 17.45,7.36 L9,7.36 L9,10.7 L13.96,10.7 C13.86,11.53 13.32,12.78 12.12,13.62 L14.96,15.82 C16.66,14.25 17.64,11.94 17.64,9.2 L17.64,9.2 L17.64,9.2 Z" id="Shape" fill="#4285F4"></path>
											<path d="M3.88,10.78 C3.69,10.22 3.58,9.62 3.58,9 C3.58,8.38 3.69,7.78 3.87,7.22 L0.96,4.96 C0.35,6.18 0,7.55 0,9 C0,10.45 0.35,11.82 0.96,13.04 L3.88,10.78 L3.88,10.78 L3.88,10.78 Z" id="Shape" fill="#FBBC05"></path>
											<path d="M9,18 C11.43,18 13.47,17.2 14.96,15.82 L12.12,13.62 C11.36,14.15 10.34,14.52 9,14.52 C6.62,14.52 4.6,12.95 3.88,10.78 L0.97,13.04 C2.45,15.98 5.48,18 9,18 L9,18 L9,18 Z" id="Shape" fill="#34A853"></path>
											<path d="M0,0 L18,0 L18,18 L0,18 L0,0 L0,0 Z" id="Shape"></path>
										</g>
									</g>

									<image class="google-logo-svg-fallback" src="https://a1.muscache.com/airbnb/static/signinup/google_icon_2x-745c2280e5004d4c90e3ca4e60e3f677.png" xlink:href=""></image>
								</svg> <span class="text-container"> ลงทะเบียนโดยใช้ Google </span> </a>

							</div>

							<div class="text-center social-links hide">
								สมัครด้วย <a href="/oauth_connect?from=facebook_email_signup&amp;service=facebook" class="js-facebook-auth">Facebook</a> หรือ <a href="/oauth_connect?from=google_email_signup&amp;service=google" class="js-google-auth">Google</a>
							</div>

							<div class="signup-or-separator">
								<span class="h6 signup-or-separator--text">หรือ</span>
								<hr>
							</div>

							<!--[if (gt IE 8)|!(IE)]><!-->
							<div class="text-center">
								<a href="/signup_login?sm=2" class="create-using-email btn-block signup-login-form__btn-xl space-2 btn btn-primary btn-block signup-login-form__btn-xl btn-large large icon-btn" id="create_using_email_button"> <i class="icon icon-envelope"></i> ลงทะเบียนโดยใช้อีเมล </a>
							</div>
							<!--<![endif]-->
							<!--[if (lte IE 8) & IE]>
							<div class="text-center">
							<a href="/signup_login?sm=2" class="create-using-email btn-block signup-login-form__btn-xl space-2 btn btn-primary btn-block signup-login-form__btn-xl btn-large large icon-btn" id="create_using_email_button">
							<i class="icon icon-envelope"></i>
							ลงทะเบียนโดยใช้อีเมล
							</a>  </div>
							<![endif]-->

							<form accept-charset="UTF-8" action="/create" class="signup-form" data-action="Signup" id="user_new" method="post">
								<div style="margin:0;padding:0;display:inline">
									<input name="utf8" type="hidden" value="✓">
									<input name="authenticity_token" type="hidden" value="V4$.airbnb.com$EwXLq5mn5SA$bd5FMBKjMw-ttyknUYBGoj0QjwJN9h4xmC9CfAFvE5s=">
								</div>
								<div class="signup-form-fields  hide">
									<input id="from" name="from" type="hidden" value="email_signup">
									<input id="referral_signup_default_redirect" name="referral_signup_default_redirect" type="hidden" value="false">

									<div class="control-group space-1" id="inputFirst">
										<input type="text" name="user[first_name]" id="signup_first_name" placeholder="ชื่อแรก" class="decorative-input" value="">
									</div>

									<div class="control-group space-1" id="inputLast">
										<input type="text" name="user[last_name]" id="signup_last_name" placeholder="ชื่อสกุล" class="decorative-input inspectletIgnore" value="">
									</div>

									<div class="control-group space-1" id="inputEmail">
										<input type="email" name="user[email]" placeholder="อีเมล์แอดเดรส" value="" class="decorative-input inspectletIgnore">
										<input class="empty_field_to_prevent_auto_fill">
									</div>

									<div class="control-group space-1" id="inputPassword">
										<input type="password" class="empty_field_to_prevent_auto_fill">
										<input type="password" id="user_password" data-hook="user_password" name="user[password]" placeholder="รหัสผ่าน" class="decorative-input inspectletIgnore">
										<div data-hook="password-strength" class="password-strength hide"></div>
									</div>

									<div class="control-group space-top-3 space-1">

										<strong>วันเกิด</strong>
										<strong id="birthday-signup-form-question-trigger"> <i class="icon icon-question"></i> </strong>

									</div>

									<div class="control-group row row-condensed space-2">
										<div class="col-sm-5">
											<div class="select va-container-h">
												<select id="user_birthday_month" name="user[birthday_month]">
													<option value="">เดือน</option>
													<option value="1">มกราคม</option>
													<option value="2">กุมภาพันธ์</option>
													<option value="3">มีนาคม</option>
													<option value="4">เมษายน</option>
													<option value="5">พฤษภาคม</option>
													<option value="6">มิถุนายน</option>
													<option value="7">กรกฎาคม</option>
													<option value="8">สิงหาคม</option>
													<option value="9">กันยายน</option>
													<option value="10">ตุลาคม</option>
													<option value="11">พฤศจิกายน</option>
													<option value="12">ธันวาคม</option>
												</select>

											</div>
										</div>
										<div class="col-sm-3">
											<div class="select va-container-h">
												<select id="user_birthday_day" name="user[birthday_day]">
													<option value="">วัน</option>
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
													<option value="23">23</option>
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
										</div>
										<div class="col-sm-4">
											<div class="select va-container-h">
												<select id="user_birthday_year" name="user[birthday_year]">
													<option value="">ปี</option>
													<option value="2016">2016</option>
													<option value="2015">2015</option>
													<option value="2014">2014</option>
													<option value="2013">2013</option>
													<option value="2012">2012</option>
													<option value="2011">2011</option>
													<option value="2010">2010</option>
													<option value="2009">2009</option>
													<option value="2008">2008</option>
													<option value="2007">2007</option>
													<option value="2006">2006</option>
													<option value="2005">2005</option>
													<option value="2004">2004</option>
													<option value="2003">2003</option>
													<option value="2002">2002</option>
													<option value="2001">2001</option>
													<option value="2000">2000</option>
													<option value="1999">1999</option>
													<option value="1998">1998</option>
													<option value="1997">1997</option>
													<option value="1996">1996</option>
													<option value="1995">1995</option>
													<option value="1994">1994</option>
													<option value="1993">1993</option>
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
													<option value="1915">1915</option>
													<option value="1914">1914</option>
													<option value="1913">1913</option>
													<option value="1912">1912</option>
													<option value="1911">1911</option>
													<option value="1910">1910</option>
													<option value="1909">1909</option>
													<option value="1908">1908</option>
													<option value="1907">1907</option>
													<option value="1906">1906</option>
													<option value="1905">1905</option>
													<option value="1904">1904</option>
													<option value="1903">1903</option>
													<option value="1902">1902</option>
													<option value="1901">1901</option>
													<option value="1900">1900</option>
													<option value="1899">1899</option>
													<option value="1898">1898</option>
													<option value="1897">1897</option>
													<option value="1896">1896</option>
												</select>

											</div>
										</div>
									</div>

									<label class="pull-left checkbox">
										<input name="user_profile_info[receive_promotional_email]" type="hidden" value="0">
										<input checked="checked" id="user_profile_info_receive_promotional_email" name="user_profile_info[receive_promotional_email]" type="checkbox" value="1">
									</label>
									<label for="user_profile_info_receive_promotional_email" class="checkbox"> ฉันต้องการรับคูปอง โปรโมชัน แบบสำรวจ และข้อมูลล่าสุดทางอีเมลเกี่ยวกับ Airbnb และพันธมิตร </label>

									<div class="space-2 space-top-2">
										<div>
											<div class="space-2">
												<small> การสมัครแสดงว่าฉันยอมรับ <a href="/terms?source=tos" target="_blank">เงื่อนไขการให้บริการ</a> <a href="/terms/payments_terms?source=tos" target="_blank">เงื่อนไขการให้บริการการชำระเงิน</a> <a href="/terms/privacy_policy?source=tos" target="_blank">นโยบายความเป็นส่วนตัว</a> <a href="/terms/guest_refund_policy?source=tos" target="_blank">นโยบายการคืนเงินให้ผู้เข้าพัก</a> และ <a href="/terms/host_guarantee?source=tos" target="_blank">เงื่อนไขการรับประกันเจ้าของที่พัก</a> ของ Airbnb </small>
											</div>
											<div>
												<small> ข้าพเจ้ายังยอมรับ <a href="/terms/nondiscrimination_policy?source=tos" target="_blank">นโยบายต่อต้านการแบ่งแยก</a> ของ Airbnb และช่วยชุมชนของเราสร้างโลกที่ผู้คนจากทุกพื้นเพรู้สึกเป็นส่วนหนึ่งและได้รับความเคารพ </small>
											</div>
										</div>

									</div>

									<button type="submit" class="btn btn-primary btn-block signup-login-form__btn-xl btn-large">
										สมัคร
									</button>
								</div>
							</form>

							<div id="tos_outside" class="space-top-3">
								<div>
									<div class="space-2">
										<small> การสมัครแสดงว่าฉันยอมรับ <a href="/terms?source=tos" target="_blank">เงื่อนไขการให้บริการ</a> <a href="/terms/payments_terms?source=tos" target="_blank">เงื่อนไขการให้บริการการชำระเงิน</a> <a href="/terms/privacy_policy?source=tos" target="_blank">นโยบายความเป็นส่วนตัว</a> <a href="/terms/guest_refund_policy?source=tos" target="_blank">นโยบายการคืนเงินให้ผู้เข้าพัก</a> และ <a href="/terms/host_guarantee?source=tos" target="_blank">เงื่อนไขการรับประกันเจ้าของที่พัก</a> ของ Airbnb </small>
									</div>
									<div>
										<small> ข้าพเจ้ายังยอมรับ <a href="/terms/nondiscrimination_policy?source=tos" target="_blank">นโยบายต่อต้านการแบ่งแยก</a> ของ Airbnb และช่วยชุมชนของเราสร้างโลกที่ผู้คนจากทุกพื้นเพรู้สึกเป็นส่วนหนึ่งและได้รับความเคารพ </small>
									</div>
								</div>

							</div>
						</div>

						<div class="panel-body js-login-footer signup-login-form__extra-panel-body">
							<div class="clearfix">
								<span class="signup-login-form__switch-copy"> มีบัญชีผู้ใช้ Airbnb อยู่แล้วใช่ไหม </span>
								<a href="/login?" class="modal-link link-to-login-in-signup btn btn-default signup-login-form__btn-rausch-border signup-login-form__btn-font-normal signup-login-form__switch-button" data-modal-href="/login_modal?" data-modal-type="login"> เข้าสู่ระบบ </a>
							</div>
						</div>

						<form accept-charset="UTF-8" action="/authenticate" class="hide hidden-element in_modal" id="facebook_form" method="post">
							<div style="margin:0;padding:0;display:inline">
								<input name="utf8" type="hidden" value="✓">
								<input name="authenticity_token" type="hidden" value="V4$.airbnb.com$EwXLq5mn5SA$bd5FMBKjMw-ttyknUYBGoj0QjwJN9h4xmC9CfAFvE5s=">
							</div>

						</form>

					</div>
				</div>
			</div>
		</div>
	</body>
</html>