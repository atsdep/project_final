<?php
require ("config/database.php");
require ("config/connectdb.php");
require ("controllers/select_member.php");
require ("config/datetime.php");

if (isset($_SESSIONS['member_id'])) {
	require ("controllers/select_announce_member.php");
}
?>

<div id="header" class="airbnb-header new">
	<div class="header--sm show-sm" aria-hidden="true">
		<a href="#" aria-label="หน้าแรก" data-prevent-default="" class="link-reset burger--sm"> <i class="icon icon-reorder icon-rausch"></i> <span class="screen-reader-only"> Rentcnd </span> </a>
		<div class="title--sm text-center">
			<button class="btn btn-block search-btn--sm search-modal-trigger hide" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
				<i class="icon icon-search icon-gray"></i>
				<span class="search-placeholder--sm"> ไปที่ไหน </span>
			</button>
			<a href="/" class="header-belo hide"> <span class="screen-reader-only"> Rentcnd </span> </a>
			<a href="/" class="hdr-btn link-reset belo-container text-logo" aria-label="Rentcnd"> Rentcnd </a>
		</div>
		<div class="action--sm"></div>
		<nav class="nav--sm" role="navigation"></nav>
		<div class="search-modal-container"></div>
	</div>

	<header class="regular-header clearfix hide-sm" id="new-header" role="banner">

		<div class="comp pull-left">
			<a href="/" class="hdr-btn link-reset belo-container text-logo" aria-label="Rentcnd"> Rentcnd </a>
		</div>

		<?php
		if(isset($_SESSION['member_id'])){
		?>
		
		<div class="comp pull-right">
			<a class="no-crawl hdr-btn link-reset header-avatar-trigger needsclick" rel="nofollow" href="/users.php" data-href="/dashboard" data-href-host="/trips"> <span class="value_name margin-right--tiny hide-md"><?php echo $result_mem['member_firstname'] ?></span>
			<div class="media-photo media-round user-profile-image header-icon icon-profile-alt-gray">
				<?php 
				if (isset($result_mem['member_profile_photo'])) {
				$profile_photo = '../img/' . $result_mem['member_profile_photo'];
				} else {
				$profile_photo = '../img/profile.jpg';
				}
				?>
				<img width="28" height="28" src="img/<?php echo $profile_photo  ;?>?aki_policy=profile_small" alt="">
			</div> </a>

			<div class="panel  drop-down-menu avatar-tooltip--new">
				<div class="panel-header no-border hide-lg">
					<strong><span class="value_name"><?php echo $result_mem['member_firstname'] ?></span></strong>
				</div>
				<a href="trips.php" class=" panel-body link-reset hover-item no-crawl">
				<div class="hover-item__content">
				การเดินทางของคุณ
				</div> </a>
				<!-- <a href="/my_reservations.php" class=" panel-body link-reset hover-item no-crawl">
				<div class="hover-item__content">
					ข้อมูลการจองของคุณ
				</div> </a> -->
				<a href="/users.php" class=" panel-body link-reset hover-item no-crawl">
				<div class="hover-item__content">
					แก้ไขข้อมูลส่วนตัว
				</div> </a>
				<a href="/account.php" class=" panel-body link-reset hover-item no-crawl">
				<div class="hover-item__content">
					เปลี่ยนรหัสผ่าน
				</div> </a>
				<a href="/controllers/logout.php?return=<?php echo $_SERVER['REQUEST_URI']  ?>" class=" panel-body link-reset hover-item no-crawl">
				<div class="hover-item__content">
					ออกจากระบบ
				</div> </a>
			</div>
		</div>
		
		
		

		<?php
		}else{
		?>

		<div class="comp pull-right">
			<a href="#" data-redirect="redirect_params[action]=host&redirect_params[controller]=info&redirect_params[from_nav]=1&redirect_params[link]=1" class="hdr-btn link-reset"> เข้าสู่ระบบ </a>
		</div>
		<div class="comp pull-right">
			<a id="" data-signup-modal="" data-toggle="modal" data-target="#signup-modal" href="#sigin" data-redirect="redirect_params[action]=host&amp;redirect_params[controller]=info" class="hdr-btn link-reset"> ลงทะเบียน </a>
		</div>
		<?php
		}
		?>

		<div class="comp pull-right">
			<a data-signup-modal="" data-header-view="true" href="#helps" data-redirect="redirect_params[action]=host&amp;redirect_params[controller]=info" class="hdr-btn link-reset"> ความช่วยเหลือ </a>
		</div>
		
		<?php
			if(isset($_SESSION['member_id'])){
		?>
		<div class="comp pull-right show-trips js-trips-menu-container">
			<a class="needsclick no-crawl hdr-btn link-reset js-trips-comp trips-comp" href="/trips" rel="nofollow" data-href="/trips">
			<div class="inbox-icon-container text-center">
				<span class="margin-right--tiny hide-md">การเดินทาง</span>
				<i class="header-icon js-trips-icon icon-suitcase-gray"> <i class="alert-count js-trips-unread-count text-center fade">0</i> </i>
			</div> </a>

			<div class="panel  drop-down-menu trips-dropdown dark-caret">
				<div class="trips-tooltip panel panel-body-scroll">
					<div class="panel-header no-border section-header">
						<strong><span>การเดินทาง</span></strong><a href="/trips" class="link-reset view-trips pull-right"><strong><span>ดูการเดินทาง</span></strong></a>
					</div>
					<div class="trip-row panel-body">
						<a href="/s/Paris--France?checkin=&amp;checkout=" class="link-reset">
						<div class="reservation-block">
							<div class="reservation-info">
								<div class="va-container va-container-v">
									<div class="va-middle">
										<div>
											<div class="listing-brief text-wrap tiny-space">
												<strong><span>ไม่มีการเดินทางที่กำลังจะมาถึง</span></strong>
											</div>
											<div class="text-muted">
												<span>ค้นหาต่อไปใน Paris</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="empty-list-icon bg-light-gray pull-right">
								<i class="icon icon-suitcase-alt icon-size-3 icon-white"></i>
							</div>
						</div></a>
					</div>
				</div>
			</div>
		</div>
		
		<!-- <div class="comp pull-right show-trips js-trips-menu-container">
			<a class="needsclick no-crawl hdr-btn link-reset js-trips-comp trips-comp" href="/trips" rel="nofollow" data-href="/trips">
			<div class="inbox-icon-container text-center">
				<span class="margin-right--tiny hide-md">การเดินทาง</span>
				<i class="header-icon js-trips-icon icon-suitcase-gray"> <i class="alert-count js-trips-unread-count text-center fade">0</i> </i>
			</div> </a>

			<div class="panel  drop-down-menu trips-dropdown dark-caret">
				<div class="trips-tooltip panel panel-body-scroll">
					<div class="panel-header no-border section-header">
						<strong><span>การเดินทาง</span></strong><a href="/trips" class="link-reset view-trips pull-right"><strong><span>ดูการเดินทาง</span></strong></a>
					</div>
					<div class="trip-row panel-body no-updates">
					<a href="trips.php" class="link-reset">
						<div class="reservation-block">
							<div class="reservation-info">
								<div class="va-container va-container-v">
									<div class="va-middle">
										<div>
											<div class="listing-brief text-wrap tiny-space">
												<strong>กรุงเทพ</strong><span>-</span><span>ยอมรับ</span>
											</div><div class="notification-text text-truncate"></div>
											<div class="dates-and-guests text-muted text-truncate">
												<span>พฤศจิกา 10</span><span> - </span><span>พฤศจิกา 11</span><span> · </span><span>ผู้เข้าพัก 1 คน</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="listing-photo pull-right"><img src="https://a2.muscache.com/im/pictures/b163ac09-9c72-4d26-9c39-e7230a86c7f9.jpg?aki_policy=small" width="78" height="78" alt="กรุงเทพ">
							</div>
						</div>
					</a>
					</div>
				</div>
			</div>
		</div> -->
		
		
		<?php
		}
		?>

		<?php
			if(isset($row_ann) and $row_ann >= 1 ){
		?>
			<div class="comp pull-right">
			<a class="needsclick host-icon-wrapper no-crawl hdr-btn link-reset js-host-menu-icon" href="" rel="nofollow" data-href="/dashboard"> <span class="hide-md margin-right--tiny"> เจ้าของรถเช่า </span> <i class="fa fa-car js-host-icon carhead"> <i class="alert-count js-host-item-count listing-count text-center fade in">!</i> </i> </a><!-- fade in -->

			<div class="panel  drop-down-menu host-tooltip--new">
				<div class="panel-header no-border hide-lg">
					<span><strong>เจ้าของรถเช่า</strong></span>
				</div>
				<div class="hover-item panel-body relist-your-space hide">
					<a href="#" class="link-reset click-area">
					<div class="cta-container va-container va-container-v">
						<div class="va-middle">
							<div class="cta-text">
								ลงประกาศรถเช่าให้เสร็จ
							</div>
							<div class="cta-text-v3-reactivate hide">
								เปิดใช้งานบัญชีใหม่
							</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
						</div>
					</div> </a>
					<div class="close-button hide">
						<a href="#" class="alert-close"></a>
					</div>
				</div>

				<a href="/rooms" class=" panel-body link-reset hover-item origin-item js-host-calendar-link hide no-crawl">
				<div class="hover-item__content">
					ปฏิทิน

				</div> </a>
				<a href="/mycar.php" class=" panel-body link-reset hover-item origin-item js-host-manage-listings-link no-crawl">
				<div class="hover-item__content">
					จัดการรถเช่า
					<i class="alert-count listing-count listing-count--inline text-center fade">0</i>
				</div> </a>
				<a href="/new.php" class=" panel-body link-reset hover-item origin-item js-host-list-your-space-link">
				<div class="hover-item__content">
					ลงประกาศรถเช่า

				</div> </a><a href="/my_reservations.php" class=" panel-body link-reset hover-item origin-item js-host-my-reservations-link no-crawl">
				<div class="hover-item__content">
					การจองของลูกค้า

				</div> </a>
				<!-- <a href="/my_reservations.php" class=" panel-body link-reset hover-item origin-item js-host-transaction-history-link no-crawl">
				<div class="hover-item__content">
					การจองของคุณ

				</div> </a> -->
				<a href="/reviews.php" class=" panel-body link-reset hover-item origin-item js-host-reviews-link no-crawl">
				<div class="hover-item__content">
					ความคิดเห็น

				</div> </a>
			</div>
		</div>
		
		<?php
		}else{
		// if($_SERVER['REQUEST_URI'] != "/new.php" and $_SERVER['REQUEST_URI'] != "/start.php"){
			$string = $_SERVER['REQUEST_URI'];
  			if(stristr($string, 'new.php') === FALSE and stristr($string, 'start.php') === FALSE) {
		?>
		<div class="comp pull-right comp-become-a-host">
			<a class="hdr-btn link-reset lys-link js-become-a-host-link comp-become-a-host__link" href="/start.php"> <span class="btn btn-small btn-become-a-host"> สร้างรายได้จากการขับรถ</span> </a>
		</div>
		
		<?php
		}
		}
		?>
		

		

		<div class="comp pull-left back-to-search-results-wrapper"></div>

		<div class="comp search-bar-wrapper" role="search">
			<form action="/s" class="search-form">
				<div>
					<div class="search-bar">
						<i class="header-icon icon-search-alt-gray search-icon" aria-hidden="true"></i><label class="screen-reader-only" for="header-search-form" aria-hidden="true">ไปที่ไหน</label>
						<input type="text" placeholder="ไปที่ไหน" autocomplete="off" name="location" id="header-search-form" class="location" value="">
						<input type="hidden" name="source" value="hdr">
					</div><div id="header-search-settings" class="panel search-settings header-menu"></div>
				</div>
			</form>
		</div>
	</header>

</div>