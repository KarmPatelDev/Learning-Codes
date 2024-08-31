import React from 'react';
import {BrowserRouter, Routes, Route, Link} from 'react-router-dom';
import ListUsers from "./ListUsers";
import CreateUsers from "./CreateUsers";
import EditUsers from "./EditUsers";

export default function NavBar(){

    const toggleNavbar = () => {
        let navActive = document.getElementsByTagName("nav")[0];
        navActive.classList.toggle("active");
    }

    return(
    <BrowserRouter>
    <header id="menu" className="menu">
        <nav>
            <h3 className="logo">CRUD APP</h3>
            <ul>
                <li><Link to="/">Home</Link></li>
                <li><Link to="/">List Users</Link></li>
                <li><Link to="users/create">Create Users</Link></li>
            </ul>
            <div onClick={toggleNavbar} className="menu-btns">
                <i class="fa-solid fa-bars-staggered menu-btn"></i>
                <i class="fa-solid fa-xmark close-btn"></i>
            </div>
        </nav>
    </header>
    <Routes>
           <Route index element={<ListUsers/>}/>
           <Route path="users/create" element={<CreateUsers/>}/>
           <Route path="users/:id/edit" element={<EditUsers/>}/>
    </Routes>
    </BrowserRouter>
    );
}