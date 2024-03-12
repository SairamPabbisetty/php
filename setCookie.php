<?php 
    setcookie("name", "lbrce", time() + 3600,"/", "", 0);
    setcookie("password","cse", time() + 3600,"/", "", 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
        echo "The cookies created for branch and code";
    ?>
</body>
</html>