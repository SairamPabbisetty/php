<?php
    include("stdNavigate.html");

    $mail = $_REQUEST["mail"];

    include("db.php");


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM stdinfo WHERE email='$mail'";
    $result = $conn->query($sql);

    if ($result === false) {
        echo "<h1>Error: " . $conn->error . "<h1>";
    } else {
        $row = $result->fetch_assoc()
?>
        <h1>Student Update</h1>
        <form action="dbUpdate.php" method="post">
            <label for="">Name</label>
            <input type="text" name="name" value="<?php echo $row["name"]?>"><br><br>
            <label for="">Email</label>
            <input type="text" name="email" value="<?php echo $row["email"]?>" readonly><br><br>
            <label for="">Password</label>
            <input type="password" name="password" value="<?php echo $row["password"]?>"><br><br>
            <label for="">Address</label>
            <input type="text" name="address" value="<?php echo $row["address"]?>"><br><br>
            <label for="">Mobile</label>
            <input type="text" name="mobile" value="<?php echo $row["mobile"]?>"><br><br>
            <label for="">Gender</label>
            <input type="text" name="gender" value="<?php echo $row["gender"]?>"><br><br>
            <label for="">Hobbies</label>
            <input type="text" name="hobbies" value="<?php echo $row["hobbies"]?>"><br><br>
            <label for="">DoB</label>
            <input type="text" name="dob" value="<?php echo $row["dob"]?>"><br><br>
            <input type="submit" value="Update">
        </form>
<?php
    }

    $conn->close();
?>