<?php
$path = $_SERVER["REQUEST_URI"];

switch($path) {
    case "/":
        include "resources/views/welcome/home.php";
        break;
    case "/login":
        include "resources/views/auth/login.php";
        break;
    case "/signup":
        include "resources/views/auth/signup.php";
        break;
    default:
        include "resources/views/error/404.php";
        break;
}
