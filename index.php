<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
require ("controllers/select_member.php");
?>
<!DOCTYPE html>
<html lang="th">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>รถเช่าพร้อมคนขับ กับ Rentcnd</title>
		<meta name="description" content="">
		<meta name="author" content="adthasid">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- css -->
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom3.css">
		<link rel="stylesheet" href="css/custom.css">
		
		<!-- <link rel="stylesheet" href="css/studymain.css"> -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/adthasid.css">
		
		<!-- <link rel="stylesheet" href="css/studyOne.css">
		<link rel="stylesheet" href="css/studyTwo.css"> -->
		<script src="dist/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
		
		
		
		

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	</head>
	
	<body class="">
		<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Logo</a>
				</div>

				<div class="collapse navbar-collapse" id="header">
					<ul class="nav navbar-nav navbar-right">
						<li class="">
							<a href="index.php" class="visible-xs">หน้าแรก</a>
						</li>
						<li class="">
							<a href="start.php" class="visible-xs">สร้างรายได้จากการขับรถ</a>
							<a href="start.php" class="btn hidden-xs btn-primary btn-new">สร้างรายได้จากการขับรถ</a>
						</li>
						<li class="">
							<a href="#">ความช่วยเหลือ</a>
						</li>

						<?php
						if(!isset($_SESSION['login'])){

						?>

						<li class="">
							<a href="#" data-toggle="modal" data-target="#modal-register">ลงทะเบียน</a>
						</li>

						<li class="">
							<a href="#" data-toggle="modal" data-target="#modal-login">เข้าสู่่ระบบ </a>
						</li>

						<?php
						} else {
						?>
						<li class="">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" ><?php echo $result_mem['member_firstname'] ?></a>
							<ul class="dropdown-menu">
								<li>
									<a href="profile.php">แก้ไขข้อมูลส่วนตัว</a>
								</li>
								<li>
									<a href="my_reservations.php">ข้อมูลการจอง</a>
								</li>
								<li>
									<a href="controllers/logout.php">ออกจากระบบ</a>
								</li>
							</ul>
						</li>
						<?php
						}
						?>

						<!-- <li class="">
						<a href="#" class=".visible-xs-*">ค้นหา</a>
						</li> -->
					</ul>
				</div>

			</div>
			<!-- container-fluid -->
		</nav>
		
		<div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header panel-header show-sm">
						ลงทะเบียน
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="text-center">
							<a data-toggle="modal" data-target="#register-email" data-dismiss="modal" aria-label="Close" class="btn icon-btn create-using-facebook btn-block signup-login-form__btn-xl space-1 btn-large btn-signin js-facebook-auth" 
							id="create_using_email_button"> <i class="fa fa-envelope-o hide-sm"></i> ลงทะเบียนโดยใช้อีเมล </a>
						</div>
						<div class="signup-or-separator">
							<span class="h6 signup-or-separator--text">หรือ</span>
							<hr>
						</div>
						<div class="social-buttons">
							<a href="" class="btn icon-btn create-using-facebook btn-block signup-login-form__btn-xl space-1 btn-large btn-facebook js-facebook-auth"> 
								<span class="icon-container"> <i class="fa fa-facebook hide-sm"></i> </span> <span class="text-container"> ลงทะเบียนโดยใช้ Facebook </span> </a>
						</div>
					</div>
					<div class="panel-body js-login-footer signup-login-form__extra-panel-body">
						<div class="clearfix">
							<span class="signup-login-form__switch-copy"> มีบัญชีผู้ใช้ Rentcnd อยู่แล้วใช่ไหม </span>
							<a href="/login?" class="modal-link link-to-login-in-signup btn btn-default pull-right" data-toggle="modal" data-target="#modal-login" data-dismiss="modal" aria-label="Close"> เข้าสู่ระบบ </a>
						</div>
					</div>

				</div>
			</div>
		</div>
		
		
		<div  class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header panel-header show-sm">
						เข้าสู่ระบบ
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="social-buttons">
							<a href="" class="btn icon-btn create-using-facebook btn-block signup-login-form__btn-xl space-1 btn-large btn-facebook js-facebook-auth"> 
								<span class="icon-container"> <i class="fa fa-facebook hide-sm"></i> </span> <span class="text-container"> เข้าสู่ระบบด้วย  Facebook </span> </a>
						</div>
						<div class="signup-or-separator">
							<span class="h6 signup-or-separator--text">หรือ</span>
							<hr>
						</div>
						<form>
							<div class="control-group space-1" id="inputEmail">
								<input id="login_email" type="email"  placeholder="อีเมล์แอดเดรส" value="" class="decorative-input inspectletIgnore">
								<input class="empty_field_to_prevent_auto_fill">
							</div>
							<div class="control-group space-1" id="inputPassword">
								<input type="password" id="login_password"  placeholder="รหัสผ่าน" class="decorative-input inspectletIgnore">
								
							</div>
							<div class="row">
								<button id="btnLogin" type="button" class="btn btn-signin btn-block signup-login-form__btn-xl btn-large">
									เข้าสู่ระบบ
								</button>
								<input id="return" type="hidden" value="<?php if(isset($_GET['login'])){echo $_GET['login'];} ?>">
							</div>
						</form>
					</div>
					<div class="panel-body js-login-footer signup-login-form__extra-panel-body">
						<div class="clearfix">
							<span class="signup-login-form__switch-copy"> ไม่มีบัญชีใช่ไหม </span>
							<a href="/register?" class="modal-link link-to-login-in-signup btn btn-default pull-right" data-toggle="modal" data-target="#modal-register" data-dismiss="modal" aria-label="Close"> ลงทะเบียน </a>
						</div>
					</div>

				</div>
			</div>
		</div>
		
		<div class="modal fade" id="register-email" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header panel-header show-sm">
						ลงทะเบียน
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="text-center social-links">
   								 ลงทะเบียนด้วย <a href="" class="js-facebook-auth">Facebook</a>
  						</div>
						<div class="signup-or-separator">
							<span class="h6 signup-or-separator--text">หรือ</span>
							<hr>
						</div>
						<form accept-charset="UTF-8" id="user-new" method="post">
							<div class="control-group space-1" id="inputFirst">
								<input type="text" name="user[first_name]" id="signup_first_name" placeholder="ชื่อแรก" class="decorative-input" value="">
							</div>
							<div class="control-group space-1" id="inputLastName">
								<input type="text" name="user[last_name]" id="signup_last_name" placeholder="ชื่อสกุล" class="decorative-input inspectletIgnore" value="">
							</div>
							<div class="control-group space-1" id="inputEmail">
								<input id="signup_email" type="email" name="user[email]" placeholder="อีเมล์แอดเดรส" value="" class="decorative-input inspectletIgnore">
								<input class="empty_field_to_prevent_auto_fill">
							</div>
							<div class="control-group space-1" id="inputPassword">
								<input type="password" class="empty_field_to_prevent_auto_fill">
								<input type="password" id="user_password"  name="user[password]" placeholder="รหัสผ่าน" class="decorative-input inspectletIgnore">
								<div data-hook="password-strength" class="password-strength hide"></div>
							</div>
							<div class="control-group space-top-3 space-1">

								<strong>วันเกิด</strong>
								<strong id="birthday-signup-form-question-trigger"> <i class="fa fa-question-circle" aria-hidden="true"></i> </strong>

							</div>
							<div class="control-group row row-condensed space-2">
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
							<button id="btnRegister" type="button" class="btn btn-signin btn-block signup-login-form__btn-xl btn-large">
								สมัคร
							</button>
						</form>
					</div>
					<div class="panel-body js-login-footer signup-login-form__extra-panel-body">
						<div class="clearfix">
							<span class="signup-login-form__switch-copy"> มีบัญชีผู้ใช้ Rentcnd อยู่แล้วใช่ไหม </span>
							<a href="#" class="modal-link link-to-login-in-signup btn btn-default pull-right" data-toggle="modal" data-target="#modal-login" data-dismiss="modal" aria-label="Close"> เข้าสู่ระบบ </a>
						</div>
					</div>

				</div>
			</div>
		</div>

		<header class="intro-header" style="background-image: url('img/header-bg-1.jpg')">
			<div class="	">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
						<div class="site-heading">
							<h1 class="h1 text-jumbo">รถเช่าพร้อมคนขับ</h1>
							<h4 class="h4 text-contrast space-4">ให้คุณเลือกเช่ารถพร้อมคนขับรถ ทั่วประเทศ 77 จังหวัด </h4>
							<a href="#" class="btn hidden-xs btn-contrast btn-lg btn-semi-transparent">วิธีใช้งาน Rentcnd</a>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="panel-dark host-banner host-banner--fade-in space-top-8 no-margin">
			<div class="page-container-responsive">
				<div class="panel host-banner--panel-no-border">
					<div class="row">
						<div class="col-sm-8 hidden-xs">
							<div class="host-banner__media-container">
								<a href="#" class="link-reset"> <img class="img-auto" src="img/banner1.jpg"> </a>
							</div>
						</div>
						<div class="col-md-4 host-banner__body">
							<div class="media-cover media-cover-dark background-cover host-banner__welcome-guest visible-xs"></div>
							<div class="va-container va-container-v va-container-h">
								<div class="va-middle host-banner__content--cta-right">
									<div class="host-banner__title space-4">
										<strong> การให้เช่ารถพร้อมบริการขับ </strong>
									</div>
									<div class="host-banner__subtitle space-4">
										สร้างรายได้จากการขับรถของตัวเอง
									</div>
									<a href="start.php" class="link-reset host-banner__btn"> <strong class="btn btn-host btn-large btn-block host-banner__cta"> ลงประกาศ</strong> </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel panel-dark no-border-top no-border-bottom no-margin">
			<div id="discovery-container">
				<div class="discovery-section page-container-responsive page-container-no-padding">
					<div class="section-intro text-center row-space-6 ">
						<h2 class="row-space-1"><strong>เลือกประเภทรถยนต์</strong></h2>
						<p class="text-lead">
							ค้นหารถยนต์ตามที่คุณต้องการใช้บริการ
						</p>
					</div>
					<div class="discovery-tiles">
						<div class="homepage-mudule">
							<div class="row carousel-item">
								<div class="col-lg-3 rm-padding-sm col-md-12">
									<div class="discovery-card rm-padding-sm row-space-4" style="background-image: url('img/car.jpg')">
										<a href="#" class="link-reset">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> รถเก๋ง </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								<div class="col-lg-3 rm-padding-sm col-md-6">
									<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " style="background-image: url('img/van.jpg')">
										<a href="#" class="link-reset" data-hook="discovery-card" data-id="Kuala Lumpur">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> รถตู้ </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								<div class="col-lg-3 rm-padding-sm col-md-6">
									<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " style="background-image: url('img/suv.jpg')">
										<a href="#" class="link-reset" data-hook="discovery-card" data-id="Kuala Lumpur">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h20 text-center">
													<strong> รถอเนกประสงค์ </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
								<div class="col-lg-3 rm-padding-sm col-md-6">
									<div class="discovery-card rm-padding-sm row-space-4 darken-on-hover " style="background-image: url('img/4.jpg')">
										<a href="#" class="link-reset" data-hook="discovery-card" data-id="Kuala Lumpur">
										<div class="va-container va-container-v va-container-h">
											<div class="va-middle text-center text-contrast">
												<div class="h2">
													<strong> รถกระบะ </strong>
												</div>
											</div>
										</div> </a>
									</div>

								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-lg-4 col-lg-offset-4 row-space-top-4">
									<a href="for_rent.php" class="btn btn-large btn-block btn-findall" data-hook="discovery-see-all-button"> ดูประกาศทั้งหมด </a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="footer" class="container-brand-dark row-space-top-6">
			<footer class="page-container-responsive">
				<div class="row row-condensed">
					<div class="col-sm-12 space-4 space-top-4 show-sm">
						<ul class="list-layout list-inline text-center h5">
							<li>
								<a href="/about/about-us" class="link-contrast">เกี่ยวกับเรา</a>
							</li>
							<li>
								<a href="/help?from=footer" class="link-contrast">ความช่วยเหลือ</a>
							</li>
							<li>
								<a href="/terms" class="link-contrast">เงื่อนไขและความเป็นส่วนตัว</a>
							</li>
						</ul>
					</div>

					<!-- <div class="col-lg-12 col-md-12 col-md-offset-1 hide-sm">
					<h2 class="h5">บริษัท</h2>

					<ul class="list-layout">
					<li>
					<a href="/about/about-us" class="link-contrast">เกี่ยวกับเรา</a>
					</li>
					<li>
					<a href="/help?from=footer" class="link-contrast">ความช่วยเหลือ</a>
					</li>
					<li>
					<a href="/terms" class="link-contrast">เงื่อนไขและความเป็นส่วนตัว</a>
					</li>
					</ul>
					</div> -->

				</div>

				<!-- <hr class="footer-divider space-top-8 space-4 hide-sm"> -->
				<div class="row row-condensed">
					<div class="text-center">
						<h2 class="h5 space-4 hide-sm">ติดตามเราได้ที่</h2>
						<ul class="list-layout list-inline">
							<li>
								<a href="https://www.facebook.com/adthasid.suksomthawisap" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">Facebook</span> <i class="icon footer-icon fa fa-facebook"></i> </a>
							</li>

							<li>
								<a href="https://plus.google.com/+airbnb" class="link-contrast footer-icon-container"  rel="publisher" target="_blank"> <span class="screen-reader-only">Google+</span> <i class="icon footer-icon fa fa-google-plus"></i> </a>
							</li>

							<li>
								<a href="https://twitter.com/airbnb" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">Twitter</span> <i aria-hidden="true" class="icon footer-icon fa fa-twitter"></i> </a>
							</li>

							<li>
								<a href="https://www.linkedin.com/company/airbnb" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">LinkedIn</span> <i class="icon footer-icon fa fa-linkedin"></i> </a>
							</li>

							<li>
								<a href="https://www.pinterest.com/airbnb/" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">Pinterest</span> <i class="icon footer-icon fa fa-pinterest"></i> </a>
							</li>
							<li>
								<a href="https://www.youtube.com/user/Airbnb" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">YouTube</span> <i class="icon footer-icon fa fa-youtube-play"></i> </a>
							</li>
							<li>
								<a href="https://instagram.com/airbnb" class="link-contrast footer-icon-container"  target="_blank"> <span class="screen-reader-only">Instagram</span> <i class="icon footer-icon fa fa-instagram"></i> </a>
							</li>
						</ul>
						<div class="space-top-2 text-muted">
							Copyright © 2016 Adthasid Suksomthawisap.  All right reserved.
						</div>
					</div>
			</footer>
		</div>
		
		<div id="question-birthday" class="tooltip tooltip-bottom-middle signup-login-form__tooltip" role="tooltip" aria-hidden="true" data-trigger="#birthday-signup-form-question-trigger" data-position="top" style="left: 368.828px; top: 410px;">
			<p class="panel-body">
				ในการลงทะเบียน คุณต้องมีอายุอย่างน้อย 18 ปี คนอื่นจะไม่เห็นวันเกิดของคุณ
			</p>
		</div>

	</body>
	
	<?php
	require ('config/js.php');
	?>
	<script src="js/adthasid.js" type="text/javascript"></script>
	<script type="text/javascript">

	$(document).ready(function() {
		
	<?php if(isset($_GET['login']) AND !isset($_SESSION['member_id']) ){
		
	?>
		
		$("#modal-login").modal();
	<?php	
	}
	?>
	});

	</script>
</html>
