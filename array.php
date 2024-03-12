<?php
    $arr = array("ab",2,"ab");
    var_dump($arr);

    for( $i = 0; $i < sizeof($arr); $i++ ) {
        echo $arr[ $i ] ." ";
    }
?>