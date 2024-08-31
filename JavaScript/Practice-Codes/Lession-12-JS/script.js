/*
//FOR JSON DATA
    let data = {
        name: "Karm",
        status: "Programmer"
    }

    document.getElementById("myBtn").onclick = () => {
        const url = "URL_FOR_POST_REQUEST";

        fetch(url, {
            method: "post",
            body: JSON.stringify(data),
            headers:{
                'Content-Type':'application/json'
            }
        }).then(res => res.json())
        .then(data2 => console.log(data2));
    } 
*/




//FOR FORM DATA

let data = {
  name: "Karm",
  status: "Programmer"
}

document.getElementById("myForm").onsubmit = (e) => {
  e.preventDefault();
  //URL ENcoded
  //MultiPart
  // FOR POST PUT DELETE METHOD IS SAME

  /*
   //Search Param
   var url1 = new URL('https://example.com?foo=1&bar=2');

   var params = new URLSearchParams(url1.search);
   //url1.search   =>  return ?foo=1&bar=2 
   // URLSearchParams  => we append the data on url with encode

   console.log(url1);
   console.log(url1.search);
   console.log(params);
  */


  const url = "URL_FOR_POST_REQUEST";

  var data = new URLSearchParams();

  for (const pair of new FormData(e.target)) {
    // console.log(pair); //it show key value pair

    data.append(pair[0], pair[1]); //pair[0] => key and pair[1] => value

  }

  fetch(url, {
    method: "post",
    body: data
  }).then(res => res.json())
    .then(data2 => console.log(data2));


  // If error is like this :-  Access to fetch at "url" from origin 'null' has been blocked by CORS policy means it is server problem or you have no access to post a request to that url (also it is url is incorrect)
}
