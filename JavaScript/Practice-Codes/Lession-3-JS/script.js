function person(name, age) {
  this.name = name;
  this.age = age;
}

let ram = new person("Karm", 20);
let sur = new person("Bholu", 20);

ram.height = 30;

// person.height = 30 // it shows error
let obj = new Object(); //capital letter
obj.name = "Chaku";
console.log(obj);
let str = new String();  //capital letter
str = "KARM";
console.log(str);

// person.height = 30 // it shows error
person.prototype.weight = 50; // it is inherit to all objects
let shyam = new person("Shyam", 38);
console.log(shyam);
console.log(shyam.weight);

console.log(ram);
console.log(sur);
console.log(ram.name);
console.log(sur.age);
console.log(ram.height);