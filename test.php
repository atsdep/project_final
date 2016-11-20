<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>HTML</title>
		<meta name="description" content="">
		<meta name="author" content="adtha">

		<meta name="viewport" content="width=device-width; initial-scale=1.0">

		<!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">

		<?php
		require ('config/js.php');
		?>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script type="text/javascript" src="js/getAge.js"></script>
		<script>
			$(function() {
				var dateFormat = "dd/mm/yy",
				    from = $("#from").datepicker({
					dateFormat : 'dd/mm/yy',
					showButtonPanel : true,
					minDate : 0

				}).on("change", function() {
					to.datepicker("option", "minDate", getDate(this));
				}),
				    to = $("#to").datepicker({
					dateFormat : 'dd/mm/yy',
					showButtonPanel : true,
					minDate : 0

				}).on("change", function() {
					from.datepicker("option", "maxDate", getDate(this));
				});

				function getDate(element) {
					var date;
					try {
						date = $.datepicker.parseDate(dateFormat, element.value);
					} catch( error ) {
						date = null;
					}

					return date;
				}

			});
		</script>
	</head>

	<body>

		<label for="from">From</label>
		<input type="text" id="from" name="from">
		<label for="to">to</label>
		<input type="text" id="to" name="to"
	</body>
</html>
