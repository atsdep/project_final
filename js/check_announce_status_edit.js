$(document).ready(function(){
	
	var status = $("#announce_status").val();
	//var status = 'ready'; // unready step1 step2 ready show hide
	console.log('ready = '+ status);
	
	if(status != 'unready'){
		$(".step-1 #edit-announce").removeClass("hide");
		$(".step-1 #correct").removeClass("hide");
		$(".step-1 #btn-continue").addClass("hide");
	}
	
});
