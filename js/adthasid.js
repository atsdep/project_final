$(document).ready(function() {

	$("#birthday-signup-form-question-trigger").mouseenter(function(e) {
		$("#question-birthday").attr("aria-hidden", false);
	}).mouseleave(function() {
		$("#question-birthday").attr("aria-hidden", true);
	});

	$("#btnRegister").click(function(e) {
		var txtFirstName = $("#signup_first_name").val();
		var txtLastName = $("#signup_last_name").val();
		var txtEmail = $("#signup_email").val();
		var txtPassword = $("#user_password").val();
		var txtDay = $("#user_birthday_day").val();
		var txtMount = $("#user_birthday_month").val();
		var txtYear = $("#user_birthday_year").val();
		var mode = "add";

		$.post("controllers/members_controller.php", {
			fn : txtFirstName,
			ln : txtLastName,
			em : txtEmail,
			pw : txtPassword,
			day : txtDay,
			month : txtMount,
			year : txtYear,
			mode : mode
		}, function(data) {
			if (data.error) {
				sweetAlert("ขออภัย...", data.msg, "error");

			} else {
				swal({
					title : "ลงทะเบียนสำเร็จ",
					text : data.msg,
					type : "success",
					timer : 2000,
					showConfirmButton : true
				}, function() {
					location.reload();
				});
			}

		}, "json");
		return false;

	});

	$("#btnLogin").click(function(e) {
		var txtEmail = $("#login_email").val();
		var txtPassword = $("#login_password").val();
		var mode = "login";

		$.post("controllers/members_controller.php", {
			em : txtEmail,
			pw : txtPassword,
			mode : mode
		}, function(data) {
			if (data.error) {
				sweetAlert("ขออภัย...", data.msg, "error");

			} else {
				swal({
					title : "Rentcnd ยินดีต้อนรับคุณ ",
					text : data.msg,
					type : "success",
					html : true,
					timer : 2000,
					showConfirmButton : true
				}, function() {
					location.reload();
				});
			}

		}, "json");
		return false;

	});

});
