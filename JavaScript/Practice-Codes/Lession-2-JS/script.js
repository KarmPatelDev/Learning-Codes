/*
let obj = {
  "first name": "karm",
  age: 18,
  bike: {
    name: "xz",
    age: 50
  },
  arr: [1, 2, 3]
}
for (let x in obj) {
  console.log(x);
}
for (let x of obj.arr) {
  console.log(x);
}
*/

/*
function myfunc(a, b = 10){
    return a + b;
}

let x = myfunc(12);
console.log(x);
*/

/*
let arr = [1, 2, 3, 4, 7, 8];
let item = [];

arr.forEach(function(x) {
  console.log(x);
  item.push(x);
});

console.log(item);
*/

/*
let x = document.getElementById("name");
console.log(x);
x.innerHTML = "<i><u>Patel Karm Shaileshkumar</u></i>";
x.style.color = "blue";
*/

/*
let arr2 = [
  {name: "Karm", age: 20},
  {name: "Abhay", age: 19},
  {name: "Dhyey", age: 18},
  {name: "Aryan", age: 17},
]

arr2.forEach((x) => {
  console.log(`Hello My Name is ${x.name} and Age is ${x.age}.`);
});
*/

/*
let y = document.getElementsByClassName("name2");
console.log(y);
for(let i = 0; i < y.length; i++){
  y[i].innerText = "Good Morning";
}

let z = document.getElementsByName("name3");
console.log(z);
for(let i = 0; i < z.length; i++){
  z[i].style.color = "blue";
}

let w = document.getElementsByTagName("h2");
console.log(w);
for(let i = 0; i < w.length; i++){
  w[i].style.textAlign = "center";
}
*/

/*
let x = document.getElementById("name");
x.onclick = () => {
  x.style.color = "pink";
}
x.addEventListener("mouseover", () => {
  x.style.color = "green";
})

alert("Hello World");

let z = prompt("How Many Years Are You Old?");
console.log(z);

let y = confirm("Are You Boy?");
console.log(y);
*/

/*
let x = document.querySelector("#name");
console.log(x);

let y = document.querySelector(".name2");
console.log(y);


let z = document.querySelector("h2[name='name3]'");
console.log(z);


let w = document.querySelectorAll("h2")[1];
console.log(w);
*/