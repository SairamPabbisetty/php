<html>
    <head>
        <title>Retrieve cookie</title>
    </head>
    <body>
        <?php
            if(isset($_COOKIE["branch"]) && isset( $_COOKIE["code"])) {
                echo "The branch name ". $_COOKIE["branch"] ."<br>";
                echo "The branch code ". $_COOKIE["code"] ."<br>";
            } else {
                echo "Sorry";
            }
        ?>
    </body>
</html>