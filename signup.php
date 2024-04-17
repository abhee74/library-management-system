<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        #side_bar{
             background-color: whitesmoke;
             padding: 50px;
             width: 300px;
             height: 450px;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item">
                <a class ="nav-link "href="index.php">Admin Login</a>
            </li>
            <li class="nav-item">
                <a class ="nav-link "href="index.php">User Login</a>
            </li>
            <li class="nav-item">
                <a class ="nav-link "href="index.php">Register</a>
            </li>
        </ul>
        </div>
    </nav><tr></tr>
    <span><marquee>This LMS Library open at 7:00 am and close at 9:00 pm</marquee></span><br><br>
    <div class="row">
        <div class="col-md-4" id="side_bar">
            <h5>Library Timing</h5>
            <ul>
                <li>opening Timing: 7:00 AM</li>
                <li>closing Timing: 9:00 PM</li>
                <li>Sunday (CLOSED)</li>
            </ul>
            <h5>LMS Facilities Provided are:</h5>
            <ul>
                <li>Fully Furnished</li>
                <li>Free Wi-fi</li>
                <li>Daily NewsPaper</li>
                <li>Discussion Room</li>
                <li>RO Water</li>
                <li>Peacefull Environment</li>
            </ul>
        </div>
    <div class="col-md-8" id="main_content">
        <center><h3>User Registration Form</h3></center>
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Email ID:</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Mobile Number:</label>
                <input type="text" name="mobile" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="name">Address:</label>
                <textarea cols="40" rows="3" class="form-control" name="address"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    </div>
</body>
</html>