$(document).ready(function (e){
	
	$("#btn-confirm-filters-search").click(function (e){
		var request_uri = 'for_rent.php?';
		
		if ($("#sedan").is(':checked')) {
			sedan = true;
			var request_uri = request_uri + '&sedan=true';
		}
		if ($("#van").is(':checked')) {
			van = true;
			var request_uri = request_uri + '&van=true';
		}
		if ($("#suv").is(':checked')) {
			suv = true;
			var request_uri = request_uri + '&suv=true';
		}
		if ($("#pickup").is(':checked')) {
			pickup = true;
			var request_uri = request_uri + '&pickup=true';
			
		}
		
		var from = $("#from").val();
		var to = $("#to").val();
		
		if(from.length >= 10){
			var request_uri = request_uri + '&from='+from;
		}
		if(to.length >= 10){
			var request_uri = request_uri + '&to='+to;
		}
		
		var passenger = $("#passenger").val();
		if(passenger >= 1){
			var request_uri = request_uri + '&passenger='+passenger;
		}
		var source_province = $("#source_province").val();
		if(source_province >= 1){
			var request_uri = request_uri + '&source='+source_province;
		}
		var destination_province = $("#destination_province").val();
		if(destination_province >= 1){
			var request_uri = request_uri + '&destination='+destination_province;
		}
		
		var price_left = $("#price-left").val().slice([1]);
		var price_right = $("#price-right").val().slice([1]);
		var request_uri = request_uri + '&min='+price_left;
		var request_uri = request_uri + '&max='+price_right;
		window.location.assign(request_uri);
	});
	
	$("#filters-from").change(function (e){
		$("#btn-confirm-filters-search").removeAttr("disabled","false");
	});
	
	$("#btn-more-filters").click(function (e){
		$( ".filters" ).removeClass("collapse");
		$( ".sidebar" ).addClass("filters-open");
		$( "#btn-main-filters-confirm" ).addClass("hide");
	});
	
	$("#cancel-btn-more-filters").click(function (e){
		$( ".filters" ).addClass("collapse");
		$( ".sidebar" ).removeClass("filters-open");
		$( "#btn-main-filters-confirm" ).removeClass("hide");
		
	});
	
	$("#more-amenities").click(function() {
  		$("#filters-more-amenities").toggleClass( "collapse" );
  		$("#icon-amenities").toggleClass( "icon-caret-up" );
	});
	
	$("#btn-more-language").click(function() {
  		$("#filters-more-language").toggleClass( "collapse" );
  		$("#icon-language").toggleClass( "icon-caret-up" );
	});
	var min_price =  $( "#price-left" ).val();
	var max_price =  $( "#price-right" ).val();
	$("#slider-range").slider({
	  
      range: true,
      min: 350,
      max: 15000,
      values: [ min_price, max_price ],
      slide: function( event, ui ) {
        $( "#price-left" ).val( "฿" + ui.values[ 0 ]);
        $( "#price-right" ).val( "฿" + ui.values[ 1 ]);
      }
    });
    $("#price-left").val( "฿" + $( "#slider-range" ).slider( "values", 0 ));
    $("#price-right").val( "฿" + $( "#slider-range").slider( "values", 1 ));
    
	
	$("#car-brand").change(function() {
		var vBrand = $("#car-brand").val();
		
		$.post("controllers/select_car_gene.php", {
			b : vBrand
		}, function(data) {
			if (data.error) {
				console.log(data);
				$("#car-gene").empty();
				document.getElementById("car-gene").disabled = true;
				$("#car-gene").append("<option selected>เลือกหนึ่งข้อ</option>");

			} else {
				$("#car-gene").empty();
				document.getElementById("car-gene").disabled = false;
				$("#car-gene").append("<option>เลือกหนึ่งข้อ</option>");
				for ( $i = 0; $i < data.brand.length; $i++) {
					$("#car-gene").append(data.brand[$i]);
				}
			}

		}, "json");
		//return false;
	});
	
	
});

