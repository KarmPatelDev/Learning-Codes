class Bike {
  constructor(speed, color) {
    this.speed = speed;
    this.color = color;
  }

  spec() {
    console.log(`My Bike speed is ${this.speed} and color is ${this.color}`);
  }
}

class Car extends Bike {

  intro() {
    console.log("Hello");
  }

}



const bk1 = new Bike(1000, "green");
const bk2 = new Bike(2000, "red");

const maruti = new Car(3000, "pink");

bk1.spec();
bk2.spec();
maruti.spec();

// bk2.intro(); // it show error because it can't use car property only car can use bike propery
maruti.intro();