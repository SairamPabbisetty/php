<?php
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $res = 0;

    $op = $_POST["op"];

    switch($op) {
        case '+' :
            $res = $n1 + $n2;
            break;
        case '-' :
            $res = $n1 - $n2;
            break;
        case '*' :
            $res = $n1 * $n2;
            break;
        case '/' :
            $res = $n1 / $n2;
            break;
    }

    echo "<h3>Result: ".$res."</h3>";
?>