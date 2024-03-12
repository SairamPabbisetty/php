<?php
    include("stdNavigate.html");

    include("db.php");

    if (!isset($_COOKIE["email"])) {
        echo "<h1>Please Login</h1>";
        echo "<a href=stdLogin.html>Login</a>";
    } else {
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "SELECT * FROM stdinfo";
        $result = $conn->query($sql);
    
        if ($result === false) {
            echo "<h1>Error: " . $conn->error . "<h1>";
        } else {
    ?>
            <h1>Student Info</h1>
            <table border="5">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                    <th>Hobbies</th>
                    <th>DoB</th>
                    <th>Operations</th>
                </tr>
    <?php
                while($row = $result->fetch_assoc()) {
    ?>
                    <tr>
                        <td><?php echo $row["name"]?></td>
                        <td><?php echo $row["email"]?></td>
                        <td><?php echo $row["password"]?></td>
                        <td><?php echo $row["address"]?></td>
                        <td><?php echo $row["mobile"]?></td>
                        <td><?php echo $row["gender"]?></td>
                        <td><?php echo $row["hobbies"]?></td>
                        <td><?php echo $row["dob"]?></td>
                        <td>
                        <form action="temp.php" method="post">
                            <input type="hidden" name="mail" id="mail" value="<?php echo $row["email"]?>">
                            <button type="submit" Name="button" value="update">Update</button>
                            <button type="submit" Name="button" value="delete">Delete</button>
                        </form>
                        </td>
                    </tr>
    <?php
                }
    ?>
            </table>
    <?php
        }
    
        $conn->close();
    }

    
?>