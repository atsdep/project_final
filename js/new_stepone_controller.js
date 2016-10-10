$(document).ready(function() {
	
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
		return false;
	});
	
	$("#btn-new-step1-1").click(function() {
		var vBrand = $("#car-brand").val();
		var vGene = $("#car-gene").val();
		var vYear = $("#car-year").val();
		var mode = "step1-1";
		//console.log(vBrand + " " + vGene + " "+ vYear);
		$.post("controllers/new_controller.php", {
			brand : vBrand,
			gene : vGene,
			year : vYear,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
				window.location.replace(data.goto);
			}

		}, "json");
		return false;
	});
});
