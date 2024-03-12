<?php 
    $fp = unlink("sample1.txt");
    if($fp) {
        echo "File deleted";
    } else {
        echo "File not deleted";
    }
?>