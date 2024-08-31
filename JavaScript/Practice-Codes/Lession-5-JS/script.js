let arr = [1, 2, 3, 4, 5];

let arr2 = arr.map(x => {
  console.log(x);
  return 3 * x; // it return a value to new array
});
// let arr2 = arr.map(x => 3*x);
// let arr2 = arr.map(x => 3*x).reverse();

console.log(arr2);

let arr3 = arr.forEach(x => {
  return x + 1; //it shows undefined
});
console.log(arr3);


// let arr4 = arr.filter(y => {
//     return y > 2; // it filter the array
// });
let arr4 = arr.filter(y => y > 2);
let arr5 = arr.map(y => 3 * y).filter(y => y > 9).reverse();
console.log(arr4);
console.log(arr5);