import { useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";

export default function CreateUsers(){

    const navigate = useNavigate();

    const[input, setInputs] = useState();

    function showStatus(status, message){
        var message_box;
        if(status === 0){
            message_box = document.getElementById('error-message');
        }
        else{
            message_box = document.getElementById('success-message');
        }
    
        message_box.innerHTML = message;
        message_box.style.display = "block";
        setTimeout(function(){
            message_box.style.display = "none";
        }, 3000);
    }

    const handleChange = (event) => {

        const name = event.target.name;
        const value = event.target.value;

        setInputs(values => ({...values, [name]: value}));

    }

    const handleSubmit = (event) => {
        event.preventDefault();
        
        axios.post('http://localhost/users/insert-record.php', input).then(function(response){
            // console.log(response.data);
            navigate('/');
            showStatus(response.data['status'], response.data['message']);
        });
    }

    return (
        <div id="table-form">
        <h1>Create User</h1>

        <form onSubmit={handleSubmit}>

          <div>
          <label>Name: </label>
          <input type="text" name="name" onChange={handleChange} required/>
          </div>

          <div>
          <label>Email: </label>
          <input type="email" name="email" onChange={handleChange} required/>
          </div>

          <div>
          <label>Mobile No: </label>
          <input type="text" maxLength="10" name="mobileno" onChange={handleChange} required/>
          </div>

          <div>
          <label>Age: </label>
          <input type="number" maxLength="3" name="age" onChange={handleChange} required/>
          </div>

          <div>
          <label>City: </label>
          <input type="text" name="city" onChange={handleChange} required/>
          </div>

          <button id="save-button">Submit</button>

        </form>
        </div>
    );
}
