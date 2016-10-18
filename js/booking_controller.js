$(document).ready(function() {

	function daysDifference(d0, d1) {
		var diff = new Date(+d1).setHours(12) - new Date(+d0).setHours(12);
		return Math.round(diff / 8.64e7);
	}

	var checkin = $("#date-begin").val();
	var checkout = $("#date-end").val();
	console.log(checkin + ' check ' + checkout);
	var d0 = new Date(checkin);
	var d1 = new Date(checkout);
	var differ = daysDifference(d0, d1);

	if (differ >= 0) {
		console.log(differ + 1 + ' day');

		var formatter = new Intl.NumberFormat('en-US', {
			style : 'currency',
			currency : 'THB',
			minimumFractionDigits : 0,
		});

		var differday = differ + 1;
		document.getElementById("day").innerHTML = differday;
		var price_value = $("#price-value").val();
		var price_process = price_value * differday;
		var price_slice = formatter.format(price_process).slice(3, 100);
		document.getElementById("booking_total_price").innerHTML = price_process;
		document.getElementById("price-process").innerHTML = '฿' + price_slice;
		document.getElementById("total-price").innerHTML = '฿' + price_slice;
	}

	var verify_member_id = $("#verify_member_id").val();

	if (verify_member_id == 1) {
		var request_uri = '/mycar.php?alert=booking-own';
		window.location.assign(request_uri);
	} else {
		var member_profile = $("#member_profile").val();
	}

	if (verify_member_id == 0) {
		var member_profile = $("#member_profile").val();
		var member_otp = $("#member_otp").val();

		if (member_profile == 0 || member_otp == 0) {
			var destination = $("#destination").val();
			var checkin = $("#checkin").val();
			var checkout = $("#checkout").val();
			var passenger = $("#passenger").val();
			var id = $("#id").val();
			var request_uri = '/activation.php?';
			request_uri = request_uri + '&destination=' + destination;
			request_uri = request_uri + '&checkin=' + checkin;
			request_uri = request_uri + '&checkout=' + checkout;
			request_uri = request_uri + '&passenger=' + passenger;
			request_uri = request_uri + '&id=' + id;
			window.location.assign(request_uri);
		}

	}

	$("#agrees-to-terms").click(function(e) {
		if ($("#agrees-to-terms").is(':checked')) {
			$("#btn-next-process").removeClass("disabled");
		} else {
			//$("#btn-next-process").addClass("disabled");
		}
	});

	$("#btn-next-process").click(function(e) {
		var message = $("#message-to-driver-input").val();
		if (message.length < 2) {
			$("#message-to-driver-input").focus();
		}

		function makeid() {
			var text = "";
			var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

			for (var i = 0; i < 3; i++)
				text += possible.charAt(Math.floor(Math.random() * possible.length));

			var number = "123456789";

			for (var i = 0; i < 3; i++)
				text += number.charAt(Math.floor(Math.random() * number.length));

			var character = "123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";

			for (var i = 0; i < 4; i++)
				text += character.charAt(Math.floor(Math.random() * character.length));

			return text;
		}
		var booking_code = makeid();
		var announce_id = $("#id").val();
		var booking_passenger = $("#passenger_final").val();
		var booking_date_begin = $("#sql_date_begin").val();
		var booking_date_end = $("#sql_date_end").val();
		var destination = $("#destination").val();
		var totalprice = document.getElementById("booking_total_price").innerHTML;
		var request_uri = '/trips.php';

		var mode = 'booking';
		$.post("controllers/booking_controller.php", {
			booking_code : booking_code,
			announce_id : announce_id,
			destination : destination,
			booking_passenger : booking_passenger,
			booking_date_begin : booking_date_begin,
			booking_date_end : booking_date_end,
			totalprice : totalprice,
			message : message,
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
});
