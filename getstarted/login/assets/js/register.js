function showpas() {
	var pass = document.getElementById("password");
	var showpass = document.getElementById("showpass");
	if (pass.type === "password") {
		pass.type = "text";
		showpass.classList.remove("fa-eye");
		showpass.classList.add("fa-eye-slash");
	} else {
		pass.type = "password";
		showpass.classList.remove("fa-eye-slash");
		showpass.classList.add("fa-eye");
	}
}
function showpas1() {
	var cpass = document.getElementById("confirmpassword");
	var showpass1 = document.getElementById("showpass1");
	if (cpass.type === "password") {
		cpass.type = "text";
		showpass1.classList.remove("fa-eye");
		showpass1.classList.add("fa-eye-slash");
	} else {
		cpass.type = "password";
		showpass1.classList.remove("fa-eye-slash");
		showpass1.classList.add("fa-eye");
	}
}

function checkpass() {
	var password = $("#password").val();
	var confirmPassword = $("#confirmpassword").val();

	if (password != confirmPassword)
		$("#divCheckPasswordMatch").html("Passwords do not match!");
	else $("#divCheckPasswordMatch").html("Passwords match.");
	if (password == "" || confirmPassword == "")
		$("#divCheckPasswordMatch").html("");
}
//another one
function validate() {
	var p, c;
	p = password.value;
	c = confirmpassword.value;
	if (p != c) {
		alert("Confirm Your Password again");
		return false;
	}
	return true;
}
