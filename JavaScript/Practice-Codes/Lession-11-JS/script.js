/*
async function getSum() {
  return 5;
}

getSum().then(data => {
  console.log(data);
});
*/


/*
async function getSum() {
  return new Promise((res, rej) => {
    setTimeout(() => {
      res("Okay Thanks");
    }, 3000);
  });
}

getSum().then(data => {
  console.log(data);
});
*/


/*
async function getSum(){
    return new Promise((res, rej) => {
          setTimeout(() => {
                res("Okay Thanks");
          }, 3000);
    });
}

async function display(){
    let x = await getSum();
    console.log(x);
}

display();
*/


document.getElementById("myBtn").onclick = async () => {

  try {
    let data = await fetch("https://api.open-meteo.com/v1/forecast?latitude=23.02&longitude=72.57&hourly=temperature_2m");
    // if url incorrect then it not show error
    let data2 = await data.json();
    console.log(data2);

  } catch (error) {
    console.log(error);
  }
}
