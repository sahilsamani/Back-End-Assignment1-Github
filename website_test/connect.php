 <?php 



$connection = mysqli_connect('localhost', 'root', 'secret');
if(!$connection) {
    die("Database connection failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'user');
if(!$select_db) {
   die("Database selection failed" . mysqli_error($connection));
}

 
?>
