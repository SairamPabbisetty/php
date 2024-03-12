<?php 
    $file_url = "C:/wamp/www/21761A0542/sample.txt";
    header("Content-Type: application/octet-stream");
    header("Content-Transfer-Encoding: utf-8");
    header("Content-disposition: attachment; filename=\"".basename($file_url)."\"");
    readfile($file_url);
?>