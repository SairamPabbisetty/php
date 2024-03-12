<?php
    include("stdNavigate.html");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "21cse42";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT * FROM images");
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<img src="data:image/jpg;base64,/' . base64_encode($row["image"]) . '"/>';
        }
    }

    $conn->close();
?>