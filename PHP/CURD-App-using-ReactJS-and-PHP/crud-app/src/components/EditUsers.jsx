import {  useEffect, useState } from "react";
import axios from "axios";
import { useNavigate, useParams } from "react-router-dom";

export default function EditUsers(){

    const navigate = useNavigate();

    const[input, setInputs] = useState([]);

    const {id} = useParams();

    useEffect(() => {
        getUsers();
        // eslint-disable-next-line react-hooks/exhaustive-deps
    }, []);

    function getUsers() {
        axios.put(`http://localhost/users/single-record.php?id=${id}`).then(function(response) {
            console.log(response.data);
            setInputs(response.data);
        });
    }

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
        
        axios.post(`http://localhost/users/edit-record.php`, input).then(function(response){
            // console.log(response.data);
            navigate('/');
            showStatus(response.data['status'], response.data['message']);
        });

    }

    return (
        <div id="table-form">
        <h1>Edit User</h1>

        <form onSubmit={handleSubmit}>

          <div>
          <label>Name: </label>
          <input type="text" name="name" value={input.name} onChange={handleChange} required/>
          <input type="text" name="id" value={input.id} onChange={handleChange} required hidden/>
          </div>

          <div>
          <label>Email: </label>
          <input type="email" name="email" value={input.email} onChange={handleChange} required/>
          </div>

          <div>
          <label>Mobile No: </label>
          <input type="text" maxLength="10" name="mobileno" value={input.mobileno} onChange={handleChange} required/>
          </div>

          <div>
          <label>Age: </label>
          <input type="number" maxLength="3" name="age" value={input.age} onChange={handleChange} required/>
          </div>

          <div>
          <label>City: </label>
          <input type="text" name="city" value={input.city} onChange={handleChange} required/>
          </div>

          <button id="save-button">Submit</button>

        </form>
        </div>
    );
}
