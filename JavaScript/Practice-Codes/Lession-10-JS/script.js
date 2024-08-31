document.getElementById("myBtn").onclick = () => {

  fetch("https://api.open-meteo.com/v1/forecast?latitude=23.02&longitude=72.57&hourly=temperature_2m")
    //only fetch return promise means it resolve but take time
    .then(data => {
      // console.log(data.json());
      return data.json();
      // return data.json();
      //first .then data is return response if we don't write .json() and if we write .json() then it return another promise for resolving 
    })
    .then(data2 => {
      console.log(data2);
      console.log(data2.hourly_units.time);
      // now in second .then it return use a object that's the answer
    })
    .catch(err => {
      console.log(err);
      //for error
    })


}