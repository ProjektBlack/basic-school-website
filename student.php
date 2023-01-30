<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tableStyle.css">
    <title>Students Table</title>
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
            $studid =  $_REQUEST['studid'];
            $last = $_REQUEST['last'];
            $first = $_REQUEST['first'];
            $middle =  $_REQUEST['middle'];
            $course = $_REQUEST['course'];
            $section = $_REQUEST['section'];
            //insertion into table
             $sql = "INSERT INTO studenttable VALUES ('$studid',
            '$last','$first','$middle','$course','$first')";    
            //returns feedback and information stored if storage was successful
            if(mysqli_query($conn, $sql)){
                echo "<h3>Data has been encoded successfully.</h3>";
            }
        ?>
    </div>
     <div id="tableContainer">
        <h3>Student Table</h3>
        <table>
        <tr>
        <th>Student ID</th>
        <th>Last Name</th>
        <th>First</th>
        <th>Middle</th>
        <th>Course</th>
        <th>Section</th>
        </tr>
        <?php
            $sql = "SELECT studid, last, first, middle, course, section FROM studenttable";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row - also creates a new html row
            while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["studid"]. "</td><td>" . $row["last"] . "</td><td>"
            . $row["first"]. "</td><td>". $row["middle"]. "</td><td>". $row["course"]. "</td><td>". $row["section"]. "</td></tr>";
            }
            echo "</table>";
            } else { echo "0 results"; }
            $conn->close();
        ?>
        </table>
    </div>
</body>
</html>