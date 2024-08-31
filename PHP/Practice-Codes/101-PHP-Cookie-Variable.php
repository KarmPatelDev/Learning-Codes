<?php

// setcookie(name, value, expire, path, domain, secure, httponly);
//expire => the time is in second => time() + seconds => from 1970
// path => which page to retrieve => for each page '/'
// domain => which domain or subdomain => www.abc.com => domain + subdomain => test.abc.com => only from subdomain
// secure => true => https only then set => false => http and https both we can set
// httponly => true => then only serverside language to we can access => false => we can access from client side using javascript or bb script

// $_COOKIE[name]

// Cookie set at the top

$cookie_name = "user";
$cookie_val = "karm";

setcookie($cookie_name, $cookie_val, time() + (3600), '/');

if(isset($_COOKIE[$cookie_name])){ // for check cookie set or not
    echo $_COOKIE[$cookie_name]; // not use single quotes
}



?>
