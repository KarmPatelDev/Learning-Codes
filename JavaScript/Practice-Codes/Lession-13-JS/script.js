let form = document.getElementById("iform");

const pattern = {
    first: /^[a-zA-Z]{0,20}$/i,
    last: /^[a-zA-Z]{0,20}$/i,
    phonenumber: /^\d{10}$/i,
    username: /^[a-z0-9]{5,15}$/i,
    email: /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,6})(\.[a-z]{2,6})?$/i,
    password: /^[\w@-\d]{8,20}$/i,
}

const validate = (e) => {

    let x = document.querySelectorAll("p")[0];
    if(!pattern.first.test(e.target.first.value)) {
        x.style.display = "block";
        e.target.first.value = "";
        return false;
    }
    x.style.display = "none";

    x = document.querySelectorAll("p")[1];
    if(!pattern.last.test(e.target.last.value)) {
        let x = document.querySelectorAll("p")[1];
        x.style.display = "block";
        e.target.last.value = "";
        return false;
    }
    x.style.display = "none";

    x = document.querySelectorAll("p")[2];
    if(!pattern.phonenumber.test(e.target.phonenumber.value)) {
        let x = document.querySelectorAll("p")[2];
        x.style.display = "block";
        e.target.password.value = "";
        return false;
    }
    x.style.display = "none";
    
    x = document.querySelectorAll("p")[3];
    if(!pattern.username.test(e.target.username.value)) {
        let x = document.querySelectorAll("p")[3];
        x.style.display = "block";
        e.target.username.value = "";
        return false;
    }
    x.style.display = "none";
    
    x = document.querySelectorAll("p")[4];
    if(!pattern.email.test(e.target.email.value)) {
        let x = document.querySelectorAll("p")[4];
        x.style.display = "block";
        e.target.email.value = "";
        return false;
    }
    x.style.display = "none";
    
    x = document.querySelectorAll("p")[5];
    if(!pattern.password.test(e.target.password.value)) {
        let x = document.querySelectorAll("p")[5];
        x.style.display = "block";
        e.target.password.value = "";
        return false;
    }
    x.style.display = "none";
    
    x = document.querySelectorAll("p")[6];
    if((!pattern.password.test(e.target.confirmpassword.value)) && (e.target.password.value != e.target.confirmpassword.value)) {
        let x = document.querySelectorAll("p")[6];
        x.style.display = "block";
        e.target.confirmpassword.value = "";
        return false;
    }
    x.style.display = "none";

    return true;
};

const removeInput = (e) => {
        e.target.first.value = "";
        e.target.last.value = "";
        e.target.phonenumber.value = "";
        e.target.username.value = "";
        e.target.email.value = "";
        e.target.password.value = "";
        e.target.confirmpassword.value = "";
};

form.addEventListener("submit", (e) => {
    
    e.preventDefault();

    const url = "https://jsonplaceholder.typicode.com/posts";
    let data = new URLSearchParams();

    for(const pair of new FormData(e.target)){
        data.append(pair[0], pair[1]);
    }

    console.log(data);

    if(validate(e)){
        try{
          fetch(url, {
            method: "POST",
            body: data
          })
          .then(res => res.json())
          .then(data2 => console.log(data2));

          removeInput(e);
          console.log("Congratulations, Form is Submitted");
        }catch(err){
            console.log("Sorry, Form is not Submitted");
        }   
    }
    else{
        console.log("Sorry, Form is not Submitted");
    }
});