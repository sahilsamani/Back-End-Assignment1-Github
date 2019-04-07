<?php
session_start();
require_once('connect.php');
if(isset($_POST) & !empty($_POST)) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = md5($_POST['password']);
    
    $sql = "SELECT * FROM `loginuser` WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1) {
        $_SESSION['is_login'] = true;
        $_SESSION['username'] = $username;
        header("Location: workout_add.php");
    }else{
        echo "Invalid username/password";
    }
}





?>

<!DOCTYPE html>
<html>

<head>

    <title>FitBot</title>
    <!---<link rel="stylesheet" type="text/css" href="style.css">---->


    <link type="text/css" rel="stylesheet" href="css/mainstyle.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</head>

<body>




    <!-------------Header-------------------->

    <!--------This header is only for (login.php) page and not for index.php (Register) page------->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">FITBOT</a>
        <center>
            <h3 style="margin-left: 400px; color: white;">Please login below</h3>
        </center>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>



        </button>
        <div class="collapse navbar-collapse" href="workout_add.php" id="navbarNav">

        </div>
    </nav>


    <section class="container_imagelogin">

    </section>

    <section id="Login-Page-Welcome">
        <div class="container">
            <div class="Welcome-Text_login">

                <center>
                    <h3 style="margin-left: 1px; padding-top: 30px;"> Login and get started! </h3>
                </center>



            </div>

            <div class="container">

                <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div>
                <?php } ?>
                <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div>
                <?php } ?>
                <form class="form-signin" method="POST">
                    <h2 class="form-signin-heading" style="margin-left: 428px; padding-top: 42px;"></h2>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"></span>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>

                    <br>



                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

                    <br>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                    <a class="btn btn-lg btn-primary btn-block" href="index(register-page).php">Register</a>




                </form>



            </div>






        </div>

    </section>







</body>



</html>
