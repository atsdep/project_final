<?php
session_start();
require ("config/database.php");
require ("config/connectdb.php");
if (!isset($_SESSION['member_id'])) {
	//header("location:http://".$_SERVER['HTTP_HOST']."?pleaselogin=1");
	header("location:index.php?login=" . urlencode($_SERVER['REQUEST_URI']) . "&error=1");
	exit(0);
} else {

	require ("controllers/select_member.php");
}
?>
<!DOCTYPE html>
<html lang="th">
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>บัญชี - Rentcnd</title>
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
		<?php
		include 'config/js.php';
		?>
		
		<style>
			[type="text"]:invalid {
				border-color: #dce0e0;
				background-color: #FFFFFF;
			}
		</style>
		
	</head>

	<body class="with-new-header ">

		<?php
		include 'include/all_header.php';
		$sql_bank = "SELECT * FROM banks_accounts WHERE bank_acc_memid = '" . $_SESSION['member_id'] . "'";
		$query = mysqli_query($connect, $sql_bank);
		?>
		<main id="site-content" role="main">

			<div class="subnav hide-print">
				<div class="page-container-responsive">
					<ul class="subnav-list">
						<li>
							<a href="stats.php" aria-selected="false" class="subnav-item" id="rooms-item">สถิติ</a>
						</li>
						<li>
							<a href="inbox.php" aria-selected="false" class="subnav-item" id="rooms-item">กล่องข้อความ</a>
						</li>
						<li>
							<a href="mycar.php" aria-selected="false" class="subnav-item cohosting-ml-tooltip-trigger" id="rooms-item">รถเช่าของคุณ</a>
						</li>
						<li>
							<a href="users.php" aria-selected="false" class="subnav-item" id="user-profile-item">โปรไฟล์</a>
						</li>
						<li>
							<a href="trips.php" aria-selected="false" class="subnav-item" id="account-item">การเดินทางของคุณ</a>
						</li>
						<li>
							<a href="account.php" aria-selected="true" class="subnav-item" id="account-item">บัญชี</a>
						</li>
					</ul>
				</div>
			</div>

			<div class="page-container-responsive space-top-4 space-4">

				<div class="row">
					<div class="col-md-3">

						<ul class="sidenav-list">	
							<li>
								<a href="account.php" aria-selected="false" class="sidenav-item">ความปลอดภัย</a>
							</li>
							<li>
								<a href="payout_preferences.php" aria-selected="true" class="sidenav-item">วิธีรับชำระเงินที่ต้องการ</a>
							</li>
							
						</ul>

					</div>
					<div class="col-md-9">

						<div id="payout_setup" class="">

							<div class="panel space-4">
								<div class="panel-header">
									วิธีรับชำระเงิน
								</div>
								<div id="payout_intro" class="panel-body">
									<!-- <p>
										เมื่อคุณได้รับชำระเงินจากการจองที่พัก เราเรียกการชำระเงินที่ส่งให้คุณว่า "การรับชำระเงิน" ระบบการชำระเงินที่มีการรักษาความปลอดภัยของเรารองรับวิธีรับชำระเงินหลายวิธีซึ่งสามารถตั้งค่าและแก้ไขได้ที่นี่ วิธีรับชำระเงินและสกุลเงินที่ใช้ได้ในแต่ละประเทศอาจไม่เหมือนกัน
										<a href="/help/topic/54" target="_blank"> เข้าไปที่คำถามที่พบบ่อยเกี่ยวกับการรับชำระเงิน » </a>
									</p> -->
									<table id="payout_methods" class="table table-striped">
										<thead>
											<tr class="text-truncate">
												<th>ธนาคาร</th>
												<th>เลขที่บัญชี</th>
												<th>ชื่อบัญชี</th>
												<th>สาขา</th>
												<th>ประเภทบัญชี</th>
												<th>&nbsp;</th>
											</tr>
										</thead>
										<tbody>
											<?php
											 	while ($bank = mysqli_fetch_assoc($query)){
											?>
											<tr>
												<td><?php echo $bank['bank_name'] ?></td>
												<td><?php echo $bank['bank_acc_no'] ?></td>
												<td><?php echo $bank['bank_acc_name'] ?></td>
												<td><?php echo $bank['bank_acc_brance'] ?></td>
												<td><?php echo $bank['bank_acc_type'] ?></td>
												
												<td class=""><a id="payout-options-6424884" class="link-reset text-truncate" href="#" data-prevent-default=""> ตัวเลือก <i class="icon icon-caret-down"></i> </a></td>
											</tr>
											<?php
											}
											?>
											
										</tbody>
										<tfoot>
											<tr id="add_payout_method_section">
												<td colspan="5">
													<a href="#" class="btn btn-soft-dark " id="btn_add">เพิ่มวิธีรับชำระเงิน</a>
													<!-- <span class="text-muted"> &nbsp;
													การฝากเงินเข้าบัญชีโดยตรง PayPal และอื่น ๆ ... 
													</span> -->
												</td>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>

							<div id="payout_new_select" class="add_payout_section" style="display:none;"></div>
							<div id="payout_edit" class="add_payout_section" style="display:none;"></div>

							<!-- <div class="panel space-top-4 hide">
								<div class="panel-header">
									กฎการแยกเงินสำหรับการรับชำระเงิน
								</div>
								<div class="panel-body">
									<p>
										กฎการแยกเงินช่วยคุณแยกวิธีรับชำระเงิน หรือกำหนดให้การรับชำระเงินสำหรับที่พักบางแห่งไปยังวิธีรับชำระเงินที่แตกต่างกันได้
									</p>
								</div>
							</div> -->

						</div>
						
						<div id="payoutInfoAppContainer" class="hide">
							<div class="panel">
								<div class="panel-header">
									เพิ่มวิธีรับชำระเงิน
								</div>
								<form>
								<div class="panel-body">
									<div class="space-1">
										<label for="bank_name">ธนาคาร</label>
										<input id="bank_name" name="bank_name" type="text" value="" required="">
									</div>
									<div class="space-1">
										<label for="bank_acc_no">เลขที่บัญชี</label>
										<input id="bank_acc_no" name="bank_acc_no" type="text" value="" required="">
									</div>
									<div class="space-1">
										<label for="bank_acc_name">ชื่อบัญชี</label>
										<input id="bank_acc_name" name="bank_acc_name" type="text" value="" required="">
									</div>
									<div class="space-1">
										<label for="bank_acc_brance">สาขา</label>
										<input id="bank_acc_brance" name="bank_acc_brance" type="text" value="" required="">
									</div>
									<div class="space-1">
										<label for="bank_acc_type">ประเภทบัญชี</label>
										<input id="bank_acc_type" name="bank_acc_type" type="text" value="" required="">
									</div>
								</div>
								<div class="panel-footer">
									<button id="btn_add_bank" class="btn btn-soft-dark">
										เพิ่ม
									</button>
								</div>
								</form>
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
	<script type="text/javascript">
		$("#btn_add").click(function() {
			$("#payoutInfoAppContainer").removeClass('hide');
			$("#payout_setup").addClass('hide');
		});
		$("#btn_add_bank").click(function() {
			var mode = "add_bank";
			var bank_name = $("#bank_name").val();
			var bank_acc_no = $("#bank_acc_no").val();
			var bank_acc_name = $("#bank_acc_name").val();
			var bank_acc_brance = $("#bank_acc_brance").val();
			var bank_acc_type = $("#bank_acc_type").val();

			if (bank_name.length < 3) {
				alert('กรุณากรอกข้อมูลให้ถูกต้อง');
				$("#bank_name").focus();
				return false;
			}else if (bank_acc_no.length < 3) {
				alert('กรุณากรอกข้อมูลให้ถูกต้อง');
				$("#bank_acc_no").focus();
				return false;
			}else if (bank_acc_name.length < 3) {
				alert('กรุณากรอกข้อมูลให้ถูกต้อง');
				$("#bank_acc_name").focus();
				return false;
			}else if (bank_acc_brance.length < 3) {
				alert('กรุณากรอกข้อมูลให้ถูกต้อง');
				$("#bank_acc_brance").focus();
				return false;
			}else if (bank_acc_type.length < 3) {
				alert('กรุณากรอกข้อมูลให้ถูกต้อง');
				$("#bank_acc_type").focus();
				return false;
			} else {
				$.post("controllers/account_controller.php", {
					mode : mode,
					bank_name : bank_name,
					bank_acc_no : bank_acc_no,
					bank_acc_name : bank_acc_name,
					bank_acc_brance : bank_acc_brance,
					bank_acc_type : bank_acc_type
				}, function(data) {
					if (data.error) {
						console.log(data.msg);
					} else {
						console.log(data.msg);
						location.reload();
					}

				}, "json");
			}

		});

	</script>
</html>
