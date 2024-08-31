// spread operator

let arr = [1, 2, 3];
console.log(...arr);

let arr2 = [4, 5];
let arr3 = [6, 7];

let arr4 = [...arr, ...arr2, ...arr3];
console.log(arr4);

function s(x, y) {
  return x + y;
}

let arr5 = [10, 31, 31];
console.log(s(...arr5));

let obj = {
  name: "suresh",
  age: 22
}

let obj2 = { ...obj };

console.log(obj, obj2);