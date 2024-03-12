<?php 
    setcookie("email", $_COOKIE["email"], time() - 3600,"/", "", 0);
    header("Location: stdLogin.html");
?>