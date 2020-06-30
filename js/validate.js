//get data from the form
var fullname= document.forms["contact"]["fullname"];
var email= document.forms["contact"]["email"];
var phone= document.forms["contact"]["phone"];
var company= document.forms["contact"]["company"];
var subject= document.forms["contact"]["subject"];
var message= document.forms["contact"]["message"];

//getting error display objects
var fullnameerror= document.getElementById('fullnameerror');
var emailerror= document.getElementById('emailerror');
var phoneerror= document.getElementById('phoneerror');
var companyerror= document.getElementById('companyerror');
var subjecterror= document.getElementById('subjecterror');
var messageerror= document.getElementById('messageerror');

//setting event listeners
fullname.addEventListener("blur",fullnameverify, true);
email.addEventListener("blur",emailverify, true);
phone.addEventListener("blur",phoneverify, true);
company.addEventListener("blur",companyverify, true);
subject.addEventListener("blur",subjectverify, true);
message.addEventListener("blur",messageverify, true);

//validation function 
function validate(){
	//name  validation
	if(fullname.value == ""){
			fullname.style.border = "1px groove red";
			fullnameerror.innerHTML = "Name is required";
			fullname.focus();
			return false;
		}
	//email  validation
		if(email.value == ""){
			email.style.border = "1px groove red";
			emailerror.innerHTML = "Email is required";
			email.focus();
			return false;
		}
		//phone validation
		if(phone.value == ""){
			phone.style.border = "1px groove red";
			phoneerror.innerHTML = "Phone is required";
			phone.focus();
			return false;
		}
		//phone validation
		if(company.value == ""){
			company.style.border = "1px groove red";
			companyerror.innerHTML = "Company is required";
			company.focus();
			return false;
		}
		//email validation
		if(email.value == ""){
			email.style.border = "1px groove red";
			emailerror.innerHTML = "Email is  required";
			email.focus();
			return false;
		}
		//subject validation
		if(subject.value == ""){
			subject.style.border = "1px groove red";
			subjecterror.innerHTML = "Subject is required";
			subject.focus();
			return false;
		}
		//confirm subject validation
		if(message.value == ""){
			message.style.border = "1px groove red";
			messageerror.innerHTML = "Message is required";
			message.focus();
			return false;
		}
	}

	//event handler functions
	function fullnameverify(){
		if (fullname.value !="") {
			fullname.style.border = " 1px solid rgba(10, 180, 180, 1)";
			fullnameerror.innerHTML = "";
			return true;
		}

	}
	function emailverify(){
		if (email.value !="") {
			email.style.border = " 1px solid rgba(10, 180, 180, 1)";
			emailerror.innerHTML = "";
			return true;
		}

	}
	function phoneverify(){
		if (phone.value !="") {
			phone.style.border = " 1px solid rgba(10, 180, 180, 1)";
			phoneerror.innerHTML = "";
			return true;
		}
		
	}
	function emailverify(){
		if (email.value !="") {
			email.style.border = " 1px solid rgba(10, 180, 180, 1)";
			emailerror.innerHTML = "";
			return true;
		}
		
	}
	function companyverify(){
		if (company.value !="") {
			company.style.border = " 1px solid rgba(10, 180, 180, 1)";
			companyerror.innerHTML = "";
			return true;
		}
		
	}
	function subjectverify(){
		if (subject.value !="") {
			subject.style.border = " 1px solid rgba(10, 180, 180, 1)";
			subjecterror.innerHTML = "";
			return true;
		}
		
	}
	function messageverify(){
		if (message.value !="") {
			message.style.border = " 1px solid rgba(10, 180, 180, 1)";
			messageerror.innerHTML = "";
			return true;
		}
		
	}