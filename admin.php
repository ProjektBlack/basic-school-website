<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tableStyle.css">
    <title>Administrators</title>
</head>
<body>
<div id="navbar">
            <img src="images/ravenbloomLogo.png" id="logo">
            <a href="index.php">HOME</a>
            <a href="adminForm.php">ADMINISTRATORS</a>
            <a href="studentForm.php">STUDENTS</a>
        </div>
    <div class="highlight" id="box2">
    <?php
            //uploads collected data from the form into the database
            // create a connection to the database
            $conn = mysqli_connect("localhost", "root", "", "ravenbloomdb");
            // check if it will connect
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
             }
            //initialization of variables to be inserted into database (from the form)
            $name =  $_REQUEST['name'];
            $username = $_REQUEST['username'];
            $password =  $_REQUEST['password'];
            $userlevel = $_REQUEST['userlevel'];
            //insertion into table
             $sql = "INSERT INTO admintable VALUES ('$name',
            '$username','$password','$userlevel')";    
            //returns feedback and information stored if storage was successful
            if(mysqli_query($conn, $sql)){
                echo "<h6>Data has been encoded successfully.</h6>";
            }
        ?>
    </div>
    <div id="tableContainer">
        <h3>Administrator Table</h3>
        <table>
        <tr>
        <th>Full Name</th>
        <th>Username</th>
        <th>Password</th>
        <th>User Level</th>
        </tr>
        <?php
            $sql = "SELECT name, username, password, userlevel FROM admintable";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row - also creates a new html row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["name"]. "</td><td>" . $row["username"] . "</td><td>"
            . $row["password"]. "</td><td>". $row["userlevel"]. "</td></tr>";
            }
            echo "</table>";
            } else { echo "0 results"; }
            $conn->close();
        ?>
        </table>
    </div>
    
</body>
</html>