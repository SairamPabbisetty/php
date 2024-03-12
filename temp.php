<?php 
    $mail = $_POST["mail"];
    $button = $_POST["button"];

    if($button === "update") {
        include("update.php");
    } else if($button === "delete") {
        include("delete.php");
    }
?>