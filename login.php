<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php 
        include("header.html");
    ?>
    
    <form action="validate.php" method="post">
        <label for="name">User Name : </label>
        <input type="text" name="name" id="name">
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="pasword">
        <br><br>
        <input type="submit" name="submit" id="submit">
        <input type="reset" name="reset" id="reset">
    </form>
</body>
</html>