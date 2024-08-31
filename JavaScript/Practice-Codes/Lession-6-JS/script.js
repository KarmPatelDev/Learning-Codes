const person = {
  name: "karm",
  age: 20,
  data: {
    a: 10,
    b: 20
  }
}

const { name: master, age } = person;

// console.log(name);
// console.log(master); //same as upper if we write other name but now "console.log(name);" not work
// console.log(age);

// function display(per) {
//   console.log(`i am ${per.name} and age ${per.age}`);
// }

// function display(per) {
//   const { name, status } = per;
//   console.log(`i am ${name} and age ${age}`);
// }

function display({ name: master, age, data: { a: ten, b: twenty } }) {
  console.log(`i am ${master} and age ${age} and a is ${ten} and b is ${twenty}`);
}

display(person);