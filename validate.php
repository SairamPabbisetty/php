<?php 
    include("header.html");

    $uname = $_POST["name"];
    $pass = $_POST["password"];

    if($_COOKIE["name"] == $uname && $_COOKIE["password"] == $pass) {
        echo "Login Successful";
    } else {
        echo "Invalid Login";
    }
?>