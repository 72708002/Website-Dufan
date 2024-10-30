const container = document.querySelector(".container"),
pwShowHide = document.querySelectorAll(".showhidepw"),
pwFields = document.querySelectorAll(".password"),
signUp = document.querySelector(".signup-link");

// js code to show and hide password and change icon
pwShowHide.forEach(eyeIcon => {
	eyeIcon.addEventListener("click", () => {
		pwFields.forEach(pwField => {
			if (pwField.type === "password") {
				pwField.type = "text";
				pwShowHide.forEach(icon => {
					icon.classList.replace("fa-eye-slash", "fa-eye");
				});
			} else {
				pwField.type = "password";
				pwShowHide.forEach(icon => {
					icon.classList.replace("fa-eye", "fa-eye-slash");
				});
			}
		});
	});
});

// js code to appear signup form
signUp.addEventListener("click", function () {
	container.classList.add("active");
});

function signUpValidation() {
	let name = document.forms["signUpForm"]["name"].value;
	let email = document.forms["signUpForm"]["email"].value;
	let password = document.forms["signUpForm"]["password"].value;
	let confirmpsw = document.forms["signUpForm"]["confirmpsw"].value;

	// Simple email regex pattern
	let regEmail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

	if (!regEmail.test(email)) {
		alert("Invalid email format");
		return false;
	}

	if (password !== confirmpsw) {
		alert("Passwords do not match");
		return false;
	}

	// Continue with further validation as needed
	return true;
}
