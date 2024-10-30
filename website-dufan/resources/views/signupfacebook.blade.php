<!DOCTYPE html>
<html lang="en">
<head>
    <title>SIGN UP FACEBOOK</title>
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
    <div class="signup">
        <span>Welcome To</span>
            <h1>Dufan Ancol</h1>
        
        <form class="needs-validation">
            <div class="form-group was-validated">
                <input class="form-control" type="name" id="name" required>
                <div class="invalid-feedback">
                    Please enter your name
                </div>
            </div>
            <div class="form-group was-validated">
                <input class="form-control" type="name" id="name" required>
                <div class="invalid-feedback">
                    Please enter your username account
                </div>
            </div>
			<div class="form-group was-validated">
			<span><i class="fa fa-calender"></i></span>
			<input class="form-control" type="date" id="date" required>
				<div class="invalid-feedback">
					Please enter your date of birth
                </div>
			</div>
			<div class="form-group was-validated">
                <input class="form-control" type="password" id="password" required>
                <div class="invalid-feedback">
                    Please create your password
                </div>
			</div>
			<div class="form-group was-validated">
                <input class="form-control" type="password" id="password" required>
                <div class="invalid-feedback">
           			Please enter your confirm password
				</div>
            </div>
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>
            </div>
            <div class="text-center"> 
                <a href="pesan.html" class="btn">SIGN UP</a>
			</div>
			<div class="text-right ">
			    <a href="reset.html" class="need">Need help?</a>
			</div>
			<div class="text-center">
			<div class="text-center text-white">or sign up with</div>
		        <a href="signupphone.html" class="btn btn-social btn-phonenumber">Phone Number</a>
				<a href="signup.html" class="btn btn-social btn-google">Google</a>
			</div>
			<div class="text-center text-white">Already have an account?
				<a class="sign-link" href="signin.html">Sign in now</a>
				<br><a href="index2.html" class="btn"> BACK TO HOMEPAGE </a></br>							
			</div>
        </form>
		</div>
	</div>
</body>
</html>