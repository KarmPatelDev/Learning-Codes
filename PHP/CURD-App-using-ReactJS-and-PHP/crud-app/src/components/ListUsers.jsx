import axios from "axios";
import { useEffect, useState } from "react";
import {Link} from 'react-router-dom';

export default function ListUsers(){
    
    const [users, setUsers] = useState([]);

    useEffect(() => {
        getUsers();
    }, []);

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

    function getUsers(){
        axios.get('http://localhost/users/select-records.php').then(function(response){
        //    console.log(response.data);
           setUsers(response.data);
    });
    }
    
    const deleteUser = (id) => {
            axios.delete(`http://localhost/users/delete-record.php?id=${id}`).then(function(response){
           getUsers();
           showStatus(response.data['status'], response.data['message']);
        });
    }

    return (
        <div id="table-list">
        <h1>List Of Users</h1>
        <div id="table-content">
        <table  border="1">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Age</th>
                    <th>City</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {users.map((user, key) => 
                  <tr key={key}>
                    <td>{user.name}</td>
                    <td>{user.email}</td>
                    <td>{user.mobileno}</td>
                    <td>{user.age}</td>
                    <td>{user.city}</td>
                    <td>
                        <Link to={`users/${user.id}/edit`} className="edit-btn">Edit</Link>
                        <button className="delete-btn" onClick={() => { if (window.confirm('Are you sure to delete?')) deleteUser(user.id) } }>Delete</button>
                    </td>
                 </tr>
                )}
            </tbody>
        </table>
        </div>
        </div>
    );
}
