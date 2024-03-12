<?php 
    $target_dir = "C:/wamp/www/21761A0542/example/";
    $target_path = $target_dir.basename($_FILES["fileUpload"]["name"]);
    
    if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_path)) {
        echo "File uploaded";
    } else {
        echo "File not uploaded";
    }
?>