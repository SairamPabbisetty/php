<?php 
    include("header.html");

    setcookie("name","lbrce", time() - 3600,"/", "", 0);
    setcookie("password","cse", time() - 3600,"/", "", 0);

    echo "Logout Successful";
?>