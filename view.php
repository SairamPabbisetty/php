<?php
    include("stdNavigate.html");

    $mail = $_POST["viewMail"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "21cse42";

    $conn = new mysqli($servername, $username, $password, $database);


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
        <h1>Updated Student Info</h1>
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
            </tr>
            <tr>
                <td><?php echo $row["name"]?></td>
                <td><?php echo $row["email"]?></td>
                <td><?php echo $row["password"]?></td>
                <td><?php echo $row["address"]?></td>
                <td><?php echo $row["mobile"]?></td>
                <td><?php echo $row["gender"]?></td>
                <td><?php echo $row["hobbies"]?></td>
                <td><?php echo $row["dob"]?></td>
            </tr>
        </table>
<?php
    }

    $conn->close();
?>