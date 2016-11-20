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
		<script type="text/javascript">
			function getAge() {
				var day = document.frm.day;
				var month = document.frm.month;
				var year = document.frm.year;
				var d = "";
				var m = "";
				var y = "";
				var nowdt = new Date();
				var nd = parseInt(nowdt.getDate());
				var nm = parseInt(nowdt.getMonth());
				var ny = parseInt(nowdt.getFullYear());
				var age = document.frm.age;
				var ageYear = 0;
				var ageMonth = 0;

				for ( i = 0; i < day.options.length; i++) {
					if (day.options[i].selected) {
						d = day.options[i].value;
					}
				}

				for ( i = 0; i < month.options.length; i++) {
					if (month.options[i].selected) {
						m = month.options[i].value;
					}
				}

				for ( i = 0; i < year.options.length; i++) {
					if (year.options[i].selected) {
						y = year.options[i].value;
					}
				}

				if (d != "" && m != "" && y != "") {
					s = new Date(y, parseInt(m) - 1, d);
					d = parseInt(s.getDate());
					m = parseInt(s.getMonth());
					y = parseInt(s.getFullYear());

					ageYear = ny - y;
					if (nm > m) {
						ageMonth = nm - m;
					} else if (nm == m) {
						if (nd >= d) {
							ageMonth = 0;
						} else {
							ageMonth = 11;
							ageYear = ageYear - 1;
						}
					} else {
						ageMonth = m - nm;
						ageYear = ageYear - 1;
					}
					//age.value = ageYear + "ปี " + ageMonth + "เดือน";
					if(ageYear < 18){
						alert('คุณอายุไม่ถึง 18');
					}
				} else {
					//age.value = "";
				}

			}
		</script>
	</head>

	<body>

		<form action="#" method="post" name="frm">

			วันที่
			<select name="day" id="day" onchange="getAge()">
				<option value="">-</option>
				<?
				for ($i = 1; $i <= 31; $i++) {
					echo "<option value=\"" . $i . "\">" . $i . "</option>";
				}
				?>
			</select>&nbsp;
			เดือน
			<select name="month" id="month" onchange="getAge()">
				<option value="">-</option>
				<?
				for ($m = 1; $m <= 12; $m++) {
					echo "<option value=\"" . $m . "\">" . $m . "</option>";
				}
				?>
			</select>&nbsp;
			ปี
			<select name="year" id="year" onchange="getAge()">
				<option value="">-</option>
				<?
				$thYear = date("Y");
				for ($Y = $thYear; $Y >= 1896; $Y--) {
					echo "<option value=\"" . ($Y) . "\">" . $Y . "</option>";
				}
				?>
			</select>
			<br/>
			<br/>
			คุณอายุ:
			<input type="text" name="age" readonly>

		</form>
	</body>
</html>
