$(document).ready(function() {

	$("#btn-next-activation-page").click(function(e) {
		var verify_profile_photo = $("#verify_profile_photo").val();

		if (verify_profile_photo == 0) {
			var destination = $("#destination").val();
			var checkin = $("#checkin").val();
			var checkout = $("#checkout").val();
			var passenger = $("#passenger").val();
			var id = $("#id").val();
			var request_uri = '/activation-profile-photo.php?';
			request_uri = request_uri + '&destination=' + destination;
			request_uri = request_uri + '&checkin=' + checkin;
			request_uri = request_uri + '&checkout=' + checkout;
			request_uri = request_uri + '&passenger=' + passenger;
			request_uri = request_uri + '&id=' + id;
			window.location.assign(request_uri);

		}
	});

	$("#btn-next-activation-profile-page").click(function(e) {
		var verify_telephone = $("#verify_telephone").val();

		if (verify_telephone == 0) {
			var destination = $("#destination").val();
			var checkin = $("#checkin").val();
			var checkout = $("#checkout").val();
			var passenger = $("#passenger").val();
			var id = $("#id").val();
			var request_uri = '/activation-telephone.php?';
			request_uri = request_uri + '&destination=' + destination;
			request_uri = request_uri + '&checkin=' + checkin;
			request_uri = request_uri + '&checkout=' + checkout;
			request_uri = request_uri + '&passenger=' + passenger;
			request_uri = request_uri + '&id=' + id;
			//window.location.assign(request_uri);
			
		}
		
		var mode = 'verify_profile';
		$.post("controllers/activation_controller.php", {
				mode : mode
			}, function(data) {
				if (data.error) {
					console.log(data.msg);
				} else {
					console.log(data.msg);
					window.location.assign(request_uri);
				}

			}, "json");
			return false;
	});
	
	$("#btn-telephone-confirm").click(function(e) {
		var activation_phone_number = $("#activation_phone_number").val();

		var mode = "add-telephone";
		$("#verify-telephone-default").addClass("hide");
		$("#verify-telephone-process").removeClass("hide");
		var otp = Math.floor(1000 + Math.random() * 9000);
		document.getElementById("telephone-number").innerHTML = activation_phone_number;
		document.getElementById("example-code").innerHTML = otp;
		$.post("controllers/activation_controller.php", {
			activation_phone_number : activation_phone_number,
			otp : otp,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}
		}, "json");
	});
	
	$("#btn-verification").click(function() {
		var mode = "phone_number_verification";
		var otp = $("#activation_phone_verification_code").val();

		$.post("controllers/activation_controller.php", {
			otp : otp,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
				$("#activation_phone_verification_code").addClass("error-verify");
			} else {
				$("#activation_phone_verification_code").removeClass("error-verify");
				console.log(data.msg);
				console.log(data.result);
			}
		}, "json");

	});


});
