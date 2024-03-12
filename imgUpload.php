<?php
    include("stdNavigate.html");

    $img = $_REQUEST["image"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "21cse42";

    $conn = new mysqli($servername, $username, $password, $dbname);

    echo "Connected Successfully<br><br>";

    $sql = "insert into images values('$img')";

    if($conn->query($sql) === True) {
        header("Location: viewImages.php");
    } else {
        echo "Error during insertion ".$conn -> error."<br><br>";
    }

    $conn -> close();
?>