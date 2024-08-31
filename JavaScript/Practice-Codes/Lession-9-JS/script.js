
/*
  document.getElementById("iform").addEventListener("submit", (e) => {
    e.preventDefault(); // it is not work on className
    console.log(e);
    console.log(e.target);
    console.log(e.target.username);
    console.log(e.target.username.value);


    if(e.target.username.value = ""){
        console.log("Username Is Empty");
    }
    else if(e.target.password.value.length < 5){
        console.log("Enter Harder PassWord");
    }
    else{
        console.log("Submit");
    }

    console.log("Confirm");

    let re = /[0-9]{10}/;
    if(!re.test(e.target.phoneNumber.value)){
        console.log("ENter The Valid Email");
    }
    });
*/

//  let re = /ramesh/gi;
//  let re2 = new RegExp("ramesh", "gi"); // it same as above

let pattern = {
  username: /^[a-z\d]{5,10}$/i,
  password: /^[\w@-]{8,20}$/i,
  mobileNumber: /^\d{10}$/i,
  email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,6})(\.[a-z]{2,6})?$/
}


function validate(e) {

  if (!pattern.username.test(e.target.username.value)) {
    let x = document.querySelectorAll("p")[0];
    x.style.display = "block";
    return false;
  }

  if (!pattern.password.test(e.target.password.value)) {
    let x = document.querySelectorAll("p")[1];
    x.style.display = "block";
    return false;
  }


  if (!pattern.email.test(e.target.email.value)) {
    let x = document.querySelectorAll("p")[2];
    x.style.display = "block";
    return false;
  }


  if (!pattern.phoneNumber.test(e.target.phoneNumber.value)) {
    let x = document.querySelectorAll("p")[3];
    x.style.display = "block";
    return false;
  }

  return true;
}
document.getElementById("iform").addEventListener("submit", (e) => {

  e.preventDefault(); // it is not work on className

  if (validate(e)) {
    console.log("Submited");
  }
  else {
    console.log("submitted false");
  }

});