<?php 

// this code will only execute after the submit button is clicked
if (isset($_POST['submit'])) {
	
    // include the config file that we created before
    require "./configcontent.php"; 
    
    // this is called a try/catch statement 
	try {
        // FIRST: Connect to the database
        $connection = new PDO($dsn, $username, $password, $options);
		
        // SECOND: Create the SQL 
        $sql = "SELECT * FROM works";
        
        // THIRD: Prepare the SQL
        $statement = $connection->prepare($sql);
        $statement->execute();
        
        // FOURTH: Put it into a $result object that we can access in the page
        $result = $statement->fetchAll();

	} catch(PDOException $error) {
        // if there is an error, tell us what it is
		echo $sql . "<br>" . $error->getMessage();
	}	
}
?>



<?php include "common/nav.php"; ?>




<section class="container_image3">


</section>


<section id="Index-Page-Welcome3">
    <div class="container-workout-edit">
        <div class="Welcome-Text_workout_edit">

            <center>
                <h1> Things change overtime, so do workouts </h1>
            </center>



        </div>



    </div>

</section>
