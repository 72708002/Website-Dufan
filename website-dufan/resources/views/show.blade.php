<html>
	<head>
	<title></title>
	<meta content=" ">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script>
	$(function() {
	$("#visible").click(function() {
		$('#invisible').toggleClass("show");
		});
	});
	</script>
	<style>
	.hide{display:none;}
	.show{display:block;}
	</style>
	</head>
	<body>
	<p id="visisble">Click here</p>
	<p id="invisible" class="hide">See mee now here</p>
	</body>
	</html>