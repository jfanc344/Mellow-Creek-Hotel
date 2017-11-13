
//gettting all inputs
var FirstName = document.forms["register"]["FirstName"];
var LastName = document.forms["register"]["LastName"];
var Email = document.forms["register"]["Email"];
var dob = document.forms["register"]["DOB"];
var Phone = document.forms["register"]["Phone"];
var username = document.forms["register"]["username"];
var password = document.forms["register"]["password"];
var password2 = document.forms["register"]["password2"];

//gettting all error divs
var fname_error = document.getElementById("fname_error");
var lname_error = document.getElementById("lname_error");
var email_error = document.getElementById("email_error");
var dob_error = document.getElementById("dob_error");
var phone_error = document.getElementById("phone_error");
var username_error = document.getElementById("username_error");
var pass_error = document.getElementById("pass_error");
var pass2_error = document.getElementById("pass2_error");

//setting all event listeners

FirstName.addEventListener("blur", FirstNameVerify, true);
LastName.addEventListener("blur", LastNameVerify, true);
Email.addEventListener("blur", EmailVerify, true);
dob.addEventListener("blur", dobVerify, true);
Phone.addEventListener("blur", PhoneVerify, true);
username.addEventListener("blur", usernameVerify, true);
password.addEventListener("blur", passwordVerify, true);

//validation register Member
function Validate(){
  if(FirstName.value == ""){
    FirstName.style.border = "2px solid red";
    fname_error.textContent = "First name is required";
    FirstName.focus();
    return false;
  }
  if(LastName.value == ""){
    LastName.style.border = "2px solid red";
    lname_error.textContent = "Last name is required";
    LastName.focus();
    return false;
  }
  if(Email.value == ""){
    Email.style.border = "2px solid red";
    email_error.textContent = "Email is required";
    Email.focus();
    return false;
  }
  if(dob.value == ""){
    dob.style.border = "2px solid red";
    dob_error.textContent = "Date of birth name is required";
    dob.focus();
    return false;
  }
  if(Phone.value == ""){
    Phone.style.border = "2px solid red";
    phone_error.textContent = "Phone is required";
    Phone.focus();
    return false;
  }
  if(username.value == ""){
    username.style.border = "2px solid red";
    username_error.textContent = "Username name is required";
    username.focus();
    return false;
  }
  if(password.value == ""){
    password.style.border = "2px solid red";
    pass_error.textContent = "Password is required";
    password.focus();
    return false;
  }

if(password.value != password2.value){
  password2.style.border = "2px solid red";
  pass_error.textContent = "The 2 Passwords dont match";
  password.focus();
  return false;
}
}
/////////////////////////  event handler functions /////////////////////////////

function FirstNameVerify(){
  if (FirstName.value !=""){
      FirstName.style.border = "1px solid #ccc";
      fname_error.textContent = " ";
      return true;
  }
}
function LastNameVerify(){
  if (LastName.value !=""){
      LastName.style.border = "1px solid #ccc";
      lname_error.innerHTML = "";
      return true;
  }
}
function EmailVerify(){
  if (Email.value !=""){
      Email.style.border = "1px solid #ccc";
      email_error.innerHTML = "";
      return true;
  }
}
function dobVerify(){
  if (dob.value !=""){
      dob.style.border = "1px solid #ccc";
      dob_error.innerHTML = "";
      return true;
  }
}
function PhoneVerify(){
  if (Phone.value !=""){
      Phone.style.border = "1px solid #ccc";
      phone_error.innerHTML = "";
      return true;
  }
}
function usernameVerify(){
  if (username.value !=""){
      username.style.border = "1px solid #ccc";
      username_error.innerHTML = "";
      return true;
  }
}
function passwordVerify(){
  if (password.value !=""){
      password.style.border = "1px solid #ccc";
      pass_error.innerHTML = "";
      return true;
  }
}



function checkTerms() {
     if(document.register.terms.checked)
     {
         document.register.submit.disabled=false;
     }
     else
     {
         document.register.submit.disabled=true;
     }
 }
