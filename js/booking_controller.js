$(document).ready(function() {
	
});

var day = new Array(<?php echo json_encode($date); ?>
			);

$(function() {
	var d = new Date();
	var dateFormat = "mm/dd/yy",
	    from = $("#from").datepicker({
		showButtonPanel : true,
		minDate : 0,
		maxDate : '+3M',
		beforeShowDay : function(date) {
			var datestring = jQuery.datepicker.formatDate('yy-mm-dd', date);
			var hindex = $.inArray(datestring);
			if (hindex > -1) {
				return [true];
			}
			var aindex = $.inArray(datestring, day[0]);
			return [aindex == -1];
		},
		beforeShow : function(input) {
			setTimeout(function() {
				var buttonPane = $(input).datepicker("widget").find(".ui-datepicker-buttonpane");

				var btn = $('<button type="button" class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all">Clear</button>');
				btn.unbind("click").bind("click", function() {
					$.datepicker._clearDate(input);
				});

				btn.appendTo(buttonPane);

			}, 1);
		}
	}).on("change", function() {
		to.datepicker("option", "minDate", getDate(this));
	}),
	    to = $("#to").datepicker({
		showButtonPanel : true,
		maxDate : '+3M',
		beforeShowDay : function(date) {
			var datestring = jQuery.datepicker.formatDate('yy-mm-dd', date);
			var hindex = $.inArray(datestring);
			if (hindex > -1) {
				return [true];
			}
			var aindex = $.inArray(datestring, day[0]);
			return [aindex == -1];
		},
		beforeShow : function(input) {
			setTimeout(function() {
				var buttonPane = $(input).datepicker("widget").find(".ui-datepicker-buttonpane");

				var btn = $('<button type="button" class="ui-datepicker-current ui-state-default ui-priority-secondary ui-corner-all">Clear</button>');
				btn.unbind("click").bind("click", function() {
					$.datepicker._clearDate(input);
				});

				btn.appendTo(buttonPane);

			}, 1);
		}
	}).on("change", function() {
		from.datepicker("option", "maxDate", getDate(this));
	});

	function getDate(element) {
		var date;
		try {
			date = $.datepicker.parseDate(dateFormat, element.value);
		} catch(error) {
			date = null;
		}
		return date;
	}

}); 