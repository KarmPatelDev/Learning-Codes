<?php

//it is like a tag to know the people(it store small information in user browser)

// Cookies(it stores in browser easily) | Sessions (it is sensitive so it is store in server and to access the parameters(values) store in server they give a session cookie to us.)
// we store a non-sensitive information in cookies

/*
syntax to set a cookie
category -> cookie name
Books -> value
time() + 86400 -> expire time of cookie in seconds
/ -> which domains to set cookie(/ for throughout the website)
*/
// echo time(); it read the time from 1 jan 1970

setcookie("category", "Books", time() + 86400, "/");

echo "The Cookie is set<br>";

?>