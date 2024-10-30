<!DOCTYPE html>
<html lang="en">

<head>

  <title>SIGN IN WITH PHONE NUMBER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS File -->
    <link rel="stylesheet" href="style2.css">

</head>
<body>
	<header>
        <div class="bx bx-menu" id="menu-icon"></div>
	  </header>
        <div class="sorry">
				<h4 class="mb-3">SORRY, OUR WEBSITE IS CURRENTLY OFFLINE</h4>
				<h6 class="text-white">We will update you when we are back online.</h6>
				<a href="index2.html" class="btn"> BACK TO HOMEPAGE </a>
				   	</div>
											
			<!-- FORM END -->
		

<script type="text/javascript">
	function PasswordReset() {
  	$('form.reset-password-form').on('submit', function(e) {
      e.preventDefault();
      $('.reset-form')
      .removeClass('d-block')
      .addClass('d-none');
	    $('.reset-confirmation').addClass('d-block');
		});
	}

	window.addEventListener('load', function() {
    PasswordReset();
	});
</script>
</body>
</html>