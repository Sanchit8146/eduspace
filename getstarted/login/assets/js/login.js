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
