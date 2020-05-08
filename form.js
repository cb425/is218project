// JavaScript Document

function validateForm() {
	var fname = document.forms["form"]["FirstName"].value;
	var lname = document.forms["form"]["LastName"].value;
	var email = document.forms["form"]["username"].value;
	var major = document.forms["form"]["major"].value;
	var college = document.forms["form"]["college"].value;
	var password = document.forms["form"]["password"].value;
	var emailSign = email.includes("@");
	
	var fnamevalid1 = fname.includes("1");
	var fnamevalid2 = fname.includes("2");
	var fnamevalid3 = fname.includes("3");
	var fnamevalid4 = fname.includes("4");
	var fnamevalid5 = fname.includes("5");
	var fnamevalid6 = fname.includes("6");
	var fnamevalid7 = fname.includes("7");
	var fnamevalid8 = fname.includes("8");
	var fnamevalid9 = fname.includes("9");
	var fnamevalid0 = fname.includes("0");
	
	var lnamevalid1 = lname.includes("1");
	var lnamevalid2 = lname.includes("2");
	var lnamevalid3 = lname.includes("3");
	var lnamevalid4 = lname.includes("4");
	var lnamevalid5 = lname.includes("5");
	var lnamevalid6 = lname.includes("6");
	var lnamevalid7 = lname.includes("7");
	var lnamevalid8 = lname.includes("8");
	var lnamevalid9 = lname.includes("9");
	var lnamevalid0 = lname.includes("0");	
	
	if (fname == "" || lname == "") {
		alert("Please fill out your full name.");
		return false;
	} 
	else if (fnamevalid1 == true || fnamevalid2 == true || fnamevalid3 == true || fnamevalid4 == true || fnamevalid5 == true || fnamevalid6 == true || fnamevalid7 == true || fnamevalid8 == true || fnamevalid9 == true|| fnamevalid0 == true) {
		alert("Please enter a first name without a number.");
		return false;
	}
	else if (lnamevalid1 == true || lnamevalid2 == true || lnamevalid3 == true || lnamevalid4 == true || lnamevalid5 == true || lnamevalid6 == true || lnamevalid7 == true || lnamevalid8 == true || lnamevalid9 == true|| lnamevalid0 == true) {
		alert("Please enter a last name without a number.");
		return false;
	}
	else if (email == "") {
		alert("Email must be filled out.")
		return false;
	}
	else if (emailSign == false) {
		alert("Please enter a valid email address.")
		return false;
	}
	else if (college == "") {
		alert("College must be filled out.")
		return false;
	}
	else if (major == "") {
		alert("Major must be filled out.")
		return false;
	}
	else if (password == "") {
		alert("Password must be filled out.")
		return false;
	}
}
