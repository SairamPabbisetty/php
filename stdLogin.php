<?php 
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "21cse42";

    $conn = new mysqli($servername, $username, $password, $database);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $sql = "select * from stdinfo where email = '$email' and password = '$pass'";

        $result = $conn->query($sql);

        if ($result === false) {
            echo "Error: " . $conn->error;
        } else {
            setcookie("email", $email, time() + 3600,"/", "", 0);
            header("Location: viewAll.php");
        }
    }
?>