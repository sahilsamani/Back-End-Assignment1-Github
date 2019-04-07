<?php 
// this code will only execute after the submit button is clicked

	
    // include the config file that we created before
    require "./configcontent.php";
    require "./common-part2.php";
    
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

?>


<?php include "common/nav.php"; ?>


<section class="container_image3">


</section>


<section id="Index-Page-Welcome3">
    <div class="container-workout-find">
        <div class="Welcome-Text_workout_find">

            <center>
                <h1> Edit your workouts! </h1>
            </center>





        </div>




        <div class="container">
            <div class="row" style="margin-left: 388px; margin-top: 30px;">

                <center>
                    <h2>All your workouts!</h2>
                </center>

            </div>





            <div class="row allworks" style="margin-left: 190px;">

                <!-- This is a loop, which will loop through each result in the array -->
                <?php foreach($result as $row) { ?>

                <div class="six columns" style="padding: 23px">
                    <div class="inner">
                        <h6 class="title" style="font-weight: bold;">Shoulders</h6>
                        <h2><?php echo $row['shoulders']; ?></h2>

                        <h6 class="title" style="font-weight: bold;">Chest</h6>
                        <p>
                            <?php echo $row['chest']; ?>
                        </p>

                        <h6 class="title" style="font-weight: bold;">Back</h6>
                        <p>
                            <?php echo $row['back']; ?>
                        </p>

                        <h6 class="title" style="font-weight: bold;">Biceps</h6>
                        <p>
                            <?php echo $row['biceps']; ?>
                        </p>

                        <h6 class="title" style="font-weight: bold;">Triceps</h6>
                        <p>
                            <?php echo $row['triceps']; ?>
                        </p>

                        <h6 class="title" style="font-weight: bold;">Abs</h6>
                        <p>
                            <?php echo $row['abs']; ?>
                        </p>
                        <p>
                            <a href='update-work.php?id=<?php echo $row['id']; ?>'>Edit</a>
                        </p>



                        <?php // this willoutput all the data from the array
            //echo '<pre>'; var_dump($row); ?>

                    </div>

                </div>
                <?php }; //close the foreach 
                                               
                ?>

            </div>



        </div>

</section>
