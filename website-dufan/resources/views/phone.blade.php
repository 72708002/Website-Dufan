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
        <div class="phone">
          <span>Welcome To</span>
            <h1>Dufan Ancol</h1>
						
		<form class="needs-validation">
			<div class="form-group was-validated">
			<input class="form-control" type="phone" id="phone" required>
				<div class="invalid-feedback">
					Please enter your phone number
				</div>
            </div>		
			 <!-- SIGN IN BUTTON -->
            <div class="text-center"> 
                <a href="otp.html" class="btn">Send OTP</a>
			</div>
			<div class="text-center">
				<div class="text-center text-white">or sign in with</div>
		        <a href="signin.html" class="btn btn-social btn-google">Google</a>
				<a href="signinfacebook.html" class="btn btn-social btn-facebook">Facebook</a>
			</div>
			<div class="text-center mb-2 text-white">Don't have an account? 
			<a class="signup-link" href="signup.html">Sign up now.</a>
			<a href="index2.html" class="btn"> BACK TO HOMEPAGE </a>								
			</div>
		</form>
		</div>	
</body>
</html>
