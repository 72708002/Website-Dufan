<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIGN IN EMAIL GOOGLE</title>
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
    <div class="signin">
        <span>Welcome To</span>
            <h1>Dufan Ancol</h1>
        
        <form class="needs-validation">
            <div class="form-group was-validated">
                <input class="form-control" type="email" id="email" required>
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            </div>
            <div class="form-group was-validated">
                <input class="form-control" type="password" id="password" required>
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>
            </div>
            <div class="text-center"> 
				<a href="pesan.html" class="btn">SIGN IN</a>
			</div>
			<div class="text-right ">
			    <a href="reset.html" class="need">Need help?</a>
			</div>
			<div class="text-center">
			<div class="text-center text-white">or sign in with</div>
		        <a href="phone.html" class="btn btn-social btn-phonenumber">Phone Number</a>
				<a href="signinfacebook.html" class="btn btn-social btn-facebook">Facebook</a>
			</div>
			<div class="text-center text-white">Don't have an account? 
				<a class="signup-link" href="signup.html">Sign up now</a>
				<br><a href="/" class="btn"> BACK TO HOMEPAGE </a></br>							
			</div>
        </form>
    </div>
</body>
</html>