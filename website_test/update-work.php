<?php 

    // include the config file that we created last week
    require "./config.php";
    require "./common-part2.php";

// run when submit button is clicked
    if (isset($_POST['submit'])) {
        try {
            $connection = new PDO($dsn, $username, $password, $options);  
            
            //grab elements from form and set as varaible
    $work =[
      "id"         => $_POST['id'],
      "shoulders" => $_POST['shoulders'],
      "chest"  => $_POST['chest'],
      "back"   => $_POST['back'],
      "biceps"   => $_POST['biceps'],
      "triceps"   => $_POST['triceps'],
      "abs"   => $_POST['abs'],
      
    ];

    // create SQL statement
    $sql = "UPDATE `works` 
            SET id = :id, 
                shoulders = :shoulders, 
                chest = :chest, 
                back = :back, 
                biceps = :biceps,
                triceps = :triceps,
                abs = :abs
            WHERE id = :id";

    //prepare sql statement
    $statement = $connection->prepare($sql);

    //execute sql statement
    $statement->execute($work);


            
            } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }

    //simple if/else statement to check if the id is available
    if (isset($_GET['id'])) {
        //yes the id exists 
        
         try {
            // standard db connection
            $connection = new PDO($dsn, $username, $password, $options);
            
            // set if as variable
            $id = $_GET['id'];
            
            //select statement to get the right data
            $sql = "SELECT * FROM works WHERE id = :id";
            
            // prepare the connection
            $statement = $connection->prepare($sql);
            
            //bind the id to the PDO id
            $statement->bindValue(':id', $id);
            
            // now execute the statement
            $statement->execute();
            
            // attach the sql statement to the new work variable so we can access it in the form
            $work = $statement->fetch(PDO::FETCH_ASSOC);
            
        } catch(PDOExcpetion $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
        
        // quickly show the id on the page
        echo $_GET['id'];
        
    } else {
        // no id, show error
        echo "No id - something went wrong";
        //exit;
    }
?>

<form method="post">

    <label for="id">ID</label>
    <input type="text" name="id" id="id" value="<?php echo escape($work['id']); ?>">

    <label for="shoulders">Shoulders</label>
    <input type="text" name="shoulders" id="shoulders" value="<?php echo escape ($work['shoulders']); ?>">

    <label for="chest">Chest</label>
    <input type="text" name="chest" id="chest" value="<?php echo escape ($work['chest']); ?>">

    <label for="back">Back</label>
    <input type="text" name="back" id="back" value="<?php echo escape ($work['back']); ?>">

    <label for="biceps">Biceps</label>
    <input type="text" name="biceps" id="biceps" value="<?php echo escape ($work['biceps']); ?>">

    <label for="triceps">Triceps</label>
    <input type="text" name="triceps" id="triceps" value="<?php echo escape ($work['triceps']); ?>">

    <label for="abs">Abs</label>
    <input type="text" name="abs" id="abs" value="<?php echo escape ($work['abs']); ?>">

    <input type="submit" name="submit" value="Save">

</form>
