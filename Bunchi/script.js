function validateForm() {
  var fname = document.forms["myForm"]["fname"].value;
  var lname = document.forms["myForm"]["lname"].value;
  var email = document.forms["myForm"]["mail"].value;
  var subject = document.forms["myForm"]["subject"].value;

  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (fname == "") {
    alert("First name must be filled out");
    return false;
  }
  else if (lname == "") {
    alert("Last name must be filled out");
    return false;
  }
  else if (email == "") {
    alert("email must be filled out");
    return false;
  }
  else if (subject == "") {
    alert("Message feild cannot be empty");
    return false;
  }
  else if (!email.match(mailformat)) {
    alert("email is not valid")
    return false;
  }

}





