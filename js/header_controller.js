$(document).ready(function() {
	$("#btn-head-register").click(function(e) {
		// $(".modal").attr( "aria-hidden", "false" );
		//console.log('click');
		// $(".with-new-header").addClass("modal-open");
		 $("#signup-modal").modal({backdrop: true});
	});
}); 