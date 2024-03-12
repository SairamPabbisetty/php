<?php
    echo "Start of prog <br><br>";
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username, $password);

    if($conn -> connect_error) {
        die("Connection failed: ".$conn -> connect_error."<br><br>");
    }

    echo "Connected Successfully<br><br>";

    $sql = "create database 21cse42";

    if($conn->query($sql) === True) {
        echo "Database created successfully <br><br>";
    } else {
        echo "Error creating database ".$conn -> error."<br><br>";
    }

    $conn -> close();
?>