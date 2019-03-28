<?php 
// this code will only execute after the submit button is clicked
if (isset($_POST['submit'])) {
	
    // include the config file that we created before
    require "./config.php"; 
    
    // this is called a try/catch statement 
	try {
        // FIRST: Connect to the database
        $connection = new PDO($dsn, $username, $password, $options);
		
        // SECOND: Get the contents of the form and store it in an array
        $new_work = array( 
            "workout_type" => $_POST['workout_type'],
            "shoulders" => $_POST['shoulders'], 
            "chest" => $_POST['chest'],
            "back" => $_POST['back'],
            "biceps" => $_POST['biceps'], 
            "triceps" => $_POST['triceps'],
            "abs" => $_POST['abs'], 
        );
        
        // THIRD: Turn the array into a SQL statement
        $sql = "INSERT INTO works (workout_type, shoulders, chest, back, biceps, triceps, abs) VALUES (:workout_type, :shoulders, :chest, :back, :biceps, :triceps, :abs)";        
        
        // FOURTH: Now write the SQL to the database
        $statement = $connection->prepare($sql);
        $statement->execute($new_work);
	} catch(PDOException $error) {
        // if there is an error, tell us what it is
		echo $sql . "<br>" . $error->getMessage();
	}	
}
?>






<?php include "common/nav.php"; ?>


<section class="container_image2">


</section>

<section id="Add-Page-Welcome">
    <div class="containeradd">
        <div class="Welcome-Text_workout_add">

            <center>
                <h1> Customize your workouts! </h1>
            </center>

            <center>
                <p>To achieve the best version of yourself</p>
            </center>






        </div>



    </div>

</section>





<!-------------Main Content-------------------->


<section id="main-content-add">


    <div class="container">
        <div class="row">
            <div class="col">
                <h3 style="padding: 20px;">Full Body Workouts</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="model-pic1">
                    <!--                    <img src="images/bodybuilder_model.jpg" width="500" height="500" style="margin-right: 709px;">-->
                </div>

                <h5 style="padding: 30px;">Please add your workouts</h4>

                    <form method="post">
                        <label for="workout_type"></label>

                        <input type="hidden" name="workout_type" id="">

                        Shoulders: <input type="text" name="shoulders" id="Shoulder" align="">
                        <br>

                        Chest: <input type="text" name="chest" id="Chest">
                        <br>

                        Back: <input type="text" name="back" id="Back">
                        <br>

                        Biceps: <input type="text" name="biceps" id="Bicep">
                        <br>

                        Triceps: <input type="text" name="triceps" id="Tricep">
                        <br>


                        Abs: <input type="text" name="abs" id="Abs">
                        <br>

                        <div class="submit">
                            <input type="submit" name="submit" value="Submit">
                        </div>

                    </form>
            </div>

            <!----   <div class="col">
                <div class="model-pic2x">
                    <img src="images/bodybuilder-chest-model.JPG" width="130" height="70">
                </div>
                <div class="chestx">
                    <h4>Chest</h4>

                    <form method="post">
                        <label for="Chest"></label>
                        <input type="text" name="workout_type" id="Chest" value="che">

                        <input type="text" name="shoulders" id="Shoulder">
                        <br>
                        <input type="text" name="chest" id="Chest">
                        <br>
                        <input type="text" name="back" id="Back">
                        <input type="text" name="biceps" id="Bicep">
                        <input type="text" name="triceps" id="Tricep">

                        <input type="text" name="abs" id="Abs">

                        <div class="submit">
                            <input type="submit" name="submit" value="Submit">
                        </div>

                    </form>
                </div>
            </div>

            <div class="col">


                <div class="model-pic3x">
                    <img src="images/bodybuilder-backmodel.jpg" width="100" height="70">

                </div>

                <div class="backx">
                    <h4>Back</h4>

                    <form method="post">
                        <label for="Back"></label>
                        <input type="text" name="workout_type" id="Back" value="bac">
                        <input type="text" name="shoulders" id="Shoulder">
                        <br>
                        <input type="text" name="chest" id="Chest">
                        <br>
                        <input type="text" name="back" id="Back">
                        <input type="text" name="biceps" id="Bicep">
                        <input type="text" name="triceps" id="Tricep">

                        <input type="text" name="abs" id="Abs">

                        <div class="submit">
                            <input type="submit" name="submit" value="Submit">
                        </div>

                    </form>

                </div>
            </div>



        </div>

        <div class="row">
            <div class="col">
                <div class="model-pic1">
                    <img src="images/bodybuilder-shouldermodel.JPG" width="130" height="70">
                </div>

                <h4>Biceps</h4>

                <form method="post">
                    <label for="Bicep"></label>
                    <input type="text" name="workout_type" id="Bicep" value="bic">
                    <input type="text" name="shoulders" id="Shoulder">
                    <br>
                    <input type="text" name="chest" id="Chest">
                    <br>
                    <input type="text" name="back" id="Back">
                    <input type="text" name="biceps" id="Bicep">
                    <input type="text" name="triceps" id="Tricep">

                    <input type="text" name="abs" id="Abs">

                    <div class="submit">
                        <input type="submit" name="submit" value="Submit">
                    </div>

                </form>
            </div>

            <div class="col">
                <div class="model-pic2x">
                    <img src="images/bodybuilder-chest-model.JPG" width="130" height="70">
                </div>
                <div class="chestx">
                    <h4>Triceps</h4>

                    <form method="post">
                        <label for="Tricep"></label>
                        <input type="text" name="workout_type" id="Tricep" value="tri">
                        <input type="text" name="shoulders" id="Shoulder">
                        <br>
                        <input type="text" name="chest" id="Chest">
                        <br>
                        <input type="text" name="back" id="Back">
                        <input type="text" name="biceps" id="Bicep">
                        <input type="text" name="triceps" id="Tricep">

                        <input type="text" name="abs" id="Abs">

                        <div class="submit">
                            <input type="submit" name="submit" value="Submit">
                        </div>

                    </form>
                </div>
            </div>

            <div class="col">


                <div class="model-pic3x">
                    <img src="images/bodybuilder-absmodel.jpg" width="100" height="70">

                </div>

                <div class="absx">
                    <h4>Abs</h4>
                    <form method="post">
                        <label for="Abs"></label>
                        <input type="text" name="workout_type" id="Abs" value="abs">
                        <input type="text" name="shoulders" id="Shoulder">
                        <br>
                        <input type="text" name="chest" id="Chest">
                        <br>
                        <input type="text" name="back" id="Back">
                        <input type="text" name="biceps" id="Bicep">
                        <input type="text" name="triceps" id="Tricep">

                        <input type="text" name="abs" id="Abs">

                        <div class="submit">
                            <input type="submit" name="submit" value="Submit">
                        </div>

                    </form>

                </div>
            </div>   ---->



        </div>



    </div>







    </body>



    </html>
