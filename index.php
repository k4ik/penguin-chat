<?php
use Controller\AuthController;
include "/config/database.php";
$path = $_SERVER["REQUEST_URI"];

switch($path) {
    case "/":
        include "resources/views/welcome/welcome.php";
        break;
    case "/chat":
        include "resources/views/chat/chat.php";
        break;
    case "/credits":
        include "resources/views/credits/credits.php";
        break;

    case "/login":
        $auth = new AuthController($conn);
        $auth->auth();
        break;

    default:
        include "resources/views/error/404.php";
        break;
}
