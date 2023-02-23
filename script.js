/*
======================= Validation Sign up ==============================
*/
let emailLogIn = document.getElementById("emailLogIn");
let passLogIn = document.getElementById("passLogIn");
let resEmail = document.getElementById("resEmail");
let resPass = document.getElementById("resPass");
let regEmail = /\w+@gmail.com/gi;
let arr = [];

document.getElementById("logIn").onclick = function (e) {
  if (emailLogIn.value.length === 0) {
    e.preventDefault();
    resEmail.innerHTML="Please choose your Email"
    resEmail.style.color = "red";
  }else if( regEmail.test(emailLogIn.value) === false ) {
    e.preventDefault();
    resEmail.innerHTML="Please choose a real email"
    resEmail.style.color = "red";
  }else {
    resEmail.innerHTML=" ";
    arr.push(true);
}

  if (passLogIn.value.length === 0) {
    e.preventDefault();
    resPass.innerHTML="Please choose your password"
    resPass.style.color = "red";
  } else {
    resPass.innerHTML=" ";
    arr.push(true);
  }

  // let form = document.getElementById("formLogIn")
  // if(arr.length === 2){
  // form.submit();
// }
};
