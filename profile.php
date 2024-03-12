<?php 
    include("header.html");

    $name = "";

    if(isset($_COOKIE["name"]) && isset($_COOKIE["password"])) {
        $name = $_COOKIE["name"];
    }

    if($name != "") {
        echo "Profile Page <br>";
        echo "Name : ". $name;
    } else {
        echo "Please Login";
    }
?>