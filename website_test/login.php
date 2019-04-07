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




    <?php include "common/nav.php"; ?>


    <section class="container_imagelogin">

    </section>

    <section id="Login-Page-Welcome">
        <div class="container">
            <div class="Welcome-Text_login">

                <!--
                <center>
                    <h1> Dare to be great </h1>
                </center>

                <center>
                    <p>Maximum results in minimum time</p>
                </center>
-->




            </div>

            <div class="container">

                <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div>
                <?php } ?>
                <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div>
                <?php } ?>
                <form class="form-signin" method="POST">
                    <h2 class="form-signin-heading" style="margin-left: 428px; padding-top: 8px;">Please Login</h2>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"></span>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>

                    <br>



                    <br>

                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

                    <br>

                    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                    <a class="btn btn-lg btn-primary btn-block" href="index.php">Register</a>


                </form>



            </div>






        </div>

    </section>







</body>



</html>
