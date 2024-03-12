<?php
    include("stdNavigate.html");

    $mail = $_REQUEST["mail"];

    include("db.php");


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "delete from stdinfo where email='$mail'";
    
    if($conn->query($sql) === True) {
        header("Location: viewAll.php");
    } else {
        echo "Error during deletion ".$conn -> error."<br><br>";
    }

    $conn -> close();
?>