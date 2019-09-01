function loadData() {

	const realFileBtn = document.getElementById("real-file");
	const customBtn = document.getElementById("custom-button");
	const customTxt = document.getElementById("custom-text");

	customBtn.addEventListener("click", function () {
		realFileBtn.click();
	});

	realFileBtn.addEventListener("change", function () {
		if (realFileBtn.value) {
			customTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
		} else {
			customBtn.innerHTML = "No file chose";
		}
	});
}

function validateForm() {

	var email, password, retypepw, phone;

	email = document.regForm.email.value;
	password = document.regForm.passw.value;
	retypepw = document.regForm.repasswd.value;
	phone = document.regForm.phoneNo.value;



	if (password.length < 8) {

		alert("Password is too short");
		return false;
	}

	else if (password != retypepw) {

		alert("Passwords are not matching");
		return false;
	}
	else if (phone.length != 10 || !phone.match(/^[0-9]{10}$/)) {

		alert("Give valid phone number");
		return false;
	}

	else {

		alert("Register Form submitted successfully");

		return true;
	}
}