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

	var cvv, cdnum;


	cvv = document.regForm.cvv.value;
	cdnum = document.regForm.cdnum.value;


	if (cdnum.length != 12) {
		alert("Invalid card number");
		return false;
	}

	else if (cvv.length != 3) {

		alert("CVV is only 3 digit ");
		return false;
	}
	else {

		alert("Register Form submitted successfully");

		return true;
	}
}



