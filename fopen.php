<?php
    $fp = fopen("sample.txt", "r");
    // echo fgets($fp); // reads a single line 
    while(!feof($fp)) {
        echo fgetc($fp);
    }
    fclose($fp);
?>