<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formstyle.css">
    <title>Administrator Form</title>
</head>
<body>
<div id="navbar">
            <img src="images/ravenbloomLogo.png" id="logo">
            <a href="index.php">HOME</a>
            <a href="adminForm.php">ADMINISTRATORS</a>
            <a href="studentForm.php">STUDENTS</a>
    </div>
    <div id="tableContainer">
    <form action="admin.php" method="post">
        <div id="form">
            <h2>Administrator Form</h2>
            <div class="inputContainer">
                <p class="labels">Full Name</p>
                <p class ="guide">Please enter your full name below.</p>
                <input id="name" name="name">
            </div>
            <div class="inputContainer">
                <p class="labels">Username</p>
                <p class ="guide">Please enter your username.</p>
                <input id="username" name="username">
            </div>
            <div class="inputContainer">
                <p class="labels">Password</p>
                <p class ="guide">Enter your password.</p>
                <input id="password" name="password" type="password">
            </div>
            <div class="inputContainer">
                <p class="labels">User Level</p>
                <p class ="guide">Enter your User Level assigned by the Conservatory.</p>
                <input id="userlevel" name="userlevel">
            </div>
            <button id="submit" type="submit" value="submit">Submit</button>
        </div>
    </form>
    </div>
    
</body>
</html>