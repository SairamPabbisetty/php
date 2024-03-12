<?php
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];

    echo "Name : $name"."<br>";
    echo "Email : $email"."<br>";

    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    if($conn -> connect_error) {
        die("Connection failed: ".$conn -> connect_error);
    }

    echo "Connected Successfully";
    $conn -> close();
?>