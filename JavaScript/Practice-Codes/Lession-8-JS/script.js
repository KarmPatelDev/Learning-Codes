
// document.getElementById("ibtn").onclick = () => {
//   localStorage.setItem("movies", "robot2");
//   localStorage.setItem("movies2", "chitti");
//   let w = localStorage.getItem("movies");
//   console.log(w);
// }

// document.getElementById("remove").onclick = () => {
//   localStorage.removeItem("movies");
//   let w = localStorage.getItem("movies");
//   console.log(w);
// }

// document.getElementById("removeAll").onclick = () => {
//   localStorage.clear();
// }


/*   
let arr = [];
let arr2 = [];

   document.getElementById("ibtn").onclick = () => {
       arr.push("mummy");
       arr.push("mummy returns");
       localStorage.setItem("movies", arr);
       arr2.push("robot");
       arr2.push("robot 2.0");
       localStorage.setItem("movies2", JSON.stringify(arr2));

       let w = localStorage.getItem("movies");
       console.log(w); 
       
       let q = JSON.parse(localStorage.getItem("movies2"));
       console.log(q); 

       let r = localStorage.getItem("movies");
       console.log(r[0]); 
       let s = localStorage.getItem("movies2");
       console.log(s[0]); 
       let t = JSON.parse(localStorage.getItem("movies2"));
       console.log(t[0]); 

   }
*/

let arr = [];

document.getElementById("ibtn").onclick = () => {
  let y = document.getElementById("ibox").value;
  arr.push(y);
  localStorage.setItem("names", JSON.stringify(arr));

  document.getElementById("ibox").value = "";
  document.getElementById("mydiv").innerHTML = "";

  let ans = JSON.parse(localStorage.getItem("names"));

  ans.forEach(x => {
    document.getElementById("mydiv").innerHTML += "<p>" + x + "</p>";
  })


}

document.getElementById("remove").onclick = () => {
  localStorage.removeItem("names");
  let w = localStorage.getItem("names");
  console.log(w);
}

document.getElementById("removeAll").onclick = () => {
  localStorage.clear();
}