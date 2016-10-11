$(document).ready(function() {

	var number =  <?php echo date("j") ?>
	;

	var step_oneMouth = document.querySelectorAll("#one_mouth td.DayPicker-day");
	for (var i = 0; i < step_oneMouth.length; i++) {

		if (step_oneMouth[i].innerHTML < number && step_oneMouth[i].innerHTML != "") {
			step_oneMouth[i].className = "DayPicker-day DayPicker-day--blocked-past-date";
		}
	}//block date

	$("td.DayPicker-day--available").click(function(e) {
		$(this).toggleClass("DayPicker-day--available DayPicker-day--unavailable");
	});

});
