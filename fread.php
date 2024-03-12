<?php
    $fp = fopen("sample.txt", "r");
    // $fCont = fread($fp, 10);
    $fCont = fread($fp, filesize("sample.txt"));
    echo $fCont;
    fclose($fp);
?>