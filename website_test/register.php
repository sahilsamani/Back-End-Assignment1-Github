<?php
require_once('connect.php');
if(isset($_POST) & !empty($_POST)) {
    echo $username = $_POST['username'];
    echo "<br />";
    echo $email = $_POST['email'];
    echo "<br />";
    echo $password = $_POST['password'];
}


?>

<html>

<head>

    <title>User Registration in PHP and MYSQL</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>
    <div class="container">

        <form class="form-signin" method="POST">
            <h2 class="form-signin-heading">Please Register</h2>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input type="text" name="username" class="form-control" placeholder="Username" required>
            </div>
            <label for="inputEmail" class="sr-only">Email Address</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            <a class="btn btn-lg btn-primary btn-block" href="login.php">Login</a>
        </form>



    </div>



</body>










</html>
