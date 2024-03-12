<?php
    include("stdNavigate.html");
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $pass = $_REQUEST["password"];
    $address = $_REQUEST["address"];
    $mobile = $_REQUEST["mobile"];
    $gender = $_REQUEST["gender"];
    $hobbies = $_REQUEST["hobbies"];
    $dob = $_REQUEST["dob"];

    echo "Name : $name"."<br>";
    echo "Email : $email"."<br>";
    echo "Password : $pass"."<br>";
    echo "Address : $address"."<br>";
    echo "Mobile : $mobile"."<br>";
    echo "Gender : $gender"."<br>";
    echo "Hobbies : $hobbies"."<br>";
    echo "DoB : $dob"."<br><br>";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "21cse42";

    $conn = new mysqli($servername, $username, $password, $dbname);

    echo "Connected Successfully<br><br>";

    $sql = "insert into stdinfo values('$name', '$email', '$pass', '$address', '$mobile', '$gender', '$hobbies', '$dob')";

    if($conn->query($sql) === True) {
        header("Location: viewAll.php");
    } else {
        echo "Error during insertion ".$conn -> error."<br><br>";
    }

    $conn -> close();
?>