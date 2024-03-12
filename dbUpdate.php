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

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "21cse42";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "update stdinfo set name='$name', password='$pass', address='$address', mobile='$mobile', gender='$gender', hobbies='$hobbies', dob='$dob' where email='$email'";

    if($conn->query($sql) === True) {
        header("Location: viewAll.php");
    } else {
        echo "Error during updation ".$conn -> error."<br><br>";
    }

    $conn -> close();
?>