<?php 
    // $fp = fopen("sample2.txt", "w");
    $fp = fopen("sample2.txt", "a+");
    // fwrite($fp, "Hello 2 ");
    fwrite($fp, "Hello 2 ");
    echo "File created";

    fseek($fp, 0);
    $fCont = fread($fp, filesize("sample2.txt"));
    echo $fCont;

    fclose($fp);
?>