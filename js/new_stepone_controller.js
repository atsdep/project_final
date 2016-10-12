$(document).ready(function() {
	console.log('ready');

	$("#btn-next-province").click(function() {
		var vProvince = $("#car_province").val();
		var mode = "province";
		var ann_id = $("#ann_id").val();
		$.post("controllers/new_controller.php", {
			province : vProvince,
			ann_id : ann_id,
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

	$("#car-gene").change(function() {
		var vGene = $("#car-gene").val();
		var mode = "car-gene";
		var ann_id = $("#ann_id").val();
		$.post("controllers/new_controller.php", {
			car_gene : vGene,
			ann_id : ann_id,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}

		}, "json");
	});

	$("#car-year").change(function() {
		var vYear = $("#car-year").val();
		var ann_id = $("#ann_id").val();
		var mode = "car-year";
		$.post("controllers/new_controller.php", {
			car_year : vYear,
			ann_id : ann_id,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}

		}, "json");
	});

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

	$("#form-amenities input:checkbox").click(function() {
		var vWifi = 0;
		var vWater = 0;
		var vBook = 0;
		var vMusic = 0;
		var vTissues = 0;
		var vChildseat = 0;
		var vMonitor = 0;
		var v220v = 0;
		var vPurifier = 0;
		var mode = "amenities";
		var ann_id = $("#ann_id").val();
		if ($("#wifi").is(':checked')) {
			vWifi = 1;
		}
		if ($("#water").is(':checked')) {
			vWater = 1;
		}
		if ($("#book").is(':checked')) {
			vBook = 1;
		}
		if ($("#music").is(':checked')) {
			vMusic = 1;
		}
		if ($("#tissues").is(':checked')) {
			vTissues = 1;
		}
		if ($("#childseat").is(':checked')) {
			vChildseat = 1;
		}
		if ($("#monitor").is(':checked')) {
			vMonitor = 1;
		}
		if ($("#220v").is(':checked')) {
			v220v = 1;
		}
		if ($("#purifier").is(':checked')) {
			vPurifier = 1;
		}//9

		console.log(vWifi + " " + vWater + " " + vBook + " " + vMusic + " " + vTissues + " " + vChildseat + " " + vMonitor + " " + v220v + " " + vPurifier);

		$.post("controllers/new_controller.php", {
			ann_id : ann_id,
			wifi : vWifi,
			water : vWater,
			book : vBook,
			music : vMusic,
			tissues : vTissues,
			childseat : vChildseat,
			monitor : vMonitor,
			v220v : v220v,
			purifier : vPurifier,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}
		}, "json");
	});

	$("#from-additional_service input:checkbox").click(function() {
		var vCar_stop = 0;
		var mode = "additional_service";
		var ann_id = $("#ann_id").val();
		if ($("#car_stop").is(':checked')) {
			vCar_stop = 1;
		}
		$.post("controllers/new_controller.php", {
			car_stop : vCar_stop,
			ann_id : ann_id,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}

		}, "json");
	});

	$("#next-description").click(function() {
		var vDes = $("#description").val();
		var mode = "description";
		var ann_id = $("#ann_id").val();
		if (vDes.length < 1) {
			$("#description").focus();
			$("#description").attr("required", true);
			return false;
		}
		$.post("controllers/new_controller.php", {
			description : vDes,
			ann_id : ann_id,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}

		}, "json");

	});
	$("#next-title").click(function() {
		var vTitle = $("#title").val();
		var mode = "title";
		var ann_id = $("#ann_id").val();
		if (vTitle.length < 1) {
			$("#title").focus();
			$("#title").attr("required", true);
			return false;
		}
		$.post("controllers/new_controller.php", {
			title : vTitle,
			ann_id : ann_id,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}

		}, "json");
	});

	$("#form-choose-scope #label-in").click(function() {
		var vScope = 0;
		var mode = "scope";
		var ann_id = $("#ann_id").val();
		$("#form-choose-scope #in").prop("checked", true);

		$.post("controllers/new_controller.php", {
			scope : vScope,
			ann_id : ann_id,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}
		}, "json");
	});

	$("#form-choose-scope #label-out").click(function() {
		var vScope = 1;
		var mode = "scope";
		var ann_id = $("#ann_id").val();
		$("#form-choose-scope #out").prop("checked", true);

		$.post("controllers/new_controller.php", {
			scope : vScope,
			ann_id : ann_id,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}
		}, "json");
	});

	$("#form-price-trems input:checkbox").click(function() {
		var vFuel = 0;
		var vExpressway = 0;
		var vPark = 0;
		var mode = "price_terms";
		var ann_id = $("#ann_id").val();
		if ($("#fuel_expenses").is(':checked')) {
			vFuel = 1;
		}
		if ($("#expressway_expenses").is(':checked')) {
			vExpressway = 1;
		}
		if ($("#park_expenses").is(':checked')) {
			vPark = 1;
		}//3

		$.post("controllers/new_controller.php", {
			ann_id : ann_id,
			fuel : vFuel,
			expressway : vExpressway,
			park : vPark,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}
		}, "json");
	});

	$("#form-price-one").click(function() {
		$("#price-one").focus();
	});

	$("#btn-next-price").click(function() {
		var vPrice = $("#price-one").val();
		var mode = "price";
		var ann_id = $("#ann_id").val();
		if (vPrice < 300) {
			$("#price-one").focus();
			$("#price-one").attr("required", true);
			return false;
		}

		$.post("controllers/new_controller.php", {
			ann_id : ann_id,
			price : vPrice,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}
		}, "json");
	});

	$("#btn-next-calendar").click(function(e) {

		var select_date_ava = document.querySelectorAll("td.DayPicker-day--available");
		//หาวันที่เปิดทั้งหมด
		var ava_all_date = new Array(select_date_ava.length);
		//สร้าง อาเรตามความยาวมาเก็บ
		for (var i = 0; i < select_date_ava.length; i++) {

			ava_all_date[i] = $(select_date_ava[i]).attr("data-date");
			//เก็บค่าวันที่ที่ว่าง

		}//find available date

		var select_date_unava = document.querySelectorAll("td.DayPicker-day--unavailable");
		var unava_all_date = new Array(select_date_ava.length);
		for (var i = 0; i < select_date_unava.length; i++) {

			unava_all_date[i] = $(select_date_unava[i]).attr("data-date");

		}//find unavailable date

		var vOpen = ava_all_date;
		var vClose = unava_all_date;
		var mode = "update_calendar";
		var vOpen_length = select_date_ava.length;
		var vClose_length = select_date_unava.length;

		$.post("controllers/new_controller.php", {
			ann_id : ann_id,
			open : vOpen,
			close : vClose,
			mode : mode,
			open_length : vOpen_length,
			close_length : vClose_length

		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}
		}, "json");
	});

	$("#form-customer-requiements input:checkbox").click(function() {
		var vGovernment_id = 0;
		var mode = "customer_requiements";
		var ann_id = $("#ann_id").val();
		if ($("#government_id").is(':checked')) {
			vGovernment_id = 1;
		}

		$.post("controllers/new_controller.php", {
			ann_id : ann_id,
			government_id : vGovernment_id,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}
		}, "json");
	});

	$("#smoking #smoking_yes").click(function() {
		var vSmoking = 1;
		var mode = "smoking";
		var ann_id = $("#ann_id").val();
		$(this).removeClass("rocker-switch__button--deactivated").addClass("rocker-switch__button--yes");
		$("#smoking_no").removeClass("rocker-switch__button--yes").removeClass("rocker-switch__button--no").addClass("rocker-switch__button--deactivated");

		$.post("controllers/new_controller.php", {
			ann_id : ann_id,
			smoking : vSmoking,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}
		}, "json");
	});
	$("#smoking #smoking_no").click(function() {
		var vSmoking = 0;
		var mode = "smoking";
		var ann_id = $("#ann_id").val();
		$(this).removeClass("rocker-switch__button--deactivated").addClass("rocker-switch__button--no");
		$("#smoking_yes").removeClass("rocker-switch__button--yes").removeClass("rocker-switch__button--no").addClass("rocker-switch__button--deactivated");

		$.post("controllers/new_controller.php", {
			ann_id : ann_id,
			smoking : vSmoking,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}
		}, "json");
	});
	
	$("#pet #pet_no").click(function() {
		var vPet = 0;
		var mode = "pet";
		var ann_id = $("#ann_id").val();
		$(this).removeClass("rocker-switch__button--deactivated").addClass("rocker-switch__button--no");
		$("#pet_yes").removeClass("rocker-switch__button--yes").removeClass("rocker-switch__button--no").addClass("rocker-switch__button--deactivated");

		$.post("controllers/new_controller.php", {
			ann_id : ann_id,
			pet : vPet,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}
		}, "json");
	});
	
	$("#pet #pet_yes").click(function() {
		var vPet = 0;
		var mode = "pet";
		var ann_id = $("#ann_id").val();
		$(this).removeClass("rocker-switch__button--deactivated").addClass("rocker-switch__button--yes");
		$("#pet_no").removeClass("rocker-switch__button--yes").removeClass("rocker-switch__button--no").addClass("rocker-switch__button--deactivated");

		$.post("controllers/new_controller.php", {
			ann_id : ann_id,
			pet : vPet,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}
		}, "json");
	});
	
	$("#btn-new-end").click(function() {
		var mode = "announce_ready";
		var ann_id = $("#ann_id").val();
		$.post("controllers/new_controller.php", {
			ann_id : ann_id,
			mode : mode
		}, function(data) {
			if (data.error) {
				console.log(data.msg);
			} else {
				console.log(data.msg);
			}
		}, "json");
	});
	$("#btn-new-show").click(function() {
		var mode = "announce_show";
		var ann_id = $("#ann_id").val();
		$.post("controllers/new_controller.php", {
			ann_id : ann_id,
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
