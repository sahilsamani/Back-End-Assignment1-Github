<?php include "configuser.php"; ?>

<?php 



$connection = mysqli_connect($host, $username, $password);
if(!$connection) {
    die("The Database Connection has Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, $dbname);
if(!$select_db) {
   die("The Database Selection has Failed" . mysqli_error($connection));
}

 
?>
