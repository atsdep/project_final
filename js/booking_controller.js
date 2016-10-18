$(document).ready(function() {
	var verify_member_id = $("#verify_member_id").val();
	
	if(verify_member_id == 1 ){
		var request_uri = '/mycar.php?alert=booking-own';
		window.location.assign(request_uri);
	}
	
	$("#agrees-to-terms").click(function (e){
		if ($("#agrees-to-terms").is(':checked')) {
			$("#btn-next-process").removeClass("disabled");
		}else{
			//$("#btn-next-process").addClass("disabled");
		}
	});
	
	$("#btn-next-process").click(function (e){
		var message = $("#message-to-driver-input").val();
		if(message.length < 2){
			$("#message-to-driver-input").focus();
		}
		var mode = 'booking';
		$.post("controllers/booking_controller.php", {
			message : message,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}

		}, "json");
		
		
	});
});
