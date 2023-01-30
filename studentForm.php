<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyle.css">
    <title>Student Form</title>
</head>
<body>
<div id="navbar">
            <img src="images/ravenbloomLogo.png" id="logo">
            <a href="index.php">HOME</a>
            <a href="adminForm.php">ADMINISTRATORS</a>
            <a href="studentForm.php">STUDENTS</a>
    </div>
    <div id="tableContainer">
    <form action="student.php" method="post">
        <div id="form">
            <h2>Student Form</h2>
            <div class="inputContainer">
                <p class="labels">Student ID</p>
                <p class ="guide">Please enter your student ID below.</p>
                <input id="studid" name="studid">
            </div>
            <div class="inputContainer">
                <p class="labels">Last Name</p>
                <p class ="guide">Please enter your last name.</p>
                <input id="last" name="last">
            </div>
            <div class="inputContainer">
                <p class="labels">First Name</p>
                <p class ="guide">Enter your first name.</p>
                <input id="first" name="first">
            </div>
            <div class="inputContainer">
                <p class="labels">Middle Name</p>
                <p class ="guide">Enter your middle name.</p>
                <input id="middle" name="middle" type="middle">
            </div>
            <div class="inputContainer">
                <p class="labels">Course</p>
                <p class ="guide">Enter your course.</p>
                <input id="course" name="course">
            </div>
            <div class="inputContainer">
                <p class="labels">Section</p>
                <p class ="guide">Enter your section assigned by the Conservatory.</p>
                <input id="section" name="section">
            </div>
            <button id="submit" type="submit" value="submit">Submit</button>
        </div>
    </form>
    </div>
</body>
</html>