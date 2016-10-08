$(document).ready(function() {
			$(".error").hide();
			$("#btnLogin").click(function(e) {
				var tEmail = $("#LoginEmail").val();
				var tPassword = $("#LoginPassword").val();

				$.post("process/Test_Login.php", {
					e : tEmail,
					p : tPassword
				}, function(data) {
					if (data.error) {
						alert("ผิดพลาด");
					} else {
						location.replace("index.php");
					}
				})
			});
});