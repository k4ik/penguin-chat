<?php
$path = $_SERVER["REQUEST_URI"];

switch($path) {
    case "/":
        include "resources/views/welcome/home.html";
        break;
    case "/login":
        include "resources/views/auth/login.html";
        break;
    case "/signup":
        include "resources/views/auth/signup.html";
        break;
    default:
        include "resources/views/error/404.html";
        break;
}
