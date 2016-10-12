$(document).ready(function(){
	
	var status = $("#announce_status").val();
	//var status = 'ready'; // unready step1 step2 ready show hide
	console.log('ready = '+ status);
	
	if(status == 'step1' || status == 'step2'){
		$(".step-1 #edit-announce").removeClass("hide");
		$(".step-1 #correct").removeClass("hide");
		$(".step-1 #btn-continue").addClass("hide");
	}
	if(status == 'step1'){
		$(".step-2 .landing__step-content").removeClass("disabled");
		$(".step-2 #btn-continue").removeClass("hide");
	}
	if(status == 'step2'){
		$(".step-2 .landing__step-content").removeClass("disabled");
		$(".step-3 .landing__step-content").removeClass("disabled");
		$(".step-2 #edit-announce").removeClass("hide");
		$(".step-2 #correct").removeClass("hide");
		$(".step-3 #btn-continue").removeClass("hide");
		
		$(".landing__more-info-card").removeClass("hide");
	}
	if(status == 'ready' || status == 'show' || status == 'hide'){ 
		$(".step-2 .landing__step-content").removeClass("disabled");
		$(".step-3 .landing__step-content").removeClass("disabled");
		
		$(".step-1 #edit-announce").removeClass("hide");
		$(".step-2 #edit-announce").removeClass("hide");
		$(".step-3 #edit-announce").removeClass("hide");
		
		$(".step-1 #correct").removeClass("hide");
		$(".step-2 #correct").removeClass("hide");
		$(".step-3 #correct").removeClass("hide");
		
		$(".step-1 #btn-continue").addClass("hide");
		
		$("#finish").addClass("readyToPublish");
		$(".landing__publish-section").removeClass("hide");
		$(".landing__more-info-card").removeClass("hide");
	}
});
